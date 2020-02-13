<?
//	session_start(); 


	$productActive = '';
	$newsActive = '';
	$resourcesActive = '';


if($pageId == 'resources'){
	$resourcesActive = 'active';
} else if($pageId == 'news'){
	$newsActive = 'active';
} else if($pageId == 'other'){
  //do nothing
} else if($pageId == 'products'){
	$productActive = 'active';
} else {
  $productActive = 'active';
}


	$xpage = $_SERVER['REQUEST_URI'];
  $ucode = $_SESSION['user'];

 function get_cate_slug($conn, $cat_id){
	$slug = '';
	$sql = "select slug from xlist where id=$cat_id";
	$result = $conn->query($sql);	
	while($row = mysqli_fetch_array($result)) {
		$slug = $row['slug'];
	}

	return $slug;
} 

?>




        <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">
            <!-- HEADER -->
            <header>
                <nav class="navbar navbar-default">
                    <div class="container mob-nopad">
                        <div class="row mob-nopad">
							<div class="col-md-12 col-sm-12 col-xs-12 mob-nopad">
								
	                            <div class="navbar-header">
	                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                                    <span class="sr-only">Toggle navigation</span>
	                                    <span class="icon-bar bar1"></span>
	                                    <span class="icon-bar bar2"></span>
	                                    <span class="icon-bar bar3"></span>
	                                </button>
	                                <!-- Logo -->
	                                <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>images/basic/logo.jpg" class="img-responsive" alt=""/></a>
                                <!-- Search -->
                                <button type="button" id="mob-search-btn" class="mob-search">
                                    <span class="sr-only">Search</span>
                                    <i class="fa fa-search"  aria-hidden="true"></i>
                                </button>
	                            </div>
	                            <!-- Cart & Search -->
                
                       
      
                
	                            <div class="header-xtra pull-right">

                                
                                <form action="<?php echo BASE_URL; ?>search-results-site.php" method="post">
                                  <input class="search__input" type="text" name="keywordSE4" placeholder="What are you looking for?">
                                </form>	
								   
	                            </div>
	                            <!-- Navmenu -->
	                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                                <ul class="nav navbar-nav navbar-left">
																	
	                                     <li class="dropdown mmenu <? echo $productActive ?>">
	                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products</a>
	                                        <ul class="mega-menu dropdown-menu" role="menu">
	                                            <li style="border-right: 2px solid rgba(0, 0, 0, 0.22); width: 20%;  margin-right: 5%;">
	                                                <div>
																										<div class="menuLogoContainers">
																											<img class="menuLogo-LA hidden-xs" src="<?php echo BASE_URL; ?>images/menu-logo.JPG" style="width:100%;" />
<!--
																											<div class="menuLogoHover menuLogoHover-LA">
																												<p class="menuLogoHover-title">LADetails</p>
																												<p class="menuLogoHover-text">This is text about LADetails and what it is. Enjoy reading about LADetails. You should really try it out sometime or now!</p>
																											</div>
-->
																											</div>
																										
																										<div class="menuLogoContainers">
																											<img class="menuLogo-TE hidden-xs" src="<?php echo BASE_URL; ?>images/menu-logo-tools.jpg" style="width:100%; margin-top:30px;" />
<!--
																											<div class="menuLogoHover menuLogoHover-TE">
																												<p class="menuLogoHover-title">Tools &amp; Equipment</p>
																												<p class="menuLogoHover-text">This is text about LADetails and what it is. Enjoy reading about LADetails. You should really try it out sometime or now!</p>
																											</div>
-->
																										</div>
																												
																										<div class="menuLogoContainers">
																											<img class="menuLogo-LOPSE hidden-xs" src="<?php echo BASE_URL; ?>images/menu-logo-lopse.jpg" style="width:100%; margin-top:30px;" />
<!--
																											<div class="menuLogoHover menuLogoHover-LOPSE">
																												<p class="menuLogoHover-title">Local Wholesale &amp; Plant Materials</p>
																												<p class="menuLogoHover-text">This is text about LADetails and what it is. Enjoy reading about LADetails. You should really try it out sometime or now!</p>
																											</div>
