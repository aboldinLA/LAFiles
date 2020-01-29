<?
$include_path = "../../includes/";
include $include_path . "script_head.inc";
include $include_path . "class/media_class.inc";
		

include $include_path . "main_top.inc";
?>


<?    session_unset();
		// Finally, destroy the session.
		session_destroy(); 
		header("location: ../index.php");
?>