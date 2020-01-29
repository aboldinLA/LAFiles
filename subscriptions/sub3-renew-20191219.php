<? include '../../includes/la-common-top.php'; ?>

<? include '../../includes/la-common-header-inner.inc'; ?>

<?

include '../../includes/connect4.inc';


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

		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 
		// Attempt insert query execution

        $sql = "UPDATE subscribe SET biz_title = '" . $biz_title . "', am_id = '" . $am_id . "', auth = '" . $auth . "', area = '" . $area . "', acres = '" . $acreage_id . "', sites_id = '" . $sites_id . "', type_biz = '" . $type_biz . "', assoc = '" . $assoc . "' WHERE id='" . $id . "'";
    
		if(mysqli_query($link, $sql)){
			echo "&nbsp;";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

                
				

				// Edit Fill

					$sql="select * from subscribe where id='" . $webId . "'";
					$result = $conn->query($sql);									

												
						while($row = mysqli_fetch_array($result)) {
                            
                    
							
							

?>

    <form action="thankyou-renew.php?action=edit&id=<? echo $webId; ?>" method="POST">
	<input type="hidden" value="<? echo $first_name; ?>" name="first_name">
	<input type="hidden" value="<? echo $last_name; ?>" name="last_name">
	<input type="hidden" value="<? echo $email; ?>" name="email">    		
		

      <section class="content_sec full_width">
        <div>
          <center><h4 style="font-size: 22px">Welcome to the Subscription Request<br>
			and Profile Management Center</h4><br>
			<img width="25%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg"></center><br>
           
        </div>
        <!-- /.login_cover -->
      </section>
      <!-- /.content_sec -->
	<?
								
							$sql="select * from subscribe where id='" . $_GET['id'] . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									$ylist_id = explode(",", $row['ylist_id']);
									
									
									
									$pieces = explode(",", $row['ylist_id']);
									echo $pieces[0]; // piece1
									echo $pieces[1]; // piece2									
									
									echo $row['first_name'];
								
									
								}         								
								
								
								
								
	?>
			
			
<!-- Categories Start -->			
		
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
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
  </div><br><br><br>
<!-- Catgories End -->			
		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- BS Start -->			
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
<div style="position: relative; top: -40px" id="BS">&nbsp;</div>
	
 <div class="col-lg-11 col-sm-offset-1">
		
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
          <center><h3>Business Services:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
	</div>
</div><br>
	 
								<?
							
							

                				include '../../includes/connect3.inc';

							
								$sql = "SELECT * FROM ylist WHERE idParent = 13725 AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);							
							
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 if ($row["name"] > 0) { echo "checked"; }
											
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
<!-- BS End -->		
		   
		   
	<div style="position: relative; top: -40px" id="EI">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- EI Start -->			
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
          <center><h3>Equipment - Installation:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13727 AND prod_info = 0 ORDER BY name";
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
<!-- EI End -->		
		   
		   
	<div style="position: relative; top: -40px" id="EM">&nbsp;</div>
		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- EM Start -->			
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
          <center><h3>Equipment - Maintenance:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13728 AND prod_info = 0 ORDER BY name";
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
<!-- EM End -->			
		   
	<div style="position: relative; top: -40px" id="EPR">&nbsp;</div>
		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- EPR Start -->			
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
          <center><h3>Equipment - Parts &amp; Repair:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13729 AND prod_info = 0 ORDER BY name";
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
<!-- EPR End -->	
		   
		   
	<div style="position: relative; top: -40px" id="GR">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- GR Start -->			
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
          <center><h3>Green Roof:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13730 AND prod_info = 0 ORDER BY name";
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
<!-- GR End -->	
		   
		   
	<div style="position: relative; top: -40px" id="LL">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- LL Start -->			
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
          <center><h3>Landscape Lighting:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13731 AND prod_info = 0 ORDER BY name";
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
<!-- LL End -->	
		   
		   
		   
	<div style="position: relative; top: -40px" id="OL">&nbsp;</div>
		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- OL Start -->			
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
          <center><h3>Outdoor Living:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13732 AND prod_info = 0 ORDER BY name";
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
<!-- OL End -->	
		   
		   
	<div style="position: relative; top: -40px" id="PR">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- PR Start -->			
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
          <center><h3>Park and Recreation:&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h3></center>		
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
							
								$sql = "SELECT * FROM ylist WHERE  idParent = 13733 AND prod_info = 0 ORDER BY name";
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
<!-- PR End -->	
		   
		   
	<div style="position: relative; top: -40px" id="PMBR">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- PMBR Start -->			
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
		   
	<div style="position: relative; top: -40px" id="PA">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- PA Start -->			
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
		   
	<div style="position: relative; top: -40px" id="PM">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- PM Start -->			
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
		   
	<div style="position: relative; top: -40px" id="SA">&nbsp;</div>
		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- SA Start -->			
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
		   
		   
	<div style="position: relative; top: -40px" id="SEC">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- SEC Start -->			
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
		   
		   
	<div style="position: relative; top: -40px" id="TO">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- TO Start -->			
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
		   
		   
	<div style="position: relative; top: -40px" id="WF">&nbsp;</div>
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- WF Start -->			
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
		   
	<div style="position: relative; top: -40px" id="WM">&nbsp;</div>
		   		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- WM Start -->			
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
	
	<div style="position: relative; top: -40px" id="BBB">&nbsp;</div>
	
</div>					
		
		
      <section class="content_sec full_width">
        <div class="login_cover">
   	
              <!-- /.col-sm-12 -->
              <div class="col-sm-12">
                <button type="submit">Continue to Step 3 of 3</button>
              </div>
              <!-- /.col-sm-12 -->
            </div>
            <!-- /.row -->
			  
			  
          </form>

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
        
       <? } ?> 
        
        
        
        
        
        
        
  <!-- Mag OptIn End -->						
        
        
       </p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
		<? include '../../includes/la-common-footer-inner.inc'; ?>
		
		
		<script>

			 $(function() {
						$('.lazy').Lazy();
				});

		</script>