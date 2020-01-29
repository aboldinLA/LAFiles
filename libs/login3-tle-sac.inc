<?

include("lo_mo_top-main-tlesac-16-pg.inc");

?>


				<!-- Top -->
    
						<section class="wrapper style5">
                            
                        <!-- Main2 -->
                        <div id="page-adjus">
                        
							<img width="100%" src="https://landscapearchitect.com/TLE-SAC/images/banner8.jpg" alt="" /><br><br>
                        
				<center><div id="main2">
					<div>
						<div class="row 150%">
							<div class="8u 12u$(medium)">

								<!-- Content -->
									<section>
    									<center>
                                        <div style="position:relative; top:-50px">
                                        <table>
                                            <tr>
                                                <td>
                                                <div>
                                                    <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br />
                                                    <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>EXPRESS Registration Center</center></span><br />
                                                    
                                                    	<p style="color:#1663BD">To register 3 or more attendees, <span id="bold-it"><a href="https://landscapearchitect.com/TLE-SAC/images/TLE-SAC16-Multiple-Attendee-Registration.pdf" target="_blank">click here to download a PDF form.</a></span></p><br />  
                                                    
                                                    
                                                    <span style="font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Please Enter Your Password Here</center></span><br />
                                                </div>
                                                </div>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        
                                                    <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
                                                    <table border=0 cellpadding=0 cellspacing=5>
                                                        <? if ($t == "ad") {?>
                                                        <tr>
                                                            <td>Login:</td>
                                                            <td><input type="text" name="email" MAXLENGTH="45" value=""></td>
                                                        </tr>
                                                        <? } ?>
                                                        <tr>
                                                            <td> </td><td><input type="password" name="password" MAXLENGTH="10" style="background-color:#C2C0C0; width:20em">
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
                                                        <tr><td style="line-height:5px">&nbsp;</td></tr>
                                                        <tr>
                                                        <?
                                                            if ( !$_SESSION['np'] && $t == "ad"){
                                                                $new_npage = "/private/index.php";
                                                            } else 	if ( !$_SESSION['np'] && $t == "v"){
                                                            $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                                                            } else {
                                                            $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                                                            }
                                                        ?>
                                                            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Login" class="button special">
                                                                <input type="hidden" name="npage" value="<?=$new_npage?>">
                                                                <input type="hidden" name="action" value="login">
                                                                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                                                            </td>
                                                        </tr>
                                                    </table>


                                		</center>
									</section>

							</div>
							<div class="4u$ 12u$(medium)" style="position:relative; top:-50px">

									<!-- Sidebar -->
									<section id="sidebar">
											<h3 id="numralh3">Sponsors</h3>
                                    
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

											$key = "TLE-SACtrans";

											$sql = "SELECT * FROM banner_ups2 WHERE web like '%" . $key . "%' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "2") {
													echo "<section><a href='https://landscapearchitect.com/TLE-LB/transfer/" . $row[web] . "' target='_blank'><img width='50%' src='https://landscapearchitect.com/TLE-SAC/images/sponsors/" . $row[picture] . "' alt='' /></a>
										</section><br>";
										 			$i++;
     											}
											}
											echo "<a href='https://landscapearchitect.com/TLE-SAC/sponsors-2016.php' target='_blank'><p style='width:50%; font-size:11px; font-family:Helvetica, Arial, sans-serif; line-height:1.5em'>View Complete<br>List of Sponsors</p></a>";
									?>                                     
                                                                                
																					
                                    	<br><br>
										<hr />
                                        <br>
                                        
										<section>
											<a href="#" class="image fit"><img src="https://landscapearchitect.com/research/TLE/images/tle-lb-15-thur-0890.jpg" alt="" /></a>
											<h3 id="numralh3">Why Attend the Expo?</h3>
											<p id="headh6" align="left">• Incomparable education program<br>
                                            	• Cutting-edge technology<br>
                                            	• Countless face-to-face connections<br>
                                            	• What’s new for 2016—Plenty!
                                            </p><br>
											<footer>
												<ul class="actions">
													<li><a href="https://landscapearchitect.com/TLE-SAC/index-tle-sac-2016.php#one" target="_blank" class="button special">Learn More</a></li>
												</ul>
											</footer>
										</section>
									</section>

							</div>
						</div>
					</div>
				</div>  </center> <br><br>
 
                        
                        <hr>  <br>
                        
				<!-- Main Leftside bar-->
				<center><div id="main2">
                		<div class="row 150%">
							<div class="4u 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
											<h3 id="numralh3">Sponsors</h3>
                                    
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

											$key = "TLE-SACtrans";

											$sql2 = "SELECT * FROM banner_ups2 WHERE web like '%" . $key . "%' ORDER BY RAND()";
											$result2 = $conn->query($sql2);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result2)) {
												if ($x <= "2") {
													echo "<section><a href='https://landscapearchitect.com/TLE-LB/transfer/" . $row[web] . "' target='_blank'><img width='50%' src='https://landscapearchitect.com/TLE-SAC/images/sponsors/" . $row[picture] . "' alt='' /></a>
										</section><br>";
										 			$x++;
     											}
											}
									?>                          
                                        
										<hr />
                                        
										<section>
										<section>
											<a href="#" class="image fit"><img src="https://landscapearchitect.com/research/TLE-SAC/images/tle-sac-15-wed-0744.jpg" alt="" /></a>
											<h3 id="numralh3">Seminar Schedule</h3>
											<p>View the list of Seminars</p>
											<footer>
												<ul class="actions">
													<li><a href="https://landscapearchitect.com/TLE-SAC/index-tle-sac-2016.php#semsch" target="_blank""  class="button special">Learn More</a></li>
												</ul>
											</footer>
										</section>
									</section>
									</section>

							</div>
							<div class="8u$ 12u$(medium) important(medium)">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="https://landscapearchitect.com/TLE-SAC/images/inforgraphicTLE-SAC16.jpg" alt="" /></a>
										<center><h3 id="numralh3">If you are a:</h3>
											<p align="middle">• Landscape Professional<br>
                                            	• Landscape Installer/Maintenance<br>
                                            	• Landscape Designer/ Architect<br>
                                            	• Consultant, Planner, Developer
                                            </p>
                                            <p style="font-weight:600; color:#4f6d50">You won’t want to miss the opportunity<br>
											to attend The Landscape Expo Sacramento 2016</p>
									</section>

							</div>
						</div>
					</div>
				</div> </center>                       

						<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="inner">
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
                                    
										<? include("tle-sac-bottom.inc"); ?>

									</section>

								</div>
							</div>
 							</div>
						</section></center>
				</article>                             
                        


                        
   
						<!-- Test Sections End -->                        
                        
                        
                        
					</article>
 
  
  


  							<!-- From Home End -->
                            
							<!-- Old Code End -->                                

						</section>
					</article>
                        </div>


<?

include("lo_mo_footer-main-tlesac-16-pg.inc");

?>