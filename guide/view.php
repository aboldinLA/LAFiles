<?php
//    $requiredClasses[] = 'base/HTTP/Upload.php';
    $requiredClasses[] = 'base/ad_proof_class.php';

    include('lol_common.inc');

    $ap = new ad_proof();

    if(isset($_REQUEST['id'])) {
        if(is_numeric($_REQUEST['id'])) {
            $ap->fetchByVendorID($_REQUEST['id']);
        }
    }

    if(isset($_REQUEST['contact_me'])) {
        $ap->notifySales();
    }

    $ap->displayVendorAd();

?>
