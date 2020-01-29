
<?
include("lo_top-main2-prod.inc");
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
			<td width="240px" valign="top">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-js3.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="240px" valign="top">
			
	
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
	
	
	

	
			
<div style="position:absolute; left: 425px; top:195px; z-index: 0; padding-bottom: 50px">
	
	

			
	<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Category: <? echo $catName1 ?> - <? echo $catName2 ?> - <? echo $_GET['state'] ?> <br>Featured Advertisers <span style="font-size: 12px">(Click on Advertiser Logo to Jump to Products)</span></h3></center>
	</div>

							
				<div style="position:relative; left: 55px; top:100px; z-index: 0; padding-bottom: 50px">
							
								
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

											$sql = "SELECT * FROM new_vendor WHERE (xlist LIKE '%580%' OR xlist LIKE '%581%' OR xlist LIKE '%270%' OR xlist LIKE '%1027%' OR xlist LIKE '%276%' OR xlist LIKE '%279%' OR xlist LIKE '%271%' OR xlist LIKE '%561%' OR xlist LIKE '%998%' OR xlist LIKE '%1251%' OR xlist LIKE '%1143%' OR xlist LIKE '%1347%' OR xlist LIKE '%1248%' OR xlist LIKE '%572%' OR xlist LIKE '%567%' OR xlist LIKE '%560%' OR xlist LIKE '%590%' OR xlist LIKE '%854%') AND (status='2' OR status='12' OR status='14' OR status='16' OR status='18') ORDER BY company_name ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   echo "<table><tr>";
											   $xx = 0;
												$logoCount = 0;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												  if ($row['state'] == $_GET['state']) {
													  
													  $coName = $row['company_name'];
													  
													  $compID = $row['id'];
													  
													  echo $coName;
													  
													 													  
												  }
												   
												   
											$sql55 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE new_vendor.id = '" . $compID . "' AND (status='12' OR status='14' OR status='16' OR status='18') ORDER BY company_name ASC";
											$result55 = $conn->query($sql55);												   
												   
												   $coName2 = $row['company_name'];
												   
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
												   if ($coName2 != $coName ) {
												   
												   if (($row['id'] != $rowNum) AND ($row['id'] != 8609)) {
														$rowNum = $row['id'];
													   
													   
												   
												   echo "<td class='logowidth'><a href='https://landscapearchitect.com/products/listing-a.php?number=" .$row['id']. "' target='_blank'><img style='width: 50%' src='https://landscapearchitect.com/products/images/".$row['logo']."'></a></td>";
												   $xx++;
												   $logoCount++;
													$coName = $coName2;   
													   
												   if ($xx % 3 == 0) { echo "</tr><tr>";
													
																	 }
											   }
												   
											   }}
												   
											   }
		
					   
											   	echo "</tr></table><br>"; 
												echo "<div style='width:750px; height:2px; background-color:#605b51;'> </div>";																
												echo "</div><br><br>";
		
		
		
												if ($logoCount == 1) {
													
													$botCount = 0;
													
												} elseif ($logoCount == 2) {
													
													$botCount = 0;
													
												} else {
												
												$botCount = $logoCount;
		
												}
		
		
		
		
												$topCount = ($logoCount + 2);
		
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   							//  <!-- Top Logo End -->
		
		
												if ($zCount == 1){
												echo "<div style='position: relative; left: 55px; top: 0px; padding-top:25px'>";
												}else{
												echo "<div style='position: relative; left: 55px; top: 25px; padding-top:25px'>";
												}		
		
		
		

					
											
					   
			   
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





