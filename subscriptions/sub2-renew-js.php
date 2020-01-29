<? include '../../includes/la-common-top.php'; ?>

<? include '../../includes/la-common-header-inner.inc'; ?>

<?


	$uname2 = $_SESSION['name'];

	$uname3 = $_SESSION['lname'];

	$ucode = $_GET['ucode3'];

	$vnumber = $_GET['number'];
	//echo $vnumber . 'dog<br>';
	$prodNumber = $_GET['prodNum'];
	//echo $prodNumber . 'cat<br>';
	$xpage2 = '/LandscapeProducts/product-details.php?number=' . $vnumber . '&prodNum=' . $prodNumber . '';


	function random_password( $length = 8 ) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$passwordus = substr( str_shuffle( $chars ), 0, $length );
		return $passwordus;
	}


	$passwordus = random_password(8);


$action = 'edit';

$action2 = $_GET['action'];

$uid = $_GET['id'];

$id = $_GET['id'];

                $webId = $_GET['id'];
                
				
                include '../../includes/connect3.inc';

				// Edit Fill

					$sql="select * from subscribe where id='" . $webId . "'";
					$result = $conn->query($sql);									

												
						while($row = mysqli_fetch_array($result)) {
                            
                            
                            $firstName = $row['first_name'];
                            $last_name = $row['last_name'];
                            $comp_name = $row['comp_name'];
                            $address = $row['address'];
                            $city = $row['city'];
                            $state = $row['state'];
                            $zip = $row['zip'];
                            $phone = $row['phone'];
                            $fax = $row['fax'];
                            $email = $row['email'];
                            $personal = $row['month'];
							
                             $biz_title = $row['biz_title'];
                             $am_id = explode(",", $row['am_id']);
                             $authority = explode(",", $row['auth']);
                             $overwork_id = explode(",", $row['area']);
                             $acreage_id = $row['biz_title'];
                             $sites_id = explode(",", $row['sites_id']);
                             $does = explode(",", $row['type_biz']);
                             $assoc = explode(",", $row['assoc']);							
							
							
							
							
							

?>

    <form action="sub3-renew.php?action=edit&id=<? echo $webId; ?>" method="POST">
	<input type="hidden" value="<? echo $webId; ?>" name="id" />

      <section class="content_sec full_width">
        <div>
          <center><h4 style="font-size: 22px">Welcome to the Subscription Request<br>
			and Profile Management Center dog</h4><br>
			<img width="25%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg"></center><br>
           
        </div>
        <!-- /.login_cover -->
      </section>
      <!-- /.content_sec -->
	<?
								
							$sql="select * from subscribe where id='" . $_GET['id'] . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									if (!empty($row['opt_inla'])) {

                                        
                                        $str = $row['opt_inla'];
                                        
                                        list($opt_inla001, $opt_inla002, $opt_inla003, $opt_inla004, $opt_inla005) = explode(',', $str);                                        
                                      
										
									}
									
								}         								
								
								
								
								
	?>
			
			
<!-- Title Start -->			
		
