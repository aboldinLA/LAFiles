<fieldset> 
    <legend>Contact Information</legend>
    <p>
        This information will be used by Landscape Online to contact you about updating your vendor profile in the future.
    </p>
    <vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Error(s) found:</h3>" /> 
    <table cellspacing='5' border='0'>
        <thead>
            <tr>
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='TitleReq'>Title</vllabel>
                    <div class='formInfo'>President, Owner, Manager</div>
                </td>
                <td valign='top' class='formObject'>
                    <input type='text' name='title' id='title' size='16' maxlength='255' value="" /> * 
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
                    <input type='text' name='first_name' id='first_name' size='16' maxlength='255' value="" /> 
                    <input type='text' name='last_name' id='last_name' size='16' maxlength='255' value="" /> * 
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
                    <input type='text' name='email' id='email' size='32' maxlength='255' value="" /> * 
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
                    <input type='text' name='email_confirm' id='email_confirm' size='32' maxlength='255' value="" /> * 
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
        </tbody>
        <tfoot>
            <tr>
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>
        </tfoot>
    </table>
    <vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Error(s) found:</h3>"> 
</fieldset>
