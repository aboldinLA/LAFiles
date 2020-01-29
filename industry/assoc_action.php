<?

include "lol_common.inc";



include $include_path . "class/industry_class.inc";



$I = new industry_Class($db);



if ($action == "active") {

    $I->listing($id,$act);

	header("location: index.php");

 }

 

if ($action == "delete")

{

  	$I->delete_vent($event_id,$assoc_id);

	$action = "edit";

	header("location: associat_event.php?id=$assoc_id&action=$action");



 }

 ?>