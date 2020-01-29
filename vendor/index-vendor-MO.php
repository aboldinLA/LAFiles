<?

include("lo_mo_top-main-pg-2.inc");

?>




			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="8u 12u(mobile)" id="content">
								<article id="main">


									<header>
										<center><h2><a href="#">Vendor Profile Management Center </a></h2></center>
										
									</header> 
                                    
                                    <center><h3 id="numralh3" style="font-size:32px">Welcome!<br>
                                    
									<?
									
										// New Vendor Start

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

											$key = $_GET[id];

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "2") {
													echo $row[company_name];
										 			$i++;
													?>

                                    </h3></center><br>
                        
                                   <center><span>Scroll down for <strong>Sales Lead Retrieval</strong> or to edit your company information, add or delete search engine categories, update regional outlets, manage product profiles, and retrieve sales leads.</span></center> 
                                   
                                   <marquee style="font-size:28px; font-weight:bold; color:#FF0004">Hundreds of Product Searches Every Month!</marquee>
                                   
									<center><span>The average Vendor Profile is included in hundreds of product search results every month.</span>  
                                    
									<center><h3 id="numralh3">Basic Search Results contain your Company Name and Phone Number.</h3></center><br>
 
                                    
                                    <center><a href="https://landscapearchitect.com/responsive/LO-new/vendor_profile.php?number=<? echo $row[id]; ?>" target="_blank"><h3 id="numralh3" style="font-size:32px">View Your Current Profile.</h3></a></center><br>
                                    
									<center><span>Visit the LandscapeOnline Product Search to see how your company is presented. If your listing is not linked to your Enhanced Profile, and you would like
to Upgrade Your Profile with a link, color logo and product profiles, contact your advertising representative as indicated below:</span><br><br>

												<div align="center">
                                                <table>
                                                	<tr>
                                                    	<td align="center" style="font-weight:bold">If Your Company Name Begins With:</td>
                                                        <td style="font-weight:bold">Sales Representative</td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="center">A-H</td>
                                                        <td>Kip Ongstad - (714) 979-5276 x126</td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="center">I-P</td>
                                                        <td>George Schmok - (714) 979-5276 x110</td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="center">Q-Z</td>	
                                                		<td>Matt Henderson - (714) 979-5276 x114</td>
                                                    </tr>
                                               </table>
                                    			</div><br><br>
                                                
                                                <div align="left">
                                    			<h3 id="numralh3" style="font-size:32px">Company Information [ edit ]</h3><br><br>
                                                
                                                <span style="font-weight:bold">Name: </span><? echo $row[company_name]; ?><br><br>
                                                
                                                <img src="https://landscapearchitect.com/products/images/<? echo $row[logo]; ?>"><br><br>
                                                
                                                <span style="font-weight:bold">Vendor Type: </span><? echo $row[vendor_type_id]; ?><br><br>
                                                
                                                <span style="font-weight:bold">Address: </span><? echo $row[address]; ?><br><br>
                                                
                                                <span style="font-weight:bold">Phone: </span><? echo $row[phone]; ?><br><br>
                                                
                                                <span style="font-weight:bold">Fax: </span><? echo $row[fax]; ?><br><br>
                                                
                                                <span style="font-weight:bold">Website: </span><? echo $row[web]; ?><br><br>
                                                
                                                <span style="font-weight:bold">Email	: </span><? echo $row[email]; ?><br><br>
                                                
                                                <span style="font-weight:bold">Last Update: </span><? echo $row[edit_date]; ?><br><br>
                                                
                                                <span style="font-weight:bold">Profile: </span><? echo $row[profile]; ?><br><br>
                                                
                                                </div>
                                                
                                                <!-- Leads Start -->
                                                <div align="left">
                                    			<h3 id="numralh3" style="font-size:32px">Sales Lead Retrieval</h3><br>
                                                
                                                <center><img width="70%" src="https://landscapearchitect.com/lol-logos/LASN_LC-BIG3.jpg"></center>
                                                
												<center><span>All advertisers receive sales leads updated every Friday by 5:00 PM.<br>
												To view your leads, by date, select the date range below and click on "View Preset Leads"</span></center><br>
                                                
                                                <center><h3>Leads for the Week of:</h3><br>
												(Make sure to click on a week in the box below) (For Mobile Devices, Click in Box)</center><br>
                                                
                                                
                                                <?
													// New DB Start
		
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
		
		
												// Start for Preset Tables
		
													$key2 = $_GET[id];
													
													$sql3 = "SELECT distinct week FROM leads WHERE vendor_id='" . $key2 . "' ORDER BY lead_id DESC";
													$result3 = $conn->query($sql3);									
													
													while($row = mysqli_fetch_array($result3)) {
														$a = $row['week'];
														$weekcsv = $a;
														
														date_default_timezone_set('America/Los_Angeles');
															$yWeek = substr($a, -4);
															$mWeek = substr($a, 0, 2);
															$dWeek = substr($a, 2, 2);
														$date = $yWeek.'-'.$mWeek.'-'.$dWeek;
														$date1 = strtotime($date);
														$date2 = strtotime("+7 day", $date1);
											
														$leftpart = '&nbsp;&nbsp;'.date('m.d.y', $date1).'-'.date('m.d.y', $date2);
														
														
														//$leftpart = substr($a,0,2).substr($a,3,2).substr($a,6,4);
														
															$dlist .= '<option value="'.$a.'">'.$leftpart.'</option>';
														}
													
												?>
                                                
												<center><form name="leadsform" method="post" onsubmit="return validateForm()">
                            					<div style="position:relative; left:-325px">
												<select name="week" size="4" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:250px; height:75px; background-color:#CCC; box-shadow: 5px 5px 5px #888888; border: 2px inset; margin-left:auto">
                                    				<option value="" disabled selected>Click to View Leads</option>
													<? echo $dlist ?>
												</select><br>
                                                </div>
												<center><input class="button" type="submit" value="View Preset Leads"></center>
												</form></center><br>
                                                
                                                
												<?php
                                                if(!isset($_POST['find']))
                                                {
                                                ?>                            
                                                                         
                                    			<center><h3 id="numralh3" style="font-size:32px">Leads for Custom Date Range</h3></center><br>
                                                
                                                <center><img width="70%" src="https://landscapearchitect.com/lol-logos/LASN_LC-BIG3.jpg"></center>
                                                
												<center><span style="font-style:italic">Please enter date yyyy-mm-dd in the field below (ex: Start 2014-01-01, End 2014-01-31)</span></center><br>
                                                
                                                <form name="custdate" method = "post" action="https://landscapearchitect.com/vendor/index-vendor.php?action=categories3&id=<?= $key2 ?>">
                                                <table width = "100%" align = "center">
                                                <tr>
                                                    <td style="height:10px"> </td>
                                                <tr>
                                                <td align="center">
                                                <table width="300px">
                                                	<tr>
                                                    	<td align="right">
                                                			<label style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Start Date&nbsp;</label>
                                                			<input type = "text" name = "small" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#CCC; box-shadow: 5px 5px 5px #888888; text-align:center">
                                                        </td>

                                                        <td style="width:50px">&nbsp;</td>
                                                        <td>
                                                			<label style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">End Date&nbsp;</label>
                                                			<input type = "text" name = "large" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#CCC; box-shadow: 5px 5px 5px #888888; text-align:center">
                                                        </td>

                                                   </tr>
                                                </table>
                                                
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:10px"> </td>
                                                <tr>
                                                <tr>
                                                <td align = "center">
                                                <input type = "submit" name = "find" value = "View Custom Leads" class="button" >
                                                </td>	
                                                </tr>
                                                </table>
                                                </form>                             
                                                
												<?php
                                                }
                                                else
                                                {
                                                $small = trim($_POST['small']);
                                                $large = trim($_POST['large']);
                                                
                                            
                                               
                                                }
                                                ?>  

                                        		
                                                </div>
                                    
                                    <?
									     		}
											}
									?> 
                                                <!-- Leads End -->

                                    
									<?
									
										// Category Start

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

											$key2 = $_GET[id];

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key2 . "'";
											$result = $conn->query($sql);									
									
										// category section
											while($row = mysqli_fetch_array($result)) {
												
													?>                                    
                                    
                                    			<hr>
                                    
                                    
                                                <div align="left">
                                    			<h3 id="numralh3" style="font-size:32px">Search Categories</h3>
                                                
												<h3>Your Current Categories Ares:</h3>
                                                
												<? 
												
													$array = $row[xlist];
													
													$xlistn = explode(",", $array);
													
													foreach($xlistn as $cat) {	
													
													$sql = "SELECT * FROM xlist WHERE id =" . $cat . "";
													$result = $conn->query($sql);									
													while($row = mysqli_fetch_array($result)) {
														echo $row[name] . "<br>";	
													}
													}
																								
													
												?>
                                        		
                                                </div>
 
                                    			<hr>
                                                
                                                <div align="left">
                                    			<h3 id="numralh3" style="font-size:32px">Products / Project Photos</h3>
                                                
                                                
                                                
<?

									
										// Photo Start

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




									$key = $_GET[id];
									// $key = '28316';
								
									//Read Photos from Database 
									$results = mysqli_query($conn,"select * from vendor_product where vendor_id='" . $key . "'");
									
											
									while($row = mysqli_fetch_array($results)) {
										
										$keyword = $row[keywords];
										
								?>                              
										<div>
                                        <table>
                                        	<tr valign="top">
                                            	<td><a href="<? 
												
												$rpho = $row['web_photo'];
												
												if (!empty($row['web_photo'])) {
													echo $row['web_photo'];
												} else {
													echo $row['web'];
												}
												
												
												?>" target="_blank"><img src="https://landscapearchitect.com/products/images/<? echo  $row['photo'] ?>"></a></td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td valign="middle"><h3><? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) ?></h3>
                                                <? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['description']))); ?><br>
                                                Product Link:<br>
                                                <a href="<? echo  $row['web'] ?>" target="_blank"><? echo  $row['web'] ?></a>
                                            	</td>
                                        	</tr>
                                         </table><hr>
										</div>
                                        
                                    <? } ?>                                                                
                                        		
                                                </div>                                                  
                                                
                                    <?
											}
									?>                                                                                   
                                    
                                                                                                      
            
								</article>
							</div>
                            
                            
						<!-- Sidebar -->
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
	                                  
											<h3 id="numralh3">Advertisers</h3>
                                    
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

											$key = "/research/article.php";

											$sql = "select DISTINCT picture, web  FROM banner_ups WHERE product IS NULL AND comp_name NOT LIKE '%Landscape Communications%' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "12") {
													echo "<section><a href='https://landscapearchitect.com/TLE-LB/transfer/" . $row[web] . "' target='_blank'><img width='70%' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a>
										</section><br>";
										 			$i++;
     											}
											}
									?>                                                                
                                        
										<hr />
                                        
										<section>
											<a href="#" class="image fit"><img src="https://landscapearchitect.com/research/TLE/tle_lb15/DSC_0989.jpg" alt="" /></a>
											<h3 id="numralh3">The Landscape Expo - Long Beach</h3>
											<p>The Landscape Expo website will attract thousands of landscape professionals looking for exhibitors, just click to explore the Expo. </p>
											<footer>
												<ul class="actions">
													<li><a href="#" class="button">Learn More</a></li>
												</ul>
											</footer>
										</section>
                                
								<hr />
								<section>
                                
                       			<!-- Related Stories Section Start -->
                                <?
								
									$key = $_GET[number];
									// $key = '28316';

									include("config.inc2.php"); //include config file								
								
									//Read Article from Database 
									$results = mysqli_query($connecDB,"select * from editorial where id='" . $key . "'");
									
									while($row = mysqli_fetch_array($results)) {
										
										
										
										if (empty($row[keywords])) { 
										
											// the array
											$arrX = array("rock", "asla","paver", "tree", "equipment", "water");
											 
											// get random index from array $arrX
											$randIndex = array_rand($arrX);
											 
											// output the value for the random index
											$keyword = $arrX[$randIndex];
											
										} else {
											
											$keyword = $row[keywords];
											
										}
									}
								
								
									
									include("config.inc2.php"); //include config file								
								
									//Read Article from Database 
									$results = mysqli_query($connecDB,"select * from editorial where ed_text LIKE '%".$keyword."%' ORDER BY rand()");
									
									echo "<header>";
										echo "<h3><a href='#'>Related Stories</a></h3>";
										echo $keyword;
									echo "</header>";
									echo "<p>";
										echo "Other articles you may be interested in.";
									echo "</p>";									
									
									$i = 1;
									
									while($row = mysqli_fetch_array($results) AND $i < 6) {	
									
									
										if (empty($row[images])) { 
										
											$imgext = 'feature.jpg';
											
										} else {
											
											$imgext = $row[images];
											
										}									
									
									
								echo "<div class='row 50%'>";
										echo "<div class='4u'>";
										echo "<a href='https://landscapearchitect.com/responsive/LO-new/article.php?number=".$row[id]."' class='image fit' target='_blank'><img src='https://landscapearchitect.com/research/images/".$imgext."' alt=''  /></a>";
										echo "</div>";
										echo "<div class='8u'>";
										echo iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row[title])));
										echo "</div>";
										echo "<br>";
										$i ++;

									}	
																		
								 ?>
                       			<!-- Related Stories Section End -->
                                 
                                    
									<footer>
										<a href="#" class="button">View Top Articles</a>
									</footer>
								</section>
							</div>
						</div>
						<hr />
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="https://landscapearchitect.com/responsive/LO-new/images/news.png" alt="" /></a>
								<header>
									<h3><a href="#">Latest Landscape Industry News</a></h3>
								</header>
								<p>
									Stay up to date with the latest news effecting you and the Landscape Industry. Don't be left in the dark.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="https://landscapearchitect.com/responsive/LO-new/images/association.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Current Association News</a></h3>
								</header>
								<p>
									View the current association news and events. Make sure that your association is noticed.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="https://landscapearchitect.com/responsive/LO-new/images/econo.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Top Economic News</a></h3>
								</header>
								<p>
									Up to date economic new that affects the Landscape Industry and everyone involved in it. Stay on top of the current information.
								</p>
							</article>
						</div>
					</div>

				</div>

<?

include("lo_mo_footer-main2-pg.inc");

?>