<?php session_start(); ?>
<?php include '../modules/configuration.inc'; ?>
<?php 
	include '../modules/db.php'; 
	//include '../modules/urlData.php';

	$adId = 0;
	$metaTitle = '';
	$name = '';

	$parmaSlug = $_GET['catParma']; 
	$data = '';
	$sql1 = "SELECT * FROM xlist WHERE slug = '".$parmaSlug."'";
	$result1 = $conn->query($sql1);  

	$cat_slug = '';
    $heading = '';

/*    $parentCatSQL = "SELECT name,slug FROM xlist WHERE idParent = 0 ORDER BY name ASC";
    $resultP = $conn->query($parentCatSQL);  
    $parent_cats = [];
    
    
    while($rowParents = mysqli_fetch_array($resultP)){
    	
    	$string =  trim($rowParents['name']); // 

		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

		//$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

		//$string = preg_replace("/[\s_]/", "-", $string);

		$parent_cats[$rowParents['slug']] = ucwords($string); 
    }

    echo "<pre>";print_r($parent_cats);


    die;*/


	while($row = mysqli_fetch_array($result1)) {   
		$adId = $row['id'];
		$cat_slug = $row['slug'];   	
	   	$name = $row['name'];
		$heading = $row['name'];
		$metaTitle = $name .' | Landscape Architect';

	}	


?>

<? include $rootInclude.'la-common-top.php';?>

<? include $rootInclude.'la-common-header.inc'; ?>

<? include $rootInclude.'la_common2.inc'; ?>



<section class="tool_page full_width">

  <? include $rootInclude.'la-common-leaderboard-banner.inc'; ?>
  
</section><!-- /.tool_page -->


<section class="search_section_ban full_width">
  
  
  
<div class="container">
<div class="row">
	<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
			
			<? include $rootInclude.'la_common-main-search-bar.inc'; ?>
			
        </div><!-- /.relative -->
    </div><!-- /.col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.search_section_ban -->

<section class="tool_page full_width">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBar">
	
		
				    <?

							$cat1 = $adId;
								
								
							$companyNamesFeatured = array();
							$companyNames = array();
							
							//amount of images loaded with page
							$lazyImgMax = 300;
							//counter for lazy loader
							$lazyCounter = 0;
														

        			?>
				
				<div class="white_side full_width">
					<img src="<?php echo BASE_URL; ?>lol-logos/sidebar-search-engine/la-details-sidebar-logo.jpg" width="100%" alt="LADetails" id="sidebarLogo">
					<div class="full_width" id="mobile_slide">


						<!-- sidebar accordian menu -->
						<? include $rootInclude.'la-common-sidebar-menu.inc'; ?>


					 </div><!-- #mobslide --> 
        </div><!-- /.white_side -->
				
				
				<!-- banner ads 4-end left side -->
				<?
				
					$ad = $adId;
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
                
									<?php
                
             

										$cat2 = $_GET['number'];


										$sql533 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $cat2 ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
										$result533 = $conn->query($sql533);

										$rowcount533=mysqli_num_rows($result533);
                
                
                                        $ad = $adId;
                                        

                                        echo '<title>'.$metaTitle.'</title>';
                                        echo '<h1 class="center-section-header">'.$name.'</h1>';
            
                
										$cat1 = $adId;
										$cat2 = $_GET['number'];
										$cat3 = $_GET['catMain'];
										$cat4 = $_GET['catName'];


								        $sql1 = "SELECT * FROM xlist WHERE idParent = '" . $cat1 ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
										$result1 = $conn->query($sql1);									

									// category section

