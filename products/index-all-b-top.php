
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
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side.inc");
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
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Featured Advertisers For The Category: <? echo $catName1 ?></h3></center><br>
	</div>					
			
			
			
	<div style="position:absolute; left: 325px; top:225px; z-index: 0">
			
	<h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px"><span style="font-size: 12px">(Click on Advertiser Logo to View to Vendor Profile or Use Menu on the left to View Specific Categories)</span></h3>
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

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND (new_vendor.status='16' OR new_vendor.status='18') ORDER BY new_vendor.company_name ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   echo "<table><tr>";
											   $xx = 0;
												$zCount = 0;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   if ($row['vendor_id'] != $rowNum) {
														$rowNum = $row['vendor_id'];												
												   
												   echo "<td><a href='https://landscapearchitect.com/products/listing-a.php?number=" .$row['vendor_id']. "' target='_blank'><img style='max-height: 80px; width: 80%' src='https://landscapearchitect.com/products/images/".$row['logo']."'></a></td>";
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
					?>
		

<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





