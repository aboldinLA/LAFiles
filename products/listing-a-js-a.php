
<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	
		<?
			include("lo_top-main2-side2-js50.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side2-js-banner.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			
									<style>
										.tooltip3 {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
										}

										.tooltip3 .tooltiptext {
											visibility: hidden;
											width: 150px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px 0;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											left: 50%;
											margin-left: -60px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip3 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											left: 50%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip3:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
									</style>							
		

		
									<?
									
										// Article Start

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


										// start article from table
							
											$key2 = $_GET[number];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												$coName = $row["company_name"];
													
												
									?>                                                               
                                
										<center><h2>Vendor Profile</h2></center><br><br>
		
										
										<? echo  "<img src='https://landscapearchitect.com/products/images/" . $row["logo"] . "' style='width: 100%; max-width: 350px'><br><br>"; ?>
										<? echo  "<h3><a href='https://www.google.com/maps/place/" . $row['address'] . ",+" . $row['city'] . ",+" . $row['state'] . "+" . $row['zip'] . "' target='_blank'><div class='tooltip3'>" . $row["company_name"] . "<span class='tooltiptext'>Click For Directions</span></div></a></h3>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Address:<span style='font-weight: 200'> " . $row["address"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>City/State/Zip:<span style='font-weight: 200'> " . $row["city"] . ",&nbsp;" . $row["state"] . ",&nbsp;" . $row["zip"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Phone:<span style='font-weight: 200'> " . $row["phone"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>FAX:<span style='font-weight: 200'> " . $row["fax"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Website:<span style='font-weight: 200'> <a href='http://" . $row["website"] . "' target='_blank'>" . $row["website"] . "</span></a></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Contact:<span style='font-weight: 200'> <a href='http://" . $row["contact_us"] . "' target='_blank'>More Information</a></span></h4>"; ?>
										<? echo  "<p style='line-height: 7px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Vendor Profile:<span style='font-weight: 200'> " . $row["profile"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 10px'>&nbsp;</p>"; ?>
										
									<? } ?>
		
									<div style='width:750px; height:2px; background-color:#605b51; position: relative; left: -10px'> </div><br>
		
		
										<center><h2>Brands Offered by <? echo $coName;  ?></h2></center>
		
										<table cellspacing="5px">
											<tr>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/accuform.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Aquamaster.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Christys-Logo.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Corona_Logo.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/edgopro.jpg"></td>
											</tr>
											<tr><td style="line-height: 5px">&nbsp;</td></tr>
											<tr>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/elvex.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/lesco.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/pave-tech.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/rainbird.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/VistaProLogo.jpg"></td>
											</tr>											
											
										</table><br>
		
									<div style='width:750px; height:2px; background-color:#605b51; position: relative; left: -10px'> </div><br>
		
		
								<style>
									button.accordion {
										background-color: #eee;
										color: #444;
										cursor: pointer;
										padding: 18px;
										width: 100%;
										border: none;
										text-align: left;
										outline: none;
										font-size: 15px;
										transition: 0.4s;
									}

									button.accordion.active, button.accordion:hover {
										background-color: #ccc; 
									}

									div.panel {
										padding: 0 18px;
										display: none;
										background-color: white;
									}
									</style>


									<h2>Brands Offered by <? echo $coName;  ?></h2>

									<button class="accordion">Irrigation</button>
									<div class="panel">
									  	<p>
										<table cellspacing="5px">
											<tr>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/accuform.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Aquamaster.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Christys-Logo.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Corona_Logo.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/edgopro.jpg"></td>
											</tr>
										</table><br>
										</p>
									</div>

									<button class="accordion">Landscape Supply</button>
									<div class="panel">
									  	<p>
										<table cellspacing="5px">
											<tr>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/accuform.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Aquamaster.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Christys-Logo.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/Corona_Logo.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/edgopro.jpg"></td>
											</tr>
											<tr><td style="line-height: 5px">&nbsp;</td></tr>
											<tr>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/elvex.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/lesco.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/pave-tech.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/rainbird.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/VistaProLogo.jpg"></td>
											</tr>											
											
										</table><br>
										</p>
									</div>

									<button class="accordion">Plants</button>
									<div class="panel">
									  <p>
									  <table cellspacing="5px">
											<tr>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/elvex.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/lesco.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/pave-tech.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/rainbird.jpg"></td>
												<td><img width="100%" src="https://landscapearchitect.com/logos-co/VistaProLogo.jpg"></td>
											</tr>
									  </table><br>
										</p>
									</div>
									<p><br>
									  <br>
									  
	</p>
									<p>
  <script>
									var acc = document.getElementsByClassName("accordion");
									var i;

									for (i = 0; i < acc.length; i++) {
										acc[i].onclick = function(){
											this.classList.toggle("active");
											var panel = this.nextElementSibling;
											if (panel.style.display === "block") {
												panel.style.display = "none";
											} else {
												panel.style.display = "block";
											}
										}
									}
									</script>
									  
									  
									  
									  
									  
									  
									  <?
									
										// Products Start


										// start article from table
							
											$key3 = $_GET[number];							
											//$key2 = "28909";

											$sql5 = "select * from vendor_product where vendor_id='" . $key3 . "' AND imported != '1' ORDER BY photo_time DESC";
											$result5 = $conn->query($sql5);									
									
										// banner rotating section
		
											echo "<br><center><h2>Products</h2></center>";
											echo  "<p style='line-height: 10px'>&nbsp;</p>";
		
											while($row = mysqli_fetch_array($result5)) {
													
												
									?>                                                               
									  
			  </p>
									<div>
                                        <table>
                                        	<tr valign="top">
                                           	
											
												<?	if ($row['web'] == 'video') {

												?>
                                          	
                                           	<td><? 
	
												
												$rpho = $row['web_photo'];
												
												if (!empty($row['web_photo'])) {
													echo $row['web_photo'];
												} else {
													echo $row['web'];
												}
												
												
												 $row['web_photo'] ?></td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td valign="middle"><h3><? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) ?></h3>
                                                <? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['description']))); ?><br>
                                                <strong>Video Link:</strong> Click on image to watch video
                                            	</td>
                                        	</tr>
                                         </table>
                                         <p style='line-height: 5px'>&nbsp;</p><hr><p style='line-height: 5px'>&nbsp;</p>
									</div>
											<?										
										
												} else {                                           	
                                           	
                                           	
                                           	?>
                                           	
                                           	
                                            	<td><a href="<? 
	
												
												$rpho = $row['web_photo'];
												
												if (!empty($row['web_photo'])) {
													echo $row['web_photo'];
												} else {
													echo $row['web'];
												}
												
												
												?>" target="_blank">
                                              
                                              
                                                <?
										
													if (empty($row['photo2'])) {
										
										
												?>
                                                
                                               <img width="350px" src="https://landscapearchitect.com/products/images/<? echo  $row['photo'] ?>"></a></td>
                                               
                                               <?
													} else {
													
												?>
                                              
                                               <img width="350px" src="https://landscapearchitect.com/products/images/<? echo  $row['photo'] ?>"><br><br>
                                               <img width="350px" src="https://landscapearchitect.com/products/images/<? echo  $row['photo2'] ?>"></a></td>
                                               
                                               <?
													}
													
												?>
                                              
                                               
                                               
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td valign="middle"><h3><? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) ?></h3>
                                                <? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['description']))); ?><br><br>
                                                <a href="<? echo  $row['web_photo'] ?>" target="_blank">Click to View Product</a>
                                            	</td>
                                        	</tr>
                                         </table>
                                         <p style='line-height: 5px'>&nbsp;</p><hr><p style='line-height: 5px'>&nbsp;</p>
									</div>
										
										
									<? } }?>										
											
		
		
		
		
		
	
	
	</div>

				<?


										// start outlet

											$key4 = $_GET['number'];							

											$sql = "SELECT * FROM new_vendor WHERE outlets='" . $key4 . "' ORDER BY zip ASC";
											$result = $conn->query($sql);									
									
												
											   	$xx = 0;
												$zCount = 0;
												$rowcount=mysqli_num_rows($result);
						

										// If Outlet

											if ($rowcount != 0) {





				?>


				<div style="position:absolute; left: 750px; top: 350px">
					
					<center><h3 style="width: 270px; height: 30px; padding: 3px; font-family: Helvetica, Arial, 'sans-serif'; background-color: darkgoldenrod"><a href="#outletarea"><span style="color: #FFFFFF">View More Vendor Locations</span></a></h3></center>

				</div>

				<a name="outletarea">&nbsp;</a>



	<div style="position:relative; left: -25px; top: 25px; z-index: 0">
		
		<center><h3 style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; padding-left: 20px">Outlet Locations<br><span style="font-size: 12px"> Sorted By Zip Code - Click on Company Name for Directions</span></h3><br></center>
	
						
					<div style="position:relative; left: 100px">
									<!-- Top Address Start -->
						
									<style>
										.tooltip {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
										}

										.tooltip .tooltiptext {
											visibility: hidden;
											width: 150px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px 0;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											left: 50%;
											margin-left: -60px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											left: 50%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
									</style>					
						
								
									<?
									
									


										// start for the banner add counting and getting from table

											$key4 = $_GET['number'];							

											$sql = "SELECT * FROM new_vendor WHERE outlets='" . $key4 . "' ORDER BY zip ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   	$xx = 0;
												$zCount = 0;
												$rowcount=mysqli_num_rows($result);
						
						
					   
					   							$i = 1;
					   							echo "<table width='700px'>"; 
					   
											   while($row = mysqli_fetch_assoc($result)) {
												 if ($i == 1) {
													 echo "<tr>";
												  } 
												   echo "<td class='logowidth2'><a href='https://www.google.com/maps/place/" . $row['address'] . ",+" . $row['city'] . ",+" . $row['state'] . "+" . $row['zip'] . "' target='_blank'><div class='tooltip'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['company_name']))) . "<span class='tooltiptext'>Click For Directions</span></div></a><br>" . $row['phone'] . "<br>" . $row['city'] . ", " . $row['zip'] . "</td>"; 
												 if ($i == 3) {
													 $i = 1;
													 echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr>";
												  }
												  else {
													 $i++;
												  }
												}

												echo "</table>";  
					   
					   							//  <!-- Top Logo End -->
												
												
											}

					   
					   
					   
					?>
					

	</div>

	</div>


			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





