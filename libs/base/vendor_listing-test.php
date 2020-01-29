<?php
require_once("template_class.php");
require_once("contacts_class.php");
require_once("xlist_class-test.php");
require_once("ylist_class.php");
require_once("vendor_login.php");
require_once("vendor_type_class.php");
require_once("vendor_product.php");

class vendor extends template_class {
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
    var $id;
    var $active;
    var $status;
    var $vendor_type_id;
    var $xlist;
    var $company_name;
    var $website;
    var $profile;
    var $input_date;
    var $edit_date;
    var $logo;
    var $info_request;
    var $sentpass;

    var $statusList;

    function vendor() {
        // table name
        $table   = "new_vendor";

        // list of db columns
        $columns = array(
            'id',
            'active',
            'status',
            'vendor_type_id',
            'xlist',
            'company_name',
            'website',
            'profile',
            'input_date',
            'edit_date',
            'logo',
            'info_request',
            'sentpass'
        );

        $this->instantiate($table,$columns,$record);

        $this->statusList = array (
            0.0  => 'inactive',
            2.0  => 'free',
            4.0  => 'comp',
            8.0  => 'paid',
            16.0 => 'value add'
        );

        $this->history = new history();
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
    }

    /*
    function changeStatus($record=NULL, $status=NULL) {
        $hot = 0;
        $active = 0;

        if(is_null($record) || is_null($status)) {
            // invalid record or status
            $this->addErrors("Invalid status [$status] or record [$record]");
            return(FALSE);
        }

        if($this->fetch($record)) {
            switch($status) {
                case 4:
                    $this->hot = 3; $this->active = 1 ;
                    break;
                case 3:
                    $this->hot = 2; $this->active = 1 ;
                    break;
                case 2:
                    $this->hot = 1; $this->active = 1;
                    break;
                case 1:
                    $this->hot = 0; $this->active = 1;
                    break;
                case 0:
                default:
                    $this->hot = 0; $this->active = 0;
                    break;
            }
            $this->commit();
            $this->clear();
            return(TRUE);
        }
    } */

    function displayCompanyLogo() {
        if(!is_null($this->logo) && strlen($this->logo) > 3) {
            print("<img src='/products/images/" . $this->logo . "' border='0' />");
        } else {
            print("&nbsp;");
        }
    }

    function displayPhoneNumber() {
        print("(" . $this->area_code . ") " . $this->phone);
    }

    function displayWebsite() {
        if(!is_null($this->website)) {
            print($this->website);
        } else {
            print('None');
        }
    }

    function displayAddress() {
        print($this->address . "<br />" . $this->city . ", " . $this->state . " " . $this->zip);
    }

    function getXlistArray() {
        $X = new xlist();
        return($X->fetchXlistArray($this->xlist));
        //return($array);
    }

    function salesContact($message) {
        $name = strtolower($this->comp_name);
        if($name[0] <= 'h') {
            $repEmail = 'adsalesa-h@landscapeonline.com';
        } else if($name[0] <= 'p') {
            $repEmail = 'adsalesi-p@landscapeonline.com';
        } else {
            $repEmail = 'adsalesq-z@landscapeonline.com';
        }

        // for debugging
        //$repEmail = 'porwig@landscapeonline.com';

        $mail = array();
        $mail['To'] = $repEmail;
        $mail['From'] = 'Landscape Online Sales Requests <webmaster@landscapeonline.com>';
        $mail['Subject'] = "Contact request from {$this->comp_name}";
        $mail['bodyTXT'] = "Please contact someone from {$this->comp_name} regarding:\r\n" . $message;

        if(!(($result = $this->sendMail($mail) === TRUE)) ) {
            $this->addErrors("Error sending email to " . $mail['To']);
            return(FALSE);
        } else {
            return(TRUE);
        }
    }

    function showReceipt($id=NULL) {
        if(is_null($id)) {
            $id=9;
            //return(FALSE);
        }

        $this->fetch($id);
        ?><h2>Listing Receipt VEN<? printf("%05d",$this->id); ?>
        <p><em>Please print a copy of this receipt for your records.</em></p>
        </h2><hr noshade size='-1' />
        <?
        $this->displayCompanyListing();
        print("<hr noshade size ='-1' />");
        $this->displayPrimaryContact();
        if($this->status == 8.0) {
            print("<hr noshade size ='-1' />");
            $this->displayBillingInfo();
        }
    }

