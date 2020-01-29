<? 
	
	$pageId = 'resources';
	
	include '../../includes/la-common-top.php';

	include '../../includes/la-common-header-inner.inc'; 
	
	
	$dataOptionValue_newsLanding = "LASNmag";
	
?>




		<style>
      td.day {
        background: none;
      }

      .datepicker table tr td.active,
      .datepicker table tr td.active.disabled,
      .datepicker table tr td.active.disabled:hover,
      .datepicker table tr td.active:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: -ms-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: -webkit-gradient(
          linear,
          0 0,
          0 100%,
          from(#1b8047),
          to(#1b8047)
        );
        background-image: -webkit-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: -o-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: linear-gradient(to bottom, #1b8047, #1b8047);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1b8047', endColorstr='#0044cc', GradientType=0);
        border-color: #1b8047 #1b8047 #002a80;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
      }

      .list_items .container {
        max-width: 1188px;
        margin: 0 auto;
      }

      .form_field .container {
        max-width: 1188px;
        margin: 0 auto;
      }
			
			.magTitleContainer {
				height: 110px;
				clear: both;
			}
			
			.green_dinkle .filter.sfilter a {
				opacity: 0.72;
				font-family: 'DM Serif Text', serif;
				font-size: 21px;
				font-weight: normal;
				font-style: normal;
				font-stretch: normal;
				line-height: normal;
				letter-spacing: normal;
				color: #ffffff;
				display: inline-block;
				vertical-align: middle;
				margin: 10px 0;
				padding: 10px 20px;
			}
			
			.green_dinkle a.like_bttt {
		    padding: 10px 20px;
				width: auto;
				height: auto;
				opacity: 1 !important;
			}
			
			.green_dinkle .filter.sfilter {
				border: none;
    		margin: 0px;
			}
			
			#isotope_sec3 .isotope-item {
				display: flex;
				flex-wrap: wrap;
			}
    </style>


      <div class="mag_ban full_width">
      <div class="container">
      		<span class="img_di">
            	<img src="https://landscapearchitect.com/imgz2/05_LASN_May2019.jpg" alt="img" width="100%"/>
            </span><!-- /.img_di -->
            <div class="texx">
            	<h3>2019 Buyer’s Guide</h3>
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>-->
                <a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=612078" target="_blank"><button type="button">VIEW THE BUYER’S GUIDE</button></a>
            </div><!-- /.texx -->
      </div><!-- /.container -->
      </div><!-- /.mab_ban -->
      
      <div class="green_dinkle full_width">
      <div class="container">
				<div class="filter sfilter" data-option-key="filter">
				<a href="#" class="selected like_bttt" data-option-value=".LASNmag">Landscape Architect Magazine</a>
				<a href="#" data-option-value=".LCDBMmag">Landscape Contractor Magazine</a>

				<div class="right_side_sel">
        	<label>Browse Our Previous Magazine Issues</label>
            <select class="filter2 sfilter2" data-option-key="filter2">
            	<option class="selected2"  data-option-value=".LASN2019mags">2019</option>
               <option data-option-value=".LASN2018mags">2018</option>
            </select>
        </div><!-- /.right_side_sel -->
      </div><!-- /.container -->
      </div><!-- /.green_dinkle -->
      
      <div class="group_of_pdf full_width">
      <div class="container">
      <div class="row">
			
				<div id="isotope_sec3" class="isotope_sec3 isotope isotope_sec3">
			
					<div class="isotope-item custom_pack LASNmag">
					
						<div id="isotope_sec4" class="isotope_sec4 isotope isotope_sec4">
							<? 
								$LASNmagazines = [
									//month, title, linkId, imageName
									2019 => [
										['November', 'ASLA in San Diego: Firms of SoCal', '632019', '11_LASN_Nov2019.jpg'],
										['October', 'Amusement Parks and Zoos', '624014', '10_LASN_Oct2019.jpg'],
										['September', 'Innovatively Designed', '617827', '09_LASN_Sep2019.jpg'],
										['August', 'Downtown Streetscapes', '612075', '08_LASN_Aug2019.jpg'],
										['July', 'Water In The Landscape', '612076', '07_LASN_Jul2019.jpg'],
										['June', 'School & Campus Design', '612077', '06_LASN_Jun2019.jpg'],
										['May', 'Specifier\'s Guide', '612078', '05_LASN_May2019.jpg'],
										['April', 'Lighting Luminous Landscapes','612079', '04_LASN_Apr2019.jpg'],
										['March', 'Parks Around The Nation', '612080', '03_LASN_Mar2019.jpg'],
										['February', 'Hardscape Design', '612081', '02_LASN_Feb2019.jpg'],
										['January', 'Sustainable Design', '612082', '01_LASN_Jan2019.jpg']
									],
									2018 => [
										['December', 'Forecast 2019 Yearbook', '612083', '12_LASN_Nov2019.jpg'],
										['November', 'Custom Residential', '612084', '11_LASN_Nov2018.jpg'],
										['October', 'ASLA in Philadelphia: Firms of the Mid-Atlantic', '612085', '10_LASN_Oct2018.jpg'],
										['September', 'All About Playgrounds', '612086', '09_LASN_Sep2018.jpg'],
									]


								]; 


								foreach($LASNmagazines as $key => $year){
								 echo '<div class="isotope-item custom_pack LASN' . $key . 'mags">';


										foreach($year as $mag){

											echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
																<a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=' . $mag[2] . '" target="_blank"><img src="https://landscapearchitect.com/imgz2/' . $mag[3] . '" alt="img" width="100%" /></a>
																<div class="magTitleContainer">
																	<h3>' . $mag[1] . '</h3>
																	<h4><span>' . $mag[0] . ' 2019</span> | <a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=' . $mag[2] . '" target="_blank">View PDF</a></h4>
																</div>
														</div><!-- /.col-lg-3 -->';

										}

									echo '</div>';

								}

							?>
							
						</div>
					</div>

					<div class="isotope-item custom_pack LCDBMmag">
							<? 
								$LCDBMmagazines = [
									//month, title, linkId, imageName
									['November', 'ASLA in San Diego: Firms of SoCal', '632019', '11_LASN_Nov2019.jpg'],
									['October', 'Amusement Parks and Zoos', '624014', '10_LASN_Oct2019.jpg'],
									['September', 'Innovatively Designed', '617827', '09_LASN_Sep2019.jpg'],
									['August', 'Downtown Streetscapes', '612075', '08_LASN_Aug2019.jpg'],
									['July', 'Water In The Landscape', '612076', '07_LASN_Jul2019.jpg'],
									['June', 'School & Campus Design', '612077', '06_LASN_Jun2019.jpg'],
									['May', 'Specifier\'s Guide', '612078', '05_LASN_May2019.jpg'],
									['April', 'Lighting Luminous Landscapes','612079', '04_LASN_Apr2019.jpg'],
									['March', 'Parks Around The Nation', '612080', '03_LASN_Mar2019.jpg'],
									['February', 'Hardscape Design', '612081', '02_LASN_Feb2019.jpg'],
									['January', 'Sustainable Design', '612082', '01_LASN_Jan2019.jpg']

								]; 


								foreach($LASNmagazines as $mag){

									echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
														<a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=' . $mag[2] . '" target="_blank"><img src="https://landscapearchitect.com/imgz2/' . $mag[3] . '" alt="img" width="100%" /></a>
														<div class="magTitleContainer">
															<h3>' . $mag[1] . '</h3>
															<h4><span>' . $mag[0] . ' 2019</span> | <a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=' . $mag[2] . '" target="_blank">View PDF</a></h4>
														</div>
												</div><!-- /.col-lg-3 -->';

								}


							?>

					</div>
				</div>
				
      </div><!-- /.row -->
      </div><!-- /.container -->
      </div><!-- /.group_of_pdf -->

        



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
          <script src="js/jquery.js"></script>
          
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
					<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
					
					
					
					<? include '../../includes/la-common-magazine-subscribe.php'; ?>
					
					

          <script>

						$(document).load(function(){

							var data_option_value = '<? echo $dataOptionValue_newsLanding ?>';

//							if (data_option_value.length > 1){

//								$("a[data-option-value='." + data_option_value + "'").addClass('selected');
//								$("a[data-option-value='." + data_option_value + "'").addClass('like_bttt');
//								$(`a[data-option-value='.${data_option_value}']`).addClass('like_bttt selected');

//							}



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
						var $container_sec = $('.isotope_sec3');
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
								$optionSet_sec.find('.selected').removeClass('selected like_bttt');
								$this.addClass('selected like_bttt');
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
					
					
				$(window).load(function(){
             // Isotope 2
						var $container_sec = $('.isotope_sec4');
						$container_sec.isotope({
								itemSelector: '.isotope-item',
						filter: '.<? echo $dataOptionValue_newsLanding ?>'

						});

						var $optionSets_sec = $('.filter2.sfilter2'),
										$optionLinks_sec = $optionSets_sec.find('a');
						$optionLinks_sec.click(function () {
								var $this = $(this);
								if ($this.hasClass('selected2')) {
										return false;
								}
								var $optionSet_sec = $this.parents('.filter2.sfilter2');
								$optionSet_sec.find('.selected2').removeClass('selected2');
								$this.addClass('selected2');
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