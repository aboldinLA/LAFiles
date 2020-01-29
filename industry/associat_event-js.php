<?
include "lol_common.inc";

include $include_path . "class/industry_class-js.inc";
$I = new industry_Class($db);

include $include_path . "associat_event_handler-js.inc";
$secthdr="Events Listing"; 
include $include_path . "lol_header2.inc";

if ($action == "edit") {
	$data = $I->association_info($id);
}
include $include_path . "associat_event_edit-js.inc"; ?>
<? include $include_path . "lol_footer.inc"; ?>
	