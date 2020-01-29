<?php



    $requiredClasses[] = "class/common_class.inc";

    $requiredClasses[] = "base/transaction_class.php";

    $requiredClasses[] = "base/contacts_class.php";

    $requiredClasses[] = "base/vendor_listing_admin.php";

    $requiredClasses[] = "base/vdaemon.php";



    include("lol_common.inc");

    

    if(!is_object($_SESSION['vendor_listing_edit'])) {

        $_SESSION['vendor_listing_edit'] = new vendor_listing_admin();

    }



    $v = &$_SESSION['vendor_listing_edit'];

    //$v->topFile = "main_top_private.inc";

    //$v->botFile = "main_bottom.inc";



    // if we're working on a page, here it is



    //$v->action($_REQUEST['action'], $_REQUEST); 

    $v->smartRedirect('/vendor/profile.php?action=manage&record='. $v->id);

?>

