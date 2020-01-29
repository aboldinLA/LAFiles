<?php


$id = $_GET['id'];
echo 'dog<br>' . $id;




require_once("../../includes/vendor_listing-js.php");
require_once("../../includes/contacts_class.php");
require_once("../../includes/Pager/Sliding.php");
require_once("../../includes/vendor_type_class.php");
require_once("../../includes/xlist_class.php");
define('VDAEMON_POST_SECURITY', false);



class vendor_listing_admin extends vendor {
    // meta
    var $parentName;
    var $errList;
    var $pageSpan;

    // link variables
    var $from;
    var $link_address;
    var $sortBy='id';
    var $sortDir='ASC';
    var $pageNum=0;
    var $pageLimit=10;
    
    function vendor_listing_admin() {
        // define pages and the variables they take
        $parentName = get_parent_class($this);
        $this->{$parentName}();
    }    
    
    function action($action = 'default', $vars = NULL) {
        // this is the action hub
        $this->lastPage = $this->thisPage;
        $this->thisPage = $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'];

        if(isset($_GET['filter'])) {
            $this->filter = mysql_escape_string($_GET['filter']);
        }

        if(!is_null($vars))
            $this->input($vars);

        if(strpos(dirname($_SERVER['PHP_SELF']), '/private') === 0) {
            $this->admin = TRUE;
        }

        if(!$this->admin) {
            if(!isset($vars['record'])) {
                $vars['record'] = $_SESSION['uid'];
            }
        }
        error_log("UID of {$_SESSION['uid']} in {$SCRIPT_FILENAME}");

        if($vars['sortBy']) {
            $this->setSort($vars['sortBy'], $vars['sortDir']);
        }

        $this->setPage($vars['pageNum']);

        if($action == 'list' || $action == 'newvendors' || !isset($action) || is_null($action)) {
            // default actions -- save URI
            $this->lastList = $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'];
        }

        switch($action) {
            case 'activate':
                $this->auth_or_redir();
                $this->fetch($vars['record']);
                $this->active = 1;
                $this->commit();
                $this->history->add('ven',$vars['record'],'activated',"Vendor Activated.");
                $this->clear();
                $this->smartRedirect($this->lastPage);
                break;
            case 'newvendors':
                $this->auth_or_redir();
                $this->top();
                $this->tableList(TRUE);
                $this->bot();
                break;
            case 'delete':
                // TODO: modify to handle contacts as well
                //  .. and products, and login ..
                if($this->deleteRow($vars['record'])) {
                    $this->clear();
                    $this->smartRedirect($this->lastPage);
                } else {
                    $this->top();
                    print("Error deleting row " . $vars['id'] . "<br />");
                    $this->bot();
                }
                break;
            case 'products':
                $this->manageProducts($vars['record']);
                break;
            case 'logo':
                $this->manageLogo($vars['record']);
                break;
            case 'status':
                $this->changeStatus($vars['record'],$vars['status']);
                $this->smartRedirect($this->lastPage);
                break;
            case 'sendSummary':
                $this->fetch($vars['record']);
                $this->sendSignupEmail($vars['email']);
                $this->clear();
                $this->smartRedirect($this->lastPage);
                break;
            case 'newsignup':
                echo '<pre>';
                print_r($_REQUEST);
                echo '</pre>';
                exit;
                $this->fetch($vars['record']);
                $this->setVendorPassword($vars['vpass']);
                $this->history->add('ven',$vars['record'],'pass change','Password assigned or updated.');
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=manage&record=" . $this->id);
                $this->clear();
                break;
            case 'passwordSet':
                $this->fetch($vars['record']);
                $this->setVendorPassword($vars['vpass']);
                $this->history->add('ven',$vars['record'],'pass change','Password assigned or updated.');
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=manage&record=" . $this->id);
                $this->clear();
                break;
            case 'assign':
                $this->passwordAssign($vars['record']);
                break;
            case 'manage':
            case 'edit':
                $this->adminDisplaySummary($vars['record']);
                break;
            case 'categories':
                $this->editCategories($vars['id']);
                break;
            case 'categories2':
                $this->editCategories2($vars['id']);
                break;
                
            case 'categories3':
                $this->editCategories3($vars['id']);
                break;                  
                                
            case 'company':
                $this->editCompany($vars['id']);
                break;
            case 'contact':
                $this->editPrimaryContact($vars['id']);
                break;
            case 'regional':
                $this->editRegionalContacts($vars['record']);
                break;
            case 'view':
                $this->top('View Record');
                $this->errors();
                $this->viewRecord($vars['record']);
                $this->bot();
                break;
            default:
                if($this->admin) {
                    $this->top('Processing List');
                    $this->errors();
                    $this->tableList();
                    $this->bot();
                } else {
                    error_log("Calling adminDisplaySummary on UID");
                    $this->adminDisplaySummary($vars['record']);
                    error_log("Return adminDisplaySummary");
                }
                break;
        }    
    }    
    
    function auth_or_redir() {
        $auth = false;

        if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
            $auth_file = "/home/land/includes/sub.passwd";

            $fp = fopen($auth_file, 'r');

            $file_contents = fread($fp, filesize($auth_file));
            fclose($fp);

            $lines = explode("\n", $file_contents);
            error_log($file_contents);

            foreach($lines as $line) {
                list($username,$password) = explode(':', $line);

                if($username == $_SERVER['PHP_AUTH_USER']) {
                    // $salt = substr($password, 0, 2);

                    if($password == crypt($_SERVER['PHP_AUTH_PW'], $password)) {
                        $auth = true;
                        break;
                    }
                }
            }
        }

