<?php
require_once("template_class.php");
require_once("ylist_class.php");
require_once("ad_proof_class.php");
require_once("HTTP/Upload.php");

class ad_proof_editor extends ad_proof {
    // meta
    var $parentName;
    var $errList;
    var $stage;
    var $trans;
    // list of stages and their usability

    // paginators
    var $from;
    //var $sortBy='id';
    var $sortStr;
    var $sortDir='ASC';
    var $pageNum=0;
    var $pageLimit=20;


    // columns

    function ad_proof_editor($record=NULL) {
        $this->ad_proof();
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();

        switch($action) {
            case 'confirm':
            case 'email':
                if(isset($vars['proof_id'])) {
                    $this->fetch($vars['proof_id']);
                } else if(isset($vars['vendor_id'])) {
                    $this->fetchByVendorID($vars['vendor_id']);
                }

                if($this->emailProof($vars['emailProof'])) {
                    $this->redirect($_SESSION['np']);
                } else {
                    $this->errors();
                    $this->displayProofPreview();
                }

                return(TRUE);
                break;
            case 'preview':
                if(isset($vars['proof_id'])) {
                    $this->fetch($vars['proof_id']);
                } else if(isset($vars['vendor_id'])) {
                    $this->fetchByVendorID($vars['vendor_id']);
                }
                $this->displayProofPreview();
                break;
            case 'proof':
            case 'edit':
                $this->setVendorID($vars['vendor_id']);
                $this->setYlist($vars['ylist']);
                $this->setAdType($vars['ad_type']);
                $this->setAdText($vars['ad_text']);
                $this->setAdImages();
                $this->setAdMagazines($vars['ad_magazines']);
                if($this->errors()) {
                    $this->displayProofEditor();
                } else {
                    $this->commit(); // commit the changes
                    $this->smartRedirect($_SERVER['PHP_SELF'] . '?action=preview&proof_id=' . $this->id);
                    //$this->displayProofPreview();
                    // go to proof
                }
                break;
            default:
                $this->clear();
                if($vars['vendor_id']) {
                    $this->fetchByVendorID($vars['vendor_id']);
                } else if($vars['proof_id']) {
                    $this->fetch($vars['proof_id']);
                } else {
                    $this->showErrorPage("Missing a needed vendor or proof id to edit!");
                    return(FALSE);
                    // we're in trouble -- need at least one of the two.
                }
                $this->displayProofEditor();
                break;
        }
    }

    /*
        adProofTypes($type), default type instance ad_type
    */
    function displayProofEditor($id=NULL) {
        ?>
<html>
    <head>
        <title>Proof Editor</title>
        <style type='text/css' media='screen'>@import "/res/css/guide.css";</style>
        <style type='text/css' media='print'>@import "/res/css/guide.css";</style>
    </head>
    <body>
        <div id='wrapper'>
            <div id='header'>
                <a href='/' alt='LandscapeOnline.com' title='Landscape Online Home - News'><img id='mainlogo' src='/imgz/main_lol_logo.gif' width='270' height='60' border='0' /></a>
            </div>
            <div id='title'><h1>Proof Editor</h1></div>
            <div class='clearer'>&nbsp;</div>
            <div id='pagebody'>
                <div class='bar'>Options</div>
                    <?= $this->displayOptions(); ?>
                <div class='bar'>Proof</div>
                <form method='post' enctype='multipart/form-data' action='<?= $_SERVER['PHP_SELF'] ?>'>
                    <input type='hidden' name='vendor_id' value='<?= $this->vendor_id ?>' />
                    <input type='hidden' name='proof_id' value='<?= $this->id ?>' />
                    <input type='hidden' name='action' value='edit' />
                <div id='formLayout'>
                    <table class='formwidgets' cellspacing='0' width='100%'>
                        <tbody>
                            <tr class='selected'><td colspan='3'><?= $this->displayActionBar(); ?></td></tr>
                            <tr>
                                <td width='80'>Ad Type</td>
                                <td colspan='2'><?= $this->adTypeWidget(); ?></td>
                            </tr>
                            <tr>
                                <td>Magazines</td>
                                <td colspan='2'><?= $this->adMagazinesWidget(); ?></td>
                            </tr>
                            <tr>
                                <td>Ad Text</td>
                                <td colspan='2'><?= $this->adTextWidget(); ?></td>
                            </tr>
                            <tr class='selected'><td colspan='3'><?= $this->displayActionBar(); ?></td></tr>
                            <tr>
                                <td width='80'>Ad Image</td>
                                <td><?= $this->adImageWidget(); ?></td>
                                <td><?= $this->adImageWidget2(); ?></td>
                            </tr>
                            <tr class='selected'><td colspan='3'><?= $this->displayActionBar(); ?></td></tr>
                            <tr>
                                <td>Categories</td>
                                <td colspan='2'><?= $this->yListWidget(); ?></td>
                            </tr>
                            <tr class='selected'><td colspan='3'><?= $this->displayActionBar(); ?></td></tr>
                        </tbody>
                    </table>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
        <?
    }

