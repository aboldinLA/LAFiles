<?php
  session_start();

  include "../../includes/connect4.inc";


	$company_id = $_POST['companyId'];
	$week = $_POST['week'];
 
 
  $query = ("SELECT fname, lname, company, address, city, state, zip, phone, email, demographic, brand, issueId, Date, choices FROM leads WHERE vendor_id = '" . $company_id . "' AND week = '" . $week . "'") or die('Query failed!');
  $result = $conn->query($query) or die('Error, query failed');	
  //$result = mysqli_query($query) or die('Error, query failed');

  $html = array();


  while($row = mysqli_fetch_array($result, MYSQLI_NUM))
  {
    // $tsv[]  = implode("\t", $row);
    $html[] = "<tr><td>" .implode("</td><td>", $row) . "</td></tr>";
  }

  $data = serialize($html);

  $_POST['data'] = $data;


  echo $data;



?>
 
 
 
