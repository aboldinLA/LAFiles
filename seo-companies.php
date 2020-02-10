<?php session_start(); ?>
<?php include 'modules/configuration.inc'; ?>
<? 

	include 'modules/db.php';
	/*include 'modules/baseUrl.php';
	include 'modules/urlData.php';*/
	include 'modules/articleModel.php';

  
  	include $rootInclude.'la-common-top-inner.php';

  	include $rootInclude.'la-common-header-inner.inc'; 


	$companySlug = $_GET['companySlug'];

	
	$limit = '';
	$page = '';
	$xnum = '';	

	if(isset($_GET['limit'])):
		$limit = $_GET['limit'];
	endif;
	
	if(isset($_GET['page'])):
		$page = $_GET['page'];
	endif;
	
	if(isset($_GET['xnum'])):
		$xnum = $_GET['xnum'];
	endif;


	
	$sqlM = "SELECT * FROM new_vendor WHERE slug = '".$companySlug."'";
	$resultM = $conn->query($sqlM);  
	$rowM = mysqli_fetch_array($resultM);
	$vendorNum_get = $rowM['id'];
	
	function getProductCategoryDetails($cate_id, $conn){
		$sqlM = "SELECT c1.id, c1.slug, c2.slug as `parent_slug` FROM xlist c1 left outer join xlist c2 on c1.idParent = c2.id WHERE c1.id = $cate_id";
		$resultM = $conn->query($sqlM);  
		$rowM = mysqli_fetch_array($resultM);
		$cate_array['sub_cate_slug'] = $rowM['slug'];
		$cate_array['parent_cate_slug'] = $rowM['parent_slug'];
		$resultM->free_result();
		return $cate_array;
	
	}

	function getProductVendorDetails($vendor_id,$conn){

		$sqlM = "SELECT * FROM new_vendor WHERE id = '".$vendor_id."'";
		$resultM = $conn->query($sqlM);  
		$rowM = mysqli_fetch_array($resultM);
		$resultM->free_result();
		return $rowM['slug'];

	}

	function getCateFromVendor($vendor_id)
	{
		$sqlM = "SELECT * FROM new_vendor WHERE id = '".$vendor_id."'";
		$resultM = $conn->query($sqlM);  
		$rowM = mysqli_fetch_array($resultM);
		$resultM->free_result();
		return $rowM['xlist'];
	}

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
									
										  // include '../includes/connect4.inc'; 


											// start article from table
											//$vendorNum_get = $_GET['number'];
											//$prodNum_get = $_GET['prodNum'];                                        

                                
											// $sql = "select * from new_vendor where slug='" . $companySlug . "'";
											// $result = $conn->query($sql);	

											$productParma = array(
												'tabel_name' => 'new_vendor',
												'select' => '*',
												'where' => array(
													"slug='" . $companySlug . "'" => 'AND',
												),
											);
											
											$result = getArticale( $productParma,$conn );
											

                                        
											$xcount = 0;	
											$vender_id = '';	
							
											while($row = mysqli_fetch_array($result)) {

                        						$vender_id = $row['id'];
											
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
																<img src="'.BASE_URL.'products/images/' . $logoNum . '" style="width:80%;" />
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

														
														
														$sqlTotalProds = "select * from vendor_product where vendor_id='" . $vender_id . "' AND series_product = '0'";
														$result46 = $conn->query($sqlTotalProds);
														$totalProds = mysqli_num_rows($result46);		
														
													
													?>
									

													<div class="sor">
														<span>Sort By</span>&nbsp;
															<select onchange="if (this.value) window.location.href=this.value">
																<option value="<?php echo BASE_URL; ?>commercial-landscape-companies/<? echo $companySlug; ?>" style="font-size: 16px; font-weight: bold">All Products&nbsp;&nbsp;<strong>(<? echo $totalProds ?>)</strong></option>	


																	<?

																			//$vendorNum_get = $_GET['number'];
																			//$xnum = $_GET['xnum'];
																			$xnum = $xnum;
																			$xCount = 0;


																			$sql = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $vender_id . "' ORDER BY name ASC";
																			$result = $conn->query($sql);


																			// List Product SGL Name with Count
																			while($row = mysqli_fetch_array($result)) {


																					$sql44 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id where vendor_id='" . $vender_id . "' AND xlist = '" . $row['xlist'] . "' AND series_product ='0'";
																					$result44 = $conn->query($sql44);					

																					$num_rows = mysqli_num_rows($result44);												

																					if ($xCount != $row['xlist']) {

																						$keyX = $row['xlist'];							

																						//selects currently selected category	
																						$xnum == $row['id'] ? $selected = 'selected' : $selected = '';


																						echo  '<option value="'.BASE_URL.'commercial-landscape-companies/'. $companySlug . '?xnum=' . $row['id'] . '" ' . $selected . '>' . $row['name'] . '&nbsp;<strong>(' . $num_rows . ')</strong></option>';


																						$xCount = $row['xlist'];

																					}

																			} 



																	?>										
	
										
															</select>
													</div><!-- /.sor -->
																
													<div class="showview">
														<?php $limited_url = BASE_URL.'commercial-landscape-companies/'.$companySlug.'?limit='; ?>
														Show <a href="<?php echo $limited_url; ?>24">24</a> | 
														<a href="<?php echo $limited_url; ?>48">48</a> | 
														<a href="<?php echo $limited_url; ?>all">View All</a> 
													</div><!-- /.showview -->
								</div><!-- /.section-titles-underlined -->
							</div>

							
									  <?
                   

	
										$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 24;
										$limit = ($limit == 'all') ? 1000 : $limit;        
										$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; 
                   


										// start products from table
							
											$vendorNum_get = $vender_id;
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
												
												$vendor_id = $row['vendor_id'];
												$xlist = $row['xlist'];
												$cateArray = array();
												
												/*if(empty($xlist)):
													echo $xlist = getCateFromVendor($vendor_id);die;
												endif;*/		
												
												$cateArray = getProductCategoryDetails($xlist,$conn);
												$vendor_slug = getProductVendorDetails($vendor_id,$conn);

												//echo "<pre>"; print_r($cateArray);die;


												$productName = $row['product_name'];
												
												$small = substr($productName, 0, 31);
												
												
												 if (empty($row['pdff']) || $row['pdff'] == 'none') {

																	$cadPdf = '';

															} else {

																	$cadPdf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/3.png" style="width:100%;" /></div>';

															}                                                     

															if (empty($row['cadd']) || $row['cadd'] == 'none') {

																	$cadDwg = '';

															} else {

																	$cadDwg = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/2.png" style="width:100%;" /></div>';

															}     

															if (empty($row['cadd_2']) || $row['cadd_2'] == 'none') {

																	$cadDwf = '';

															} else {

																	$cadDwf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/dwf.jpg" style="width:100%;" /></div>';

															}                                               

															if (empty($row['cadd_3']) || $row['cadd_3'] == 'none') {

																	$cadDxf = '';

															} else {

																	$cadDxf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/dxf.jpg" style="width:100%;" /></div>';

															}         

															if (empty($row['skup']) || $row['skup'] == 'none') {

																	$cadSkp = '';

															} else {

																	$cadSkp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/skp.jpg" style="width:100%;" /></div>';

															}                                                        

															if (empty($row['vwxx']) || $row['vwxx'] == 'none') {

																	$cadVwx = '';

															} else {

																	$cadVwx = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/vwx.jpg" style="width:100%;" /></div>';

															}                                                        

															if (empty($row['mediap']) || $row['mediap'] == 'none') {

																	$cadMedia = '';

															} else {

																	$cadMedia = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/1.png" style="width:100%;" /></div>';

															}                                                        

															if (empty($row['zipp']) || $row['zipp'] == 'none') {

																	$cadZip = '';

															} else {

																	$cadZipp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><img src="'.BASE_URL.'LandscapeProducts/images/products/details/formats/4.png" style="width:100%;" /></div>';

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
												
																/*$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash			     				
																//$detailsUrl = BASE_URL.''.$row['slug'];*/
																$detailsUrl = BASE_URL.$cateArray['sub_cate_slug'].'/'.$vendor_slug.'/'.$row['slug'];
											
														 echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 padding30">
																		<a href="'.$detailsUrl.'">
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
										
												
										function createPageLinks($maxPages, $page, $limit, $companySlug) {

										if ( $limit == 'all' ) {
											return '';

										} else {
										
											if($_GET['xnum'] > 0){
												$link = BASE_URL.'commercial-landscape-companies/'. $companySlug . '?xnum=' . $_GET['xnum'];
											} else {
												$link = BASE_URL.'commercial-landscape-companies/' . $companySlug;
											}

											$last  =  $maxPages;

											$start = ( ( $page - $maxPages ) > 0 ) ? $page - $maxPages : 1;
											$end   = ( ( $page + $maxPages ) < $last ) ? $page + $maxPages : $last;

											$class = ( $page == 1 ) ? "disable" : "active";

											if(isset($_GET['xnum'])):
												$html = '<a href="'. $link . '?limit=' . $limit . '&page=' . ( $page - 1 ) . '" class="' . $class . ' prev">Prev</a>';
											else:
												$html = '<a href="'. $link . '?limit=' . $limit . '&page=' . ( $page - 1 ) . '" class="' . $class . ' prev">Prev</a>';
											endif;	
											

											if ( $start > 1 ) {
												$html   .= '<a href="'. $link . '?limit=' . $limit . '&page=1">1</a>';
												$html   .= '<a href="#" class="disabled"><span>...</span></li>';
											}

											for ( $i = $start ; $i <= $end; $i++ ) {
												$class  = ( $page == $i ) ? "disable" : "";
												$html   .= '<a href="'. $link . '?limit=' . $limit . '&page=' . $i . '" class="' . $class . '">' . $i . '</a>';
											}

											if ( $end < $last ) {
												$html   .= '<a href="#" class="disable"><span>...</span></a>';
												$html   .= '<a href="'. $link . '?limit=' . $limit . '&page=' . $last . '">' . $last . '</a>';
											}

											$class = ( $page == $last ) ? "disable" : "active";
											$html .= '<a href="'. $link . '?limit=' . $limit . '&page=' . ( $page + 1 ) . '" class="' . $class . ' nxt">Next</a>';

											return $html;
									}
							}
												
												
								
								?>														
							

							
				
							
							
						</div><!-- /.container -->
                        
              <div class="pagination_strip full_width">
			    		<?php echo createPageLinks( $maxPages, $page, $limit, $companySlug); ?> 
            </div>
						<!-- /.pagination_strip -->
            
				</div>
					
			</section>
            
			
	
	</section>		

           

<? include $rootInclude.'la-common-footer-inner.inc'; ?>

<? include $rootInclude.'la-common-vendor-contact-modal.inc'; ?>




   </body>
</html>

