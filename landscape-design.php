<?php session_start() ?>

<? 
  
  include '../includes/la-common-top-inner.php';

  include '../includes/la-common-header-inner.inc'; 


?>



<style>
	.section-titles-menu {
		display: flex;
	}
	
	.section-titles-menu .sor {
    display: flex;
	}
	
	.section-titles-menu .selectboxit {
		min-width: calc(100% + 30px);
	}
	
	
	.section-titles-menu .selectboxit-container {
		margin-right: 30px;
	}
	
	.section-titles-menu .selectboxit-container .selectboxit-options {
		min-width: calc(100% + 30px) !important;
        width: auto;
	}
	
  .cstmmaid span.selectboxit.selectboxit-enabled.selectboxit-btn {
    margin-top: 0px;
    height: auto;
  }
  
  .ul.selectboxit-options.selectboxit-list {
      width: auto;
  }
  
	
</style>

	<section class="product-details-page">
	
				
			<section class="content-section">
			
				<div class="product-feature ">
					<div class="container">
							<div class="row padding30 feature-section dpep">
							
								
									  <?
									
										  include '../includes/connect4.inc'; 


											// start article from table
											$vendorNum_get = $_GET['number'];
											$prodNum_get = $_GET['prodNum'];                                        

                                
											$sql = "select * from new_vendor where id='" . $vendorNum_get . "'";
											$result = $conn->query($sql);	
                                        
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {

                        
											
											?>
													<!--Breadcrumbs-->
													<div class="col-md-12 col-sm-12 col-xs-12 breadcrumbs">
														<a href="#" style="pointer-events: none; cursor: pointer;">Products</a> |  <a href="#" style="pointer-events: none; cursor: pointer;">LA Details</a> | <span style="font-weight: normal;"><? echo $row['company_name'] ?></span>
													</div>
											
											<?
											
                                                
                         $logoNum = $row['logo'];
												 
												(strlen($row['fax']) > 0) ? $fax = 'Fax: ' . $row['fax'] .'<br>' : $fax = ''; 											
																								
												
												echo '<div class="col-md-7 col-sm-12 col-xs-12">
												
															<a href="#" class="vendr_l img_fit full_width">
																<img src="https://landscapearchitect.com/products/images/' . $logoNum . '" style="width:80%;" />
															</a>

															<p class="vendor-profile">
																<span style="font-weight:600; font-size: 16px;">VENDOR DESCRIPTION</span>
																<br /><br />
																' . $row['profile'] .'
															</p>

														</div><!-- /.col-lg-6 -->

												<div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
													<div class="full_width">
														<h1>' . $row['company_name'] .'</h1>
														<br /><br />
														<p class="vendor-information">
														' . $row['address'] .'<br>
														' . $row['city'] .' / ' . $row['state'] .' / ' . $row['zip'] .'<br>
														' . $row['phone'] .'<br>
														' . $fax . $row['website'] .'</p>
														<br /><br />

														<button id="contactCompanyBtn" style=" font-size: 12px; font-weight: 600; background: #1b8047;   line-height:40px;  padding: 5px 41px; color:white; text-transform:uppercase;">Contact Company</button>
													</div>
												</div><!-- /.col-lg-6 -->';
												
                    } ?>
														
						</div>
					</div>
				</div>
				
				<div class="prod-grid" id="prod-grid1" style="padding:35px 0px; padding-bottom: 70px;  background: #f4f4f4; ">
						
						<div class="container">
							<div class="col-md-12 col-sm-12 col-xs-12 cstmmaid">
								<div class="section-titles-underlined section-titles-menu">
									<p class="title">Products From This Vendor</p>
									

													<?
														
														$sqlTotalProds = "select * from vendor_product where vendor_id='" . $vendorNum_get . "' AND series_product = '0'";
														$result46 = $conn->query($sqlTotalProds);
														$totalProds = mysqli_num_rows($result46);		
														
													
													?>
									

													<div class="sor">
														<span>Sort By</span>&nbsp;
															<select onchange="if (this.value) window.location.href=this.value">
																<option value="https://landscapearchitect.com/landscape-design-products/<? echo $string; ?>/<? echo $vendorNum_get; ?>" style="font-size: 16px; font-weight: bold">All Products&nbsp;&nbsp;<strong>(<? echo $totalProds ?>)</strong></option>	


																	<?

																			$vendorNum_get = $_GET['number'];
																			$xnum = $_GET['xnum'];	
																			$xCount = 0;


																			$sql = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $vendorNum_get . "' ORDER BY name ASC";
																			$result = $conn->query($sql);


																			// List Product SGL Name with Count
																			while($row = mysqli_fetch_array($result)) {


																					$sql44 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $vendorNum_get . "' AND xlist = '" . $row['xlist'] . "' AND series_product ='0'";
																					$result44 = $conn->query($sql44);					

																					$num_rows = mysqli_num_rows($result44);												

																					if ($xCount != $row['xlist']) {

																						$keyX = $row['xlist'];							

																						//selects currently selected category	
																						$xnum == $row['id'] ? $selected = 'selected' : $selected = '';


																						echo  '<option value="https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=' . $vendorNum_get . '&xnum=' . $row['id'] . '" ' . $selected . '>' . $row['name'] . '&nbsp;<strong>(' . $num_rows . ')</strong></option>';


																						$xCount = $row['xlist'];

																					}

																			} 



																	?>										
	
										
															</select>
													</div><!-- /.sor -->
																
													<div class="showview">
														Show <a href="https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=<? echo $vendorNum_get ?>">24</a> | 
														<a href="https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=<? echo $vendorNum_get ?>&limit=48">48</a> | 
														<a href="https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=<? echo $vendorNum_get ?>&limit=all">View All</a> 
													</div><!-- /.showview -->
								</div><!-- /.section-titles-underlined -->
							</div>

							
									  <?
                   

	
										$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 24;
										$limit = ($limit == 'all') ? 1000 : $limit;        
										$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; 
                   


										// start products from table
							
											$vendorNum_get = $_GET['number'];
											$prodNum_get = $_GET['prodNum'];


											if ($xnum > 0) {
												$sql = "select * from vendor_product where vendor_id='" . $vendorNum_get . "' AND xlist = '" . $xnum . "' AND series_product = '0' LIMIT " . $limit . " OFFSET " . $limit * ($page - 1);
												$sqlTotalProds = "select * from vendor_product where vendor_id='" . $vendorNum_get . "' AND xlist = '" . $xnum . "' AND series_product = '0'";
											} else {
												$sql = "select * from vendor_product where vendor_id='" . $vendorNum_get . "' AND series_product = '0' LIMIT " . $limit . " OFFSET " . $limit * ($page - 1);
												$sqlTotalProds = "select * from vendor_product where vendor_id='" . $vendorNum_get . "' AND series_product = '0'";
											}      
                                
											$result = $conn->query($sql);	
											$totalProdResults = $conn->query($sqlTotalProds);
											$totalProductCount = mysqli_num_rows($totalProdResults);	
                              
											//product counter used for lazy loading				
											$prodCount = 0;	
																																	
							
											while($row = mysqli_fetch_array($result)) {
																							
												$productName = $row['product_name'];
												
												$small = substr($productName, 0, 31);
												
												
												 if (empty($row['pdff']) || $row['pdff'] == 'none') {

																	$cadPdf = '';

															} else {

																	$cadPdf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/3.png" style="width:100%;" /></div>';

															}                                                     

															if (empty($row['cadd']) || $row['cadd'] == 'none') {

																	$cadDwg = '';

															} else {

																	$cadDwg = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/2.png" style="width:100%;" /></div>';

															}     

															if (empty($row['cadd_2']) || $row['cadd_2'] == 'none') {

																	$cadDwf = '';

															} else {

																	$cadDwf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/dwf.jpg" style="width:100%;" /></div>';

															}                                               

															if (empty($row['cadd_3']) || $row['cadd_3'] == 'none') {

																	$cadDxf = '';

															} else {

																	$cadDxf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/dxf.jpg" style="width:100%;" /></div>';

															}         

															if (empty($row['skup']) || $row['skup'] == 'none') {

																	$cadSkp = '';

															} else {

																	$cadSkp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/skp.jpg" style="width:100%;" /></div>';

															}                                                        

															if (empty($row['vwxx']) || $row['vwxx'] == 'none') {

																	$cadVwx = '';

															} else {

																	$cadVwx = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/vwx.jpg" style="width:100%;" /></div>';

															}                                                        

															if (empty($row['mediap']) || $row['mediap'] == 'none') {

																	$cadMedia = '';

															} else {

																	$cadMedia = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/1.png" style="width:100%;" /></div>';

															}                                                        

															if (empty($row['zipp']) || $row['zipp'] == 'none') {

																	$cadZip = '';

															} else {

																	$cadZipp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="https://landscapearchitect.com/images/formats/4.png" style="width:100%;" /></div>';

															}     
															
															
												
														$prodName = substr($row['product_name'],0,75);
														$photo = str_replace(' ', '%20', $row['photo']);  
														$photo = str_replace('(', '%28', $photo);
														$photo = str_replace(')', '%29', $photo);
														
														$row['series_product'] > 0 ? $productNumber = $row['series_product'] : $productNumber = $row['id'];
														
														
														if($prodCount < 8){
															$image = '<img src="https://landscapearchitect.com/products/images/' . $photo . '" width="100%" />';
														} else {
                              $image = '<img src="https://landscapearchitect.com/products/images/' . $photo . '" width="100%" />';
//															$image = '<img class="lazy" data-src="https://landscapearchitect.com/products/images/' . $photo . '" width="100%" />';
														}
														$prodCount++;
												
										  								$string2 = $row['product_name'];
										  
																		$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																		$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																		$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																		$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash		


																	
																			$xlistId = $row['xlist'];
																	
																		$sql2334 = "SELECT * FROM new_vendor WHERE id='" . $row['vendor_id'] . "'";
																		$result2334 = $conn->query($sql2334);
																		$row2334 = mysqli_fetch_assoc($result2334);
																	
																	
																		$string =  $row2334['company_name']; // Trim String

																		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																		$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash																		
																	
																	
																	
																			$rowXlist = 1;
																	
																				
																				$sql555 = "SELECT * FROM xlist WHERE id='" . $xlistId . "'";
																				$result555 = $conn->query($sql555);
																				$row555 = mysqli_fetch_assoc($result555);
																	
																									$subCatName = $row555['name'];																	
																	
																	
																									if ($row555['idParent'] == 28) {

																											$catNameProd = 'business-services-software';

																									} elseif ($row555['idParent'] == 30) {

																											$catNameProd = 'erosion-control-products';

																									} elseif ($row555['idParent'] == 1300) {

																											$catNameProd = 'commercial-fencing';

																									} elseif ($row555['idParent'] == 1139) {

																											$catNameProd = 'irrigation';

																									} elseif ($row555['idParent'] == 32) {

																											$catNameProd = 'exterior-lighting-electrical';

																									} elseif ($row555['idParent'] == 1214) {

																											$catNameProd = 'outdoor-living';

																									} elseif ($row555['idParent'] == 33) {

																											$catNameProd = 'parks-and-recreation';

																									} elseif ($row555['idParent'] == 38) {

																											$catNameProd = 'pavers-masonry-blocks-rocks';

																									} elseif ($row555['idParent'] == 1212) {

																											$catNameProd = 'wildlife-pest-control';

																									} elseif ($row555['idParent'] == 1002) {

																											$catNameProd = 'plant-accessories-and-soil-amendments';

																									} elseif ($row555['idParent'] == 1394) {

																											$catNameProd = 'pools-and-spa';

																									} elseif ($row555['idParent'] == 1301) {

																											$catNameProd = 'art-sculpture-metal-stone-garden-ornaments';

																									} elseif ($row555['idParent'] == 29) {

																											$catNameProd = 'site-amenities';

																									} elseif ($row555['idParent'] == 1215) {

																											$catNameProd = 'site-furnishings-and-receptacles';

																									} elseif ($row555['idParent'] == 41) {

																											$catNameProd = 'water-features-fountains-ponds-and-equipment';

																									} elseif ($row555['idParent'] == 1213) {

																											$catNameProd = 'water-management';

																									} elseif ($row555['idParent'] == 1209) {

																											$catNameProd = 'installation-equipment';

																									} elseif ($row555['idParent'] == 1210) {

																											$catNameProd = 'maintenance-equipment';

																									} elseif ($row555['idParent'] == 1211) {

																											$catNameProd = 'tools-tires-replacement-parts';

																									} elseif ($row555['idParent'] == 34) {

																											$catNameProd = 'plant-material-and-trees';

																									}   
																	
																	
																		$string555 =  $row555['name']; // Trim String

																		$string555 = strtolower($string555); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																		$string555 = preg_replace("/[^a-z0-9_\s-]/", "", $string555);  //Strip any unwanted characters

																		$string555 = preg_replace("/[\s-]+/", " ", $string555); // Clean multiple dashes or whitespaces

																		$string555 = preg_replace("/[\s_]/", "-", $string555); //Convert whitespaces and underscore to dash																					     												
														
											
														 echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 padding30">
																		<a href="https://landscapearchitect.com/' . $catNameProd . '/' . $string555 . '/' . $string . '/' . $string2 . '/' . $vendorNum_get . '/' . $productNumber . '">
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
												
												}
												
												// end products from table	
												
										$maxPages =  ceil( $totalProductCount / $limit );
										
												
										function createPageLinks($maxPages, $page, $limit) {

										if ( $limit == 'all' ) {
											return '';

										} else {
										
											if($_GET['xnum'] > 0){
												$link = 'https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=' . $_GET['number'] . '&xnum=' . $_GET['xnum'];
											} else {
												$link = 'https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=' . $_GET['number'];
											}

											$last  =  $maxPages;

											$start = ( ( $page - $maxPages ) > 0 ) ? $page - $maxPages : 1;
											$end   = ( ( $page + $maxPages ) < $last ) ? $page + $maxPages : $last;

											$class = ( $page == 1 ) ? "disable" : "active";
											$html = '<a href="'. $link . '&limit=' . $limit . '&page=' . ( $page - 1 ) . '" class="' . $class . ' prev">Prev</a>';

											if ( $start > 1 ) {
															$html   .= '<a href="'. $link . '&limit=' . $limit . '&page=1">1</a>';
															$html   .= '<a href="#" class="disabled"><span>...</span></li>';
											}

											for ( $i = $start ; $i <= $end; $i++ ) {
															$class  = ( $page == $i ) ? "disable" : "";
															$html   .= '<a href="'. $link . '&limit=' . $limit . '&page=' . $i . '" class="' . $class . '">' . $i . '</a>';
											}

											if ( $end < $last ) {
															$html   .= '<a href="#" class="disable"><span>...</span></a>';
															$html   .= '<a href="'. $link . '&limit=' . $limit . '&page=' . $last . '">' . $last . '</a>';
											}

											$class = ( $page == $last ) ? "disable" : "active";
											$html .= '<a href="'. $link . '&limit=' . $limit . '&page=' . ( $page + 1 ) . '" class="' . $class . ' nxt">Next</a>';

											return $html;
									}
							}
												
												
								
								?>														
							

							
				
							
							
						</div><!-- /.container -->
                        
              <div class="pagination_strip full_width">
			    		<?php echo createPageLinks( $maxPages, $page, $limit); ?> 
            </div>
						<!-- /.pagination_strip -->
            
				</div>
					
			</section>
            
			
	
	</section>		

           

<? include '../includes/la-common-footer-inner.inc'; ?>

<? include '../includes/la-common-vendor-contact-modal.inc'; ?>




   </body>
</html>

