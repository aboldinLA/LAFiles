<?



											
			function mainArticleSlider() {
                
                                            include '../includes/connect4.inc';        
																						
																						
																						$sql2333 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 0,5";
											$result2333 = $conn->query($sql2333);									
									
												
											while($row = mysqli_fetch_array($result2333)) {
					
												$titleWords = $row['title'];

												$subWords = $row['subtitle'];

												$mainImage = $row["id"];
												
												$mainImage2 = 'https://landscapearchitect.com/research/images/31151.jpg';
													
													function resize_image($file, $w, $h, $crop=false) {
														list($width, $height) = getimagesize($file);
														$r = $width / $height;
														if ($crop) {
															if ($width > $height) {
																$width = ceil($width-($width*abs($r-$w/$h)));
															} else {
																$height = ceil($height-($height*abs($r-$w/$h)));
															}
															$newwidth = $w;
															$newheight = $h;
														} else {
															if ($w/$h > $r) {
																$newwidth = $h*$r;
																$newheight = $h;
															} else {
																$newheight = $w/$r;
																$newwidth = $w;
															}
														}

														//Get file extension
														$exploding = explode(".",$mainImage2);
														$ext = end($exploding);

														switch($ext){
															case "png":
																$src = imagecreatefrompng($file);
															break;
															case "jpeg":
															case "jpg":
																$src = imagecreatefromjpeg($file);
															break;
															case "gif":
																$src = imagecreatefromgif($file);
															break;
															default:
																$src = imagecreatefromjpeg($file);
															break;
														}

														$dst = imagecreatetruecolor($newwidth, $newheight);
														imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

														return $dst;
													}													
													

												$Link = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;

												$descriptionString = str_replace("<br>", " ", $row['ed_text']);

												$desIdentifier = '<p class="articleBodyText">';

												$desStart = strpos($descriptionString, $desIdentifier);

												$description = substr($descriptionString, $desStart + strlen($desIdentifier), 225) . ' . . .';




												echo '<div class="item">
																	<a href="' . $Link . '">
																		<img src="' . $mainImage2 . '" alt="img" />
																	</a>
																		<div class="ns_txt">
																			<a href="' . $Link . '"><h3>' . $titleWords . '</h3></a>
																			<p class="articleSliderIntroText">' . $description . '</p>
																		</div><!-- /.ns_txt -->
																</div><!-- /.item -->';
																
																
												}
																						
																						
																						

//											$sql2333 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 0,5";
//											$result2333 = $conn->query($sql2333);									
//									
//												
//											while($row = mysqli_fetch_array($result2333)) {
//												
//													$string =  $row['title']; // Trim String
//
//													$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
//
//													$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters
//
//													$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces
//
//													$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash							
//
//													$titleWords = $row['title'];
//
//													$subWords = $row['subtitle'];
//
//													$newsLink = 'https://landscapearchitect.com/research/articles.php?number=' . $row['id'] . '#article1';          
//
//
//													$descriptionString = str_replace("<br>", " ", $row['ed_text']);
//
//													$desIdentifier = '<p class="articleBodyText">';
//
//													$desStart = strpos($descriptionString, $desIdentifier);
//
//													$description = substr($descriptionString, $desStart + strlen($desIdentifier), 225) . ' . . .';
//
//													 echo '<!-- SLIDE  -->
//												 <li data-transition="fade" data-slotamount="2" data-masterspeed="500" data-thumb="homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">
//														 <!-- MAIN IMAGE -->
//														<img src="https://landscapearchitect.com/research/images/' . $row['id'] . '-h.jpg"  alt="slidebg1" data-lazyload="https://landscapearchitect.com/research/images/' . $row['id'] . '-h.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
//
//
//															<div class="c-text text-left">
//																 <a href="' . $newsLink . '"><h3 style="background-color: #ffffff; padding: 3px; color:#000000">' . $titleWords . '<p class="articleSliderIntroText" style="color: #000000; text-transform: inherit;">' . $description . '</p></h3></a>
//														 </div>
//
//												 </li>';
//
//											}                 



				} //ENd mainArticleSlider


			function sideArticles() {
                
                                            include '../includes/connect4.inc';                               
                                   
											$sql2333 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 6,2";
											$result2333 = $conn->query($sql2333);									
									
										// banner rotating section
												
											while($row = mysqli_fetch_array($result2333)) {
												
																$string =  $row['title']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash							
												
                                                                $titleWords = $row['title'];
                                                
                                                                $subWords = $row['subtitle'];  
                                                
                                                                $newsLink = 'https://landscapearchitect.com/research/articles.php?number=' . $row['id'] . '#article1';                                                
                                                
                                                
                                                                echo '<div class="row">
                                                                        <div class="col-md-12 col-sm-6 rnews">
                                                                            <a href="https://landscapearchitect.com/research/articles.php?number=' . $row['id'] . '#article1">
                                                                                <div class="fw-thumb2">
                                                                                    <img src="https://landscapearchitect.com/research/images/' . $row['id'] . '-a.jpg" alt=""/>
                                                                                </div>
                                                                                <div class="fw-info ml-1">

                                                                                    <p style="color:#00240f; text-transform: capitalize;  font-size: 14px; font-weight: normal;">' .  $titleWords . '</br>
                                                                                    <span style="padding-top:10px; font-size: 10px; color: #777575; margin-bottom: 5px;">' .  $subWords . '</span></p>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div><br>';
                                                
																} 
																      

				}


			function sideBanner1() {
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
                
											$sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
                
                                            $bCount = 1;
												
											while($row = mysqli_fetch_array($result)) {
                                                
                                                                if ($bCount < 2) {
                                                                    $ad1 = '/banner/' . $row['picture'];
                                                                    $bCount++;
                                                                }
                                                
											} 
                        
                        
                                    $ad2 = $ad1;
																      

				}
				
				
				
				
				
				function sideRelatedArticles(){
						
				
				
				
											$key2 = "28909";

											$sql2336 = "select * from editorial where id='" . $key2 . "'";
											$$result2336 = $conn->query($sql2336);
											
											
//														$sql2333 = "select * from editorial where title REGEXP '[[:<:]]" . $tleArticlesKeyword1 . "[[:>:]]'
//											UNION
//											select * from editorial where title REGEXP '[[:<:]]" .  $tleArticlesKeyword1 . "[[:>:]]' 
//											ORDER BY id DESC";
					$result2336 = $conn->query($sql2336);									

						$i = 1;
						while($row = mysqli_fetch_array($result2336)) {
							if ($i <= "11") {
								echo "<p><a href='http://www.landscapeonline.com/research/article-a.php?number=" . $row["id"] . "' class='primary-text'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a></p>";
								$i++;		
							}
						}
						
		
					}


	
							

	

		

?>












