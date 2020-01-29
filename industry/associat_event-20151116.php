<?
include "lol_common.inc";

include $include_path . "class/industry_class.inc";
$I = new industry_Class($db);

include $include_path . "associat_event_handler.inc";
include $include_path . "lol_header2.inc";

if ($action == "edit") {
	$data = $I->association_info($id);
}
include $include_path . "associat_event_edit.inc"; ?>
<? include $include_path . "lol_footer.inc"; ?>
	