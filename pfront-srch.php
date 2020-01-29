



<?


										// start for the banner add counting and getting from table


									// Category Name Start

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


											$key4 = $_GET[number];							

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18') AND imported='0' ORDER BY vendor_product.photo_time DESC LIMIT 177 OFFSET 40
";
											$result = $conn->query($sql);									
									
												// logo section
												
											   echo "<table cellspacing='5px'><tr>";
											   $xx = 0;
												$zCount = 0;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   if ($row['vendor_id'] != $rowNum) {
														$rowNum = $row['vendor_id'];												
												   
												   echo "<td width='250px'><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "' target='_blank'><figure><img style='width: 90%' src='https://landscapearchitect.com/products/images/".$row['photo']."'><br><br><figcaption><span style='font-family:Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold'>" . $row['company_name'] . " - " . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) . "</span></figcaption></figure></a></td>";
												   $xx++;
												   $zCount++;
												   if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 40px'>&nbsp;</td></tr><tr>";
												   $zCount++;
																	 }
											   }
											   }
											   	echo "</tr></table><br>"; 
												echo "</div><br><br>";
					
					


										mysqli_close($conn);					
					

?>