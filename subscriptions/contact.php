<?

	$name = $_POST['comp_name'];
	$booth = $_POST['booth'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$messeage = $_POST['message'];


	
	$to = 'jshort@landscapeonline.com';
	$subject = 'TLE-SAC 2016 Exhibitor Registration';
	$msg = "$comp_name in Booth Number: $booth \n" .
	
	"Company Name: $comp_name \n" .
	"Booth Number: $booth \n" .
	"Primary Contact: $name \n" .
	"Primary Contact Email: $email \n" .
	"Primary Contact Phone Number: $phone \n" .
	"Company Address: $address \n" .
	"City: $city \n" .
	"State: $state \n" .
	"Zip Code: $zip \n" .
	"Additional Staff: $message \n";
	
mail ($to, $subject, $msg, 'From:' . $email);

	$to = 'circulation@landscapeonline.com';
	$subject = 'TLE-SAC 2016 Exhibitor Registration';
	$msg = "$comp_name in Booth Number: $booth \n" .
	
	"Company Name: $comp_name \n" .
	"Booth Number: $booth \n" .
	"Primary Contact: $name \n" .
	"Primary Contact Email: $email \n" .
	"Primary Contact Phone Number: $phone \n" .
	"Company Address: $address \n" .
	"City: $city \n" .
	"State: $state \n" .
	"Zip Code: $zip \n" .
	"Additional Staff: $message \n";
	
mail ($to, $subject, $msg, 'From:' . $email);



include("lo_mo_top-main-tlesac-16-pg.inc");

?>


				<!-- Top -->
					<article id="main">
						<header>
							<!-- <img src="images/logo3.png" alt="" style="background-color:#2C2A2A; border-color:#FFFFFF; border:solid; border-width:thin" /><br> -->
							<img src="images/logo3.png" alt="" style="background: rgba(0, 0, 0, 0.35)" /><br>
                            
                            <? include "https://landscapearchitect.com/TLE-SAC/clock-timer-modays.php"; ?><br>
                            
							<ul class="actions">
                            
								<script>
									function myButtonFunction() {
    									alert("Registration Opening Soon");
									}
									
									function myButtonFunction2() {
    									alert("Hotel Reservations Opening Soon");
									}
								</script>                            
                            
								<li><a href="#" class="button special" onclick="myButtonFunction()">Register</a></li>
							</ul>
                            
						</header>
						<section class="wrapper style5">
                            
                        <!-- Main2 -->
						<center><h1 id="headh1">Thank You</h1></center>
				<center><div id="main2">
					<div>
						<div class="row 150%">
							<div class="8u 12u$(medium)">

								<!-- Content -->
	
			<!-- Main -->
				<article id="main">
                
						<span class="icon fa-phone"></span>
						<h3 id="numralh3">Thank You for Registering</h3><br>
						<img width="40%" src="https://landscapearchitect.com/lol-logos/TLE-SAC-2016-Logo-500.jpg">

					<!-- One -->
						<section id="adjus4" class="wrapper style4 special container 75%">

							<!-- Content -->
								<div class="content">
                                
								<p>You will receive a response within 48 hours.</p>                    
                                
                         		</div>
                         </section>                      
                
	
				</article>






							</div>
							<div class="4u$ 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
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
										</section>                                        
                                        
										<hr />
                                        
									<section id="sidebar">
										<section>
											<a href="#" class="image fit"><img src="https://landscapearchitect.com/research/TLE/images/tle-lb-15-thur-0890.jpg" alt="" /></a>
											<h3 id="numralh3">Exhibitor Form</h3>
											<p>Use the link below for the Exhibitor Form</p>
											<footer>
												<ul class="actions">
													<li><a href="https://landscapearchitect.com/TLE-SAC/Exhibitor-Forms-2016.php" class="button special">Sign-Up</a></li>
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
                                                          <a href="#" class="image fit"><img src="https://landscapearchitect.com/research/TLE-SAC/images/tle-sac-15-wed-0744.jpg" alt="" /></a>
                                                          <h3 id="numralh3">Seminar Schedule</h3>
                                                          <p>View the list of Seminars</p>
                                                          <footer>
                                                            <ul class="actions">
                                                              <li><a href="https://landscapearchitect.com/TLE-SAC/index-tle-sac-2016.php#semsch"  class="button special" target="_blank">Learn More</a></li>
                                                            </ul>
                                                          </footer>
                                                        </section>
									</section>

							</div>
							<div class="8u$ 12u$(medium) important(medium)">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="https://landscapearchitect.com/TLE-LB/images/pic06.jpg" alt="" /></a>
										<h3 id="numralh3">Your Continuing Education Units (CEU) starts here!</h3>
										<p>Learn new skills and techniques, find ways to operate more efficiently, earn professional certifications, and improve your business profitability.  Landscape Expo Long Beach will host more than 48 seminars from business management, water management, tree care to design techniques and pest control. Our seminars equip field personnel, project leaders, supervisors, and owners with the latest knowledge on professional Landscaping Business</p>
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
										<p id="numral9">"New" Water Conservation Showcase -</p>
										<p id="numral8">New for this year and very relevant to all those in the landscape industry.</p>
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
										<p id="numral9">You Win When You Attend! -</p>
										<p id="numral8">Check out These Prizes and Giveaways. Win Dodgers Tickets! from LC/DBM And There's More . . . </p>
										<footer>
												<a href="#" class="button small">More</a>
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