    function displayOptions() {
        
        if(isset($_SESSION['np'])) {
            $np = $_SESSION['np'];
        } else {
            $np = 'venall.php';
        }
        print("<ul>");

        if(isset($this->id)) {
            $V = new vendor_class();
            $V->fetch($this->vendor_id);
            print("<li><a href=\"/guide/view.php?id=" . $this->vendor_id . "\">View this proof</a></li>");
            print("<li>Email this proof: "); 
            $this->adEmailWidget($V->email); 
            print("</li>");
        }
        print("<li><a href=\"$np\">Exit</a></li>");
        print("</ul>");
    }

    function displayActionBar() {
        if(isset($_SESSION['np'])) {
            $np = $_SESSION['np'];
        } else {
            $np = 'venall.php';
        }
        ?>
            <div class='actionBar'>
                <div class='next'><input type='image' src='/imgz/edit.gif' border='0' /></div>
                <a href='<?= $np ?>'><img src='/imgz/cancel.gif' border='0' /></a>
            </div>
        <?
    }

    function showErrorPage($errors) {
        ?>
<html>
    <head>
        <title>Proof Editor</title>
        <style type='text/css' media='screen'>@import "/res/css/guide.css";</style>
        <style type='text/css' media='print'>@import "/res/css/guide.css";</style>
    </head>
    <body>
        <div id='wrapper'>
            <div id='header'>
                <a href='/' alt='LandscapeOnline.com' title='Landscape Online Home - News'><img id='mainlogo' src='/imgz/main_lol_logo.gif' width='270' height='60' border='0' /></a>
            </div>
            <div id='title'><h1>Proof Editor</h1></div>
            <div class='clearer'>&nbsp;</div>
            <div id='pagebody'>
                <div class='bar'>Error!</div>
                <div class='center'>
                    <div class='errors'><?= $errors ?></div>
                </div>
            </div>
        </div>
    </body>
</html>
        <?
    }

    function displayProofPreview() {
        if(isset($_SESSION['np'])) {
            $np = $_SESSION['np'];
        } else {
            $np = 'venall.php';
        }
        $V = new vendor_class();
        $V->fetch($this->vendor_id);
        ?>
<html>
    <head>
        <title><?= $V->comp_name ?>: Proof [ Landscape Online ]</title>
        <style type='text/css' media='screen'>@import "/res/css/guide.css";</style>
        <style type='text/css' media='print'>@import "/res/css/guide.css";</style>
    </head>
    <body>
        <div id='wrapper'>
            <div id='header'>
                <a href='/' alt='LandscapeOnline.com' title='Landscape Online Home - News'><img id='mainlogo' src='/imgz/main_lol_logo.gif' width='270' height='60' border='0' /></a>
            </div>
            <div id='title'><h1>Guide Proof</h1></div>
            <div class='clearer'>&nbsp;</div>
            <div id='pagebody'>
                <div class='bar'>Preview &amp; Actions</div>
                <?= $this->displayOptions(); ?>
                <!-- 
                <p>You can:</p>
                <ul>
                    <li><a href='<?= $_SERVER['PHP_SELF'] ?>?proof_id=<?= $this->id ?>'>Edit this proof.</a></li>
                    <li><a href='<?= $np ?>'>Return to the Vendor List</a></li>
                    <li>Send a notification email: <?= $this->adEmailWidget($V->email); ?></li>
                </ul>
                <p> -->
                <?= $this->displayProof($V); ?>
                <?= $this->displayCompanyInformation($V); ?>
                <div class='clearer'>&nbsp;</div>
            </div>
            <div id='footer'>
                &copy; Landscape Communications Inc. 2004
            </div>
        </div>
    </body>
</html>
        <?
    }

