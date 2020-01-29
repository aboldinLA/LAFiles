									<?
									
										// Banner Ads Start

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


										// start for the banner add counting and getting from table

											$key = "TLE-LBtrans";

											$sql = "SELECT * FROM banner_ups3 where ROS = 'yes' ORDER BY RAND()";
											$result = $conn->query($sql);
											
											$hh = 0;
											$hz = 1;
											
											echo '<section><center><div class="row">';
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												$links = substr('' . $row['picture']. '', 0, 4);
												
												// echo $links;
												
													if ($links == 'http'){												
												
												
																if ($hh == 0 && $hz < 3) {														
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';

																	$hh++;
																	
																} elseif ($hh < 3 && $hz < 3){
																	echo '<div class="col-md-3" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';

																	$hz = 1;
																	$hh = 0;			
																	
																} elseif ($hz < 3) {
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="' . $row['picture'] . '" alt="Product Image" /></a></section></div>';

																	
																	$hz++;
																	$hh = 1;																	
																}
														
														
														
																	} else {
														
																if ($hh == 0 && $hz < 3) {														
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="https://landscapearchitect.com/banner/' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';

																	$hh++;
																	
																} elseif ($hh < 3 && $hz < 3){
																	echo '<div class="col-md-3" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="https://landscapearchitect.com/banner/' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';

																	$hz = 1;
																	$hh = 0;			
																	
																} elseif ($hz < 3) {
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="https://landscapearchitect.com/banner/' . $row['picture'] . '" alt="Product Image" /></a></section></div>';

																	
																	$hz++;
																	$hh = 1;																	
																}														

																	}
																	
																
																} 
												
											echo '</div></center></section>';
												
		
						?>  