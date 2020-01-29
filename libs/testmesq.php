									<?
									
                                            echo 'start';


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
									
									
											$sql = "SELECT * FROM banner_ups where ROS = 'yes'";
											$result = $conn->query($sql);	

                                            $rowcount=mysqli_num_rows($result);

                                            echo $rowcount . 'dog';

                        
									
									
									?>