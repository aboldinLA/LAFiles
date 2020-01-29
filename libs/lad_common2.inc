<?



		


			function counterNum() { 
				
				include('connect3.inc');


				// Article Start


																	   // used to get a count for 2 items

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
																						$qp = 1;
																					} elseif ($qp == 1) {
																						$venId02 = $row['id'];
																						$qp = 2;
																					}
																				}
																			}					
				

				}


	
	
	
			function countCategory() { 
				
				include('connect3.inc');


				// Article Start

					$sql="SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $cat2 ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";

					if ($result=mysqli_query($conn,$sql)) {
												
						while($row = mysqli_fetch_array($result)) {
												
							echo "<span style='font-weight: 400; font-family: Helvetica, Arial; font-size: 14px'>" .  date('m-d-y', $row['issue']) ."</span>&nbsp;&nbsp;&nbsp;" . "<a href='https://landscapearchitect.com/research/article-a.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br><p style='line-hieght: 2px'>&nbsp;</p>";													
													
						}
												
						// Free result set
						mysqli_free_result($result);
					}

				}
	

			function categoryOption() { 
				
				include('connect3.inc');




																			$sql1 = "SELECT * FROM xlist WHERE idParent = '" . $cat1 ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
																		$result1 = $conn->query($sql1);									

																	// category section

																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index.php?ad='. $cat1 . '">Top Level</option>';

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
																					echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub.php?ad=' . $cat1 . '&number='. $row['id'] . '&catName='. $row['name'] . '&catMain='. $cat3 . '"><span style="font-family: Helvetica, Arial; font-size: 14px">'. $row['name'] . ' ('. $rowcount55 . ')</span></option>';
																				}

																		}

																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub.php?ad=' . $cat1 . '&number='. $cat2 . '&catName='. $cat4 . '&catMain='. $cat3 . '&kind=8">View All Products</option>';
						
						
						
						
						
												
						// Free result set
						mysqli_free_result($result);

				}


			function mainCompany19($key48) { 
				
				include('connect3.inc');
				
				
										
				
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
				
											//echo "dog" . $key48;
				
											$bird = "dog" . $key48;
				
											return $bird;

						
												
						// Free result set
						mysqli_free_result($result);

				}







  

?>


