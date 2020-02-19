<?php session_start(); ?>
<? 
	error_reporting(E_ALL & ~E_NOTICE);
	ini_set('display_errors',true);

	include 'modules/configuration.inc';
	include 'modules/db.php';
	include 'modules/baseUrl.php';
	include 'modules/urlData.php';
	include 'modules/articleModel.php';	
	include 'modules/comman_functions.php';	
?>
<? 
	include $rootInclude.'la-common-top.php'; 

  $pageId = "home";
?>

<!-- leaderboard banner -->
<section class="tool_page full_width">

  <? include $rootInclude.'la-common-leaderboard-banner.inc'; ?>
  
</section>



<?
	include $rootInclude.'la-common-header.inc';

	include $rootInclude.'la_common2.inc'; 
	$articles_link = BASE_URL.'articles/';
?>




<style>
	.featured-products .featured-pr-row .featuredprd .productLogo {
		height: 80px;
		width: 100%;
		object-fit: contain;
	}

	.newsbanner.homepageslider {
		margin: 0px;
	}

	.newsbanner .owl-carousel .owl-item img {
		height: 380px;
		object-fit: cover;
	}

	.newsbanner .owl-dots {
		bottom: 105px;
	}

	.owl-item .item {
		    height: 480px;
	}

	.ns_txt {
		position: absolute;
		top: 390px;
		width: 100%;
		z-index: 999;
		color: black;
		padding: 0px;
		transform: none;
	}

	.ns_txt h3 {
		color: #000000;
		font-size: 26px;
	}

	.ns_txt p.articleSliderIntroText {
		font-size: 14px !important;
		font-family: 'Nunito', sans-serif !important;
		line-height: normal;
		text-transform: initial !important;
		color: #000000;
		margin: 5px 0 10px 0;
	}
			
	.featured-products.sec .filter {
		width: 100%;
	}
			
		
	@media (min-width: 768px) {
		.topHomeContainer {
				width: 750px;
				width: auto;
				padding: 0px;
		}
		
		.topHomeContainer .ns_txt {
			padding-left: 25px;
	    padding-right: 25px;
		}
		
		.topHomeContainer .f-widget-content {
				padding-left: 25px;
	    padding-right: 25px;
		}
	}

	@media (min-width: 992px) {
		.topHomeContainer {
				width: 970px;
		}
				.topHomeContainer .ns_txt {
			padding-left: 0px;
	    padding-right: 0px;
		}
		
		.topHomeContainer .f-widget-content {
				padding-left: 0px;
	    padding-right: 0px;
		}
			.owl-item .item {
				height: 520px;
		}
		.newsbanner .owl-dots {
	    bottom: 145px;
		}
	}

	@media (min-width: 1200px) {
		.topHomeContainer {
	    width: 1170px;
		}
			.owl-item .item {
	    height: 480px;
	}
		.newsbanner .owl-dots {
	    bottom: 105px;
		}

	}

	@media only screen and (min-width: 1441px) {
		.topHomeContainer {
				width: 1440px;
				padding: 0px 62px;
				margin: 0px auto;
		}

	}

																	
	.post-excerpt li {
			font-size: 14px;
			color: #35393e;
			height: 31px;
			line-height: 1.3;
			margin-bottom: 15px;
			list-style: disc;
	}
	
	.post-excerpt ul {
		padding-left: 17px;
		list-style: disc;
	}
	
	.post-excerpt .relatedStoriesTitle {
			color: #000000;
			font-size: 15px;
			font-style: italic;
			height: auto;
			    margin-bottom: 5px;
	}
	
	.post-excerpt ul li a {
		    position: relative;
			left: -5px;
	}

