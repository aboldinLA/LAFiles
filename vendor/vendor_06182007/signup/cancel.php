<?php
    $requiredClasses[] = 'base/template_class.php';
    $requiredClasses[] = 'base/vendor_listing_admin.php';
    include('lol_common.inc');
    unset($_SESSION['vsobj']);
    $t = new template_class();

    if(isset($_SESSION['vendor_listing_admin'])) {
        $vla = & $_SESSION['vendor_listing_admin'];
        $vla->smartRedirect($vla->lastList);
    } else {
        $t->smartRedirect('/advertising/');
    }

?>
