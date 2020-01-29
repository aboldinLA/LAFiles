<? 

//	$pageId = 'news';

	include '../../../includes/la-common-top-inner.php';

	include '../../../includes/la-common-header-inner.inc'; 

?>


	
	


<section class="tool_page full_width" data-title="article0">
<div class="container text-center" style="padding-bottom: 20px;">
	<span class="ader">ADVERTISEMENT </span>
    <div class="add_nn">
				 <!-- banner ad leaderboard -->
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

				
				
					$sql = "SELECT * FROM banner_ups WHERE ROS='lad' ORDER BY RAND() LIMIT 1";
					$result = $conn->query($sql);									

					while($row = mysqli_fetch_array($result)){
							echo '<a href="' .  $row['web'] . '"><img src="../../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a> '; 
					}

				?>
		
    </div><!-- /.add_nn -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

<section class="full_width architech_arti brdr">
  <div class="container">
    <div class="row">
      <div class="widthmaker">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="width_adjust full_width">	

        
            
            <!-- content goes here -->
            


          </div><!-- /.width_adjust -->    
        </div><!-- ./col-lg-8 -->

        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="newsltr full_width">
                <h3>Sign up for<br>LAWeekly newsletter. <span>Get exclusive content today.</span></h3>
                  <form id="news_letter_form" novalidate>
                      <input type="text" name="email_address" placeholder="Enter your email address" class="newsletterEmailInput">
                      <button type="submit" class="newsletterSignUpBtn">Sign up</button>
                  </form>
              </div><!-- /.newsltr -->


              <!-- ROS banner ads -->
              <?
                $sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND() Limit 4";
                $result = $conn->query($sql);									

                while($row = mysqli_fetch_array($result)){
                    echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="../../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div> '; 
                }

              ?>

        </div><!-- ./col-lg-4 -->
      </div><!-- /.widthmaker -->
    </div><!-- /.row -->
  </div><!-- /.contianer -->
</section><!-- /.architech_arti -->




      <? include '../../../includes/la-common-footer-inner.inc'; ?>  

      <? include '../../../includes/la-common-magazine-subscribe.php'; ?>

      <? include '../../../includes/la-common-log-in-modal.inc'; ?>


    </body>
</html>