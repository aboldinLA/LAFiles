<?php
$db_username = 'landscap_lol';
$db_password = 'meow2meow';
$db_name = 'landscap_lollive';
$db_host = 'localhost';
$item_per_page = 15;

$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
?>