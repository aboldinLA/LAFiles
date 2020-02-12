<?php session_start(); 
  //must come before header
  	$pageId = "news";

  	include '../modules/configuration.inc';
	include '../modules/db.php';

  
	include $rootInclude.'la-common-top.php';  
	include $rootInclude.'la-common-header.inc'; 

	$dataOptionValue_newsLanding = isset($_GET['news']) ? $_GET['news'] : 'all'; 

?>

<style>

.list_items_img ul li span.txt- p {
	margin-top: 5px;
	font-size: 14px;
}

	.addme {
    margin: 7px 0 30px 0;
}

    .filter.sfilter {
        background-color: white;
        margin-bottom: 0px;
				
    }
		
		.trending_articles .filter {
			padding-left: 0px;
		}
    
    #isotope_sec2 {
        margin-top: 0px;
    }
    
    .topNewsSectionArticles {
            background-color: white;
    clear: both;
    height: 100%;
    padding-top: 30px;
            padding-left: 20px;
    }
    
    
    .bottomSectionsNewsArticles {
        margin-left: -30px;
        margin-right: -30px;
        margin-top: 30px;
    }
		
		.metaDataText {
			display: none;
		}
		
		.img_fit.alde img {
			max-height: 127px;
			object-fit: cover;
		}
		
		.txt {
    padding: 23px;
    padding-left: 0px;
}
		
		
		/* slider */
		.custom_pack.isotope-slider {
			padding: 0px;
		}
		
		.ns_txt {
				height: 100%;
			display: flex;
			justify-content: center;
			flex-direction: column;
		}
		
		.swiper-slide {
			    height: 420px;
		}
		
		.swiper-slide img {
			    height: 100%;
		}
		
		.trending_articles .post-excerpt h3 {
    color: #00240f;
    font-size: 18px;
    line-height: 1.25;
    height: 50px;
		    font-weight: 400;
    font-family: 'DM Serif Text', serif;
		padding: 0px;
		    margin-top: 20px;
    margin-bottom: 10px;
		}
		
			.trending_articles .post-excerpt li {
				font-size: 14px;
				color: #35393e;
				height: 31px;
				line-height: 1.3;
				margin-bottom: 15px;
				list-style: disc;
		}

		.trending_articles .post-excerpt ul {
			padding-left: 17px;
			list-style: disc;
		}

		.trending_articles .post-excerpt .relatedStoriesTitle {
				color: #000000;
				font-size: 15px;
				font-style: italic;
				height: auto;
						margin-bottom: 5px;
		}

		.trending_articles .post-excerpt ul li a {
					position: relative;
					left: -5px;
		}

		.trending_articles .post-thumb img {
			max-height: 127px;
			object-fit: cover;
			width: 100%;
		}

	.elipsed-line-cut a {
    color: #00240f;
}
		

</style>


<section class="tool_page full_width">

  <? include $rootInclude.'la-common-leaderboard-banner.inc'; ?>
  
</section><!-- /.tool_page -->


<section class="tool_page full_width newslanding">
    

<!--
    <div class="container text-center">
	<span class="ader">ADVERTISEMENT </span>
    <div class="add_nn" style="margin-bottom: 15px;">
						<?
						
							//include '../../includes/connect4.inc'; 
						
							$sql = "SELECT * FROM banner_ups WHERE ROS='lad' ORDER BY RAND() LIMIT 1";
							$result = $conn->query($sql);									

							while($row = mysqli_fetch_array($result)){
									echo '<a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a> '; 
							}

						?>
		
		    </div>
</div>
-->
  <!-- /.contianer -->
    
