<?

include("lo_top-main2.inc");


?>

<div align="center" class="container-lo">
<div class="clear"></div>

<!-- Menu Section Start -->  
<div class="header">
<?
include $include_path . "lo_header-main2.inc";
?>
</div>
<!-- Menu Section End -->  

<div class="main1">
<!-- Content Section Start -->

<!-- Logo Section Start -->
<div style="position:relative; left:0px; top:-150px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">

		<table width="750" cellpadding="5" cellspacing="0" style="position:relative; left:30px; top:10px">
        	<tr>
            	<td><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="175" align="top" /></td>
                <td><img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="190" align="top" /></td>
				<td><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="225" /></td>
			</tr>
		</table> 
</div>
<!-- Logo Section End -->

<!-- Tab Section Start -->
<div style="position:relative; top:-235px">
    <script src="https://landscapearchitect.com/products/tab-content/tabcontent.js" type="text/javascript"></script>
    <link href="https://landscapearchitect.com/products/tab-content/template1/tabcontent.css" rel="stylesheet" type="text/css" />
<body style="background:#F6F9FC; font-family:Arial;">
    <div style="width: 763px; margin: 0 auto; padding: 120px 0 40px;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Search by Product Name</a></li>
            <li><a href="#view2">Search by Company Names</a></li>
            <li><a href="#view3">Search by Product Category</a></li>
        </ul>
        <div class="tabcontents">
            <div id="view1">
            <!-- Content Veiw 1 Start -->

<div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div><br /><br />

<!-- New Keyword Section Start -->

