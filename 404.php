
<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
		include $include_path . "lo_header-main2-new-js2.inc";
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
		include("lo_top-main2-side-new.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
				<center><h1 style="font-family: Helvetica, Arial, 'sans-serif'">Page not found</h1><br>
					
					<p>Use the search engine on the left panel or <br>
						
						This link to visit the <a href="http://landscapeonline.com"><span style="font-family: Helvetica, Arial, 'sans-serif'; font-weight: bold">Home Page</span></a></p>
					
				</center><br><br>
				
				
				<div style='width:750px; height:2px; background-color:#605b51; position: relative; left: 37px'> </div><br>
				
				
					<div style="position: relative; left: 25px; top: 15px; width: 800px">
					<center><h3 style="position: relative; left: -15px; font-family: Helvetica, Arial, 'sans-serif'">Top Stories of the Week<h3></center><br>		
					


									<?
	


										// start for the banner add counting and getting from table

											$key = "TLE-LBtrans";
					
											$xxx = 0;
											$zzz = 1;
					
											echo "<table style='position: relative; left: 5px'><tr>";

											$sql2333 = "SELECT * FROM editorial WHERE top IS NOT NULL ORDER BY top ASC";
											$result2333 = $conn->query($sql2333);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2333)) {
												
																$string =  $row['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash							
												
												
												
												
												
																if ($xxx == 0 && $zzz < 12) {														
																	echo "<td valign='top' width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'><img style='width: 242px; height: 141px' src='https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg&w=242'></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; width: 90%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . "</span><br></a><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; position: relative; top: -10px'>" .  date('m-d-y', $row['issue']) ."</span></figcaption></figure></center></div></td>";

																	$xxx++;
																} elseif ($xxx < 3 && $zzz < 12){
																	echo "<td valign='top' width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'><img style='width: 242px; height: 141px' src='https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg&w=242'></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; width: 90%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . "</span><br></a><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; position: relative; top: -10px'>" .  date('m-d-y', $row['issue']) ."</span></figcaption></figure></center></div></td>";

																	$zzz++;
																	$xxx++;
																} elseif ($zzz < 12) {
																	echo "</tr><tr><td valign='top' style='line-height: 10px'>&nbsp;</td</tr><tr><td width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'><img style='width: 242px; height: 141px' src='https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg&w=242'></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; width: 90%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . "</span><br></a><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; position: relative; top: -10px'>" .  date('m-d-y', $row['issue']) ."</span></figcaption></figure></center></div></td>";

																	$zzz++;
																	$xxx = 1;																	
																	
																}
																	
																
																} 
																
																
															echo "</tr></table>";
									?>	
									
										  		
					</div>	<br><br>				
				
				
				<div style='width:750px; height:2px; background-color:#605b51; position: relative; left: 37px'> </div><br>
						
						
					<div style="position: relative; left: 10px; top: 15px; width: 800px">
					<center><h3 style="font-family: Helvetica, Arial, 'sans-serif'">Featured Products<h3></center><br>		
					

									<?
									
	

										// start for the banner add counting and getting from table

					
											$key = "TLE-LBtrans";
					
											$xxx = 0;
											$zzz = 1;
					
											echo "<table style='position: relative; left: 5px'><tr>";

											$sql2333 = "SELECT * FROM vendor_product WHERE featured = 'yes' ORDER BY rand() LIMIT 0,15";
											$result2333 = $conn->query($sql2333);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2333)) {
												
															
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
												
												
												
																if ($xxx == 0 && $zzz < 12) {														
																	echo "<td valign='top' width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row["vendor_id"] . "/" . $row["id"] . "'><div class='limage'><img class='limage2' src='https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/" . $row[photo] . "&w=225' alt='Product Image'></div></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row["vendor_id"] . "/" . $row["id"] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; width: 90%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</span><br></a></figcaption></figure></center></div></td>";

																	$xxx++;
																} elseif ($xxx < 3 && $zzz < 12){
																	echo "<td valign='top' width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row["vendor_id"] . "/" . $row["id"] . "'><div class='limage'><img class='limage2' src='https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/" . $row[photo] . "&w=225' alt='Product Image'></div></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row["vendor_id"] . "/" . $row["id"] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; width: 90%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</span><br></a></figcaption></figure></center></div></td>";

																	$zzz++;
																	$xxx++;
																} elseif ($zzz < 12) {
																	echo "</tr><tr><td valign='top' style='line-height: 10px'>&nbsp;</td</tr><tr><td width='250px' align='center'><div><center><figure><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row["vendor_id"] . "/" . $row["id"] . "'><div class='limage'><img class='limage2' src='https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/" . $row[photo] . "&w=225' alt='Product Image'></div></a><br><table><tr><td style='line-height: 5px'>&nbsp;</td></tr></table><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row["vendor_id"] . "/" . $row["id"] . "'><figcaption><span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; width: 90%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</span><br></a></figcaption></figure></center></div></td>";

																	$zzz++;
																	$xxx = 1;																	
																	
																}
																	
																
																} 
																
																
															echo "</tr></table>";
															include("lo_top-main2-bottom.inc");
						
						
												mysqli_close($conn);
						

									?>	
																		
																		
																		
																		
																		
								
								
								
								
								
								
								
									


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





