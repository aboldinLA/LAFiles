<?
// Switch

//$caseName = $_GET['&caseName=ladVendor'];

$caseName = "ladVendor";

switch ($caseName) {
    case "ladVendor":

?>

<?

// Top Section - HTML
include("lad_top-main.inc");

	$uname2 = $_SESSION['name'];

	$uname3 = $_SESSION['lname'];

	$ucode = $_SESSION['user'];

?>
	
	
<?

// Top Section - Nav Section
include("lad_header-main3.inc");

?>

	
  <style>

					.vendorInfo span {
					width: 100%; 
					overflow-y: auto; 
					-webkit-line-clamp: 11; 
					-webkit-box-orient: vertical;
					display: -webkit-box;
					max-height: 222px;
				}
</style>


	
<section>
  <div class="container">
    <div class="row" >
      <div class="col-lg-12" style="margin-bottom: 30px;">
        <h3>Our Services  <? if  (!empty($_GET['uname2'])) { ?>- Welcome: <? echo $_GET['uname2']; ?><? } else { echo "&nbsp;";}?></h3>
		  
		  

									<?
									
										// Vendor Start

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
							
											$key2 = $_GET['number'];
											$key23 = $_GET['prodNum'];							
											//$key2 = "28909";
		  
		  									if (empty($key23)) {
												
											$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND photo LIKE '%jpg%' AND photo NOT LIKE '%Unavailable%' ORDER BY photo_time DESC";
											$result = $conn->query($sql);	
												
											} else {
												
											$sql = "select * from vendor_product where id='" . $key23 . "' ORDER BY ID DESC";
											$result = $conn->query($sql);														
												
											}
		  
		  

							
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
												
												if ($xcount < 1) {
												
												
									?>                            	
	
					<style>
						
						
						@media screen and (min-width: 992px) {
							.col-md-4 {
								width: 32%;
							}	
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
						
						.col-md-10 {
							width: 100%;
							padding-left: 40px;
							padding-right: 40px;
						}
						
						.col-md-offset-1 {
							margin-left: 2%;
						}

					

					</style>			
	  
	  	
	
	
		<!-- Main Image -->
        <div class="col-lg-6">
			<div class="thumbnail" style="background-color: #FFFFFF; box-shadow: 5px 5px 5px #888888"> <div class="limage5"><img src="https://landscapearchitect.com/products/images/<? echo $row['photo']; ?>" alt="Thumbnail Image 1" class="limage6"></div>
            <div class="caption">
				<center><h3><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?></h3>
              <p><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['description']))); ?></p></center>
              <hr>
				
				<?
													
						$cadd2 = $row['cadd'];
							if ($cadd2===NULL){$cadd23 = '&nbsp'; } else {$cadd23 = '<a href="#" class="btn btn-success" role="button">Download CAD Details</a>';}
																
						$pdff2 = $row['pdff'];
							if ($pdff2===NULL){$pdff23 = '&nbsp'; } else {$pdff23 = '&nbsp;<a href="#" class="btn btn-success" role="button">Download PDF Details</a>';}
																
						$skup2 = $row['mediap'];
							if ($skup2===NULL){$skup23 = '&nbsp'; } else {$skup23 = '&nbsp;<a href="#" class="btn btn-success" role="button">Download DWG Details</a>';}										
													
				?>
				
				
				
				
				<div class="row" style="display: flex; justify-content: space-around; align-items: center;">
        			<div>
              			<p class="text-center"><? echo $cadd23; ?></p>
					</div>
        			<div>
              			<p class="text-center"><? echo $pdff23; ?></p>
					</div>					
        			<div>
              			<p class="text-center"><? echo $skup23; ?></p>
					</div>					
					
				</div>
            </div>
          </div>
        </div>	
	
										<?
													
											$xcount++;
													
											}}
												
												
										?>
	

									<?
									
										// Vendor Info Start

										

							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "'";
											$result = $conn->query($sql);
		  
		  
		  
		  
									
										// Manufacture Section
							
											while($row = mysqli_fetch_array($result)) {
												
												
									?>                	
	
	
	
	
		<!-- Company Info -->
        <div class="col-lg-4 col-lg-offset-1" style="position: relative; left: 35px">
			
			<table>
				<tr>
					<td colspan="2">
						<center><img width="40%" src="https://landscapearchitect.com/products/images/<? echo $row['logo']; ?>" alt="company logo" ></center>
					</td>
				</tr>
				<tr>
					<td style="width: 5px">&nbsp;</td>
					<td>
						<div class="caption">
							<center><h2><? echo $row['company_name']; ?></h2></center>
						  	<p><strong>Address: </strong><? echo $row['address']; ?><br>

							<strong>City/State/Zip: </strong><? echo $row['city']; ?> / <? echo $row['state']; ?> / <? echo $row['zip']; ?><br>


							<strong>Phone: </strong><? echo $row['phone']; ?><br>


							<strong><? $fax = $row['fax']; $faxCode = "Fax: </strong>"; $codeBreak = "<br>"; if (!empty($fax)) {echo $faxCode . $fax . $codeBreak;} else {echo '';}; ?>


							<strong>Website: </strong><a href="http://<? echo $row['website']; ?>" target="_blank"><? echo $row['website']; ?></a><br>


							  <strong>Contact: </strong><a href="http://<? echo $row['contact_us']; ?>" target="_blank">More Information</a></p>
						  <hr>
						</div>
					</td>
				</tr>
			</table>
			
			
<title><? echo $row['company_name'] ?></title>
			
			
			
			
			<table>
				<tr>
					
					<td colspan="2">
						
						<p class="vendorInfo"><strong>Vendor Information: </strong><br><span ><? echo $row['profile']; ?></span></p>
						
						
						
					</td>
				</tr>
			</table>
			
	
			
          </div>
        </div>	
	

									<?
										
										$venType = $row['vendor_type_id'];
												

										}

										// Vendor Info End
		  
										// Vendor Wholesale
		  
		  
		  								if (($venType == 4) || ($venType == 6)) {

									?>	
	
<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
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
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<p>Click on the buttons inside the tabbed menu:</p>
	
	
	<?
											
											
	
	$ctab = $_GET['ctab'];
	$ctab2 = $_GET['ctab2'];
	
	if ($ctab != 'cprods2') {
	
	?>
	

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"  id="defaultOpen">Products</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Locations</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Brands</button>
</div>
	
	<?
	
	} elseif (($ctab == 'cprods2') && ($ctab2 != 'cprods')) {
	
	?>
	
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Products</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"  id="defaultOpen">Locations</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Brands</button>
</div>	
	
	
	<?
		
	} elseif (($ctab == 'cprods2') && ($ctab2 == 'cprods')) {
		
	?>
		
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"  id="defaultOpen">Products</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Locations</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Brands</button>
</div>		
		
		
	<?
		
	} 
											
											
											
											
		
	?>	
	

<div id="London" class="tabcontent">
  <h3>Products for this Vendor</h3>
  <p>
	
	
					<style>
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
						
						
						
					

					</style>			
	  
	  
	  									<?
									
										// Vendor Start

										

							
											$key2 = $_GET['number'];
											$keyX = $_GET['xnum'];
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "' AND `vendor_type_id` != '6' AND `vendor_type_id` != '4' AND xlist = '" . $keyX . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												
									?> 
	  


				<div class="col-md-10 col-md-offset-1">
					<a id="cprods">&nbsp;</a>
					<center><h1 style="font-size: 24px;"><? echo $row['company_name']; ?></h1></center>
					
			
									<?

										}

										// Vendor Start

									?>

					<center><h4 style="font-size: 35px; font-weight: bold; margin-bottom: 18px;"><? $xnam = $_GET['xnam']; if (empty($xnam)) { echo "All Products"; } else { echo $_GET['xnam']; } ?></h4></center>





							<center><select onchange="if (this.value) window.location.href=this.value" width="200px" height="50px" style="font-size: 20px;">
							  <option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=<? echo $key2; ?>" style="font-size: 18px; font-weight: bold">Product Categories w/ Number of Products&nbsp;&nbsp;</option>		

												<?



													// Get Products

														$key2 = $_GET['number'];
											
														$keyX = $_GET['xnum'];							
											
														//$key2 = "28909";

														$sql = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' ORDER BY name ASC";
														$result = $conn->query($sql);






													// List Product SGL Name with Count

														$xCount = 0;

														while($row = mysqli_fetch_array($result)) {
															
															

															


															$sql44 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' AND xlist = '" . $row['xlist'] . "' AND series_product = 0";
															$result44 = $conn->query($sql44);					


																	$num_rows = mysqli_num_rows($result44);												


															if ($xCount != $row['xlist']) {
																
																
																
																
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
																															
																
																
																


															echo  '<option value="https://landscapearchitect.com/landscape-design-category/' . $string . '/' . $string2 . '/' . $key2 . '/' . $key3 . '">' . $row['name'] . '&nbsp;<strong>(' . $num_rows . ')</strong></option>';


															$xCount = $row['xlist'];

															}

												?>                			






												<? } 
											
											
																														
											
											
											

													echo  '<option value="https://landscapearchitect.com/landscape-design-category/' . $string . '/' . $string2 . '/' . $key2 . '/' . $key3 . '">All Products</option>';

												?>

								</select></center><br>	




												<style>

													#prodBox { 

														border: thin silver solid;
														box-shadow: 5px 5px 5px #888888;
														padding-left: 5px;
														padding-right: 5px;

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

												</style>





												<?

													// Vendor Start



													// start article from table

														$key2 = $_GET['number'];

														$xKey = $_GET['xnum'];


														if (empty($xKey)) {

														$iCount = 1;
															
										if ($ctab != 'cprods2') {


														$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND photo LIKE '%jpg%' AND series_product ='0' AND imported='0' ORDER BY img_order ASC";
														$result = $conn->query($sql);
											
										} elseif ($ctab == 'cprods2') {
											
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "'  AND `xlist` LIKE '" . $_GET['xnum'] . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);

										}
															
															
													// Product section


														while($row = mysqli_fetch_array($result)) {
															
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
															
															
															
														
															

															if ($iCount == 1) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}										
																
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="row"><div class="col-md-4" id="prodBox"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																$iCount++;

															} elseif ($iCount == 2) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}																	
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox2"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																$iCount++;

															} elseif ($iCount == 3) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}																	
																$iCount = 1;
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox3"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div></div><br>';

															}											

													}

													echo '<br>';


														} else {

														$iCount = 1;


														$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $xKey . "' AND photo LIKE '%jpg%' AND series_product ='0' AND imported='0' ORDER BY img_order ASC";
														$result = $conn->query($sql);									

													// Product section


														while($row = mysqli_fetch_array($result)) {
															
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
																														
															
															
															

															if ($iCount == 1) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}																	
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="row"><div class="col-md-4" id="prodBox"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																
																
																
																
																$iCount++;

															} elseif ($iCount == 2) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}	
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox2"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																
																
																
																
																$iCount++;

															} elseif ($iCount == 3) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}	
																
																$iCount = 1;
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox3"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div></div><br>';
																
																
																

															}											

													}

													echo '<br>';												


														}

													// Vendor Start

												?>	



					<br>		




				  </div>
					
	
	
	
	
	
	</p>
