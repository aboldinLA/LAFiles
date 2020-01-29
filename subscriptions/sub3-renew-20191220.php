<?php session_start() ?>


<? 
  
  include '../../includes/la-common-top-inner.php';

   include '../../includes/connect4.inc';


    
  echo "<pre>";
  echo print_r($_POST);
  echo "</pre>";
  

?>

 <div style="box-shadow: 0 2px 30px 0 rgba(0, 0, 0, 0.28); border-bottom: 1px solid #f5f5f5;">
      
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="http://landscapearchitect.com/images/basic/logo.jpg" width="100%" style="max-width: 450px; padding-top: 10px; padding-bottom: 15px;">
          <h2 style="font-size: 31px; text-align: center;">Welcome to the Subscription Request and Profile Management Center</h2>
        </div>
      </div>
   </div> 
   
</div>


<? 

    $action = 'edit';

    $action2 = $_GET['action'];

    $uid = $_GET['id'];

    $id = $_GET['id'];

    
    $id = $_POST['id'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $biz_title = $_POST['title'];
    $am_id = implode(",",$_POST['am_id']);
    $auth = implode(",",$_POST['authority']);
    $area = implode(",",$_POST['overwork_id']);
    $acres = $_POST['acreage_id'];
    $sites_id = implode(" ",$_POST['sites_id']);
    $type_biz = implode(",",$_POST['does']);
    $assoc = implode(",",$_POST['assoc']);

    $webId = $id;



		// Attempt insert query execution

          $sql = "UPDATE subscribe SET biz_title = '" . $biz_title . "', am_id = '" . $am_id . "', auth = '" . $auth . "', area = '" . $area . "', acres = '" . $acreage_id . "', sites_id = '" . $sites_id . "', type_biz = '" . $type_biz . "', assoc = '" . $assoc . "' WHERE id='" . $id . "'";

          if(mysqli_query($conn, $sql)){
            echo "&nbsp;";
          } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }

                
				

				// Edit Fill

        $sql="select * from subscribe where id='" . $webId . "'";
        $result = $conn->query($sql);									


          while($result = mysqli_fetch_array($result)) {
                            
                    
							
							

?>

 <form action="thankyou-renew.php?action=edit&id=<? echo $webId; ?>" method="POST">

   
   
	<input type="hidden" value="<? echo $first_name; ?>" name="first_name">
	<input type="hidden" value="<? echo $last_name; ?>" name="last_name">
	<input type="hidden" value="<? echo $email; ?>" name="email">    
   
   
      
  <section class="content_sec full_width vendorPages subPage">
        
    <div class="container">
      <div class="row"> 
		

<?php

    $sql="select * from subscribe where id='" . $_GET['id'] . "'";
    $result=mysqli_query($conn,$sql);

      while($row = mysqli_fetch_array($result)) {

        $ylist_id = explode(",", $row['ylist_id']);



        $pieces = explode(",", $row['ylist_id']);
        echo $pieces[0]; // piece1
        echo $pieces[1]; // piece2									


      }         												
?>
			
			
<!-- Categories Start -->			
<div class="container-fluid">

 <div class="col-lg-9 col-sm-offset-1">
		
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
            <center><h3>Categories&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Scroll down or choose a category.</span></h3></center>		
    </div>
  </div><br>
	 
										<div class="row">
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#BS">Business Services</a></h4> 
											</div>	 

											<div class="col-sm-3">
												<h4>&nbsp;<a href="#GR">Green Roof</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#PMBR">Pavers, Masonry, Blocks &amp; Rocks</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#SEC">Stormwater/Erosion Control</a></h4> 
											</div>	 	 
										</div>	 	
	 
										<div class="row">
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#EI">Equipment - Installation</a></label> 
											</div>	 

											<div class="col-sm-3">
												<h4>&nbsp;<a href="#LL">Landscape Lighting</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#PA">Plant Accessories</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#TO">Turf &amp; Ornamental</a></h4> 
											</div>	 	 
										</div>	 	 	 
	 
										<div class="row">
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#EM">Equipment - Maintenance</a></h4> 
											</div>	 

											<div class="col-sm-3">
												<h4>&nbsp;<a href="#OL">Outdoor Living</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#PM">Plant Materials</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#WF">Water Features</a></h4> 
											</div>	 	 
										</div>	 	 	
	 
										<div class="row">
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#EPR">Equipment - Parts &amp; Repair</a></h4> 
											</div>	 

											<div class="col-sm-3">
												<h4>&nbsp;<a href="#PR">Park and Recreation</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#SA">Site Amenities</a></h4> 
											</div>	
											
											<div class="col-sm-3">
												<h4>&nbsp;<a href="#WM">Water Management / Irrigation</a></h4> 
											</div>	 	 
										</div>	 	 		 
	 
	 
		
		
	  </div>	  
  </div>
<!-- Catgories End -->			
		   
  
<!--
  <div class="check_box__ col-md-4 col-xs-6">
    <input type="checkbox" class="form-check-input prodRequestsInput" id="2608" name="ylist[]" value="2608">
    <label for="2608"></label>
    <label class="form-check-label" for="2608">compost</label>
  </div>
-->
        
        
  <?
      include '../../includes/connect3.inc';
            
      $categorys = [
          ['Green Roof', 'GR', 13730],
          ['Landscape Lighting', 'LL', 13731],
          ['Outdoor Living', 'OL', 13732],
          ['Park and Recreation', 'PR', 13733],
          ['Pavers, Masonry, Blocks & Rocks', 'PMBR', 13734],
          ['Plant Accessories', 'PA', 13735],
          ['Plant Materials', 'PM', 13736],
          ['Site Amenities', 'SA', 13737],
          ['Stormwater/Erosion Control', 'SEC', 13738],
          ['Turf & Ornamental', 'TO', 13739],
          ['Water Features', 'DWF', 13726],
          ['Water Management / Irrigation', 'WMI', 13740],
          ['Business Services', 'BS', 13725], 
          ['Equipment - Installation', 'EQI', 13727], 
          ['Equipment - Maintenance', 'EQM', 13728],
          ['Equipment - Parts & Repair', 'EQPR', 13729],
        ];
            
            
        foreach($categorys as $index){
            $catName = $index[0];
            $catAbbrev = $index[1];
            $catNum = $index[2];   
          
          ?>
          
        
          <div style="position: relative; top: -40px; clear: both;" id="<? echo $catAbbrev ?>">&nbsp;</div>
      
          <div class="col-sm-12" style="margin-top: 60px;">

              <div class="col-sm-12">
                <h2 class="subscriptionSectionTitles"><? echo $catName ?>:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
              </div>

             <div class="cell col-sm-12">
        
        
        <?
          
          
            $sql = "SELECT * FROM ylist WHERE idParent = 13725 AND prod_info = 0 ORDER BY name";
            $result = $conn->query($sql);							


            $num_rows = mysqli_num_rows($result);

               while ($row = mysqli_fetch_assoc($result)) {

                 if ($row["name"] > 0) { echo "checked"; }

                      if (in_array($row['sub_number'] ,$ylist_id))
                      $t = "checked";
                      else
                      $t = "";													

                     echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
                        <input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                        <label for="' . $row['sub_number'] . '"></label>
                        <label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
                        </div>';

                }
												
          ?>
               
            </div><!-- /.cell -->
          </div><!-- /.col-sm-12 -->
      
        <? 
          } //end forEach
        ?>
        
        
  
  
<!-- BS Start -->	
<div style="position: relative; top: -40px; clear: both;" id="BS">&nbsp;</div>
      
<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Business Services:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">

	  
								<?php
							
							   

							
								$sql = "SELECT * FROM ylist WHERE idParent = 13725 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
																												
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 if ($row["name"] > 0) { echo "checked"; }
																								
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
														<input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                            <label for="' . $row['sub_number'] . '"></label>
														<label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
													  </div>';
										 
										}
																					
																					
																	
								?>	 
		
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->
<!-- BS End -->		
		   

      

