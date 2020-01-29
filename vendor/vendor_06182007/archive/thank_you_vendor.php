<?
include "lol_common.inc";
include $include_path . "class/vendor_class.inc";

$V = new vendor_class($db);

if ($action == !"edit") {
	$vid=$_SESSION['uid'];
	session_unset();
	session_destroy(); 
}
include $include_path . "lol_header.inc";
?>


<TABLE ALIGN="center" CELLPADDING="5" WIDTH="75%"  CELLSPACING="3"> 

	
	<? if ($action == "edit")	{
	
	    echo "<tr>";
        echo "<td  colspan=2 align=center>";
		echo "<FONT SIZE=4  align=center><b>You Account Has Been Updated<b><br>";
		if ($a == "yes")
		echo "And thank you for  listing your company on LandscapeOnLine.com.</FONT>";  
		else
        
    	echo "</td>";
		echo "</tr>";
	} else {
		$pass = $V->get_v_pass($vid);
		if (!$pass) {
			$pass = $V->mkpass_ven($vid);	
			$V->save_pass($vid,$pass);
		}
	?>
	<tr>	
         <td  colspan="2" align="center" >
		
			<FONT SIZE="4"  align="center">
            <strong> Thank you for choosing<?if ($a == "yes") echo " to list your company on";?> LandscapeOnLine.com</strong></FONT>
    	<br>
		<br>
		<?if ($trans=="app"){?>
			<strong>Transaction Approved</strong>. Please check the inbox of the 
				billing email address for a receipt. Your account will be billed monthly until you decide to cancel.
		
		
		<? } ?>
		</td>	
	<tr>
         <td  colspan="2" align="center" >Your listing will be activated within 5 working days. Upon activation a password will be forwarded to you for use in editing your profile and submitting New Product Information.

			
    	</td>
	<tr>	
	<?}?>


</TABLE>
<? include $include_path . "lol_footer.inc"; ?>
	