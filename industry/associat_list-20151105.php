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
include $include_path . "associat_edit.inc"; 
include $include_path . "lol_footer.inc"; 
?>
	