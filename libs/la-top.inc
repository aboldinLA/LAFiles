<?



?>


<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>landscape-architect</title>  

  <!-- Smallipop CSS - Tooltips -->
  <link rel="stylesheet" href="plugins/smallipop/css/contrib/animate.min.css" type="text/css" media="all" title="Screen" />
  <link rel="stylesheet" href="plugins/smallipop/css/jquery.smallipop.css" type="text/css" media="all" title="Screen" />

  <!-- Default CSS -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/fgx-foundation-js.css" />
  <link rel="stylesheet" href="plugins/prettyphoto/prettyPhoto.css" />
  
  <!--[if IE 8]>
  	<link rel="stylesheet" href="css/ie8-grid-foundation-4.css" />
  <![endif]-->
  
  <!-- Font Awesome - Retina Icons -->
  <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900' rel='stylesheet' type='text/css'>
  
  <!-- Included JS Files -->
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/custom.modernizr.js"></script>
  
  <!-- REVOLUTION BANNER CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="rs-plugin/responsive.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
  <!-- REVOLUTION BANNER JS FILES  -->
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  
  <!-- carouFredSel plugin -->
  <script type="text/javascript" language="javascript" src="plugins/carouFredSel/jquery.carouFredSel-6.2.0-packed.js"></script>
  <script type="text/javascript" language="javascript" src="plugins/carouFredSel/helper-plugins/jquery.touchSwipe.min.js"></script>
  
  <!-- Scripts Initialize -->
  <script src="js/app-head-calls.js"></script>
  
  <!-- Scripts Initialize Specific page -->
  
  <script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery("#carousel-type1").carouFredSel({
			responsive: true,
			width: '100%',
			auto: false,
			circular : false,
			infinite : false, 
			items: {visible: {min: 1,max: 4},},
			scroll: {items: 1, pauseOnHover: true},
			prev: {button: "#prev2", key: "left"},
			next: {button: "#next2", key: "right"},
			swipe: true
		});
	});  
  </script>
  
  <!--Flickr Feed-->
  <script type="text/javascript" src="js/extra/jflickrfeed.min.js"></script>
  <script type="text/javascript" src="js/extra/setup.js"></script>
  
	<!--Quicksand-->
	<script type="text/javascript" src="plugins/prettyphoto/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>
	<script type="text/javascript">
		
	$(document).ready(function() {
		//$("a[rel^='prettyPhoto']").click(function() {alert ('gag') });
		$("a[rel^='prettyPhoto']").prettyPhoto({theme: 'pp_default'});
		
		var $filterType = $('.portfolio-main li.active a').attr('class');
		var $holder = $('ul.portfolio-content');		
		var $data = $holder.clone();
		jQuery('.portfolio-main li a').click(function(e) {
			
			$('.portfolio-main li').removeClass('active');
			var $filterType = $(this).attr('class');
			$(this).parent().addClass('active');
			
			if ($filterType == 'all') {
				var $filteredData = $data.find('li');
			} 
			else {
				var $filteredData = $data.find('li[data-type=' + $filterType + ']');
			}
			$holder.quicksand($filteredData, 
				{duration: 800,easing: 'easeInOutQuad'},
				function() {
					$("a[rel^='prettyPhoto']").prettyPhoto({theme: 'pp_default'});
					
				}		
			);
			return false;
		});
	});	
	</script>

</head>
    
    <?
    
        $arrX = array("https://landscapearchitect.com/responsive/Matte2/html/images/background.jpg", "https://landscapearchitect.com/responsive/Matte2/html/images/background2.jpg","https://landscapearchitect.com/responsive/Matte2/html/images/background3.jpg", "https://landscapearchitect.com/responsive/Matte2/html/images/background4.jpg");

        $randIndex = array_rand($arrX);

    ?>
    
    
    
    <style>
        
        body { background:url(<? echo $arrX[$randIndex]; ?>) #111 no-repeat right top fixed; background-attachment: fixed;  color: #ccc;  padding: 0; font-weight: normal; font-style: normal; line-height: 1; -webkit-font-smoothing: antialiased; min-height: 100%; background: cover;}
      
    </style>
    
    
<body>
    
   

<!-- Begin Main Wrapper -->
<div class="main-wrapper">

  <!-- Top Header -->
  <div class="row top-header">
    
    <div class="large-8 columns">
        
      <ul class="inline-list">
        <li><i class="icon-map-marker"></i>14771 Plaza Dr., Tustin</li>
        <li><i class="icon-mobile-phone"></i>1.714.979.5276</li>
        <li><i class="icon-time"></i>Landscape Communications Inc.</li>
      </ul>

    </div>

    <div class="large-4 columns">
        
      <ul class="inline-list right">
        <li><a class="smallipopOrange" href="http://www.facebook.com" title="Facebook"><i class="icon-facebook-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.twitter.com" title="Twitter"><i class="icon-twitter-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.google.com" title="Google+"><i class="icon-google-plus-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.linkedin.com" title="Linkedin"><i class="icon-linkedin-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.pinterest.com" title="Pinterest"><i class="icon-pinterest-sign icon-large"></i></a></li>
      </ul>

    </div>
        
  </div>
  <!-- End Top Header -->

  <div class="row bottom-header">
    <div class="large-12 columns">
      <img src="https://landscapearchitect.com/lol-logos/lo-LAD2-1.png" alt="Matte" width="90%">
      <!-- <h2>FGX F4</h2> -->
      <!-- <h3 class="subheader">A responsive HTML Frontend Framework based on Foundation 4 from Zurb</h3> -->
    </div>
  </div>
    