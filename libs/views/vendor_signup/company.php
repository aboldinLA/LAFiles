<?php
    $vt = new vendor_type();
?>


<div>
    <br /><center><span style="font-size:32px; font-weight:bold">Welcome to</span></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lol-logo.png" width="375" /></center><br />
		<center><span style="font-size:22px; font-weight:bold; color:#c60">The largest landscape-oriented database on the internet.</span><br />
		M<span style="font-size:14px">ore than 50,000 commercial landscape professionals visit LandscapeOnline every month.<br />
		Many visitors are looking for the products and services you provide, both nationally and locally.<br /><br />
        <center><span style="font-size:32px; font-weight:bold">You Are Invited</span></center>
		<span style="font-size:16px"><strong>To join the LandscapeOnline community for FREE!</strong></span><br />
		Simply complete the following 3-steps and, upon review by LandscapeOnline,  you will receive an email with your Vendor Password and your company will become part of the LandscapeOnline Search Engine.</span></center><br />
    <div class='formInfo'>
        Fields with an <strong>*</strong> are required.
    </div>
</div>
<hr noshade size='-1' />
<form method='POST' name='RCompany' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
<input type='hidden' name='formname' value='' />
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
                <td><a href='https://landscapearchitect.com/vendor/signup/index2.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue2.jpg' border='0' /></td>
            </tr>
        </thead>
        <tbody>
        
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errClass='errLabel' validators='VendorTypeReq'>Business Type</vllabel>
                </td>
                <td valign='top' class='formObject'>
                <? $vt->selectionWidget($o['vendor_type'], $this->btype); ?>
                    <div class='formInfo'><span style="font-size:10px"><strong>IMPORTANT! If you are NOT a member of the above group.</strong><br />
					Please choose one of the following links to optimize your search results.
                    	<ul>
                        	<li><a href="https://landscapearchitect.com/vendor/signup/index.php?btype=m">Manufacturers and Exclusive Importers</a></li>
                            <li><a href="https://landscapearchitect.com/vendor/signup/index.php?btype=w">Wholsale Supplier or Manufacturing Reps</a></li>
                            <li><a href="https://landscapearchitect.com/vendor/signup/index.php?btype=g">Plant Material</a></li>
                            <li><a href="https://landscapearchitect.com/vendor/signup/index.php?btype=s">Service Provider</a></li>
                        </ul></span></div>
                    <vlvalidator 
                        name='VendorTypeReq' 
                        type='required' 
                        control='vendor_type' 
                        errmsg='A Vendor Type is required.' />
                </td>
            </tr> 
            
            <tr>
            	<td colspan="2">
            		<hr noshade="noshade" />
                </td>
           </tr>                        

            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='NameReq'>Your Name</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='name' id='name' size='50' value="<?= stripslashes($o['name']); ?>" maxlength='255' /> * 
                    <div class='formInfo'>Your name will be used for our records only.</div>
                    <vlvalidator 
                        name='NameReq' 
                        type='required' 
                        minlength='3' 
                        control='name' 
                        errmsg='Your Name is required.' />
                </td>
            </tr>
            
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='Email2Req'>Your Email</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='email2' id='email2' size='50' value="<?= stripslashes($o['email2']); ?>" maxlength='255' /> * 
                    <div class='formInfo'>Your email will be used for our records only.</div>
                    <vlvalidator 
                        name='Email2Req' 
                        type='required' 
                        minlength='3' 
                        control='email2' 
                        errmsg='Please enter a valid email address.' />
                </td>
            </tr>
            
            <tr>
            	<td colspan="2">
            		<hr noshade="noshade" />
                </td>
           </tr>         

            <tr>
                <td width='125' class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='CompanyNameReq'>Company Name</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='company_name' id='company_name' size='50' value="<?= stripslashes($o['company_name']); ?>" maxlength='255' /> * 
                    <div class='formInfo'> </div>
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
                    <label for='website'>Web Site</label>
                    <div class='formInfo'>www.yourcompany.com</div>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=2 type='text' name='website' id='website' size='50' maxlength='255' value="<?= stripslashes($o['website']); ?>" /> 
                    <div class='formInfo'> </div>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='validEmail'>Email</vllabel>
                    <div class='formInfo'>info@yourcompany.com</div>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=3 type='text' name='email' id='email' size='50' maxlength='255' value="<?= stripslashes($o['email']); ?>" /> 
                    <div class='formInfo'>Will appear in your profile. *We recommand that it be a generic email like info@ or sales@ etc.</div>
                    <vlvalidator 
                        name='validEmail'
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
                    <input tabindex=4 type='text' name='phone' id='phone' size='20' value="<?= stripslashes($o['phone']); ?>" /> *
                    <vlvalidator 
                        name='PhoneReq'
                        type='required' 
                        control='phone'
                        errmsg='An phone number is required.' />
                    <div class='formInfo'> </div>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <label for='ac'>Company Fax</label>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=5 type='text' name='fax_phone' id='fax_phone' size='20' value="<?= stripslashes($o['fax_phone']); ?>" />
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='Address1Req'>Company Address</vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=6 name='address1' id='address1' type='text' size='46' value="<?= stripslashes($o['address1']); ?>" /> * 
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
                    <input tabindex=7 name='city' id='city' type='text' size='46' value="<?= stripslashes($o['city']); ?>" /> *
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
                    <?= $this->stateSelectionWidget($o['state']); ?> &nbsp;
                    <input tabindex=8 name='postal' id='postal' type='text' size='16' value="<?= stripslashes($o['postal']); ?>" /> *
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
                    Note!
                </td>
                <td valign='top' class='formObject'>
                    <p>
                    <em><strong><u>If you have more than one location</u></strong>, you will be able to add those locations after you receive your password from LandscapeOnline.</em>
                    </p>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top'>
                    <vllabel errclass='errLabel' validators='ProfileReq'>Profile</vllabel>
                    <div class='formInfo'>2500 character maximum</div>
                </td>
                <td valign='top' class='formObject'>
                    <textarea tabindex=9 cols='48' rows='10' id='profile' name='profile'><?= stripslashes($o['profile']); ?></textarea> 
                    *<div class='formInfo'>Use this space to put your "Best Foot Forward" and let online visitor know who you are and what you do!</div>
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
                <td><a href='https://landscapearchitect.com/vendor/signup/index2.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue2.jpg' border='0' /></td>
            </tr>
        </tfoot>
    </table>
    <vlsummary 
        class='errSummary' 
        displaymode='bulletlist' 
        headertext='<h3>Error(s) Found:</h3>' />
</fieldset>
</form>
</div>