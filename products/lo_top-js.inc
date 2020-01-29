<?php
    /* this is the top level of the document */
    /* we need to set the title, meta tags, include any needed js and any needed stylesheets */
    $lol_home = ""; // why why why why why?
    $this_page_title = "LandscapeOnline.com";
    if(isset($_lol_title)) {
        $this_page_title .= " :: " .$_lol_title;
    }
	
$_lol_title = 'Home';


//include "lol_common.inc";		//original
include "../includes/lol_common-js.inc";
include "hot_topics.php";
include "news_topics.php";	
	
	 
?>

<?php
// session_start();
if (isset($_GET['logout'])) {
session_unset();
session_destroy();
header("/index-test.php");
exit;
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?= $this_page_title ?></title>
        <meta name='keywords' content='landscape, landscaping, landscape architecture, landscape contractor, landscape magazine, landscape irrigation, landscaping irrigation, landscape erosion'>
        <meta name='description' content='Online resources for Landscape Architects, Designers, Contractors, Superintendents, and Maintenance Managers from the publisher of Landscape Architect and Specifier News, Landscape Contractor / Design &#149; Build &#149; Maintain.'>

        
      	 <link type="text/css" href="https://landscapearchitect.com/res/css/menu.css" rel="stylesheet" />
    	<script type="text/javascript" src="https://landscapearchitect.com/res/js/jquery.js"></script>
    	<script type="text/javascript" src="https://landscapearchitect.com/res/js/menu.js"></script>
        <script language='javascript' type='text/javascript' src='/res/js/jsOldLib.js'></script>
		<link rel="shortcut icon" href="favicon2.ico" >
		<script language="JavaScript" src="https://seal.networksolutions.com/siteseal/javascript/siteseal.js" type="text/javascript"></script>
        
		<script type="text/javascript" src="https://landscapearchitect.com/res/js/coin-slider.js"></script>
		<script type="text/javascript" src="https://landscapearchitect.com/res/js/coin-slider.min.js"></script>
		<link rel="stylesheet" href="https://landscapearchitect.com/res/css/coin-slider-styles.css" type="text/css" />
        
		<link rel="stylesheet" href="https://landscapearchitect.com/res/css/mosaic.css" type="text/css" media="screen" />
		<script type="text/javascript" src="https://landscapearchitect.com/res/js/mosaic.1.0.1.js"></script>        
		<script type="text/javascript" src="https://landscapearchitect.com/res/js/mosaic.1.0.1.min.js"></script>

<style type="text/css">
* { margin:0;
    padding:0;
}
/* html { background:#7e7d7d; }
body {
    margin:25px auto;
	z-index:500;
} */
div#menu {
	top:20px;
	width:1024px;
	z-index:5000;
}
div#copyright { display: none; }
</style>



<style type="text/css"> 
.clear {
  clear: left;
}

.container-lo {
  width: 1024px;
  background-color:#FFF;
  overflow:hidden;
}

.header {
  /* border: 1px solid; */
  background-color:#FFF;  
  text-align: left;
  width: 1024px;
  height:195px;
  float: left;
}


.main1 {
  float: left;
  width: 740px;
  padding: 10px;
  /* border: 1px solid; */
  text-align: left;
  margin-top: 0px;
  margin-left: 0px;
  padding-bottom:1500px;
  margin-bottom:-1500px;  
}

.banner1 {
  float: left;
  width: 240px;
  padding: 10px;
  /* border: 1px solid; */
  text-align: left;
  margin-top: 0px;
  margin-left: 0px;
  padding-bottom:1500px;
  margin-bottom:-1500px;   
  }

.bottom1 {
  float: left;
  width: 1024px;
  /* border: 1px solid; */
  background-color:#FFF;
  text-align: center;
  margin-top: 0px;
  margin-left: 0px;  
}
</style>

<!-- mosaic -->
		<script type="text/javascript">  
			
			jQuery(function($){

				$('.bar').mosaic({
					animation	:	'slide'		//fade or slide
				});
				
				$('.bar2').mosaic({
					animation	:	'slide'		//fade or slide
				});
				
				$('.bar3').mosaic({
					animation	:	'slide'		//fade or slide
				});
		    
		    });
		    
		</script>
		
		<style type="text/css">
		
			/*Demo Styles*/
				/*.mosaic-block{ position:relative; left:-5px; top:30px }*/
				.clearfix{ display: block; height: 0; clear: both; visibility: hidden; }
						
				.details{ margin:5px 5px; }	
					h4{ font:300 15px 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height:160%; letter-spacing:0.10em; color:#fff; text-shadow:1px 1px 0 rgb(0,0,0); }
					p{ font:300 12px 'Lucida Grande', Tahoma, Verdana, sans-serif; color:#aaa; text-shadow:1px 1px 0 rgb(0,0,0);}
					a{ text-decoration:none; }
					
				.details2{ margin:5px 5px; }	
					h4{ font:300 14px 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height:160%; color:#fff; text-shadow:1px 1px 0 rgb(0,0,0); }
					p{ font:300 12px 'Lucida Grande', Tahoma, Verdana, sans-serif; color:#aaa; text-shadow:1px 1px 0 rgb(0,0,0);}
					a{ text-decoration:none; }
							
		</style>
        

	
        
        
	<!-- Link Color -->
	<STYLE>
	<!--
		a:link { color:#000; }
		a:visited { color:#000; } 
		a:hover { color: blue; } 
	//-->
	</STYLE>
    
	<!-- Section Boxes -->    
	<style>
		.boxed {
  			border: 3px solid #a67d3b ;
  			background-color:#a67d3b;
			font: 14px/1.5em 'Trebuchet MS', Arial, Helvetica, sans-serif;
			font-weight:bold;
		}
		.tb2 {
  			border: 3px solid #a67d3b ;
  			background-color:#a67d3b;
			font: 14px/1.5em 'Trebuchet MS', Arial, Helvetica, sans-serif;
			font-weight:bold;
		}		
		
		
	</style>    
    

</head>

<body>
<body bgcolor="#7e7d7d">
<div style="position:relative; margin-left: auto; margin-right: auto; width: 1024px">
