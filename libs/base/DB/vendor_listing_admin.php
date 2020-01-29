<?php

require_once("vendor_listing.php");
require_once("contacts_class.php");
require_once("Pager/Sliding.php");
require_once("vendor_type_class.php");
require_once("xlist_class.php");

class vendor_listing_admin extends vendor {
    // meta
    var $parentName;
    var $errList;
    var $pageSpan;

    // link variables
    var $from;
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
                $this->showView('header.php',TRUE);
                $this->showView('password.php',TRUE);
                $this->showView('footer.php',TRUE);
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
                $vp->web  = $_REQUEST['web'];
                if(!$_REQUEST['useold']) {
                    $vp->handleUploadedImage(& $_FILES['photo_upload']);
                } 
                if($vp->errors()) {
                    $this->showView('header.php', TRUE);
                    $vp->showView('edit.php', FALSE, array('intent' => 'addproduct', 'record' => $this->id));
                    $this->showView('footer.php', TRUE);
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
                $vp->web  = $_REQUEST['web'];
                $vp->handleUploadedImage(& $_FILES['photo_upload']);
                if($vp->errors()) {
                    $this->showView('header.php', TRUE);
                    $vp->showView('edit.php', FALSE, array('intent' => 'addproduct', 'record' => $this->id));
                    $this->showView('footer.php', TRUE);
                    $vp->clearErrors();
                } else {
                    $vp->commit();
                    $vp->smartRedirect($_SERVER['PHP_SELF'] . "?action=products&record=" . $_REQUEST['record']);
                }
                break;
            case 'add':
                $this->showView('header.php', TRUE);
                $vp->showView('edit.php', FALSE, array('intent' => 'addproduct', 'record' => $this->id));
                $this->showView('footer.php', TRUE);
                break;
            case 'edit':
                $vp->fetch($_REQUEST['pid']);
                $this->showView('header.php', TRUE);
                $vp->showView('edit.php', FALSE, array('intent' => 'editproduct', 'record' => $this->id));
                $this->showView('footer.php', TRUE);
                break;
            default:
                $this->showView('header.php', TRUE);
                ?>
                <br />
                <strong>[ <a href='<?= $_SERVER['PHP_SELF'] ?>?action=manage&record=<?= $this->id ?>'>Manage</a> | 
                <a href='<?= $_SERVER['PHP_SELF']?>?action=products&record=<?= $this->id ?>&intent=add'>Add a Product</a>
                 ] </strong>
                <hr noshade size='-1' /><?
                $this->listProductsAdmin();
                $this->showView('footer.php', TRUE);
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
                $this->showView('header.php', TRUE);
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
                $this->showView('footer.php', TRUE);
                break;
            default:
                $this->showView('header.php', TRUE);
                $this->showView('logoManage.php', TRUE);
                $this->showView('footer.php', TRUE);
                break;
        }
    }

    function validateImage() {
        global $file_path;
        $maxwidth  = 325;
        $maxheight = 200;
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
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=regional&record=" . $this->id);
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
                $this->showView('header.php', TRUE);
                $c->showView('regional_edit.php');
                $this->showView('footer.php', TRUE);
                $this->clear();
                break;
            case 'add':
                $this->fetch($_REQUEST['record']);
                $this->addContact();
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=regional&record=" . $this->id);
                $this->clear();
                break;
            case 'newcontact':
                $this->showView('header.php',TRUE);
                ?><h2>Editing Regional Contacts for "<?= $this->getCompanyName(); ?>"</h2><?
                //$this->displayRegionalList();
                ?><hr noshade size='-1' /><?
                $this->showView('regional.php', TRUE);
                $this->timeStamp();
                $this->showView('footer.php',TRUE);
                break;
            case 'list':
            default:
                $this->showView('header.php',TRUE);
                ?><h2>Editing Regional Contacts for "<?= $this->getCompanyName(); ?>"</h2><?
                $this->errors();
                $this->displayRegionalList();
                ?><hr noshade size='-1' /><?
                $this->timeStamp();
                $this->showView('footer.php',TRUE);
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
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=manage&record=" . $this->id);
                break;
            default:
                $this->showCompanyEdit();
                break;
        }
    }

    function displayRegional() {
        $this->showView('header.php',TRUE);
        ?><h2>Editing Regional Contacts for "<?= $this->getCompanyName(); ?>"</h2><?
        $this->displayRegionalList();
        ?><hr noshade size='-1' /><?
        $this->timeStamp();
        $this->showView('footer.php',TRUE);
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
                // redirect to manage
                // check our request xlist, save, exit
                $this->xlist = implode(',',$_REQUEST['xlist']);
                 echo $this->xlist.'\n';
                 echo '<pre>'; print_r($this->dbtable); echo '</pre>';
                 exit;
                exit;
                unset($this->edit_date);
                $this->commit();
                $this->history->add('ven',$this->id,'xlist edit','Product Search Categories Updated.');
                $this->smartRedirect($_SERVER['PHP_SELF'] . "?action=manage&record=" . $this->id);
                break;
            default:
                $this->showCategoryEdit();
                break;
        }
    }

    function showPrimaryContactEdit() {
        $this->showView('header.php',TRUE);
        ?>
        <form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
        <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Error(s) found:</h3>' />
            <input type='hidden' name='id' value='<?= $this->id ?>' />
            <input type='hidden' name='intent' value='edit' />
            <input type='hidden' name='action' value='contact' />
            <? $this->showView('contact.php', TRUE); ?>
        </form>
        <?
        $this->showView('footer.php',TRUE);
    }

    function showCompanyEdit() {
        $this->showView('header.php',TRUE);
        //$this->top('Edit Company');
        ?>
        <form method='POST' name='RCompany' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
        <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Error(s) found:</h3>' />
            <input type='hidden' name='id' value='<?= $this->id ?>' />
            <input type='hidden' name='intent' value='edit' />
            <input type='hidden' name='action' value='company' />
            <? $this->showView('company.php', TRUE); ?>
        </form>
        <?
        $this->showView('footer.php',TRUE);
    }

    function showCategoryEdit() {
        $xl = new xlist();
        $list = explode(',',$this->xlist);
        //$this->top('Edit Categories');
        $this->showView('header.php',TRUE);
        ?>
        <form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
        <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Error(s) found:</h3>' />
            <input type='hidden' name='id' value='<?= $this->id ?>' />
            <input type='hidden' name='intent' value='edit' />
            <input type='hidden' name='action' value='categories' />
        <?  $xl->displayXlistSelectionWidget($list,$this->vendor_type_id); ?>
            <vlvalidator type='required'name='xlistReq' control='xlist[]' errmsg='Please select at least one product interest.'; />
        </form>
        <?
        //$this->bot();
        $this->showView('footer.php',TRUE);
    }

    /*
    function setPage($page=0) {
        // need to reduce by 1 to get real page number
        // zero index vs one index
        if(is_numeric($page) && ($page > 0)) {
            $this->pageNum = $page-1;
        } else {
            $this->pageNum = 0;
        }
    }

    */

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

