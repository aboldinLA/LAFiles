<?php
include("lo_top-main-ven.inc");
extract($_REQUEST);
#ini_set('display_errors',1);
#error_reporting(-1);
?>
<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  
<?php
include $include_path . "lo_header-main3-js.inc";
?>
</div>

<!-- Content Section -->
<!-- Begin Section 1 -->  
<div class="main1">

<!-- Position correction for vendor page -->  
<div style="position:relative; top:-115px">
<div class="tb3" style="width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Vendor Profile Management Center:&nbsp;&nbsp;
</div><br />

<div >
&nbsp;&nbsp;<a href='https://landscapearchitect.com/vendor/logoff.php'><input type='image' src='/imgz2/logoff-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a>
</div><br />
<!-- Begin Old Code -->  
<?php
    $requiredClasses[] = "class/common_class-main.inc";
    $requiredClasses[] = "base/transaction_class.php";
    $requiredClasses[] = "base/contacts_class.php";
    $requiredClasses[] = "base/vendor_listing_admin-new-js.php";
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

    if($_SESSION['auth'] != $GLOBALS['VENDOR_AUTH']) {
        $_SESSION['np'] = $_SERVER['PHP_SELF'];
        header("location: https://landscapearchitect.com/member/login2.php?t=v");
        return(FALSE);
    }

    $v->action($_REQUEST['action'], $_REQUEST); 
     
    $sBuffer = ob_get_contents();
    ob_end_clean();
    echo(VDCallback($sBuffer));
?>

<!-- End Old Code -->  
</div>
 
 
 
<!-- End Main Section -->  
</div>

<!-- Start Banner Section -->  

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
<div style="position: absolute; left: 490px; top: 395px">
    	<?
		include $include_path . "banner-ads-norot2.inc";
		?>
	</div> <br>
        
        
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div style="position:relative; left:-700px; top:3500px">
	<center><? //include $include_path . "lo_footer-count.inc"; ?><br><br></center>
	</div>

</div>