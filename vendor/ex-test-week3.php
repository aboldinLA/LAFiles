<?php
include "../../includes/connect4.inc";

	$company_id = $_GET['id'];
	
	$small = $_GET['small'];
	
	$large = $_GET['large'];
						
	$week = $_GET['week'];
 
 
$query = ("SELECT fname, lname, company, address, city, state, zip, phone, email, demographic, brand, issueId, Date, choices FROM leads WHERE vendor_id = '" . $company_id . "' AND week = '" . $week . "'") or die('Query failed!');
  $result = $conn->query($query) or die('Error, query failed');

 
$tsv = array();
$html = array();
while($row = mysqli_fetch_array($result, MYSQLI_NUM))
{
    $tsv[]  = implode("\t", $row);
    $html[] = "<tr><td>" .implode("</td><td>", $row) . "</td></tr>";
}
 
$tsv  = implode("\r\n", $tsv);
$html = "<table>" . "<tr><td>First Name</td><td>Last Name</td><td>Company Name</td><td>Address</td><td>City</td><td>State</td><td>Zip</td><td>Phone</td><td>Email</td><td>Demographic</td><td>Brand</td><td>Issue</td><td>Date</td><td>Choices</td></tr>" . implode("\r\n", $html) . "</table>";
 
$fileName = date("d-m-Y").'_mysql.xls';
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$fileName");
 
//echo $tsv;
echo $html;


 

?>
 
 
 
