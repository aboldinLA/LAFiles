<?php session_start() ?>

<?php 
	include 'modules/configuration.inc'; 
	include 'modules/db.php';

	include $rootInclude.'la-common-top-inner.php'; 
 	include $rootInclude.'la-common-header-inner.inc'; 


 	$companyName = $_GET['companyName'];
	$productName = $_GET['productName'];
	$subCat 	 = $_GET['subCat'];



?>



<style>
	.prodVenBtn {
		font-size: 12px; 
		font-weight: 600;
		background: #1b8047;   
		line-height:35px; 
		width: 100%; 
		color:white; 
		text-transform:uppercase;
		margin-top: 20px;
		max-width: 275px;
	}
	
	.section-titles-menu {
		display: flex;
	}
	
	.section-titles-menu .sor {
    display: flex;
	}
</style>


			
	<section class="product-details-page">
		<section class="content-section">
                <!-- Top Section Product Start -->
			<div class="product-feature">
				<div class="container">
					<div class="row padding30 feature-section">
					  <?
						 	//include '../includes/connect4.inc'; 

						
							// $vendorNum_get = $_GET['number'];
							//$prodNum_get = $_GET['prodNum'];


							$sql = "select * from vendor_product where slug='" . $productName . "' AND series_product ='0' AND imported='0' ORDER BY ID DESC";
							$result = $conn->query($sql);	
			            
							$xcount = 0;	

							while($row = mysqli_fetch_array($result)) {
								
									$vendorNum_get = $row['vendor_id'];
									$prodNum_get = $row['id'];
								
								
									// Click-Through Section Start
									$viewsNew = $row['Clicks'] + 1;

									$today = date("Y-m-d H:i:s");

									$sql = "UPDATE vendor_product SET Clicks='" . $viewsNew . "', edit_time='" . $today ."' WHERE id='" . $row['id'] . "'";

									if ($conn->query($sql) === TRUE) {
											echo " ";
									} else {
											echo "Error updating record: " . $conn->error;
									}                                                        
									// Click-Through Section End							
									
									
										$vendorSiteProdLink = $row['web_photo'];

									
									//finds category id, cateogry name and xlist number
									$productXlist =  $row['xlist'];
									$sql10 = "select * from xlist where id=" . $row['xlist'] ;
									$result10 = $conn->query($sql10);	
									while($row10 = mysqli_fetch_array($result10)) {
										$productXlistName = $row10['name'];
										$catId = $row10["idParent"];
										
									}

											$parentIds = array(
												28 => 'Business Services &amp; Software',
												30 => 'Erosion Control',
												1300 => 'Fencing',
												1139 => 'Irrigation',
												32 => 'Lighting / Electrical',
												1214 => 'Outdoor Living',
												33 => 'Park &amp; Recreation',
												38 => 'Paver, Masonry, Blocks, Rocks',
												1212 => 'Pest / Wildlife',
												1002 => 'Plant Accessories &amp; Amendments',
												1394 => 'Pool &amp; Spa',
												1301 => 'Scupture / Art / Garden Ornaments',
												29 => 'Site Amenities',
												1215 => 'Site Furnishings &amp; Receptacles',
												41 => 'Water Features',
												1213 => 'Water Management',
												1209 => 'Installation Equipment',
												1210 => 'Maintenance Equipment',
												1211 => 'Tools &amp; Parts'
											);
											
											foreach($parentIds as $key => $value){
												if($catId == $key){
													$cat_slug = '';
													$sqlmab = "select * from xlist where id=" . $key ;
													$resultmab = $conn->query($sqlmab);	
													while($rowmab = mysqli_fetch_array($resultmab)) {
														$cat_slug = $rowmab["slug"];
													}
													$catName = $value;
												}
											}
											
											?>
								
								
							
										<script>
												
								
												
											function myFunction34() {
												
							    				confirm("You need to Login or Register to download");
												
											}
												
											function openWin() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD CAD PDF File Download&file=<? echo $row['pdff']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}
												
											function openWin2() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD CADD DWG File Download&file=<? echo $row['cadd']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}	
												
												
											function openWin3() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD CADD DWF File Download&file=<? echo $row['cadd_2']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}						
												
												
											function openWin4() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD CADD DXF File Download&file=<? echo $row['cadd_3']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}						
												
												
											function openWin5() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD 3D SKP File Download&file=<? echo $row['skup']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}	
												
												
											function openWin6() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD 3D VWX File Download&file=<? echo $row['vwxx']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}	
												
												
											function openWin7() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD Media PDF File Download&file=<? echo $row['mediap']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}						
												
												
											function openWin8() {
												
												var myWindow = window.open("<?php echo BASE_URL; ?>LandscapeProducts/download-confirm.php?subject=LAD Zip File Download&file=<? echo $row['zipp']; ?>&ucode=<? echo $ucode; ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=200,height=150");
												setTimeout(function(){ myWindow.close() }, 3000);
											}						
										</script>
																
								
															
										<!--Breadcrumbs-->
										<!-- <div class="col-md-12 col-sm-12 col-xs-12 breadcrumbs">
											<a href="#">Products</a> | <a href="#">LA Details</a> | <a href="<?php //echo BASE_URL;?>LandscapeProducts/la_category.php?ad=<? //echo $catId ?>"><? //echo $catName ?></a> | <a href="<?php //echo BASE_URL; ?>LandscapeProducts/la_details.php?ad=<? //echo $catId ?>&xlist=<? //echo $productXlist ?>"><? //echo $productXlistName ?></a> | <span style="font-weight: normal;"><? //echo $row['product_name'] ?></span>
										</div>
 										-->

 										<div class="col-md-12 col-sm-12 col-xs-12 breadcrumbs">
											<a href="#">Products</a> | <a href="#">LA Details</a> | 
											<a href="<?php echo BASE_URL;?><? echo $cat_slug ?>"><? echo $catName ?></a> | 
											<a href="<?php echo BASE_URL.$cat_slug.'/'.$subCat ?>"><? echo $productXlistName ?></a> | 
											<span style="font-weight: normal;"><? echo $row['product_name'] ?></span>
										</div>

										
										
										<?
                                                
                                                
                                           echo '<style>
                                
                                                .prod1{
                                                    background-image:url(' . $row['photo'] . '); background-size:contain; background-repeat:no-repeat; width: 100%; vertical-align: middle; text-align: center;
                                                }   

                                            </style>'; 
												
											
										$pdff2 = $row['pdff'];
											if ($pdff2===NULL || $pdff2=='none'){$pdff23 = '&nbsp'; } elseif (($pdff2!=NULL) && ($ucode > 1)) {$pdff23 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['pdff'] . '" download="CAD PDF" target="_blank"><button onclick="openWin()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($pdff2!=NULL) && ($ucode < 1)) {$pdff23 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';}												
																												
										$cadd = $row['cadd'];
											if ($cadd===NULL || $cadd=='none'){$cadd03 = '&nbsp'; } elseif (($cadd!=NULL) && ($ucode > 1)) {$cadd03 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['cadd'] . '" download="CAD PDF" target="_blank"><button onclick="openWin2()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($cadd!=NULL) && ($ucode < 1)) {$cadd03 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/2.png" style="width:100%;" /></button></a>';}							
																
										$cadd2 = $row['cadd_2'];
											if ($cadd2===NULL || $cadd2=='none'){$cadd23 = '&nbsp'; } elseif (($cadd2!=NULL) && ($ucode > 1)) {$cadd23 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['cadd_2'] . '" download="CAD PDF" target="_blank"><button onclick="openWin3()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($cadd2!=NULL) && ($ucode < 1)) {$cadd23 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/dwf.jpg" style="width:100%;" /></button></a>';}													
																
										$cadd3 = $row['cadd_3'];
											if ($cadd3===NULL || $cadd3=='none'){$cadd33 = '&nbsp'; } elseif (($cadd3!=NULL) && ($ucode > 1)) {$cadd33 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['cadd_3'] . '" download="CAD PDF" target="_blank"><button onclick="openWin4()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($cadd3!=NULL) && ($ucode < 1)) {$cadd33 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/dxf.jpg" style="width:100%;" /></button></a>';}														
																
										$skup = $row['skup'];
											if ($skup===NULL || $skup=='none'){$skup03 = '&nbsp'; } elseif (($skup!=NULL) && ($ucode > 1)) {$skup03 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['skup'] . '" download="CAD PDF" target="_blank"><button onclick="openWin5()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($skup!=NULL) && ($ucode < 1)) {$skup03 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/skp.jpg" style="width:100%;" /></button></a>';}															
																
										$vwxx = $row['vwxx'];
											if ($vwxx===NULL || $vwxx=='none'){$vwxx03 = '&nbsp'; } elseif (($vwxx!=NULL) && ($ucode > 1)) {$vwxx03 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['vwxx'] . '" download="CAD PDF" target="_blank"><button onclick="openWin6()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($vwxx!=NULL) && ($ucode < 1)) {$vwxx03 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/vwx.jpg" style="width:100%;" /></button></a>';}															
																
										$mediap = $row['mediap'];
											if ($mediap===NULL || $mediap=='none'){$mediap03 = '&nbsp'; } elseif (($mediap!=NULL) && ($ucode > 1)) {$mediap03 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['mediap'] . '" download="CAD PDF" target="_blank"><button onclick="openWin7()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($mediap!=NULL) && ($ucode < 1)) {$mediap03 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/1.png" style="width:100%;" /></button></a>';}
																
										$zipp = $row['zipp'];
											if ($zipp===NULL || $zipp=='none'){$zipp03 = '&nbsp'; } elseif (($zipp!=NULL) && ($ucode > 1)) {$zipp03 = '<a href="'.BASE_URL.'LandscapeProducts/dfiles/' . $row['zipp'] . '" download="CAD PDF" target="_blank"><button onclick="openWin8()" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></button></a>';} elseif (($zipp!=NULL) && ($ucode < 1)) {$zipp03 = '<button class="logInModalPopUpBtn" style="font-weight: bold; background-color:#FFFFFF; padding: 5px"><img src="'.BASE_URL.'images/formats/4.png" style="width:100%;" /></button></a>';}												
												
												
			                                  $xlistNum = $row['xlist'];  
			                                    
			                                    if (empty($row['pdff']) || $row['pdff'] == 'none') {
			                                        
			                                        $cadPdf = '';
			                                        
			                                    } else {
			                                        
			                                        $cadPdf = '<div class="single-icon">' . $pdff23 . '</div>';
			                                        
			                                    }                                               
			                                    
			                                    if (empty($row['cadd']) || $row['cadd'] == 'none') {
			                                        
			                                        $cadDwg = '';
			                                        
			                                    } else {
			                                        
			                                        $cadDwg = '<div class="single-icon">' . $cadd03 . '</div>';
			                                        
			                                    }    
			                                    
			                                    if (empty($row['cadd_2']) || $row['cadd_2'] == 'none') {
			                                        
			                                        $cadDwf = '';
			                                        
			                                    } else {
			                                        
			                                        $cadDwf = '<div class="single-icon">' . $cadd23 . '</div>';
			                                        
			                                    }                                                    
			                                    
			                                    if (empty($row['cadd_3']) || $row['cadd_3'] == 'none') {
			                                        
			                                        $cadDxf = '';
			                                        
			                                    } else {
			                                        
			                                        $cadDxf = '<div class="single-icon">' . $cadd33 . '</div>';
			                                        
			                                    }        
			                                    
			                                    if (empty($row['skup']) || $row['skup'] == 'none') {
			                                        
			                                        $cadSkp = '';
			                                        
			                                    } else {
			                                        
			                                        $cadSkp = '<div class="single-icon">' . $skup03 . '</div>';
			                                        
			                                    }                                                       
			                                    
			                                    if (empty($row['vwxx']) || $row['vwxx'] == 'none') {
			                                        
			                                        $cadVwx = '';
			                                        
			                                    } else {
			                                        
			                                        $cadVwx = '<div class="single-icon">' . $vwxx03 . '</div>';
			                                        
			                                    }                                                       
			                                    
			                                    if (empty($row['mediap']) || $row['mediap'] == 'none') {
			                                        
			                                        $cadMedia = '';
			                                        
			                                    } else {
			                                        
			                                        $cadMedia = '<div class="single-icon">' . $mediap03 . '</div>';
			                                        
			                                    }                                                       
			                                    
			                                    if (empty($row['zipp']) || $row['zipp'] == 'none') {
			                                        
			                                        $cadZip = '';
			                                        
			                                    } else {
			                                        
			                                        $cadZip = '<div class="single-icon">' . $zipp03 . '</div>';
			                                        
			                                    }                                                       
                                                
												 echo '<div class="col-md-7 col-sm-12 col-xs-12" >
																<div class="prod1">

																<img class="prod1" src="'.BASE_URL.'products/images/' . $row['photo'] . '" />

																</div>

																<div class="prod-format-icons">
																			' . $cadPdf . $cadDwg . $cadDwf. $cadDxf . $cadSkp . $cadVwx . $cadMedia . $cadZip . '
																		 <div class="clearfix"></div>
																</div>

																<p style="margin-top:53px; font-family: \'Nunito\', serif; font-size: 16px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: normal;  letter-spacing: normal;  color: #4c4c4c;"><span style="font-weight:600;">PRODUCT DESCRIPTION ' .$vendorNum_get . $_GET['prodNum'] . '</span>
																<br /><br />
																' . $row['description'] . '</p>

														</div>';

																								
														$productName = $row['product_name'];
																								
                                            }
                                
											/*$sql = "select * from new_vendor where id='" . $vendorNum_get . "'";*/
											$sql = "select * from new_vendor where slug='" . $companyName . "'";
											$result = $conn->query($sql);	

											while($row = mysqli_fetch_array($result)) {
												
												
												$string =  $row['company_name']; // Trim String

												$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

												$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

												$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

												$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash																									
    

												echo '<div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12 prod-title" >

																<img src="'.BASE_URL.'products/images/' . $row['logo'] . '" style="width:80%;" />
																<h1 style="margin:35px 0px;font-family:\'DM Serif Text\', serif; font-size: 36px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.17; letter-spacing: normal; color: #4c4c4c;">' . $productName . '</h1>

																	<p class="vendor-information">
																	' . $row['address'] . '<br />
																	' . $row['city'] . ' / ' . $row['state'] . ' / ' . $row['zip'] . '<br />
																	' . $row['phone'] . '<br />
																	Fax: ' . $row['fax'] . '<br />
																	' . $row['website'] . '</p>
																	 <div style="padding:16px 0px; ">
																			<button onclick="(function(){window.location.href =\''.BASE_URL.'landscape-design-products/' . $string . '/' . $vendorNum_get . '\'})();return false;" class="prodVenBtn">View Vendor Micro Site</button>

																			<button id="contactCompanyBtn" class="prodVenBtn">Contact Company</button>

																			<a href="' . $vendorSiteProdLink. '" target="_blank"><button class="prodVenBtn">View Product on Vendor Site</button></a>
																	</div>
															</div>';                                                
                                    
                                			} 
                                    ?>
								
						</div>
					</div>
				</div>
                <!-- Top Section Product End -->
                
                
                
                <!-- Available Section Product Start -->
               <?


				$sql = "select * from vendor_product where series_product ='" . $prodNum_get . "' ORDER BY ID DESC";
				$result = $conn->query($sql);
				$rowcount=mysqli_num_rows($result);

				if ($rowcount != 0) { ?>				
					<div style="padding:35px 0px;">
						<div class="container">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<p class="section-titles-underlined">Available Files/Models</p>
								<div id="pr-det-products">   
									<?
                                		$xcount = 0;	
						
										while($row = mysqli_fetch_array($result)) {
                                            
                                            if (empty($row['pdff']) || $row['pdff'] == 'none') {
                                                
                                                $cadPdf = ' ';
                                                
                                            } else {
                                                
                                                $cadPdf = '<div class="single-icon">' . $pdff23 . '</div>';
                                                
                                            }                                                     
                                            
                                            if (empty($row['cadd']) || $row['cadd'] == 'none') {
                                                
                                                $cadDwg = ' ';
                                                
                                            } else {
                                                
                                                $cadDwg = '<div class="single-icon">' . $cadd23 . '</div>';
                                                
                                            }     
                                            
                                            if (empty($row['cadd_2']) || $row['cadd_2'] == 'none') {
                                                
                                                $cadDwf = ' ';
                                                
                                            } else {
                                                
                                                $cadDwf = '<a href="#"><img src="'.BASE_URL.'images/formats/dwf.jpg" style="width:60%;" /></a>';
                                                
                                            }                                               
                                            
                                            if (empty($row['cadd_3']) || $row['cadd_3'] == 'none') {
                                                
                                                $cadDxf = ' ';
                                                
                                            } else {
                                                
                                                $cadDxf = '<a href="#"><img src="'.BASE_URL.'images/formats/dxf.jpg" style="width:60%;" /></a>';
                                                
                                            }         
                                            
                                            if (empty($row['skup']) || $row['skup'] == 'none') {
                                                
                                                $cadSkp = ' ';
                                                
                                            } else {
                                                
                                                $cadSkp = '<a href="#"><img src="'.BASE_URL.'images/formats/skp.jpg" style="width:60%;" /></a>';
                                                
                                            }                                                        
                                            
                                            if (empty($row['vwxx']) || $row['vwxx'] == 'none') {
                                                
                                                $cadVwx = ' ';
                                                
                                            } else {
                                                
                                                $cadVwx = '<a href="#"><img src="'.BASE_URL.'images/formats/vwx.jpg" style="width:60%;" /></a>';
                                                
                                            }                                                        
                                            
                                            if (empty($row['mediap']) || $row['mediap'] == 'none') {
                                                
                                                $cadMedia = ' ';
                                                
                                            } else {
                                                
                                                $cadMedia = '<div class="single-icon">' . $mediap23 . '</div>';
                                                
                                            }                                                        
                                            
                                            if (empty($row['zipp']) || $row['zipp'] == 'none') {
                                                
                                                $cadZip = ' ';
                                                
                                            } else {
                                                
                                                $cadZipp = '<a href="#"><img src="'.BASE_URL.'images/formats/4.png" style="width:60%;" /></a>';
                                                
                                            }                                                                
                                            
                                            
                                            echo '<div class="container-fluid">
												  <center><h2>' . $row['product_name'] . '</h2></center><br>
												  <div class="row">
													<div class="col-sm-4" style="width:350px; height:250px"><img src="'.BASE_URL.'products/images/' . $row['photo'] . '" class="img-responsive" alt=""/></div>
													<div class="col-sm-4"><img src="'.BASE_URL.'LandscapeProducts/dfiles/images/' . $row['id'] . '-p.jpg" class="img-responsive" alt=""/></div>
													<div class="col-sm-4">
													
												<div class="container-fluid">
												  <center><h4>Available Downloads</h4></center><br>
												  <div class="row">
													<div class="col-sm-3">' . $cadPdf . '</div>
													<div class="col-sm-3">' . $cadDwg . '</div>
													<div class="col-sm-3">' . $cadDwf . '</div>
													<div class="col-sm-3">' . $cadDxf . '</div>
												  </div><br><br>
												  <div class="row">
													<div class="col-sm-3">' . $cadSkp . '</div>
													<div class="col-sm-3">' . $cadVwx . '</div>
													<div class="col-sm-3">' . $cadMedia . '</div>
													<div class="col-sm-3">' . $cadZipp . '</div>
												  </div>													  
												</div>
												
												
													</div>
												  </div>
												</div><br><hr noshade><br>';   
											
                 
                
											}  ?>
												</div>
											</div>
										</div>
									</div>     
											
											
									<?	} ?>
									<!-- Available Section Product End -->
									<!-- Related Section Product Start -->
									 <?
											$sql = "select * from vendor_product where vendor_id ='" . $vendorNum_get . "' AND xlist ='" . $xlistNum . "' AND id != '" . $prodNum_get . "' AND series_product ='0' ORDER BY ID DESC";
											$result = $conn->query($sql);
                
											$rowcount = mysqli_num_rows($result);

											if ($rowcount != 0) { ?>
											
											
											<!-- show section if there are products -->
											
                
											<div class="prod-grid" style="padding:35px 0px; padding-bottom: 50px;  background: #f4f4f4;">

													<div class="container"> 

														<div class="col-md-12 col-sm-12 col-xs-12">
															<p class="section-titles-underlined">Related Products From This Vendor</p>
														</div>
							
							
							
							
										<? 
										
											$prodCount = 0;	
							

											while($row = mysqli_fetch_array($result)) {
																							
												$productName = $row['product_name'];
												
												$small = substr($productName, 0, 31);
												
												
												 if (empty($row['pdff']) || $row['pdff'] == 'none') {

																	$cadPdf = '';

															} else {

																	$cadPdf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/3.png" style="width:100%;" /></a></div>';

															}                                                     

															if (empty($row['cadd']) || $row['cadd'] == 'none') {

																	$cadDwg = '';

															} else {

																	$cadDwg = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/2.png" style="width:100%;" /></a></div>';

															}     

															if (empty($row['cadd_2']) || $row['cadd_2'] == 'none') {

																	$cadDwf = '';

															} else {

																	$cadDwf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/dwf.jpg" style="width:100%;" /></a></div>';

															}                                               

															if (empty($row['cadd_3']) || $row['cadd_3'] == 'none') {

																	$cadDxf = '';

															} else {

																	$cadDxf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/dxf.jpg" style="width:100%;" /></a></div>';

															}         

															if (empty($row['skup']) || $row['skup'] == 'none') {

																	$cadSkp = '';

															} else {

																	$cadSkp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/skp.jpg" style="width:100%;" /></a></div>';

															}                                                        

															if (empty($row['vwxx']) || $row['vwxx'] == 'none') {

																	$cadVwx = '';

															} else {

																	$cadVwx = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/vwx.jpg" style="width:100%;" /></a></div>';

															}                                                        

															if (empty($row['mediap']) || $row['mediap'] == 'none') {

																	$cadMedia = '';

															} else {

																	$cadMedia = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/1.png" style="width:100%;" /></a></div>';

															}                                                        

															if (empty($row['zipp']) || $row['zipp'] == 'none') {

																	$cadZip = '';

															} else {

																	$cadZipp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="'.BASE_URL.'images/formats/4.png" style="width:100%;" /></a></div>';

															}     
															
															
														$prodName = substr($row['product_name'],0,75);
														$photo = str_replace(' ', '%20', $row['photo']);
														$photo = str_replace('(', '%28', $photo);
														$photo = str_replace(')', '%29', $photo);
														
														$row['series_product'] > 0 ? $productNumber = $row['series_product'] : $productNumber = $row['id'];
														

														if($prodCount < 8){
															$image = '<img src="'.BASE_URL.'products/images/' . $photo . '" width="100%" />';
														} else {
															$image = '<img class="lazy" data-src="'.BASE_URL.'products/images/' . $photo . '" width="100%" />';
														}
														$prodCount++;

											
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
												

											
														 echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 padding30">
																		<a href="'.BASE_URL. $subCat . '/' . $companyName . '/' . $row['slug'] . '">
																			<div class="vendor-product-cell-image">
																				' . $image . '
																			</div>
																			<div class="text-center "style="background:white; width:100%; height: 140px; padding:20px 0px;">
																					<p class="" style="font-family:\'Nunito\', sans; font-size: 16px; font-weight: 600; font-style: normal; font-stretch: normal;  line-height: normal; letter-spacing: normal; color: #2a2a2a; padding: 5px;">' . $prodName . '</p>
																					 <div class="prod-format-icons-small">
																								' . $cadPdf . $cadDwg . $cadDwf. $cadDxf . $cadSkp . $cadVwx . $cadMedia . $cadZip . '
																							 <div class="clearfix"></div>
																					</div>
																			</div>
																		</a>
																</div>';				
												
												} ?>
												
												
														</div> <!-- /.container -->
												</div> <!-- /.prod-grid -->
																		
									<? } ?>
                	<!-- Related Section Product End -->
                
                
                
					
			</section>
            
			
	
	</section>		



            
		<? include $rootInclude.'la-common-footer-inner.inc'; ?>

    <? include $rootInclude.'la-common-vendor-contact-modal.inc'; ?>


	</body>
</html>