    function emailProof($addr=NULL) {
        $V = new vendor_class();

        if(!is_null($this->vendor_id)) {
            $V->fetch($this->vendor_id);
        }

        if(is_null($addr)) {
            $this->addErrors("Missing email address for sending proof notification.");
            return(FALSE);
        }

        $mail = array();
        $mail['To']         = $V->comp_name . " <{$addr}>";
        //$mail['To']         = $addr;
        $mail['From']       = 'Landscape Online Proofs <webmaster@landscapeonline.com>'; 
        $mail['Subject']    = '2004 Lead Generator Information for ' . $V->comp_name;
        $mail['bodyTXT']    = $this->getProofEmailTXT();
        $mail['bodyHTML']   = $this->getProofEmailHTML();

        if(!(($result = $this->sendMail($mail) === TRUE)) ) {
            $this->addErrors("Error sending email to " . $mail['To']);
            return(FALSE);
        } else {
            return(TRUE);
        }
    }

    function getProofEmailTXT() {
        $V = new vendor_class();
        $V->fetch($this->vendor_id);
        $fc = strtolower($V->comp_name[0]);
        if($fc <= 'h') {
            $editor = 'Gregory Harris (gharris@landscapeonline.com)';
        } else if($fc <= 'p') {
            $editor = 'Steve Kelly (skelly@landscapeonline.com)';
        } else {
            $editor = 'Larry Shield (lshield@landscapeonline.com)';
        }
        $txt = <<<ENDT
Your 2004 Lead Generator proof is ready to be viewed online.  

The LASN Specifier's Guide and the Buyer's Guides (for LCN and LSMP) are seen and used by more than 300,000 landscape professionals throughout North America.
Please take the time to carefully review your proof.  Fax (714-979-3543) or email {$editor}  your corrections or approval upon receipt.

Please review your proof online at:
https://landscapearchitect.com/guide/view.php?id={$this->vendor_id}


Double your Impact for only $295!
You can now increase the size of your Lead Generator and make an even bigger impact for only $295.00. You can also add a Lead Generator in another category for the same $295.

Just follow the prompts on the proofing page to have your account representative contact you with the details.

If you have any questions, please don't hesitate to call us!

Best Regards,
The Lead Generator Team
Landscape Architect and Specifier News (LASN)
Landscape Contractor National (LCN)
Landscape Superintendent and Maintenance Professional (LSMP)
Landscapeonline.com
(714) 979-5276
ENDT;
        return($txt);
    }

    function getProofEmailHTML() {
        $V = new vendor_class();
        $V->fetch($this->vendor_id);
        $fc = strtolower($V->comp_name[0]);
        if($fc <= 'h') {
            $editor = "<a href='mailto:gharris@landscapeonline.com'>Gregory Harris</a>";
        } else if($fc <= 'p') {
            $editor = "<a href='mailto:skelly@landscapeonline.com'>Steve Kelly</a>";
        } else {
            $editor = "<a href='mailto:lshield@landscapeonline.com'>Larry Shield</a>";
        }
        $txt = <<<ENDH
<html>
    <body>
<h2>Your 2004 Lead Generator proof is ready to be viewed online.</h2>

<p>
The LASN Specifier's Guide and the Buyer's Guides (for LCN and LSMP) are seen and used by more than 300,000 landscape professionals throughout North America.
</p>
<p>
Please take the time to carefully review your proof.  Fax (714-979-3543) or email {$editor} your corrections or approval upon receipt of this proof.
</p>

<p>
Please review <a href='https://landscapearchitect.com/guide/view.php?id={$this->vendor_id}'>your proof online</a> at:<br />
https://landscapearchitect.com/guide/view.php?id={$this->vendor_id}
</p>

<h3>Double your Impact for only $295!</h3>
<p>
You can increase the size of your Lead Generator and make an even bigger impact for only $295. You can also add a Lead Generator in another category for the same $295.
</p>
<p>
Just follow the prompts on the proofing page to have your account representative contact you with the details.
</p>

<p>
If you have any questions, please don't hesitate to call us!
</p>

<p>
Best Regards,<br />
The Lead Generator Team<br />
Landscape Architect and Specifier News (LASN)<br />
Landscape Contractor National (LCN)<br />
Landscape Superintendent and Maintenance Professional (LSMP)<br />
Landscapeonline.com<br />
(714) 979-5276
</p>
    </body>
</html>
ENDH;
        return($txt);
    }
}
?>
