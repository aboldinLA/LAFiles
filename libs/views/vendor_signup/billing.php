<?php
    $cc = new transaction_class();
?>
<form method='POST' name='RCompany' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
<input type='hidden' name='form_id' value='<?= $this->form_id ?>' />
<div>
    <h3>Billing Information</h3>
    <p>
        The information below will be used for maintaining monthly billing for your listing.  It will never be used on lists or other public resources that LandscapeOnline.com maintains.
    </p>
</div>
    <vlsummary 
        class='errSummary' 
        displaymode='bulletlist' 
        headertext='<h3>Error(s) Found:</h3>' />
<fieldset>
    <legend>Billing Information</legend>
    <table cellspacing='5' border='0'>
        <thead>
            <tr>
                <td><a href='cancel.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue.gif' border='0' /></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width='200' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='nameReq'>Billing Name</vllabel>
                    <div class='formInfo'>John Smith</div>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='cc_name' id='cc_name' size='32' maxlength='255' value='<?= stripslashes($o['cc_name']); ?>' />  *
                    <div class='formInfo'>Please enter the <strong><em>exact name</em></strong> as it appears on the credit card.</div>
                    <vlvalidator
                        name='nameReq'
                        control='cc_name'
                        type='required'
                        errmsg='Please enter the billing name.' />
                </td>
            </tr>
            <tr>
                <td width='200' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='compNameReq'>Company Name</vllabel>
                    <div class='formInfo'>My Company</div>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='comp_name' id='comp_name' size='32' maxlength='255' value="<?= stripslashes($o['comp_name']); ?>" /> *
                    <vlvalidator
                        name='compNameReq'
                        control='comp_name'
                        type='required'
                        errmsg='Please enter a company name.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='emailReq,validEmail'>Email</vllabel>
                    <div class='formInfo'>billee@yourcompany.com</div>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='email' id='email' size='32' maxlength='255' value="<?= stripslashes($o['email']); ?>" />  *
                    <div class='formInfo'>This email address will be used to contact you regarding billing issues.</div>
                    <vlvalidator
                        name='emailReq'
                        control='email'
                        type='required'
                        errmsg='An email address is required.' />
                    <vlvalidator 
                        name='validEmail'
                        control='email'
                        type='email' 
                        errmsg='Please enter a valid email address.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='AcReq,PhoneReq'>Billing Phone</vllabel>
                    <div class='formInfo'>eg: (800) 555-1212</div>
                </td>
                <td valign='top' class='formObject'>
                    (<input type='text' name='ac' id='ac' size='3' value="<?= stripslashes($o['ac']); ?>" />)
                    <input type='text' name='phone' id='phone' size='16' value="<?= stripslashes($o['phone']); ?>" /> *
                    <vlvalidator 
                        name='AcReq'
                        type='required' 
                        control='ac'
                        errmsg='An area code is required.' />
                    <vlvalidator 
                        name='PhoneReq'
                        type='required' 
                        control='phone'
                        errmsg='An phone number is required.' />
                    <div class='formInfo'>This phone number will be used only for billing related inquiries, and will not be used for any listings or search results.</div>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='Address1Req'>Billing Address</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input name='address1' id='address1' type='text' size='32' value="<?= stripslashes($o['address1']); ?>" /> * <br />
                    <input name='address2' id='address2' type='text' size='32' value="<?= stripslashes($o['address2']); ?>" />  
                    <vlvalidator
                        name='Address1Req'
                        type='required'
                        control='address1'
                        minlength='5'
                        errmsg='An address is required.' />
                    <div class='formInfo'>Please enter the billing address where your credit card or bank statement is mailed to.  This information is used to prevent credit card fraud.</div>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='CityReq'>City</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input name='city' id='city' type='text' size='32' value="<?= stripslashes($o['city']); ?>" /> *
                    <vlvalidator
                        name='CityReq'
                        type='required'
                        control='city'
                        minlength='3'
                        errmsg='A city is required.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='StateReq,PostalReq'>State or Province / Postal Code</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <?= $this->stateSelectionWidget($o['state']); ?>
                    &nbsp;
                    <input name='postal' id='postal' type='text' size='16' value="<?= stripslashes($o['postal']); ?>" /> *
                    <vlvalidator
                        name='StateReq'
                        type='required'
                        control='state'
                        errmsg='A State or Province is required.' />
                    <vlvalidator
                        name='PostalReq'
                        type='required'
                        control='postal'
                        minlength='3'
                        errmsg='A postal code is required.' />
                </td>
            </tr>
        </tbody>
    </table>
    <vlsummary 
        class='errSummary' 
        displaymode='bulletlist' 
        headertext='<h3>Error(s) Found:</h3>' />
</fieldset>
<br />
<fieldset>
    <legend>Credit Card Information</legend>
    <table cellspacing='5' border='0' width='100%'>
        <tbody>
            <tr>
                <td width='200' class='formLabel' valign='top'>
                    Monthly Fee
                </td>
                <td valign='top' class='formObject'>
                    &nbsp;&nbsp; $19.95
                </td>
            </tr>
            <tr>
                <td width='200' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='CreditCardReq'>Card Number</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='ccnum' id='ccnum' size='32' value='<?= $o['ccnum'] ?>' maxlength='255' /> * 
                    <vlvalidator 
                        name='CreditCardReq' 
                        type='required' 
                        minlength='16' 
                        control='ccnum' 
                        errmsg='A valid credit card number is required.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='ccExp'>Expiration</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <?= $cc->month($o['cc_month'],'cc_month'); ?>
                    <?= $cc->year($o['cc_year'],'cc_year'); ?>
                    <vlvalidator
                        name='ccExp'
                        control='cc_month'
                        type='required'
                        errmsg='A valid month is required.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='ccTypeReq'>Card Type</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <?= $cc->cardType($o['ccType']); ?>
                    <vlvalidator
                        name='ccTypeReq'
                        control='ccType'
                        type='required'
                        errmsg='Please select a card type.' />
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td><a href='cancel.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue.gif' border='0' /></td>
            </tr>
        </tfoot>
    </table>
</fieldset>
</form>