//									echo '<option value="https://landscapearchitect.com/LandscapeProducts/index.php?ad='. $cat1 . '">Top Level</option>';

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
        
										$key48 = $adId;
        
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
                                            
                                        $xcatName = 'Outdoor Living / Residential Landscape';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%85%' || xlist like'%91%' || xlist like'%110%' || xlist like'%113%' || xlist like'%134%' || xlist like'%139%' || xlist like'%244%' || xlist like'%758%' || xlist like'%818%' || xlist like'%853%' || xlist like'%907%' || xlist like'%1025%' || xlist like'%1032%' || xlist like'%1098%' || xlist like'%1186%' || xlist like'%1187%' || xlist like'%1188%' || xlist like'%1186%' || xlist like'%1207%' || xlist like'%1224%' || xlist like'%1239%' || xlist like'%1313%' || xlist like'%1388%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 38) {
                                            
                                        $xcatName = 'Commercial Pavers, Masonry, Blocks, Rocks';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%329%' || xlist like'%330%' || xlist like'%331%' || xlist like'%334%' || xlist like'%335%' || xlist like'%336%' || xlist like'%338%' || xlist like'%339%' || xlist like'%340%' || xlist like'%341%' || xlist like'%343%' || xlist like'%344%' || xlist like'%347%' || xlist like'%348%' || xlist like'%353%' || xlist like'%565%' || xlist like'%575%' || xlist like'%640%' || xlist like'%657%' || xlist like'%660%' || xlist like'%685%' || xlist like'%743%' || xlist like'%756%' || xlist like'%827%' || xlist like'%832%' || xlist like'%833%' || xlist like'%851%' || xlist like'%944%' || xlist like'%950%' || xlist like'%961%' || xlist like'%974%' || xlist like'%1040%' || xlist like'%1226%' || xlist like'%1305%' || xlist like'%1318%' || xlist like'%1353%' || xlist like'%1363%' || xlist like'%1368%' || xlist like'%1386%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1301) {
                                            
                                        $xcatName = 'Landscape Art, Sculpture, Metal & Stone Garden Ornaments';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%144%' || xlist like'%784%' || xlist like'%839%' || xlist like'%901%' || xlist like'%1330%' || xlist like'%1331%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1215) {
                                            
                                        $xcatName = 'Site Furnishings & Receptacles';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%114%' || xlist like'%127%' || xlist like'%128%' || xlist like'%129%' || xlist like'%130%' || xlist like'%141%' || xlist like'%618%' || xlist like'%697%' || xlist like'%740%' || xlist like'%1243%' || xlist like'%1329%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 33) {
                                            
                                        $xcatName = 'Parks &amp; Playground Products';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%229%' || xlist like'%230%' || xlist like'%231%' || xlist like'%235%' || xlist like'%237%' || xlist like'%240%' || xlist like'%242%' || xlist like'%243%' || xlist like'%246%' || xlist like'%248%' || xlist like'%250%' || xlist like'%253%' || xlist like'%254%' || xlist like'%255%' || xlist like'%256%' || xlist like'%257%' || xlist like'%259%' || xlist like'%260%' || xlist like'%261%' || xlist like'%262%' || xlist like'%264%' || xlist like'%265%' || xlist like'%611%' || xlist like'%619%' || xlist like'%620%' || xlist like'%621%' || xlist like'%322%' || xlist like'%659%' || xlist like'%702%' || xlist like'%745%' || xlist like'%810%' || xlist like'%820%' || xlist like'%879%' || xlist like'%902%' || xlist like'%1097%' || xlist like'%1184%' || xlist like'%1240%' || xlist like'%1261%' || xlist like'%1320%' || xlist like'%1332%' || xlist like'%1333%' || xlist like'%1354%' || xlist like'%1355%' || xlist like'%1362%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 41) {
                                            
                                        $xcatName = 'Water Features, Fountains, Ponds &amp; Equipment';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%427%' || xlist like'%428%' || xlist like'%453%' || xlist like'%459%' || xlist like'%687%' || xlist like'%848%' || xlist like'%1100%' || xlist like'%1196%' || xlist like'%1263%' || xlist like'%1315%' || xlist like'%1316%' || xlist like'%1317%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1209) {
                                            
                                        $xcatName = 'Commercial / Wholesale Fencing';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%354%' || xlist like'%356%' || xlist like'%358%' || xlist like'%366%' || xlist like'%372%' || xlist like'%382%' || xlist like'%390%' || xlist like'%399%' || xlist like'%402%' || xlist like'%404%' || xlist like'%405%' || xlist like'%407%' || xlist like'%600%' || xlist like'%601%' || xlist like'%608%' || xlist like'%623%' || xlist like'%624%' || xlist like'%627%' || xlist like'%632%' || xlist like'%636%' || xlist like'%637%' || xlist like'%693%' || xlist like'%721%' || xlist like'%724%' || xlist like'%729%' || xlist like'%750%' || xlist like'%752%' || xlist like'%755%' || xlist like'%761%' || xlist like'%893%' || xlist like'%897%' || xlist like'%940%' || xlist like'%975%' || xlist like'%990%' || xlist like'%1387%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1210) {
                                            
                                        $xcatName = 'Installation Equipment';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%363%' || xlist like'%367%' || xlist like'%369%' || xlist like'%370%' || xlist like'%373%' || xlist like'%374%' || xlist like'%375%' || xlist like'%391%' || xlist like'%392%' || xlist like'%393%' || xlist like'%394%' || xlist like'%395%' || xlist like'%396%' || xlist like'%403%' || xlist like'%410%' || xlist like'%411%' || xlist like'%588%' || xlist like'%589%' || xlist like'%599%' || xlist like'%602%' || xlist like'%603%' || xlist like'%631%' || xlist like'%696%' || xlist like'%717%' || xlist like'%751%' || xlist like'%778%' || xlist like'%788%' || xlist like'%791%' || xlist like'%799%' || xlist like'%807%' || xlist like'%865%' || xlist like'%1341%' || xlist like'%1359%' || xlist like'%1384%' || xlist like'%1385%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1211) {
                                            
                                        $xcatName = 'Tools, Tires & Replacement Parts';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%357%' || xlist like'%378%' || xlist like'%379%' || xlist like'%383%' || xlist like'%384%' || xlist like'%386%' || xlist like'%398%' || xlist like'%416%' || xlist like'%563%' || xlist like'%654%' || xlist like'%658%' || xlist like'%674%' || xlist like'%703%' || xlist like'%722%' || xlist like'%726%' || xlist like'%732%' || xlist like'%739%' || xlist like'%771%' || xlist like'%794%' || xlist like'%801%' || xlist like'%868%' || xlist like'%898%' || xlist like'%927%' || xlist like'%960%' || xlist like'%1021%' || xlist like'%1026%' || xlist like'%1039%' || xlist like'%1303%' || xlist like'%1319%' || xlist like'%1334%' || xlist like'%1335%' || xlist like'%1339%' || xlist like'%1349%' || xlist like'%1371%' || xlist like'%1375%' || xlist like'%1389%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 28) {
                                            
                                        $xcatName = 'Business Services';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%56%' || xlist like'%59%' || xlist like'%60%' || xlist like'%62%' || xlist like'%63%' || xlist like'%65%' || xlist like'%74%' || xlist like'%75%' || xlist like'%76%' || xlist like'%78%' || xlist like'%126%' || xlist like'%612%' || xlist like'%646%' || xlist like'%876%' || xlist like'%891%' || xlist like'%894%' || xlist like'%896%' || xlist like'%908%' || xlist like'%995%' || xlist like'%1041%' || xlist like'%1102%' || xlist like'%1150%' || xlist like'%1235%' || xlist like'%1244%' || xlist like'%1260%' || xlist like'%1338%' || xlist like'%1340%' || xlist like'%1357%' || xlist like'%1358%' || xlist like'%1383%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 30) {
                                            
                                        $xcatName = 'Landscape Erosion Control Products';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%149%' || xlist like'%152%' || xlist like'%156%' || xlist like'%158%' || xlist like'%161%' || xlist like'%164%' || xlist like'%165%' || xlist like'%167%' || xlist like'%615%' || xlist like'%616%' || xlist like'%1087%' || xlist like'%1160%' || xlist like'%1164%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1212) {
                                            
                                        $xcatName = 'Wildlife & Commercial Landscape Pest Control';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%322%' || xlist like'%323%' || xlist like'%324%' || xlist like'%325%' || xlist like'%783%' || xlist like'%916%' || xlist like'%933%' || xlist like'%972%' || xlist like'%1397%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1002) {
                                            
                                        $xcatName = 'Wholesale Plant Accessories &amp; Soil Amendments';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%288%' || xlist like'%289%' || xlist like'%297%' || xlist like'%300%' || xlist like'%308%' || xlist like'%311%' || xlist like'%312%' || xlist like'%313%' || xlist like'%314%' || xlist like'%317%' || xlist like'%318%' || xlist like'%319%' || xlist like'%420%' || xlist like'%562%' || xlist like'%652%' || xlist like'%661%' || xlist like'%665%' || xlist like'%802%' || xlist like'%805%' || xlist like'%806%' || xlist like'%813%' || xlist like'%852%' || xlist like'%1015%' || xlist like'%1029%' || xlist like'%1171%' || xlist like'%1229%' || xlist like'%1308%' || xlist like'%1348%' || xlist like'%1369%' || xlist like'%1370%' || xlist like'%1393%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1213) {
                                            
                                        $xcatName = 'Landscape Water Management';
        
                                        $sql777 = "SELECT * FROM new_vendor WHERE (xlist like'%175%' || xlist like'%179%' || xlist like'%181%' || xlist like'%189%' || xlist like'%189%' || xlist like'%424%' || xlist like'%875%' || xlist like'%425%' || xlist like'%435%' || xlist like'%440%' || xlist like'%442%' || xlist like'%443%' || xlist like'%449%' || xlist like'%971%' || xlist like'%978%' || xlist like'%979%' || xlist like'%994%' || xlist like'%1201%' || xlist like'%1372%') AND status > '2'";
										$result777 = $conn->query($sql777);
        
										$rowcount777=mysqli_num_rows($result777);				
        
                                        } elseif ($key48  == 1139) {
                                            
                                        $xcatName = 'Landscape Irrigation';
        
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
											
											$alphaLink = '/alpha-order-busines-services';
											
										} elseif ($cat1  == 30) {
											
											$alphaLink = '/alpha-order-erosion-control';
											
										} elseif ($cat1  == 1300) {
											
											$alphaLink = '/alpha-order-fencing';
											
										} elseif ($cat1  == 1139) {
											
											$alphaLink = '/alpha-order-irrigation';
											
										} elseif ($cat1  == 32) {
											
											$alphaLink = '/alpha-order-lighting-electrical';
											
										} elseif ($cat1  == 1214) {
											
											$alphaLink = '/alpha-order-outdoor-living';
											
										} elseif ($cat1  == 33) {
											
											$alphaLink = '/alpha-order-parks-playground';
											
										} elseif ($cat1  == 38) {
											
											$alphaLink = '/alpha-order-pavers-masonry-blocks-rocks';
											
										} elseif ($cat1  == 1212) {
											
											$alphaLink = '/alpha-order-pest-control';
											
										}elseif ($cat1  == 1002) {
											
											$alphaLink = '/alpha-order-plant-accessories';
											
										} elseif ($cat1  == 1394) {
											
											$alphaLink = '/alpha-order-pool-and-spa';
											
										} elseif ($cat1  == 1301) {
											
											$alphaLink = '/alpha-order-art-sculpture-garden-ornaments';
											
										} elseif ($cat1  == 29) {
											
											$alphaLink = '/alpha-order-site-amenities';
											
										} elseif ($cat1  == 1215) {
											
											$alphaLink = '/alpha-order-site-furnishings-receptacles';
											
										} elseif ($cat1  == 41) {
											
											$alphaLink = '/alpha-order-water-features';
											
										} elseif ($cat1  == 1213) {
											
											$alphaLink = '/alpha-order-water-management';
											
										} elseif ($cat1  == 1209) {
											
											$alphaLink = '/alpha-order-installation-equipment';
											
										} elseif ($cat1  == 1210) {
											
											$alphaLink = '/alpha-order-maintenance-equipment';
											
										} elseif ($cat1  == 1211) {
											
											$alphaLink = '/alpha-order-tools-and-parts';
											
										}
			
			
            
                
                                        ?>
										<? $onClickSortLink = "window.location.href = '" . $alphaLink . "';"		?>				
																				
            <p class="sort_area">Results: <span><? echo $rowcount777; ?></span> Vendors<button onclick="<? echo $onClickSortLink ?>" class="laCategorySortBtn">Sort from A-Z &nbsp;<i class="fas fa-sort-alpha-up"></i></button></p>
						
						

            
            <h3 class="no_br">Featured Brands</h3>
            
            <div class="full_width dum_log">
            <div class="row">            
            
                
					   		<!-- 18 Start -->                
                
            <?

				$key48 = $adId;

				if ($key48  == 32) {


				$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='18' ORDER BY vendor_id ASC";

				} elseif ($key48  == 1300) {
					
				$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
					
				} elseif ($key48  == 29) {
					
				$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1366') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
					
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
					
				} elseif ($key48  == 1139) {
					
				$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='170' OR vendor_product.xlist='171' OR vendor_product.xlist='172' OR vendor_product.xlist='177' OR vendor_product.xlist='178' OR vendor_product.xlist='180' OR vendor_product.xlist='183' OR vendor_product.xlist='186' OR vendor_product.xlist='187' OR vendor_product.xlist='188' OR vendor_product.xlist='191' OR vendor_product.xlist='194' OR vendor_product.xlist='195' OR vendor_product.xlist='195' OR vendor_product.xlist='197' OR vendor_product.xlist='198' OR vendor_product.xlist='199' OR vendor_product.xlist='598' OR vendor_product.xlist='606' OR vendor_product.xlist='725' OR vendor_product.xlist='734' OR vendor_product.xlist='779' OR vendor_product.xlist='1343' OR vendor_product.xlist='1345' OR vendor_product.xlist='1346') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
					
				} elseif ($key48  == 1394) {
					
				$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='457' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='1253' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='18' ORDER BY vendor_id ASC";	
					
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

							$venNum[] = $row['vendor_id'] . '<br>';

							   $rowNum = $row['vendor_id'];

						   }
				   
				   
			   		}

				$venNums = shuffle($venNum);

                    
                                $iCount = 1;

                                $xCount = 1;      


							   	$xx = 0;
					$index = 1;
				foreach ($venNum as $value) {
					
					$value[number];
					
							$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '18' ORDER BY company_name ASC";
							$result55 = $conn->query($sql55);
					

								// logo section


								$zCount = 0;
							   while($row = mysqli_fetch_assoc($result55)) {
								   
						   
									$key48 = $adId;
						
						
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
										
									} elseif ($key48  == 1139) {
										
									$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='568' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1345' OR xlist='1346') AND vendor_id='" .$value. "'";	
										
									} elseif ($key48  == 1394) {
										
									$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
										
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
																		
																		$diLogo = $adId;
																		
																		if (($diLogo == 1209) || ($diLogo == 1210) || ($diLogo == 1211)) {

																		 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/te-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: red'>&nbsp;&nbsp;";
																		
																		} else {
																			
																		 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";																			
																			
																		}
																		

																		

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
                                                                   
                                                                
                                                                // Base Count

																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
                                                                    
																	
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   $baseCount = $index;
																	
																	
																}   
                                                                   
																   
    													$index++;															   
																 
                                                                   
																   
															   }
                                                    
													
												}
                                
                                
                                
                                                $index = 1;
                                
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '18' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);

																// logo section

																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																  
																   
											$key48 = $adId;
						
						
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
												
											} elseif ($key48  == 1139) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='1345' OR xlist='598' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1346') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 1394) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
												
											}             	



											$result99 = $conn->query($sql99);

											$rowcount99=mysqli_num_rows($result99);	


											$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
											$result199 = $conn->query($sql199);

											$rowcount199=mysqli_num_rows($result199);

											$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";

											$result299 = $conn->query($sql299);

											$rowcount299=mysqli_num_rows($result299);


											$string =  $row['company_name']; // Trim String

											$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

											$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

											$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

											$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash



											 array_push($companyNamesFeatured, $row['company_name']);
											 
											 
											 if($lazyImgMax < $lazyCounter){
											 	$image = '<img data-src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;" class="lazy">';
											 } else {
											 	$image = '<img src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;">';
											 }
											 $lazyCounter++;

											// Featured Vendors 18's Start

											echo '<a href="'.BASE_URL.'commercial-landscape-companies/' . $string . '" class="col-md-6 col-sm-6 col-xs-6 for_small">
														' . $image . '<br />
														<p class="categoryVendor categoryVendorFeatured">'. $row['company_name'] . '</p></a>';

																	 	
										 	}
																 
																 
															
                                                    
													
									}
					   							
									?>	
					 				
					   		<!-- 18 End -->                
                
                
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
            
            
            
            
            <h3 class="mtb">More Vendors</h3>
            
            <div class="full_width dum_log">
            <div class="row">
                
                
                
 					   		<!-- 16 Start -->                
                
                <?

					$key48 = $adId;

					if ($key48  == 32) {


					$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='16' ORDER BY vendor_id ASC";

					} elseif ($key48  == 1300) {
						
					$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
						
					} elseif ($key48  == 29) {
						
					$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1366') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
						
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
						
					} elseif ($key48  == 1139) {
						
					$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='170' OR vendor_product.xlist='171' OR vendor_product.xlist='172' OR vendor_product.xlist='177' OR vendor_product.xlist='178' OR vendor_product.xlist='180' OR vendor_product.xlist='183' OR vendor_product.xlist='186' OR vendor_product.xlist='187' OR vendor_product.xlist='188' OR vendor_product.xlist='191' OR vendor_product.xlist='194' OR vendor_product.xlist='195' OR vendor_product.xlist='195' OR vendor_product.xlist='197' OR vendor_product.xlist='198' OR vendor_product.xlist='199' OR vendor_product.xlist='598' OR vendor_product.xlist='606' OR vendor_product.xlist='725' OR vendor_product.xlist='734' OR vendor_product.xlist='779' OR vendor_product.xlist='1343' OR vendor_product.xlist='1345' OR vendor_product.xlist='1346') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
						
					} elseif ($key48  == 1394) {
						
					$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='457' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='1253' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='16' ORDER BY vendor_id ASC";	
						
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

									$venNum[] = $row['vendor_id'] . '<br>';

									   $rowNum = $row['vendor_id'];

								   }
						   
						   
					   		}

						$venNums = shuffle($venNum);
        
                            
                                        $iCount = 1;

                                        $xCount = 1;      
        
        
									   	$xx = 0;
							$index = 1;
						foreach ($venNum as $value) {
							
							$value[number];
							
									$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '16' ORDER BY company_name ASC";
									$result55 = $conn->query($sql55);
							

										// logo section


										$zCount = 0;
									   while($row = mysqli_fetch_assoc($result55)) {
										   
								   
					$key48 = $adId;


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
						
					} elseif ($key48  == 1139) {
						
					$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='568' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1345' OR xlist='1346') AND vendor_id='" .$value. "'";	
						
					} elseif ($key48  == 1394) {
						
					$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
						
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
						
						$diLogo = $adId;
						
						if (($diLogo == 1209) || ($diLogo == 1210) || ($diLogo == 1211)) {

						 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/te-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: red'>&nbsp;&nbsp;";
						
						} else {
							
						 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";																			
							
						}
						

						

					} else {
						
						$deLogo = "&nbsp;";	
						
					}															   
																   
								$string =  $row['company_name']; // Trim String

								$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

								$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

								$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

								$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
		                           
		                        
		                        // Base Count

								   
								if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
		                            
									
									
								   $baseCount = $index;
									
									
								} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
									
								   $baseCount = $index;
									
									
								} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
									
								   $baseCount = $index;
									
									
								}   
		                           
								   
						$index++;															   
								 
		                           
								   
							   }
		            
					
				}
                                
                                
                                
	                $index = 1;

					foreach ($venNum as $value) {
						
						$value[number];
						
								$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '16' ORDER BY company_name ASC";
								$result55 = $conn->query($sql55);

									// logo section

									$zCount = 0;
								   while($row = mysqli_fetch_assoc($result55)) {
									  
									   
				$key48 = $adId;


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
					
				} elseif ($key48  == 1139) {
					
				$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='1345' OR xlist='598' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1346') AND vendor_id='" .$value. "'";	
					
				} elseif ($key48  == 1394) {
					
				$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
					
				}             	
																   
				   $result99 = $conn->query($sql99);

					$rowcount99=mysqli_num_rows($result99);	
				   
				   
					$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
					$result199 = $conn->query($sql199);

					$rowcount199=mysqli_num_rows($result199);
				   
					$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
				   
					$result299 = $conn->query($sql299);
				   
					$rowcount299=mysqli_num_rows($result299);

                   
				$string =  $row['company_name']; // Trim String

				$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

				$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

				$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

				$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
                   
				   
								 array_push($companyNames, $row['company_name']);
									 																	
								if($lazyImgMax < $lazyCounter){
									$image = '<img data-src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;" class="lazy">';
								 } else {
									$image = '<img src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;">';
								 }
								 $lazyCounter++;

								// Featured Vendors 16's Start

								/*echo '<a href="'.BASE_URL.'landscape-design-products/' . $string . '/'. $row['id'] . '" class="col-md-6 col-sm-6 col-xs-6 for_small">
											' . $image . '<br />
											<p class="categoryVendor categoryVendorFeatured">'. $row['company_name'] . '</p></a>';*/
								
								echo '<a href="'.BASE_URL.'commercial-landscape-companies/' . $string . '" class="col-md-6 col-sm-6 col-xs-6 for_small">
											' . $image . '<br />
											<p class="categoryVendor categoryVendorFeatured">'. $row['company_name'] . '</p></a>';

								 }
                    
					
				}
					
		?>	
					 				
					   		<!-- 16 End -->
                
                
 					   		<!-- 14 Start -->                
                
                                        <?
                
											$key48 = $adId;
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='14' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1366') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
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
												
											} elseif ($key48  == 1139) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='170' OR vendor_product.xlist='171' OR vendor_product.xlist='172' OR vendor_product.xlist='177' OR vendor_product.xlist='178' OR vendor_product.xlist='180' OR vendor_product.xlist='183' OR vendor_product.xlist='186' OR vendor_product.xlist='187' OR vendor_product.xlist='188' OR vendor_product.xlist='191' OR vendor_product.xlist='194' OR vendor_product.xlist='195' OR vendor_product.xlist='195' OR vendor_product.xlist='197' OR vendor_product.xlist='198' OR vendor_product.xlist='199' OR vendor_product.xlist='598' OR vendor_product.xlist='606' OR vendor_product.xlist='725' OR vendor_product.xlist='734' OR vendor_product.xlist='779' OR vendor_product.xlist='1343' OR vendor_product.xlist='1345' OR vendor_product.xlist='1346') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 1394) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='457' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='1253' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='14' ORDER BY vendor_id ASC";	
												
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

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
                                
                                                    
                                                                $iCount = 1;

                                                                $xCount = 1;      
                                
                                
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '14' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
														   
											$key48 = $adId;
						
						
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
												
											} elseif ($key48  == 1139) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='568' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1345' OR xlist='1346') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 1394) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
												
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
																		
																		$diLogo = $adId;
																		
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
                                                                   
                                                                
                                                                // Base Count

																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
                                                                    
																	
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   $baseCount = $index;
																	
																	
																}   
                                                                   
																   
    													$index++;															   
																 
                                                                   
																   
															   }
                                                    
													
												}
                                
                                
                                
                                                $index = 1;
                                
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '14' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);

																// logo section

																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																  
																   
											$key48 = $adId;
						
						
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
												
											} elseif ($key48  == 1139) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='1345' OR xlist='598' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1346') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 1394) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
												
											}             	
																   
																   $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);

                                                                   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
																
																
																
																array_push($companyNames, $row['company_name']);
																	 																	
															if($lazyImgMax < $lazyCounter){
																$image = '<img data-src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;" class="lazy">';
															 } else {
																$image = '<img src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;">';
															 }
															 $lazyCounter++;

															// Featured Vendors 14's Start

															echo '<a href="'.BASE_URL.'landscape-design-products/' . $string . '" class="col-md-6 col-sm-6 col-xs-6 for_small">
																		' . $image . '<br />
																		<p class="categoryVendor categoryVendorFeatured">'. $row['company_name'] . '</p></a>';
																						
																						

															   }
                                                    
													
												}
					   							
									?>	
					 				
					   		<!-- 14 End -->                
                
                
 					   		<!-- 12 Start -->                
                
                                        <?
                
											$key48 = $adId;
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='12' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1366') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
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
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='12' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='12' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 1139) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='170' OR vendor_product.xlist='171' OR vendor_product.xlist='172' OR vendor_product.xlist='177' OR vendor_product.xlist='178' OR vendor_product.xlist='180' OR vendor_product.xlist='183' OR vendor_product.xlist='186' OR vendor_product.xlist='187' OR vendor_product.xlist='188' OR vendor_product.xlist='191' OR vendor_product.xlist='194' OR vendor_product.xlist='195' OR vendor_product.xlist='195' OR vendor_product.xlist='197' OR vendor_product.xlist='198' OR vendor_product.xlist='199' OR vendor_product.xlist='598' OR vendor_product.xlist='606' OR vendor_product.xlist='725' OR vendor_product.xlist='734' OR vendor_product.xlist='779' OR vendor_product.xlist='1343' OR vendor_product.xlist='1345' OR vendor_product.xlist='1346') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 1394) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='457' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='1253' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
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

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
                                
                                                    
                                                                $iCount = 1;

                                                                $xCount = 1;      
                                
                                
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '12' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
														   
											$key48 = $adId;
						
						
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
												
											} elseif ($key48  == 1139) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='568' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1345' OR xlist='1346') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 1394) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
												
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
																		
																		$diLogo = $adId;
																		
																		if (($diLogo == 1209) || ($diLogo == 1210) || ($diLogo == 1211)) {

																		 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/te-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: red'>&nbsp;&nbsp;";
																		
																		} else {
																			
																		 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";																			
																			
																		}
																		

																		

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
                                                                   
                                                                
                                                                // Base Count

																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
                                                                    
																	
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   $baseCount = $index;
																	
																	
																}   
                                                                   
																   
    													$index++;															   
																 
                                                                   
																   
															   }
                                                    
													
												}
                                
                                
                                
                                                $index = 1;
                                
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '12' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);

																// logo section

																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																  
																   
											$key48 = $adId;
						
						
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
												
											} elseif ($key48  == 1139) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='1345' OR xlist='598' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1346') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 1394) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
												
											}      
											
											
																   
																  $result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);

                                                                   
																	$string =  $row['company_name']; // Trim String

																	$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																	$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																	$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																	$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash



																 array_push($companyNames, $row['company_name']);
																	 																	
																if($lazyImgMax < $lazyCounter){
																	$image = '<img data-src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;" class="lazy">';
																 } else {
																	$image = '<img src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;">';
																 }
																 $lazyCounter++;

																// Featured Vendors 12's Start

																echo '<a href="'.BASE_URL.'landscape-design-products/' . $string . '" class="col-md-6 col-sm-6 col-xs-6 for_small">
																			' . $image . '<br />
																			<p class="categoryVendor categoryVendorFeatured">'. $row['company_name'] . '</p></a>';												
																																							
																   
															   }
                                                    
													
												}
					   							
									?>	
					 				
					   		<!-- 12 End -->   
                
					   		<!-- 10 Start -->                
                
                                        <?
                
											$key48 = $adId;
						
											if ($key48  == 32) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='203' OR vendor_product.xlist='204' OR vendor_product.xlist='205' OR vendor_product.xlist='208' OR vendor_product.xlist='209' OR vendor_product.xlist='212' OR vendor_product.xlist='216' OR vendor_product.xlist='218' OR vendor_product.xlist='219' OR vendor_product.xlist='221' OR vendor_product.xlist='222' OR vendor_product.xlist='223' OR vendor_product.xlist='224' OR vendor_product.xlist='225' OR vendor_product.xlist='226' OR vendor_product.xlist='227' OR vendor_product.xlist='617' OR vendor_product.xlist='650' OR vendor_product.xlist='667' OR vendor_product.xlist='680' OR vendor_product.xlist='763' OR vendor_product.xlist='766' OR vendor_product.xlist='821' OR vendor_product.xlist='823' OR vendor_product.xlist='935' OR vendor_product.xlist='948' OR vendor_product.xlist='953' OR vendor_product.xlist='989' OR vendor_product.xlist='1179' OR vendor_product.xlist='1194' OR vendor_product.xlist='1304' OR vendor_product.xlist='1337') AND new_vendor.status='10' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 1300) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='101' OR vendor_product.xlist='106' OR vendor_product.xlist='556' OR vendor_product.xlist='797' OR vendor_product.xlist='871' OR vendor_product.xlist='874' OR vendor_product.xlist='875' OR vendor_product.xlist='890' OR vendor_product.xlist='1309' OR vendor_product.xlist='1310' OR vendor_product.xlist='1311' OR vendor_product.xlist='1312' OR vendor_product.xlist='1325' OR vendor_product.xlist='1350' OR vendor_product.xlist='1351') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 29) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='87' OR vendor_product.xlist='90' OR vendor_product.xlist='93' OR vendor_product.xlist='95' OR vendor_product.xlist='97' OR vendor_product.xlist='98' OR vendor_product.xlist='104' OR vendor_product.xlist='107' OR vendor_product.xlist='109' OR vendor_product.xlist='111' OR vendor_product.xlist='117' OR vendor_product.xlist='119' OR vendor_product.xlist='120' OR vendor_product.xlist='121' OR vendor_product.xlist='123' OR vendor_product.xlist='131' OR vendor_product.xlist='132' OR vendor_product.xlist='135' OR vendor_product.xlist='137' OR vendor_product.xlist='145' OR vendor_product.xlist='595' OR vendor_product.xlist='689' OR vendor_product.xlist='719' OR vendor_product.xlist='789' OR vendor_product.xlist='838' OR vendor_product.xlist='1034' OR vendor_product.xlist='1230' OR vendor_product.xlist='1231' OR vendor_product.xlist='1238' OR vendor_product.xlist='1356' OR vendor_product.xlist='1366') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
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
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='363' OR vendor_product.xlist='367' OR vendor_product.xlist='1341' OR vendor_product.xlist='369' OR vendor_product.xlist='370' OR vendor_product.xlist='373' OR vendor_product.xlist='374' OR vendor_product.xlist='375' OR vendor_product.xlist='391' OR vendor_product.xlist='392' OR vendor_product.xlist='393' OR vendor_product.xlist='394' OR vendor_product.xlist='395' OR vendor_product.xlist='396' OR vendor_product.xlist='403' OR vendor_product.xlist='410' OR vendor_product.xlist='411' OR vendor_product.xlist='588' OR vendor_product.xlist='589' OR vendor_product.xlist='599' OR vendor_product.xlist='602' OR vendor_product.xlist='603' OR vendor_product.xlist='631' OR vendor_product.xlist='696' OR vendor_product.xlist='717' OR vendor_product.xlist='751' OR vendor_product.xlist='778' OR vendor_product.xlist='788' OR vendor_product.xlist='791' OR vendor_product.xlist='799' OR vendor_product.xlist='807' OR vendor_product.xlist='865') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1211) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='357' OR vendor_product.xlist='378' OR vendor_product.xlist='379' OR vendor_product.xlist='383' OR vendor_product.xlist='384' OR vendor_product.xlist='386' OR vendor_product.xlist='398' OR vendor_product.xlist='416' OR vendor_product.xlist='563' OR vendor_product.xlist='654' OR vendor_product.xlist='658' OR vendor_product.xlist='674' OR vendor_product.xlist='703' OR vendor_product.xlist='720' OR vendor_product.xlist='722' OR vendor_product.xlist='726' OR vendor_product.xlist='732' OR vendor_product.xlist='739' OR vendor_product.xlist='771' OR vendor_product.xlist='794' OR vendor_product.xlist='801' OR vendor_product.xlist='868' OR vendor_product.xlist='898' OR vendor_product.xlist='927' OR vendor_product.xlist='960' OR vendor_product.xlist='1021' OR vendor_product.xlist='1026' OR vendor_product.xlist='1039' OR vendor_product.xlist='1303' OR vendor_product.xlist='1319' OR vendor_product.xlist='1334' OR vendor_product.xlist='1335' OR vendor_product.xlist='1339' OR vendor_product.xlist='1349') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
											} elseif ($key48  == 28) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='10' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='12' ORDER BY vendor_id ASC";	
												
											}  elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='10' ORDER BY vendor_id ASC";
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 1139) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='170' OR vendor_product.xlist='171' OR vendor_product.xlist='172' OR vendor_product.xlist='177' OR vendor_product.xlist='178' OR vendor_product.xlist='180' OR vendor_product.xlist='183' OR vendor_product.xlist='186' OR vendor_product.xlist='187' OR vendor_product.xlist='188' OR vendor_product.xlist='191' OR vendor_product.xlist='194' OR vendor_product.xlist='195' OR vendor_product.xlist='195' OR vendor_product.xlist='197' OR vendor_product.xlist='198' OR vendor_product.xlist='199' OR vendor_product.xlist='598' OR vendor_product.xlist='606' OR vendor_product.xlist='725' OR vendor_product.xlist='734' OR vendor_product.xlist='779' OR vendor_product.xlist='1343' OR vendor_product.xlist='1345' OR vendor_product.xlist='1346') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
											} elseif ($key48  == 1394) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='457' OR vendor_product.xlist='638' OR vendor_product.xlist='647' OR vendor_product.xlist='1253' OR vendor_product.xlist='1326' OR vendor_product.xlist='1328') AND new_vendor.status='10' ORDER BY vendor_id ASC";	
												
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

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
												   
											   		}
						
												$venNums = shuffle($venNum);
                                
                                                    
                                                                $iCount = 1;

                                                                $xCount = 1;      
                                
                                
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '10' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);
													

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
														   
											$key48 = $adId;
						
						
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
												
											} elseif ($key48  == 1139) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='568' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1345' OR xlist='1346') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 1394) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
												
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
																		
																		$diLogo = $adId;
																		
																		if (($diLogo == 1209) || ($diLogo == 1210) || ($diLogo == 1211)) {

																		 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/te-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: red'>&nbsp;&nbsp;";
																		
																		} else {
																			
																		 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";																			
																			
																		}
																		

																		

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}															   
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
                                                                   
                                                                
                                                                // Base Count

																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
                                                                    
																	
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   $baseCount = $index;
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   $baseCount = $index;
																	
																	
																}   
                                                                   
																   
    													$index++;															   
																 
                                                                   
																   
															   }
                                                    
													
												}
                                
                        $index = 1;
                                
												foreach ($venNum as $value) {
													
													$value['number'];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status = '10' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);

																// logo section

																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																  
																   
											$key48 = $adId;
						
						
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
												
											} elseif ($key48  == 1139) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='170' OR xlist='171' OR xlist='172' OR xlist='177' OR xlist='178' OR xlist='180' OR xlist='183' OR xlist='186' OR xlist='187' OR xlist='188' OR xlist='191' OR xlist='194' OR xlist='195' OR xlist='197' OR xlist='198' OR xlist='199' OR xlist='1345' OR xlist='598' OR xlist='606' OR xlist='725' OR xlist='734' OR xlist='779' OR xlist='1343' OR xlist='1346') AND vendor_id='" .$value. "'";	
												
											} elseif ($key48  == 1394) {
												
											$sql99 = "SELECT * FROM vendor_product WHERE (xlist='457' OR xlist='638' OR xlist='647' OR xlist='1253' OR xlist='1326' OR xlist='1328') AND vendor_id='" .$value. "'";	
												
											}             	
																   
																   $result99 = $conn->query($sql99);

																		$rowcount99=mysqli_num_rows($result99);	


																		$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "'";
																		$result199 = $conn->query($sql199);

																		$rowcount199=mysqli_num_rows($result199);

																		$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$value. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";

																		$result299 = $conn->query($sql299);

																		$rowcount299=mysqli_num_rows($result299);


																		$string =  $row['company_name']; // Trim String

																		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																		$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash
																		
																		
																		
																		
																		 array_push($companyNames, $row['company_name']);
																	 																	
																if($lazyImgMax < $lazyCounter){
																	$image = '<img data-src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;" class="lazy">';
																 } else {
																	$image = '<img src="'.BASE_URL.'products/images/'. $row['logo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 100px; object-fit: contain;">';
																 }
																 $lazyCounter++;

																// Featured Vendors 10's Start

																echo '<a href="'.BASE_URL.'commercial-landscape-companies/' . $string . '" class="col-md-6 col-sm-6 col-xs-6 for_small">
																			' . $image . '<br />
																			<p class="categoryVendor categoryVendorFeatured">'. $row['company_name'] . '</p></a>';
                         
																   
															   }
                                                    
													
												}
					   							
									?>	
					 				
					   		<!-- 12 End -->                 
                
                
                
                
                
                
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
            
        </div><!-- ./col-lg-8 -->
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 sideBar">
						
						
						<!-- banner ads 1-6 right side -->
						<?  for($i = 0; $i < 5; $i++){
									if(!empty($ads[$i]['picture'])){
										echo '<div class="add__ full_width"><a href="' .  $ads[$i]['web'] . '"><img src="../banner/'  . $ads[$i]['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
										
										list($width, $height) = getimagesize(BASE_URL.'banner/' . $ads[$i]['picture'] . '');
										
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
							
								echo "<p class='rarticleSidebarText'><a href='".BASE_URL."articles/" . $row["slug"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a></p>";
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
									echo "<p class='rarticleSidebarText'><a href='".BASE_URL."articles/" . $row1["slug"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row1["title"]))) . "</a></p>";
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
	
            
 <? include $rootInclude.'la-common-footer-inner.inc'; ?>
 


 
 
    </body>
</html>
