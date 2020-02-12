<?php
if( isset( $_POST['art_id'] ) && !empty( $_POST['art_id'] ) ):
    $send_responce_id = 0;
    // Article Start
    /*$servername = "localhost";
    $username = "land_patchew";
    $password = "59q2GB6k$3";
    $dbname = "land_landscap_lollive";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);*/

    include '../modules/confguation.inc';
    include '../modules/db.php';
// Check connection
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    } 

    $data_id_1 = $_POST['data_id'];
    $data_id_2 = ( $data_id_1 + 1 );
    $data_id_new = ( $_POST['data_id'] + 2 );


    $next_article_id = $_POST['art_id'];
    $allarticlesid   = $_POST['allarticlesid'];

    // $allarticlesid   = explode(',', $allarticlesid);
    // $allarticlesid = array_unique($allarticlesid);
    // $article_id = $_POST['art_id'];
    // //$nextquery= "SELECT * FROM editorial WHERE id > $article_id ORDER BY id ASC LIMIT 1"; 
    // $nextquery= "select id from editorial where id < " . $article_id . " order by id DESC limit 1"; 
    // $nextresult = $conn->query($nextquery);
    // $next_article_id = '';
    // while($art_row = mysqli_fetch_array($nextresult)) {
        
    //     $next_article_id = ( isset( $art_row[0] ) && !empty( $art_row[0] ) ) ? $art_row[0] : '';

    // }
    if( isset( $next_article_id ) && !empty( $next_article_id ) ):

        ob_start();
