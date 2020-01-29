
<?php
$deny = array("188.120.247.80", "82.146.41.82", "78.24.221.247", "134.255.235.242", "62.109.18.238", "78.24.216.237", "91.215.152.97", "91.215.152.118", "82.146.61.221", "149.154.69.37", "207.244.108.244", "217.79.178.92", "185.228.232.194", "185.159.129.9", "193.201.224.209", "217.79.178.209", "217.79.178.177", "217.79.178.209");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://landscapearchitect.com/");
   exit();
} ?>



<?
include("lo_top-main2-prod-new.inc");
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
		include("lo_top-main2-side-new.inc");
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

											$sql = "select * from new_vendor where id='" . $key2 . "' AND `vendor_type_id` != '8'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												$coName = $row["company_name"];
												$venType = $row["vendor_type_id"];
												
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
										<? echo  "<h4>Company Info:<span style='font-weight: 200'> " . $row["profile"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 10px'>&nbsp;</p>"; ?>
										
									<? } ?>
		
		
		
		
										<?
		
											if (($venType == 4) || ($venType == 6)) {



										?>
		
		
		
		
		
		
									<div style='width:750px; height:2px; background-color:#FFFFFF; position: relative; left: -10px'> </div><br>
		
		
								<style>
									button.accordion {
										background-color: #FFFFFF;
										color: #1224B0;
										font-family: Times, "Times New Roman", "serif";
										font-weight: bold;
										cursor: pointer;
										padding: 5px;
										width: 100%;
										border: none;
										text-align: left;
										outline: none;
										font-size: 24px;
										transition: 0.4s;
									}

									button.accordion.active, button.accordion:hover {
										background-color: #ccc; 
									}

									div.panel {
										padding: 0 5px;
										display: show;
										background-color: white;
									}

		
										.limage {
											width: 175px;
											height: 75px;    
											overflow: hidden;
											margin: 10px;
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
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT * FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
												while($row = mysqli_fetch_array($result34)) {
									
												if ((!empty($row['brands_h'])) && (!empty($row['brands_i'])) && (!empty($row['brands_l'])) && (!empty($row['brands_c'])) && (!empty($row['brands_t'])) && (!empty($row['plants_s'])) && (!empty($row['plants_t']))) {
		
		
		
		
									?>		
		


									<center><h2>Brands Offered by <? echo $coName;  ?></h2></center>
		
									<? }} ?>
		
		
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT brands_h FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
												while($row = mysqli_fetch_array($result34)) {
									
												if (!empty($row['brands_h'])) {
		
		
		
		
									?>
		
		
		
		

									<button class="accordion">Hardscapes</button>
									<div class="panel">
									  	<p>
											
											
										<?
											
									// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "SELECT brands_h FROM new_vendor WHERE id='" . $key2 . "' ";
											$result=mysqli_query($conn,$sql);								
									
										
							
											while($row = mysqli_fetch_array($result)) {
												
												   
													$pieces = explode(",", $row['brands_h']);
												   
												   
														$names = explode(",", $row['brands_h']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}
												
													echo "<table cellspacing='5px'><tr>";
												
												
											   		$xx = 0;
													$zCount = 0;
													$yn = 0;
												
												   if ($yn != 6){
												
													if (!empty($names[0])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }		
													   
													if (!empty($names[25])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[25] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[26])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[26] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[27])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[27] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }			
													   
													   
													   
													   
													   
												   }
												
											   	echo "</tr></table><br>"; 
												
											}
											
										?>
											
									<br>
										</p>
									</div>
		
									<? }} ?>
		
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT brands_i FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
												while($row = mysqli_fetch_array($result34)) {
									
												if (!empty($row['brands_i'])) {
		
		
		
		
									?>		
		
		
		

									<button class="accordion">Irrigation</button>
									<div class="panel">
									  	<p>
											
										<?
											
									// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "SELECT brands_i FROM new_vendor WHERE id='" . $key2 . "' ";
											$result=mysqli_query($conn,$sql);								
									
										// banner rotating section
											
								
							
											while($row = mysqli_fetch_array($result)) {
												
												   
													$pieces = explode(",", $row['brands_i']);
												   
												   
														$names = explode(",", $row['brands_i']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}
												
													echo "<table cellspacing='5px'><tr>";
												
												
											   		$xx = 0;
													$zCount = 0;
													$yn = 0;
												
												   if ($yn != 6){
												
													if (!empty($names[0])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }			
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													   
													   
													   
												   }
												
											   	echo "</tr></table><br>"; 
												
											}
											
										?>
										
										
										
										
										<br>
										</p>
									</div>
		
									<? }} ?>
		
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT * FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
										// banner rotating section
												
												while($row = mysqli_fetch_array($result34)) {
													
												if (!empty($row['brands_l'])) {
		
		
		
		
									?>		
		
		

									<button class="accordion">Lighting</button>
									<div class="panel">
									  <p>
										  
										<?
											
									// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "SELECT brands_l FROM new_vendor WHERE id='" . $key2 . "' ";
											$result=mysqli_query($conn,$sql);								
									
										// banner rotating section
											
								
							
											while($row = mysqli_fetch_array($result)) {
												
												   
													$pieces = explode(",", $row['brands_l']);
												   
												   
														$names = explode(",", $row['brands_l']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}
												
													echo "<table cellspacing='5px'><tr>";
												
												
											   		$xx = 0;
													$zCount = 0;
													$yn = 0;
												
												   if ($yn != 6){
												
													if (!empty($names[0])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
												   }
												
											   	echo "</tr></table><br>"; 
												
											}
											
										?>
										
										
										
										<br>
										</p>
									</div>
		
									<? }} ?>
		
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT * FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
										// banner rotating section
												
												while($row = mysqli_fetch_array($result34)) {
													
												if (!empty($row['plants_s'])) {
		
		
		
		
									?>				
		
	
	
									<button class="accordion">Plant Materials</button>
									<div class="panel">
									  	<p>
											
										<?
											
									// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "SELECT plants_s FROM new_vendor WHERE id='" . $key2 . "' ";
											$result=mysqli_query($conn,$sql);								
									
										// banner rotating section
											
								
							
											while($row = mysqli_fetch_array($result)) {
												
												   
													$pieces = explode(",", $row['plants_s']);
												   
												   
														$names = explode(",", $row['plants_s']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}
												
													echo "<table cellspacing='5px'><tr>";
												
												
											   		$xx = 0;
													$zCount = 0;
													$yn = 0;
												
												   if ($yn != 6){
												
													if (!empty($names[0])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													   
												   }
												
											   	echo "</tr></table><br>"; 
												
											}
											
										?>
										
										
										<br>
										</p>
									</div>
		
		
									<? }} ?>
		
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT * FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
										// banner rotating section
												
												while($row = mysqli_fetch_array($result34)) {
													
												if (!empty($row['brands_c'])) {
		
		
		
		
									?>				
									<button class="accordion">T &amp; O Chemicals &amp; Admendments</button>
									<div class="panel">
									  	<p>
											
										<?
											
									// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "SELECT brands_c FROM new_vendor WHERE id='" . $key2 . "' ";
											$result=mysqli_query($conn,$sql);								
									
										// banner rotating section
											
								
							
											while($row = mysqli_fetch_array($result)) {
												
												   
													$pieces = explode(",", $row['brands_c']);
												   
												   
														$names = explode(",", $row['brands_c']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}
												
													echo "<table cellspacing='5px'><tr>";
												
												
											   		$xx = 0;
													$zCount = 0;
													$yn = 0;
												
												   if ($yn != 6){
												
													if (!empty($names[0])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
													   
												   }
												
											   	echo "</tr></table><br>"; 
												
											}
											
										?>
										
										<br>
										</p>
									</div>
		
									<? }} ?>
		
		
		
		
		
		
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT * FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
										// banner rotating section
												
												while($row = mysqli_fetch_array($result34)) {
													
												if (!empty($row['brands_t'])) {
		
		
		
		
									?>				
									<button class="accordion">Tools &amp; Equipment</button>
									<div class="panel">
									  	<p>
											
										<?
											
									// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "SELECT brands_t FROM new_vendor WHERE id='" . $key2 . "' ";
											$result=mysqli_query($conn,$sql);								
									
										// banner rotating section
											
								
							
											while($row = mysqli_fetch_array($result)) {
												
												   
													$pieces = explode(",", $row['brands_t']);
												   
												   
														$names = explode(",", $row['brands_t']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}
												
													echo "<table cellspacing='5px'><tr>";
												
												
											   		$xx = 0;
													$zCount = 0;
													$yn = 0;
												
												   if ($yn != 6){
												
													if (!empty($names[0])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   													   
													   
													   
													   
													   
												   }
												
											   	echo "</tr></table><br>"; 
												
											}
											
										?>
										
										<br>
										</p>
									</div>
		
									<? }} ?>
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
									<?
												
									// Check if Brands Category exists
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql34 = "SELECT * FROM new_vendor WHERE id='" . $key2 . "' ";
											$result34=mysqli_query($conn,$sql34);								
									
										// banner rotating section
												
												while($row = mysqli_fetch_array($result34)) {
													
												if (!empty($row['plants_t'])) {
		
		
		
		
									?>						
		
	
									<button class="accordion">Turf</button>
									<div class="panel">
									  <p>
										  
										  
										<?
											
									// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "SELECT plants_t FROM new_vendor WHERE id='" . $key2 . "' ";
											$result=mysqli_query($conn,$sql);								
									
										// banner rotating section
											
								
							
											while($row = mysqli_fetch_array($result)) {
												
												   
													$pieces = explode(",", $row['plants_t']);
												   
												   
														$names = explode(",", $row['plants_t']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}
												
													echo "<table cellspacing='5px'><tr>";
												
												
											   		$xx = 0;
													$zCount = 0;
													$yn = 0;
												
												   if ($yn != 6){
												
													if (!empty($names[0])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage'><img class='limage2' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													   
													   
													   
													   
													   
													   
													   
												   }
												
											   	echo "</tr></table><br>"; 
												
											}
											
										?>
										
										
										
										<br>
										</p>
									</div>		
	
								<? }} ?>
	
	
			
										<?

											}
		
										?>
		
		
		
		
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
									  
									  
									<div style='width:750px; height:2px; background-color:#605b51; position: relative; left: -10px'> </div><br>
									  
									  
									  
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


				<div style="position:absolute; left: 775px; top: 350px">
					
					<center><h3 style="width: 150px; height: 30px; padding: 3px; font-family: Helvetica, Arial, 'sans-serif'; background-color: darkgoldenrod"><a href="#outletarea"><span style="color: #FFFFFF">Find A Store</span></a></h3></center><br>
					
					
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

											$sql = "SELECT * FROM new_vendor WHERE outlets='" . $key4 . "' AND `vendor_type_id` != '8' ORDER BY zip ASC";
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





