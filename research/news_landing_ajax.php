<?php
if( isset( $_POST['cat_name'] ) && isset( $_POST['pagination'] ) && !empty( $_POST['pagination'] ) && !empty( $_POST['cat_name'] ) ):
	ob_start();

	$cat_name   = $_POST['cat_name'];
	$pagination = $_POST['pagination'];
	$next 		= ( $pagination + 6 );

	$newsCatsOne = array('all' => 0, 'association' => 5, 'legislation' => 7, 'education' => 8, 'economic' => 4, 'industry' => 2, 'projects' => 1);

	$subjectString = ( $cat_name == 'all' ) ? '' : "AND subject = '" . $newsCatsOne[$cat_name] . "'";
	

	include '../../includes/connect4.inc'; 

	$sql3 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY cast(Clicks as unsigned) DESC LIMIT $pagination,3";

	$result23333 = $conn->query($sql3);

	while($row = mysqli_fetch_array($result23333)) {				

		 $titleWords = $row['title'];

		 $subWords = $row['subtitle'];  

		 $keywordart = $row["keywords"];

		 $mainImage = $row["id"];

		 $Link = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;

		 $titleStory = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $mainImage . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 

		 $keywordart = $row["keywords"];

		 $mainImage = $row["id"];																					

		$mainLink = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;

		$titleStory = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $mainImage . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 


			$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 0,3";
			$result5 = $conn->query($sql5);			                                                

			while($row = mysqli_fetch_array($result5)) {

				$newStory = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";   

				// creates link with article name and article id in url
				// $newStory = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";    

			}

			$sql55 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 1,3";
			$result55 = $conn->query($sql55);			                                                

			while($row = mysqli_fetch_array($result55)) {


					$newStory2 = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";     

					// creates link with article name and article id in url
					//$newStory2 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";          

			 }        


				$sql555 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 2,3";
				$result555 = $conn->query($sql555);			                                                

				while($row = mysqli_fetch_array($result555)) {

						 $newStory3 = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";                                               


							// creates link with article name and article id in url
							// $newStory3 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";      

				 } 





			$sub =  array_search($row['subject'], $newsCats);
			$metaSubString = $sub == 'projects' ? ucfirst($sub) : ucfirst($sub) . ' News';

			$metaData = $titleWords . " | " . $metaSubString . " | Landscape Architect";  


		 echo '<div class="col-md-4 col-sm-6 col-xs-6 for_small">
							<article style="background: white; margin-bottom:20px;">
									<div class="post-thumb">
											<a href="' . $mainLink . '">
													<img src="https://landscapearchitect.com/research/images/' . $mainImage . '.jpg" class="img-responsive" alt="">
													<div class="overlay-rmore fa fa-link"></div>
											</a>
									</div>

									<div class="post-excerpt" style="padding: 10px 10px 15px 10px;">

													<h4 class="hidden-lg hidden-md hidden-sm- hidden-xs"> ' . $metaData . '</h4>
													<h3 class="elipsed-line-cut">' . $titleStory . '</h3>
													<p class="relatedStoriesTitle">Related Stories:</p>
														<ul>
															<li>' . $newStory . '</li>
															<li>' . $newStory2 . '</li>
															<li>' . $newStory3 . '</li>
														<ul>

									</div>
							</article>
					</div>';

		}
	 
	 
	 
	 
	 	/* horizontal banner ad */
		$sql45 = "SELECT * FROM banner_ups WHERE ROS='rosh' ORDER BY RAND() LIMIT 1";
		$result45 = $conn->query($sql45);									

		while($row = mysqli_fetch_array($result45)) {
				echo '<div class="col-xs-12 addme img_fit"><a href="' .  $row['web'] . '"><img src="/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div>';
		}
              		
		
							
		$adjustedPagination = $pagination + 3;
	 
	 	$sql3 = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' " . $subjectString . " AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT $adjustedPagination,3";

		$result23333 = $conn->query($sql3);

		while($row = mysqli_fetch_array($result23333)) {				

			 $titleWords = $row['title'];

			 $subWords = $row['subtitle'];  

			 $keywordart = $row["keywords"];

			 $mainImage = $row["id"];

			 $Link = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;

			 $titleStory = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $mainImage . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 

			 $keywordart = $row["keywords"];

			 $mainImage = $row["id"];																					

			$mainLink = "https://landscapearchitect.com/research/articles.php?number=" . $mainImage;

			$titleStory = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $mainImage . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($titleWords))) . "</a><br>"; 


				$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 0,3";
				$result5 = $conn->query($sql5);			                                                

				while($row = mysqli_fetch_array($result5)) {

					$newStory = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";   

					// creates link with article name and article id in url
					// $newStory = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";    

				}

				$sql55 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 1,3";
				$result55 = $conn->query($sql55);			                                                

				while($row = mysqli_fetch_array($result55)) {


						$newStory2 = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";     

						// creates link with article name and article id in url
						//$newStory2 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";          

				 }        


					$sql555 = "select * from editorial where keywords RLIKE '" . $keywordart . "' ORDER BY id DESC LIMIT 2,3";
					$result555 = $conn->query($sql555);			                                                

					while($row = mysqli_fetch_array($result555)) {

							 $newStory3 = "<a href='https://landscapearchitect.com/research/articles.php?number=" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";                                               


								// creates link with article name and article id in url
								// $newStory3 = "<a href='http://www.landscapearchitect.com/articles/" . $string . "/" . $row["id"] . "'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a><br>";      

					 } 





				$sub =  array_search($row['subject'], $newsCats);
				$metaSubString = $sub == 'projects' ? ucfirst($sub) : ucfirst($sub) . ' News';

				$metaData = $titleWords . " | " . $metaSubString . " | Landscape Architect";  


			 echo '<div class="col-md-4 col-sm-6 col-xs-6 for_small">
								<article style="background: white; margin-bottom:20px;">
										<div class="post-thumb">
												<a href="' . $mainLink . '">
														<img src="https://landscapearchitect.com/research/images/' . $mainImage . '.jpg" class="img-responsive" alt="">
														<div class="overlay-rmore fa fa-link"></div>
												</a>
										</div>

										<div class="post-excerpt" style="padding: 10px 10px 15px 10px;">

														<h4 class="hidden-lg hidden-md hidden-sm- hidden-xs"> ' . $metaData . '</h4>
														<h3 class="elipsed-line-cut">' . $titleStory . '</h3>
														<p class="relatedStoriesTitle">Related Stories:</p>
															<ul>
																<li>' . $newStory . '</li>
																<li>' . $newStory2 . '</li>
																<li>' . $newStory3 . '</li>
															<ul>

										</div>
								</article>
						</div>';

			}
	 
	    echo '<div class="newsLanding-leftMarker" style="clear: both;"></div>';
	 	echo '<div class="ininiteScrollMarker col-xs-12" id="sm' . $pagination . '"></div>';
	 
	 
	echo '<input type="hidden" name="paginationfield" value="'.$next.'">';
	$output = ob_get_contents();
	ob_get_clean();
	sleep(1);
	echo $output;
	die;
else:
	return  '';
	die;
endif;