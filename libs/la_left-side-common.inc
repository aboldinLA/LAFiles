
<? include '../includes/la_common-new.inc'; ?>


<style>
	.search-engine-cats-list {
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 14px;
	}
	
	
	
	.search-engine-cats-list li {
		list-style-type: none;
		text-decoration: none;
		padding: 3px 0px 3px 10px;
	}
	
	.search-engine-cats-list li a {
		text-decoration: none;
		display: block;
		
	}
	
	.search-engine-cats-list li a:hover {
		text-decoration: none;
		color: #262626;
		
	}

	
	.search-engine-cats-list li:hover .subdropdown-menu {
		display: block;
	}
	
	.subdropdown-menu-main {
		margin-top: -59px;
	}
	
	.subdropdown-menu-wholesale {
		margin-top: -169px;
		
	}

	.subdropdown-menu {
		position: absolute;
		left: 210px;
		z-index: 2000;
		display: none;
		float: left;
		min-width: 280px;
		padding: 5px 0;
		font-size: 14px;
		text-align: left;
		list-style: none;
		background-color: #fff;
		-webkit-background-clip: padding-box;
		background-clip: padding-box;
		border: 1px solid #ccc;
		border: 1px solid rgba(0, 0, 0, .15);
		-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
		box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
		max-height: 300px;
		overflow: auto;
	}
	


	.subdropdown-menu a {
		display: block;
		padding: 1px 10px;
		clear: both;
		font-weight: 400;
		line-height: 1.42857143;
		color: #333;
		white-space: nowrap;
	}	

	.subdropdown-menu a:hover {
		color: #262626;
		text-decoration: none;
		background-color: #f5f5f5;
	}
	
	.search-engine-cats-list li:hover {
		color: #262626;
		text-decoration: none;
		background-color: #f5f5f5;
	}
	
	.search-engine-cats-list .menu-info-text:hover {
		color: #262626;
		text-decoration: none;
		background-color: #fff;
	}
	
	.menu-info-text {
		display: block;
		padding: 3px 20px;
		clear: both;
		font-weight: 400;
		line-height: 1.42857143;
		color: #333;
		white-space: nowrap;
		border-bottom: 1px solid #333;
		padding-left: 0px;
    margin-left: 10px;
    margin-right: 10px;
	}	
	
	li.menu-info-text {
	padding-left: 0px;
	}
	
	.subdropdown-menu > .menu-info-text {
		margin-left: 0px;
		padding-left: 20px;
	}
    
 
</style>


<link type="text/css" rel="stylesheet" media="all" href="https://landscapearchitect.com/products/vertical.css" />
<script type="text/javascript" src="https://landscapearchitect.com/js/vertical.js"></script>


			<div style="position: absolute; left: 25px; top: 400px">
				
