<?
include '../../includes/la_top-common.php';
//include("../../includes/lo_common_new.inc");

$action = $_GET['action'];

$action2 = $_GET['action'];

$uid = $_GET['id'];

$id = $_GET['id'];



?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
		include("../../includes/la_header-common.inc");
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
			include("lo_banner-common-vendor.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		     include("../../includes/la_left-side-common4.inc");
                
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
                
                <?

                      include '../../includes/connect4.inc';

											$key5 = $_GET['id'];	
		
											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											  $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                echo "<div style='width:90%'><center><span style='font-family:Arial, Helvetica, sans-serif; font-size:28px; font-weight:bold; position: relative; left: 15px'>Welcome!</span><br><br><span style='font-size:24px; font-weight:bold; position: relative; left: 15px'>" . $row['company_name'] . "</span></center></div>";
    
                                               }

                ?>
                
          <span style="font-size:16px"><center><br />Scroll down for <strong>Sales Lead Retrieval</strong> or to edit your company information, add or delete<br />search engine categories, update regional outlets, and manage product profile.</center><br />                
                
                
				<?
		
									// Category Name Start

                                        include '../../includes/connect4.inc';

	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   
											   while($row = mysqli_fetch_assoc($result)) {
												   
												  	$tier =  $row['status'];
												 	$ventype = $row['vendor_type_id'];
												   
												   
												   if (($ventype == 4) || ($ventype == 6)) {
												   
												   
												   
												   	$hstate = $row['state'];
												   
												   
												   
												   		$sql43 = "SELECT DISTINCT state FROM new_vendor WHERE outlets='" . $key5 . "' AND info_request = '1' ORDER BY state ASC ";
														$result43 = $conn->query($sql43);
												   
    													$num_rows = mysqli_num_rows($result43);
												   
												   		$yy = 1;

												   
												   	while($row = mysqli_fetch_assoc($result43)) {
														
														
														$tstate =  $row['state'];
														
														if ($tstate == 'AL') {
															$stateAL = 'yes';
														}
														
														if ($tstate == 'AK') {
															$stateAK = 'yes';
														}
														
														if ($tstate == 'AZ') {
															$stateAZ = 'yes';
														}
														
														if ($tstate == 'AR') {
															$stateAR = 'yes';
														}
														
														if ($tstate == 'CA') {
															$stateCA = 'yes';
														}															
														
														if ($tstate == 'CO') {
															$stateCO = 'yes';
														}															
														
														if ($tstate == 'CT') {
															$stateCT = 'yes';
														}
														
														if ($tstate == 'DE') {
															$stateDE = 'yes';
														}															
														
														if ($tstate == 'FL') {
															$stateFL = 'yes';
														}															
														
														if ($tstate == 'GA') {
															$stateGA = 'yes';
														}															
														
														if ($tstate == 'HI') {
															$stateHI = 'yes';
														}															
														
														if ($tstate == 'ID') {
															$stateID = 'yes';
														}															
														
														if ($tstate == 'IL') {
															$stateIL = 'yes';
														}															
														
														if ($tstate == 'IN') {
															$stateIN = 'yes';
														}	
														
														if ($tstate == 'IA') {
															$stateIA = 'yes';
														}															
														
														if ($tstate == 'KS') {
															$stateKS = 'yes';
														}	
														
														if ($tstate == 'KY') {
															$stateKY = 'yes';
														}															
														
														if ($tstate == 'LA') {
															$stateLA = 'yes';
														}															
														
														if ($tstate == 'ME') {
															$stateME = 'yes';
														}															
														
														if ($tstate == 'MD') {
															$stateMD = 'yes';
														}															
														
														if ($tstate == 'MA') {
															$stateMA = 'yes';
														}															
														
														if ($tstate == 'MI') {
															$stateMI = 'yes';
														}															
														
														if ($tstate == 'MN') {
															$stateMN = 'yes';
														}															
														
														if ($tstate == 'MS') {
															$stateMS = 'yes';
														}															
														
														if ($tstate == 'MO') {
															$stateMO = 'yes';
														}															
														
														if ($tstate == 'MT') {
															$stateMT = 'yes';
														}															
														
														if ($tstate == 'NE') {
															$stateNE = 'yes';
														}	

														if ($tstate == 'NV') {
															$stateNV = 'yes';
														}															
														
														if ($tstate == 'NH') {
															$stateNH = 'yes';
														}															
														
														if ($tstate == 'NJ') {
															$stateNJ = 'yes';
														}															
														
														if ($tstate == 'NM') {
															$stateNM = 'yes';
														}															
														
														if ($tstate == 'NY') {
															$stateNY = 'yes';
														}															
														
														if ($tstate == 'NC') {
															$stateNC = 'yes';
														}															
														
														if ($tstate == 'ND') {
															$stateND = 'yes';
														}	
														
														if ($tstate == 'OH') {
															$stateOH = 'yes';
														}															
														
														if ($tstate == 'OK') {
															$stateOK = 'yes';
														}															
														
														if ($tstate == 'OR') {
															$stateOR = 'yes';
														}															
														
														if ($tstate == 'PA') {
															$statePA = 'yes';
														}	
														
														if ($tstate == 'RI') {
															$stateRI = 'yes';
														}															
														
														if ($tstate == 'SC') {
															$stateSC = 'yes';
														}															
														
														if ($tstate == 'SD') {
															$stateSD = 'yes';
														}															
														
														if ($tstate == 'TN') {
															$stateTN = 'yes';
														}															
														
														if ($tstate == 'TX') {
															$stateTX = 'yes';
														}															
														
														if ($tstate == 'UT') {
															$stateUT = 'yes';
														}															
														
														if ($tstate == 'VT') {
															$stateVT = 'yes';
														}	
														
														if ($tstate == 'VA') {
															$stateVA = 'yes';
														}															
														
														if ($tstate == 'WA') {
															$stateWA = 'yes';
														}															
														
														if ($tstate == 'WV') {
															$stateWV = 'yes';
														}															
														
														if ($tstate == 'WI') {
															$stateWI = 'yes';
														}
														
														if ($tstate == 'WY') {
															$stateWY = 'yes';
														}															
														
														
													}
												   												   
							//$companyId = $_GET['id'];					   
														
		
		
				?>
				
				
				
			<!-- Regional Tiers Start -->	
									<style>
										.tooltip5 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
										}

										.tooltip5 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											left: 50%;
											margin-left: -60px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip5 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											left: 50%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip5:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
										
										.tooltip6 {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
										}

										.tooltip6 {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
										}

										.tooltip6 .tooltiptext {
											visibility: hidden;
											width: 500px;
											background-color: #555;
											color: #FFFFFF;
											text-align: center;
											border-radius: 6px;
											padding: 5px;

											/* Position the tooltip */
											position: absolute;
											z-index: 1;
										}

										.tooltip6:hover .tooltiptext {
											visibility: visible;
										}
										
										
									</style>						
				
				
				
				
				
				
				
				<center>
					
		<table>
				<tr>
					<td valign="top" rowspan="11">
					
					<center><table cellspacing="10px" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 18px">
						<tr>
							<td colspan="2"><h2 style="font-family:Arial, Helvetica, sans-serif; color: #F60004"><center>Your Local Wholesale &amp;<br />Plant Search Status is:</center></h2></td>
						</tr>
						
						<tr>
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==12){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip5'>You Dominate<span class='tooltiptext'>You are active in the LandscapeOnline Local Wholesale and Plant Material Search Engine, with your Logo at the top of all related searches in your chosen state(s), links to an expanded Vendor Profile, lists and locations of your outlets, and the logos of the major brands each outlet offers. Also includes premiere listing in the relevant vendor listings in both the Landscape Architect and Landscape Contractor magazines  (Requires <a href="https://landscapearchitect.com/abante" target="_blank" style="color: #ffffff;"><u>Online purchase</u></a> or booth space in the upcoming <a href="https://landscapearchitect.com/TLE-LB/index-tle-2018.php" target="_blank" style="color: #ffffff;"><u>Landscape Expo</u></a>.)</span></div></center></td>
					
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==2){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip5'>You Have a Basic Listing<span class='tooltiptext'>Your location with your phone number and a link to Google maps will appear for each location in the state(s) with your outlets.</span></div></center></td>						
						</tr>
						
						<tr>
							<td colspan="2"><a href="https://landscapearchitect.com/abante/index.php?rt=product/product&product_id=137" target="_blank"><h1 style="font-family:Arial, Helvetica, sans-serif; color:#9B6A17; text-decoration: underline"><center>Enhance My Profile!</center></h1></a>
							</td>
						</tr>
					</table></center>
						
					</td>
					
					<td width="25px">&nbsp;</td>
					
					<td>
						<center><table width="100%">
						<tr>
							<td colspan="5"><h2 style="font-family:Arial, Helvetica, sans-serif; color: #F60004">Your Dominator States are:</h2></td>
						</tr>
							
						<tr>
							<td colspan="5"><h3 style="font-family:Arial, Helvetica, sans-serif; font-size: 20px"><center><span style="color: chartreuse; -webkit-text-stroke: 0.5px #000000;">Home State</span>&nbsp;&nbsp;&nbsp;<span style="color: #5cedf2; -webkit-text-stroke: 0.5px #000000;">Outlet State</span></center></h3></td>
						</tr>							
							
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AL'){ echo "background-color: chartreuse"; } elseif ($stateAL == 'yes') { echo "background-color: #5cedf2"; } ?>">AL</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'HI'){ echo "background-color: chartreuse"; } elseif ($stateHI == 'yes') { echo "background-color: #5cedf2"; } ?>">HI</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MA'){ echo "background-color: chartreuse"; } elseif ($stateMA == 'yes') { echo "background-color: #5cedf2"; } ?>">MA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NM'){ echo "background-color: chartreuse"; } elseif ($stateNM == 'yes') { echo "background-color: #5cedf2"; } ?>">NM</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'SD'){ echo "background-color: chartreuse"; } elseif ($stateSD == 'yes') { echo "background-color: #5cedf2"; } ?>">SD</td>
							</tr>	
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AK'){ echo "background-color: chartreuse"; } elseif ($stateAK == 'yes') { echo "background-color: #5cedf2"; } ?>">AK</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'ID'){ echo "background-color: chartreuse"; } elseif ($stateID == 'yes') { echo "background-color: #5cedf2"; } ?>">ID</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MI'){ echo "background-color: chartreuse"; } elseif ($stateMI == 'yes') { echo "background-color: #5cedf2"; } ?>">MI</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NY'){ echo "background-color: chartreuse"; } elseif ($stateNY == 'yes') { echo "background-color: #5cedf2"; } ?>">NY</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'TN'){ echo "background-color: chartreuse"; } elseif ($stateTN == 'yes') { echo "background-color: #5cedf2"; } ?>">TN</td>
							</tr>	
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AZ'){ echo "background-color: chartreuse"; } elseif ($stateAZ == 'yes') { echo "background-color: #5cedf2"; } ?>">AZ</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'IL'){ echo "background-color: chartreuse"; } elseif ($stateIL == 'yes') { echo "background-color: #5cedf2"; } ?>">IL</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MN'){ echo "background-color: chartreuse"; } elseif ($stateMN == 'yes') { echo "background-color: #5cedf2"; } ?>">MN</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NC'){ echo "background-color: chartreuse"; } elseif ($stateNC == 'yes') { echo "background-color: #5cedf2"; } ?>">NC</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'TX'){ echo "background-color: chartreuse"; } elseif ($stateTX == 'yes') { echo "background-color: #5cedf2"; } ?>">TX</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'AR'){ echo "background-color: chartreuse"; } elseif ($stateAR == 'yes') { echo "background-color: #5cedf2"; } ?>">AR</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'IN'){ echo "background-color: chartreuse"; } elseif ($stateIN == 'yes') { echo "background-color: #5cedf2"; } ?>">IN</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MS'){ echo "background-color: chartreuse"; } elseif ($stateMS == 'yes') { echo "background-color: #5cedf2"; } ?>">MS</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'ND'){ echo "background-color: chartreuse"; } elseif ($stateND == 'yes') { echo "background-color: #5cedf2"; } ?>">ND</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'UT'){ echo "background-color: chartreuse"; } elseif ($stateUT == 'yes') { echo "background-color: #5cedf2"; } ?>">UT</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'CA'){ echo "background-color: chartreuse"; } elseif ($stateCA == 'yes') { echo "background-color: #5cedf2"; } ?>">CA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'IA'){ echo "background-color: chartreuse"; } elseif ($stateIA == 'yes') { echo "background-color: #5cedf2"; } ?>">IA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MO'){ echo "background-color: chartreuse"; } elseif ($stateMO == 'yes') { echo "background-color: #5cedf2"; } ?>">MO</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'OH'){ echo "background-color: chartreuse"; } elseif ($stateOH == 'yes') { echo "background-color: #5cedf2"; } ?>">OH</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'VT'){ echo "background-color: chartreuse"; } elseif ($stateVT == 'yes') { echo "background-color: #5cedf2"; } ?>">VT</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'CO'){ echo "background-color: chartreuse"; } elseif ($stateCO == 'yes') { echo "background-color: #5cedf2"; } ?>">CO</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'KS'){ echo "background-color: chartreuse"; } elseif ($stateKS == 'yes') { echo "background-color: #5cedf2"; } ?>">KS</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MT'){ echo "background-color: chartreuse"; } elseif ($stateMT == 'yes') { echo "background-color: #5cedf2"; } ?>">MT</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'OK'){ echo "background-color: chartreuse"; } elseif ($stateOK == 'yes') { echo "background-color: #5cedf2"; } ?>">OK</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'VA'){ echo "background-color: chartreuse"; } elseif ($stateVA == 'yes') { echo "background-color: #5cedf2"; } ?>">VA</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'CT'){ echo "background-color: chartreuse"; } elseif ($stateCT == 'yes') { echo "background-color: #5cedf2"; } ?>">CT</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'KY'){ echo "background-color: chartreuse"; } elseif ($stateKY == 'yes') { echo "background-color: #5cedf2"; } ?>">KY</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NE'){ echo "background-color: chartreuse"; } elseif ($stateNE == 'yes') { echo "background-color: #5cedf2"; } ?>">NE</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'OR'){ echo "background-color: chartreuse"; } elseif ($stateOR == 'yes') { echo "background-color: #5cedf2"; } ?>">OR</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WA'){ echo "background-color: chartreuse"; } elseif ($stateWA == 'yes') { echo "background-color: #5cedf2"; } ?>">WA</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'DE'){ echo "background-color: chartreuse"; } elseif ($stateDE == 'yes') { echo "background-color: #5cedf2"; } ?>">DE</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'LA'){ echo "background-color: chartreuse"; } elseif ($stateLA == 'yes') { echo "background-color: #5cedf2"; } ?>">LA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NV'){ echo "background-color: chartreuse"; } elseif ($stateNV == 'yes') { echo "background-color: #5cedf2"; } ?>">NV</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'PA'){ echo "background-color: chartreuse"; } elseif ($statePA == 'yes') { echo "background-color: #5cedf2"; } ?>">PA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WN'){ echo "background-color: chartreuse"; } elseif ($stateWV == 'yes') { echo "background-color: #5cedf2"; } ?>">WV</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'FL'){ echo "background-color: chartreuse"; } elseif ($stateFL == 'yes') { echo "background-color: #5cedf2"; } ?>">FL</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'ME'){ echo "background-color: chartreuse"; } elseif ($stateME == 'yes') { echo "background-color: #5cedf2"; } ?>">ME</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NH'){ echo "background-color: chartreuse"; } elseif ($stateNH == 'yes') { echo "background-color: #5cedf2"; } ?>">NH</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'RI'){ echo "background-color: chartreuse"; } elseif ($stateRI == 'yes') { echo "background-color: #5cedf2"; } ?>">RI</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WI'){ echo "background-color: chartreuse"; } elseif ($stateWI == 'yes') { echo "background-color: #5cedf2"; } ?>">WI</td>
							</tr>									
							<tr align="center">
								<td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'GA'){ echo "background-color: chartreuse"; } elseif ($stateGA == 'yes') { echo "background-color: #5cedf2"; } ?>">GA</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'MD'){ echo "background-color: chartreuse"; } elseif ($stateMD == 'yes') { echo "background-color: #5cedf2"; } ?>">MD</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'NJ'){ echo "background-color: chartreuse"; } elseif ($stateNJ == 'yes') { echo "background-color: #5cedf2"; } ?>">NJ</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'SC'){ echo "background-color: chartreuse"; } elseif ($stateSC == 'yes') { echo "background-color: #5cedf2"; } ?>">SC</td><td style="border: 1px solid black; padding: 3px; <? if ($hstate == 'WY'){ echo "background-color: chartreuse"; } elseif ($stateWY == 'yes') { echo "background-color: #5cedf2"; } ?>">WY</td>
							</tr>
							
							<tr><td colspan="5" style="line-height: 5px">&nbsp;</td></tr>
							
							<tr>
								<td colspan="5"><div  style="position: relative;left: 0px; top: 0px; z-index: 10000"><a href="https://landscapearchitect.com/abante/index.php?rt=product/product&product_id=139" target="_blank"><h1 style="font-family:Arial, Helvetica, sans-serif; color:#1C3C04; text-decoration: underline"><center>Add A State!</center></h1><br /></a></div></td>
							</tr>
							
						</table></center>
						
					</td>
				</tr>
			</table>					
					
					
				</center><br>
				
			<!-- Regional Tiers End -->					
				
			<?    } elseif (($ventype != 4) || ($ventype != 6)) {      ?>	
				
				
				
			<!-- National Tiers Start -->	
									<style>
										.tooltip5 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 60000;
										}

										.tooltip5 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -350px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip5 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip5:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
										
										.tooltip6 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 60000;
										}

										.tooltip6 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -340px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip6 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip6:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}
                                        
										.tooltip7 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip7 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -320px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip7 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip7:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}  
                                        
                                        
										.tooltip8 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip8 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -330px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip8 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip8:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}                                        
                                        
                                        
										.tooltip9 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip9 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -425px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip9 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip9:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}                                        
                                        
                                        
										.tooltip10 {
											position: relative;
                                            left: 0px;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 200px;
											z-index: 20000;
										}

										.tooltip10 .tooltiptext {
											visibility: hidden;
											width: 400px;
											background-color: #555;
											color: #fff;
											text-align: center;
											border-radius: 6px;
											padding: 5px;
											position: absolute;
											z-index: 1;
											bottom: 125%;
											margin-left: -365px;
											opacity: 0;
											transition: opacity 1s;
										}

										.tooltip10 .tooltiptext::after {
											content: "";
											position: absolute;
											top: 100%;
											margin-left: -5px;
											border-width: 5px;
											border-style: solid;
											border-color: #555 transparent transparent transparent;
										}

										.tooltip10:hover .tooltiptext {
											visibility: visible;
											opacity: 1;
										}                                        
										
										
									</style>						
				
				
				
				
				
				
				
				<center>
	
            		<h2 style="font-family:Arial, Helvetica, sans-serif; color: #F60004"><center>Your Product Search Status is:</center></h2><br />
					
					<table cellspacing="10px" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 18px">
						<tr>
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==18){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip5'>Platinum<span class='tooltiptext'>Congratulations! Your products and profile will appear at the top of all related product searches. As a Platinum Advertiser you can host an unlimited number of products, complete with pictures, descriptions and any related CAD Files or Spec Sheets.(Requires minimum of 8 pages of print over 12 month schedule)</span></div></center></td>
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==16){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip6'>Gold<span class='tooltiptext'>Appearing in the search results immediately following Platinum Advertisers, Golden Advertisers can host up to 50 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets. (Requires Marketplace Double or minimum of 2.4 pages of print over 12 month schedule)</span></div></center></td>
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==14){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip7'>Silver<span class='tooltiptext'>Appearing in the search results immediately following Golden Advertisers, Silver Advertisers can host up to 25 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets.  (Requires Marketplace Single, minimum of 1.2 pages of print or purchase of separate Vendor Profile )</span></div></center></td>
							
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==10){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip8'>Bronze<span class='tooltiptext'>Start your program with the LASN Annual Directory and you can host up to 10 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets, for 3 Full Months. Your main product appears online for the entire year.  (Requires Product Profile in Annual Specifier's Guide.) </span></div></center></td>
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==12){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip9'>Exhibitor<span class='tooltiptext'>Next in line, Trade Show Advertisers receive up to 10 products per 100 sq ft of exhibit space, complete with pictures, descriptions and any related CAD Files or Spec Sheets. (Requires Booth Space in the upcoming Landscape Expo)</span></div></center></td>
						
						
							<td style="border: 1px solid black; padding: 3px; <? if ($tier==2){ echo "background-color: chartreuse";} ?>"><center><div class='tooltip10'>Inactive<span class='tooltiptext'>You can view your profile through the link below, but it is not accessible through the "What Are You Shopping For?" search engines. GOOD NEWS . . . You can have an active profile by tomorrow if you contact us today! <br>Just contact your sales rep below:</span></div></center></td>		                            
                            
											
						</tr>
					</table>
					
				</center><br>
				
			<!-- National Tiers End -->	
				
				
			<?   }  	
        
        
 																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
        
        
                                                                $bString = $string;
        

				
			?>	
				
				
				
				
				
				
            <center><strong>As a current advertiser or exhibitor your company products are active<br>in thousands of product searches every week</strong><br /><br /><a href='javascript:open_window("https://landscapearchitect.com/landscape-design/<? echo $string; ?>/<? echo $_GET['id'] ?>",1600,800);' target="_blank"><center><span style='; font-family:Arial, Helvetica, sans-serif; font-size:28px; font-weight:bold; text-decoration:underline'>View Your Current Profile</a>.</span></center><br />
