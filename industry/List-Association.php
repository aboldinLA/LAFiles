
<?
include '../../includes/la_top-common.php';
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
		include("../../includes/la_header-common.inc");
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
			include("../../includes/la_banner-common.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("../../includes/la_left-side-common2.inc");
		?>	       
	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			

<div style="position: relative; left: 25px">				
				
				
<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img style="width: 30%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" /><img style="width: 35%; padding-left: 50px" src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Association Management Center</center></span>
<div>


<!-- Old Code Start -->

<?
include '../../includes/lol_common.inc';

$uid = $_SESSION['uid'];
$auth = $_SESSION['auth'];
if ($action == 'edit') {
	if ($auth != $ASSOC_AUTH) {
		session_register("np");
  		$_SESSION['np'] = $PHP_SELF  . "?action=edit"; 
		header("location: ". $lol_url ."../member/login4.php?t=as");	
	} 
}
include '../../includes/associat_edit_h-js2.inc';
$uid1=$uid;
$auth1=$auth;
include '../../includes/associat_edit-js2.inc';
?>				

	</div>
				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
    include("../../includes/lo_footer-main2-new.inc");
?>