</div></div>

<div id="Paris" class="tabcontent">
	
	
	
  <h3>Outlet Locations</h3>
  <p>
	  
	  
	  


	  									<?
									
										// Vendor Start

										

							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "' AND `vendor_type_id` != '6' AND `vendor_type_id` != '4'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												
									?> 
	  


				<div class="col-md-10 col-md-offset-1">
					<a id="cprods2">&nbsp;</a>
					<center><h1 style="font-size: 24px;"><? echo $row['company_name']; ?> - List View</h1></center>
					
			
									<?

										}

										// Vendor Start

									?>
					





					
					
					
					
	  <div class="col-md-10 col-md-offset-1">
		  
		  
		  
									<?
									
		  
										$ctab = $_GET['ctab'];

										if ($ctab != 'cprods2') {
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);
																
											
											
											
										} elseif ($ctab == 'cprods2') {
											
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "'  AND `xlist` LIKE '" . $_GET['xnum'] . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);
																
											
											
											
										} elseif ($ctab == 'cprods3') {
											
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "'  AND `xlist` LIKE '" . $_GET['xnum'] . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);
																
											
											
											
										}
										
					
									?>	
		  
		<center><h3 style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; padding-left: 20px">Outlet Locations<br><span style="font-size: 12px"> Sorted By Zip Code - Click on Company Name for Directions</span></h3><br></center>
	
						
					<div style="position:relative; left: 0px">
									<!-- Top Address Start -->
						
									<style>
										.tooltip {
											position: relative;
											display: inline-block;
											border-bottom: 1px dotted black;
											color: #000000;
										}

										.tooltip .tooltiptext {
											width: 150px;
											background-color: #555;
											color: #000000;
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
					   							echo "<table width='100%'>"; 
					   
											   while($row = mysqli_fetch_assoc($result)) {
												 if ($i == 1) {
													 echo "<tr>";
												  } 
												   echo "<td class='logowidth2' align='center'><a href='https://www.google.com/maps/place/" . $row['address'] . ",+" . $row['city'] . ",+" . $row['state'] . "+" . $row['zip'] . "' target='_blank'><div><span style='color:#0070a0; font-size: 14px; font-weight:bold'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['company_name']))) . "</span></div></a>" . $row['phone'] . "<br>" . $row['city'] . ", " . $row['zip'] . "</td>"; 
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
												
												
											
					   
					   
					?>		  
		  
		  
	</div>
		  
		  
		  
		  
		  
          						</div>
					
			  
			  
          		</div>	
	
	
	
	
	</p> 
</div>

<div id="Tokyo" class="tabcontent">
	<h3 style="position: relative; left: 75px">Brands Sold by Vendor - <span style="font-weight: 300; font-size: 18px"><strong>View Brand for:</strong>&nbsp;&nbsp;Hardscapes - <a href="#irrigation">Irrigation</a> - <a href="#lighting">Lighting</a> - <a href="#chemicals">T &amp; O Chemicals</a> - <a href="#tools">Tools &amp; Equipment</a></span></h3>
  	<p>
	
					<style>
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


					</style>		
		
		
		


					<a id="cprods">&nbsp;</a>
	
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

		
										.limage111 {
											width: 175px;
											height: 75px;    
											overflow: hidden;
											margin: 10px;
											text-align: center;
											line-height: 75px;
										}
									
										.limage222 {
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
		
		
									<div style="position: relative; left: 450px">
		

										<button class="accordion" style="background-color: lightslategray; width: 35%"><center>Hardscapes</center></button>
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
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }		
													   
													if (!empty($names[25])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[25] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[26])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[26] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[27])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[27] . ".jpg'></div></td>";
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
		
		
										<a name="irrigation" style="position: relative; top: -25px">&nbsp;</a>

										<button class="accordion" style="background-color: lightslategray; width: 35%"><center>Irrigation</center></button>
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
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }			
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }																   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
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
		
										<a name="lighting" style="position: relative; top: -25px">&nbsp;</a>

										<button class="accordion" style="background-color: lightslategray; width: 35%"><center>Lighting</center></button>
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
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
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
		
										<a name="plant" style="position: relative; top: -25px">&nbsp;</a>
	
										<button class="accordion" style="background-color: lightslategray; width: 35%"><center>Plant Materials</center></button>
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
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
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
										
										<a name="chemicals" style="position: relative; top: -25px">&nbsp;</a>
										
										<button class="accordion" style="background-color: lightslategray; width: 35%"><center>T &amp; O Chemicals &amp; Admendments</center></button>
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
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
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
										
										<a name="tools" style="position: relative; top: -25px">&nbsp;</a>
										
										<button class="accordion" style="background-color: lightslategray; width: 35%"><center>Tools &amp; Equipment</center></button>
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
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[0] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}
												
													if (!empty($names[1])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[1] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;
													}}												
												
													if (!empty($names[2])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[2] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }
													   
													if (!empty($names[3])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[3] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[4])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[4] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }													   
													   
													if (!empty($names[5])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[5] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[6])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[6] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[7])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[7] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[8])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[8] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[9])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[9] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[10])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[10] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[11])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[11] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[12])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[12] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[13])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[13] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[14])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[14] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[15])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[15] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[16])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[16] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[17])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[17] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[18])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[18] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[19])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[19] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }	
													   
													if (!empty($names[20])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[20] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[21])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[21] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[22])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[22] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[23])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[23] . ".jpg'></div></td>";
													$xx++;
												   	$yn++;
												   	$zCount++;
 													if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 25px'>&nbsp;</td></tr><tr>";
												   	$zCount++;															
													} }														   
													   
													if (!empty($names[24])) {
													echo "<td><div class='limage111'><img class='limage222' src='https://landscapearchitect.com/products/product-logos/" . $names[24] . ".jpg'></div></td>";
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
				
		
	</div>
	
	
	
	
	</p>
</div>

<script>

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();	
	
	
	
	
</script>
     	
		  
		
		
		
		
		 							 <? } elseif ($venType == 1) {  //Product Section Start    ?>
		  
       
 
			
<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
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
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<p>Click on the buttons inside the tabbed menu:</p>
	
	
	<?
	
	$ctab = $_GET['ctab'];
	$ctab2 = $_GET['ctab2'];
	
	if ($ctab != 'cprods2') {
	
	?>
	

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"  id="defaultOpen">Products</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Listings</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">3D Models</button>
</div>
	
	<?
	
	} elseif (($ctab == 'cprods2') && ($ctab2 != 'cprods')) {
	
	?>
	
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Products</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"  id="defaultOpen">Listings</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">3D Models</button>
</div>	
	
	
	<?
		
	} elseif (($ctab == 'cprods2') && ($ctab2 == 'cprods')) {
		
	?>
		
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"  id="defaultOpen">Products</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Listings</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">3D Models</button>
</div>		
		
		
	<?
		
	} 
		
	?>	
	

<div id="London" class="tabcontent">
  <h3>Products for this Vendor</h3>
  <p>
	
	
					<style>
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
						
					

					</style>			
	  
	  
	  									<?
									
										// Vendor Start

										

							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "' AND `vendor_type_id` != '6' AND `vendor_type_id` != '4'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												
									?> 
	  


				<div class="col-md-10 col-md-offset-1">
					<a id="cprods">&nbsp;</a>
					<center><h1 style="font-size: 24px;"><? echo $row['company_name']; ?></h1></center>
					
			
									<?

										}

										// Vendor Start

									?>
                    
                    
                                    <? 
                                                    
                                                    if(empty($_GET['xnum'])){
                                                        
                                                        $catName = "All Products";
                                                        
                                                    } else {
                                            
														$sql = "select * from xlist where id='" . $_GET['xnum'] . "'";
														$result = $conn->query($sql); 
                                            
														while($row = mysqli_fetch_array($result)) {
                                                            
                                                            $catName = $row['name'];
                                                            
                                                        }
                                                    }
                                            
                                            
                                            
                                    ?>

					<center><h4 style="font-size: 35px; font-weight: bold; margin-bottom: 18px;"><? echo $catName; ?></h4></center>





							<center><select onchange="if (this.value) window.location.href=this.value" width="200px" height="50px" style="font-size: 20px;">
							  <option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=<? echo $key2; ?>" style="font-size: 18px; font-weight: bold">Product Categories w/ Number of Products&nbsp;&nbsp;</option>		

												<?



													// Get Products

														$key2 = $_GET['number'];
											
														$keyX = $_GET['xnum'];							
											
														//$key2 = "28909";

														$sql = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' ORDER BY name ASC";
														$result = $conn->query($sql);






													// List Product SGL Name with Count

														$xCount = 0;

														while($row = mysqli_fetch_array($result)) {
															
															

															


															$sql44 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' AND xlist = '" . $row['xlist'] . "' AND series_product = 0";
															$result44 = $conn->query($sql44);					


																	$num_rows = mysqli_num_rows($result44);												


															if ($xCount != $row['xlist']) {
																
																$keyX = $row['xlist'];							
																
																
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
																															
																
																
																


															echo  '<option value="https://landscapearchitect.com/landscape-design-category/' . $string . '/' . $string2 . '/' . $key2 . '/' . $keyX . '">' . $row['name'] . '&nbsp;<strong>(' . $num_rows . ')</strong></option>';


															$xCount = $row['xlist'];

															}

												?>                			






												<? } 
											
											
																$keyX = $row['xlist'];							
											
											
																											
											
											
											

													echo  '<option value="https://landscapearchitect.com/landscape-design-category/' . $string . '/' . $string2 . '/' . $key2 . '/' . $keyX . '">All Products</option>';

												?>


								</select></center><br>	



												<style>

													#prodBox { 

														border: thin silver solid;
														box-shadow: 5px 5px 5px #888888;
														padding-left: 5px;
														padding-right: 5px;

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

												</style>




												<?

													// Vendor Start



													// start article from table

														$key2 = $_GET['number'];

														$xKey = $_GET['xnum'];


														if (empty($xKey)) {

														$iCount = 1;
															
										if ($ctab != 'cprods2') {


														$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND photo LIKE '%jpg%' AND series_product ='0' AND imported='0' ORDER BY img_order ASC";
														$result = $conn->query($sql);
											
										} elseif ($ctab == 'cprods2') {
											
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "'  AND `xlist` LIKE '" . $_GET['xnum'] . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);

										}
															
															
													// Product section


														while($row = mysqli_fetch_array($result)) {
															
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
															
															
															

															if ($iCount == 1) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}										
																
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="row"><div class="col-md-4" id="prodBox"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																$iCount++;

															} elseif ($iCount == 2) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}																	
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox2"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																$iCount++;

															} elseif ($iCount == 3) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}																	
																$iCount = 1;
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox3"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div></div><br>';

															}											

													}

													echo '<br>';


														} else {

														$iCount = 1;


														$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $_GET['xnum'] . "' AND photo LIKE '%jpg%' AND series_product ='0' AND imported='0' ORDER BY img_order ASC";
														$result = $conn->query($sql);									

													// Product section


														while($row = mysqli_fetch_array($result)) {
															
															
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
															
															
															
															

															if ($iCount == 1) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}																	
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="row"><div class="col-md-4" id="prodBox"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																
																
																
																
																$iCount++;

															} elseif ($iCount == 2) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}	
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox2"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div>';
																
																
																
																
																$iCount++;

															} elseif ($iCount == 3) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" style="margin-bottom: 3px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" style="margin-bottom: 3px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" style="line-height: 18px;"><img class="fileTypeThumb" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="margin-bottom: 3px;"><br>Media<br>PDF</a>';}	
																
																$iCount = 1;
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox3"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr><div class="fileTypeThumbContain">' . $cadd . $pdff . $skup . '</div></p></div><br></div></div><br>';
																
																
																

															}											

													}

													echo '<br>';												


														}

													// Vendor Start

												?>	



					<br>		




				  </div>
					
	

	
	
	
	</p>
