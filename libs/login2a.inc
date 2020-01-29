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



<div align="center" style="position: absolute; left:0px; top:-14px; width:750px">        
	<span style="font-size:32px; font-weight:bold">Welcome to the</span>
    <center><img src="https://landscapearchitect.com/lol-logos/lo-DBMS-logo-800.jpg" width="500" /></center><br />
	<span style="font-size:30px; font-weight:bold">Vendor Profile Management Center</span>
		<center><span style="font-size:14px" width-"500">The largest landscape-oriented database on the internet.
More than 50,000 commercial landscape <br>professionals visit LandscapeOnline every month.
Many visitors are looking for the products <br>and services you provide, both nationally and locally.<br />
		</span><br>
		
</div>

	<div style="position: absolute; left:0px; top:250px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:19px; font-weight:bold">
		To Edit Your Vendor Profile <br>Please Press Enter
	</div>
	
		<div style="position: absolute; left:5px; top:300px; padding:0px; width:750px">
    	<form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
 			<table border=0 cellpadding=0 cellspacing=5>

			    <tr>
					<? $password =  $_GET["password"]; ?>
				    <td><input type="text" size="14" maxlength="20" name="password" value="<? echo $password ?>" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:20px; background-color:#CCC; box-shadow: 5px 5px 5px #888888; text-align:center" />
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
		            <td align="center"><INPUT TYPE="submit" VALUE="Enter" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; background-color:#a67d3b; width:105px; height:20px; box-shadow: 5px 5px 5px #888888">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login">
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>




