<?php 
	
	include '../modules/configuration.inc'; 
	include '../modules/db.php';
	include '../modules/articleModel.php';
	include $rootInclude. 'la-common-top.php';  
	include $rootInclude.'la-common-header-inner.inc'; 


/*	include '../modules/configuration.inc';
	
	include '../modules/baseUrl.php';
	
	include '../modules/urlData.php';


	
	//	$pageId = 'news';
	include $rootInclude. 'la-common-top.php'; 

	include $rootInclude.'la-common-header-inner.inc'; */


?>


	<link type="text/css" rel="stylesheet" href="../css/articleFormating.css">
	
	


<section class="tool_page full_width" data-title="article0">
<div class="container text-center">
	<span class="ader">ADVERTISEMENT </span>
    <div class="add_nn">
				 <!-- banner ad leaderboard -->
				<?
					
				
					$sql = "SELECT * FROM banner_ups WHERE ROS='lad' ORDER BY RAND() LIMIT 1";
					$result = $conn->query($sql);									

					while($row = mysqli_fetch_array($result)){
							echo '<a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a> '; 
					}

				?>
		
    </div><!-- /.add_nn -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

<section class="full_width architech_arti brdr" data-title="article1">
<div class="container">
<div class="row">
	<div class="widthmaker">
	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
    <div class="width_adjust full_width">

    	
                  <!-- Story Start -->
        
									<?
									   $send_responce_id = 0;
										// Article Start

                             

										// start article from table
							

											$key2 = $_GET['articleSlug'];
											//$key2 = "28909";

											// $sql = "select * from editorial where id='" . $key2 . "'";
											// $result = $conn->query($sql);

											$sql = array(
												'tabel_name' => 'editorial',
												'select' => '*',
												'where' => array(
													"slug='" . $key2 . "'" => 'AND',
												)
											);
											$result = getArticale( $sql, $conn );	
								
										$number_id = 0;			
									
										// Article Section
											$article_title = '';
											while($row = mysqli_fetch_array($result)) {
											    //echo "<pre>";print_r($row);die;
													$article_title = $row['title'];
													// Click-Through Section Start
													$viewsNew = $row['Clicks'] + 1;

													$today = date("Y-m-d H:i:s");

													$number_id = $row['id'];

													$sql = "UPDATE editorial SET Clicks='" . $viewsNew . "', view_time='" . $today ."' WHERE slug='" . $key2 . "'";

													if ($conn->query($sql) === TRUE) {
															echo " ";
													} else {
															echo "Error updating record: " . $conn->error;
													}                                                        
													// Click-Through Section End														


													$keywordart = $row["keywords"];

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

													echo '<span class="date_se">' . date("m-d-y", $row["issue"]) . ' | ' . $subName . '</span>';  

													$ran = array("F22481ROS-H1911.jpg","Y2408ROS-H1911.jpg");
													$randomElement = $ran[array_rand($ran, 1)];
													$banIamge=$randomElement;												
											
                                        
	                                        		$ed_text = $row["ed_text"];
													
													$pos1 = strpos($ed_text,"<br>");
													$pos2 = strpos($ed_text,"<br>", $pos1 + strlen("<br>"));
													
													$string = '<div class="addd full_width img_fit"><img src="'.BASE_URL.'banner/' . $banIamge . '" alt="img" /></div><span style="font-size:16px; font-weight: 600">&nbsp;'; 
													$position = $pos2; 		
													
	                                        		$ed_text2 = substr_replace( $ed_text, $string, $position, 0 );
													
													
			                                        $string = substr($ed_text2, strpos($ed_text2, '<!-- begin wwww.htmlcommentbox.com -->'), strpos($ed_text2, '<!-- end www.htmlcommentbox.com -->'));

			                                        $startStringArray = explode('<!-- begin wwww.htmlcommentbox.com -->', $string);
			                                        $startString = $startStringArray[0];
			                                        
			                                        $endStringArray = explode('<!-- end www.htmlcommentbox.com -->', $string);
			                                        $endString = $endStringArray[0];
			                                        
			                                        $finalStringLength = strlen($endString ) + strlen('<!-- end www.htmlcommentbox.com -->');
			                                        
			                                        
			                                        $finalString = substr_replace($ed_text2, '', strpos($ed_text2, '<!-- begin wwww.htmlcommentbox.com -->') , $finalStringLength);
			                                        //var_dump($finalString);
	                                        
	                                        
	                                                echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($finalString))); 

                                                
                                            
													} ?>	
        
       <input type="hidden" name="current_title" value="<?php echo $article_title; ?>" id="current_title">
    </div><!-- /.width_adjust -->    
	</div><!-- ./col-lg-8 -->
    
	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    		<div class="newsltr full_width">
            	<h3>Sign up for<br>LAWeekly newsletter. <span>Get exclusive content today.</span></h3>
                <form id="news_letter_form" novalidate>
                    <input type="text" name="email_address" placeholder="Enter your email address" class="newsletterEmailInput">
                    <button type="submit" class="newsletterSignUpBtn">Sign up</button>
                </form>
            </div><!-- /.newsltr -->
						
						
						<!-- ROS banner ads -->
						<?
							$sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND() Limit 4";
							$result = $conn->query($sql);									

							while($row = mysqli_fetch_array($result)){
									echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div> '; 
							}

						?>

	</div><!-- ./col-lg-4 -->
    </div><!-- /.widthmaker -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.architech_arti -->

