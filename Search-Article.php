
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
        
                        $_POST['keywrd'];        
		
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
			
                <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Keyword Article Search: <? echo $keywordSE; ?></h3></center><br>
                   
                   
	</div>		
			
				<div style="position:absolute; left: 10px; top: 85px; z-index: 0">
						
						
									<script>
										function mySubmit(wtf) {
										  if ('Search Site' == wtf ) {
                                              var link1 = 'https://landscapearchitect.com/Search-Site.php?keywordSE3=';
                                              var x = document.getElementById("keywrd").value;
											  document.forms['myForm'].action = link1 + x;
										  } else if ('Search Articles' == wtf ) {
                                              var link1 = 'https://landscapearchitect.com/Search-Article.php?keywordSE3=';
                                              var x = document.getElementById("keywrd").value;
											  document.forms['myForm'].action = link1 + x;
										  } else if ('Search Products' == wtf ) {
                                              var link1 = 'https://landscapearchitect.com/LandscapeProducts/Search-Products.php?keywordSE3=';
                                              var x = document.getElementById("keywrd").value;
											  document.forms['myForm'].action = link1 + x;
										  } else
											  return false;

										  document.forms['myForm'].submit();
										}
									</script>									
									
									
									
						
									<form id="myForm"  method="post" action="Search-Article.php" style="position: relative; left: 245px; top: -40px">

										<input type="text" id="keywrd" name="keywrd" value="<? echo $keywordSE; ?>"  style="width: 235px; height: 20px; z-index: 75000; padding: 3px; box-shadow: 5px 5px 5px #888888; position: relative; left: -5px" placeholder="Please Enter Keyword"><br>
										 

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
								   
								   
								   
								   if ($num_rows33 != 0) {
								   

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
													
												   echo "<td width='250px'><a href='https://landscapearchitect.com/Search-Products-suggestions.php?keywordSE3=" . $row['id'] . "'>" . $row['name'] . "</a><br>";
												   $xx++;
												   $zCount++;
												   if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 10px'>&nbsp;</td></tr><tr>";
												   $zCount++;
																	 }													
			
												}
                                       
											   	echo "</tr></table><br>";
                                                
                                       
                                                ?>
                    
										  	<input type="button" onclick="mySubmit('Search Site')" value="Search Site" style="font-size: 14px; font-weight: bold; color: #000000; padding: 4px; position: relative; left: 135px; top: 5px; background-color: darkgoldenrod">                    
                                            <input type="button" onclick="mySubmit('Search Articles')" value="Search Articles Only" style="font-size: 14px; font-weight: bold; color: #FFFFFF; padding: 4px; position: relative; left: 140px; top: 5px; background-color: darkgreen">
  											<input type="button" onclick="mySubmit('Search Products')" value="Search Products Only" style="font-size: 14px; font-weight: bold; padding: 4px; position: relative; left: 145px; top: 5px; background-color: deepskyblue">	
                    
									</form><br><br>					
                    
                    
                                       
					                           <?                                       
                                       
                                       
                                       
					   
													echo "</div>";
					   
												mysqli_close($conn);
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
									   
								   } else {
                                       
                                       
                                                ?>
                    
										  	<input type="button" onclick="mySubmit('Search Site')" value="Search Site" style="font-size: 14px; font-weight: bold; color: #000000; padding: 4px; position: relative; left: 135px; top: 5px; background-color: darkgoldenrod">                    
                                            <input type="button" onclick="mySubmit('Search Articles')" value="Search Articles Only" style="font-size: 14px; font-weight: bold; color: #FFFFFF; padding: 4px; position: relative; left: 140px; top: 5px; background-color: darkgreen">
  											<input type="button" onclick="mySubmit('Search Products')" value="Search Products Only" style="font-size: 14px; font-weight: bold; padding: 4px; position: relative; left: 145px; top: 5px; background-color: deepskyblue"><br><br>			
                    
									</form><br><br>					
                    
                    
                                       
					                           <?         
                                       
                                   }
					   
									?>												
				
				
					
                   			
                   										
          
		
                   			
	
		
	
	
						<div class="row">
						  <div class="col-md-10">	
	
	
	<div style="position:relative; left: 0px; top: 0px">
		
      
		<div style='width:90%; height:2px; background-color:#605b51;'> </div><br>
                                
                   <h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding-left: 275px">Results: <? echo $keywordSE; ?></h3><br>
                                 
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
        
        
						$keywordSE2 = $keywordSE;		   
	
	
						// database connection info
						$conn = mysql_connect('localhost','landscap_lol','meow2meow') or trigger_error("SQL", E_USER_ERROR);
						$db = mysql_select_db('landscap_lollive',$conn) or trigger_error("SQL", E_USER_ERROR);

						// find out how many rows are in the table 

						$sql = 	"(SELECT id, title, ed_text, source, FROM_UNIXTIME(issue) as 'date', 'edit' As type FROM editorial WHERE title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 ."%' AND title NOT LIKE '%weekly%' AND ed_text NOT LIKE '%onmouse%') ORDER BY date DESC";					   
					   
					   
					   
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
						$sql = "(SELECT id, title, ed_text, source, FROM_UNIXTIME(issue) as 'date', 'edit' As type FROM editorial WHERE title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 ."%' AND title NOT LIKE '%weekly%' AND ed_text NOT LIKE '%onmouse%') ORDER BY date DESC
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
										
									$links = 0;
										
									$number = $list['id'];	
	

									$textRaw = str_replace("’", "'",  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['ed_text']))));
									$start_tag = '<p>';
									$end_tag = '</p>';
							
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
                                        
                                        
																$string =  $list['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash													
										
										
										
										
							
							
						   // echo data
						   echo "<table align='left' width='730px'>";
						   echo "<tr align='left'><td width='165px'><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/research/images/" . $list['id'] . ".jpg'></a></td><td valign='top' align='left' style='position:relative;left:15px'><p><strong><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'>" . $linksTitle . "</a></strong><br><strong>Author:</strong> " .  $linksAuthor . "<br>" . $list['subtitle'] . "<br><strong>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</p></td></tr><tr><td style='line-height: 20px'>&nbsp;</td></tr></table>" ;
									
										
									}
										
									} else {
										
								$searchvalue = implode('<span style="color:green;font-weight:800;">'.$keywordSE2.'</span>',explode($keywordSE2,$list['ed_text']));
							
							
										
									$textRaw = $list['ed_text'];
									$start_tag = '<p>';
									$end_tag = '</p>';
							
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
                                        
                                     $number = $list['id'];	
										
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
                                        
                                       
																$string =  $list['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	                                        
                                        
                                        
                                        
										
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr align='left'><td width='165px'><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='position:relative;left:15px'><p><strong><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'>" . $linksTitle . "</a></strong><br><strong>Author:</strong> " .  $linksAuthor . "<br>" . $list['subtitle'] . "<br><strong>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</p></td></tr><tr><td style='line-height: 20px'>&nbsp;</td></tr></table>" ;	
									}
			
									} elseif ($linksImgfimg == ' width=') {
										
									$sql22 = "SELECT * FROM `editorial` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {
                                        
                                     $number = $list['id'];	
										
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
                                        
                                       
																$string =  $list['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	                                        
                                        
                                        
										
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr align='left'><td width='165px'><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='position:relative;left:15px'><p><strong><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'>" . $linksTitle . "</a></strong><br><strong>Author:</strong> " .  $linksAuthor . "<br>" . $list['subtitle'] . "<br><strong>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</p></td></tr><tr><td style='line-height: 20px'>&nbsp;</td></tr></table>" ;	
									}
										
									} else {
										
									$sql22 = "SELECT * FROM `editorial` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {
                                        
									$number = $list['id'];	
										
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
                                        
                                       
																$string =  $list['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
                                        
                                        
                                        $artPhoto = $linksImg;
                                        
                                        if (empty($artPhoto)) {
                                            
                                            $artPhoto = "https://landscapearchitect.com/research/images/featured.jpg";
                                            
                                        }                                        
                                        
							
								   // echo data
								   echo "<table align='left' width='730px'>";
								   echo "<tr align='left'><td width='165px'><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='" . $linksImg . "'></a></td><td valign='top' align='left' style='position:relative;left:15px'><p><strong><a href='https://landscapearchitect.com/articles/" . $string . "/" . $number . "'>" . $linksTitle . "</a></strong><br><strong>Author:</strong> " .  $linksAuthor . "<br>" . $list['subtitle'] . "<br><strong>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</p></td></tr><tr><td style='line-height: 20px'>&nbsp;</td></tr></table>" ;	
									}
										
										
									}}
										
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



