<?php


											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 


										// category for table

											$cat1 = $_GET['ad'];
											$cat2 = $_GET['company_id'];

											$sql77 = "SELECT id FROM vendor_product ORDER BY id DESC LIMIT 1";
											$result77 = $conn->query($sql77);									
									
										// cat section
												
											while($row = mysqli_fetch_array($result77)) {
													$catName1 = $row["id"] + 1;	
												
											}
		
		
		
											$sql = "INSERT INTO vendor_product (id, vendor_id)
											VALUES ('" .  $catName1 . "', '" .  $cat2 . "')";
		
		
												if (mysqli_query($conn, $sql)) {
													
												
/* Redirect browser */
header("Location: https://landscapearchitect.com/vendor/profile-js.php?action=products&intent=edit&record=$cat2&pid=$catName1");
 
													
												} else {
													echo "Error: " . $sql . "<br>" . mysqli_error($conn);
												}		

											mysqli_close($conn);				





/* Make sure that code below does not get executed when we redirect. */
exit;
?>