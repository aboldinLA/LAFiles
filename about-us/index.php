<?php session_start() ?>

<? 
 
	include '../../includes/la-common-top.php';

  $pageId = "other";

	include $rootInclude . 'la-common-header.inc'; 
  include $rootInclude . 'connect4.inc';

  
    $sql = "SELECT * FROM editorial WHERE title NOT LIKE '%Weekly%' AND subject != '10' AND title NOT LIKE '%Promo%' ORDER BY id DESC LIMIT 5";
    $result = $conn->query($sql);									
    
    $randomNum = rand(0,4);
    $numCount = 0;

     while($row = mysqli_fetch_assoc($result)) {
       if($numCount == $randomNum){
         $mainImage = $row["id"];
       }
      $numCount++;
     }


  $randomCat = function(){
    $selectCategories = ['32', '1214', '38', '33', '29', '41'];
    echo $selectCategories[rand(0, sizeof($selectCategories))];
  }


?>



	<section class="about-page supplemental-pages">
	
			<!--Banner Start -->
      <div class="page-top-banner text-center" style="width:100%; background-image:url('images/about-bg.png'); height:259px; background-size:cover;">
        <div class="inner-banner">
          <div class="container">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 padding30">
              <h1>About Us</h1>
            </div>
<!--
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 padding10">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br /> sed do eiusmod tempor incididunt.</p>
            </div>
-->
          </div>
        </div>
      </div>
      <!-- Banner End -->
    
			
			<section class="content-section">
				<div class="container">
				
						<div class="row padding40">
							<h2 class="text-center">Landscape Architect</h2>
<!--
							<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget eros scelerisque, auctor nisi a, sagittis felis. Vivamus viverra quis lacus in accumsan. Praesent facilisis diam ut justo pulvinar commodo. Mauris accumsan lectus vitae porttitor pulvinar. Spretium, a cursus lectus eleifend. </p>
							</div>
-->
						</div>
						
								<style>
									
									
								</style>
								
						<div class="row padding20 about-section">
							<div class="col-md-4 col-sm-12 col-xs-12 ab-col">
								<div class="ads-logos" style="width:100%;">
									<img src="images/products/about-<? echo rand(1,6) ?>.jpg" style="width:100%;" />
								</div>
								<h3>Explore Our Products</h3>
<!--
								<p class="padding10">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget eros scelerisque.
								</p>
-->
								<p class="padding10"><a href="https://landscapearchitect.com/LandscapeProducts/la_category.php?ad=<? echo $randomCat() ?>">VIEW LA DETAILS</a></p>
							</div>
							
							<div class="col-md-4 col-sm-12 col-xs-12 ab-col">
								<div class="ads-logos" style="width:100%;">
									<img src="images/about-news.jpg" style="width:100%;" />
								</div>
								<h3 >Read Recent News</h3>
<!--
								<p class="padding10">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget eros scelerisque.
								</p>
-->
								<p class="padding10"><a href="https://landscapearchitect.com/research/news_landing.php">READ LATEST ARTICLES</a></p>
							</div>
							
							
							<div class="col-md-4 col-sm-12 col-xs-12 ab-col">
								<div class="ads-logos" style="width:100%;">
									<img src="images/about-mag.jpg" style="width:100%;" />
								</div>
								<h3>Sign Up For the Magazine</h3>
<!--
								<p class="padding10">
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget eros scelerisque.
								</p>
-->
								<p class="padding10" id="receiveMagBtn"><a href="">SIGN UP</a></p>
							</div>
							
							
						</div>
						
						
					</div>
				</div>	
			</section>
            
			
	
	</section>		
           
			
 <? include '../../includes/la-common-footer-inner.inc'; ?>

