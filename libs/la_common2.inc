<?		
			       function mainArticleSlider($conn) {

                //include 'connect4.inc'; 
                include './modules/configuration.inc';                                  

                $sql2333 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 0,5";
                $result2333 = $conn->query($sql2333);			

                $articlesArr = array();
                $temp = array();

                while($row = mysqli_fetch_array($result2333)) {

                    $titleWords = $row['title'];

                    $mainImage = $row["id"];

                    //$Link = BASE_URL."research/articles.php?number=" . $mainImage;
                    $Link = BASE_URL."articles/" . $row["slug"];

                    $descriptionString = str_replace("<br>", " ", $row['ed_text']);

                    $desIdentifier = '<p class="articleBodyText">';

                    $desStart = strpos($descriptionString, $desIdentifier);
                  
                    

                    $description = substr($descriptionString, $desStart + strlen($desIdentifier), 225) . ' . . .';
                  
                    $description = str_replace("<em>", " ", $description);

                    array_push($temp, $titleWords, $mainImage, $Link, $description);
                    array_push($articlesArr, $temp);
                    $temp = [];
                  
                    

                }
               
            
                             
            ?>  

          

                  <div class="item">
                      <a href="<? echo $articlesArr[0][2] ?>">
                        <img src=<?php echo BASE_URL; ?>"optimized-images/timthumb.php?src=<?php echo BASE_URL; ?>research/images/<? echo $articlesArr[0][1] ?>.jpg" alt="img" />
                      </a>
                        <div class="ns_txt">
                          <a href="<? echo $articlesArr[0][2] ?>"><h3><? echo $articlesArr[0][0] ?></h3></a>
                          <p class="articleSliderIntroText"><? echo $articlesArr[0][3] ?></p>
                        </div><!-- /.ns_txt -->
                    </div><!-- /.item -->

                    <div class="item">
                      <a href="<? echo $articlesArr[1][2] ?>">
                        <img src="<?php echo BASE_URL; ?>optimized-images/timthumb.php?src=<?php echo BASE_URL; ?>research/images/<? echo $articlesArr[1][1] ?>.jpg" alt="img" />
                      </a>
                        <div class="ns_txt">
                          <a href="<? echo $articlesArr[1][2] ?>"><h3><? echo $articlesArr[1][0] ?></h3></a>
                          <p class="articleSliderIntroText"><? echo $articlesArr[1][3] ?></p>
                        </div><!-- /.ns_txt -->
                    </div><!-- /.item -->

                    <div class="item">
                      <a href="<? echo $articlesArr[2][2] ?>">
                        <img src="<?php echo BASE_URL; ?>optimized-images/timthumb.php?src=<?php echo BASE_URL; ?>research/images/<? echo $articlesArr[2][1] ?>.jpg" class="lazy" alt="img" />
                      </a>
                        <div class="ns_txt">
                          <a href="<? echo $articlesArr[2][2] ?>"><h3><? echo $articlesArr[2][0] ?></h3></a>
                          <p class="articleSliderIntroText"><? echo $articlesArr[2][3] ?></p>
                        </div><!-- /.ns_txt -->
                    </div><!-- /.item -->

                    <div class="item">
                      <a href="<? echo $articlesArr[3][2] ?>">
                        <img src="<?php echo BASE_URL; ?>optimized-images/timthumb.php?src=<?php echo BASE_URL; ?>research/images/<? echo $articlesArr[3][1] ?>.jpg" class="lazy" alt="img" />
                      </a>
                        <div class="ns_txt">
                          <a href="<? echo $articlesArr[3][2] ?>"><h3><? echo $articlesArr[3][0] ?></h3></a>
                          <p class="articleSliderIntroText"><? echo $articlesArr[3][3] ?></p>
                        </div><!-- /.ns_txt -->
                    </div><!-- /.item -->

                    <div class="item">
                      <a href="<? echo $articlesArr[4][2] ?>">
                        <img src="<?php echo BASE_URL; ?>optimized-images/timthumb.php?src=<?php echo BASE_URL; ?>research/images/<? echo $articlesArr[4][1] ?>.jpg" class="lazy" alt="img" />
                      </a>
                        <div class="ns_txt">
                          <a href="<? echo $articlesArr[4][2] ?>"><h3><? echo $articlesArr[4][0] ?></h3></a>
                          <p class="articleSliderIntroText"><? echo $articlesArr[4][3] ?></p>
                        </div><!-- /.ns_txt -->
                    </div><!-- /.item -->


            <?
        
        
                        	
																						
																						

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
//													$newsLink = BASE_URL.'research/articles.php?number=' . $row['id'] . '#article1';          
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


			function sideArticles($conn) {
                                            //include '../includes/connect4.inc';     
                                            include './modules/configuration.inc';                          
                                   
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
                                                
                                                                //$newsLink = BASE_URL.'research/articles.php?number=' . $row['id'] . '#article1';    

                                                                $newsLink = BASE_URL."articles/" . $row["slug"] . '#article1';  
																																
																																$descriptionString = str_replace("<br>", " ", $row['ed_text']);

																	$desIdentifier = '<p class="articleBodyText">';

																	$desStart = strpos($descriptionString, $desIdentifier);

																	$description = substr($descriptionString, $desStart + strlen($desIdentifier), 65) . ' . . .';
                                                
                                                
                                                                echo '<div class="row">
                                                                        <div class="col-md-12 col-sm-6 rnews">
                                                                            <a href="'.$newsLink.'">
                                                                                <div class="fw-thumb2">
                                                                                    <img src="'.BASE_URL.'optimized-images/timthumb.php?src='.BASE_URL.'research/images/' . $row['id'] . '-a.jpg" alt=""/>
                                                                                </div>
                                                                                <div class="fw-info ml-1">

                                                                                    <p style="color:#00240f; text-transform: capitalize;  font-size: 16px; font-weight: normal; margin-bottom: 5px;">' .  $titleWords . '</br>
                                                                                    <span style="padding-top:10px; font-size: 14px; color: #777575; margin-bottom: 5px;">' .  $subWords . '</span></p>
																																										<p style="font-size: 11px; color: #777575; margin-bottom: 5px;">' .  $description . '</p>
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












