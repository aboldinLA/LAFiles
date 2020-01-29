<div class="tle-container"> 
  <div class="clear"></div>
  <div align="center">
    
  <div align="left" class="left1">


 </div>
  
  <div class="center1">
  <div align="center">

 <!-- Add Content Below this line--> 
 
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
        left:0px;
        width:763px;
        height:1400px;
    }
    .box2 {
        position:absolute;
        left:275px;
        top:275px;
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

<table border="0" cellspacing="0" cellpadding="0" align="left">
    <tr>
        <td style="position:absolute; left:175px; top:25px">
        <div>
            <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span>
            <center><img src="https://landscapearchitect.com/lol-logos/TLE-SAC-2015-Logo-800.jpg" width="375"></center><br />
            <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Express Registration</center></span><br />
            <span style="font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Enter Password Here</center></span><br />
        </div>
        </div>
        </td>
    </tr>
</table>

<div class="box2">
    <div class="para0">
            <form method="post" action="<? # echo $PHP_self?>" name="loginform" id="loginf">
            <table border=0 cellpadding=0 cellspacing=5>
                <?php if ($_REQUEST['t']=='ad') {?>
                <tr>
                    <td>Login:</td>
                    <td><input type="text" name="email" MAXLENGTH="45" value=""></td>
                </tr>
                <? } ?>
                <tr>
                    <td> </td><td><input type="password" name="password" MAXLENGTH="10" >
                    <script type="text/javascript" lang="javascript">
                    <!--
                        <?php if ($_REQUEST['t']=='ad') { ?>
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
                    if ( !$_SESSION['np'] && $_REQUEST['t']=='ad' ){
                        $new_npage = "/private/index.php";
                    } else  if ( !$_SESSION['np'] && $_REQUEST['t']=='v'){
                        $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                    } else {
                        $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                    }
                ?>
                    <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Login">
                        <input type="hidden" name="npage" value="<?php echo $new_npage; ?>">
                        <input type="hidden" name="action" value="login">
                        <input type="hidden" name="t" value="<?php echo $_REQUEST['t']; ?>"></FORM>
                    </td>
                </tr>
            </table>
    </div>
</div>

<div style="position:absolute; left:155px; top:335px; padding:0px; font-size:18px; font-weight:bold; width:400px">
        If you don't have a password,<br>
        <a href="/subscriptions/subscribe-sac-2015.php?action=new">Click Here.</a>
</div>

<div style="position:absolute; left:-25px; top:375px; padding:0px; font-size:18px; font-weight:bold; width:400px">
    <img src="https://landscapearchitect.com/member/images/subscriber-back-tle.jpg" alt="contact-back.jpg" width="763" border="0">

</div>


<form action="mailback.php" method="POST">
    <div style="position:absolute; left:120px; top:760px; padding:0px; width:500px; height:30px">
        <label for="firstname">First name:</label>
        <input type="text" id="firstname" name="firstname" />
    </div>
    <div style="position:absolute; left:120px; top:790px; padding:0px; width:500px; height:30px">
        <label for="lastname">Last name:</label>
        <input type="text" id="lastname" name="lastname" />
    </div>      
<div style="position:absolute; left:110px; top:820px; padding:0px; width:500px; height:30px">
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email" />
    </div>      
    <div style="position:absolute; left:165px; top:850px; padding:0px; width:500px; height:30px">
        <input type="submit" value="Submit" name="submit" />
    </div>
</form> 
 
 
 
 



 <!-- Add Content Above this line --> 
</div>
</div>
    
  <div class="right1">

<?
include $include_path . "tle-show-right-panel-2015.inc";
?>

  </div>    
  
  <div class="clear"></div>
</div>

