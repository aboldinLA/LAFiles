<?php
	session_start();
	
	include '../modules/configuration.inc'; 
	include '../modules/db.php';
	include '../modules/urlData.php';
	/*include '../modules/baseUrl.php';
	
	*/

	include $rootInclude.'la-common-top-inner.php';

	include $rootInclude.'la-common-header-inner.inc'; 
	
	/*$catParma = $_GET['catParma']; 
	$explode  = explode(  '/' , $catParma);

	$firstSlug  = ( ( isset( $explode[0] ) && !empty( $explode[0] ) ) ? $explode[0] : '' );
	$secondSlug = ( ( isset( $explode[1] ) && !empty( $explode[1] ) ) ? $explode[1] : '' );*/
	// Top Section - HTML
	
	

	// Top Section - HTML
	$adId = 0;
	$get_xlist = 0;
	$metaTitle = '';

	$getParmaSlug = $_GET['catParma']; 

	list($parent_cate, $sub_cate) = explode('/', $getParmaSlug);
	//echo "<pre>";print_r($menuData[$parmaSlug[0]]);die;
	//$data = '';

	$sql1 = "SELECT * FROM xlist WHERE slug = '".$sub_cate."'";
	$result1 = $conn->query($sql1); 

	$name = '';
	$cat_slug = '';
	$metaTitle = ''; 
    $heading = '';
    $get_xlist = '';

	while($row = mysqli_fetch_array($result1)) {   
		$adId = $row['idParent'];
		$cat_slug = $row['slug'];   	
	   	
		$name = $row['name'];
		$heading = $row['name'];
		$metaTitle = $name .' | Landscape Architect';
		$get_xlist = $row['id'];

	}	

/*	$parmaSlug = explode('/', $getParmaSlug);

	//var_dump($parmaSlug);die;


	if(count($parmaSlug) == 2){ 
		if(isset($menuData[$parmaSlug[0]])){   
			$mainCategory = $menuData[$parmaSlug[0]];
			if(isset($mainCategory['childes'][$parmaSlug[1]])){ 
				$childCatData = $mainCategory['childes'][$parmaSlug[1]];  
				$data = $childCatData;
				$adId =  $data['ad'];
				$get_xlist  = $data['xlist'];
				$heading  =  $childCatData['name'];
			}else{
				echo "sub cat found";die;
			}	

			//echo "<pre>";print_r($mainCatData);die;
		}else{
			echo "main cat found";die;
		}
	}else{
			echo "Wrong URL";die;
	}	*/

 ?>

<script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>
     <script type="text/javascript">
     	 jQuery(document).ready(function(){
		    jQuery("div#loader").remove();
		  });
     </script>       
<section class="search_section_ban full_width">
<div class="container">
<div class="row">
		<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
			
					<? include $rootInclude.'la_common-main-search-bar.inc'; ?>
					
        </div><!-- /.relative -->
    </div><!-- /.col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.search_section_ban -->

