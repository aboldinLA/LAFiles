<?
session_start();

include "lol_common.inc";

$pass = $C->mkpass_ass($assoc_id);
include $include_path . "class/industry_class.inc";

$I = new industry_Class($db);
$I->save_pass($assoc_id,$pass);
if ($action != "edit") {
		session_unset();
		// Finally, destroy the session.
		session_destroy(); 
}
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
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Thank You for the Update</center></span>
<div>


<!-- Old Code Start -->

<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
<input type="hidden"  name="uid" value=<?echo $uid?>>
<TABLE ALIGN="center" CELLPADDING="0" CELLSPACING="0" WIDTH="763"> 
	<?
	if ($action == "edit")	{
	
	?>
    <tr>
    	<td style="line-height:10px">&nbsp;</td>
    </tr>
	<TR>
		<TD COLSPAN=3 align=center>
		Thank you for your Update.<br>
        Your free listing, including a hot link to your website, will appear in the Associations<br />
		Search Engine of LandscapeOnline.com as exampled below.<br>
        </TD>
	</TR>
    <tr>
    	<td style="line-height:10px">&nbsp;</td>
    </tr>    
    <tr align="center">
    	<td><img width="600" src="https://landscapearchitect.com/imgz2/assoc-list.jpg" /><br></td>
    </tr>
	<?	} else { ?>
	<TR> 
			<TD COLSPAN="3" align=center style="font-size:16px">
				<br><br>
				Thank you for submitting your association's information to LandscapOnLine.com 
				We will verify your submission by sending you an E-mail within seven (7) business days,
				 which will include a private password and direct link to your association page.<br> 
				 This will allow you to make updates and change to your information at any time.<br>
			</TD> 
	 </TR>
     <TR>
		<TD COLSPAN=3 align=center><br><br>
        Your free listing, including a hot link to your website, will appear in the Associations<br />
		Search Engine of LandscapeOnline.com as exampled below.<br></TD>
	</TR>
    <tr align="center">
    	<td><img width="600" src="https://landscapearchitect.com/imgz2/assoc-list.jpg" /></td>
    </tr>
      
	 <?}?>
	 <TR> 
			<td><br><HR><!--mm replaced--></td>
	</TR> 
</table>




<!-- Old Code End -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:relative; left:15px; top:75px">
    	<?
		include $include_path . "banner-ads2.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1" style="position:relative; left:-150px">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>
</div>	