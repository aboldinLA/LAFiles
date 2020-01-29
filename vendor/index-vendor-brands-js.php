
<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	
		<?
			include("lo_top-main2-side2-js50.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side2-js-banner.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			
		
				<?
		
									// Category Name Start

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

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT * FROM new_vendor WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
																					   
												   
		
		
			?>	
		
		<div style="position: relative; left: 0px">
			<center><h2>Welcome <? echo $row['company_name'] ?></h2>
			
			<h3>Edit the Brands/Plants/Turf that You Sell</h3></center>
		</div><br><br>
		
		<?
				
										   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    
				
		?>
		
		
		<div>
		
			
			<form name="form_hard" action="update-hard.php" method="post" target="_blank">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >
				
			
				<?
		
									// Category Name Start

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

			
											$sql = "SELECT * FROM `brands_hard` WHERE `h_id` LIKE '%h%'";
											$result=mysqli_query($conn,$sql);
											
									
										// banner rotating section
												
											 
				
											$xxx = 0;
											$zzz = 1;
					
											echo "<table align='center' width='763 px' style='position: relative; left: 5px'><tr><td colspan='3'><center><h3>Choose All The Hardscape Brands That Apply</h3></center></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";

											$sql = "SELECT * FROM `brands_hard` WHERE `h_id` LIKE '%h%'";
											$result=mysqli_query($conn,$sql);	
				
				
			
											$key5 = $_GET['id'];	
		
								
			

											$sql55 = "SELECT brands_h FROM new_vendor WHERE id='" . $key5 . "' ";
											$result55=mysqli_query($conn,$sql55);
											
		
		
									
										// banner rotating section
												
											   
					   
		
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
													$pieces = explode(",", $row['brands_h']);
												   
												   
														$names = explode(",", $row['brands_h']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }				
				
											$vard = $names[6];
				
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result)) {
												
																
												
																if ($xxx == 0) {
																	
																	echo '<td><input type="checkbox" name="hard' . $row['h_id'] . '" value="' . $row['h_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] . '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	echo '<td><input type="checkbox" name="hard' . $row['h_id'] . '" value="' . $row['h_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	echo '</tr><tr><td><input type="checkbox" name="hard' . $row['h_id'] . '" value="' . $row['h_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Hardscape Updates" />
			</form>	
		
		
		</div><br><br>	
		
		<div>
		
			
			<form name="form_irri" action="update-irri.php" method="post">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >
			
				<?
		
									// Category Name Start

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

			
											$sql = "SELECT * FROM `brands_irri` WHERE `i_id` LIKE '%i%'";
											$result=mysqli_query($conn,$sql);
											
									
										// banner rotating section
												
											 
				
											$xxx = 0;
											$zzz = 1;
					
											echo "<table align='center' width='763 px' style='position: relative; left: 5px'><tr><td colspan='3'><center><h3>Choose All The Irrigation Brands That Apply</h3></center></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";

											$sql22 = "SELECT * FROM `brands_irri` WHERE `i_id` LIKE '%i%'";
											$result22=mysqli_query($conn,$sql22);	
				
				
			
											$key5 = $_GET['id'];	
		
								
			

											$sql55 = "SELECT brands_i FROM new_vendor WHERE id='" . $key5 . "' ";
											$result55=mysqli_query($conn,$sql55);
											
		
		
									
										// banner rotating section
												
											   
					   
		
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
													$pieces = explode(",", $row['brands_i']);
												   
												   
														$names = explode(",", $row['brands_i']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }				
				
											$vard = $names[6];
				
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result)) {
												
																
												
																if ($xxx == 0) {
																	
																	echo '<td><input type="checkbox" name="irri' . $row['i_id'] . '" value="' . $row['i_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] .  '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	echo '<td><input type="checkbox" name="irri' . $row['i_id'] . '" value="' . $row['i_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	echo '</tr><tr><td><input type="checkbox" name="irri' . $row['i_id'] . '" value="' . $row['i_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Irrigation Updates" />
			</form>	
		
		
		</div><br><br>			
		
		<div>
		
			
			<form name="form_ligh" action="update-light.php" method="post">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >
			
				<?
		
									// Category Name Start

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

			
											$sql = "SELECT * FROM `brands_ligh` WHERE `l_id` LIKE '%l%'";
											$result=mysqli_query($conn,$sql);
											
									
										// banner rotating section
												
											 
				
											$xxx = 0;
											$zzz = 1;
					
											echo "<table align='center' width='763 px' style='position: relative; left: 5px'><tr><td colspan='3'><center><h3>Choose All The Lighting Brands That Apply</h3></center></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";

											$sql22 = "SELECT * FROM `brands_ligh` WHERE `l_id` LIKE '%l%'";
											$result22=mysqli_query($conn,$sql22);	
				
				
			
											$key5 = $_GET['id'];	
		
								
			

											$sql55 = "SELECT brands_l FROM new_vendor WHERE id='" . $key5 . "' ";
											$result55=mysqli_query($conn,$sql55);
											
		
		
									
										// banner rotating section
												
											   
					   
		
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
													$pieces = explode(",", $row['brands_l']);
												   
												   
														$names = explode(",", $row['brands_l']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }				
				
											$vard = $names[6];
				
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result)) {
												
																
												
																if ($xxx == 0) {
																	
																	echo '<td><input type="checkbox" name="ligh' . $row['l_id'] . '" value="' . $row['l_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] .  '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	echo '<td><input type="checkbox" name="ligh' . $row['l_id'] . '" value="' . $row['l_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	echo '</tr><tr><td><input type="checkbox" name="ligh' . $row['l_id'] . '" value="' . $row['l_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Lighting Updates" />
			</form>	
		
		
		</div><br><br>	
		
		
		<div>
		
			
			<form name="form_chem" action="update-chem.php" method="post">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >
			
				<?
		
									// Category Name Start

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

			
											$sql = "SELECT * FROM `brands_chem` WHERE `c_id` LIKE '%c%'";
											$result=mysqli_query($conn,$sql);
											
									
										// banner rotating section
												
											 
				
											$xxx = 0;
											$zzz = 1;
					
											echo "<table align='center' width='763 px' style='position: relative; left: 5px'><tr><td colspan='3'><center><h3>Choose All The T &amp; O Chemicals &amp; Admendments Brands That Apply</h3></center></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";

											$sql22 = "SELECT * FROM `brands_chem` WHERE `c_id` LIKE '%c%'";
											$result22=mysqli_query($conn,$sql22);	
				
				
			
											$key5 = $_GET['id'];	
		
								
			

											$sql55 = "SELECT brands_c FROM new_vendor WHERE id='" . $key5 . "' ";
											$result55=mysqli_query($conn,$sql55);
											
		
		
									
										// banner rotating section
												
											   
					   
		
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
													$pieces = explode(",", $row['brands_c']);
												   
												   
														$names = explode(",", $row['brands_c']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }				
				
											$vard = $names[6];
				
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result)) {
												
																
												
																if ($xxx == 0) {
																	
																	echo '<td><input type="checkbox" name="chem' . $row['c_id'] . '" value="' . $row['c_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] .  '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	echo '<td><input type="checkbox" name="chem' . $row['c_id'] . '" value="' . $row['c_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	echo '</tr><tr><td><input type="checkbox" name="chem' . $row['c_id'] . '" value="' . $row['c_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Chemicals &amp; Admendments Updates" />
			</form>	
		
		
		</div><br><br>	
		
		<div>
		
			
			<form name="form_tool" action="update-tool.php" method="post">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >
				
			
				<?
		
									// Category Name Start

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

			
											$sql = "SELECT * FROM `brands_tool` WHERE `t_id` LIKE '%t%'";
											$result=mysqli_query($conn,$sql);
											
									
										// banner rotating section
												
											 
				
											$xxx = 0;
											$zzz = 1;
					
											echo "<table align='center' width='763 px' style='position: relative; left: 5px'><tr><td colspan='3'><center><h3>Choose All The Tools &amp; Equipment Brands That Apply</h3></center></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";

											$sql22 = "SELECT * FROM `brands_tool` WHERE `t_id` LIKE '%t%'";
											$result22=mysqli_query($conn,$sql22);	
				
				
			
											$key5 = $_GET['id'];	
		
								
			

											$sql55 = "SELECT brands_t FROM new_vendor WHERE id='" . $key5 . "' ";
											$result55=mysqli_query($conn,$sql55);
											
		
		
									
										// banner rotating section
												
											   
					   
		
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
													$pieces = explode(",", $row['brands_t']);
												   
												   
														$names = explode(",", $row['brands_t']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }				
				
											$vard = $names[6];
				
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result)) {
												
																
												
																if ($xxx == 0) {
																	
																	echo '<td><input type="checkbox" name="tool' . $row['t_id'] . '" value="' . $row['t_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] .  '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	echo '<td><input type="checkbox" name="tool' . $row['t_id'] . '" value="' . $row['t_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	echo '</tr><tr><td><input type="checkbox" name="tool' . $row['t_id'] . '" value="' . $row['t_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Tools &amp; Equipment Updates" />
			</form>	
		
		
		</div><br><br>								
		
		<div id="plant">
		
			
			<form name="form_plant" action="update-plant.php" method="post">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >

			
				<?
		
									// Category Name Start

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

			
											$sql = "SELECT * FROM `brands_plan` WHERE `p_id` LIKE '%p%'";
											$result=mysqli_query($conn,$sql);
											
									
										// banner rotating section
												
											 
				
											$xxx = 0;
											$zzz = 1;
					
											echo "<table align='center' width='763 px' style='position: relative; left: 5px'><tr><td colspan='3'><center><h3>Choose All The Plant Types That You Supply</h3></center></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";

											$sql22 = "SELECT * FROM `brands_plan` WHERE `p_id` LIKE '%p%'";
											$result22=mysqli_query($conn,$sql22);	
				
				
			
											$key5 = $_GET['id'];	
		
								
			

											$sql55 = "SELECT plants_s FROM new_vendor WHERE id='" . $key5 . "' ";
											$result55=mysqli_query($conn,$sql55);
											
		
		
									
										// banner rotating section
												
											   
					   
		
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
													$pieces = explode(",", $row['plants_s']);
												   
												   
														$names = explode(",", $row['plants_s']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }				
				
											$vard = $names[6];
				
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result)) {
												
																
												
																if ($xxx == 0) {
																	
																	echo '<td><input type="checkbox" name="plan' . $row['p_id'] . '" value="' . $row['p_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] .  '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	echo '<td><input type="checkbox" name="plan' . $row['p_id'] . '" value="' . $row['p_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	echo '</tr><tr><td><input type="checkbox" name="plan' . $row['p_id'] . '" value="' . $row['p_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Plant Updates" />
			</form>	
		
		
		</div><br><br>						
		
				<div>
		
			
			<form name="form_turf" action="update-turf.php" method="post">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >

			
				<?
		
									// Category Name Start

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

			
											$sql = "SELECT * FROM `brands_turf` WHERE `tu_id` LIKE '%t%'";
											$result=mysqli_query($conn,$sql);
											
									
										// banner rotating section
												
											 
				
											$xxx = 0;
											$zzz = 1;
					
											echo "<table align='center' width='763 px' style='position: relative; left: 5px'><tr><td colspan='3'><center><h3>Choose All The Turf Types That You Supply</h3></center></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";

											$sql22 = "SELECT * FROM `brands_turf` WHERE `t_id` LIKE '%t%'";
											$result22=mysqli_query($conn,$sql22);	
				
				
			
											$key5 = $_GET['id'];	
		
								
			

											$sql55 = "SELECT plants_t FROM new_vendor WHERE id='" . $key5 . "' ";
											$result55=mysqli_query($conn,$sql55);
											
		
		
									
										// banner rotating section
												
											   
					   
		
											   while($row = mysqli_fetch_assoc($result55)) {
												   
												   
													$pieces = explode(",", $row['plants_t']);
												   
												   
														$names = explode(",", $row['plants_t']);
														foreach($manrat as $manrate) {
														 $names[] = $manrate['manufacturer'];
														}												   
												   
												   
											   }				
				
											$vard = $names[6];
				
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result)) {
												
																
												
																if ($xxx == 0) {
																	
																	echo '<td><input type="checkbox" name="turf' . $row['tu_id'] . '" value="' . $row['tu_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] .  '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	echo '<td><input type="checkbox" name="turf' . $row['tu_id'] . '" value="' . $row['tu_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	echo '</tr><tr><td><input type="checkbox" name="turf' . $row['tu_id'] . '" value="' . $row['tu_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Turf Updates" />
			</form>	
		
		
		</div><br><br>	
		
		<a href='/vendor/index-vendor-js.php'><img src='https://landscapearchitect.com/imgz2/back-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a>
		
		
		
	
	</div>	
				
		
			
			</td>
			
			
			
		</tr>
	</table><br>
    
    

                                  <script type='text/javascript'>
                                      
                                    javascript:self.close();window.opener.location.reload(true);
                                      
                                  </script>    
    
	
	<div style="position: relative; left: 250px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