<div class="container-fluid">
	
	<style>

		.webRadio {
			-webkit-appearance: radio !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>Title&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Please Choose One)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_title ORDER by sub_number ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
											
											if ($rcount == 0) {	
													if ($row["name"] == $biz_title) {  $t = "checked"; } else { $t = " ";}
												 echo '<div class="row"><div class="col-sm-3">
														<input type="radio" name="title" class="webRadio" value="' . $row['name'] . '" id="title" ' . $t . '>
														<label for="title">&nbsp;' . $row['name'] . '</label> 
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {
													if ($row["name"] == $biz_title) {  $t = "checked"; } else { $t = " ";}
												 echo '<div class="col-sm-3">
														<input type="radio" name="title" class="webRadio" value="' . $row['name'] . '" id="title" ' . $t . '>
														<label for="title">&nbsp;' . $row['name'] . '</label> 
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {
													if ($row["name"] == $biz_title) {  $t = "checked"; } else { $t = " ";}
												 echo '<div class="col-sm-3">
														<input type="radio" name="title" class="webRadio" value="' . $row['name'] . '" id="title" ' . $t . '>
														<label for="title">&nbsp;' . $row['name'] . '</label> 
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div><br><br><br>
<!-- Title End -->			
		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>				   

<!-- Iam Start -->			
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>I Am A&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Select all that apply)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_iam ORDER by idAccount ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
										 	 $dresult = substr($row['name'], 0, 3);
										 
										 	  if ($dresult == '---') {
												  
												  $str2 = substr($row['name'], 3);
												  
												  $newName = $str2;
												  
												  $newLine = '&nbsp;';
												  
												  $newLine2 = '<label for="am_id">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $newName . '</span></label>';
												  
											  } else {
												  
												 $newName = $row['name'];

												if (in_array($row['name'] ,$am_id))
												$t = "checked";
												else
												$t = "";
												  
												 $newLine = '<input type="checkbox" ' . $t . ' name="am_id[]" class="webCheckbox" value="' . $newName . '" id="am_id">';
												  
												 $newLine2 = '<label for="am_id">&nbsp;' . $newName . '</label>';
												  
											  }
										 
											
											if ($rcount == 0) {	 
												 echo '<div class="row"><div class="col-sm-3">
														' . $newLine . '
														' . $newLine2 . '
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {	 
												 echo '<div class="col-sm-3">
														' . $newLine . '
														' . $newLine2 . '
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {	 
												 echo '<div class="col-sm-3">
														' . $newLine . '
														' . $newLine2 . '
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div>		   
<!-- Iam End -->			
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>	
		   
<!-- Authority Start -->			
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>My Authority Allows Me to&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Select all that apply)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_authority ORDER by sub_number ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	 
												
													if (in_array($row['name'] ,$authority))
													$t = "checked";
													else
													$t = "";
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="authority[]" class="webCheckbox" value="' . $row['name'] . '" id="authority" ' . $t . '>
														<label for="authority">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {	
												
													if (in_array($row['name'] ,$authority))
													$t = "checked";
													else
													$t = "";												
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="authority[]" class="webCheckbox" value="' . $row['name'] . '" id="authority" ' . $t . '>
														<label for="authority">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {	
												
													if (in_array($row['name'] ,$authority))
													$t = "checked";
													else
													$t = "";												
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="authority[]" class="webCheckbox" value="' . $row['name'] . '" id="authority" ' . $t . '>
														<label for="authority">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div>			   
		   
<!-- Authority End -->
		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>	
		   
<!-- My Company Start -->			
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>Over 10% of My Company's or Department's Work&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Select all that apply)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_overwork ORDER by sub_number ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	 
												
													if (in_array($row['name'] ,$overwork_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="overwork_id[]" class="webCheckbox" value="' . $row['name'] . '" id="overwork_id" ' . $t . '>
														<label for="overwork_id">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {
												
													if (in_array($row['name'] ,$overwork_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="overwork_id[]" class="webCheckbox" value="' . $row['name'] . '" id="overwork_id" ' . $t . '>
														<label for="overwork_id">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {	
												
													if (in_array($row['name'] ,$overwork_id))
													$t = "checked";
													else
													$t = "";													
												
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="overwork_id[]" class="webCheckbox" value="' . $row['name'] . '" id="overwork_id" ' . $t . '>
														<label for="overwork_id">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div>			   
		   
<!-- My Company End -->
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>			   
		   
		   
		   
<!-- Acreage Start -->			
		
<div class="container-fluid">
	
	<style>

		.webRadio {
			-webkit-appearance: radio !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>The Annual Acreage My Company or Department Works On is&nbsp;&nbsp;&nbsp;<br><span style="font-size: 14px; font-weight: 400">*Required Field (Please Choose One)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_acreage ORDER by sub_number ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
											
											if ($rcount == 0) {	 
													if ($row["name"] == $acreage_id) {  $t = "checked"; } else { $t = " ";}												
												 echo '<div class="row"><div class="col-sm-3">
														<input type="radio" name="acreage_id" class="webRadio" value="' . $row['name'] . '" id="acreage_id" ' . $t . '>
														<label for="acreage_id">&nbsp;' . $row['name'] . '</label> 
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {
													if ($row["name"] == $acreage_id) {  $t = "checked"; } else { $t = " ";}												
												 echo '<div class="col-sm-3">
														<input type="radio" name="acreage_id" class="webRadio" value="' . $row['name'] . '" id="acreage_id" ' . $t . '>
														<label for="acreage_id">&nbsp;' . $row['name'] . '</label> 
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {
													if ($row["name"] == $acreage_id) {  $t = "checked"; } else { $t = " ";}												
												 echo '<div class="col-sm-3">
														<input type="radio" name="acreage_id" class="webRadio" value="' . $row['name'] . '" id="acreage_id" ' . $t . '>
														<label for="acreage_id">&nbsp;' . $row['name'] . '</label> 
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div><br><br><br>
<!-- Acreage End -->					   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>	
		   
<!-- My Company Is Start -->			
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>My Company or Department Is A&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Select all that apply)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_sites ORDER by sub_number ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	 
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="sites_id[]" class="webCheckbox" value="' . $row['name'] . '" id="sites_id">
														<label for="sites_id">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {	 
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="sites_id[]" class="webCheckbox" value="' . $row['name'] . '" id="sites_id">
														<label for="sites_id">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {	 
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="sites_id[]" class="webCheckbox" value="' . $row['name'] . '" id="sites_id">
														<label for="sites_id">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div>			   
		   
<!-- My Company Is End -->		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>	
		   
		   
<!-- My Work Start -->			
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>My Work Includes&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Select all that apply)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_does ORDER by idAccount ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
										 	 $dresult = substr($row['name'], 0, 3);
										 
										 	  if ($dresult == '---') {
												  
												  $str2 = substr($row['name'], 3);
												  
												  $newName = $str2;
												  
												  $newLine = '&nbsp;';
												  
												  $newLine2 = '<label for="lasn1">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $newName . '</span></label>';
												  
											  } else {
												  
												 $newName = $row['name'];
												  
												 $newLine = '<input type="checkbox" name="does[]" class="webCheckbox" value="' . $newName . '" id="does">';
												  
												 $newLine2 = '<label for="does">&nbsp;' . $newName . '</label>';
												  
											  }
										 
											
											if ($rcount == 0) {	 
												 echo '<div class="row"><div class="col-sm-3">
														' . $newLine . '
														' . $newLine2 . '
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {	 
												 echo '<div class="col-sm-3">
														' . $newLine . '
														' . $newLine2 . '
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {	 
												 echo '<div class="col-sm-3">
														' . $newLine . '
														' . $newLine2 . '
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div>		   
<!-- My Work End -->		   
		   
   <div class="col-sm-12">
        <h4>&nbsp;</h4>													
    </div><br><br>	
		   
<!-- My Company Is Start -->			
<div class="container-fluid">
	
	<style>

		.webCheckbox {
			-webkit-appearance: checkbox !important;
			-webkit-border-radius:0px !important;
		}	
						
	</style>
	
 <div class="col-lg-10 col-sm-offset-2">
		
  <div class="row">
    <div class="col-sm-8">
          <center><h3>I Am a Member of the Following Association(s)&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Select all that apply)</span></h3></center>		
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
																					
								$sql = "SELECT * FROM type_assoc ORDER by idAccount ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$rcount = 0;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
											
											if ($rcount == 0) {	 
												 echo '<div class="row"><div class="col-sm-3">
														<input type="checkbox" name="assoc[]" class="webCheckbox" value="' . $row['name'] . '" id="assoc">
														<label for="assoc">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 1) {	 
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="assoc[]" class="webCheckbox" value="' . $row['name'] . '" id="assoc">
														<label for="assoc">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div>';
														$rcount++;
											} elseif ($rcount == 2) {	 
												 echo '<div class="col-sm-3">
														<input type="checkbox" name="assoc[]" class="webCheckbox" value="' . $row['name'] . '" id="assoc">
														<label for="assoc">&nbsp;<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span></label>
													  </div></div>';
														$rcount = 0;
											}
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
		
		
	  </div>	  
  </div>			   
		   
<!-- My Company Is End -->		   		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
  
</div>	
	
<?
							
							$sql="select * from subscribe where id='" . $_GET['id'] . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									if (!empty($row['opt_ineb'])) {

                                        
                                        $str = $row['opt_ineb'];
                                        
                                        list($opt_ineb001, $opt_ineb002, $opt_ineb003, $opt_ineb004, $opt_ineb005, $opt_ineb006, $opt_ineb007, $opt_ineb008, $opt_ineb009, $opt_ineb010, $opt_ineb011, $opt_ineb012, $opt_ineb013, $opt_ineb014, $opt_ineb015, $opt_ineb016, $opt_ineb017) = explode(',', $str);                                        
                                      
										
									}
									
								}                                															
							
							
							
?>
	
	
	
	
	
	
	

	
	
	
</div>					
		
		
      <section class="content_sec full_width">
        <div class="login_cover">
   	
              <!-- /.col-sm-12 -->
              <div class="col-sm-12">
                <button type="submit">Continue to Step 2 of 3</button>
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