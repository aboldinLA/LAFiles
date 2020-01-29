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
        left:275px;
        top:375px;
        padding:0px;
        width:274px;
        height:30px;
    }
    .box3 {
        position:absolute;
        left:525px;
        top:475px;
        padding:0px;
        width:274px;
        height:30px;
    }
    .box4 {
        position:absolute;
        left:285;
        top:532px;
        padding:0px;
        width:274px;
        height:30px;
    }
 -->
</style>
</head>

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
<?php $t = !empty($t)?$t:$_REQUEST['t']; ?>
<table border="0" cellspacing="0" cellpadding="0" align="left">
    <tr>
        <td valign="top" width="525" height="1400">
        <div class="box1">
            <img src="https://landscapearchitect.com/member/images/vendor-back-lci.jpg" alt=
            "contact-back.jpg" width="525" border="0"></div>
        </td>
    </tr>
    
</table>
<div class="box2" style="z-index: 2000">
    <div class="para0">
        <h1>here</h1>
            <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>" name="loginform" id="loginf">
            <table border=0 cellpadding=0 cellspacing=0>
                <?php if ($t == "ad" || $_REQUEST['t'] == 'ad') {?>
                <tr>
                    <td>Login:
                    <td><input type="text" name="email" MAXLENGTH="45" value="">
                </tr>
                <? } ?>
                <tr>
                    <td> </td><td><input type="password" name="password" MAXLENGTH="10" >
                    <script type="text/javascript" lang="javascript">
                    <!--
                    <?php
                        if ($t == "ad" || $_REQUEST['t'] == 'ad') { ?>
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
                    if ( !$_SESSION['np'] && ($t == "ad" || $_REQUEST['t'] == 'ad')){
                        $new_npage = "/private/index.php";
                    } else  if ( !$_SESSION['np'] && ($t == "v" || $_REQUEST['t'] == 'ad' )){
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
