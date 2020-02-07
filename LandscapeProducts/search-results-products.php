<? 	
	include '../modules/configuration.inc';
	include $rootInclude.'la-common-top.php'; 

	include $rootInclude.'la-common-header-inner.inc';  ?>




<section class="search_section_ban full_width">
<div class="container">
<div class="row">
	<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="productFinder" id="productFinder">
				<input type="text" name="keywordSE4" placeholder="Search products by keyword or vendor name" value="<?php echo $_POST['keywordSE4']; ?>" />
        <button type="submit" name="submit" value="Submit"></button>
			</form>	
        </div><!-- /.relative -->
    </div><!-- /.col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.search_section_ban -->

<section class="tool_page full_width">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
    	<div class="white_side full_width">  
        	<h2 class="mobtoggle">ALL CATEGORIES</h2>
            <div class="full_width" id="mobile_slide">
                
                
            <?

            //include '../../includes/connect4.inc'; 
						
						// sidebar accordian menu 
						include $rootInclude.'la-common-sidebar-menu.inc';
                   
									
				
													
						if(isset($_POST['brandVen'])){
							 unset($_SESSION['brandVen']);
							 $_SESSION['brandVen'] = $_POST['brandVen'];
						}

						if($_GET['brand'] != 'y'){
							unset($_SESSION['brandVen']);
						}

						$vendorID = 0;

						$xlistNumber = $_GET['xlist'];

						$adNum = $_GET['ad'];

						$baseLink = BASE_URL.'LandscapeProducts/la_details.php?ad=' . $_GET['ad'] . '&xlist=' . $_GET['xlist'];

						if($_GET['brand'] == 'y'){
							$baseLink .= "&brand=y";
						}
                
                
         ?>
                
            <!-- Brand List Start -->
            <h2 class="mobtoggle" style="margin-top: 30px;">BRAND</h2>
            
             <form method="post" action="<? echo BASE_URL.'LandscapeProducts/search-results-products.php?brand=y&limit=24&page=1' ?>" id="brandsListForm">   
            	<ul class="brandList">                
                

          	<?
            
                    $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status > 2 ORDER BY new_vendor.company_name ASC";
                    $result1 = $conn->query($sql1);  

                    $rowcount1=mysqli_num_rows($result1);
                    $brandCount = 1;

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
        
        
        
    </div><!-- /.col-lg-3 -->
	
	
	
	<?

			if(isset($_POST['keywordSE4'])) {

				$keywordSE = $_POST['keywordSE4']; 

			} else {

				$choices = array("bench", "play structure","fence", "pool");

				$keywordSE = $choices[array_rand($choices)];

			}	
	
	?>
	
	

	
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
    	<div class="col-xs-12 adver">
        	<img src="images/advertise.jpg" alt="img" />
        </div><!-- /.adver -->
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
            <h2 class="center_section_catHeader">Showing Results for: <? echo $keywordSE; ?> <? echo $keywordSE44; ?></h2>
            
            <p class="sort_area" id="totalProdCount"></p>