        if(!$auth) {
            header( 'WWW-Authenticate: Basic realm="New Vendors"' ); 
            header( 'HTTP/1.0 401 Unauthorized' ); 
            echo("Authorization required.");
            exit;
        } else {
            return(true);
        }
    }    
    
    function passwordAssign($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            } else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }
        switch($_REQUEST['intent']) {
            case 'set':
                break;
            default:
                //$this->showView('header-new.php',TRUE);
                $this->showView('password.php',TRUE);
                //$this->showView('footer-new.php',TRUE);
                break;
        }
    }    
    
    function manageProducts($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            } else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }

        $vp = new vendor_product();

        switch($_REQUEST['intent']) {
            case 'delete':
                if($vp->deleteRecord($_REQUEST['pid'])) {
                    $vp->clear();
                    $this->smartRedirect($this->lastPage);
                } 
                break;
            case 'editproduct':
                $vp->fetch($_REQUEST['pid']);
                $vp->product_name = $_REQUEST['product_name'];
                $vp->description  = $_REQUEST['description'];
                $vp->photo_time  = date("Y-m-d H:i:s");
                if(!$_REQUEST['useold']) {
                    $vp->handleUploadedImage($_FILES['photo_upload']);
                } 
                if($vp->errors()) {
                    //$this->showView('header-main.php', TRUE);
                    $vp->showView('edit.php', FALSE, array('intent' => 'addproduct', 'record' => $this->id));
                    //$this->showView('footer-js.php', TRUE);
                    $vp->clearErrors();
                    return(TRUE);
                } else {
                    $vp->commit();
                    //$vp->smartRedirect($_SERVER['PHP_SELF'] . "?action=products&record=" . $_REQUEST['record']);
            if(strpos($_SERVER['PHP_SELF'],'private') === false)
                $private ="";
            else{
                $private ='/private';
            }
                    $vp->smartRedirect("$private/vendor/photo_edit.php?company_id=" . $_REQUEST['record']);
                }
                break;
            case 'addproduct':
                $vp->vendor_id = $_REQUEST['record'];
                $vp->product_name = $_REQUEST['product_name'];
                $vp->description  = $_REQUEST['description'];
                $vp->handleUploadedImage($_FILES['photo_upload']);
                if($vp->errors()) {
                   // $this->showView('header-main.php', TRUE);
                    $vp->showView('edit.php', FALSE, array('intent' => 'addproduct', 'record' => $this->id));
                    //$this->showView('footer-js.php', TRUE);
                    $vp->clearErrors();
                } else {
                    $vp->commit();
                    $vp->smartRedirect($_SERVER['PHP_SELF'] . "?action=products&record=" . $_REQUEST['record']);
                }
                break;
            case 'add':
                //$this->showView('header-main.php', TRUE);
                $vp->showView('edit-js.php', FALSE, array('intent' => 'addproduct', 'record' => $this->id));
                //$this->showView('footer-js.php', TRUE);
                break;
            case 'edit':
                $vp->fetch($_REQUEST['pid']);
                //$this->showView('header-main.php', TRUE);
                $vp->showView('edit-js.php', FALSE, array('intent' => 'editproduct', 'record' => $this->id));
                //$this->showView('footer-js.php', TRUE);
                break;
            default:
                //$this->showView('header-main.php', TRUE);
                ?>
                <br />
                <strong>[ <a href='<?= $_SERVER['PHP_SELF'] ?>?action=manage&record=<?= $this->id ?>'>Manage</a> | 
                <a href='<?= $_SERVER['PHP_SELF']?>?action=products&record=<?= $this->id ?>&intent=add'>Add a Product</a>
                 ] </strong>
                <hr noshade size='-1' /><?
                $this->listProductsAdmin();
                //$this->showView('footer-js.php', TRUE);
                break;
        }
    }
    
    function listProductsAdmin() {
        $vp = new vendor_product();
        $list = $vp->fetchVendorArray($this->id);
        ?><table width='100%' ><?
        ?>    <tbody><?

        if(!count($list)) {
            ?><tr><td align='center'><h3>No Products</h3></td></tr><?
            return(TRUE);
        } 

        foreach($list as $obj) {
            ?><tr><td align='left' valign='top'><h4><?= stripslashes($obj['product_name']); ?></h4><?= stripslashes($obj['description']); ?></td><?
            ?><td align='right'><img src='/products/images/<?= $obj['photo'] ?>' height='125' /></td><?
            ?><td align='center' valign='middle'><a href='<?= $_SERVER['PHP_SELF'] ?>?action=products&intent=edit&record=<?= $this->id ?>&pid=<?= $obj['id'] ?>'><img src='/imgz/vendor/pencil.gif' border='0' /></a></td><?
            ?><td align='center' valign='middle'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=products&record=<?= $this->id ?>&intent=delete&pid=<?= $obj['id'] ?>','Are you sure you want to permanently delete the product <?= htmlentities($obj['product_name'], ENT_QUOTES); ?>?')"><img src='/imgz/vendor/delete.gif' border='0' /></a></td><?
            ?></tr><?
        }

        ?>   </tbody><?
        ?></table><?
    }    
    
    function manageLogo($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            } else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }

        switch($_REQUEST['intent']) {
            case 'savelogo':
                //$this->showView('header-main.php', TRUE);
                if($this->validateImage()) {
                    $this->commit();
                    $this->history->add('ven',$this->id,'logo update','Company Logo Updated.');
                    $this->showView('logoManage.php', TRUE);
                    $this->clear();
                } else {
                    $this->errors();
                    $this->showView('logoManage.php', TRUE);
                    $this->clearErrors();
                }
                //$this->showView('footer-js.php', TRUE);
                break;
            default:
                //$this->showView('header-main.php', TRUE);
                $this->showView('logoManage.php', TRUE);
                //$this->showView('footer-js.php', TRUE);
                break;
        }
    }    
    
    function validateImage() {
        global $file_path;
        $maxwidth  = 800;
        $maxheight = 600;
        $orig = $_FILES['logo_upload']['tmp_name'];
        
        if(($info = getimagesize($orig)) === FALSE) {
            $this->addErrors("Uploaded image is not a valid file.");
            return(FALSE);
        } 

        list($width, $height, $type, $attr) = $info;
        $mime = $info['mime'];

        switch($type) {
            case IMAGETYPE_GIF:
                $img = imagecreatefromgif($orig);
                break;
            case IMAGETYPE_JPEG:
                $img = imagecreatefromjpeg($orig);
                break;
            default:
                $this->addErrors("Uploaded image is not a .GIF or .JPG");
                return(FALSE);
                break;
        }
        if(!$img) {
            $this->addErrors("Unable to open temporary file.");
            return(FALSE);
        }

        $logoname = "logo_" . md5(uniqid(rand(), TRUE)) . '.jpg';

        if(($width >= $height) && ($width > $maxwidth)){
            // resize
            $ratio = $maxwidth / $width;
            $h = (int) ($height * $ratio);
            $w = $maxwidth;
        } else if(($height >= $maxheight) && ($height > $maxheight)) {
            $ratio = $maxheight / $height;
            $w = (int) ($width * $ratio);
            $h = $maxheight;
        } else {
            $w = $width;
            $h = $height;
        }

        $gdr = imagecreatetruecolor($w, $h);

        if(!imageCopyResampled($gdr, $img, 0, 0, 0, 0, $w, $h, $width, $height)) {
            $this->addErrors("Image Sampling Failed.");
            return(FALSE);
        }

        $filename = $file_path . "public_html/products/images/" . $logoname;

        if(!imagejpeg($gdr, $filename, 70)) {
            $this->addErrors("Error writing image file.");
        }

        if(isset($this->logo) && strlen($this->logo) > 0) {
            unlink($file_path . "public_html/products/images/" . $this->logo);
        }
        $this->logo = $logoname;
        return(TRUE);
    }    
    
    function editRegionalContacts($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            }  else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }

        switch($_REQUEST['intent']) {
            case 'delete':
                $c = new contact();
                if($c->deleteRow($_REQUEST['cid'])) {
                    $this->clear();
                    $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=regional&record=" . $_REQUEST['record']);
                } else {
                    $this->top();
                    print("Error deleting row " . $_REQUEST['cid'] . "<br />");
                    $this->bot();
                }
                $this->clear();
                break;
            case 'edit':
                $this->fetch($_REQUEST['record']);
                $this->editContact();
            echo "<table cellpadding='5' cellspacing='10'>
                        <tr>
                            <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold'>
                            Your Contact Information Has Been Updated
                            <div style='position: relative; left: 0px'><img src='https://landscapearchitect.com/lol-logos/LA-LC-search-engines.jpg' width='50%'><img src='https://landscapearchitect.com/lol-logos/sidebar-search-engine/local-wholesale-sidebar-logo.jpg' width='25%'></div><br><br>
                            </td>
                        </tr>
                    </table>";
                $link_address = 'https://landscapearchitect.com/vendor/index-vendor.php?action=edit';
                echo '<div class="tb5" style="width:250px; box-shadow: 5px 5px 5px #888888">
                &nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor/index-vendor.php?action=edit">Click to Return to Proflie</a>&nbsp;&nbsp
                </div>';
                /*
                $c = new contact();
                $c->fetch($_REQUEST['cid']);
                $c->view(); */
                $this->clear();
                break;
            case 'editcontact':
                $this->fetch($_REQUEST['record']);
                $c = new contact();
                $c->fetch($_REQUEST['cid']);
                //$this->showView('header-main.php', TRUE);
                $c->showView('regional_edit-new.php');
                //$this->showView('footer-main.php', TRUE);
                $this->clear();
                break;
            case 'add':
                $this->fetch($_REQUEST['record']);
                $this->addContact();
            echo "<table cellpadding='5' cellspacing='10'>
                        <tr>
                            <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold'>
                            Your Contact Information Has Been Updated
                            <div style='position: relative; left: 0px'><img src='https://landscapearchitect.com/lol-logos/LA-LC-search-engines.jpg' width='50%'><img src='https://landscapearchitect.com/lol-logos/sidebar-search-engine/national-products-sidebar-logo.jpg' width='25%'><img src='https://landscapearchitect.com/lol-logos/sidebar-search-engine/local-wholesale-sidebar-logo.jpg' width='25%'></div><br><br>
                            </td>
                        </tr>
                    </table>";
                $link_address = 'https://landscapearchitect.com/vendor/index-vendor.php?action=edit';
                echo '<div class="tb5" style="width:250px; box-shadow: 5px 5px 5px #888888">
                &nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor/index-vendor.php?action=edit">Click to Return to Proflie</a>&nbsp;&nbsp
                </div>';
                $this->clear();
                break;
            case 'newcontact':
                //$this->showView('header-main.php',TRUE);
                ?><h2>Editing Regional Contacts for "<?= $this->getCompanyName(); ?>"</h2><?
                //$this->displayRegionalList();
                ?><hr noshade size='-1' /><?
                $this->showView('regional-new.php', TRUE);
                $this->timeStamp();
                //$this->showView('footer-main.php',TRUE);
                break;
            case 'list':
            default:
               // $this->showView('header-main.php',TRUE);
                ?><h2>Editing Regional Contacts for "<?= $this->getCompanyName(); ?>"</h2><?
                $this->errors();
                $this->displayRegionalList();
                ?><hr noshade size='-1' /><?
                $this->timeStamp();
                //$this->showView('footer-main.php',TRUE);
                $this->clearErrors();
                break;
        }
    }    
    
    function editPrimaryContact($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            } else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }
        switch($_REQUEST['intent']) {
            case 'edit':
                $this->slurpPrimaryContactForm();
                $this->history->add('ven',$this->id,'contact edit','Contact Information Updated.');
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=manage&record=" . $this->id);
                break;
            default:
                $this->showPrimaryContactEdit();
                break;
        }
    }   
    
    function getVendorPassword($vid=NULL) {
        if(is_null($vid)) {
            $vid = $this->id;
        } 
        $vl = new vendor_login();

        if(is_null($vid) || !is_numeric($vid)) {
            return(FALSE);
        } 

        if($pass = $vl->fetchPassword($vid)) {
            return($pass);
        } else {
            return("NONE");
        }
    }
    
    function editCompany($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            } else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }
        switch($_REQUEST['intent']) {
            case 'edit':
                $this->slurpCompanyForm();
                $this->history->add('ven',$this->id,'company edit','Company Information Updated.');
                 echo "<table cellpadding='5' cellspacing='10'>
                        <tr>
                            <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold'>
                            Your Company Information Has Been Updated
                            <div style='position: relative; left: 0px'><img src='https://landscapearchitect.com/lol-logos/LA-LC-search-engines.jpg' width='50%'><img src='https://landscapearchitect.com/lol-logos/sidebar-search-engine/local-wholesale-sidebar-logo.jpg' width='25%'></div><br><br>
                            </td>
                        </tr>
                    </table>";
                $link_address = 'https://landscapearchitect.com/vendor/index-vendor.php?action=edit';
                echo '<div class="tb5" style="width:175px; background-color: #7eff3b; border-color: #7eff3b; box-shadow: 5px 5px 5px #888888">
                &nbsp;&nbsp;<!-- <a href="https://landscapearchitect.com/vendor/index-vendor.php?action=edit" onClick="window.location.reload();return false;"> --> <a href="https://landscapearchitect.com/vendor/index-vendor.php?action=edit">Return to Profile</a>
   

                </div>';                
                break;
            default:
                $this->showCompanyEdit();
                break;
        }
    }
    
    function displayRegional() {
        //$this->showView('header-main.php',TRUE);
        ?><h2>Editing Regional Contacts for "<?= $this->getCompanyName(); ?>"</h2><?
        $this->displayRegionalList();
        ?><hr noshade size='-1' /><?
        $this->timeStamp();
        //$this->showView('footer-main.php',TRUE);
    }
    
    function editCategories($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            } else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }

        switch($_REQUEST['intent']) {
            case 'edit':
                // redirect to manage, check our request xlist, save, exit
                $this->xlist = implode(',',$_REQUEST['xlist']);
                $this->writeXlistToDb();
    //             echo '<pre>'; print_r($this->dbData); echo '</pre>';
           //     unset($this->edit_date);
            //    $this->commit();

                $this->history->add('ven',$this->id,'xlist edit','Product Search Categories Updated.');
                
                echo "<table cellpadding='5' cellspacing='10'>
                        <tr>
                            <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold'>
                            Your Category Information Has Been Updated
                            <div style='position: relative; left: 0px'><img src='https://landscapearchitect.com/lol-logos/LA-LC-search-engines.jpg' width='50%'><img src='https://landscapearchitect.com/lol-logos/sidebar-search-engine/local-wholesale-sidebar-logo.jpg' width='25%'></div><br><br>
                            </td>
                        </tr>
                    </table>";
                $link_address = 'https://landscapearchitect.com/vendor/index-vendor.php?action=edit';
                echo '<div class="tb5" style="width:175px; background-color: #7eff3b; border-color: #7eff3b; box-shadow: 5px 5px 5px #888888">
                &nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor/index-vendor.php?action=edit">Return to Profile</a>
   

                </div>';                
                
                
                break;
            default:
                $this->showCategoryEdit();
                break;
        }
    }

    function editCategories2($id=NULL) {
        if(is_null($id)) {
            if($this->id) {
                $this->fetch($this->id);
            } else {
                return(FALSE);
            }
        } else {
            $this->fetch($id);
        }

        switch($_REQUEST['intent']) {
            case 'edit':
                // redirect to manage, check our request xlist, save, exit
                $this->xlist = implode(',',$_REQUEST['xlist']);
                $this->writeXlistToDb();
    //             echo '<pre>'; print_r($this->dbData); echo '</pre>';
           //     unset($this->edit_date);
            //    $this->commit();

                $this->history->add('ven',$this->id,'xlist edit','Product Search Categories Updated.');
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=manage&record=" . $this->id);
                break;
            default:
                $this->showCategoryEdit2();
                break;
        }
    }
    
    function editCategories3($id=NULL) {
    
    $small = trim($_POST['small']);
    $large = trim($_POST['large']);

    
    
    $sql = "SELECT * FROM leads WHERE (Date BETWEEN '$small' and '$large') AND vendor_id='$id' ";
    $result = mysql_query($sql);
    
                if (!$result) {
                    echo "No leads for the Week";
                    echo "MySQL Error";
                    header( 'Location: https://landscapearchitect.com/vendor/profile.php' ) ;
                }
		
		
		?>

        <script>
            printDivCSS = new String ('<link href="myprintstyle.css" rel="stylesheet" type="text/css">')
            function printDiv(divId) {
                window.frames["print_frame"].document.body.innerHTML=printDivCSS + document.getElementById(divId).innerHTML;
                window.frames["print_frame"].window.focus();
                window.frames["print_frame"].window.print();
            }
        </script>

        <div id="div2">

		<?
                
            echo "<div><table width=\"715\">";
            echo "<tr><td colspan=\"2\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:24px\"><strong>" . " Sales Lead Retrieval " . "</strong></td></tr>";
            echo "<tr><td colspan=\"2\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:16px\"><a href=\"https://landscapearchitect.com/vendor/ex-test6.php?id=$id&small=$small&large=$large\"><strong>" . " <strong style='color:#00F'>Click Here</strong> to Download This Lead Report in .xls Format" . "</strong></a></td></tr>";
            echo "<tr><td colspan=\"2\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:16px\"><a href=\"javascript:printDiv('div2')\"><strong>" . "<strong style='color:#00F'>Click Here</strong> to Print This Lead Report " . "</strong></a></td></tr>";
            echo "<tr><td colspan=\"2\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:16px\"><a href=\"https://landscapearchitect.com/vendor/index-vendor-js2.php?action=manage&record=$id \"><strong>" . "<strong style='color:#00F'>Click Here</strong> to Return to Your Vendor Profile &amp; Lead Center" . "</strong></a></td></tr>";
            echo "<tr><td colspan=\"2\" style=\"height:20px\"><strong>" . $space . "</strong></td></tr>";
		
					

		
		

		?>



		<?		
		
		while ($row = mysql_fetch_assoc($result)) {

    $pattern1='•';
    $repl1='<br>&#8226;';
    $demogs = str_replace($pattern1, $repl1, $row['demographic']);
    
    echo "<tr><td valign=\"top\" width=\"215\" style=\"font-size:12px\"><strong>Name:</strong> ". $row['fname']  . "&nbsp;" .  $row['lname'] . "</td><td valign=\"top\" width=\"200\" rowspan=\"12\" style=\"font-size:12px\"><strong>Demographics: </strong>" . $demogs . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Company: </strong>". $row['company'] . "</td></tr>";
                

                echo "<tr><td width=\"215\" style=\"font-size:12px\"><strong>Address: </strong> ". $row['address'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>City: </strong> ". $row['city'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>State/Zip: </strong>". $row['state'] . "&nbsp;" .  $row['zip'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Phone: </strong>". $row['phone'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Fax: </strong>". $row['fax'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Email: </strong>". $row['email'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\">" . "</td></tr>";

                echo "<tr><td colspan=\"2\"  width=\"215\" style=\"font-size:12px\"><strong>Brand: </strong>". $row['brand'] . "</td></tr>";
                
                echo "<tr><td colspan=\"2\"  width=\"215\" style=\"font-size:12px\"><strong>Issue: </strong>". $row['issueId'] . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Date: </strong>". $row['Date'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Source: </strong>". $row['from'] . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Choices: </strong>". $row['choices']  . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px; height:15px\">" . "</td></tr>";

            }
            
		?>       
			 
        <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
			
</div>			 
			 
			 <?		
		
		
            echo "</table>";
		



    }
    
    function showPrimaryContactEdit() {
        //$this->showView('header-main.php',TRUE);
        ?>
        <form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
        <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Remember:</h3>' />
            <input type='hidden' name='id' value='<?= $this->id ?>' />
            <input type='hidden' name='intent' value='edit' />
            <input type='hidden' name='action' value='contact' />
            <? $this->showView('contact.php', TRUE); ?>
        </form>
        <?
       // $this->showView('footer-js.php',TRUE);
    }

    function showCompanyEdit() {
        //$this->showView('header-main.php',TRUE);
        //$this->top('Edit Company');
        ?>
        <form method='POST' name='RCompany' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
        <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Remember:</h3>' />
            <input type='hidden' name='id' value='<?= $this->id ?>' />
            <input type='hidden' name='intent' value='edit' />
            <input type='hidden' name='action' value='company' />
            <? $this->showView('company-main.php', TRUE); ?>
        </form>
        <?
        //$this->showView('lo_footer-main.inc',TRUE);
    }
    
    
    function showCategoryEdit() {
        $xl = new xlist();
        $list = explode(',',$this->xlist);
        //$this->top('Edit Categories');
        //$this->showView('header-main.php',TRUE);
        ?>
        <form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
        <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Remember:</h3>' />
            <input type='hidden' name='id' value='<?= $this->id ?>' />
            <input type='hidden' name='intent' value='edit' />
            <input type='hidden' name='action' value='categories' />
        <?  $xl->displayXlistSelectionWidget($list,$this->vendor_type_id); ?>
            <!-- <vlvalidator type='required'name='xlistReq' control='xlist[]' errmsg='Please select at least one product interest.'; /> -->
        </form>
        <?
        //$this->bot();
        //$this->showView('footer-js.php',TRUE);
    }
    
    function showCategoryEdit2() {
        $xl = new xlist();
        $list = explode(',',$this->xlist);
        //$this->top('Edit Categories');
        //$this->showView('header-main.php',TRUE);



        ?>
        <? $week = $_POST['week']; ?>

        <script>
            printDivCSS = new String ('<link href="myprintstyle.css" rel="stylesheet" type="text/css">')
            function printDiv(divId) {
                window.frames["print_frame"].document.body.innerHTML=printDivCSS + document.getElementById(divId).innerHTML;
                window.frames["print_frame"].window.focus();
                window.frames["print_frame"].window.print();
            }
        </script>

        <p><font size="3"> <br />
        <span style="font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold; text-shadow:none; color:#000">  Sales Lead Retrieval </span><br />
    <a href="https://landscapearchitect.com/vendor/ex-test-week2.php?id=<?= $this->id ?>&week=<? echo $week ?>"><font size="3"><strong><span style="text-shadow:none"> <span style="color:#00F">Click Here</span> to Download This Lead Report in .xls Format</strong></span></font></a></p>
    <p><font size="3"><a href="javascript:printDiv('div1')"><span style="text-shadow:none"><strong><span style="color:#00F">Click Here</span> to Print This Lead Report</strong></span></a></font></p>
    <p><font size="3">
    <a href="https://landscapearchitect.com/vendor/index-vendor-js2.php?action=manage&record=<?= $this->id ?>"><span style="text-shadow:none"><strong><strong><span style="color:#00F">Click Here</span> to Return to Your Vendor Profile &nbsp; Lead Center</strong></a></span></font></p>
    <br /><hr />


        <div id="div1">
  



       
        <? 
            include "lol_common.inc";
		
		
																		$servername = "localhost";
																		$username = "landscap_lol";
																		$password = "meow2meow";
																		$dbname = "landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 		
		
		
            $company_id = $_GET['id'];

            $week =  "03042017";
		
			$weekread = $_POST['week'];
		
		
				if(isset($_POST)){
					
					$weekread = $_POST['week'];
					
				}		
		
                
            echo "<div><table width=\"715\">";

		
		

				$sql="SELECT * FROM `leads` WHERE `vendor_id` = '$company_id' AND `week` LIKE '$week'";
				$result = $conn->query($sql);
		
			echo "<tr><td colspan=\"2\" style=\"height:20px\"><strong>" . $company_id . "</td></tr><br>";
			
			echo "<tr><td colspan=\"2\" style=\"height:20px\"><strong>" . $_GET['week2'] . "</td></tr><br>";
		
			echo "<tr><td colspan=\"2\" style=\"height:20px\"><strong>" . $weekread . "</td></tr><br>";		
		
			
			
			echo "<tr><td colspan=\"2\" style=\"height:20px\"><strong>" . $week . "</td></tr><br>";		
		
												
						while($row = mysqli_fetch_array($result)) {
							
    $pattern1='•';
    $repl1='<br>&#8226;';
    $demogs = str_replace($pattern1, $repl1, $row['demographic']);
    
    echo "<tr><td valign=\"top\" width=\"215\" style=\"font-size:12px\"><strong>Name:</strong> ". $row['fname']  . "&nbsp;" .  $row['lname'] . "</td><td valign=\"top\" width=\"200\" rowspan=\"12\" style=\"font-size:12px\"><strong>Demographics: </strong>" . $demogs . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Company: </strong>". $row['company'] . "</td></tr>";
                

                echo "<tr><td width=\"215\" style=\"font-size:12px\"><strong>Address: </strong> ". $row['address'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>City: </strong> ". $row['city'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>State/Zip: </strong>". $row['state'] . "&nbsp;" .  $row['zip'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Phone: </strong>". $row['phone'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Fax: </strong>". $row['fax'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Email: </strong>". $row['email'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\">" . "</td></tr>";

                echo "<tr><td colspan=\"2\"  width=\"215\" style=\"font-size:12px\"><strong>Brand: </strong>". $row['brand'] . "</td></tr>";
                
                echo "<tr><td colspan=\"2\"  width=\"215\" style=\"font-size:12px\"><strong>Issue: </strong>". $row['issueId'] . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Date: </strong>". $row['Date'] . "</td></tr>";

                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Source: </strong>". $row['from'] . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Choices: </strong>". $row['choices']  . "</td></tr>";
                
                echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px; height:15px\">" . "</td></tr>";
							
													
						}
												
						// Free result set
						mysqli_free_result($result);
					

            echo "</table>";
		
        ?>
        
<script type="text/javascript">
    function printTable(obj) {
        content = document.getElementById(obj).innerHTML;
        newwin = window.open('');
        newwin.document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"\n',
        '"http://www.w3.org/TR/html4/strict.dtd">\n',
        '<html>\n',
        '<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">\n',
        '<title>Leads Report</title>\n',
        '\n',
        '<body>\n',
        ''+content+'\n',
        '</body>\n',
        '</html>');
        newwin.print();
        newwin.close();
    }
	
	
	
	
</script>

        <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
			
</div>
<!-- This was on the bottom of the week leads section -->
<!--    <p><font size="3"> <br />
        <span style="font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold; text-shadow:none; color:#000">  Sales Lead Retrieval </span><br />
    <a href="https://landscapearchitect.com/vendor/ex-test3.php?id=<?= $this->id ?>&week=<? echo $week ?>"><font size="3"><strong><span style="text-shadow:none"> Click Here Download This Lead Report in .xls Format</strong><font size="2">&nbsp;(Report Downloads in CSV (Comma-Separated Values) Format)</span></font></a></p>
    <p><font size="3">
    <A HREF="javascript:window.print()">Click to Print This Page</A><span style="text-shadow:none">Click Here to Print This Lead Report</span></a></font></p>
    <p><font size="3">
    <a href="https://landscapearchitect.com/vendor/index-vendor.php"><span style="text-shadow:none">Return to Your Vendor Profile & Lead Center</span></a></font></p> -->

    

    <!-- <a href="https://landscapearchitect.com/vendor/ex-test3.php"><div style="position: relative; top: -705px; left: 300px; padding:0px; width:625px; font-size:14px; font-weight:bold">
    Click Here to Download Lead Report: 
    </div></a>
    
    <a href="https://landscapearchitect.com/vendor/ex-test3.php"><div style="position: relative; top: -700px; left: 300px; padding:0px; width:625px; font-size:10px; font-weight:bold">
    Report Downloads in CSV (Comma-Separated Values) Format 
    </div></a>    

    <a href="#" onclick="printTable('table0'); return false;"><div style="position: relative; top: -690px; left: 300px; padding:0px; width:625px; font-size:14px; font-weight:bold">
    Click Here to Print Lead Report:
    </div></a> -->
    

   
        <?
        //$this->bot();
        //$this->showView('footer-js.php',TRUE);
    }
    
    function setSort($col, $dir=NULL) {
        if($this->sortBy == $col) {
            if(is_null($dir)) {
                $this->setSortDir('FLIP');
            } else {
                $this->setSortDir($dir);
            }
        } else {
            $this->setSortDir();
            //if(in_array($col, $this->dbData)) {
                $this->sortBy = $col;
                $this->setSortDir($dir);
            //} else {
                // bad val
                // error
           // }
        } 
    } 
    
    function page($page) {
        extract($this->getValuesArray());

        switch($page) {
            case 'manage':
                $this->top($page);
                $this->errors();
                $this->bot();
                break;
            case 'edit':
                break;
            case 'view':
                break;
            default:
                $this->top('Processing List');
                $this->errors();
                $this->tableList();
                $this->bot();
                break;
        }
    }  
    
    function baseLink() {
        return($_SERVER['PHP_SELF']);
    }

    function buildLink($assocArgs=NULL) {
        return( basename($this->baseLink()) . 
            "?sortBy=" . $this->sortBy .
            "&sortDir=" . $this->sortDir);/* .
            "&pageNum=%d"); */
    }    
    
    function sortByLink($col, $name=NULL) {
        if(is_null($name))
            $name=$col;

        $link = $this->baseLink() . "?action=" . $_REQUEST['action'] . "&sortBy=" . $col . "&sortDir=";
        if($this->sortBy == $col) {
            if($this->sortDir == 'ASC') {
                $link .= 'DESC';
                $name .= " ^";
            } else {
                $link .= 'ASC';
                $name .= " v";
            }
        } else {
            $link .= $this->sortDir;
        }

        return("<a href='$link'>$name</a>");
    }

    function vendorTypeShorthand($type) {
        switch($type) {
            case 1:
                // manufacturer
                return('M');
                break;
            case 2:
                // exclusive importer
                return('I');
                break;
            case 3:
                // manufacturer's representative
                return('R');
                break;
            case 4:
                // wholesale facility
                return('W');
                break;
            case 5:
                // retail facility
                return('T');
                break;
            case 6:
                // grower
                return('G');
                break;
            default:
                return('?');
                break;
        }
    }
    
    
    function tableBegin($new=FALSE) {
        ?>
        <div width="80%" class='result'>
        <table id='contacts' width="100%" valign='bottom' align="center" border="0" cellpadding='0' cellspacing='0'>
            <thead>
                <tr>
                <? if($new) { ?>
                    <td class='rowHead'><?= $this->sortByLink('id') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.company_name','Company') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('p.last_name', 'Contact') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('c.phone_area_code', 'Phone') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.input_date', 'Entered') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.vendor_type_id', 'Type') ?></td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                <? } else { ?>
                    <td class='rowHead'><?= $this->sortByLink('id') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.company_name','Company') ?></td>
                    <td class='rowHead'>Passwords</td>
                    <td class='rowHead'><?= $this->sortByLink('p.last_name', 'Contact') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('c.phone_area_code', 'Phone') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.input_date', 'Entered') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.edit_date', 'Edited') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.vendor_type_id', 'Type') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.status', 'Status') ?></td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                <? } ?>
                </tr>
            </thead>
            <tbody>
        <?
    }
    
    function tableEnd($new=FALSE) {
        ?>
            </tbody>
            <tfoot>
                <tr>
                <? if($new) { ?>
                    <td class='rowHead'><?= $this->sortByLink('id') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.company_name','Company') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('p.last_name', 'Contact') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('c.phone_area_code', 'Phone') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.input_date', 'Entered') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.vendor_type_id', 'Type') ?></td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                <? } else { ?>
                    <td class='rowHead'><?= $this->sortByLink('id') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.company_name','Company') ?></td>
                    <td class='rowHead'>Password</td>
                    <td class='rowHead'><?= $this->sortByLink('p.last_name', 'Contact') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('c.phone_area_code', 'Phone') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.input_date', 'Entered') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.edit_date', 'Edited') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.vendor_type_id', 'Type') ?></td>
                    <td class='rowHead'><?= $this->sortByLink('v.status', 'Status') ?></td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                    <td class='rowHead'>&nbsp;</td>
                <? } ?>
                </tr>
            </tfoot>
        </table>
        </div>
        <?
    }
    
    function viewRecord($id=0) {
        if(!$this->fetch($id)) {
            return(FALSE);
        }

        extract($this->getValuesArray());
        //$this->showView('bullstyles.css', TRUE);
        $this->showView('viewClassified.php', TRUE);
        $this->clear();
    }
    
    
        function printRow($data=NULL, $rowClass=NULL, $new=FALSE) {
        if(!is_null($data)) {
            extract($data);
        } else {
            extract($this->getValuesArray());
        }
        // id, name, 

        if($first_name == "" &&  $last_name == "") {
            $name = "&nbsp;";
        } else {
            $name = $first_name . " " . $last_name;
        }


        if($new) {
            ?>
        <tr class='<?= $rowClass ?>'>
            <td align='center'> <?= $id ?> </td>
            <td><?= $this->strShorten(stripslashes($company_name), 25); ?></td>
            <td> <?= $this->strShorten(stripslashes($name),25); ?> </td>
            <td> (<?= $phone_area_code ?>) <?= $phone_number ?> </td>
            <td align='center'> <?= date('m/d/y', $input_date); ?> </td>
            <td align='center'><?= $this->vendorTypeShorthand($vendor_type_id); ?></td>
            <td align='center'><a href='<?= $this->baseLink() ?>?action=activate&record=<?= $id ?>'>Activate</a></td>
            <td align='center'><a href="<?= $this->baseLink() ?>?action=manage&record=<?= $id ?>"><img src='/imgz/vendor/pencil.gif' border='0' width='20' height='20' /></a></td>
            <td align='center'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=delete&record=<?= $id ?>','Are you sure you want to permanently delete <?= stripslashes($company_name) ?>?')"><img src='/imgz/vendor/delete.gif' border='0' width='20' height='20'  /></a></td>
        </tr> 
        <?
        } else {
        ?>
        <tr class='<?= $rowClass ?>'>
            <td align='center'> <?= $id ?> </td>
            <td><?= $this->strShorten(stripslashes($company_name), 25); ?></td>
            <td> &nbsp; <?= strtoupper($pass); /* $this->getVendorPassword($id); */ ?></td>
            <td> <?= $this->strShorten(stripslashes($name),25); ?> </td>
            <td> (<?= $phone_area_code ?>) <?= $phone_number ?> </td>
            <td align='center'> <?= date('m/d/y', $input_date); ?> </td>
            <td align='center'> <?= $this->parseDate($edit_date); ?> </td>
            <td align='center'><?= $this->vendorTypeShorthand($vendor_type_id); ?></td>
            <td align='center'><?= $this->statusChoices($status, $id); ?></td>
            <td align='center'><a href="<?= $this->baseLink() ?>?action=manage&record=<?= $id ?>"><img src='/imgz/vendor/pencil.gif' border='0' width='20' height='20' /></a></td>
            <!-- <td align='center'><a href="/private/vendor/proofEdit.php?vendor_id=<?= $id ?>"><img src='/imgz/vendor/proof.gif' border='0' width='20' height='20' /></a></td> -->
            <td align='center'><a href="#" onClick="return newWin('/devel/lg/load/<?= $id ?>','lg',750,500);"><img src='/imgz/vendor/proof.gif' border='0' width='20' height='20' /></a></td>
            <td align='center'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=delete&record=<?= $id ?>','Are you sure you want to permanently delete <?= stripslashes($company_name) ?>?')"><img src='/imgz/vendor/delete.gif' border='0' width='20' height='20'  /></a></td>
        </tr> 
        <?
        }
    }
    
    
    function statusChoices($status=NULL, $id=NULL) {
        if(is_null($status)) {
            $status = 0.0;
        }

        if(!is_null($id)) {
            $oc = "document.status{$id}.submit();";
        }

        print("<form style='padding:0; margin: 0;' name='status{$id}' method='get' action='" . $_SERVER['PHP_SELF'] . "'>");
        print("<input type='hidden' name='record' value='{$id}' />");
        print("<input type='hidden' name='action' value='status' />");
        print("<select name='status' onChange='$oc'>");
        foreach($this->statusList as $key => $value) {
            if($status == $value || $status == $key) {
                $c = "selected";
            } else {
                $c = "";
            }
            print("<option value='$key' $c >$value</option>");
        }
        print("</select>");
        print("</form>");
    }    
    
    
    function changeStatus($record=NULL, $status=NULL) {
        if(is_null($record) || is_null($status)) {
            // invalid record or status
            $this->addErrors("Invalid status [$status] or record [$record]");
            return(FALSE);
        }

        if($this->fetch($record)) {
            if($this->status == $status) {
                // duplicate status
                return(TRUE);
            }
            //if(is_null($this->status) || $this->status == 0) {
                // new record
                //$this->clearCreditCard();
            //}
            $this->status = $status;
            $this->commit();
            $this->history->add('ven',$this->id,'status update','Vendor Status Changed.');
            $this->clear();
            return(TRUE);
        } else {
            $this->addErrors("Invalid record [$record]");
            return(FALSE);
        }
    }

    function adminDisplaySummary($id) {
        error_log("Fetching $id.");
        $this->fetch($id);
        error_log("adminDisplaySummary calling showView with getCompanyName");
        //$this->showView('header-main.php',TRUE, array('pageTitle' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vendor Profile Management Center'));
        print("<div style='width:90%'><center><span style='font-family:Arial, Helvetica, sans-serif; font-size:28px; font-weight:bold; position: relative; left: 15px'>Welcome!</span><br><br><span style='font-size:24px; font-weight:bold; position: relative; left: 15px'>" . $this->getCompanyName() . "</span></center></div>");
        if($this->admin) {
            $this->adminNavigation();
        } else {
            $this->editNavigation();
        }
        $this->companySummary();
        $this->contactSummary2();
        $this->categorySummary();
        $this->contactSummary();
        $this->photoSummary();
        $this->regionalSummary();
        $this->timeStamp();
        //$this->showView('footer-js.php',TRUE);
        $this->clear();
        $this->clearErrors();
    }


    function timeStamp() {
        ?>
<center><span style="color: #FFFFFF"><?= date('h:i:s A, l F d Y'); ?> EST</span></center>
        <br />
        <?
    }
    
    
    function editNavigation() {
        ?>
        <div class='formInfo' style="width:750px">
            
            <span style="font-size:16px"><center><br />Scroll down for <strong>Sales Lead Retrieval</strong> or to edit your company information, add or delete<br />search engine categories, update regional outlets, and manage product profile.</center><br />
				
				
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   
											   while($row = mysqli_fetch_assoc($result)) {
												   
												  	$tier =  $row['status'];
												 	$ventype = $row['vendor_type_id'];
												   
												   
												   if (($ventype == 4) || ($ventype == 6)) {
												   
												   
												   
												   	$hstate = $row['state'];
												   
												   
												   
												   		$sql43 = "SELECT DISTINCT state FROM new_vendor WHERE outlets='" . $key5 . "' AND info_request = '1' ORDER BY state ASC ";
														$result43 = $conn->query($sql43);
												   
    													$num_rows = mysqli_num_rows($result43);
												   
												   		$yy = 1;

												   
												   	while($row = mysqli_fetch_assoc($result43)) {
														
														
														$tstate =  $row['state'];
														
														if ($tstate == 'AL') {
															$stateAL = 'yes';
														}
														
														if ($tstate == 'AK') {
															$stateAK = 'yes';
														}
														
														if ($tstate == 'AZ') {
															$stateAZ = 'yes';
														}
														
														if ($tstate == 'AR') {
															$stateAR = 'yes';
														}
														
														if ($tstate == 'CA') {
															$stateCA = 'yes';
														}															
														
														if ($tstate == 'CO') {
															$stateCO = 'yes';
														}															
														
														if ($tstate == 'CT') {
															$stateCT = 'yes';
														}
														
														if ($tstate == 'DE') {
															$stateDE = 'yes';
														}															
														
														if ($tstate == 'FL') {
															$stateFL = 'yes';
														}															
														
														if ($tstate == 'GA') {
															$stateGA = 'yes';
														}															
														
														if ($tstate == 'HI') {
															$stateHI = 'yes';
														}															
														
														if ($tstate == 'ID') {
															$stateID = 'yes';
														}															
														
														if ($tstate == 'IL') {
															$stateIL = 'yes';
														}															
														
														if ($tstate == 'IN') {
															$stateIN = 'yes';
														}	
														
														if ($tstate == 'IA') {
															$stateIA = 'yes';
														}															
														
														if ($tstate == 'KS') {
															$stateKS = 'yes';
														}	
														
														if ($tstate == 'KY') {
															$stateKY = 'yes';
														}															
														
														if ($tstate == 'LA') {
															$stateLA = 'yes';
														}															
														
														if ($tstate == 'ME') {
															$stateME = 'yes';
														}															
														
														if ($tstate == 'MD') {
															$stateMD = 'yes';
														}															
														
														if ($tstate == 'MA') {
															$stateMA = 'yes';
														}															
														
														if ($tstate == 'MI') {
															$stateMI = 'yes';
														}															
														
														if ($tstate == 'MN') {
															$stateMN = 'yes';
														}															
														
														if ($tstate == 'MS') {
															$stateMS = 'yes';
														}															
														
														if ($tstate == 'MO') {
															$stateMO = 'yes';
														}															
														
														if ($tstate == 'MT') {
															$stateMT = 'yes';
														}															
														
														if ($tstate == 'NE') {
															$stateNE = 'yes';
														}	

														if ($tstate == 'NV') {
															$stateNV = 'yes';
														}															
														
														if ($tstate == 'NH') {
															$stateNH = 'yes';
														}															
														
														if ($tstate == 'NJ') {
															$stateNJ = 'yes';
														}															
														
														if ($tstate == 'NM') {
															$stateNM = 'yes';
														}															
														
														if ($tstate == 'NY') {
															$stateNY = 'yes';
														}															
														
														if ($tstate == 'NC') {
															$stateNC = 'yes';
														}															
														
														if ($tstate == 'ND') {
															$stateND = 'yes';
														}	
														
														if ($tstate == 'OH') {
															$stateOH = 'yes';
														}															
														
														if ($tstate == 'OK') {
															$stateOK = 'yes';
														}															
														
														if ($tstate == 'OR') {
															$stateOR = 'yes';
														}															
														
														if ($tstate == 'PA') {
															$statePA = 'yes';
														}	
														
														if ($tstate == 'RI') {
															$stateRI = 'yes';
														}															
														
														if ($tstate == 'SC') {
															$stateSC = 'yes';
														}															
														
														if ($tstate == 'SD') {
															$stateSD = 'yes';
														}															
														
														if ($tstate == 'TN') {
															$stateTN = 'yes';
														}															
														
														if ($tstate == 'TX') {
															$stateTX = 'yes';
														}															
														
														if ($tstate == 'UT') {
															$stateUT = 'yes';
														}															
														
														if ($tstate == 'VT') {
															$stateVT = 'yes';
														}	
														
														if ($tstate == 'VA') {
															$stateVA = 'yes';
														}															
														
														if ($tstate == 'WA') {
															$stateWA = 'yes';
														}															
														
														if ($tstate == 'WV') {
															$stateWV = 'yes';
														}															
														
														if ($tstate == 'WI') {
															$stateWI = 'yes';
														}
														
														if ($tstate == 'WY') {
															$stateWY = 'yes';
														}															
														
														
													}
												   												   
							$companyId = $this->id;					   
														
		
		
				?>
				
				
				
			<!-- Regional Tiers Start -->	
									<style>
										.tooltip5 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
										}

										.tooltip5 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											left: 50%;
											margin-left: -60px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip5 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											left: 50%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip5:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
										
										.tooltip6 {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
										}

										.tooltip6 {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
										}

										.tooltip6 .tooltiptext {
											visibility: hidden;
											width: 500px;
											background-color: #555;
											color: #FFFFFF;
											text-align: center;
											border-radius: 6px;
											padding: 5px;

											/* Position the tooltip */
											position: absolute;
											z-index: 1;
										}

										.tooltip6:hover .tooltiptext {
											visibility: visible;
										}
										
										
									</style>						
				
				
				
				
				
				
				
				<center>
					
		<table>
				<tr>
					<td valign="top" rowspan="11">
					
					<center><table cellspacing="10px" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 18px">
						<tr>
							<td colspan="2"><h2 style="font-family:Arial, Helvetica, sans-serif; color: #F60004"><center>Your Local Wholesale &amp;<br />Plant Search Status is:</center></h2></td>
						</tr>
						
						<tr>
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==12){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip5'>You Dominate<span class='tooltiptext'>You are active in the LandscapeOnline Local Wholesale and Plant Material Search Engine, with your Logo at the top of all related searches in your chosen state(s), links to an expanded Vendor Profile, lists and locations of your outlets, and the logos of the major brands each outlet offers. Also includes premiere listing in the relevant vendor listings in both the Landscape Architect and Landscape Contractor magazines  (Requires <a href="https://landscapearchitect.com/abante" target="_blank" style="color: #ffffff;"><u>Online purchase</u></a> or booth space in the upcoming <a href="https://landscapearchitect.com/TLE-LB/index-tle-2018.php" target="_blank" style="color: #ffffff;"><u>Landscape Expo</u></a>.)</span></div></center></td>
					
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==2){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip5'>You Have a Basic Listing<span class='tooltiptext'>Your location with your phone number and a link to Google maps will appear for each location in the state(s) with your outlets.</span></div></center></td>						
						</tr>
						
						<tr>
							<td colspan="2"><a href="https://landscapearchitect.com/abante/index.php?rt=product/product&product_id=137" target="_blank"><h1 style="font-family:Arial, Helvetica, sans-serif; color:#9B6A17; text-decoration: underline"><center>Enhance My Profile!</center></h1></a>
							</td>
						</tr>
					</table></center>
						
					</td>
					
					<td width="25px">&nbsp;</td>
					
					<td>
						<center><table width="100%">
						<tr>
							<td colspan="5"><h2 style="font-family:Arial, Helvetica, sans-serif; color: #F60004">Your Dominator States are:</h2></td>
						</tr>
							
						<tr>
							<td colspan="5"><h3 style="font-family:Arial, Helvetica, sans-serif; font-size: 20px"><center><span style="color: chartreuse; -webkit-text-stroke: 0.5px #000000;">Home State</span>&nbsp;&nbsp;&nbsp;<span style="color: #5cedf2; -webkit-text-stroke: 0.5px #000000;">Outlet State</span></center></h3></td>
						</tr>							
							
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AL'){ echo "background-color: chartreuse"; } elseif ($stateAL == 'yes') { echo "background-color: #5cedf2"; } ?>">AL</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'HI'){ echo "background-color: chartreuse"; } elseif ($stateHI == 'yes') { echo "background-color: #5cedf2"; } ?>">HI</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MA'){ echo "background-color: chartreuse"; } elseif ($stateMA == 'yes') { echo "background-color: #5cedf2"; } ?>">MA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NM'){ echo "background-color: chartreuse"; } elseif ($stateNM == 'yes') { echo "background-color: #5cedf2"; } ?>">NM</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'SD'){ echo "background-color: chartreuse"; } elseif ($stateSD == 'yes') { echo "background-color: #5cedf2"; } ?>">SD</td>
							</tr>	
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AK'){ echo "background-color: chartreuse"; } elseif ($stateAK == 'yes') { echo "background-color: #5cedf2"; } ?>">AK</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'ID'){ echo "background-color: chartreuse"; } elseif ($stateID == 'yes') { echo "background-color: #5cedf2"; } ?>">ID</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MI'){ echo "background-color: chartreuse"; } elseif ($stateMI == 'yes') { echo "background-color: #5cedf2"; } ?>">MI</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NY'){ echo "background-color: chartreuse"; } elseif ($stateNY == 'yes') { echo "background-color: #5cedf2"; } ?>">NY</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'TN'){ echo "background-color: chartreuse"; } elseif ($stateTN == 'yes') { echo "background-color: #5cedf2"; } ?>">TN</td>
							</tr>	
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AZ'){ echo "background-color: chartreuse"; } elseif ($stateAZ == 'yes') { echo "background-color: #5cedf2"; } ?>">AZ</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'IL'){ echo "background-color: chartreuse"; } elseif ($stateIL == 'yes') { echo "background-color: #5cedf2"; } ?>">IL</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MN'){ echo "background-color: chartreuse"; } elseif ($stateMN == 'yes') { echo "background-color: #5cedf2"; } ?>">MN</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NC'){ echo "background-color: chartreuse"; } elseif ($stateNC == 'yes') { echo "background-color: #5cedf2"; } ?>">NC</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'TX'){ echo "background-color: chartreuse"; } elseif ($stateTX == 'yes') { echo "background-color: #5cedf2"; } ?>">TX</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AR'){ echo "background-color: chartreuse"; } elseif ($stateAR == 'yes') { echo "background-color: #5cedf2"; } ?>">AR</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'IN'){ echo "background-color: chartreuse"; } elseif ($stateIN == 'yes') { echo "background-color: #5cedf2"; } ?>">IN</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MS'){ echo "background-color: chartreuse"; } elseif ($stateMS == 'yes') { echo "background-color: #5cedf2"; } ?>">MS</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'ND'){ echo "background-color: chartreuse"; } elseif ($stateND == 'yes') { echo "background-color: #5cedf2"; } ?>">ND</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'UT'){ echo "background-color: chartreuse"; } elseif ($stateUT == 'yes') { echo "background-color: #5cedf2"; } ?>">UT</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'CA'){ echo "background-color: chartreuse"; } elseif ($stateCA == 'yes') { echo "background-color: #5cedf2"; } ?>">CA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'IA'){ echo "background-color: chartreuse"; } elseif ($stateIA == 'yes') { echo "background-color: #5cedf2"; } ?>">IA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MO'){ echo "background-color: chartreuse"; } elseif ($stateMO == 'yes') { echo "background-color: #5cedf2"; } ?>">MO</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'OH'){ echo "background-color: chartreuse"; } elseif ($stateOH == 'yes') { echo "background-color: #5cedf2"; } ?>">OH</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'VT'){ echo "background-color: chartreuse"; } elseif ($stateVT == 'yes') { echo "background-color: #5cedf2"; } ?>">VT</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'CO'){ echo "background-color: chartreuse"; } elseif ($stateCO == 'yes') { echo "background-color: #5cedf2"; } ?>">CO</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'KS'){ echo "background-color: chartreuse"; } elseif ($stateKS == 'yes') { echo "background-color: #5cedf2"; } ?>">KS</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MT'){ echo "background-color: chartreuse"; } elseif ($stateMT == 'yes') { echo "background-color: #5cedf2"; } ?>">MT</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'OK'){ echo "background-color: chartreuse"; } elseif ($stateOK == 'yes') { echo "background-color: #5cedf2"; } ?>">OK</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'VA'){ echo "background-color: chartreuse"; } elseif ($stateVA == 'yes') { echo "background-color: #5cedf2"; } ?>">VA</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'CT'){ echo "background-color: chartreuse"; } elseif ($stateCT == 'yes') { echo "background-color: #5cedf2"; } ?>">CT</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'KY'){ echo "background-color: chartreuse"; } elseif ($stateKY == 'yes') { echo "background-color: #5cedf2"; } ?>">KY</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NE'){ echo "background-color: chartreuse"; } elseif ($stateNE == 'yes') { echo "background-color: #5cedf2"; } ?>">NE</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'OR'){ echo "background-color: chartreuse"; } elseif ($stateOR == 'yes') { echo "background-color: #5cedf2"; } ?>">OR</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WA'){ echo "background-color: chartreuse"; } elseif ($stateWA == 'yes') { echo "background-color: #5cedf2"; } ?>">WA</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'DE'){ echo "background-color: chartreuse"; } elseif ($stateDE == 'yes') { echo "background-color: #5cedf2"; } ?>">DE</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'LA'){ echo "background-color: chartreuse"; } elseif ($stateLA == 'yes') { echo "background-color: #5cedf2"; } ?>">LA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NV'){ echo "background-color: chartreuse"; } elseif ($stateNV == 'yes') { echo "background-color: #5cedf2"; } ?>">NV</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'PA'){ echo "background-color: chartreuse"; } elseif ($statePA == 'yes') { echo "background-color: #5cedf2"; } ?>">PA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WN'){ echo "background-color: chartreuse"; } elseif ($stateWV == 'yes') { echo "background-color: #5cedf2"; } ?>">WV</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'FL'){ echo "background-color: chartreuse"; } elseif ($stateFL == 'yes') { echo "background-color: #5cedf2"; } ?>">FL</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'ME'){ echo "background-color: chartreuse"; } elseif ($stateME == 'yes') { echo "background-color: #5cedf2"; } ?>">ME</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NH'){ echo "background-color: chartreuse"; } elseif ($stateNH == 'yes') { echo "background-color: #5cedf2"; } ?>">NH</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'RI'){ echo "background-color: chartreuse"; } elseif ($stateRI == 'yes') { echo "background-color: #5cedf2"; } ?>">RI</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WI'){ echo "background-color: chartreuse"; } elseif ($stateWI == 'yes') { echo "background-color: #5cedf2"; } ?>">WI</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'GA'){ echo "background-color: chartreuse"; } elseif ($stateGA == 'yes') { echo "background-color: #5cedf2"; } ?>">GA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MD'){ echo "background-color: chartreuse"; } elseif ($stateMD == 'yes') { echo "background-color: #5cedf2"; } ?>">MD</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NJ'){ echo "background-color: chartreuse"; } elseif ($stateNJ == 'yes') { echo "background-color: #5cedf2"; } ?>">NJ</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'SC'){ echo "background-color: chartreuse"; } elseif ($stateSC == 'yes') { echo "background-color: #5cedf2"; } ?>">SC</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WY'){ echo "background-color: chartreuse"; } elseif ($stateWY == 'yes') { echo "background-color: #5cedf2"; } ?>">WY</td>
							</tr>
							
							<tr><td colspan="5" style="line-height: 5px">&nbsp;</td></tr>
							
							<tr>
								<td colspan="5"><div  style="position: relative;left: 0px; top: 0px; z-index: 10000"><a href="https://landscapearchitect.com/abante/index.php?rt=product/product&product_id=139" target="_blank"><h1 style="font-family:Arial, Helvetica, sans-serif; color:#1C3C04; text-decoration: underline"><center>Add A State!</center></h1><br /></a></div></td>
							</tr>
							
						</table></center>
						
					</td>
				</tr>
			</table>					
					
					
				</center><br>
				
			<!-- Regional Tiers End -->					
				
			<?    } elseif (($ventype != 4) || ($ventype != 6)) {      ?>	
				
				
				
			<!-- National Tiers Start -->	
									<style>
										.tooltip5 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 60000;
										}

										.tooltip5 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -350px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip5 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip5:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
										
										.tooltip6 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 60000;
										}

										.tooltip6 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -340px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip6 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip6:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
                                        
										.tooltip7 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip7 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -320px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip7 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip7:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}  
                                        
                                        
										.tooltip8 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip8 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -330px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip8 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip8:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}                                        
                                        
                                        
										.tooltip9 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip9 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -425px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip9 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip9:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}                                        
                                        
                                        
										.tooltip10 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip10 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -365px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip10 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip10:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}                                        
										
										
									</style>						
				
				
				
				
				
				
				
				<center>
	
            		<h2 style="font-family:Arial, Helvetica, sans-serif; color: #F60004"><center>Your Product Search Status is:</center></h2><br />
					
					<table cellspacing="10px" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 18px">
						<tr>
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==18){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip5'>Platinum<span class='tooltiptext'>Congratulations! Your products and profile will appear at the top of all related product searches. As a Platinum Advertiser you can host an unlimited number of products, complete with pictures, descriptions and any related CAD Files or Spec Sheets.(Requires minimum of 8 pages of print over 12 month schedule)</span></div></center></td>
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==16){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip6'>Gold<span class='tooltiptext'>Appearing in the search results immediately following Platinum Advertisers, Golden Advertisers can host up to 50 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets. (Requires Marketplace Double or minimum of 2.4 pages of print over 12 month schedule)</span></div></center></td>
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==14){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip7'>Silver<span class='tooltiptext'>Appearing in the search results immediately following Golden Advertisers, Silver Advertisers can host up to 25 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets.  (Requires Marketplace Single, minimum of 1.2 pages of print or purchase of separate Vendor Profile )</span></div></center></td>
							
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==10){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip8'>Bronze<span class='tooltiptext'>Start your program with the LASN Annual Directory and you can host up to 10 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets, for 3 Full Months. Your main product appears online for the entire year.  (Requires Product Profile in Annual Specifier's Guide.) </span></div></center></td>
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==12){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip9'>Exhibitor<span class='tooltiptext'>Next in line, Trade Show Advertisers receive up to 10 products per 100 sq ft of exhibit space, complete with pictures, descriptions and any related CAD Files or Spec Sheets. (Requires Booth Space in the upcoming Landscape Expo)</span></div></center></td>
						
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==2){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip10'>Inactive<span class='tooltiptext'>You can view your profile through the link below, but it is not accessible through the "What Are You Shopping For?" search engines. GOOD NEWS . . . You can have an active profile by tomorrow if you contact us today! <br>Just contact your sales rep below:</span></div></center></td>		                            
                            
											
						</tr>
					</table>
					
				</center><br>
				
			<!-- National Tiers End -->	
				
				
			<?   }  	 }
        
        
 																$string =  $this->getCompanyName(); // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
        
        
                                                                $bString = $string;
        

					mysqli_close($con);    
				
			?>	
				
				
				
				
				
				
				
            <center><strong>As a current advertiser or exhibitor your company products are active<br>in thousands of product searches every week</strong><br /><br /><a href='javascript:open_window("https://landscapearchitect.com/landscape-design/<? echo $string; ?>/<?= $this->id ?>",1600,800);' target="_blank"><center><span style='; font-family:Arial, Helvetica, sans-serif; font-size:28px; font-weight:bold; text-decoration:underline'>View Your Current Profile</a>.</span></center><br />
