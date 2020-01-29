
<?
include("lo_top-main2-prod.inc");
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
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-search.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
	
	
	
	
	
	
	
	<div style="position:relative; left: 0px; top: 0px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Product Keyword Search: </h3></center><br>
	</div>					
			
			
			
	<div style="position:absolute; left: 550px; top:225px; z-index: 0">
		<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Enter Your Keyword<br>
		<span style="font-size: 12px">(Then click submit or return)</span></h3></center>
	</div>
			
				<div style="position:absolute; left: 500px; top:275px; z-index: 0">
						
						
						<form method="post" action="prod-seac.php">
						
							<center><label><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Enter Keyword for Search</span></label><br>
							<input type="text" name="keywrd" style="width: 250px; height: 20px; box-shadow: 5px 5px 5px #888888" placeholder="Please enter Keyword"><br>
								<input type="submit" value="Submit" style="background-color: #4fb548; position: relative; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"></center>
							
						</form>
							
							
				<div id="featured" style="position: absolute; left: -220px; top: 75px">
					
				<div style="position: relative; left: 10px; top: 25px">
                   			
				<div style='width:750px; height:2px; background-color:#605b51;'> </div><br>
                    			
	
						
						
					<div style="position: relative; left: -25px; top: 15px; width: 800px">
					<center><h3 style="font-family: Helvetica, Arial, 'sans-serif'">Featured Products<h3></center><br>		
					

									<?
									
										// Economic Stories Start

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


										// start for the banner add counting and getting from table

					
											$key = "TLE-LBtrans";
					
											$xxx = 0;
											$zzz = 1;
					
											echo "<table><tr>";

											$sql2333 = "SELECT * FROM vendor_product WHERE featured = 'yes' ORDER BY rand() LIMIT 0,15";
											$result2333 = $conn->query($sql2333);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2333)) {
																if ($xxx == 0 && $zzz < 12) {														
																	echo "<td valign='top' width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "'><img style='max-height: 225px; max-width: 225px; overflow: scroll' src='https://landscapearchitect.com/products/images/" . $row[photo] . "' alt='Product Image'></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</span><br></a></figcaption></figure></center></div></td><td style='width: 10px'>&nbsp;</td>";

																	$xxx++;
																} elseif ($xxx < 3 && $zzz < 12){
																	echo "<td valign='top' width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "'><img style='max-height: 225px; max-width: 225px; overflow: scroll' src='https://landscapearchitect.com/products/images/" . $row[photo] . "' alt='Product Image'></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</span><br></a></figcaption></figure></center></div></td><td style='width: 10px'>&nbsp;</td>";

																	$zzz++;
																	$xxx++;
																} elseif ($zzz < 12) {
																	echo "</tr><tr><td valign='top' style='line-height: 10px'>&nbsp;</td</tr><tr><td width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "'><img style='max-height: 225px; max-width: 225px; overflow: scroll' src='https://landscapearchitect.com/products/images/" . $row[photo] . "' alt='Product Image'></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['vendor_id'] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</span><br></a></figcaption></figure></center></div></td><td style='width: 10px'>&nbsp;</td>";

																	$zzz++;
																	$xxx = 1;																	
																	
																}
																	
																
																} 
																
																
															echo "</tr></table>";
															include("lo_top-main2-bottom.inc");

									?>	

						
						
					</div>
					
									
					
					</div><br>
									
							
										
					</div>				
					
							
							
							
		
				
			
			</td>
			
			
			
		</tr>
	</table>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





