<?
include("lo_top-main2-prod.inc");
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
			
		<!-- start -->

<style>

	<!--
		a:link { color:#000000; }
		a:visited { color:#000000; } 
		a:hover { color: blue; } 
	//-->

.navbar-fixed-left {
  width: 225px;
  height: 30px;
  position: relative;
  border-radius: 0;
}

.navbar-fixed-left .navbar-nav > li {
  float: left;
  height: 30px;
  width: 225px;
  margin-top: 0px;
  background-color: transparent;

}

.nav > li > a:hover{
  background-color: transparent;
}


.navbar-fixed-left + .container {
 background-color: transparent;
}



/* On using dropdown menu (To right shift popuped) */
.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
  positon: relative;
  left: 200px;
  margin-top: 0px;
  margin-left: 0px;
}




</style>


<div class="navbar navbar-fixed-left" style="background-color: #FFFFFF; color: #000000; border: 0">
  <a class="navbar-brand" href="#"><span style="color: #000000">Product Search</span></a><br>
  <ul class="nav navbar-nav">
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Business Services &amp; Software</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql1 = "SELECT * FROM xlist WHERE idParent = '28' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=28"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				  
     </ul>
   </li>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Equipment: Installation</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql2 = "SELECT * FROM xlist WHERE idParent = '1209' ORDER BY name ASC";
											$result2 = $conn->query($sql2);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1209"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				  
     </ul>
   </li>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Equipment: Maintenance</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql3 = "SELECT * FROM xlist WHERE idParent = '1210' ORDER BY name ASC";
											$result3 = $conn->query($sql3);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result3)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1210"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';														
											}
									?>		  				  
	 
     </ul>
   </li>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Equipment: Tools/Parts/Rentals</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql4 = "SELECT * FROM xlist WHERE idParent = '1211' ORDER BY name ASC";
											$result4 = $conn->query($sql4);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result4)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1211"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				  
     </ul>
   </li>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Erosion Control</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql5 = "SELECT * FROM xlist WHERE idParent = '30' ORDER BY name ASC";
											$result5 = $conn->query($sql5);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result5)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=30"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				
     </ul>
   </li>
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Fencing</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql6 = "SELECT * FROM xlist WHERE idParent = '1300' ORDER BY name ASC";
											$result6 = $conn->query($sql6);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result6)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1300"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Irrigation</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql7 = "SELECT * FROM xlist WHERE idParent = '1139' ORDER BY name ASC";
											$result7 = $conn->query($sql7);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result7)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1139"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Lighting/Electrical</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql8 = "SELECT * FROM xlist WHERE idParent = '32' ORDER BY name ASC";
											$result8 = $conn->query($sql8);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result8)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=32"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Outdoor Living</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql9 = "SELECT * FROM xlist WHERE idParent = '1214' ORDER BY name ASC";
											$result9 = $conn->query($sql9);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result9)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1214"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Park & Recreation</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql10 = "SELECT * FROM xlist WHERE idParent = '33' ORDER BY name ASC";
											$result10 = $conn->query($sql10);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result10)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=33"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  				
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Pavers, Masonry, Blocks & Rocks</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql11 = "SELECT * FROM xlist WHERE idParent = '38' ORDER BY name ASC";
											$result11 = $conn->query($sql11);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result11)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=38"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Pest/Wildlife</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql12 = "SELECT * FROM xlist WHERE idParent = '1212' ORDER BY name ASC";
											$result12 = $conn->query($sql12);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result12)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1212"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Plant Accessories & Amendments</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql13 = "SELECT * FROM xlist WHERE idParent = '1002' ORDER BY name ASC";
											$result13 = $conn->query($sql13);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result13)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1002"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Plant Chemicals & Amendments</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql14 = "SELECT * FROM xlist WHERE idParent = '1216' ORDER BY name ASC";
											$result14 = $conn->query($sql14);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result14)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1216"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Sculpture/Art/Garden Ornaments</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql15 = "SELECT * FROM xlist WHERE idParent = '1301' ORDER BY name ASC";
											$result15 = $conn->query($sql15);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result15)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1301"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Site Amenities</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql16 = "SELECT * FROM xlist WHERE idParent = '29' ORDER BY name ASC";
											$result16 = $conn->query($sql16);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result16)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=29"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Site Furnishings & Receptacles</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql17 = "SELECT * FROM xlist WHERE idParent = '1215' ORDER BY name ASC";
											$result17 = $conn->query($sql17);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result17)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1215"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Water Features</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql18 = "SELECT * FROM xlist WHERE idParent = '41' ORDER BY name ASC";
											$result18 = $conn->query($sql18);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result18)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=41"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 12px">Water Management</span><span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
									<?
										// category Start

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


										// category for table

											$key = "TLE-LBtrans";

											$sql19 = "SELECT * FROM xlist WHERE idParent = '1213' ORDER BY name ASC";
											$result19 = $conn->query($sql19);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result19)) {
													echo '<li><a href="https://landscapearchitect.com/template-prod-e.php?number=' . $row[id] .'&ad=1213"><span style="font-size: 10px">'. $row[name] . '</span></a></li>';									
											}
									?>		  	
     </ul>
   </li>   
   </ul>
