<?php
session_start();

include("lo_top-main2.inc");

include("config.inc2.php");

// count for pages Needed
$results = mysqli_query($connecDB,"SELECT COUNT(*) FROM vendor_product");
$get_total_rows = mysqli_fetch_array($results); //total records

//break total records into pages
$total_pages = ceil($get_total_rows[0]/$item_per_page); 

?>

<div align="center" class="container-lo">
<div class="clear"></div>

<!-- Menu Section Start -->  
<div class="header">
<?
include $include_path . "lo_header-main2-js.inc";
?>
</div>
<!-- Menu Section End -->  

<div class="main1">

<!-- Content Section Main1 Start -->

<!-- Logo Section Start -->
<div style="position:relative; left:0px; top:-165px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:15px">

        <table width="750" cellpadding="5" cellspacing="0" style="position:relative; left:30px; top:10px">
            <tr>
                <td><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="175" align="top" /></td>
                <td><img src="http://67.222.144.12/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="190" align="top" /></td>
                <td><img src="http://67.222.144.12/lol-logos/lolw-logo.jpg" width="225" /></td>
            </tr>
        </table> 
</div>
<!-- Logo Section End -->

<!-- Tab Section Start -->

<!-- Tab redirect for Product and Wholesale Search Start -->
<script>

function myFunction() {
    window.open("http://67.222.144.12/products/index-product.php?localtype=manu_imp&vst=&keyword=&next=0&ca=no&areacodes=&state=&searchby=nl&searchtype=photo", "_parent");
}

function myFunction2() {
    window.open("http://67.222.144.12/products/index-product.php?localtype=manu_imp&vst=&next=34&keyword=&next=34&ca=no&areacodes=&state=&searchby=nl&searchtype=company", "_parent");
}

</script>

<script>
function myFunction3() {
    window.open("http://67.222.144.12/products/product-comments.php", "_blank", "scrollbars=yes, resizable=yes, top=300, left=700, width=600, height=550");
}
</script>


<!-- Tab redirect for Product and Wholesale Search End -->

<style type="text/css">
 a:hover {
  cursor:pointer;
 }
</style>


<div style="position:relative; top:-265px">
    <script src="http://67.222.144.12/products/tab-content/tabcontent.js" type="text/javascript"></script>
    <link href="http://67.222.144.12/products/tab-content/template1/tabcontent.css" rel="stylesheet" type="text/css" />
<body style="background:#FFFFFF; font-family:Arial;">
  
    <div style="width: 763px; margin: 0 auto; padding: 120px 0 40px;">
        <ul class="tabs" data-persist="true" style="display:none;">
            
<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
?>

<?php
//Firefox
if ($firefox) {?>            
            <li> 
            <a href="#view1">Product Category Search</a>
            </li>
<? } else { ?>
            <li> 
            <a href="#view1"><button style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; background: #F0F0F0 url(tabbg.gif) 0 0 repeat-x; height:25px; width:150px; margin-bottom:-20px" onclick="myFunction()">Product Category Search</button></a>
            </li>
<? } ?>            

<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
?>

<?php
//Firefox
if ($firefox) {?>                      
            <li><a href="#view2">Wholesale Plants & Supply</a></li>
<? } else { ?>
          <li><a href="#view2"><button style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; background: #F0F0F0 url(tabbg.gif) 0 0 repeat-x; height:25px; width:150px; margin-bottom:-10px" onclick="myFunction2()">Wholesale Plants & Supply</button></a></li>  
<? } ?>                 
         
            <li><a href="#view3">Product Keyword</a></li>
            <li><a href="#view4">Company Keyword</a></li>
                        
        </ul>
        <div class="tabcontents">
        
        
<!-- View 3 Start -->
            <div id="view3">
            
<!-- <div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div> --><br /><br />


    

<div style="position:relative; left:-327px; top:-53px">
<!-- Search Section Start -->
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
    var track_click = 0; //track user click on "load more" button, righ now it is 0 click
    
    var total_pages = <?php echo $total_pages; ?>;
    $('#results').load("fetch_pages2.php", {'page':track_click}, function() {track_click++;}); //initial data to load

