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
										<center><h2><a href="#">Welcome to the<br>Vendor Profile Management Center</a></h2></center>
										
									</header> 
                                    
									<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Vendor Profile Management Center</center></span>
                                        
                                        <div>        
                                                <center><p>The largest landscape-oriented database on the internet.<br>
                                                More than 50,000 commercial landscape professionals visit LandscapeOnline Many visitors are looking for the products and services you provide, both nationally and locally.
                                                </p></center><br>
                                        </div>
                                        
                                        <div>
                                                <center>To Edit Your Vendor Profile <br>Please Enter Your Password Here</center>
                                        </div>
                                        
                                        <div>
                                            <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
                                                <table border=0 cellpadding=0 cellspacing=5>
                                                        <tr>
                                                         <td> </td>
                                                         <td><input type="password" name="password" MAXLENGTH="10" value="" style="font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Password">
                                                            <script type="text/javascript" lang="javascript">
                                                            <!--
                                                                <? if ($t == "ad") { ?>
                                                                document.loginform.email.focus();
                                                                <? } else { ?>
                                                                document.loginform.password.focus();
                                                                <? } ?>
                                                            // -->
                                                            </script>
                                                         </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="line-height:2px">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <?
                                                            if ( !$_SESSION['np'] && $t == "ad"){
                                                                $new_npage = "/private/index.php";
                                                            } else 	if ( !$_SESSION['np'] && $t == "v"){
                                                                $new_npage = "/vendor/index-vendor-MO.php?action=edit";
                                                            } else {
                                                                $new_npage = "/vendor/index-vendor-MO.php?action=edit";
                                                            }
                                                        ?>
                                                        <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Enter" style="font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888">
                                                                <input type="hidden" name="npage" value="<?=$new_npage?>">
                                                                <input type="hidden" name="action" value="login">
                                                                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                                                        </td>
                                                    </tr>
                                                </table>
                                        </div>                                        
	                           
  			
            
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

											$sql = "SELECT * FROM banner_ups WHERE page like '%" . $key . "%' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "2") {
													echo "<section><a href='https://landscapearchitect.com/TLE-LB/transfer/" . $row[web] . "' target='_blank'><img width='80%' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a>
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
								<a href="#" class="image featured"><img src="images/news.png" alt="" /></a>
								<header>
									<h3><a href="#">Latest Landscape Industry News</a></h3>
								</header>
								<p>
									Stay up to date with the latest news effecting you and the Landscape Industry. Don't be left in the dark.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/association.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Current Association News</a></h3>
								</header>
								<p>
									View the current association news and events. Make sure that your association is noticed.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/econo.jpg" alt="" /></a>
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