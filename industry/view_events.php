<?

include "lol_common.inc";

include $include_path . "class/industry_class.inc";
$I = new industry_Class($db);

$secthdr="Events Listing"; 
include $include_path . "lol_header2.inc";

if(!$id) {
    $error .= "Please select a valid association.<br>"; 
}

if(strlen($error) < 1) {
    echo $I->assoc_viewevents($id);
}

include $include_path . "lol_footer.inc";

?>
