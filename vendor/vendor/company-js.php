<?php $id = 3; 


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







?> 
	

<fieldset>
    <input type='hidden' name='form_id' />
    <legend><span style="font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Primary Company Information</span></legend>
    <vlsummary 
        class='errSummary' 
        displaymode='bulletlist' 
        headertext='<h3>Error(s) Found:</h3>' />
    <table cellspacing='5' border='0' width="750">
        <thead>
            <tr>
                <td><a href='/vendor/vendor/cancel-js.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><a href='/vendor/vendor/save-js.php'><input type='image' src='/imgz/continue-save.jpg' border='0' /></a></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width='125' class='formLabel' valign='top' style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">
                    <vllabel errclass='errLabel' validators='CompanyNameReq'>Company Name</vllabel>
                </td>
                <td valign='top' class='formObject' style="font-size:16px">
                    <input tabindex=1 type='text' name='company_name' id='company_name' size='32' value='<? echo $id ?> ' maxlength='255' style="font-size:16px; background-color:#dcdcdc" /> * 
                    <div class='formInfo' style="font-size:16px; font-style:italic">Your company name will be displayed in all of your subscriber-facing promotional  material and listings.</div><br />
                    <vlvalidator 
                        name='CompanyNameReq' 
                        type='required' 
                        minlength='3' 
                        control='company_name' 
                        errmsg='A Company Name is required.' />
                </td>
            </tr>
  
        </tbody>
        <tfoot>
            <tr>
                <td><a href='/vendor/vendor/cancel-js.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><a href='/vendor/vendor/cancel-js.php'><input type='image' src='/imgz/continue-save.jpg' border='0' /></a></td>
            </tr>
        </tfoot>
    </table>
    <vlsummary 
        class='errSummary' 
        displaymode='bulletlist' 
        headertext='<h3>Error(s) Found:</h3>' />
</fieldset>
