<? 
	include 'modules/configuration.inc';
	include 'modules/comman_functions.php';
	include 'modules/db.php';

	include $rootInclude.'la-common-top.php'; 
	include $rootInclude.'la-common-header.inc';
	include $rootInclude.'la_common2-inner.inc'; 



	$keywordSE = '';

	if(isset($_GET['key'])){

		$keywordSE = $_GET['key'];

	} else if(isset($_POST['keywordSE4'])) {

		$keywordSE = $_POST['keywordSE4']; 

	} else {

		$choices = array("design", "landscape architect","lighting", "awards");

		$keywordSE = $choices[array_rand($choices)];

	}	
	
	$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 24;
	$limit = ($limit == 'all') ? 50000 : $limit;        
	$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; 

	
?>



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
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
    	<div class="white_side full_width">  
        	<img src="<?php echo BASE_URL; ?>lol-logos/sidebar-search-engine/la-details-sidebar-logo.jpg" width="100%" alt="LADetails" id="sidebarLogo">
            <div class="full_width" id="mobile_slide">
                
                
							<?

								//include '../includes/connect4.inc'; 

								// sidebar accordian menu 
								include $rootInclude.'la-common-sidebar-menu.inc';


							if(isset($_POST['brandVen'])){
								 unset($_SESSION['brandVen']);
								 $_SESSION['brandVen'] = $_POST['brandVen'];
							}

							if($_GET['brand'] != 'y'){
								unset($_SESSION['brandVen']);
							}
							
                   
					?>
					
					
					 <!-- Brand List Start -->
            <h2 class="mobtoggle" style="margin-top: 30px;">BRAND</h2>
            
             <form method="post" action="<?php echo BASE_URL; ?>search-results-products.php<? echo '?key=' . $keywordSE . '&brand=y&limit=24&page=1' ?>" id="brandsListForm">   
            	<ul class="brandList">                
                

          	<?
            
                    $sql1 =  "(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'product' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE new_vendor.status > 2 AND vendor_product.series_product = 0 AND (vendor_product.product_name LIKE '%" . $keywordSE . "%' OR vendor_product.description LIKE '% " . $keywordSE . " %'))
										UNION
										(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'xlist' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE new_vendor.status > 2 AND vendor_product.series_product = 0 AND xlist.name LIKE '%" . $keywordSE . "%') ORDER BY company_name ASC";
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
														

                            $sql99 = "(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'product' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE (vendor_product.product_name LIKE '%" . $keywordSE . "%' OR vendor_product.description LIKE '% " . $keywordSE . " %') AND new_vendor.status > 2 AND vendor_product.series_product = 0 AND vendor_product.vendor_id = " . $row['vendor_id'] . ")
														UNION
														(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'xlist' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE new_vendor.status > 2 AND vendor_product.series_product = 0 AND xlist.name LIKE '%" . $keywordSE . "%' AND vendor_product.vendor_id = " . $row['vendor_id'] . ")";
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


    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
    	<div class="col-xs-12 adver">
						

				 <!-- banner ads 4-end left side -->
				<?
					$sql = "SELECT * FROM banner_ups WHERE ROS='rosh' ORDER BY RAND() LIMIT 1";
					$result = $conn->query($sql);									

					while($row = mysqli_fetch_array($result)){
							echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%; margin-bottom: 20px;     max-width: 964px;" /></a></div><!-- /.add__ -->'; 
					}
				
				?>

			   </div><!-- /.adver -->
				 
				 
				 
				 <?
				 	
					if(!isset($limit) || $limit == 24){
						
					} elseif($limit == 48){
					
					} else {
						
					}
				 
				 ?>
				 
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
            <h2 class="center_section_catHeader">Showing Results for: <? echo $keywordSE; ?></h2>
						<div class="sort_area_container">
							<p class="sort_area" id="totalProdCount"><!-- fills via jquery after all results are calculated --></p>
							<div class="showview">
								Show <a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE ?>" class="<? if(!isset($limit) || $limit == 24){ echo 'bold'; }; ?>">24</a> | 
								<a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE ?>&limit=48" class="<? if($limit == 48){ echo 'bold'; }; ?>">48</a> | 
								<a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE ?>&limit=all" class="<? if($limit == 50000){ echo 'bold'; }; ?>">View All</a> 
							</div><!-- /.showview -->
						</div>

							
												

									<?	
																		
										$sql7 = "SELECT * FROM `xlist` WHERE `name` LIKE '% " . $keywordSE . " %' ORDER BY `id` DESC";
										$result7 = $conn->query($sql7);
										$num_rows7 = mysqli_num_rows($result7);	


										 if ($num_rows7 != 0){

											 echo "<div id='suggestedSearch'>
											 				<h3>Suggested Product Search Links:</h3>
															<div id='suggestedSearchItems'>";


												while($row = mysqli_fetch_array($result7)) {

															if ($row['name'] == "W - Landscape / Irrigation Supply") {

																	$xName = "Landscape / Irrigation Supply";

															} elseif ($row['name'] == "* SW - Irrigation Design") {

																	$xName = "Irrigation Design";

															} elseif ($row['name'] == "* SW - Plant Identification") {

																	$xName = "Plant Identification";

															} elseif ($row['name'] == "* SW - Site Design") {

																	$xName = "Site Design";

															} elseif ($row['name'] == "* SW - Website Design") {

																	$xName = "Website Design";

															} elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {

																	$xName = "Chemicals, Soil Nutrients & Mulch";

															} elseif ($row['name'] == "W - Light Tools & Equipment") {

																	$xName = "Light Tools & Equipment";

															} elseif ($row['name'] == "W - Lighting") {

																	$xName = "Lighting";

															} elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {

																	$xName = "Pavers, Masonry, Blocks & Rocks";

															} elseif ($row['name'] == "W - Power Equipment") {

																	$xName = "Power Equipment";

															} elseif ($row['name'] == "W - Small Engine Repair") {

																	$xName = "Small Engine Repair";

															} elseif ($row['name'] == "W - Water Garden Supplies") {

																	$xName = "Water Garden Supplies";

															} elseif ($row['name'] == "P - Aquatic Plants") {

																	$xName = "Wholesale Aquatic Plants";

															} elseif ($row['name'] == "P - Bamboo") {

																	$xName = "Bamboo";

															} elseif ($row['name'] == "P - Ground Cover") {

																	$xName = "Ground Cover";

															} elseif ($row['name'] == "P - Plant Brokers") {

																	$xName = "Plant Brokers";

															} elseif ($row['name'] == "P - Tree Relocation Services") {

																	$xName = "Tree Relocation Services";

															} elseif ($row['name'] == "P - Tree Research & Introduction") {

																	$xName = "Tree Research & Introduction";

															} elseif ($row['name'] == "P - Trees - Palms") {

																	$xName = "Trees - Palms";

															} elseif ($row['name'] == "P - Trees - Wholesale") {

																	$xName = "Trees - Wholesale";

															} elseif ($row['name'] == "P - Tropical Foliage") {

																	$xName = "Tropical Foliage";

															} elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {

																	$xName = "Turf Grass / Sod / Seed";

															} elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {

																	$xName = "Wildflower Seeds";

															} else {

																 $xName = $row['name'];

															}

													 echo "<a href='".BASE_URL."search-results-site.php?key=" . $xName . "'>" . $xName . "</a>";

												}				

											 	echo "</div></div>";
												
											}
									?>
						
            
            <div class="full_width brand_ss">
            <div class="row">

				
						<?php
	



								
								
								
							$sql1 = 	"(SELECT id, title, ed_text, source, FROM_UNIXTIME(issue) as 'date', 'edit' As type FROM editorial WHERE title LIKE '% " . $keywordSE . " %' OR ed_text LIKE '%" . $keywordSE ."%' AND title NOT LIKE '%weekly%' AND ed_text NOT LIKE '%onmouse%')
							UNION
								 (SELECT id, product_name, description, photo, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '% " . $keywordSE . " %' OR `description` LIKE '% " . $keywordSE . " %')
							UNION
								 (SELECT id, company_name, profile, logo, edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '% " . $keywordSE . " %' OR `company_name` LIKE '% " . $keywordSE . " %' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '% " . $keywordSE . " %') ORDER BY date DESC";					   
					   
							$result1 = $conn->query($sql1);
							$totalResultsAmount = mysqli_num_rows($result1);	


						// get the info from the db 
						$sql11 = "(SELECT id, title, ed_text, source, FROM_UNIXTIME(issue) as 'date', 'edit' As type FROM editorial WHERE title LIKE '% " . $keywordSE . " %' OR ed_text LIKE '%" . $keywordSE ."%' AND title NOT LIKE '%weekly%' AND ed_text NOT LIKE '%onmouse%')
							UNION
								 (SELECT id, product_name, description, photo, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '% " . $keywordSE . " %' OR `description` LIKE '% " . $keywordSE . " %')
							UNION
								 (SELECT id, company_name, profile, logo, edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '% " . $keywordSE . " %' OR `company_name` LIKE '% " . $keywordSE . " %' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '% " . $keywordSE . " %') ORDER BY date DESC
						  LIMIT " . $limit . " OFFSET " . $limit * ($page - 1);
					   
						 $result11 = $conn->query($sql11);
						
						
							
							while($list = mysqli_fetch_array($result11)){		
							
							
									//start editorial section
									if($list['type'] == 'edit'){

										$sql22 = "SELECT * FROM editorial WHERE id = '" .  $list['id'] . "'";
										$result22 = $conn->query($sql22);

										// while there are rows to be fetched...
										while ($row = mysqli_fetch_assoc($result22)) {

											//image and href links
											$imageLink = BASE_URL.'research/images/' . $row['id'] . '.jpg';
											$link = BASE_URL.$row['slug']. '#article1';
											
											//work on code to pull images from files without images
											
//											$imageFileHeaders = @get_headers($imageLink);
//											if(!$imageFileHeaders || $imageFileHeaders[0] == 'HTTP/1.1 404 Not Found') {
//											
//													$imgLinkStart = strpos($row['ed_text'], '<img src="http:') + 10;
//													$imgLinkEnd = strpos($row['ed_text'], '.jpg', $imgLinkStart) + 4;
//													$imageLink = substr($row['ed_text'], $imgLinkStart, ($imgLinkEnd - $imgLinkStart));
//												
//													
//											}


											//author
											if(strlen($row['author']) > 1){
												$author = 'Author: ' . $row['author'];
											}
											
											//sample text
										$textRaw = str_replace("'", "'",  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['ed_text']))));
																$descriptionString = str_replace("<br>", " ", $textRaw);
																$descriptionString = preg_replace("/(\<a).+(\<\/a\>)/", "", $descriptionString);
																																
																$desIdentifier = '<p class="articleBodyText">';

																$desStart = strpos($descriptionString, $desIdentifier);
																																
																if($desStart === false){
																	$desIdentifier = '<p><span style="font-family:Times, \'Times New Roman\', serif; font-size:16px">';
																	$desStart = strpos($descriptionString, $desIdentifier);
																} 
																
																if($desStart === false){
																	$desIdentifier = '<span style="font-family:Times, \'Times New Roman\', serif; font-size:16px"><p>';
																	$desStart = strpos($descriptionString, $desIdentifier);
																}
																
																if($desStart === false){
																	$desIdentifier = '<p style="font-family:Times, \'Times New Roman\', serif; font-size:16px">';
																	$desStart = strpos($descriptionString, $desIdentifier);
																}
																
																if($desStart === false){
																	$desIdentifier = '<p style="font-family:Times New Roman, Times, serif; font-size:16px">';
																	$desStart = strpos($descriptionString, $desIdentifier);
																}
																
																if($desStart === false){
																	$desIdentifier = '<p>';
																	$desStart = strpos($descriptionString, $desIdentifier);
																}


																
																if($desStart === false){
																	$description = '';
																} else {
																	$description = substr($descriptionString, $desStart + strlen($desIdentifier), 125) . ' . . .';
																	$description = preg_replace("/(<a).+(<\/a>)/", "", $description);
																	$description = strip_tags($description, '<p>');
																}
											
											

											echo '<div class="col-md-12 col-sm-6 rnews">
													<a href="' . $link . '">
															<div class="fw-thumb2"><img src="' . $imageLink . '" alt=""></div>
															<div class="fw-info ml-1 articleSearchResultCell">
																	<p class="searchResultTitle">' . str_replace(chr(146), "'", $row['title']) . '</p>
																	<p class="searchResultSubTitle"> ' . str_replace(chr(146), "'", $row['subtitle']) . '</p>
																	<p style="margin-top:0px; font-size: 13px; color: #777575; margin-bottom: 5px;"> ' . $author . '</p>
																	<p style="margin-top:0px; font-size: 13px; color: #777575; margin-bottom: 5px;"> ' . $description . '</p>
																	<p style="margin-top:0px; font-size: 11px; color: #777575; margin-bottom: 0px; font-style: italic;"> Issue: ' . date('m-d-y', $row['issue']) . '</p>
															</div>
													</a>
											</div>';

										}
									}//end editorial section



									//start product section
									else if($list['type'] == 'product'){
																
										$sql22 =  "SELECT * FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.id = '" .  $list['id'] . "' AND new_vendor.status > 2";
//										$sql22 = "SELECT * FROM vendor_product WHERE id = '" .  $list['id'] . "'";
										$result22 = $conn->query($sql22);

										// while there are rows to be fetched...
										while ($row = mysqli_fetch_assoc($result22)) {
										

												//href link
												//$link = 'https://landscapearchitect.com/LandscapeProducts/product-details.php?number=' . $row['vendor_id']. '&prodNum=' . $row['id'];
												$vendor_slug = get_vendor_details($conn,$row['vendor_id']);
												$cate_slug = getCategoryDetails($conn,$row['xlist']);
												$link = BASE_URL.'product/'.$cate_slug. '/'.$vendor_slug. '/' . $row['slug'];

												//image link
												if(strpos($row['photo'], '.jpg') !== false || strpos($row['photo'], '.png') !== false || strpos($row['photo'], '.gif') !== false){
													$image = '<img src="'.BASE_URL.'products/images/' . $row['photo'] . '" alt="">';
												} else {
													$image = '<img src="'.BASE_URL.'products/images/' . $row['photo'] . '.jpg" alt="">';
												}


												echo '<div class="col-md-12 col-sm-6 rnews">
														<a href="' . $link . '">
																<div class="fw-thumb2">' . $image . '</div>
																<div class="fw-info ml-1">
																		<p class="searchResultTitle">' . $row['product_name'] . '</p>
																		<p class="searchResultBodyText"> ' . substr($row['description'], 0, 125) . '...</p>
																</div>
														</a>

												</div>';
										}
									}//end product section 



									//start vendor section
									else if($list['type'] == 'vendor'){

										$sql22 = "SELECT * FROM new_vendor WHERE id = '" .  $list['id'] . "' AND status > 2";
										$result22 = $conn->query($sql22);

										while ($row = mysqli_fetch_assoc($result22)) {
										
																									
												//href and image link
												$link = 'https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=' . $row['id'];
												$image = '<img src="https://www.landscapearchitect.com/products/images/' . $row['logo'] . '" alt="" style="object-fit: contain;">';
												
												//profile text adjustments
												
												

													echo '<div class="col-md-12 col-sm-6 rnews">
																	<a href="' . $link . '">
																			<div class="fw-thumb2">' . $image . '</div>
																			<div class="fw-info ml-1">
																					<p class="searchResultTitle">' . $row['company_name'] . '</p>
																					<p class="searchResultBodyText"> ' . substr($row['profile'], 0, 125) . '...</p>
																			</div>
																	</a>
															</div>';

										}
									}//end vendor section

								
									
									//start xlist section
									else if($list['type'] == 'xlist'){
									
										$sql22 = "SELECT * FROM `new_vendor` WHERE `xlist` = '" .  $list['id'] . "' AND `status` != 2";
										$result22 = $conn->query($sql22);
										
										while ($row = mysqli_fetch_assoc($result22)) {
																									
												//href and image link
												$link = 'https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=' . $row['id'];
												$image = '<img src="https://www.landscapearchitect.com/products/images/' . $row['logo'] . '" alt="" style="object-fit: contain;">';
												
												//profile text adjustments
												
												

													echo '<div class="col-md-12 col-sm-6 rnews">
																	<a href="' . $link . '">
																			<div class="fw-thumb2">' . $image . '</div>
																			<div class="fw-info ml-1">
																					<p class="searchResultTitle">' . $row['company_name'] . '</p>
																					<p class="searchResultBodyText"> ' . substr($row['profile'], 0, 125) . '...</p>
																			</div>
																	</a>
															</div>';

										}										
									}//end xlist section


							}//end entire search while
								
					
					?>	
				
				
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
			
           <div class="pagination_strip full_width">
			    			<?php echo createPageLinksSearch($totalResultsAmount, $page, $limit, $keywordSE); ?> 
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
            
			

		
			<? include $rootInclude.'la-common-footer.inc'; ?>
			
			<!-- must go below footer to access jquery -->
			<? include $rootInclude.'la-common-magazine-subscribe.php'; ?>
			
			
			<script>
				
					$(document).ready(function () {
							"use strict";

						 //updates total product count text at top of page
						 document.getElementById("totalProdCount").innerHTML = '<? echo $totalResultsAmount ?> Results';
						 
						 
						 $('#close-banner').click(function(e){
						 		e.preventDefault();
								$('#topLeaderBoardAd').css('display', 'none');
						 });
						 
						 
						 	//initiates lazy loader
							$('.lazy').Lazy();

						 
					});
		

			
			</script>
			
	</body>
</html>