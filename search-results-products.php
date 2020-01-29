<? 	

	session_start();

	include '../includes/la-common-top.php'; 

	include '../includes/la-common-header.inc';

	include '../includes/la_common2-inner.inc'; 



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
	$limit = ($limit == 'all') ? 1000 : $limit;        
	$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; 


?>




<section class="search_section_ban full_width">
<div class="container">
<div class="row">
	<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
				
					<? include '../includes/la_common-main-search-bar.inc'; ?>
        
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
						<img src="https://landscapearchitect.com/lol-logos/sidebar-search-engine/la-details-sidebar-logo.jpg" width="100%" alt="LADetails" id="sidebarLogo">
            <div class="full_width" id="mobile_slide">
                
                
            <?

							include '../includes/connect4.inc'; 

							// sidebar accordian menu 
							include '../includes/la-common-sidebar-menu.inc';



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
            
             <form method="post" action="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE . '&brand=y&limit=24&page=1' ?>" id="brandsListForm">   
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
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
            <h2 class="center_section_catHeader">Showing Product Results for: <? echo $keywordSE; ?></h2>
            <div class="sort_area_container">
							   <p class="sort_area" id="totalProdCount"></p>
								<div class="showview">
									
									<!-- View Amount Logic w/ brands -->
									<? $brandViewAmountGet = $_GET['brand'] == 'y' ? '&brand=y' : '' ?>
									
									Show <a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE . $brandViewAmountGet ?>" class="<? if(!isset($limit) || $limit == 24){ echo 'bold'; }; ?>">24</a> | 
									<a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE . $brandViewAmountGet ?>&limit=48" class="<? if($limit == 48){ echo 'bold'; }; ?>">48</a> | 
									<a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE . $brandViewAmountGet ?>&limit=all" class="<? if($limit == 50000){ echo 'bold'; }; ?>">View All</a> 
									
								</div><!-- /.showview -->
						</div>
         
            
            
            <div class="full_width brand_ss">
            <div class="row">
				
				
	<?			




//						ORDER BY cast(Clicks as unsigned)
						

//				
//						$sql = 	"(SELECT id, product_name, description, photo, Clicks, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '% " . $keywordSE . " %' OR `description` LIKE '% " . $keywordSE . " %')
//							UNION
//								 (SELECT id, name, idParent, sub_number, series_productx as 'Clicks', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '% " . $keywordSE .  "%') ORDER BY cast(Clicks as unsigned) DESC LIMIT " . $limit . " OFFSET " . $limit * ($page - 1);		
								 
//								 SELECT vendor_product.id, vendor_product.vendor_id, vendor_product.Clicks, vendor_product.description, vendor_product.product_name, new_vendor.status FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.id = '45200' AND new_vendor.status > 2


						//regular search
						if($_GET['brand'] != 'y'){ 

								$sql = 	"(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'product' AS type 
								FROM 
									new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id 
								WHERE 
									new_vendor.status > 2 AND vendor_product.series_product = 0 AND (vendor_product.product_name LIKE '%" . $keywordSE . "%' OR vendor_product.description LIKE '% " . $keywordSE . " %'))
								UNION
								(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'xlist' AS type FROM 
									new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id 
								WHERE 
									new_vendor.status > 2 AND vendor_product.series_product = 0 AND xlist.name LIKE '%" . $keywordSE . "%')	
								ORDER BY cast(Clicks as unsigned) DESC LIMIT " . $limit . " OFFSET " . $limit * ($page - 1);


								//pull total amount
								$sqlTotalProds = "(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'product' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE new_vendor.status > 2 AND vendor_product.series_product = 0 AND (vendor_product.product_name LIKE '%" . $keywordSE . "%' OR vendor_product.description LIKE '% " . $keywordSE . " %'))
								UNION
								(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, new_vendor.company_name, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'xlist' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE new_vendor.status > 2 AND vendor_product.series_product = 0 AND xlist.name LIKE '%" . $keywordSE . "%')";
					
						} 
						
						//brand search
						else {
							
							
							
							$brands = '';
														
							for($i=0; $i < count($_SESSION['brandVen']); $i++){
							
								$brands .= "vendor_product.vendor_id = " . $_SESSION['brandVen'][$i];
							
								if($i < count($_SESSION['brandVen']) - 1){
									$brands .= " OR ";
								}
							}
						
							
												
						
							$sql = 	
							"(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'product' AS type FROM new_vendor 	LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE (vendor_product.product_name LIKE '%" . $keywordSE . "%' OR vendor_product.description LIKE '% " . $keywordSE . " %') AND (" . $brands . "))
							UNION
							(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'xlist' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE xlist.name LIKE '%" . $keywordSE . "%' AND (" . $brands . ")) ORDER BY cast(Clicks as unsigned) DESC  LIMIT " . $limit . " OFFSET " . $limit * ($page - 1);


							//pull total amount
							$sqlTotalProds = 
							"(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'product' AS type FROM new_vendor 	LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE (vendor_product.product_name LIKE '%" . $keywordSE . "%' OR vendor_product.description LIKE '% " . $keywordSE . " %') AND (" . $brands . "))
							UNION
							(SELECT vendor_product.id, vendor_product.product_name, vendor_product.vendor_id, new_vendor.status, vendor_product.Clicks, vendor_product.description, vendor_product.series_product, vendor_product.xlist, xlist.id as xlistId, 'xlist' AS type FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id INNER JOIN xlist ON vendor_product.xlist = xlist.id WHERE xlist.name LIKE '%" . $keywordSE . "%' AND (" . $brands . "))";
						
						}
						
									 
							$totalProdResults = $conn->query($sqlTotalProds);						
							$totalProdAmount = mysqli_num_rows($totalProdResults);	

						

						$result = $conn->query($sql);	