<section class="tool_page full_width">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBar">
    	<div class="white_side full_width">  
        	<!--        	<h2 class="mobtoggle"></h2>-->
						<img src="<?php echo BASE_URL; ?>lol-logos/sidebar-search-engine/la-details-sidebar-logo.jpg" width="100%" alt="LADetails" id="sidebarLogo">
            <div class="full_width" id="mobile_slide">
                
                
            <?

            // include '../../includes/connect4.inc'; 
						
						// sidebar accordian menu 
						include $rootInclude.'la-common-sidebar-menu-db.inc';
                   		
						if(isset($_POST['brandVen'])){
							 unset($_SESSION['brandVen']);
							 $_SESSION['brandVen'] = $_POST['brandVen'];
						}

						if($_POST['brand'] != 'y'){
							unset($_SESSION['brandVen']);
						}

						$vendorID = 0;

						$xlistNumber = $get_xlist;

						$adNum = $adId;

						$baseLink = BASE_URL.'LandscapeProducts/la_details.php?ad=' . $adId . '&xlist=' . $get_xlist;

						if($_GET['brand'] == 'y'){
							$baseLink .= "&brand=y";
						}
						
						
						$limit = ( isset( $_POST['limit'] ) ) ? $_POST['limit'] : 24;
						$limit = ($limit == 'all') ? $totalProdCount : $limit;
						$page = ( isset( $_POST['page'] ) ) ? $_POST['page'] : 1; 
                
                
         ?>
                
            <!-- Brand List Start -->
            <h2 class="mobtoggle" style="margin-top: 30px;">BRAND</h2>
            
             <form method="post" action="" id="brandsListForm">   
             	<input type="hidden" name="ad" value="<?php echo $adId; ?>">
             	<input type="hidden" name="xlist" value="<?php echo $get_xlist; ?>">
             	<input type="hidden" name="brand" value="y">
             	<input type="hidden" name="limit" value="24">
             	<input type="hidden" name="page" value="1">
            	<ul class="brandList">                
                

          	<?php
            
                    $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status > 2 ORDER BY new_vendor.company_name ASC";
                    $result1 = $conn->query($sql1);  

                    $rowcount1=mysqli_num_rows($result1);
                    $brandCount = 1;

                    /*echo "<pre>";
                    print_r($_POST);
                    print_r($_SESSION['brandVen']);die;*/

                    while($row = mysqli_fetch_array($result1)) {
						


                        $companyName = substr($row['company_name'],0,30);
						$checkClass = '';

                        if ($companyName2 != $row['company_name']) {
												
							foreach($_SESSION['brandVen'] as $brandId){
								if($brandId == $row['vendor_id']){
									$checkClass = "checked";
								}
							}

                            $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                            $result99 = $conn->query($sql99);  

                            $rowcount99=mysqli_num_rows($result99);  
														

                            echo '<li>
                                    <div class="check_box__ pull-left">
                                        <input type="checkbox" class="form-check-input brandCheckboxes" id="chkk'. $brandCount . '" name="brandVen[]" value="' . $row['vendor_id'] . '"' . $checkClass . '>
                                        <label for="chkk'. $brandCount . '"></label>
                                        <label class="form-check-label" for="chkk'. $brandCount . '">' . $companyName . ' (' . $rowcount99 . ')</label>
                                    </div>
                                </li>'; 

                            $brandCount++;
														


                            $companyName2 = $row['company_name'];

                        }

                    }
        		?>   
            <!-- Brand List End -->

            </ul>
						
                 
								<br><br>
                <button type="submit" value="Submit" id="brandSubmit" class="brandsSubmitBtn">Submit</button>
								<button type="button" value="Clear" id="brandClearBtn" class="brandsClearBtn">Clear</button>
                 
            </form>                    
                
                
            </div><!-- #mobile_slide -->
            
        </div><!-- /.white_side -->
        
				
				
       <!-- banner ads 4-end left side -->
				<?
				
					$ad = $adId;
					$ads = array();

					$sql = "SELECT * FROM banner_ups WHERE product='" . $ad . "' AND ROS='no' ORDER BY RAND()";
					$result = $conn->query($sql);									

					while($row = mysqli_fetch_array($result)){
						if(strpos($row['picture'], '.jpg') !== false || strpos($row['picture'], '.gif') !== false){
							array_push($ads, $row);
						}
					}
					
					for($i = 5; $i < count($ads); $i++){
						echo '<div class="add__ full_width"><a href="' .  $ads[$i]['web'] . '"><img src="../banner/'  . $ads[$i]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
					}	
				
				?>
        
        
    </div><!-- /.col-lg-3 -->
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
    	<div class="col-xs-12 adver">
						

				 <!-- horizontal banner ad -->
				<?
					$sql = "SELECT * FROM banner_ups WHERE product='" . $ad . "' AND ROS='lad' ORDER BY RAND() LIMIT 1";
					$result = $conn->query($sql);									

					while($row = mysqli_fetch_array($result)){
							echo '<div class="add__ full_width lad_ad"><a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ '; 
					}
				
				?>

			   </div><!-- /.adver -->
				        
								
								
								
								
        <?php
										
										
        
										$ad = $adId;
        
				
										if ($ad == '28') {
											 echo '<title>Business Services | Landscape Architect</title>';
												$parentName = 'Business Services';
										} elseif ($ad == '30') {
												echo '<title>Landscape Erosion Control Products | Landscape Architect</title>';
												$parentName = 'Landscape Erosion Control Products';                                            
										}elseif ($ad == '1300') {
												echo '<title>Commercial / Wholesale Fencing | Landscape Architect</title>';
												$parentName = 'Commercial / Wholesale Fencing';
										} elseif ($ad == '1139') {
												echo '<title>Landscape Irrigation | Landscape Architect</title>';
												$parentName = 'Landscape Irrigation';    
										} elseif ($ad == '32') {
												echo '<title>Commercial Exterior Lighting / Electrical | Landscape Architect</title>';
												$parentName = 'Commercial Exterior Lighting / Electrical';
										} elseif ($ad == '1214') {
												echo '<title>Outdoor Living / Residential Landscape | Landscape Architect</title>';
												$parentName = 'Outdoor Living / Residential Landscape';
										} elseif ($ad == '33') {
												echo '<title>Parks / Playground Products | Landscape Architect</title>';
												$parentName = 'Parks / Playground Products';
										} elseif ($ad == '38') {
												echo '<title>Commercial Pavers, Masonry, Blocks, Rocks | Landscape Architect</title>';
												$parentName = 'Commercial Pavers, Masonry, Blocks, Rocks';
										} elseif ($ad == '1212') {
												echo '<title>Wildlife / Commercial Landscape Pest Control | Landscape Architect</title>';
												$parentName = 'Wildlife / Commercial Landscape Pest Control';
										} elseif ($ad == '1002') {
												echo '<title>Wholesale Plant Accessories & Soil Amendments | Landscape Architect</title>';
												$parentName = 'Wholesale Plant Accessories & Soil Amendments';
										} elseif ($ad == '1394') {
												echo '<title>Pool and Spa | Landscape Architect</title>';
												$parentName = 'Pool and Spa';
										} elseif ($ad == '29') {
												echo '<title>Commercial Site Amenities | Landscape Architect</title>';
												$parentName = 'Commercial Site Amenities';
										} elseif ($ad == '1215') {
												echo '<title>Site Furnishings / Receptacles | Landscape Architect</title>';
												$parentName = 'Site Furnishings / Receptacles';
										} elseif ($ad == '1301') {
												echo '<title>Landscape Art, Sculpture, Metal / Stone Garden Ornaments | Landscape Architect</title>';
												$parentName = 'Landscape Art, Sculpture, Metal / Stone Garden Ornaments';
										} elseif ($ad == '41') {
												echo '<title>Water Features, Fountains, Ponds / Equipment | Landscape Architect</title>';
												$parentName = 'Water Features, Fountains, Ponds / Equipment';
										} elseif ($ad == '1213') {
												echo '<title>Landscape Water Management | Landscape Architect</title>';
												$parentName = 'Landscape Water Management';
										} elseif ($ad == '1209') {
												echo '<title>Landscape Installation Equipment | Landscape Architect</title>';
												$parentName = 'Landscape Installation Equipment';
										} elseif ($ad == '1210') {
												echo '<title>Landscape Maintenance Equipment | Landscape Architect</title>';
												$parentName = 'Landscape Maintenance Equipment';
										} elseif ($ad == '1211') {
												echo '<title>Tools, Tires & Replacement Parts | Landscape Architect</title>';
												$parentName = 'Tools, Tires & Replacement Parts';
										}  


										$cat1 = $adId;

										$xlistNumber = $get_xlist;

										$sql1 = "SELECT * FROM xlist WHERE id = '" . $xlistNumber ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
										$result1 = $conn->query($sql1);  


										while($row = mysqli_fetch_array($result1)) {

												$catName = $row['name'];  

										}        

        
        ?>
        
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
						
						<h2><?echo $parentName . ': <br>' . $catName ?></h2>
						
						<?	
							if(isset($_POST) && $_POST['brand'] == 'y'){
									$companyNames = array();
									$companyString = 'Results for ';
									$sql1 = '';

										for($i1 = 0; $i1 < sizeof($_SESSION['brandVen']); $i1++){
												$sql1 .= "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status > 2 AND vendor_id = '" . $_SESSION['brandVen'][$i1] . "'";
												if($i1 < (sizeof($_SESSION['brandVen']) - 1)){
													$sql1 .= " UNION ";
												}
										}
										
										$result1 = $conn->query($sql1); 


										while($row = mysqli_fetch_array($result1)) {
												array_push($companyNames, $row['company_name']);
											}
											
										$companyNames = array_values(array_unique($companyNames));
										
										if(sizeof($companyNames) < 2){
                                            $companyString .= $companyNames[0];
                                        } else if(sizeof($companyNames) > 2){
											$companyString .= $companyNames[0];
											$companyString .= ' and ' . (sizeof($companyNames) - 1) . ' more Companies';
										} else {
											$companyString .= $companyNames[0] . ' and ' . $companyNames[1];
										}

									$companyString .= ':';
							 }
						
						?>
						<p class="sort_area"><? echo($companyString); ?> <span id="totalProdCount"><!-- filled with jquery script based on $totalProdCount --></span></p>
							<p class="sort_area">Show 
								<a href="<? echo $baseLink . '&limit=24&page=1' ?>" id="show24btn" class="<? if(!isset($limit) || $limit == 24){ echo 'bold'; }; ?>">24</a> | 
								<a href="<? echo $baseLink . '&limit=48&page=1' ?>" id="show48btn" class="<? if($limit == 48){ echo 'bold'; }; ?>">48</a> | 
								<a href="<? echo $baseLink . '&limit=all&page=1' ?>" id="showallbtn" class="<? if($limit == 50000){ echo 'bold'; }; ?>">View All</a>
							</p>
							

							<div class="full_width brand_ss">
							<div class="row">
            
						
						<? 
												
						$testCounter = 0;
						
												
						$allProds = array();
						
						if(empty($_POST['brand']) && $_POST['brand'] != 'y'){ 
						
								$xlistNumber = $get_xlist;
								$vendorStatus = [18, 16, 14, 12, 10];

								$all18 = array();
								$all16 = array();
								$all14 = array();
								$all12 = array();
								$all10 = array();

								$allProducts = array();

								$productTotalAmount = 0;

								foreach($vendorStatus as $status){

										$curVendorID = 1;
										$prevVendorID = 0;
										$productCount = 0;		

									
										 
										 
										$sql1 = "SELECT *, `new_vendor`.`slug` AS vendor_slug, `vendor_product`.`slug` AS product_slug FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = " . $status . " AND series_product = 0 ORDER BY vendor_id ASC";
										
										$result1 = $conn->query($sql1);  

										$productTotalAmount += mysqli_num_rows($result1);

										$temp = array();

										if ($status == 18 || $status == 16){

											$allProdsArr = array();

											while($product = mysqli_fetch_array($result1)) {

												if ($productCount < 2) {

														$curVendorID = $product['vendor_id'];

														if ($curVendorID == $prevVendorID || $productCount == 0){
															$productCount++;
															array_push($temp, $product);
															$prevVendorID = $curVendorID;

														} else {

															array_push($allProdsArr, $temp);
															$temp = array();
															$productCount = 1;
															array_push($temp, $product);
															$prevVendorID = $curVendorID;
														}

												} else if ($productCount >= 2) {

														array_push($allProdsArr, $temp);
														$temp = array();
														$curVendorID = $product['vendor_id'];

														array_push($temp, $product);
														$productCount = 1;
														$prevVendorID = $curVendorID;

												}
												
																								

											} //END while

											//push final array into allProdsArr
											array_push($allProdsArr, $temp);


											$status == 18 ? $allProducts[18] = $allProdsArr : $allProducts[16] = $allProdsArr;


										}// END if - status 18 & 16 
										else if ($status == 14 || $status == 12 || $status == 10){

											$allProdsArr = array();

											while($product = mysqli_fetch_array($result1)) {

													$temp = array();
													array_push($temp, $product);
													array_push($allProdsArr, $temp);
													
											} //END while
											
													if($status == 14){ $allProducts[14] = $allProdsArr; }
													elseif($status == 12){ $allProducts[12] = $allProdsArr; }
													elseif($status == 10){ $allProducts[10] = $allProdsArr; }

										}// END if - status 14, 12 & 10 

								} // END foreach


								//array to hold all products
								//$allProducts = [$all18, $all16, $all14, $all12, $all10];

								$prevVendorID = 0;
								
								
								sortingFn($allProducts, $allProds);


								//fills allProds array with products in this xlist that match company checked in brands check box list
						} else if(isset($_SESSION['brandVen']) ) {
												
							$companyProds = array();
							$sql1 = '';

							for($i1 = 0; $i1 < sizeof($_SESSION['brandVen']); $i1++){
									$sql1 .= "SELECT *, `new_vendor`.`slug` AS vendor_slug, `vendor_product`.`slug` AS product_slug  FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status > 2 AND vendor_id = '" . $_SESSION['brandVen'][$i1] . "' AND series_product = 0";
									if($i1 < (sizeof($_SESSION['brandVen']) - 1)){
										$sql1 .= " UNION ";
									} else {
										$sql1 .= " ORDER BY product_name ASC";
									}
							}

							$result1 = $conn->query($sql1); 


							while($row = mysqli_fetch_array($result1)) {
								array_push($companyProds, $row);
							}

							$allProds = $companyProds;
								
						} //end isset($_SESSION['brandVen']
							
							
						$totalProdCount = count($allProds);			

						$maxPages =  ceil( $totalProdCount / $limit );		
						
						$results = getData($limit, $page, $maxPages, $allProds);						

						displayData($results, $conn, $xlistNumber);

							
						function getData($limit, $page, $maxPages, $allProds) {

								$results = array();
								$amountofProds = sizeof($allProds);

								$startIndex = number_format($limit * ($page - 1));
								$endIndex = number_format($startIndex + $limit);

								if($endIndex > $amountofProds){
									$endIndex = $amountofProds;
								}

								for($y = $startIndex; $y < $endIndex; $y++){
										array_push($results, $allProds[$y]);
								}

								return $results;		
						}



						function current_url(){
						    $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
						    $validURL = str_replace("&", "&amp", $url);
						    return $validURL;
						}
						function createPageLinks($maxPages, $page, $limit, $totalProdCount, $adId, $get_xlist) {

								if ( $limit == 'all' ) {
									return '';

								} else {

									$link;

									if($_GET['brand'] == 'y'){
										$link = current_url(). '?brand=y';
									} else {
										$link = current_url();
									}

									$last  =  $maxPages;

									$start = ( ( $page - $maxPages ) > 0 ) ? $page - $maxPages : 1;
									$end   = ( ( $page + $maxPages ) < $last ) ? $page + $maxPages : $last;

									$class = ( $page == 1 ) ? "disable" : "active";
									$html = '<a href="'. $link . '?limit=' . $limit . '&page=' . ( $page - 1 ) . '" class="' . $class . ' prev">Prev</a>';

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




							function displayData($results, $conn, $xlistNumber){                   

										$prodCount = 0;
										
										foreach ($results as $product){

											$sql99 = "SELECT *   
														FROM vendor_product 
														WHERE xlist = '" . $xlistNumber ."' AND `vendor_product`.`vendor_id` = '" . $product['vendor_id'] ."' AND series_product = 0";
											$result99 = $conn->query($sql99);  

											$rowcount99=mysqli_num_rows($result99);   
											
											$prodName = substr($product['product_name'],0,23);
											$companyName = substr($product['company_name'],0,25);
											$photo = str_replace(' ', '%20', $product['photo']);
											$vendor_slug = $product['vendor_slug'];
											$product_slug = $product['product_slug'];
											
											if($prodCount < 9){
												$image = '<img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'products/images/'. $photo . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain">';
											} else {
												$image = '<img class="lazy" data-src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'products/images/'. $photo . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain">';
											}
											$prodCount++;

											$catParma = $_GET['catParma']; 
											$explode  = explode(  '/' , $catParma);

											$firstSlug  = ( ( isset( $explode[0] ) && !empty( $explode[0] ) ) ? $explode[0] : '' );
											$secondSlug = ( ( isset( $explode[1] ) && !empty( $explode[1] ) ) ? $explode[1] : '' );

											//$detailsPageUrl = BASE_URL.$firstSlug.'/'.$secondSlug.'/'.$product['slug'];
											$detailsPageUrl = BASE_URL.$secondSlug.'/'.$vendor_slug.'/'.$product_slug;

											echo '<a href="' . $detailsPageUrl . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
																						<div class="full_width brdr">
																										' . $image . '
																										<span class="full_width he_det">
																														<h4>'. $prodName . '<br><span class="companyName">'. $companyName . '</span><span>'. $rowcount99 . ' Matching Products</span></h4>
																										</span>
																						</div>    
																						</a>'; 
										}
										unset($product);

						}

							
							
							
//error is in this function
							function sortingFn($allProducts, &$finalProdArray){
							
											$prevVendorID = 0;
											$newAllProdsArr = array();

											foreach($allProducts as $key => $statusArr){ //each status arrays

													$tempStatusArr = $statusArr;
													
													$firstItem = true;

													if(isset($statusArr)){

														foreach($statusArr as $index => $prodGroup){ //each product group (array) in current status array
																

																$curVendorId = $prodGroup[0]['vendor_id'];

																if($curVendorId != $prevVendorID || $firstItem){
																	foreach($prodGroup as $product){
																		array_push($finalProdArray, $product);
																	}
																	$prevVendorID = $curVendorId;
																	unset($tempStatusArr[$index]);
																}
																
																$firstItem = false;

														}
														
														$prevVendorID = 0;
														
														
														$newAllProdsArr[$key] = $tempStatusArr;

												} //end if status array isset
										

												if(empty($newAllProdsArr[$key])){
													unset($newAllProdsArr[$key]);
												}

											}
		

											if(!empty($newAllProdsArr)){
												sortingFn($newAllProdsArr, $finalProdArray);
											}

									} //end sortingFn()
				 
						?>
						
						
                                
                                
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
            
			
			 			<div class="pagination_strip full_width">
			    		<?php echo createPageLinks( $maxPages, $page, $limit, $totalProdCount, $adId , $get_xlist); ?> 
            </div>
						<!-- /.pagination_strip -->
            
            
            
        </div><!-- ./col-lg-8 -->
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 sideBar">
				
            <!-- banner ads 1-6 right side -->
						<?  for($i = 0; $i < 5; $i++){
									if(!empty($ads[$i]['picture'])){
										echo '<div class="add__ full_width"><a href="' .  $ads[$i]['web'] . '"><img src="../banner/'  . $ads[$i]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
										
										list($width, $height) = getimagesize(BASE_URL.'banner/' . $ads[$i]['picture'] . '');
										
										if($height > 200){
											$i++;
										}
									}
								}	
						?>
						
        </div><!-- ./col-lg-4 -->
    </div><!-- /.row -->
    	
    </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

<section class="green_newsletter full_width">
<div class="container">
<form id="news_letter_form">
	<h3>Sign up for LAWeekly newsletter.</h3>
    <div class="coverinput">
    <input type="text" name="email_address" placeholder="Enter your email address" class="newsletterEmailInput"/>
    <button type="submit" class="newsletterSignUpBtn">Sign up</button>
    </div><!-- /.coverinput -->
</form>    
</div><!-- /.contianer -->
</section><!-- /.green_newsletter -->
	
 <? include $rootInclude.'la-common-footer.inc'; ?>

<? include $rootInclude.'la-common-magazine-subscribe.php'; ?>




<script>


$(document).ready(function () {
    "use strict";
		
	 //updates total product count text at top of page
	 document.getElementById("totalProdCount").innerHTML = '<? echo $totalProdCount ?> Products';
	 
	 
	 
		$('#brandClearBtn').click(function(){
			$(".form-check-input").prop("checked", false);
		});


		$("#brandSubmit").click(function(e){
			e.preventDefault();

			let string = $("#brandsListForm").attr("action").replace("&brand=y", "");
			
			if(!$(".brandCheckboxes").is(":checked")){
				$("#brandsListForm").attr("action", string);
			} 
	
			$("#brandsListForm").submit();

		});
		
		

		$("#keywordSE4").validate({
			rules: {
			keywordSE4: {
				required: true,
				minLength: 2
			}
			},
			messages: {
				keywordSE4: "Please enter a search criteria"
			}
		});
		
});


</script>


   </body>
</html>