To Upgrade Your Profile, or to speak with someone about your current profile status<br>
contact your advertising representative as indicated below:</center></span>
            
</div>
        
        <div style='clear: both;'> &nbsp; </div>                
                
                
        
 <div style="width: 750px; z-index: 5000">
 <table width="550" border="0" cellpadding="" cellspacing="3" style="font-size:12px; margin: 0 auto;" align="center">
  <tr>
    <td  align="center" width="132">
    <span style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">
    If Your Company Name 
    Begins With: </span></td>
    <td width="418"  align="center" valign="bottom">
    <span style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">
    Sales Representative
    </span>
    </td>
 </tr>

 <tr>
    <td align="center">
    <span style="font-size: 16px">
    A-L
    </span>
    </td>
    <td>
    <span style="font-size: 16px">
    <center>
    <a href="mailto:mpack@landscapearchitect.com?subject=Advertising Information Request&body=Please send me information about my LandscapeOnline vendor profile and any other Landscape Communications, Inc. products that would be relevant for my company.">Mark Pack  - (714) 979-5276 x111</a>&nbsp;&nbsp;<a href="mailto:mpack@landscapearchitect.com"><span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-weight: bold">Email Mark</span></a>
    </center>
    </span>
    </td>
 </tr>
 <tr>
    <td align="center">
    <span style="font-size: 16px">
    M-Z
    </span>
    </td>
	<td>
    <span style="font-size: 16px">
    <center>
    <a href="mailto:vchavira@landscapearchitect.com?subject=Advertising Information Request&body=Please send me information about my LandscapeOnline vendor profile and any other Landscape Communications, Inc. products that would be relevant for my company.">Clint Phipps  - (714) 979-5276 x114</a>&nbsp;&nbsp;<a href="mailto:cphipps@landscapearchitect.com"><span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-weight: bold">Email Clint</span></a>
    </center>
    </span>
    </td>
    </tr>
     
     <tr><td style="line-height: 10px">&nbsp;</td></tr>
     
