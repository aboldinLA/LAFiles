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
        width:525px;
        height:1400px;
    }
    .box2 {
        position:absolute;
        left:435px;
        top:295px;
        padding:0px;
        width:274px;
        height:30px;
    }
    .box3 {
        position:absolute;
        left:660px;
        top:594px;
        padding:0px;
        width:274px;
        height:30px;
    }
    .box4 {
        position:absolute;
        left:610;
        top:660px;
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
            <img src="https://landscapearchitect.com/member/images/subscriber-back2.jpg" alt=
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
			            $new_npage = "/vendor/profile.php?action=edit";
		            } else {
			            $new_npage = $_SESSION['np'];
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
<div class="box3">
    <div class="para0">
         <a href="mailto:vendor_admin@landscapeonline.com?subject=Request For Lost Password"><font face="times" font size="3"><strong>"Here"</strong></font></a>
	</div>
</div>
<div style="position:absolute; left:450px; top:665px; padding:0px; width:200px">
    <div class="para0">
         <p><font face="times" font size="2">1) Company Name:</font></p>
         <p><font face="times" font size="2">2) Email if different than above:</font></p>
         <p><font face="times" font size="2">3) Your Name:</font></p>
	</div>	
</div>
