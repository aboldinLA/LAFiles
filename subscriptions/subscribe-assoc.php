<?
include "lol_common.inc";

$uid = $_SESSION['uid'];
$auth = $_SESSION['auth'];
if ($action == 'edit') {
	if ($auth != $ASSOC_AUTH) {
		session_register("np");
  		$_SESSION['np'] = $PHP_SELF  . "?action=edit"; 
		header("location: ". $lol_url ."/member/login4.php?t=as");	
	} 
}
include $include_path . "associat_edit_h.inc";
include $include_path . "lol_header2.inc";
$uid1=$uid;
$auth1=$auth;
include $include_path . "associat_edit-new.inc";
include $include_path . "assoc_members_form.inc";
include $include_path . "lol_footer.inc"; 
?>



<? 
include $include_path . "class/industry_class.inc";
$M = new media_class($db);
$I = new industry_Class($db);

if($REQUEST_METHOD=="POST"){
	$DISPLAY = $_POST;
	$error = "";
	if(strlen($association) < 2)$error .= "- Please enter your Association Name<br>";
	if(strlen($acronym) < 2)$error .= "- Please enter an Acronym<br>";
	if(strlen($address) < 2)$error .= "- Please enter your Address<br>";
	if(strlen($city) < 3)$error .= "- Please enter your City<br>";
	if(strlen($state) < 2)$error .= "- Please enter your State<br>";
	if(strlen($zip) < 5)$error .= "- Please enter your ZIP code<br>";
	if(strlen($email) < 4)$error .= "- Please enter your Email address<br>";
	if(strlen($members) < 1) $error .= "- Please enter the number of members<br>";
	if(!strlen($error)){
		if ($action == "edit") {
            $next_zip= "";
			$I->update_associat($local,$association,$acronym,$address,$city,$state,$zip,$next_zip,$toll ,$area_fax,$fax,$web ,$email,$mkfirst,$mklast,$mkarea,$mkphone,$mkmail,$prfirst,$prlast,$prarea,$prphone,$prmail,$exfirst,$exlast,$exarea, $exphone,$exmail,$drfirst,$drlast,$drarea,$drphone,$drmail,$publication,$members,$id);    
			header("location: associat_event.php?id=$id&action=edit");
		} else {
			$id=$I->enter_associat($local,$association,$acronym, $address,$city,$state,$zip,$toll,$area_fax,$fax,$web ,$email,$mfirst,$mklast,$mkarea,$mkphone,$mkmail,$prfirst,$prlast,$prarea,$prphone,$prmail,$exfirst,$exlast,$exarea, $exphone,$exmail,$drfirst,$drlast,$drarea,$drphone,$drmail,$publication,$members);
			if ($id) header("location: associat_event.php?id=" .$id);
		}
	}
} 


	if(strlen($biz_id) < 2)	$error .= "- Please enter One<br>";

	if(!strlen($error))  {
		
			if(is_array($biz_id))
				$biz_id = implode(",",$biz_id);
			$I->input_members($biz_id,$id);
			header("location:assoc_thanks.php?assoc_id=$id&action=$action");
	 }

?>




