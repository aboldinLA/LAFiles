<?php
    /* Lead Generator Approval Controller
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
     require_once('lead_generator_list.php');
     require_once('lead_generator_info.php');
     require_once('lead_generator_categories.php');
     require_once('lead_generator_approval.php');
     require_once('lead_generator.php');
     
     class lead_generator_approval_controller extends lead_generator {

        var $app_id;

        function lead_generator_approval_controller($id) { 
            $this->app_id = $id;
            $this->{get_parent_class(__CLASS__)}();
        }

        function handler($vars=NULL) {
            if(isset($_SERVER['PATH_INFO'])) {
                $pathParts = explode('/',ltrim($_SERVER['PATH_INFO'],'/'));
                $pathParts = array_reverse($pathParts, TRUE);
                //$verb = $pathParts[0];
                $verb = array_pop($pathParts);
            } else {
                // default verb
                $verb = 'default';
                $pathParts = array();
            }

            $this->action($verb, &$pathParts, &$vars);
        }

        /* action($verb, $args) {{{ */
        function action($verb, $args) {
            switch($verb) {
                case 'approved':
                    $this->approved();
                    break;
                    
                /*********** MARL 03/23/07 *********/
                case 'dis_approved':
                    $this->dis_approved();
                    break;
                    
                case 'badApproval':
                    $this->badApproval();
                    break;
                case 'saveApproval':
                    $lg =& new lead_generator();

                    if(is_null($_REQUEST["approvalHash"]) || ( strlen($_REQUEST["approvalHash"]) == 0 )) {
                        // error out, we have no approval hash
                        $this->_errors[] = "Missing information for approval!";
                        $this->redirect('badApproval');
                    }

                    $this->_signature = $_POST['signature'];
	                $this->_msg = $_POST['d_txtarea'];
	                $this->_editor_email = $_POST['_editor_email'];
	                $this->_company_name = $_POST['_company_name'];
                    
                    /*********** MARL 03/23/07 ************/
                    if($_POST['submit']=='Do Not Approve'){	                    
                       	$this->redirect('dis_approved');
                    }
                    else{
                    
	                    if(($errs = $lg->processApproval($_REQUEST["approvalHash"])) === TRUE) {
	                        // redirect to approved page
	                        // save the approval, and redirect
	                        $this->redirect('approved');
	                    } else {
	                        // redirect for errors
	                        foreach($errs as $err) {
	                            $this->_errors[] = $err;
	                        }
	                        $this->redirect();
	                    }
                    }
                    break;
                case 'form':
                    $this->approvalPage($this->app_id);
                    break;
                case 'sendRequest':
                    $this->setStatus('pending');
                    if($this->generateRequest()) {
                        $this->save();
                    }
                    $this->redirect();
                    break;
                case 'default':
                    $this->approvalPage($this->app_id);
                    break;
                default:
                    $this->approvalPage($this->app_id);
                    break;
            }
            return(TRUE);
        }
        /* }}} */


        function approved() {
            require('views/lead_generator/header.php');
            
            // Send Email Here - Marl 03/23/07
            $date = date("F j, Y");
            $subject = $this->_company_name . " Company has Approved their Lead Generator";
            $message = "Lead Generator Request Approved \r\n \r\nDate: $date \r\n \r\nName: ".$this->_signature.".";
            $email = $this->_editor_email;
			mail($email, $subject , $message, "From: NoReply@LandscapeOnline.com");
		
            ?>
            <div id="header">
                <center><h1>Congratulations! Your Lead Generator Is Ready For Publication!</h1></center>
            </div>
            <div id="content">
                <div id="warn">
                <p>
                    Thank you for approving your <b>Lead Generator Product Profile!</b>
                </p>
                <p>
                    You can add additional products to the Annual Product Directory for as little as $295.00. 
                    <p>
                    For more information call 714-979-5276 x113 or click below to send an email to your advertising representative.
                    </p>
                </p>
                <table border="0" cellpadding="" cellspacing="3">
                    <tr>
                        <td><strong>Company Name Begins With: </strong></td>
                        <td><strong>Sales Representative</strong></td>
                    </tr>
                    <tr>
                        <td>A-H</td>
                        <td><a href="mailto:kongstad@landscapeonline.com?subject=Lead Generator Upgrade">Kip Ongstad  - (714)979-5276 x126</a></td>
                    </tr>
                    <tr>
                        <td>I-P</td>
                        <td><a href="mailto:vchavira@landscapeonline.com?subject=Lead Generator Upgrade">Vince Chavira  - (714)979-5276 x111</a></td>
                    </tr>
                    <tr>
                        <td>Q-Z</td>
                        <td><a href="mailto:mhenderson@landscapeonline.com?subject=Lead Generator Upgrade">Matt Henderson  - (714)979-5276 x114</a></td>
                    </tr>
                </table>
                <p>
                    Again, thank you for advertising in a Landscape Communications Publication!
                </p>
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        
        /************************** MARL 03/23/07 ****************************/
        function dis_approved() {
            require('views/lead_generator/header.php');
            
            // Send Email Here - Marl 03/23/07
            $date = date("F j, Y");
            $subject = $this->_company_name . " Company has sent corrections for their Lead Generator";
            $message = "Lead Generator Request Disapproved \r\n \r\nDate: $date \r\n \r\nName: ".$this->_signature." \r\n \r\n". $this->_msg;            
            $email = $this->_editor_email;            
			mail($email, $subject , $message, "From: NoReply@LandscapeOnline.com");
		
            ?>
            <div id="header">
                <center><h1>Your Lead Generator Is Marked For Additional Edits</h1></center>
            </div>
            <div id="content">
                <div id="warn">
                <p>You have chosen to edit your <b>Lead Generator</b>. We appreciate your effort, and will make the edits and send you another approval by email within the next few days.</p>
                <p>If you would like to speak to the editorial staff call 714-979-5276 x132.</p>
                <p>If you would like to <b>Add Product Lines</b> or upgrade to a <b>Double Image Lead Generator</b> - call 714-979-5276 x113 or click below to send an email to your advertising representative.
                <table border="0" cellpadding="" cellspacing="3">
                    <tr>
                        <td><strong>Company Name Begins With: </strong></td>
                        <td><strong>Sales Representative</strong></td>
                    </tr>
                    <tr>
                        <td>A-H</td>
                        <td><a href="mailto:kongstad@landscapeonline.com?subject=Lead Generator Upgrade">Kip Ongstad  - (714)979-5276 x126</a></td>
                    </tr>
                    <tr>
                        <td>I-P</td>
                        <td><a href="mailto:vchavira@landscapeonline.com?subject=Lead Generator Upgrade">Vince Chavira  - (714)979-5276 x111</a></td>
                    </tr>
                    <tr>
                        <td>Q-Z</td>
                        <td><a href="mailto:mhenderson@landscapeonline.com?subject=Lead Generator Upgrade">Matt Henderson  - (714)979-5276 x114</a></td>
                    </tr>
                    </table>
                    </p>
                <p>Thank you for advertising with Landscape Communications, Inc.</p>			                
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }

        function badApproval() {
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <center><h1>Lead Generator Approval Request</h1></center>
            </div>
            <div id="content">
                <div id="notify">
                    <div class='attn'>Invalid Approval Request</div>
                <p>
                    Sorry, the lead generator approval request you have used is no longer valid.  
                    This typically means that the lead generator content has been changed, has previously been approved, or has been deleted.
                    Please contact your editor for more information. 
                </p>
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }

        function approvalPage($hash) {
            if(is_null($hash)) {
                $this->redirect('badApproval');                
                return(FALSE);
            }
            $lga = lead_generator_approval::fetchByHash($hash);
            if($lga === FALSE) {
                // error out here, no such hash
                $this->redirect('badApproval');
                return(FALSE);
            } else if($lga->status != 'waiting') {
                // error out here, this LGA is no longer ready to roll
                $this->redirect('badApproval');
                return(FALSE);
            }
            $lg =& lead_generator::load($lga->lg_id);
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>Lead Generator Product Profile Proof & Approval Request Form</h1>
            </div>
            <div id="content">
                <div id="warn">
                <p>
                Please review the content of your <b>Lead Generator Product Profile</b> below, then use the approval form below to make edits or approve the profile.
                </p>
                </div>
                	<div style="position:absolute; left:650px; top:150px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:500px">
						<?php $this->listErrors(); ?>
					</div>

                	<!-- <div style="position:absolute; left:650px; top:1795px; padding:0px; font-size:12px; font-weight:bold; margin:auto; width:500px">
						<?php $this->listErrors(); ?>
					</div> -->
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
                return(array("Bad or missing approval request signature."));
            }

            return(TRUE);

        }

        /* approvalForm(&$lga) {{{ */
        function approvalForm($hash) {
            // render the form fields for the lead generator approval
            ?>
            <h1>Approval Form</h1>
            <div id="notify">
            <p>
            I, the undersigned, approve of the content for this lead generator.  I understand that: 
            <ul>
                <li>The photo(s) displayed may be cropped or otherwise modified before final placement.</li>  
                <li>The category this lead generator will be listed under is dependent on the photo used, and subject to changes by the publisher.</li>
                <li>I am approving the company name, website, phone number and text shown above to be used in this lead generator.</li>
            </ul>
            </p>
            Furthermore, by signing your full name and submitting this form, you certify that you are responsible for the content of this lead generator, and have the legal capacity to approve of the content.
            <p>
            </p>
            </div>
            <form method="POST" action="<?= $this->appUrl(); ?>/saveApproval">
                <input type="hidden" name="approvalHash" value="<?= $hash ?>" />
                <table cellpadding="5" cellspacing="0" border="0">
                    <tr>
                        <td><strong>PLEASE INPUT YOUR FULL NAME:</strong></td> 
                        <td><input size="32" type="text" name="signature" value="<?= $_REQUEST["signature"] ?>" />
                            <input type="submit" value="I approve of this Lead Generator" />
                        </td>
                    </tr>
                </table>
                <br />
            </form>
            <?php
        }
        /* }}} */

        /* approvalContent(&$lga) {{{ */
        function approvalContent(&$lga) {
            $lgm = new lead_generator_media();
            ?>
                <h1>Free Listing Information</h1>
                <div>
                    <table width="100%" border="0" cellpadding="5" cellspacing="5">
                        <tr>
                            <td width="50%">

                    <p> This lead generators will be a <strong><?= $this->size(); ?></strong>, and will appear in <strong><?= strtoupper(implode(',',$this->magazines())); ?></strong>.
                    </p>
                    <p>
                        This lead generators will use the following information about your company:
                    </p>
                    <div class="indent">
                        Company Names: <strong><?= $this->current->companyName(); ?></strong><br />
                        Website: <strong><?= $this->current->website(); ?></strong><br />
                        Phone: <strong><?= $this->current->phoneNumber(); ?></strong>
                    </div>

                            </td>
                            <td valign="top">
                                <div id="promo">
                                    <a href="mailto:editorial@landscapeonline.com?subject=LG Upgrade for <?= $this->current->companyName(); ?>&body=Please contact me about upgrading my lead generator!"><img style="float: left; margin-right: 10px;" src="/guide/lg/promo-icon.gif" border="0" alt="Upgrade Today!" /></a>
                                    <strong>
                                       This Lead Generator is a VALUE-ADDED Service and is provided at NO Additional Cost to you.<br /> 
				       However, if you wish to increase the size or quantity of your Lead Generator please call 714-979-5276 (or click Here) and ask for your Advertising Representative. We will be happy to assist you in maximizing your exposure and results from the Product Directory! <br /> <a href="mailto:editorial@landscapeonline.com?subject=LG Upgrade for <?= $this->current->companyName(); ?>&body=Please Please contact me about upgrading my lead generator!">Have one of our sales team contact you today!</a>
                                    </strong>
                                </div>
                            </td>
                    </table>
                </div>
                <h1>Content</h1>
                <div>
                    <p>
                        This lead generator will use the following short description:
                    </p>
                    <div class="indent">
                        <strong><?= $this->current->content(); ?></strong>
                    </div>
                </div>
                <h1>Image(s)</h1>
                <div>
                    <p>
                        This lead generator will use the following image or images:
                    </p>
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
            //$mailParams['To'] = $this->contact->fullName() . " <" . $this->contact->email() . ">";
            //$mailParams['To'] = $this->editor->fullName() . " <" . $this->editor->email() . ">";
            $mailParams['To'] = $this->editor->fullName() . " <porwig@landscapeonline.com>";
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
        /* }}} */

        /* approvalRequestEmailContentHTML($hash) {{{ */
        function approvalRequestEmailContentHTML($hash) {
            $size = $this->size();

            $text = <<<EOHTML1
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title><?php echo($title); ?></title>
    </head>
    <body>
        <p>
            Thank you for submitting your annual guide information.  As you know, these guides are used throughout the year as reference material by landscape architects, designers and contractors for their projects.  The annual guide continues to grow and continues to be the most used product listing for the landscaping industry.
        </p>
        <p>
This is an approval request for a {$size} lead generator.  
        </p>
EOHTML1;


            if($size == 'single') {

                $text .= <<<EOHTML2
<p>
Past advertisers have found that the greater their exposure, the more requests for products they receive.  For example:
</p>

<ul>
        <li> The average advertiser with a double lead generator received 51% more
          product requests than those with only single lead generators.</li>

        <li> The average advertiser with an advertisement and a lead generator in
          LASN received 22% more product requests than those with only lead
          generators.</li>
</ul>
EOHTML2;

            } else {

                $text .= <<<EOHTML3
        <p>
            Past advertisers have found that the greater their exposure, the more requests for products they receive.  For example, the average advertiser with an advertisement and a lead generator in LASN received 22% more product requests than those with only lead generators.
        </p>

EOHTML3;

            }

            $companyName = $this->_vendor->company_name;
            $editorName  = $this->editor->fullName();
            $editorMail  = $this->editor->email();
            $editorPhone = $this->editor->phoneNumber();
            $editorFax   = $this->editor->faxNumber();

            $text .=  <<<EOHTML4
            <p>
    You have been designated as the person responsible for approving the content of {$companyName}'s lead generators.  If you are not the proper recipient for this material, please notify us <strong>immediately</strong> so that we may contact the appropriate person.
            </p>

            <p>
            A proof of the material that was submitted for your lead generator has been created, and is pending your approval.  To review and approve the content, please visit the following link. (NOTE: If the link does not appear clickable, please copy and paste the address into your browser window.)
            </p>

            <p>
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    <a href="https://landscapearchitect.com/lg/approvals/{$hash}">https://landscapearchitect.com/lg/approvals/{$hash}</a>
            </p>

<p>
Please read over the contents of your proof carefully.  If notice any problems, please contact: 
</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    
<strong>{$editorName}</strong><br />
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    {$editorMail}<br />
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    Phone: {$editorPhone}<br />
&nbsp;&nbsp;&nbsp;&nbsp;    
&nbsp;&nbsp;&nbsp;&nbsp;    Fax: {$editorFax}<br />
</p>

        <p>
            Thank you again for being a part of this most used and valuable landscaping resource.
        </p>

        <p>
            The Landscape Communications Team<br />
            714-979-5276
        </p>
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
            $editorPhone = $this->editor-> phoneNumber();
            $editorFax   = $this->editor->faxNumber();

            $text .=  <<<EOTXT4
You have been designated as the person responsible for approving the content of {$companyName}s lead generators.  If you are not the proper recipient for this material, please notify us *immediately* so that we may contact the appropriate person.

A proof of the material that was submitted for your lead generator has been created, and is pending your approval.  To review and approve the content, please visit the following link. (NOTE: If the link does not appear clickable, please copy and paste the address into your browser window.)

        https://landscapearchitect.com/lg/approvals/{$hash}

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
     }
?>
