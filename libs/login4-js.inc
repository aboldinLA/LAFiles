
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


	
	<div style="width:763px; font-family:Arial, Helvetica, sans-serif; font-size:24px; line-height: 1.5em">
		<center><strong>Inside you can</strong><br>
		<span style="padding:0px; width:685px; font-size:20px; color:#000; font-weight:bold; line-height: 1.5em">
	Add Events <br>
	Update Your Profile <br>
	Update Your Contact Information</center> </span>
	</div><br><br>	
	
	<div style="width:763px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
		<center>Please Enter Your Association Password Here</center>
	</div>
		
	<div style="padding:0px; width:763px">
    	<center><form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
 			<table border=0 cellpadding=0 cellspacing=5>
			    <? if ($t == "ad") {?>
			    <tr>
				    <td>Login:
				    <td><input type="text" name="email" MAXLENGTH="45" value="" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
			    </tr>
			    <? } ?>
			    <tr>
					<td><input type="password" name="password" MAXLENGTH="10" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Password">
                    <script type="text/javascript" lang="javascript">
 
                    </script>
		            </td>
		        </tr>
				<tr>
					<td align="center" colspan=2 style="line-height:5px">&nbsp;</td>
				</tr>
			    <tr>
		        <?
		            if ( !$_SESSION['np'] && $t == "ad"){
			            $new_npage = "/private/index.php";
		            } else 	if ( !$_SESSION['np'] && $t == "v"){
			            $new_npage = "/industry/associat_list.php?action=edit";
		            } else {
			            $new_npage = "/industry/associat_list-.php?action=edit";
		            }
		        ?>
		            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Enter" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888">
		                <input type="hidden" name="npage" value="<?=$new_npage?>">
		                <input type="hidden" name="action" value="login">
		                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                    </td>
                </tr>
            </table>
	</div>
</div>

<div style="position:relative; left:250px; top:5px; padding:0px; font-size:12px; width:250px">
		<center>If you do not know your association password please fill out the form below and an email will be sent with your password.</center>
</div>

<!-- Horizontal Bar Start -->
<div style="position:relative; left:0px; top:20px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->

<div style="position:relative; left:0px; top:30px; padding:0px; width:763px; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#C60">
	<center>Lost Password</center>
</div>

<div style="position:relative; left:0px; top:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-style:italic; width:763px">
		<center>Please fill out the form below and it will be emailed to you. <br>
		(*All fields are required)</center>
	</div>

<form action="mailback4.php" method="POST">
	<div align="left" style="position:relative; left:200px; top:50px; padding:0px; width:763px; height:30px">
		<label for="firstname">Name:</label>
		<input type="text" id="firstname" name="firstname" size="12" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name" />&nbsp;<input type="text" id="lastname" name="lastname" size="22" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name"/>
	</div>
	<div align="left" style="position:relative; left:200px; top:50px; padding:0px; width:500px; height:30px">
		<label for="assocname">Association:</label>
		<input type="text" id="assocname" name="assocname" size="32" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Association Name"/>
	</div>	
	<div align="left" style="position:relative; left:200px; top:50px; padding:0px; width:500px; height:30px">
		<label for="email">Email Address:</label>
		<input type="text" id="email" name="email" size="32" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"  placeholder="Email Address"/>
	</div>		
	<div align="left" style="position:relative; left:340px; top:50px; padding:0px; width:500px; height:30px">
		<input type="submit" value="Submit" name="submit" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" />
	</div>
</div>
</form>

<div align="left" style="position:absolute; left:0px; top:965px; padding:0px; width:1000px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#C60">
	&nbsp;
</div>	
	
