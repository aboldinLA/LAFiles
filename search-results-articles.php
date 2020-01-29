<? 

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

							?>
                
                
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
            <h2 class="center_section_catHeader">Showing Article Results for: <? echo $keywordSE; ?></h2>
						<div class="sort_area_container">
							<p class="sort_area" id="totalProdCount"><!-- fills via jquery after all results are calculated --></p>
							<div class="showview">
								Show <a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE ?>" class="<? if(!isset($limit) || $limit == 24){ echo 'bold'; }; ?>">24</a> | 
								<a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE ?>&limit=48" class="<? if($limit == 48){ echo 'bold'; }; ?>">48</a> | 
								<a href="<? echo htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keywordSE ?>&limit=all" class="<? if($limit == 50000){ echo 'bold'; }; ?>">View All</a> 
							</div><!-- /.showview -->
						</div>


						
            
            <div class="full_width brand_ss">
            <div class="row">

				
						<?php
	
	   				
							$sql2 = "SELECT * FROM editorial WHERE (title LIKE '% " . $keywordSE . " %' OR ed_text LIKE '% " . $keywordSE . " %') AND title NOT LIKE '%weekly%' AND ed_text NOT LIKE '%onmouse%' ORDER BY id DESC LIMIT " . $limit . " OFFSET " . $limit * ($page - 1);
							$result2 = $conn->query($sql2); 
							
							$sql22 = "SELECT * FROM editorial WHERE (title LIKE '% " . $keywordSE . " %' OR ed_text LIKE '% " . $keywordSE . " %') AND title NOT LIKE '%weekly%' AND ed_text NOT LIKE '%onmouse%'";
							$result22 = $conn->query($sql22); 
							$totalResultsAmount = mysqli_num_rows($result22);
							
				
											while($row = mysqli_fetch_array($result2)) {
												
												//image and href links
											$imageLink = 'https://www.landscapearchitect.com/research/images/' . $row['id'] . '.jpg';
											$link = 'https://landscapearchitect.com/research/articles.php?number=' . $row['id'] . '#article1';
											
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
            
			

		
			<? include '../includes/la-common-footer.inc'; ?>
			
			<!-- must go below footer to access jquery -->
			<? include '../includes/la-common-magazine-subscribe.php'; ?>
			
			
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