<?php
    /* Lead Generator Controller
     *
     * This class should be instantiated to provide access
     * to the model and view classes of this tool.
     *
     * In particular, the controller will slurp the $_REQUEST field
     * for a verb to invoke, along with the adjectives for that verb.
     * 
     * To that end, we will include the model class and the view class.
     */

     require_once('lead_generator_contact.php');
     require_once('lead_generator_editor.php');
     require_once('lead_generator_revision.php');
     require_once('lead_generator_model.php');
     require_once('lead_generator_info.php');
     require_once('lead_generator_categories.php');
     require_once('lead_generator_approval.php');
         
     class lead_generator {
     	var $_signature;
     	var $_msg;
     	var $_editor_email;
     	var $_company_name;
     	
        var $_id;
        var $_vendor_id;
        var $_status;
        var $_slug;
        var $_size;
        var $_magazines;
        var $_year;
        var $_categories;
        var $_edited;
        var $_input;

        var $contact;
        var $editor;
        var $revisions;
        var $current;

        var $_storage;
        var $_vendor;

        var $_uriAppend;
        var $_showRev;


        function lead_generator() { 
            $this->_storage = new lead_generator_model();
        }

        function id() { return($this->_id); }
        function vendorID() { return($this->_vendor_id); }
        function status() { return($this->_status); }
        function year() { return($this->_year); }
        function slug() { return($this->_slug); }
        function size() { return($this->_size); }
        function magazines() {
            if(is_array($this->_magazines)) {
                return($this->_magazines);
            } else {
                return(array());
            }
        }

        function categories() { 
            if(is_array($this->_categories)) {
                return($this->_categories); 
            } else {
                return(array());
            }
        }

        function edited() { 
            if(isset($this->_edited)) {
                return($this->_edited); 
            }
        }

        function input() { 
            // returns either date set or current 
            return($this->_input); 
        }

        function setVendorID($id) { 
            $this->_vendor_id = $id;
        }
        function setStatus($status) { 
            $this->_status = $status;
        }

        function genSlug() { }

        function setSize($size) { 
            $this->_size = $size;
        }

        function setCategories($cat) { 
            if(!is_array($cat)) return(FALSE);
            $this->_categories = $cat;
        }

        function setMagazines($mags) {
            if(!is_array($mags)) return(FALSE);
            $this->_magazines = $mags;
        }

        function setYear($year) {
            $this->_year = $year;
        }

        function currentLGYear() {
            return((date("m") > 5) ? date("Y") + 1 : date("Y"));
        }

        /* save() {{{ */
        function save() {
            if(is_null($this->_id)) return(FALSE);

            $this->contact->save();
            $this->editor->save();

            if($this->_storage->fetch($this->_id)) {
                $this->_storage->status     = $this->status();
                $this->_storage->slug       = $this->slug();
                $this->_storage->size       = $this->size();
                $this->_storage->year       = $this->year();
                $this->_storage->category   = implode(',',$this->categories());
                $this->_storage->magazines  = implode(',',$this->magazines());
                $this->_storage->input      = $this->input();
                unset($this->_storage->edited);
                $this->_storage->commit();
            } else {
                die("Missing record!");
            }

            return(TRUE);
        }
        /* }}} */

        /* create($vendor_id=NULL) {{{ */
        // static method
        function create($vendor_id=NULL) {
            // this class should create a new lead_generator record,
            // a new contact record and new editor record.

            if(is_null($vendor_id)) return(FALSE);
            if(is_null($this->_vendor)) return(FALSE);

            $lg = new lead_generator();
            $lg->_storage = new lead_generator_model();
            $lg->_storage->debug = TRUE;
            $lg->_storage->vendor_id = $vendor_id;
            $lg->_storage->status    = 'new';
            $lg->_storage->input     = time();
            $lg->_storage->year      = $lg->currentLGYear();
            $id = $lg->_storage->commit();

            $lg->contact = new lg_contact($id);
            $lg->contact->copyDefault($vendor_id);

            $lg->editor = new lg_editor($id);
            $lg->editor->copyDefault($vendor_id);
            
            $lg->revision = new lead_generator_revision($id);
            $lg->revision->createFromVendor(&$this->_vendor);

            unset($lg);

            return(lead_generator::load($id));
        }
        /* }}} */

        /* load($id=NULL) {{{ */
        // static method
        function &load($id=NULL) {
            // loads and returns a lead_generator instance with the correct
            // id loaded, or FALSE on error
            if(is_null($id)) return(FALSE);
            if(!is_numeric($id)) return(FALSE);

            $lg =& new lead_generator();
            $lg->_id      = $id;
            $lg->contact  = new lg_contact($lg->_id);
            $lg->editor   = new lg_editor($lg->_id);

            $lg->_storage = new lead_generator_model($lg->_id);
            $lg->_storage->fetch($lg->_id);
            $lg->_vendor_id = $lg->_storage->vendor_id;

            // no setter methods -- shouldn't be touched outside of class
            $lg->_input = $lg->_storage->input;
            $lg->setStatus($lg->_storage->status);
            $lg->setCategories(explode(',',$lg->_storage->category));
            $lg->setSize($lg->_storage->size);
            $lg->_slug = $lg->_storage->slug;
            $lg->_year = $lg->_storage->year;
            $lg->setMagazines(explode(',',$lg->_storage->magazines));
            $lg->loadRevisions();

            return($lg);
        }
        /* }}} */

        /* loadRevisions() {{{ */
        function loadRevisions() { 
            if(is_null($this->_id)) return(FALSE);

            // clear the old revision set
            $this->revisions = array();

            // seeing as we can't return an array of objects, we'll try to shotgun them in manually
            $revList =& lead_generator_revision::getRevisionArray($this->_id);
            foreach($revList as $id => $obj) {
                $this->revisions[$id] =& lead_generator_revision::load(&$obj['id']);
            }
            unset($revList);

            // the top revision will be the highest of the set
            $this->current =& $this->revisions[0];
            return(TRUE);
        }
        /* }}} */

        /* handle($args) {{{ */
        function handle($args) {
            // $args = stack of verbs/args
            if(is_array($args)) {
                $verb = array_pop($args);
            }
            $verb = ($verb) ? $verb : 'default';
            $this->action($verb, &$args);
        }
        /* }}} */

        /* action($verb, $args) {{{ */
        function action($verb, $args) {
            switch($verb) {
                case 'approvals':
                    $this->approvalPage(array_pop($args));
                    break;
                case 'resend':
                    $this->resendRequest(array_pop($args));
                    $this->redirect();
                    break;
                case 'preview':
                    $this->previewApproval(array_pop($args));
                    break;
                case 'cancelRequest':
                    $lga = new lead_generator_approval();
                    break;
                case 'sendRequest':
                    $this->setStatus('pending');
                    if($this->generateRequest()) {
                        $this->save();
                    } else {
                        $this->setStatus('editing');
                    }
                    $this->redirect();
                    break;
                case 'unlock':
                    // TODO: check and clear any pending approval requests
                    $lga = new lead_generator_approval();
                    if(!$lga->clearPending($this->id())) {
                        $this->_warn[] = "Something is.. amiss.";
                    }
                    $this->setStatus('editing');
                    $this->save();
                    $this->redirect();
                    break;
                case 'break':
                    $lga = new lead_generator_approval();
                    $this->setStatus('editing');
                    if(!$lga->clearPending($this->id(),'approved')) {
                        $this->_warn[] = "Something is.. amiss.";
                    }
                    $this->save();
                    $this->redirect();
                    break;
                    /*
                case 'lock':
                    $this->setStatus('pending');
                    $this->save();
                    $this->redirect();
                    break;
                    */
                case 'saveEditor':
                    $this->saveEditor();
                    break;
                case 'editor':
                    $this->chooseEditor();
                    break;
                case 'saveAttributes':
                    $this->saveAttributes();
                    break;
                case 'attributes':
                    $this->attributes();
                    break;
                case 'cancelRevision':
                    $this->loadRevisions();
                    $this->redirect();
                    break;
                case 'saveRevision':
                    $this->saveRevision();
                    break;
                case 'showRevisions':
                    $this->_showRev = ( $this->_showRev ) ? FALSE : TRUE ;
                    $this->redirect();
                    break;
                case 'revise':
                    $this->revise();
                    break;
                case 'saveContact':
                    $this->saveContact();
                    break;
                case 'cancelContact':
                    $this->cancelContact();
                    break;
                case 'contact':
                    $this->editContact($args);
                    break;
                default:
                    $this->_errors[] = "No action for $verb";
                case 'default':
                    $this->controlCenter();
                    break;
            }
            return(TRUE);
        }
        /* }}} */

        /* redirect() {{{*/
        function redirect($append=NULL) {
            template_class::redirect($this->appUrl() . $append);
        }
        /*}}}*/

        /* baseUrl() {{{ */
        function baseUrl() {
            // parent app or root
            // this whacks off the .php as well -- cleaner looking urls
            return("http://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['SCRIPT_NAME'], 0, -4) . '/');
        }
        /* }}} */

        /* appUrl() {{{ */
        function appUrl() {
            return($this->baseUrl() . $this->_uriAppend);
        }
        /* }}} */

        /* saveAttributes() {{{ */
        function saveAttributes() {
            if($this->isLocked()) {
                if($_REQUEST['magazines'] != $this->magazines()) {
                    $this->_errors[] = "Cannot modify the magazine for a locked LG.";
                }
            } else if(count($_REQUEST['magazines']) < 1) {
                $this->_errors[] = "Please select a magazine for this LG.";
            } else {
                $this->setMagazines($_REQUEST['magazines']);
            }

            if(count($_REQUEST['categories']) < 1) {
                $this->_errors[] = "Please select at least one category.";
            } else {
                $this->setCategories($_REQUEST['categories']);
            }

            if($this->size() != $_REQUEST['size']) {
                // size change to worry about
                if($this->isLocked() && ($this->status() != 'approved')) {
                    $this->_errors[] = "Cannot modify the size of a locked, unapproved LG.";
                } else if($_REQUEST['size'] == 'single') {
                    // if it's a double, we're moving up so no prob 
                    // but as it's a single, it means we're moving from double
                    // down
                    // check the graphics (can't have two) and the content

                    if(count($this->current->photos()) > 1) {
                        $this->_errors[] = "Current LG Revision has too many photos to convert to single.";
                    } 

                    if($this->current->charCount() > 243) {
                        $this->_errors[] = "Current LG Revision's content length of " . $this->current->charCount() .  "  is too long to convert to single.";
                    }
                } else {
                    // it's a double, no worries
                    $this->setSize($_REQUEST['size']);
                }
            }

            $this->setYear($_REQUEST['year']);

            if(count($this->_errors)) {
                $this->redirect("/attributes");
            }

            $this->setSize($_REQUEST['size']);
            $this->setCategories($_REQUEST['categories']);

            $this->save();
            $this->redirect();
        }
        /* }}} */

        /* saveRevision() {{{ */
        function saveRevision() {
            // peels off of $_REQUEST
            if(!$this->current->checkCompanyName($_REQUEST['companyName'])) {
                $this->_errors[] = "Invalid company name.";
            } else {
                $this->current->setCompanyName($_REQUEST['companyName']);
            }

            if(!$this->current->checkPhoneNumber($_REQUEST['phone'])) {
                $this->_errors[] = "Invalid phone number.";
            } else {
                $this->current->setPhoneNumber($_REQUEST['phone']);
            }

            if(!$this->current->checkWebsite($_REQUEST['website'])) {
                $this->_errors[] = "Invalid website.";
            } else {
                $this->current->setWebsite($_REQUEST['website']);
            }

            if(!$this->current->checkContent($_REQUEST['content'])) {
                $this->_errors[] = "Invalid content.";
            } else {
                $this->current->setContent($_REQUEST['content']);
            }

            //TODO: check to ensure the photo id is valid?
            $photos = array();
            foreach($_REQUEST['photo'] as $pid) {
                if(is_numeric($pid) && ($pid != 0)) {
                    $photos[] = $pid;
                }
            }

            $this->current->setPhotos($photos);

            // do we have enough photos?
            if((count($this->current->photos()) == 0)) {
                $this->_errors[] = "You must specify at least one image.";
            }

            $content_chars = $this->current->charCount();
            $company_chars = $this->current->companyCharCount();

            // check content length && company name length
            if($this->size() == 'single') {
                // hz and vz have same character count
                if($company_chars > 35) {
                    $this->_errors[] = "Length of " . $company_chars . " characters for company name exceeds maximum of 35 for a single lead generator.";
                }
                if($content_chars > 243) {
                    $this->_errors[] = "Character count of " . $content_chars . " exceeds maximum of 243 for a single lead generator.";
                }
            } else {
                // double
                if($company_chars > 66) {
                    $this->_errors[] = "Length of " . $company_chars . " characters for company name exceeds maximum of 66 for a double lead generator.";
                }
                if(count($this->current->photos()) > 1) {
                    // double 2
                    if($content_chars > 400) {
                        $this->_errors[] = "Character count of " . $content_chars . " exceeds maximum of 400 for a double lead generator with two photos.";
                    }
                } else {
                    // double 1
                    if($content_chars > 648) {
                        $this->_errors[] = "Character count of " . $content_chars . " exceeds maximum of 648 for a single lead generator with one photo.";
                    }
                }
            }

            if(count($this->_errors)) {
                // no such luck, back to the form
                $this->redirect('/revise');
            } else {
                // this should also edit our edited date and save the lg
                $this->current->save();
                $this->save();
                $this->loadRevisions();
                $this->redirect();
            }
        }
        /* }}} */

        /* attributes() {{{ */
        function attributes() {
            if($this->isLocked()) {
                $this->_warn[] = "This LG is locked.  Until the LG is approved, or the request is cancelled, you cannot modify anything but the categories.";
            }

            $pageTitle = "LG::Attributes for " . $this->_vendor->company_name;
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>LG Attributes&mdash;<?= $this->_vendor->company_name ?></h1>
            </div>
            <?php $this->listErrors(); ?>
            <?php $this->listWarnings(); ?>
            <div id="content">
                <form action="<?= $this->appUrl(); ?>/saveAttributes" method="POST" name="attributes">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" value="save" name="submit" border="0" />
                            </td>
                    </table>
                </div>
                <div class="clearer">&nbsp;</div>
                <h1>Attributes</h1>
                <div>
                    <table width="100%" border="0" cellpadding="0" cellspacing="5">
                        <tbody>
                            <tr>
                                <td><strong>Year:</strong></td>
                                <td><?php $this->yearWidget(); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Magazine:</strong></td>
                                <td><?php $this->magazineWidget(); ?></td>
                            </tr>
                            <tr>
                                <td><strong>LG Size:</strong></td>
                                <td><?php $this->sizeWidget(); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h1>Categories</h1>
                <div>
                    <?php $this->categoryWidget(); ?>
                </div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" name="submit" value="save" border="0" />
                            </td>
                    </table>
                </div>
                </form>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* revise() {{{ */
        function revise() {
            if($this->isLocked()) {
                $this->_errors[] = "Cannot edit a locked LG!";
                $this->redirect();
            }

            $pageTitle = "LG::Edit for " . $this->_vendor->company_name;
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>LG Revision&mdash;<?= $this->_vendor->company_name ?></h1>
            </div>
            <?php $this->listErrors(); ?>
            <div id="content">
                <form action="<?= $this->appUrl(); ?>/saveRevision" method="POST" name="revision">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelRevision"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" value="save" name="submit" border="0" />
                            </td>
                    </table>
                </div>
                <div class="clearer">&nbsp;</div>
                <h1>Content</h1>
                <div>
                    <table width="100%" border="0" cellpadding="0" cellspacing="5">
                        <tbody>
                            <tr>
                                <td><strong>Company Name:</strong></td>
                                <td class="left"><?= $this->current->companyNameWidget(); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Website:</strong></td>
                                <td class="left"><?= $this->current->websiteWidget(); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Phone:</strong></td>
                                <td class="left"><?= $this->current->phoneWidget(); ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Content:</strong> <br />
                                    &nbsp; <em>Note:</em> <br />
                                    &nbsp;&nbsp; &reg; Option-r<br />
                                    &nbsp;&nbsp; &copy; Option-g<br />
                                    &nbsp;&nbsp; &trade; Option-2<br />
                                </td>
                                <td class="left"><?= $this->current->contentWidget(); ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Photo(s):</strong></td>
                                <td>
                                    <?php $this->photoWidgets(); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelRevision"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" name="submit" value="save" border="0" />
                            </td>
                    </table>
                </div>
                </form>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* controlCenter() {{{ */
        function controlCenter() {
            // control center for an LG
            $pageTitle = "LG-" . $this->_id . " for " . $this->_vendor->company_name;
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>LG Control Center&mdash;<?= $this->_vendor->company_name ?></h1>
            </div>
            <?php $this->listErrors(); ?>
            <div id="content">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->baseUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
            <?php

            if($this->isReady()) {
                $this->listWarnings();
                $this->listActions();
            }  else {
                $this->listWarnings();
            }

            $this->listRequests();
            ?>
            <div class="clearer">&nbsp;</div>
            <?php

            $this->listAttributes();
            $this->listContent();
            $this->listContacts();
            ?>
                <div class="clearer">&nbsp;</div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->baseUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* listErrors() {{{ */
        function listErrors() {
            if(is_array($this->_errors) && (count($this->_errors) > 0)) {
                ?>
                <div id="notify">
                    <div class='attn'>There were errors with your request:</div>
                    <ul>
                        <?php
                            foreach($this->_errors as $error) {
                                print("<li>$error</li>");
                            }
                        ?>
                    </ul>
                </div>
                <?
                $this->_errors = array();
            } 
        }
        /* }}} */

        /* listWarnings() {{{ */
        function listWarnings() {
            if(is_array($this->_warn) && (count($this->_warn) > 0)) {
                ?>
                <div id="warn">
                    <div class='attn'>Advisories:</div>
                    <ul>
                        <?php
                            foreach($this->_warn as $error) {
                                print("<li>$error</li>");
                            }
                        ?>
                    </ul>
                </div>
                <?php
            }
            $this->_warn = array();
        }
        /* }}} */

        /* cancelContact() {{{ */
        function cancelContact() {
            $this->contact = new lg_contact($this->_id);
            $this->redirect();
            // revert to saved information
        }
        /* }}} */

        /* saveContact() {{{ */
        function saveContact() {
            // pull from ye olde $_REQUEST
            $this->contact->setFirstName($_REQUEST['firstName']);
            $this->contact->setLastName($_REQUEST['lastName']);
            $this->contact->setPhoneAreaCode($_REQUEST['phoneAC']);
            $this->contact->setPhoneNumber($_REQUEST['phone']);
            $this->contact->setFaxAreaCode($_REQUEST['faxAC']);
            $this->contact->setFaxNumber($_REQUEST['fax']);
            $this->contact->setEmail($_REQUEST['email']);
            $this->contact->save();
            $this->redirect();
        }
        /* }}} */

        /* editContact() {{{ */
        function editContact() {
            $pageTitle = "LG-" . $this->_id . " for " . $this->_vendor->company_name;
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1><?= $this->year(); ?>&mdash;<?= $this->_vendor->company_name ?></h1>
            </div>
            <?php $this->listErrors();  ?>
            <div id="content">
                <form method="POST" action="<?= $this->appUrl(); ?>/saveContact">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
                            </td>
                    </table>
                </div>
                <h1>Contact Editor</h1>
                <div>
                <table width="100%" border="0" cellpadding="0" cellspacing="4">
                    <tbody>
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td><?= $this->contact->nameWidget(); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><?= $this->contact->emailWidget(); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Phone:</strong></td>
                            <td><?= $this->contact->phoneWidget(); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Fax:</strong></td>
                            <td><?= $this->contact->faxWidget(); ?></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
                            </td>
                    </table>
                </div>
                </form>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* delete($id=NULL) {{{ */
        // static method
        function delete($id=NULL) {
            /* this function should:
             *      delete the contact  
             *      delete the editor  
             *      delete the revisions
             *      delete the approvals
             *      delete the lg
             */

            if(is_null($id)) return(FALSE);

            $lg = lead_generator::load($id);

            if($lg->isLocked()) return(FALSE);

            // delete the contact
            lg_contact::delete($id);
            // delete the editor
            lg_editor::delete($id);

            // delete revisions
            lead_generator_revision::deleteRevisions($id);

            // TODO: Add code to delete (pending) approvals
            lead_generator_approval::deleteRequests($id);

            // delete the lead generator
            $lg->_storage->deleteRow($id);
            unset($lg);

            return(TRUE);
        }
        /* }}} */

        /* listContacts() {{{ */
        function listContacts() {
            ?>
            <h1>Contacts</h1>
            <div id="information">
                <div class="floatBox">
                    <div class="floater">
                        [ <a href="<?= $this->appUrl(); ?>/contact">edit</a> ]
                    </div>
                    <h2>Contact</h2>
                    <div>
                        <strong><a href="mailto:<?= $this->contact->email(); ?>?subject=Lead Generator for <?= $this->_vendor->company_name ?>"><?= $this->contact->fullName(); ?></a></strong> <br />
                        <?= $this->contact->email(); ?> <br />
                        Phone: <?= $this->contact->fullPhoneNumber(); ?> <br />
                        Fax: <?= $this->contact->fullFaxNumber(); ?>
                    </div>
                </div>
                <div class="floatBox">
                    <div class="floater">
                        [ <a href="<?= $this->appUrl(); ?>/editor">assign</a> ]
                    </div>
                    <h2>Editor</h2>
                    <div>
                        <strong><a href="mailto:<?= $this->editor->email(); ?>?subject=Lead Generator for <?= $this->_vendor->company_name ?>"><?= $this->editor->fullName(); ?></a></strong><br />
                        <?= $this->editor->email(); ?> <br />
                        Phone: <?= $this->editor->fullPhoneNumber(); ?> <br />
                        Fax: <?= $this->editor->fullFaxNumber(); ?>
                    </div>
                </div>
            </div>
            <div class="clearer">&nbsp;</div>
            <?php
        }
        /* }}} */

        /* isLocked() {{{ */
        function isLocked() {
            if(($this->status() == 'pending') || ($this->status() == 'approved')) {
                return(TRUE);
            } else {
                return(FALSE);
            }
        }
        /* }}} */

        /* listContent() {{{ */
        function listContent() { 
            // this should just list the content of the latest revision by default
            // need flag for listing detail, too
            // current -> more -> all -> hide
            $revTitle = ($this->_showRev) ? "Hide Revisions" : "Show Revisions" ;
            ?>
            <div class="floater">
                [ 
                    <?php
                        if(!$this->isLocked()) {
                        ?>
                        <a href="<?= $this->appUrl(); ?>/revise">Edit Content</a> |
                        <?php
                        }
                    ?>
                    <a href="<?= $this->appUrl(); ?>/showRevisions"><?= $revTitle ?></a> 
                ]
            </div>
            <h1>Content</h1>
            <div class="information">
                <table class="styled" border="0" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td width="20%">Company Name</td>
                            <td width="20%">Website</td>
                            <td width="20%">Phone</td>
                            <td width="30%">Content</td>
                            <td width="30%">Photos</td>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    if($this->_showRev) {
                        $alt = FALSE;
                        foreach($this->revisions as $rev) {
                            $alt = ($alt) ? FALSE : TRUE ;

                            if($alt) {
                                $bg = '#e0edff;';
                            } else {
                                $bg = '';
                            }

                            $this->printRevision($rev, $bg);
                            ?>
                            <?php
                        }
                    } else {
                        $this->printRevision($this->current);
                    }
                ?>
                    </tbody>
                </table>
            </div>
            <?php
        }
        /* }}} */

        function approvalPage($hash) {
            $lga = lead_generator_approval::fetchByHash($hash);
            if($lga === FALSE) {
                // error out here, no such hash
            } else if($lga->status != 'waiting') {
                // error out here, this LGA is no longer ready to roll
            }
            $lg =& lead_generator::load($lga->lg_id);
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>Lead Generator Approval Request</h1>
            </div>
            <div id="content">
                <div id="warn">
                    <div class='attn'>Note:</div>
                <p>
                Please review the content of this lead generator below, then read the agreement and sign the form to approve.  If you have any questions or modifications that need to be made, indicate the changes in the box and click ''submit.'' Your editor will make those corrections and resend the lead generator for your approval.
                </p>
                </div>
                <?php $this->listErrors(); ?>
                <?php $lg->approvalContent($lga); ?>
                <?php $lg->approvalForm($hash); ?>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }

        /* previewApproval($hash) {{{ */
        function previewApproval($hash) {
            $lga = lead_generator_approval::fetchByHash($hash);
            if($lga === FALSE) {
                // error out here, no such hash
            } else if($lga->status != 'waiting') {
                // error out here, this LGA is no longer ready to roll
            }
            $lg =& lead_generator::load($lga->lg_id);
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>Preview of Approval Request</h1>
            </div>
            <div id="content">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
                <?php $lg->approvalContent($lga); ?>
                <div class="navButtons bordertop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        function processApproval($hash) {
            $lga = lead_generator_approval::fetchByHash($hash);
            $lg = lead_generator::load($lga->lg_id);

            $errs = array();
            if($lga === FALSE) {
                // very no goodnik
                return(array("Bad or missing approval request."));
            }

            if($lga->status != "waiting") {
                return(array("Sorry, this lead generator is no longer pending approval.  It has either been cancelled or previously approved.  Please contact your editor if you have any questions."));
            }

            if(is_null($_REQUEST) || ( strlen($_REQUEST["signature"]) < 5 )) {
                // missing signature
                return(array("Enter Name at Bottom of Page."));
            }
		
          
            $ip = $_SERVER["REMOTE_ADDR"];

            //// Disabled per George, 04/19/2005
            /* if(($ip !== "192.168.2.111") && (strpos($ip, "192.168.") !== FALSE)) {
                return(array("Sorry, you cannot approve a lead generator from within Landscape Communications network."));
            } */

            // TODO: validate old content, update LG status

            // made it through, mark it dude
            $lga->ip = $ip;
            $lga->signature   = $_REQUEST["signature"];
            $lga->accept_date = time();
            $lga->accept_type = "client";
            $lga->status      = "approved";
            $lga->commit();

            // update LG status
            $lg->setStatus("approved");
            $lg->save();

            return(TRUE);

        }

        /* approvalForm(&$lga) {{{ */
        function approvalForm($hash) {
            // render the form fields for the lead generator approval
            ?>
            <div style="position:absolute; left:300px; top:1825px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:800px">
            <hr width="100%" noshade>
            <h1>Approval Form &nbsp;&nbsp;<font color="#FF0000" size="2">(Required)</font></h1>
            <div id="notify">
            <p>
            I, the undersigned, approve of the content for this lead generator.  I understand that: 
            <ul>
                <li>The photo(s) displayed may be cropped or otherwise modified before final placement.</li>  
                <li>The category this lead generator will be listed under is dependent on the photo used, and subject to changes by the publisher.</li>
                <li>I am approving the company name, website, phone number and text shown above to be used in this lead generator.</li>
            </ul>
            </p>
            By signing your full name and submitting this form, you certify that you are responsible for the content of this lead generator, and have the legal capacity to approve it.
            <p>
            </p>
            </div>
            <form method="POST" action="<?= $this->appUrl(); ?>/saveApproval">
                <input type="hidden" name="approvalHash" value="<?= $hash ?>" />
                <input type="hidden" name="_editor_email" value="<?= $this->editor->email(); ?>" />
                <input type="hidden" name="_company_name" value="<?= $this->current->companyName(); ?>" />
                <table cellpadding="5" cellspacing="0" border="0" width="700">
                
                    <tr>
                    	<td"><hr width="100%" noshade></td>
                    </tr>                
                
                    <tr>
                        <td><br><strong>PLEASE INPUT YOUR FULL NAME: </strong>
                        <input size="65" type="text" name="signature" value="<?= $_REQUEST["signature"] ?>" /><br><br>
                        <hr width="100%" noshade><br>
                        
                        <label><span style="font-size:18px; color:#F00">Lead Generator Approval</span></label><br><br><br/>
                            <input type="submit" name="submit" value="I approve this Lead Generator" />
                        </td>
                    </tr>
                    
                    <tr>
                    	<td><hr width="100%" noshade></td>
                    </tr>
                    
                    <!------------------------------ MARL 03/23/06 ------------------------------>
                    <tr>
                    	<td>
                     		<!--<input type="button" name="d_approve" value="I do not approve" onclick="javascript: d_show()" />-->                    		
							<label><span style="font-size:18px">Lead Generator Change Request</span></label><br><br>                   		
                    		<label>The Lead Generator still needs to be edited.<br>
							Please make the following changes.</label><br>
                    		<textarea name="d_txtarea" cols="82" rows="5"></textarea> <br/>
							<input type="submit" name="submit"  value="Submit Change Request" />
                            <script type="text/javascript">
                            	function d_show(){
 									var mydiv = document.getElementById("mydiv");
 									mydiv.innerHTML = "<textarea name=\"d_txtarea\" cols=\"25\" rows=\"5\"></textarea> <br/> <input type=\"submit\" name=\"submit\" value=\"Do Not Approve\" />";
                            	}
							</script>
							<div id="mydiv"></div>
                    	</td>
                    </tr>
                </table>
                <br />
            </form>

                <table cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td>
                        <!--
                        <strong>If you do NOT approve this lead generator and would like to make any changes to it, click here to email the editorial department.  Include the name of your company and any changes you want to be made. An editor will make those changes and then send you a new approval request.
						<a href="mailto:editorial@landscapeonline.com?subject=Request Changes">send us a message</a></strong>
						-->
						</td> 											
                    </tr>
                </table>
                <br />
            </div>
           <?php
        }
        /* }}} */

        /* approvalContent(&$lga) {{{ */
        function approvalContent(&$lga) {
            $lgm = new lead_generator_media();
			$mag2 = strtoupper(implode(',',$this->magazines()));
			if ($mag2 == 'LASN'){
				$mag3 = "The 2015 LASN Specifier's Guide";
			}else{
				$mag3 = "The 2015 LC/DBM Buyer's Guide";
			}
			
			$size2 = $this->size();
			if ($size2 == 'double'){
				$size3 = "Double";
			}else{
				$size3 = "Single";
			}
			
            ?>
            
				<div style="position:absolute; left:300px; top:155px; padding:0px; font-size:12px; margin:auto; width:800px">
                <h1>Listing Information</h1><br>
                   
                    <span style="font-size:14px">This <strong><? echo $size3 ?> Lead Generator Product Profile</strong> is scheduled to appear in <strong><? echo $mag3 ?>.</strong></span>
                </div>
                
				<div style="position:absolute; left:300px; top:920px; padding:0px; font-size:12px; margin:auto; width:800px">
                <hr width="100%" noshade>
                      <center><h1>What Will the Lead Generator Product Profile Look Like?</h1></center><br>
                </div>
         
                
				<div style="position:absolute; left:300px; top:975px; padding:0px; margin:auto; width:800px; font-size:16px; font-family:\'Times New Roman\', Times, serif; line-height:1.1em">
                        <center>Below are examples of Single and Double Lead Generator Product Profiles.</center>
                </div>
                                
				<div style="position:absolute; left:300px; top:1005px; padding:0px; font-size:12px; margin:auto; width:800px">
                     <center>(Example: Single Lead Generator Product Profiles)</center>
                </div>
                                
                <div style="position:absolute; left:410px; top:1025px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:125px">
					<img width="200" src="/devel/lg/Kalamazoo-hz.jpg">              
 				</div>
                
                <div style="position:absolute; left:710px; top:1025px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:125px">
					<img width="200" src="/devel/lg/Kalamazoo-vrt.jpg">              
 				</div>
                
				<div style="position:absolute; left:300px; top:1210px; padding:0px; font-size:12px; margin:auto; width:800px">
                     <center>(Example: Double Lead Generator Product Profile)</center>
                </div>                                
                <div style="position:absolute; left:375px; top:1230px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:125px">
					<img width="600" src="/devel/lg/Shade-Devices.jpg">              
 				</div>
               
				<div style="position:absolute; left:300px; top:1475px; padding:0px; font-size:16px; font-family:Arial, Helvetica, sans-serif font-weight:bold; line-height:1.1em; margin:auto; width:800px">
                	<center><h1>Can you Add an Image or an Additional Product?</h1>
                    <h1>Yes! You can!</h1><br>
                    <span style="font-family:'Times New Roman', Times, serif; font-size:14px">Depending on how many you want<br>
                    you can get them as Low as $195.00/ea.</span></center><br>

                    <center><span style="font-family:'Times New Roman', Times, serif; font-size:14px">If you would like to add additional Product Profiles<br>
					or increase from a Single to a Double Lead Generator Product Profile<br>
					contact your Advertising Representative <em>by clicking the link or calling the number below.</em></span><br><br>
                    
                    
                    <table cellspacing="10">
                    	<tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>If Your Company<br>Name Begins with:</center></td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>Your Sales Representative is:</center></td>
                        </tr>
                        <tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>A-H</center></td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center><a href="mailto:kongstad@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Kip Ongstad - (714) 979-5276 x 126</a></center></td>
                        </tr>
                        <tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>I-P</td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><a href="mailto:vchavira@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Vince Chavira - (714) 979-5276 x 111</a></center></td>
                        </tr>                        
                        <tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>Q-Z</td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center><a href="mailto:mhenderson@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information"">Matt Henderson - (714) 979-5276 x 114</a></center></td>
                        </tr>                        
                  </table>
                    
                    

                </div>                   
                               
                                
				<div style="position:absolute; left:300px; top:225px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:800px">
                <hr width="100%" noshade>
                <h1>Contact Information</h1><br>
                    <div class="indent"><span style="font-size:16px; font-family:\'Times New Roman\', Times, serif; line-height:1.1em">
                       Company Name: <strong><?= $this->current->companyName(); ?></strong><br />
                        Website: <strong><?= $this->current->website(); ?></strong><br />
                        Phone: <strong><?= $this->current->phoneNumber(); ?></strong><br /><br />                    
                        <h1 style="font-family:Arial, Helvetica, sans-serif">Product Profile Text:</h1><br>
						 <strong><?= $this->current->content(); ?></strong></span>
                    </div>
                </div>
                
				<div style="position:absolute; left:300px; top:440px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:800px">
				<hr width="100%" noshade>
                <h1>Image(s)</h1><br>
                        <span style="font-size:16px; font-family:\'Times New Roman\', Times, serif">This lead generator will use the following image or images:</span><br><br>
                    <div class="indent center">
                    <?php
                        $this->current->approvalImages();
                    ?>
                    </div>
                </div>
            <?php
        }
        /* }}} */

        /* listRequests() {{{ */
        function listRequests() {
            $lga = new lead_generator_approval();
            $list = $lga->getApprovalsByLG($this->id());
            if(count($list) > 0) {
            ?>
            <h1>Approval Requests</h1>
            <table class="styled" width="100%" border="0" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>created</td>
                        <td>status</td>
                        <td>edited</td>
                        <td>recipient</td>
                        <td>approved</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tr>
                <tbody>
            <?php
                $sel = TRUE;
                foreach($list as $row) {
                    if($sel) {
                        $sel = FALSE;
                        $bg = "style=\"background: #e0edff;\"";
                    } else {
                        $sel = TRUE;
                        $bg = "";
                    }
                    $this->printApprovalRow($row, $bg);
                }
            ?>
                </tbody>
            </table>
            <?php
            }
        }
        /* }}} */

        /* printApprovalRow(&$row, $bg) {{{ */
        function printApprovalRow(&$row, $bg) {
            
            if($row['status'] == 'approved') {
                $approved = date("m/d/Y",$row['accept_date']);
            } else {
                $approved = "no";
            }
            ?>
            <tr height="20" <?= $bg ?>>
                <td height="20"><?= $row['id'] ?></td>
                <td><?= date("m/d/Y",$row['created']); ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= template_class::parseDate($row['edited']); ?></td>
                <td><?= $row['sent_to'] ?></td>
                <td><?= $approved?></td>
                <td >
                    <?php
                        if($row['status'] == 'waiting') {
                            ?>
                    <a href="javascript:confirmBox('<?= $this->appUrl(); ?>/resendRequest/<?= $row['id'] ?>','This will resend the LG Approval Request email.  Are you sure you want to resend this?')"><img src="/imgz/vendor/resend_contact.gif" title="resend" alt="resend" height="20" border="0"  /></a></td>
                            <?php
                        } else {
                            ?>&nbsp;<?php
                        }
                    ?>
            </tr>
            <?php
        }
        /* }}} */

        function resendRequest($lga_hash) {
			
            $mailParams = array();
            $mailParams['bodyTXT']  = $this->approvalRequestEmailContentTXT($lga_hash);
            $mailParams['bodyHTML'] = $this->approvalRequestEmailContentHTML($lga_hash);

            //TODO: revert this back before production use
            $mailParams['To'] = "\"" . $this->contact->fullName() . "\"" . " <" . $this->contact->email() . ">";
            //$mailParams['To'] = $this->editor->fullName() . " <" . $this->editor->email() . ">";
            //$mailParams['To'] = $this->editor->fullName() . " <porwig@landscapeonline.com>";
            $mailParams['From'] = $this->editor->fullName() . " <" . $this->editor->email() . ">";
            $mailParams['Subject'] = "Lead Generator Approval Request for {$this->_vendor->company_name}";

            if(template_class::sendMail($mailParams) === TRUE) {
                $this->_warn[] = "Email successfully sent.";
                return(TRUE);
            } else {
                $this->_errors[] = "Error sending email!";
                return(FALSE);
            }
            return(TRUE);
        }

        /* generateRequest() {{{ */
        function generateRequest() {
            if(!$this->isLocked()) {
                $this->_errors[] = "Cannot create an approval request for an unlocked LG.";
            } else if($this->status() != 'pending') {
                $this->_errors[] = "Cannot create an approval request for a previously approved LG.";
            }

            if(count($this->_errors) > 0) {
                return(FALSE);
            }
            // create an approval request, keyed off of the revision,
            // the date, 
			
			
			

            $lga = new lead_generator_approval();
            $lga->lg_id    = $this->id();
            $lga->rev_id   = $this->current->id();
            $lga->status   = 'waiting';
            $lga->rev_hash = $this->current->generateHash();
            $lga->created  = time();
            $lga->app_hash = sha1(
                                $this->current->getHashString() . 
                                $lga->created . 
                                $this->id() .
                                $this->current->id()
                             );
            $lga->sent_to  = $this->contact->email();
            $lga->commit();

            // send the email
            $mailParams = array();
            $mailParams['bodyTXT']  = $this->approvalRequestEmailContentTXT($lga->app_hash);
            $mailParams['bodyHTML'] = $this->approvalRequestEmailContentHTML($lga->app_hash);

            //TODO: revert this back before production use
			$name23 = 'Jerry';
			$mag2 = strtoupper(implode(',',$this->magazines()));
			if ($mag2 == 'LASN'){
				$mag3 = "The 2015 LASN Specifier's Guide";
			}else{
				$mag3 = "The 2015 LC/DBM Buyer's Guide";
			}
						
            $mailParams['To'] = "\"" . $this->contact->fullName() . "\"" . " <" . $this->contact->email() . ">";
            //$mailParams['To'] = $this->editor->fullName() . " <" . $this->editor->email() . ">";
            //$mailParams['To'] = $this->editor->fullName() . " <porwig@landscapeonline.com>";
            $mailParams['From'] = $mag3 . " <" . $this->editor->email() . ">";
            $mailParams['Subject'] = "Lead Generator Approval Request for {$this->_vendor->company_name}";

            if(template_class::sendMail($mailParams) === TRUE) {
                $this->_warn[] = "Email successfully sent.";
                return(TRUE);
            } else {
                $this->_errors[] = "Error sending email!";
                $lga->status = 'error';
                $lga->commit();
                return(FALSE);
            }
            return(TRUE);
        }
        /* }}} */

        /* approvalRequestEmailContentHTML($hash) {{{ */
        function approvalRequestEmailContentHTML($hash) {
            $size = $this->size();
			$mag = strtoupper(implode(',',$this->magazines()));

            $text = <<<EOHTML1
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title><?php echo($title); ?></title>
    </head>
    <body>
    	<p><center><img width= "525" src="https://landscapearchitect.com/lol-logos/three-logo-2up.jpg"></center></p>
        <p>Thank you for submitting your:</p>
        
EOHTML1;


            if($size == 'single' AND $mag == 'LASN') {

                $text .= <<<EOHTML2
        <p><strong>Single</strong> Lead Generator Profile for the <strong>2015 LASN Specifier's Guide</strong></p>

EOHTML2;

            } elseif ($size == 'double' AND $mag == 'LASN') {

                $text .= <<<EOHTML3
        <p><strong>Double</strong> Lead Generator Profile for the <strong>2015 LASN Specifier's Guide</strong></p>

EOHTML3;
            } elseif ($size == 'single' AND $mag == 'LCN') {

                $text .= <<<EOHTML2
        <p><strong>Single</strong> Lead Generator Profile for the <strong>2015 LC/DBM Buyer's Guide</strong></p>

EOHTML2;

            } elseif ($size == 'double' AND $mag == 'LCN') {

                $text .= <<<EOHTML3
        <p><strong>Double</strong> Lead Generator Profile for the <strong>2015 LC/DBM Buyer's Guide</strong></p>

EOHTML3;

            } 
            
            
            

            $companyName = $this->_vendor->company_name;
            $editorName  = $this->editor->fullName();
            $editorMail  = $this->editor->email();
            $editorPhone = $this->editor->phoneNumber();
            $editorFax   = $this->editor->faxNumber();

            $text .=  <<<EOHTML4
            

            <p>A proof of for your <b>Lead Generator</b> has been created and is pending your approval. To review and approve the content, please visit the following link. (NOTE: If you can't click the link, please copy and paste the address into your browser.)</p>

            <p>
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    <a href="https://landscapearchitect.com/guide/load_approval/{$hash}">https://landscapearchitect.com/guide/load_approval/{$hash}</a>
            </p>

<p>If you have any questions, please contact:</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    
<strong>{$editorName}</strong><br />
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    {$editorMail}<br />
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    Phone: (714) {$editorPhone}<br />
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    Fax: (714) {$editorFax}<br />
</p>

        <p>Thank you again for being part of the #1 Product Directory in the industry.</p>


    </body>
</html>
EOHTML4;
            return($text);
        }
        /* }}} */

        /* approvalRequestEmailContentTXT($hash) {{{ */
        function approvalRequestEmailContentTXT($hash) {
            $size = $this->size();

            $text = <<<EOTXT1
Thank you for submitting your annual guide information.  As you know, these guides are used throughout the year as reference material by landscape architects, designers and contractors for their projects.  The annual guide continues to grow and continues to be the most used product listing for the landscaping industry.

This is an approval request for a {$size} lead generator.  
EOTXT1;
            if($size == 'single') {

                $text .= <<<EOTXT2
Past advertisers have found that the greater their exposure, the more requests for products they receive.  For example:

        * The average advertiser with a double lead generator received 51% more
          product requests than those with only single lead generators.

        * The average advertiser with an advertisement and a lead generator in
          LASN received 22% more product requests than those with only lead
          generators.

EOTXT2;

            } else {

                $text .= <<<EOTXT3
Past advertisers have found that the greater their exposure, the more requests for products they receive.  For example, the average advertiser with an advertisement and a lead generator in LASN received 22% more product requests than those with only lead generators.

EOTXT3;

            }

            $companyName = $this->_vendor->company_name;
            $editorName  = $this->editor->fullName();
            $editorMail  = $this->editor->email();
            $editorPhone = $this->editor->phoneNumber();
            $editorFax   = $this->editor->faxNumber();

            $text .=  <<<EOTXT4
You have been designated as the person responsible for approving the content of {$companyName}'s lead generators.  If you are not the proper recipient for this material, please notify us *immediately* so that we may contact the appropriate person.

A proof of the material that was submitted for your lead generator has been created, and is pending your approval.  To review and approve the content, please visit the following link. (NOTE: If the link does not appear clickable, please copy and paste the address into your browser window.)

        https://landscapearchitect.com/guide/load_approval/{$hash}

Please read over the contents of your proof carefully.  If notice any problems, please contact: 
    {$editorName}
    {$editorMail}
    Phone: {$editorPhone}
    Fax: {$editorFax}

Thank you again for being a part of this most used and valuable landscaping resource.

The Landscape Communications Team
714-979-5276
EOTXT4;
            return($text);
        }
        /* }}} */

        /* function photoWidgets() {{{ */
        function photoWidgets() {
            // print one if single.
            // print two if double.
            ?>
            <table border="0" cellpadding="5" cellspacing="5">
                <tbody>
                    <tr>
            <?php
            if($this->size() == 'double') {
                // two widgets
                $photos = $this->current->photos();

                $id = (isset($photos[0])) ? $photos[0] : '';
                $uri = $this->baseUrl() . 'photoPicker/' . $this->_vendor->id . "/0/$id";
                    ?>
                    <td class="center" valign="top">
                    <?php
                        if(is_numeric($id)) {
                            $this->current->showPhoto($id,'id="thumb0"');
                        } else {
                            ?><img id="thumb0" src="/guide/lg/lg-thumb-default.jpg" border="1" /><?php
                        }
                    ?>
                        <input type="hidden" name="photo[0]" id="photo0" value="<?= $id ?>" />
                        <br />
                        [ <a href="#" onClick="return openWindow('<?= $uri ?>')">Pick Photo</a> ]
                    </td>
                    <?php

                $id = (isset($photos[1])) ? $photos[1] : '';
                $uri = $this->baseUrl() . 'photoPicker/' . $this->_vendor->id . "/1/$id";
                    ?>
                    <td class="center">
                    <?php
                        if(is_numeric($id)) {
                            $this->current->showPhoto($id,'id="thumb1"');
                        } else {
                            ?><img id="thumb1" src="/guide/lg/lg-thumb-default.jpg" border="1" /><?php
                        }
                    ?>
                        <input type="hidden" name="photo[1]" id="photo1" value="<?= $id ?>" />
                        <br />
                        [ <a href="#" onClick="return openWindow('<?= $uri ?>')">Pick Photo</a> ]
                    </td>
                    <?php
            } else {
                ?>
                <td class="center">
                    <?php 
                        $photos = $this->current->photos(); 
                        $id = (isset($photos[0])) ? $photos[0] : '' ;
                        $uri = $this->baseUrl() . 'photoPicker/' . 
                            $this->_vendor->id . '/0/' . $id;
                        if(is_numeric($id)) {
                            $this->current->showPhoto($id,'id="thumb0"');
                        } else {
                            ?><img id="thumb0" src="/guide/lg/lg-thumb-default.jpg" border="1" /><?php
                        }
                    ?> 
                    <input type="hidden" name="photo[0]" id="photo0" value="<?= $id ?>" />
                    <br />
                    [ <a href="#" onClick="return openWindow('<?= $uri ?>')">Pick Photo</a> ]
                </td>
                <?php
                // single
            }
            ?>
                    </tr>
                </tbody>
            </table>
            <?php
        }
        /* }}} */

        /* printRevision($rev,$bg) {{{ */
        function printRevision(&$rev, $bg=NULL) {
            if($bg) {
                $style = "style=\"background: $bg;\"";
            } else {
                $style = "";
            }
            ?>
            <tr <?= $style ?>>
                <td><?= $rev->revision(); ?></td>
                <td><?= $rev->companyName(); ?></td>
                <td><?= $rev->website(); ?></td>
                <td><?= $rev->phoneNumber(); ?></td>
                <td><?= $rev->content(); ?></td>
                <td>
                <?php
                foreach($rev->photos() as $photo_id) {
                    $rev->showPhoto($photo_id);
                    print("&nbsp;");
                }
                ?>
                </td>
            </tr>
            <?php
        }
        /* }}} */

        /* categoryNameArray() {{{ */
        function categoryNameArray() {
            $names = array();
            if(count($this->categories()) > 0) {
                foreach($this->categories() as $id) {
                    $names[] = $this->categoryName($id);
                }
                return($names);

            } else {
                return(array("NONE"));
            }
        }
        /* }}} */

        /* listActions() {{{ */
        function listActions() {
            /* 
             * if we are locked, then we either have a pending request or have an approval
             *    if(pending) --> allow resend
             *    
             * if we are not locked, then we're clear
             *    allow new approval request, which will lock the record
             */
            $lga = new lead_generator_approval();
            ?>
            <h1><?= ucwords($this->status()); ?> :: Actions</h1>
            <div>
                [
                <?php
                if(!$this->isLocked()) {
                        ?>
                         <a href="javascript:confirmBox('<?= $this->appUrl(); ?>/sendRequest','Sending an LG request will prevent you from making further content modifications.\r\n\r\nAre you sure you wish to send and lock this LG?')">Send an Approval Request</a>  ]
                        <?php
                } else {
                    $hash = $lga->findWaitingHash($this->id());
                    if($this->status() == 'pending') {
                        ?>
                        <a href="<?= $this->appUrl(); ?>/resend/<?= $hash ?>">Resend Approval Request</a> |
                        <a href="javascript:confirmBox('<?= $this->appUrl(); ?>/unlock','Unlocking this LG will cancel any pending LG Approval Requests.\r\n\r\nAre you sure you want to unlock this LG?')">Unlock this LG</a> 
                        | <a href="<?= $this->appUrl(); ?>/preview/<?= $hash ?>">Preview Approval Page</a> ]
                        <?php
                    } else if ($this->status() == 'approved') {
                    ?>
                        <a style='color: red;' href="javascript:confirmBox('<?= $this->appUrl(); ?>/break','Cancelling this LG approval will remove this LG from the production list.  You will need to reapprove the LG with whatever modifications you make. \r\n\r\nAre you sure you want to cancel this LG approval?  This operation cannot be undone.')">Cancel Approval</a> ]
                    <?php
                    }
                }
                ?>
            </div>
            <?php
        }
        /* }}} */

        /* listAttributes() {{{ */
        function listAttributes() { 
            ?>
            <div class="floater">
                [ <a href="<?= $this->appUrl(); ?>/attributes">Edit Attributes</a> ]
            </div>
            <h1>Attributes</h1>
            <div class="information">
                <strong>Year:</strong> <?= $this->year(); ?> <br />
                <strong>Magazine:</strong> <?= implode(',',$this->magazines()); ?>  <br />
                <strong>Size:</strong> <?= $this->size(); ?>  <br />
                <strong>Categories:</strong> 
                <ul>
                    <?php
                        foreach($this->categoryNameArray() as $name) {
                            ?><li><?=$name ?></li><?php
                        }
                    ?>
                </ul>
                <br />
            </div>
            <?php
        }
        /* }}} */

        /* saveEditor() {{{ */
        function saveEditor() {
            $this->editor->setEditor($_REQUEST['editor']);
            $this->editor->save();
            $this->redirect();
        }
        /* }}} */

        /* chooseEditor() {{{ */
        function chooseEditor() {
            $pageTitle = "LG-" . $this->_id . " for " . $this->_vendor->company_name;
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1><?= $this->year(); ?>&mdash;<?= $this->_vendor->company_name ?></h1>
            </div>
            <?php $this->listErrors();  ?>
            <div id="content">
                <form method="POST" action="<?= $this->appUrl(); ?>/saveEditor">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
                            </td>
                    </table>
                </div>
                <h1>Select an Editor</h1>
                <div>
                <br />
                <?= $this->editor->selectEditorWidget($this->editor->email()); ?>
                <br />
                <br />
                </div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
                            </td>
                    </table>
                </div>
                </form>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* isReady() {{{ */
        function isReady() {
            $this->_warn = array();

            $photos = $this->current->photos();
            $categories = $this->categories();
            $magazines = $this->magazines();

            if(count($photos) == 0) {
                $this->_warn[] = "Missing photo.";
            } else if ($photos[0] == 0) {
                $this->_warn[] = "Missing photo.";
            }

            if(strlen($this->current->charCount() == 0)) {
                $this->_warn[] = "Missing content.";
            }

            if(count($categories) == 0) {
                $this->_warn[] = "No categories selected.";
            } else if ($categories[0] == 0) {
                $this->_warn[] = "No categories selected.";
            }

            if(count($magazines) != 1) {
                $this->_warn[] = "No magazine selected.";
            } else if(strlen($magazines) == 0) {
                $this->_warn[] = "No magazine selected.";
            }

            if(($this->size() != 'single') && ($this->size() != 'double')) {
                $this->_warn[] = "Invalid size selected.";
            }

            if(strlen($this->current->companyName()) == 0) {
                $this->_warn[] = "Missing company name.";
            }

            if(count($this->_warn) > 0) {
                return(FALSE);
            }

            return(TRUE);
        }
        /* }}} */

         /* Selection Widgets {{{ */
        function yearWidget() {
            // select widget dropdown, current year
            $i = date("Y")-3;
            $stop = $i+7;
            $sel = (is_numeric($this->year())) ? $this->year() : $this->currentLGYear();
            ?><select name="year"><?php
            for($i = date("Y") -2 ; $i < $stop; $i++ ) {
                $def = ($i == $sel) ? 'selected' : '';
                print("<option $def value=\"$i\">$i</option>");
            }
            ?></select><?php
        }
        
        function sizeWidget() {
            //option of single or double
            $vals = array(
                'single' => 'Single',
                'double' => 'Double'
            );
            ?>
            <select name="size">
                <?php
                foreach($vals as $id => $desc) {
                    ?>
                    <option <?= ($this->size() == $id) ? 'selected' : '' ; ?> value="<?= $id ?>"><?= $desc ?></option>
                    <?php
                }
                ?>
            </select>
            <?php
        }

        function magazineWidget() {
            $mags = array(
                'lasn' => 'LASN',
                'lcn'  => 'LCN',
                'lsmp' => 'LSMP'
            );
            foreach($mags as $id => $desc) {
                if(in_array($id, $this->magazines())) {
                    $sel = "checked";
                } else {
                    $sel = "";
                }
                ?>
                <input <?= $sel ?> type="radio" name="magazines[]" value="<?= $id ?>" /> <strong><?= $desc ?></strong>&nbsp;&nbsp; 
                <?php
            }
        }

        function categoryName($id) {
            if(!is_numeric($id)) return(FALSE);

            $lgc = new lead_generator_categories();

            return($lgc->categoryName($id));
        }

        function categoryWidget() {
            $lgc = new lead_generator_categories();
            $categories =& $lgc->fetchCategoryArray($this->categories());

            foreach($categories as $categoryName => $category) {
                $items = count($category);
                $blockSize = intval($items / 2);
                $col1 = array_slice($category,0,$blockSize);
                $col2 = array_slice($category,$blockSize);
                ?>
                <h2><?= $categoryName ?></h2>
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td width="50%" valign="top">
                        <?php
                            foreach($col1 as $n) {
                                $sel = (in_array($n['id'],$this->categories())) ? "checked"  : "" ;
                                ?><input type="checkbox" <?= $sel ?> name="categories[]" value="<?= $n['id'] ?>" /> <?php
                                print($n['name'] . "<br />");
                            }
                        ?>
                            </td>
                            <td width="50%" valign="top">
                        <?php
                            foreach($col2 as $n) {
                                $sel = (in_array($n['id'],$this->categories())) ? "checked"  : "" ;
                                ?><input type="checkbox" <?= $sel ?> name="categories[]" value="<?= $n['id'] ?>" /> <?php
                                print($n['name'] . "<br />");
                            }
                        ?>
                            </td>
                        </tr>
                        <?php
                    ?>
                    </tbody>
                </table>
                <?php
            }
        }
        /* }}} */

     }
?>
