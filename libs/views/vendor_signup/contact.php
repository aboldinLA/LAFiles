<form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
    <input type='hidden' name='form_id' value='<?= $this->form_id ?>' />
<fieldset> 
    <legend>Contact Information</legend>
    <p>
        This information will be used by Landscape Online to contact you about updating your vendor profile in the future.
    </p>
    <vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Error(s) found:</h3>" /> 
    <table cellspacing='5' border='0'>
        <thead>
            <tr>
                <td><a href='cancel.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue.gif' border='0' /></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='TitleReq'>Title</vllabel>
                    <div class='formInfo'>President, Owner, Manager</div>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='title' id='title' size='16' maxlength='255' value="<?= stripslashes($o['title']); ?>" /> * 
                    <vlvalidator
                        name='TitleReq'
                        type='required'
                        minlength='2'
                        control='title'
                        errmsg='A title is required.' />
                </td>
            </tr>
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errClass='errLabel' validators='FirstNameReq,LastNameReq' >First &amp; Last Name</vllabel>
                    <div class='formInfo'>John Smith</div>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='first_name' id='first_name' size='16' maxlength='255' value="<?= stripslashes($o['first_name']); ?>" /> 
                    <input type='text' name='last_name' id='last_name' size='16' maxlength='255' value="<?= stripslashes($o['last_name']); ?>" /> * 
                    <vlvalidator
                        name='FirstNameReq'
                        type='required'
                        minlength='2'
                        control='first_name'
                        errmsg='A first name is required.' />
                    <vlvalidator
                        name='LastNameReq'
                        type='required'
                        minlength='2'
                        control='last_name'
                        errmsg='A last name is required.' />
                </td>
            </tr>
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='EmailReq,EmailValid'>Email</vllabel>
                    <div class='formInfo'>john@somecompany.com</div>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='email' id='email' size='32' maxlength='255' value="<?= stripslashes($o['email']); ?>" /> * 
                    <div class='formInfo'>This email address will be used to send you your vendor password.  This password can be used to manage this vendor profile in the future.</div>
                    <vlvalidator
                        name='EmailReq'
                        type='required'
                        minlength='2'
                        control='email'
                        errmsg='An email address is required.' />
                    <vlvalidator
                        name='EmailValid'
                        type='email'
                        control='email'
                        errmsg='The email address must be valid.' />
                </td>
            </tr>
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='EmailMatch,EmailCompReq'>Email Confirm</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='email_confirm' id='email_confirm' size='32' maxlength='255' value="<?= stripslashes($o['email_confirm']); ?>" /> * 
                    <vlvalidator
                        name='EmailCompReq'
                        type='required'
                        control='email_confirm'
                        errmsg='Please confirm your email address.' />
                    <vlvalidator
                        name='EmailMatch'
                        type='compare'
                        validtype='string'
                        control='email_confirm'
                        operator='e'
                        comparecontrol='email'
                        errmsg='Email addresses entered must match.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='AreaReq,PhoneReq'>Contact Phone</vllabel>
                    <div class='formInfo'>(800) 555-1212</div>
                </td>
                <td valign='top' class='formObject'>
                    (<input type='text' name='ac' id='ac' size='3' value="<?= stripslashes($o['ac']); ?>" />)
                    <input type='text' name='phone' id='phone' size='16' value="<?= stripslashes($o['phone']); ?>" /> *
                    <div class='formInfo'>This phone number will be used only by Landscape Online to contact you. This number will not be published or displayed in your company information or search results for your company.</div>
                    <vlvalidator
                        name='AreaReq'
                        type='required'
                        control='ac'
                        errmsg='An area code is required.' />
                    <vlvalidator
                        name='PhoneReq'
                        type='required'
                        control='phone'
                        errmsg='A phone number is required.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <label for='ac'>Fax Number</label>
                </td>
                <td valign='top' class='formObject'>
                    (<input type='text' name='fax_ac' id='ac' size='3' value="<?= stripslashes($o['fax_ac']); ?>" />)
                    <input type='text' name='fax_phone' id='fax_phone' size='16' value="<?= stripslashes($o['fax_phone']); ?>" />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='Address1Req'>Address</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input name='address1' id='address1' type='text' size='32' value="<?= stripslashes($o['address1']); ?>" /> * <br />
                    <input name='address2' id='address2' type='text' size='32' value="<?= stripslashes($o['address2']); ?>" />  
                    <vlvalidator
                        name='Address1Req'
                        type='required'
                        control='address1'
                        errmsg='Please enter an address.' />
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
                        errmsg='Please enter a valid city.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='StateReq,PostalReq'>State or Province,<br /> Postal Code</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <? $this->stateSelectionWidget($o['state']); ?>
                    &nbsp;
                    <input name='postal' id='postal' type='text' size='16' value="<?= stripslashes($o['postal']); ?>" /> *
                    <vlvalidator
                        name='StateReq'
                        type='required'
                        control='state'
                        errmsg='Please select a valid state.' />
                    <vlvalidator
                        name='PostalReq'
                        type='required'
                        control='postal'
                        errmsg='Please enter a valid postal code.' />
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
    <vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Error(s) found:</h3>"> 
</fieldset>
</form>
