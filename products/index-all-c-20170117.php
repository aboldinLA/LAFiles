
<?
include("lo_top-main2-prod-a.inc");
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
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-a.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
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
											$cat3 = $_GET['state'];

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
	
	
	
	
	
	
	
	<div style="position:relative; left: 0px; top: 0px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Category: <? echo $catName2 ?> - State:&nbsp;<? echo $cat3 ?></h3></center><br>
	</div>					
			
			
			
<div style="position:absolute; left: 425px; top:225px; z-index: 0">
	
	

			
	<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Featured Advertisers <span style="font-size: 12px">(Click on Advertiser Logo to Jump to Products)</span></h3></center>
	</div>
			
				<div style="position:absolute; left: 300px; top:275px; z-index: 0">
							
							
							
			
					
							
							
							
							
							
							
							
							
							
								
								
							
								
									<!-- Top Logo Start -->
								
									<?
									
										// premium vendor Start

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

											$key4 = $_GET[number];
											$skey = $_GET[state];
					   

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product_use ON new_vendor.id=vendor_product_use.vendor_id WHERE vendor_product_use.xlist='". $key4 ."' AND (status='16' OR status='18') AND state='". $skey ."' ORDER BY company_name ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   echo "<table><tr>";
											   $xx = 0;
												$zCount = 0;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   if ($row['vendor_id'] != $rowNum) {
														$rowNum = $row['vendor_id'];												
												   
												   echo "<td><a href='#".$row['logo']."'><img style='max-height: 80px; width: 80%' src='https://landscapearchitect.com/products/images/".$row['logo']."'></a></td>";
												   $xx++;
												   $zCount++;
												   if ($xx % 4 == 0) { echo "</tr><tr>";
												   $zCount++;
																	 }
											   }
											   }
											   	echo "</tr></table><br>"; 
												echo "<div style='width:750px; height:2px; background-color:#605b51;'> </div>";																
												echo "</div><br><br>";
					   
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					
												echo "&nbsp;&nbsp;&nbsp;"; // . $zCount;
												if ($zCount == 0){
												echo "<div style='position:relative; left: 55px; top:25px; z-index: 0'>";
												}elseif($zCount == 1){
												echo "<div style='position:relative; left: 55px; top:75px; z-index: 0'>";
												}elseif($zCount == 2){
												echo "<div style='position:relative; left: 55px; top:75px; z-index: 0'>";
												}elseif($zCount == 3){
												echo "<div style='position:relative; left: 55px; top:75px; z-index: 0'>";
												}elseif($zCount == 4){
												echo "<div style='position:relative; left: 55px; top:75px; z-index: 0'>";
												}elseif($zCount == 5){
												echo "<div style='position:relative; left: 55px; top:75px; z-index: 0'>";
												}elseif($zCount == 6){
												echo "<div style='position:relative; left: 55px; top:150px; z-index: 0'>";
												}elseif($zCount == 7){
												echo "<div style='position:relative; left: 55px; top:150px; z-index: 0'>";
												}elseif($zCount == 8){
												echo "<div style='position:relative; left: 55px; top:150px; z-index: 0'>";
												}elseif($zCount == 9){
												echo "<div style='position:relative; left: 55px; top:150px; z-index: 0'>";
												}elseif($zCount == 10){
												echo "<div style='position:relative; left: 55px; top:225px; z-index: 0'>";
												}elseif($zCount == 11){
												echo "<div style='position:relative; left: 55px; top:225px; z-index: 0'>";
												}elseif($zCount == 12){
												echo "<div style='position:relative; left: 55px; top:225px; z-index: 0'>";
												}elseif($zCount == 13){
												echo "<div style='position:relative; left: 55px; top:225px; z-index: 0'>";
												}elseif($zCount == 14){
												echo "<div style='position:relative; left: 55px; top:225px; z-index: 0'>";
												}elseif($zCount == 15){
												echo "<div style='position:relative; left: 55px; top:300px; z-index: 0'>";
												}elseif($zCount == 16){
												echo "<div style='position:relative; left: 55px; top:300px; z-index: 0'>";
												}elseif($zCount == 17){
												echo "<div style='position:relative; left: 55px; top:300px; z-index: 0'>";
												}elseif($zCount == 18){
												echo "<div style='position:relative; left: 55px; top:300px; z-index: 0'>";
												}elseif($zCount == 19){
												echo "<div style='position:relative; left: 55px; top:300px; z-index: 0'>";
												}elseif($zCount == 20){
												echo "<div style='position:relative; left: 55px; top:300px; z-index: 0'>";
												}elseif($zCount == 21){
												echo "<div style='position:relative; left: 55px; top:375px; z-index: 0'>";
												}elseif($zCount == 22){
												echo "<div style='position:relative; left: 55px; top:375px; z-index: 0'>";
												}elseif($zCount == 23){
												echo "<div style='position:relative; left: 55px; top:375px; z-index: 0'>";
												}elseif($zCount == 24){
												echo "<div style='position:relative; left: 55px; top:375px; z-index: 0'>";
												}elseif($zCount == 25){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 26){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 27){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 28){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 29){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 30){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 31){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 32){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 33){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}elseif($zCount == 34){
												echo "<div style='position:relative; left: 55px; top:450px; z-index: 0'>";
												}
					   
					   							//  <!-- Logo Adjustment End -->
					   
					   				// 18 Start
					   
												// Start of SE4 sort
					   
					   
										// Products Start

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
					   
					   
											$sql525 = "SELECT DISTINCT vendor_id FROM new_vendor LEFT JOIN vendor_product_use ON new_vendor.id=vendor_product_use.vendor_id WHERE vendor_product_use.xlist='". $key4 ."' AND status='18' AND state='". $skey ."' ORDER BY RAND()";
											$result525 = $conn->query($sql525);
					   
					   
											// product counting section
					   
					   
					   
							
											while($row = mysqli_fetch_array($result525)) {
												
												$numbers = $row['vendor_id'];
												

										// start produt row count from table
							
											$key4 = $_GET[number];							
											//$key2 = "28909";

											$sql25 = "SELECT * FROM new_vendor LEFT JOIN vendor_product_use ON new_vendor.id=vendor_product_use.vendor_id WHERE vendor_product_use.xlist='". $key4 ."' AND vendor_id='" . $numbers . "' ORDER BY vendor_product_use.vendor_id DESC";
											$result25 = $conn->query($sql25);
					   
					   
											// product counting section
					   
					   						$rowNum = 0;
							
											while($row = mysqli_fetch_array($result25)) {
												
												
												if ($row['vendor_id'] != $rowNum) {
													$rowNum = $row['vendor_id'];
														$sql15 = "SELECT * FROM vendor_product_use WHERE vendor_id='". $rowNum ."' AND xlist='". $key4 ."'";
														$result15 = $conn->query($sql15);
																$webNum2 = $row['website'];
																$webNum = $row['web'];
																$morProd = $rowNum;
													
															// product layout section
															$row_cnt = $result15->num_rows;
															if ($row_cnt > 4) {
																
															echo "<!-- Start Combo --><div id='" . $row['logo'] . "'><p style='line-height: 25px'>&nbsp;</p>";
													
													$sql6 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result6 = $conn->query($sql6);
													
													
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result6)) {
																if ($ii < 2 && $ss < 3) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row[photo] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ii++;
																	
																}else{
																	
																	echo "</tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																} 
																
																
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql199 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result199 = $conn->query($sql199);
																		while($row = mysqli_fetch_array($result199)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end
																
															echo "<div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://" . $webNum2 . "' target='_blank'>Contact Us </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
																
															?>	
																<link href="https://landscapearchitect.com/css/bootstrap.css" rel="stylesheet" type="text/css">

 																	
																
																<table>
																	<tr><td style='line-height: 10px'>&nbsp;</td></tr>
																	</table>
																<div class="panel-group" id="accordion<? echo $morProd; ?>" role="tablist" aria-multiselectable="true">
																	  <div class="panel panel-default" role="tab">
																		<div class="panel-heading">
																			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseOne<? echo $morProd; ?>"><span style="text-align: left"><strong>View Related Products From This Vendor</strong></span></a><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseTwo1<? echo $morProd; ?>"><span style="padding-left: 325px">Close Window</span></a></h4>
																		</div>
																		<div id="collapseOne<? echo $morProd; ?>" class="panel-collapse collapse">
																		  <div class="panel-body">
																		  <?
																		  
																			// Start Extra
																
																			// Products Start

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
																
																
																			// product layout section
																

																			echo "<div id='" . $row['logo'] . "'>&nbsp;</div>";

																	$sql86 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $morProd . "' ORDER BY id DESC";
																	$result86 = $conn->query($sql86);

																			$ii = 0;
																			$ss = 1;
																			$qz = 15;
																			echo "<!-- Start View More Section --><table><tr>";
																		while($row = mysqli_fetch_array($result86)) {
																			
															if ($row['web'] == 'video') {
																
																			
																			
																				if ($ii < 3 && $ss <= $qz) {														
																					echo "<td align='left'><div><center><figure>" . $row['web_photo'] . "<br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																					$ii++;
																					$ss++;
																				}else{
																					echo "</tr><tr>";
																					$ii = 0;
																				}
																																				
															} else {																			
																			
																			
																				if ($ii < 3 && $ss <= $qz) {														
																					echo "<td align='left'><div><center><figure><a href='http://" . $row['web'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row[photo] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																					$ii++;
																					$ss++;
																				}else{
																					echo "</tr><tr>";
																					$ii = 0;
																				}
																				}} 


																			echo "</tr></table><!-- End View More Section -->";
																
																	$sql99 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result99 = $conn->query($sql99);
																		while($row = mysqli_fetch_array($result99)) {
																			$coName = $row['company_name'];
																			
																		}
																
																		  // End Extra
																		  
																		  ?>
																		  More Related Products from <? echo $coName; ?>																	  
																	  
																		  
																		  
																		  </div>
																		</div>
																		
																		  <div class="panel panel-default">
																			<div class="panel-heading">
																		
																			</div>
																			<div id="collapseTwo1<? echo $morProd; ?>" class="panel-collapse collapse">

																			  </div>
																		  </div>																		
																		
																		
																		
																  </div>
																</div>
																

																															
																<script src="https://landscapearchitect.com/js/jquery-1.11.3.min.js"></script>
																<script src="https://landscapearchitect.com/js/bootstrap.js"></script>																
															<?
													echo "<div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Combo -->";																
																
													}else{
																
																
															echo "<!-- Start Sgl --><div id='" . $row['logo'] . "'>&nbsp;</div><br>";
													
													$sql16 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result16 = $conn->query($sql16);
	
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result16)) {
															
															
															if ($row['web'] == 'video') {
																
																if ($ii < 2 && $ss < 3) {														
																	echo "<td align='left'><div><center><figure>" . $row['web_photo'] . "<br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ii++;
																}else{
																	echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																
															} else {
															
																if ($ii < 2 && $ss < 3) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: scroll; overflow-y: scroll' src='https://landscapearchitect.com/products/images/" . $row[photo] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ii++;
																}else{
																	echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																} }
																
																
																
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql299 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result299 = $conn->query($sql299);
																		while($row = mysqli_fetch_array($result299)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end																
																
																
																
																
															echo "<br><div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://" . $webNum2 . "' target='_blank'>Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
													
													echo "<br><div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Sgl -->";																												
																
																
																
																
															}
												}
											}	
											}
							
					   			// 18 End
								// End of SE4 sort
					   
					   			// 16 Start
					   
					
										// Products Start

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


										// start produt row count from table
							
											$key4 = $_GET[number];							
											//$key2 = "28909";

											$sql25 = "SELECT * FROM new_vendor LEFT JOIN vendor_product_use ON new_vendor.id=vendor_product_use.vendor_id WHERE vendor_product_use.xlist='". $key4 ."' AND status='16' AND state='". $skey ."' ORDER BY vendor_product_use.vendor_id DESC";
											$result25 = $conn->query($sql25);
					   
					   
											// product counting section
					   
					   						$rowNum = 0;
							
											while($row = mysqli_fetch_array($result25)) {
												
												if ($row['vendor_id'] != $rowNum) {
													$rowNum = $row['vendor_id'];
														$sql15 = "SELECT * FROM vendor_product_use WHERE vendor_id='". $rowNum ."' AND xlist='". $key4 ."'";
														$result15 = $conn->query($sql15);
																$webNum2 = $row['website'];
																$webNum = $row['web'];
																$morProd = $rowNum;
													
															// product layout section
															$row_cnt = $result15->num_rows;
															if ($row_cnt > 2) {
																
															echo "<!-- Start Combo --><div id='" . $row['logo'] . "'><p style='line-height: 25px'>&nbsp;</p>";
													
													$sql6 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result6 = $conn->query($sql6);
													
													
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result6)) {
																if ($ii < 2 && $ss < 2) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row[photo] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ii++;
																}else{
																	echo "</tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																} 
																
																
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql199 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result199 = $conn->query($sql199);
																		while($row = mysqli_fetch_array($result199)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end
																
															echo "<div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://" . $webNum2 . "' target='_blank'>Contact Us </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
																
															?>	
																<link href="https://landscapearchitect.com/css/bootstrap.css" rel="stylesheet" type="text/css">

 																	
																
																<table>
																	<tr><td style='line-height: 10px'>&nbsp;</td></tr>
																	</table>
																<div class="panel-group" id="accordion<? echo $morProd; ?>" role="tablist" aria-multiselectable="true">
																	  <div class="panel panel-default" role="tab">
																		<div class="panel-heading">
																			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseOne<? echo $morProd; ?>"><span style="text-align: left"><strong>View Related Products From This Vendor</strong></span></a><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseTwo1<? echo $morProd; ?>"><span style="padding-left: 325px">Close Window</span></a></h4>
																		</div>
																		<div id="collapseOne<? echo $morProd; ?>" class="panel-collapse collapse">
																		  <div class="panel-body">
																		  <?
																		  
																			// Start Extra
																
																			// Products Start

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
																
																
																			// product layout section
																

																			echo "<div id='" . $row['logo'] . "'>&nbsp;</div>";

																	$sql86 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $morProd . "' ORDER BY id DESC";
																	$result86 = $conn->query($sql86);

																			$ii = 0;
																			$ss = 1;
																			$qz = 15;
																			echo "<!-- Start View More Section --><table><tr>";
																		while($row = mysqli_fetch_array($result86)) {
																				if ($ii < 3 && $ss <= $qz) {														
																					echo "<td align='left'><div><center><figure><a href='http://" . $row['web'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row[photo] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																					$ii++;
																					$ss++;
																				}else{
																					echo "</tr><tr>";
																					$ii = 0;
																				}
																				} 


																			echo "</tr></table><!-- End View More Section -->";
																
																	$sql99 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result99 = $conn->query($sql99);
																		while($row = mysqli_fetch_array($result99)) {
																			$coName = $row['company_name'];
																			
																		}
																
																		  // End Extra
																		  
																		  ?>
																		  More Related Products from <? echo $coName; ?>																	  
																	  
																		  
																		  
																		  </div>
																		</div>
																		
																		  <div class="panel panel-default">
																			<div class="panel-heading">
																		
																			</div>
																			<div id="collapseTwo1<? echo $morProd; ?>" class="panel-collapse collapse">

																			  </div>
																		  </div>																		
																		
																		
																		
																  </div>
																</div>
																

																															
																<script src="https://landscapearchitect.com/js/jquery-1.11.3.min.js"></script>
																<script src="https://landscapearchitect.com/js/bootstrap.js"></script>																
															<?
													echo "<div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Combo -->";																
																
															// start of smaller section images
																
															}else{
																
																
															echo "<!-- Start Sgl --><div id='" . $row['logo'] . "'>&nbsp;</div><br>";
													
													$sql16 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result16 = $conn->query($sql16);
																
													
													
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result16)) {
																if ($ii < 2 && $ss < 3) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: scroll; overflow-y: scroll' src='https://landscapearchitect.com/products/images/" . $row[photo] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ii++;
																}else{
																	echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																}  
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql299 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result299 = $conn->query($sql299);
																		while($row = mysqli_fetch_array($result299)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end																
																
																
																
																
															echo "<br><div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://" . $webNum2 . "' target='_blank'>Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
													
													echo "<br><div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Sgl -->";																												
																
																
																
																
															}
												}
											}							
							
										// end produt row count from table
							
							
							
	
							
				
										echo "</div>";
					
												// echo $zCount;
												if ($zCount == 1){
												echo "<div style='position:relative; left: 55px; top:100px; z-index: 0'>";
												}elseif ($zCount ==2){
												echo "<div style='position:relative; left: 55px; top:100px; z-index: 0'>";
												}else{
												echo "<div style='position:relative; left: 55px; top:25px; z-index: 0'>";
												}						   
					   
					   
					   
				
				
										echo '<div>';
			
                   echo '<center><h3 style="font-family: Helvetica, Arial; font-size: ; font-weight:400">Additional Suppliers</h3></center>';
										echo "</div><br><br>";
					   
											// <!-- 16 End -->
					   
											// <!-- 16 and 18 Logo Start -->
										echo '<div>';
									
										// premium vendor Start

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

											$key4 = $_GET[number];							
											$xxx = 0;
											$zzz = 1;
					
											echo "<table><tr>";

											$sql2333 = "SELECT * FROM new_vendor WHERE xlist LIKE '%" . $key4 . "%' AND (status='16' OR status='18') ORDER BY company_name ASC";
											$result2333 = $conn->query($sql2333);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2333)) {
																if ($xxx < 3 && $zzz < 6) {														
																	echo "<td align='left'><div><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['id'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['logo'] . "'></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table></div></td><td style='width: 5px'>&nbsp;</td>";
																	$xxx++;
																}else{
																	echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
																	$zzz++;
																	$xxx = 0;
																}
																} 
																
																
															echo "</tr></table>";
											// <!-- 16 and 18 Logo End -->
					   
					   
												include("lo_top-main2-bottom.inc");
					   
					?>
				
				</div>
				
				</div>
				
			
			</td>
			
			
			
		</tr>
	</table>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





