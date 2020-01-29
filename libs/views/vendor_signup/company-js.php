<?
include "lol_common.inc";

?>


<?
include("lo_top-main2.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	<?
	include $include_path . "lo_header-main2-js.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-search-engines.jpg" width="650" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>New Vendor Profile Sign-Up Center</center></span><br>
<div>


<!-- Old Code Start -->

<?php
    $vt = new vendor_type();
?>

<div style="position:absolute; left:-10px; top:375px; width:763px">
	<div>
		<center><span style="font-size:22px; font-weight:bold; color:#c60">The largest landscape-oriented database on the internet.</span><br />
		<span style="font-size:16px">More than 50,000 commercial landscape professionals visit LandscapeOnline every month.<br />
		Many visitors are looking for the products and services you provide, both nationally and locally.<br /><br />
        <center><span style="font-size:32px; font-weight:bold">You Are Invited</span></center>
		<span style="font-size:16px"><strong>To join the LandscapeOnline community for FREE!</strong></span><br />
		Simply complete the following 3-steps and, upon review by LandscapeOnline,  you will receive an email with your Vendor Password and your company will become part of the LandscapeOnline Search Engine.</span></center><br />
	</div>
    
<!-- Horizontal Bar Start -->
<div style="position:relative; left:0px; top:25px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->

<form method='POST' name='RCompany' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
	<input type='hidden' name='formname' value='' />
	<fieldset>
    <input type='hidden' name='form_id' value='<?= $this->form_id ?>' />
        <input type='hidden' name='xlist' value='SP' />
    
        
    <span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; font-size:18px"><legend>Primary Company Information</legend></span>
    

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
            	<td colspan="2">
                <div style="font-size:16px">Fields with an <span style="font-weight:bold; color:#FF0004">*</span> are required.</div>
               	</td>
            </tr>
            <tr>
                <td valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><vllabel errClass='errLabel' validators='VendorTypeReq'><strong>Business Type</strong></vllabel></td>
                <td valign='top' class='formObject'>
                <? $vt->selectionWidget($o['vendor_type'], $this->btype); ?>
                    <div><span style="font-size:16px"><strong>IMPORTANT! If you are NOT a member of the above group.</strong><br />
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
            	<td style="line-height:5px">&nbsp;</td>
            </tr>
                        
            <tr>
            	<td colspan="2">
				<!-- Horizontal Bar Start -->
				<div style="width:750px; height:2px; background-color:#605b51;"> </div>
				<!-- Horizontal Bar End -->                
                </td>
           </tr> 
           
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>
            
            <tr>
                <td width='125' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='NameReq'><strong>Your Name</strong></vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='name' id='name' size='50' value="<?= stripslashes($o['name']); ?>" maxlength='255' style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888; margin-bottom:7px" placeholder="Full Name"/> <span style="font-weight:bold; color:#FF0004">&nbsp;*</span> 
                    <div style="font-size:14px">Your name will be used for our records only.</div>
                    <vlvalidator 
                        name='NameReq' 
                        type='required' 
                        minlength='3' 
                        control='name' 
                        errmsg='Your Name is required.' />
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>
            
            <tr>
                <td width='125' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='Email2Req'><strong>Your Email</strong></vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='email2' id='email2' size='50' value="<?= stripslashes($o['email2']); ?>" maxlength='255' style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888; margin-bottom:7px" placeholder="Email Address"/> <span style="font-weight:bold; color:#FF0004">&nbsp;*</span> 
                    <div style="font-size:14px">Your email will be used for our records only.</div>
                    <vlvalidator 
                        name='Email2Req' 
                        type='required' 
                        minlength='3' 
                        control='email2' 
                        errmsg='Please enter a valid email address.' />
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>
                        
            <tr>
            	<td colspan="2">
				<!-- Horizontal Bar Start -->
				<div style="width:750px; height:2px; background-color:#605b51;"> </div>
				<!-- Horizontal Bar End -->                
                </td>
           </tr>
           
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>
            
            <tr>
                <td width='125' class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='CompanyNameReq'><strong>Company Name</strong></vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='company_name' id='company_name' size='50' value="<?= stripslashes($o['company_name']); ?>" maxlength='255' style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Name"/> <span style="font-weight:bold; color:#FF0004">&nbsp;*</span> 
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
            	<td style="line-height:5px">&nbsp;</td>
            </tr>
                        
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <label for='website'><strong>Web Site</strong></label>
                    <div style="font-size:14px; font-style:italic">www.yourcompany.com</div>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=2 type='text' name='website' id='website' size='50' maxlength='255' value="<?= stripslashes($o['website']); ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Website"/> 
                    <div class='formInfo'> </div>
                </td>
            </tr>
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='validEmail'><strong>Email</strong></vllabel>
                    <div style="font-size:14px; font-style:italic">info@yourcompany.com</div>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=3 type='text' name='email' id='email' size='50' maxlength='255' value="<?= stripslashes($o['email']); ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888; margin-bottom:7px" placeholder="Email Address"/> 
                    <div style="font-size:14px">Will appear in your profile.<br>
					*We recommand that it be a generic email like info@ or sales@ etc.</div>
                    <vlvalidator 
                        name='validEmail'
                        control='email'
                        type='email' 
                        errmsg='Please enter a valid email address.' />
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>            

            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='PhoneReq'><strong>Company Phone</strong></vllabel>
                    <div class='formInfo'>eg: 555-555-1212</div>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=4 type='text' name='phone' id='phone' size='20' value="<?= stripslashes($o['phone']); ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Phone Number"/> <span style="font-weight:bold; color:#FF0004">&nbsp;*</span>
                    <vlvalidator 
                        name='PhoneReq'
                        type='required' 
                        control='phone'
                        errmsg='An phone number is required.' />
                    <div class='formInfo'> </div>
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>            
            
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <label for='ac'><strong>Company Fax</strong></label>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=5 type='text' name='fax_phone' id='fax_phone' size='20' value="<?= stripslashes($o['fax_phone']); ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="FAX Number"/>
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>            
            
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='Address1Req'><strong>Company Address</strong></vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=6 name='address1' id='address1' type='text' size='46' value="<?= stripslashes($o['address1']); ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Address"/> <span style="font-weight:bold; color:#FF0004">&nbsp;*</span> 
                    <vlvalidator
                        name='Address1Req'
                        type='required'
                        control='address1'
                        minlength='5'
                        errmsg='An address is required.' />
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>            
            
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='CityReq'><strong>City</strong></vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=7 name='city' id='city' type='text' size='46' value="<?= stripslashes($o['city']); ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="City"/> <span style="font-weight:bold; color:#FF0004">&nbsp;*</span>
                    <vlvalidator
                        name='CityReq'
                        type='required'
                        control='city'
                        minlength='3'
                        errmsg='A city is required.' />
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>            
            
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='StateReq,PostalReq'><strong>State or Province / Postal Code</strong></vllabel>
                </td>
                <td valign='top' class='formObject'>
                    <?= $this->stateSelectionWidget($o['state']); ?> &nbsp;
                    <input tabindex=8 name='postal' id='postal' type='text' size='16' value="<?= stripslashes($o['postal']); ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Zip Code"/> <span style="font-weight:bold; color:#FF0004">&nbsp;*</span>
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
            	<td style="line-height:5px">&nbsp;</td>
            </tr>            
            
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <strong>Note!</strong>
                </td>
                <td valign='top' class='formObject'>
                    <p>
                    <em><strong><u>If you have more than one location</u></strong>, you will be able to add those locations after you receive your password from LandscapeOnline.</em>
                    </p>
                </td>
            </tr>
            
            <tr>
            	<td style="line-height:5px">&nbsp;</td>
            </tr>            
            
            <tr>
                <td class='formLabel' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
                    <vllabel errclass='errLabel' validators='ProfileReq'><strong>Profile</strong></vllabel>
                    <div class='formInfo'>2500 character maximum</div>
                </td>
                <td valign='top'>
                    <textarea tabindex=9 cols='48' rows='10' id='profile' name='profile' style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Profile"><?= stripslashes($o['profile']); ?></textarea> 
                    <span style="font-weight:bold; color:#FF0004">&nbsp;*</span><div style="font-size:14px">Use this space to put your "Best Foot Forward"<br>
					and let online visitor know who you are and what you do!</div>
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
</div>



<!-- Old Code End -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:absolute; left:465px; top:165px">
    	<?
		include $include_path . "banner-unvers-no-rot.inc";
		?>
	</div>     
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1" style="position:relative; left:-150px">
	<? //include $include_path . "lo_footer-main2.inc"; ?>
	</div>
</div>	