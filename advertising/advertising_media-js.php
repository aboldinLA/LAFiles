<?
include("lo_top-main2-js.inc");
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

	<!-- Start Advertising Section -->
    
    <?
include "lol_common-main2.inc";
include $include_path . "class/media_class.inc";
//include $include_path . "base/vendor_listing.php";

//$V = new vendor();
$M = new media_class($db);

if($REQUEST_METHOD=="POST")	{
	$error = "";

	if(strlen($comp_name) < 5)	$error .= "- Please enter your Company Name<br>";
	if(strlen($first_name) < 2)	$error .= "- Please enter your First Name<br>";
	if(strlen($last_name) < 2)	$error .= "- Please enter your Last Name<br>";
	if(strlen($state) < 2)		$error .= "- Please enter your State<br>";
	if(strlen($phone) < 7)		$error .= "- Please enter your Phone Number<br>";
	if(strlen($email) < 7)		$error .= "- Please enter your Email<br>";

	
	if(!strlen($error)) {  

		//to take check boxes array
		if(is_array($how))  $how = implode(",",$how);
		if(is_array($request))  $request=implode(",",$request);
		if(is_array($contact_preferences)) 	 $contact_preferences = implode(",",$contact_preferences);
	 		
		 //input info
		$uid = $M->media_form($current, $comp_name, $website, $represent, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,$area_code, $phone,$area_fax, $fax, $email, $edemail,$how, $how_pick, $how_other, $request, $contact_preferences, $note);

		$M->media_mail($uid);
		header("location:report2.php");
	 } 
}

?>

<div style="position:absolute; left:5px; top:100px; padding:0px; width:700px">

<form method="post" action="report2.php">
<input type="hidden" name="uid" value="<?echo $uid?>">
<table WIDTH="95%" align=center cellpadding="0" cellspacing="0"> 
	<TR> 
		<TD COLSPAN="3" align="center">
		<? if ($error){ $C->errors($error);	}?>
		</TD> 
	</TR>
    <tr>
    	<td colspan="3">
        	<br /><br /><br />
       	  <center><strong><font size="6" >Welcome to </font></center><br />
          	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" width="295" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />
    
          <center><font size="5" >Advertising Information Request Center!</font></strong></center><center><br />
          
          <p><span style="font-size: 16px"><em>Since 1985 Landscape Communications, Inc (LCI) has had one simple goal . . . Entertain and educate landscape professionals, and connect them to vendors and service providers. With highly focused readership groups and specifically titled media and events, LCI brings you together with your target market better than any other resource in the industry.</em></span></p>
            </center><br />
            <center><span style="font-size: 16px">Please click the button below and complete this short form and an advertising representative will respond to your request within  one business day, or for immediate information call (714) 979-5276 ext. 113.</span>
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="3"><p></p></td>
    </tr>     

                </table>
			</TD>
        </tr>
 </table>    
  
<?
if ($request == Null){$request[] = ""; }
//$V->request($request);
?> 


				
								<script>
	
									function myButtonFunction5() {
										
										

										window.open("https://landscapearchitect.com/advertising/media-request2.php?", "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
									   }
											
											
											
								</script>                 
    
    
    
   <table align=""> 
   	<tr>
		<td style="line-height: 10px">&nbsp;</td>
	</tr>     
	<tr>
		<TD ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Media Request Form:</span></TD>
		<TD ><a href="#" onClick="myButtonFunction5()"><img width="40%" src="https://landscapearchitect.com/images/Request-more-product-info.jpg"></a> </TD>
    </tr> 
</table>          
           
           
           
           
            </td>
	</TR>                                                                                                
    		<tr>
        		
    	 </tr
         ><TR>
	</TR> 
	<TR> 
		<TD height="40">
		</TD>
	</TR>
	<TR> 
		<TD ALIGN="center" colspan="3">&nbsp;</TD>
	</TR>	 

</TABLE> </FORM>
</div>
    

    


	<!-- End Advertising Section -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div>
    	<?
		include $include_path . "banner-unvers-js2.inc";
		?>
	</div> <br>
        
        
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div style="position:relative; left:-700px">
	<center><? include $include_path . "lo_footer-main2.inc"; ?><br><br></center>
	</div>

</div>