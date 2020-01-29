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

	<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<span style="font-size:32px; font-weight:bold; font-family:Arial, Helvetica, sans-serif">Welcome to the</span><br><br>
	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" align="top" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="295" align="top" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />
	<span style="font-size:32px; font-weight:bold">Association Management Center</span><br></p>
	</div>
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:24px; line-height: 1.5em">
		<strong>Inside you can</strong><br>
		<span style="padding:0px; width:685px; font-size:20px; color:#000; font-weight:bold; line-height: 1.5em">
	<center>Add Events <br>
	Update Your Profile <br>
	Update Your Contact Information </center></span>
	</div><br><br>	
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
		Please Enter Your Association Password Here
	</div>
		
	<div style="padding:0px; width:600px">
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

<div style="padding:0px; font-size:12px; width:250px">
		If you do not know your association password please fill out the form below and an email will be sent with your password.
</div>

<div style="padding:0px; width:600px">
	<br><hr /><br />
</div>

<!-- <div align="left" style="position:absolute; left:5px; top:725px; padding:0px; width:500px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	Locate Your Password
</div>	

<div style="position:absolute; left:0px; top:755px; padding:0px; width:500px">
	<img src="/member/images/label.jpg">
</div> -->

<div style="padding:0px; width:800px; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#C60">
	<center>Lost Password</center>
</div>

<div style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<i>Please fill out the form below and it will be emailed to you. <br>
		(*All fields are required)</i>
	</div>

<form action="mailback4.php" method="POST">

	<div align="left" style="position:absolute; left:280px; top:700px; padding:0px; width:500px; height:30px">
		<label for="firstname">Name:</label>
		<input type="text" id="firstname" name="firstname" size="12" />&nbsp;<input type="text" id="lastname" name="lastname" size="22" />
	</div>
	<div align="left" style="position:absolute; left:253px; top:730px; padding:0px; width:500px; height:30px">
		<label for="firstname">Association:</label>
		<input type="text" id="assocname" name="assocname" size="32" />
	</div>	
	<div align="left" style="position:absolute; left:239px; top:760px; padding:0px; width:500px; height:30px">
		<label for="email">Email Address:</label>
		<input type="text" id="email" name="email" size="32" />
	</div>		
	<div align="left" style="position:absolute; left:380px; top:790px; padding:0px; width:500px; height:30px">
		<input type="submit" value="Submit" name="submit" />
	</div>
</div>
</form>

<div align="left" style="position:absolute; left:0px; top:965px; padding:0px; width:1000px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	&nbsp;
</div>	
	
