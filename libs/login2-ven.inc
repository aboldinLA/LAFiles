<? 
	include '../modules/configuration.inc';
	include '../modules/db.php';
	include $rootInclude.'la-common-top-inner.php';

	include $rootInclude.'la-common-header-inner.inc'; 

	$t = $_GET['t'];
	
?>

<section class="tool_page full_width vendorPages">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBarNoSearch">

				
				<div class="white_side full_width">
					<h2 class="mobtoggle">ALL CATEGORIES</h2>
					<div class="full_width" id="mobile_slide">


						<!-- sidebar accordian menu -->
						<?
							 //include '../../includes/connect4.inc';
							 
//							$companyNamesFeatured = array();
//							$companyNames = array();
						
								include $rootInclude.'la-common-sidebar-menu.inc';
						?>


					 </div><!-- #mobslide --> 
        </div><!-- /.white_side -->
				
				
				<!-- banner ads 4-end left side -->
				<?
				
					$ad = $_GET['ad'];
					$ads = array();

					$sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND()";
					$result = $conn->query($sql);									

					while($row = mysqli_fetch_array($result)){
						array_push($ads, $row);
					}
					
					
					for($i = 6; $i < count($ads); $i++){
						if(!empty($ads[$i]['picture'])){
							echo '<div class="add__ full_width"><a href="' .  $ads[$i]['web'] . '"><img src="../banner/'  . $ads[$i]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
						}
					}	
				
				?>
			
        
        
    </div><!-- /.col-lg-3 -->
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">

    		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
                
							
							
							

          <img src="<?php echo BASE_URL; ?>lol-logos/3-logo-search-engines.jpg" width="100%" style="margin-top: 15px; display: block;"/><br />
					<h2 class="text-center loginHeader">Welcome to the<br> Vendor Profile Management Center</h2>
          
          <div class="row">
          
            <div class="col-lg-6 col-md-6 col-sm-12">
              	<p class="loginInfoText">The largest landscape-oriented database on the internet. More than 50,000 commercial landscape professionals visit LandscapeOnline every month. Many visitors are looking for the products and services you provide, both nationally and locally.
						    </p>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
              
                <p class="loginPasswordText" style="font-size: 18px;">To Edit Your Vendor Profile <br>Please Enter Your Password Here</p>

                <div class="full_width input_fl">
                  <div class="row">
                    <form action="/" name="loginform" id="loginf">
                        <? if ($t == "ad") {?>
                          <label>Login:</label>
                          <input type="text" name="email" MAXLENGTH="45" value="" placeholder="Email Address">
                        <? } ?>
                            <div class="col-sm-12 smallBtn_flexContainer">
                              <input type="password" name="password" MAXLENGTH="10" id='password_field'  placeholder="Password" required>
                              <INPUT TYPE="submit" VALUE="Enter" class="smallBtn_style vendorLoginBtn">
                            </div>

                          <?
                            if ( !$_SESSION['np'] && $t == "ad"){
                              $new_npage = "/private/index.php";
                            } else 	if ( !$_SESSION['np'] && $t == "v"){
                              $new_npage = "/vendor/index-vendor.php?action=edit";
                            } else {
                              $new_npage = "/vendor/index-vendor.php?action=edit";
                            }
                          ?>


                        <input type="hidden" name="npage" value="<?=$new_npage?>">
                        <input type="hidden" name="action" value="login">
                        <input type="hidden" name="t" value="<?=$t?>">
                    </form>
                  </div>
                </div>

                  <p id="incorrectPasswordText" style="clear: both; height: 16px; margin-bottom: 0px; font-size: 14px; padding-top: 3px; color: red;"></p>
<!--                  <p class="" style="padding-top: 10px; font-size: 16px; font-style: italic; clear: both;">Never assigned a password?<br> <a href="https://landscapearchitect.com/vendor/signup/index2.php">Click Here</a></p>-->
                  
            </div>
            
          </div>

       
					


			



				<div class="col-lg-12" style="border-bottom: 1px solid gray; margin-top: 50px;">
					<!-- Divider -->
				</div>

				<SCRIPT language="javascript" type="text/javascript">
				function validate(){
					if (document.pass_form1.firstname.value.length < 1) {
						alert("Please enter your first name.");
						return false;
					}
					if (document.pass_form1.lastname.value.length < 1) {
						alert("Please enter your last name.");
						return false;
					}
					if (document.pass_form1.company.value.length < 1) {
						alert("Please enter your company name.");
						return false;
					}
					if (document.pass_form1.email2.value.length < 1) {
						alert("Please enter your email address.");
						return false;
					}
					return true;
				}
				</script>

				
					<div class="col-lg-12" style="margin-top: 20px;">
						<p class="text-center loginPasswordText">Lost Vendor Password?</p>
            <p class="text-center">or</p>
            <p class="text-center loginPasswordText" style="margin-top: 0px;">New Vendor Sign Up</p>
						<p class="text-center" style="margin-bottom: 80px;">Please contact Javier Miranda at 714-979-5276 x122.<br>Thank You.</p>
					</div>	

        </div><!-- ./center_section -->
        
				
				
				
				
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 sideBar">
						
						
						<!-- banner ads 1-6 right side -->
						<?  
                for($i = 0; $i < 6; $i++){
									if(!empty($ads[$i]['picture'])){
										echo '<div class="add__ full_width"><a href="' .  $ads[$i]['web'] . '"><img src="../banner/'  . $ads[$i]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
										
										list($width, $height) = getimagesize(BASE_URL.'banner/' . $ads[$i]['picture'] . '');
										
										if($height > 200){
											$i++;
										}
									}
								}	
								
						?>

						
        </div><!-- ./col-lg-4 -->
    </div><!-- /.row -->
    	
    </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

            
 <? include $rootInclude.'la-common-footer-inner.inc'; ?>

			
    </body>
</html>
