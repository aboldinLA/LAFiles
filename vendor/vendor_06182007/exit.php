<?php
    include('lol_common.inc');

    if(isset($_SESSION['uid']))
        unset($_SESSION['uid']);
    if(isset($_SESSION['auth']))
        unset($_SESSION['auth']);

    header('location: ' . $lol_url . '/');
?>