</table></div><br />
        
        <?
				
				
                      include '../../includes/connect4.inc';

											$key5 = $_GET['id'];	
		
											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											  $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                
				
		?>
		
		
        <!-- Company Info Section Start -->
        
        <div style="position: relative;  left: 100px">
            <table>
                
               <tr><td width='700px'>
            
                    <span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 28px; font-weight: bold">Company Information - <span style="font-size: 20px">[<a href="company-info-update.php?id=<? echo $_GET['id']; ?>" target="_blank">Edit</a>]</span></span><br>
                   
                   
                   <table>
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Name: </td>
                           <td><? echo $row['company_name']; ?></td>
                        </tr>
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="center" colspan="2"><img style="width: 50%" src="http://landscapearchitect.com/products/images/<? echo $row['logo']; ?>"></td>
                        </tr> 
                       
                       <tr><td style="line-height: 10px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Vendor Type: </td>
                           <td>Manufacturer</td>
                        </tr> 
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                   
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Address: </td>
                           <td><? echo $row['address']; ?></td>
                        </tr>
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Phone: </td>
                           <td><? echo $row['phone']; ?></td>
                        </tr>
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Fax: </td>
                           <td><? echo $row['fax']; ?></td>
                        </tr> 
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Website: </td>
                           <td><a href="http://<? echo $row['website']; ?>"><? echo $row['company_name']; ?></a></td>
                        </tr>
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Email: </td>
                           <td><? echo $row['email']; ?></td>
                        </tr> 
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Contact Page: </td>
                           <td><a href="http://<? echo $row['contact_us']; ?>">Contact Us</a></td>
                        </tr>
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Last Updated: </td>
                           <td><? $editTime = substr($row['edit_date'], 0, 10);  echo $editTime; ?></td>
                     </tr> 
                       
                       <tr><td style="line-height: 5px">&nbsp;</td></tr>
                       
                       <tr>
                           <td valign="top" align="right" style="padding-right: 10px;font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; font-weight: bold">Profile: </td>
                           <td width="500px"><? echo $row['profile']; ?></td>
                        </tr>                        
                       
                    </table>
                       
                       
            
                </td></tr>
                
            </table>
        </div><br>
        
        
        <?     } } ?>
        
        <!-- Company Info Section End -->     
        

        <!-- Lead Info Section Start -->
        
        <div style="position: relative;  left: 100px">
            <table>
                
               <tr><td width='700px'>
            
                    <span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 28px; font-weight: bold">Sales Lead Retrieval</span><br>
                   
                   
                   <table>
                       <tr>
                           <td>
                               
        <table width='720' class='searchOptions' cellpadding='0' cellspacing='0' border='0' style="margin: 0 auto;">
                    <tr>
                        <td align="center" colspan="2">
                            <img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="250" />
                        </td>
                    </tr>                    
                    
                    <tr>
                        <td align="center" colspan="2" align="center"><br />
                        <span style="font-size:16px">All advertisers receive sales leads updated every Friday by 5:00 PM.<br />
                            To view your leads, by date, select the date range below and <br>click on "<strong>Retrieve Leads for Selected Week</strong></span>"<br /><br />
                            <span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for the Week of: <span style="font-size:14px; color:#F00">(Make sure to click on a week in the box below)</span></span>
                        </td>
                    </tr>
                    
