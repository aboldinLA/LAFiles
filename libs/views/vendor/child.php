<fieldset>
    <input type='hidden' name='form_id' value='<?= $this->form_id ?>' />
    <legend>Primary Company Information</legend>
    <vlsummary 
        class='errSummary' 
        displaymode='bulletlist' 
        headertext='<h3>Error(s) Found:</h3>' />
    <table cellspacing='5' border='0'>
        <thead>
            <tr>
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='/imgz/continue-save.jpg' border='0' /></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='CompanyNameReq'>Company Name</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='company_name' id='company_name' size='32' value="<?= $this->getCompanyName(); ?>" maxlength='255' /> * 
                    <div class='formInfo'>Your company name will be displayed in all of your subscriber-facing promotional  material and listings.</div>
                    <vlvalidator 
                        name='CompanyNameReq' 
                        type='required' 
                        minlength='3' 
                        control='company_name' 
                        errmsg='A Company Name is required.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errClass='errLabel' validators='VendorTypeReq'>Business Type</vllabel> 
                </td>
                <td valign='top' class='formObject'>
                <? $this->vendorTypeWidget(); ?>
                    <div class='formInfo'>The type of company you register as will have an effect on customer search results for vendors. <strong>Note!  If you change your vendor type, you may need to reselect your product categories!</strong> LOL reserves the right to change categories as warrented.</div>
                    <vlvalidator
                        name='VendorTypeReq'
                        type='required'
                        control='vendor_type'
                        errmsg='A Vendor Type is required.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='websiteReq'>Web Site</vllabel>
                    <div class='formInfo'>www.yourcompany.com</div>
                    <vlvalidator 
                        name='websiteReq'
                        type='required' 
                        control='email'
                        type='email' 
                        errmsg='Please enter a valid Web address.' />                    
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=2 type='text' name='website' id='website' size='32' maxlength='255' value="<?= $this->getWebsite(); ?>" /> * 
                    <div class='formInfo'>The website entered here will be used in hotlinks (if you sign up for one) and will appear in your company listing page.</div>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='validEmailReq'>Customer Reply Email</vllabel>
                    <div class='formInfo'>info@yourcompany.com</div>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=3 type='text' name='email' id='email' size='32' maxlength='255' value="<?= $this->getCompanyEmail(); ?>" /> * 
                    <div class='formInfo'>This email address will be used in your guide and search listings.</div>
                    <vlvalidator 
                        name='validEmailReq'
                        type='required' 
                        control='email'
                        type='email' 
                        errmsg='Please enter a valid email address.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='PhoneReq'>Company Phone</vllabel>
                    <div class='formInfo'>eg: (800) 555-1212</div>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=6 type='text' name='phone' id='phone' size='21' value="<?= $this->getCompanyPhone(); ?>" /> *
                     <vlvalidator 
                        name='PhoneReq'
                        type='required' 
                        control='phone'
                        errmsg='An phone number is required.' />
                    <div class='formInfo'>This phone number will be used in search results and guide listings.  You will have a chance later to let us know your contact information.</div>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <label for='ac'>Company Fax</label>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=8 type='text' name='fax_phone' id='fax_phone' size='16' value="<?= $this->getCompanyFax(); ?>" />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='Address1Req'>Company Address</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=9 name='address1' id='address1' type='text' size='32' value="<?= $this->getCompanyAddress();  ?>" /> * <br />
                    <vlvalidator
                        name='Address1Req'
                        type='required'
                        control='address1'
                        minlength='5'
                        errmsg='An address is required.' />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='CityReq'>City</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=11 name='city' id='city' type='text' size='32' value="<?= $this->getCompanyCity(); ?>" /> *
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
                    <?= $this->stateSelectionWidget($this->getCompanyState()); ?> &nbsp;
                    <input tabindex=12 name='postal' id='postal' type='text' size='16' value="<?= $this->getCompanyPostalCode(); ?>" /> *
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
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='ProfileReq'>Profile</vllabel>
                    <div class='formInfo'>2500 character maximum</div>
                </td>
                <td valign='top' class='formObject'>
                    <textarea tabindex=13 cols='48' rows='10' id='profile' name='profile'><?= $this->getProfile(); ?></textarea> 
                    *<div class='formInfo'>Your vendor profile should be less than 200 words.</div>
                    <vlvalidator
                        name='ProfileReq'
                        type='required'
                        control='profile'
                        errmsg='A brief company profile is required.' />
                </td>
            </tr>        
        </tbody>
        <tfoot>
            <tr>
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='/imgz/continue-save.jpg' border='0' /></td>
            </tr>
        </tfoot>
    </table>
    <vlsummary 
        class='errSummary' 
        displaymode='bulletlist' 
        headertext='<h3>Error(s) Found:</h3>' />
</fieldset>