-->
																										</div>
	                                                </div>
	                                            </li>
	                                              <li class="padding25">
	                                                <div>
	                                                    <p class="" style="font-size:14px; color:#2e2e2e; font-weight: 800; text-transform: capitalize;">All Categories</p>
	                                                    <!-- 
	                                                    <a href="<?php echo BASE_URL; ?>business-services-and-software">Business Services &amp; Software</a>
	                                                    <a href="<?php echo BASE_URL; ?>landscape-erosion-control-products">Erosion Control</a>
	                                                    <a href="<?php echo BASE_URL; ?>commercial-wholesale-fencing">Fencing</a>
	                                                    <a href="<?php echo BASE_URL; ?>landscape-irrigation">Irrigation</a>
	                                                    <a href="<?php echo BASE_URL; ?>commercial-exterior-lighting-electrical">Lighting / Electrical</a>
	                                                    <a href="<?php echo BASE_URL; ?>outdoor-living-residential-landscape">Outdoor Living</a>
	                                                    <a href="<?php echo BASE_URL; ?>parks-playground-products">Park &amp; Recreation</a>
	                                                    <a href="<?php echo BASE_URL; ?>commercial-pavers-masonry-blocks-rocks">Paver, Masonry, Blocks, Rocks</a>
	                                                    -->
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 28); ?>">Business Services &amp; Software</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 30); ?>">Erosion Control</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1300); ?>">Fencing</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1139); ?>">Irrigation</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 32); ?>">Lighting / Electrical</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1214); ?>">Outdoor Living</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 33); ?>">Park &amp; Recreation</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 38); ?>">Paver, Masonry, Blocks, Rocks</a>
	                                                </div>
	                                            </li>
	                                            <li class="padding25">
	                                                <div> 
														<p class=" hidden-xs" style="font-size:14px; color:#2e2e2e; font-weight: 800; text-transform: capitalize;"></p>
														<br class="hidden-xs" />
														<!--
	                                                    <a href="<?php echo BASE_URL; ?>wildlife-commercial-landscape-pest-control">Pest / Wildlife</a>
	                                                    <a href="<?php echo BASE_URL; ?>wholesale-plant-accessories-and-soil-amendments">Plant Accessories &amp; Amendments</a>
	                                                    <a href="<?php echo BASE_URL; ?>pool-and-spa">Pool &amp; Spa</a>
	                                                    <a href="<?php echo BASE_URL; ?>landscape-art-sculpture-metal-stone-garden-ornaments">Scupture / Art / Garden Ornaments</a>
	                                                    <a href="<?php echo BASE_URL; ?>commercial-site-amenities">Site Amenities</a>
	                                                    <a href="<?php echo BASE_URL; ?>site-furnishings-receptacles">Site Furnishings &amp; Receptacles</a>
	                                                    <a href="<?php echo BASE_URL; ?>water-features-fountains-ponds-equipment">Water Features</a>
	                                                    <a href="<?php echo BASE_URL; ?>landscape-water-management">Water Management</a>
	                                                    -->
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1212); ?>">Pest / Wildlife</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1002); ?>">Plant Accessories &amp; Amenments</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1394) ?>">Pool &amp; Spa</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1301) ?>">Scupture / Art / Garden Ornaments</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 29) ?>">Site Amenities</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1215) ?>">Site Furnishings &amp; Receptables</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 41) ?>">Water Features</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1213) ?>">Water Management</a>
	
	                                                </div>
	                                            </li>
	                                            <li class="padding25">
	                                                <div>
	                                                    <p class="" style="font-size:14px; color:#2e2e2e; font-weight: 800; text-transform: capitalize;">Tools &amp; Equipment</p>
	                                                    <!--
	                                                    <a href="<?php echo BASE_URL; ?>landscape-installation-equipment">Installation Equipment</a>
	                                                    <a href="<?php echo BASE_URL; ?>landscape-maintenance-equipment">Maintenance Equipment</a>
	                                                    <a href="<?php echo BASE_URL; ?>tools-tires-and-replacement-parts">Tools &amp; Parts</a>
	                                                    -->
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1209) ?>">Installation Equipment</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1210) ?>">Maintenance Equipment</a>
	                                                    <a href="<?php echo BASE_URL.get_cate_slug($conn, 1211) ?>">Tools &amp; Parts</a>
	                                                </div>
	                                                <div class="padding20">
	                                                    <p class="padding20" style="font-size:14px; color:#2e2e2e; font-weight: 800; text-transform: capitalize;">Local Wholesale &amp; Plant Materials</p>
	                                                  	<form action="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php" method="post" name="zipformHeader" id="zipFormHeader">
																												<label>Search By Zip: <input type="text" name="zipcode" size="6" maxlength="5" autocomplete="off" /></label>
																												<input type="hidden" name="distance" value="100"></input>
																												<button type="submit" name="submit"><i class="fas fa-search-location"></i></button>
																											</form>		
	                                                </div>
	                                            </li>
																							<div style="background:#1b8047; text-align:center; width:100%; padding:5px; position:absolute; bottom:0px; left: 0px;">
																								<h5 style="color:white; text-transform:initial; font-size:18px; font-family: 'Nunito Sans', sans-serif;">Know what you’re looking for? <a href="#" style="color:white;"><strong>Request Product Details</strong></a></h5>
																							</div>
	                                        </ul>
	                                    </li>
																		
	                                    <li class="<? echo $newsActive ?> dropdown mmenu" style="position: relative;">
	                                        <a href="<?php echo BASE_URL; ?>research/news_landing.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News</a>
																					<ul class="dropdown-menu non-mega-menu" role="menu">
	                                          <li><a href="<?php echo BASE_URL; ?>research/news_landing.php">Trending</a></li>
																						<li><a href="<?php echo BASE_URL; ?>research/news_landing.php?news=association">Association</a></li>
																						<li><a href="<?php echo BASE_URL; ?>research/news_landing.php?news=legislation">Legislation</a></li>
																						<li><a href="<?php echo BASE_URL; ?>research/news_landing.php?news=education">Education</a></li>
																						<li><a href="<?php echo BASE_URL; ?>research/news_landing.php?news=economic">Economic</a></li>
																						<li><a href="<?php echo BASE_URL; ?>research/news_landing.php?news=industry">Industry</a></li>		
																						<li><a href="<?php echo BASE_URL; ?>research/news_landing.php?news=projects">Projects</a></li>		
	                                        </ul>
	                                    </li>
																			
	                                    <li class="dropdown mmenu <? echo $resourcesActive ?>" style="position: relative;">
	                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Resources</a>
	                                        <ul class="dropdown-menu non-mega-menu" role="menu">
	                                          <li><a href="<?php echo BASE_URL; ?>LandscapeProducts/magazine.php">Digital Magazines</a></li>
                                             <li><a href="<?php echo BASE_URL; ?>research/editorial/editorial-submissions.php">Submit Editorial</a></li>
	                                        </ul>
	                                    </li>
																			
	                                    <li class="dropdown mmenu" style="position: relative;">
	                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events</a>
																					 <ul class="dropdown-menu non-mega-menu" role="menu">
	                                          <li><a href="https://thelandscapeexpo.com" target="_blank">The Landscape Expo</a></li>
																						<li><a href="#" onClick="alert('Coming Soon')">More Coming Soon</a></li>			
	                                        </ul>
	                                    </li>
																			
																			<li class="dropdown mmenu" style="position: relative;">
	                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login</a>
	                                        <ul class="dropdown-menu non-mega-menu" role="menu">
                                            <li><a href="#" class="logInModalPopUpBtn">User Login</a></li>
	                                          <li><a href="#" id="menuSubscribeBtn">New Subscription Request</a></li>
                                            <li><hr></li>
																						<li><a href="<?php echo BASE_URL; ?>member/login2.php?t=v">Vendor Login</a></li>
																						<li><a href="<?php echo BASE_URL; ?>member/login2.php?t=v">Create New Vendor Account</a></li>
                                             <li><hr></li>
                                            <li><a href="<?php echo BASE_URL; ?>logout.php">Log Out</a></li>
                                            
