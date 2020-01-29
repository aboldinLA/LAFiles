<?php
$requiredClasses[] = 'base/vendor_listing.php';
include("lol_common.inc");
include("datamapD.php");
include("debug_pcm.php");

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
    if(array_key_exists($_GET['localtype'], $quicklaunch)) {
        // we're searching for something valid
        // set the title
        $qtitle = $quicklaunch[$_GET['localtype']]['title'];
        // set the categories from the url, or xlist, or ql cats
        if(is_array($_GET['find'])) {
            $categories = &$_GET['find'];
        } else if(is_array($_GET['xlist'])) {
            $categories = &$_GET['xlist'];
        } else if(is_array($quicklaunch[$_GET['localtype']]['cat'])) {
            $categories = $quicklaunch[$_GET['localtype']]['cat'];
        } else {
            $categories = array();
        }

        if(!is_array($categories)) {
            $error .= "Categories must be an array, not " . gettype($categories) . ".<br>\n";
        }

        $types = $quicklaunch[$_GET['localtype']]['types'];

        // set banner product category
        if(strlen($_GET['next']) > 0) {
            $_SESSION['banner_product'] = $_GET['next'];
        } else {
            $_SESSION['banner_product'] = $quicklaunch[$_GET['localtype']]['ban'];
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
    } else {
        $error .= "Unknown Local Search Type of $localtype<br>";
    }
}

if((is_array($types) || is_numeric($types)) && strlen($error) < 1) {
    include($include_path . "lol_header2.inc");    //begin a page that has either a search, or a category select.
    include("products.css");
    $ca = $_GET['ca'];
    if(!isset($_GET['find'])) {
        if(isset($_SESSION['oldca']))
            $ca = $_SESSION['oldca'];
        else
            $ca = 0;
    }
    $_SESSION['oldca'] = $ca;
    include("refine.php"); // copied below in multiple location to show before and after search results

    if (($quicklaunch[$_GET['localtype']]['ac'] && count($acarray) > 0) ||
        ($quicklaunch[$_GET['localtype']]['st'] && strlen($_GET['state']) > 1))  {
        if(count($categories) < 1) {
            echo("<b>Please select at least one category to search for.</b><br />\n");
        } else {
            $_SESSION['banner_state'] = $_GET['state'];
            //include("results.php");
        }
    } else if($quicklaunch[$_GET['localtype']]['adv']) {
        if(!$_GET['next'] && ($_POST['searchtype']!="photo" && $_GET['searchtype']!="photo")) {
            echo("Please choose a product category to refine your search.<br>");
        } else if(count($categories) < 1 && ($_POST['searchtype']!="photo" && $_GET['searchtype']!="photo")) {
            echo("<b>Please select at least one category to search for.</b><br />\n");
        } else {
            //include("results.php");
        }
    } else if($quicklaunch[$_GET['localtype']]['st'] == TRUE) {
        if(strlen($_GET['state']) > 1) {
            //include("results.php");
        }
    } else {
        echo("<b>Please provide the area codes you wish to search within the box above.</b><br>");
    }
    
    if ($_POST['searchtype']!="" || $_GET['searchtype']!="" ){  //Display the products
        include('product_search_doD.php');
    }
     
    echo("<hr noshade size=-1>");
    echo('<div align="center"><strong><a href="' . $_SERVER['PHP_SELF'] . '">Click Here to Modify Search.</a></strong>');
    include($include_path . "lol_footer.inc");
} else {    //begin a page that has no search criteria. loaded when no GET-localtype
    $secthdr = "Product Search";
    $_SESSION['areacodes'] = NULL;

    unset($_SESSION['banner_product']);
    unset($_SESSION['banner_search']);
    unset($_SESSION['banner_state']);
    
    include($include_path . "lol_header2.inc");
    if(strlen($error) > 1) 
        $C->errors($error);
    include("products.css");
   	include("localD.php"); 
   	//include("advanced.php");
    include($include_path . "lol_footer.inc");   
}
?>