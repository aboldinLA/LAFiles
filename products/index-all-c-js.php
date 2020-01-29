
<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	
	
	
	
		<?
			include("lo_top-main2-side2-js501.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-whole-js.inc");
		?>	       
	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="240px" valign="top">
			
	
									<?
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


										// category for table

											$cat1 = $_GET['ad'];
											$cat2 = $_GET['number'];
											$cat3 = $_GET['state'];
				
											
				
				
				
				
				

											$sql77 = "SELECT name FROM xlist WHERE id = '" . $cat1	. "' ORDER BY name ASC";
											$result77 = $conn->query($sql77);									
									
										// cat section
												
											while($row = mysqli_fetch_array($result77)) {
													$catName1 = $row["name"];									
											}
	
											$sql88 = "SELECT name FROM xlist WHERE id = '" . $cat2	. "' ORDER BY name ASC";
											$result88 = $conn->query($sql88);									
									
										// cat section
												
											while($row = mysqli_fetch_array($result88)) {
													$catName2 = $row["name"];									
											}	
	
	
									?>		  				
	
	
	

	
			
	<div style="position:absolute; left: 400px; top:215px; z-index: 0; padding-bottom: 50px">
	<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px"><? if($cat3 == 'AL'){echo 'Alabama';}elseif($cat3 == 'AK'){echo 'Alaska';}elseif($cat3 == 'AZ'){echo 'Arizona';}elseif($cat3 == 'AR'){echo 'Arkansas';}elseif($cat3 == 'CA'){echo 'California';}elseif($cat3 == 'CO'){echo 'Colorado';}elseif($cat3 == 'CT'){echo 'Connecticut';}elseif($cat3 == 'DE'){echo 'Delaware';}elseif($cat3 == 'FL'){echo 'Florida';}elseif($cat3 == 'GA'){echo 'Georgia';}elseif($cat3 == 'HI'){echo 'Hawaii';}elseif($cat3 == 'ID'){echo 'Idaho';}elseif($cat3 == 'IL'){echo 'Illinois';}elseif($cat3 == 'IN'){echo 'Indiana';}elseif($cat3 == 'IA'){echo 'Iowa';}elseif($cat3 == 'KS'){echo 'Kansas';}elseif($cat3 == 'KY'){echo 'Kentucky';}elseif($cat3 == 'LA'){echo 'Louisiana';}elseif($cat3 == 'ME'){echo 'Maine';}elseif($cat3 == 'MD'){echo 'Maryland';}elseif($cat3 == 'MA'){echo 'Massachusetts';}elseif($cat3 == 'MI'){echo 'Michigan';}elseif($cat3 == 'MN'){echo 'Minnesota';}elseif($cat3 == 'MS'){echo 'Mississippi';}elseif($cat3 == 'MO'){echo 'Missouri';}elseif($cat3 == 'MT'){echo 'Montana';}elseif($cat3 == 'NE'){echo 'Nebraska';}elseif($cat3 == 'NV'){echo 'Nevada';}elseif($cat3 == 'NH'){echo 'New Hampshire';}elseif($cat3 == 'NJ'){echo 'New Jersey';}elseif($cat3 == 'NM'){echo 'New Mexico';}elseif($cat3 == 'NY'){echo 'New York';}elseif($cat3 == 'NC'){echo 'North Carolina';}elseif($cat3 == 'ND'){echo 'North Dakota';}elseif($cat3 == 'OH'){echo 'Ohio';}elseif($cat3 == 'OK'){echo 'Oklahoma';}elseif($cat3 == 'OR'){echo 'Oregon';}elseif($cat3 == 'PA'){echo 'Pennsylvania';}elseif($cat3 == 'RI'){echo 'Rhode Island';}elseif($cat3 == 'SC'){echo 'South Carolina';}elseif($cat3 == 'SD'){echo 'South Dakota';}elseif($cat3 == 'TN'){echo 'Tennessee';}elseif($cat3 == 'TX'){echo 'Texas';}elseif($cat3 == 'UT'){echo 'Utah';}elseif($cat3 == 'VT'){echo 'Vermont';}elseif($cat3 == 'VA'){echo 'Virginia';}elseif($cat3 == 'WA'){echo 'Washington';}elseif($cat3 == 'WV'){echo 'West Virginia';}elseif($cat3 == 'WI'){echo 'Wisconsin';}elseif($cat3 == 'WY'){echo 'Wyoming';} ?>: <? echo $catName2 ?> <br>Featured Advertisers <span style="font-size: 12px">(Click on Advertiser Logo to Jump to Products)</span></h3></center>
	</div>
				
	<style>
				
		.logowidth {
			width: 300px;
		}
		
		@media only screen and (max-width: 1100px) {
			.logowidth {
				width: 275px;
			}
		}
		
		.logowidth2 {
			width: 300px;
		}
		
		@media only screen and (max-width: 1100px) {
			.logowidth2 {
				width: 250px;
			}
		}	
		
		.limage {
			width: 175px;
			height: 75px;    
			overflow: hidden;
			margin: 20px;
			text-align: center;
			line-height: 75px;
		}
		.limage2 {
			max-width: 100%;
			max-height: 100%;
			vertical-align: middle;
		  	position: relative;
		  	top: 50%;
		  	transform: translateY(-50%);			
		}		
			
			.boxhead {
				text-decoration: none;
			}			
				
	</style>				
				

							
				<div style="position:relative; left: 50px; top:50px; z-index: 0; padding-bottom: 50px">
							
								
									<!-- Top Logo Start -->
								
									<?
									
									


										// start for the banner add counting and getting from table

								
		
		
		
		

					   
					   							//  <!-- Top Logo End -->
		
		
										// start for the banner add counting and getting from table

											$key4 = $_GET['number'];
											$sta = $_GET['state'];
		
		
										// Logo Sort Section
		
		
											$sql = "SELECT * FROM `new_vendor` WHERE (`status` = 10 OR `status` = 12 OR `status` = 14 OR `status` = 16 OR `status` = 18) AND `xlist` LIKE '%" . $key4 . "%'  AND (vendor_type_id LIKE '6' || vendor_type_id LIKE '4') ORDER BY `company_name` ASC";
		
		
											$result = $conn->query($sql);									
									
		
												$xz = 0;
												$wy = 1;
		
												echo "<table>";
		
												while($row = mysqli_fetch_assoc($result)) {
                                                    
                                                    
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash                                                    
                                                    
													
													
													if ($row['state'] == $sta ) {
														
														
														if ($xz < 1) {
												
														echo  "<tr><td><div class='limage'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><img class='limage2' src='https://landscapearchitect.com/products/images/". $row['logo'] ."'></a></div></td>"; 
														$xz++;
															
														} elseif ($xz < 2) {
															
														echo  "<td><div class='limage'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><img class='limage2' src='https://landscapearchitect.com/products/images/". $row['logo'] ."'></a></div></td>"; 
														$xz++;
															
														} else {
															
														echo  "<td><div class='limage'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><img class='limage2' src='https://landscapearchitect.com/products/images/". $row['logo'] ."'></a></div></td></tr>"; 
														$xz = 0;
															
														}
													
													
													} elseif ($row['state'] != $sta ) {
														
														
															$sql25 = "SELECT * FROM `new_vendor` WHERE  `state` LIKE '" . $sta . "' AND `outlets` ='" . $row['id'] . "'  ORDER BY `company_name` ASC";
															$result25 = $conn->query($sql25);
													
																	$sx = 0;

														while($row = mysqli_fetch_assoc($result25)) {
                                                            
                                                            
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash                                                    
                                                                                                                
																	
																	
																	if (($row['id'] = $row['outlets']) && ($sx < 1)) {
																	
																		
																		$ven = $row['id'];
																		
																		
														
																		$sql67 = "SELECT logo FROM `new_vendor` WHERE `id` ='" . $ven . "'  ORDER BY `company_name` ASC";
																		$result67 = $conn->query($sql67);
																		
																			while($row = mysqli_fetch_assoc($result67)) {
																				
																				
																				if ($xz < 1) {
																				echo  "<tr><td><div class='limage'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><img class='limage2' src='https://landscapearchitect.com/products/images/". $row['logo'] ."'></a></div></td>";
																				$xz++;
																				} elseif ($xz < 2) {
															
																				echo  "<td><div class='limage'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><img class='limage2' src='https://landscapearchitect.com/products/images/". $row['logo'] ."'></a></div></td>"; 
																				$xz++;

																				} else {

																				echo  "<td><div class='limage'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><img class='limage2' src='https://landscapearchitect.com/products/images/". $row['logo'] ."'></a></div></td></tr>"; 
																				$xz = 0;

																				}
																				
																				
																				
																			}
																		
																		
																		
																		$sx++;
																		
																	}
																
																}
														
														
														
													}
													
													
													
												}	
		
												echo "</table>";
		
		
		
		
												echo "<table><tr><td style='line-height: 25px'>&nbsp;</td></tr></table><hr noshade style='width: 650px'><br>";
		
		
		
		
		
		
											// Wholesale Company Sort
		

								// start for the banner add counting and getting from table

											$key4 = $_GET['number'];
											$sta = $_GET['state'];
		
		
										// Logo Sort Section
		
		
											$sql = "SELECT * FROM `new_vendor` WHERE (`status` = 10 OR `status` = 12 OR `status` = 14 OR `status` = 16 OR `status` = 18) AND `xlist` LIKE '%" . $key4 . "%'  AND (vendor_type_id LIKE '6' || vendor_type_id LIKE '4') ORDER BY `status` ASC";
		
		
											$result = $conn->query($sql);									
									
												echo "<table width='763px'>";	
		
												$xz = 0;
												$wy = 1;
		
												while($row = mysqli_fetch_assoc($result)) {
													
																
													
													
													if ($row['state'] == $sta ) {
																											
														
														if ($xz < 1) {
												
															echo "<tr><td style='position:relative;top:-50px'><a id='". $row['logo'] ."'>&nbsp;</a></td></tr><tr><td><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=". $row['id'] ."' target='_blank'><img style='width: 150px' src='https://landscapearchitect.com/products/images/". $row['logo'] . "'></a></td><td><span  style='position:relative; left: 0px; width: 450px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;'>" . $row['profile'] . "</span><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=". $row['id'] ."' target='_blank'><strong>More</strong></a></td></tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr><td>&nbsp;</td><td style='text-align: left; font-weight: bold'><a href='http://" . $row['contact_us'] . "' target='_blank'>Visit Website</a><span style='padding-left: 60px'><a href='http://" . $row['contact_us'] . "' target='_blank'>Contact Us</a></span><span style='padding-left: 60px'><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=". $row['id'] ."' target='_blank'>View Vendor Profile</a></span></td></tr><tr><td style='line-height: 25px'>&nbsp;</td></tr></tr><tr><td colspan='2'><hr noshade style='width: 650px'><br></td></tr>";
															
														}
													
													
													} 
													
													if ($row['state'] != $sta ) {
														
																													
														
														
															$sql25 = "SELECT * FROM `new_vendor` WHERE  `state` LIKE '" . $sta . "' AND `outlets` ='" . $row['id'] . "'  ORDER BY `status` ASC";
															$result25 = $conn->query($sql25);
													
																	$sxs = 0;

														while($row = mysqli_fetch_assoc($result25)) {
															
																	
																	if (($row['id'] = $row['outlets']) && ($sxs < 1)) {
																		
																		
																		
																		$ven = $row['id'];
																		
														
																		$sql67 = "SELECT * FROM `new_vendor` WHERE `id` ='" . $ven . "'  ORDER BY `status` ASC";
																		$result67 = $conn->query($sql67);
																		
																			while($row = mysqli_fetch_assoc($result67)) {																		
																	
																		
																		echo "<tr><td><a id='". $row['logo'] ."'>&nbsp;</a></td></tr><tr><td><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=". $row['id'] ."' target='_blank'><img style='width: 150px' src='https://landscapearchitect.com/products/images/". $row['logo'] . "'></a></td><td style='position:relative; left: 0px; width: 450px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;'>" . $row['profile'] . " <a href='https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=". $row['id'] ."' target='_blank'><strong>More</strong></a></td></tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr><td>&nbsp;</td><td style='text-align: left; font-weight: bold'><a href='http://" . $row['contact_us'] . "' target='_blank'>Visit Website</a><span style='padding-left: 60px'><a href='http://" . $row['contact_us'] . "' target='_blank'>Contact Us</a></span><span style='padding-left: 60px'><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=". $row['id'] ."' target='_blank'>View Vendor Profile</a></span></td></tr><tr><td style='line-height: 25px'>&nbsp;</td></tr></tr><tr><td colspan='2'><hr noshade style='width: 650px'><br></td></tr>";
																		
																			}
																		$sxs++;
																				
																			}
																		
																		
																		
																		$sx++;
																		
																	}
																
																}
														
														
														
													}
													
													
						echo "<div><table><tr><td style='line-height: 25px'>&nbsp</td></tr></table></div>";							
								
			   
			   
													// Bottom Logos Section
												// echo $zCount;
												
												echo "<div style='position:relative; left: -15px; top: 0px; padding-top: 15px'>";
					   
			
                   echo '<center><h3 style="font-family: Helvetica, Arial; font-size: ; font-weight:400">Additional Suppliers<br><span style="font-size: 12px"> Sorted By Zip Code - Click on Company Name for Directions</span></h3><br></center>';
					   
					   
											// <!-- Additional Logo Start -->
														
					?>
					
					<div style="position:relative; left: 75px">
					
					
									<style>
										.tooltip2 {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
										}

										.tooltip2 .tooltiptext {
											visibility: hidden;
											width: 200px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px 0;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											left: 50%;
											margin-left: -60px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip2 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											left: 50%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip2:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
									</style>							
					
					
									<?
									
				

										// start for the banner add counting and getting from table

											$key4 = $_GET['number'];							

											$sql = "SELECT * FROM new_vendor WHERE xlist LIKE '%" . $key4 . "%' AND state='" . $_GET['state'] . "' ORDER BY zip ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   							echo "<table>"; 
					   
											   while($row = mysqli_fetch_assoc($result)) {
												 if ($i == 1) {
													 echo "<tr>";
												  } 
												   echo "<td class='logowidth2'><a href='https://www.google.com/maps/place/" . $row['address'] . ",+" . $row['city'] . ",+" . $row['state'] . "+" . $row['zip'] . "' target='_blank'><div class='tooltip2'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['company_name']))) . "<span class='tooltiptext'>Click For Directions</span></div></a><br>" . $row['phone'] . "<br>" . $row['city'] . ", " . $row['zip'] . "</td>"; 
												 if ($i == 3) {
													 $i = 1;
													 echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr>";
												  }
												  else {
													 $i++;
												  }
												}

												echo "</table>";  
					   

					   
					   							//  <!-- Logo Adjustment Start -->
		
		
		
		
											// <!-- 16 and 18 Logo End -->
					   
					   
												//include("lo_top-main2-bottom.inc");
		
		
		
		
		
		?>
		
				</div>

				</div>
				
				</div>
		
			
			</td>
			
			
			
		</tr>
	</table>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