To Upgrade Your Profile, or to speak with someone about your current profile status<br>
contact your advertising representative as indicated below:</center></span>
            
</div>
        
        <div style='clear: both;'> &nbsp; </div>
        <?
    }    
    
    
    function adminNavigation() {
        //$vl = new vendor_login();
        //$pass = $vl->fetchPassword($this->id);
        $pass = $this->getVendorPassword();
        ?>
        <table width='100%' cellpadding='0' cellspacing='0' border='0'>
            <tbody>
                <tr class='cellhead'>
                    <td align='left' width='50%' nowrap class='cellhead'>Vendor Admin :: Manage</td>
                    <td align='right'><strong>[ <a href='<?= $this->lastList ?>'>Return to List</a> ]</strong>&nbsp; &nbsp;</td>
                </tr>
            </tbody>
        </table>
        <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tbody>
                <tr>
                    <td height='15' width='15%' valign='top' align='right'><strong>Password</strong></td>
                    <td width='2%'>&nbsp;</td>
                    <td>
                        <?php
                            if($pass == 'NONE') {
                                // no password assigned
                        ?>
                        <?= $pass ?> <strong>[ <a href='<?= $_SERVER['PHP_SELF'] ?>?record=<?= $this->id ?>&action=assign'>assign</a> ]</strong>
                        <?php
                            } else {
                        ?>
                        <?= $pass ?> <strong>[ <a href='<?= $_SERVER['PHP_SELF'] ?>?record=<?= $this->id ?>&action=assign'>modify</a> | <a href=''>send</a> ]</strong> 
                        <?php
                            }
                        ?>
                        <br /><br />
                    </td>
                </tr>
                <tr>
                    <td height='15' width='15%' valign='top' align='right'><strong>Manage Logo</strong></td>
                    <td width='2%'>&nbsp;</td>
                    <td>
                        <?
                            if(isset($this->logo) && strlen($this->logo) > 0) {
                                ?>
                                <a href='<?= $_SERVER['PHP_SELF'] ?>?action=logo&record=<?= $this->id ?>'><img src='/products/images/<?= $this->logo ?>' width='125' border='0' /></a>
                                <?
                            } else {
                                ?>
                                <a href='<?= $_SERVER['PHP_SELF'] ?>?action=logo&record=<?= $this->id ?>'>No Logo</a>
                                <?
                            }
                        ?>
                    </td>
                </tr>
                <tr height='20'>
                    <td height='20' width='15%' valign='top' align='right'><strong>Manage Products</strong></td>
                    <td width='2%'>&nbsp;</td>
                    <td valign='top'>
                        <a href='<?= $_SERVER['PHP_SELF'] ?>?action=products&record=<?= $this->id ?>'>Manage Products</a>
                    </td>
                </tr>
                <tr>
                    <td height='15' width='15%' valign='top' align='right'><strong>Send Signup</strong></td>
                    <td width='2%'>&nbsp;</td>
                    <td>
                        <form action='<?= $_SERVER['PHP_SELF'] ?>' method='GET'>
                            <input type='hidden' name='action' value='sendSummary' />
                            <input type='hidden' name='record' value='<?= $this->id ?>' />
                            <input type='text' name='email' value=' ' /> <input type='submit' value='send' />
                        </form>
                    </td>
                </tr>
                <tr>
                    <td height='15' width='15%' valign='top' align='right'><strong>History</strong></td>
                    <td width='2%'>&nbsp;</td>
                    <td><?= $this->history->displayTable('ven',$this->id, 10); ?></td>
                </tr>
            </tbody>
        </table>
        <?
    }
    
    
    function sendSignupEmail($address=NULL) {
        if(is_null($address) || $address == "") {
            $address = $this->getPrimaryEmail();
        }


        $mail = array(
            'To' => "<{$address}>",
            //'From' => "LandscapeOnline.com Vendor Listing <webmaster@landscapeonline.com>",
            'From' => "webmaster@landscapeonline.com",
            'Subject' => "LandscapeOnline.com Vendor Password for ". $this->getCompanyName(),
            'Return-path' => 'webmaster@landscapeonline.com',
            'bodyHTML' => $this->getSignupEmailHTML(),
            'bodyTXT' => $this->getSignupEmailTXT()
        );

        if($this->sendMail($mail) === TRUE) {
            $this->history->add('ven',$this->id,'sent summary','Summary Email Successfully Sent.');
            return(TRUE);
        } else {
            $this->history->add('ven',$this->id,'sent summary','Summary Email Unsuccessfully Sent.');
            $this->addErrors("Error sending mail to {$address}");
            return(FALSE);
        }
    }
    
    
    function getSignupEmailHTML() {
        $pass = $this->getVendorPassword();
        $contents = <<<ENDH
<html>
    <head>
        <title>Vendor Signup</title>
    </head>
    <body>
        <h2>Congratulations and Thanks for Listing Your Company at LandscapeOnline.com!</h2>
        <font size=4><b><u>YOUR COMPANY LISTING</u></b></font> is now active and viewable at <b>LandscapeOnline.com</b><br />

        <p>
        Advertised to and accessed by landscape professionals across the country, LandscapeOnline.com puts your company in front of thousands of landscape architects, contractors, and maintenance professionals very month.
        </p>

        <p>
        To assure accurracy and offer the greatest benefit we'd like you to <font size=4><b><u>review your profile and, if necessary, update your company information</u></b></font> using the following address and password.
        </p>
        <p>
        Simply go to <a href='https://landscapearchitect.com/vendor/profile.php?action=edit'>https://landscapearchitect.com/vendor/profile.php?action=edit</a> and type in the followin password: <strong>{$pass}</strong>
        </p>

        <p>This password is unique to your company, so please keep this code for your records.
        </p>

        <p>
            If you ever forget or misplace your password, just call 714-979-5276 and ask for your ad rep.  He or she will be more than happy to assist you.
        </p>
        <p>
            Remember . . . If you are a current advertiser in <em><b>Landscape Architect and Specifier News</b></em> (LASN), <em><b>Landscape Contractor National</b></em> (LCN) and/or <em><b>Landscape Superintendent and Maintenance Professional</b></em> (LSMP) or if you purchased the monthly "<u>Linked Listing</u>" you will also be linked to a full company profile and to your company website . . .
        </p>

        <p>Thanks again for listing your company at LandscapeOnline.com.  If you have any questions or comments, please call 714-979-5276 or just reply to this email to get ahold of the LOL Customer Service department. 
        </p>
        <p>
            Sincerely,<br />
            George Schmok, Publisher<br />
            Landscape Architect and Specifier News (LASN)<br />
            Landscape Contractor National (LCN)<br />
            Landscape Superintendent and Maintenance Professional (LSMP)<br />
            LandscapeOnline.com
        </p>
    </body>
</html>
ENDH;
        return($contents);
    }
    
    
    function getSignupEmailTXT() {
        $pass = $this->getVendorPassword();
        $contents = <<<ENDH
Congratulations and Thanks for Listing Your Company at LandscapeOnline.com!

YOUR COMPANY LISTING is now active and viewable at LandscapeOnline.com

Advertised to and accessed by landscape professionals across the country, LandscapeOnline.com puts your company in front of thousands of landscape architects, contractors, and maintenance professionals very month.

To assure accurracy and offer the greatest benefit we would like you to review your profile and, if necessary, update your company information using the following address and password.

Simply go to https://landscapearchitect.com/vendor/profile.php?action=edit and type in the followin password: {$pass}

This password is unique to your company, so please keep this code for your records.

If you ever forget or misplace your password, just call 714-979-5276 and ask for your ad rep. He or she will be more than happy to assist you.

Remember . . . If you are a current advertiser in Landscape Architect and Specifier News (LASN), Landscape Contractor National (LCN) and/or Landscape Superintendent and Maintenance Professional (LSMP) or if you purchased the monthly "Linked Listing" you will also be linked to a full company profile and to your company website . . .

Thanks again for listing your company at LandscapeOnline.com. If you have any questions or comments, please call 714-979-5276 or just reply to this email to get ahold of the LOL Customer Service department.

Sincerely,
George Schmok, Publisher
Landscape Architect and Specifier News (LASN)
Landscape Contractor National (LCN)
Landscape Superintendent and Maintenance Professional (LSMP)
LandscapeOnline.com
ENDH;
        return($contents);
    }
    
    
    function companySummary() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'company');
        ?>
  <div style="width: 750px; z-index: 5000">
 <table width="550" border="0" cellpadding="" cellspacing="3" style="font-size:12px; margin: 0 auto;" align="center">
  <tr>
    <td  align="center" width="132">
    <span style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">
    If Your Company Name 
    Begins With: </span></td>
    <td width="418"  align="center" valign="bottom">
    <span style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">
    Sales Representative
    </span>
    </td>
 </tr>

 <tr>
    <td align="center">
    <span style="font-size: 16px">
    A-L
    </span>
    </td>
    <td>
    <span style="font-size: 16px">
    <center>
    <a href="mailto:jmcgehee@landscapeonline.com?subject=Advertising Information Request&body=Please send me information about my LandscapeOnline vendor profile and any other Landscape Communications, Inc. products that would be relevant for my company.">James McGehee  - (714) 979-5276 x111</a>&nbsp;&nbsp;<a href="mailto:jmcgehee@landscapeonline.com"><span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-weight: bold">Email James</span></a>
    </center>
    </span>
    </td>
 </tr>
 <tr>
    <td align="center">
    <span style="font-size: 16px">
    M-Z
    </span>
    </td>
	<td>
    <span style="font-size: 16px">
    <center>
    <a href="mailto:vchavira@landscapeonline.com?subject=Advertising Information Request&body=Please send me information about my LandscapeOnline vendor profile and any other Landscape Communications, Inc. products that would be relevant for my company.">Clint Phipps  - (714) 979-5276 x114</a>&nbsp;&nbsp;<a href="mailto:cphipps@landscapeonline.com"><span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-weight: bold">Email Clint</span></a>
    </center>
    </span>
    </td>
    </tr>
