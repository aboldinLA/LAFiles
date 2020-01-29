<?
	include("lo_top-main2-tle-b.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
    
<?
	include $include_path . "lo_header-main2-tle-a.inc";
?>
 
	</div>


<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
    
 	<tr>
		<td><img src="https://landscapearchitect.com/TLE-LB/images/tle17-homepage.jpg"> </td>
	</tr>   
 
    
</table>

<div style="position: absolute; left: 10px; top: 177px; z-index: 2000; width: 1040px">
	<table>
		<tr>
			<td style="width: 1024px; height: 40px; background-color: #294330">&nbsp;</td>
		</tr>
	</table>
</div>


<?
	include("lo_top-main2-bar-tle-a.inc");
?>

<div>	
	<table width="1024">
		<tr>
			<td valign="top" width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
			include("lo_top-main2-side2-js10-tle.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
			
				
			</td>
			
			
			
			<td width="784">
				<table>
					<tr valign="top">
						<td valign="top" width="634" style="padding-left: 0px; position: relative; top: 75px">
						
						
							<!-- Do Not Change Above -->
							<!-- Center Column Start -->
						
							<!-- Content -->
									<section>
    									<center>
                                        <div style="position:relative; left: 0px; top:-50px">
                                        <table>
                                            <tr>
                                                <td>
                                                <div>
                                                    <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span>
                                                    							<center><h3 style="font-family: Helvetica, Arial, sans-serif">The Landscape Expo 2017</h3></center><br />
                                                    <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>EXPRESS Registration Center</center></span><br />
                                                    
                                                    	<p style="color:#1663BD">To register 3 or more attendees, <span id="bold-it"><a href="https://landscapearchitect.com/TLE-LB/images/TLE-LB17-Multiple-Attendee-Registration.pdf" target="_blank">click here to download the multi-registration form.</a></span></p><br />  

                                                    
                                                    
                                                    
                                                    
                                                    <span style="font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Please Enter Your Password Here</center></span><br />
                                                </div>
                                                </div>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        
                                                    <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
                                                    <table border=0 cellpadding=0 cellspacing=5>
                                                        <? if ($t == "ad") {?>
                                                        <tr>
                                                            <td>Login:</td>
                                                            <td><input type="text" name="email" MAXLENGTH="45" width="30px" value=""></td>
                                                        </tr>
                                                        <? } ?>
                                                        <tr>
                                                            <td> </td><td><input type="password" name="password" MAXLENGTH="10" style="background-color:#C2C0C0; height: 20px; width: 250px; padding: 3px" placeholder="Please Enter Your Password">
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
                                                        <tr><td style="line-height:5px">&nbsp;</td></tr>
                                                        <tr>
                                                        <?
                                                            if ( !$_SESSION['np'] && $t == "ad"){
                                                                $new_npage = "/private/index.php";
                                                            } else 	if ( !$_SESSION['np'] && $t == "v"){
                                                            $new_npage = "/subscriptions/subscribe-lb-19.php?action=edit";
                                                            } else {
                                                            $new_npage = "/subscriptions/subscribe-lb-19.php?action=edit";
                                                            }
                                                        ?>
                                                            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Login" style="width: 175px; height: 30px; padding: 3px; font-size: 16px; font-weight: bold; background-color: darkgoldenrod">
                                                                <input type="hidden" name="npage" value="<?=$new_npage?>">
                                                                <input type="hidden" name="action" value="login">
                                                                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                                                            </td>
                                                        </tr>
                                                    </table>


                                		</center>
									</section>
			

							
							
							
								
  
			
			</td>
			<td valign="top" width="150"  style="position: relative; left: -30px; top: 13px"><p>
				
				<center><h3 style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px">Sponsors</h3></center>
				
									<?
									
										// Banner Ads Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 


										// start for the banner add counting and getting from table

											$key = "TLE-LB-17trans";

											$sql = "SELECT * FROM banner_ups2 WHERE web like '%" . $key . "%' ORDER BY active ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "10") {
													echo '<center><a href="https://landscapearchitect.com/TLE-LB/transfer/' . $row[web] . '" target="_blank"><img width="125px" src="https://landscapearchitect.com/TLE-LB/images/sponsors/' . $row[picture] . '" alt="Thumbnail Image 1" class="img-responsive"></a></center><br>';
										 			$i++;
     											}
											}
									?>
				
				
				
				</p></td>
					</tr>
				</table>
	




						
							
								
  
			
			</td>
			
			
			
		</tr>
	</table>
	




	








<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  

</div>


<div   style="position: absolute; left: -575px; top: 0px">
<?
 include("lo_top-main2-bottom-tle-a.inc");
?>
</div>

<?
include("lo_footer-main2-new.inc");
?>



