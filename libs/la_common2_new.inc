<?



											
			function tablekeySearch() {
				
						echo '<div style="position:relative;left:25px">';
				
						echo '<h3 style="font-family: Arial, Helvetica, sans-serif">Search Site by Story Keywords</h3>';

						echo '<ul style="font-family: Arial, Helvetica, sans-serif">';
				
						$key2 = $_GET['number'];							
				

										                            $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 


						// Article Start

							$sql="select * from editorial where id='". $key2 . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {

									$pieces = explode("|", $row['keywords']);

									if (!empty($pieces[0])) {
									echo '<li> <a href="https://landscapearchitect.com/Search-Site.php?currentpage=1&keywordSE3=' . $pieces[0] . '">' . $pieces[0] . '</a></li>'; // piece1
									}


									if (!empty($pieces[1])) {
									echo '<li> <a href="https://landscapearchitect.com/Search-Site.php?currentpage=1&keywordSE3=' . $pieces[1] . '">' . $pieces[1] . '</a></li>'; // piece1
									}							

									if (!empty($pieces[2])) {
									echo '<li> <a href="https://landscapearchitect.com/Search-Site.php?currentpage=1&keywordSE3=' . $pieces[2] . '">' . $pieces[2] . '</a></li>'; // piece1
									}							

									if (!empty($pieces[3])) {
									echo '<li> <a href="https://landscapearchitect.com/Search-Site.php?currentpage=1&keywordSE3=' . $pieces[3] . '">' . $pieces[3] . '</a></li>'; // piece1
									}

									if (!empty($pieces[4])) {
									echo '<li> <a href="https://landscapearchitect.com/Search-Site.php?currentpage=1&keywordSE3=' . $pieces[4] . '">' . $pieces[4] . '</a></li>'; // piece1
									}							

									if (!empty($pieces[5])) {
									echo '<li> <a href="https://landscapearchitect.com/Search-Site.php?currentpage=1&keywordSE3=' . $pieces[5] . '">' . $pieces[5] . '</a></li>'; // piece1
									}

								}

								// Free result set
								mysqli_free_result($result);

						echo '</ul><br>';
						echo '</div>';
				

				}


			function tablearticleMain() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 



										// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from editorial where id='" . $key2 . "'";
											$result = $conn->query($sql);
							
											
									
										// keyword section
							
											while($row = mysqli_fetch_array($result)) {
											$keywordart = $row["keywords"];
												
									                                                              
                                
										
										 echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["ed_text"]))); 
										
											return $keywordart;
	
												
										
									 } 	
				
						
				
				
			}


			function tablerelatedArticle() {
				
				
									
									
									
										    $servername = "localhost";
                                            $username = "land_patchew";
                                            $password = "59q2GB6k$3";
                                            $dbname = "land_landscap_lollive";

											// Create connection
												$conn = new mysqli($servername, $username, $password, $dbname);
											// Check connection
												if ($conn->connect_error) {
													die("Connection failed: " . $conn->connect_error);
												} 

		
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from editorial where id='" . $key2 . "'";
											$result = $conn->query($sql);
							
											
									
										// keyword section
							
											while($row = mysqli_fetch_array($result)) {
											$keywordart = $row["keywords"];
											}
		


										// start article from table
							
											$key3 = "bird";
											// echo $keywordart;
											//$key2 = "28909";

											$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC";
											$result5 = $conn->query($sql5);									
									
										// banner rotating section
												$i = 1;
											while($row = mysqli_fetch_array($result5)) {
												if ($i <= "11") {
													
													if ($i ==1){
														echo "<br>";
														$i++;
													}else{
														
																$string =  $row['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
                                                        
                                                        
                                                        
                                                        echo '<title>' . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . ' | Landscape Architect</title>';
                                                        
                                                        echo '<h1 style="font-size: 2px; color: #FFFFFF">' . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . '</h1>';
 														
														
									echo "<a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . $row["id"] .  "&nbsp;&nbsp;" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))); ?></a><br>
										
										
									<? 
										 			$i++;														
													}
												}
												} 
										
	
				
						
				
				
			}


			function tablerelatedArticle2() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 

		
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from editorial where id='" . $key2 . "'";
											$result = $conn->query($sql);
							
											
									
										// keyword section
							
											while($row = mysqli_fetch_array($result)) {
											$keywordart = $row["keywords"];
											}
		


										// start article from table
							
											$key3 = "bird";
											// echo $keywordart;
											//$key2 = "28909";

											$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC";
											$result5 = $conn->query($sql5);									
									
										// banner rotating section
												$i = 1;
											while($row = mysqli_fetch_array($result5)) {
												if ($i <= "11") {
													
													if ($i ==1){
														echo "<br>";
														$i++;
													}else{
														
																$string =  $row['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash							
														
														
														
									echo "<li><i class='icon-angle-right'></i><a href='https://landscapearchitect.com/responsive/Matte2/html/articles.php?number=" . $row["id"] . "'>&nbsp;&nbsp;" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))); ?></a></li>
										
										
									<? 
										 			$i++;														
													}
												}
												} 
										
	
				
			}

			function tablerosbanner() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 

		

											$sql = "select * from banner_ups where ROS='yes' ORDER BY RAND()";
											$result = $conn->query($sql);
							
											
									
										// keyword section
							
											while($row = mysqli_fetch_array($result)) {
                                                
                                            echo "<li class='bullet-item'></i><a href='" . $row["web"] . "'><img src='https://landscapearchitect.com/banner/" . $row['picture'] . "'></a></li>";

												} 
										
	
				
			}

			function tableproductbanner() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
											$prodCat = $_GET['ad'];	
                
                                            $banDate = date("m/d/Y");
		

											$sql = "select * from banner_ups where product='" . $prodCat . "' AND picture IS NOT NULL ORDER BY RAND()";
											$result = $conn->query($sql);
							
											
									
										// keyword section
							
											while($row = mysqli_fetch_array($result)) {
                                                
                                                
                                                if('1/9/2019' > $row['input']){
                                                
                                                
                                            echo "<li class='bullet-item'></i><a href='" . $row["web"] . "'><img src='https://landscapearchitect.com/banner/" . $row['picture'] . "'></a><br></li>";
                                                    
                                                }

												} 
										
	
				
			}


			function tablecatlist() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = $_GET['ad'];

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}

			function tablecatlist28() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "28";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist30() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "30";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist1300() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "1300";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}

			function tablecatlistcompany1300() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key49 = $_GET['number'];
                                                $xcoName = 0;
                                        
												$sql55 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id = vendor_product.vendor_id WHERE vendor_product.xlist = '" .$key49. "' AND new_vendor.status > '2' ORDER BY vendor_product.company_name ASC";
												$result55 = $conn->query($sql55);
                
												    $cCount = 0;
                
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		                                                    
                                                    
                                                    
                                                    
                                                    if ($row['company_name'] != $xcoName) {
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a href="https://landscapearchitect.com/landscape-design/' . $string . '/' . $row['id'] . '" target="_blank">' . $row['company_name'] . '</a></li>';
                                                        $xcoName = $row['company_name'];
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/landscape-design/' . $string . '/' . $row['id'] . '" target="_blank">' . $row['company_name'] . '</a></li>';
                                                        $xcoName = $row['company_name'];
                                                        $cCount++; 
                                                        
                                                    }
                                                        
                                                        
                                                    } else {
                                                        
                                                        $xcoName = $row['company_name'];
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}




			function tablecatlist1213() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "1213";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist32() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "32";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist1214() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "1214";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist33() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "33";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist38() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "38";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}

			function tablecatlist1212() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "1212";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}

			function tablecatlist1002() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "1002";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}

			function tablecatlist1301() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "1301";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist29() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "29";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}


			function tablecatlist1215() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "1215";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}

			function tablecatlist41() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = "41";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/responsive/Matte2/html/la-details-category-section.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}





			function tablecatname() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = $_GET['ad'];

                                        
												$sql55 = "SELECT * FROM xlist WHERE id='" .$key48. "'";
												$result55 = $conn->query($sql55);
													
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                        echo $row['name'];
                                                    
                                                }
										
	
				
			}


			function tablecatname2() {
				
				
									
										                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
                
                
                                                $key48 = $_GET['number'];

                                        
												$sql55 = "SELECT * FROM xlist WHERE id='" .$key48. "'";
												$result55 = $conn->query($sql55);
													
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                        echo $row['name'];
                                                    
                                                }
										
	
				
			}








			function getConame() {
				
				
																                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
				
												$number = $_GET['number'];
			   

														$sql = "SELECT * FROM new_vendor WHERE id = ' . $number . '";
														$result=mysqli_query($conn,$sql);
			   
			   
															while($row = mysqli_fetch_array($result)) {
																
																$coName = $row['company_name'];

															}
			   
			   
												$conn->close();	
	
				
				
			}


			function tableEblast() {
				
				
																                                                                    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
			   

														$sql = "SELECT * FROM xlist WHERE `idParent` = 0 ORDER BY `name` ASC";
														$result=mysqli_query($conn,$sql);
			   
			   												echo '<table style="position:relative; left:75px">';
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
																
																if ($xx == 0){
																	
																	echo '<tr><td><input class="cb-element" type="checkbox" name="check_list[]" value="' . $row["name"] . '" style="position: relative; top: -1px" checked><label style="font-weight: 200">&nbsp;' . $row["name"] . '</label></td><td style="width:10px">&nbsp;</td>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<td><input class="cb-element" type="checkbox" name="check_list[]" value="' . $row["name"] . '" style="position: relative; top: -1px" checked><label style="font-weight: 200">&nbsp;' . $row["name"] . '</label></td></tr>';																	
																	$xx = 0;
																	
																}

															}
			   
			   												echo '</table>';
			   
												$conn->close();	
	
				
				
			}


			function tableXlist() {
				
				
																    $servername = "localhost";
                                                                    $username = "land_patchew";
                                                                    $password = "59q2GB6k$3";
                                                                    $dbname = "land_landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
			   

											$sql25 = "select name from xlist where id='948'";
											$result25 = $conn->query($sql25);									
									
										
											while($row = mysqli_fetch_array($result25)) {  
                                            
                                                $xlistNum = 'cow';
                                            
                                            
                                            }                        
                

			   
												$conn->close();	
	
				
				
			}





	
		

?>


