<?php
include "lol_common.inc";

	$company_id = $_GET['id'];
	
	$small = $_GET['small'];
	
	$large = $_GET['large'];
						
	$week = $_GET['week'];
 
 
$query = "SELECT fname, lname, company, address, city, state, zip, phone, email, demographic, brand, issueId, Date, choices FROM leads WHERE (Date BETWEEN '$small' and '$large') AND vendor_id='$id'";
 
$result = mysql_query($query) or die('Error, query failed');
 
$tsv = array();
$html = array();
while($row = mysql_fetch_array($result, MYSQL_NUM))
{
    $tsv[]  = implode("\t", $row);
    $html[] = "<tr><td>" .implode("</td><td>", $row) . "</td></tr>";
}
 
$tsv  = implode("\r\n", $tsv);
$html = "<table>" . "<tr><td>First Name</td><td>Last Name</td><td>Company Name</td><td>Address</td><td>City</td><td>State</td><td>Zip</td><td>Phone</td><td>Email</td><td>Demographic</td><td>Brand</td><td>Issue</td><td>Date</td><td>Choices</td></tr>" . implode("\r\n", $html) . "</table>";
 
$fileName = date("d-m-Y").'_Leads_Report.xls';
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$fileName");
 
//echo $tsv;
echo $html;
 

?>
 
 
 
