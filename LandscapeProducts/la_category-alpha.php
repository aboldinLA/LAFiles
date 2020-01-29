<? include '../../includes/la-common-top.php'; ?>

<? include '../../includes/la-common-header-inner.inc'; ?>

<!--
<section class="gray_shade_anchor full_width">
	<div class="container">
		<div class="full_width overflow_">
		<a href="#" class="active">LA DETAILS</a>
			<a href="#">TOOLS &amp; EQUIPMENT</a>
			<a href="#">LOCAL WHOLESALE &amp; PLANT MATERIALS</a>
			</div>
	</div><! -- /.container -- >
	</section><! -- /.gray_shade_anchor -- >
-->

<section class="search_section_ban full_width">
<div class="container">
<div class="row">
	<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
    		<input type="text" placeholder="Search products by keyword or vendor name" />
            <button type="button"></button>
        </div><!-- /.relative -->
    </div><!-- /.col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.search_section_ban -->

<section class="tool_page full_width">
<div class="container" style="background: #FFFFFF">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBar">
	
			
					
				    <?

								$servername = "localhost";
								$username = "land_patchew";
								$password = "59q2GB6k$3";
								$dbname = "land_landscap_lollive";

								// Create connection
										$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
										if ($conn->connect_error) {
												die("Connection failed: " . $conn->connect_error);
										}   
		
		
						// Program to display URL of current page. 

						if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
							$link = "https"; 
						else
							$link = "http"; 

						// Here append the common URL characters. 
						$link .= "://"; 

						// Append the host(domain name, ip) to the URL. 
						$link .= $_SERVER['HTTP_HOST']; 

						// Append the requested resource location to the URL 
						$link .= $_SERVER['REQUEST_URI']; 
		
		
						$resultLink = substr($link, 31, 55);
		
		
						if ($resultLink == 'alpha-order-busines-services') {
							
							$_GET['ad'] = 28;
							
						} elseif ($resultLink == 'alpha-order-erosion-control') {
							
							$_GET['ad'] = 30;
							
						} elseif ($resultLink == 'alpha-order-fencing') {
							
							$_GET['ad'] = 1300;
							
						} elseif ($resultLink == 'alpha-order-irrigation') {
							
							$_GET['ad'] = 1139;
							
						} elseif ($resultLink == 'alpha-order-lighting-electrical') {
							
							$_GET['ad'] = 32;
							
						} elseif ($resultLink == 'alpha-order-outdoor-living') {
							
							$_GET['ad'] = 1214;
							
						} elseif ($resultLink == 'alpha-order-parks-playground') {
							
							$_GET['ad'] = 33;
							
						} elseif ($resultLink == 'alpha-order-pavers-masonry-blocks-rocks') {
							
							$_GET['ad'] = 38;
							
						} elseif ($resultLink == 'alpha-order-pest-control') {
							
							$_GET['ad'] = 1212;
							
						} elseif ($resultLink == 'alpha-order-plant-accessories') {
							
							$_GET['ad'] = 1002;
							
						} elseif ($resultLink == 'alpha-order-pool-and-spa') {
							
							$_GET['ad'] = 1394;
							
						} elseif ($resultLink == 'alpha-order-art-sculpture-garden-ornaments') {
							
							$_GET['ad'] = 1301;
							
						} elseif ($resultLink == 'alpha-order-site-amenities') {
							
							$_GET['ad'] = 29;
							
						} elseif ($resultLink == 'alpha-order-site-furnishings-receptacles') {
							
							$_GET['ad'] = 1215;
							
						} elseif ($resultLink == 'alpha-order-water-features') {
							
							$_GET['ad'] = 41;
							
						} elseif ($resultLink == 'alpha-order-water-management') {
							
							$_GET['ad'] = 1213;
							
						} elseif ($resultLink == 'alpha-order-installation-equipment') {
							
							$_GET['ad'] = 1209;
							
						} elseif ($resultLink == 'alpha-order-maintenance-equipment') {
							
							$_GET['ad'] = 1210;
							
						} elseif ($resultLink == 'alpha-order-tools-and-parts') {
							
							$_GET['ad'] = 1211;
							
						}				
		


								$cat1 = $_GET['ad'];

								$collapse = $_GET['ad'];
								
								
        ?>
				
	
	
				<div class="white_side full_width">
					<h2 class="mobtoggle">ALL CATEGORIES</h2>
					<div class="full_width" id="mobile_slide">


						<!-- sidebar accordian menu -->
						<? include '../../includes/la-common-sidebar-menu.inc'; ?>


					 </div><!-- #mobslide --> 
        </div><!-- /.white_side -->
				
				
			<!-- banner ads 4-end left side -->
				<?
				
					$ad = $_GET['ad'];
					$ads = array();

					$sql = "SELECT * FROM banner_ups WHERE product='" . $ad . "' AND ROS='no' ORDER BY RAND()";
					$result = $conn->query($sql);									

					while($row = mysqli_fetch_array($result)){
						if(strpos($row['picture'], '.jpg') !== false || strpos($row['picture'], '.gif') !== false){
							array_push($ads, $row);
						}
					}
					
					
					for($i = 5; $i < count($ads); $i++){
						echo '<div class="add__ full_width"><a href="' .  $ads[$i]['web'] . '"><img src="../banner/'  . $ads[$i]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
					}	
				
				?>
        
        
    </div><!-- /.col-lg-3 -->
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
    	<div class="col-xs-12 adver">
			
					 <!-- banner ad leaderboard -->
						<?
							$sql = "SELECT * FROM banner_ups WHERE product='" . $ad . "' AND ROS='lad' ORDER BY RAND() LIMIT 1";
							$result = $conn->query($sql);									

							while($row = mysqli_fetch_array($result)){
									echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div> '; 
							}

						?>
			
        </div><!-- /.adver -->
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
                
                
									<?
                
                                            $servername = "localhost";
                                            $username = "land_patchew";
                                            $password = "59q2GB6k$3";
                                            $dbname = "land_landscap_lollive";

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
                
                
                                        $ad = $_GET['ad'];
                                        
                                        
                                         if ($ad == '28') {
                                           echo '<title>Business Services | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Business Services</h1>';
                                        } elseif ($ad == '30') {
                                            echo '<title>Landscape Erosion Control Products | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Landscape Erosion Control Products</h1>';                                            
                                        }elseif ($ad == '1300') {
                                            echo '<title>Commercial / Wholesale Fencing | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Commercial / Wholesale Fencing</h1>';
                                        } elseif ($ad == '1139') {
                                            echo '<title>Landscape Irrigation | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Landscape Irrigation</h1>';    
                                        } elseif ($ad == '32') {
                                            echo '<title>Commercial Exterior Lighting / Electrical | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Commercial Exterior Lighting / Electrical</h1>';
                                        } elseif ($ad == '1214') {
                                            echo '<title>Outdoor Living / Residential Landscape | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Outdoor Living / Residential Landscape</h1>';
                                        } elseif ($ad == '33') {
                                            echo '<title>Parks / Playground Products | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Parks / Playground Products</h1>';
                                        } elseif ($ad == '38') {
                                            echo '<title>Commercial Pavers, Masonry, Blocks, Rocks | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Commercial Pavers, Masonry, Blocks, Rocks</h1>';
                                        } elseif ($ad == '1212') {
                                            echo '<title>Wildlife / Commercial Landscape Pest Control | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Wildlife / Commercial Landscape Pest Control</h1>';
                                        } elseif ($ad == '1002') {
                                            echo '<title>Wholesale Plant Accessories & Soil Amendments | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Wholesale Plant Accessories & Soil Amendments</h1>';
                                        } elseif ($ad == '1394') {
                                            echo '<title>Pool and Spa | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Pool and Spa</h1>';
                                        } elseif ($ad == '29') {
                                            echo '<title>Commercial Site Amenities | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Commercial Site Amenities</h1>';
                                        } elseif ($ad == '1215') {
                                            echo '<title>Site Furnishings / Receptacles | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Site Furnishings / Receptacles</h1>';
                                        } elseif ($ad == '1301') {
                                            echo '<title>Landscape Art, Sculpture, Metal / Stone Garden Ornaments | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Landscape Art, Sculpture, Metal / Stone Garden Ornaments</h1>';
                                        } elseif ($ad == '41') {
                                            echo '<title>Water Features, Fountains, Ponds / Equipment | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Water Features, Fountains, Ponds / Equipment</h1>';
                                        } elseif ($ad == '1213') {
                                            echo '<title>Landscape Water Management | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Landscape Water Management</h1>';
                                        } elseif ($ad == '1209') {
                                            echo '<title>Landscape Installation Equipment | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Landscape Installation Equipment</h1>';
                                        } elseif ($ad == '1210') {
                                            echo '<title>Landscape Maintenance Equipment | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Landscape Maintenance Equipment</h1>';
                                        } elseif ($ad == '1211') {
                                            echo '<title>Tools, Tires & Replacement Parts | Landscape Architect</title>';
                                            echo '<h1 class="center-section-header">Tools, Tires & Replacement Parts</h1>';
                                        }
            
                
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

																		}
            
            
											
                                            // Vendor Count Start
            
											$key48 = $_GET['ad'];
            
											if ($key48  == 32) {
                                                
                                            $xcatName = 'Commercial Exterior Lighting / Electrical';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%203%' || xlist like'%204%' || xlist like'%205%' || xlist like'%208%' || xlist like'%209%' || xlist like'%212%' || xlist like'%216%' || xlist like'%218%' || xlist like'%219%' || xlist like'%221%' || xlist like'%222%' || xlist like'%223%' || xlist like'%224%' || xlist like'%225%' || xlist like'%226%' || xlist like'%227%' || xlist like'%617%' || xlist like'%650%' || xlist like'%667%' || xlist like'%680%' || xlist like'%720%' || xlist like'%763%' || xlist like'%766%' || xlist like'%821%' || xlist like'%823%' || xlist like'%935%' || xlist like'%948%' || xlist like'%953%' || xlist like'%989%' || xlist like'%1179%' || xlist like'%1194%' || xlist like'%1304%' || xlist like'%1337%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1300) {
                                                
                                            $xcatName = 'Commercial / Wholesale Fencing';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%101%' || xlist like'%106%' || xlist like'%556%' || xlist like'%797%' || xlist like'%871%' || xlist like'%874%' || xlist like'%875%' || xlist like'%890%' || xlist like'%1309%' || xlist like'%1310%' || xlist like'%1311%' || xlist like'%1312%' || xlist like'%1325%' || xlist like'%1350%' || xlist like'%1351%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 29) {
                                                
                                            $xcatName = 'Commercial Site Amenities';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%87%' || xlist like'%90%' || xlist like'%93%' || xlist like'%98%' || xlist like'%104%' || xlist like'%107%' || xlist like'%109%' || xlist like'%111%' || xlist like'%117%' || xlist like'%119%' || xlist like'%120%' || xlist like'%121%' || xlist like'%123%' || xlist like'%131%' || xlist like'%132%' || xlist like'%135%' || xlist like'%137%' || xlist like'%145%' || xlist like'%258%' || xlist like'%581%' || xlist like'%595%' || xlist like'%689%' || xlist like'%719%' || xlist like'%789%' || xlist like'%838%' || xlist like'%1034%' || xlist like'%1230%' || xlist like'%1231%' || xlist like'%1238%' || xlist like'%1356%' || xlist like'%1366%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1214) {
                                                
                                            $xcatName = 'Landscape Irrigation &amp; Water Management';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%85%' || xlist like'%91%' || xlist like'%110%' || xlist like'%113%' || xlist like'%134%' || xlist like'%139%' || xlist like'%244%' || xlist like'%758%' || xlist like'%818%' || xlist like'%853%' || xlist like'%907%' || xlist like'%1025%' || xlist like'%1032%' || xlist like'%1098%' || xlist like'%1186%' || xlist like'%1187%' || xlist like'%1188%' || xlist like'%1186%' || xlist like'%1207%' || xlist like'%1224%' || xlist like'%1239%' || xlist like'%1313%' || xlist like'%1388%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 38) {
                                                
                                            $xcatName = 'Commercial Pavers, Masonry, Blocks, Rocks';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%329%' || xlist like'%330%' || xlist like'%331%' || xlist like'%334%' || xlist like'%335%' || xlist like'%336%' || xlist like'%338%' || xlist like'%339%' || xlist like'%340%' || xlist like'%341%' || xlist like'%343%' || xlist like'%344%' || xlist like'%347%' || xlist like'%348%' || xlist like'%353%' || xlist like'%565%' || xlist like'%575%' || xlist like'%640%' || xlist like'%657%' || xlist like'%660%' || xlist like'%685%' || xlist like'%743%' || xlist like'%756%' || xlist like'%827%' || xlist like'%832%' || xlist like'%833%' || xlist like'%851%' || xlist like'%944%' || xlist like'%950%' || xlist like'%961%' || xlist like'%974%' || xlist like'%1040%' || xlist like'%1226%' || xlist like'%1305%' || xlist like'%1318%' || xlist like'%1353%' || xlist like'%1363%' || xlist like'%1368%' || xlist like'%1386%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1301) {
                                                
                                            $xcatName = 'Landscape Art, Sculpture, Metal & Stone Garden Ornaments	';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%144%' || xlist like'%784%' || xlist like'%839%' || xlist like'%901%' || xlist like'%1330%' || xlist like'%1331%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1215) {
                                                
                                            $xcatName = 'Site Furnishings & Receptacles	';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%114%' || xlist like'%127%' || xlist like'%128%' || xlist like'%129%' || xlist like'%130%' || xlist like'%141%' || xlist like'%618%' || xlist like'%697%' || xlist like'%740%' || xlist like'%1243%' || xlist like'%1329%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 33) {
                                                
                                            $xcatName = 'Parks &amp; Playground Products';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%229%' || xlist like'%230%' || xlist like'%231%' || xlist like'%235%' || xlist like'%237%' || xlist like'%240%' || xlist like'%242%' || xlist like'%243%' || xlist like'%246%' || xlist like'%248%' || xlist like'%250%' || xlist like'%253%' || xlist like'%254%' || xlist like'%255%' || xlist like'%256%' || xlist like'%257%' || xlist like'%259%' || xlist like'%260%' || xlist like'%261%' || xlist like'%262%' || xlist like'%264%' || xlist like'%265%' || xlist like'%611%' || xlist like'%619%' || xlist like'%620%' || xlist like'%621%' || xlist like'%322%' || xlist like'%659%' || xlist like'%702%' || xlist like'%745%' || xlist like'%810%' || xlist like'%820%' || xlist like'%879%' || xlist like'%902%' || xlist like'%1097%' || xlist like'%1184%' || xlist like'%1240%' || xlist like'%1261%' || xlist like'%1320%' || xlist like'%1332%' || xlist like'%1333%' || xlist like'%1354%' || xlist like'%1355%' || xlist like'%1362%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 41) {
                                                
                                            $xcatName = 'Water Features, Fountains, Ponds &amp; Equipment	';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%427%' || xlist like'%428%' || xlist like'%453%' || xlist like'%459%' || xlist like'%687%' || xlist like'%848%' || xlist like'%1100%' || xlist like'%1196%' || xlist like'%1263%' || xlist like'%1315%' || xlist like'%1316%' || xlist like'%1317%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1209) {
                                                
                                            $xcatName = 'Commercial / Wholesale Fencing';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%354%' || xlist like'%356%' || xlist like'%358%' || xlist like'%366%' || xlist like'%372%' || xlist like'%382%' || xlist like'%390%' || xlist like'%399%' || xlist like'%402%' || xlist like'%404%' || xlist like'%405%' || xlist like'%407%' || xlist like'%600%' || xlist like'%601%' || xlist like'%608%' || xlist like'%623%' || xlist like'%624%' || xlist like'%627%' || xlist like'%632%' || xlist like'%636%' || xlist like'%637%' || xlist like'%693%' || xlist like'%721%' || xlist like'%724%' || xlist like'%729%' || xlist like'%750%' || xlist like'%752%' || xlist like'%755%' || xlist like'%761%' || xlist like'%893%' || xlist like'%897%' || xlist like'%940%' || xlist like'%975%' || xlist like'%990%' || xlist like'%1387%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1210) {
                                                
                                            $xcatName = 'Commercial / Wholesale Fencing';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%363%' || xlist like'%367%' || xlist like'%369%' || xlist like'%370%' || xlist like'%373%' || xlist like'%374%' || xlist like'%375%' || xlist like'%391%' || xlist like'%392%' || xlist like'%393%' || xlist like'%394%' || xlist like'%395%' || xlist like'%396%' || xlist like'%403%' || xlist like'%410%' || xlist like'%411%' || xlist like'%588%' || xlist like'%589%' || xlist like'%599%' || xlist like'%602%' || xlist like'%603%' || xlist like'%631%' || xlist like'%696%' || xlist like'%717%' || xlist like'%751%' || xlist like'%778%' || xlist like'%788%' || xlist like'%791%' || xlist like'%799%' || xlist like'%807%' || xlist like'%865%' || xlist like'%1341%' || xlist like'%1359%' || xlist like'%1384%' || xlist like'%1385%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1211) {
                                                
                                            $xcatName = 'Commercial / Wholesale Fencing';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%357%' || xlist like'%378%' || xlist like'%379%' || xlist like'%383%' || xlist like'%384%' || xlist like'%386%' || xlist like'%398%' || xlist like'%416%' || xlist like'%563%' || xlist like'%654%' || xlist like'%658%' || xlist like'%674%' || xlist like'%703%' || xlist like'%722%' || xlist like'%726%' || xlist like'%732%' || xlist like'%739%' || xlist like'%771%' || xlist like'%794%' || xlist like'%801%' || xlist like'%868%' || xlist like'%898%' || xlist like'%927%' || xlist like'%960%' || xlist like'%1021%' || xlist like'%1026%' || xlist like'%1039%' || xlist like'%1303%' || xlist like'%1319%' || xlist like'%1334%' || xlist like'%1335%' || xlist like'%1339%' || xlist like'%1349%' || xlist like'%1371%' || xlist like'%1375%' || xlist like'%1389%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 28) {
                                                
                                            $xcatName = 'Commercial / Wholesale Fencing';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%56%' || xlist like'%59%' || xlist like'%60%' || xlist like'%62%' || xlist like'%63%' || xlist like'%65%' || xlist like'%74%' || xlist like'%75%' || xlist like'%76%' || xlist like'%78%' || xlist like'%126%' || xlist like'%612%' || xlist like'%646%' || xlist like'%876%' || xlist like'%891%' || xlist like'%894%' || xlist like'%896%' || xlist like'%908%' || xlist like'%995%' || xlist like'%1041%' || xlist like'%1102%' || xlist like'%1150%' || xlist like'%1235%' || xlist like'%1244%' || xlist like'%1260%' || xlist like'%1338%' || xlist like'%1340%' || xlist like'%1357%' || xlist like'%1358%' || xlist like'%1383%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 30) {
                                                
                                            $xcatName = 'Landscape Erosion Control Products	  ';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%149%' || xlist like'%152%' || xlist like'%156%' || xlist like'%158%' || xlist like'%161%' || xlist like'%164%' || xlist like'%165%' || xlist like'%167%' || xlist like'%615%' || xlist like'%616%' || xlist like'%1087%' || xlist like'%1160%' || xlist like'%1164%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1212) {
                                                
                                            $xcatName = 'Wildlife & Commercial Landscape Pest Control	 ';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%322%' || xlist like'%323%' || xlist like'%324%' || xlist like'%325%' || xlist like'%783%' || xlist like'%916%' || xlist like'%933%' || xlist like'%972%' || xlist like'%1397%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1002) {
                                                
                                            $xcatName = 'Wholesale Plant Accessories &amp; Soil Amendments';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%288%' || xlist like'%289%' || xlist like'%297%' || xlist like'%300%' || xlist like'%308%' || xlist like'%311%' || xlist like'%312%' || xlist like'%313%' || xlist like'%314%' || xlist like'%317%' || xlist like'%318%' || xlist like'%319%' || xlist like'%420%' || xlist like'%562%' || xlist like'%652%' || xlist like'%661%' || xlist like'%665%' || xlist like'%802%' || xlist like'%805%' || xlist like'%806%' || xlist like'%813%' || xlist like'%852%' || xlist like'%1015%' || xlist like'%1029%' || xlist like'%1171%' || xlist like'%1229%' || xlist like'%1308%' || xlist like'%1348%' || xlist like'%1369%' || xlist like'%1370%' || xlist like'%1393%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1213) {
                                                
                                            $xcatName = 'Landscape Irrigation &amp; Water Management';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%175%' || xlist like'%179%' || xlist like'%181%' || xlist like'%189%' || xlist like'%189%' || xlist like'%424%' || xlist like'%875%' || xlist like'%425%' || xlist like'%435%' || xlist like'%440%' || xlist like'%442%' || xlist like'%443%' || xlist like'%449%' || xlist like'%971%' || xlist like'%978%' || xlist like'%979%' || xlist like'%994%' || xlist like'%1201%' || xlist like'%1372%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1139) {
                                                
                                            $xcatName = 'Landscape Irrigation &amp; Water Management';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%170%' || xlist like'%171%' || xlist like'%172%' || xlist like'%177%' || xlist like'%178%' || xlist like'%180%' || xlist like'%183%' || xlist like'%186%' || xlist like'%187%' || xlist like'%188%' || xlist like'%191%' || xlist like'%194%' || xlist like'%195%' || xlist like'%197%' || xlist like'%198%' || xlist like'%199%' || xlist like'%598%' || xlist like'%606%' || xlist like'%725%' || xlist like'%734%' || xlist like'%779%' || xlist like'%1343%' || xlist like'%1345%' || xlist like'%1346%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            } elseif ($key48  == 1394) {
                                                
                                            $xcatName = 'Pool and Spa';
            
                                            $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%457%' || xlist like'%638%' || xlist like'%647%' || xlist like'%1253%' || xlist like'%1326%' || xlist like'%1328%') AND status > '2'";
											$result777 = $conn->query($sql777);
            
											$rowcount777=mysqli_num_rows($result777);				
            
                                            }
            
                                            // Vendor Count End
			
			
											if ($cat1  == 28) {
												
												$alphaLink = '/business-services-and-software';
												
											} elseif ($cat1  == 30) {
												
												$alphaLink = '/landscape-erosion-control-products';
												
											} elseif ($cat1  == 1300) {
												
												$alphaLink = '/commercial-wholesale-fencing';
												
											} elseif ($cat1  == 1139) {
												
												$alphaLink = '/landscape-irrigation';
												
											} elseif ($cat1  == 32) {
												
												$alphaLink = '/commercial-exterior-lighting-electrical';
												
											} elseif ($cat1  == 1214) {
												
												$alphaLink = '/outdoor-living-residential-landscape';
												
											} elseif ($cat1  == 33) {
												
												$alphaLink = '/parks-playground-products';
												
											} elseif ($cat1  == 38) {
												
												$alphaLink = '/commercial-pavers-masonry-blocks-rocks';
												
											} elseif ($cat1  == 1212) {
												
												$alphaLink = '/wildlife-commercial-landscape-pest-control';
												
											}elseif ($cat1  == 1002) {
												
												$alphaLink = '/wholesale-plant-accessories-and-soil-amendments';
												
											} elseif ($cat1  == 1394) {
												
												$alphaLink = '/pool-and-spa';
												
											} elseif ($cat1  == 1301) {
												
												$alphaLink = '/landscape-art-sculpture-metal-stone-garden-ornaments';
												
											} elseif ($cat1  == 29) {
												
												$alphaLink = '/commercial-site-amenities';
												
											} elseif ($cat1  == 1215) {
												
												$alphaLink = '/site-furnishings-receptacles';
												
											} elseif ($cat1  == 41) {
												
												$alphaLink = '/water-features-fountains-ponds-equipment';
												
											} elseif ($cat1  == 1213) {
												
												$alphaLink = '/landscape-water-management';
												
											} elseif ($cat1  == 1209) {
												
												$alphaLink = '/landscape-installation-equipment';
												
											} elseif ($cat1  == 1210) {
												
												$alphaLink = '/landscape-maintenance-equipment';
												
											} elseif ($cat1  == 1211) {
												
												$alphaLink = '/tools-tires-and-replacement-parts';
												
											}			
			
			
			
			
			
            
                
                                        ?>
																				
														<? $onClickSortLink = "window.location.href = '" . $alphaLink . "';"		?>				
            
           <p class="sort_area">Results: <span><? echo $rowcount777; ?></span> Vendors<button onclick="<? echo $onClickSortLink ?>" class="laCategorySortBtn">Back &nbsp;<i class="fas fa-undo"></i></button></p>
            
            <h3 class="no_br">Vendors in Alphabetical Order</h3>
            
            <div class="full_width dum_log"  style="background: #FFFFFF">
            <div class="row">            
            
                
                
                
					   		<!-- Alpha Start -->                
                
                                        <?
                
											$key48 = $_GET['ad'];
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1366') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";												
												
											} elseif ($key48  == 1214) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='85' OR vendor_product.xlist='91' OR vendor_product.xlist='110' OR vendor_product.xlist='113' OR vendor_product.xlist='134' OR vendor_product.xlist='139' OR vendor_product.xlist='244' OR vendor_product.xlist='758' OR vendor_product.xlist='818' OR vendor_product.xlist='907' OR vendor_product.xlist='1025' OR vendor_product.xlist='1032' OR vendor_product.xlist='1186' OR vendor_product.xlist='1187' OR vendor_product.xlist='1224' OR vendor_product.xlist='1239' OR vendor_product.xlist='1313') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";												
												
											} elseif ($key48  == 38) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='329' OR vendor_product.xlist='330' OR vendor_product.xlist='331' OR vendor_product.xlist='334' OR vendor_product.xlist='335' OR vendor_product.xlist='336' OR vendor_product.xlist='338' OR vendor_product.xlist='339' OR vendor_product.xlist='340' OR vendor_product.xlist='341' OR vendor_product.xlist='343' OR vendor_product.xlist='344' OR vendor_product.xlist='347' OR vendor_product.xlist='348' OR vendor_product.xlist='353' OR vendor_product.xlist='565' OR vendor_product.xlist='575' OR vendor_product.xlist='640' OR vendor_product.xlist='657' OR vendor_product.xlist='660' OR vendor_product.xlist='685' OR vendor_product.xlist='743' OR vendor_product.xlist='756' OR vendor_product.xlist='827' OR vendor_product.xlist='832' OR vendor_product.xlist='833' OR vendor_product.xlist='851' OR vendor_product.xlist='944' OR vendor_product.xlist='950' OR vendor_product.xlist='961' OR vendor_product.xlist='974' OR vendor_product.xlist='1040' OR vendor_product.xlist='1226' OR vendor_product.xlist='1305' OR vendor_product.xlist='1318' OR vendor_product.xlist='1353' OR vendor_product.xlist='1363' OR vendor_product.xlist='1368') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";									
												
											} elseif ($key48  == 1301) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='144' OR vendor_product.xlist='784' OR vendor_product.xlist='839' OR vendor_product.xlist='901' OR vendor_product.xlist='1330' OR vendor_product.xlist='1331') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";										
												
											} elseif ($key48  == 1215) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='114' OR vendor_product.xlist='127' OR vendor_product.xlist='128' OR vendor_product.xlist='129' OR vendor_product.xlist='130' OR vendor_product.xlist='141' OR vendor_product.xlist='618' OR vendor_product.xlist='697' OR vendor_product.xlist='740' OR vendor_product.xlist='1207' OR vendor_product.xlist='1243' OR vendor_product.xlist='1329') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";											
												
											} elseif ($key48  == 33) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='229' OR vendor_product.xlist='230' OR vendor_product.xlist='231' OR vendor_product.xlist='235' OR vendor_product.xlist='237' OR vendor_product.xlist='240' OR vendor_product.xlist='242' OR vendor_product.xlist='243' OR vendor_product.xlist='246' OR vendor_product.xlist='248' OR vendor_product.xlist='250' OR vendor_product.xlist='253' OR vendor_product.xlist='254' OR vendor_product.xlist='255' OR vendor_product.xlist='256' OR vendor_product.xlist='257' OR vendor_product.xlist='258' OR vendor_product.xlist='259' OR vendor_product.xlist='260' OR vendor_product.xlist='261' OR vendor_product.xlist='262' OR vendor_product.xlist='264' OR vendor_product.xlist='265' OR vendor_product.xlist='611' OR vendor_product.xlist='619' OR vendor_product.xlist='620' OR vendor_product.xlist='621' OR vendor_product.xlist='622' OR vendor_product.xlist='659' OR vendor_product.xlist='702' OR vendor_product.xlist='745' OR vendor_product.xlist='810' OR vendor_product.xlist='820' OR vendor_product.xlist='902' OR vendor_product.xlist='1184' OR vendor_product.xlist='1240' OR vendor_product.xlist='1261' OR vendor_product.xlist='1320' OR vendor_product.xlist='1332' OR vendor_product.xlist='1333' OR vendor_product.xlist='1354' OR vendor_product.xlist='1355' OR vendor_product.xlist='1362') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";												
												
											} elseif ($key48  == 41) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='427' OR vendor_product.xlist='428' OR vendor_product.xlist='453' OR vendor_product.xlist='457' OR vendor_product.xlist='459' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='687' OR vendor_product.xlist='848' OR vendor_product.xlist='1100' OR vendor_product.xlist='1196' OR vendor_product.xlist='1253' OR vendor_product.xlist='1263' OR vendor_product.xlist='1315' OR vendor_product.xlist='1316' OR vendor_product.xlist='1317' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";											
												
											} elseif ($key48  == 1209) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='354' OR vendor_product.xlist='356' OR vendor_product.xlist='358' OR vendor_product.xlist='366' OR vendor_product.xlist='368' OR vendor_product.xlist='372' OR vendor_product.xlist='382' OR vendor_product.xlist='390' OR vendor_product.xlist='399' OR vendor_product.xlist='402' OR vendor_product.xlist='404' OR vendor_product.xlist='405' OR vendor_product.xlist='407' OR vendor_product.xlist='600' OR vendor_product.xlist='601' OR vendor_product.xlist='608' OR vendor_product.xlist='623' OR vendor_product.xlist='624' OR vendor_product.xlist='627' OR vendor_product.xlist='632' OR vendor_product.xlist='636' OR vendor_product.xlist='637' OR vendor_product.xlist='693' OR vendor_product.xlist='721' OR vendor_product.xlist='724' OR vendor_product.xlist='729' OR vendor_product.xlist='750' OR vendor_product.xlist='752' OR vendor_product.xlist='755' OR vendor_product.xlist='893' OR vendor_product.xlist='897' OR vendor_product.xlist='940' OR vendor_product.xlist='975' OR vendor_product.xlist='990' OR vendor_product.xlist='761') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";
						
											} elseif ($key48  == 1210) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";	
												
											} elseif ($key48  == 1139) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='170' OR vendor_product.xlist='171' OR vendor_product.xlist='172' OR vendor_product.xlist='177' OR vendor_product.xlist='178' OR vendor_product.xlist='180' OR vendor_product.xlist='183' OR vendor_product.xlist='186' OR vendor_product.xlist='187' OR vendor_product.xlist='188' OR vendor_product.xlist='191' OR vendor_product.xlist='194' OR vendor_product.xlist='195' OR vendor_product.xlist='195' OR vendor_product.xlist='197' OR vendor_product.xlist='198' OR vendor_product.xlist='199' OR vendor_product.xlist='598' OR vendor_product.xlist='606' OR vendor_product.xlist='725' OR vendor_product.xlist='734' OR vendor_product.xlist='779' OR vendor_product.xlist='1343' OR vendor_product.xlist='1345' OR vendor_product.xlist='1346') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";	
												
											} elseif ($key48  == 1394) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='457' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='1253' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status > '2' AND vendor_product.series_product = '0' ORDER BY vendor_product.company_name ASC";	
												
											}                   
						
						
						
						
											$result = $conn->query($sql);	
                                
                                
									
												// logo section
						
												
											   	$xx = 0;
													$zCount = 0;
													$rowNum = 0;

													$iCount = 1;

													$xCount = 1;

                                
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															   $rowNum = $row['vendor_id'];
														  
																 				if($row['company_name']){
																					
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash																							
																					
																					
																						echo '<a href="https://landscapearchitect.com/landscape-design/' . $string . '/'. $row['vendor_id'] . '" class="col-md-6 col-sm-6 col-xs-6 for_small">
																								<img src="https://www.landscapearchitect.com/products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain"><br />
																							<p class="categoryVendor categoryVendorFeatured">'. $row['company_name'] . '</p></a>';	
																				
																				}
																													

															   }                    
													
														}

					   							
									?>	
					 				
					   		<!-- Alpha End -->                  
                
                
								