</div>

								
			<!-- Left Nav End -->
			
			<!-- Left Banner Start -->
			
			
											<h3>Advertisers</h3>
                                    
									<?
									
										// Banner Ads Start

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


										// start for the banner add counting and getting from table
										
											$ad = $_GET["ad"];

											if ($ad=='1') {

											$sql = "SELECT * FROM banner_ups3 where ROS = 'yes' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
													echo "<section><a href='https://landscapearchitect.com/research/Ad-Transfer/transfer/" . $row[web] . "' target='_blank'><img width='225px' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a>
										</section><br>";
											}
										}else{
											$sql = "SELECT * FROM banner_ups where product = '" . $ad . "' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
													if (empty($row[picture])) { 
													echo "&nbsp;";
													}else{
													echo "<section><a href='https://landscapearchitect.com/research/Ad-Transfer/transfer/" . $row[web] . "' target='_blank'><img width='225px' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a>
													</section><br>";													
													}
											}										
										}
											
											
											
											
									?>  			
			
			
			
			
			
			
			
			<!-- Left Banner End -->
			
				
				
				
				
			</td>
			
			
			
			<td width="784">
			
 	<!-- Main 1 -->
    <div class="col-md-10">
    
   	 <center><h1>Featured Products on LandscapeOnline</h1></center><br><br>
      
                    <div class="row">
                        <div class="col-md-8 col-sm-offset-2a">
                                    
     <div id="carousel1" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carousel1" data-slide-to="0" class="active"></li>
         <li data-target="#carousel1" data-slide-to="1"></li>
         <li data-target="#carousel1" data-slide-to="2"></li>
         <li data-target="#carousel1" data-slide-to="3"></li>
         <li data-target="#carousel1" data-slide-to="4"></li>
         <li data-target="#carousel1" data-slide-to="5"></li>
         <li data-target="#carousel1" data-slide-to="6"></li>
         <li data-target="#carousel1" data-slide-to="7"></li>
         <li data-target="#carousel1" data-slide-to="8"></li>         
         <li data-target="#carousel1" data-slide-to="9"></li>         
       </ol>
       <div class="carousel-inner" role="listbox">      
      
       
									<?
									
										// Editoral Stories Start

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


										// start for the banner add counting and getting from table

											$key = "TLE-LBtrans";

											$sql = "SELECT * FROM vendor_product WHERE featured = 'yes' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												$i = 1;
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "10") {
													if ($i == 1){
													echo '<div class="carousel-inner" role="listbox"><div class="item active"><a href="https://landscapearchitect.com/template-prod-a.php?number=' . $row[id] .'" target="_blank"><img style="max-height: 300px" src="https://landscapearchitect.com/products/images/' . $row[photo] .'" alt="News Story Image" class="center-block"></a><div class="carousel-caption"><h3> </h3><h3 style="color: #FFFFFF; background-color: rgba(0, 0, 0, 0.75)">'. $row[product_name] . '</h3></div></div>';
										 			$i++;
													}
													else {
													echo '<div class="item"><a href="https://landscapearchitect.com/template-prod-a.php?number=' . $row[id] .'" target="_blank"><img style="max-height: 300px" src="https://landscapearchitect.com/products/images/' . $row[photo] .'" alt="News Story Image" class="center-block"></a><div class="carousel-caption"><h3> </h3><h3 style="color: #FFFFFF; background-color: rgba(0, 0, 0, 0.75)">'. $row[product_name] . '</h3></div></div>';														
										 			$i++;														
													}
													
													
     											}													
											}
									?>
									
       </div>
       <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>                           </div>
       </div>	<br>
