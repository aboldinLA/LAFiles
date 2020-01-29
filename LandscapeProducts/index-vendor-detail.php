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
		
		.nameTop {
			position: relative;
			top: -80px;
			left: 55%;
			z-index: 999;
			width: 100%;
			height: 23px;
		}
		
		.nameColor {
			color: #FFFFFF;
		}
		
		
		.vendorInfo span {
			width: 100%; 
			overflow-y: auto; 
			-webkit-line-clamp: 11; 
			-webkit-box-orient: vertical;
			display: -webkit-box;
			max-height: 222px;
		}
		
		@media only screen and (max-width: 1100px) {
 
			.nameTop {
				position: relative;
				top: -15px;
				left: 40%;
				z-index: 999;
				width: 100%;
				height: 23px;
			}

			.nameColor {
				color: #000000;
			}			
			
		}
		
		
		
		
		
		
	</style>


		<div class="nameTop">
			
				<? if  (!empty($_GET['uname2'])) { ?><h3 class="nameColor">Welcome: <? echo $_GET['uname2'] . " " . $_GET['uname3'] ; ?></h3><? } else { echo "&nbsp;";}?>
	
			
		</div>

            

	
	
	
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
				height: 250px;    
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
	
	
	
	
 
  <div class="row">
    <div class="col-lg-12">
		

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
											$key22 = $_GET['prodNum'];							
		
											//$key2 = "28909";

											$sql = "select * from vendor_product where id='" . $key22 . "' AND series_product IS NULL ORDER BY ID DESC";
											$result = $conn->query($sql);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
												
												if ($xcount < 1) {
												
												
									?>   
		
		
				<script>
					

					
					
				function myFunction34() {
					
    				confirm("You need to Login or Register to download");
					
				}
					
				function openWin() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD CAD PDF File Download&file=<? echo $row['pdff']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}
					
				function openWin2() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD CADD DWG File Download&file=<? echo $row['cadd']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}	
					
					
				function openWin3() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD CADD DWF File Download&file=<? echo $row['cadd_2']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}						
					
					
				function openWin4() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD CADD DXF File Download&file=<? echo $row['cadd_3']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}						
					
					
				function openWin5() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD 3D SKP File Download&file=<? echo $row['skup']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}	
					
					
				function openWin6() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD 3D VWX File Download&file=<? echo $row['vwxx']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}	
					
					
				function openWin7() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD Media PDF File Download&file=<? echo $row['mediap']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}						
					
					
				function openWin8() {
					
					var myWindow = window.open("https://landscapearchitect.com/LandscapeProducts/download-confirm.php?subject=LAD Zip File Download&file=<? echo $row['zipp']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
					setTimeout(function(){ myWindow.close() }, 3000);
				}						
					

				</script>
									
	
	
	
	
	
		<!-- Main Image -->
        <div class="col-lg-6">
			<div class="thumbnail" style="background-color: #FFFFFF; box-shadow: 5px 5px 5px #888888"> <div class="limage5"><img src="https://landscapearchitect.com/products/images/<? echo $row['photo']; ?>" alt="Thumbnail Image 1" class="limage6"></div>
            <div class="caption">
				
				<? $pname = str_replace("®","&reg;",$row['product_name']); ?>
				
				<? $pdesc = str_replace("®","&reg;",$row['description']); ?>
				
				
				<center><h3><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($pname))); ?></h3>
              <p><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($pdesc))); ?></p></center>
              <hr>
				