<!-- EI Start -->		
<div style="position: relative; top: -40px; clear: both;" id="EI">&nbsp;</div>
      
<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Equipment - Installation:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">
   
	 
								<?

								$sql = "SELECT * FROM ylist WHERE  idParent = 13727 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 

                        if (in_array($row['sub_number'] ,$ylist_id))
                        $t = "checked";
                        else
                        $t = "";													

                       echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
														<input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                            <label for="' . $row['sub_number'] . '"></label>
														<label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
													  </div>';

										 
										}
																					
																					
																	
								?>	 
	 
	 
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	   
<!-- EI End -->		
		   
		   

<!-- EM Start -->			
<div style="position: relative; top: -40px; clear: both;" id="EM">&nbsp;</div>	 
   
<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Equipment - Maintenance:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">
	 
								<?
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13728 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
																					
								$num_rows = mysqli_num_rows($result);
																					
									 while ($row = mysqli_fetch_assoc($result)) {

													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
														<input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                            <label for="' . $row['sub_number'] . '"></label>
														<label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
													  </div>';
					
										}
																					
																					
																	
								?>	 
	 
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	   
<!-- EM End -->			
		
        
		   

<!-- EPR Start -->	
<div style="position: relative; top: -40px; clear: both;" id="EPR">&nbsp;</div>  
  
