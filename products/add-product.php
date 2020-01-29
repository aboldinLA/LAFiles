<?php
$deny = array("188.120.247.80", "82.146.41.82", "78.24.221.247", "134.255.235.242", "62.109.18.238", "78.24.216.237", "91.215.152.97", "91.215.152.118", "82.146.61.221", "149.154.69.37");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://landscapearchitect.com/");
   exit();
} ?>



<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
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
		include("lo_top-main2-side2-js-banner.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			


				<div align="left" style="position: relative; left: 0px; top:25px; padding:0px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
					<center><font size="+1"> Add a Product</font><br>
					Please fill out the form below to add a product.<br>
				(*All fields are required)</center>


				<SCRIPT language="javascript" type="text/javascript">
				function validate(){
					if (document.pass_form1.firstname.value.length < 1) {
						alert("Please enter your first name.");
						return false;
					}
					if (document.pass_form1.lastname.value.length < 1) {
						alert("Please enter your last name.");
						return false;
					}
					if (document.pass_form1.company.value.length < 1) {
						alert("Please enter your company name.");
						return false;
					}
					if (document.pass_form1.email2.value.length < 1) {
						alert("Please enter your email address.");
						return false;
					}
					return true;
				}
				</script>

				<div style="position: relative; left: 200px; top: 25px">
				<form NAME="pass_form1" action="mailback3.php" method="POST" enctype="multipart/form-data" onSubmit="return validate();">
					<div align="left" style="padding:0px; width:750px; height:30px">
						<label for="firstname">*Name:</label>
						<input type="text" id="name" name="firstname" style="height:20px; width:226px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Name"/>
					</div>
	
					<div align="left" style="padding:0px; width:750px; height:30px">
						<label for="company">*Company Name:</label>
						<input type="text" id="company" name="company" style="height:20px; width:187px; width:188px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Name"/>
					</div>
					
					<div align="left" style="padding:0px; width:750px; height:30px">
						<label for="email2">*Email Address:</label>
						<input type="text" id="email" name="email" style="height:20px; width:200px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address"/>
					</div>
					
					<div align="left" style="padding:0px; width:750px; height:30px">
						<label for="email2">Message:</label>
						<input type="text" id="message" name="message" style="height:20px; width:200px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Message"/>
					</div>
					
					<div align="left" style="padding:0px; width:750px; height:30px">
						<label for='uploaded_file'>Select A File To Upload:</label>
						<input type="file" name="uploaded_file">
					</div>					
					
					
					
					<div align="left" style="padding:0px; width:750px; height:30px">
						<input type="submit" value="Submit" name="submit" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" />
					</div>
				</form>
				</div>

			</div>		
		
		
		
		
		
		
	
	</div>							
		
		
		
		
		
		
		
		
		
	
	
	</div>					
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? 	// include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