<!--				<center><span style="font-family: Helvetica, Arial, 'sans-serif'; font-weight: bold; font-size: 18px; padding-right: 0px">Product Search Engine</span></center><br>-->

			</div>


 <!-- Keyword Section Start -->    
      
			
								<div style="position:absolute; left: -960x; top: 205px; z-index: 75000">
									
									
									<script>
										function mySubmit(wtf) {
										  if ('Search Site' == wtf ) {
											  document.forms['myForm'].action = 'https://landscapeonline.com/Search-Site.php';
										  } else if ('Search Products' == wtf ) {
											  document.forms['myForm'].action = 'https://landscapeonline.com/Search-Products.php';
										  } else
											  return false;

										  document.forms['myForm'].submit();
										}
									</script>									
									
									
									<span style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 24px; font-weight: bold; padding-bottom: 5px; position: relative; left: -12px; top: -3px">Keyword Site Search</span>
						
									<form id="myForm"  method="post" action="https://landscapeonline.com/Search-Site.php">

										<input type="text" name="keywrd" style="width: 235px; height: 30px; z-index: 75000; padding: 3px; box-shadow: 5px 5px 5px #888888; position: relative; left: -12px; font-size: 14px" placeholder="Search Site with Keyword"><br>
										 
									</form>
										
							
										
										
										
						
								</div><br><br> 
                                         
 <!-- Keyword Section End -->   






			<div style="position: absolute; left: 1px; top: 315px; z-index: 40000" class="laDetailsCats">
			
							
							<div style="border: solid; border-width: 1px; width: 248px;">
								<img style="width: 100%; height:auto;" src="https://landscapearchitect.com/lol-logos/sidebar-search-engine/what-are-you-shopping-for-sidebar-header.jpg">
								<br>
								
								<img style="width: 100%; height:auto; margin-top: 5px; margin-bottom: 5px;" src="https://landscapearchitect.com/lol-logos/sidebar-search-engine/la-details-sidebar-logo.jpg">
								<ul class="search-engine-cats-list">
									<li class="menu-info-text">Click Below For Companies:</li>
									
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=28" role="button" aria-expanded="false" aria-haspopup="true">Business Services &amp; Software</a>
									<ul class="subdropdown-menu subdropdown-menu-main">
									  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown28();   ?>
                                        
									</ul>
								</li>
									
									
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=30&catMain=Erosion Control" role="button" aria-expanded="false" aria-haspopup="true">Erosion Control</a>
									<ul class="subdropdown-menu subdropdown-menu-main">
									  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown30();   ?>
                                        
									</ul>
								</li>
									
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1300&catMain=Commercial%20%26%20Wholesale%20Fencing" role="button" aria-expanded="false" aria-haspopup="true">Fencing</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
											<li class="menu-info-text">Click Below For Products:</li>
											
                                            <?  menuDropdown1300()   ?>
                                            
										</ul>
									</li>
									
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1139&catMain=Landscape%20Irrigation%20%26%20Water%20Management" role="button" aria-expanded="false" aria-haspopup="true">Irrigation</a>
									<ul class="subdropdown-menu subdropdown-menu-main">
									  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1139()   ?>
										
									</ul>
								</li>
									
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=32&catMain=Lighting/Electrical" role="button" aria-expanded="false" aria-haspopup="true">Lighting/Electrical</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown32()   ?>
                                            
										</ul>
									</li>
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1214&catMain=Outdoor%20Living%20%26%20Residential%20Landscape">Outdoor Living</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1214()   ?>
                                            
										</ul>
									</li>
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=33&catMain=Parks%20%26%20Playground%20Products">Park &amp; Recreation</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown33()   ?>
                                            
										</ul>
									</li>
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=38&catMain=Paver,%20Masonry,%20Blocks,%20Rocks">Paver, Masonry, Blocks, Rocks</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown38()   ?>
                                            
										</ul>
									</li>

                                     <li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1212&catMain=Pest/Wildlife" role="button" aria-expanded="false" aria-haspopup="true">Pest/Wildlife</a>
									<ul class="subdropdown-menu subdropdown-menu-main">
									  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1212()   ?>
                                        
									</ul>
								</li>
									
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1002&catMain=Plant Accessories & Amendments" role="button" aria-expanded="false" aria-haspopup="true">Plant Accessories &amp; Amendments</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1002()   ?>
                                            
										</ul>
									</li>

									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=29&catMain=Site%20Amenities">Site Amenities</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown29()   ?>
                                            
										</ul>
									</li>
                                    
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1215&catMain=Site%20Furnishings%20%26%20Receptacles">Site Furnishings &amp; Receptacles</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1215()   ?>
                                            
										</ul>
									</li>                                    
                                    
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1301&catMain=Landscape%20Art,%20Sculpture,%20Metal%20%26%20Stone%20Garden%20Ornaments">Sculpture/Art/Garden Ornaments</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1301()   ?>
                                            
										</ul>
									</li>
									
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=41&catMain=Water%20Features,%20Fountains,%20Ponds%20%26%20Equipment">Water Features</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown41()   ?>
                                            
										</ul>
									</li>
                                    
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1213&catMain=Landscape%20Irrigation%20%26%20Water%20Management" role="button" aria-expanded="false" aria-haspopup="true">Water Management</a>
									<ul class="subdropdown-menu subdropdown-menu-main">
									  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1213()   ?>
										
									</ul>
								    </li>                                                                        
                                    
                                    
								</ul>
								<br>



								<img style="width: 100%; height:auto;" src="https://landscapearchitect.com/lol-logos/sidebar-search-engine/tools-and-equipment-sidebar-logo.jpg">
								<ul class="search-engine-cats-list">
								  <li class="menu-info-text">Click Below For Companies:</li>
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1209&catMain=Installation%20Equipment" role="button" aria-expanded="false" aria-haspopup="true">Installation Equipment</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1209()   ?>
                                            
										</ul>
									</li>
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1210&catMain=Maintenance%20Equipment" role="button" aria-expanded="false" aria-haspopup="true">Maintenance Equipment</a>
										<ul class="subdropdown-menu subdropdown-menu-main">
										  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1210()   ?>
                                            
										</ul>
									</li>
									<li><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1211&catMain=Tools, Tires %26 Replacement Parts" role="button" aria-expanded="false" aria-haspopup="true">Tools/Parts</a>
					  					<ul class="subdropdown-menu subdropdown-menu-main">
											  <li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1211()   ?>
                                            
										</ul>
									</li>
                                    
								</ul>
								<br>
								
								
							
								
								<ul class="search-engine-cats-list">
								<li style="list-style-type: none;"><img style="width: 100%; height:auto;" src="https://landscapearchitect.com/lol-logos/sidebar-search-engine/local-wholesale-sidebar-logo.jpg">
										<ul class="subdropdown-menu subdropdown-menu-wholesale">
										  <li class="menu-info-text">Click Below To Search By State:</li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=AL">Alabama</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=AK">Alaska</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=AZ">Arizona</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=AR">Arkansas</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=CA">California</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=CO">Colorado</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=CT">Connecticut</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=DE">Delaware</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=DC">District Of Columbia</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=FL">Florida</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=GA">Georgia</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=HI">Hawaii</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=ID">Idaho</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=IL">Illinois</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=IN">Indiana</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=IA">Iowa</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=KS">Kansas</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=KY">Kentucky</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=LA">Louisiana</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=ME">Maine</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=MD">Maryland</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=MA">Massachusetts</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=MI">Michigan</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=MN">Minnesota</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=MS">Mississippi</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=MO">Missouri</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=MT">Montana</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=NE">Nebraska</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=NV">Nevada</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=NH">New Hampshire</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=NJ">New Jersey</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=NM">New Mexico</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=NY">New York</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=NC">North Carolina</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=ND">North Dakota</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=OH">Ohio</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=OK">Oklahoma</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=OR">Oregon</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=PA">Pennsylvania</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=RI">Rhode Island</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=SC">South Carolina</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=SD">South Dakota</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=TN">Tennessee</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=TX">Texas</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=UT">Utah</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=VT">Vermont</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=VA">Virginia</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=WA">Washington</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=WV">West Virginia</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=WI">Wisconsin</a></li>
											<li><a href="https://landscapearchitect.com/products/index-all-b-top-wholesale.php?ad=34&state=WY">Wyoming</a></li>
										</ul>
								</li>
								</ul>
							</div>			            
           	</div>	       
					






							<!-- Top Stories side start -->

										  
									<?
								
										$date1 = date('m.d',strtotime('sunday 1 week ago'));
										$date2 = date('m.d',strtotime('last saturday'));
	


										// start for the banner add counting and getting from table

											$key = "TLE-LBtrans";
					
											$xxx = 0;
											$zzz = 1;
					
											echo "<div style='position: absolute; top: 1240px; left: -11px; width: 250px'><center><span style='font-family: Helvetica, Arial; font-size: 24px; font-weight: bold'>Top Stories<br>of the Week <br><span style='font-family: Helvetica, Arial; font-size: 18px; font-weight: 400'>" . $date1 . " / " . $date2 . "</span></span></center><br><section><div style='padding-top: 10px; padding-bottom: 10px; padding-left: 3px'>";

											$sql2333 = "SELECT * FROM editorial WHERE top IS NOT NULL ORDER BY top ASC";
											$result2333 = $conn->query($sql2333);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2333)) {
												
																$string =  $row['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash													
												
												
												
																if ($xxx == 0 && $zzz < 12) {														
																	echo "<table><tr><td><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "' target='_blank'><img style='width: 125px' src='https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg'></a></td><td style='width: 5px'>&nbsp;</td><td><p style='width: 110px; padding-right: 1px'><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "' target='_blank'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . "</a></p></td></tr></table><br><hr noshade><br>";

																	$xxx++;
																} elseif ($xxx < 3 && $zzz < 12){
																	echo "<table><tr><td><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "' target='_blank'><img style='width: 125px' src='https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg'></a></td><td style='width: 5px'>&nbsp;</td><td><p style='width: 110px; padding-right: 1px'><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "' target='_blank'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . "</a></p></td></tr></table><br><hr noshade><br>";

																	$zzz++;
																	$xxx++;
																} elseif ($zzz < 12) {
																	echo "<table><tr><td><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "' target='_blank'><img style='width: 125px' src='https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg'></a></td><td style='width: 5px'>&nbsp;</td><td><p style='width: 110px; padding-right: 1px'><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "' target='_blank'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . "</a></p></td></tr></table><br><hr noshade><br>";

																	$zzz++;
																	$xxx = 1;																	
																	
																}
																	
																
																} 
																
											echo "</div></section></div>";
														
									?>											  
										  
										
									
									
										  
										  
										  
										            
                  
							<!-- Top Stories side end -->
							
							
														<!-- Digital side start -->

                   
            

							<div style="position: absolute; top: 2800px; width: 250px; left: -11px;">

									<section>
									  <div style="padding-top: 10px">
										
										  <center><span style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 24px; font-weight: bold"><a href="https://landscapearchitect.com/digital-mags/index.php">Digital Landscape Magazines</a></span><br>
										  
											  <a href="https://lsc-pagepro.mydigitalpublication.com/publication/?m=61306&l=1"><img width="75%" src="https://landscapearchitect.com/imgz2/lasn-cover.jpg" style="border:1px solid #000000"></a><br>
										  
											<span style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 18px; font-weight: bold; padding-top: 8px;"><a href="https://lsc-pagepro.mydigitalpublication.com/publication/?m=61306&l=1">Current Landscape<br>Architect Issue</a></span><br>
										  
										
									  </div>
									</section>
		
								</div>


							<div style="position: absolute; top: 3200px; width: 250px; left: -11px;">

									<section>
									  <div style="padding-top: 10px">
										
										  
										  <center><a href="https://lsc-pagepro.mydigitalpublication.com/view/landscape-communications/landscape-contractor-design-build-maintain"><img width="75%" src="https://landscapearchitect.com/imgz2/lcdbm-cover.jpg" style="border:1px solid #000000"></a><br>
										  
											  <span style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 18px; font-weight: bold; padding-top: 8px;"><a href="https://lsc-pagepro.mydigitalpublication.com/view/landscape-communications/landscape-contractor-design-build-maintain">Current Landscape Contractor Issue</a></span><br></center>
										  
										
									  </div>
									</section>
								
						
		
								</div>
								
							<!-- Digital side ene -->
                        
       