
<?

	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$comp_name = $_POST['conam'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$brand = $_POST['brand'];

	$biz_title = $_POST['title'];

	$name = $_POST['fname'] . " " . $_POST['lname'];



	$iam1 = $iam[0];
	$iam2 = $iam[1];
	$iam3 = $iam[2];
	$iam4 = $iam[3];
	$iam5 = $iam[4];
	$iam6 = $iam[5];
	$iam7 = $iam[6];
	$iam8 = $iam[7];
	$iam9 = $iam[8];
	$iam10 = $iam[9];
	$iam11 = $iam[10];
	$iam12 = $iam[11];
	$iam13 = $iam[12];
	$iam14 = $iam[13];
	$iam15 = $iam[14];
	$iam16 = $iam[15];
	$iam17 = $iam[16];
	$iam18 = $iam[17];
	$iam19 = $iam[18];
	$iam20 = $iam[19];
	$iam21 = $iam[20];
	$iam22 = $iam[21];
	$iam23 = $iam[22];
	$iam24 = $iam[23];
	$iam25 = $iam[24];
	$iam26 = $iam[25];
	$iam27 = $iam[26];
	$iam28 = $iam[27];
	$iam29 = $iam[28];
	$iam30 = $iam[29];
	$iam31 = $iam[30];
	$iam32 = $iam[31];
	$iam33 = $iam[32];






		
	if ((!empty($iam1)) || (!empty($iam2)) || (!empty($iam3)) || (!empty($iam4)) || (!empty($iam5)) || (!empty($iam6)) || (!empty($iam7)) || (!empty($iam8)) || (!empty($iam9)) || (!empty($iam10)) || (!empty($iam11)) || (!empty($iam12)) || (!empty($iam13)) || (!empty($iam14)) || (!empty($iam15)) || (!empty($iam16)) || (!empty($iam17)) || (!empty($iam18)) || (!empty($iam19)) || (!empty($iam20)) || (!empty($iam21)) || (!empty($iam22)) || (!empty($iam23)) || (!empty($iam24)) || (!empty($iam25)) || (!empty($iam26)) || (!empty($iam27)) || (!empty($iam28)) || (!empty($iam29)) || (!empty($iam30)) || (!empty($iam31)) || (!empty($iam32)) || (!empty($iam33))) {




	$am_id = $iam1 . "," . $iam2 . "," . $iam3 . "," . $iam4 . "," . $iam5 . "," . $iam6 . "," . $iam7 . "," . $iam8 . "," . $iam9 . "," . $iam10 . "," . $iam11 . "," . $iam12 . "," . $iam13 . "," . $iam14 . "," . $iam15 . "," . $iam16 . "," . $iam17 . "," . $iam18 . "," . $iam19 . "," . $iam20 . "," . $iam21 . "," . $iam22 . "," . $iam23 . "," . $iam24 . "," . $iam25 . "," . $iam26 . "," . $iam27 . "," . $iam28 . "," . $iam29 . "," . $iam30 . "," . $iam31 . "," . $iam32 . "," . $iam33;

	} else {
		
		$am_id = '';
		
	}





?>

<?

// Top Section - HTML

include '../../includes/la-common-top-inner.php';

include '../../includes/la-common-header-inner.inc';



	$uname2 = $_SESSION['name'];

	$ucode = $_SESSION['user'];

?>
	
	
<?




		function generatePassword($length = 8) {
			$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$count = mb_strlen($chars);

			for ($i = 0, $result = ''; $i < $length; $i++) {
				$index = rand(0, $count - 1);
				$result .= mb_substr($chars, $index, 1);
			}

			return $result;
		}





?>


<title>LA Details - Registration</title>

	
  <div style="position: relative; top: -20px">
	  

	  

	  
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
												$username = "land_patchew";
												$password = "59q2GB6k$3";
												$dbname = "land_landscap_lollive";

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
									
									
									
									
									
									
									<span style="font-size: 28px; font-weight: bold">Thank you for your Registration
									
									
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
					  
	
						  	<?
					  
					  
								

					  
					  
					  
								$link = mysqli_connect("localhost", "landscap_lol", "meow2meow", "landscap_lollive");

								// Check connection
								if($link === false){
									die("ERROR: Could not connect. " . mysqli_connect_error());
								}

								// Attempt insert query execution
										$sql = "INSERT INTO subscribe (first_name, last_name, comp_name, email, biz_title, am_id, brand, pass)
										VALUES ('$first_name', '$last_name', '$comp_name', '$email', '$biz_title', '$am_id', '$brand', '$pass')";
					  
					  
								if(mysqli_query($link, $sql)){
									echo "<br><center><h3>Your information has added successfully</h3><br></center>";
								} else{
									echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
								}

								// Close connection
								mysqli_close($link);					  
					  
					  
					  
					  
					  
					  			echo "<center><h3>Welcome " . $name . "</h3></center>";
					  			echo "<center><h3>Your Password is: " . $pass . "</h3></center>";
					  			echo "<center><p>Your Password has been emailed to you.</p></center>";
					  
					  	
									$to      = $email;
									$subject = 'Your new LADetails password';
									$message =  "Welcome $name \n" .
                                            "Your New Password is: $pass \n".
                                            "The largest landscape oriented database on the web!" ;
									$headers = 'From: webmaster@ladetails.com' . "\r\n" .
										'Reply-To: webmaster@landscapeonline.com' . "\r\n" .
										'X-Mailer: PHP/' . phpversion();

									mail($to, $subject, $message, $headers);
					  
					  
					  
					  
					  		?>
						  
	
					  
	
							<!-- Lost Password End -->
					  

					  
					  

					</div> 
					
					

					
					

				  <div class="sidebar">
					  
							<!-- Keyword Search Start -->
					  
								<div class="keyWord">

										 <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Keyword Search: <? echo $keywordSE; ?></h3></center>

											<form method="post" action="index-search.php" target="_blank">

												<center>

												<input type="text" name="keywrd" value="<? echo $keywordSE ?>" style="width: 50%; height: 20px; box-shadow: 5px 5px 5px #888888; padding: 3px; position: relative; top: -20px" placeholder="Please enter Keyword"><input type="image" value="Go" width="34px" src="https://landscapearchitect.com/images/mag-button.png"  class ="sch" id="sch" onmouseover="this.src='https://landscapearchitect.com/images/mag-button-over.png';"  onmouseout="this.src='https://landscapearchitect.com/images/mag-button.png';" style="position: relative; top: -7px" /><br><br>
													<!-- <input type="submit" value="Submit" style="background-color: #4fb548; position: relative; left: -10px; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"> -->

												</center>

											</form>

								  </div>					  
					  
							<!-- Keyword Search End -->
					  
					  
							<!-- Refine Search Start -->
					  
					  				<section>
					  
				  					<div style="position: relative; left: 0px; top: -150px; padding-bottom: 0px">
									
									<select onchange="if (this.value) window.location.href=this.value">
										<option value="">Refine Search <span style="font-size: 12px">(Companies with Matching Products)</span></option>




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
																					echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub-js4.php?ad=' . $cat1 . '&number='. $row['id'] . '&catName='. $row['name'] . '&catMain='. $cat3 . '"><span style="font-family: Helvetica, Arial; font-size: 14px">'. $row['name'] . ' ('. $rowcount55 . ')</span></option>';
																				}

																		}

																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub-js4.php?ad=' . $cat1 . '&number='. $cat2 . '&catName='. $cat4 . '&catMain='. $cat3 . '&kind=8">View All Products</option>';



																?>		  								


												  </select>


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
	
	