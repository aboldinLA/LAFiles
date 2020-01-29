
<? 

	include '../../includes/la-common-top-inner.php';

	include '../../includes/la-common-header-inner.inc'; 

	$t = $_GET['t'];

  $pass = $_GET['password'];
  $company = $_GET['Company'];

	
?>




<style>
	
</style>





<section class="tool_page full_width vendorPages">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBarNoSearch">

				
				<div class="white_side full_width">
					<h2 class="mobtoggle">ALL CATEGORIES</h2>
					<div class="full_width" id="mobile_slide">


						<!-- sidebar accordian menu -->
						<?
							 include '../../includes/connect4.inc';
							 
//							$companyNamesFeatured = array();
//							$companyNames = array();
						
								include '../../includes/la-common-sidebar-menu.inc';
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
                
							
							
							

          <img src="https://landscapearchitect.com/lol-logos/3-logo-search-engines.jpg" width="100%" style="margin-top: 15px; display: block;"/><br />
          <h2 class="text-center loginHeader">Welcome</h2>
         <h2 class="text-center" style="font-size: 45px; margin-top: -7px; margin-bottom: -11px; font-weight: bold;"><? echo $company ?></h2>
          <h2 class="text-center loginHeader"><span style="font-size: 25px">to the</span><br>Vendor Profile Management Center</h2>
          
          <div class="row">
          

            
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
              
              <button class="vendorLoginBtn button_style">Click Here To Sign In</button>

                  <p id="incorrectPasswordText" style="clear: both; height: 16px; margin-bottom: 0px; font-size: 14px; padding-top: 3px; color: red;"></p>
            </div>
            
             <div class="col-lg-12">
              	<p class="loginInfoText text-center">The largest landscape-oriented database on the internet. More than 50,000 commercial landscape professionals visit LandscapeOnline every month. Many visitors are looking for the products and services you provide, both nationally and locally.
						    </p>
            </div>
            
          </div>

       
					


			



				<div class="col-lg-12" style="border-bottom: 1px solid gray; margin-top: 50px;">
					<!-- Divider -->
				</div>

				
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
										
										list($width, $height) = getimagesize('https://landscapearchitect.com/banner/' . $ads[$i]['picture'] . '');
										
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

            
 <? include '../../includes/la-common-footer-inner.inc'; ?>
 
			<script>

        
        $('.vendorLoginBtn').click(function(event){
          event.preventDefault();
          document.getElementById("incorrectPasswordText").innerHTML = " ";
          $.post(
            '/member/login_ven.php',
            {password: '<? echo $pass; ?>'},
             function(data){
               data = JSON.parse(data);  
               if(data.login == true){
                  window.location.href = "https://landscapearchitect.com/vendor/index-vendor.php?action=edit&id=" + data.vendorId;
               } else {
                 setTimeout(function(){
                   document.getElementById("incorrectPasswordText").innerHTML = "There was an error. Please try again or contact us for further assistance."
                }, 200);
               }
             }
          )
        });
        
        
			</script>
			
    </body>
</html>
