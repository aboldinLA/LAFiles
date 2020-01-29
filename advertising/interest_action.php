<?$include_path = "../../includes/";
include $include_path . "script_head.inc";
include $include_path . "class/media_class.inc";
$M = new media_class($db);

$data= $M->get_info_list($media_id);

$goto = $data['pay_link'];

if ($goto == "yes")
	{
      header("location: thank_you.php?media_id=$media_id&action=".$action);
    }else{
      header("location: list.php?action=edit&media_id=$media_id");
    }