    function displayCompanyListing() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'company');
        ?>
        <div class='infoBox'>
                <h3>Company Information for <?= stripslashes($this->company_name); ?></h3>
                <dl>
                    <dt>Address</dt>
                    <dd>
                        <?= $this->getCompanyAddress(); ?>
                    </dd>
                    <dt>Phone</dt>
                    <dd>
                        (<?= $c->phone_area_code ?>) <?= $c->phone_number ?>
                    </dd>
                <? if(strlen($c->fax_area_code) > 0 && strlen($c->fax_number) > 0) { ?>
                    <dt>Fax</dt>
                    <dd>
                        (<?= $c->fax_area_code ?>) <?= $c->fax_number ?>
                    </dd>
                <? } ?>
                <? if(strlen($c->email)) { ?>
                    <dt>Email</dt>
                    <dd><?= $c->email ?></dd>
                <? } ?>
                </dl>
                <? $this->displayListingSummary(); ?>
        </div>
        <?
    }

    function displayListingSummary($banner=TRUE) {
        $xl = new xlist();
        $list = $xl->fetchXlistArray($this->xlist);
        if($banner) {
        ?>
        <h4>Search Listing Categories</h4>
        <? } ?>
        <ul>
        <? 
            foreach($list as $obj) {
                print("<li>${obj['name']}</li>");
            }
        ?>
        </ul>
        <?
    }

    function vendor_prod($id=NULL, $admin=NULL) {
        $vp = new vendor_product();

        if(is_null($id) || !is_numeric($id)) {
            $id = $this->id;
        }

        $size = 'height="200"';

        $prodList = $vp->fetchVendorArray($id);

        echo("<table style='table-layout: fixed;'>");
        if(count($prodList) == 0) {
            echo("<tr><td><b>No Products Listed</b></td></tr>");
        } else {
            foreach($prodList as $row) {
                ?>
                <tr>
                    <td valign='top'> 
                        <b><?= stripslashes($row['product_name']); ?></b><br />
                        <?= stripslashes($row['description']); ?>
                    </td>
                    <td width='250' align='right'>
                        <div style="overflow: hidden; width: 250px;">
                        <img src='/products/images/<?= $row['photo'] ?>' <?= $size ?> />
                        </div>
                    </td>
                </tr>
                <tr><td colspan='2'><hr noshade size='-1' /></td></tr>
                <?
            }
        }
        echo("</table>");
    }

    function displayPrimaryContact() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'primary');
        ?>
        <div class='infoBox'>
                <h3>Primary Contact: <?= $c->first_name . " " . $c->last_name ?> </h3>
                <dl>
                    <dt>Title</dt>
                    <dd><?= $c->title ?></dd>
                    <dt>Address</dt>
                    <dd>
                        <?= $this->getPrimaryAddress(); ?>
                    </dd>
                    <dt>Phone</dt>
                    <dd>
                        (<?= $c->phone_area_code ?>) <?= $c->phone_number ?>
                    </dd>
                <? if(strlen($c->fax_area_code) > 0 && strlen($c->fax_number) > 0) { ?>
                    <dt>Fax</dt>
                    <dd>
                        (<?= $c->fax_area_code ?>) <?= $c->fax_number ?>
                    </dd>
                <? } ?>
                <? if(strlen($c->email)) { ?>
                    <dt>Email</dt>
                    <dd><?= $c->email ?></dd>
                <? } ?>
                </dl>
        </div>
        <?
    }

    function displayBillingInfo() {
    }

    function getCompanyName() {
        return(stripslashes($this->company_name));
    }

    function getAddress($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getAddress());
    }

    function getCompanyAddress() {
        return($this->getAddress('company'));
    }

    function getPrimaryAddress() {
        return($this->getAddress('primary'));
    }

    function generatePassword() {
        if(!isset($this->id)) {
            return(FALSE);
        }
    }

    function getPhoneNumber($type) {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getPhoneNumber());
    }

    function getFaxNumber($type) {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getFaxNumber());
    }

    function getCompanyPhoneNumber() {
        return($this->getPhoneNumber('company'));
    }

    function getPrimaryPhoneNumber() {
        return($this->getPhoneNumber('primary'));
    }

    function getCompanyFaxNumber() {
        return($this->getFaxNumber('company'));
    }

    function getPrimaryFaxNumber() {
        return($this->getFaxNumber('primary'));
    }

    function getPrimaryFullName($type='primary') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        $n = $c->getFullName();
        $n = ($n == " ") ? "&nbsp;" : $n;
        return($n);
    }

    function getPrimaryFirstName($type='primary') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getFirstName());
    }

    function getPrimaryLastName($type='primary') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getLastName());
    }

    function getPrimaryEmail() {
        return($this->getEmail('primary'));
    }

    function getCompanyEmail() {
        return($this->getEmail('company'));
    }

    function getEmail($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getEmail());
    }

    function getVendorType() {
        $vt = new vendor_type();
        $vt->fetch($this->vendor_type_id);
        return(stripslashes($vt->name));
    }

    function getVendorTypeId() {
        return($this->vendor_type_id);
    }

    function getProfile($raw=TRUE) {
        if(!$raw) {
            return(nl2br(stripslashes($this->profile)));
        } else {
            return(stripslashes($this->profile));
        }
    }

    function getWebsite() {
        return($this->website);
    }

    function displayEditDate() {
        return($this->parseDate($this->edit_date));
    }

    function displayInputDate() { 
        return(date('m/d/y',$this->input_date));
    }

    function getPhoneAreaCode($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->phone_area_code);
    }

    function getPhone($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->phone_number);
    }

    function getFaxAreaCode($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->fax_area_code);
    }

    function getFax($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->fax_number);
    }

    function getCompanyPhoneAreaCode() {
        return($this->getPhoneAreaCode('company'));
    }

    function getPrimaryPhoneAreaCode() {
        return($this->getPhoneAreaCode('primary'));
    }

    function getCompanyPhone() {
        return($this->getPhone('company'));
    }

    function getPrimaryPhone() {
        return($this->getPhone('primary'));
    }

    function getCompanyFax() {
        return($this->getFax('company'));
    }

    function getPrimaryFax() {
        return($this->getFax('primary'));
    }

    function getCompanyFaxAreaCode() {
        return($this->getFaxAreaCode('company'));
    }

    function getPrimaryFaxAreaCode() {
        return($this->getFaxAreaCode('primary'));
    }

    function getAddress1($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getAddress1());
    }

    function getAddress2($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getAddress2());
    }

    function getCompanyAddress1() {
        return($this->getAddress1('company'));
    }

    function getPrimaryAddress1() {
        return($this->getAddress1('primary'));
    }

    function getCompanyAddress2() {
        return($this->getAddress2('company'));
    }

    function getPrimaryAddress2() {
        return($this->getAddress2('primary'));
    }

    function getCity($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getCity());
    }

    function getCompanyCity() {
        return($this->getCity('company'));
    }

    function getPrimaryCity() {
        return($this->getCity('primary'));
    }

    function getPostalCode($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->getPostalCode());
    }

    function getCompanyPostalCode() {
        return($this->getPostalCode('company'));
    }

    function getPrimaryPostalCode() {
        return($this->getPostalCode('primary'));
    }

    function getState($type='company') {
        $c = new contact();
        $c->fetchContact('ven',$this->id,$type);
        return($c->state);
    }

    function getCompanyState() {
        return($this->getState('company'));
    }

    function getPrimaryState() {
        return($this->getState('primary'));
    }

    function getPrimaryContactTitle() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'primary');
        return(stripslashes($c->title));
    }

    function getPrimaryContactFirstName() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'primary');
        return(stripslashes($c->first_name));
        
    }

    function getPrimaryContactLastName() {
        $c = new contact();
        $c->fetchContact('ven',$this->id,'primary');
        return(stripslashes($c->last_name));
    }

    function vendorTypeWidget() {
        $vt = new vendor_type();
        $vt->selectionWidget($this->vendor_type_id);
    }

    // function expects $this to be loaded already
    function slurpCompanyForm() {
        $c = new contact();

        $this->company_name = $_REQUEST['company_name'];
        $this->vendor_type_id  = $_REQUEST['vendor_type'];
        $this->profile = $_REQUEST['profile'];
        $this->website = $_REQUEST['website'];
        unset($this->edit_date);
        $this->commit();

        $c->fetchContact('ven',$this->id,'company');
        $c->email = $_REQUEST['email'];
        $c->phone_area_code = $_REQUEST['ac'];
        $c->phone_number = $_REQUEST['phone'];
        $c->fax_area_code = $_REQUEST['fax_ac'];
        $c->fax_number = $_REQUEST['fax_phone'];
        $c->address1 = $_REQUEST['address1'];
        $c->address2 = $_REQUEST['address2'];
        $c->city = $_REQUEST['city'];
        $c->state = $_REQUEST['state'];
        $c->postal_code = $_REQUEST['postal'];
        unset($c->edit_date);
        $c->commit();

        // release local variable
        unset($c);
    }

    function slurpPrimaryContactForm() {
        $c = new contact();

        unset($this->edit_date);

        $c->fetchContact('ven',$this->id,'primary');
        $c->email = $_REQUEST['email'];
        $c->first_name = $_REQUEST['first_name'];
        $c->last_name = $_REQUEST['last_name'];
        $c->title = $_REQUEST['title'];
        $c->phone_area_code = $_REQUEST['ac'];
        $c->phone_number = $_REQUEST['phone'];
        $c->fax_area_code = $_REQUEST['fax_ac'];
        $c->fax_number = $_REQUEST['fax_phone'];
        $c->address1 = $_REQUEST['address1'];
        $c->address2 = $_REQUEST['address2'];
        $c->city = $_REQUEST['city'];
        $c->state = $_REQUEST['state'];
        $c->postal_code = $_REQUEST['postal'];
        unset($c->edit_date);

        $c->commit();
        $this->commit();

        unset($c);
    }

    function fetchRegionalArray($id=NULL) {
        $c = new contact();

        if(is_null($id)) {
            $id = $this->id;
        }

        return($c->fetchContactsArray('ven',$id,'regional'));
    }

    function findAPassword() {
        $vl = new vendor_login();
        if(($vpass = $vl->fetchPassword($this->id)) === 0) {
            return($this->findNextVendorPassword());
        } else {
            return($vpass);
        }
    }

    function findNextVendorPassword() {
        return("V" . strtoupper(substr($this->getCompanyName(),0,2)) . $this->getNextPasswordToken());
    }

    function makeVendorPassword() {
        $token  = $this->getPasswordToken();
        return("V" . strtoupper(substr($this->getCompanyName(),0,2)) . $token);
    }

    function setVendorPassword($pass=NULL) {
        if(is_null($pass)) { 
            $pass = $this->makeVendorPassword();
        }

        $vl = new vendor_login();

        if($pass == $this->findNextVendorPassword()) {
            // default password, we need to update the counter
            $pass = $this->makeVendorPassword();
        }

        if(($vrecord = $vl->fetchByVendor($this->id)) === 0) {
            $vl->uid  = $this->id;
            $vl->pass = $pass;
            $vl->time_start = time();
            $vl->commit();
        } else {
            $vl->fetch($vrecord['id']);
            $vl->time_start = time();
            $vl->pass = $pass;
            $vl->commit();
        }

        $vl->clear();
        return(TRUE);
    }

    /*************************************************************************
     *
     * Vendor Search Functionality
     *
     ************************************************************************/

     function search_list($find, $xlist="", $filter="") {
        $xl = new xlist();

        if($xlist == "") {
            $xlist = array();
        }

        if($filter != "") {
            $children = $xl->fetchXlistChildrenByName($filter); 
        } else {
            $children = $xl->fetchXlistChildrenArray($find);
        }


        if($count = count($children)) {
            if($filter != "") {
            ?>
            <table cellspacing='2' cellpadding='0' align='center' width='50%'>
            <?
                foreach($children as $idx => $obj) {
                    $t = (in_array($obj['id'],$xlist)) ? "checked" : "";
                    ?><tr>
                        <td><input <?= $t ?> type='checkbox' name='find[]' value='<?= $obj['id'] ?>' /></td>
                        <td> <?= $obj['name'] ?></td>
                      </tr><?
                }
            ?>
            </table>
            <?
            } else {
            ?>
            <table cellspacing='2' cellpadding='0'><tr><td><table cellspacing='2' cellpadding='0'>
            <?
                $i = $c = 0;
                $ot = (int) $count/3;
                foreach($children as $idx => $obj) {
                    if(($i++ % $ot == 0) && $c++ < 3) {
                        ?>
                        </table></td><td valign='top'><table cellspacing='2' cellpadding='0'>
                        <?
                    }
                    $t = (in_array($obj['id'],$xlist)) ? "checked" : "";
                    ?>
                    <tr>
                        <td><input <?= $t ?> type='checkbox' name='find[]' value='<?= $obj['id'] ?>' /></td>
                        <td> <?= $obj['name'] ?></td>
                    </tr>
                    <?
                }
            ?>
            </table></td></tr></table>
            <?
            }
        }
     }

    function view_wh() {
        // deprecated
    }

    function vendor_xlist_cate_find($find) {
        $xl = new xlist();
        $list = $xl->fetchXlistParentArray();
        foreach($list as $obj) {
            $t = ($obj['id'] == $find) ? "selected" : "";
            ?>
            <option value='<?= $obj['id']?>' <?= $t ?>><?= $obj['name'] ?></option>
            <?
        }
    }

    function vendor_xlist_catp_find($find) {
        $xl = new xlist();
        $list = $xl->fetchXlistParentArray();
        foreach($list as $obj) {
            $t = ($obj['id'] == $find) ? "selected" : "";
            if($obj['idAccount'] == "0") {
             ?>
            <option value='<?= $obj['id']?>' <?= $t ?>><?= $obj['name'] ?></option>
            <? }
        }
    }

    function vendor_xlist_cats_find($find) {
        $xl = new xlist();
        $list = $xl->fetchXlistParentArray();
        foreach($list as $obj) {
            $t = ($obj['id'] == $find) ? "selected" : "";
            if($obj['idAccount'] == "1") {
             ?>
            <option value='<?= $obj['id']?>' <?= $t ?>><?= $obj['name'] ?></option>
            <? }
        }
    }
    
    function xlist_names($id) {
        $xl = new xlist();
        $xl->fetch($id);
        return($xl->name);
    }

    function ylist_names($id) {
        $l = new ylist();
        $l->fetch($id);
        return($l->name);
    }

    function vendor_type_name($id) {
        $vt = new vendor_type();
        $vt->fetch($id);
        return($vt->name);
    }

    function local_vendor_type($vst, $search, $form="refine") {
        $list = $this->vendor_type_list($search);

        if($vst < 1)
            $vst = 0;

        if(count($list) > 1) {
            print("To refine your search, please click on the tabs below.<br />");
        }

        $idx = 1;

        ?>
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr>
            <?
                if(count($list) > 1) {
                    foreach($list as $id => $row) {                                                 
                        //$stack['vst'] = "vst=$id";                                                
                        //$link1 = $_SERVER['PHP_SELF'] . '?' . implode('&',$stack);                
                        //$link = 'javascript:window.location="' . $link1 . '"                      
                        $link = "javascript: document.$form.vst.value = $id; document.$form.submit();";
                        echo('<td width="15" height="20">&nbsp;</td>' . "\n");                      
                        if($vst == $id) {                                                           
                            echo('<td width="95" align="center" nowrap class="local_vendor_active">' . "\n");      
                            echo('<strong>' . $row['plural']  . '</strong>' . "\n");                
                            echo('</td>' . "\n");                                                   
                        } else {                                                                    
                            echo('<td width="95" align="center" nowrap class="local_vendor_inactive"');
                            //echo(' onClick=javascript:window.location="' . $link . '">' . "\n");  
                            echo(' onClick=\'' . $link . '\' >' . "\n");                            
                            echo('<a href="' . $link . '" class="locallink">' . $row['plural'] . '</a>' . "\n");   
                            echo('</td>' . "\n");                                                   
                        }                                                                           
                        $idx += 2;                                                                  
                    }
                } else {
                    foreach($list as $id => $row) {                                                 
                        $vst = $id;                                                                 
                        $stack['vst'] = "vst=$id";                                                  
                        $link = $_SERVER['PHP_SELF'] . '?' . implode('&',$stack);                   
                        echo('<td width="15" height="20">&nbsp;</td>' . "\n");                      
                        echo('<td width="95" align="center" nowrap class="local_vendor_active">' . "\n");
                        echo('<strong>' . $row['plural']  . '</strong>' . "\n");                    
                        echo('</td>' . "\n");                                                       
                    }                                                                               
                    $idx += 2;                                                                      
                }
                $idx++;
            ?>
                <td width='15'>&nbsp;</td>
            </tr>
            <tr><td colspan="<?= $idx ?>" bgcolor="#70a183"><img width="1" height="4" alt=""></td></tr>
        </table>
        <?
    }

    function vendor_type_list($search=0) {
        // return an array of arrays                                                        
        // internal arrays are the rows selected                                            
        if(is_array($search)) {                                                             
            //if(count($search) == 1) {                                                     
            //    $search = $search[0];                                                     
            //} else {                                                                      
                foreach($search as $key => $val) {                                          
                    $search[$key] = "id=$val";                                              
                }                                                                           
                $query  = "SELECT * FROM vendor_type ";                                     
                $query .= "WHERE " . implode(" OR ",$search) . " ";                         
                $query .= "ORDER BY id";                                                    
            //}                                                                             
        } else if(is_numeric($search)) {                                                    
            if($search == "34") {                                                           
                $query  = "SELECT * FROM vendor_type ";                                     
                $query .= "WHERE id=6 OR id=4 OR id=5 ";                                    
                $query .= "ORDER BY id";                                                    
            } else {                                                                        
                $query  = "SELECT * FROM vendor_type ";                                     
                $query .= "WHERE id=1 OR id=3 OR id=2 OR id=4 OR id=5 ";                    
                $query .= "ORDER BY id";                                                    
            }                                                                               
        } else {                                                                            
            $query = "SELECT * FROM vendor_type ORDER BY id";                               
        }                                                                                   
                                                                                            
        $result = $this->db->getAll($query);                                                 
                                                                                            
        if(count($result) > 1)                                                
            $ret_stack[0] = array("id" => 0, "type_num" => 0, "name" => "All", "plural" => "All");         
        /*
        while($row = $this->db->fetch_array($result)) {                                     
            $ret_stack[$row['id']] = $row;                                                  
        } */                                                                                  

        foreach($result as $obj) {
            $ret_stack[$obj['id']] = $obj;
        }

        unset($result);
                                                                                            
        return($ret_stack);                                                                 
    }

    function vendor_type_name_static($vst, $type='i') {
        // $vst  is the vendor type from vendor_type table
        // $type is the type of string to return:
        //  i -> initial
        //  n -> name
        //  p -> plural name

        $table['i'] = array(                                                                
            0 => "A",
            1 => "M",
            2 => "E",                                                                       
            3 => "R",                                                                       
            4 => "W",                                                                       
            5 => "T",                                                                       
            6 => "G"                                                                        
        );                                                                                  
                                                                                            
        $table['n'] = array(                                                                
            0 => "All",                                                                     
            1 => "Manufacturer",                                                            
            2 => "Exclusive Importer",                                                      
            3 => "Manufacturers Representive",                                              
            4 => "Wholesale Facility",                                                      
            5 => "Retail Facility",                                                         
            6 => "Grower"                                                                   
        );                                                                                  
                                                                                            
        $table['p'] = array(                                                                
            0 => "All",                                                                     
            1 => "Manufacturers",                                                           
            2 => "Exclusive Importers",                                                     
            3 => "Manufacturers Representives",                                             
            4 => "Wholesale Facilities",                                                    
            5 => "Retail Facilities",                                                       
            6 => "Growers"                                                                  
        );                                                                                  
        return($table[$type][$vst]);                                                        
    }

    function find_local_listings($vst, $find, $acs, $types, $state) {
        $list = $this->vendor_type_list($types);

        foreach($list as $key => $row) {
            $typeidx[] = $key;
        }

        $query = "SELECT " .
                    "v.id, v.company_name, v.vendor_type_id, v.status, v.xlist, " .
                    "c.ref_type, c.ref_id, c.other_1, c.phone_area_code, c.phone_number, c.state, " .
                    "co.phone_area_code as c_phone_area_code, co.phone_number as c_phone_number " .
                 "FROM " .
                    $this->dbTable . " AS v " .
                 "LEFT JOIN " .
                    "contacts AS c ON (c.ref_id = v.id AND c.ref_type='ven') " .
                 "INNER JOIN " .
                    "contacts AS co ON (co.ref_id = v.id AND co.ref_type='ven' AND co.code='company') " .
                 "WHERE " .
                    "v.active=1 " .
                    "AND v.status > 0 ";
                 

        //$query  = "SELECT v.id,v.company_name, v.vendor_type_id, v.status, c.ref_type, c.ref_id, c.other_1, c.phone_area_code, c.phone_number, c.state, co.phone_area_code as c_phone_area_code, co.phone_number as c_phone_number  FROM {$this->dbTable} as v, contacts as c, contacts as co WHERE v.active=1 ";
        //$query .= " AND c.ref_type='ven' AND c.ref_id = v.id AND (c.code='regional' OR c.code='company') ";
        //$query .= " AND co.ref_type='ven' AND co.ref_id = v.id AND co.code='company' ";

        if(!is_array($acs) && strlen($state) == 0) {
            // national search
            $query .= "AND c.code='company' ";
        } else {
            $query .= "AND (c.code='regional' OR c.code='company') ";
            // regional search
        }

        if(is_array($typeidx)) {
            $query .= " AND v.vendor_type_id IN (" . implode(', ', $typeidx) . ") ";
        }

        if(is_array($find)) {
            foreach($find as $xlist) {
                $condition[] = " find_in_set($xlist,v.xlist)";
            }   
            $query .= "AND (" . implode(' OR ', $condition) . ")";
        }

        if(is_numeric($vst) && $vst != 0) {
            $query .= " AND v.vendor_type_id = $vst ";
        }

        if(strlen($state) == 2) {
            $query .= " AND c.state='$state' ";
        } 

        if(is_array($acs)) {
            $query .= " AND (c.phone_area_code IN (" . implode(', ', $acs) . ") OR c.other_1 IN (" . implode(', ', $acs) . ")) ";
        } 

        $query .= " ORDER BY status DESC, id ASC";

        //print($query); 

        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("",$result);
            return(FALSE);
        }

        if(!count($result)) {
            print("<b>Your request does not have a match.</b><br />");
        } else {
            ?>
            <table width='100%' border='0'>
                <tr>
                    <td>Company</td>
                    <td align='center'>Type</td>
                    <td width='20'>&nbsp;</td>
                    <td width='226'>Company</td>
                    <td align='center'>Type</td>
                </tr>
                <?
                    $i = 1;
                    foreach($result as $row) {
                        if(is_null($row['phone_number']) || $row['phone_number'] == "") {
                            // regional contact
                            $phone = "({$row['c_phone_area_code']}) {$row['c_phone_number']}";
                        } else {
                            $phone = "({$row['phone_area_code']}) {$row['phone_number']}";
                        }

                        if($i % 2) { ?><tr><?  }
                        if($row['status'] <= 2) {
                            // row is not hotlinked
                            ?><td width=226 bgcolor=#EFEFEF><?= stripslashes($row['company_name']) ?><br /><?= $phone ?></td><?
                        } else {
                            // row is hotlinked
                            ?><td width=226 bgcolor=#EFEFEF><a href="listing.php?id=<?= $row['id'] ?>"><?= stripslashes($row['company_name']); ?></a><br><?= $phone ?></td>
                            <?
                        }
                        ?><td bgcolor=#EFEFEF align=center><?= $this->vendor_type_name_static($row['vendor_type_id'], 'i'); ?></td><?
                        if(++$i % 2) {
                            ?></tr><?
                        } else {
                            ?><TD width=30>&nbsp;</TD><?
                        }
                    }
                ?>
                </tr>
            </table>
            <?
        
        }
    }

    function vendor_type($vst, $search=0) {
        if($vst < 1) $vst = 0;

        if($search) {
            if($search == "34") {
                $query = "select * from vendor_type WHERE id=6 OR id=4 OR id=5 ORDER BY id";
            } else {
                $query = "select * from vendor_type WHERE id=1 OR id=3 OR id=2 OR id=4 OR id=5 ORDER BY id";
            }
        } else {
            $query = "select * from vendor_type ORDER BY id";
        }

        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("",$result);
        } 

        foreach($result as $row) {
            $t = ($vst == $row['id']) ? "checked" : "";
            ?><input type='radio' name='vst' <?= $t ?> value='<?= $row['id'] ?>' /><?= $row['plural'] ?> <br /><?
        }
    }

    function find_listings($check, $extra, $vst, $find, $cat_id, $state, $numb) {
        $query = "SELECT " .
                    "v.id, v.vendor_type_id,  v.xlist, v.status, v.company_name, c.phone_number, c.phone_area_code, c.other_1, " .
                    "co.phone_number as c_phone_number, co.phone_area_code as c_phone_area_code " .
                 "FROM " .
                    $this->dbTable . " AS v " .
                 "LEFT JOIN " .
                    "contacts as c ON (c.ref_id=v.id AND c.ref_type='ven')" .
                 "INNER JOIN " .
                    "contacts AS co ON (co.ref_id = v.id AND co.ref_type='ven' AND co.code='company') " .
                 "WHERE " .
                    "v.active=1 " .
                    "AND v.status > 0 ";

        if($check == "AreaCode") {
            $query .= "AND (c.phone_area_code = $numb OR c.other_1 = $numb) ";
        } else if($check == "State") {
            $query .= "AND c.state = '$state' ";
        }

        if(is_array($find)) {
            foreach($find as $xlist) {
                $condition[] = " find_in_set($xlist,v.xlist)";
            }   
            $query .= "AND (" . implode(' OR ', $condition) . ") ";
        }

        if(is_numeric($vst)) {
            $query .= "AND v.vendor_type_id = $vst ";
        }

        $query .= $extra . " ORDER BY status DESC, id ASC";

        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("find_listings::query", $result);
        }

        if(count($result) == 0) {
            echo("<tr><td align=center><b>Your Request does not have a match</b></td></tr>");
        } else {
            echo "<tr>";
            echo "<TD>Company</TD>";
            echo "<TD align=center>Type</TD>";
            echo "<TD width=20></TD>";
            echo "<TD width=226>Company </TD>";
            echo "<TD align=center >Type</TD>";
            echo "</tr>";

            $i = 1;
            foreach($result as $row) {
                if($i % 2) echo("<tr>");

                // set phone number
                if(strlen($row['phone_area_code']) == 0 && strlen($row['phone_number']) == 0) {
                    $phone = "({$row['c_phone_area_code']}) {$row['c_phone_number']}";
                } else {
                    $phone = "({$row['phone_area_code']}) {$row['phone_number']}";
                }

                if($row['status'] > 2) {
                    ?><TD width=226 bgcolor=#EFEFEF><a href='listing.php?id=<?= $row['id'] ?>'><?= $row['company_name'] ?></a><br><?= $phone ?></TD><?
                } else {
                    ?><TD width=226 bgcolor=#EFEFEF><?= $row['company_name'] ?><br><?= $phone ?></TD><?
                }

                echo "<td bgcolor=#EFEFEF align=center>";
                echo($this->vendor_type_name_static($row['vendor_type_id'], 'i'));      
                echo "</td>";                                                           
                                                                                        
                if (++$i %2) {
                    echo("</tr>");
                } else {
                    echo("<TD width=30>&nbsp;</TD>");
                }
            }
            echo("</tr>");
        }

    }
}
?>