<section class="related_contents full_width brdr" data-title="article2">
<div class="container">
<div class="row">
    
    
    
    
    <!-- Related Content Start -->
    <div class="col-xs-12 text-center">
    	<h3>Related Content</h3>
    </div><!-- /.col-xs-12 -->
    
    
                    <?	

    
											// $sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' AND id != '" . $number_id . "'ORDER BY id DESC LIMIT 0,4";
											// $result5 = $conn->query($sql5);	

											$sql5 = array(
												'tabel_name' => 'editorial',
												'select' => '*',
												'where' => array(
													"keywords RLIKE '" . $keywordart . "'" => 'AND',
													"id != '" . $number_id . "'" => 'AND',
												),
												'orderby' => array( 'id','DESC' ),
												'limit' => array( '0','4' ),
											);
											$result5 = getArticale( $sql5, $conn );								
									
												$i = 1;
    
                                                $nextStorY = 0;
	
                                                $firstStory = 0;
                                                $relatedCount = 0;   
											while($row = mysqli_fetch_array($result5)) {
                                                /*print_r($row);*/
                                                $mainImage = $row['id'];

                                                if( $relatedCount == 0 ):
                                                    $send_responce_id = ( ( isset( $row[0] ) ) ? $row[0] : $mainImage );
                                                endif;
                                                
                                                if ($nextStorY < $row['id']) { 
                                                    
                                                    $nextStorY = $row['id'];
                                                    
                                                    $nextStoryX = $nextStorY;
													
													if ($firstStory < 1) {
														
                                                    	$nextStorY2 = $row['id'];
														
														$firstStory++;
														
													}
													
													
                                                    
                                                }
                                                
												echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 for_small">
                                                    <a href="'.BASE_URL.'articles/'.$row['slug'].'"  class="reelbox img_fit">
                                                        <img width="100%" height="175px" src="'.BASE_URL.'research/images/' . $mainImage . '.jpg" alt="img" />
                                                        <div class="text_fi full_width">
                                                            <!-- <h1>META DATA</h1> -->
                                                            <h2>' . $row['title'] .'</h2>
                                                            <p>' . $row['subtitle'] . '</p>
                                                        </div><!-- /.text_fi -->
                                                    </a><!-- /.reelbox -->
                                                    </div></a><br><!-- /.col-lg-3 -->'; 
									              $relatedCount++;
												} 
    
    
									?>	
    <!-- Related Content End -->
                                    <!-- Story End -->
    
    
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.related_contents -->

<div id="articles-pagination-ajax"></div>
<div class="loading-text"></div>

