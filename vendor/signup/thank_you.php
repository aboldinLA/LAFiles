<?php
    $requiredClasses[] = 'base/vendor_listing.php';
    $requiredClasses[] = 'base/vendor_listing_admin.php';
    include("lol_common.inc");

    unset($_SESSION['vsobj']);
    if(isset($_SESSION['vendor_listing_admin'])) {
        $vla = & $_SESSION['vendor_listing_admin'];
        $vla->smartRedirect($vla->lastList);
    } else {


    $noShowButton = TRUE;

    $vl = new vendor();
    $pageTitle = "Vendor Signup Receipt";
    include("views/vendor_signup/header-js.php");
?>
    <h2>Thank you for registering with LandscapeOnline.com</h2>
    <div style='text-align: left; font-size:14px'>
        <p><font size="2">Your should receive a confirmation email regarding your LandscapeOnline.com vendor listing shortly.  Our staff will review your listing for content, and upon approval issue you a password.</font></p>
        <p><font size="2">Once you receive your vendor password, you can log in using your password to update or edit your profile.  You can also search for your company listing using the LandscapeOnline.com Product Search Engine.</font></p>
        <p><font size="2">Your FREE listing is automatically included in all partnered search engines. Your company will appear in alpha order with your phone number as seen below.</font></p>
        <p><font size="2">Current National Magazine or Banner advertisers will enjoy activated listing links to ther profile, website and email.</p>
        <a href="https://landscapearchitect.com/imgz2/comp-search.jpg" target="_blank"><img width="500" src="https://landscapearchitect.com/imgz2/comp-search.jpg" /><br />
        Click to View Larger Image</a>
        <p><font size="2">If Your Business is Regional you can <a href="https://landscapearchitect.com/tcart/index.php?main_page=product_info&cPath=71&products_id=204" target="_blank"><strong>upgrade to a linked listing</strong></a> for as little as $9.95/month and also receive an active vendor profile, linked to all partnered search engines, as seen below. </p>
     	<p><font size="2">LandscapeOnline’s commercial emphasis means that every sales lead generated has the potential to deliver business for many years to come.</font></p>
        <a href="https://landscapearchitect.com/tcart/index.php?main_page=product_info&cPath=71&products_id=204" target="_blank"><p><font size="2"><strong>Click Here for More Information.</strong></font></p></a>     
        <a href="https://landscapearchitect.com/imgz2/dumor-profile.jpg" target="_blank"><img width="500" src="https://landscapearchitect.com/imgz2/dumor-profile.jpg" /><br />
        Click to View Larger Image</a>
		<p>Thanks again!</p>
    </div>
    <center><a href='/'><h3>Exit to LandscapeOnline.com</h3></a></center>
<?
    include("views/vendor_signup/footer-js.php");

    }
?>