</table></div><br /><br /><br />

<!-- <div class="HR2" style="position:absolute; left:15px; top:500px; width:700px; height:0.0005%"></div><br /> -->
<!-- Cpmpany Info Section -->       
<div class="tb4" style="width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Company Information [ <a href='<?= $_SERVER['PHP_SELF'] ?>?action=company&id=<?= $this->id ?>'><span style="color: #FFFFFF">edit</span></a> ]&nbsp;&nbsp;
</div><br /><br />

        <table width='720' class='searchOptions' cellpadding='0' cellspacing='0' border='0' style="margin: 0 auto;">
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Name</span></td>
                <td width='2%'>&nbsp;</td>
                <td><span style="font-size:16px"> <?= $this->getCompanyName(); ?></span> </td>
            </tr>
            <tr>
                <td style="height:15px"> </td>
            </tr>
               <tr>
                    <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Company Logo</span></td>
                    <td width='2%'>&nbsp;</td>
                    <td>
                        <?
                            if(isset($this->logo) && strlen($this->logo) > 0) {
                                ?>
                                <img src='/products/images/<?= $this->logo ?>' width='275' border='0' />
                                <?
                            
                            }
                        ?>
                    </td>
          </tr>
                
            <tr>
                <td style="height:15px"> </td>
            </tr>
            
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Vendor Type</span></td>
                <td width='2%'>&nbsp;</td>
                <td> <span style="font-size:16px"><?= $this->getVendorType(); ?></span> </td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Address</span></td>
                <td width='2%'>&nbsp;</td>
                <td>
                    <span style="font-size:16px"><?= $this->getCompanyAddress(); ?></span>
                </td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Phone</span></td>
                <td width='2%'>&nbsp;</td>
                <td>
                    <span style="font-size:16px"><?= $this->getCompanyPhone(); ?></span>
                </td>
            </tr>
            <span style="font-size:16px"><? if(!is_null($c->fax_number) && strlen($c->fax_number) > 0) { ?>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Fax</span></td>
                <td width='2%'>&nbsp;</td>
                <td>
                    <span style="font-size:16px"><?= $this->getCompanyFax(); ?></span>
                </td>
            </tr>
            <? } ?>
            <? if(!is_null($this->website) && strlen($this->website) > 0) { ?>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Website</span></td>
                <td width='2%'>&nbsp;</td>
                <td><span style="font-size:16px"> <?= $this->getWebsite(); ?></span> </td>
            </tr>
            <? } ?>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Email</span></td>
                <td width='2%'>&nbsp;</td>
                <td> 
                    <a href='mailto:<?= $this->getCompanyEmail(); ?>'><span style="font-size:16px"><?= $this->getCompanyEmail(); ?></span></a>
                </td>
            </tr>
           <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Contact Page</span></td>
                <td width='2%'>&nbsp;</td>
                <td><?= $this->getConsite(); ?></td>
          </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Last Update</span></td>
                <td width='2%'>&nbsp;</td>
                <td><span style="font-size:16px"><?= $this->displayEditDate(); ?></span></td>
            </tr>
            <tr>
                <td style="height:15px"> </td>
            </tr>            
            <tr>
                <td height='15' width='15%' valign='top' align='right'><span style="font-size:16px; font-family:Arial, Helvetica, sans-serifx; font-weight:bold">Company Info</span></td>
                <td width='2%'>&nbsp;</td>
                <td><span style="font-size:16px"><?= $this->getProfile(FALSE); ?></span></td>
            </tr>
        </table><br><br>
        <?
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function categorySummary() {
        $xl = new xlist();
        $list = $xl->fetchXlistArray($this->xlist);
        
        foreach($list as $key => $val) {
            $sortIndex[$key] = $val['sub_number'];
        }

        asort($sortIndex);
		
		
									// Brand Section Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$coDog = $row['vendor_type_id'];
												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    
				
		
		
		
		
		
		

        ?>
        <br /><br />

<!-- Category Section -->        
<div class="tb4" style="width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Company Search Categories<? if (($coDog == '4') || ($coDog == '6')) { ?> [ <a href='https://landscapearchitect.com/abante/index.php?rt=product/product&product_id=140' target="_blank"><span style="font-size: 18px; font-weight: bold; color: #FFFFFF">Add Search Categories For Your Company</span></a> ]<? } else {  ?>&nbsp;&nbsp;[ <a href='<?= $_SERVER['PHP_SELF'] ?>?action=categories&id=<?= $this->id ?>'><span style="font-size: 18px; font-weight: bold; color: #FFFFFF">Edit The Search Categories For Your Company</span></a> ]<? } ?>
</div><br /><br />
	<div style="text-align: center">
		<div style="width: 100%; margin: 0 auto;"><img src="https://landscapearchitect.com/lol-logos/LA-LC-Local-Wholesale-search-engines.jpg" width="75%"></div><br><br>
		These categories are used by the <strong>Keyword Search Engine</strong> to help our 65,000+ monthly users to find you company.<br>
        When editing, it is important to select only those categories which represent products that you currently sell.<br>
        LCI reserves the right to edit your categories.
	</div>
	<br>
    <div style="text-align: center; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; margin-bottom: 5px;">
        Your Current Categories Are:
    </div>

    
    <div style="text-align: center;">
    <table width='750' class='searchOptions' cellpadding='0' cellspacing='0' border='0' style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
        <tr>
            <td>
                
                <?
        
                                            include("connect3.inc");

        
        
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   
					   
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                    $xCats = $row['xlist'];
                                                   
                                               }  
        
                            if (empty($xCats)) {
                                
                                echo "You have no categories selected.";
                                
                                
                            } else {
        
        
                ?>
                
                
                
                
                <?  foreach($sortIndex as $idx => $sub) {
                    ?>
                        <?= $list[$idx]['name'] ?> <br />
                       
                    <?
                } ?>
                
                <?
                                
                            }
        
                 ?>
                
                
                
            </td>
        </tr>
    </table>
    </div><br /><br />
            
            
            <?

								// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                   
 																$string =  $this->getCompanyName(); // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
        
        
                                                                $bString = $string;



            ?>

            
            
            
    <div>    
            
        <a href='javascript:open_window("https://landscapearchitect.com/landscape-design/<? echo $bString; ?>/<?= $this->id ?>",1600,800);' target="_blank"><center><span style='; font-family:Arial, Helvetica, sans-serif; font-size:28px; font-weight:bold; text-decoration:underline'>View Your Current Profile</a></center>
            
    </div>
    
    
    
			<?
                
                                               }
        
        
					                           mysqli_close($con);    
                
            ?>
		
        
        
        
			
			
		<? 
		
									// Brand Section Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$coCat = $row['vendor_type_id'];
												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    
		
		
							if (($coCat == 4) || ($coCat == 6)) {
		
		
		
		?>
			
			
			

		<!-- Category Section -->        
		<div class="tb4" style="width:750px; box-shadow: 5px 5px 5px #888888">
		  &nbsp;&nbsp;Brands &nbsp;&nbsp;
		</div><br /><br />
			
			<div style="position:relative; left:300px; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">
			</div>
			<br />
			
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT brands_h FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$pieces = explode(",", $row['brands_h']);
												   
												   
												   
														$names = explode(",", $row['brands_h']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
															
														}												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

					
		
		
			?>	
			<a name="hardedit">&nbsp;</a>		
			
					<table width="763px">
							<tr>
								<td colspan="6"><center><h2>Your Current Hardscape Brands Are: <span style="font-size: 14px; text-decoration: underline; color: blue"><a href='https://landscapearchitect.com/vendor/index-vendor-brands-hard.php?id=<?= $this->id ?>'  target="_blank">Edit Your Hardscape Brands</a><button onclick="myFunction()" style="font-size: 14px; padding: 3px; font-weight: bold; background-color: darkgreen; color:  #FFFFFF">Click to View Changes</button></span></h2></center></td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[0] == "h0001"){ echo "background-color: chartreuse"; } ?>">Acker-Stone</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[3] == "h0004"){ echo "background-color: chartreuse"; } ?>">Butterfield Color</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[8] == "h0009"){ echo "background-color: chartreuse"; } ?>">L.M. Scofield</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[13] == "h0014"){ echo "background-color: chartreuse"; } ?>">Pavestone</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[25] == "h0026"){ echo "background-color: chartreuse"; } ?>">Sakrete</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[20] == "h0021"){ echo "background-color: chartreuse"; } ?>">Techniseal</td>					
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[1] == 'h0002'){ echo "background-color: chartreuse"; } ?>">Belden</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[4] == "h0005"){ echo "background-color: chartreuse"; } ?>">Davis Colors</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[9] == "h0010"){ echo "background-color: chartreuse"; } ?>">Marmiro Stones</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[14] == "h0015"){ echo "background-color: chartreuse"; } ?>">Pine Hall Brick</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[18] == "h0019"){ echo "background-color: chartreuse"; } ?>">Soil Retention Products</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[21] == "h0022"){ echo "background-color: chartreuse"; } ?>">Unilock</td>					
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[23] == "h0024"){ echo "background-color: chartreuse"; } ?>">Belgard</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[5] == "h0006"){ echo "background-color: chartreuse"; } ?>">Endicott</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[10] == "h0011"){ echo "background-color: chartreuse"; } ?>">Natural Paving</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[15] == "h0016"){ echo "background-color: chartreuse"; } ?>">Quikcrete</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[18] == "h0019"){ echo "background-color: chartreuse"; } ?>">Soil Retention Products</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[22] == "h0023"){ echo "background-color: chartreuse"; } ?>">Versa-Lok</td>					
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[2] == "h0003"){ echo "background-color: chartreuse"; } ?>">Bison</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[6] == "h0007"){ echo "background-color: chartreuse"; } ?>">Indiana Limestone</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[11] == "h0012"){ echo "background-color: chartreuse"; } ?>">Olsen Pavingstone</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[16] == "h0017"){ echo "background-color: chartreuse"; } ?>">Rosetta</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[26] == "h0027"){ echo "background-color: chartreuse"; } ?>">SRW</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[24] == "h0025"){ echo "background-color: chartreuse"; } ?>">Boral</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[7] == "h0008"){ echo "background-color: chartreuse"; } ?>">Invisible Structures</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[12] == "h0013"){ echo "background-color: chartreuse"; } ?>">Paverart</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[17] == "h0018"){ echo "background-color: chartreuse"; } ?>">Rubbersmart Surface</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[19] == "h0020"){ echo "background-color: chartreuse"; } ?>">Surloc</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>										
						
						

