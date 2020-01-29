
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
			
<link type="text/css" rel="stylesheet" media="all" href="https://landscapearchitect.com/css/vertical.css" />
<script type="text/javascript" src="https://landscapearchitect.com/js/vertical.js"></script>			

			<div style="position: relative; left: -30px; top: 0px; z-index: 40000">			
<ul class="css_menu" style="margin: 30px auto; width: 210px;">
	<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Business Services &amp; Software</span></a>
		<ul>
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
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=28"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>		  						
			
		</ul>
	</li>
	<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Equipment: Installation</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1209' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1209"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
	<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Equipment: Maintenance</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1210' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1210"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
	<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Equipment: Tools/Parts/Rentals</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1211' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1211"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Erosion Control</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '30' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=30"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Fencing</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1300' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1300"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Irrigation</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1139' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1139"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Lighting/Electrical</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '32' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=32"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Outdoor Living</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1214' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1214"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Park & Recreation</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '33' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=33"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Pavers, Masonry, Blocks & Rocks</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '38' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=38"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Pest/Wildlife</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1212' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1212"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Plant Accessories & Amendments</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1002' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1002"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Plant Chemicals & Amendments</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1216' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1216"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Sculpture/Art/Garden Ornaments</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1301' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1301"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Site Amenities</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '29' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=29"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Site Furnishings &amp; Receptacles</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1215' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1215"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Water Features</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '41' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=41"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>
		<li>
		<a href="#"><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 12px">Water Management</span></a>
		<ul>
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

											$sql1 = "SELECT * FROM xlist WHERE idParent = '1213' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
												
											while($row = mysqli_fetch_array($result1)) {
													echo '<li><a href="https://landscapearchitect.com/products/index-all-b.php?number=' . $row[id] .'&ad=1213"><span style="font-size: 12px">'. $row[name] . '</span></a></li>';									
											}
									?>			
			
			
		</ul>
	</li>	
</ul>
				</div>
       
       
       								<div style="position: absolute; top: 630px">
       
											<h3>Advertisers</h3><br>
                                    
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
       								</div>
       
				
				
			</td>
			
			
			
			<td width="784">
			
			
<div style="position:relative; left: -50px; top:-25px; z-index: 0">
			
                   <center><h3>Featured Products</h3></center>
	</div>
			
                    			
                    			
<div style="position:relative; left: 0px; top:10px; z-index: 0">

	<!-- Slide Start -->
	
	<style>
* {box-sizing:border-box}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: transparent;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

	

<div class="slideshow-container">
<!-- Slide Show Start -->


      
									<?
									
										// Product Script Start

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


										// start for getting products from table

											$key = "TLE-LBtrans";

											$sql = "SELECT * FROM vendor_product WHERE featured = 'yes' ";
											$result = $conn->query($sql);									
									
										// products rotating section
												$i = 1;
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "10") {
													if ($i == 1){
													echo '<div class="mySlides fade"><div class="numbertext">' . $i . '/ 10</div><a href="https://landscapearchitect.com/template-prod-a.php?number=' . $row[id] .'" target="_blank"><center><img style="max-height: 300px" src="https://landscapearchitect.com/products/images/' . $row[photo] .'" alt="Product Image"></center></a><div class="text"><h3 style="color: #FFFFFF; background-color: rgba(0, 0, 0, 0.75)">'. $row[product_name] . '</h3></div></div>';
										 			$i++;
													}
													else {
													echo '<div class="mySlides fade"><div class="numbertext">' . $i . '/ 10</div><a href="https://landscapearchitect.com/template-prod-a.php?number=' . $row[id] .'" target="_blank"><center><img style="max-height: 300px" src="https://landscapearchitect.com/products/images/' . $row[photo] .'" alt="Product Image"></center></a><div class="text"><h3 style="color: #FFFFFF; background-color: rgba(0, 0, 0, 0.75)">'. $row[product_name] . '</h3></div></div>';
										 			$i++;								
													}
													
													
     											}													
											}
										// Product Script End
									?>



<!-- Slide Show End -->
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>   
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>     
  <span class="dot"></span>     
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

	<!-- Slide End -->
	
                    			
                    			
        <hr><br><br>
                   			
	<center><h3 style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 28px">Products Available on LandscapeOnline</h3></center><br>
   			            			            			
   			            			            			
   








<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>