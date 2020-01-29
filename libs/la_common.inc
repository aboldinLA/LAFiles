<?



											
			function tablekeySearch() {
				
						echo '<div style="position:relative;left:25px">';
				
						echo '<h3 style="font-family: Arial, Helvetica, sans-serif">Search Site by Story Keywords</h3>';

						echo '<ul style="font-family: Arial, Helvetica, sans-serif">';
				
						$key2 = $_GET['number'];							
				

						include('connect3.inc');


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
				
				
									
						include('connect3.inc');



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
				
				
									
									
									
						include('connect3.inc');

		
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
														
														
														
									echo "<a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . $row["id"] .  "&nbsp;&nbsp;" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))); ?></a><br>
										
										
									<? 
										 			$i++;														
													}
												}
												} 
										
	
				
						
				
				
			}


			function tablerelatedArticle2() {
				
				
									
						include('connect3.inc');

		
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
				
				
									
						include('connect3.inc');

		

											$sql = "select * from banner_ups where ROS='yes' ORDER BY RAND()";
											$result = $conn->query($sql);
							
											
									
										// keyword section
							
											while($row = mysqli_fetch_array($result)) {
                                                
                                            echo "<li class='bullet-item'></i><a href='" . $row["web"] . "'><img src='https://landscapearchitect.com/banner/" . $row['picture'] . "'></a></li>";

												} 
										
	
				
			}

			function tableproductbanner() {
				
				
									
						include('connect3.inc');
                
                
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
				
				
									
						include('connect3.inc');
                
                
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
				
				
									
						include('connect3.inc');
                
                
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
				
				
									
						include('connect3.inc');
                
                
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
				
				
									
						include('connect3.inc');
                
                
                                                $key48 = "1300";

                                        
												$sql55 = "SELECT * FROM xlist WHERE idParent='" .$key48. "' ORDER BY name ASC";
												$result55 = $conn->query($sql55);
													
												    $cCount = 0;
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                    if($cCount == 0) {
                                                    
                                                        echo '<li><a class="active" href="https://landscapearchitect.com/LandscapeProducts/index-sub.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    } else {
                                                        
                                                        echo '<li><a href="https://landscapearchitect.com/LandscapeProducts/index-sub.php?ad=' .$key48. '&number=' . $row['id'] . '">' . $row['name'] . '</a></li>';
                                                        $cCount++; 
                                                        
                                                    }
                                                    
                                                    
                                                }
										
	
				
			}

			function tablecatlistcompany1300() {
				
				
									
						include('connect3.inc');
                
                
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









			function tablecatname() {
				
				
									
						include('connect3.inc');
                
                
                                                $key48 = $_GET['ad'];

                                        
												$sql55 = "SELECT * FROM xlist WHERE id='" .$key48. "'";
												$result55 = $conn->query($sql55);
													
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                        echo $row['name'];
                                                    
                                                }
										
	
				
			}


			function tablecatname2() {
				
				
									
						include('connect3.inc');
                
                
                                                $key48 = $_GET['number'];

                                        
												$sql55 = "SELECT * FROM xlist WHERE id='" .$key48. "'";
												$result55 = $conn->query($sql55);
													
								                while($row = mysqli_fetch_assoc($result55)) { 
                                                    
                                                        echo $row['name'];
                                                    
                                                }
										
	
				
			}








			function getConame() {
				
				
												include('connect3.inc');
				
												$number = $_GET['number'];
			   

														$sql = "SELECT * FROM new_vendor WHERE id = ' . $number . '";
														$result=mysqli_query($conn,$sql);
			   
			   
															while($row = mysqli_fetch_array($result)) {
																
																$coName = $row['company_name'];

															}
			   
			   
												$conn->close();	
	
				
				
			}


			function tableEblast() {
				
				
												include('connect3.inc');
			   

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

			function mobileTitle() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM type_title ORDER BY sub_number ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
																
																if ($xx == 0){
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="radio" name="biz_title" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="radio" name="biz_title" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}

															}
			   
												$conn->close();	

            }

			function mobileTitleEdit() {
				
												include('connect3.inc');
                
                
			   

														$sql = "SELECT * FROM type_title ORDER BY sub_number ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
                
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
																
																if ($xx == 0){
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="radio" name="biz_title" value="'. $row['name'] . '" '. $check . '> '. $row['name'] . $dog . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="radio" name="biz_title" value="'. $row['name'] . $dog . '" '. $check . '> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}

															}
			   
												$conn->close();	

            }




			function mobileIam() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM type_iam ORDER BY id ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
																
																if ($xx == 0){
                                                                    
                                                                    if ($row['name'] == '--- Designers' || $row['name'] == '--- Contractors' || $row['name'] == '--- Maintenance Professionals' || $row['name'] == '--- Other') {
                                                                        
                                                                    $str = $row['name'];
                                                                    $str2 = substr($str, 4); 
                                                                        
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><strong>'. $str2 . '</strong></label></div>';
																	$xx++;
                                                                        
                                                                    } else {
                                                                        
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="am_id[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
                                                                        
                                                                    }
																	
																} elseif ($xx == 1) {
                                                                    
                                                                    if ($row['name'] == '--- Designers' || $row['name'] == '--- Contractors' || $row['name'] == '--- Maintenance Professionals' || $row['name'] == '--- Other') {
                                                                        
                                                                    $str = $row['name'];
                                                                    $str2 = substr($str, 4);
                                                                        
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><strong>'. $str2 . '</strong></label></div></div><br>';
																	$xx = 0;
                                                                        
                                                                    } else {
                                                                        
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="am_id[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
                                                                        
                                                                    }
                                                                        
                                                                    }
																	

															}
                
												$conn->close();	

                
			}


			function mobileAuthority() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM type_authority ORDER BY sub_number ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
																
																if ($xx == 0){
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="auth[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	$ii++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="auth[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	$ii++;
																}

															}
			   
												$conn->close();	

            }

			function mobileWork() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM type_overwork ORDER BY sub_number ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
																
																if ($xx == 0){
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="area[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="area[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}

															}
			   
												$conn->close();	

            }



			function mobileAcreage() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM type_acreage ORDER BY sub_number ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
                                                                if ($row['name'] != "---") {
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="radio" name="acres" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="radio" name="acres" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                }
                                                                

															}
			   
												$conn->close();	

            }
	

			function mobileCompany() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM type_sites ORDER BY sub_number ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="sites_id[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="sites_id[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileWork2() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM type_does ORDER BY id ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
                                                                    
                                                                    if ($row['name'] == '--- Design Functions' || $row['name'] == '--- Development Functions' || $row['name'] == '--- Earth Science' || $row['name'] == '--- Installation Functions' || $row['name'] == '--- Maintenance Functions' || $row['name'] == '--- Planners' || $row['name'] == '--- Seasonal' || $row['name'] == '--- Specialties' || $row['name'] == '--- Structural Building' || $row['name'] == '--- Water Features') {
                                                                        
                                                                    $str = $row['name'];
                                                                    $str2 = substr($str, 4);                                                                     
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><strong>'. $str2 . '</strong></label></div>';
																	$xx++;
                                                                        
                                                                    } else {
                                                                        
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="type_biz[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
                                                                        
                                                                    }
                                                                        
																	
																} elseif ($xx == 1) {
                                                                    
                                                                    if ($row['name'] == '--- Design Functions' || $row['name'] == '--- Development Functions' || $row['name'] == '--- Earth Science' || $row['name'] == '--- Installation Functions' || $row['name'] == '--- Maintenance Functions' || $row['name'] == '--- Planners' || $row['name'] == '--- Seasonal' || $row['name'] == '--- Specialties' || $row['name'] == '--- Structural Building' || $row['name'] == '--- Water Features') {
                                                                        
                                                                    $str = $row['name'];
                                                                    $str2 = substr($str, 4);    
                                                                        
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><strong>'. $str2 . '</strong></label></div></div><br>';
																	$xx = 0;
                                                                        
                                                                    } else {
                                                                        
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="type_biz[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
                                                                        
                                                                    }
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileAssociation() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `type_assoc` ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="assoc[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" name="assoc[]" value="'. $row['name'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileBusniessTable() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13725' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileEquipmentInstallition() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13727' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileEquipmentMaintenance() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13728' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }



			function mobileEquipmentPartsRepair() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13729' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileGreenRoof() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13730' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileLandscapeLighting() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13731' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileOutdoorLiving() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13732' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileParkRecreation() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13733' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobilePMBR() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13734' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobilePlantAccessories() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13735' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobilePlantMaterials() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13736' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileSiteAmenities() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13737' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileStormwaterErosionControl() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13738' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileTurfOrnamental() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13739' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileWaterFeatures() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13726' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileWaterManagementIrrigation() {
				
												include('connect3.inc');
			   

														$sql = "SELECT * FROM `ylist` WHERE idParent = '13740' ORDER BY name ASC";
														$result=mysqli_query($conn,$sql);
			   
			   
			   												$xx = 0;
			   
			   												$ii = 0;
			   
															while($row = mysqli_fetch_array($result)) {
                                                                
                                                                
																
																if ($xx == 0) {
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div>';
																	$xx++;
																	
																} elseif ($xx == 1) {
																	
																	echo '<div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="ylist_id[]" value="'. $row['sub_number'] . '"> '. $row['name'] . '</label></div></div><br>';
																	$xx = 0;
																	
																}
                                                                
                                                                

															}
			   
												$conn->close();	

            }


			function mobileNeedInfo() {
				
												
                                                                
																	
																	echo '<div class="row"><div class="col-md-3 col-sm-6 col-xs-6"><label><input type="checkbox" name="needs[]" value="Current Project"> Current Project</label><br><label><input type="checkbox" name="needs[]" value="Future Project"> Future Project</label><br><label><input type="checkbox" name="needs[]" value="College Project"> College Project</label></div><br>';
                                                                
																														
                                                                

														

            }


			function mobilePassword() {
				
												
                include('connect3.inc');


                                    // Check if Valid Password


                                        $sql = "select * from subscribe where pass='" . $passwordUser . "'";
                                        $result = $conn->query($sql);
                                        $rowcount=mysqli_num_rows($result);

                                            if ($rowcount != 0) {

                                                // Get User Id

                                                while($row = mysqli_fetch_array($result)) {

                                                    $number = $row['id'];

                                                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://landscapearchitect.com/template-subscription-renew-js.php?id='.$number.'">';    
                                                    exit;   


                                                } 

                                            } else {

                                                echo "Wrong Password" . $passwordUser;

                                            }
                                            		

            }

			function mobileGetUserData() {
				
												
                                        $sql = "select * from subscribe where id='" . $userId . "'";
                                        $result = $conn->query($sql);
                
                                                while($row = mysqli_fetch_array($result)) {
                                                    
                                                   $testName = $row['first_name']; 
                                                    
                                                }
                
                
                                            

            }




		

?>












