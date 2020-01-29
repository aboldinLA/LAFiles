
<?
include '../../includes/la_top-common.php';
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
		include("../../includes/la_header-common.inc");
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	
	
		<?
			include("../../includes/la_banner-common.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("../../includes/la_left-side-common2.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
<div style="position: relative; left: 25px">
<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img style="width: 30%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" /><img style="width: 35%; padding-left: 50px" src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Association Management Center</center></span>
<div>


<!-- Old Code Start -->


<style type="text/css">
<!-- 
 
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
		Update Your Contact Information </center></span>
	</div>	
	
	<div style="position:relative; left:200px; top:10px; width:763px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
		Please Enter Your Association Password Here
	</div>
		
	<div style="position:relative; left:300px; top:10px; padding:0px; width:763px">
    	<form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
 			<table border=0 cellpadding=0 cellspacing=5>
				<? if ($t == "ad") {?>
			    <tr>
					<td>Login:</td>
				    <td><input type="text" name="email" MAXLENGTH="45" value="" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
			    </tr>
			    <? } ?>
			    <tr>
					<td><input type="password" name="password" MAXLENGTH="10" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Password">
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
					<td style="line-height:5px">&nbsp;</td>
				</tr>
			    <tr>
		        <?
		            if ( !$_SESSION['np'] && $t == "ad"){
			            $new_npage = "/private/index.php";
		            } else 	if ( !$_SESSION['np'] && $t == "v"){
			            $new_npage = "/industry/List-Association.php?action=edit";
		            } else {
			            $new_npage = "/industry/List-Association.php?action=edit";
		            }
		        ?>
					<td align="center" colspan=2><INPUT TYPE="submit" VALUE="Enter" style="height:30px; width:110px; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:5px; box-shadow: 5px 5px 5px #888888">
		            <input type="hidden" name="npage" value="<?=$new_npage?>">
		            <input type="hidden" name="action" value="login">
		            <input type="hidden" name="t" value="<?=$t?>"></FORM>
					</td>
                </tr>
            </table>
	</div>
</div>

<div style="position:relative; left:260px; top:15px; padding:0px; font-size:12px; width:250px">
		<center>If you do not know your association password please fill out the form below and an email will be sent with your password.</center>
</div>

<!-- Horizontal Bar Start -->
<div style="position:relative; left:0px; top:30px; padding:0px; width:763px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->

<div style="position:relative; left:0px; top:40px; padding:0px; width:763px; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#C60">
	<center>Lost Password</center>
</div>

<div style="position:relative; left:20px; top:40px; font-family:Arial, Helvetica, sans-serif; font-size:16px; ; font-style:italic">
		<center>Please fill out the form below and it will be emailed to you. <br>
		(*All fields are required)</center>
</div>

<form action="mailback4.php" method="POST">
	<div align="left" style="position:relative; left:200px; top:50px; padding:0px; width:500px; height:30px">
		<label for="firstname">Name:</label>
		<input type="text" id="firstname" name="firstname" size="12" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name"/>&nbsp;<input type="text" id="lastname" name="lastname" size="22" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name"/>
	</div>
	<div align="left" style="position:relative; left:200px; top:50px; padding:0px; width:500px; height:30px">
		<label for="firstname">Association:</label>
		<input type="text" id="assocname" name="assocname" size="35" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Association Name"/>
	</div>	
	<div align="left" style="position:relative; left:200px; top:50px; padding:0px; width:500px; height:30px">
		<label for="email">Email Address:</label>
		<input type="text" id="email" name="email" size="32" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address"/>
	</div>		
	<div align="left" style="position:relative; left:350px; top:50px; padding:0px; width:500px; height:30px">
		<input type="submit" value="Submit" name="submit" style="height:30px; width:110px; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:5px; box-shadow: 5px 5px 5px #888888"/>
	</div>
</div>
</form>


				
				
	</div>
				
				


				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 265px; top: 25px">
		<? include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
    include("../../includes/lo_footer-main2-new.inc");
?>




