<?php
    // this page should just load the LG-listing object and redirect
    $requiredClasses[] = 'base/lead_generator_approval_controller.php';
    $requiredClasses[] = 'base/template_class.php';
    include('lol_common.inc');

    $pathParts = explode('/',ltrim($_SERVER['PATH_INFO'],'/'));

    if(is_string($pathParts[0])) {
        $_SESSION['lg_app_controller'] = new lead_generator_approval_controller($pathParts[0]);
        template_class::redirect('https://landscapearchitect.com/guide/approvals/');
    } else {
        // error out, buddy
        print("<h1>ERROR: Missing Vendor ID for Lead Generator Approval</h1>");
    }

?>
