<?

include("lo_mo_top-main-tlesac-16-pg.inc");

?>


				<!-- Top -->
					<article id="main">
						<header>
							<!-- <img src="images/logo3.png" alt="" style="background-color:#2C2A2A; border-color:#FFFFFF; border:solid; border-width:thin" /><br> -->
							<img src="https://landscapearchitect.com/TLE-SAC/images/logo3.png" alt="" style="background: rgba(0, 0, 0, 0.35)" /><br>
                            
                            <? include "https://landscapearchitect.com/TLE-SAC/clock-timer-modays.php"; ?><br>
                            
							<ul class="actions">
                            
								<script>
									function myButtonFunction() {
    									alert("Registration Opening Soon");
									}
									
									function myButtonFunction2() {
    									alert("Hotel Reservations Opening Soon");
									}
									
									function myButtonFunction3() {
    									alert("Seminar Schedule Comming Soon");
									}
									
									function myButtonFunction4() {
    									alert("Comming Soon");
									}	
									
									function myButtonFunction5() {
										
									   var first = prompt("Please enter your first name");
									   var last = prompt("Please enter your last name");
									   var email = prompt("Please enter your email address");
											
 											window.location.href = "https://landscapearchitect.com/subscriptions/thank_you-sac3.php?firstname2="+first+"&lastname2="+last+"&emailB2="+email;}
											
								</script>                            
                            
								<li><a href="https://landscapearchitect.com/subscriptions/subscribe-sac-2016-js2.php?action=new" class="button special">Register</a></li>
							</ul>
                            
						</header>
						<section class="wrapper style5">
                            
                        <!-- Main2 -->
						<center><h1 id="headh1">Request Pasword</h1></center>
				<center><div id="main2">
					<div>
						<div class="row 150%">
							<div class="8u 12u$(medium)">

								<!-- Content -->
									<section>
                                    
									<h3 id="numralh3">Password Information</h3>
                                    <p>Please follow the instructions below.</p>
                                    
										<?php
                                        if (isset($_POST['submit'])) {
                                        mysql_connect('localhost', 'landscap_lol', 'meow2meow') or die("Cannot open connection: " . mysql_error());
                                        mysql_select_db("landscap_lollive") or die("Database not found");
                                        $email=$_POST['email'];
                                        $query = mysql_query("SELECT pass FROM subscribe WHERE email='$email'");
                                        $count=mysql_num_rows($query);
                                            if($count==1){
                                                $rows=mysql_fetch_array($query);
                                                $your_password=$rows['pass'];
                                            }
                                        
                                        if (mysql_num_rows($query) == 0) {
                                                echo ' <br />';
                                                echo '<font size="4"><strong>Your email address was not found.</strong></font><br /><br />';
                                                echo '<a href="https://landscapearchitect.com/subscriptions/subscribe-sac-2016-js2.php?action=new"><font size="4">Return to Registration to Create a New Profile</font></a><br /><br />';
                                                echo '<font size="4">If you are a current subscriber to LASN or LC/DBM,</font><br />';
                                                echo '<font size="4">you can check your mailing label for your password.</font>';
                                                exit;
                                                }
                                            $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
                                            $email = $_POST['email'];
                                            
                                            $to = $email;
                                            $subject = 'Lost Password from LandscapeOnline.com';
                                            $msg = "$name \n" .
                                            "Thanks for your request. \n" .
                                            "Here is your password for Landscapeonline.com: \n" .
                                            "Password: $your_password \n".
                                            "   \n" .
                                            "When you login, please take a moment to review and update any information \n" .
                                            "that has changed on your Personal Member Profile. \n" .
                                            "   \n" .
                                            "We encourage you to browse the Product Information Request page and request \n" .
                                            "any product information you need from our vendors. In order to provide you \n" .
                                            "with timely service, all product information requests are processed weekly. \n" .
                                            "   \n" .
                                            "Thank you for visiting LandscapeOnline.com. \n" .
                                            "   \n" .
                                            "The largest landscape oriented database on the web!" ;
                                            
                                                
                                            mail ($to, $subject, $msg, 'From:' . $email);
                                            
                                            echo '<font size="4"><strong>Your password for your account will be sent to your email address on record.</strong></font><br /><br />';
                                            echo '&nbsp;' . '<br />';
                                                }
                                        
                                        ?>
                                    
                                    
									</section>

							</div>
							<div class="4u$ 12u$(medium)">

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
									?>                                     
                                                                                
										<hr />
                                        
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
													<li><a href="https://landscapearchitect.com/TLE-SAC/index-tle-sac-2016.php#one" class="button special">Learn More</a></li>
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
													<li><a href="index-tle-sac-2016.php#semsch" class="button special">Learn More</a></li>
												</ul>
											</footer>
										</section>
									</section>
									</section>

							</div>
							<div class="8u$ 12u$(medium) important(medium)">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="https://landscapearchitect.com/TLE-LB/images/inforgraphicTLE-LB16.jpg" alt="" /></a>
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
										<header>
											<h3 id="numral7">Special Events</h3>
										</header>
										<p id="numral9">Lawn Mower Races</p>
										<p id="numral8">Water Conservation Area</p>
										<p id="numral9">Green Industry Hall of Fame</p>
										<p id="numral8">Networking Events</p>  
										<p id="numral9">New Product Area</p>
										<footer>
												<a href="#" class="button small">More</a>
										</footer>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<header>
											<h3 id="numral7">Attendees</h3>
										</header>
										<p id="numral9">Commercial Landscape Professionals from across<br>
										the region will be at The Landscape Expo. This includes Owners, Principals, Partners, Superintendents and Managers with a direct influence on Purchasing decisions. Whether it's Landscape Installation, Maintenance, or Design, this is your event!</p>
												<a href="https://landscapearchitect.com/TLE-SAC/index-tle-sac-2016.php#one" class="button small">More</a>
										</footer>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<header>
											<h3 id="numral7">So Cal Attractions</h3>
										</header>
										<p id="numral9">Great opportunity for your family vacation! -</p>
										<p id="numral8">Local Attractions for Long Beach Area, Orange County Area, Los Angeles Area, San Diego Area</p>
										<footer>
												<a href="#" class="button small">More</a>
										</footer>
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