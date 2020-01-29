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
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-search-engines.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>New Vendor Profile Sign-Up Center</center></span><br>
<div>


<!-- Old Code Start -->

<?php
    // summary view of vendor_signup
    // company summary
    // contact summary
    // list of interests
    // link to checkout or summary page
?>
<div style="position:relative; top:25px">
    <h2 style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Thank you for listing your company @ LandscapeOnline.com</h2><br>
    <p>Below is a summary of your listing information.  Please take a moment to review the summary below.  If you need to make corrections, you can use the 'edit' links provided to edit your information.</p><br><br>
</div>

<!-- Horizontal Bar Start -->
<div style="position:relative; top:-10px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->

<form method='get' action='<?= $_SERVER['PHP_SELF'] ?>'>
<input type='hidden' name='view' value='commit' />
<table width='763' cellpadding='0' cellspacing='0'>
    <thead>
        <tr>
            <td> </td>
            <td align='right' style="position:relative; left:-650px; top:-5px; z-index:2000"><input type='image' src='save.gif' border='0' /></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan='2'><h2 style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Your Listing:</h2></td>
        </tr>
        <tr>
            <td colspan='2' style="line-height:10px">&nbsp;</td>
        </tr>        
        <tr>
            <td><a href='<?= $_SERVER['PHP_SELF'] ?>?view=company'>&lt;&lt; Edit Company</a></td>
            <td><!-- <a href='<?= $_SERVER['PHP_SELF'] ?>?view=interests'>&lt;&lt; Edit Categories</a> --></td>
        </tr>        
        <tr>
            <td valign='top'><?php $this->showVendorSummary(); ?></td>
            <td valign='top'><?php // $this->showListingSummary(); ?></td>
        </tr>
        <tr>
            <td valign='top'><?php $this->showContactSummary(); ?></td>
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

<div style="position:absolute; left:0px; top:2075px">
    <input type='image' src='save.gif' border='0' />
</div>

</form>

<!-- Horizontal Bar Start -->
<div style="position:relative; top:-15px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->

    <div style='text-align: left; font-size:16px; width:763px'>
        <p>LandscapeOnline will review your listing for content within two working days, and upon approval will issue<br>you a dedicated password.<br><br>
        Once you receive your vendor password, you can log in using your password to update or edit your profile.<br>
        Your new company will appear in alpha order with your phone number as seen below.<br>
        Current National Magazine or Banner advertisers will enjoy activated listing links to ther profile, website and email.<br><br>
        <a href="https://landscapearchitect.com/imgz2/comp-search.jpg" target="_blank"><img width="625" src="https://landscapearchitect.com/imgz2/comp-search.jpg" /><br>
        <strong>Click to View Larger Image</strong></a><br><br>
        
        If Your Business is Regional you can <a href="https://landscapearchitect.com/tcart/index.php?main_page=product_info&cPath=71&products_id=204" target="_blank"><strong>upgrade to a linked listing</strong></a> for as little as 	$9.95/month and also receive an active vendor profile, linked to all partnered search engines, as seen below.<br>
     	LandscapeOnline’s commercial emphasis means that every sales lead generated has the potential to deliver business for many years to come.<br>
        <a href="https://landscapearchitect.com/tcart/index.php?main_page=product_info&cPath=71&products_id=204" target="_blank"><br>
		<strong>Click Here for More Information.</strong></a><br><br>
 
        <a href="https://landscapearchitect.com/imgz2/dumor-profile.jpg" target="_blank"><img width="500" src="https://landscapearchitect.com/imgz2/dumor-profile.jpg" /><br />
        Click to View Larger Image</a>
		Thanks again!</p>
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