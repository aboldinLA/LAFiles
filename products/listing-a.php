<?php

$number = $_GET['number'];

header("Location: https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=".$number); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?>