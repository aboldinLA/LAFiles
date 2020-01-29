 <!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Guide Signup</title>
</head>


			<center><img width="40%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_325.png"><img width="40%" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" style="padding-left: 10px"></center>
							
							<hr noshade><br> 
 
 <?php

	
		
											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
												$id2 = $_GET['coid'];
	
									
												$toll = $_POST['toll'];  
												$fax = $_POST['fax'];
	
 	
											
	
												//$fax = $_POST['fax'];  
												//if ($fax == "yes") {          
													//$fax = 'yes';      
												//}
												//else {
													//$fax = 'no';      
												//}  
		
												
		
												$conn = mysqli_connect($servername, $username, $password, $dbname);
												// Check connection
												if (!$conn) {
													die("Connection failed: " . mysqli_connect_error());
												}

												$sql2 = "UPDATE vendor_product SET toll='" . $toll . "', fax='" . $fax . "' WHERE id = '" . $id2 . "'";
		

												if (mysqli_query($conn, $sql2)) {
													echo "Thank You - Please close window<br><br>then submit the product form.<br><br>
															You will be sent a proof for you lead-generator soon.";
													
												} else {
													echo "Error updating record: " . mysqli_error($conn);
												}

												mysqli_close($conn);
	
		



 

?>
</body>
</html>
