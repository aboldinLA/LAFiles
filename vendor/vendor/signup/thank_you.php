<?php
    $requiredClasses[] = 'base/vendor_listing.php';
    $requiredClasses[] = 'base/vendor_listing_admin.php';
    include("lol_common.inc");

    unset($_SESSION['vsobj']);
    if(isset($_SESSION['vendor_listing_admin'])) {
        $vla = & $_SESSION['vendor_listing_admin'];
        $vla->smartRedirect($vla->lastList);
    } else {


    $secthdr = "Thank you for registering.";
    $noShowButton = TRUE;

    $vl = new vendor();
    $pageTitle = "Vendor Signup Receipt";
    include("views/vendor_signup/header.php");
?>
    <h2>Thank you for registering with LandscapeOnline.com</h2>
    <div style='text-align: left;'>
        <p>
        Your should receive a confirmation email regarding your LandscapeOnline.com vendor listing shortly.  Our staff will review your listing for content, and issue you a password after your listing has been activated.
        </p>
        <p>
        Once you receive your vendor password, you can log in by using your password on the Vendor Login section of our website.  You can also search for your company listing using the LandscapeOnline.com Product Search system.
        </p>
        <p>
        Thank you for enrolling with LandscapeOnline.com!
        </p>
    </div>
    <center><a href='/'><h3>Exit to LandscapeOnline Home</h3></a></center>
<?
    $vl->showReceipt($_SESSION['vendor_id']);
    include("views/vendor_signup/footer.php");

    }
?>