<script>
 function validateForm() {
    var x = document.forms["leadsform"]["week"].value;
    if (x == null || x == "") {
        alert("Please Choose a Date Range");
        return false;
    }
}
</script>                            
                    
                    <tr>
                        <td style="height:10px"></td>
                    </tr>    
                    <tr>
                        <td colspan="2" align="center">
							
							
							
							<form name="leadsform" method="POST" action="index-vendor-leads.php?action=categories2&id=<? echo $_GET['id']; ?>&week2=week">
												<input type="hidden" name="week3" value="cat" >
                                
							  <input type="submit"  value="Retrieve Leads for Selected Week" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:250px; height:30px; box-shadow: 5px 5px 5px #888888"><br><br>

                                    <select multiple name="week" size="4" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:250px; height:75px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; border: 2px inset; margin-left:auto; text-align: center">
                                        <? 
     

                                       include '../../includes/connect4.inc';

	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT distinct `week` FROM leads WHERE `vendor_id`=" . $key5 . " ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                   
                                    $a = $row['week'];
                                    $weekcsv = $a;

                                    date_default_timezone_set('America/Los_Angeles');
                                        $yWeek = substr($a, -4);
                                        $mWeek = substr($a, 0, 2);
                                        $dWeek = substr($a, 2, 2);
                                    $date = $yWeek.'-'.$mWeek.'-'.$dWeek;
                                    $date1 = strtotime($date);
                                    $date2 = strtotime("+7 day", $date1);

                                    $leftpart = '&nbsp;&nbsp;'.date('m.d.y', $date1).' - '.date('m.d.y', $date2);


                                    //$leftpart = substr($a,0,2).substr($a,3,2).substr($a,6,4);

                                        $dlist .= '<option name="dlistweek" value="'.$a.'">'.$leftpart.'</option>';                                                   

                                                  echo $dlist; 
                                               
                        }                                        
                                        
                                        
                                        
                                        ?>
                                    </select><br /><br /><br />
							</form>
							
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="height:40px"><span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for Custom Date Range: <span style="font-size:14px; color:#F00">(Please select your date range)</span> </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="center">
							
							<form name="leadsform" method="POST" action="index-vendor-leads2.php?action=categories3&id=<? echo $_GET['id']; ?>&week2=week">
												<input type="hidden" name="week3" value="cat" >
                         					
							
							
							
							
                           <!-- <span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for Custom Date Range</span> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="height:10px"></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" align="center">
							
							
							
							
      
												<input type="hidden" name="week3" value="cat" >
    <table width = "585px" align = "center">
    <tr>
    <td align="center"><b><i>Please enter date yyyy-mm-dd in the field below (ex: Start 2014-01-01, End 2014-01-31)</i></b></td>
    </tr>
    <tr>
        <td style="height:10px"> </td>
    <tr>
    <td align="center" style="position: relative; left: -25px">
    <span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Start Date&nbsp;:&nbsp;</span>
    <input type = "text" name = "small" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; text-align:center">
    &nbsp;&nbsp;&nbsp;<span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">End Date&nbsp;:&nbsp;</span>
    <input type = "text" name = "large" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; text-align:center; position: relative; z-index: 5000"></td>
    </tr>
    <tr>
        <td style="height:10px"> </td>
    <tr>
    <tr>
    <td align = "center">
    <input type = "submit" name = "find" value = "View Custom Leads" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:150px; height:30px; box-shadow: 5px 5px 5px #888888; position: relative; left: 19px">
    &nbsp;&nbsp;&nbsp;
    <input type = "reset" value = "Reset Choice" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:130px; height:30px; box-shadow: 5px 5px 5px #888888; position: relative; left: 24px">
    </td>   
    </tr>
    </table>
		  
                          
		  
		  
		  
		  
		  
		  
		  
		  
		  
    </form> 
                    
        </table><br>    
                           
                           
                           </td>
                        </tr>
                       
                                
                       
                    </table>
                       
                       
            
                </td></tr>
                
            </table>
        </div><br>
        
        <!-- Lead Info Section End -->     
                
        
        <!-- Category Info Section Start -->
        
        <div style="position: relative;  left: 100px">
            <table>
                
               <tr><td width='700px'>
            
                    <span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 28px; font-weight: bold">Company Search Categories - <span style="font-size: 20px">[Edit]</span></span><br>
                   
        <!-- Category Info Section End -->             
            
        
        
	<div style="text-align: center">
		<div style="width: 100%; margin: 0 auto;"><img src="https://landscapearchitect.com/lol-logos/LA-LC-Local-Wholesale-search-engines.jpg" width="75%"></div><br><br>
		These categories are used by the <strong>Keyword Search Engine</strong> to help our 65,000+ monthly users to find you company.<br>
        When editing, it is important to select only those categories which represent products that you currently sell.<br>
        LCI reserves the right to edit your categories.
	</div>
	<br>
    <div style="text-align: center; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; margin-bottom: 5px;">
        Your Current Categories Are:
    </div>

    
    <div style="text-align: center;">
    <table width='750' class='searchOptions' cellpadding='0' cellspacing='0' border='0' style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
        <tr>
            <td>
                
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
        
											$key5 = $_GET['id'];	
		
											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   
					   
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                    $xCats = $row['xlist'];
                                                   
                                                    $xCats2 = explode(",", $row['xlist']);
                                                   
                                                   
                                                $animals_list = array($row['xlist']);
                                                   

                                                foreach($xCats2 as $array_values){

                                                $xNums = $array_values;

											     $sql = "SELECT * FROM xlist WHERE id='" . $xNums . "' ";
											     $result = $conn->query($sql);	                                                    
                                                    
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                   echo $row['name'] . '<br>';
                                                   
                                               }
                                                    
                                                    
                                                    
                                                    

                                                }                                                   
                                                   
                                                   
                                                   
                                               }  
        
                            if (empty($xCats)) {
                                
                                echo "You have no categories selected.";
                                
                                
                            } else {
        
        
                ?>
                
                
                
                
                <?  foreach($sortIndex as $idx => $sub) {
                    ?>
                        <?= $list[$idx]['name'] ?> <br />
                       
                    <?
                } ?>
                
                <?
                                
                            }
        
                 ?>
                
                
       <!-- Photo Edit Start -->       
                