<!--
								if ($xCount = 1) {

																				echo '<center><a href="#" class="col-md-6 col-sm-6 col-xs-6 for_small" >
																										<img src="https://www.landscapearchitect.com/products/images/'. $row['logo'] . '" alt="img" style="padding-bottom: 25px; width: 100%; height: 100px; object-fit: contain">
																										<span style="font-size:16px;font-weight:bold">'. $row['company_name'] . '</a></center><span style="line-height:100px"</span>';
																					$xCount++;

																			} elseif ($xCount > 1) {

																				echo '<center><a href="#" class="col-md-6 col-sm-6 col-xs-6 for_small" >
																										<img src="https://www.landscapearchitect.com/products/images/'. $row['logo'] . '" alt="img" style=padding-bottom: -50px; "width: 100%; height: 100px; object-fit: contain">
																										<span style="font-size:16px;font-weight:bold; position:relative;top:-50px">'. $row['company_name'] . '</a></center><span style="line-height:50px"</span>';                                                                      

																			}
-->
                
                
                
                
                
                
                
                
                
                
                
                
                
             
                
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
            
            
            
            
            
            
        </div><!-- ./col-lg-8 -->
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 sideBar">
						
						
						<!-- banner ads 1-6 right side -->
						<?  for($i = 0; $i < 5; $i++){
									if(!empty($ads[$i]['picture'])){
										echo '<div class="add__ full_width"><a href="' .  $ads[$i]['web'] . '"><img src="../banner/'  . $ads[$i]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
										
										list($width, $height) = getimagesize('https://landscapearchitect.com/banner/' . $ads[$i]['picture'] . '');
										
										if($height > 200){
											$i++;
										}
									}
								}	
								
						?>
				
						<?
						
							if(!empty($ads[0])){
								echo '<div class="add__ full_width" style="margin-top: 100px"><img src="images/advertise.jpg" alt="img" height="100px" /></div>';
							}
						
						?>
						
						<div class="add__ full_width relatedArticlesSidebar">
							<h2>Related Articles</h2>
						
							<?
							//array of all company Names that are 18s
							$companyNamesFeatured;
							//array of all company Names minus 18s
							$companyNames;
						