<br>


                                   
       <hr>
                            
                  <div class="row">
                        <div class="col-md-8 col-sm-offset-2a">
                        
                         	                     
                            <div class="row">
                    			<center><h3 class="page-header" id="image-gallery">October 2016 Profiles</h3></center>
                    			<center><p class="page-header" id="image-gallery">Need to request infromation from all the vendors below: <a href="https://landscapearchitect.com/products/listing-premium.php" target="_blank">Read more</a></p></center>
                                <a href="https://landscapearchitect.com/vendor-pages/unique/unique.php?id=&coid=10371" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_0a45fbafadc491dad27a68389dbfcfcf.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/rootwell/rootwell.php?id=&coid=41943" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_4f5fa6a6209c564df4438761ad3eb4bb.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/moonvalley/moonvalley.php?id=&coid=14829" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_73ac431b13894c183b5c123da3be8033.jpg" class="img-responsive">
                                </a>
                            </div><br>
                            <div class="row">
                                <a href="https://landscapearchitect.com/vendor-pages/kifco/kifco.php?id=&coid=11796" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_685c15f5352b8c24773f9b98ec47fff0.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/water-fs/water-fs.php?id=&coid=41444" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_687af28091d2061057ab482f0a0370cc.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/lawn-debbi/lawn-debbi.php?id=&coid=42484" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_095f3aa1df4a12735e7fc9448c20a643.jpg" class="img-responsive">
                                </a>
                            </div><br>
                            <div class="row">
                                <a href="https://landscapearchitect.com/vendor-pages/stoneage/stoneage.php?id=&coid=12476" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_44989f7ed9233caad6e7f3e98316920a.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/otterbine/otterbine.php?id=&coid=4441" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_ba08bc2a8cdbf773281749fc3128dde1.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/brave/brave.php?id=&coid=42448" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_2ade3a44552a3a70a57f506b2ed84831.jpg" class="img-responsive">
                                </a>
                            </div><br>                            
                            <div class="row">
                                <a href="https://landscapearchitect.com/vendor-pages/earthway/earthway.php?id=&coid=12092" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_8f3bcdbbd47bfb2221c0a9c87ae7c1b5.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/stoneagecreations/stoneagecreations.php?id=&coid=20176" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_69fbaeb462d10f5db969a9df37aa60a9.jpg" class="img-responsive">
                                </a>
                                <a href="https://landscapearchitect.com/vendor-pages/infinity/infinity.php?id=&coid=43022" target="_blank" class="col-sm-4">
                                    <img width="80%" src="https://landscapearchitect.com/products/images/logo_2869caee4d711fddcd105b6ff9be657f.jpg" class="img-responsive">
                                </a>
                            </div><br>                            
                            
                            
                            
  
                    <div class="row">
                        <div class="col-md-4 col-sm-offset-3a">
   
                            <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>
                        
                            <link rel="stylesheet" href="slide-in-panel/css/style-panel.css"> <!-- Resource style -->
                            <script src="slide-in-panel/js/modernizr.js"></script> <!-- Modernizr -->
                        
                        
                            <main class="cd-main-content">
                                <a href="#0" class="cd-btn">Learn More</a>
                                <!-- your content here -->
                            </main>
                        
                            <div class="cd-panel from-right">
                                <header class="cd-panel-header">
                                    <h1>Product Profiles<br>
									Product Information at a Touch!</h1>
                                    <a href="#0" class="cd-panel-close">Close</a>
                                </header>
                        
                                <div class="cd-panel-container">
                                    <div class="cd-panel-content">
										<p><span style="font-size: 18px">As a valued subscriber to LA and/or LC/DBM Welcome to LandscapeOnline's Featured Products Center. Simply click on the the link to view the online Vendor Profiles Center - or - To request product information from one or more vendors</span> </p>
                                        
                                    </div> <!-- cd-panel-content -->
                                </div> <!-- cd-panel-container -->
                            </div> <!-- cd-panel -->
                        	<script src="slide-in-panel/js/jquery-2.1.1.js"></script>
                        	<script src="slide-in-panel/js/main-panel.js"></script> <!-- Resource jQuery -->   
   
                            </div>
                            </div>
                	
                                            
                        </div>
                    </div>

  
  		<hr noshade><br>
        
 
                        
