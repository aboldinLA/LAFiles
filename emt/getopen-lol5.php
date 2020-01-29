<?php

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 5 Jul 2010 05:00:00 GMT");

// list of eids separated by comma
$eidstr = $_GET['eid'];
$eids = explode(",", $eidstr);
if (sizeof($eids) == 0)
return;

$db_conn = mysql_connect('localhost', 'landscap_track2', '1234A')
or die ("Database CONNECT Error (line 11)");

$retstr = '';
foreach ($eids as $eid) {
$query_st = "SELECT COUNT(*) from loltracking5
where eid = '" . $eid . "'";
$result = mysql_db_query('landscap_landtrack',
$query_st) or die ("Database failed to select");

$count = '0';

if (mysql_num_rows($result)) {
$qry = mysql_fetch_array($result);
$count = $qry[0];
}

if ($retstr != '')
$retstr .= ',';
$retstr .= $count;
}

echo $retstr;
return;
?>