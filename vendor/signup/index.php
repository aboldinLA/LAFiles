<?php
    //ini_set('session.save_path', 'd:/data/web/live/landscapeonline.com/sessions');
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('error_log', 'errors.log');
    //define('VDAEMON_PARSE', FALSE);
error_reporting(0);
    ini_set('error_log', 0);
    //$requiredClasses[] = 'base/contact_class.php';
    //$requiredClasses[] = 'base/vendor_class.php';
    //$requiredClasses[] = 'vdaemon/vdaemon.php';
    $requiredClasses[] = 'base/vendor_signup.php';
    $requiredClasses[] = 'base/vdaemon.php';
    require_once('lol_common.inc');

    if(!is_object($_SESSION['vsobj'])) {
        $_SESSION['vsobj'] = new vendor_signup($_REQUEST['hotlink'], $_REQUEST['mfg']);
        $vs = &$_SESSION['vsobj'];
    } else {
        $vs = &$_SESSION['vsobj'];
    }

    error_log('instantiating object.');
    $vs->process($_REQUEST);
    error_log('vs::process invocation complete.');

    $sBuffer = ob_get_contents(); 
    ob_end_clean(); 
    echo VDCallback($sBuffer); 
?>
