<?
include("lo_top-main2-js.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	<?
	include $include_path . "lo_header-main2-js.inc";
	?>
	</div>

	<!-- Start Content Section -->
	
	<!-- Start Assoc Search Section -->
    
    
<?

	$assoc = $_GET[acro];

									
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


											$sql = "SELECT * FROM associations LEFT JOIN new_vendor ON new_vendor.pass=associations.pass WHERE associations.id = '" . $assoc . "' ";
											$result = $conn->query($sql);									
									
										// Association Listing
											while($row = mysqli_fetch_array($result)) {



?>    
    

<div style="position:relative; left:0px; top:0px; width:765px">
    <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Results For <?  echo $row[acronym] ?></center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Association Search Center</center></span><br>
</div><br>

								<script>
	
									function myButtonFunction5() {
										
										var comp = "<?php echo $row[association] ?>";
										var coem = "<?php echo $row[email] ?>";
										var coid = "<?php echo $row[id] ?>";
										window.open("https://landscapearchitect.com/industry/assoc-request2.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
									   }
											
											
											
								</script>  


<?
		if (!empty($row[logo])) {
			$logol = $row[logo];
		} else {
			$logol = "logo-blank.jpg";
		}



		echo "<section><div style='width:763px; font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold'><img src='https://landscapearchitect.com/products/images/" . $logol . "'> <br>" . $row[association] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Acronym: </span><span style='font-size:16px; font-family:Times, serif'>" . $row[acronym] . "</span><br><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Profile: </span><span style='font-size:16px; font-family:Times, serif'>" . $row[profile] . "</span><br><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Address: </span><span style='font-size:16px; font-family:Times, serif'>" . $row[address] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>City: </span><span style='font-size:16px; font-family:Times, serif'>" . $row[city] . "</span><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>State: </span><span style='font-size:16px; font-family:Times, serif'>" . $row[state] . "</span><br>									
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Zip Code: </span><span style='font-size:16px; font-family:Times, serif'>" . $row[zip] . "</span><br><br>
		<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Email: </span><span style='font-size:16px; font-family:Times, serif'><a href='#' onClick='myButtonFunction5()'><img width='20%' src='https://landscapearchitect.com/images/Request-more-product-info.jpg'></a></span><br>									
																											

</div></section><br><br>";
								}

?>

<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->

	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848; width:763px">Upcoming Events</span><br><br>
    
<?


										$date = date_create();
										$date2 =  date_timestamp_get($date);
										$assoc = $_GET[acro];

									
										// Assocation Event Start

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

										// Get Association Event


											$sql2 = "SELECT * FROM assoc_event WHERE assoc_id = '" . $assoc . "' AND input >= '" . $date2 . "' ORDER BY input DESC";
											$result2 = $conn->query($sql2);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result2)) {
												if ($i <= "10") {
													echo "<section><div style='font-size:24px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; width:763px'>" . $row[event_name] . "<br>
													<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Date(s): </span><span style='font-size:16px; font-family:Times, serif'>" . date('d M Y',$row[input]) . "</span><br>														
													<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Location: </span><span style='font-size:16px; font-family:Times, serif'>" . $row[place] . "</span><br>													
													<span style='font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#484848'>Contact: </span><a href='http://" . $row[contact] . "' target='_blank'><span style='font-size:16px; font-family:Times, serif'>" . $row[contact] . "</span></a><br>														
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
										$assoc = $_GET[acro];

									
										// Assocation News Start

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

										// Get Association News
										

											$sql3 = "SELECT * FROM associations WHERE id = '" . $assoc . "'";
											$result3 = $conn->query($sql3);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result3)) {
												$acro = $row[acronym];
											}

?>     
    
<?


										$date = date_create();
										$date2 =  date_timestamp_get($date);
										$assoc = $_GET[acro];
									
										// Assocation News Start

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

										// Get Association News
										

											$sql4 = "SELECT * FROM editorial WHERE subject = '5' AND ed_text LIKE '%" . $acro . "%' ORDER BY id DESC";
											$result4 = $conn->query($sql4);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result4)) {
												echo  "<a href='https://landscapearchitect.com/research/article.php/" . $row[id] ."' target='_blank'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row[title]))) . "<br>";
												
												
												
												
											}





?>         


   



<!-- End Assoc Search Section -->


	<!-- End Content Section -->
    
<!-- End Main Section -->
</div>

<!-- Start Banner Section -->  

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div>
    	<?
		include $include_path . "banner-unvers-js2.inc";
		?>
	</div> <br>
        
        
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div style="position:relative; left:-700px">
	<center><? include $include_path . "lo_footer-main2.inc"; ?><br><br></center>
	</div>

</div>