<div class="full_width jeanmartin">
<div class="container">
<div class="row">
	<div class="col-xs-12">
		<div class="isotope_sec2 isotope isotope_sec">
		 
		

								<?
								
										//include '../../includes/connect4.inc';  
							
										$newsCats = array('all' => 0, 'association' => 5, 'legislation' => 7, 'education' => 8, 'economic' => 4, 'industry' => 2, 'projects' => 1);
														
										foreach($newsCats as $cat => $catNum){

											//determies if it is the trending section or an individual article section
											$trendingSection = ($catNum == 0) ? true : false;

											$subjectString = $trendingSection ? '' : "AND subject = '" . $catNum . "'";


											$sql2 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY cast(Clicks as unsigned) DESC LIMIT 1";

											$result2333 = $conn->query($sql2);			

											$counter = 0;


											while($row = mysqli_fetch_array($result2333)) {
											
												
												if($counter < 1){
													echo '<div class="isotope-item custom_pack isotope-slider ' . $cat . '">
																	<div class="newsbanner full_width">
																	<div class="swiper-container">
																	 <div class="swiper-wrapper">';
												}
								

												
												$titleWords = $row['title'];
												$subWords = $row['subtitle'];
												$mainImage = $row["id"];
												$article_slug = $row["slug"];
												//$Link = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;
												$Link = BASE_URL."articles/" . $article_slug;

												$active = $counter < 1 ? 'active' : '';

												echo '<div class="swiper-slide">
													<a href="' . $Link . '">
													<img src="'.BASE_URL.'research/images/' . $mainImage . '.jpg" alt="img" />
														<div class="ns_txt" onclick="window.location.replace(\'' . $Link . '\')">
															<h3>' . $titleWords . '</h3>
																<p>' . $subWords . '</p>
																<a href="' . $Link . '"><button type="button">READ FULL ARTICLE</button></a>
														</div><!-- /.ns_txt -->
														<div class="black_v"></div><!-- /.black_v -->
														</a>
												</div><!-- /.item -->';
																
													$counter++;

												}
												
											echo '</div></div><!-- #newsban -->
														</div><!-- /.news_banner -->
														</div>';

										
										}
										
				
								

								?>
								
						

		
			</div><!-- /#isotope_sec2 -->
    </div><!-- /.col-xs-12 -->
</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.full_width -->

<div class="mobile_data full_width"></div><!-- /.mobile_data .using only in mobile dont remove this div -->
<div class="container">
<div class="row">
    
	<div class="col-lg-8 m col-md-12 col-sm-12 col-xs-12"  style="margin-top: 15px;">	
    
    <div class="trending_articles full_width" id="jimbralakka">
      <div class="mob-nopad2 full_width">
      
      
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="filter sfilter" data-option-key="filter">
              <li><a href="#" class="selected" data-option-value=".all">TRENDING</a></li>
              <li><a href="#" data-option-value=".association">ASSOCIATIONS</a></li>
              <li><a href="#" data-option-value=".legislation">LEGISLATION</a></li>
              <li><a href="#" data-option-value=".education">EDUCATION</a></li>
              <li><a href="#" data-option-value=".economic">ECONOMIC</a></li>
							<li><a href="#" data-option-value=".industry">INDUSTRY</a></li>
							<li><a href="#" data-option-value=".projects">PROJECTS</a></li>
            </ul>
          </div>
        </div>
        
        
        <div class=" trending-pr-row">
          <div id="isotope_sec2" class="isotope_sec2 isotope isotope_sec">
          
    
						
						
				<!-- news sections start -->
						<?php
							
							//include '../../includes/connect4.inc';  
							
							$newsCats = array('all' => 0, 'association' => 5, 'legislation' => 7, 'education' => 8, 'economic' => 4, 'industry' => 2, 'projects' => 1);
