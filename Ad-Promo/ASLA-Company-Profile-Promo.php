
<? include("../../includes/ad-promo-form-capture.inc"); ?>

<style>
	#form input, #form textarea {
		width: 100%;
		font-size: 18px;
		padding: 5px;
		border: 1px solid #034ea2;
		background-color: #EDEDED !important;
	}
	
	#form label {
		margin-bottom: 5px;
	}
	
	#form {
		max-width: 600px;
		margin: 0 auto;
	}
	
	#itemSelection {
		width: 100%;
		margin-top: 20px; 
		text-align: center;
		margin-top: 20px;
		float: left;
		clear: both;
	}
	
	#itemSelection input {
		margin-bottom: 7px;
		width: 20px;
		height: 20px;
	}
</style>


<div style="max-width: 800px; margin: 0 auto; font-size: 18px; margin-bottom: 80px; font-family: Helvetica, Arial, sans-serif;">
	<img src="http://www.landscapearchitect.com/Ad-Promo/images/2019/<? echo $pageName ?>.jpg" width="100%" style="border: 1px solid #034ea2;">
	
	<? if($_GET['success'] == true){ ?>
			<div id="success" style="margin-top: 40px; text-align: center; font-size: 20px;"><strong>Thank You</strong>. We will be in contact with you as soon as possible.</div>
			
	<? } else { ?>
		<form action="<? echo $pageName ?>.php?success=true#success" method="post" onSubmit="return validate();" id="form">
			<h2 style="text-align: center; font-size: 30px; margin-top: 30px; margin-bottom:15px;">Sign Up Here</h2>
			<div style="width: 28%; float: left; margin-right: 4%;">
				<label for="firstName">First Name: </label><br>
				<input type="text" name="firstName" placeholder="First Name"  required />
			</div>
			<div style="width: 28%; float: left; clear: right;">
				<label for="lastName">Last Name: </label><br>
				<input type="text" name="lastName" placeholder="Last Name"  required />
			</div>
			<div style="width: 36%; float: right; clear: right;">
				<label for="company">Company: </label><br>
				<input type="text" name="company" placeholder="Company Name" />
			</div>	
			<div style="width: 48%; float: left; margin-top: 20px;">
					<label for="email">Email: </label><br>
				<input type="text" name="email" placeholder="Email" required />
			</div>	
			<div style="width: 48%; float: right; clear; right; margin-top: 20px;">
				<label for="phone">Phone Number: </label><br>
				<input type="text" name="phone" placeholder="Phone Number"  />
			</div>

			
			<div id="itemSelection">
				<div style="width: 32%; margin-right: 2%; float: left;">
					<input type="radio" id="item1" name="itemSelection" placeholder="Phone Number" value="1/3 Page Profile: $695"/><br>
					<label for="item1">1/3 Page Profile: <br>$695 </label>
				</div>
				<div style="width: 32%; float: left; clear: right;">
					<input type="radio" id="item2" name="itemSelection" placeholder="Phone Number" value="2/3 Page Profile: $1,295" /><br>
					<label for="item2">2/3 Page Profile: <br>$1,295 </label>
				</div>
				<div style="width: 32%; float: left; clear: right;">
					<input type="radio" id="item3" name="itemSelection" placeholder="Phone Number" value="Full Page Profile: $1,795" /><br>
					<label for="item3">Full Page Profile: <br>$1,795 </label>
				</div>
				
				
				
			</div>
			
			<div style="width: 100%; float: left; margin-top: 20px; margin-bottom: 20px;">
				<label for="lastName">Message: </label><br>
				<textarea name="message" placeholder="Message" style="width: 600px; height: 60px"></textarea>
			</div>
			
			<div style="width: 100%">
				<p style="font-size: 12px;"><strong>TERMS:</strong> Profiles - 2% 10,  net 30 Days from mail date. In the event that LCI incurs any legal or collection fees, client agrees to reimburse any and all collection fees as well as 1.5% monthly interest charges and frequency rate changes. The Publisher reserves the right to use previously run art work in the event that new art work does not meet deadlines.  * In months with ads appearing in the magazine</p>
			</div>
			
			<div style="text-align: center; clear: both;">
				<button type="submit" name="submitButton" style="font-size: 16px; padding: 4px; width: 100px;">Submit</button>
			</div>
			
		</form>
		
		<div style="width: 600px; margin: 0 auto; margin-top: 60px;">
			<h2 style="text-align: center; font-size: 30px; margin-top: 20px; margin-bottom: 10px;">Or</h2>
			<h2 style="text-align: center; font-size: 30px; margin-bottom: 20px;">Contact Your Advertising Representative</h2>

			<table style="text-align: center;  margin: 0 auto; font-size: 18px;" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td colspan="3" style="font-size: 17px">If Your Company Name Begins With <strong>A-L</strong> Contact...</td>
				</tr>
				<tr><td height="10px"></td></tr>
				<tr>
					<td><?php echo $salesOne[0] ?> &nbsp;-&nbsp; </td>
					<td>(714) 979-5276 x<?php echo $salesOne[1] ?> &nbsp;-&nbsp; </td>
					<td><a href="mailto:<? echo $salesOne[2] ?>?subject=Info%20Request%20on%20<? echo $pageName ?>%20Promo"><?php echo $salesOne[2] ?></a></td>
				</tr>
				<tr><td height="20px"></td></tr>
				<tr>
					<td colspan="3" style="font-size: 17px">If Your Company Name Begins With <strong>M-Z</strong> Contact...</td>
				</tr>
				<tr><td height="10px"></td></tr>
				<tr>
					<td><?php echo $salesTwo[0] ?> &nbsp;-&nbsp; </td>
					<td>(714) 979-5276 x<?php echo $salesTwo[1] ?> &nbsp;-&nbsp; </td>
					<td><a href="mailto:<? echo $salesTwo[2] ?>?subject=Info%20Request%20on%20<? echo $pageName ?>%20Promo"><?php echo $salesTwo[2] ?></a></td>
				</tr>
		</div>



	<? } ?>
	
</div>


<?
include("../includes/la_footer-common.inc");
?>

