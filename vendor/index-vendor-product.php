
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
		
								
			

											$sql = "SELECT * FROM vendor_product WHERE id='" . $key5 . "' ";
											$result=mysqli_query($conn,$sql);
											
		
		
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
		
					   									$i = 1;
											   while($row = mysqli_fetch_assoc($result)) {
												   
												   
																					   
												   
		
		
			?>	
		
		<div style="position: relative; left: 0px">
			<center><h2>Welcome <? echo $row['company_name'] ?></h2>
			
			<h3>Edit <? echo iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))); ?></h3></center>
		</div><br><br>
		
	
		
		
		<div>
		
			
			<form name="form_tool" action="update-tool.php" method="post">
				<input type="hidden" name="id" value="<? echo $_GET['id'] ?>" >
				
			
				<?
		
									// Category Name Start
				
															

															echo '<center><img src="https://landscapearchitect.com/products/images/'. $row['photo'] . '"></center><br><br>';
															echo '<h3>Product Name: </h3><input type="text" name="product_name" value="'. iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) . '"><br><br>';
															echo ''. $row['description'] . '</center><br><br>';
															echo ''. $row['web'] . '<br><br>';
															echo ''. $row['cadd'] . '<br>';
															echo ''. $row['cadd2'] . '<br>';
															echo ''. $row['cadd3'] . '<br>';
															echo ''. $row['pdff'] . '<br>';
															echo ''. $row['skup'] . '<br>';
															echo ''. $row['vwxx'] . '<br>';
															echo ''. $row['mediap'] . '<br>';
			
																} 
																
																
															echo "</tr></table>";			
				
				
		  							mysqli_free_result($result);												   

					mysqli_close($conn);    

		
		
			?>				
		
                       <input type="submit" value="Submit Tools &amp; Equipment Updates" style=" background-color: darkgoldenrod; box-shadow: 5px 5px 5px #888888; padding: 3px; font-size: 16px" />
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





