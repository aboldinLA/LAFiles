<?php
    $requiredClasses[] = 'base/lead_generator_approval_controller.php';
    include("lol_common.inc");

    $pageTitle = "Lead Generator Approval";
    // include("views/lead_generator/header.php");

    if(isset($_SESSION['lg_app_controller'])) {
        $lg =& $_SESSION['lg_app_controller'];
    } else {
        require('views/lead_generator/header.php');
        ?>
        <div id="header">
            <h1>Sorry...</h1>
        </div>
        <div id="content">
            <h1>Your Session Has Expired</h1>
            <div>
                <p>
                It appears as though your session has timed out due to inactivity.  Please close this window and reopen the proof tool from the vendor admin interface.  
                </p>
                <p>
                Thank you.
                </p>
            </div>
        </div>
        <?php
        require('views/lead_generator/footer.php');
        exit();
    }

    $lg->handler($_REQUEST);
?>
