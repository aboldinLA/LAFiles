<?

	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$to = 'jshort@landscapeonline.com';
	$subject = 'TLE-SAC Exhibitor Registration';
	$msg = "Primary Contact: " . $_POST['name'] . "\n" . 
	"For Company: " . $_POST['comp_name'] . "\n" .
	"Booth Number: " . $_POST['booth'] . "\n" .
	"Primary Contact Email: " . $_POST['email'] . "\n" .
	"Primary Contact Phone Number: " . $_POST['phone'] . "\n" .
	"Company Address: " . $_POST['address'] . "\n" .
	"City: " . $_POST['city'] . "\n" .
	"State: " . $_POST['state'] . "\n" .
	"Zip Code: " . $_POST['zip'] . "\n" .
	"Request Additional Staff: " . $_POST['message'];
	
	mail ($to, $subject, $msg, 'From:' . $email);
	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$to = 'circulation@landscapeonline.com';
	$subject = 'TLE-SAC Exhibitor Registration';
	$msg = "Primary Contact" . $_POST['name'] . "\n" . 
	"For Company" . $_POST['comp_name'] . "\n" .
	"Booth Number" . $_POST['booth'] . "\n" .
	"Primary Contact Email" . $_POST['email'] . "\n" .
	"Primary Contact Phone Number" . $_POST['phone'] . "\n" .
	"Company Address" . $_POST['address'] . "\n" .
	"City" . $_POST['City'] . "\n" .
	"State" . $_POST['state'] . "\n" .
	"Zip Code" . $_POST['zip'] . "\n" .
	"Request Additional Staff" . $_POST['message'];
	
	mail ($to, $subject, $msg, 'From:' . $email);



include("lo_mo_top-main-tlelb-16-pg.inc");

?>


				<!-- Top -->
					<article id="main">
           <header>
              <!-- <img src="images/logo3.png" alt="" style="background-color:#2C2A2A; border-color:#FFFFFF; border:solid; border-width:thin" /><br> -->
              <img id="imgwidth" src="https://landscapearchitect.com/TLE-SAC/images/logo3.png" alt="" style="background: rgba(0, 0, 0, 0.35)" /><br>
                            
                            <? include "https://landscapearchitect.com/TLE-SAC/clock-timer-modays.php"; ?><br>
                            
                            <center>
                            <span style="font-size:32px; background: rgba(0, 0, 0, 0.35);">Exhibitor Registration</span>
                            </center>
                            
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
                      
                      window.location.href = "https://landscapearchitect.com/subscriptions/thank_you-lb4.php?firstname2="+first+"&lastname2="+last+"&emailB2="+email;}
                      
                </script>                            
                            
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
						<h3 id="numralh3">Thank You for Your Comments</h3><br>
						<img width="40%" src="https://landscapearchitect.com/lol-logos/TLE-SAC-2016-Logo.jpg">

					<!-- One -->
						<section id="adjus4" class="wrapper style4 special container 75%">

							<!-- Content -->
								<div class="content">
                                
								<p>You will receive a response within 24 hours.</p>                    
                                
                         		</div>
                         </section>                      
                
	
				</article>






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
													echo "<section><a href='https://landscapearchitect.com/TLE-SAC/transfer/" . $row[web] . "' target='_blank'><img width='50%' src='https://landscapearchitect.com/TLE-SAC/images/sponsors/" . $row[picture] . "' alt='' /></a>
										</section><br>";
										 			$i++;
     											}
											}
									?>                                     
                                                                                
										<hr />
                                        
										<section>
											<a href="#" class="image fit"><img src="https://landscapearchitect.com/research/TLE/images/TLE-SAC-15-thur-0890.jpg" alt="" /></a>
											<h3 id="numralh3">Why Attend the Expo?</h3>
											<p>To Help Your Business & Career - See the Newest Equipment and Products</p>
											<footer>
												<ul class="actions">
													<li><a href="#" class="button special">Learn More</a></li>
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
													echo "<section><a href='https://landscapearchitect.com/TLE-SAC/transfer/" . $row[web] . "' target='_blank'><img width='50%' src='https://landscapearchitect.com/TLE-SAC/images/sponsors/" . $row[picture] . "' alt='' /></a>
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
													<li><a href="index-tle-2016.php#semsch" class="button special">Learn More</a></li>
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
										<center><h3 id="numralh3">Send Your Staff to the Expo </h3>
										<p><span style="font-weight:bold">Make Attending the Expo a Corporate Event!<br>
										To Help Your Business & Career<br>
										See the Newest Equipment and Products</span></p><br>
                                        		• Negotiate Year End and 2017 Equipment Deals<br>
												• Get More from Your 2016 and 2017 Budgets<br>
												• Negotiate Supply Contracts<br>
												• Find New Suppliers / Lower Expenses<br>
												• See State-of-the-Art Technologies and Techniques<br>
												• Connect with Old Friends & Build Your Network<br>
										</center>
									</section><br><br>

							</div>
						</div>
					</div>
                    
               		<div>
						<center><a href="https://landscapearchitect.com/TLE-SAC/transfer/coastline-ban-TLE-SACtrans.html"><img width="80%" src="https://landscapearchitect.com/TLE-SAC/images/sponsors/coastline-banner.jpg" alt="" style="box-shadow: 5px 5px 5px #888888"/></a></center>
					</div>                     
                    
				</div> </center>                       

						<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="inner">
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
                                    
										<? include("tle-lb-bottom.inc"); ?>

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

include("lo_mo_footer-main-tlelb-16-pg.inc");

?>