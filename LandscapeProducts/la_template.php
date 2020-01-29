
<? include '../../includes/la-common-top.php'; ?>

<? include '../../includes/la-common-header-inner.inc'; ?>

<? include '../../includes/la_common2.inc'; ?>



<section class="tool_page full_width">
<div class="container" style="background-color: #ffffff;">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBarNoSearch">
	
		
				    <?

								$servername = "localhost";
								$username = "land_patchew";
								$password = "59q2GB6k$3";
								$dbname = "land_landscap_lollive";

								// Create connection
										$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
										if ($conn->connect_error) {
												die("Connection failed: " . $conn->connect_error);
										}                


								$cat1 = $_GET['ad'];
								
								
							$companyNamesFeatured = array();
							$companyNames = array();

        ?>
				
				<div class="white_side full_width">
					<h2 class="mobtoggle">ALL CATEGORIES</h2>
					<div class="full_width" id="mobile_slide">


						<!-- sidebar accordian menu -->
						<? include '../../includes/la-common-sidebar-menu.inc'; ?>


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
                
								
                
       
        </div><!-- ./col-lg-8 -->
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 sideBar">
						
						
						<!-- banner ads 1-6 right side -->
						<?  for($i = 0; $i < 6; $i++){
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

<section class="green_newsletter full_width">
<div class="container">
<form id="news_letter_form">
	<h3>Sign up for LAWeekly newsletter.</h3>
    <div class="coverinput">
    <input type="text" name="email_address" placeholder="Enter your email address" />
    <button type="submit">Sign up</button>
    </div><!-- /.coverinput -->
</form>    
</div><!-- /.contianer -->
</section><!-- /.green_newsletter -->
	
            
 <? include '../../includes/la-common-footer.inc'; ?>
 
    </body>
</html>