<!-- Photo Section --> 
                

                
<br />
<a name="defpro"></a>

    <div style="position: relative; left: 500px; top: 60px; z-index: 1000">
    
			 <a onclick="myFunction77()"><img width="15%" src="https://landscapearchitect.com/vendor/images/reorder-button.png" onmouseover="this.style.cursor='pointer'" ></a>
        
        <script>
            
			function myFunction77() {
														
				var valR = "<? $_GET['id']; ?>";
														
														
				window.open("https://landscapearchitect.com/LandscapeProducts/index-reorder.php?venNum="+valR, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=960,height=860");
			}            
            
            
        </script>        
    
    </div>


<div style="position: relative; top: 0px">

        <div>
          <span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 28px; font-weight: bold">Products / Project Photos </span><br>
        </div><br /><br />
    
    </div> 
                
                
    
    
    
<style>

.productViewProductName {
	font-family: Helvetica, Arial, sans-serif; 
	font-size:16px; 
	margin-top: 10px;
	width: 100%; 
/*	overflow: scroll; */
	-webkit-line-clamp: 1; 
	-webkit-box-orient: vertical;
	height: 46px;
	overflow: hidden;
/*
	align-items: center;
	display: flex;
	justify-content: center;
*/
}


#London figcaption {
	margin-bottom: 16px;
}