//						$result = array_unique($result);
						
						//product counter used for lazy loading				
						$prodCount = 0;	


			
						
					
					
					
				
						while($list = mysqli_fetch_array($result)) {
						
						
							 
							if($list['type'] == 'product'){
																
										$sql22 =  "SELECT * FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.id = '" .  $list['id'] . "'";
//										$sql22 = "SELECT * FROM vendor_product WHERE id = '" .  $list['id'] . "'";
										$result22 = $conn->query($sql22);

										// while there are rows to be fetched...
										while ($row = mysqli_fetch_assoc($result22)) {
											
									

												//href link
												$link = 'https://landscapearchitect.com/LandscapeProducts/product-details.php?number=' . $row['vendor_id']. '&prodNum=' . $row['id'];

												//image link
												if(strpos($row['photo'], '.jpg') !== false || strpos($row['photo'], '.png') !== false || strpos($row['photo'], '.gif') !== false){
													$image = '<img src="https://landscapearchitect.com/optimized-images/timthumb.php?src=https://www.landscapearchitect.com/products/images/' . $row['photo'] . '" class="contain prodImage" alt="' . $row['product_name'] . '">';
												} else {
													$image = '<img src="https://landscapearchitect.com/optimized-images/timthumb.php?src=https://www.landscapearchitect.com/products/images/' . $row['photo'] . '.jpg" class="contain prodImage" alt="' . $row['product_name'] . '">';
												}

												echo '<div class="col-md-4 col-sm-6 col-xs-6 for_small" style="margin-top: 3px; margin-bottom: 15px;">
												<div class="full_width brdr">
													<a href="' . $link . '" >
														' . $image . '
													</a>
													<span class="full_width he_det">
														<h4>' . $row['company_name'] . '</h4>
													</span>
												</div>    
												</div>';
										}
									}//end product section 
									
									
									else if($list['type'] == 'xlist'){
																
										$sql22 =  "SELECT * FROM new_vendor LEFT JOIN vendor_product ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.id = '" .  $list['id'] . "'";
//										$sql22 = "SELECT * FROM vendor_product WHERE id = '" .  $list['id'] . "'";
										$result22 = $conn->query($sql22);

										// while there are rows to be fetched...
										while ($row = mysqli_fetch_assoc($result22)) {
										

												//href link
												$link = 'https://landscapearchitect.com/LandscapeProducts/product-details.php?number=' . $row['vendor_id']. '&prodNum=' . $row['id'];

												//image link
												if(strpos($row['photo'], '.jpg') !== false || strpos($row['photo'], '.png') !== false || strpos($row['photo'], '.gif') !== false){
													$image = '<img src="https://landscapearchitect.com/optimized-images/timthumb.php?src=https://www.landscapearchitect.com/products/images/' . $row['photo'] . '" class="contain prodImage" alt="' . $row['product_name'] . '">';
												} else {
													$image = '<img src="https://landscapearchitect.com/optimized-images/timthumb.php?src=https://www.landscapearchitect.com/products/images/' . $row['photo'] . '.jpg" class="contain prodImage" alt="' . $row['product_name'] . '">';
												}


												echo '<div class="col-md-4 col-sm-6 col-xs-6 for_small" style="margin-top: 3px; margin-bottom: 15px;">
												<div class="full_width brdr">
													<a href="' . $link . '" >
														' . $image . '
													</a>
													<span class="full_width he_det">
														<h4>' . $row['company_name'] . '</h4>
													</span>
												</div>    
												</div>';
										}
									}//end product section 
									

							}
				
				
				
				
		?>	
				
				
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
			
           <div class="pagination_strip full_width">
			    			<?php echo createPageLinksSearch($totalProdAmount, $page, $limit, $keywordSE); ?>  
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

										if ($bCount < 7) {

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
	
            
			

		
			<? include '../includes/la-common-footer.inc'; ?>
			
			<!-- must go below footer to access jquery -->
			<? include '../includes/la-common-magazine-subscribe.php'; ?>
			
			
			<script>
				
					$(document).ready(function () {
							"use strict";


						 //updates total product count text at top of page
						 document.getElementById("totalProdCount").innerHTML = '<? echo $totalProdAmount ?> Products';
						 
						 
						 //close button for top leaderboard banner
						 $('#close-banner').click(function(e){
						 		e.preventDefault();
								$('#topLeaderBoardAd').css('display', 'none');
						 });
						 
						 
						 
						 //logic for brands submit and clear buttons
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
						 
						 
						 	//initiates lazy loader
							$('.lazy').Lazy();
							
						 
					});
				
			
			</script>
			
	</body>
</html>
			