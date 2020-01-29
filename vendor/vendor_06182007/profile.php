<?php

    $requiredClasses[] = "class/common_class.inc";
    $requiredClasses[] = "base/transaction_class.php";
    $requiredClasses[] = "base/contacts_class.php";
    $requiredClasses[] = "base/vendor_listing_admin.php";
    $requiredClasses[] = "base/vdaemon.php";

    include("lol_common.inc");
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
        header("location: " . $lol_url . "/member/login.php?t=v");
        return(FALSE);
    }

    $v->action($_REQUEST['action'], $_REQUEST); 
     
    $sBuffer = ob_get_contents();
    ob_end_clean();
    echo(VDCallback($sBuffer));
?>
