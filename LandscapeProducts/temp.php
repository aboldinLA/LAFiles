 <?
// Top Section - HTML
include("lad_top-main.inc");

	$uname2 = $_SESSION['name'];

	$uname3 = $_SESSION['lname'];

	$ucode = $_SESSION['user'];


?>
	
	
<?

// Top Section - Nav Section
include("lad_header-main3.inc");


// Leaderboard Banner Ads
include("search-engine-leaderboard-banners-sc.inc");
include("land-products-meta.inc");

?>
<title><? echo $title; ?></title>
<meta name="keywords"content="<? echo $metakeyword; ?>">


<script>
	
	//resets the cat dropdown 
	
	window.onbeforeunload = function () {
		    var s = document.getElementById("catSelectBox");
      s.onchange = function(){
        location.href = this.options[this.selectedIndex].value
      }
      s.selectedIndex = 0;
	}
	
  
	
		
</script>





<style>

	.flexbox-container {
		    display: flex;
    width: 100%;
    min-width: 1200px;
    margin: 0 auto;
    max-width: 2000px;
    padding-left: 10px;
    padding-right: 40px;
	}
	
	.sidebar {
		flex: 0 !important;
		margin-top: -105px;
	}
	
	.searchBarRow {

		padding-left: 40px;
		padding-right: 40px;
		margin: 0 auto;
		float: none;
	}
	
	.main {
		margin-top: 10px;
	}
	
	#keywordBox {
		width: 80%; 
		height: 31px; 
		box-shadow: 5px 5px 5px #888888; 
		padding: 3px; 
		position: relative; 
		top: -17px; 
		font-size: 20px; 
	}
	
		.keywordContain {
		margin-top: 70px;
margin-bottom: -6px;
	}



</style>





	
  <div style="position: relative; top: -20px">
	  

	  
	  
	  
	  <!-- Slider Start -->
	  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <!-- Add this css File in head tag-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


 
	  
<link href="css/slider-new.css" rel="stylesheet" id="bootstrap-css">
	  


        <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="4000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
		
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
				
                <div class="item active">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink1; ?>" target="_blank">
                    <img src="https://landscapearchitect.com/banner/<? echo $picBan1; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink2; ?>" target="_blank">
                   	<img src="https://landscapearchitect.com/banner/<? echo $picBan2; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink3; ?>" target="_blank">
                    <img src="https://landscapearchitect.com/banner/<? echo $picBan3; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        

			<script src="js/slider-new.js"></script> 
	  
	  
	  
	  
	  
	<!-- Slider End --> 
	  
	<link href="css/lad-format.css" rel="stylesheet" id="bootstrap-css">
	  
	  
	  
	  
	
	  
	  
	
	  
  
	  

	  
  	  					<div>
						<div > <!--removed class="row" -->
						  <div class="searchBarRow col-md-9">
								
							<div style="display: flex;justify-content: space-between;"><!--removed class="row" -->
						
								<div style="padding-left: 10px; margin-top: 25px;">
									
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
									
									
																		$cat2 = $_GET['number'];
									
									
																			$sql533 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $cat2 ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result533 = $conn->query($sql533);

																			$rowcount533=mysqli_num_rows($result533);
									
									
									
									
									
									
									?>
									
									
									
									
									
									
									<span style="font-size: 30px;">
									<? 
										if($searchbartitle != ''){
											echo $searchbartitle;
										} else{
											echo $_GET['catMain'];
										}
									?>
									</span>&nbsp;&nbsp;&nbsp;&nbsp;			
									<!-- Refine Search Start -->

								
								
			
					  
					  

								
				  								



			
								
							</div>
							  
							  
							  
																
								
							</div>
	  					</div>
						</div>
	  

	  

	  
							
	
							
							
				<div class="flexbox-container">  <!-- took 'colShift' class off -->

				  <div class="main col-md-9">
					  
		  

                      <!-- Details Start -->
                      
                      
                      <!-- 19 Start -->
			
					  		<section>

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
								   
								   

										   


											$link = mysqli_connect("localhost", "landscap_lol", "meow2meow");
											mysqli_select_db("landscap_lollive", $link);

											$result = mysqli_query("SELECT * FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%' ORDER BY `id` DESC", $link);
											$num_rows33 = mysqli_num_rows($result);	
								   
								   
								   
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
								   echo "<tr><td><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 15px; text-align: left'><strong><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $number . "' target='_blank'>" .  $list['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updateds:</strong> " .  date('m-d-y', strtotime($list['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
															
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
					 					  
					  		</section>
                      
					   		<!-- 10 End -->                      
                      
                      
                      
                      
					  
							<!-- Details End -->
					  

					  
					  

					</div> 
					
					

					
					

				  <div class="sidebar">
					  

					  							
							<!-- Keyword Search Start -->
					  
							<div class="keywordContain">

<!--										 <h3 style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 24px;">Keyword Search: <? echo $keywordSE; ?></h3>-->

											<form method="post" action="Search-Products.php?keywordSE3=<? echo $keywordSE; ?>" target="_blank">

											

												<input type="text" name="keywrd" value="<? echo $keywordSE ?>" id="keywordBox" placeholder="Keyword Search"><input type="image" value="Go" width="34px" src="https://landscapearchitect.com/images/mag-button.png"  class ="sch" id="sch" onmouseover="this.src='https://landscapearchitect.com/images/mag-button-over.png';"  onmouseout="this.src='https://landscapearchitect.com/images/mag-button.png';" style="position: relative; top: -7px" /><br><br>
													<!-- <input type="submit" value="Submit" style="background-color: #4fb548; position: relative; left: -10px; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"> -->

												

											</form>

								  </div>					  
					  
							<!-- Keyword Search End -->								  
					  					  
					  
							<!-- Banners Start -->
					  
					  
							<div style="position: relative; z-index: 50000">
					  
							<?

							// Category Banners
							include("banner-LAD-sc.inc");

							?>
								
				  			</div>	
								
					  
							<!-- Banners End -->

				  </div>	



				</div>									
							
							
							
							
	
			  
			  
	
				  
			
		

	
  </div>


	
	


				
				
				
				
				
				
				
  </div>
</div>
	
	
	
	


	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>
	
	