<?

include("button-one.inc");


?>
        


					<hr>
                  
                 <!-- featured Products -->
                  
					<div class="row">
						<div class="col-md-8 col-sm-offset-2">
                			
                            <div class="row">
                    			<center><h3 class="page-header" id="image-gallery">Featured Products</h3></center>
                                <a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 								<figure>
									<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
									<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									

								</figure>
                                </a>
                                <a href="https://landscapearchitect.com/template-prod-a.php?number=22125" target="_blank" class="col-sm-4">
								<figure>
									<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product2.jpg" alt="image"><br><br>
									<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Wausau Tile, Inc.<br>
										Cleveland Public Square, 10-acre renovation in excess of 2,000,000 lbs. of concrete . . . </span></figcaption></center>
								</figure>								
                               </a>
                                <a href="https://landscapearchitect.com/template-prod-a.php?number=13060" target="_blank" class="col-sm-4">
								<figure>
									<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product3.jpg" alt="image"><br><br>
									<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold">Hearth Products Controls Co.<br>
									H2Onfire series is an electronic fire on water, turn-key appliance . . . </span></figcaption></center>								

								</figure>										
                           		</a>
                            </div><br>   
                            
                            <div class="row">
                                <a href="https://landscapearchitect.com/template-prod-a.php?number=11880" target="_blank" class="col-sm-4">
 								<figure>
									<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product4.jpg" alt="image"><br><br>
									<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold">Iron Age Designs<br>
									The sleek look of our Needle Bollard complements any modern city . . . </span></figcaption></center>										

								</figure>
                                </a>
                                <a href="https://landscapearchitect.com/template-prod-a.php?number=11683" target="_blank" class="col-sm-4">
								<figure>
									<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product5.jpg" alt="image"><br><br>
									<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold">Cre8Play<br>
									"Fun is on the Horizon, and we Knoll they'll enjoy climbing, crawling, and sliding around . . .</span></figcaption></center>									

								</figure>								
                               </a>
                                <a href="https://landscapearchitect.com/template-prod-a.php?number=40778" target="_blank" class="col-sm-4">
								<figure>
									<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product6.jpg" alt="image"><br><br>
									<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold">Firegear Outdoors<br>
									Skytech Products Group, located in Fort Wayne, Ind., manufactures a comprehensive line . . . </span></figcaption></center>	
								</figure>										
                           		</a>
                            </div><br>                   			
                			
       						    
						</div>
						</div>		          
                   
   
  
  		<hr noshade><br>
        
        
 
                        
<?

include("button-two.inc");


?>
        
        


  		<hr noshade><br>

        
  		<!-- Main 2 -->
    	 <center><h2>Learn About The Landscape Expo</h2></center><br>
 		<div class="row">
   			<div class="col-md-5 col-sm-offset-1a">        
				<div align="center" style="margin:auto">
					<figure>
  						<img width="100%" src="https://landscapearchitect.com/TLE-SAC/images/banner3.jpg" alt="image"><br><br>
  						<figcaption><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold">Everything starts at the Landscape Expo!</span></figcaption>
					</figure>
            	</div><br><br>         
    		</div>
   			<div class="col-md-5 text-justify">        
				<div style="margin:auto">
					<center><p><strong>PLAN</strong><br>
					To visit hundreds of exhibitors serving the Western United States<br><br>

					<strong>NETWORK</strong><br>
					With top brand manufacturers and contractors to learn new state-of-the art technologies and techniques<br><br>

					<strong>PARTICIPATE</strong><br>
						In dozens of seminars relevant to landscaping western climates and improve your business Sponsors<br><br>
            	
					<strong>MORE THAN JUST AN EXHIBIT HALL</strong><br>
					Something for everyone: Whether you are pursuing your Continuing Education Units (CEU) or wanting to improve your business performance and profits, our dozens of seminars provide the techniques necessary for your success.<br><br>
            	
					<strong>SEND YOUR STAFF TO THE EXPO</strong><br>
					Make Attending the Expo a Corporate Event!            	
            	
            	<br /><a href="https://landscapearchitect.com/TLE-LB/index-tle-2017.php" target="_blank">Read more</a></p></center>

            	</div><br><br>         
    		</div>             
		</div>          
        
  		<hr noshade><br>
        
 
        
        
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