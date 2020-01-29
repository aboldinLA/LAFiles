<?

include $include_path . "class/media_class.inc";

$M = new media_class($db);
$I = new industry_Class($db);

if($REQUEST_METHOD=="POST"){
		
	$error = "";

	if(strlen($biz_id) < 2)	$error .= "- Please enter One<br>";

	if(!strlen($error))  {
		
			if(is_array($biz_id))
				$biz_id = implode(",",$biz_id);
			$I->input_members($biz_id,$id);
			header("location:assoc_thanks.php?assoc_id=$id&action=$action");
	 }
}
$secthdr="Membership Profile";
?>
<? include $include_path . "assoc_members_form.inc"; ?> 
	
