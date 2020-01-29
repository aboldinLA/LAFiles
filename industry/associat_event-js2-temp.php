<?
include "lol_common.inc";

include $include_path . "class/industry_class.inc";
$I = new industry_Class($db);

include $include_path . "associat_event_handler.inc";

if ($action == "edit") {
	$data = $I->association_info($id);
}
include $include_path . "associat_event_edit-js2.inc"; ?>
	