<title><? echo $row['product_name'] ?></title>
				
				
				
				<?
													
						$cadd2 = $row['pdff'];
							if ($cadd2===NULL){$cadd23 = '&nbsp'; } elseif (($cadd2!=NULL) && ($ucode > 1)) {$cadd23 = '<a href="https://landscapearchitect.com/LandscapeProducts/dfiles/' . $row['pdff'] . '" download="CAD PDF" class="btn btn-success" role="button" onclick="openWin()">Download CAD PDF</a>';} elseif (($cadd2!=NULL) && ($ucode < 1)) {$cadd23 = '<a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#login-modal">Download CAD PDF</a>';}
																
						$pdff2 = $row['cadd'];
							if ($pdff2===NULL){$pdff23 = '&nbsp'; } elseif (($pdff2!=NULL) && ($ucode > 1)) {$pdff23 = '<a href="https://landscapearchitect.com/LandscapeProducts/dfiles/' . $row['pdff'] . '" download="CAD PDF" class="btn btn-success" role="button" onclick="openWin()">Download CAD PDF</a>';} elseif (($pdff2!=NULL) && ($ucode < 1)) {$pdff23 = '<a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#login-modal">Download CAD DWG</a>';}
																
						$skup2 = $row['mediap'];
							if ($skup2===NULL){$skup23 = '&nbsp'; } elseif (($skup2!=NULL) && ($ucode > 1)) {$skup23 = '<a href="https://landscapearchitect.com/LandscapeProducts/dfiles/' . $row['pdff'] . '" download="CAD PDF" class="btn btn-success" role="button" onclick="openWin()">Download CAD PDF</a>';} elseif (($skup2!=NULL) && ($ucode < 1)) {$skup23 = '<a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#login-modal">Download Media File</a>';}										
													
				?>
				
				
				
				
				<div class="row" style="padding-left: 40px">
        			<div class="col-lg-3 col-lg-offset-1">
              			<p class="text-center"><? echo $cadd23; ?></p>
					</div>
        			<div class="col-lg-3">
              			<p class="text-center"><? echo $pdff23; ?></p>
					</div>					
        			<div class="col-lg-3">
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
									
										// Vendor Start

										

										// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												
									?>                	
	
	
	
	
		<!-- Related Products -->
        <div class="col-lg-4 col-lg-offset-1" style="position: relative; left: 35px">
			
			<table>
				<tr>
					<td colspan="2">
						<div> <center><img width="40%" src="https://landscapearchitect.com/products/images/<? echo $row['logo']; ?>" alt="company logo" ></center>
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


							<strong>FAX: </strong><? echo $row['fax']; ?><br>


							  <strong>Website: </strong><a href="http://<? echo $row['website']; ?>" target="_blank"><? echo $row['website']; ?></a><br>


							  <strong>Contact: </strong><a href="http://<? echo $row['contact_us']; ?>" target="_blank">More Information</a></p>
						  <hr>
						</div>
					</td>
				</tr>
			</table>
			
			<table>
				<tr>
					
					<td colspan="2">
						
						<p class="vendorInfo"><strong>Vendor Information: </strong><br><span><? echo $row['profile']; ?></span></p>
						
						</div>
					</td>
				</tr>
			</table>
			
	
			
          </div>
        </div>	
	

									<?

										}

										// Vendor Start

									?>	
	
	  
			
		
		
		
		
		
