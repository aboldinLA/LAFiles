<?php include '../modules/configuration.inc'; ?>
<? include $rootInclude. 'la-common-top.php'; ?>


<? include $rootInclude.'la-common-header-inner.inc'; ?>


	<link type="text/css" rel="stylesheet" href="../css/articleFormating.css">
	
	


<section class="tool_page full_width" data-title="article0">
<div class="container text-center">
	<span class="ader">ADVERTISEMENT </span>
    <div class="add_nn">
				 <!-- banner ad leaderboard -->
				<?
					
						/*$servername = "localhost";
						$username = "land_patchew";
						$password = "59q2GB6k$3";
						$dbname = "land_landscap_lollive";

					// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
						if ($conn->connect_error) {
								 die("Connection failed: " . $conn->connect_error);
						} */

				
				
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
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from editorial where id='" . $key2 . "'";
											$result = $conn->query($sql);
							
											
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
											    //echo "<pre>";print_r($row);die;
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
                                        
                                        $ed_text = $row["ed_text"];
                                        
                                        $string = substr($ed_text, strpos($ed_text, '<!-- begin wwww.htmlcommentbox.com -->'), strpos($ed_text, '<!-- end www.htmlcommentbox.com -->'));

                                        $startStringArray = explode('<!-- begin wwww.htmlcommentbox.com -->', $string);
                                        $startString = $startStringArray[0];
                                        
                                        $endStringArray = explode('<!-- end www.htmlcommentbox.com -->', $string);
                                        $endString = $endStringArray[0];
                                        
                                        $finalStringLength = strlen($endString ) + strlen('<!-- end www.htmlcommentbox.com -->');
                                        
                                        
                                        $finalString = substr_replace($ed_text, '', strpos($ed_text, '<!-- begin wwww.htmlcommentbox.com -->') , $finalStringLength);
                                        //var_dump($finalString);
                                        
                                        
                                                echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($finalString))); 

                                                
                                            
                                            } ?>	
        
       
    </div><!-- /.width_adjust -->    
	</div><!-- ./col-lg-8 -->
    
	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    		<div class="newsltr full_width">
            	<h3>Sign up for<br>LAWeekly newsletter. <span>Get exclusive content today.</span></h3>
                <form id="news_letter_form" novalidate>
                    <input type="text" name="email_address" placeholder="Enter your email address">
                    <button type="submit">Sign up</button>
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
    
											$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' AND id != '" . $_GET['number'] . "'ORDER BY id DESC LIMIT 0,4";
											$result5 = $conn->query($sql5);									
									
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
                                                    <a href="https://landscapearchitect.com/research/articles.php?number=' . $mainImage . '" class="reelbox img_fit">
                                                        <img width="100%" height="175px" src="'.BASE_URL.'research/images/' . $mainImage . '.jpg" alt="img" />
                                                        <div class="text_fi full_width">
                                                            <!-- <h1>META DATA</h1> -->
                                                            <h2>' . $row['title'] . $nextStorY2 .'</h2>
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

<input type="hidden" name="allarticlesid" class="hidden-input-field" value="<?php echo $_GET['number']; ?>,<?php echo $send_responce_id; ?>">
<input type="hidden" name="nextarticleid" class="hidden-input-field" value="<?php echo $send_responce_id; ?>">    
<input type="hidden" name="articleidnumber" class="hidden-input-field" value="3">    
            <!-- FOOTER -->
            <footer class="full_width page-footer-class" >
                <div class="container">
                    <div class="row text-center">
                        <p style="margin-bottom: 5px;"><a href="#">Products</a> | <a href="#">Advertising</a> | <a href="#">Become A Vendor</a> | <br class="mob-only" style="display:none;" /><a href="#">Contact Us</a> | <a href="#">About Us</a></p>
						<p style="margin-bottom: 0px;"><a href="#">Careers</a> | <a href="#">Awards</a> | <a href="#">Subscribe</a> | Landscape Communications Inc. © 2019</p>
                    </div>
                </div>
            </footer>

            

        </div>

        

        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



        <!-- Javascript -->
        <script src="js/jquery.js"></script>

        <!-- ADDTHIS -->
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async></script>
        <script type="text/javascript">
                                            // Call this function once the rest of the document is loaded
                                            function loadAddThis() {
                                                addthis.init()
                                            }
        </script>



        <script src="js/bootstrap.min.js"></script>        
        <!--<script src="plugin/owl-carousel/owl.carousel.min.js"></script>-->
        <script src="js/bs-navbar.js"></script>
        <script src="js/vendors/isotope/isotope.pkgd.js"></script>
        <script src="js/vendors/slick/slick.min.js"></script>
        <script src="js/vendors/tweets/tweecool.min.js"></script>
        <script src="js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.subscribe-better.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/vendors/select/jquery.selectBoxIt.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/owl.carousel.js"></script>
				<script type="text/javascript" src="/js/articleSlideShow.js"></script>
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
				
				
			});
        </script>
        <script>
		  $(document).ready(function() {
			  
			  $('#newsSlide').owlCarousel({
					loop:true,
					margin:0,
					nav:true,
					dots:false,
					navText:['<img src="images/white-left.png" />','<img src="images/white-right.png" />'],
					responsive:{
						0:{
							items:1
						}
					}
				});
				
				$('#newsSlide2').owlCarousel({
					loop:true,
					margin:0,
					nav:true,
					dots:false,
					navText:['<img src="images/white-left.png" />','<img src="images/white-right.png" />'],
					responsive:{
						0:{
							items:1
						}
					}
				});
				
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
        
       <script type="text/javascript">
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
                                $("input[name='nextarticleid']").remove();
                                $("input[name='articleidnumber']").remove();
                                $("input[name='allarticlesid']").remove();
                                $(".hidden-input-field").remove();
                                $('#articles-pagination-ajax').append(data);
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

    </body>
</html>