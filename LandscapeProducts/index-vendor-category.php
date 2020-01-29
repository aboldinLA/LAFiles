<?


												$number = $_GET['number'];


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



			   

														$sql = "SELECT * FROM new_vendor WHERE id = '$number'";
														$result=mysqli_query($conn,$sql);
			   
			   
															while($row = mysqli_fetch_array($result)) {
																
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash																	
																
															}
			   
			   
												$conn->close();	




								header("Location: https://landscapearchitect.com/landscape-design/$string/$number");
								die();






?>