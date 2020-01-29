<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;CHARSET=x-mac-roman">

<title>

</title>
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

<?$password = $_GET['password']?>


<div align="left" style="position: absolute; left:5px; top:-14px">        
	<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<p class="navigation-bar"><font style="font-size:16px" target="_blank"><strong>Association Login / Profile Management Center</strong></font></p>
	</div>
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
		Thank You for keepting your Profile up to date.
	</div>	
		
	<div style="width:600px; font-family:'Times New Roman', Times, serif; font-size:16px; font-style:italic">
		More than 50,000 landscape professionals use LandscapeOnline.com every month to find State-of-the-Art prducts, projects and research affecting their landscape business.
	</div><br><br>
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#C60">
		Member Login:
	</div>	
		
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:14px">
		To update assoication information or to update your association profile,<br> just enter your password. If you have ever given your email to<br>LandscapeOnline.com, you have a password.
	</div><br><br>	
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
		Please Enter Your Password Here
	</div>		
	
		
	<div style="position:absolute; left:40px; top:275px; padding:0px; width:600px">
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
			            $new_npage = "/industry/associat_list.php?action=edit";
		            } else {
			            $new_npage = "/industry/associat_list.php?action=edit";
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
</div>

<div style="position:absolute; left:10px; top:330px; padding:0px; font-size:12px; font-weight:bold; width:250px">
		<a href="https://landscapearchitect.com/industry/associat_list.php?action=new">If you have never been assigned a password, Click Here to Start a New Profile</a>
</div>

<div align="left" style="position:absolute; left:0px; top:380px; padding:0px; width:600px">
	<hr /><br />
</div>

<div align="left" style="position:absolute; left:175px; top:400px; padding:0px; width:500px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	Locate Your Password
</div>	

<div style="position:absolute; left:0px; top:430px; padding:0px; width:500px">
	<img src="/member/images/label.jpg">
</div>

<div align="left" style="position:absolute; left:0px; top:615px; padding:0px; width:600px">
	<hr /><br />
</div>

<div align="left" style="position:absolute; left:0px; top:640px; padding:0px; width:500px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	Lost Password
</div>	

<form action="mailback.php" method="POST">
	<div align="left" style="position:absolute; left:20px; top:680px; padding:0px; width:500px; height:30px">
		<label for="firstname">First name:</label>
		<input type="text" id="firstname" name="firstname" />
	</div>
	<div align="left"  style="position:absolute; left:20px; top:710px; padding:0px; width:500px; height:30px">
		<label for="lastname">Last name:</label>
		<input type="text" id="lastname" name="lastname" />
	</div>		
<div align="left" style="position:absolute; left:0px; top:740px; padding:0px; width:500px; height:30px">
		<label for="email">Email Address:</label>
		<input type="text" id="email" name="email" />
	</div>		
	<div align="left" style="position:absolute; left:75px; top:770px; padding:0px; width:500px; height:30px">
		<input type="submit" value="Submit" name="submit" />
	</div>
</div>
</form>

<div align="left" style="position:absolute; left:0px; top:640px; padding:0px; width:1000px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	&nbsp;
</div>	
	
