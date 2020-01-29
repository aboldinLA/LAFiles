<?

?>
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
        font-size:24px;
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
        left:235px;
        top:650px;
        padding:0px;
        width:274px;
        height:75px;
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
	.submit input{
		color: #000;
        font-size:24px;
		background: #ffa20f;
		border: 2px outset #d7b9c9
	} 
 -->
</style>
</head>

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<?$password = $_GET['password']?>
<?$Firstname = $_GET['Firstname']?>

<div align="left" style="position: absolute; left:5px; top:-44px">        
	<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<div style="font-size:40px; font-weight:bold"><br><center>Welcome</center><br>
	</div>
	
	<div style="position:absolute; left:10px; top:895px; padding:0px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-style:italic">
		<center>Thank You for keeping your Subscription Information up to date.<br>
		Need Assistance? Call (714) 979-5276 ext. 115 <br>Monday-Friday 8:00am-5:00pm Pacific Time</center>
	</div>	
	
	<div style="position:absolute; left:0px; top:95px; padding:0px; width:750px; font-size:72px; color:#000; font-weight:bold; font-family:'MS Serif', 'New York', serif"><i><center><?php echo $Firstname ?></center></i></div>
	
	<div style="font-size:32px; font-weight:bold"><center><br>to the</center>
	</div>
	
	<div style="position:absolute; top:193px; font-size:32px; font-weight:bold">
	<br>
    <center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="345" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="345" align="top" /></center>
	<table width="770" border="0" padding="50">
  <tr>
    <td><center><font size="3">The Industry Trade Magazine For<br>
Commercial Landscape Specifiers Nationwide</font></center></td>
    <td><center><font size="3">Projects, Products & News For Landscape<br>
Contractors & Superintendents Nationwide</font></center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	</div>
	
	<div style="position:absolute; left:230px; top:393px; font-size:32px; font-weight:bold">
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="375" /></center>
	</div>
	<div style="position:absolute; left:190px; top:493px; font-size:11px">
    <center><font size="3">Your Weekly Source of Industry News, Features <br>
& Product Introductions for <i>ALL</i> Landscape Professionals.</font></center><br />
	</div>
	
	
	<div style="position:absolute; left:7px; top:550px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px">
		<font style="font-size:60px" target="_blank"><strong><center>EXPRESS</center></strong></font>
	</div>
	
	<div style="position:absolute; left:7px; top:620px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px">
		<font style="font-size:40px" target="_blank"><strong><center>Subscription Management Center</center></strong></font>
	</div>
	
	<div style="position:absolute; left:7px; top:730px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px">
		<font style="font-size:26px" target="_blank"><strong><center>Inside you can</center></strong></font>
	</div>
	
	<div style="position:absolute; left:43px; top:760px; padding:0px; width:685px; font-size:20px; color:#000; font-weight:bold; line-height: 1.5em"><center>Begin a New Subscription <br>
	Renew an Existing Subscription <br>
	Update your Demographic &amp; Contact Information <br>
	Request Product Information from Vendors</center></div>
	
	

<div class="box2">
    <div class="submit">
            <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
 			<table border=0 cellpadding=0 cellspacing=5>
			    <? if ($t == "ad") {?>
			    <tr>
				    <td>Login:
				    <td><input type="text" name="email" MAXLENGTH="45" value="">
			    </tr>
			    <? } ?>
			    <tr>
				    <td> </td><td><input type="hidden" name="password" MAXLENGTH="10" value="<?php echo $password ?>">
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
			            $new_npage = "/subscriptions/subscribe-js.php?action=edit";
		            } else {
			            $new_npage = "/subscriptions/subscribe-js.php?action=edit";
		            }
		        ?>
		            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Click Here to Enter">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login" size=40>
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
</div>


	
