
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
		include("lo_top-main2-side-new.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			

				<table>
					<tr>
						<td style="line-height:5px">&nbsp;</td>
					</tr>
				</table>
				<!-- Above used to correct content position need to rewrite to do correct -->

				<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
					<center><img src="https://landscapearchitect.com/lol-logos/la-details-logo.jpg" width="300" style="position: relative; top: -15px" /><img src="https://landscapearchitect.com/lol-logos/tool-and-equipment-logo.jpg" width="250" style="position: relative; left: 50px" /></center><br />
					<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Vendor Profile Management Center</center></span>
				<div>


				<!-- Old Code Start -->


				<style type="text/css">
				<!-- 
					a:link {
						color:blue;
						text-decoration:underline;
					}
					a:active { color:red }
					a:visited { color:purple }
					body {
						background-color:white;
						color:black;
					}
					.text0 {
						font-family:'Helvetica','Arial','Sans-serif';
						font-size:11px;
						text-decoration:none;
						color:black;
					}
					.text06 {
						font-family:'Helvetica','Arial','Sans-serif';
						font-size:11px;
					}
					.para0 {
						text-align:left;
					}
					.box1 {
						background-color:white;
						width:763px;
						height:1400px;
					}
					.box2 {
						position:absolute;
						left:325px;
						top:365px;
						padding:0px;
						width:274px;
						height:30px;
					}
					.box3 {
						position:absolute;
						left:528px;
						top:632px;
						padding:0px;
						width:274px;
						height:30px;
					}
					.box4 {
						position:absolute;
						left:285;
						top:692px;
						padding:0px;
						width:274px;
						height:30px;
					}
				 -->
				</style>



				<div align="center" style="position: absolute; left:0px; top:300px; width:750px">        
						<center><span style="font-size:16px" width-"500">Welcome to the largest landscape-oriented database on the internet.
						More than 50,000 commercial landscape <br>professionals visit LandscapeOnline every month.
						Many visitors are looking for the products <br>and services you provide, both nationally and locally.<br />
						</span><br>
				</div>

				<div style="position: absolute; left:0px; top:370px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:19px; font-weight:bold">
						<center>To Edit Your Vendor Profile <br>Please Enter Your Password Here</center>
				</div>

				<div style="position: absolute; left:295px; top:420px; padding:0px; width:750px">
					<form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
						<table border=0 cellpadding=0 cellspacing=5>
							<? if ($t == "ad") {?>
							<tr>
								<td>Login:</td>
								<td><input type="text" name="email" MAXLENGTH="45" value="" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address"></td>
							</tr>
							<? } ?>
							<tr>
								 <td> </td>
								 <td><input type="password" name="password" MAXLENGTH="10" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Password">
									<script type="text/javascript" lang="javascript">
									<!--
										<? if ($t == "ad") { ?>
										document.loginform.email.focus();
										<? } else { ?>
										document.loginform.password.focus();
										<? } ?>
									// -->
									</script>
								 </td>
							</tr>
							<tr>
								<td style="line-height:2px">&nbsp;</td>
							</tr>
							<tr>
								<?
									if ( !$_SESSION['np'] && $t == "ad"){
										$new_npage = "/private/index.php";
									} else 	if ( !$_SESSION['np'] && $t == "v"){
										$new_npage = "/vendor/index-vendor-LAD.php?action=edit";
									} else {
										$new_npage = "/vendor/index-vendor-LAD.php?action=edit";
									}
								?>
								<td align="center" colspan=2><INPUT TYPE="submit" VALUE="Enter" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888">
										<input type="hidden" name="npage" value="<?=$new_npage?>">
										<input type="hidden" name="action" value="login">
										<input type="hidden" name="t" value="<?=$t?>"></FORM>
								</td>
							</tr>
						</table>
				</div>

				<div style="position: absolute; left:10px; top:500px; padding:0px; font-size:16px; font-weight:bold; width:750px"><center>Never assigned a password?<br>
					<a href="https://landscapearchitect.com/vendor/signup/index2.php">Click Here</a></center>
				</div>

				<!-- Horizontal Bar Start -->
				<div style="position:relative; left:0px; top:275px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
				<!-- Horizontal Bar End -->

			

				<div align="left" style="position: absolute; top:570px; padding:0px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
					<center><font size="+1"> Resend Vendor Password?</font><br>
					Please fill out the form below and it will be emailed to you.<br>
				(*All fields are required)</center></div>
				</div>	


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


				<form NAME="pass_form1" action="mailback3.php" method="POST" onSubmit="return validate();">
					<div align="left" style="position: absolute; left:225px; top:640px; padding:0px; width:750px; height:30px">
						<label for="firstname">*First name:</label>
						<input type="text" id="firstname" name="firstname" style="height:20px; width:226px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name"/>
					</div>
					<div align="left"  style="position: absolute; left:225px; top:675px; padding:0px; width:750px; height:30px">
						<label for="lastname">*Last name:</label>
						<input type="text" id="lastname" name="lastname" style="height:20px; width:226px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name"/>
					</div>	
					<div align="left" style="position: absolute; left:225px; top:710px; padding:0px; width:750px; height:30px">
						<label for="company">*Company Name:</label>
						<input type="text" id="company" name="company" style="height:20px; width:187px; width:188px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Name"/>
					</div>	
					<div align="left" style="position: absolute; left:225px; top:745px; padding:0px; width:750px; height:30px">
						<label for="email2">*Email Address:</label>
						<input type="text" id="email2" name="email2" style="height:20px; width:200px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address"/>
					</div>		
					<div align="left" style="position: absolute; left:358px; top:775px; padding:0px; width:750px; height:30px">
						<input type="submit" value="Submit" name="submit" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" />
					</div>
				</div>
				</form>


		
		
		
		
		
		
		
		
	
	</div>					
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 265px; top: 500px">
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





