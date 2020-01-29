
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
        left:450px;
        top:320px;
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

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
<table border="0" cellspacing="0" cellpadding="0" align="left">
    <tr>
        <td valign="top" width="763" height="1400">
        <div class="box1">
            <img src="https://landscapearchitect.com/member/images/subscriber-back-tle.jpg" alt=
            "contact-back.jpg" width="763" border="0"></div>
        </td>
    </tr>
    
</table>
<div class="box2">
    <div class="para0">
            <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
 			<table border=0 cellpadding=0 cellspacing=5>
			    <? if ($t == "ad") {?>
			    <tr>
				    <td>Login:</td>
				    <td><input type="text" name="email" MAXLENGTH="45" value=""></td>
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
			            $new_npage = "/subscriptions/subscribe-tle-js.php?action=edit";
		            } else {
			            $new_npage = "/subscriptions/subscribe-tle-js.php?action=edit";
		            }
		        ?>
		            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Login">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login">
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
</div>

<div style="position:absolute; left:320px; top:390px; padding:0px; font-size:18px; font-weight:bold; width:400px">
		If you don't have a password,<br>
		<a href="https://landscapearchitect.com/subscriptions/subscribe-tle-js.php?action=new">Click Here.</a>
</div>


<form action="mailback.php" method="POST">
	<div style="position:absolute; left:255px; top:760px; padding:0px; width:500px; height:30px">
		<label for="firstname">First name:</label>
		<input type="text" id="firstname" name="firstname" />
	</div>
	<div style="position:absolute; left:255px; top:790px; padding:0px; width:500px; height:30px">
		<label for="lastname">Last name:</label>
		<input type="text" id="lastname" name="lastname" />
	</div>		
<div style="position:absolute; left:245px; top:820px; padding:0px; width:500px; height:30px">
		<label for="email">Email Address:</label>
		<input type="text" id="email" name="email" />
	</div>		
	<div style="position:absolute; left:285px; top:850px; padding:0px; width:500px; height:30px">
		<input type="submit" value="Submit" name="submit" />
	</div>
</form>


	
