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


											$keyword44 = "dog";


											$sql25 = "SELECT * FROM editorial WHERE title LIKE '%" . $keyword44 . "%' OR ed_text LIKE '%" . $keyword44 ."%' ORDER BY id DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";



	   
			

											echo "editorial" . "<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>	
									
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


											$keyword44 = "dog";


											$sql25 = "SELECT * FROM `vendor_product` WHERE `product_name` LIKE '%" . $keyword44 . "%' AND `description` LIKE '%" . $keyword44 . "%' ORDER BY `photo_time` DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			


											echo "product<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>
									
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


											$keyword44 = "dog";


											$sql25 = "SELECT * FROM `new_vendor` WHERE `profile` LIKE '%" . $keyword44 . "%' AND `company_name` LIKE '%" . $keyword44 . "%' ORDER BY `id` DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
								

											echo "vendor<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>	
									
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


											$keyword44 = "dog";


											$sql77 = "SELECT * FROM `xlist` WHERE `name` LIKE '%dog%' ORDER BY `id` DESC";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {

													$sgl = $row['id'];

											$sql25 = "SELECT * FROM `new_vendor` WHERE `xlist` LIKE '%". $sgl ."%' ORDER BY `id` DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
												}

											echo "x-list<br><br>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>																																													
									
	
									
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


											$keyword44 = "dog";


											$sql25 = "(SELECT id, title, ed_text, source, issue as 'date', 'edit' As type FROM editorial WHERE title LIKE '%" . $keyword44 . "%' OR ed_text LIKE '%" . $keyword44 ."%' ORDER BY id DESC)
												UNION
													  (SELECT id, product_name, description, photo, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keyword44 . "%' AND `description` LIKE '%" . $keyword44 . "%')
												UNION
													  (SELECT id, company_name, profile, logo, edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keyword44 . "%' AND `company_name` LIKE '%" . $keyword44 . "%') ORDER BY date DESC";

											$result25 = $conn->query($sql25);

											$num_rows = mysqli_num_rows($result25);

											echo "$num_rows Rows <br>";

			
												while($row = mysqli_fetch_array($result25)) {
													
													
														if ($row['type'] == "edit") {
															
															if (date('Y', $row['date']) > 2002) {
														// echo $row['id'] . "-" .   $row['title'] . "-" . $row['type'] . "-" .  date('Y-m-d', $row['date']) .  "<br>";
														// echo  date('Y-m-d  H:i:s', $row['date']) . "-" .  $row['type'] ."<br>";
																
										// new pic method
																
									echo "<div style='width: 900px'>";	
																
																
																
																
																
							
									if ($row['id'] > 28900){
							
											$sql77 = "SELECT * FROM `editorial` WHERE `id` = '" .  $row['id'] . "'";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {								
							
									$textRaw = $row['ed_text'];
									$start_tag = 'font-weight:bold">';
									$end_tag = '</span></figcaption>';
							
									// method 2 (faster)
									$startpos = strpos($textRaw, $start_tag) + strlen($start_tag);
									if ($startpos !== false) {
										$endpos = strpos($textRaw, $end_tag, $startpos);
										if ($endpos !== false) {
											$textAfter =  substr($textRaw, $startpos, $endpos - $startpos);
										}
									}							
							
									$links = substr('' . $textAfter . '', 0, 145);
							
									$linksTitle = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . '', 0, 60);
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['author']))) . '', 0, 60);
							
							
						   // echo data
						   echo "<table align='left' width='730px'>";
						   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $row['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table></div>" ;
												}
										
									} else {
										
										
										
							
							
									$textRaw = $row['ed_text'];
									$start_tag = 'font-weight:bold">';
									$end_tag = '</span></figcaption>';
							
									// method 2 (faster)
									$startpos = strpos($textRaw, $start_tag) + strlen($start_tag);
									if ($startpos !== false) {
										$endpos = strpos($textRaw, $end_tag, $startpos);
										if ($endpos !== false) {
											$textAfter =  substr($textRaw, $startpos, $endpos - $startpos);
										}
									}							
							
									$links = substr('' . $textAfter . '', 0, 145);
							
									$linksTitle = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['title']))) . '', 0, 60);
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['author']))) . '', 0, 60);
										
									// old pictures
										
										
									$textfimg = $row['ed_text'];
									$start_fimg = '<img';
									$end_fimg = ':';
							
									// method 2 (faster)
									$startposfimg = strpos($textfimg, $start_fimg) + strlen($start_fimg);
									if ($startposfimg !== false) {
										$endposfimg = strpos($textfimg, $end_fimg, $startposfimg);
										if ($endposfimg !== false) {
											$textAfterfimg =  substr($textfimg, $startposfimg, $endposfimg - $startposfimg);
										}
									}
							
									$linksImgfimg = substr('' . $textAfterfimg . '', 0, 7);
										
										
									if ($linksImgfimg == ' src="h') {	
										
											$sql77 = "SELECT * FROM `editorial` WHERE `id` = '" .  $row['id'] . "'";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {			
										
									$textRaw2 = $row['ed_text'];
									$start_tag2 = 'src="';
									$end_tag2 = '"';
							
									// method 2 (faster)
									$startpos2 = strpos($textRaw2, $start_tag2) + strlen($start_tag2);
									if ($startpos2 !== false) {
										$endpos2 = strpos($textRaw2, $end_tag2, $startpos2);
										if ($endpos2 !== false) {
											$textAfter2 =  substr($textRaw2, $startpos2, $endpos2 - $startpos2);
										}
									}
							
									$linksImg = substr('' . $textAfter2 . '', 0, 145);											
							
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $row['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;	
												}
										
			
									} elseif ($linksImgfimg == ' width=') {
										
											$sql77 = "SELECT * FROM `editorial` WHERE `id` = '" .  $row['id'] . "'";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {												
										
									$textRaw2 = $row['ed_text'];
									$start_tag2 = 'src="';
									$end_tag2 = '"';
							
									// method 2 (faster)
									$startpos2 = strpos($textRaw2, $start_tag2) + strlen($start_tag2);
									if ($startpos2 !== false) {
										$endpos2 = strpos($textRaw2, $end_tag2, $startpos2);
										if ($endpos2 !== false) {
											$textAfter2 =  substr($textRaw2, $startpos2, $endpos2 - $startpos2);
										}
									}
										
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['author']))) . '', 0, 60);
							
									$linksImg = substr('' . $textAfter2 . '', 0, 145);											
							
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $row['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;
												}
										
									} else {
										
											$sql77 = "SELECT * FROM `editorial` WHERE `id` = '" .  $row['id'] . "'";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {		
													
									$textRaw2 = $row['ed_text'];
									$start_tag2 = "src='";
									$end_tag2 = "'";
							
									// method 2 (faster)
									$startpos2 = strpos($textRaw2, $start_tag2) + strlen($start_tag2);
									if ($startpos2 !== false) {
										$endpos2 = strpos($textRaw2, $end_tag2, $startpos2);
										if ($endpos2 !== false) {
											$textAfter2 =  substr($textRaw2, $startpos2, $endpos2 - $startpos2);
										}
									}
										
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['author']))) . '', 0, 60);
							
									$linksImg = substr('' . $textAfter2 . '', 0, 145);											
							
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " . date('m-d-y', $row['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;
												}
										
										
									}}}
															
															
															
														
										// products find
														} elseif ($row['type'] == "product") {
															
									echo "<div style='width: 900px'>";							
															
															
											$sql77 = "SELECT * FROM `vendor_product` WHERE `id` = '" .  $row['id'] . "'";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {	
													
									$linksProd = substr('' . htmlentities($row['description']) . '', 0, 145);
													
													
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $row['photo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $row['id'] . "' target='_blank'>" .  $row['product_name'] ."</a></strong><br />" .  $linksProd . " ...<strong><br>Date:</strong> " .  date('m-d-y', strtotime($row['photo_time'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;															
															
															// echo  $row['id'] . " photo - " .  $row['photo'] . " Name - " .  $row['product_name'] ."<br>";
													
													
												}
															
													echo "</div>";
															
															
										// vendor find
														} elseif ($row['type'] == "vendor") {
															
									echo "<div style='width: 900px'>";							
															
															
											$sql77 = "SELECT * FROM `new_vendor` WHERE `id` = '" .  $row['id'] . "'";

											$result77 = $conn->query($sql77);

												while($row = mysqli_fetch_array($result77)) {
													
									$linksVend = substr('' . htmlentities($row['profile']) . '', 0, 145);
													
													
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $row['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $row['id'] . "' target='_blank'>" .  $row['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updated:</strong> " .  date('m-d-y', strtotime($row['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
															
															// echo  $row['id'] . " logo - " .  $row['logo'] . " Company Name - " .  $row['company_name'] ."<br>";
															
												}
													echo "</div>";
															
															
															
														}
													
												
														}

											echo "combo<br><br>";

									echo "</div>";							
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>																																																																																																																																												