<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Equipment - Parts &amp; Repair:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">
   
	 
      <?
          $sql = "SELECT * FROM ylist WHERE  idParent = 13729 AND prod_info = 0 ORDER BY name";
          $result = $conn->query($sql);							


           $num_rows = mysqli_num_rows($result);


           while ($row = mysqli_fetch_assoc($result)) {

              if (in_array($row['sub_number'] ,$ylist_id))
              $t = "checked";
              else
              $t = "";													

              echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
                  <input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                  <label for="' . $row['sub_number'] . '"></label>
                  <label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
                  </div>';

            }
        ?>	 

  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	    
<!-- EPR End -->	
		   

        

<!-- GR Start -->	
<div style="position: relative; top: -40px; clear: both;" id="GR">&nbsp;</div>  

<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Green Roof:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">
	 
						<?
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13730 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
								$num_rows = mysqli_num_rows($result);
																												
									 while ($row = mysqli_fetch_assoc($result)) {

                      if (in_array($row['sub_number'] ,$ylist_id))
                      $t = "checked";
                      else
                      $t = "";													

                     echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
                        <input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                        <label for="' . $row['sub_number'] . '"></label>
                        <label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
                        </div>';

										 
										}
						
								?>	 

  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->		   
<!-- GR End -->	
		   
		   


<!-- LL Start -->		
<div style="position: relative; top: -40px; clear: both;" id="LL">&nbsp;</div>
  
<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Landscape Lighting:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">
	 
				  <?
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13731 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
																												
								$num_rows = mysqli_num_rows($result);
				
									 while ($row = mysqli_fetch_assoc($result)) {

                        if (in_array($row['sub_number'] ,$ylist_id))
                        $t = "checked";
                        else
                        $t = "";													

                       echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
                        <input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                        <label for="' . $row['sub_number'] . '"></label>
                        <label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
                        </div>';

										 
										}
																	
						?>	 
	 

  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	  
<!-- LL End -->	
		   



<!-- OL Start -->		
<div style="position: relative; top: -40px; clear: both;" id="OL">&nbsp;</div>
  
<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Outdoor Living:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">
	 
				  <?
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13732 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
																												
								$num_rows = mysqli_num_rows($result);
				
									 while ($row = mysqli_fetch_assoc($result)) {

                        if (in_array($row['sub_number'] ,$ylist_id))
                        $t = "checked";
                        else
                        $t = "";													

                       echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
                        <input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                        <label for="' . $row['sub_number'] . '"></label>
                        <label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
                        </div>';

										 
										}
																	
						?>	 
	 

  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->