</div></div>

<div id="Paris" class="tabcontent">
  <h3>Products by Listings</h3>
  <p>
	  
	  
	  


	  									<?
									
										// Vendor Start

										

							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "' AND `vendor_type_id` != '6' AND `vendor_type_id` != '4'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												
									?> 
	  


				<div class="col-md-10 col-md-offset-1">
					<a id="cprods2">&nbsp;</a>
					<center><h1 style="font-size: 24px;"><? echo $row['company_name']; ?> - List View</h1></center>
					
			
									<?

										}

										// Vendor Start

									?>
					
					<center><h4 style="font-size: 35px; font-weight: bold; margin-bottom: 18px;"><? $xnam = $_GET['xnam']; if (empty($xnam)) { echo "All Products"; } else { echo $_GET['xnam']; } ?></h4></center>





							<center><select onchange="if (this.value) window.location.href=this.value" width="200px" height="50px" style="font-size:20px;">
							  <option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=<? echo $key2; ?>" style="font-size: 18px; font-weight: bold">Product Categories w/ Number of Products&nbsp;&nbsp;</option>		

												<?

								
										


													// Get Products

														$key2 = $_GET['number'];							
														//$key2 = "28909";

														$sql = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' ORDER BY name ASC";
														$result = $conn->query($sql);






													// List Product SGL Name with Count

														$xCount = 0;

														while($row = mysqli_fetch_array($result)) {


															$sql44 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' AND xlist = '" . $row['xlist'] . "' AND series_product = 0";
															$result44 = $conn->query($sql44);					


																	$num_rows = mysqli_num_rows($result44);												


															if ($xCount != $row['xlist']) {


															echo  '<option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=' . $key2 . '&xnum=' . $row['xlist'] . '&xnam=' . $row['name'] . '&ctab=cprods2#cprods2">' . $row['name'] . '&nbsp;<strong>(' . $num_rows . ')</strong></option>';


															$xCount = $row['xlist'];

															}

												?>                			






												<? } 

													echo  '<option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=' . $key2 . '&ctab=cprods2#cprods2">All Products</option>';

												?>

								</select></center><br>	

					
					
					
					
	  <div class="col-md-10 col-md-offset-1">
		  
		  
		  
									<?
									
		  
										$ctab = $_GET['ctab'];

										if ($ctab != 'cprods2') {
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);
																
											
											
											
										} elseif ($ctab == 'cprods2') {
											
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "'  AND `xlist` LIKE '" . $_GET['xnum'] . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);
																
											
											
											
										} elseif ($ctab == 'cprods3') {
											
											
											
										$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "'  AND `xlist` LIKE '" . $_GET['xnum'] . "' AND series_product = 0 ORDER BY product_name ASC";
											$result = $conn->query($sql);
																
											
											
											
										}
											
											
											
		  

					

					
											
									
										// List Product SGL Name with Count
					
											$xCount = 0;
							
											while($row = mysqli_fetch_array($result)) {
												
												
												$sql44 = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist = '" . $row['xlist'] . "' AND series_product = 0";
												$result44 = $conn->query($sql44);					
					
												$num_rows = mysqli_num_rows($result44);												
												
												
													if ($xCount != $row['xlist']) {


													//echo  "<br><strong><span style='text-decoration: underline'>" . $row['name'] . '&nbsp;(' . $num_rows . ')</strong></span><br>';


													$xCount = $row['xlist'];

													}
												
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = ''; } else {$cadd = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><img width="30%" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg"  style="min-width: 30px;"><br>CAD<br>DWG</a>';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = ''; } else {$pdff = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><img width="30%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg"  style="min-width: 30px;"><br>CAD<br>PDF</a>';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = ''; } else {$skup = '<a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><img width="30%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" style="min-width: 30px;"><br>CAD<br>PDF</a>';}														
												
												
												
												echo '<div class="listViewItemContain"><img width="125px" style="padding-right: 10px; min-width: 125px;" src="https://landscapearchitect.com/products/images/' .$row['photo'] . '"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank" class="listViewItemTitle"><span style="font-size: 16px; font-weight: bold">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</span></a><div class="fileTypeThumbListContain">' . $cadd . '&nbsp;' . $pdff . '&nbsp;' . $skup . '</div></div><div style="width:100%; height:2px; background-color:#605b51; position: relative; left: -10px; margin-top: 10px; margin-bottom: 10px;"></div>';
												
												
												
									 		} 
					
					
					
					
					
					
					
									?>					
          						</div>
					
			  
			  
          		</div>	
	
	
	
	
	</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Products with 3D Models</h3>
  	<p>
	
					<style>
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


					</style>		
		
		
		


				<div class="col-md-10 col-md-offset-1">
					<a id="cprods">&nbsp;</a>
					<center><h1 style="font-size: 24px;"><? echo $row['company_name']; ?> Products with 3D Models</h1></center>
		

					<center><h4  style="font-size: 35px; font-weight: bold; margin-bottom: 18px;"><? $xnam = $_GET['xnam']; if (empty($xnam)) { echo "All Products"; } else { echo $_GET['xnam']; } ?></h4></center>





							<center><select onchange="if (this.value) window.location.href=this.value" style="font-size: 20px;">
							  <option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=<? echo $key2; ?>" style="font-size: 18px; font-weight: bold">Product Categories w/ Number of Products</option>		

												<?



													// Get Products

														$key2 = $_GET['number'];							
														//$key2 = "28909";

														$sql = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' AND (skup LIKE '%skp%' OR vwxx LIKE '%vxw%') ORDER BY name ASC";
														$result = $conn->query($sql);

														

													// List Product SGL Name with Count

														$xCount = 0;

														while($row = mysqli_fetch_array($result)) {


															$sql44 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $key2 . "' AND xlist = '" . $row['xlist'] . "' AND series_product = 0";
															$result44 = $conn->query($sql44);					


																	$num_rows = mysqli_num_rows($result44);												


															if ($xCount != $row['xlist']) {


															echo  '<option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=' . $key2 . '&xnum=' . $row['xlist'] . '&xnam=' . $row['name'] . '#cprods">' . $row['name'] . '&nbsp;<strong>(' . $num_rows . ')</strong></option>';


															$xCount = $row['xlist'];

															}

												?>                			






												<? } 

													echo  '<option value="https://landscapearchitect.com/LandscapeProducts/index-vendor.php?number=' . $key2 . '#cprods">All Products</option>';

												?>

							</select></center>	




												<style>

													#prodBox { 

														border: thin silver solid;
														box-shadow: 5px 5px 5px #888888;
														padding-left: 5px;
														padding-right: 5px;

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

												</style>





												<?

													// Vendor Start



													// start article from table

														$key2 = $_GET['number'];

														$xKey = $_GET['xnum'];


														if (empty($xKey)) {

														$iCount = 1;


														$sql77 = "select * from vendor_product where vendor_id='" . $key2 . "' AND (skup LIKE '%skp%' OR vwxx LIKE '%vxw%') ORDER BY id DESC";
														$result77 = $conn->query($sql77);
															
																$num_rows14 = mysqli_num_rows($result77);	
															
								
																if ($num_rows14 == 0) {
																	
																	echo '<div class="col-md-8 col-sm-offset-2"><center><h2>No 3D Models Available</h2></center></div>';																	
																	
																}
															
															

													// Product section


														while($row = mysqli_fetch_array($result77)) {

															if ($iCount == 1) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = '&nbsp'; } else {$cadd = '<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = '&nbsp'; } else {$pdff = '&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = '&nbsp'; } else {$skup = '&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}																		
																
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<br><div class="row"><div class="col-md-4" id="prodBox"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr>' . $cadd . $pdff . $skup . '</p></div><br><br></div>';
																$iCount++;

															} elseif ($iCount == 2) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = '&nbsp'; } else {$cadd = '<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = '&nbsp'; } else {$pdff = '&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = '&nbsp'; } else {$skup = '&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}																		
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox2"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr>' . $cadd . $pdff . $skup . '</p></div><br><br></div>';
																$iCount++;

															} elseif ($iCount == 3) {
																
																$cadd2 = $row['cadd'];
																if ($cadd2===NULL){$cadd = '&nbsp'; } else {$cadd = '<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}
																
																$pdff2 = $row['pdff'];
																if ($pdff2===NULL){$pdff = '&nbsp'; } else {$pdff = '&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}
																
																$skup2 = $row['mediap'];
																if ($skup2===NULL){$skup = '&nbsp'; } else {$skup = '&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg">';}																		
																
																$iCount = 1;
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox3"><div align="center" style="margin:auto"><figure><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank"><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: contain; background-repeat: no-repeat; background-position: center;" title="image"></div></a><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><a href="https://landscapearchitect.com/landscape-design-products/' . $string . '/' . $string2 . '/' . $row['vendor_id'] . '/' . $row['id'] . '" target="_blank">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</a></span></figcaption></figure><hr>' . $cadd . $pdff . $skup . '</p></div><br><br></div></div><br>';

															}											

													}

													echo '<br>';


														} else {

														$iCount = 1;


														$sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $xKey . "' ORDER BY id DESC";
														$result = $conn->query($sql);									

													// Product section


														while($row = mysqli_fetch_array($result)) {

															if ($iCount == 1) {
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="row"><div class="col-md-4" id="prodBox"><div align="center" style="margin:auto"><figure><div class="limage"><img class="limage2" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '" alt="image"></div><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</span></figcaption></figure><hr><img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg"></p></div><br><br></div>';
																$iCount++;

															} elseif ($iCount == 2) {
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox2"><div align="center" style="margin:auto"><figure><div class="limage"><img class="limage2" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '" alt="image"></div><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</span></figcaption></figure><hr><img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg"></p></div><br><br></div>';
																$iCount++;

															} elseif ($iCount == 3) {
																$iCount = 1;
																// took out ' display: -webkit-box;' to remove inactive scroll bars
																echo '<div class="col-md-4" id="prodBox3"><div align="center" style="margin:auto"><figure><div class="limage"><img class="limage2" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '" alt="image"></div><br><figcaption><span style="font-family: Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; width: 100%; overflow: scroll; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</span></figcaption></figure><hr><img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/image-icon.jpg"></p></div><br><br></div></div><br>';

															}											

													}

													echo '<br>';												


														}
					
					
					
					
					

					
					
					

									$conn->close();

												?>	



					<br>		




				  </div>
				

			  	
	
	
	
	
	</p>
</div>

<script>

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();	
	
	
	
	
</script>
     	
	
	<? } ?>
	
	
	
				
				
			
			
        </div>
      </div>

  <br><br>
</section>


	
	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>

<?
		
        break;
	}
		
?>
	
	