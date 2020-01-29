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

											$sql2 = "SELECT * FROM banner_ups3 where ROS = 'yes' ORDER BY RAND()";
											$result2 = $conn->query($sql2);
											
											$hhh = 0;
											$hzz = 1;
											
											echo '<section><center><div class="row">';
									
										// banner rotating section
											while($row = mysqli_fetch_array($result2)) {
												$links = substr('' . $row['picture']. '', 0, 4);
												
												// echo $links;
												
													if ($links == 'http'){												
												
												
																if ($hhh == 0 && $hzz < 3) {														
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';
																	
																	$adBann01 = $row['id'];

																	$hhh++;
																	
																} elseif ($hhh < 3 && $hzz < 3){
																	echo '<div class="col-md-3" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';
																	
																	$adBann03 = $row['id'];

																	$hzz++;
																	$hhh++;
																	

																	
																	
																} elseif ($hzz < 3) {
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';
																	
																	$adBann02 = $row['id'];

																	
																	$hzz++;
																	$hhh = 1;																	
																}
														
														
														
																	} else {
														
																if ($hhh == 0 && $hzz < 3) {														
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="https://landscapearchitect.com/banner/' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';
																	
																	$adBann04 = $row['id'];

																	$hhh++;
																	
																} elseif ($hhh < 3 && $hzz < 3){
																	echo '<div class="col-md-3" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="https://landscapearchitect.com/banner/' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';
																	
																	$adBann06 = $row['id'];

																	$hzz++;
																	$hhh++;
																	
															
																	
																} elseif ($hzz < 3) {
																	echo '<div class="col-md-3 col-sm-offset-2" style="padding-bottom: 5px"><section><a href="' . $row['web'] . '" target="_blank"><img width="80%" src="https://landscapearchitect.com/banner/' . $row['picture'] . '" alt="Product Image" /></a></section></div><br>';
																	
																	$adBann05 = $row['id'];

																	
																	$hzz++;
																	$hhh = 1;																	
																}														

																	}
																	
																
																} 
												
											echo '</div></center></section>';

												
		
						?>  