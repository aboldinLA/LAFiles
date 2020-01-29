
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
			

				
				

				
    
<?

									$assoc = $_GET['acro'];

									
										// Assocation Connection Start

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

										// Get Association


											$sql7 = "SELECT * FROM associations LEFT JOIN new_vendor ON associations.pass = new_vendor.pass WHERE associations.id = '" . $assoc . "' ";
											$result7 = $conn->query($sql7);									
									
										// Association Listing
											while($row = mysqli_fetch_array($result7)) {


?>    
    

								<div style="position:relative; left:25px; top:0px; width:765px">
									<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
									<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Association Search Center</center></span><br>
									<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Results For <?  echo $row['acronym'] ?></center></span><br>
								</div><br>

								<script>
	
									function myButtonFunction5() {
										
										var comp = "<?php echo $row['association'] ?>";
										var coem = "<?php echo $row['email'] ?>";
										var coid = "<?php echo $row['id'] ?>";
										window.open("https://landscapearchitect.com/industry/assoc-request2.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
									   }
											
											
											
								</script>  


<?
		if (!empty($row['logo'])) {
			$logol = $row['logo'];
		} else {
			$logol = "logo-blank.jpg";
		}



		echo "<section><div style='position:relative; left:25px; width:763px; font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold'><img src='https://landscapearchitect.com/products/images/" . $logol . "'> <br>" . $row['association'] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Acronym: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['acronym'] . "</span><br><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Profile: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['profile'] . "</span><br><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Address: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['address'] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>City: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['city'] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>State: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['state'] . "</span><br>									
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Zip Code: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['zip'] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Phone: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['toll'] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Website: </span><span style='font-size:16px; font-family:Times, serif'><a href='http://" . $row['website'] . "' target='_blank'>" . $row['website'] . "</a></span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Contact Us: </span><span style='font-size:16px; font-family:Times, serif'><a href='" . $row['contact_us'] . "' target='_blank'>Contact Us</a></span></span><br>									
																											

</div></section><br><br>";
								}

?>
<div style="position:relative; left:25px">
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->

	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848; width:763px">Upcoming Events</span><br><br>
    
<?


										$date = date_create();
										$date2 =  date_timestamp_get($date);
										$assoc = $_GET['acro'];
									
	

										// Get Association Event


											$sql2 = "SELECT * FROM assoc_event WHERE assoc_id = '" . $assoc . "' AND input >= '" . $date2 . "' ORDER BY input DESC";
											$result2 = $conn->query($sql2);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result2)) {
                                                
                                                $assocName = $row['acronym'];

                                                
                                                
												if ($i <= "10") {
													echo "<section><div style='font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; width:763px'>" . $row['event_name'] . "<br>
													<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Date(s): </span><span style='font-size:16px; font-family:Times, serif'>" . date('d M Y',$row['input']) . "</span><br>														
													<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Location: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['place'] . "</span><br>		
													<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Description: </span><span style='font-size:16px; font-family:Times, serif'>" . $row['type_event'] . "</span><br>															
													<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Contact: </span><a href='http://" . $row['contact'] . "' target='_blank'><span style='font-size:16px; font-family:Times, serif'>" . $row['contact'] . "</span></a><br>														
													</div></section><br>";
										 			$i++;
     											}
											}





?> 

<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->

	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848">Related News</span><br><br>
    
<?


										$date = date_create();
										$date2 =  date_timestamp_get($date);

									


										// Get Association News
										

											$sql3 = "SELECT * FROM associations WHERE id = '" . $assoc . "'";
											$result3 = $conn->query($sql3);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result3)) {
                                                
								                $assocName =  $row['acronym'];      

											}

?>     
    
<?


										$date3 =  "1483228800";
									
	

										// Get Association News if none use latest 10
	

									$sql4 = "SELECT * FROM editorial WHERE ed_text LIKE '%" . $assocName . "%' AND title NOT LIKE '%Weekly%' ORDER BY id DESC";
									$result4 = $conn->query($sql4);	
	
									$rowcountA=mysqli_num_rows($result4);
	
	
									if ($rowcountA > 0) {
	
									
										// banner rotating section
									while($row = mysqli_fetch_array($result4)) {
												
													
									$textRaw = str_replace("’", "'",  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['ed_text']))));
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
                                                
                                          $picA =  $row['id'] . '.jpg';     
                                                
                                       
													
									   echo "<table align='left' width='730px'>";
									   echo "<tr><td  align='left'><a href='https://landscapearchitect.com/research/article-a.php?number=" .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/research/images/" . $picA . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number=" .  $row['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" . $textAfter . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $row['issue']) . $row['id'] . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table>" ;													
												
												
											}
	
									} else {
										
										
									$sql6 = "SELECT * FROM editorial WHERE subject = '5' ORDER BY id DESC";
									$result6 = $conn->query($sql6);											
										
										$xCount = 0;
										
										// banner rotating section
									while($row = mysqli_fetch_array($result6)) {
												
											if ($xCount < 10) {
													
									$textRaw = str_replace("’", "'",  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row['ed_text']))));
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
													
									   echo "<table align='left' width='730px'>";
									   echo "<tr><td  align='left'><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/research/images/" . $row['id'] . ".jpg'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $row['id'] . "' target='_blank'>" . $linksTitle . "</a></strong><br /><strong>Author:</strong> " .  $linksAuthor . "<br>" .  htmlentities($links) . " ...<strong><br>Issue:</strong> " .  date('m-d-y', $row['issue']) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table>" ;
												
									$xCount++;
												
															}
												
												
											}										
										
									}
	
	
	
	
	
	
	

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





