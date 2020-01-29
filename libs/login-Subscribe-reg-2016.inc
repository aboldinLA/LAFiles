<?

include("lo_mo_top-main-tlereg-16-pg.inc");

$password = $_GET['password'];
$Firstname = $_GET['Firstname']

?>


				<!-- Top -->
					<article id="main">
						<header>
                        
						<center><table>
                        	<tr>
                            	<td>
                                    <img src="https://landscapearchitect.com/TLE-SAC/images/logo3.png" alt="" style="background: rgba(0, 0, 0, 0.75)" /><br>
                                    
                            	</td>
                           		<td>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>     
                                <td>
                                    <img src="https://landscapearchitect.com/TLE-LB/images/logo3.png" alt="" style="background: rgba(0, 0, 0, 0.75)" /><br>
                                    
                            	</td>
                           </tr>
                       </table></center><br>                            
                            
                            
							<center><span id="numralr3" style="background: rgba(0, 0, 0, 0.35);">Show Registration</span></center>
                            
							<ul class="actions">
                            
								<script>
									function myButtonFunction() {
    									alert("Registration Opening Soon");
									}
									
									function myButtonFunction2() {
    									alert("Hotel Reservations Opening Soon");
									}
								</script>                            
                            
							</ul>
                            
						</header>
						<section class="wrapper style5">
                            
                        <!-- Main2 -->
				<center><div id="main2">
					<div>
						<!-- Content -->
									<section>
                                    <center>
									<div id="adjus">
                                    <h3 id="numralh3">Welcome <span style="font-size:42px"><?php echo $Firstname ?></span> to the<br>
                                    Express Registration</h3><br>
                                    
                                    <table>
                                    	<tr>
                                        	<td>
                                        <div class="submit">
                                                <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
                                                <table border=0 cellpadding=0 cellspacing=5>
                                                    <? if ($t == "ad") {?>
                                                    <tr>
                                                        <td><label for="demo-name1">Login:</label></td>
                                                    </tr>
                                                    <? } ?>
                                                    <tr>
                                                        <td><input type="hidden" name="password" id="demo-name1" MAXLENGTH="10" value="<?php echo $password ?>" style="background-color:#C2C0C0; width:20em">
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
                                                            $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                                                        } else {
                                                            $new_npage = "/subscriptions/subscribe-sac-2016-js2.php?action=edit";
                                                        }
                                                    ?>
                                                        <td align="center" colspan=2><INPUT class="button special" TYPE="submit" VALUE="Click Here to Begin Sacramento Registration">
                                                            <input type="hidden" name="npage" value="<?=$new_npage?>">
                                                            <input type="hidden" name="action" value="login" size=40>
                                                            <input type="hidden" name="t" value="<?=$t?>"></FORM>
                                                        </td>
                                                    </tr>
                                                </table>
                                        </div>
                                        </td>
                                        
                                        <td>
                                        	&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        
                                        
                                        <td>
                                                                               <div class="submit">
                                                <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
                                                <table border=0 cellpadding=0 cellspacing=5>
                                                    <? if ($t == "ad") {?>
                                                    <tr>
                                                        <td><label for="demo-name1">Login:</label></td>
                                                    </tr>
                                                    <? } ?>
                                                    <tr>
                                                        <td><input type="hidden" name="password" id="demo-name1" MAXLENGTH="10" value="<?php echo $password ?>" style="background-color:#C2C0C0; width:20em">
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
                                                            $new_npage = "/subscriptions/subscribe-lb-2016-js2.php?action=edit";
                                                        } else {
                                                            $new_npage = "/subscriptions/subscribe-lb-2016-js2.php?action=edit";
                                                        }
                                                    ?>
                                                        <td align="center" colspan=2><INPUT class="button special" TYPE="submit" VALUE="Click Here to Begin Long Beach Registration" style="background-color:#3D3C3C">
                                                            <input type="hidden" name="npage" value="<?=$new_npage?>">
                                                            <input type="hidden" name="action" value="login" size=40>
                                                            <input type="hidden" name="t" value="<?=$t?>"></FORM>
                                                        </td>
                                                    </tr>
                                                </table>
                                        </div>        
                                        </td>
                                    </tr>
                                 </table>
                                                                            
  
       
                                  
                                        
                                        </center>

									</section>
							</div>
		
<?

include("lo_mo_footer-main-tlesac-16-pg.inc");

?>