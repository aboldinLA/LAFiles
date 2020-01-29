<?php
    /*
     * Controller Class for Lead Generator List -- needs a vendor id
     */
    require_once('base/vendor_listing.php');
    require_once('base/lead_generator.php');
    require_once('base/lead_generator_media.php');

    class lead_generator_list {
        var $_errors;
        var $_vname;
        var $_listing;
        var $_listAll;
        var $_appAll;
        var $_leadGenerator;
        var $_leadMedia;
        var $_lgContact;

/* lead_generator_list() {{{
 *      Constructor, takes in a vendor id to set up a pointer to
 *      the associated vendor_listing record.
 */
        function lead_generator_list($vendor_id=NULL) {
            if(is_null($vendor_id)) {
                $this->_errors[] = "Missing vendor id.";
                $this->_vname = "";
                $this->_listing = NULL;
            } else {
                $this->_listing = new vendor();
                $this->_listing->fetch($vendor_id);

                $this->_lgContact = new contact();
                if($this->_lgContact->fetchContact('ven',$this->_listing->id, 'lg') === FALSE) {
                    // fetch the default and make a vendor lg contact
                    $this->_lgContact->fetchContact('ven',$this->_listing->id, 'primary');
                    $this->_lgContact->id   = NULL;
                    $this->_lgContact->code = 'lg';
                    $this->_lgContact->commit();
                }
            }

            $this->_appAll  = FALSE;
            $this->_listAll = FALSE;
            $this->_errors  = array();
        }
/*}}}*/

/* vendorName() {{{*/
        function vendorName() {
            return($this->_listing->company_name);
        }
/*}}}*/

        /* baseUrl() {{{ */
        function baseUrl() {
            // parent app or root
            // this whacks off the .php as well -- cleaner looking urls
            return("http://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['SCRIPT_NAME'], 0, -4));
        }
        /* }}} */

        /* appUrl() {{{ */
        function appUrl() {
            return($this->baseUrl() . $this->_uriAppend);
        }
        /* }}} */

/* handler($vars=NULL) {{{*/
        function handler($vars=NULL) {
            // this is the switchboard of this class
            
            // lets figure out our verb
            if(isset($_SERVER['PATH_INFO'])) {
                $pathParts = explode('/',ltrim($_SERVER['PATH_INFO'],'/'));
                $pathParts = array_reverse($pathParts, TRUE);
                //$verb = $pathParts[0];
                $verb = array_pop($pathParts);
            } else {
                // default verb
                $verb = 'list';
                $pathParts = array();
            }

            $this->action($verb, &$pathParts, &$vars);
        }
/*}}}*/

/* action($verb, $args) {{{*/
        function action($verb, $args) {
            switch($verb) {
                case 'approved':
                    break;
                case 'badApproval':
                    // FIXME: Better error page for LG approval
                    die("wugga wugga");
                    break;
                case 'saveApproval':
                    $lg =& new lead_generator();

                    if(is_null($_REQUEST["approvalHash"]) || ( strlen($_REQUEST["approvalHash"]) == 0 )) {
                        // error out, we have no approval hash
                        $this->_errors[] = "Missing information for approval!";
                        $this->redirect('/badApproval');
                    }

                    if(($errs = $lg->processApproval($_REQUEST["approvalHash"])) === TRUE) {
                        $this->redirect('/approved');
                        // redirect to approved page
                    } else {
                        // redirect for errors
                        foreach($errs as $err) {
                            $this->_errors[] = $err;
                        }
                        $this->redirect('/approvals/' . $_REQUEST["approvalHash"]);
                    }
                    break;
                case 'approvals':
                    $lg =& new lead_generator();
                    foreach($this->_errors as $err) {
                        $lg->_errors[] = $err;
                    }
                    $this->_errors = array();
                    
                    $lg->approvalPage(array_pop($args));
                    break;
                case 'saveContact':
                    $this->saveContact();
                    break;
                case 'editContact':
                    $this->editContact();
                    break;
                case 'chooseEditor':
                    $this->chooseEditor();
                    break;
                case 'saveEditor':
                    $this->assignEditor($_REQUEST['editor']);
                    break;
                case 'mediaSelector':
                    $lm =& $this->_leadMedia;

                    if(!is_object($lm)) {
                        $lm = new lead_generator_media($this->_listing->id);
                        $lm->_vendor =& $this->_listing;
                        $lm->_uriAppend = "media";
                    }

                    $lm->mediaSelector(array_pop($args));
                    break;
                case 'photoPicker':
                    $lm =& $this->_leadMedia;

                    if(!is_object($lm)) {
                        $lm = new lead_generator_media($this->_listing->id);
                        $lm->_vendor =& $this->_listing;
                        $lm->_uriAppend = "media";
                    }
                    $lm->photoPicker($args);
                    break;
                case 'dump':
                    //$this->_leadGenerator =& lead_generator::load(76);
                    print("<pre>");
                    print_r($this);
                    print("</pre>");
                    break;
                case 'media':
                    $this->editMedia(&$args);
                    break;
                case 'listAll':
                    $this->showAllLG();
                    break;
                case 'appAll':
                    $this->showAllApp();
                    break;
                case 'edit':
                    $this->edit(&$args);
                    break;
                case 'delete':
                    $this->delete(&$args);
                    break;
                case 'create':
                    $this->create();
                    break;
                default:
                case 'list':
                    $this->viewList();
                    break;
            }
        }
/*}}}*/

/* listErrors() {{{*/
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
/*}}}*/

/* viewList() {{{*/
        function viewList() {
            $pageTitle = "LG Admin :: " . $this->vendorName();
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>Lead Generators :: <?= $this->vendorName(); ?></h1>
            </div>
            <?php
            $this->listErrors();
            ?>
            <div id="content">
                <div class="clearer">&nbsp;</div>
            <?php
                $this->listLeadGenerators();
                $this->listApprovals();
                $this->listInformation();
                $this->listMedia();
            ?>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
/*}}}*/

/* listInformation() {{{*/
        function listInformation() {
            print("<h1>Company Defaults</h1>");
            print("<div id=\"information\">");
            $this->listingInformation();
            $this->editorInformation();
            $this->contactInformation();
            print("</div>");
            print("<div class=\"clearer\">&nbsp;</div>");
        }
/*}}}*/

/* listingInformation() {{{*/
        function listingInformation() {
            $c = new contact();
            $c->fetchContact('ven',$this->_listing->id,'company');
            ?>
            <div class="floatBox">
                <h2>Listing Information</h2>
                <div>
                    <h3><?= template_class::strShorten($this->_listing->company_name, 20); ?></h3>
                    <br />
                    <a href="http://<?= $this->_listing->website ?>"><?= $this->_listing->website ?></a><br />
                    <strong>Phone: </strong> <?= $c->getPhoneNumber(); ?>
                </div>
            </div>
            <?php
        }
/*}}}*/

        /* chooseEditor() {{{ */
        function chooseEditor() {
            $c = new contact();
            $c->fetchContact('ven',$this->_listing->id,'editor');

            $pageTitle = "LG Editor" . $this->_id . " for " . $this->_listing->company_name;
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>Editor&mdash;<?= $this->_listing->company_name ?></h1>
            </div>
            <?php $this->listErrors();  ?>
            <div id="content">
                <form method="POST" action="<?= $this->appUrl(); ?>/saveEditor">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
                            </td>
                    </table>
                </div>
                <h1>Select an Editor</h1>
                <div>
                <br />
                <?= lg_editor::selectEditorWidget($c->email); ?>
                <br />
                <br />
                </div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
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
            
        /* assignEditor($email) {{{ */
        function assignEditor($email) {
            $c = new contact();
            $c->fetchContact('ven',$this->_listing->id,'editor');

            $editors = array(
                'amartin@landscapeonline.com' => array(
                    'firstName' => 'Alli',
                    'lastName'  => 'Martin',
                    'email'     => 'amartin@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x132',
                    'faxAC'     => 714,
                    'fax'       => '434-3862'
                ),
                'jmoreno@landscapeonline.com' => array(
                    'firstName' => 'Jeff',
                    'lastName'  => 'Moreno',
                    'email'     => 'jmoreno@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x116',
                    'faxAC'     => 714,
                    'fax'       => '434-3862'
                ),
                'mdahl@landscapeonline.com' => array(
                    'firstName' => 'Mike',
                    'lastName'  => 'Dahl',
                    'email'     => 'mdahl@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x124',
                    'faxAC'     => 714,
                    'fax'       => '434-3862'
                ),				
                'lshield@landscapeonline.com' => array(
                    'firstName' => 'Larry',
                    'lastName'  => 'Shield',
                    'email'     => 'lshield@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x125',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),
                'mmedaris@landscapeonline.com' => array(
                    'firstName' => 'Michell',
                    'lastName'  => 'Medaris',
                    'email'     => 'mmedaris@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x136',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                 ),
                'skelly@landscapeonline.com' => array(
                    'firstName' => 'Steve',
                    'lastName'  => 'Kelly',
                    'email'     => 'skelly@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x120',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                )
            );
            $editor = $editors[$email];
            $c->first_name      = $editor['firstName'];
            $c->last_name       = $editor['lastName'];
            $c->email           = $editor['email'];
            $c->phone_area_code = $editor['phoneAC'];
            $c->phone_number    = $editor['phone'];
            $c->fax_area_code   = $editor['faxAC'];
            $c->fax_number      = $editor['fax'];
            $c->commit();
            
            $this->redirect();
        }
        /* }}} */

/* editorInformation() {{{*/
        function editorInformation() {
            $c = new contact();
            if($c->fetchContact('ven',$this->_listing->id, 'editor') === FALSE) {
                // fetch the default and assign
                $c->fetchContact('editor',0,'default');
                $c->id = NULL;
                $c->ref_type = 'ven';
                $c->ref_id = $this->_listing->id;
                $c->code = 'editor';
                $c->commit();
            }
            ?>
            <div class="floatBox">
                <div class="floater">
                    [ <a href="<?= $this->appUrl(); ?>/chooseEditor">assign</a> ]
                </div>
                <h2>Editor</h2>
                <div>
                    <strong><a href="mailto:<?= $c->getEmail(); ?>"><?= $c->getFullName(); ?></a></strong><br />
                    <br />
                    <strong>Phone:</strong><?= $c->getPhoneNumber(); ?> <br />
                    <strong>Fax:</strong><?= $c->getFaxNumber(); ?><br />
                </div>
            </div>
            <?php
        }
/*}}}*/

        /* saveContact() {{{ */
        function saveContact() {
            $this->_lgContact->first_name      = $_REQUEST['first_name'];
            $this->_lgContact->last_name       = $_REQUEST['last_name'];
            $this->_lgContact->email           = $_REQUEST['email'];
            $this->_lgContact->phone_area_code = $_REQUEST['phoneAC'];
            $this->_lgContact->phone_number    = $_REQUEST['phone'];
            $this->_lgContact->fax_area_code   = $_REQUEST['faxAC'];
            $this->_lgContact->fax_number      = $_REQUEST['fax'];
            $this->_lgContact->commit();

            $this->redirect();
        }
        /* }}} */

        /* editContact() {{{ */
        function editContact() {
            $c =& $this->_lgContact;
            // $c->fetchContact('ven',$this->_listing->id,'lg');

            $pageTitle = "LG Contact for " . $this->_listing->company_name;
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>LG Contact&mdash;<?= $this->_listing->company_name ?></h1>
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
                            <td>
                                <input type="text" name="first_name" value="<?= $c->getFirstName(); ?>" />
                                <input type="text" name="last_name" value="<?= $c->getLastName(); ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><input type="text" name="email" value="<?= $c->getEmail(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><strong>Phone:</strong></td>
                            <td>
                                (<input type="text" size="3" name="phoneAC" value="<?= $c->phone_area_code ?>" />)
                                <input type="text" name="phone" value="<?= $c->phone_number ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Fax:</strong></td>
                            <td>
                                (<input type="text" size="3" name="faxAC" value="<?= $c->fax_area_code ?>" />)
                                <input type="text" name="fax" value="<?= $c->fax_number ?>" />
                            </td>
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

/* contactInformation() {{{*/
        function contactInformation() {
            $c =& $this->_lgContact;
            // try a vendor lg contact first


            /*
            if($c->fetchContact('ven',$this->_listing->id, 'lg') === FALSE) {
                // fetch the default and make a vendor lg contact
                $c->fetchContact('ven',$this->_listing->id, 'primary');
                $c->id   = NULL;
                $c->code = 'lg';
                $c->commit();
            } */
            ?>
            <div class="floatBox">
                <div class="floater">
                    [ <a href="<?= $this->appUrl(); ?>/editContact">edit</a> ]
                </div>
                <h2>Contact</h2>
                <div>
                    <strong><a href="mailto:<?= $c->getEmail(); ?>"><?= $c->getFullName(); ?></a></strong><br />
                    <br />
                    <strong>Phone:</strong><?= $c->getPhoneNumber(); ?> <br />
                    <strong>Fax:</strong><?= $c->getFaxNumber(); ?><br />
                </div>
            </div>
            <?php
        }
/*}}}*/

/* listApprovals() {{{*/
        function listApprovals() {
            $lg = new lead_generator_model();
            if($this->_appAll) {
                $appList = $lg->getLeadGenerators($this->_listing->id);
                $title = "Approvals";
            } else {
                $year = $this->currentLGYear();
				$year2=2012;
                $title = "$year Approvals";
                $appList = $lg->getLeadGenerators($this->_listing->id,$year);
              /*  $appList = $lg->getLeadGenerators($this->_listing->id,$year2); */
            }
            ?>
            <div class='floater'>
                <?php
                    $label = ($this->_appAll) ? "hide most" : "show all";
                ?>
                [ <a href="<?= $this->appUrl(); ?>/appAll"><?= $label ?></a> ]
            </div>
            <h1><?= $title ?></h1>
            <?php
            if((count($appList) > 0) && $appList !== FALSE) {
                ?>
                <table class="styled" width="100%" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Year</td>
                            <td>Magazine</td>
                            <td>Size</td>
                            <td>Categories</td>
                            <td>Status</td>
                            <!-- <td>Created</td> -->
                            <td>Edited</td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                $alt = FALSE;
                foreach($appList as $item) {
                    $alt = ($alt) ? FALSE : TRUE;
                    if($alt) {
                        $style = "style=\"background: #e0edff;\"";
                    } else {
                        $style = "";
                    }
                    if($item['status'] == "approved") {
                        $this->printLGRow($item, $style);
                    }
                }
                print("</tbody>");
                print("</table>");
            } else {
                print("<center><strong><em>Sorry, there are no approvals for this company.</em></strong></center>");
            }

        }
/*}}}*/

/* currentLGYear() {{{ */
    function currentLGYear() {
        // returns the year for the current LG's
        // if this month is jun-dec, year+1, else year
        if(date("m") > 5) {
            return(date("Y") + 1);
        } else{
            return(date("Y"));
        }
    }
/* }}} */

/* listLeadGenerators() {{{*/
        function listLeadGenerators() {
            $lg = new lead_generator_model();
            $lg->debug = TRUE;

            if($this->_listAll) {
                $label = "hide most";
                $lgList = $lg->getLeadGenerators($this->_listing->id);
                $title = "Lead Generators";
            } else {
                $label = "show all";
                $year = $this->currentLGYear();
                $title = "$year Lead Generators";
                $lgList = $lg->getLeadGenerators($this->_listing->id,$year);
            }

            ?>
            <div class='floater'>
                [ <a href="<?= $this->appUrl(); ?>/create">new</a> | <a href="<?= $this->appUrl(); ?>/listAll"><?= $label ?></a> ]
            </div>
            <h1><?= $title ?></h1>
            <?php
            if((count($lgList) > 0) && ($lgList !== FALSE)) {
                ?>
                <table class="styled" width="100%" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Year</td>
                            <td>Magazine</td>
                            <td>Size</td>
                            <td>Categories</td>
                            <td>Status</td>
                            <!-- <td>Created</td> -->
                            <td>Edited</td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                $alt = FALSE;
                foreach($lgList as $item) {
                    $alt = ($alt) ? FALSE : TRUE;
                    if($alt) {
                        $style = "style=\"background: #e0edff;\"";
                    } else {
                        $style = "";
                    }
                    if($item['status'] != "approved") {
                        $this->printLGRow($item, $style);
                    }
                }
                print("</tbody>");
                print("</table>");
            } else {
                print("<center><strong><em>Sorry, there are no lead generators for this company.</em></strong></center>");
            }
        }
        /*}}}*/

        /* listMedia() {{{ */
        function listMedia() {
            // list the associated media for this vendor
            // rows of photo thumbnails with slugs and links
            ?>
            <div class="floater">
                [ 
                    <a href="<?= $this->appUrl(); ?>/media/new">new</a> | 
                    <a href="<?= $this->appUrl(); ?>/media">manage</a> 
                ]
            </div>
            <h1>Company Media</h1>
            <?php
            lead_generator_media::listMedia($this->_listing->id);
        }
        /* }}} */

/* printLGRow($item=NULL, $style=NULL) {{{*/
        function printLGRow($item=NULL, $style=NULL) {
            $lgc = new lead_generator_categories();

            if(is_null($item)) return(FALSE);

            ?>
            <tr <?= $style ?>>
                <td> <?= $item['id'] ?> </td>
                <td> <?= $item['year'] ?> </td>
                <td> <?= $item['magazines'] ?> </td>
                <td> <?= $item['size'] ?> </td>
                <td> <?= $item['categories'] ?> </td>
                <td> <?= ucwords($item['status']); ?> </td>
                <!-- <td> <?= date("m/j/y",$item['input']); ?> </td> -->
                <td> <?= template_class::parseDate($item['edited']); ?> </td>
                <td><a href="<?= $this->appUrl(); ?>/edit/<?= $item['id'] ?>"><img src="/imgz/vendor/pencil.gif" height="20" border="0" /></a></td>
                <td><a href="javascript:confirmBox('<?= $this->appUrl(); ?>/delete/<?= $item['id'] ?>','Are you sure you want to delete LG #<?= $item['id'] ?>?\n\nThis will remove all pending approval requests, revisions, and other changes, and cannot be undone.')">
                    <img src="/imgz/vendor/delete.gif" height="20" border="0" /></a></td>
            </tr>
            <?php
        }
/*}}}*/

/* create() {{{*/
        function create() {
            // create a new lg, redirect to list page for now
            $lg = new lead_generator();
            $lg->_vendor =& $this->_listing;
            $lg_2 =& $lg->create($this->_listing->id);
            // force attribute setup
            $this->redirect('/edit/' . $lg_2->_id . '/attributes');
        }
/*}}}*/

/*}}}*/

/* editMedia($args) {{{ */
    function editMedia($args) {
        $lm =& $this->_leadMedia;
        if(!is_object($lm)) {
            $lm = new lead_generator_media($this->_listing->id);
            $lm->_vendor =& $this->_listing;
            $lm->_uriAppend = "media";
        }
        $lm->_uriAppend = "media";
        $lm->handle(&$args);
    }
/* }}} */

/* edit($args) {{{*/
        function edit($args) {
            if(!is_array($args)) {
                $this->errorOut("Missing arguments for edit action.");
                return(FALSE);
            } else if(!is_numeric($lg_id = array_pop($args))) {
                $this->errorOut("Badly formatted lead generator id: $lg_id");
                return(FALSE);
            } else {
                if($this->_leadGenerator->_id != $lg_id) {
                    // not the same lg, load
                    $this->_leadGenerator =& lead_generator::load($lg_id);
                }
                if($this->_leadGenerator === FALSE) {
                    $this->errorOut("Invalid lead generator id: $lg_id");
                    return(FALSE);
                }
            }
            $this->_leadGenerator->_vendor =& $this->_listing;
            $this->_leadGenerator->_uriAppend = "edit/$lg_id";
            $this->_leadGenerator->handle(&$args);
        }
/*}}}*/

/* errorOut($msg) {{{*/
        function errorOut($msg) {
            $this->_errors[] = "$msg";
            $this->redirect();
        }
/*}}}*/

/* delete($args=NULL) {{{*/
        function delete($args=NULL) {
            if(!is_array($args)) {
                $this->errorOut("Missing arguments for delete action.");
                return(FALSE);
            } else if(!is_numeric($lg_id = array_pop($args))) {
                $this->errorOut("Badly formatted lead generator id: $lg_id");
                return(FALSE);
            } else {
                if(!lead_generator::delete($lg_id)) {
                    $this->errorOut("Sorry, you cannot delete a locked or pending lead generator.");
                } 
                $this->redirect();
            }
        }
/*}}}*/

/* showAllLG() {{{*/
        function showAllLG() {
            $this->_listAll = ($this->_listAll) ? FALSE : TRUE ;
            $this->redirect();
        }
/*}}}*/

/* showAllApp() {{{*/
        function showAllApp() {
            $this->_appAll = ($this->_appAll) ? FALSE : TRUE ;
            $this->redirect();
        }
/*}}}*/
    }
?>
