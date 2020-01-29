<?php
// databse connection 

$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASS;
// $dbname = "devlands_live2019";
$dbname = DB_NAME;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 


function connection(){
	$servername = "localhost";
	$username = "devlands_mrudul";
	$password = "LZi7xHnm5)j5";
	$dbname = "devlands_mab2019";
	// $dbname = "devlands_live2019";
	/*$username = "land_patchew";
	$password = "59q2GB6k$3";
	$dbname = "land_landscap_lollive";*/

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  return false;
	}else{
		return $conn;
	} 
}


?>