<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 5 Jul 2010 05:00:00 GMT");
$eid = $_GET['eid'];
$pt_tag = $_GET['pt_tag'];
$ip = $_SERVER['REMOTE_ADDR'];
$db_conn = mysql_connect('localhost', 'landscap_track2',
'1234A') or die ("Database CONNECT Error
(line 11)");
$insert_st = "INSERT INTO `PT-00001`
values ('".$pt_tag."','".$eid."', '".$ip."', now())";
mysql_db_query('landscap_landtrack', $insert_st)
or die ("Database failed to insert");
header("https://landscapearchitect.com/imgz2/onebyoneimage.jpg");
return;
?>