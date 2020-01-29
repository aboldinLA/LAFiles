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

<div align="left" style="position: absolute; left:5px; top:-14px">        
	<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<p><font style="font-size:18px"><strong>Association Management Center</strong></font></p>
	</div>
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
		Thank You for keeping your association profile up to date.
	</div>	
		
	<div style="width:600px; font-family:'Times New Roman', Times, serif; font-size:16px; font-style:italic">
		More than 50,000 landscape professionals use LandscapeOnline.com every month.
	</div><br>

	<div style="width:600px; font-family:'Times New Roman', Times, serif; font-size:16px">
		Be sure to double-check your membership demographic search categories on Page 2!<br><br>
		<strong>Events - Trade Shows - Programs -</strong> The LandscapeOnline Calendar of Events is one of the most popular stops on the website. Feel Free to list all of your upcoming events on Page 3.
	</div><br><br>


	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#C60">
		Association Login:
	</div>	
		
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:14px">
		To update association information or to update your association profile:
	</div><br>	
	
	<div style="width:600px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
		Please Enter Your Association Password Here
	</div>		
	
		
	<div style="position:absolute; left:40px; top:270px; padding:0px; width:600px">
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

<div style="position:absolute; left:10px; top:325px; padding:0px; font-size:12px; width:250px">
		If you do not know your association password please fill out the form below and an email will be sent with your password.
</div>

<div align="left" style="position:absolute; left:0px; top:385px; padding:0px; width:600px">
	<hr /><br />
</div>

<!-- <div align="left" style="position:absolute; left:5px; top:425px; padding:0px; width:500px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	Locate Your Password
</div>	

<div style="position:absolute; left:0px; top:455px; padding:0px; width:500px">
	<img src="/member/images/label.jpg">
</div> -->


<div align="left" style="position:absolute; left:0px; top:415px; padding:0px; width:500px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	Lost Password
</div>	

<form action="report-assoc.php" method="POST">

	<div align="left" style="position:absolute; left:5px; top:445px; padding:0px; width:500px; height:30px">
		<label for="firstname">Association Name:</label>
		<input type="text" id="assocname" name="assocname" />
	</div>
	<div align="left" style="position:absolute; left:40px; top:475px; padding:0px; width:500px; height:30px">
		<label for="firstname">First name:</label>
		<input type="text" id="firstname" name="firstname" />
	</div>
	<div align="left"  style="position:absolute; left:40px; top:505px; padding:0px; width:500px; height:30px">
		<label for="lastname">Last name:</label>
		<input type="text" id="lastname" name="lastname" />
	</div>		
<div align="left" style="position:absolute; left:20px; top:535px; padding:0px; width:500px; height:30px">
		<label for="email">Email Address:</label>
		<input type="text" id="email" name="email" />
	</div>		
	<div align="left" style="position:absolute; left:75px; top:565px; padding:0px; width:500px; height:30px">
		<input type="submit" value="Submit" name="submit" />
	</div>
</div>
</form>

<div align="left" style="position:absolute; left:0px; top:665px; padding:0px; width:1000px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	&nbsp;
</div>	
	
