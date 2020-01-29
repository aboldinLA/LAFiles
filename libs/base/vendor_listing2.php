<?php
require_once("template_class.php");
require_once("contacts_class.php");
require_once("xlist_class.php");
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
    var $pass;
    var $email;
    var $address;
    var $city;
    var $state;
    var $zip;
    var $area_code;
    var $phone;
    var $fax;
    var $sentpass;
    var $web_mod;
    var $name;
    var $email2;

    var $statusList;

    function vendor() {
        $table   = "new_vendor";
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
            'pass',
            'email',
            'address',
            'city',
            'state',
            'zip',
            'area_code',
            'phone',
            'fax',
            'web_mod',
			'name',
			'email2',
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
                        <?= $c->phone_number ?>
                    </dd>
                <? if(strlen($c->fax_number) > 0) { ?>
                    <dt>Fax</dt>
                    <dd>
                        <?= $c->fax_number ?>
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
                        <div style="overflow: scroll; width: 400px;">
                        <a href="<?= stripslashes($row['web']); ?>"><img src='/products/images/<?= $row['photo'] ?>' <?= $size ?> /></a>                    
                    

                    </td>
                    <td width='250' align='left'>
                     
                        <b><?= stripslashes($row['product_name']); ?></b><br />
                        <?= stripslashes($row['description']); ?><br /><br />                    
                        <strong>Product Link:</strong><br /><a href="<?= stripslashes($row['web']); ?>"><?= stripslashes($row['web']); ?></a><br />                    

                        </div>
                    </td>
                </tr>
                <tr><td colspan='2'><hr noshade size='-1' /></td></tr>
                <?
            }
        }
        echo("</table>");
    }

    function getCompanyName() { return(stripslashes($this->company_name)); }
    function getCompanyAddress() { return($this->address); }
    function getCompanyCity() { return($this->city); }
    function getCompanyState() { return($this->state); }
    function getCompanyPostalCode() { return($this->zip); }
    function getCompanyPhone() { return($this->phone);  }
    function getCompanyFax() { return($this->fax); }
    function getCompanyEmail() { return($this->email); }
    function getVendorType() {
        $vt = new vendor_type();
        $vt->fetch($this->vendor_type_id);
        return(stripslashes($vt->name));
    }
    function getVendorTypeId() { return($this->vendor_type_id); }
    function getProfile($raw=TRUE) {
        if(!$raw) {
            return(nl2br(stripslashes($this->profile)));
        } else {
            return(stripslashes($this->profile));
        }
    }
    function getWebsite() { return($this->website); }
    function displayEditDate() { return($this->parseDate($this->edit_date));}
    function displayInputDate() { return(date('m/d/y',$this->input_date)); }
    function getCompanyPhoneAreaCode() { return($this->area_code); }

    function vendorTypeWidget() {
        $vt = new vendor_type();
        $vt->selectionWidget($this->vendor_type_id);
    }

    function slurpCompanyForm() {
        $company_name = $_REQUEST['company_name'];
        $vendor_type_id  = $_REQUEST['vendor_type'];
        $profile = $_REQUEST['profile'];
        $zip = $_REQUEST['postal'];
        $state = $_REQUEST['state'];
        $city = $_REQUEST['city'];
        $address = $_REQUEST['address1'];
        $fax = $_REQUEST['fax_phone'];
        $phone = $_REQUEST['phone'];
        $area_code = $_REQUEST['ac'];
        $email = $_REQUEST['email'];
        $website = $_REQUEST['website'];
        $name = $_REQUEST['name'];
        $email2 = $_REQUEST['email2'];
		
        unset($this->edit_date);
       if(is_null($_REQUEST['id'])) {
            $query = "INSERT INTO new_vendor (id, vendor_type_id, active, status, company_name, website, info_request, sentpass, input_date,".
            "edit_date, profile, hq, web_mod, pass, email, address, city, state, zip, area_code, phone, fax, name, email2) VALUES ".
            "(NULL, '$vendor_type_id', '$active', '$status', '$company_name', '$website', '$info_request', '$sentpass', NULL, ".
            "NULL, '$profile', '$hq',1 , '$pass', '$email', '$address', '$city','$state', '$zip', '$area_code', '$phone', '$fax', '$name', '$email2')";
        } else {
            $uid = $_REQUEST['id'];
            $query = "UPDATE new_vendor SET vendor_type_id = '$vendor_type_id', company_name = '$company_name', website = '$website',".
            "  profile = '$profile', web_mod = 1, email = '$email', address = '$address', city = '$city', state = '$state', zip = '$zip',".
            " area_code = '$area_code', phone = '$phone', fax = '$fax' WHERE  id = '$uid'  ";
        }
        $this->db->query($query);
    }
 
    function writeXlistToDb() {
        $xlist = implode(',',$_REQUEST['xlist']);
        unset($this->edit_date);
       
       if(is_null($_REQUEST['id'])) {
            $query = "INSERT INTO new_vendor (id, vendor_type_id, active, status, company_name, website, logo, xlist, info_request, sentpass, input_date,".
            "edit_date, profile, hq, web_mod, pass, email, address, city, state, zip, area_code, phone, fax, name, email2) VALUES ".
            "(NULL, '$vendor_type_id', '$active', '$status', '$company_name', '$website', '$logo', '$xlist' , '$info_request', '$sentpass', NULL, ".
            "NULL, '$profile', '$hq',1 , '$pass', '$email', '$address', '$city','$state', '$zip', '$area_code', '$phone', '$fax', '$name', '$email2')";
        } else {
       //  echo '<pre>'; print_r($this->db);  echo '</pre>'; exit;
            $uid = $_REQUEST['id'];
            $query = "UPDATE new_vendor SET xlist = '$xlist', web_mod = 1 WHERE  id = '$uid'";
        }
        $this->db->query($query);
    }

    function slurpPrimaryContactForm() {
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

    /*************************************************************************
     * Vendor Search Functionality
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
            <table cellspacing='0' cellpadding='0' align='center' width='700'>
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
            <table cellspacing='0' cellpadding='0' width='700'><tr><td><table cellspacing='0' cellpadding='0'>
            <?
                $i = $c = 0;
                $ot = (int) $count/3;
                foreach($children as $idx => $obj) {
                    if(($i++ % $ot == 0) && $c++ < 3) {
                        ?>
                        </table></td><td valign='top'><table cellspacing='5' cellpadding='0'>
                        <?
                    }
                    $t = (in_array($obj['id'],$xlist)) ? "checked" : "";
                    ?>
                    <tr>
                        <td><input <?= $t ?> type='checkbox' name='find[]'  value='<?= $obj['id'] ?>' /></td>
                        <td style="font-size:14px"> <?= $obj['name'] ?></td>
                    </tr></table><table cellspacing='5' cellpadding='0'>
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
}
?>
