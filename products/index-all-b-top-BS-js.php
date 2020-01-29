
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
	
	
									?>		  				
				
			


		<?
		include("lo_top-main2-side-js3-ban-whole.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
				
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
	
	
	
	
	
	

			
	<div style="position:absolute; left: 350px; top:225px; z-index: 0; width: 700">
			
		<center><h3 style="font-family: Helvetica, Arial, sans-serif; font-size: 18px">Featured Vendors For The Category: <? echo $catName1 ?><br><span style="font-size: 14px; font-weight 200; font-family: Helvetica, Arial, sans-serif">Click on Vendor Logo to View their Profile<br>Use Menu on the Left to View Specific Categories</span></h3></center>
	</div>
			
				<div style="position:absolute; left: 275px; top:300px; z-index: 0">
							
							
								
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

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18') ORDER BY new_vendor.company_name ASC";
											$result = $conn->query($sql);									
									
												// logo section
												
											   echo "<table cellspacing='5px'><tr>";
											   $xx = 0;
												$zCount = 0;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   if ($row['vendor_id'] != $rowNum) {
														$rowNum = $row['vendor_id'];												
												   
												   echo "<td width='250px'><div class='limage'><a href='https://landscapearchitect.com/products/listing-a.php?number=" .$row['vendor_id']. "' target='_blank'><img class='limage2' src='https://landscapearchitect.com/products/images/".$row['logo']."'></a></td>";
												   $xx++;
												   $zCount++;
												   if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 40px'>&nbsp;</td></tr><tr>";
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





