
<?

include '../../includes/lad_common-new.inc'; 

?>


  <!-- Break for header start -->



								<script>
								
									var greeting;
									var time = window.innerWidth
									|| document.documentElement.clientWidth
									|| document.body.clientWidth;
									if (time < 1580) {
										greeting = "Good morning";
									} else if (time > 1581) {
										greeting = "Good day";
									} 
								document.getElementById("demo3").innerHTML = greeting;
								</script>


									<script>
									//hides LADetails Logo on home page
									
									
									
									document.addEventListener("DOMContentLoaded", function() { 
										
										displaySearchLogo();
										greetingTime();
										
										
									});
									
									function displaySearchLogo(){
										if(window.location.href.indexOf("https://landscapearchitect.com/LandscapeProducts/LandscapeProducts.php") < 0) {
										   document.getElementById("searchLogo").style.display = 'block';
										} else {
											document.getElementById("searchLogo").style.display = 'none';
										}
									}
									
																		
									function greetingTime() {
										
										 const d = new Date();
										 const h = d.getHours();
										 let greetingPrefix;
									
										 if(h > 4 && h < 12){
											greetingPrefix = 'Good Morning ';
										 } else if (h > 11 && h < 18){
											greetingPrefix = 'Good Afternoon ';
										 } else {
											greetingPrefix = 'Good Evening ';
										 }
										
										 document.getElementById("greeting").innerHTML = greetingPrefix;
									} //END greetingTime
									
									
								
								</script>



			<style>

					.headHeight2 {
						position: relative;	
						top: 3px;
						padding-right: 15px;
						float: right;
					}				
	
					#headHeight {
						position: relative;	
						padding-right: 15px;
						width: 100%;
					}	
					
				.navbar-header {
					display: flex; 
					width:100%; 
					justify-content: space-between;
				}
				
				.navbar {
					border-radius: 0px !important;
				}
				
				#myInverseNavbar2 {
					width: 70%;
				}
				
				#searchLogo {
					display: none;
				}
	
				.subdropdown:hover .subdropdown-menu-details, 
				.subdropdown:hover .subdropdown-menu-tools, 
				.subdropdown:hover .subdropdown-menu-other {
					display: block;
				}


				.subdropdown-menu {
					position: absolute;
					z-index: 2000;
					display: none;
					float: left;
					min-width: 160px;
					padding: 5px 0;
					margin: 2px 0 0;
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
					max-height: 635px;
					overflow: auto;
				}
				
				.subdropdown-menu-details {
/*					margin-top: -33px;*/
					top: -3px;
					left: 210px;
				}
				
				.subdropdown-menu-tools {
/*					left: 120px;*/
/*					margin-top: -3px;*/
					left: 189px;
					top: -3px;
				}
				
				.subdropdown-menu-other {
					right: 239px;
/*					margin-top: -15px;*/
					top: -3px;
				}
				
				.subdropdown-menu a {
					display: block;
					padding: 3px 20px;
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
				
				.menu-font-size {
					font-size: 17px;
					
				}
				
				.dropdown {
					margin-left: 10px;
				}
				
				.inner-dropdown-div {
					text-align: center;
				}
				
				.dropdown-toggle {
					letter-spacing: 0.03em;
				}
			
				.dropdown:hover .dropdown-menu {
					display: block;	
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
				}	
				}
		
				
					@media screen and (max-width: 1580px) {
						
						#headHeight {
							position: relative;	
/*							top: -90px;*/
/*							padding-right: 15px;*/
						}
						
					}					
				
				
			@media screen and (max-width: 1200px) {
					#myInverseNavbar2 {
					width: 70%;
				}
					
			}
				
				@media screen and (max-width: 1179px) {
					.searchLogoContain {
						display: none;
					}
				
				}
				@media screen and (max-width: 1100px) {
				#myInverseNavbar2 {
					width: 100%;
				}
				
				}
				


			</style>




	
	
			<nav class="navbar navbar-inverse" style="height: 75px; min-width: 1281px; z-index: 60000;">
			  <div class="container-fluid"> 
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

				  <div style="width:60%">
				    <a class="navbar-brand" href="https://landscapeonline.com"><img style="position: relative; top: -10px" src="https://landscapearchitect.com/lol-logos/lo-LAD2-1.png" width="460px"></a> 
					<a class="navbar-brand searchLogoContain" href="https://landscapearchitect.com/LandscapeProducts/LandscapeProducts.php"><img <? $headNum = $_GET['ad']; if (($headNum == 1209) || ($headNum == 1210) || ($headNum == 1211)) { echo 'width="168px"'; }  ?> id="searchLogo" style="position: relative; top: -10px;" src="https://landscapearchitect.com/lol-logos/<? $headNum = $_GET['ad']; if (($headNum == 1209) || ($headNum == 1210) || ($headNum == 1211)) { ?>tool-and-equipment-logo-header.png<? } elseif (($headNum == 32) || ($headNum == 48) || ($headNum == 1300) || ($headNum == 29) || ($headNum == 1214) || ($headNum == 38) || ($headNum == 1301) || ($headNum == 1215) || ($headNum == 33) || ($headNum == 41)) { ?>la-details-2-WHITE.png<? } elseif (empty ($headNum)) { ?>blank.png<? } elseif (($headNum == 28) || ($headNum == 30) || ($headNum == 1212) || ($headNum == 1002) || ($headNum == 1213) || ($headNum == 1139)) { ?>blank.png<? } ?>   " width="168px"></a>
				  </div>
	
				  <!-- Collect the nav links, forms, and other content for toggling -->
			      <div class="collapse navbar-collapse" id="myInverseNavbar2">
					<div class="headHeight2">
				  <ul class="nav navbar-nav" id="headHeight">
					<li class="dropdown"> <a href="#" class="menu-font-size" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><div class="inner-dropdown-div">LA Details<br>Categories</div></a>
					  <ul class="dropdown-menu">
						<li class="menu-info-text">Click Below For Companies:</li>
						  
						  
						<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=28&catMain=Business Services & Software">Business Services &amp; Software</a>
							<ul class="subdropdown-menu subdropdown-menu-other">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown28();   ?>
                                
							</ul>
						</li>
						<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=30&catMain=Erosion Control">Erosion Control</a>
							<ul class="subdropdown-menu subdropdown-menu-other">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown30();   ?>
                                
							</ul>
						</li>
						  
						 <li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1300&catMain=Commerical%20%26%20Wholesale%20Fencing" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Fencing</a>
							<ul class="subdropdown-menu subdropdown-menu-details">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1300();   ?>
                                
							</ul>
						</li> 
						
						<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1213&catMain=Landscape%20Irrigation%20%26%20Water%20Management">Irrigation</a>
							<ul class="subdropdown-menu subdropdown-menu-other">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1139();   ?>
                                
							</ul>
						</li>
						 
						  
					  
						
					  <li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=32&catMain=Lighting/Electrical" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Lighting/Electrical</a>
					  	<ul class="subdropdown-menu subdropdown-menu-details">
  						<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown32();   ?>
                            
						  </ul>
						</li>
						<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1214&catMain=Outdoor%20Living%20%26%20Residential%20Landscape" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Outdoor Living</a>
					  		<ul class="subdropdown-menu subdropdown-menu-details">
  							<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1214();   ?>
                                
							</ul>
						</li>
					  
					  	<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=33&catMain=Parks%20%26%20Playground%20Products" target="_blank" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Park &amp; Recreation</a>
					  		<ul class="subdropdown-menu subdropdown-menu-details">
  							<li class="menu-info-text">Click Below For Products:</li>
                                
                                            <?  menuDropdown33();   ?>

				            </ul>
						</li>
					  	<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=38&catMain=Paver, Masonry, Blocks, Rocks" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Paver, Masonry, Blocks, Rocks</a>
					  		<ul class="subdropdown-menu subdropdown-menu-details">
  							<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown38();   ?>
                                
					  		</ul>
						</li>
					  <li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1212&catMain=Pest/Wildlife">Pest/Wildlife</a>
							<ul class="subdropdown-menu subdropdown-menu-other">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1212();   ?>
                                
                                <li style="line-height: 200px">&nbsp;</li>
                                
							</ul>
						</li>
					  
					   <li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1002&catMain=Plant Accessories & Amendments">Plant Accessories &amp; Amendments</a>
							<ul class="subdropdown-menu subdropdown-menu-other">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1002();   ?>
                                
							</ul>
						</li> 
					   	<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1301&catMain=Landscape%20Art,%20Sculpture,%20Metal%20%26%20Stone%20Garden%20Ornaments" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Sculpture/Art/Garden Ornaments</a>
					  		<ul class="subdropdown-menu subdropdown-menu-details">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1301();   ?>
                                <li style="line-height: 200px">&nbsp;</li>
                                
							</ul>
						</li>
					  	<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=29&catMain=Site Amenities" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Site Amenities</a>
					  		<ul class="subdropdown-menu subdropdown-menu-details">
  							<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown29();   ?>
                                
					  		</ul>
						</li>
					  
					 
					 
					  	<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1215&catMain=Site Furnishings %26 Receptacles" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Site Furnishings &amp; Receptacles</a>
					  		<ul class="subdropdown-menu subdropdown-menu-details">
  							<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1215();   ?>
                                
							</ul>
						</li>
					  
					  	<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=41&catMain=Water%20Features,%20Fountains,%20Ponds%20%26%20Equipment" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Water Features</a>
					  		<ul class="subdropdown-menu subdropdown-menu-details">
  							<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown41();   ?>
                                
							</ul>
						</li>
                          
						<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1213&catMain=Landscape%20Irrigation%20%26%20Water%20Management">Water Mgmt.</a>
							<ul class="subdropdown-menu subdropdown-menu-other">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1213();   ?>
                                
							</ul>
						</li>                          
                          
					  </ul>
					</li>		

					<li class="dropdown"> <a href="#" class="dropdown-toggle menu-font-size" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><div class="inner-dropdown-div">Tools &amp; Equipment<br>Categories</div></a>
					  <ul class="dropdown-menu">
						<li class="menu-info-text">Click Below For Products:</li>
						 <li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1209&catMain=Installation%20Equipment" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Installation Equipment</a>
					  		<ul class="subdropdown-menu subdropdown-menu-tools"> 
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1209();   ?>
                                
						 </ul>
						</li> 
						<li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1210&catMain=Maintenance%20Equipment" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Maintenance Equipment</a>
					  		<ul class="subdropdown-menu subdropdown-menu-tools">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1210();   ?>
                                
							</ul>
						  </li>
						 <li class="subdropdown"><a href="https://landscapearchitect.com/LandscapeProducts/index.php?ad=1211&catMain=Tools, Tires %26 Replacement Parts" class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true">Tools/Parts</a>
					  		<ul class="subdropdown-menu subdropdown-menu-tools">
								<li class="menu-info-text">Click Below For Products:</li>

                                            <?  menuDropdown1211();   ?>
                                
							</ul>
						  </li> 
					  </ul>
					</li>
					
					
					<li class="dropdown"> <a href="#" class="dropdown-toggle menu-font-size" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><div class="inner-dropdown-div">Local Wholesale<br> &amp; Plant Materials</div></a>
					  <ul class="dropdown-menu" style="max-height: 400px; overflow: scroll;">
							<li class="menu-info-text">Click Below For States:</li>
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

			  

					<li class="dropdown" style="top: 25px;"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
				  </ul> 
				</div></div>
				<!-- /.navbar-collapse --> 
			  	</div>
			  </div>
			  <!-- /.container-fluid --> 
			</nav>

			  <!-- Break for header end --> 

			  <!-- Break for login start --> 

<style>

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  
  color: #000000;
  border: none;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 80%; /* Full width */
  height: 80%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>



<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post"  action="https://landscapearchitect.com/passCheck.php">
								<input type="hidden" name="page" value="<? echo $xpage; ?>">  
      
    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="https://landscapearchitect.com/LandscapeProducts/index-login.php?ad=1300&catMain=Fencing" target="_blank">password?</a></span><br>
      <span class="psw">New User <a href="https://landscapearchitect.com/LandscapeProducts/index-registration.php?ad=1300&catMain=Fencing" target="_blank">Register</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
			  <!-- Break for login end --> 

						

