
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
		<center><table><tr><td valign="middle"><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="250px" /></td><td style="width: 25px">&nbsp;</td><td><img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" width="250px" /></td></tr></table></center><br />
				<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Subscription Management Center</center></span>
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
			</head>

			<body>

			<div align="center" style="position: absolute; left:5px; top:-14px"> 



				<div style=" position:absolute; left:50px; top:215px; width:600px; font-family:Arial, Helvetica, sans-serif; font-size:24px; line-height: 1.5em">
					<strong>Inside you can:</strong><br>
					<span style="padding:0px; width:685px; font-size:20px; color:#000; font-weight:bold; line-height: 1.5em"><center>&bull; Begin a New Subscription(s)<br>
				&bull; Renew an Existing Subscription <br>
				&bull; Update your Demographic &amp; Contact Information <br>
				&bull; Request Product Information from Vendors</center></span>
				</div><br><br>	

				<div style=" position:absolute; left:50px; top:390px; width:600px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
					Please Enter Your Password Here
				</div>		


				<div style="position:absolute; left:50px; top:415px; padding:0px; width:600px">
					<form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
						<table border=0 cellpadding=0 cellspacing=5>
							<? if ($t == "ad") {?>
							<tr>
								<td>Login:</td>
								<td><input type="text" name="email" MAXLENGTH="45" value=""></td>
							</tr>
							<? } ?>
							<tr>
								<td> </td>
								<td align="center"><input type="password" name="password" MAXLENGTH="10" size="35" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
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
							<? if ( !$_SESSION['np'] && $t == "ad"){
									$new_npage = "/private/index.php";
								} else 	if ( !$_SESSION['np'] && $t == "v"){
									$new_npage = "/subscriptions/subscribe.php?action=edit";
								} else {
									$new_npage = "/subscriptions/subscribe.php?action=edit";
								}
							?>
								<td align="center" colspan="2"><INPUT TYPE="submit" VALUE="Click Here To Enter" style="height:20px; width:175px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888">
									<input type="hidden" name="npage" value="<?=$new_npage?>">
									<input type="hidden" name="action" value="login">
									<input type="hidden" name="t" value="<?=$t?>"></FORM>
								</td>
							</tr>
						</table>
				</div>
			</div>
				
				

			<!-- Horizontal Bar Start -->
			<div style="position:relative; left:0px; top:300px; padding:0px; width:750px; height:2px; background-color:#605b51;">&nbsp;</div>
			<!-- Horizontal Bar End -->
				

			<div style="position:absolute; left:0px; top:500px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px"><br>
					<center><span style="font-size:24px">Do You Have A Password?</span><br>
						<i>If you have ever signed up,<br>an Email or received a Magazine from us,<br>you have a password.</i></center><br>
				</div><br><br>	

	

			<div align="left" style="position:absolute; left:145px; top:608px; padding:0px; width:460px; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#C60">
				<center>Locate Your Password On Your Magazine Label</center>
			</div>	

			<div style="position:absolute; left:-30px; top:635px; padding:0px; width:800px">
				<center><img src="/member/images/label-1.jpg" width="500"></center>
			</div>
				
		<div style="position:absolute; left:215px; top:930px; padding:0px; font-size:18px; font-weight:bold; width:350px">
					<center>If You Have Never Signed Up Before Please <a href="https://landscapearchitect.com/subscriptions/subscribe.php?action=new">Click Here</a> To Begin.</center>
			</div>				
				

			<div align="left" style="position:absolute; left:80px; top:1000px; padding:0px; width:600px">
				<hr /><br />
			</div>

			<div align="left" style="position:absolute; left:0px; top:1045px; padding:0px; width:800px; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#C60">
				<center>Resend Password</center>
			</div>	

			<div style="position:absolute; left:185px; top:1075px; width:770px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
					<i>Please fill out the form below and it will be emailed to you. <br>
					(*All fields are required)</i>
				</div>

			<form action="mailback.php" method="POST">
				<div align="left" style="position:absolute; left:215px; top:1125px; padding:0px; width:500px; height:30px">
					<label for="firstname"><font size="3">First name:</font></label>
					<input type="text" id="firstname" name="firstname" size="35"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name"/>
				</div>
				<div align="left"  style="position:absolute; left:216px; top:1155px; padding:0px; width:500px; height:30px">
					<label for="lastname"><font size="3">Last name:</font></label>
					<input type="text" id="lastname" name="lastname" size="35"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name"/>
				</div>		
			<div align="left" style="position:absolute; left:187px; top:1185px; padding:0px; width:500px; height:30px">
					<label for="email"><font size="3">Email Address:</font></label>
					<input type="text" id="email" name="email" size="35"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address"/>
				</div>		
				<div align="left" style="position:absolute; left:305px; top:1220px; padding:0px; width:500px; height:30px">
					<input type="submit" value="Submit" name="submit" name="submit" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" />
				</div>
			</div>
			</form>
		
		
		
		
		
		
	
	
	</div>					
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 260px; top: 1050px">
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




