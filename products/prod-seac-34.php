
<?
include("lo_top-main2-prod.inc");

	$keyword = str_replace(' ', '%', trim($_POST['keywrd'])); 

	if (!empty($keyword)){

	$keywordSE = $keyword;
		
	} else {
		
	$keywordSE = $_GET['keywordSE3'];
		
	}

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
			
	
	
	
	
	
	
	
	
	<div style="position:absolute; left: 550px; top: 200px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Keyword Search For: <? echo $keywordSE ?></h3></center><br>
                   
                   
	</div>					
			
			
			

			
				<div style="position:absolute; left: 275px; top:240px; z-index: 0">
						
						
						<form method="post" action="prod-seac-34.php">
						
							<center><label><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Enter Keyword for Search</span></label><br>
							<input type="text" name="keywrd" value="<? echo $keywordSE ?>" style="width: 250px; height: 20px; padding: 3px; box-shadow: 5px 5px 5px #888888" placeholder="Please enter Keyword"><br>
								<input type="submit" value="Submit" style="background-color: #4fb548; position: relative; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"></center>
							
						</form>
							
							
					
				<div style="position: relative; left: 0px; top: 25px">
                   			
				<div style='width:750px; height:2px; background-color:#605b51;'> </div><br>
                   			
	
	<div style="position:relative; left: -15px; top: -25px; z-index: 0; width: 700px">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; font-weight: bold">Results From: Featured Articles and News</h3></center><br>
			
				<div style="position:absolute; left: 40px; top:15px; z-index: 0">
								
								
   
									
						<?php
	
						$keywordSE2 = $keywordSE;
	
	
						// database connection info
						$conn = mysql_connect('localhost','landscap_lol','meow2meow') or trigger_error("SQL", E_USER_ERROR);
						$db = mysql_select_db('landscap_lollive',$conn) or trigger_error("SQL", E_USER_ERROR);

						// find out how many rows are in the table 
						$sql = "SELECT COUNT(*) FROM editorial WHERE (title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 . "%' OR keywords LIKE '%" . $keywordSE2 . "%') AND title NOT LIKE '%LO Weekly%' ";
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
						$r = mysql_fetch_row($result);
						$numrows = $r[0];

						// number of rows to show per page
						$rowsperpage = 3;
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
						$sql = "SELECT * FROM editorial WHERE (title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 . "%' OR keywords LIKE '%" . $keywordSE2 . "%') AND title NOT LIKE '%LO Weekly%' ORDER BY id DESC LIMIT $offset, $rowsperpage";
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);

						// while there are rows to be fetched...
						while ($list = mysql_fetch_assoc($result)) {
							
									$searchvalue = implode('<span style="color:green;font-weight:800;">'.$keywordSE2.'</span>',explode($keywordSE2,$list['ed_text']));
							
			
														
							
						   // echo data
						   echo "<table>";
						   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'><img style='max-height: 125px; max-width: 125px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/research/images/" . $list['id'] . ".jpg'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['title']))) . "</a></strong><br /><strong>Author:</strong> " .  $list['author'] . "<strong><br>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</td></tr><br />" ;
						} // end while
						   echo "<table><h4>View More News for: " . $keywordSE2 . "</h4>";

						/******  build the pagination links ******/
						// range of num links to show
						$range = 3;

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
						?>					
					
					
					
				</div>
				
				</div>
				
			
					
							
							
							
		
				
			
			</td>
			
			
			
		</tr>
	</table>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>

				<div style='position: relative; top: 300px; width:750px; height:2px; background-color:#605b51;'> </div><br>


	<div style="position:absolute; left: 0px; top: 385px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 24px; font-weight: bold">Results From: Featured Advertisers</h3></center><br>
			
				<div id="content" style="position:absolute; left: 40px; top:15px; z-index: 0">
								
								
		<?				   
					   				// 18 Start
					   
												// Start of SE4 sort
					   
					   
										// Products Start

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
					   
					   
											$sql525 = "SELECT DISTINCT vendor_id FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.description LIKE '%". $keywordSE ."%' AND new_vendor.status='18' ORDER BY RAND()";
											$result525 = $conn->query($sql525);
					   
					   
											// product counting section
					   
					   
					   
							
											while($row = mysqli_fetch_array($result525)) {
												
												$numbers = $row['vendor_id'];
												

										// start produt row count from table
							
											$key4 = $keywordSE;							
											//$key2 = "28909";

											$sql25 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.description LIKE '%". $keywordSE ."%' AND vendor_product.vendor_id='" . $numbers . "' ORDER BY vendor_product.vendor_id DESC";
											$result25 = $conn->query($sql25);
					   
					   
											// product counting section
					   
					   						$rowNum = 0;
							
											while($row = mysqli_fetch_array($result25)) {
												
												
												if ($row['vendor_id'] != $rowNum) {
													$rowNum = $row['vendor_id'];
														$sql15 = "SELECT * FROM vendor_product WHERE vendor_id='". $rowNum ."' AND description LIKE '%". $key4 ."%'";
														$result15 = $conn->query($sql15);
																$webNum2 = $row['website'];
																$webNum = $row['web'];
																$morProd = $rowNum;
													
															// product layout section
															$row_cnt = $result15->num_rows;
															if ($row_cnt > 4) {
																
															echo "<!-- Start Combo --><div id='" . $row['logo'] . "'><p style='line-height: 25px'>&nbsp;</p>";
													
													$sql6 = "SELECT * FROM vendor_product WHERE description LIKE '%". $key4 ."%' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result6 = $conn->query($sql6);
													
													
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result6)) {
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss < 2) {
																	echo "</tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																} 
																
																
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql199 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result199 = $conn->query($sql199);
																		while($row = mysqli_fetch_array($result199)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end
																
															echo "<div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://" . $webNum2 . "' target='_blank'>Contact Us </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
																
															?>	
																<link href="https://landscapearchitect.com/css/bootstrap.css" rel="stylesheet" type="text/css">

 																	
																
																<table>
																	<tr><td style='line-height: 10px'>&nbsp;</td></tr>
																	</table>
																<div class="panel-group" id="accordion<? echo $morProd; ?>" role="tablist" aria-multiselectable="true">
																	  <div class="panel panel-default" role="tab">
																		<div class="panel-heading">
																			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseOne<? echo $morProd; ?>"><span style="text-align: left"><strong>View Related Products From This Vendor</strong></span></a><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseTwo1<? echo $morProd; ?>"><span style="padding-left: 300px">Close Window</span></a></h4>
																		</div>
																		<div id="collapseOne<? echo $morProd; ?>" class="panel-collapse collapse">
																		  <div class="panel-body">
																		  <?
																		  
																			// Start Extra
																
																			// Products Start

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
																
																
																			// product layout section
																

																			echo "<div id='" . $row['logo'] . "'>&nbsp;</div>";

																	$sql86 = "SELECT * FROM vendor_product WHERE description LIKE '%". $key4 ."%' AND vendor_id='". $morProd . "' ORDER BY id DESC";
																	$result86 = $conn->query($sql86);

																			$ii = 0;
																			$ss = 1;
																			$qz = 15;
																			echo "<!-- Start View More Section --><table><tr>";
																		while($row = mysqli_fetch_array($result86)) {
																			
															if ($row['web'] == 'video') {
																
																			
																			
																				if ($ii < 3 && $ss <= $qz) {														
																					echo "<td align='left'><div><center><figure>" . $row['web_photo'] . "<br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																					$ii++;
																					$ss++;
																				}else{
																					echo "</tr><tr>";
																					$ii = 0;
																				}
																																				
															} else {																			
																			
																			
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss <= $qz) {
																	echo "</tr><tr><td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ss++;
																	$ii = 0;
																}
																				}} 


																			echo "</tr></table><!-- End View More Section -->";
																
																	$sql99 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result99 = $conn->query($sql99);
																		while($row = mysqli_fetch_array($result99)) {
																			$coName = $row['company_name'];
																			
																		}
																
																		  // End Extra
																		  
																		  ?>
																		  More Related Products from <? echo $coName; ?>																	  
																	  
																		  
																		  
																		  </div>
																		</div>
																		
																		  <div class="panel panel-default">
																			<div class="panel-heading">
																		
																			</div>
																			<div id="collapseTwo1<? echo $morProd; ?>" class="panel-collapse collapse">

																			  </div>
																		  </div>																		
																		
																		
																		
																  </div>
																</div>
																

																															
																<script src="https://landscapearchitect.com/js/jquery-1.11.3.min.js"></script>
																<script src="https://landscapearchitect.com/js/bootstrap.js"></script>																
															<?
													echo "<div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Combo -->";																
																
													}else{
																
																
															echo "<!-- Start Sgl --><div id='" . $row['logo'] . "'>&nbsp;</div><br>";
													
													$sql16 = "SELECT * FROM vendor_product WHERE description LIKE '%". $key4 ."%' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result16 = $conn->query($sql16);
	
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result16)) {
															
															
															if ($row['web'] == 'video') {
																
																if ($ii < 2 && $ss < 3) {														
																	echo "<td align='left'><div><center><figure>" . $row['web_photo'] . "<br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ii++;
																}else{
																	echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																
															} else {
															
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss < 2) {
																	echo "</tr><tr><td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ss++;
																	$ii = 0;
																}
																} }
																
																
																
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql299 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result299 = $conn->query($sql299);
																		while($row = mysqli_fetch_array($result299)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end																
																
																
																
																
															echo "<br><div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://" . $webNum2 . "' target='_blank'>Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
													
													echo "<br><div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Sgl -->";																												
																
																
																
																
															}
												}
											}	
											}
							
					   			// 18 End
								// End of SE4 sort
					   
					   			// 16 Start
					   
					
										// Products Start

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


										// start produt row count from table
							
											$key4 = $keywordSE;							
											//$key2 = "28909";

											$sql25 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.description LIKE '%". $keywordSE ."%' AND new_vendor.status='16' ORDER BY vendor_product.vendor_id DESC";
											$result25 = $conn->query($sql25);
					
											$num_rows = mysqli_num_rows($result25);

											// echo "$num_rows Rows\n";

					   
											// product counting section
					   
					   						$rowNum = 0;
							
											while($row = mysqli_fetch_array($result25)) {
												
												if ($row['vendor_id'] != $rowNum) {
													$rowNum = $row['vendor_id'];
														$sql15 = "SELECT * FROM vendor_product WHERE vendor_id='". $rowNum ."' AND description LIKE '%". $key4 ."%'";
														$result15 = $conn->query($sql15);
																$webNum2 = $row['website'];
																$webNum = $row['web'];
																$morProd = $rowNum;
													
															// product layout section
															$row_cnt = $result15->num_rows;
															if ($row_cnt > 2) {
																
															echo "<!-- Start Combo --><div id='" . $row['logo'] . "'><p style='line-height: 25px'>&nbsp;</p>";
													
													$sql6 = "SELECT * FROM vendor_product WHERE description LIKE '%". $key4 ."%' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result6 = $conn->query($sql6);
													
													
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
																
																
														while($row = mysqli_fetch_array($result6)) {
															
															$links = substr('' . $row["web_photo"]. '', 0, 4);
												
															// echo $links;
												
																if ($links == 'http'){															
															
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss < 2) {
																	echo "</tr><tr>";
																	$ss++;
																	$ii = 0;
																}
																	
																} else {
																	
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss < 2) {
																	echo "</tr><tr>";
																	$ss++;
																	$ii = 0;
																}																	
																	
																	
																	
																}
																	
																	
																	
																	
																	
																} 
																
																
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql199 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result199 = $conn->query($sql199);
																		while($row = mysqli_fetch_array($result199)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end
																
															echo "<div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://" . $webNum2 . "' target='_blank'>Contact Us </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
																
															?>	
																<link href="https://landscapearchitect.com/css/bootstrap.css" rel="stylesheet" type="text/css">

 																	
																
																<table>
																	<tr><td style='line-height: 10px'>&nbsp;</td></tr>
																	</table>
																<div class="panel-group" id="accordion<? echo $morProd; ?>" role="tablist" aria-multiselectable="true">
																	  <div class="panel panel-default" role="tab">
																		<div class="panel-heading">
																			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseOne<? echo $morProd; ?>"><span style="text-align: left"><strong>View Related Products From This Vendor</strong></span></a><a data-toggle="collapse" data-parent="#accordion<? echo $morProd; ?>" href="#collapseTwo1<? echo $morProd; ?>"><span style="padding-left: 300px">Close Window</span></a></h4>
																		</div>
																		<div id="collapseOne<? echo $morProd; ?>" class="panel-collapse collapse">
																		  <div class="panel-body">
																		  <?
																		  
																			// Start Extra
																
																			// Products Start

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
																
																
																			// product layout section
																

																			echo "<div id='" . $row['logo'] . "'>&nbsp;</div>";

																	$sql86 = "SELECT * FROM vendor_product WHERE description LIKE '%". $key4 ."%' AND vendor_id='". $morProd . "' ORDER BY id DESC";
																	$result86 = $conn->query($sql86);

																			$ii = 0;
																			$ss = 1;
																			$qz = 15;
																			echo "<!-- Start View More Section --><table><tr>";
																		while($row = mysqli_fetch_array($result86)) {
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss <= $qz) {
																	echo "</tr><tr><td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ss++;
																	$ii = 0;
																}
																				} 


																			echo "</tr></table><!-- End View More Section -->";
																
																	$sql99 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result99 = $conn->query($sql99);
																		while($row = mysqli_fetch_array($result99)) {
																			$coName = $row['company_name'];
																			
																		}
																
																		  // End Extra
																		  
																		  ?>
																		  More Related Products from <? echo $coName; ?>																	  
																	  
																		  
																		  
																		  </div>
																		</div>
																		
																		  <div class="panel panel-default">
																			<div class="panel-heading">
																		
																			</div>
																			<div id="collapseTwo1<? echo $morProd; ?>" class="panel-collapse collapse">

																			  </div>
																		  </div>																		
																		
																		
																		
																  </div>
																</div>
																

																															
																<script src="https://landscapearchitect.com/js/jquery-1.11.3.min.js"></script>
																<script src="https://landscapearchitect.com/js/bootstrap.js"></script>																
															<?
													echo "<div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Combo -->";																
																
															// start of smaller section images
																
															}else{
																
																
															echo "<!-- Start Sgl --><div id='" . $row['logo'] . "'>&nbsp;</div><br>";
													
													$sql16 = "SELECT * FROM vendor_product WHERE description LIKE '%". $key4 ."%' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result16 = $conn->query($sql16);
																
													
													
															$ii = 0;
															$ss = 1;
															echo "<table><tr>";
															echo '<td rowspan="3" width="300px"><img width="60%" style="max-height: 135px" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result16)) {
															
															$links = substr('' . $row["web_photo"]. '', 0, 4);
												
															// echo $links;
												
																if ($links == 'http'){																														
															
															
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss < 2) {
																	echo "</tr><tr><td align='left'><div><center><figure><a href='" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ss++;
																	$ii = 0;
																}
																	
																} else {
																	
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																	
																} elseif ($ii < 3 && $ss < 2) {
																	echo "</tr><tr><td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 135px; max-width: 200px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	$ss++;
																	$ii = 0;
																}																	
																	
																	
																	
																	
																}
																	
																	
																	
																}  
															echo "</tr></table>";
																
																
																// Script for contact us start
																	$sql299 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result299 = $conn->query($sql299);
																		while($row = mysqli_fetch_array($result299)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end																
																
																
																
																
															echo "<br><div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://" . $webNum2 . "' target='_blank'>Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
													
													echo "<br><div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Sgl -->";																												
																
																
																
																
															}
												}
											}							
							
										// end produt row count from table
							
							
										// Start 14 Section
			   
			   
										// Products Start

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


										// start produt row count from table
							
											$key4 = $_GET[number];							
											//$key2 = "28909";

											$sql25 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.description LIKE '%". $keywordSE ."%' AND new_vendor.status='14' ORDER BY vendor_product.vendor_id DESC";
											$result25 = $conn->query($sql25);
					   
					   
											// product counting section
					   
					   						$rowNum = 0;
							
											while($row = mysqli_fetch_array($result25)) {
												
												if ($row['vendor_id'] != $rowNum) {
													$rowNum = $row['vendor_id'];
														$sql15 = "SELECT * FROM vendor_product WHERE vendor_id='". $rowNum ."' AND xlist='". $key4 ."'";
														$result15 = $conn->query($sql15);
																$webNum2 = $row['website'];
																$webNum = $row['web'];
																$morProd = $rowNum;
													
															// product layout section
															$row_cnt = $result15->num_rows;
															if ($row_cnt > 0) {
																
																
															echo "<!-- Start Sgl --><div id='" . $row['logo'] . "'>&nbsp;</div><br>";
													
													$sql16 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result16 = $conn->query($sql16);
																
													
													
															$ii = 0;
															$ss = 1;
															echo "<div style='padding-left: 100px'><table><tr>";
															echo '<td rowspan="3" width="250px"><img width="60%" style="height: auto" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result16)) {
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 169px; max-width: 250px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																}elseif ($ii < 2){
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 169px; max-width: 250px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;																	
																
																}
																}  
															echo "</tr></table></div>";
																
																
																// Script for contact us start
																	$sql299 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result299 = $conn->query($sql299);
																		while($row = mysqli_fetch_array($result299)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end																
																
																
																
																
															echo "<br><div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://" . $webNum2 . "' target='_blank'>Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
													
													echo "<br><div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Sgl -->";																												
																
																
																
																
															}
												}
											}							
							
										// end produt row count from table
							
				
										echo "</div>";
			   
			   
										// Start 12 Section
			   
					   
					
										// Products Start

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


										// start produt row count from table
							
											$key4 = $_GET[number];							
											//$key2 = "28909";

											$sql25 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.description LIKE '%". $keywordSE ."%' AND new_vendor.status='12' ORDER BY vendor_product.vendor_id DESC";
											$result25 = $conn->query($sql25);
					   
					   
											// product counting section
					   
					   						$rowNum = 0;
							
											while($row = mysqli_fetch_array($result25)) {
												
												if ($row['vendor_id'] != $rowNum) {
													$rowNum = $row['vendor_id'];
														$sql15 = "SELECT * FROM vendor_product WHERE vendor_id='". $rowNum ."' AND xlist='". $key4 ."'";
														$result15 = $conn->query($sql15);
																$webNum2 = $row['website'];
																$webNum = $row['web'];
																$morProd = $rowNum;
													
															// product layout section
															$row_cnt = $result15->num_rows;
															if ($row_cnt > 0) {
																
																
															echo "<!-- Start Sgl --><div id='" . $row['logo'] . "'>&nbsp;</div><br>";
													
													$sql16 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='". $rowNum . "' ORDER BY id DESC";
													$result16 = $conn->query($sql16);
																
													
													
															$ii = 0;
															$ss = 1;
															echo "<div style='padding-left: 100px'><table><tr>";
															echo '<td rowspan="3" width="250px"><img width="60%" style="height: auto" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '"></td>';
														while($row = mysqli_fetch_array($result16)) {
																if ($ii == 0 ) {														
																	echo "<td align='left'><div><center><figure><a href='http://" . $row['web_photo'] . "' target='_blank'><img style='max-height: 169px; max-width: 250px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'></a><br><figcaption style='width:100%'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . "</figcaption></figure></center></div></td><td style='width: 5px'>&nbsp;</td>";
																	
																	$ii++;
																	
																
																}
																}  
															echo "</tr></table></div>";
																
																
																// Script for contact us start
																	$sql299 = "SELECT * FROM new_vendor WHERE id='". $morProd . "'";
																	$result299 = $conn->query($sql299);
																		while($row = mysqli_fetch_array($result299)) {
																			$conName = $row['company_name'];
																			$conEmail = $row['email'];
																			
																		}
																
																?>
																
																<script>

																	function myButtonFunction<?php echo $morProd ?>() {

																		var comp = "<?php echo $conName ?>";
																		var coem = "<?php echo $conEmail ?>";
																		var coid = "<?php echo $morProd ?>";
																		window.open("https://landscapearchitect.com/products/prod-request3.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
																	   }



																</script>   																	
																
																
																
																
																<?
																// Script for contact us end																
																
																
																
																
															echo "<br><div><center><a href='http://" . $webNum2 . "' target='_blank'><h4>Visit Website</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://" . $webNum2 . "' target='_blank'>Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='https://landscapearchitect.com/products/listing-a.php?number=" . $rowNum . "' target='_blank'>View Vendor Profile</a> </h4></center></div>";
													
													echo "<br><div style='width:750px; height:2px; background-color:#605b51;'> </div><!-- End Sgl -->";																												
																
																
																
																
															}
												}
											}							
							
										// end produt row count from table
					
					?>
					
<div id="footer2" style="position:relative; left: 0px; top: 0px; z-index: 0; width: 700px">
		
		<center><h3 style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; padding-left: 0px">Other Suppliers Matching Keyword:  <? echo $_POST['keywrd'] ?></span></h3></center>
	
						
					<div style="position:relative; left: 0px">
									<!-- Top Logo Start -->
								
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

											$sql25 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.description LIKE '%". $keywordSE ."%' AND new_vendor.status='2' ORDER BY vendor_product.vendor_id DESC";
											$result25 = $conn->query($sql25);
					   
					   
											// product counting section
					   
					   						$rowNum = 0;

															$ii = 0;
															$ss = 1;
					   										$i = 1;
															$vendorNum = 0;
															$coName2 = "dog";
															$kk = 1;
			
															echo "<table align='center' width='700px'>";
			
												while($row = mysqli_fetch_array($result25)) {
													
													
													
												// start list one item
													
													if ($vendorNum != $row['vendor_id']) {
														
																			$coNum = $row['vendor_id'];
																
																			$sql500 = "SELECT * FROM new_vendor WHERE id = '". $coNum ."' ORDER BY zip DESC";
																			$result500 = $conn->query($sql500);	
																
																			while($row = mysqli_fetch_array($result500)) {
																				
																				
																				if ($coName2 != $row['company_name']) {
																					
																					
																				 if ($kk == 1) {
																					 echo "<tr>";
																				  }																					
																					
																					
																				echo "<td align='center'><a href='https://landscapearchitect.com/products/listing-a.php?number=" . $row['id'] . "' target='_blank'>" . $row['company_name'] . "</a><br>" . $row['phone'] . "<br>" . $row['city'] . "</td>";
																					
																				 if ($kk == 3) {
																					 $kk = 1;
																					 echo "</tr><tr><td style='line-height: 5px'>&nbsp;</td></tr>";
																				  }
																				  else {																					
																					
																				$coName2 = $row['company_name'];
																					
																				$kk++;
																				  }
																					
																				}
																				
																			}

														$vendorNum = $row['vendor_id'];
															}
													
												// end list 
															
												
														}
															echo "</table>";
																
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
					?>					
					
					
					<?
					
							
				
										echo "</div>";
			   
			   
			   
										// End 12 Section	
					
					?>
					
					
	
					
					
						
					
					
							
				
					   
					
					   
				
				</div>
				
				</div>
				
			
					
							
							




<?
include("lo_footer-main2-new.inc");
?>





