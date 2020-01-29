<?


										// start for the banner add counting and getting from table

											$key4 = $_GET[number];							

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18') AND imported='0' ORDER BY vendor_product.photo_time DESC LIMIT 0,15";
											$result = $conn->query($sql);									
									
												// logo section
												
											   echo "<table cellspacing='5px' width='750'><tr>";
											   $xx = 0;
												$zCount = 0;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   if ($row['vendor_id'] != $rowNum) {
														$rowNum = $row['vendor_id'];												
												   
												   echo "<td width='250px'><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "' target='_blank'><figure><img style='width: 50%' src='https://landscapearchitect.com/products/images/".$row['photo']."'><br><br><figcaption><center><span style='font-family:Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold'>" . $row['company_name'] . "</span></center></figcaption></figure></a></td>";
												   $xx++;
												   $zCount++;
												   if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 40px'>&nbsp;</td></tr><tr>";
												   $zCount++;
																	 }
											   }
											   }
											   	echo "</tr></table><br>"; 
												echo "</div><br><br>";
					
					
					













?>