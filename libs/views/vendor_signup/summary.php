<?php
    // summary view of vendor_signup
    // company summary
    // contact summary
    // list of interests
    // link to checkout or summary page
?>
<div>
    <h2>Thank you for listing your company @ LandscapeOnline.com</h2>
    <p>
        Below is a summary of your listing information.  Please take a moment to review the summary below.  If you need to make corrections, you can use the 'edit' links provided to edit your information.
    </p>
</div>
<hr noshade size='-1' />
<form method='get' action='<?= $_SERVER['PHP_SELF'] ?>'>
<input type='hidden' name='view' value='commit' />
<table width='100%' cellpadding='0' cellspacing='0'>
    <thead>
        <tr>
            <td> </td>
            <td align='right'><input type='image' src='continue3.jpg' border='0' /></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan='2'>
                <h2>Please Review Your:</h2>
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            <p> </p>
            </td>
        </tr>        
        <tr>
            <td><a href='<?= $_SERVER['PHP_SELF'] ?>?view=company'>&lt;&lt; Edit Company</a></td>
            <td><!-- <a href='<?= $_SERVER['PHP_SELF'] ?>?view=interests'>&lt;&lt; Edit Categories</a> --></td>
        </tr>        
        <tr>
            <td valign='top'>
                <?php $this->showVendorSummary(); ?>
            </td>
            <td valign='top'>
                <?php // $this->showListingSummary(); ?>
            </td>
        </tr>
        <tr>
            <td valign='top'>
                <?php $this->showContactSummary(); ?>
            </td>
            <td valign='top'>
                <? if($this->hotlink) { 
                        $this->showBillingSummary();
                   } else { ?>
                &nbsp;
                <? } ?>
            </td>
        </tr>
        <tr>
            <td>
                <? if($this->hotlink) { ?>
                <a href='<?= $_SERVER['PHP_SELF'] ?>?view=billing'>&lt;&lt; Edit Billing</a>
                <? } else { ?>
                &nbsp;
                <? } ?>
            </td>

        </tr>
       
    </tbody>

</table>
</form>

    <hr noshade="noshade" /><br />
    <div style='text-align: left; font-size:14px'>
        <p><font size="2">LandscapeOnline will review your listing for content within two working days, and upon approval will issue you a dedicated password.</font></p>
        <p><font size="2">Once you receive your vendor password, you can log in using your password to update or edit your profile.</font></p>
        <p><font size="2">Your new company will appear in alpha order with your phone number as seen below.</font></p>
        <p><font size="2">Current National Magazine or Banner advertisers will enjoy activated listing links to ther profile, website and email.</p>
        <a href="https://landscapearchitect.com/imgz2/comp-search.jpg" target="_blank"><img width="625" src="https://landscapearchitect.com/imgz2/comp-search.jpg" /><br />
        Click to View Larger Image</a>
        <p><font size="2">If Your Business is Regional you can <a href="https://landscapearchitect.com/tcart/index.php?main_page=product_info&cPath=71&products_id=204" target="_blank"><strong>upgrade to a linked listing</strong></a> for as little as $9.95/month and also receive an active vendor profile, linked to all partnered search engines, as seen below. </p>
     	<p><font size="2">LandscapeOnline’s commercial emphasis means that every sales lead generated has the potential to deliver business for many years to come.</font></p>
        <a href="https://landscapearchitect.com/tcart/index.php?main_page=product_info&cPath=71&products_id=204" target="_blank"><p><font size="2"><strong>Click Here for More Information.</strong></font></p></a>     
        <a href="https://landscapearchitect.com/imgz2/dumor-profile.jpg" target="_blank"><img width="500" src="https://landscapearchitect.com/imgz2/dumor-profile.jpg" /><br />
        Click to View Larger Image</a>
		<p>Thanks again!</p>
    </div>
    <center><a href='/'><h3>Exit to LandscapeOnline.com</h3></a></center>
