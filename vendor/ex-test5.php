<?php
include "lol_common.inc";

	$company_id = $_GET['id'];
	
	$small = $_GET['small'];
	
	$large = $_GET['large'];
						
	$week = $_GET['week'];
 
 
$query = "SELECT * FROM leads WHERE (Date BETWEEN '$small' and '$large') AND vendor_id='$id'";
 
$result = mysql_query($query) or die('Error, query failed');
 
$tsv = array();
$html = array();
while($row = mysql_fetch_array($result, MYSQL_NUM))
{
    $tsv[]  = implode("\t", $row);
    $html[] = "<tr><td>" .implode("</td><td>", $row) . "</td></tr>";
}
 
$tsv  = implode("\r\n", $tsv);
$html = "<table>" . implode("\r\n", $html) . "</table>";
 
$fileName = date("d-m-Y").'_mysql.xls';
header("Content-type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=$fileName");
 
//echo $tsv;
echo $html;
 
//include 'library/closedb.php';
header('location:thanks.php');
?>
 
 
 
