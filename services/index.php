<?php
$requiredClasses[] = 'base/vendor_listing.php';
include("lol_common.inc");
//include($include_path . "class/banner_class.inc");
//include($include_path . "class/vendor_class.inc");
include($include_path . "class/media_class.inc");

include("datamap.php");

//$V = new vendor_class($db);
$vl = new vendor();
//$B = new banner_class($db);
$M = new media_class($db);


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
    if(array_key_exists($_GET['localtype'], $quicklaunch)) {
        // shortcut
        $q = &$quicklaunch[$_GET['localtype']];
        $qtitle     = $q['title'];
        if(is_array($_GET['biz_id'])) {
            $categories = &$_GET['biz_id'];
        } else if(is_array($_GET['find'])) {
            $categories = &$_GET['find'];
        } else if(is_array($q['cat'])) {
            $categories = $q['cat'];
        } else {
            $categories = array();
        }
        if(!is_array($categories)) {
            $error .= "Categories must be an array, not " . gettype($categories) . ".<br>\n";
        }
        $types      = $q['types'];
        $_SESSION['banner_product'] = $q['ban'];
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

//if((is_array($types) || is_numeric($types)) && strlen($error) < 1) {
if($q['title'] && strlen($error) < 1) {
    $secthdr = "Find a Pro Results for $qtitle";
    $_SESSION['banner_product'] = $next;
    include($include_path . "lol_header2.inc");
    // include("debug.php");
    include("products.css");
    $ca = $_GET['ca'];
    if(!isset($_GET['find'])) {
        if(!$q['ac']) 
            echo("<b>No categories specified, repeating last search.</b><br />");
        if(isset($_SESSION['oldca']))
            $ca = $_SESSION['oldca'];
        else
            $ca = 0;
    }
    $_SESSION['oldca'] = $ca;
    include("refine.php");
    if( $q['ac'] && count($acarray) > 0)  {
        if(count($categories) < 1) {
            echo("<b>Please select at least one category to search for.</b><br />\n");
        } else {
            include("results.php");
        }
    } else if($_GET['searchby'] == 'st' && strlen($_GET['state']) == 2) {
        if(count($categories) < 1) {
            echo("<b>Please select at least one category to search for.</b><br />\n");
        } else {
            include("results.php");
        }
    } else if($q['adv']) {
        if(!$_GET['next']) {
            echo("Please choose a product category to search within above.<br>");
        } else if(count($categories) < 1) {
            echo("<b>Please select at least one category to search for.</b><br />\n");
        } else {
            include("results.php");
        }
    } else {
        echo("<b>Please provide the area codes you which to search within in the box above.</b><br>");
        
    }
    echo("<hr noshade size=-1>");
    echo('<div align="center"><strong><a href="' . $_SERVER['PHP_SELF'] . '">New Search</a> | <a href="avsearch.php">Advanced Search</a></strong>');
    include($include_path . "lol_footer.inc");

} else {
    $secthdr = "Find a Professional!";
    include($include_path . "lol_header2.inc");
    //include("debug.php");
    if(strlen($error) > 1) 
        $C->errors($error);
    include("products.css");
    include("local.php");
    //include("advanced.php");
    include($include_path . "lol_footer.inc");
}
?>
