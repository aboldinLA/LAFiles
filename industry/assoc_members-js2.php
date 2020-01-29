<?
include "lol_common.inc";

?>


<?
include("lo_top-main2.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	    <?
	include $include_path . "lo_header-main2-js.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Membership Profile</center></span><br>
<div>


<!-- Old Code Start -->

<?

include $include_path . "class/industry_class.inc";
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
<? include $include_path . "assoc_members_form-js2.inc"; ?> 

<!-- Old Code End -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:relative; left:15px; top:75px">
    	<?
		include $include_path . "banner-pages.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1" style="position:relative; left:-150px">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>
</div>	