//							$keywordart = "association";
							$sql5 = '';
							
							
							//search by title in body text
							
							for($i = 0; $i < sizeof($companyNamesFeatured); $i++){
								$sql5 .= "select * from editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' AND (keywords RLIKE '" . $companyNamesFeatured[$i] . "' OR ed_text LIKE '%" . $companyNamesFeatured[$i] . "%')";
								if($i < (sizeof($companyNamesFeatured) - 1)){
									$sql5 .= " UNION ";
								} else {
									$sql5 .= " ORDER BY id DESC LIMIT 7";
								}
							}
							
							$result5 = $conn->query($sql5);		
							$rowcount5 = mysqli_num_rows($result5);
							
							while($row = mysqli_fetch_array($result5)) {
							
								echo "<p class='rarticleSidebarText'><a href='https://landscapearchitect.com/research/articles.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a></p>";
							}
							
							
							if($rowcount5 < 7){
								
								for($i = 0; $i < sizeof($companyNames); $i++){
									$sql6 .= "select * from editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' AND (keywords RLIKE '" . $companyNames[$i] . "' OR ed_text LIKE '%" . $companyNames[$i] . "%')";
									if($i < (sizeof($companyNames) - 1)){
										$sql6 .= " UNION ";
									} else {
										$sql6 .= " ORDER BY id DESC LIMIT 0, " . (7 - $rowcount5);
									}
								}
								
								$result6 = $conn->query($sql6);		
								$rowcount6 = mysqli_num_rows($result6);

								while($row1 = mysqli_fetch_array($result6)) {
									echo "<p class='rarticleSidebarText'><a href='https://landscapearchitect.com/research/articles.php?number=" . $row1["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row1["title"]))) . "</a></p>";
								}
							
							}
                                                
					
																	
							
						?>
						
						</div><!-- /.add__ -->
						
						
 
        </div><!-- ./col-lg-4 -->
    </div><!-- /.row -->
    	
    </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

<section class="green_newsletter full_width">
<div class="container">
<form id="news_letter_form">
	<h3>Sign up for LAWeekly newsletter.</h3>
    <div class="coverinput">
    <input type="text" name="email_address" placeholder="Enter your email address" class="newsletterEmailInput"/>
    <button type="submit" class="newsletterSignUpBtn">Sign up</button>
    </div><!-- /.coverinput -->
</form>    
</div><!-- /.contianer -->
</section><!-- /.green_newsletter -->
	
            
 <? include '../../includes/la-common-footer.inc'; ?>
 
 <? include '../../includes/la-common-magazine-subscribe.php'; ?>
 
    </body>
</html>
