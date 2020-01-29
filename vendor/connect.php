<?php
$dbhost							= "localhost";
$dbuser							= "landscap_lol";
$dbpass							= "meow2meow";
$dbname							= "landscap_lollive";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>