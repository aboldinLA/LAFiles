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
include("search-engine-leaderboard-banners.inc");
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
	  
	  
	  
	  
	  <?
	  
   $safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;

//Safari
if ($safari) { 
	  
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
																   	  
														   
																// used to get a count for 2 items
																   
																   if ($_GET['ad'] == 41) {

																	$sql399 = "SELECT DISTINCT vendor_id FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') ORDER BY vendor_id ASC";


																	$result399 = $conn->query($sql399);

																	$rowcount399=mysqli_num_rows($result399);


																			$xCount=0;
																   			$qp = 0;

																		while($row = mysqli_fetch_array($result399)) {
																			
																			
																			$sql499 = "SELECT * FROM new_vendor WHERE id='" . $row['vendor_id'] . "' AND status = '18'";
																			$result499 = $conn->query($sql499);
																			
																			
																				while($row = mysqli_fetch_array($result499)) {
																					
																					
																					if ($qp == 0) {
																						$venId01 = $row['id'];
																						$qp++;
																					} elseif ($qp == 1) {
																						$venId02 = $row['id'];
																						$qp++;
																						$xtime=$qp;
																					}
																				}
																			}
																	   
																   }
	
}
	  
	  
	  ?>
	  
	  
	  <?
	  
   $chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;

//Chrome
if ($chrome) { 
	  
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
																   	  
														   
																// used to get a count for 2 items
																   
																   if ($_GET['ad'] == 41) {

																	$sql399 = "SELECT DISTINCT vendor_id FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') ORDER BY vendor_id ASC";


																	$result399 = $conn->query($sql399);

																	$rowcount399=mysqli_num_rows($result399);


																			$xCount=0;
																   			$qp = 0;

																		while($row = mysqli_fetch_array($result399)) {
																			
																			
																			$sql499 = "SELECT * FROM new_vendor WHERE id='" . $row['vendor_id'] . "' AND status = '18'";
																			$result499 = $conn->query($sql499);
																			
																			
																				while($row = mysqli_fetch_array($result499)) {
																					
																					
																					if ($qp == 0) {
																						$venId01 = $row['id'];
																						$qp++;
																					} elseif ($qp == 1) {
																						$venId02 = $row['id'];
																						$qp++;
																						$xtime=$qp;
																					}
																				}
																			}
																	   
																   }
	
}
	  
	  
	  ?>
	  	  
	  
  
	  

	  
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

								
								
			
					  
					  

								
			

																	<!-- echo statements below are commented out because they were showing up as a list of sub categories underneath category title on this page -->

																<?

																		$cat1 = $_GET['ad'];
																		$cat2 = $_GET['number'];
																		$cat3 = $_GET['catMain'];
																		$cat4 = $_GET['catName'];


																			$sql1 = "SELECT * FROM xlist WHERE idParent = '" . $cat1 ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
																		$result1 = $conn->query($sql1);									

																	// category section

//																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index.php?ad='. $cat1 . '">Top Level</option>';

																		while($row = mysqli_fetch_array($result1)) {



																			$sql33 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $row['id'] ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result33 = $conn->query($sql33);

																			$rowcount33=mysqli_num_rows($result33);


																			$sql44 = "SELECT * FROM new_vendor WHERE xlist LIKE '%". $row['id'] ."%' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result44 = $conn->query($sql44);

																			$rowcount44=mysqli_num_rows($result44);


																			$sql55 = "SELECT DISTINCT vendor_id FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist='". $row['id'] ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result55 = $conn->query($sql55);

																			$rowcount55=mysqli_num_rows($result55);				

																				if ($rowcount33 != 0){
//																					echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub.php?ad=' . $cat1 . '&number='. $row['id'] . '&catName='. $row['name'] . '&catMain='. $cat3 . '&uname2=' . $uname2 . '"><span style="font-family: Helvetica, Arial; font-size: 14px">'. $row['name'] . ' ('. $rowcount55 . ')</span></option>';
																				}

																		}