</table><br /><br />
			
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT brands_i FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$pieces = explode(",", $row['brands_i']);
												   
												   
														$names = explode(",", $row['brands_i']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

					
		
		
		
			?>				
			
			
			
			<a name="irriedit">&nbsp;</a>		
			
			
			
			
					<table width="763px">
							<tr>
							<td colspan="5"><center><h2>Your Current Irrigation Brands Are: <span style="font-size: 14px; text-decoration: underline; color: blue"><a href='https://landscapearchitect.com/vendor/index-vendor-brands-irri.php?id=<?= $this->id ?>' target="_blank">Edit Your Irrigation Brands</a><button onclick="myFunction()" style="font-size: 14px; padding: 3px; font-weight: bold; background-color: darkgreen; color:  #FFFFFF">Click to View Changes</button></span></h2>

                                    

                              <script>
                                    function myFunction() {
                                      location.reload();
                                    }
                                    </script>
                                
                                
                                </center></td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[0] == "i0001"){ echo "background-color: chartreuse"; } ?>">ADS</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[5] == "i0006"){ echo "background-color: chartreuse"; } ?>">Flomec</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[10] == "i0011"){ echo "background-color: chartreuse"; } ?>">Hydro Rain</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[15] == "i0016"){ echo "background-color: chartreuse"; } ?>">Netafim</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[20] == "i0021"){ echo "background-color: chartreuse"; } ?>">Toro</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[1] == 'i0002'){ echo "background-color: chartreuse"; } ?>">ANC Technology</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[6] == "i0007"){ echo "background-color: chartreuse"; } ?>">Griswold Controls</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[11] == "i0012"){ echo "background-color: chartreuse"; } ?>">Irrometer</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[16] == "i0017"){ echo "background-color: chartreuse"; } ?>">Rain Master/Irritrol</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[21] == "i0022"){ echo "background-color: chartreuse"; } ?>">Tucor</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[2] == "i0003"){ echo "background-color: chartreuse"; } ?>">DIG Corp</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[7] == "i0008"){ echo "background-color: chartreuse"; } ?>">Harwil</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[12] == "i0013"){ echo "background-color: chartreuse"; } ?>">K-Rain</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[17] == "i0018"){ echo "background-color: chartreuse"; } ?>">Rainbird</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[3] == "i0004"){ echo "background-color: chartreuse"; } ?>">Duraplastic</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[8] == "i0009"){ echo "background-color: chartreuse"; } ?>">Hendrickson</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[13] == "i0014"){ echo "background-color: chartreuse"; } ?>">NDS</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[18] == "i0019"){ echo "background-color: chartreuse"; } ?>">Senniger</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[4] == "i0005"){ echo "background-color: chartreuse"; } ?>">ET Water</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[9] == "i0010"){ echo "background-color: chartreuse"; } ?>">Hit Products</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[14] == "i0015"){ echo "background-color: chartreuse"; } ?>">Netafim</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[19] == "i0020"){ echo "background-color: chartreuse"; } ?>">Vitamin Institute</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>						
						
						