<input type="hidden" name="allarticlesid" class="hidden-input-field" value="<?php echo $number_id; ?>,<?php echo $send_responce_id; ?>">
<input type="hidden" name="nextarticleid" class="hidden-input-field" value="<?php echo $send_responce_id; ?>">    
<input type="hidden" name="articleidnumber" class="hidden-input-field" value="3">   





					<? // include '../../includes/la-common-footer-inner.inc'; ?>
					
					 <!-- FOOTER -->
            <footer class="full_width" >
                <div class="container">
                    <div class="row text-center">
                        <p class="mrb5"><a href="#">Products</a> | <a href="#">Advertising</a> | <a href="#">Become A Vendor</a> | <br class="mob-only hide1" /><a href="#">Contact Us</a> | <a href="#">About Us</a></p>
												<p class="mbtm0"><a href="#">Careers</a> | <a href="#">Awards</a> | <a href="#">Subscribe</a> | Landscape Communications Inc. © 2019</p>
                    </div>
                </div>
            </footer>

            

        </div>

        

        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



          
          <!-- Javascript -->
          <script src="<?php echo BASE_URL; ?>js/jquery.js"></script>
          
          <script type="text/javascript">
          	jQuery(document).ready(function(){
          		jQuery('#loader').remove();
          	});
          </script>

          <!-- ADDTHIS -->
          <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async></script>
          <script type="text/javascript">
                                            // Call this function once the rest of the document is loaded
                                            function loadAddThis() {
                                                addthis.init()
                                            }
        </script>
          
          <!-- ADDTHIS -->
          <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async></script>
          <script type="text/javascript">
                                            // Call this function once the rest of the document is loaded
                                            function loadAddThis() {
                                                addthis.init()
                                            }
        </script>
          
          <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>        
          
          <!--<script src="plugin/owl-carousel/owl.carousel.min.js"></script>-->
          <script src="<?php echo BASE_URL; ?>js/bs-navbar.js"></script>
          <!-- <script src="<?php //echo BASE_URL; ?>js/vendors/isotope/isotope.pkgd.js"></script> -->
          <script src="<?php echo BASE_URL; ?>js/vendors/slick/slick.min.js"></script>
          <script src="<?php echo BASE_URL; ?>js/vendors/tweets/tweecool.min.js"></script>
          <script src="<?php echo BASE_URL; ?>js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
          <script src="<?php echo BASE_URL; ?>js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
          <script src="<?php echo BASE_URL; ?>js/jquery.sticky.js"></script>
          <script src="<?php echo BASE_URL; ?>js/jquery.subscribe-better.js"></script>
          <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
          <script src="<?php echo BASE_URL; ?>js/vendors/select/jquery.selectBoxIt.min.js"></script>
          <script src="<?php echo BASE_URL; ?>js/jquery.validate.min.js"></script>
					<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
					
					
					<? include $rootInclude.'la-common-magazine-subscribe.php'; ?>

         
					<script type="text/javascript" src="/js/articleSlideShow.js"></script>
				
				
				
         <script type="text/javascript">
				 
        	$(function(){
						var $width = $(window).width();
						if($width < 992){
							$('.mobtoggle').text('');
							$('.mobtoggle').append('<div class="dip"><i class="fa fa-filter"></i></div><div class="dip">CATEGORIES</div></span>');

						$('.mobtoggle').on('click', function(e){
							$('#mobile_slide').slideToggle(300);
						});
						}
					});				
				
			
       
						$(document).ready(function() {

							/*var current_title = $("#current_title").val();
							$(document).prop('title', current_title+" | Landscape Architect");*/

							$(function () {
								var currentHash = "#initial_hash"
								$(document).scroll(function () {
									$('section').each(function () {
										var top = window.pageYOffset;
										var distance = top - $(this).offset().top;
										var hash = $(this).attr('data-title');
										// 30 is an arbitrary padding choice, 
										// if you want a precise check then use distance===0
										if (distance < 30 && distance > -30 && currentHash != hash) {
											window.location.hash = (hash);
											currentHash = hash;
										}
									});
								});
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
						
						</script>
						<script src="js/main.js"></script>
						<script>



					var processing;

						 $(window).on("scroll", function() {
						 	
									var scrollHeight = $(document).height();
									var scrollPosition = $(window).height() + $(window).scrollTop();

									if (processing)
											return false;


									if ( (scrollHeight - scrollPosition) / scrollHeight === 0  ) {

											var nextarticleid = $("input[name='nextarticleid']").val();
											var allarticlesid = $("input[name='allarticlesid']").val();
											var articleidnumber = $("input[name='articleidnumber']").val();

											$(".loading-text").html('<h3 style="text-align:center;">Loading article....</h3>');
											processing = true;

												$.ajax({
															type: 'POST',
															url: '/research/articles-pagination-ajax.php', 
															data: { 'art_id':nextarticleid , 'data_id': articleidnumber, 'allarticlesid' :allarticlesid }
													})
													.done(function(data){

															// show the response
															$(".loading-text").html('');
															if( data != '' ){ 
																	var num = '';
																	num = $("input[name='articleidnumber']").val();
																	num = parseInt(num)+1;
																	$("input[name='nextarticleid']").remove();
																	$("input[name='articleidnumber']").remove();
																	$("input[name='allarticlesid']").remove();
																	$(".hidden-input-field").remove();
																	$('#articles-pagination-ajax').append(data);
																	
																	/*var new_slug = $("#active-"+num).val();
																	var new_title = $("#active-title-"+num).val();
																	var url = "<?php //echo BASE_URL; ?>articles/"+new_slug;
																	window.history.pushState("", new_title, url);
																	$(document).prop('title', new_title+" | Landscape Architect");
																	*/
																	processing = false;
															}

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