<div class="container">
<div class="row">
	

									<?
									



										// start article from table
							
											$key2 = $_GET['number'];
											$key22 = $_GET['prodNum'];							
	
											//$key2 = "28909";

											$sql = "select * from vendor_product where id='" . $key22 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
												
												if ($xcount < 1) {
												
												
									?>                            	
	
	
	
	
	
	
										<?
													
											$xcount++;
													
											}
												
											$cadd2 = $row['cadd'];
											if ($cadd2===NULL){$cadd = 'No File Available'; } else {
												
												
												
												
										?>
	
	

	
	
	
	

	
		
    <div class="col-md-10 col-md-offset-1">
		<a id="cprods">&nbsp;</a>
    	 <center><h1>Available Files</h1>
		<? if  (!empty($_GET['uname2'])) { ?><h4>Welcome: <? echo $_GET['uname2']; ?></h4><? } else { echo "&nbsp;";}?>
        <h4>Click on the Files Below to Download</h4>
		
        <h4>for - <? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?></h4></center>
		
		
		
			<hr>
			<div class="container">
			  <div class="row">
				  
				  
				<div class="col-lg-3 col-md-6 col-sm-6">
					<center><img width="100%" src="https://landscapearchitect.com/products/images/<? echo $row['photo'] ?>"></center>
				</div>
				  
				<div class="col-lg-3 col-md-6 col-sm-6">
					<center><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/dfiles/images/<? echo $row['id'] ?>-p.jpg"></center>
				</div>
				  
				<div class="col-lg-3 col-md-6 col-sm-6">
					<center><h2><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Downloads</h2>
				  <p>Below are the available files for this product which you can download</p></center>
					<center>
						
			<div class="container">
				<div class="row">
				<div class="col-md-3">
					<figure><? if ($row['pdff'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['pdff']; ?>" download="CAD PDF"><button onclick="openWin()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="CAD PDF"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD PDF</center></figcaption><? } else {   ?> <img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>
				  
				<div class="col-md-3">
					<figure><? if ($row['cadd'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['cadd']; ?>" download="CAD DWG"><button onclick="openWin2()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" alt="CAD DWG"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD DWG</center></figcaption><? } else {   ?> <img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>
				  
				<div class="col-md-3">
					<figure><? if ($row['cadd_2'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['cadd_2']; ?>" download="CAD DWF"><button onclick="openWin3()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwf.jpg" alt="SKP"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD DWF</center></figcaption><? } else {   ?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>				  
					
				<div class="col-md-3">
					<figure><? if ($row['cadd_3'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['cadd_3']; ?>" download="CAD DXF"><button onclick="openWin4()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dxf.jpg" alt="SKP"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD DXF</center></figcaption><? } else {   ?> <img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>
				  
			  </div>
			</div>	
						
			<div class="container">
				<div class="row">				  
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['skup'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['skup']; ?>" download="3D SKP"><button onclick="openWin5()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="SKP"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>3D SKP</center></figcaption><? } else {   ?> <img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>
				  
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['vwxx'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['vwxx']; ?>" download="3D VWX"><button onclick="openWin6()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="SKP"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>3D VWX</center></figcaption><? } else {   ?> <img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>	
				  
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['mediap'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['mediap']; ?>" download="Media PDF"><button onclick="openWin7()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" alt="SKP"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>Media PDF</center></figcaption><? } else {   ?> <img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>
				  
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['zipp'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['zipp']; ?>" download="Zip File"><button onclick="openWin8()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="SKP"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>Full Set</center></figcaption><? } else {   ?> <img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/blank.jpg" alt="SKP"><figcaption><center>&nbsp;</center></figcaption> <?  } ?></figure>
				</div>					
					</center>
				</div>
			</div>
				
			  </div>
			</div>		
		
	
		
		
									<?
												
											}
												
											}														
												

										// Vendor Start

									?>	
				
				

									<?
									



										// start article from table
							
											$key2 = $_GET['number'];
											$key22 = $_GET['prodNum'];							
	
											//$key2 = "28909";

											$sql = "select * from vendor_product where series_product='" . $key22 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
												
												if ($xcount < 10) {
												
												
									?>                            	
	
	
	
	
	
	
										<?
													
											$xcount++;
													
											}
												
											$cadd2 = $row['cadd'];
											if ($cadd2===NULL){$cadd = 'No File Available'; } else {
												
												
												
												
										?>
	

	
		
    <div class="col-md-10 col-md-offset-1">
		<a id="cprods">&nbsp;</a>
    	 <center><h1>Available Files</h1>
        <h4>Click on the Files Below to Download</h4>
		
        <h4>for - <? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?></h4></center>
		
		
		
			<hr>
			<div class="container">
			  <div class="row">
				  
				  
				 <?
												
						if (is_null($row['photo']))
						{
							
						?>
				  
				<div class="col-lg-3 col-md-6 col-sm-6">
					<center><h4 style="width: 200px">Photo not available</h4></center>
				</div>				  
				  
				  		<?
							
						
							
						}
						else
						{
							
						?>
				  
				<div class="col-lg-3 col-md-6 col-sm-6">
					<center><img width="100%" src="https://landscapearchitect.com/products/images/<? echo $row['photo'] ?>"></center>
				</div>				  
				  
				  		<?							
							
							
						}												
												
				 ?>
				  
				  
				<div class="col-lg-3 col-md-6 col-sm-6">
					<center><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/dfiles/images/<? echo $row['id'] ?>-p.jpg"></center>
				</div>
				  
				<div class="col-lg-3 col-md-6 col-sm-6">
					<center><h2><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Downloads</h2>
				  <p>Below are the available files for this product which you can download</p></center>
					<center>
						

						
						
						
						
			<div class="container">
			  <div class="row">
				<div class="col-md-3">
					<figure><? if ($row['pdff'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['pdff']; ?>" download="CAD PDF"><button onclick="openWin()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="CAD PDF"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD PDF</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>
				  
				<div class="col-md-3">
					<figure><? if ($row['cadd'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['cadd']; ?>" download="CAD DWG"><button onclick="openWin2()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" alt="CAD DWG"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD DWG</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>
				  
				<div class="col-md-3">
					<figure><? if ($row['cadd_2'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['cadd_2']; ?>" download="CAD DWF"><button onclick="openWin3()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwf.jpg" alt="CAD DWF"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD DWF</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>				  
					
				<div class="col-md-3">
					<figure><? if ($row['cadd_3'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['cadd_3']; ?>" download="CAD DXF"><button onclick="openWin4()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dxf.jpg" alt="CAD DXF"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>CAD DXF</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>
			  </div>
			</div>					  
				  
						
			<div class="container">
			  <div class="row">						
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['skup'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['skup']; ?>" download="3D SKP"><button onclick="openWin5()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="3D SKP"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>3D SKP</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>
				  
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['vwxx'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['vwxx']; ?>" download="3D VWX"><button onclick="openWin6()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="3D VWX"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>3D VWX</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>	
				  
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['mediap'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['mediap']; ?>" download="Media PDF"><button onclick="openWin7()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" alt="Media"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>Media PDF</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>
				  
				<div class="col-md-3" style="padding-top: 10px">
					<figure><? if ($row['zipp'] != NULL) { ?><? if ($ucode >1){?><a href="https://landscapearchitect.com/LandscapeProducts/dfiles/<?  echo $row['zipp']; ?>" download="Zip File"><button onclick="openWin8()"><?  }else{?><button  data-toggle="modal" data-target="#login-modal"><?}?><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="Zip"><? if ($ucode >1){?></button></a><?}else{?></button><?}?><figcaption><center>Full Set</center></figcaption><? } else {   ?> &nbsp; <?  } ?></figure>
				</div>					
					</center>
				</div>
			</div>
				
			  </div>
			</div>		
		
		
	
		
		
									<?
												
											}
												
											}														
												

										// Vendor Start
										$conn->close();

									?>					
				
				
				
				
				
			
        
        
  		<br>		
		
	


      </div>
    </div>
  
  </div>
</div><br><br>	



	
	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>
	
	