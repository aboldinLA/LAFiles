
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
		include("lo_top-main2-side2.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
				<script>
				function myFunction5() {
					var myWindow = window.open("", "", "width=300,height=200");
				}
				</script>			
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 50px; top: 0px; z-index: 0; width: 700px">
				
									<?
									
										// Article Start

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


										// start article from table
							
											$key2 = $_GET[number];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
													
												
									?>                                                               
                                
										<center><h2>Vendor Profile</h2></center><br><br>
										
										<? echo  "<img src='https://landscapearchitect.com/products/images/" . $row["logo"] . "'><br><br>"; ?>
										<? echo  "<h3>" . $row["company_name"] . "</h3>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Address:<span style='font-weight: 200'> " . $row["address"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>City/State/Zip:<span style='font-weight: 200'> " . $row["city"] . ",&nbsp;" . $row["state"] . ",&nbsp;" . $row["zip"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Phone:<span style='font-weight: 200'> " . $row["phone"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>FAX:<span style='font-weight: 200'> " . $row["fax"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Website:<span style='font-weight: 200'> " . $row["website"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 3px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Contact:<span style='font-weight: 200'> <a href='http://" . $row["website"] . "' target='_blank'>More Information</a></span></h4>"; ?>
										<? echo  "<p style='line-height: 7px'>&nbsp;</p>"; ?>
										<? echo  "<h4>Vendor Profile:<span style='font-weight: 200'> " . $row["profile"] . "</span></h4>"; ?>
										<? echo  "<p style='line-height: 10px'>&nbsp;</p>"; ?>
										
									<? } ?>	
									
									<?
									
										// Article Start

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


										// start article from table
							
											$key3 = $_GET[number];							
											//$key2 = "28909";

											$sql5 = "select * from vendor_product where vendor_id='" . $key3 . "'";
											$result5 = $conn->query($sql5);									
									
										// banner rotating section
		
											echo "<center><h2>Products</h2></center>";
											echo  "<p style='line-height: 10px'>&nbsp;</p>";
		
											while($row = mysqli_fetch_array($result5)) {
													
												
									?>                                                               
                                
									<div>
                                        <table>
                                        	<tr valign="top">
                                           	
											
												<?	if ($row['web'] == 'video') {

												?>
                                          	
                                           	<td><? 
	
												
												$rpho = $row['web_photo'];
												
												if (!empty($row['web_photo'])) {
													echo $row['web_photo'];
												} else {
													echo $row['web'];
												}
												
												
												 $row['web_photo'] ?></td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td valign="middle"><h3><? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) ?></h3>
                                                <? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['description']))); ?><br>
                                                <strong>Video Link:</strong> Click on image to watch video
                                            	</td>
                                        	</tr>
                                         </table>
                                         <p style='line-height: 5px'>&nbsp;</p><hr><p style='line-height: 5px'>&nbsp;</p>
									</div>
											<?										
										
												} else {                                           	
                                           	
                                           	
                                           	?>
                                           	
                                           	
                                            	<td><a href="<? 
	
												
												$rpho = $row['web_photo'];
												
												if (!empty($row['web_photo'])) {
													echo $row['web_photo'];
												} else {
													echo $row['web'];
												}
												
												
												?>" target="_blank"><img src="https://landscapearchitect.com/products/images/<? echo  $row['photo'] ?>"></a></td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td valign="middle"><h3><? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) ?></h3>
                                                <? echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['description']))); ?><br>
                                                Product Link:<br>
                                                <a href="<? echo  $row['web_photo'] ?>" target="_blank"><? echo  $row['web_photo'] ?></a>
                                            	</td>
                                        	</tr>
                                         </table>
                                         <p style='line-height: 5px'>&nbsp;</p><hr><p style='line-height: 5px'>&nbsp;</p>
									</div>
										
										
									<? } }?>										
									
	
	
	</div>					
			
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 275px">
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





