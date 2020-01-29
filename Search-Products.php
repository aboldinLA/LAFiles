
<?
include("lo_top-common.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
		include $include_path . "lo_header-common.inc";
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
			include("lo_banner-common.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_left-side-common.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			

	<div style="position:relative; left: 10px; top: 0px; z-index: 0">
		
   	
		
		
		
		
					<?
		
		
						$items = Array("sidewalk","playground","paver","bicycle","spotlight");
						
						$items2 = $items[array_rand($items)];
		
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
		
		
		
		
					   
					   ?>
			
                <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Keyword Product Search: <? echo $keywordSE; ?></h3></center><br>
                   
                   
	</div>		
			
				<div style="position:absolute; left: 10px; top: 85px; z-index: 0">
                    
						
									<script>
										function mySubmit(wtf) {
										  if ('Search Site' == wtf ) {
											  document.forms['myForm'].action = 'Search-Article.php?keywordSE3=<? echo $keywordSE; ?>';
										  } else if ('Search Products' == wtf ) {
											  document.forms['myForm'].action = 'Search-Products.php?keywordSE3=<? echo $keywordSE; ?>';
										  } else
											  return false;

										  document.forms['myForm'].submit();
										}
									</script>									
									
									
									
						
									<form id="myForm"  method="post" action="Search-Products.php" style="position: relative; left: 245px; top: -40px">

										<input type="text" name="keywrd" value="<? echo $keywordSE ?>"  style="width: 235px; height: 20px; z-index: 75000; padding: 3px; box-shadow: 5px 5px 5px #888888; position: relative; left: -5px" placeholder="Please Enter Keyword"><br>
										 
                                        

									</form>					
					
					
									<?
									
										// premium vendor Start

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
								   
								   

										   


											$link = mysql_connect("localhost", "landscap_lol", "meow2meow");
											mysql_select_db("landscap_lollive", $link);

											$result = mysql_query("SELECT * FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%' ORDER BY `id` DESC", $link);
											$num_rows33 = mysql_num_rows($result);	
								   
								   
								   
								   if ($num_rows33 != 0){
								   

					?>
					
					
		
				<div id="featured" style="position: relative; left: 0px; top: 0px">
					
							<center><h3>Suggested Product Search Links:</h3></center><br>
					
				
				
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
									   
									
											$sql77 = "SELECT * FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%' ORDER BY `id` DESC";

											$result77 = $conn->query($sql77);
					   
													echo "<div style='position: relative; left: 50px; padding-bottom: 5px'>";
											   		echo "<table cellspacing='5px'><tr>";
					   								$xx = 0;
													$zCount = 0;					   

												while($row = mysqli_fetch_array($result77)) {
													
												   echo "<td width='250px'><a href='https://landscapearchitect.com/Search-Products-suggestions.php?keywordSE3=" . $row['id'] . "' target='_blank'>" . $row['name'] . "</a><br>";
												   $xx++;
												   $zCount++;
												   if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
												   $zCount++;
																	 }													
			
												}
					   
											   	echo "</tr></table><br>";
                                       
                                       
                                                ?>
                    
                    
										  	<input type="button" onclick="mySubmit('Search Site')" value="Search Articles Only" style="font-size: 14px; font-weight: bold; color: #FFFFFF; padding: 4px; position: relative; left: 225px; top: 5px; background-color: darkgreen">
  											
									</form><br><br>					
                    
                    
                                       
					                           <?                                       
                                       
                                       
					   
													echo "</div>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
									   
								   }
					   
									?>												
				
				
					
                   			
                   										
		
          
		
                   			
	
		
	
	
						<div class="row">
						  <div class="col-md-10">	
	
	
	<div style="position:relative; left: 0px; top: 0px">
		
      
		<div style='width:90%; height:2px; background-color:#605b51;'> </div><br>
                                
                   <h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding-left: 275px">Results: <? echo $keywordSE2 ?></h3><br>
                                 
						<?php
	
		
	
	
	
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
								   
	
	
						// database connection info
						$conn = mysql_connect('localhost','landscap_lol','meow2meow') or trigger_error("SQL", E_USER_ERROR);
						$db = mysql_select_db('landscap_lollive',$conn) or trigger_error("SQL", E_USER_ERROR);

						// find out how many rows are in the table 

						$sql = 	"(SELECT id, product_name, description, photo, cadd, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE . "%' OR `description` LIKE '%" . $keywordSE . "%' ORDER BY date DESC)
							UNION
								 (SELECT id, company_name, profile, logo, caddv as 'cadd', edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE . "%' OR `company_name` LIKE '%" . $keywordSE . "%' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, caddx as 'cadd', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%') ORDER BY date DESC";					   
					   
					   
					   
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
						$r = mysql_fetch_row($result);
					    $num_rows22 = mysql_num_rows($result);
					   
						$numrows = $r[0];

						// number of rows to show per page
						$rowsperpage = 20;
						// find out total pages
						$totalpages = ceil($numrows / $rowsperpage);
					   	// echo $totalpages . "<br>";

						// get the current page or set a default
						if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
						   // cast var as int
						   $currentpage = (int) $_GET['currentpage'];
						} else {
						   // default page num
						   $currentpage = 1;
						} // end if

						// if current page is greater than total pages...
						if ($currentpage > $totalpages) {
						   // set current page to last page
						   $currentpage = $totalpages;
						} // end if
						// if current page is less than first page...
						if ($currentpage < 1) {
						   // set current page to first page
						   $currentpage = 1;
						} // end if

						// the offset of the list, based on current page 
						$offset = ($currentpage - 1) * $rowsperpage;

						// get the info from the db 
						$sql = "(SELECT id, product_name, description, photo, cadd, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE . "%' OR `description` LIKE '%" . $keywordSE . "%' ORDER BY date DESC)
							UNION
								 (SELECT id, company_name, profile, logo, caddv as 'cadd', edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE . "%' OR `company_name` LIKE '%" . $keywordSE . "%' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, caddx as 'cadd', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%') ORDER BY date DESC
							LIMIT $offset, $rowsperpage";
					   
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);

						// while there are rows to be fetched...
						while ($list = mysql_fetch_assoc($result)) {
							
							
									// new pic method
									if ($list['type'] == "product") {
										
													
									$sql22 = "SELECT * FROM `vendor_product` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {													
													
									$number = $list['vendor_id'];	
                                        
																$string =  $list['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	                                        
                                        
													
									$linksProd = substr('' . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['description']))) . '', 0, 145);
                                        
                                        $prodPhoto = $list['photo'];
                                        
                                        if (empty($prodPhoto)) {
                                            
                                            $prodPhoto = "new-product.jpg";
                                            
                                        }
													
													
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $prodPhoto . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'>" .  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['product_name']))) ."</a></strong><br />" .  $linksProd . " ...<strong><br>Date:</strong> " .  date('m-d-y', strtotime($list['photo_time'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;															
												}										
										
										// echo "dog";
										
									} elseif ($list['type'] == "vendor") {
													
									$sql33 = "SELECT * FROM `new_vendor` WHERE `id` = '" .  $list['id'] . "' AND `status` != 2";
									$result33 = mysql_query($sql33, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result33)) {																		
													
									$number = $list['id'];	
                                        
																$string =  $list['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		                                        
                                        
												$linksVend = substr('' . htmlentities($list['profile']) . '', 0, 145);
													
													
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 15px; text-align: left'><strong><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'>" .  $list['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updated:</strong> " .  date('m-d-y', strtotime($list['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
															
															// echo  $list['id'] . " logo - " .  $list['logo'] . " Company Name - " .  $list['company_name'] ."<br>";
															
												}
										
										// echo "cat";
										
									} elseif ($list['type'] == "xlist") {
										
										
										
													
									$sql33 = "SELECT * FROM `new_vendor` WHERE `xlist` = '" .  $list['id'] . "' AND `status` != 2";
									$result33 = mysql_query($sql33, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result33)) {																		
									               $number = $list['id'];	
                                        
																$string =  $list['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
                                                    

												$linksVend = substr('' . htmlentities($list['profile']) . '', 0, 145);


											   echo "<table align='left' width='730px'>";
											   echo "<tr><td><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 15px; text-align: left'><strong><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'>" .  $list['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updated:</strong> " .  date('m-d-y', strtotime($list['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		

																		// echo  $list['id'] . " logo - " .  $list['logo'] . " Company Name - " .  $list['company_name'] ."<br>";

															}

													// echo "cat";
										
										
										
									}
										
										
										
										
										
										
						} // end while
					
					   if ($num_rows22 > 20) {	
						   
						$keywordSE4 = $_GET['keywordSE3'];
						
		
						if (!empty($keywordSE4)) {
							
							$keywordSE2 = $keywordSE4; 
						
						} elseif ($_POST['keywrd'] === NULL) {
							
							$keywordSE2 = "bicycle"; 
							
						} else {
							
							$keywordSE2 = $_POST['keywrd']; 
							
						}												   
						   
					
						   echo "<h4>View More News for: " . $keywordSE2 . "</h4>";
					

					
						/******  build the pagination links ******/
						// range of num links to show
						$range = 20;

						// if not on page 1, don't show back links
						if ($currentpage > 1) {
							
						
							
							
						   // show << link to go back to page 1
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
						   // get previous page num
						   $prevpage = $currentpage - 1;
						   // show < link to go back to 1 page
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
						} // end if 

						// loop to show links to range of pages around current page
						for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
						   // if it's a valid page number...
						   if (($x > 0) && ($x <= $totalpages)) {
							   
						
							  
							   
							  // if we're on current page...
							  if ($x == $currentpage) {
								 // 'highlight' it but don't make a link
								 echo " [<b>$x</b>] ";
							  // if not current page...
							  } else {
								 // make it a link
								 echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=" . $x . "&keywordSE3=" . $keywordSE2 ."'>$x</a> ";
							  } // end else
						   } // end if 
						} // end for

						// if not on last page, show forward and last page links        
						if ($currentpage != $totalpages) {
						   // get next page
						   $nextpage = $currentpage + 1;
							// echo forward link for next page 
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=" . $nextpage . "&keywordSE3=" . $keywordSE2 ."'>></a> ";
						   // echo forward link for lastpage
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
						} // end if
						/****** end build pagination links ******/
					   
												
						   
					   }
					   
								   
								   

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