?>

        <section class="full_width architech_arti brdr" data-title="article<?php echo $data_id_1; ?>">
            <div class="container">
                <div class="row">
                    <div class="widthmaker">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="width_adjust full_width">   
                        
                                <!-- Story Start -->

                                <?
                                // start article from table

                                    $key2 = $next_article_id;                            
                                    //$key2 = "28909";

                                    $sql = "select * from editorial where id='" . $key2 . "'";
                                    $result = $conn->query($sql);

                                    

                                // banner rotating section

                                    while($row = mysqli_fetch_array($result)) {
                                        //echo "<pre>";print_r($row);die;
                                        $keywordart = $row["keywords"];
                                        
                                        $subName = $row['subject'];
                                        
                                        if ($subName == 1) {
                                            
                                            $subName = 'Feature';
                                            
                                        } elseif ($subName == 2) {
                                            
                                            $subName = 'News';
                                            
                                        } elseif ($subName == 3) {
                                            
                                            $subName = 'Department';
                                            
                                        } elseif ($subName == 4) {
                                            
                                            $subName = 'Economic News';
                                            
                                        } elseif ($subName == 5) {
                                            
                                            $subName = 'Association News';
                                            
                                        } elseif ($subName == 7) {
                                            
                                            $subName = 'Legislation';
                                            
                                        } elseif ($subName == 8) {
                                            
                                            $subName = 'Education';
                                            
                                        }                                                

                                        echo '<span class="date_se">' . date("m-d-y", $row["issue"]) . ' | ' . $subName . '</span>';    

                                        $ed_text = $row["ed_text"];
                                        $string = substr($ed_text, strpos($ed_text, '<!-- begin wwww.htmlcommentbox.com -->'), strpos($ed_text, '<!-- end www.htmlcommentbox.com -->'));

                                        $startStringArray = explode('<!-- begin wwww.htmlcommentbox.com -->', $string);
                                        $startString = $startStringArray[0];

                                        $endStringArray = explode('<!-- end www.htmlcommentbox.com -->', $string);
                                        $endString = $endStringArray[0];

                                        $finalStringLength = strlen($endString ) + strlen('<!-- end www.htmlcommentbox.com -->');


                                        $finalString = substr_replace($ed_text, '', strpos($ed_text, '<!-- begin wwww.htmlcommentbox.com -->') , $finalStringLength);
                                        //var_dump($finalString);


                                        echo  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($finalString))); 

                                        
                                    
                                    } ?>    
                        
                       
                            </div><!-- /.width_adjust -->    
                        </div><!-- ./col-lg-8 -->
                    
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="newsltr full_width">
                                    <h3>Sign up for<br>LAWeekly newsletter. <span>Get exclusive content today.</span></h3>
                                    <form id="news_letter_form" novalidate>
                                        <input type="text" name="email_address" placeholder="Enter your email address">
                                        <button type="submit">Sign up</button>
                                    </form>
                                </div><!-- /.newsltr -->
                    						
                    			<!-- ROS banner ads -->
                    			<?
                    				$sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND() Limit 4";
                    				$result = $conn->query($sql);									

                    				while($row = mysqli_fetch_array($result)){
                    						echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div> '; 
                    				}

                    			?>

                        </div><!-- ./col-lg-4 -->
                    </div><!-- /.widthmaker -->
                </div><!-- /.row -->
            </div><!-- /.contianer -->
        </section><!-- /.architech_arti -->

        <section class="related_contents full_width brdr" data-title="article<?php echo $data_id_2; ?>">
            <div class="container">
                <div class="row">
                    
                    
                    
                    
                    <!-- Related Content Start -->
                    <div class="col-xs-12 text-center">
                        <h3>Related Content</h3>
                    </div><!-- /.col-xs-12 -->
                    
                    
                        <?

                            /*$sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' AND id != '" . $next_article_id . "'ORDER BY id DESC LIMIT 0,4";*/
                            $sql5 = "select * from editorial where keywords RLIKE '" . $keywordart . "' AND id NOT IN (".$allarticlesid.") ORDER BY id DESC LIMIT 0,4";
                            
                            $result5 = $conn->query($sql5);                                 
                    
                            $i = 1;

                            $nextStorY = 0;
                            $firstStory = 0;
                            $firstStory = 0;
                            $relatedCount = 0;
                            
                			while($row = mysqli_fetch_array($result5)) {
                                
                                $mainImage = $row['id'];

                                if( $relatedCount == 0 ):
                                    $send_responce_id = $mainImage;
                                endif;
                                
                                if ($nextStorY < $row['id']) { 
                                    
                                    $nextStorY = $row['id'];
                                    
                                    $nextStoryX = $nextStorY;
                					
                					if ($firstStory < 1) {
                						
                                    	$nextStorY2 = $row['id'];
                						
                						$firstStory++;
                						
                					}
                					
                					
                                    
                                }

                                $link = BASE_URL.'articles/'.$row['slug'];
                                
                				echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 for_small">
                                    <a href="'.$link.'" class="reelbox img_fit">
                                        <img width="100%" height="175px" src="'.BASE_URL.'research/images/' . $mainImage . '.jpg" alt="img" />
                                        <div class="text_fi full_width">
                                            <!-- <h1>META DATA</h1> -->
                                            <h2>' . $row['title'] . '</h2>
                                            <p>' . $row['subtitle'] . '</p>
                                        </div><!-- /.text_fi -->
                                    </a><!-- /.reelbox -->
                                    </div></a><br><!-- /.col-lg-3 -->'; 
                		          $relatedCount++;
                				} 


                            ?>  
                    <!-- Related Content End -->
                                                    <!-- Story End -->
                    
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.related_contents -->
        <input type="hidden" name="allarticlesid" class="hidden-input-field" value="<?php echo $allarticlesid; ?>,<?php echo $send_responce_id; ?>">
        <input type="hidden" name="nextarticleid" class="hidden-input-field" value="<?php echo $send_responce_id; ?>">    
        <input type="hidden" name="articleidnumber" class="hidden-input-field" value="<?php echo $data_id_new; ?>">    
<?php
        $return_data = ob_get_contents();
        ob_get_clean();

        echo $return_data;
/*print_r(array('articleId' => $next_article_id, 'html'=> $return_data ));*/
        die;
    endif;
endif;