<!--						 <p class="sort_area">Sort from A-Z</p>-->
            <div class="showview">
							Show <a href="<?php echo BASE_URL; ?>LandscapeProducts/search-results-products.php">24</a> | 
							<a href="<?php echo BASE_URL; ?>LandscapeProducts/search-results-products.php?limit=48">48</a> | 
							<a href="<?php echo BASE_URL; ?>LandscapeProducts/search-results-products.php?limit=all">View All</a> 
						</div><!-- /.showview -->
            
            
            <div class="full_width brand_ss">
            <div class="row">
				
				<style>
					
				.contain {
					object-fit: contain;
					width: 150px;
					height: 200px;
					background-color: #FFFFFF;
					}

				</style>				
				
				
				
	<?			



						$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 24;
						$limit = ($limit == 'all') ? 1000 : $limit;        
						$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; 

					
				
	   				
				
						$servername = "localhost";
						$username = "land_patchew";
						$password = "59q2GB6k$3";
						$dbname = "land_landscap_lollive";

						// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
				
				
						$sql = 	"(SELECT id, product_name, description, photo, cadd, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE . "%' OR `description` LIKE '%" . $keywordSE . "%' AND series_product ='0' ORDER BY RAND())
							UNION
								 (SELECT id, name, idParent, sub_number, caddx as 'cadd', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%') ORDER BY RAND() LIMIT 0,24";		
								 
								 
//							$sql = 	"(SELECT id, product_name, description, photo, cadd, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE . "%' OR `description` LIKE '%" . $keywordSE . "%' AND series_product ='0' ORDER BY RAND())
//							UNION
//								 (SELECT id, company_name, profile, logo, caddv as 'cadd', edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE . "%' OR `company_name` LIKE '%" . $keywordSE . "%' AND status != 2 ORDER BY RAND())
//							UNION
//								 (SELECT id, name, idParent, sub_number, caddx as 'cadd', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%') ORDER BY RAND() LIMIT 0,24";		
				
					
						$result = $conn->query($sql);									
						
					    $num_rows33 = mysqli_num_rows($result);	
				
				
						while($row = mysqli_fetch_array($result)) {
							
							$prodNumber = $row['id'];
							
							
								$sql2 = "SELECT *  FROM `vendor_product` WHERE id = '" . $prodNumber . "'";
								$result2 = $conn->query($sql2); 
							
					    		$num_rows2 = mysqli_num_rows($result2);	
									
									
								if ($num_rows2 == 0) {
									
										$sql3 = "SELECT *  FROM `xlist` WHERE id = '" . $prodNumber . "'";
										$result3 = $conn->query($sql3); 

										$num_rows3 = mysqli_num_rows($result3);	
									
										if ($num_rows3 == 0) {
											
											$sql4 = "SELECT *  FROM `new_vendor` WHERE id = '" . $prodNumber . "' AND status != 2";
											$result4 = $conn->query($sql4); 
												while($row = mysqli_fetch_array($result4)) {
												
												
												// Vendor	
												echo '<a href="'.BASE_URL.'LandscapeProducts/vendor-details.php?number=' . $row['vendor_id'] . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
													<div class="full_width brdr" style="height: 300px; background-color:#FFFFFF">
														<img class="contain" src="'.BASE_URL.'products/images/' . $row['logo'] . '" alt="img" />
														<span class="full_width he_det">
															<h4>' . $row['company_name'] . '<span>3 Matching Products</span></h4>
														</span>
													</div>    
													</a>';


												}
											
										} else {
											
											$sql6 = "SELECT *  FROM `vendor_product` WHERE xlist = '" . $prodNumber . "'";
											$result6 = $conn->query($sql6); 
												while($row = mysqli_fetch_array($result6)) {
												
												$prodName = substr($row['product_name'],0,75);
												$photo = str_replace(' ', '%20', $row['photo']);  
												$photo = str_replace('(', '%28', $photo);
												$photo = str_replace(')', '%29', $photo);
												
												// XList		
												echo '<a href="'.BASE_URL.'LandscapeProducts/product-details.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
														<div class="full_width brdr" style="height: 300px; background-color:#FFFFFF">
															<img class="contain" src="'.BASE_URL.'products/images/' . $photo . '" alt="img" />
															<span class="full_width he_det">
																<h4>' . $prodName . '<span>2 Matching Products</span></h4>
															</span>
														</div>    
														</a>';


												}
											
										}
											
										
											
									
								} else {
									
										$sql5 = "SELECT *  FROM `vendor_product` WHERE id = '" . $prodNumber . "'";
										$result5 = $conn->query($sql5); 
											while($row = mysqli_fetch_array($result5)) {
											
											$prodName = substr($row['product_name'],0,75);
											$photo = str_replace(' ', '%20', $row['photo']);  
											$photo = str_replace('(', '%28', $photo);
											$photo = str_replace(')', '%29', $photo);
											
											//Product
											echo '<a href="'.BASE_URL.'LandscapeProducts/product-details.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
													<div class="full_width brdr" style="height: 300px; background-color:#FFFFFF">
														<img class="contain" src="https://landscapearchitect.com/products/images/' . $photo . '" alt="img" />
														<span class="full_width he_det">
															<h4>' . $prodName . '<span>1 Matching Products</span></h4>
														</span>
													</div>    
													</a>';
												
												
											}
									
									}




									//$sql1 = "SELECT *  FROM `vendor_product` WHERE id = '" . $prodNumber . "' AND series_product = '0' AND photo LIKE '%jpg%'";
									//$result1 = $conn->query($sql1);  

									//while($row = mysqli_fetch_array($result1)) {

										//if (!empty($row['id'])){							

								//echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
										//<div class="full_width brdr">
											//<img class="contain" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '" alt="img" />
											//<span class="full_width he_det">
												//<h4>' . $row['product_name'] .  '<span>27 Matching Products</span></h4>
											//</span>
										//</div>    
										//</a>';


										//} else {

											//echo 'cow';

										//}

									//}





							}
				
												
										
										$maxPages =  ceil( $num_rows33 / $limit );
										
												
										function createPageLinks($maxPages, $page, $limit) {

											if ( $limit == 'all' ) {
												return '';

											} else {

											
												$link = BASE_URL.'LandscapeProducts/search-results-products.php';

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
				
				
				
				
				
				
				
   
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
			
           <div class="pagination_strip full_width">
			    		<?php echo createPageLinks( $maxPages, $page, $limit); ?> 
            </div>
						<!-- /.pagination_strip -->
            
        </div><!-- ./col-lg-8 -->
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
           
					    <?
                            


															$sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND()";
															$result = $conn->query($sql);									

															// banner rotating section

															 $bCount = 1;

															while($row = mysqli_fetch_array($result)) {

																if ($bCount < 3) {

																		echo '<a href="' . $row['web'] . '" target="_blank"><img src="/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a><div class="space10 hidden-xs clearfix"></div>';


																		$bCount++;

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
	
            
			

		
			<? include $rootInclude.'la-common-footer-inner.inc'; ?>
			
			<!-- must go below footer to access jquery -->
			<? include $rootInclude.'la-common-magazine-subscribe.php'; ?>
			
			
			<script>
				
					$(document).ready(function () {
							"use strict";

						 //updates total product count text at top of page
						 document.getElementById("totalProdCount").innerHTML = '<? echo $num_rows33 ?> Products';
						 
					});
				
				
							$("#productFinder").validate({
								rules: {
								keywordSE4: {
									required: true,
									minLength: 1
								}
								},
								messages: {
									keywordSE4: "Please enter a search criteria"
								}
							});
			
			</script>
			
	</body>
</html>
			