#London .editBtnProductView {
	float: left;
	width: 35%;
}

#London .actBtnProductView {
	float: right;
	width: 35%;
}

#Paris .container {
	margin-top: -25px;
}

.topProductBtn img {
	position: absolute;
	left: 8px;
	top: 8px;
}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
		width: 750px;
		margin-top: -15px;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 15px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 20px;
    border: 1px solid #ccc;
    border-top: none;
		width: 750px;
}

.tabcontent .container {
	width: 100%;
}

.tabcontent h3 {
margin-bottom: 15px;

}

.styledCatHead {
	padding: 10px;
	color: #00499d;
	background-color: #f1f1f1;
}

    
.banner_holder{
	width: 100%;
	height: 300px;
	min-height: 200px;
	overflow: hidden;
	background-color: dimgrey;
	display: block;
}

.banner_holder img{
	width: 100%;
}

.limage {
	width: 100%;
/*							height: 250px;    */
	padding-top: 80%;   
	overflow: hidden;
	margin-top: 5px;
	margin-bottom: 5px;
	text-align: center;
	line-height: 75px;
}
.limage2 {
	max-width: 100%;
	max-height: 100%;
	vertical-align: middle;
	position: relative;
	top: 50%;
	transform: translateY(-50%);			
}	

.limage3 {
	width: 100%;
	height: 75px;    
	overflow: hidden;
	margin-top: 5px;
	text-align: left;
	line-height: 75px;
}
.limage4 {
	max-width: 100%;
	max-height: 100%;
	vertical-align: middle;
	position: relative;
	top: 50%;
	transform: translateY(-50%);			
}

