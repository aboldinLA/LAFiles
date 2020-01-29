<?
include "lol_common.inc";

include $include_path . "class/vendor_class.inc";
include $include_path . "class/media_class.inc";

$M = new media_class($db);
$V = new vendor_class($db);

if(isset($_REQUEST['hot']))
    $_SESSION['vhot'] = $_REQUEST['hot'];


if($REQUEST_METHOD=="POST")	{
	$DISPLAY = $_POST;
	$error = "";

	if(strlen($comp_name) < 2)	$error .= "- Please enter your Company Name<br>";
	if(strlen($first_name) < 2)	$error .= "- Please enter your First Name<br>";
	if(strlen($last_name) < 2)	$error .= "- Please enter your Last Name<br>";
	if(strlen($address) < 2)	$error .= "- Please enter your Address<br>";
	if(strlen($city) < 3)		$error .= "- Please enter your City<br>";
	if(strlen($state) < 2)		$error .= "- Please enter your State<br>";
	if(strlen($zip) < 5)		$error .= "- Please enter your Postal code<br>";
	if(strlen($area_code) < 2)	$error .= "- Please enter your Area Code<br>";
	if(strlen($email) < 5)		$error .= "- Please enter your E-mail<br>";
	if(strlen($phone) < 7)		$error .= "- Please enter your Phone Number<br>";
	if(strlen($vst) < 1)		$error .= "- Please enter your Company Type<br>";
	if (strlen($profile) > 2500)	{
	     $error .= "- The profile is greater that 2500 characters.<br>";
    }

    if(strlen($profile) < 1) {
        $error .= "- The profile is empty.<br>";
    }

/*
   if (strlen($profile) < 10)	{
	 //    $error .= "- The profile is less than 10 characters.<br>";
   }
*/
	
	if (!strlen($error))  { 
			//to take check boxes array
			if(is_array($request))
			$request=implode(",",$request);

			if(is_array($vst))
			$vst=implode(",",$vst);
			
			$setup = strtotime("now");
 
				 if ($action == "edit")	{    
					   $edit = strtotime("now");	  
						$V->vendor_edit($uid,$alt_mail,$comp_name,$address, $address2, $city, $state, $zip,$country, $first_name, $last_name, $email, $area_code, $phone, $area_fax, $fax ,$website,$vst, $profile, $request,$edit);	 
							if ($vst == 4 || $vst == 5 ){
								header("location:  vendor_add_categories_banner.php?action=$action&edit_id=$id&vst=$vst ");    
							} else {
								header("location:  vendor_add_categories.php?action=$action&edit_id=$id&vst=$vst");
							}
				 } else {

					$setup = strtotime("now");
					//input info
					$_SESSION['auth'] = $VENDOR_AUTH;
					$_SESSION['uid'] = $V->vendor_add($vst,$alt_mail,$comp_name,$address, $address2, $city, $state, $zip,$country, $first_name, $last_name, $email, $area_code, $phone, $area_fax, $fax ,$website, $profile, $request, $setup);
			
					if ($vst == 4 || $vst == 5) {
						header("location: vendor_add_categories_banner.php?vst=$vst");    
					} else {
						header("location: vendor_add_categories.php?vst=$vst");
					}
                 }//end else          
			  
  }//end error


} 
if($action == "edit") {
	$uid = $_SESSION['uid'];
	$auth = $_SESSION['auth'];
	if ($auth != $VENDOR_AUTH) {
		session_register("np");
	  	$_SESSION['np'] = $PHP_SELF . "?action=edit"; 
		header("location: ". $lol_url ."/member/login.php?t=v");	
	} else {
			if ($uid && $auth == $VENDOR_AUTH) $DISPLAY = $V->vendor_info($uid);
	}
}  else {
	if ($is_staging) $DISPLAY = $V->vendor_info(4837);
}
$secthdr="Vendor Signup Form";
include $include_path . "lol_header.inc";
?>

<?
include $include_path . "vendor_edit.inc";
?>
		 
<?
include $include_path . "lol_footer.inc"; ?>
	
