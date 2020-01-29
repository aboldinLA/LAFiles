
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
        left:-20px;
        top:85px;
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

<div align="left" style="position: absolute; left:5px; top:-14px">        
	<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<p class="navigation-bar"><font style="font-size:16px" target="_blank"><strong>Association EXPRESS Login</strong></font></p>
	</div>
	
	<div style="position:absolute; left:0px; top:165px; padding:0px; width:600px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-style:italic">
		Thank You for keepting your Profile up to date.<br>
		Just click on the button above to start the Registration Process.
	</div>	
	
	<div style="position:absolute; left:0px; top:70px; padding:0px; width:500px; font-size:24px; color:#000; font-weight:bold">Welcome: <?php echo $Firstname ?></div>

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
			            $new_npage = "/industry/associat_list.php?action=edit";
		            } else {
			            $new_npage = "/industry/associat_list.php?action=edit";
		            }
		        ?>
		            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Click Here to Begin">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login" size=40>
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
</div>


	