<!--
																						<li><a href="#" onClick="alert('Coming Soon')">Renew/Update Subscriber Info</a></li>
																						<li><a href="#" onClick="alert('Coming Soon')">New Vendor/Services Listing</a></li>
																						<li><a href="#" onClick="alert('Coming Soon')">Edit Your Association</a></li>					
-->
	                                        </ul>
	                                    </li>
                
                
                                           <? if($_SESSION['loggedIn'] == true){  ?>
                          
                                          <style>

                                            @media only screen and (min-width: 1441px){

                                              .search__input {
                                                  width: 190px !important;
                                              }

                                            }

                                          </style>

                                          <li class="dropdown mmenu" style="position: relative; width: 33px; padding-left: 0px; padding-right: 0px; padding-top: 0px;">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="padding-left: 0px; padding-right: 0px; padding-top: 0px;">
                                              <img src="<?php echo BASE_URL; ?>images/la-user-icon.jpg" style="width: 33px; padding-bottom: 1px; position: relative; top: 9px;" >
                                            </a>
                                            <ul class="dropdown-menu non-mega-menu" role="menu" style="width: max-content;">
                                               <li><p style="font-size: 16px;">Welcome <? echo $_SESSION['name']; ?></p></li>
                                               <li><hr></li>
                                               <li><a href="<?php echo BASE_URL; ?>subscriptions/subscribe-renew.php?action=edit&id=<? echo $_SESSION['user'] ?>">Edit Profile</a></li>
                                              <li><a href="<?php echo BASE_URL; ?>logout.php">Log Out</a></li>
                                            </ul>
                                          </li>


                                        <? } ?>
																			
	                                </ul>

                          
                                    <div class="mobile-signup hidden-sm hidden-md hidden-lg" style="">
                                      <p style="text-transform:initial;">Sign up for LAWeekly newsletter</p>
                                      <form class="newsletter">
                                        <input type="text" style="background:white;" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-lg" style="">SIGN UP</button>
	                            		    </form>	
									                  </div>
									
                       
                                
                          
	                            </div>
								
								<!-- Mobile Search Box -->
								<div id="mob-search-block" style="width: 100%; position: absolute; height: 100vh;left: 0px; top: 0px; background: white; padding: 20px 20px; text-align:center; display: none; z-index: 999999;" class="sclose">
									<form action="<?php echo BASE_URL; ?>search-results-site.php" method="post">
										<button id="mob-search-btn-c" style="background:none; border:none; position:absolute; right:15px; top:5px"><i style="font-size:15px;"class="fa fa-close"></i></button>
										<input class="search__input" name="keywordSE4" type="text" style="padding: 7px 25px 7px 25px; margin-top: 15px; color: #434343; background-position: 0% center;" placeholder="What are you looking for?" value="<?php echo $_POST['keywordSE4']; ?>">
									</form>	
								</div>
								
							</div>
                        </div>
                    </div>
                </nav>
            </header>



			  <!-- Break for login end --> 



				







