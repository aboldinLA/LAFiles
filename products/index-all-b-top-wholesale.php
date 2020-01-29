
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
			include("lo_top-main2-side2-js501.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-whole-js.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td valign="top" width="784">
			
	
									<?
										// Category Name Start

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


										// category for table

											$cat1 = $_GET['ad'];
											$cat2 = $_GET['number'];

											$sql77 = "SELECT name FROM xlist WHERE id = '" . $cat1	. "' ORDER BY name ASC";
											$result77 = $conn->query($sql77);									
									
										// cat section
												
											while($row = mysqli_fetch_array($result77)) {
													$catName1 = $row["name"];									
											}
	
											$sql88 = "SELECT name FROM xlist WHERE id = '" . $cat2	. "' ORDER BY name ASC";
											$result88 = $conn->query($sql88);									
									
										// cat section
												
											while($row = mysqli_fetch_array($result88)) {
													$catName2 = $row["name"];									
											}	
	
	
									?>		  				
	
	
	
	<div style="position:relative; left: 100px; top: 0px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial, sans-serif; font-size: 18px">Wholesale And Plant Material - <? echo $_GET['state'] ?></h3></center>
	
			
	<center><span style="font-size: 14px; font-weight 200; font-family: Helvetica, Arial, sans-serif">Click on Advertiser Logo to View to Vendor Profile<br>
		Use Menu on the Left to View Specific Categories</span></center>
		
	<style>
				
		.logowidth {
			width: 300px;
		}
		
		@media only screen and (max-width: 1100px) {
			.logowidth {
				width: 275px;
			}
		}
		
		.logowidth2 {
			width: 300px;
		}
		
		@media only screen and (max-width: 1100px) {
			.logowidth2 {
				width: 250px;
			}
		}
		
		
		.limage {
			width: 175px;
			height: 75px;    
			overflow: hidden;
			margin: 20px;
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
					
				
				
				
	</style>
							
							
							
						
					<div style="position:relative; left: 200px">
									<!-- Top Logo Start -->
								
									<?
									
									


										// start for the banner add counting and getting from table

											$key4 = $_GET[number];							

											$sql = "SELECT * FROM new_vendor WHERE (xlist LIKE '%580%' OR xlist LIKE '%581%' OR xlist LIKE '%270%' OR xlist LIKE '%1027%' OR xlist LIKE '%276%' OR xlist LIKE '%279%' OR xlist LIKE '%271%' OR xlist LIKE '%561%' OR xlist LIKE '%998%' OR xlist LIKE '%1251%' OR xlist LIKE '%1143%' OR xlist LIKE '%1347%' OR xlist LIKE '%1248%' OR xlist LIKE '%572%' OR xlist LIKE '%567%' OR xlist LIKE '%560%' OR xlist LIKE '%590%' OR xlist LIKE '%854%') AND (status='2' OR status='10' OR status='12' OR status='14' OR status='16' OR status='18') AND (vendor_type_id LIKE '6' OR vendor_type_id LIKE '4') ORDER BY company_name ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   echo "<table><tr>";
											   $xx = 0;
												$zCount = 0;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												  if ($row['state'] == $_GET['state']) {
													  
													  $coName = $row['company_name'];
													  													  
													 													  
												  }
												   
												   
											$sql55 = "SELECT * FROM new_vendor WHERE company_name = '" . $coName . "' AND (status='10' OR status='12' OR status='14' OR status='16' OR status='18') AND (vendor_type_id LIKE '6' OR vendor_type_id LIKE '4') ORDER BY company_name ASC";
											$result55 = $conn->query($sql55);												   
												   
												   $coName2 = $row['company_name'];
												   
												   
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash													   
												   
												   
												   
												   
												   //if ($coName2 != $coName ) {
												   
												   if (($row['id'] != $rowNum) AND ($row['id'] != 8609)) {
														$rowNum = $row['id'];
													   
												   
												   echo "<td><div class='limage'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><img  class='limage2' src='https://landscapearchitect.com/products/images/".$row['logo']."'></a></div></td>";
												   $xx++;
												   $zCount++;
													$coName = $coName2;   
													   
												   if ($xx % 3 == 0) { echo "</tr><tr>";
												   $zCount++;
													
																	 }
											  // }
												   
											   }}
												   
											   }
					   
					   
											   	echo "</tr></table><br>"; 
												echo "<div style='width:750px; height:2px; background-color:#605b51; position:relative; left: -35px'> </div>";																
												echo "</div><br><br>";
					   
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					?>
					
					
	</div>

	</div>
			

				
				
	<div style="position:relative; left: 75px; top: 0px; z-index: 0">
		
		<center><h3 style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; padding-left: 20px">All Suppliers For The Category: Wholesale And Plant Material - <? echo $_GET['state'] ?><br><span style="font-size: 12px"> Sorted By Zip Code - Click on Company Name for Directions</span></h3><br></center>
	
						
					<div style="position:relative; left: 175px">
									<!-- Top Address Start -->
						
									<style>
										.tooltip {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
											white-space: wrap;
											overflow: visable;
											text-overflow: ellipsis;
											max-width: 150px;
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

											$key4 = $_GET[number];							

											$sql = "SELECT * FROM new_vendor WHERE (xlist LIKE '%580%' OR xlist LIKE '%581%' OR xlist LIKE '%270%' OR xlist LIKE '%1027%' OR xlist LIKE '%276%' OR xlist LIKE '%279%' OR xlist LIKE '%271%' OR xlist LIKE '%561%' OR xlist LIKE '%998%' OR xlist LIKE '%1251%' OR xlist LIKE '%1143%' OR xlist LIKE '%1347%' OR xlist LIKE '%1248%' OR xlist LIKE '%572%' OR xlist LIKE '%567%' OR xlist LIKE '%560%' OR xlist LIKE '%590%' OR xlist LIKE '%854%') AND (vendor_type_id='6' OR vendor_type_id='4') AND state='" . $_GET['state'] . "' ORDER BY zip ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   							echo "<table>"; 
					   
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

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												include("lo_top-main2-bottom.inc");
			
												mysqli_close($conn);
			
			
					   
					?>
					

	</div>

	</div>
									
				
					
					
					
					
		

<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





