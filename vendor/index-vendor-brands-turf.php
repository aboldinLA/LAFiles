
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
			
			<h3>Edit The Turf You Supply</h3></center>
		</div><br><br>
		
		<?
				
										   
											   }
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    
				
		?>
		
		
					<div>
		
			
			<form name="form_turf" action="update-turf.php" method="post" >
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
																	
																	if ($names[0] == 't0001') {$chi = 'checked';}
																	
																	echo '<td><input type="checkbox" name="turf' . $row['tu_id'] . '" value="' . $row['tu_id'] . '" ' . $chi . ' />&nbsp;' . $row['name'] .  '</td>';
																	$xxx++;
																	
																} elseif ($xxx < 3){
																	
																	if (($names[1] == $row['tu_id']) || ($names[2] == $row['tu_id']) || ($names[4] == $row['tu_id']) || ($names[5] == $row['tu_id']) || ($names[7] == $row['tu_id']) || ($names[8] == $row['tu_id']) || ($names[10] == $row['tu_id']) || ($names[11] == $row['tu_id']) || ($names[13] == $row['tu_id']) || ($names[14] == $row['tu_id']) || ($names[16] == $row['tu_id']) || ($names[17] == $row['tu_id']) || ($names[19] == $row['tu_id']) || ($names[20] == $row['tu_id']) || ($names[22] == $row['tu_id']) || ($names[23] == $row['tu_id'])) {$chi2 = 'checked';}else{$chi2='&nbsp';}																	
																	echo '<td><input type="checkbox" name="turf' . $row['tu_id'] . '" value="' . $row['tu_id'] . '" ' . $chi2 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx++;
																	
																} elseif ($xxx == 3) {
																	
																	if (($names[3] == $row['tu_id']) || ($names[6] == $row['tu_id']) || ($names[9] == $row['tu_id']) || ($names[12] == $row['tu_id']) || ($names[15] == $row['tu_id']) || ($names[18] == $row['tu_id']) || ($names[21] == $row['tu_id']) || ($names[24] == $row['tu_id'])) {$chi3 = 'checked';}else{$chi3='&nbsp';}																	
																	echo '</tr><tr><td><input type="checkbox" name="turf' . $row['tu_id'] . '" value="' . $row['tu_id'] . '" ' . $chi3 . ' />&nbsp;' . $row['name'] . '</td>';

																	$xxx = 1;																	
																}
																		
																
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Turf Updates" style=" background-color: darkgoldenrod; box-shadow: 5px 5px 5px #888888; padding: 3px; font-size: 16px; cursor: pointer" />
			</form>	
		
		
		</div><br><br>	
		
		<a href='/vendor/index-vendor.php'><img src='https://landscapearchitect.com/imgz2/back-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a>
		
		
		
	
	</div>	
				
		
			
			</td>
			
			
			
		</tr>
	</table><br>
    
                            
    
	
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





