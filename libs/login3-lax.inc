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

<div align="center" style="position: absolute; left:5px; top:-14px"> 

	<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<span style="font-size:32px; font-weight:bold; font-family:Arial, Helvetica, sans-serif">Welcome to the</span><br><br>
	<center><img src="https://landscapearchitect.com/lol-logos/LDX-LB-2015-w_tag-BIG.jpg" width="425" align="top" /></center><br />
	<span style="font-size:32px; font-weight:bold">Express Badge Registration</span><br></p>
	</div>
		
	<!-- <div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:24px; line-height: 1.5em">
		<strong>Inside you can</strong><br>
		<span style="padding:0px; width:685px; font-size:20px; color:#000; font-weight:bold; line-height: 1.5em"><center>Begin a New Subscription <br>
	Renew an Existing Subscription <br>
	Update your Demographic & Contact Information <br>
	Request Product Information from Vendors</center></span>
	</div> --><br><br>	
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
		Please Enter Your Password Here
	</div>		
	
		
	<div style="position:absolute; left:70px; top:390px; padding:0px; width:600px">
    	<form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
			<table border=0 cellpadding=0 cellspacing=5>
			    <? if ($t == "ad") {?>
			    <tr>
				    <td>Login:
				    <td><input type="text" name="email" MAXLENGTH="45" value="">
			    </tr>
			    <? } ?>
			    <tr>
				    <td> </td>
					<td align="center"><input type="password" name="password" MAXLENGTH="10" size="35">
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
			            $new_npage = "/subscriptions/subscribe-lax-2015.php?action=edit";
		            } else {
			            $new_npage = "/subscriptions/subscribe-lax-2015.php?action=edit";
		            }
		        ?>
		            <td align="center" colspan="2"><INPUT TYPE="submit" VALUE="Click Here To Enter" style="height: 25px; width: 200px; font-size:18px; background:#a6d1c3; vertical-align:central; alignment-adjust:central"  align="center">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login">
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
</div>

<div style="position:absolute; top:450px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px"><br>
		<span style="font-size:24px">Do You Have A Password?</span><br>
		<i>To Manage Your Subscription & Demographics <br>Profile You Need Your Password</i>
	</div><br><br>	

<div style="position:absolute; left:208px; top:550px; padding:0px; font-size:18px; font-weight:bold; width:350px">
		If You Have Never Signed Up Before Please <a href="https://landscapearchitect.com/subscriptions/subscribe-lax-2015.php?action=new">Click Here</a> To Begin.
</div>

<div align="left" style="position:absolute; left:80px; top:590px; padding:0px; width:600px">
	<hr /><br />
</div>

<div align="left" style="position:absolute; left:165px; top:600px; padding:0px; width:460px; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#06C">
	<center>Locate Your Password On Your Magazine Label</center>
</div>	

<div style="position:absolute; left:-10px; top:630px; padding:0px; width:800px">
	<center><img src="/member/images/label-1.jpg" width="500"></center>
</div>

<div align="left" style="position:absolute; left:80px; top:925px; padding:0px; width:600px">
	<hr /><br />
</div>

<!-- <div align="left" style="position:absolute; left:0px; top:950px; padding:0px; width:800px; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#C60">
	<center>Lost Password</center>
</div>	

<div style="position:absolute; left:20px; top:1080px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<i>Please fill out the form below and it will be emailed to you. <br>
		(*All fields are required)</i>
	</div>

<form action="mailback.php" method="POST">
	<div align="left" style="position:absolute; left:285px; top:1030px; padding:0px; width:500px; height:30px">
		<label for="firstname"><font size="3">First name:</font></label>
		<input type="text" id="firstname" name="firstname" size="35" />
	</div>
	<div align="left"  style="position:absolute; left:286px; top:1060px; padding:0px; width:500px; height:30px">
		<label for="lastname"><font size="3">Last name:</font></label>
		<input type="text" id="lastname" name="lastname" size="35" />
	</div>		
<div align="left" style="position:absolute; left:257px; top:1090px; padding:0px; width:500px; height:30px">
		<label for="email"><font size="3">Email Address:</font></label>
		<input type="text" id="email" name="email" size="35" />
	</div>		
	<div align="left" style="position:absolute; left:375px; top:1125px; padding:0px; width:500px; height:30px">
		<input type="submit" value="Submit" name="submit" /> -->
	</div>
</div>
</form>

<div align="left" style="position:absolute; left:0px; top:1020px; padding:0px; width:1000px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	&nbsp;
</div>	
	