//																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub.php?ad=' . $cat1 . '&number='. $cat2 . '&catName='. $cat4 . '&catMain='. $cat3 . '&kind=8&uname2=' . $uname2 . '">View All Products</option>';



																?>		  								



			
								
							</div>
							  
							  
							  
																
								
							</div>
	  					</div>
						</div>
	  

	  
							
	
							
							
				<div class="flexbox-container">  <!-- took 'colShift' class off -->

				  <div class="main col-md-9">
					  
					  
<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
?>

<?php
//Firefox
if ($firefox) {?> 
					  
					  
					  		<section>

									<?
									
										// 19 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='19' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='19' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='19' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='19' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='19' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='19' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='19' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='19' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='19' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='19' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='19' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='19' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        		   
																   
																   
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {
																		
																		$diLogo = $_GET['ad'];
																		
																		if (($diLogo == 1209) || ($diLogo == 1210) || ($diLogo == 1211)) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/te-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: red'>&nbsp;&nbsp;";
																		
																		} else {
																			
																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";																			
																			
																		}
																		

																		

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash																		   
																   
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 19 End -->
					   							
									?>	
					 					  
					  		</section>
					  
					  		<section>

									<?
									
										// 18 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='18' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='18' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='18' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='18' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='18' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='18' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='18' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='18' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='18' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        		   
																   
																   
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 18 End -->
					   							
									?>	
					 					  
					  		</section>
					  
					  		<section>

									<?
									
										// 16 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='16' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='16' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='16' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='16' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='16' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='16' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='16' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='16' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='16' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        		   
																   
																   
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28) || ($index == 31) || ($index == 34) || ($index == 37)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29) || ($index == 32) || ($index == 35) || ($index == 38)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30) || ($index == 33) || ($index == 36) || ($index == 39)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 16 End -->
					   							
									?>	
					 					  
					  		</section>
					  
					  
					  
					  		<section>

									<?
									
										// 14 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='14' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='14' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='14' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='14' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='14' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='14' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='14' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='14' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='14' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        		   
																   
																   
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 14 End -->
					   							
									?>	
					 					  
					  		</section>
					  
					  
					  		<section>

									<?
									
										// 12 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='12' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='12' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='12' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='12' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='12' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='12' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='126' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='126' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='12' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='12' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        		   
																   
																   
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 12 End -->
					   							
									?>	
					 					  
					  		</section>
					  					  
					  
					  		<section>

									<?
									
										// 10 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='10' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='10' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='10' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='10' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='10' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='10' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='10' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='10' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='10' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        		   
																   
																   
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 10 End -->
					   							
									?>	
					 					  
					  		</section>
					  					  
					  
	
					  
<?}?>
					  

			
					  		<section>

									<?
                                
