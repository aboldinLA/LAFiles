
<?
include("lo_top-main2-prod.inc");

	$keyword = str_replace(' ', '%', trim($_POST['keywrd'])); 



	if (!empty($keyword)){

	$keywordSE = $keyword;
		
	} else {
		
	$keywordSE = $_GET['keywordSE3'];
	$keywordSE2 = $keywordSE;
		
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
		include("lo_top-main2-side2-js11.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
	
	
	
	
	
	
	
	<div style="position:relative; left: 10px; top: 0px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Keyword Search For: <? echo $_POST['keywrd'] ?></h3></center><br>
                   
                   
	</div>					
			
			
			
	
			
				<div style="position:absolute; left: 525px; top:255px; z-index: 0">
						
						
						<form method="post" action="prod-seac-all.php">
						
							<input type="text" name="keywrd" value="<? echo $keywordSE ?>" style="width: 250px; height: 20px; box-shadow: 5px 5px 5px #888888; padding: 3px" placeholder="Please enter Keyword"><br><br>
								<!-- <input type="submit" value="Submit" style="background-color: #4fb548; position: relative; left: -10px; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"> -->
								<h3 style="position: relative; left: -50px">Suggested Product Search Links:</h3></center>
								
			
						</form>
							
							
				<div id="featured" style="position: absolute; left: -235px; top: 100px">
				
				
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




											$sql77 = "SELECT * FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%' ORDER BY `id` DESC";

											$result77 = $conn->query($sql77);
					   
													echo "<div style='position: relative; left: 50px; padding-bottom: 5px'>";
											   		echo "<table cellspacing='5px'><tr>";
					   								$xx = 0;
													$zCount = 0;					   

												while($row = mysqli_fetch_array($result77)) {
													
												   echo "<td width='250px'><a href='https://landscapearchitect.com/products/index-all-b.php?number=" . $row['id'] . "' target='_blank'>" . $row['name'] . "</a><br>";
												   $xx++;
												   $zCount++;
												   if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
												   $zCount++;
																	 }													
			
												}
					   
											   	echo "</tr></table><br>"; 
					   
													echo "</div>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
					   
									?>												
				
				
					
				<div style="position: relative; left: -35px; top: 25px">
                   			
				<div style='position: relative; left: 25px; width:750px; height:2px; background-color:#605b51'> </div><br>
                   			
                   			
	
		
	
	
	
	
	
	
	<div style="position:relative; left: -15px; top: 0px; z-index: 0">
		
                   <h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding-left: 300px">Sponsored Advertisers:</h3><br>
			
				<div align="left" style="position:absolute; left: 40px; top: 35px; z-index: 0">
							
							<table>
								<tr>
									<td style="line-height: 150px">&nbsp;</td>
								</tr>
							</table>
								
				<div style='width:750px; height:2px; background-color:#605b51;'> </div><br>
                                
                   <h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding-left: 330px">Results:</h3><br>
                                 
									
						<?php
	
						$keywordSE2 = $_POST['keywrd'];
	
	
						// database connection info
						$conn = mysql_connect('localhost','landscap_lol','meow2meow') or trigger_error("SQL", E_USER_ERROR);
						$db = mysql_select_db('landscap_lollive',$conn) or trigger_error("SQL", E_USER_ERROR);

						// find out how many rows are in the table 

						$sql = 	"(SELECT id, title, ed_text, source, FROM_UNIXTIME(issue) as 'date', 'edit' As type FROM editorial WHERE title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 ."%' AND title NOT LIKE '%weekly%')
							UNION
								 (SELECT id, product_name, description, photo, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE2 . "%' OR `description` LIKE '%" . $keywordSE2 . "%')
							UNION
								 (SELECT id, company_name, profile, logo, edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE2 . "%' OR `company_name` LIKE '%" . $keywordSE2 . "%' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE2 . "%') ORDER BY date DESC";					   
					   
					   
					   
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
						$r = mysql_fetch_row($result);
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
						$sql = "(SELECT id, title, ed_text, source, FROM_UNIXTIME(issue) as 'date', 'edit' As type FROM editorial WHERE title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 ."%' AND title NOT LIKE '%weekly%')
							UNION
								 (SELECT id, product_name, description, photo, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE2 . "%' OR `description` LIKE '%" . $keywordSE2 . "%')
							UNION
								 (SELECT id, company_name, profile, logo, edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE2 . "%' OR `company_name` LIKE '%" . $keywordSE2 . "%' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE2 . "%') ORDER BY date DESC
							LIMIT $offset, $rowsperpage";
					   
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);

						// while there are rows to be fetched...
						while ($list = mysql_fetch_assoc($result)) {
							
							
									// new pic method
									if ($list['type'] == "edit") {
							
							
									if ($list['id'] > 28900){
							
							
									$searchvalue = implode('<span style="color:green;font-weight:800;">'.$keywordSE2.'</span>',explode($keywordSE2,$list['ed_text']));
										
									$sql22 = "SELECT * FROM `editorial` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {

									$textRaw = str_replace("’", "'",  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['ed_text']))));
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
							
									$linksTitle = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['title']))) . '', 0, 60);
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['author']))) . '', 0, 60);
							
							
						   // echo data
						   echo "<table align='left' width='730px'>";
						   echo "<tr><td  align='left'><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/research/images/" . $list['id'] . ".jpg'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table>" ;
									}
										
									} else {
										
								$searchvalue = implode('<span style="color:green;font-weight:800;">'.$keywordSE2.'</span>',explode($keywordSE2,$list['ed_text']));
							
							
										
									$textRaw = $list['ed_text'];
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
							
									$linksTitle = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['title']))) . '', 0, 60);
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['author']))) . '', 0, 60);
										
									// old pictures
										
										
									$textfimg = $list['ed_text'];
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
										
									$sql22 = "SELECT * FROM `editorial` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {
		
										
									$textRaw2 = $list['ed_text'];
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
										
									$linksTitle = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['title']))) . '', 0, 60);
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['author']))) . '', 0, 60);
										
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table>" ;	
									}
			
									} elseif ($linksImgfimg == ' width=') {
										
									$sql22 = "SELECT * FROM `editorial` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {
										
									$textRaw2 = $list['ed_text'];
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
										
									$linksTitle = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['title']))) . '', 0, 60);
									$linksAuthor = substr('' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['author']))) . '', 0, 60);
										
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table>" ;	
									}
										
									} else {
										
									$sql22 = "SELECT * FROM `editorial` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {
										
									$textRaw2 = $list['ed_text'];
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
							
									$linksImg = substr('' . $textAfter2 . '', 0, 145);											
							
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table>" ;	
									}
										
										
									}}
										
									} elseif ($list['type'] == "product") {
										
													
									$sql22 = "SELECT * FROM `vendor_product` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {													
													
									$linksProd = substr('' . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['description']))) . '', 0, 145);
													
													
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $list['vendor_id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['photo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $list['vendor_id'] . "' target='_blank'>" .  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['product_name']))) ."</a></strong><br />" .  $linksProd . " ...<strong><br>Date:</strong> " .  date('m-d-y', strtotime($list['photo_time'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;															
												}										
										
										// echo "dog";
										
									} elseif ($list['type'] == "vendor") {
													
									$sql33 = "SELECT * FROM `new_vendor` WHERE `id` = '" .  $list['id'] . "' AND `status` != 2";
									$result33 = mysql_query($sql33, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result33)) {																		
													
									$linksVend = substr('' . htmlentities($list['profile']) . '', 0, 145);
													
													
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $list['id'] . "' target='_blank'>" .  $list['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updated:</strong> " .  date('m-d-y', strtotime($list['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
															
															// echo  $list['id'] . " logo - " .  $list['logo'] . " Company Name - " .  $list['company_name'] ."<br>";
															
												}
										
										// echo "cat";
										
									} elseif ($list['type'] == "xlist") {
													
									$sql33 = "SELECT * FROM `new_vendor` WHERE `xlist` = '" .  $list['id'] . "'";
									$result33 = mysql_query($sql33, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result33)) {																		
													
									$linksVend = substr('' . htmlentities($list['profile']) . '', 0, 145);
													
													
								   echo "<table align='left' width='730px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/products/listing-a.php?number=" .  $list['id'] . "' target='_blank'>" .  $list['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updated:</strong> " .  date('m-d-y', strtotime($list['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
															
															// echo  $list['id'] . " logo - " .  $list['logo'] . " Company Name - " .  $list['company_name'] ."<br>";
															
												}
										
										// echo "cat";
										
									}
										
										
										
										
										
										
						} // end while
					
						$keywordSE2 = $keywordSE;
					
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
					   
												mysqli_close($conn);
					   
						?>	
						
	<div style="position: relative;top: 50px">						
<?
	
	include("lo_top-main2-bottom.inc");

?>
	</div>																					
					
				
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



<?
	include("lo_footer-main2-new.inc");
?>





