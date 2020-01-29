<?
include("lo_top-main-ven.inc");
?>
<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  
<?
include $include_path . "lo_header-main-ven.inc";

	
?>

</div>

<!-- Content Section -->
<!-- Begin Section 1 -->  
<div class="main1">

<div style="position:relative; top:-115px">
<div class="tb3" style="width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Vendor Profile Management Center:&nbsp;&nbsp
</div><br /><br />

<div >
&nbsp;&nbsp;<a href='https://landscapearchitect.com/vendor/logoff.php'><input type='image' src='/imgz2/logoff-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a>
</div><br />


<!-- Begin Old Code -->  
<?php

    $requiredClasses[] = "class/common_class-main.inc";
    $requiredClasses[] = "base/transaction_class.php";
    $requiredClasses[] = "base/contacts_class.php";
    $requiredClasses[] = "base/vendor_listing_admin-new-auto.php";
    $requiredClasses[] = "base/vdaemon.php";

    include("lol_common-main.inc");
    ini_set('error_log', 'error.log');
    
    if(!is_object($_SESSION['vendor_listing_edit'])) {
        $_SESSION['vendor_listing_edit'] = new vendor_listing_admin();
    }

    $v = &$_SESSION['vendor_listing_edit'];
    //$v->topFile = "main_top_private.inc";
    //$v->botFile = "main_bottom.inc";

    // if we're working on a page, here it is

 

    $v->action($_REQUEST['action'], $_REQUEST); 
     
    $sBuffer = ob_get_contents();
    ob_end_clean();
    echo(VDCallback($sBuffer));
?>

<!-- End Old Code -->  
</div>

 
 
 
<!-- End Main Section -->  
</div>

<div class="banner1">
<!-- Banner Section -->
		<? include $include_path . "banner-ads-norot.inc"; ?>

</div>

<div class="bottom1">
<!-- Footer Section -->  
<? include $include_path . "lo_footer-main.inc"; ?>
  
</div>

</div>

