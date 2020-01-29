<?

include("lo_mo_top-main-tlesac-16-pg.inc");

?>


				<!-- Top -->
					<article id="main">
						<header>
							<!-- <img src="images/logo3.png" alt="" style="background-color:#2C2A2A; border-color:#FFFFFF; border:solid; border-width:thin" /><br> -->
							<img src="https://landscapearchitect.com/TLE-SAC/images/logo3.png" alt="" style="background: rgba(0, 0, 0, 0.35)" /><br>
                            <center><span style="font-size:32px; background: rgba(0, 0, 0, 0.35);">Express Registration Login</span></center>
                            
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
                            
							</ul>
                            
						</header>
						<section class="wrapper style5">
                            
                        <!-- Main2 -->
						<center><h1 id="headh1">Register with a Password</h1></center>
				<center><div id="main2">
					<div>
						<div class="row 150%">
							<div class="8u 12u$(medium)">

								<!-- Content -->
									<section>
                                    <center><h3 id="numralh3">Welcome to the<br>
                                    Express Registration</h3>
                                    <h4>Enter Password Here</h4>
                                    
                                    <div>
                                            <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
                                                <? if ($t == "ad") {?>
                                                    <label for="demo-name1">Login:</label>
                                                <? } ?>

													<input type="password" name="password" id="demo-name1" MAXLENGTH="10" placeholder="Enter Password" style="background-color:#C2C0C0; width:20em" ><br>
                                                    <script type="text/javascript" lang="javascript">
                                                    <!--
                                                        <? if ($t == "ad") { ?>
                                                        document.loginform.email.focus();
                                                        <? } else { ?>
                                                        document.loginform.password.focus();
                                                        <? } ?>
                                                    // -->
                                                    </script>
                                               
                                                <?
                                                    if ( !$_SESSION['np'] && $t == "ad"){
                                                        $new_npage = "/private/index.php";
                                                    } else 	if ( !$_SESSION['np'] && $t == "v"){
                                                        $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                                                    } else {
                                                        $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                                                    }
                                                ?>
                                                    <INPUT TYPE="submit" VALUE="Login" class="button special">
                                                        <input type="hidden" name="npage" value="<?=$new_npage?>">
                                                        <input type="hidden" name="action" value="login">
                                                        <input type="hidden" name="t" value="<?=$t?>"></FORM>
                                         
                                    </div>
                                    </form>
                                    
                                        <div>
                                                <p>If you don't have a password, <a href="/subscriptions/subscribe-sac-2016-js2.php?action=new"><span style="color:#083A92">Click Here.</span></a></p><br>
                                        </div>
                                        
                                        <div>
                                        		<p>Use your Password from<br>
                                                your magazine or promotional label</p>
                                        
                                            <img src="https://landscapearchitect.com/member/images/subscriber-back-tle2.jpg" alt="contact-back.jpg" border="0">
                                        </div>
                                    	<div>
       
    									<p>If you have lost or can not find your password:</p>
										<h3 id="numralh3">Password Request</h3><br>
                                        
                                            <form action="mailback.php" name="passform" method="POST">
                                                <div >
                                                    <label for="firstname">First name:</label>
                                                    <input type="text" id="firstname" name="firstname" placeholder="First Name" style="background-color:#C2C0C0; width:20em" />
                                                </div><br>
                                                <div>
                                                    <label for="lastname">Last name:</label>
                                                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" style="background-color:#C2C0C0; width:20em" />
                                                </div>	<br>	
                                            <div>
                                                    <label for="email">Email Address:</label>
                                                    <input type="text" id="email" name="email" placeholder="Email Address" style="background-color:#C2C0C0; width:20em" />
                                                </div><br>		
                                                <div>
                                                    <input type="submit" value="Submit" name="submit" class="button special" />
                                                </div>
                                            </form>                                         
                                        
                                        </center>

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
													<li><a href="https://landscapearchitect.com/TLE-SAC/index-tle-sac-2016.php#one" class="button" target="_blank">Learn More</a></li>
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
													<li><a href="index-tle-sac-2016.php#semsch" class="button special" target="_blank">Learn More</a></li>
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