</table><br /><br />	
			
			
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT brands_l FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$pieces = explode(",", $row['brands_l']);
												   
												   
														$names = explode(",", $row['brands_l']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

					
		
		
		
			?>				
						
			<a name="lighedit">&nbsp;</a>		
			
			
			
			
					<table width="763px">
							<tr>
							<td colspan="6"><center><h2>Your Current Lighting Brands Are: <span style="font-size: 14px; text-decoration: underline; color: blue"><a href='https://landscapearchitect.com/vendor/index-vendor-brands-ligh.php?id=<?= $this->id ?>'  target="_blank">Edit Your Lighting Brands</a><button onclick="myFunction()" style="font-size: 14px; padding: 3px; font-weight: bold; background-color: darkgreen; color:  #FFFFFF">Click to View Changes</button></span></h2></center></td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[0] == "l0001"){ echo "background-color: chartreuse"; } ?>">American Illumination</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[5] == "l0006"){ echo "background-color: chartreuse"; } ?>">Brilliance LED</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[10] == "l0011"){ echo "background-color: chartreuse"; } ?>">Garden Light</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[14] == "l0015"){ echo "background-color: chartreuse"; } ?>">Nite Time Decor</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[19] == "l0020"){ echo "background-color: chartreuse"; } ?>">Volt Lighting</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[1] == 'l0002'){ echo "background-color: chartreuse"; } ?>">AMP Lighting</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[6] == "l0007"){ echo "background-color: chartreuse"; } ?>">Corona Lighting</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[20] == "l0021"){ echo "background-color: chartreuse"; } ?>">Integral</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[15] == "l0016"){ echo "background-color: chartreuse"; } ?>">Sival</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[2] == "l0003"){ echo "background-color: chartreuse"; } ?>">Auroalight</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[7] == "l0008"){ echo "background-color: chartreuse"; } ?>">Creative Displays</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[11] == "l0012"){ echo "background-color: chartreuse"; } ?>">Kichler</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[16] == "l0017"){ echo "background-color: chartreuse"; } ?>">Sterling Lightingl</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[21] == "l0022"){ echo "background-color: chartreuse"; } ?>">WAC</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[3] == "l0004"){ echo "background-color: chartreuse"; } ?>">B-K Lighting</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[8] == "l0009"){ echo "background-color: chartreuse"; } ?>">Focus Industries</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[12] == "l0013"){ echo "background-color: chartreuse"; } ?>">NewLite</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[17] == "l0018"){ echo "background-color: chartreuse"; } ?>">Teka Illumination</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>	
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[4] == "l0004"){ echo "background-color: chartreuse"; } ?>">Best Pro Lighting</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[9] == "l0010"){ echo "background-color: chartreuse"; } ?>">FX Luminaire</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[13] == "l0014"){ echo "background-color: chartreuse"; } ?>">NightOrbs</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[18] == "l0019"){ echo "background-color: chartreuse"; } ?>">Unique Lighting</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>							
						
						

