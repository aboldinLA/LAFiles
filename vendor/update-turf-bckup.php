<?php

	$id = $_POST['id'];

	$turft0001 = $_POST['turft0001'];
	$turft0002 = $_POST['turft0002'];
	$turft0003 = $_POST['turft0003'];
	$turft0004 = $_POST['turft0004'];
	$turft0005 = $_POST['turft0005'];
	$turft0006 = $_POST['turft0006'];
	$turft0007 = $_POST['turft0007'];
	$turft0008 = $_POST['turft0008'];
	$turft0009 = $_POST['turft0009'];

	$plantt = $turft0001 . "," . $turft0002 . "," . $turft0003 . "," . $turft0004 . "," . $turft0005 . "," . $turft0006 . "," . $turft0007 . "," . $turft0008 . "," . $turft0009;




		$link = mysqli_connect("localhost", "landscap_lol", "meow2meow", "landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// Attempt insert query execution
		$sql = "UPDATE new_vendor_test SET plants_t = '" . $plantt . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "Turf Suppliers Updated successfully.<br>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
		mysqli_close($link);




	

	
	echo $plantt . '<br />';
	echo $id . 'dog';
?> 