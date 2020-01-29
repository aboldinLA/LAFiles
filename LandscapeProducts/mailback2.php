<?

// Top Section - HTML
include("lad_top-main.inc");

	$uname2 = $_SESSION['name'];

	$ucode = $_SESSION['user'];

?>
	

	  
	<link href="css/lad-format.css" rel="stylesheet" id="bootstrap-css">
	  
  
	  

	  
  	  					<div style="padding-bottom: 75px">
						<div class="row">
						  <div class="col-md-12">
								
								
							<div class="row">
								<div class="col-md-4" id="topBar">
									
									<img width="100%" style="margin: 10px" src="https://landscapearchitect.com/lol-logos/la-details-logo.jpg"> <? if  (!empty($_GET['uname2'])) { ?><h4>Welcome: <? echo $_GET['uname2']; ?></h4><? } else { echo "&nbsp;";}?>
									
								</div>
								<div class="col-md-4" id="topBar2">
									
									<?
									

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
									
									
																		$cat2 = $_GET['number'];
									
									
																			$sql533 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $cat2 ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result533 = $conn->query($sql533);

																			$rowcount533=mysqli_num_rows($result533);
									
									
									
									
									
									
									?>
									
									
									
									
									
									
									<span style="font-size: 28px; font-weight: bold">Lost Password
									
									
								</div>
								<!-- <div class="col-md-4" id="topBar3">
									
								  <span style="font-size: 18px; font-weight: bold">
									<select onchange="if (this.value) window.location.href=this.value">




																<?

																		$cat1 = $_GET['ad'];
																		$cat2 = $_GET['number'];
																		$cat3 = $_GET['catMain'];
																		$cat4 = $_GET['catName'];


																			$sql1 = "SELECT * FROM xlist WHERE idParent = '" . $cat1 ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
																		$result1 = $conn->query($sql1);									

																	// category section

																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-js3.php?ad='. $cat1 . '">Top Level</option>';

																		while($row = mysqli_fetch_array($result1)) {



																			$sql33 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $row['id'] ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result33 = $conn->query($sql33);

																			$rowcount33=mysqli_num_rows($result33);


																			$sql44 = "SELECT * FROM new_vendor WHERE xlist LIKE '%". $row['id'] ."%' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result44 = $conn->query($sql44);

																			$rowcount44=mysqli_num_rows($result44);


																			$sql55 = "SELECT DISTINCT vendor_id FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist='". $row['id'] ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result55 = $conn->query($sql55);

																			$rowcount55=mysqli_num_rows($result55);				

																				if ($rowcount33 != 0){
																					echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub-js4.php?ad=' . $cat1 . '&number='. $row['id'] . '&catName='. $row['name'] . '&catMain='. $cat3 . '&uname2=' . $uname2 . '"><span style="font-family: Helvetica, Arial; font-size: 14px">'. $row['name'] . ' ('. $rowcount55 . ')</span></option>';
																				}

																		}

																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub-js4.php?ad=' . $cat1 . '&number='. $cat2 . '&catName='. $cat4 . '&catMain='. $cat3 . '&kind=8&uname2=' . $uname2 . '">View All Products</option>';



																?>		  								




									  </select>

								  </span>
									
								</div> -->								
								
							</div>
																
								
							</div>
	  					</div>
						</div>
	  

	  
							
	
							
							
				<div class="flexbox-container colShift">

				  <div class="main">
					  
	
						  
						  
						  
					  
					  
					  
					  
					  
							<!-- Lost Password Start -->
					  
					  		<section>
								
								
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
                                            
                                            echo '<font size="4"><strong>Your password for your account will be sent to your email address on record.<br>Remember to also check your junk mail.</strong></font><br /><br />';
                                            echo '&nbsp;' . '<br />';
                                                }
                                        
                                        ?>								
								

								

	
					 					  
					  		</section>
	
							<!-- Lost Password End -->
					  
							<script type="text/javascript">setTimeout("window.close();", 3000);</script>

					  
					  

					</div> 
					
					

					
					

				  <div class="sidebar">
					  
		

											</div>	
					  
					  			</section>
					  
					  
							<!-- Refine Search End -->
					  										  
					  					  
					  
							<!-- Banners Start -->
					  
					  
							<div class="adShift2">
					  
							<?

							// Category Banners
							include("banner-LAD.inc");

							?>
								
				  			</div>	
								
					  
							<!-- Banners End -->

				  </div>	



				</div>									
							
							
							
							
	
			  
			  
	
				  
			
		

	
  </div>


	
	

<!-- <hr noshade width="40%" style="text-align: left"> -->

				
				
				
				
				
				
				
  </div>
</div>
	
	
	
	


	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>
	
	