</table><br /><br />	
			
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT brands_c FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$pieces = explode(",", $row['brands_c']);
												   
												   
														$names = explode(",", $row['brands_c']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

					
		
		
		
			?>				
						
			
			<a name="chemedit">&nbsp;</a>		
			
			
			
			
					<table width="763px">
							<tr>
							<td colspan="6"><center><h2>Your T &amp; O Chemicals &amp; Admendments Brands Are: <span style="font-size: 14px; text-decoration: underline; color: blue"><br><a href='https://landscapearchitect.com/vendor/index-vendor-brands-chem.php?id=<?= $this->id ?>'  target="_blank">Edit Your T &amp; O Brands</a><br><br><button onclick="myFunction()" style="font-size: 14px; padding: 3px; font-weight: bold; background-color: darkgreen; color:  #FFFFFF">Click to View Changes</button></span></h2></center></td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[0] == "c0001"){ echo "background-color: chartreuse"; } ?>">Agriserve</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[4] == "c0005"){ echo "background-color: chartreuse"; } ?>">Gro-Power</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[8] == "c0009"){ echo "background-color: chartreuse"; } ?>">Mauget Company</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[9] == "c0010"){ echo "background-color: chartreuse"; } ?>">RWP Landscape Materials</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[14] == "c0015"){ echo "background-color: chartreuse"; } ?>">Tree Staple</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[1] == 'c0002'){ echo "background-color: chartreuse"; } ?>">Biosafe</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[5] == "c0006"){ echo "background-color: chartreuse"; } ?>">Hydrostraw</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[11] == "c0012"){ echo "background-color: chartreuse"; } ?>">Monsanto Company: Roundup </td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[19] == "c0020"){ echo "background-color: chartreuse"; } ?>">Scott</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[15] == "c0016"){ echo "background-color: chartreuse"; } ?>">TRI-C Organics</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[2] == "c0003"){ echo "background-color: chartreuse"; } ?>">Deer Busters</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[6] == "c0007"){ echo "background-color: chartreuse"; } ?>">JRM</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[18] == "c0019"){ echo "background-color: chartreuse"; } ?>">Ortho</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[12] == "c0013"){ echo "background-color: chartreuse"; } ?>">Soil-Tech</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[16] == "c0017"){ echo "background-color: chartreuse"; } ?>">Villa Root Barriers</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[3] == "c0004"){ echo "background-color: chartreuse"; } ?>">GopherX</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[7] == "c0008"){ echo "background-color: chartreuse"; } ?>">Live Earth Products</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[10] == "c0011"){ echo "background-color: chartreuse"; } ?>">Rootwell Products</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[13] == "c0014"){ echo "background-color: chartreuse"; } ?>">The Vitamin Institute</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[17] == "c0018"){ echo "background-color: chartreuse"; } ?>">Water saving Granules</td>
							</tr>	
							
</table><br /><br />
			
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT brands_t FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$pieces = explode(",", $row['brands_t']);
												   
												   
														$names = explode(",", $row['brands_t']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

					
		
		
		
			?>				
						
			
			<a name="tooledit">&nbsp;</a>		
			
			
			
					<table width="763px">
							<tr>
							<td colspan="6"><center><h2>Your Current Tools &amp; Equipment Brands Are: <span style="font-size: 14px; text-decoration: underline; color: blue"><br><a href='https://landscapearchitect.com/vendor/index-vendor-brands-tool.php?id=<?= $this->id ?>'  target="_blank">Edit Your Tools &amp; Equipment Brands</a><br><br><button onclick="myFunction()" style="font-size: 14px; padding: 3px; font-weight: bold; background-color: darkgreen; color:  #FFFFFF">Click to View Changes</button></span></h2></center></td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[18] == "t0019"){ echo "background-color: chartreuse"; } ?>">Ace</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[4] == "t0005"){ echo "background-color: chartreuse"; } ?>">CAT</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[8] == "t0009"){ echo "background-color: chartreuse"; } ?>">John Deere</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[12] == "t0013"){ echo "background-color: chartreuse"; } ?>">MultiOne</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[17] == "t0018"){ echo "background-color: chartreuse"; } ?>">Zenport</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[0] == 't0001'){ echo "background-color: chartreuse"; } ?>">Avant Tecno</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[19] == "t0020"){ echo "background-color: chartreuse"; } ?>">Craftsman</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[9] == "t0010"){ echo "background-color: chartreuse"; } ?>">Kawasaki</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[13] == "t0014"){ echo "background-color: chartreuse"; } ?>">SuperLawn Technologies</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[1] == "t0002"){ echo "background-color: chartreuse"; } ?>">Barreto</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[5] == "t0006"){ echo "background-color: chartreuse"; } ?>">Ditchwitch</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[20] == "t0021"){ echo "background-color: chartreuse"; } ?>">Kraft Tools</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[14] == "t0015"){ echo "background-color: chartreuse"; } ?>">Toro</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[2] == "t0003"){ echo "background-color: chartreuse"; } ?>">Bobcat</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[6] == "t0007"){ echo "background-color: chartreuse"; } ?>">Dosko</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[10] == "t0011"){ echo "background-color: chartreuse"; } ?>">Kubota</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[15] == "t0016"){ echo "background-color: chartreuse"; } ?>">Worldlawn/Encore</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>	
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[3] == "t0004"){ echo "background-color: chartreuse"; } ?>">Brave products</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[7] == "t0008"){ echo "background-color: chartreuse"; } ?>">JCB</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[11] == "t0012"){ echo "background-color: chartreuse"; } ?>">Makita</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[16] == "t0017"){ echo "background-color: chartreuse"; } ?>">Yardmax</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>							

</table><br /><br />
			


		<!-- Category Section -->        
		<div class="tb4" style="width:750px; box-shadow: 5px 5px 5px #888888">
		  &nbsp;&nbsp;Plants/Trees&nbsp;&nbsp;
		</div><br /><br />			
	
			<div style="position:relative; left:300px; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">
			</div>
			<br />	
			
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT plants_s FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$pieces = explode(",", $row['plants_s']);
												   
												   
														$names = explode(",", $row['plants_s']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

					
		
		
		
			?>				
						
			
			<a name="planedit">&nbsp;</a>		
			
			
			
					<table width="763px">
							<tr>
							<td colspan="6"><center><h2>The Current Plants You Supply Are: <span style="font-size: 14px; text-decoration: underline; color: blue"><a href='https://landscapearchitect.com/vendor/index-vendor-brands-plan.php?id=<?= $this->id ?>'  target="_blank">Edit The Plants You Supply</a><button onclick="myFunction()" style="font-size: 14px; padding: 3px; font-weight: bold; background-color: darkgreen; color:  #FFFFFF">Click to View Changes</button></span></h2></center></td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[0] == "p0001"){ echo "background-color: chartreuse"; } ?>">Annuals</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[5] == "p0006"){ echo "background-color: chartreuse"; } ?>">Ferns</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[10] == "p0011"){ echo "background-color: chartreuse"; } ?>">Ground cover</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[15] == "p0016"){ echo "background-color: chartreuse"; } ?>">Palms</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[20] == "p0021"){ echo "background-color: chartreuse"; } ?>">Shrubs</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[25] == "p0026"){ echo "background-color: chartreuse"; } ?>">Vines</td>					
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[1] == 'p0002'){ echo "background-color: chartreuse"; } ?>">Bamboo</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[6] == "p0007"){ echo "background-color: chartreuse"; } ?>">Flowering Shrubs</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[11] == "p0012"){ echo "background-color: chartreuse"; } ?>">Herb</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[16] == "p0017"){ echo "background-color: chartreuse"; } ?>">Perennials</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[21] == "p0022"){ echo "background-color: chartreuse"; } ?>">Succulents</td>
								<td style="border: 1px solid black; padding: 3px;">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[2] == "p0003"){ echo "background-color: chartreuse"; } ?>">Berry Plants</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[7] == "p0008"){ echo "background-color: chartreuse"; } ?>">Flowering Trees</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[12] == "p0013"){ echo "background-color: chartreuse"; } ?>">Houseplants</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[17] == "p0018"){ echo "background-color: chartreuse"; } ?>">Roses</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[22] == "p0023"){ echo "background-color: chartreuse"; } ?>">Trees</td>
								<td style="border: 1px solid black; padding: 3px;">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[3] == "p0004"){ echo "background-color: chartreuse"; } ?>">Deer Resistant</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[8] == "p0009"){ echo "background-color: chartreuse"; } ?>">Fruit Trees</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[13] == "p0014"){ echo "background-color: chartreuse"; } ?>">Natives</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[18] == "p0019"){ echo "background-color: chartreuse"; } ?>">Screening Plants</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[23] == "p0024"){ echo "background-color: chartreuse"; } ?>">Tropicals</td>
								<td style="border: 1px solid black; padding: 3px;">&nbsp;</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[4] == "p0005"){ echo "background-color: chartreuse"; } ?>">Evergreens</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[9] == "p0010"){ echo "background-color: chartreuse"; } ?>">Grasses</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[14] == "p0015"){ echo "background-color: chartreuse"; } ?>">Nut Trees</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[19] == "p0020"){ echo "background-color: chartreuse"; } ?>">Shade Trees</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[24] == "p0025"){ echo "background-color: chartreuse"; } ?>">Vegetables</td>
								<td style="border: 1px solid black; padding: 3px;">&nbsp;</td>
							</tr>							
						
						
						
						
						

</table><br /><br />
			
				<?
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT plants_t FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
													$pieces = explode(",", $row['plants_t']);
												   
												   
														$names = explode(",", $row['plants_t']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

					
		
		
		
			?>	
			
			<a name="turfedit">&nbsp;</a>		
			
			
			
					<table width="763px">
							<tr>
							<td colspan="6"><center><h2>The Current Turf Types You Supply Are: <span style="font-size: 14px; text-decoration: underline; color: blue"><a href='https://landscapearchitect.com/vendor/index-vendor-brands-turf.php?id=<?= $this->id ?>'  target="_blank">Edit The Turf You Supply</a><button onclick="myFunction()" style="font-size: 14px; padding: 3px; font-weight: bold; background-color: darkgreen; color:  #FFFFFF">Click to View Changes</button></span></h2></center></td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[0] == "t0001"){ echo "background-color: chartreuse"; } ?>">Bahia</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[4] == "t0005"){ echo "background-color: chartreuse"; } ?>">Centipede</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[8] == "t0009"){ echo "background-color: chartreuse"; } ?>">Zoysia</td>
							</tr>
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[1] == 't0002'){ echo "background-color: chartreuse"; } ?>">Bentgrass</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[5] == "t0006"){ echo "background-color: chartreuse"; } ?>">Fescue</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[2] == "t0003"){ echo "background-color: chartreuse"; } ?>">Bermuda</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[6] == "t0007"){ echo "background-color: chartreuse"; } ?>">Ryegrass</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>				
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($names[3] == "t0004"){ echo "background-color: chartreuse"; } ?>">Blugrass</td>
								<td style="border: 1px solid black; padding: 3px; <? if ($names[7] == "t0008"){ echo "background-color: chartreuse"; } ?>">Saint Augustine</td>
								<td style="border: 1px solid black; padding: 3px">&nbsp;</td>
							</tr>				