<!-- OL End -->	
		   

  
<!-- PR Start -->		
<div style="position: relative; top: -40px; clear: both;" id="PR">&nbsp;</div>  
  
<div class="col-sm-12" style="margin-top: 60px;">
    
    <div class="col-sm-12">
      <h2 class="subscriptionSectionTitles">Park and Recreation:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
    </div>
  
   <div class="cell col-sm-12">
	 
				  <?
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13733 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
																												
								$num_rows = mysqli_num_rows($result);
				
									 while ($row = mysqli_fetch_assoc($result)) {

                        if (in_array($row['sub_number'] ,$ylist_id))
                        $t = "checked";
                        else
                        $t = "";													

                       echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
                        <input type="checkbox" name="ylist[]" class="form-check-input" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                        <label for="' . $row['sub_number'] . '"></label>
                        <label for="' . $row['sub_number'] . '" class="form-check-label">&nbsp;' . $row['name'] . '</label>
                        </div>';

										 
										}
																	
						?>	 
	 
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->
<!-- PR End -->	
		   
		   
	

<!-- PMBR Start -->	
<div style="position: relative; top: -40px; clear: both;" id="PMBR">&nbsp;</div>
  
<div class="container-fluid">

 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Pavers, Masonry, Blocks &amp; Rocks:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13734 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- PMBR End -->	
		   

  
  
<!-- PA Start -->		
<div style="position: relative; top: -40px; clear: both;" id="PA">&nbsp;</div>
  
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Plant Accessories:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13735 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- PA End -->		
  

  
<!-- PM Start -->			
<div style="position: relative; top: -40px; clear: both;" id="PM">&nbsp;</div>  

<div class="container-fluid">
	
 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Plant Materials:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13736 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- PM End -->		
		

<!-- SA Start -->		
<div style="position: relative; top: -40px; clear: both;" id="SA">&nbsp;</div>  

<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Site Amenities:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13737 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- SA End -->	
		   
		   
  
<!-- SEC Start -->			
<div style="position: relative; top: -40px; clear: both;" id="SEC">&nbsp;</div>  

<div class="container-fluid">

 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Stormwater/Erosion Control:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13738 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	 
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- SEC End -->	
		   
		   
	

<!-- TO Start -->			
<div style="position: relative; top: -40px; clear: both;" id="TO">&nbsp;</div>  

<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Turf &amp; Ornamental:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13739 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- TO End -->	
		   
		   
			   

<!-- WF Start -->			
 <div style="position: relative; top: -40px; clear: both;" id="WF">&nbsp;</div> 
  
<div class="container-fluid">
	
 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Water Features:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13726 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- WF End -->	
		   
  

<!-- WM Start -->			
<div style="position: relative; top: -40px; clear: both;" id="WM">&nbsp;</div>
  
<div class="container-fluid">

 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Water Management / Irrigation:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13740 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['sub_number'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount < 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 3) {
												
													if (in_array($row['sub_number'] ,$ylist_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="ylist[]" class="webCheckbox" value="' . $row['name'] . '" id="ylist" ' . $t . '>
														<label for="ylist">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>
  </div>		   
<!-- WM End -->						 		   
	
  
  
</div>	
	
	<div style="position: relative; top: -40px; clear: both;" id="BBB">&nbsp;</div>
	
</div>					


		
		
            <div class="col-sm-12" style="margin-top: 20px;">
              <button type="submit" class="button_style">Continue to Step 2 of 2</button>
              <p class="text-center" style="margin-top: 15px;">Need help? Call<a href="tel:7149795276"> 714-979-5276</a> |
              <a href="mailto:info@landscapearchitect.com">Email Us</a></p>
            </div>
            <!-- /.col-sm-12 -->

			  
      </div><!-- /.row -->	
    </div> <!-- /.container -->		
    
  </section> <!-- /.content_sec -->		
</form>
        
       <? } ?> 
        
        
       
<style>
  footer {
    display: none;
  }
</style> 
        
        
        
        
  <!-- Mag OptIn End -->						

		<? include '../../includes/la-common-footer-inner.inc'; ?>
		
