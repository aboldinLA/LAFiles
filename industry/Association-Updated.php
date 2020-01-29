<?
include "lol_common.inc";

?>




<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new-js2.inc";
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

<!-- Code Start -->
<div>
	
		<?
			include("lo_top-main2-side2-js50.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
			
				
			<!-- Left Nav Start -->
			<?
			include("lo_left-side-common.inc");
			?>
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784" style="padding-left: 260px;">
				

						<center><img style="width: 30%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" /><img style="width: 35%; padding-left: 50px" src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" /></center><br />
						<?

						if ($action == "edit")	{

						?>    
						<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Thank You Updating your Association</center></span>
						<?	} else { ?>
						<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Thank You for Regeristing your Association</center></span>
						<?	} ?>
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
							<TD align=center style="font-size:16px">
							<br>
									Thank you for submitting your association's information to LandscapOnline.com 
									We will verify your submission by sending you an E-mail within seven (7) business days,
									 which will include a private password and direct link to your association page. 
									 This will allow you to make updates and change to your information at any time.<br><br>

									 Your free listing, including a hot link to your website, will appear in the Associations<br />
							Search Engine of LandscapeOnline.com as exampled below.<br><br>
							</TD> 
						 </TR>

						<tr align="center">
							<td><img width="600" src="https://landscapearchitect.com/imgz2/assoc-list.jpg" /></td>
						</tr>

						 <?}?>
						 <TR> 
								<td><br><!--mm replaced--></td>
						</TR> 
					</table>




					<!-- Old Code End -->
    				
				
				
				
				
				
				
	
 
				
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 265px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>

				