</style>

	<section class="featured-section">
		<div class="container topHomeContainer">
			<div class="row">
				<div class="col-md-8 col-sm-12 featured-pad-r">
					<!-- SLIDER -->
					
					
					<!-- slider notes 
						- .slider-wrap originaly did not have inline style tag for max-height
						- la_common2-20191111.inc has original slider function
					
					
					-->
					
					<div class="newsbanner homepageslider full_width">
						<div class="owl-carousel owl-theme" id="newsban">
						
						 <?                       

								mainArticleSlider($conn);
													
						?>
						
						</div>
					</div>	
				</div>
				<div class="col-md-4 col-sm-12 mob-nopad">
					<div class="f-widget-content">
						<ul>
							<li class="padding20 hidden-xs hidden-sm" style="margin-bottom: 0px; padding-bottom: 0px;">
								<div class="fw-thumb">
									<img src="<?php echo BASE_URL; ?>optimized-images/timthumb.php?src=images/blocks/magazin.jpg" alt=""/>
								</div>
								<div class="fw-info" style="margin-left: 110px;">
									<h4 style="font-size: 18px; margin-bottom: 15px;"><a href="#">Sign up for the magazine</a></h4>
                            		<div class="row">
		                               <div class="col-md-8">
		                                <img src="lol-logos/LASN_BLUE_500.jpg" style="width: 100%; max-width: 200px;">
		                                 <a href="<?php echo BASE_URL; ?>LandscapeProducts/magazine.php" class="view-online text-center" style="font-family: 'Nunito Sans', sans-serif; font-weight: 700; text-decoration:underline; color: black; font-size: 12px; text-transform:uppercase; display: block; margin-top: 5px;">
		                                  View Online
		                                </a>
		                              </div>
		                              <div class="col-md-4">
		                                <a href="#" class="btn btn-sm btn-success " style="font-size: 12px; text-transform:uppercase; width: 100%;" id="getItNowBtn">Get it <br class="hidden-lg hidden-sm">now</a>
		                              </div>
                            		</div>
                           
								</div>
							</li>
							<li class="padding10">
								<h4 style="border-bottom:1px solid black; padding-bottom:10px;">Recent Landscape Articles</h4>
								<!-- Article Section 6-9 Start -->
								<? sideArticles($conn); ?>	 								
								<!-- Article Section 6-9 End -->
							</li>
						</ul>
					</div>
				</div>
			</div>
					
			<div class="row">	
				 <!-- ROS horizontal Ad 1 & Ad Generation start -->  
				 <div class="col-md-8 col-sm-12" >    
	  				<?            
						$sql = "SELECT * FROM banner_ups WHERE ROS='rosh' ORDER BY RAND() LIMIT 3";
						$result = $conn->query($sql);									
															
						$roshAds = array();
						
						while($row = mysqli_fetch_array($result)){
							array_push($roshAds, $row);
						}
			 			
						echo '<a href="' .  $roshAds[0]['web'] . '" target="_blank"><img src="'.BASE_URL.'optimized-images/timthumb.php?src=banner/'  . $roshAds[0]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;  max-width: 832px;" /></a>'; 
								                        
					?>
				</div>

				<!-- ROS horizontal Ad 1 & Ad Generation end -->                        
	        
	        
			
				<div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 mob-nopad" id="prj-start-par">
	  				<img src="/LandscapeProducts/images/start-project.jpg" class="hidden-sm hidden-xs" id="requestProductDetailsBtn">
	  				<img src="/LandscapeProducts/images/start-project-sm.jpg" class="hidden-lg hidden-md" style="max-width: 100%;" id="requestProductDetailsBtn">

				</div>
	        
				<div class="hidden-sm hidden-md hidden-lg">
					<hr style="color: #cccccc; margin: 11px -20px;" />
					<h5 style="font-family: 'Nunito Sans', sans-serif; font-size: 10px; font-weight: 600; text-transform:uppercase; text-align:center; color: #9d9d9d;">Advertisement</h5>
				</div>
			</div>
								
		</div>	
					
	</section>
            
    <div class="space20 clearfix"></div>

	<!-- FEATURED PRODUCTS -->
	<div class="featured-products" style="margin-top:20px;">
    	<div class="container">
        	<div class="row">
				<div class="col-md-12 col-sm-12 mob-nopad sponsoredBrandItems">
					<p class="selected" style="font-size: 21px;">Featured Products</p>
				</div> 
			</div>
			<div class="row featured-pr-row">
				<div class="col-md-12 col-sm-12 mob-nopad">
					<div>
						<style>
                            .slick-list{
                              width: 97%;
                              margin: 0 auto;
                            }
                            
                            @media only screen and (min-width: 1441px)
                              .featured-pr-row .slick-next {
                                  right: -7px !important;
                              }
                        </style>
                        <div class="isotope-item featuredprd">
                          	<div class="product-carousel3 fprod-slider" id="fproducts">
								<? // Featured Product Start
									date_default_timezone_set("America/Los_Angeles");
									$ddate = (strtotime("now"));
									$tdate46 = '1573516801';
									$tdate47 = '1574121601';
									$tdate48 = '1574726401';
									$tdate49 = '1575331201';
									$tdate50 = '1575936001';
									$tdate51 = '1576540801';
									$tdate52 = '1577145601';
									$tdate00 = '1577750401';
									$tdate01 = '1578355201';
									$tdate02 = '1578873600';
									$tdate03 = '1579478400';
									$tdate04 = '1580083200';
									$tdate05 = '1580169600';

									if ($tdate47 < $ddate && $ddate < $tdate48) {
										
										$pfWeek = '47';
										
									} elseif ($tdate48 < $ddate && $ddate < $tdate49) {
										
										$pfWeek = '48';
										
									} elseif ($tdate49 < $ddate && $ddate < $tdate50) {
										
										$pfWeek = '49';
										
									} elseif ($tdate50 < $ddate && $ddate < $tdate51) {
										
										$pfWeek = '50';
										
									} elseif ($tdate51 < $ddate && $ddate < $tdate52) {
										
										$pfWeek = '51';
										
									} elseif ($tdate52 = $ddate && $ddate < $tdate00) {
										
										$pfWeek = '51';
										
									} elseif ($tdate00 < $ddate && $ddate < $tdate01) {
										
										$pfWeek = '51';
										
									} elseif ($tdate01 < $ddate && $ddate < $tdate02) {
										
										$pfWeek = '01';
										
									} elseif ($tdate02 < $ddate && $ddate < $tdate03) {
										
										$pfWeek = '02';
										
									} elseif ($tdate03 < $ddate && $ddate < $tdate04) {
										
										$pfWeek = '03';
										
									} elseif ($tdate04 < $ddate && $ddate < $tdate05) {
										
										$pfWeek = '04';
										
									}
									
									$sql = 'SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.pf_week="03" ORDER BY RAND()';
									//$sql = "SELECT * FROM vendor_product WHERE pf_week = '48'";
									$result = $conn->query($sql);									


									while($row = mysqli_fetch_array($result)){
										
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

											$vendor_slug = $row2334['slug'];			
										
											
										
											$rowXlist = 1;
									
												
											$sql555 = "SELECT * FROM xlist WHERE id='" . $xlistId . "'";
											$result555 = $conn->query($sql555);
											$row555 = mysqli_fetch_assoc($result555);
									
											$subCatName = $row555['name'];
											$sub_cate_slug= $row555['slug'];																	
										
										
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

											} 
										
										
											$string555 =  $row555['name']; // Trim String

											$string555 = strtolower($string555); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

											$string555 = preg_replace("/[^a-z0-9_\s-]/", "", $string555);  //Strip any unwanted characters

											$string555 = preg_replace("/[\s-]+/", " ", $string555); // Clean multiple dashes or whitespaces

											$string555 = preg_replace("/[\s_]/", "-", $string555); //Convert whitespaces and underscore to dash																																			
										
											$product_url = BASE_URL.'product/'.$sub_cate_slug.'/'.$vendor_slug.'/'.$row['slug'];
											$rawText = $row['product_name'];
											
											$nameText = substr($rawText, 0, 35);
											
											echo '<div class="pc-wrap">
													<div class="product-item">
														<div class="elem">
															<a href="#">
																<div class="img-cover" style="">
																	<a href="' .$product_url . '"><img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'products/images/' . $row['photo'] . '" class="img-responsive" alt=""/></a>
																</div>
																<p class="padding12">' . $nameText . '</p>

																<img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'products/images/' . $row['logo'] . '" class="productLogo " />
															</a>
															</div>		
														</div>
													</div>';	
											
											
										}	
									// Featured Product End													
								?>
								
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
					
				</div>
			</div>
		</div>
				
		<div class="seemore-mobile hidden-md hidden-sm hidden-lg" style="position: relative; top: -5px; padding-bottom: 15px;">
			<hr />
			<h4 style="color:#1b8047; margin-left:12px; margin-bottom: 0px; font-size: 14px; font-family: 'Nunito Sans', sans-serif;"><i><a href="#">See more in <strong>Featured Products</strong></a></i> <i class="fa fa-angle-right" style="margin-left:5px;"></i></h4>
		</div>
    </div>
			
			
	<section class="clients-section">
		<div class="clients">
	    	<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<h4>Current <strong style="color:#1b8047; font-weight: 600 !important;">Industry News</strong></h4>
					</div>
				</div>
	            <div class="row padding20">
					<div class="col-md-9">
						<div class="row">
                            <? 
                            	$sql2333 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 8,9";
								$result2333 = $conn->query($sql2333);	
								while($row = mysqli_fetch_array($result2333)) {
												
									$titleWords = $row['title'];

									$subWords = $row['subtitle'];  

									$keywordart = $row["keywords"];

									$mainImage = $row["id"];

									$slug = $row['slug'];

									$mainLink = BASE_URL."articles/" . $slug;

									$titleStory = "<a href='".BASE_URL."research/articles.php?number=" . $mainImage . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>";   


									$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 0,3";
									$result5 = $conn->query($sql5);			                                                

									while($row = mysqli_fetch_array($result5)) {

										$link = $articles_link.$row['slug'];

										$newStory = "<a href='".$link. "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";   
                          			}
                                                
									$sql55 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 1,3";
									$result55 = $conn->query($sql55);			                                                

									while($row = mysqli_fetch_array($result55)) {
                            			$link = $articles_link.$row['slug'];

										$newStory2 = "<a href='".$link. "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";     
                                                
                           			}        
                                  
																	
									$sql555 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 2,3";
									$result555 = $conn->query($sql555);			                                                

									while($row = mysqli_fetch_array($result555)) {
										$link = $articles_link.$row['slug'];
										 $newStory3 = "<a href='".$link. "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";      
          
									}  
																						
																						
									$newsCats = array('all' => 0, 'association' => 5, 'legislation' => 7, 'education' => 8, 'economic' => 4, 'industry' => 2, 'projects' => 1);
									$sub =  array_search($row['subject'], $newsCats);
									$metaSubString = $sub == 'projects' ? ucfirst($sub) : ucfirst($sub) . ' News';

									$metaData = $titleWords . " | " . $metaSubString . " | Landscape Architect";
                                                               
									echo '<div class="col-md-4 col-sm-6">
											<article class="home-post " style="background: white; margin-bottom:20px;">
												<div class="post-thumb">
												<a href="' . $mainLink . '">
												    <img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'research/images/' . $mainImage . '.jpg" class="img-responsive" alt="">
												    <div class="overlay-rmore fa fa-link"></div>
												</a>
												</div>

												<div class="post-excerpt" style="padding: 10px 10px 15px 10px;">

												    <h4 class="hidden-lg hidden-md hidden-sm- hidden-xs"> ' . $metaData . '</h4>
												    <h3 class="elipsed-line-cut">' . $titleStory . '</h3>
												    <p class="relatedStoriesTitle">Related Stories:</p>
													<ul>
														<li>' . $newStory . '</li>
														<li>' . $newStory2 . '</li>
														<li>' . $newStory3 . '</li>
													<ul>
																														
												</div>
											</article>
										</div>';
								} 
                        
                            ?>
                                 
						</div>								
					</div> 
					<div class="col-md-3 col-sm-12 text-center">
						<div class="hidden-sm hidden-xs hidden-md hidden-lg">
							<hr style="color: #cccccc; margin: 11px -20px;" />
							<h5  style="font-family: 'Nunito Sans', sans-serif; font-size: 10px; font-weight: 600; text-transform:uppercase; text-align:center; color: #9d9d9d;">Advertisement</h5>
						</div>
                        <?
							$sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND()";
							$result = $conn->query($sql);									

							// banner rotating section

							 $bCount = 0;

							while($row = mysqli_fetch_array($result)) {

								if ($bCount < 5) {

										echo '<a href="' . $row['web'] . '" target="_blank"><img src="'.BASE_URL.'optimized-images/timthumb.php?src=/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a><div class="space10 hidden-xs clearfix"></div>';


										$bCount++;

								}

							} 
      					?>
                                
                                
                                
						<div class="hidden-xs" style="width:100%; padding:20px; background:black;">
							<h3 style="color:white; margin-top:0px; margin-bottom: 5px;font-size: 24px;">Sign Up for</h3>
                  			<img src="/lol-logos/Landscape-Architect-Weekly-WHITE.png" style="width: 90%; display: block; margin: 0 auto; margin-bottom: 10px;">
                  			<p style="color:white;">Get exclusive content today</p>
                  			<form class="newsletter" id="news_letter_form1" novalidate>
                  				<input type="text" style="background:white;" name="email_address" placeholder="Enter your email address" class="newsletterEmailInput">
                  				<button type="submit" class="btn btn-lg newsletterSignUpBtn" style="width: 100%; margin-left:0px; background:#1b8047; border-radius:0px;">SIGN UP</button>
                  			</form>
                  		</div>
                  	</div>
                  </div>
                  <div class="row hidden-xs">
						<div class="col-md-12"><h5 class="heading"><span style="max-width:100%; font-size: 10px;color: #9d9d9d; font-weight:normal; padding: 7px 15px; background-color: #f4f4f4;">Advertisement - Continue Reading Below</span></h5></div>
						<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
							
							<!-- ROS horizontal Ad 2 -->
							<? if(!empty($roshAds[1])){ echo '<a href="' .  $roshAds[1]['web'] . '" target="_blank"><img src="'.BASE_URL.'optimized-images/timthumb.php?src=banner/'  . $roshAds[1]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;  max-width: 867px;" /></a>'; } ?>
					
							<!--	<img src="/banner/new-banner-size-2.png" style="width:100%; max-width: 998px;" />  -->
						</div>
					</div>
					<hr class=" hidden-xs" />
					<div class="row hidden-xs">
						<div class="col-md-8 col-sm-12">
							<h4>More <strong style="color:#1b8047; font-weight: 600 !important;">Industry News</strong></h4>
						</div>
					</div>
					<div class="row padding20 hidden-xs">
						<div class="col-md-12 col-sm-12">
							<div class="rodaw row">
								<? 
									$sql2333 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 17,4";
									$result2333 = $conn->query($sql2333);									
									// banner rotating section
									while($row = mysqli_fetch_array($result2333)) {
										$string =  $row['title']; // Trim String
										$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
										$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters
										$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces
										$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
										$titleWords = $row['title'];
										$subWords = $row['subtitle']; 
										$keywordart = $row["keywords"];
										$mainImage = $row["id"];	
										$link = $articles_link.$row['slug'];														
										$mainLink = BASE_URL."research/articles.php?number=" . $mainImage;
										$titleStory = "<a href='".$link. "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 

										$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 0,3";
										$result5 = $conn->query($sql5);

										while($row = mysqli_fetch_array($result5)) {
											$string =  $row['title']; // Trim String
											$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
											$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters
											$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces
											$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
											$link = $articles_link.$row['slug'];	
											$newStory = "<a href='". $link. "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";
										}
										
										$sql55 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 1,3";
										$result55 = $conn->query($sql55);			                                                

										while($row = mysqli_fetch_array($result55)) {
											$string =  $row['title']; // Trim String
											$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
											$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters
											$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces
											$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
											$link = $articles_link.$row['slug'];	
											$newStory2 = "<a href='".$link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";
										}        
                                                
										$sql555 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 2,3";
										$result555 = $conn->query($sql555);			                                                

										while($row = mysqli_fetch_array($result555)) {
											$string =  $row['title']; // Trim String
											$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
											$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters
											$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces
											$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
											$link = $articles_link.$row['slug'];
											$newStory3 = "<a href='".$link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";
										}                                                                                      
                                                
                                                               
										echo '<div class="col-md-3 col-sm-6">
										    <article class="home-post " style="background: white; margin-bottom:20px;">
										        <div class="post-thumb">
										            <a href="' . $mainLink . '">
										                <img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'research/images/' . $mainImage . '.jpg" class="img-responsive lazy" alt="">
										                <div class="overlay-rmore fa fa-link"></div>
										            </a>
										        </div>

												<div class="post-excerpt" style="padding: 10px 10px 15px 10px;">
										                <!-- <h4 class="padding10">META DATA</h4> -->
										                <h3 class="elipsed-line-cut">' . $titleStory . '</h3>
										                <p class="relatedStoriesTitle">Related Stories:</p>
														<ul>
															<li>' . $newStory . '</li>
															<li>' . $newStory2 . '</li>
															<li>' . $newStory3 . '</li>
														<ul>
										        </div>
										    </article>
										</div>';


									} 
                            	?>
                            </div>
                        </div>
                    </div>
                    <div class="row hidden-xs">
						<div class="col-md-10 col-md-offset-1  col-sm-12 text-center">
								<!-- ROS horizontal Ad 3 -->
								<? if(!empty($roshAds[2])){ echo '<a href="' .  $roshAds[2]['web'] . '"  target="_blank"><img src="'.BASE_URL.'optimized-images/timthumb.php?src=banner/'  . $roshAds[2]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a>'; } ?>
						</div>
					</div>
					<div class="hidden-sm hidden-md hidden-lg" style="margin-bottom:10px;">
						<hr style="color: #cccccc; margin: 11px -50px; width: 500px;">
						<h5 style="font-family: 'Nunito Sans', sans-serif; font-size: 10px; font-weight: 600; text-transform:uppercase; text-align:center; color: #9d9d9d;">Advertisement</h5>
						<!-- ROS horizontal Ad 3 -->
						<? if(!empty($roshAds[2])){ echo '<a href="' .  $roshAds[2]['web'] . '"  target="_blank"><img src="'.BASE_URL.'optimized-images/timthumb.php?src=banner/'  . $roshAds[2]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a>'; } ?>
					</div>
				</div>
			</div>
		</section>
            
			
		<!-- TRENDING PRODUCTS -->
												
		<script>
			let currentSlug = '';
			window.addEventListener('load', function () {
				const tprodListItems = document.getElementsByClassName("tprodListItem");
				for(let i = 0; i < tprodListItems.length; i++){

					tprodListItems[i].addEventListener("click", function(){
						let slug = $(this).attr('data-option-slug');
						setTimeout(function(){
							let dataOptionValue = getDataOptionValueOfSelected();
							changeViewAllLink(dataOptionValue, slug);
						}, 200);
					});
				}
			}); //End window addEventListener


			//finds element in trending products category list with className 'selected' and returns
			//the value of that elements data-option-value attribute
			function getDataOptionValueOfSelected(){
				const trendingProductNode = document.getElementsByClassName("sfilter");
				const trendingNodesLIList = trendingProductNode[0].children;
				let dataOptionValue;


				for (var i = 0; i < trendingNodesLIList.length; i++) {
					const currentNodeClassList = trendingNodesLIList[i].children[0].classList;

					for(let g = 0; g < currentNodeClassList.length; g++){
						if(currentNodeClassList[g] == "selected") {
							dataOptionValue = trendingNodesLIList[i].firstChild.dataset.optionValue;
						}
					}
				}
				return dataOptionValue;
			}
			
			
			//takes in value of a data-option-value attribute and changes the title and link for 'view all products in this cateogry' 
			//inside the h6 tag in the trending products modual
			function changeViewAllLink(dataOptionValue,slug){
				let category;
				let categoryNum;
				let link;
				
				if(dataOptionValue === ".trending"){
					link = '';
				} else {
				
					if(dataOptionValue === ".busserv"){
						category = "Business Services &amp; Software";
						categoryNum = "29";
					} else if(dataOptionValue === ".erosion"){
						category = "Erosion Control";
						categoryNum = "30";
					} else if(dataOptionValue === ".fencing"){
						category = "Fencing";
						categoryNum = "1300";
					} else if(dataOptionValue === ".irrigation"){
						category = "Irrigation";
						categoryNum = "1139";
					} else if(dataOptionValue === ".lighting"){
						category = "Lighting / Electrical";
						categoryNum = "32";
					} else if(dataOptionValue === ".outdoor"){
						category = "Outdoor Living";
						categoryNum = "1214";
					} else if(dataOptionValue === ".recreation"){
						category = "Park &amp; Recreation";
						categoryNum = "33";
					} else if(dataOptionValue === ".masonry"){
						category = "Pavers, Masonry, Blocks, Rocks";
						categoryNum = "38";
					} else if(dataOptionValue === ".pest"){
						category = "Pest / Wildlife";
						categoryNum = "1212";
					} else if(dataOptionValue === ".plant"){
						category = "Plant Accessories &amp; Admendments";
						categoryNum = "1002";
					} else if(dataOptionValue === ".pool"){
						category = "Pool &amp; Spa";
						categoryNum = "1394";
					} else if(dataOptionValue === ".siteA"){
						category = "Site Amenities";
						categoryNum = "29";
					} else if(dataOptionValue === ".siteF"){
						category = "Site Furnishings &amp; Receptacles";
						categoryNum = "1215";
					} else if(dataOptionValue === ".sculpture"){
						category = "Sculpture, Metal &amp; Stone Garden Ornaments";
						categoryNum = "1301";
					} else if(dataOptionValue === ".wfeatures"){
						category = "Water Features";
						categoryNum = "41";
					} else if(dataOptionValue === ".wmanage"){
						category = "Water Management";
						categoryNum = "1213";
					}
					//link = '<a href="<?php echo BASE_URL; ?>LandscapeProducts/la_category.php?ad=' + categoryNum + '" style="color: #707070; ">View all products in <strong>' + category + '</strong></a>';
					link = '<a href="<?php echo BASE_URL; ?>'+slug+'" style="color: #707070; ">View all products in <strong>' + category + '</strong></a>';
				}
				document.getElementById("tprodsViewAllLink").innerHTML = link;
				document.getElementById("tprodsViewAllLinkMobile").innerHTML = link;
			}
		</script>

		<div class="featured-products sec" style="margin-top:20px;">
			<div class="container mob-nopad tprodsContainer">
				<div class="row padding10">
					<div class="col-md-8 col-sm-12" >
						<h4>Trending Products</h4>
					</div>
					<div class="col-md-4 col-sm-12  hidden-xs hidden-sm text-right">
						<h6 id="tprodsViewAllLink"><!-- link is input here from js functions based on element with class 'selected' below --></h6>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 col-sm-12 mob-nopad" style="overflow-x: auto;">
		
						<ul class="filter sfilter" data-option-key="filter">
							<li><a href="#" class="selected tprodListItem" data-option-value=".trending" style="padding-left: 0px;">Trending Products</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".busserv" data-option-slug='<?php echo get_category_link($conn,28); ?>'>Business Services &amp; Software</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".erosion" data-option-slug='<?php echo get_category_link($conn,30); ?>'>Erosion Control</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".fencing" data-option-slug='<?php echo get_category_link($conn,1300); ?>'>Fencing</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".irrigation" data-option-slug='<?php echo get_category_link($conn,1139); ?>'>Irrigation</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".lighting" data-option-slug='<?php echo get_category_link($conn,32); ?>'>Lighting / Electrical</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".outdoor" data-option-slug='<?php echo get_category_link($conn,1214); ?>'>Outdoor Living</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".recreation" data-option-slug='<?php echo get_category_link($conn,33); ?>'>Park &amp; Recreation</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".masonry" data-option-slug='<?php echo get_category_link($conn,38); ?>'>Paver, Masonry, Blocks, Rocks</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".pest" data-option-slug='<?php echo get_category_link($conn,1212); ?>'>Pest / Wildlife</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".plant" data-option-slug='<?php echo get_category_link($conn,1002); ?>'>Plant Accessories</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".pool" data-option-slug='<?php echo get_category_link($conn,1394); ?>'>Pool &amp; Spa</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".sculpture" data-option-slug='<?php echo get_category_link($conn,1301); ?>'>Sculpture, Metal &amp; Stone Garden Ornaments</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".siteA" data-option-slug='<?php echo get_category_link($conn,29); ?>'>Site Amenities</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".siteF" data-option-slug='<?php echo get_category_link($conn,1215); ?>'>Site Furnishings &amp; Receptacles</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".wfeatures" data-option-slug='<?php echo get_category_link($conn,41); ?>'>Water Features</a></li>
							<li><a href="#" class="tprodListItem" data-option-value=".wmanage" data-option-slug='<?php echo get_category_link($conn,1213); ?>'>Water Management</a></li>

							<!-- <li><a onClick="window.location.href ='https://mab-development.com/landscapearchitect/'"><i class="fa fa-angle-right" style="font-size: 12px; cursor:pointer;" ></i></a></li> -->
						</ul>
				
					</div>
				</div>
				<div class="row trending-pr-row">
					<div class="row hidden-md hidden-lg hidden-sm  mob-filter-sort">
						<div class="col-xs-6 col-sm-6 text-left">
							<p style="font-size: 12px;">Filter: <strong>Enclosures</strong></p>
						</div>
						<div class="col-xs-6 col-sm-6 text-right">
							<p style="font-size: 12px;">Sort by: Featured</p>
						</div>
					</div>
					<div id="isotope_sec" class="isotope isotope_sec">
						<div class="isotope-item trending">
							<div class="col-sm-12 col-xs-12 mob-nopad mob-wide">
								<div class="product-carousel4 sprod-slider" id="sproducts">
									<? 
									//Trending Products Start
									$sql2333 = "SELECT * FROM vendor_product WHERE Clicks > '0' ORDER BY Clicks DESC LIMIT 0,11";
									$result2333 = $conn->query($sql2333);	
									while($row = mysqli_fetch_array($result2333)) {
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
										$vendor_slug = $row2334['slug'];
										$rowXlist = 1;

										$sql555 = "SELECT * FROM xlist WHERE id='" . $xlistId . "'";
										$result555 = $conn->query($sql555);
										$row555 = mysqli_fetch_assoc($result555);
										$subCatName = $row555['name'];																
										$string555 =  $row555['name']; // Trim String
										$string555 = strtolower($string555); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
										$string555 = preg_replace("/[^a-z0-9_\s-]/", "", $string555);  //Strip any unwanted characters
										$string555 = preg_replace("/[\s-]+/", " ", $string555); // Clean multiple dashes or whitespaces
										$string555 = preg_replace("/[\s_]/", "-", $string555); //Convert whitespaces and underscore to dash
										$sub_cate_slug = $row555['slug'];

										$product_url = BASE_URL.'product/'.$sub_cate_slug.'/'.$vendor_slug.'/'.$row['slug'];
										
										echo '<div class="pc-wrap">
												<div class="product-item">
													<div class="elem" style="width:122px; float:left; padding-right:10px">
														<a href="'. $product_url . '">
																<div class="img-cover">
																		<img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'products/images/' . $row['photo'] . '" class="img-responsive" alt=""/>
																</div>
																<p class="padding12">' . $row['product_name'] . '</p>
																 <img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'products/images/'. $row2334['logo'] . '" class="productLogo" />

															</a>
														</div>	
												</div>
											</div>';
									} 

                            		?>    
                                          
                                          
                    			</div>
                    		</div>
                    		<div class="clearfix"></div>
                    	</div>

                    	<?php 
                    		$categories = [
        						"busserv"=>28,
        						"erosion"=>30,
        						"fencing"=>1300,
        						"irrigation"=>1139,
        						"lighting"=>32,
        						"outdoor"=>1214,
        						"recreation"=>33,
        						"masonry"=>38,
        						"pest"=>1212,
        						"plant"=>1002,
        						"pool"=>1394,
        						"siteA"=>29,
        						"siteF"=>1215,
        						"sculpture"=>1301,
        						"wfeatures"=>41,
        						"wmanage"=>1213,
        					]; 

        				foreach ($categories as $identifier => $category_id):

        				?>
    						<div class="isotope-item <?php echo $identifier; ?>" >
	                    		<div class="col-md-2 hidden-sm hidden-xs rm-on-mob">
	                    			<div class="overflowbar">
	                    				<?
	                    					$trending_categories = trending_categories($conn,$category_id, BASE_URL);
	                    					echo $trending_categories;
	                    				?>
	                    			</div>
	                    			<br>
	                    		</div>
		                    	<!-- Sub-Sections Business Start -->
		                    	<div class="col-md-10 col-sm-12 col-xs-12 mob-nopad mob-wide">
		                    		<? 
		                    		//Business Products Start
		                    		echo $sub_category_list = build_sub_category_list($conn,$category_id,BASE_URL);
		                            ?>                                                         
		                        </div>
	                        <!-- Sub-Sections Business End -->
	                    	</div>
        				<?php
        				endforeach;
        				?>
                    	
						<div class="seemore-mobile hidden-md hidden-sm hidden-lg" style="position: relative; top: -20px;">
							<hr>
							<h4 style="color:#1b8047; margin-left:12px; font-size: 14px; margin-top: 20px; text-align: left; font-family: 'Nunito Sans', sans-serif;" id="x"></h4>
						</div>
					</div>						
				</div>
            </div>
			
			
            <div class="space10 hidden-sm hidden-md hidden-lg clearfix"></div>
            <div class="space20 hidden-xs clearfix"></div>
			
			<section class="subs-box">
				<div id="sbox">
					<div class="container text-center">
						<h2 style="color:white; padding-top:0.5em; font-size:38px;">Sign up for </h2>
            <img src="/lol-logos/Landscape-Architect-Weekly-WHITE.png" width="40%" style="max-width: 400px;"/>
						<h5 style="color:white;    padding-top: 5px; font-size: 18px;">Stay informed on all the latest products and industry news.</h3>
						<form class="newsletter padding20" id="news_letter_form2" novalidate>
                <input type="text" placeholder="Enter your email address" style="width:100%; max-width:278px; background:white;" name="email_address" class="newsletterEmailInput">
                <button type="submit" class="btn btn-lg newsletterSignUpBtn" style=" width:91px; vertical-align: unset !important; border-radius:0px; background-color:#d54747;">Sign up</button>
            </form>
            
					</div>
				</div>
			</section>
			
            <div class="space10 clearfix" style="margin-top:0px;"></div>
			
			
			<section class="morefromus padding20">
					<div class="container">
						<div class="row text-center">
							<h2 style="font-size:24px;">More from Landscape Architect</h2>
						</div>
						<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						
							<div class="row padding10">
                                
                                
                            <? 
                        
                                            //include '../includes/connect4.inc';   
																						
                                   
											$sql2333 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' AND (subject = '1' || subject = '2' || subject = '3' || subject = '4' || subject = '5' || subject = '8' || subject = '7') ORDER BY id DESC LIMIT 21,9";
											$result2333 = $conn->query($sql2333);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2333)) {
												
																$string =  $row['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash							
												
                                                                $titleWords = $row['title'];
                                                
                                                                $subWords = $row['subtitle']; 
                                                
                                                                $subName = $row['subject'];
                                                
                                                                if ($subName == 1) {
                                                                    
                                                                    $subName = 'Feature';
                                                                    
                                                                } elseif ($subName == 2) {
                                                                    
                                                                    $subName = 'News';
                                                                    
                                                                } elseif ($subName == 3) {
                                                                    
                                                                    $subName = 'Department';
                                                                    
                                                                } elseif ($subName == 4) {
                                                                    
                                                                    $subName = 'Economic News';
                                                                    
                                                                } elseif ($subName == 5) {
                                                                    
                                                                    $subName = 'Association News';
                                                                    
                                                                } elseif ($subName == 7) {
                                                                    
                                                                    $subName = 'Legislation';
                                                                    
                                                                } elseif ($subName == 8) {
                                                                    
                                                                    $subName = 'Education';
                                                                    
                                                                }
                                                
                                                
											                     $keywordart = $row["keywords"];
                                                
											                     $mainImage = $row["id"];
												
												
																	$string2 =  $row['subject']; // Trim String

																	$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																	$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																	$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																	$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash

																	$subName2 = $string2;

																	$string3 =  $row['title']; // Trim String

																	$string3 = strtolower($string3); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																	$string3 = preg_replace("/[^a-z0-9_\s-]/", "", $string3);  //Strip any unwanted characters

																	$string3 = preg_replace("/[\s-]+/", " ", $string3); // Clean multiple dashes or whitespaces

																	$string3 = preg_replace("/[\s_]/", "-", $string3); //Convert whitespaces and underscore to dash	


																									if ($subName2 == 1) {

																											$subName2 = 'feature';

																									} elseif ($subName2 == 2) {

																											$subName2 = 'news';

																									} elseif ($subName2 == 3) {

																											$subName2 = 'department';

																									} elseif ($subName2 == 4) {

																											$subName2 = 'economic-news';

																									} elseif ($subName2 == 5) {

																											$subName2 = 'association-news';

																									} elseif ($subName2 == 7) {

																											$subName2 = 'legislation';

																									} elseif ($subName2 == 8) {

																											$subName2 = 'education';

																									}     												
												
												
                                                
                      
                                            //$mainLink = BASE_URL. $subName2 . "/" . $string3 . "/" . $mainImage;
                                            $mainLink = BASE_URL.'articles/'.$row['slug'];
																					                                                                
                                                echo '<div class="col-md-4 col-sm-6 col-xs-12 padding10 morenews-wrap" style="padding-bottom:10px">
                                                    <a href="' . $mainLink . '">
                                                        <div class="fw-thumb">
                                                             <img class="lazy" src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'research/images/'.$mainImage . '-a.jpg&w=200&h=150" alt="">
                                                        </div>
                                                        <div class="fw-info">
                                                             <p style="font-weight:bold">' . $subName . '<br>
                                                            <strong style="font-weight:600;">' . $titleWords . '</strong></p>
                                                         </div>
                                                         <div class="clearfix"></div>
                                                     </a>
                                                </div>';
                                                
                                                
											} 
                        
                        
  
                        
                            ?>                                    
                                
                                
                                
                                
                                
                                
							</div>
                            
						</div>
					</div>
			</section>
			
			
			
			
			
			
			
			
		
			
		
			<? include $rootInclude.'la-common-footer.inc'; ?>

	    
      <? include $rootInclude.'la-common-magazine-subscribe.php'; ?>


      <? include $rootInclude.'la-common-log-in-modal.inc'; ?>


      <? include $rootInclude.'la-common-request-product-details.inc'; ?>
			
			
			<script src="js/owl.carousel.js"></script>
								
								<script> 
								
								$(document).ready(function() {
                  
										$('#newsban').owlCarousel({
											loop:true,
											items: 1,
											nav: true,
											margin:0,
											navText:["",""],
											mouseDrag: false,
											pullDrag: false,
											autoplay:true,
											autoplayTimeout:3000,
											autoplayHoverPause:true,
											smartSpeed: 1000,
										});
                  
                    $("#news_letter_form1").validate({
                      rules: {
                      email_address: {
                        required: true,
                        email: true
                      }
                      },
                      messages: {
                      email_address: "Please enter a valid email address"
                      }
                    });
                  
                  $("#news_letter_form2").validate({
                      rules: {
                      email_address: {
                        required: true,
                        email: true
                      }
                      },
                      messages: {
                      email_address: "Please enter a valid email address"
                      }
                    });  
                  

								});
                  


							</script>

			
			

    </body>
</html>