// Safari Chrome Start

									
										// 19 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='19' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='19' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='19' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='19' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='19' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='19' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='19' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='19' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='19' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='19' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='19' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='19' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        	
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {
																		
																		$diLogo = $_GET['ad'];
																		
																		if (($diLogo == 1209) || ($diLogo == 1210) || ($diLogo == 1211)) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/te-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: red'>&nbsp;&nbsp;";
																		
																		} else {
																			
																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";																			
																			
																		}
																		

																		

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 19 End -->
					   							
									?>	
					 					  
					  		</section>
					  					  					  
					  
					  
			
					  		<section>

									<?
									
										// 18 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='18' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='18' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='18' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='18' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='18' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='18' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='19' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='18' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='18' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='18' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        	
																   
		
																   
																   
																   
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																   

																   
																   
																   
																   
																   
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}	
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if ($xtime == 322) {
																	
																	
																   
																if ($index == 1) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
    																$index++;															   
																	
																	
																} elseif ($index == 2) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div><div class='col'>&nbsp;</div></div>";
																	
																	
																}   
																   
																   
																   																	
																	
																	
																	
																	
																	
																	
																	
																} else {  
																   
																   
																   
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }}
													
												}
					   
					   							//  <!-- 18 End -->
					   							
									?>	
					 					  
					  		</section>
					  
					  
					  		<section>

									<?
									
										// 16 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='16' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='16' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='16' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='16' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='16' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='16' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='16' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='16' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='16' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        	
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 16 End -->
					   							
									?>	
					 					  
					  		</section>	
					  
					  
					  		<section>

									<?
									
										// 14 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='14' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='14' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='14' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='14' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='14' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='14' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='14' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='14' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='187' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='606' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='14' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='187' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='606'  OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        	
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 14 End -->
					   							
									?>	
					 					  
					  		</section>	
					  
					  
					  
					  		<section>

									<?
									
										// 12 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='12' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='12' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='12' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='12' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='12' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='12' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='12' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='12' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='12' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        	
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 12 End -->
					   							
									?>	
					 					  
					  		</section>					  
					  
					  
					  		<section>

									<?
									
										// 10 Start Add for for Promos




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='10' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1373') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status='10' ORDER BY vendor_id ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status='10' ORDER BY vendor_id ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status='10' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='10' ORDER BY vendor_id ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status='10' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='10' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='10' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											}         
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='10' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													
													
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																   
																   
																   
											$key48 = $_GET['ad'];
						
						
											if ($key48  == 32) {
						

											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='203' OR xlist='204' OR xlist='205' OR xlist='208' OR xlist='209' OR xlist='212' OR xlist='216' OR xlist='218' OR xlist='219' OR xlist='221' OR xlist='222' OR xlist='223' OR xlist='224' OR xlist='225' OR xlist='226' OR xlist='227' OR xlist='617' OR xlist='650' OR xlist='667' OR xlist='680' OR xlist='763' OR xlist='766' OR xlist='821' OR xlist='823' OR xlist='935' OR xlist='948' OR xlist='953' OR xlist='989' OR xlist='1179' OR xlist='1194' OR xlist='1304' OR xlist='1337') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1300) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='101' OR xlist='106' OR xlist='556' OR xlist='797' OR xlist='871' OR xlist='874' OR xlist='875' OR xlist='890' OR xlist='1309' OR xlist='1310' OR xlist='1311' OR xlist='1312' OR xlist='1325' OR xlist='1350' OR xlist='1351') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 29) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='87' OR xlist='90' OR xlist='93' OR xlist='95' OR xlist='97' OR xlist='98' OR xlist='104' OR xlist='107' OR xlist='109' OR xlist='111' OR xlist='117' OR xlist='119' OR xlist='120' OR xlist='121' OR xlist='123' OR xlist='131' OR xlist='132' OR xlist='135' OR xlist='137' OR xlist='145' OR xlist='595' OR xlist='689' OR xlist='719' OR xlist='789' OR xlist='838' OR xlist='1034' OR xlist='1230' OR xlist='1231' OR xlist='1238' OR xlist='1356' OR xlist='1373') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1214) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='85' OR xlist='91' OR xlist='110' OR xlist='113' OR xlist='134' OR xlist='139' OR xlist='244' OR xlist='758' OR xlist='818' OR xlist='907' OR xlist='1025' OR xlist='1032' OR xlist='1186' OR xlist='1187' OR xlist='1224' OR xlist='1239' OR xlist='1313') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 38) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='329' OR xlist='330' OR xlist='331' OR xlist='334' OR xlist='335' OR xlist='336' OR xlist='338' OR xlist='339' OR xlist='340' OR xlist='341' OR xlist='343' OR xlist='344' OR xlist='347' OR xlist='348' OR xlist='353' OR xlist='565' OR xlist='575' OR xlist='640' OR xlist='657' OR xlist='660' OR xlist='685' OR xlist='743' OR xlist='756' OR xlist='827' OR xlist='832' OR xlist='833' OR xlist='851' OR xlist='944' OR xlist='950' OR xlist='961' OR xlist='974' OR xlist='1040' OR xlist='1226' OR xlist='1305' OR xlist='1318' OR xlist='1353' OR xlist='1363' OR xlist='1368') AND vendor_id='" .$value. "'";									
												
											} elseif ($key48  == 1301) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='144' OR xlist='784' OR xlist='839' OR xlist='901' OR xlist='1330' OR xlist='1331') AND vendor_id='" .$value. "'";										
												
											} elseif ($key48  == 1215) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='114' OR xlist='127' OR xlist='128' OR xlist='129' OR xlist='130' OR xlist='141' OR xlist='618' OR xlist='697' OR xlist='740' OR xlist='1207' OR xlist='1243' OR xlist='1329') AND vendor_id='" .$value. "'";											
												
											} elseif ($key48  == 33) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='229' OR xlist='230' OR xlist='231' OR xlist='235' OR xlist='237' OR xlist='240' OR xlist='242' OR xlist='243' OR xlist='246' OR xlist='248' OR xlist='250' OR xlist='253' OR xlist='254' OR xlist='255' OR xlist='256' OR xlist='257' OR xlist='258' OR xlist='259' OR xlist='260' OR xlist='261' OR xlist='262' OR xlist='264' OR xlist='265' OR xlist='611' OR xlist='619' OR xlist='620' OR xlist='621' OR xlist='622' OR xlist='659' OR xlist='702' OR xlist='745' OR xlist='810' OR xlist='820' OR xlist='902' OR xlist='1184' OR xlist='1240' OR xlist='1261' OR xlist='1320' OR xlist='1332' OR xlist='1333' OR xlist='1354' OR xlist='1355' OR xlist='1362') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 41) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='427' OR xlist='428' OR xlist='453' OR xlist='457' OR xlist='459' OR xlist='638' OR xlist='647' OR xlist='687' OR xlist='848' OR xlist='1100' OR xlist='1196' OR xlist='1253' OR xlist='1263' OR xlist='1315' OR xlist='1316' OR xlist='1317' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";											
												
											}  elseif ($key48  == 1209) {
						

											$sql99 = "SELECT * vendor_product WHERE (xlist='354' OR xlist='356' OR xlist='358' OR xlist='366' OR xlist='368' OR xlist='372' OR xlist='382' OR xlist='390' OR xlist='399' OR xlist='402' OR xlist='404' OR xlist='405' OR xlist='407' OR xlist='600' OR xlist='601' OR xlist='608' OR xlist='623' OR xlist='624' OR xlist='627' OR xlist='632' OR xlist='636' OR xlist='637' OR xlist='693' OR xlist='721' OR xlist='724' OR xlist='729' OR xlist='750' OR xlist='752' OR xlist='755' OR xlist='893' OR xlist='897' OR xlist='940' OR xlist='975' OR xlist='990' OR xlist='761') AND vendor_id='" .$value. "'";
						
											} elseif ($key48  == 1210) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='363' OR xlist='367' OR xlist='1341' OR xlist='369' OR xlist='370' OR xlist='373' OR xlist='374' OR xlist='375' OR xlist='391' OR xlist='392' OR xlist='393' OR xlist='394' OR xlist='395' OR xlist='396' OR xlist='403' OR xlist='410' OR xlist='411' OR xlist='588' OR xlist='589' OR xlist='599' OR xlist='602' OR xlist='603' OR xlist='631' OR xlist='696' OR xlist='717' OR xlist='751' OR xlist='778' OR xlist='788' OR xlist='791' OR xlist='799' OR xlist='807' OR xlist='865') AND vendor_id='" .$value. "'";												
												
											} elseif ($key48  == 1211) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='357' OR xlist='378' OR xlist='379' OR xlist='383' OR xlist='384' OR xlist='386' OR xlist='398' OR xlist='416' OR xlist='563' OR xlist='654' OR xlist='658' OR xlist='674' OR xlist='703' OR xlist='720' OR xlist='722' OR xlist='726' OR xlist='732' OR xlist='739' OR xlist='771' OR xlist='794' OR xlist='801' OR xlist='868' OR xlist='898' OR xlist='927' OR xlist='960' OR xlist='1021' OR xlist='1026' OR xlist='1039' OR xlist='1303' OR xlist='1319' OR xlist='1334' OR xlist='1335' OR xlist='1339' OR xlist='1349') AND vendor_id='" .$value. "'";												
											} elseif ($key48  == 28) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='56' OR xlist='59' OR xlist='60' OR xlist='62' OR xlist='63' OR xlist='65' OR xlist='74' OR xlist='75' OR xlist='76' OR xlist='78' OR xlist='126' OR xlist='612' OR xlist='646' OR xlist='876' OR xlist='891' OR xlist='894' OR xlist='896' OR xlist='908' OR xlist='995' OR xlist='1041' OR xlist='1102' OR xlist='1150' OR xlist='1235' OR xlist='1244' OR xlist='1260' OR xlist='1338' OR xlist='1340' OR xlist='1357' OR xlist='1358') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 30) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='149' OR xlist='152' OR xlist='156' OR xlist='157' OR xlist='158' OR xlist='161' OR xlist='164' OR xlist='165' OR xlist='167' OR xlist='615' OR xlist='616' OR xlist='1087' OR xlist='1160' OR xlist='1164') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1212) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='322' OR xlist='323' OR xlist='324' OR xlist='325' OR xlist='783' OR xlist='916' OR xlist='933' OR xlist='972') AND vendor_id='" .$value. "'";	
												
											}  elseif ($key48  == 1002) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='288' OR xlist='289' OR xlist='297' OR xlist='300' OR xlist='308' OR xlist='311' OR xlist='312' OR xlist='313' OR xlist='314' OR xlist='317' OR xlist='318' OR xlist='319' OR xlist='420' OR xlist='562' OR xlist='652' OR xlist='661' OR xlist='665' OR xlist='802' OR xlist='805' OR xlist='806' OR xlist='813' OR xlist='852' OR xlist='1015' OR xlist='1029' OR xlist='1171' OR xlist='1229' OR xlist='1308' OR xlist='1348') AND vendor_id='" .$value. "'";
												
											} elseif ($key48  == 1213) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='175' OR xlist='179' OR xlist='181' OR xlist='189' OR xlist='424' OR xlist='425' OR xlist='435' OR xlist='440' OR xlist='442' OR xlist='443' OR xlist='449' OR xlist='971' OR xlist='978' OR xlist='979' OR xlist='994' OR xlist='1201') AND vendor_id='" .$value. "'";	
												
											}        	
																   
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);
																   
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																	
																   echo "<div class='flex-grid-thirds'><div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<div class='col'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' target='_blank'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "<br></p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button' target='_blank'>View Profile</a></p></figcaption></figure></div></div>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 10 End -->
					   							
									?>	
					 					  
					  		</section>
					  
					  
							<!-- Details End -->
					  

					  
					  

					</div> 
					
					

					
					

				  <div class="sidebar">
					  

					  							
							<!-- Keyword Search Start -->
					  
							<div class="keywordContain">

<!--										 <h3 style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 24px;">Keyword Search: <? echo $keywordSE; ?></h3>-->

											<form method="post" action="Search-Products.php" target="_blank">

											

												<input type="text" name="keywrd" value="<? echo $keywordSE ?>" id="keywordBox" placeholder="Keyword Search"><input type="image" value="Go" width="34px" src="https://landscapearchitect.com/images/mag-button.png"  class ="sch" id="sch" onmouseover="this.src='https://landscapearchitect.com/images/mag-button-over.png';"  onmouseout="this.src='https://landscapearchitect.com/images/mag-button.png';" style="position: relative; top: -7px" /><br><br>
													<!-- <input type="submit" value="Submit" style="background-color: #4fb548; position: relative; left: -10px; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"> -->

												

											</form>

								  </div>					  
					  
							<!-- Keyword Search End -->								  
					  					  
					  
							<!-- Banners Start -->
					  
					  
							<div>
					  
							<?

							// Category Banners
							include("banner-LAD.inc");

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
	
	