.limage5 {
	width: 100%;
	height: 350px;    
	overflow: hidden;
	margin-top: 5px;
	text-align: center;
	line-height: 150px;
}
.limage6 {
	max-width: 200%;
	max-height: 100%;
	vertical-align: middle;
	position: relative;
	top: 50%;
	transform: translateY(-50%);				
}		


.productsRefineSelect {
	background-color: #f1f1f1;
	padding: 14px 16px;
	font-size: 17px;
	font-style: inherit;
	transition: 0.3s;
	border: 1px solid #f1f1f1;
	height: 54px;
}

.productsRefineSelect:hover {
	background-color: #ddd;
	border: 1px solid #ddd;
}

.viewBarAddProductsBtn {
    position: relative;
    z-index: 1010;    
	float: right; 
	margin-top: 4px; 
	margin-right: 10px;
}
    
.viewBarRProductsBtn {
	float: right; 
	margin-top: 4px; 
	margin-right: 10px;
}    
    

.row {
	margin-bottom: 20px;
}

/* add to main css */

.listViewItemContain {
	display: flex;
	align-items: center;
}



a.listViewItemTitle {
	flex-grow: 1;
}


.fileTypeThumb {
	width: 50%;
	max-width: 54px;
	min-width: 24px;
}

.fileTypeThumbContain{
	display: flex;
	justify-content: center;
	width: 60%;
}

.fileTypeThumbListContain {
	text-align: center;
	display: flex;
	float: right;
	width: 25%;
	min-width: 240px;
	justify-content: right;
	margin-top: 10px;
}

		#prodBox { 

		border: thin silver solid;
	box-shadow: 5px 5px 5px #888888;
	padding-left: 0px;
	padding-right: 0px;

}	

#prodBox2 { 

	border: thin silver solid;
	box-shadow: 5px 5px 5px #888888;
	position:relative;
	left:30px;
	padding-left: 5px;
	padding-right: 5px;

}

#prodBox3 { 

	border: thin silver solid;
	box-shadow: 5px 5px 5px #888888;
	position:relative;
	left:60px;
	padding-left: 5px;
	padding-right: 5px;

}	



@media only screen and (max-width: 500px) {

	#prodBox2 { 

		border: thin silver solid;
		box-shadow: 5px 5px 5px #888888;
		left: 0px;

	}

	#prodBox3 { 

		border: thin silver solid;
		box-shadow: 5px 5px 5px #888888;
		left: 0px;

	}												

}	
    
@media print {
  -webkit-print-color-adjust: exact;
}
    
    
</style>

<link rel="stylesheet" href="/css/bootstrap-LA.css">


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">Category View</button>
    
    
  <!-- Category Options set Start -->
	
	<select onchange="if (this.value) window.location.href=this.value" id="fixed" style="width: 40%" class="productsRefineSelect">
	              
	<option value="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&tview=allp" selected ><?  if (($sName == "allp") || ($sName == "")) { echo "Refine Category Search"; } elseif ($sName == "other") { echo $xChoice; } ?></option>
	<option value="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&tview=allp#defpro" >All Products</option>  
		                


		<?

				$key2 = $_GET['id'];

                                    include("../../connect4.inc"); 

							
					 $sql33 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id WHERE vendor_id='" . $key2 . "' ORDER BY name ASC";
						$result33 = $conn->query($sql33);    

						$xname = "none";


						while($row = mysqli_fetch_array($result33)) { 

							if ($xname != $row['name']) {

										echo '<option value="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&tview=other&xlist=' . $row['xlist'] . '#defpro" >' . $row['name'] . '</option>';

										$xname = $row['name'];                                              


							}



						}


		?>

	</select>
    
  <!-- Category Options set end -->
    
    <? $key2 = $_GET['id']; ?>
    
    
			 <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-add.php?number=<? echo $key2; ?>" target="_blank"><img width="15%" src="https://landscapearchitect.com/vendor/images/add-button-new.png" class="viewBarAddProductsBtn"></a>
    
</div>	


  <p>
      
      <?
      
            $catView  = $_GET['tview'];
    
      
      
      
      ?>
      
      
      
      
      
                                <?
      
                                    include("../../connect4.inc"); 
      
                                        $xCat = $_GET['xlist'];
                                
                                       $sql44 = "select * from xlist WHERE id='" . $xCat . "'";
                                        $result44 = $conn->query($sql44);  
      
                                            while($row = mysqli_fetch_array($result44)) { 
                                                
                                               $xChoice = $row['name']; 
                                                
                                            }
      
                                    $sName = $_GET['tview'];
      
                                ?>
      
      

															<h3 class="styledCatHead"><? echo $xChoice; ?></h3>
                                



