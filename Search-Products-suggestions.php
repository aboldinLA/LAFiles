
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
		include("lo_top-main2-side-new-js2.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			

	<div style="position:relative; left: 10px; top: 0px; z-index: 0">
		
   	
		
		
		
		<?
		
		
					$keywordSE4 = $_GET['keywordSE3'];
						
		
						if (!empty($keywordSE4)) {
							
							$keywordSE = $keywordSE4; 
						
						} elseif ($_POST['keywrd'] === NULL) {
							
							$keywordSE = $items2; 
							
						} elseif ($_POST['keywrd'] === "") {
							
							$keywordSE = $items2; 
							
						} else {
							
							$keywordSE = $_POST['keywrd']; 
							
						}					   	
	
	
					
					

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
		
		
												$number = $_GET['keywordSE3'];
			   

														$sql = "SELECT * FROM `xlist` WHERE `id` = '" . $number ."'";
														$result=mysqli_query($conn,$sql);
			   
			   
															while($row = mysqli_fetch_array($result)) {
																
																$catName =  $row['name'];
                                                                
                                                    if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                                        
                                                        $xName = "Landscape / Irrigation Supply";
                                                        
                                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                                        
                                                        $xName = "Irrigation Design";
                                                        
                                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                                        
                                                        $xName = "Plant Identification";
                                                        
                                                    } elseif ($row['name'] == "* SW - Site Design") {
                                                        
                                                        $xName = "Site Design";
                                                        
                                                    } elseif ($row['name'] == "* SW - Website Design") {
                                                        
                                                        $xName = "Website Design";
                                                        
                                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                                        
                                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                                        
                                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                                        
                                                        $xName = "Light Tools & Equipment";
                                                        
                                                    } elseif ($row['name'] == "W - Lighting") {
                                                        
                                                        $xName = "Lighting";
                                                        
                                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                                        
                                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                                        
                                                    } elseif ($row['name'] == "W - Power Equipment") {
                                                        
                                                        $xName = "Power Equipment";
                                                        
                                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                                        
                                                        $xName = "Small Engine Repair";
                                                        
                                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                                        
                                                        $xName = "Water Garden Supplies";
                                                        
                                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                                        
                                                        $xName = "Wholesale Aquatic Plants";
                                                        
                                                    } elseif ($row['name'] == "P - Bamboo") {
                                                        
                                                        $xName = "Bamboo";
                                                        
                                                    } elseif ($row['name'] == "P - Ground Cover") {
                                                        
                                                        $xName = "Ground Cover";
                                                        
                                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                                        
                                                        $xName = "Plant Brokers";
                                                        
                                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                                        
                                                        $xName = "Tree Relocation Services";
                                                        
                                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                                        
                                                        $xName = "Tree Research & Introduction";
                                                        
                                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                                        
                                                        $xName = "Trees - Palms";
                                                        
                                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                                        
                                                        $xName = "Trees - Wholesale";
                                                        
                                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                                        
                                                        $xName = "Tropical Foliage";
                                                        
                                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                                        
                                                        $xName = "Turf Grass / Sod / Seed";
                                                        
                                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                                        
                                                        $xName = "Wildflower Seeds";
                                                        
                                                    } else {
                                                        
                                                       $xName = $row['name'];
                                                        
                                                    }                                                                
                                                                
                                                                
                                                                

															}
			   
			   
											
		
		
		
		
		
		?>
	

              
					
				
                   			
	
		
	
	
						<div class="row">
						  <div class="col-md-10">	
	
	
	<div style="position:relative; left: 0px; top: 0px">
		
      
		<div style='width:90%; height:2px; background-color:#605b51;'> </div><br>
                                
                   <h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding-left: 100px">Suggested Products for: <? echo $xName ?></h3><br>
                                 
						<?
	
		
	
	

									
									
									
													
												$number = $_GET['keywordSE3'];
			   

														$sql23 = "SELECT * FROM `vendor_product` WHERE `xlist` LIKE '" . $number ."' ORDER BY RAND()";
														$result23=mysqli_query($conn,$sql23);
			   
			   
															while($row = mysqli_fetch_array($result23)) {
																
																
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash																			
																
																
																
								   echo "<table align='left' width='100%' style='padding-right: 15px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["vendor_id"] . "'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $row['photo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["vendor_id"] . "'>" .  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['product_name']))) ."</a></strong><br>" .  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['description']))) ."<br><strong><br>Date:</strong> " .  date('m-d-y', strtotime($row['photo_time'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
																
																
																
																

															}
			   
			   
												$conn->close();	
									
										
										
										
									
										
										
										
										
										
										
					
	
								   

					?>	
		
					
					
							  </div>		
					
							  </div>		
		
	
				
				
					
                   			
                   										
		
              
				
				

			  </td>
			  
				<style>
					
		.adShift {
			position: relative;
			left: -15px;
			top: -65px;
		}	
					
		.adSize {
			width: 350px;
		}						
					
		@media screen and (max-width: 400px) {
			
		.adShift {
			position: absolute;
			left: 100px;
		}			
			
		.adSize {
			width: 100%;
		}		
			
			
			
			  	</style>
			  
			  
			  
			  
			  
			  
			  
			  <td class="adShift" valign="top" align="left">
				  
				  
				  
				  
				  
				  	<!-- Banner Start -->
				  
							<?
				  
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
				  


							?>	
				  
				  	<!-- Banner End -->
				  
			  </td>
		  </tr>
	  </table>
	
	<div style="position: relative; left: 250px; top: 50px">
		<? 	//include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>