<!-- Product Name Section Start -->
<style>
.frmSearch {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 295px; color:#a97f3f; border: 1px solid; width: 750px; height:120px}
#country-list{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list td{padding: 10px; color:#906; background:#CCC; border-bottom:#F0F0F0 1px solid;}
#country-list td2{padding: 10px; color:#fff; background:#fff; margin-left:10px; border-bottom:#F0F0F0 1px solid;}
#country-list td:hover{background:#a97f3f;}
#search-box{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<script>

var typingTimer;                //timer identifier
var doneTypingInterval = 5000;  //time in ms, 5 second for example

$(document).ready(function(){
	
	$("#search-box").keyup(function(){
		
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);		

		
		$.ajax({
		type: "POST",
		url: "https://landscapearchitect.com/products/jquery-ajax-autocomplete-country-example/<? echo $prog_num ?>",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});



//on keydown, clear the countdown 
$('#search-box').keydown(function(){
    clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping () {
    //do something
}




function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>



<div style="position:absolute; left:350px; top:250px; width:500px; z-index:1500">
<center><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px">Type Product<br>
Products will display as you type.<br>
<em><span style="font-size:12px">Example: If you enter rock, any product<br>
with rock in the name will display</span></em></span></center><br>
</div> 

<div class="frmSearch" style="position:relative; left:-325px; top:-50px">
<h2 style="font-family:Arial, Helvetica, sans-serif">Interactive Keyword Search Product</h2><br>

<input type="text" id="search-box" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" placeholder="Enter Product Name" autocomplete="on" />
<div id="suggesstion-box"></div>

</div>

<!-- View Choice Section Start -->
<?php

    if (isset($_REQUEST['prog_num'])) {

        $selected_choice = $_REQUEST['prog_num'];

    }
    else {

        $selected_choice = "searchprodname4.php";

    }
	

?>

<div style="position:absolute; left:240px; top:265px">
<center><span style="font-size:14px">Choose the Number<br>
of Products to view:</span></center>
</div>

<div style="position:absolute; left:375px; top:260px; z-index:10000">
<form method="post">
    <select name="prog_num" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; width:50px; border:1px solid; border-color:#000"> 
        <option VALUE="searchprodname4.php" <?php if($selected_choice == "searchprodname4.php"){ print "selected='selected'"; } ?> > 15</option>
        <option VALUE="searchprodname5.php" <?php if($selected_choice == "searchprodname5.php"){ print "selected='selected'"; } ?>> 30</option>
        <option VALUE="searchprodname6.php" <?php if($selected_choice == "searchprodname6.php"){ print "selected='selected'"; } ?>> 45</option>
        <option VALUE="searchprodname7.php" <?php if($selected_choice == "searchprodname7.php"){ print "selected='selected'"; } ?>> 60</option>   
    </select>
    <div style="position:relative; top:5px">
    <INPUT TYPE="submit" name="submit" value="Submit" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; width:75px; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888; z-index:10000" />
    </div>
</form><br>

</div>

<!-- View Choice Section End -->


             <!-- Content Veiw 1 End -->
                
            </div>
            
            <div id="view2">
            <!-- Content Veiw 2 Start -->
<div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div><br /><br />

<!-- New Keyword Section Start -->

<!-- Product Name Section Start -->
<style>
.frmSearch2 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 295px; color:#a97f3f; border: 1px solid; width: 750px; height:120px}
#country-list2{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:150px; padding:0; width:190px;}
#country-list2 td2{padding: 10px; color:#906; background:#CCC; border-bottom:#F0F0F0 1px solid;}
#country-list2 td:hover{background:#a97f3f;}
#search-box2{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<script>
$(document).ready(function(){
	
	$("#search-box2").keyup(function(){
		$.ajax({
		type: "POST",
		url: "https://landscapearchitect.com/products/jquery-ajax-autocomplete-country-example/<? echo $prog_num2 ?>",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box2").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box2").show();
			$("#suggesstion-box2").html(data);
			$("#search-box2").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box2").val(val);
$("#suggesstion-box2").hide();
}
</script>

<div style="position:absolute; left:350px; top:250px; width:500px; z-index:1500">
<center><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px">Type Company Name<br>
Companies will display as you type.<br>
<em><span style="font-size:12px">Example: Enter Pavestone, and any product<br>
associated with Pavestone will display</span></em></span></center><br>
</div> 



<div class="frmSearch2" style="position:relative; left:-325px; top:-50px">
<h2 style="font-family:Arial, Helvetica, sans-serif">Interactive Keyword Search Company</h2><br>

<input type="text" id="search-box2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" placeholder="Enter Company Name" autocomplete="on" />
<div id="suggesstion-box2"></div>
</div>

<!-- View Choice Section Start -->
<?php

    if (isset($_REQUEST['prog_num2'])) {

        $selected_choice2 = $_REQUEST['prog_num2'];

    }
    else {

        $selected_choice2 = "searchconame2.php";

    }
	

?>

<div style="position:absolute; left:240px; top:265px">
<center><span style="font-size:14px">Choose the Number<br>
of Products to view:</span></center>
</div>

<div style="position:absolute; left:375px; top:260px; z-index:10000">
<form method="post">
    <select name="prog_num2" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; width:50px; border:1px solid; border-color:#000"> 
        <option VALUE="searchconame2.php" <?php if($selected_choice2 == "searchconame2.php"){ print "selected='selected'"; } ?> > 15</option>
        <option VALUE="searchconame3.php" <?php if($selected_choice2 == "searchconame3.php"){ print "selected='selected'"; } ?>> 30</option>
        <option VALUE="searchconame4.php" <?php if($selected_choice2 == "searchconame4.php"){ print "selected='selected'"; } ?>> 45</option>
        <option VALUE="searchconame5.php" <?php if($selected_choice2 == "searchconame5.php"){ print "selected='selected'"; } ?>> 60</option>   
    </select>
    <div style="position:relative; top:5px">
    <INPUT TYPE="submit" name="submit" value="Submit" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; width:75px; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888; z-index:10000" />
    </div>
</form><br>

</div>

<!-- View Choice Section End -->





            	<!-- Content Veiw 2 End -->             
            </div>
            
            <div id="view3">
                <!-- Content Veiw 3 Start --> 


<div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div><br /><br />


<!-- New Keyword Section Start -->

<!-- Product Name Section Start -->
<style>
.frmSearch3 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 300px; color:#a97f3f; border: 1px solid; width: 745px}
#country-list3{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list3 td{padding: 10px; color:red; background:#999; border-bottom:#F0F0F0 1px solid;}
#country-list3 td:hover{background:#a97f3f;}
#search-box3{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>


<!-- Put into Div section -->
<div>
<?php

$requiredClasses[] = 'base/vendor_listing.php';
include("lol_common-product.inc");

//include($include_path . "class/banner_class.inc");
//include($include_path . "class/vendor_class.inc");

include("datamap.php");

//$V = new vendor_class($db);
//$B = new banner_class($db);

$vl = new vendor();

/* Parse Local Search Options
 * sanitize areacodes
 * verify category
 */

// switch on the local search type
// set banners for category
// refine categories for search
// redirect to search page for results
function checkacs() {
    if(isset($_GET['areacodes'])) {
        if(preg_match_all("/(\d{3})/", $_GET['areacodes'], $retarray)) {
            return($retarray[1]);
        } 
    } else if(isset($_SESSION['areacodes'])) {
        if(preg_match_all("/(\d{3})/", $_GET['areacodes'], $retarray)) {
            return($retarray[1]);
        } 
    }
}

if(isset($_GET['localtype'])) {
    // we're trying to search for something, not index
//    if(array_key_exists($_GET['localtype'], $quicklaunch)) {
        // we're searching for something valid
		$qtitle = ($_GET['localtype'] == 'services' ? 'Service' : 'Product');
		
        // set the categories from the url, or xlist, or ql cats
        if(is_array($_GET['find'])) {
            $categories = &$_GET['find'];
        } else if(is_array($_GET['xlist'])) {
            $categories = &$_GET['xlist'];
        } else {
            $categories = array();
        }

        if(!is_array($categories)) {
            $error .= "Categories must be an array, not " . gettype($categories) . ".<br>\n";
        }

        $types = array(1, 2, 3); //$types = $quicklaunch[$_GET['localtype']]['types'];

        // set banner product category
        if(strlen($_GET['next']) > 0) {
            $_SESSION['banner_product'] = $_GET['next'];
        } else {
            $_SESSION['banner_product'] = 34;
        }
        $_SESSION['banner_search']  = $_GET['localtype'];
        $_SESSION['banner_state']   = $_GET['state'];
        // if we've got area codes, validate them
        if(isset($_GET['areacodes']) || isset($_SESSION['areacodes'])) {
            $acarray = checkacs();
            if(is_array($acarray)) {
                $_SESSION['areacodes'] = implode(' ', array_unique($acarray));
                $areacodes = &$_SESSION['areacodes'];
            }
        } 
//    } else {
//        $error .= "Unknown Local Search Type of $localtype<br>";
//    }
}

if((is_array($types) || is_numeric($types)) && strlen($error) < 1) {
    include("products.css");
    $ca = $_GET['ca'];
    if(!isset($_GET['find'])) {
        if(!$quicklaunch[$_GET['localtype']]['ac']) 
            //echo("<b>No categories specified, repeating last search.</b><br />");
        if(isset($_SESSION['oldca']))
            $ca = $_SESSION['oldca'];
        else
            $ca = 0;
    }
    $_SESSION['oldca'] = $ca;    
    include("refine-js2.php"); // copied below in multiple location to show before and after search results
    if (($quicklaunch[$_GET['localtype']]['ac'] && count($acarray) > 0) ||
        ($quicklaunch[$_GET['localtype']]['st'] && strlen($_GET['state']) > 1))  {
        if(count($categories) < 1) {
            echo("<b>Please select at least one category to search for.</b><br />\n");
        } else {
            $_SESSION['banner_state'] = $_GET['state'];
        }
    } else if($quicklaunch[$_GET['localtype']]['adv']) {
        if(!$_GET['next'] && ($_POST['searchtype']!="photo" && $_GET['searchtype']!="photo")) {
            echo(" .<br>");
        } else if(count($categories) < 1 && ($_POST['searchtype']!="photo" && $_GET['searchtype']!="photo")) {
            echo("<b> .</b><br />\n");
        }
    } else if($quicklaunch[$_GET['localtype']]['st'] == TRUE) {
        if(strlen($_GET['state']) > 1) {
        }
    } else {
        echo("<b>Please provide the area codes you wish to search within the box above.</b><br>");
    }
    
    if (isset($_GET['op1']) || isset($_GET['op2']) ){
        //print_r($_SERVER);
     include ("product_search_do-js.php");
    }
     

    //echo('<div align="center"><strong><a href="' . $_SERVER['PHP_SELF'] . '">Click Here to Modify Search.</a></strong>');
} else {
    $secthdr = "Product Search";
    $_SESSION['areacodes'] = NULL;
    unset($_SESSION['banner_product']);
    unset($_SESSION['banner_search']);
    unset($_SESSION['banner_state']);
    
    //include("debug.php");
    if(strlen($error) > 1) 
        $C->errors($error);
    include("products.css");
   	include("local.php"); 
   	//include("advanced.php");
}
//var_dump($include_path);
?>
</div>


<!-- Banner Section Start -->
<div style="position:absolute; left:735px; top:175px">
<div class="banner1">
		<? 
		include $include_path . "banner-ads-prod2.inc"; 
		?>
<!-- Banner Include Start -->
 
 <!--       
<div id="lol_header" style="position:relative; left:20px; top:-82px">
    <div id="lol_bannerTop"> <? $C->banner($_SERVER['PHP_SELF'],1); ?> </div>
</div>

 <?php
    for ($i = 2; $i <= 25; ++$i) {
        $questions[] = $i;
    }
    
    shuffle($questions);
	
	
?> 


<div style="position:relative; left:48px; top:-160px; width:200px; padding-bottom:10px">

		<? $C->banner($_SERVER['PHP_SELF'], $questions[2]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[3]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[4]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[5]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[6]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[7]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[8]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[9]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[10]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[11]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[12]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[13]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[14]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[15]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[16]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[17]);  ?>

		
</div>        
 -->       
        
 <!-- Banner Include end -->       
        
</div>
</div>
<!-- Banner Section End -->












<!-- Position Correction End -->


                <!-- Content Veiw 3 End -->             
            </div>
        </div>
    </div>
</body>
</div>
<!-- Tab Section End -->

<!-- Content Section End -->
  
</div>
<!-- End Main Section --> 

<!-- Banner Section Start -->
<div class="banner1">
		<? 
		// include $include_path . "banner-ads-prod2.inc"; 
		?>
<!-- Banner Include Start -->
 
 <!--       
<div id="lol_header" style="position:relative; left:20px; top:-82px">
    <div id="lol_bannerTop"> <? $C->banner($_SERVER['PHP_SELF'],1); ?> </div>
</div>

 <?php
    for ($i = 2; $i <= 25; ++$i) {
        $questions[] = $i;
    }
    
    shuffle($questions);
	
	
?> 


<div style="position:relative; left:48px; top:-160px; width:200px; padding-bottom:10px">

		<? $C->banner($_SERVER['PHP_SELF'], $questions[2]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[3]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[4]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[5]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[6]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[7]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[8]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[9]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[10]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[11]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[12]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[13]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[14]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[15]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[16]);  ?>
         <span style="font-size:7px; color:#FFF">space</span>    
		<? $C->banner($_SERVER['PHP_SELF'], $questions[17]);  ?>

		
</div>        
 -->       
        
 <!-- Banner Include end -->       
        
</div>
<!-- Banner Section End -->

<!-- Footer Section Start -->  
<div class="bottom1">
<? // include $include_path . "lo_footer-main2.inc"; ?>
</div>
<!-- Footer Section End -->  

</div>
