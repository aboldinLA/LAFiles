<?
ob_start( );
 include $include_path . "class/industry_class.inc";
$I = new industry_Class($db);

if($_SERVER['REQUEST_METHOD']=="POST"){
extract($_POST);
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
echo $error;
	if(!strlen($error)){
		if ($action == "edit") {
            $next_zip= "";
			$I->update_associat($local,$association,$acronym,$address,$city,$state,$zip,$toll,$fax,$web ,$email,$exfirst,$exlast, $exphone,$exmail,$publication,$members,$web_mod, $id); 
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://67.222.144.12/industry/Association-Event.php?id='.$id.'&action=edit">';    
				exit;
   			
		} else {
			$id=$I->enter_associat($local,$association,$acronym, $address,$city,$state,$zip,$toll,$fax,$web ,$email,$exfirst,$exlast, $exphone,$exmail,$publication,$members,$web_mod);
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://67.222.144.12/industry/Association-Event.php?id='.$id.'">';    
				exit;
		}
	}
} 


?>
