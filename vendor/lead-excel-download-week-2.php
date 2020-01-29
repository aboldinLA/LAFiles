<?php

  session_start();


  $html = $_SESSION['leads-data'];


//  $html = "<table>" . "<tr><td>First Name</td><td>Last Name</td><td>Company Name</td><td>Address</td><td>City</td><td>State</td><td>Zip</td><td>Phone</td><td>Email</td><td>Demographic</td><td>Brand</td><td>Issue</td><td>Date</td><td>Choices</td></tr>" . implode("\r\n", $html) . "</table>";

//
//  $fileName = date("d-m-Y").'_mysql.xls';
//  header("Content-Type: application/octet-stream");
//  header("Content-Disposition: attachment; filename=$fileName");

  // echo $tsv;
  echo $html;

echo "hello1";


?>

 
 
