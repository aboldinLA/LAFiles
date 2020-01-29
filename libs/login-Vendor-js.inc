
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
        left:110px;
        top:755px;
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

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<?$password = $_GET['password']?>
<?$Company = $_GET['Company']?>


<div style="position: absolute; left:5px; top:-14px">  
	
	<div style="font-size:32px; font-weight:bold"><br>Welcome<br>
    <font size="36"><center><?php echo $Company ?></center></font>
	</div>
	
	<div style="font-size:32px; font-weight:bold">to the<br>
    <center><img src="https://landscapearchitect.com/lol-logos/lo-DBMS-logo-800.jpg" width="375" /></center><br />
	</div>
	      
	<div style="top:830px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<font style="font-size:36px" target="_blank"><strong>Vendor Profile Management Center</strong></font>
	</div>
	
	
<div class="box2" style="position: absolute; left:110px; top:320px">
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
				    <td> </td><td><input type="hidden" name="password" MAXLENGTH="10" value="<?php echo $password ?>" >
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
			            $new_npage = "/vendor/index-vendor.php?action=edit";
		            } else {
			            $new_npage = "/vendor/index-vendor.php?action=edit";
		            }
		        ?>
		            <td align="left" colspan=2><INPUT TYPE="submit" VALUE="Click Here To Open Management Center">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login">
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
</div>	
	
	
	
	
	
	
	
	<div style="position:absolute; left:80px; top:850px; padding:0px; width:600px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-style:italic">
		Thank You for keeping your Profile up to date!
	</div>	
	
	<div style="position:absolute; left:30px; top:410px; padding:0px; width:685px; font-size:18px; color:#000; font-weight:bold"><center>50,000 Commercial Landscape Professionals visit<br>
	LandscapeOnline.com every month; many visit just to<br>
	search for products and vendors.</center></div>
	
	<div style="position:absolute; left:7px; top:480px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px">
		<font style="font-size:26px" target="_blank"><strong>Inside the Vendor Profile <br>Management Center</strong></font>
	</div>
	
	<div style="position:absolute; left:7px; top:550px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:14px">
		<font style="font-size:24px" target="_blank"><strong>You Can Edit/Update Your: <br></strong></font>
	</div>
	
	<div style="position:absolute; left:30px; top:590px; padding:0px; width:685px; font-size:18px; color:#000; font-weight:bold"><center>Company Contact Information <br>Company Profile <br>Company Product/Search Categories <br>Product Profiles <br><b><font size="18"> New Service</font></b> <br>Find & Download Your Sales Leads!</center></div>


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
				    <td> </td><td><input type="hidden" name="password" MAXLENGTH="10" value="<?php echo $password ?>" >
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
			            $new_npage = "/vendor/profile.php?action=edit";
		            }
		        ?>
		            <td align="left" colspan=2><INPUT TYPE="submit" VALUE="Click Here To Open Management Center">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login">
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
</div>


