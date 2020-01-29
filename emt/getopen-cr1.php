<?php


    $servername = "localhost";
    $username = "land_tracker";
    $password = "H.M6vuUU[H_p";
    $dbname = "land_landscap_landtrack";

	// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

$sql = "SELECT * FROM `crtracking1` WHERE `eid` LIKE 'unique_email_id'";
$result = $conn->query($sql);

$num_rows = mysqli_num_rows($result);


echo "Total Opens: " . $num_rows;





?>