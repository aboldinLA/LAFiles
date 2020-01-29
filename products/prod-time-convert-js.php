									<?
									
										// premium vendor Start

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


											$keyword44 = "dog";


											$sql25 = "SELECT * FROM editorial WHERE title LIKE '%" . $keyword44 . "%' OR ed_text LIKE '%" . $keyword44 ."%' ORDER BY id DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";



	   
			

											echo $keyword44 . "<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>	
									
									<?
									
										// premium vendor Start

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


											$keyword44 = "dog";


											$sql25 = "SELECT * FROM `vendor_product` WHERE `product_name` LIKE '%" . $keyword44 . "%' AND `description` LIKE '%" . $keyword44 . "%' ORDER BY `photo_time` DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
												while($row = mysqli_fetch_array($result25)) {
													
														echo $row['id'] . "<br>";
												
														}

											echo "cat<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>
									
									<?
									
										// premium vendor Start

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


											$keyword44 = "dog";


											$sql25 = "SELECT * FROM `new_vendor` WHERE `profile` LIKE '%" . $keyword44 . "%' AND `company_name` LIKE '%" . $keyword44 . "%' ORDER BY `id` DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
												while($row = mysqli_fetch_array($result25)) {
													
														echo $row['id'] . "<br>";
												
														}

											echo "bird<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>	
									
									<?
									
										// premium vendor Start

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


											$keyword44 = "dog";


											$sql77 = "SELECT * FROM `xlist` WHERE `name` LIKE '%dog%' ORDER BY `id` DESC";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {

													$sgl = $row['id'];

											$sql25 = "SELECT * FROM `new_vendor` WHERE `xlist` LIKE '%". $sgl ."%' ORDER BY `id` DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
												while($row = mysqli_fetch_array($result25)) {
													
														echo $row['id'] . "<br>";
												
														}
												}

											echo "pig<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>																																													
									
									<?
									
										// premium vendor Start

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


											$keyword44 = "dog";


											$sql77 = "SELECT * FROM `xlist` WHERE `name` LIKE '%dog%' ORDER BY `id` DESC";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {

													$sgl = $row['id'];

											$sql25 = "SELECT * FROM vendor_product WHERE xlist='". $sgl ."' ORDER BY id ASC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
												while($row = mysqli_fetch_array($result25)) {
													
														echo $row['id'] . "<br>";
												
														}
												}

											echo "horse<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>	
									
									<?
									
										// premium vendor Start

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


											$keyword44 = "dog";


											$sql25 = "(SELECT id, title, ed_text FROM editorial WHERE title LIKE '%" . $keyword44 . "%' OR ed_text LIKE '%" . $keyword44 ."%' ORDER BY id DESC)
												UNION
													  (SELECT id, product_name, description FROM `vendor_product` WHERE `product_name` LIKE '%" . $keyword44 . "%' AND `description` LIKE '%" . $keyword44 . "%' ORDER BY `photo_time` DESC)
												UNION
													  (SELECT id, company_name, profile FROM `new_vendor` WHERE `profile` LIKE '%" . $keyword44 . "%' AND `company_name` LIKE '%" . $keyword44 . "%' ORDER BY `id` DESC)";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
												while($row = mysqli_fetch_array($result25)) {
													
														echo $row['id'] . "<br>";
												
														}

											echo "combo<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>																																																																																																																																												