<!-- script for Ajax Search 1 Start -->
    $("#search-box").keyup(function(){

        $.ajax({
        type: "POST",
        url: "http://67.222.144.12/products/load-more-results/index-js.php",
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

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

</script>
<link href="css/style-count.css" rel="stylesheet" type="text/css">

<p>
  <style>
.frmSearch {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 295px; color:#a97f3f; border: 1px solid; width: 750px; height:158px}
#country-list{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list td{padding: 10px; color:#906; background:#CCC; border-bottom:#F0F0F0 1px solid;}
#country-list td2{padding: 10px; color:#fff; background:#fff; margin-left:10px; border-bottom:#F0F0F0 1px solid;}
#country-list td:hover{background:#a97f3f;}
#search-box{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>
  
  <!-- script for Ajax Search 1 End -->
  
  
  <!-- Search Box Setup Start -->
  </p>
<p>&nbsp;</p>
<table align="center" width="763">
  <tr>
<td>
<div class="frmSearch">
<div style="position:relative; top:0px">
<h2 style="font-family:Arial, Helvetica, sans-serif"><span style="color:#a67d3b">Product Search: <span style="font-size:18px; color:#000">Find Product Photos, Linked to Vendors</span></span></h2>
</div>

<div style="position:relative; top:10px; color:#000">
(For best results, search with a minimum of 3 letters)
</div>

<div style="position:relative; top:25px">
<input type="text" id="search-box" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" placeholder="Enter Product Name" autocomplete="on" />
</div>

<div id="suggesstion-box"></div>

</div>
</td>
</tr>
</table>

<!-- Search Box Setup end -->
<!-- Search Section End -->
</div>

<!-- Veiw 3 End -->
                
            </div>
            
            <div id="view4">
            <!--Veiw 4 Start -->
            <!-- <div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div> --><br /><br />




<div style="position:relative; left:-327px; top:-53px">
<!-- Search Section Start -->

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
    var track_click = 0; //track user click on "load more" button, righ now it is 0 click
    
    var total_pages = <?php echo $total_pages; ?>;
    $('#results2').load("fetch_pages3.php", {'page':track_click}, function() {track_click++;}); //initial data to load

<!-- script for Ajax Search 1 Start -->
    $("#search-box2").keyup(function(){
                
        $.ajax({
        type: "POST",
        url: "http://67.222.144.12/products/load-more-results/index-js2.php",
        data:'keyword='+encodeURIComponent($(this).val()),
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
<link href="css/style-count.css" rel="stylesheet" type="text/css">

<style>
.frmSearch2 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 295px; color:#a97f3f; border: 1px solid; width: 750px; height:158px}
#country-list2{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list2 td{padding: 10px; color:#906; background:#CCC; border-bottom:#F0F0F0 1px solid;}
#country-list2 td2{padding: 10px; color:#fff; background:#fff; margin-left:10px; border-bottom:#F0F0F0 1px solid;}
#country-list2 td:hover{background:#a97f3f;}
#search-box2{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<!-- script for Ajax Search 1 End -->

<!-- Search Box Setup Start -->

<table align="center" width="763">
<tr>
<td>
<div class="frmSearch2">
<div style="position:relative; top:0px">
<h2 style="font-family:Arial, Helvetica, sans-serif"><span style="color:#a67d3b">Company Search: <span style="font-size:18px; color:#000">Find Companies by Name, Linked to Vendor Profiles</span></span></h2>
</div>

<div style="position:relative; top:10px; color:#000">
(For best results, search with a minimum of 3 letters)
</div>

<div style="position:relative; top:25px">
<input type="text" id="search-box2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" placeholder="Enter Company Name" autocomplete="on" />
</div>

<div id="suggesstion-box2"></div>

</div>
</td>
</tr>
</table>

<!-- Search Box Setup end -->

<!-- Search Section End -->
</div>


<!-- Veiw 4 End -->             
            </div>
            
            <div id="view1">
                <!-- Content Veiw 1 Start --> 


<!-- <div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div> --><br /><br />


<!-- New Keyword Section Start -->

<!-- Product Name Section Start -->
<style>
.frmSearch3 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 300px; color:#a97f3f; border: 1px solid; width: 745px}
#country-list3{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list3 td{padding: 10px; color:red; background:#999; border-bottom:#F0F0F0 1px solid;}
#country-list3 td:hover{background:#a97f3f;}
#search-box3{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<link href="css/style-count.css" rel="stylesheet" type="text/css">

<div style="position:relative; left:50px; top:-35px">
<h2 style="font-family:Arial, Helvetica, sans-serif; color:#aa7f43"><span style="color:#a67d3b">Product Category Search</span></h2>
</div>

<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
?>


<?php
//Firefox
if ($firefox) {?>
<!-- <a href="http://67.222.144.12/products/product-comments.php" target="_blank"><br>
<div align="center" style="position:absolute; left:565px; top:180px; z-index:20000; font-size:14px; width:200px; color:#2781E1">
Let us know what you think<br>
of our new product search</a>
</div> -->
<? } else { ?>
<!-- <div align="center" style="position:absolute; left:565px; top:170px; z-index:20000; font-size:14px; width:200px; color:#2781E1">
    <button onmouseover="" style="height:30px; width:175px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; cursor: pointer" onclick="myFunction3()">Let us know what you think<br>
    of our new product search</button>
</div> -->
<? } ?>


<!-- Put into Div section -->
<div>

<?php
session_start();
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
    include("refine-js3-js.php"); // copied below in multiple location to show before and after search results
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
    
   /* if (isset($_GET['op1']) || isset($_GET['op2']) ){
        //print_r($_SERVER);
     include ("product_search_do-js.php"); //n-1
    }
     */

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


<!-- Banner Section 1 Start -->
<div style="position:absolute; left:735px; top:175px">

<div class="banner1">
<?

   // Inserted code from banner-new.php start
	$servername = "localhost";
	$username = "landscap_lol";
	$password = "meow2meow";
	$dbname = "landscap_lollive";
	
	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// start for the banner add counting and getting from table

$sql = "SELECT * FROM banner_ups where product = ".$_GET['next']." AND picture IS NOT NULL ORDER BY RAND()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<div style='position:absolute; left:60px; top:-105px'>";
	echo "<table width='240'>";
    while($row = $result->fetch_assoc()) {
	echo "<tr><td><a href='". $row["web"]. "'><img src='/banner/" . $row["picture"]. "' width=240 border=0 style='margin-bottom:10px>'</a></td></tr><tr><td style='line-height:5px'>&nbsp;</td></tr>";
    }
} 
	echo "</table>"; 
	echo "</div>";

$conn->close();
   // Inserted code from banner-new.php end


// original code start

//if ( $_GET['next'] == 27 || $_GET['next'] == 28 || $_GET['next'] == 29 || $_GET['next'] == 30 || $_GET['next'] == 32 || $_GET['next'] == 33 || $_GET['next'] == 38 || $_GET['next'] == 40 || $_GET['next'] == 41 || $_GET['next'] == 1208 || $_GET['next'] == 1209 || $_GET['next'] == 1210 || $_GET['next'] == 1212 || $_GET['next'] == 1213 || $_GET['next'] == 1214 || $_GET['next'] == 1215 || $_GET['next'] == 1216 || $_GET['next'] == 1300 || $_GET['next'] == 1301 || $_GET['next'] == 1139 || $_GET['next'] == 1211) {
#ini_set('display_errors',1);
# error_reporting(-1); 
# echo "hhhhh" .$_SERVER['DOCUMENT_ROOT'];
    //include_once($_SERVER['DOCUMENT_ROOT']."/products/load-more-results/banner-new.php?next2=$_GET[next]");
    //} else {
        //echo '&nbsp;';
    //}
	
// original code end

?>

</div>
<!-- Banner Section 1 End -->


</div>


<!-- Position Correction End -->




                <!-- Content Veiw 1 End -->             
            </div>
            
            
<!-- View 2 Start -->
            <div id="view2">
            
            
<!-- <div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div> --><br /><br />


<!-- New Keyword Section Start -->

<!-- Product Name Section Start -->
<style>
.frmSearch3 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 300px; color:#a97f3f; border: 1px solid; width: 745px}
#country-list3{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list3 td{padding: 10px; color:red; background:#999; border-bottom:#F0F0F0 1px solid;}
#country-list3 td:hover{background:#a97f3f;}
#search-box3{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<link href="css/style-count.css" rel="stylesheet" type="text/css">

<div style="position:absolute; left:6px; top:170px">
<h2 style="font-family:Arial, Helvetica, sans-serif; color:#aa7f43"><span style="color:#a67d3b">Wholesale Plants & Supply</span></h2>
</div>




<!-- Put into Div section -->
<div style="position:absolute; top:-20px">


<?php
session_start();

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
function checkacs2() {
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
    
// problem section  
    include("refine-js4.php"); // copied below in multiple location to show before and after search results
   // problem section   
    
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
     include ("product_search_do-js-whole.php"); //n-2
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


<!-- Banner Section 2 Start -->
<div style="position:absolute; left:735px; top:175px">
<div class="banner1">
<?
if ( $_GET['next'] == 34 || $_GET['next'] == 35 || $_GET['next'] == 1211) {
    include "http://67.222.144.12/products/load-more-results/banner-new2.php?next2=$_GET[next]";
    } else {
        echo '&nbsp;';
    }
?>
</div>
<!-- Banner Section 2 End -->


</div>


<!-- Position Correction End -->


<!-- Veiw 2 End -->
                
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


<!-- Footer Section Start -->  
<div class="bottom1">
<? include $include_path . "lo_footer-main3.inc"; ?>
</div>
<!-- Footer Section End -->  

</div>
<script>
function clicktosearchfun( myval ){
// alert(myval);
$(".check"+myval).attr('checked', true);
$('.op2search').click();
// return false;
}
</script>
<?php 
if(isset($_REQUEST['op3']) && $_REQUEST['op3']=='Modify'){ ?>
<script>
$(".allcheck").attr('checked', false);
</script>
<?php 
}
?>