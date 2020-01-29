<?
include("lo_top-js-prod.inc");
?>
<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  
<?
include $include_path . "lo_header-js-prod.inc";

	function hot_topics() {
        global $ht;

		foreach ($ht as $id => $title) {
			echo "<a class='infolink' href='research/article.php/$id'>$title</a><br>";
		}

		echo "<a class='infolink' href='research/recent_news.php'>- Previous News Items for LandscapeOnline</a><br>";
	}
?>

</div>

<!-- Content Section -->
<!-- Begin Section 1 -->  
<div class="main1">

<div class="tb3">
  &nbsp;&nbsp;Welcome to the Product Search Center:&nbsp;&nbsp
</div><br /><br />


<!-- Old Code -->

<?php

$requiredClasses[] = 'base/vendor_listing-js.php';
include("lol_common-js.inc");

//include($include_path . "class/banner_class.inc");
//include($include_path . "class/vendor_class.inc");


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
    include("refine-js.php"); // copied below in multiple location to show before and after search results
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
        echo("<b> </b><br>");
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
	
	include $include_path . "lo_header-js-prod.inc";
    //include("debug.php");
    if(strlen($error) > 1) 
        $C->errors($error);
    include("products.css");
   	//include("advanced.php");
}
//var_dump($include_path);
?>
    
 
 
 
<!-- End Main Section -->  
</div>

<div class="banner1">
<!-- Banner Section -->
		<? include $include_path . "banner-front.inc"; ?>

</div>

<div class="bottom1">
<!-- Footer Section -->  
<? include $include_path . "lo_footer-js.inc"; ?>
  
</div>

</div>