//            , 
														
							foreach($newsCats as $cat => $catNum){
                                
								//determies if it is the trending section or an individual article section
								$trendingSection = ($catNum == 0) ? true : false;
																								
								$subjectString = $trendingSection ? '' : "AND subject = '" . $catNum . "'";
								
								$subTitle = $cat;
								
								if($catNum === 1){
									$subjectString = "AND (subject = '1' OR subject = '3')";
								}
								
								
								
								
								if(!$trendingSection){
									$sql2 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 4";
								} else {
									$sql2 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY cast(Clicks as unsigned) DESC LIMIT 1, 4";
								}
								
                                
								

								$result2333 = $conn->query($sql2);			
																				
								$counter = 0;
								
							
								while($row = mysqli_fetch_array($result2333)) {
									
									$titleWords = $row['title'];
									$subWords = $row['subtitle'];
									$mainImage = $row["id"];
									$article_slug = $row["slug"];
									//$Link = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;
									$Link = BASE_URL."articles/" . $article_slug;
									
									$sub =  array_search($row['subject'], $newsCats);
									$metaSubString = $sub == 'projects' ? ucfirst($sub) : ucfirst($sub) . ' News';
									
									$metaData = $titleWords . " | " . $metaSubString . " | Landscape Architect";  
																	
									
									if($counter < 1){
									
												$descriptionString = str_replace("<br>", " ", $row['ed_text']);

												$desIdentifier = '<p class="articleBodyText">';

												$desStart = strpos($descriptionString, $desIdentifier);
												
												if($desStart === false){
													$desIdentifier = '<p><span style="font-family:Times, \'Times New Roman\', serif; font-size:16px">';
													$desStart = strpos($descriptionString, $desIdentifier);
												} 

												$description = substr($descriptionString, $desStart + strlen($desIdentifier), 175) . ' . . .';
									
									
												//section and setion top articles starting/container code
												echo '<div class="isotope-item custom_pack ' . $cat . '">
																		<div class="row topNewsSectionArticles">';

															//section main news story start
															 echo '<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
																				<div class="lef full_width img_fit">
																					<a href="' . $Link . '"><div style="min-height: 200px; background-size: cover; background-repeat: no-repeat; background-image: url('.BASE_URL.'research/images/' . $mainImage . '.jpg"); "></div></a>
																						<div class="txt full_width">
																										<h4 class="metaDataText">' . $metaData . '</h4>
																										<h5>' . $titleWords . '</h5>
																										<p>' . $description . '</p>
																										<a href="' . $Link . '">READ MORE</a>
																						</div><!-- /.txt -->
																					</div><!-- /.lef -->
																			 </div><!-- /.col-lg-5 -->';
																//section main news story end

														//three side articles starting/container code      
														echo '<div class="col-lg-7 col-md-7 img_fit">
																<div class="list_items_img full_width">
																		<ul>';

										}  else {
											
											$trendingSection ? $subjectName = array_search($row['subject'], $newsCats) : $subjectName = '';
											
											
											$descriptionString = str_replace("<br>", " ", $row['ed_text']);

											$desIdentifier = '<p class="articleBodyText">';

											$desStart = strpos($descriptionString, $desIdentifier);

											if($desStart === false){
												$desIdentifier = '<p><span style="font-family:Times, \'Times New Roman\', serif; font-size:16px">';
												$desStart = strpos($descriptionString, $desIdentifier);
											} 

											$description = substr($descriptionString, $desStart + strlen($desIdentifier), 75) . ' . . .';
											

												//section three side news story start
											echo '<li>
																<a href="'. $Link . '">
																		<span class="img"><img src="'.BASE_URL.'research/images/' . $mainImage . '-a.jpg" alt="img" /></span><!-- /.img -->
																		<span class="txt-">
																						<h6>' . strtoupper($subjectName) . '<span>' . $titleWords . '</span></h6>
																						<p>' . $description . '</p>
																		</span><!-- /.txt- -->
																</a>
														</li>';
												 //section three side news story end

									}
								
									$counter++;
								} //end while loop for section top articles
								
                                
                                //section and setion top articles closing/container code & bottom articles starting/container code
													 echo '</ul>
															 </div><!-- /.list_items_img -->
															</div><!-- /.col-lg-7 -->
															</div><!-- /.topNewsSectionArticles -->
															<div class="row bottomSectionsNewsArticles" id="bottomSectionsNewsArticles">';



													if($subTitle  == 'all'){
														$subTitle = 'News';
													} else if ($subTitle != 'projects' || $subTitle != 'departments'){
														$subTitle = ucfirst($subTitle) . ' News';
													} else {
														$subTitle = ucfirst($subTitle);
													}
													
													echo '<h2 class="col-xs-12">Trending ' . $subTitle . '</h2>';


														if(!$trendingSection){
															$sql3 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY cast(Clicks as unsigned) DESC LIMIT 1,6";
														} else {
															$sql3 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY cast(Clicks as unsigned) DESC LIMIT 5,6";
														}


													$result23333 = $conn->query($sql3);

													while($row = mysqli_fetch_array($result23333)) {				

															 $titleWords = $row['title'];

															 $subWords = $row['subtitle'];  

															 $keywordart = $row["keywords"];

															 $mainImage = $row["id"];

															 $article_slug = $row["slug"];
															//$Link = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;
															$Link = BASE_URL."articles/" . $article_slug;

															 $titleStory = "<a href='".BASE_URL."research/articles.php?number=" . $mainImage . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 
															 
															 $keywordart = $row["keywords"];
                                                
															 $mainImage = $row["id"];																					

															$article_slug = $row["slug"];
															//$Link = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;
															$Link = BASE_URL."articles/" . $article_slug;

															$mainLink = $Link;

															$titleStory = "<a href='" . $Link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 
															 
															 
																$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 0,3";
																$result5 = $conn->query($sql5);			                                                

																while($row = mysqli_fetch_array($result5)) {

																	$article_slug = $row["slug"];
																	$Link = BASE_URL."articles/" . $article_slug;

																	$newStory = "<a href='" . $Link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";   

																	// creates link with article name and article id in url
																	// $newStory = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";    

																}

																$sql55 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 1,3";
																$result55 = $conn->query($sql55);			                                                

																while($row = mysqli_fetch_array($result55)) {
																		$article_slug = $row["slug"];
																		$Link = BASE_URL."articles/" . $article_slug;

																		$newStory2 = "<a href='" . $Link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";     

																		// creates link with article name and article id in url
																		//$newStory2 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";          

																 }        


																	$sql555 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 2,3";
																	$result555 = $conn->query($sql555);			                                                

																	while($row = mysqli_fetch_array($result555)) {

																			$article_slug = $row["slug"];
																			$Link = BASE_URL."articles/" . $article_slug;

																			 $newStory3 = "<a href='" . $Link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";                                               


																				// creates link with article name and article id in url
																				// $newStory3 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";      

																	 } 
															 
															 
															 
															 
															 
															 	$sub =  array_search($row['subject'], $newsCats);
																$metaSubString = $sub == 'projects' ? ucfirst($sub) : ucfirst($sub) . ' News';

																$metaData = $titleWords . " | " . $metaSubString . " | Landscape Architect";  


															 echo '<div class="col-md-4 col-sm-6 col-xs-6 for_small">
																				<article style="background: white; margin-bottom:20px;">
																						<div class="post-thumb">
																								<a href="' . $mainLink . '">
																										<img src="https://landscapearchitect.com/research/images/' . $mainImage . '.jpg" class="img-responsive" alt="">
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
							
							     						}//end while loop for section bottom articles
															
															
															
															
														/* horizontal banner ad */
                            $sql45 = "SELECT * FROM banner_ups WHERE ROS='rosh' ORDER BY RAND() LIMIT 1";
                            $result45 = $conn->query($sql45);									
                            
                            while($row = mysqli_fetch_array($result45)) {
                                echo '<div class="col-xs-12 addme img_fit"><a href="' .  $row['web'] . '"><img src="/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div>';
                            }
              
															
														if(!$trendingSection){
															 $sql35 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY cast(Clicks as unsigned) DESC LIMIT 7,3";
														} else {
															$sql35 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY cast(Clicks as unsigned) DESC LIMIT 11,3";
														}

															
														
                                
															$result35 = $conn->query($sql35);

															while($row = mysqli_fetch_array($result35)) {				

															 $titleWords = $row['title'];

															 $subWords = $row['subtitle'];  

															 $keywordart = $row["keywords"];

															 $mainImage = $row["id"];

															$article_slug = $row["slug"];
															$Link = BASE_URL."articles/" . $article_slug;

															 														 
															 $keywordart = $row["keywords"];
                                                
															 $mainImage = $row["id"];																					

															$mainLink = $Link;//"https://landscapearchitect.com/research/articles.php?number=" . $mainImage;

															$titleStory = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $mainImage . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 
															 
															 
																$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 0,3";
																$result5 = $conn->query($sql5);			                                                

																while($row = mysqli_fetch_array($result5)) {

																	$article_slug = $row["slug"];
																	$Link = BASE_URL."articles/" . $article_slug;

																	$newStory = "<a href='" . $Link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";   

																	// creates link with article name and article id in url
																	// $newStory = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";    

																}

																$sql55 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 1,3";
																$result55 = $conn->query($sql55);			                                                

																while($row = mysqli_fetch_array($result55)) {

																		$article_slug = $row["slug"];
																		$Link = BASE_URL."articles/" . $article_slug;

																		$newStory2 = "<a href='" . $Link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";     

																		// creates link with article name and article id in url
																		//$newStory2 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";          

																 }        


																	$sql555 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 2,3";
																	$result555 = $conn->query($sql555);			                                                

																	while($row = mysqli_fetch_array($result555)) {

																			$article_slug = $row["slug"];
																			$Link = BASE_URL."articles/" . $article_slug;

																			 $newStory3 = "<a href='" . $Link . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";                                               


																				// creates link with article name and article id in url
																				// $newStory3 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";      

																	 } 
															 
															 
															 
															 
															 
															 	$sub =  array_search($row['subject'], $newsCats);
																$metaSubString = $sub == 'projects' ? ucfirst($sub) : ucfirst($sub) . ' News';

																$metaData = $titleWords . " | " . $metaSubString . " | Landscape Architect";  


															 echo '<div class="col-md-4 col-sm-6 col-xs-6 for_small">
																				<article style="background: white; margin-bottom:20px;">
																						<div class="post-thumb">
																								<a href="' . $mainLink . '">
																										<img src="'.BASE_URL.'research/images/' . $mainImage . '.jpg" class="img-responsive" alt="">
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
							
							     						}//end while loop for section bottom articles
														
														
														
														
																$pageinationInitial = (!$trendingSection) ? 10 : 14 ;
														
														
                                echo '<div class="newsLanding-leftMarker" style="clear: both;"></div>';
																echo '<div class="ininiteScrollMarker col-xs-12" id="sm0"></div>';
															
                                echo '<div id="ajaxlisting'.$cat.'"></div>';
                                echo '<input type="hidden" name="paginationfield" value="' . 	$pageinationInitial . '">';
							 									echo '</div><!-- /.isotope-item -->
                                </div><!-- /.bottomSectionsNewsArticles -->';
                                
							}
              
                          
							
						?>
						<!-- news sections end -->
              
              
          </div><!-- #isotope_sec -->
         </div><!-- ./trending-pr-row -->  
        <div class="loading-message"></div>

      </div><!-- ./mob-nopad2 -->
    </div><!-- ./trending_articles -->

            
	</div><!-- ./col-lg-8 -->
        
    

    
    
    
    
        <div class="col-lg-4 m col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;" id="sideBarContainer">
        	<div class="newsltr mt0 full_width" style="margin-bottom: 15px;">
            	<h3 style="color:white; margin-top:0px; margin-bottom: 5px;font-size: 24px;">Sign Up for</h3>
                  <img src="/lol-logos/Landscape-Architect-Weekly-WHITE.png" style="width: 90%; display: block; margin: 0 auto; margin-bottom: 10px;">
									<p style="color:white;">Get exclusive content today</p>
                <form id="news_letter_form" novalidate>
                    <input type="text" name="email_address" placeholder="Enter your email address" class="newsletterEmailInput">
                    <button type="submit" class="newsletterSignUpBtn">Sign up</button>
                </form>
            </div>
						
						
             <?
                            
										$sql = "SELECT * FROM banner_ups WHERE ROS='yes' AND id != '$adNum' ORDER BY RAND() LIMIT 6";
										$result = $conn->query($sql);									

									// banner rotating section


										while($row = mysqli_fetch_array($result)) {

													echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div>';

										} 

										echo '<div class="sideBannersInfinite" style="clear: both;"></div>';
										echo '<div id="ajaxlistingBanners"></div>';
              ?>
								
									
        </div><!-- ./col-lg-4 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->
            
        
				
				
				
	     
            <!-- FOOTER -->
             <footer >
                <div class="container">
                    <div class="row text-center">
                        <p style="margin-bottom: 5px;">
                          <a href="#" id="footerSubscribeBtn">Subscribe</a> | 
                          <a href="<?php echo BASE_URL; ?>contact-us/">Advertising</a> | 
                          <a href="<?php echo BASE_URL; ?>contact-us/">Become A Vendor</a> | <br class="mob-only" style="display:none;" />
                          <a href="<?php echo BASE_URL; ?>contact-us/">Contact Us</a> | 
                          <a href="<?php echo BASE_URL; ?>about-us/">About Us</a>
                      </p>
						          <p style="margin-bottom: 0px;">
                        
                        <a href="<?php echo BASE_URL; ?>report-a-bug/">Website Problems, Report a Bug</a> |
                        Landscape Communications Inc. © 2019
                      </p>
                    </div>
                </div>
            </footer>

            

        </div>

        

        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



          
          <!-- Javascript -->
          <script src="js/jquery.js"></script>
          
          <!-- ADDTHIS -->
          <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async></script>
          <script type="text/javascript">
                                            // Call this function once the rest of the document is loaded
                                            function loadAddThis() {
                                                addthis.init()
                                            }
        </script>
          
          
          <script src="/LandscapeProducts/js/bootstrap.min.js"></script>        
          <script src="/LandscapeProducts/js/bs-navbar.js"></script>
          <script src="/LandscapeProducts/js/vendors/isotope/isotope.pkgd.js"></script>
          <script src="/LandscapeProducts/js/vendors/slick/slick.min.js"></script>
          <script src="/LandscapeProducts/js/vendors/tweets/tweecool.min.js"></script>
          <script src="/LandscapeProducts/js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
          <script src="/LandscapeProducts/js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
          <script src="/LandscapeProducts/js/jquery.sticky.js"></script>
          <script src="/LandscapeProducts/js/jquery.subscribe-better.js"></script>
          <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
          <script src="/LandscapeProducts/js/vendors/select/jquery.selectBoxIt.min.js"></script>
          <script src="/LandscapeProducts/js/jquery.validate.min.js"></script>
					
					
					
					<? include $rootInclude.'la-common-magazine-subscribe.php'; ?>
					
          <? include $rootInclude.'la-common-log-in-modal.inc'; ?>
					


          <script>
        	$(function(){
						var $width = $(window).width();
						if($width < 992){
							$('.mobtoggle').text('');
							$('.mobtoggle').append('<div class="dip"><i class="fa fa-filter"></i></div><div class="dip">CATEGORIES</div></span>');

						$('.mobtoggle').on('click', function(e){
							$('#mobile_slide').slideToggle(300);
						});
						}

						if($width < 767){

										$('#jimbralakka').appendTo('.mobile_data');

						}


					});
        </script>
          <script>
		  $(document).ready(function() {
			

			$(window).load(function(){
				
				var data_option_value = '<? echo $dataOptionValue_newsLanding ?>';
				
				if (data_option_value.length > 1){
				
					$("a[data-option-value='.all'").removeClass('selected');
					$(`a[data-option-value='.${data_option_value}']`).addClass('selected');
				
				}
			});
			
		

			$("#news_letter_form").validate({
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

          $(window).load(function(){
             // Isotope 2
						var $container_sec = $('.isotope_sec2');
						$container_sec.isotope({
								itemSelector: '.isotope-item',
						filter: '.<? echo $dataOptionValue_newsLanding ?>'

						});

						var $optionSets_sec = $('.filter.sfilter'),
										$optionLinks_sec = $optionSets_sec.find('a');
						$optionLinks_sec.click(function () {
								var $this = $(this);
								if ($this.hasClass('selected')) {
										return false;
								}
								var $optionSet_sec = $this.parents('.filter.sfilter');
								$optionSet_sec.find('.selected').removeClass('selected');
								$this.addClass('selected');
								var options_sec = {},
												key = $optionSet_sec.attr('data-option-key'),
												value = $this.attr('data-option-value');
								value = value === 'false' ? false : value;
								options_sec[key] = value;
								if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
										changeLayoutMode($this, options_sec);
								} else {
										$container_sec.isotope(options_sec);
								}
								return false;
						});
						

          });
					

		    </script>
				
				
				
          <script src="js/main.js"></script>
          
          
          <script type="text/javascript">
        var processing;

           $(window).on("scroll", function() {
                
                var scrollHeight = $(document).height();
                var scrollPosition = $(window).height() + $(window).scrollTop();

                if (processing)
                    return false;


                if ( (scrollHeight - scrollPosition) / scrollHeight === 0  ) {
                    
                   var chkCat = $(".filter a.selected").attr('data-option-value');
                   chkCat = chkCat.slice(1);
                   var paginationCnt = $( ".custom_pack."+chkCat+" input[name='paginationfield']"  ).val();

                        processing = true;
                        // $(".loading-message").html('<p style="color: #000; font-size: 20px; ">Loading...</p>');
                        $(".loading-message").html('<img src="/images/loading.svg"><i> Loading...</i>');
                          $.ajax({
                                type: 'POST',
                                url: '/research/news_landing_ajax.php', 
                                data: { 'cat_name':chkCat , 'pagination': paginationCnt }
                            })
                            .done(function(data){

                                // show the response
                                processing = false;
                                $( ".custom_pack."+chkCat+" input[name='paginationfield']"  ).remove();
                                $(".loading-message").html('');
                                
                                $("#ajaxlisting"+chkCat).append( data );  
                                
                                // Refrace  isotope
                                var $container_sec = $('#isotope_sec2');
                                $container_sec.isotope({
                                    itemSelector: '.isotope-item',
                                    filter: '.'+chkCat

                                }); 
																
																
																
//                                var lefttop = document.getElementById('jimbralakka').getBoundingClientRect();
//                                var newsLandingleftMarker = document.getElementsByClassName('newsLanding-leftMarker');
//                                var leftBottom = newsLandingleftMarker[newsLandingleftMarker.length - 7].getBoundingClientRect();
//
//
//                                var rightTop = document.getElementById('sideBarContainer').getBoundingClientRect();
//                                var rightBannerContainers = document.getElementsByClassName('sideBannersInfinite');
//                                var rightBottom = rightBannerContainers[rightBannerContainers.length - 1].getBoundingClientRect();
//                                
//
//                                console.log((leftBottom.top - lefttop.top) - (rightBottom.bottom - rightTop.top));
//
//                              
//                                var topPosition = (leftBottom.top - lefttop.top) - (rightBottom.bottom - rightTop.top);
//
//
//
//                                $.ajax({
//                                    type: 'POST',
//                                    url: '/research/news_landing_banners_ajax.php',
//                                    data: { 'topPosition': topPosition }
//                                })
//                                .done(function(data){
//                                        processing = false;
//                                        $("#ajaxlistingBanners").append( data );  
//                                });
																
																
                            })
                            .fail(function() {
                             
                                // just in case posting your form failed
                                alert( "Posting failed." );
                                 
                            });
                    
                }
            });
        </script>
				
				<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2956957-3', 'auto');
  ga('send', 'pageview');

</script>    
        
    </body>
</html>