/*
    function sqlLimit() {
        // use pageNum and pageLimit
        return(" LIMIT " . ($this->pageNum * $this->pageLimit) . ", " .
            $this->pageLimit );
            //($this->pageNum * $this->pageLimit));
        
    }
    */
    
    function tableList($new=FALSE) {
        if($new) {
            //$cSql = "select count(distinct v.id) as total from " . $this->dbTable . " as v, contacts as c where v.active<>1 AND c.ref_id=v.id AND c.ref_type='ven'";
            $cSql = "SELECT " .
                        " count(distinct v.id) as total " .
                    "FROM " .
                        $this->dbTable . " AS v " .
                    "LEFT JOIN " .
                        "contacts as c ON (c.ref_id=v.id AND c.ref_type='ven') " .
                    "WHERE " .
                        "v.active<>1";
        } else {
            //$cSql = "select count(distinct v.id) as total from " . $this->dbTable . " as v, contacts as c where v.active=1 AND c.ref_id=v.id AND c.ref_type='ven'";
            $cSql = "SELECT " .
                        " count(distinct v.id) as total " .
                    "FROM " .
                        $this->dbTable . " AS v " .
                    "LEFT JOIN " .
                        "contacts as c ON (c.ref_id=v.id AND c.ref_type='ven') " .
                    "WHERE " .
                        "v.active=1";
        }

        if(strlen($this->filter) > 0) {
            $cSql .= " AND (v.company_name like '%{$this->filter}%' OR c.last_name like '%{$this->filter}%')";
        }


        if(DB::isError($count = $this->db->getOne($cSql))) {
            $this->dbError("tableList::Count", $count);
        }

        if($new) {
            $sql  = "SELECT " .
                        " v.id, v.company_name, v.status, v.vendor_type_id, v.edit_date, v.input_date, " .
                        " c.phone_area_code, c.phone_number, " .
                        " p.first_name, p.last_name " .
                    " FROM " .
                        $this->dbTable . " AS v" .
                        " LEFT JOIN " .
                            " contacts as c ON (c.ref_id=v.id AND c.ref_type='ven' AND c.code='company') " .
                        " LEFT JOIN " .
                            " contacts as p ON (p.ref_id=v.id AND p.ref_type='ven' AND p.code='primary') " .
                    " WHERE " .
                        " v.active <> 1 ";
        } else {
            $sql  = "SELECT " .
                        " v.id, v.company_name, v.status, v.vendor_type_id, v.edit_date, v.input_date, " .
                        " c.phone_area_code, c.phone_number, " .
                        " p.first_name, p.last_name, " .
                        " vl.pass ".
                    " FROM " .
                        $this->dbTable . " AS v" .
                        " LEFT JOIN " .
                            " contacts as c ON (c.ref_id=v.id AND c.ref_type='ven' AND c.code='company') " .
                        " LEFT JOIN " .
                            " contacts as p ON (p.ref_id=v.id AND p.ref_type='ven' AND p.code='primary') " .
                        " LEFT JOIN " .
                            " vendor_login as vl ON (vl.uid = v.id) " .
                    " WHERE " .
                        " v.active = 1 ";
        }

    
        if(strlen($this->filter) > 0) {
            $sql .= " AND (v.company_name like '%{$this->filter}%' OR p.last_name like '%{$this->filter}%')";
        }

        $sql .= " ORDER BY " . $this->sortBy . " " . $this->sortDir;

        if($count >= $this->pageLimit) {
            $sql .= $this->sqlLimit();
        }

        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("tableList::Result", $results);
        }

        if($this->DEBUG) {
            print("<pre>");
            print("sql: " . $sql);
            print("\r\npagenum: " . $this->pageNum);
            print("\r\ncount: " . $count);
            print("</pre>");
        }

        $pgParams = array (
            'urlVar'     => 'pageNum',
            'perPage'    => $this->pageLimit,
            'delta'      => 4,
            'totalItems' => $count
        );

        $pageSpan = & new Pager_Sliding($pgParams);

        if(PEAR::isError($pageSpan)) {
            $this->dbError('tableList::Pager');
        }


        ?>
        <table width='100%' cellpadding='0' cellspacing='0' border='0'>
            <thead>
                <tr>
                    <td class='noNav' align='left' width='25%'>&nbsp;</td>
                    <? if($new) { ?>
                    <td class='inactiveNav' align='center'><a href='<?= $this->baseLink() ?>'>Active Vendors</a></td>
                    <? } else { ?>
                    <td class='activeNav' align='center'> Active Vendors </td>
                    <? } ?>
                    <? if($new) { ?>
                    <td class='activeNav' align='center'>
                        New Vendors
                    </td>
                    <? } else { ?>
                    <td class='inactiveNav' align='center'>
                        <a href='<?= $this->baseLink() ?>?action=newvendors'>New Vendors</a>
                    </td>
                    <? } ?>
                    <td width='25%' class='noNav' align='right'>&nbsp;</td>
                </tr>
                <tr class='navBar1'>
                    <td align='left'>
                        <form method='get' action='<?= $this->baseLink ?>'>
                        <?
                            foreach($_GET as $key => $val) {
                                if($key != 'filter' && $key != 'pageNum') {
                                ?><input type='hidden' name='<?= $key ?>' value='<?= $val ?>' /><?
                                }
                            }
                        ?>
                        <input type='text' name='filter' value='<?= htmlentities(stripslashes($this->filter), ENT_QUOTES); ?>' /> <input type='submit' value='filter' />
                        </form>
                    </td>
                    <td colspan='2' align='center'>
                        <? print($this->getRecordSetString($pageSpan->getCurrentPageID(), $count, 'Companies', $this->pageLimit, 'center')); ?>
                    </td>
                    <td align='right'>
                        <strong><a href='/vendor/signup/index.php'>[ Add Vendor ]</a></strong>
                    </td>
                </tr>
                <tr class='navBar2'> 
                    <td colspan='4'>
        <? $this->printPagerLinks($pageSpan->getLinks(), $pageSpan->numPages(), $pageSpan->getCurrentPageID()); ?>
                    </td>
            </thead>
        </table>
        <?


        $this->tableBegin($new);
        $alt = 0;
        foreach($results as $rowNum => $rowVal) {
            //$class = "rowAlt" . (($alt++ % 2) ? '1'  : '0');
            $class = (($alt++ + 1)  % 2) ? 'e1' : '';
            $this->printRow($rowVal, $class, $new);
        }
        $this->tableEnd($new);
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
        $this->showView('bullstyles.css', TRUE);
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
        $this->showView('header.php',TRUE, array('pageTitle' => 'Vendor Edit'));
        print("<h2>" . $this->getCompanyName() . "</h2>");
        if($this->admin) {
            $this->adminNavigation();
        } else {
            $this->editNavigation();
        }
        $this->companySummary();
        $this->categorySummary();
        $this->contactSummary();
        $this->photoSummary();
        $this->regionalSummary();
        if($this->admin) {
            $this->billingSummary();
        }
        $this->timeStamp();
        $this->showView('footer.php',TRUE);
        $this->clear();
        $this->clearErrors();
    }

    function timeStamp() {
        ?>
        <center><?= date('h:i:s A, l F d Y'); ?></center>
        <br />
        <?
    }

    function editNavigation() {
        ?>
        <div class='formInfo'>
            Welcome to the edit vendor profile edit interface.  Below, you can edit your company listing information, create regional product search listings, update your contact information, and change your list of product search categories.
        </div>
        <div style='float: right;'>
            <a href='exit.php'><img src='/imgz/vendor/save.jpg' border='0' /></a>
        </div>
        <div class='formInfo'>
            When completed, you can return back to the LandscapeOnline.com Home Page by using the save button on the right.
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
                            <input type='text' name='email' value='<?= $this->getPrimaryEmail(); ?>' /> <input type='submit' value='send' />
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

To assure accurracy and offer the greatest benefit we'd like you to review your profile and, if necessary, update your company information using the following address and password.

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
        <br />
        <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td colspan='3' class='cellhead'>Company Information [ <a href='<?= $_SERVER['PHP_SELF'] ?>?action=company&id=<?= $this->id ?>'>edit</a> ]</td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Name</strong></td>
                <td width='2%'>&nbsp;</td>
                <td> <?= $this->getCompanyName(); ?> </td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Vendor Type</strong></td>
                <td width='2%'>&nbsp;</td>
                <td> <?= $this->getVendorType(); ?> </td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Address</strong></td>
                <td width='2%'>&nbsp;</td>
                <td>
                    <?= $this->getCompanyAddress(); ?>
                </td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Phone</strong></td>
                <td width='2%'>&nbsp;</td>
                <td>
                    <?= $this->getCompanyPhoneNumber(); ?>
                </td>
            </tr>
            <? if(!is_null($c->fax_number) && strlen($c->fax_number) > 0) { ?>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Fax</strong></td>
                <td width='2%'>&nbsp;</td>
                <td>
                    <?= $this->getCompanyFaxNumber(); ?>
                </td>
            </tr>
            <? } ?>
            <? if(!is_null($this->website) && strlen($this->website) > 0) { ?>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Website</strong></td>
                <td width='2%'>&nbsp;</td>
                <td> <?= $this->getWebsite(); ?> </td>
            </tr>
            <? } ?>
            <? if(!is_null($c->email) && strlen($c->email) > 0) { ?>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Email</strong></td>
                <td width='2%'>&nbsp;</td>
                <td> 
                    <a href='mailto:<?= $this->getCompanyEmail(); ?>'><?= $this->getCompanyEmail(); ?></a>
                </td>
            </tr>
            <? } ?>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Signed Up</strong></td>
                <td width='2%'>&nbsp;</td>
                <td><?= $this->displayInputDate(); ?></td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Last Update</strong></td>
                <td width='2%'>&nbsp;</td>
                <td><?= $this->displayEditDate(); ?></td>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Profile</strong></td>
                <td width='2%'>&nbsp;</td>
                <td><?= $this->getProfile(FALSE); ?></td>
            </tr>
        </table>
        <?
    }

    function categorySummary() {
        $xl = new xlist();
        $list = $xl->fetchXlistArray($this->xlist);
        
        foreach($list as $key => $val) {
            $sortIndex[$key] = $val['sub_number'];
        }

        asort($sortIndex);

        ?>
        <br />
        <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td colspan='3' class='cellhead'>Search Categories [ <a href='<?= $_SERVER['PHP_SELF'] ?>?action=categories&id=<?= $this->id ?>'>edit</a> ]</td>
            </tr>
                    <tr>
                        <td width='15%'>&nbsp;</td>
                        <td>
            <?  foreach($sortIndex as $idx => $sub) {
                    ?>
                        <?= substr($list[$idx]['sub_number'],1); ?> &nbsp; &nbsp; <?= $list[$idx]['name'] ?> <br />
                        <!--
                        <td height='15' width='15%' align='right'><?= substr($list[$idx]['sub_number'],1); ?></td>
                        <td width='2%'>&nbsp;</td>
                        <td><strong><?= $list[$idx]['name'] ?></strong></td>
                        -->
                    <?
                } ?>
                        </td>
                    </tr>
        </table>
        <?
    }

    function contactSummary() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'primary');
        ?>  
        <br /> 
        <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td colspan='3' class='cellhead'>Contact Information Coming soon...</td>
                <?php // old link just like above but whith action equal categories?>
            </tr>
            <tr>
                <td height='15' width='15%' valign='top' align='right'><strong>Name</strong></td>
                <td width='2%'>&nbsp;</td>
                <td>this will be a list of names here.</td>
            </tr>
        </table>
        <?
    }

    function regionalSummary() {
        $contacts = $this->fetchRegionalArray();
        ?>
        <br />
        <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td colspan='3' class='cellhead'>Regional Listingss <strong>[ <a href='<?= $_SERVER['PHP_SELF']?>?record=<?= $this->id ?>&action=regional'>edit</a> ]</strong></td>
            </tr>
            <tr>
            <? if(count($contacts) == 0) { ?>
                <td align='center' colspan='3'>
                    <h3><em>No Regional Contacts</em></h3>
                </td>
            <? } else { ?>
                <td colspan='3'>
                    <table width='100%' id='contacts' align='center' cellpadding='0' cellspacing='0'>
                        <thead>
                            <tr>
                                <td>Contact Type</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Area Code</td>
                                <td>Phone</td>
                            </tr>
                        </thead>
                        <tbody>
                <?
                    foreach($contacts as $idx => $obj) {
                        $c = (($idx + 1) % 2) ? "class='e1'" : "";
                        if($obj['phone_area_code'] == "") {
                            $phone = $this->getCompanyPhoneNumber();
                        } else {
                            $phone = "(" . $obj['phone_area_code'] . ") " . $obj['phone_number'];
                        }
                        ?>
                        <tr <?= $c?>>
                            <td><strong><?= ucwords($obj['code']); ?></strong></td>
                            <td><?= $obj['city'] ?></td>
                            <td align='center'><?= $obj['state'] ?></td>
                            <td align='center'><?= $obj['other_1'] ?></td>
                            <td nowrap><?= $phone ?></td>
                        </tr>
                        <?
                    } 
                ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Contact Type</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Area Code</td>
                                <td>Phone</td>
                            </tr>
                            </tr>
                        </tfoot>
                    </table>
                </td>
               <? } ?>
            </tr>
        </table>
        <?
    }

    function photoSummary(){
        include '/home/land/public_html/vendor/photo_edit_html.php';
    }
    
    function displayRegionalList() {
        $contacts = $this->fetchRegionalArray();
        ?>
                    <table width='100%' id='contacts' align='center' cellpadding='0' cellspacing='0'>
                        <thead>
                            <tr>
                                <td>Contact Type</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Area Code</td>
                                <td>Phone</td>
                                <td>Edit</td>
                                <td>Delete</td>
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
                                $phone = $this->getCompanyPhoneNumber();
                            } else {
                                $phone = "(" . $obj['phone_area_code'] . ") " . $obj['phone_number'];
                            }
                            ?>
                            <tr <?= $c?>>
                                <td><strong><?= ucwords($obj['code']); ?></strong></td>
                                <td><?= $obj['city'] ?></td>
                                <td align='center'><?= $obj['state'] ?></td>
                                <td align='center'><?= $obj['other_1'] ?></td>
                                <td nowrap><?= $phone ?></td>
                                <td align='center'><a href='<?= $this->baseLink() ?>?action=regional&intent=editcontact&record=<?= $this->id ?>&cid=<?= $obj['id'] ?>'><img src='/imgz/vendor/pencil.gif' border='0' height='20' width='20' /></a></td>
                                <td align='center'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=regional&cid=<?= $obj['id'] ?>&intent=delete&record=<?= $this->id ?>','Are you sure you want to permanently delete the regional contact for <?= $obj['city'] ?>, <?= $obj['state'] ?>?')"><img src='/imgz/vendor/delete.gif' border='0' height='20' width='20' /></a></td>
                            </tr>
                            <?
                        }
                    }
                    ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Contact Type</td>
                                <td>City</td>
                                <td>State</td>
                                <td>Area Code</td>
                                <td>Phone</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            </tr>
                        </tfoot>                                                                             
                    </table>                                                                                 
                    <br />
                    <table width='100%' border='0' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td align='left'><a href='<?= $_SERVER['PHP_SELF'] ?>?record=<?= $this->id ?>&action=manage'><img src='/imgz/vendor/save.jpg' border='0' /></a></td>
                            <td align='right'><a href='<?= $_SERVER['PHP_SELF'] ?>?record=<?= $this->id ?>&action=regional&intent=newcontact'><img src='/imgz/vendor/new_contact.gif' border='0' /></a></td>
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

    function billingSummary() {
        ?>
        <br /> 
        <table width='100%' class='searchOptions' cellpadding='0' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td colspan='3' class='cellhead'>Billing Information</td>
            </tr>
            <tr>
                <td width='15%' height='15' valign='top' align='right'><strong>Listing</strong></td>
                <td width='2%'>&nbsp;</td>
                <td><?= $this->statusList[$this->status]  ?></td>
            </tr>
            <tr>
                <td width='15%' height='15' valign='top' align='right'><strong>Detail</strong></td>
                <td width='2%'>&nbsp;</td>
                <td> <em>Please see the credit card summary page.</em> </td>
            </tr>
        </table>
        <br />
        <?
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
