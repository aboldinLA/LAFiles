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



<div align="center" style="position: absolute; left:0px; top:-14px; width:750px">        
	<span style="font-size:32px; font-weight:bold">Welcome to the</span>
    <center><img src="https://landscapearchitect.com/lol-logos/lo-DBMS-logo-800.jpg" width="500" /></center><br />
	<span style="font-size:30px; font-weight:bold">Vendor Profile Management Center</span>
		<center><span style="font-size:14px" width-"500">The largest landscape-oriented database on the internet.
More than 50,000 commercial landscape <br>professionals visit LandscapeOnline every month.
Many visitors are looking for the products <br>and services you provide, both nationally and locally.<br />
		</span><br>
		
</div>

	<div style="position: absolute; left:0px; top:250px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:19px; font-weight:bold">
		To Edit Your Vendor Profile <br>Please Enter Your Password Here is
	</div>
	
		<div style="position: absolute; left:5px; top:300px; padding:0px; width:750px">
    	<form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
 			<table border=0 cellpadding=0 cellspacing=5>
			    <? if ($t == "ad") {?>
			    <tr>
				    <td>Login:
				    <td><input type="text" name="email" MAXLENGTH="45" value="">
			    </tr>
			    <? } ?>
			    <tr>
				    <td> </td><td><input type="password" name="password" MAXLENGTH="10" >
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
		        <?
		            if ( !$_SESSION['np'] && $t == "ad"){
			            $new_npage = "/private/index.php";
		            } else 	if ( !$_SESSION['np'] && $t == "v"){
			            $new_npage = "/vendor/index-vendor.php?action=edit";
		            } else {
			            $new_npage = "/vendor/index-vendor.php?action=edit";
		            }
		        ?>
		            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Enter">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login">
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
	
	<div style="position: absolute; left:5px; top:375px; padding:0px; font-size:12px; font-weight:bold; width:750px"><font size="+1"> Never assigned a password?</font><br>
		<a href="https://landscapearchitect.com/vendor/signup/index2.php">Click Here</a>
</div>

<div align="left" style="position: absolute; left:5px; top:475px; padding:0px; width:750px">
	<hr  width="90%" noshade="noshade" />
</div>

<div align="left" style="position: absolute; top:500px; padding:0px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	<center><font size="+1"> Lost Vendor Password?</font><br>
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
	<div align="left" style="position: absolute; left:295px; top:570px; padding:0px; width:750px; height:30px">
		<label for="firstname">*First name:</label>
		<input type="text" id="firstname" name="firstname" />
	</div>
	<div align="left"  style="position: absolute; left:295px; top:600px; padding:0px; width:750px; height:30px">
		<label for="lastname">*Last name:</label>
		<input type="text" id="lastname" name="lastname" />
	</div>	
	<div align="left" style="position: absolute; left:268px; top:630px; padding:0px; width:750px; height:30px">
		<label for="company">*Company Name:</label>
		<input type="text" id="company" name="company" />
	</div>	
    <div align="left" style="position: absolute; left:277px; top:660px; padding:0px; width:750px; height:30px">
		<label for="email2">*Email Address:</label>
		<input type="text" id="email2" name="email2" />
	</div>		
	<div align="left" style="position: absolute; left:358px; top:700px; padding:0px; width:750px; height:30px">
		<input type="submit" value="Submit" name="submit" />
	</div>
</div>
</form>