</table>						
			
			
			
			
			
		<br /><br />			
			
		
			
        <?
    }
	
	}
	    
    
    
    
    function contactSummary() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'primary');
        ?>  
        <br /> 
        <!-- <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td colspan='3' class='cellhead'>Contact Information: (Edit your personal contact information here)</td>
                <?php // old link just like above but whith action equal contact?>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Name</strong></td>
                <td width='2%'>&nbsp;</td>
                <td>This is a new service coming soon</td>
            </tr>
        </table> -->
        <?
    }    
    
    
    
    
    function contactSummary2() {
        $xl = new xlist();
        $list = $xl->fetchXlistArray($this->xlist);
        
        foreach($list as $key => $val) {
            $sortIndex[$key] = $val['sub_number'];
        }

        asort($sortIndex);

        ?>
        
        <?
                    //$sql    = 'SELECT * FROM leads_week2 ORDER BY `id` DESC';
            
            $sql    = 'SELECT distinct `week`
                        FROM  `leads`
                        WHERE  `vendor_id` = '.$this->id.' ORDER BY `lead_id` DESC';
                        $result = mysql_query($sql);

                if (!$result) {
                    echo "DB Error, could not query the database\n";
                    echo 'MySQL Error: ' . mysql_error();
                    exit;
                }
                
            while ($row = mysql_fetch_assoc($result)) {
                
            $a = $row['week'];
            $weekcsv = $a;
            
            date_default_timezone_set('America/Los_Angeles');
                $yWeek = substr($a, -4);
                $mWeek = substr($a, 0, 2);
                $dWeek = substr($a, 2, 2);
            $date = $yWeek.'-'.$mWeek.'-'.$dWeek;
            $date1 = strtotime($date);
            $date2 = strtotime("+7 day", $date1);

            $leftpart = '&nbsp;&nbsp;'.date('m.d.y', $date1).' - '.date('m.d.y', $date2);
            
            
            //$leftpart = substr($a,0,2).substr($a,3,2).substr($a,6,4);
            
                $dlist .= '<option value="'.$a.'">'.$leftpart.'</option>';
            }
                
        ?>
<br />

<div class="tb4" style="width:750px; box-shadow: 5px 5px 5px #888888">
  <a id="leads1" style="color: #ffffff; text-decoration: none;">&nbsp;&nbsp;Sales Lead Retrieval&nbsp;&nbsp;</a>
</div><br /><br />        
        <table width='720' class='searchOptions' cellpadding='0' cellspacing='0' border='0' style="margin: 0 auto;">
                    <tr>
                        <td align="center" colspan="2">
                            <img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="250" />
                        </td>
                    </tr>                    
                    
                    <tr>
                        <td align="center" colspan="2" align="center"><br />
                        <span style="font-size:16px">All advertisers receive sales leads updated every Friday by 5:00 PM.<br />
                            To view your leads, by date, select the date range below and <br>click on "<strong>Retrieve Leads for Selected Week</strong></span>"<br /><br />
                            <span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for the Week of: <span style="font-size:14px; color:#F00">(Make sure to click on a week in the box below)</span></span>
                        </td>
                    </tr>
                    
<script>
 function validateForm() {
    var x = document.forms["leadsform"]["week"].value;
    if (x == null || x == "") {
        alert("Please Choose a Date Range");
        return false;
    }
}
</script>                            
                    
                    <tr>
                        <td style="height:10px"></td>
                    </tr>    
                    <tr>
                        <td colspan="2" align="center">
							
							<form name="leadsform" method="POST" action="index-vendor-leads.php?action=categories2&id=<?= $this->id ?>&week2=week">
												<input type="hidden" name="week3" value="cat" >
                                
							  <input type="submit"  value="Retrieve Leads for Selected Week" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:250px; height:30px; box-shadow: 5px 5px 5px #888888"><br><br>

                                    <select multiple name="week" size="4" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:250px; height:75px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; border: 2px inset; margin-left:auto; text-align: center">
                                        <? echo $dlist ?>
                                    </select><br /><br /><br />
							</form>
							
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="height:40px"><span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for Custom Date Range: <span style="font-size:14px; color:#F00">(Please select your date range)</span> </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="center">
                           <!-- <span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for Custom Date Range</span> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="height:10px"></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" align="center">
							
							
							
							
      <form name="custdate" method="POST" action="index-vendor-leads2.php?action=categories3&id=<?= $this->id ?>">
												<input type="hidden" name="week3" value="cat" >
    <table width = "585px" align = "center">
    <tr>
    <td align="center"><b><i>Please enter date yyyy-mm-dd in the field below (ex: Start 2014-01-01, End 2014-01-31)</i></b></td>
    </tr>
    <tr>
        <td style="height:10px"> </td>
    <tr>
    <td align="center" style="position: relative; left: -25px">
    <span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Start Date&nbsp;:&nbsp;</span>
    <input type = "text" name = "small" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; text-align:center">
    &nbsp;&nbsp;&nbsp;<span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">End Date&nbsp;:&nbsp;</span>
    <input type = "text" name = "large" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; text-align:center; position: relative; z-index: 5000"></td>
    </tr>
    <tr>
        <td style="height:10px"> </td>
    <tr>
    <tr>
    <td align = "center">
    <input type = "submit" name = "find" value = "View Custom Leads" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:150px; height:30px; box-shadow: 5px 5px 5px #888888; position: relative; left: 19px">
    &nbsp;&nbsp;&nbsp;
    <input type = "reset" value = "Reset Choice" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:130px; height:30px; box-shadow: 5px 5px 5px #888888; position: relative; left: 24px">
    </td>   
    </tr>
    </table>
    </form> 
  
                 
                        <br />
     <!--                    <script type="text/javascript" src="http://www.snaphost.com/jquery/Calendar.aspx"></script> &nbsp; From:  <br />
                        
                        <script type="text/javascript">
                        $(function () {
                        $("#SnapHost_Calendar2")
                        .datepicker({ showOn: 'both', buttonImage: 'http://www.snaphost.com/jquery/calendar.gif',
                        buttonImageOnly: true, changeMonth: true, showOtherMonths: true, selectOtherMonths: true
                        });});</script>
                        <input name="SnapHost_Calendar2" id="SnapHost_Calendar2" type="text"  />
                         &nbsp; To:  
                        </td> -->
                        <td> </td>
                    </tr>
                    
        <!-- <a href="https://landscapearchitect.com/vendor/index-vendor-auto?action=edit&record=<?= $this->id ?>">View Full Profile</a><br /><br /> -->
                    
                    
        </table><br>
        <? 
    }       
    
    
    
    function regionalSummary() {
        $contacts = $this->fetchRegionalArray();
		
		
										// category Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 
		
		
											$sql = "SELECT vendor_type_id FROM new_vendor where id='" . $this->id . "'";
											$result = $conn->query($sql);	
		
											while($row = mysqli_fetch_array($result)) {
												
												$venType = $row['vendor_type_id'];
												
												if (($venType == 4) || ($venType == 4)) {
		
		
		
		
        ?>
        <br />
        
<!-- Regional Listing Section -->        
<div class="tb4" style="width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Regional Listings [ Click on Outlet to Edit ]&nbsp;&nbsp;
</div><br /><br />        
        <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td> </td>
            </tr>
            <tr>
				
									<style>
										.tooltip2 {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
										}

										.tooltip2 .tooltiptext {
											visibility: hidden;
											width: 200px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px 0;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											left: 50%;
											margin-left: -60px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip2 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											left: 50%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip2:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
									</style>											
				
				
				
				
				
				<?
			
									
			
		
									// Category Name Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key4 = $this->id;							
								

			

											$sql = "SELECT * FROM new_vendor WHERE outlets='" . $key4 . "' AND `vendor_type_id` != '8' ORDER BY zip ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   							echo "<table width='763'>"; 
					   
											   while($row = mysqli_fetch_assoc($result)) {
												 if ($i == 1) {
													 echo "<tr>";
												  } 
												   echo "<td class='logowidth2'><a href='vendor-regional-edit-js.php?action=edit&number=" . $row['id'] . "' target='_blank'><div class='tooltip2'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['company_name']))) . "<span class='tooltiptext'>Click To Edit Outlet</span></div></a><br>" . $row['phone'] . "<br>" . $row['city'] . ", " . $row['zip'] . "</td>"; 
												 if ($i == 3) {
													 $i = 1;
													 echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr>";
												  }
												  else {
													 $i++;
												  }
												}

												echo "</table>";  


									mysqli_close($con);		
			
			
			
			
					   		
		
		
		
		
				?>
				
				
				
      
          <tr <?= $c?>>
                            <td><strong><?= ucwords($obj['code']); ?></strong></td>
                            <td><?= $obj['city'] ?></td>
                            <td>&nbsp;&nbsp;<?= $obj['state'] ?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $obj['other_1'] ?></td>
                            <td nowrap><?= $phone ?></td>
          </tr>
         
                        </tbody>
<!--                       <tfoot>
                            <tr>
                                <td>Contact Type</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Area Code</td>
                                <td>Phone</td>
                            </tr>
                            </tr>
                        </tfoot> -->
</table>
                </td>
            </tr>
        </table><br /><br />
        
<!-- Test popup start -->

<!--<form id="form1" runat="server">
<div>
    Button Below:
</div>
<input type="button" value="Show Popup" onclick="ShowPopup('child.html')" />
<script type="text/javascript">
    var popup;
    function ShowPopup(url) {
        popup = window.open(url, "Popup", "toolbar=no,scrollbars=no,location=no,statusbar=no,menubar=no,resizable=0,width=800,height=500,left = 490,top = 262");
        popup.focus();
    }
</script>
</form> -->
<!-- Test popup end -->


<!-- Test popup2 start -->
<!-- <div>
    Button Belows:
   <br />

</div>
<input type="button" value="Show Popup2" onclick="ShowPopup2('https://landscapearchitect.com/vendor/vendor/company-js.php')" />
<script type="text/javascript">
    var popup2;
    function ShowPopup2(url) {
        popup2 = window.open(url, "Popup", "toolbar=no,scrollbars=no,location=no,statusbar=no,menubar=no,resizable=0,width=800,height=500,left = 490,top = 262");
        popup2.focus();
    }
</script>
</form> -->

<!-- Test popup2 end -->
        
        
        <?
					
												} 
												}
					
					
					
    }
	    
    
    function photoSummary(){
        include '/home/land/public_html/vendor/photo_edit_html-new2.php';
    }    
    
    
    function displayRegionalList() {
        $contacts = $this->fetchRegionalArray();
        ?>
                    <table width='750' id='contacts' align='center' cellpadding='0' cellspacing='0'>
                        <thead>
                            <tr>
                                 <td style="height:10px"> </td>
                            </tr>   
                            <tr style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
                                <td>Contact Type</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Area Code</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Phone</td>
                                <td>Edit</td>
                                <!-- <td>Delete</td> -->
                            </tr>
                        </thead>
                        <tbody>
                    <?
                    if(count($contacts) == 0) {
                        ?>
                        <tr><td colspan='7' align='center'><h3><em>No Regional Contacts</em></h3></td></tr>
                        <?
                    } else {
                        foreach($contacts as $idx => $obj) {
                            $c = (($idx + 1) % 2) ? "class='e1'" : "";
                            if($obj['phone_area_code'] == "") {
                                $phone = $this->getCompanyPhone();
                            } else {
                                $phone = "(" . $obj['phone_area_code'] . ") " . $obj['phone_number'];
                            }
                            ?>
                            <tr <?= $c?> style="font-family:'Times New Roman', Times, serif; font-size:16px">
                                <td><strong><?= ucwords($obj['code']); ?></strong></td>
                                <td><?= $obj['city'] ?></td>
                                <td align='left'>&nbsp;&nbsp;<?= $obj['state'] ?></td>
                                <td align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $obj['other_1'] ?></td>
                                <td nowrap><?= $phone ?></td>
                                <td align='left'><a href='<?= $this->baseLink() ?>?action=regional&intent=editcontact&record=<?= $this->id ?>&cid=<?= $obj['id'] ?>'>&nbsp;&nbsp;<img src='/imgz/vendor/pencil.gif' border='0' height='20' width='20' /></a></td>
                                <!-- <td align='center'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=regional&cid=<?= $obj['id'] ?>&intent=delete&record=<?= $this->id ?>','Are you sure you want to permanently delete the regional contact for <?= $obj['city'] ?>, <?= $obj['state'] ?>?')"><img src='/imgz/vendor/delete.gif' border='0' height='20' width='20' /></a></td> -->
                            </tr>
                            <?
                        }
                    }
                    ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                 <td style="height:10px"> </td>
                            </tr>                           
                            <tr>
                                <td>Contact Type</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Area Code</td>
                                <td>Phone</td>
                                <td>Edit</td>
                                <!-- <td>Delete</td> -->
                            </tr>
                            </tr>
                        </tfoot>                                                                             
                    </table>                                                                                 
                    <br />
                    <table width='750' border='0' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td align='left'><a href='<?= $_SERVER['PHP_SELF'] ?>?record=<?= $this->id ?>&action=manage'><img src="/imgz2/save-button2.jpg" style="box-shadow: 5px 5px 5px #888888" border='0' /></a></td>
                            <td align='right'><a href='<?= $_SERVER['PHP_SELF'] ?>?record=<?= $this->id ?>&action=regional&intent=newcontact'><img src="/imgz2/New-Contact-button.jpg" style="box-shadow: 5px 5px 5px #888888" border='0' /></a></td>
                        </tr>
                    </table>
                    <div style='clear: both;'>
                        &nbsp;
                    </div>
        <?
    }

    function editContact() {
        if($this->slurpRegionalForm($_REQUEST['cid'])) {
            return(TRUE);
        } else {
            $this->addErrors("Duplicate area code, cannot edit regional contact.");
        }
    }

    function addContact() {
        // we need to check for a collision before we add this darned thing
        if($this->slurpRegionalForm()) {
            return(TRUE);
        } else {
            $this->addErrors("Duplicate area code, cannot add regional contact.");
        }
    }    
    
    
    function slurpRegionalForm($cid=NULL) {
        $c = new contact();
       // pbool of 0 => use primary     1 => use local
        if(!is_null($cid)) $c->fetch($cid);
        $old_ac = $c->other_1;

        $c->ref_type = 'ven';
        $c->ref_id = $this->id;
        $c->code = 'regional';

        $c->state = $_REQUEST['state'];
        $c->city = $_REQUEST['city'];

        $c->phone_area_code = '';
        $c->phone_number = '';
        $c->other_1 = '';

        if($_REQUEST['pbool'] == 1) {
            if(is_null($_REQUEST['area_code2']) || $_REQUEST['area_code2'] == "") {
                $ac = $_REQUEST['area_code'];
            } else {
                $ac = $_REQUEST['area_code2'];
            }
            $c->other_1 = $ac;
            $c->phone_number = $_REQUEST['phone_number'];
            $c->phone_area_code = $ac;
        } else {
            if(is_null($_REQUEST['area_code'])) {
                $ac = $_REQUEST['area_code2'];
            } else {
                $ac = $_REQUEST['area_code'];
            }
            $c->other_1 = $ac;
            // leave area_code && phone blank
        }
        $c->postal_code = $_REQUEST['postal_code'];
        $c->active = 1;
        $c->input_date = time();

        if(in_array($c->other_1, $c->getVendorAreaCodesArray($this->id))) {
            if(!is_null($cid) && $old_ac == $ac) {
                $c->commit();
                return(TRUE);
            } else {
                return(FALSE);
            }
        } else {
            $c->commit();
            return(TRUE);
        }
    }    
    
    
    
        function fetchRecentlyChanged($days = 1) {
        $sql = "SELECT  id, company_name " .
               "FROM    {$this->dbTable} " .
               "WHERE   edit_date > date_sub(current_date(), interval $days day)";

        $result = $this->db->getAll($sql);

        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("fetchRecentlyChanged::Result", $results);
        }
        return($results);
    }
    
    
    
    
    
    
    
    
    
}
















?>