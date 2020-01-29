<?

?>
<link type="text/css" rel="stylesheet" media="all" href="https://landscapearchitect.com/products/vertical.css" />
<script type="text/javascript" src="https://landscapearchitect.com/js/vertical.js"></script>

	<style>
									.vl {
										border-left: 2px solid #92cb58;
										height: 2060px;
										position: absolute;
										left: 1055px;
										top: 210px;
									}
									</style>

									<div class="vl"></div>






                        
       								<div style="position: absolute; left: 1065px; top: 210px"><!-- set to 780 when key search is back in -->
                                        
                                        
                                       
										
										
									<?
									
										// Banner Ads Start

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


										// start for the banner add counting and getting from table
										
											// $ad = $_GET["ad"];
											$ad = 1;

											if ($ad=='1') {

											$sql = "SELECT * FROM banner_ups where ROS = 'yes' and product IS NULL AND picture IS NOT NULL ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												
												$links = substr('' . $row[picture]. '', 0, 5);
												
												// echo $links;
												
													if ($links == 'vista'){
														
														
													?><section><ins class='dcmads' style='display:inline-block;width:240px;height:240px'
													data-dcm-placement='N46002.2575001LANDSCAPEONLINE.CO/B11050930.207463698'
													data-dcm-rendering-mode='iframe'
													data-dcm-https-only
													data-dcm-resettable-device-id=''
													data-dcm-app-id=''>
													<script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
												</ins><br><br>
										
												<?
												

														
											} else {
														
													echo "<section><a href='" . $row[web] . "' onclick='window.open(trackOutboundLink('" . $row[web] . "'); return false;)' target='_blank'><img width='251px' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a></section><br>";														
														
										}
												
												
											}
												
												
												
										}else{
											$sql = "SELECT * FROM banner_ups where product = '" . $ad . "' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
													if (empty($row[web])) { 
													echo "&nbsp;";
													}else{
													echo "<section><a href='" . $row[web] . "' onclick='window.open(trackOutboundLink('" . $row[web] . "'); return false;)' target='_blank'><img width='251px' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a>
													</section><br>";													
													}
											}										
										}
									?>       										
										
										
										
										
										
										
       								</div>
       								
       								
 
				       								
       								
