<?php session_start() ?>


<? 
  
include '../../includes/la-common-top-inner.php'; 

include '../../includes/la-common-header-inner.inc'; 

include '../../includes/connect4.inc';




    $action = 'edit';

    $action2 = $_GET['action'];

    $uid = $_GET['id'];

    $id = $_GET['id'];

    $id = $_POST['id'];

    $ylist_id = implode(",",$_POST['ylist']);



		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 
		// Attempt insert query execution

//    $sql = "UPDATE subscribe SET ylist_id = '" . $ylist_id . "' WHERE id='" . $id . "'";
//    
//		if(mysqli_query($link, $sql)){
//			echo "&nbsp;";
//		} else{
//			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//		}

                
echo "<pre>";
print_r($_POST);
echo "</pre>";
							

?>

    

      <section class="content_sec full_width">
        <div>

			
						<?

                include '../../includes/connect3.inc';

							
								$sql = "select * from subscribe where id='" . $_GET['id'] . "'";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 echo '<center><h3>Thank You ' . $row['first_name'] . '</h3><br>
										 		<p>Your subscription has been updated</p>
												<p style="font-size:16px"><strong><a href="https://landscapearchitect.com">Continue Viewing the Site</a></strong></p></center> ';
										 
									 }
							
							?>			
           
        </div>
        <!-- /.login_cover -->
      </section>
      <!-- /.content_sec -->
	<?
								
						
								
								
								
	?>
			
			

	
</div>	
	
	<div style="position: relative; top: -40px" id="BBB">&nbsp;</div>
	
</div>					
		
		
      <section class="content_sec full_width">
        

          <div class="btm_links full_width">
            <label
              >Need help? Call<a href="tel:18001234567"> 1-800-123-4567</a> |
              <a href="#">Email Us</a></label
            >
          </div>
          <!-- /.btm_links -->
        </div>
        <!-- /.login_cover -->
      </section>
      <p><!-- /.content_sec -->		
        
        
        
        
        
        
        
        
  <!-- Mag OptIn End -->						

        
	<? include '../../includes/la-common-footer-inner.inc'; ?>

  