<?
        
            if (($catView == "allp") || ($catView == "")) {      
      
                 $key2 = $_GET['id'];

                    include("connect3.inc");
      
      

                    $sql22 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id WHERE vendor_id='" . $key2 . "' ORDER BY name ASC";
                    $result22 = $conn->query($sql22); 
      
                        $xname = "none";
      
      
                        while($row = mysqli_fetch_array($result22)) {
                            
                            if ($xname != $row['name']) {
                            
                                echo '<h3 class="styledCatHead">' . $row['name'] . '</h3>';
                                
                                $xId = $row['id'];
                                
                                $xname = $row['name'];
                                
                                
                                    // Add Second Search Start
                                
                                

                                        $sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $xId . "' AND `series_product` = '0' ORDER BY photo_time DESC";
                                        $result = $conn->query($sql); 
                                
                                        $rowcount=mysqli_num_rows($result);
                                

                                            $iCount = 1;
                                
                                            $xCount = 1;
                                        

                                            while($row = mysqli_fetch_array($result)) {

                                                        $string =  $row['product_name']; // Trim String

                                                        $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

                                                        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

                                                        $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

                                                        $string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
                                                
                                                // Counts for sets start

                                                        if ($row['imported'] == '0') { $actButton = 'active-button-new.png'; } else { $actButton = 'inactive-button-new.jpg'; };
                                                        if ($row['top'] == 1) { $topButton = '<div class="topProductBtn"><img width="30%" src="https://landscapearchitect.com/vendor/images/top-button-new.png"></div>'; } else { $topButton = ''; };
                                                
                                                
//                                                   // This the normal view    
                                                

                                                    if ($iCount == 1) {

                                                        if ($xCount == $rowcount) {

                                                            echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p><a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div></div></div>';
                                                            $iCount = 1;
                                                            
                                                        } else {
                                                            
                                                            echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div>';
                                                            $iCount++; 
                                                            $xCount++;       
                                                            
                                                        }
                                                            

                                                    } elseif ($iCount == 2) {
                                                        
                                                        if ($xCount == $rowcount) {

                                                            echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div></div></div>';
                                                            $iCount = 1;
                                                            
                                                        } else {
                                                            
                                                            echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div>';
                                                            $iCount++;                                                            
                                                            $xCount++;       
                                                        }
                                                        

                                                    } elseif ($iCount == 3) {


                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount = 1;
                                                        $xCount++;       

                                                    }
                                                    
                                                
                                                
                                                
                                                
                                                // Counts for sets end



                                            }

                                
                 
                            
                                    // Add Second Search End
                            }
                            
                            
                        }                
      
            } elseif ($catView == 'other') {
                
                
                 $key2 = $_GET['id'];

                    include("connect3.inc"); 
                
                                    $catXlist  = $_GET['xlist'];

                
                
                                        $sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $catXlist . "' AND `series_product` = '0' ORDER BY photo_time DESC";
                                        $result = $conn->query($sql); 

                                        $rowcount=mysqli_num_rows($result);

                                            $iCount = 1;
                                        
                                            echo '';

                                            while($row = mysqli_fetch_array($result)) {

                                                        $string =  $row['product_name']; // Trim String

                                                        $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

                                                        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

                                                        $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

                                                        $string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
                                                
                                                // Counts for sets start

                                                
                                                if (($rowcount == 3) || ($rowcount == 6) || ($rowcount == 9) || ($rowcount == 12)) {


                                                    if ($iCount == 1) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars

                                                        if ($row['imported'] == '0') { $actButton = 'active-button-new.png'; } else { $actButton = 'inactive-button-new.jpg'; };
                                                        if ($row['top'] == 1) { $topButton = '<div class="topProductBtn"><img width="35%" src="https://landscapearchitect.com/vendor/images/top-button-new.png"></div>'; } else { $topButton = ''; };

                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p><br><br><a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 2) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 3) {


                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount = 1;


                                                    }
                                                    
                                                } elseif ($rowcount == 1) {
                                                    
                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                    
                                                } elseif ($rowcount == 2) {
                                                    
                                                    if ($iCount == 1) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars

                                                        if ($row['imported'] == '0') { $actButton = 'active-button-new.png'; } else { $actButton = 'inactive-button-new.jpg'; };
                                                         if ($row['top'] == 1) { $topButton = '<div class="topProductBtn"><img width="35%" src="https://landscapearchitect.com/vendor/images/top-button-new.png"></div>'; } else { $topButton = ''; };

                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 2) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        $iCount = 1;

                                                    }                                                    
                                                    
                                                    
                                                } elseif ($rowcount == 4) {
                                                    
                                                    
                                                    
                                                    if ($iCount == 1) {


                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p><br><br><a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 2) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 3) {


                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount++;


                                                    } elseif ($iCount == 4) {


                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure>' . $topButton . '<div ><img style="display: block; max-width:210px; max-height:146px; width: auto; height: auto; margin-left: auto; margin-right: auto" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank"><img width="40%" src="https://landscapearchitect.com/vendor/images/edit-button-new.jpg"></a>&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank" class="actBtnProductView"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount = 1;


                                                    }                                                               
                                                    
                                                    
                                                    
                                                }    
                                                
                                                
                                                
                                                
                                                // Counts for sets end



                                            }

                                
                                            echo '';        
                
                
                
            }
      
      
      
      ?>      
      
      
      
      
      
	
     
	
	
	
	</p>
</div> 

<div id="Paris" class="tabcontent">
	
  <p>
      

       stuff there
      
      
      
      
     
	
	
	</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Outlet Locations</h3>
  	<p>
	
	Things 3
	
	
	
	</p>
</div>


                
                
                
    
 
                
                
                
                
                
                
                
                
       <!-- Photo Edit End -->       
                
                
                
            </td>
        </tr>
    </table>
    </div><br /><br />                               
                       
            
                </td></tr>
                
            </table>
        </div><br>
        
        
        

        
        
        
        
        
        
                
                
                
                
                
                
                
                
		      </td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? // include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	





<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>


<?
                                                   
	mysqli_close($con);    
    
    
    include("../../includes/lo_footer-main2-new.inc");
?>





                


