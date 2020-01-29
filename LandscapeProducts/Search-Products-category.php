 <?
// Top Section - HTML
include("lad_top-main.inc");

	$uname2 = $_SESSION['name'];

	$uname3 = $_SESSION['lname'];

	$ucode = $_SESSION['user'];


?>
	
	
<?

// Top Section - Nav Section
include("lad_header-main3.inc");


// Leaderboard Banner Ads
include("search-engine-leaderboard-banners-sc.inc");
include("land-products-meta.inc");

?>
<title><? echo $title; ?></title>
<meta name="keywords"content="<? echo $metakeyword; ?>">


<script>
	
	//resets the cat dropdown 
	
	window.onbeforeunload = function () {
		    var s = document.getElementById("catSelectBox");
      s.onchange = function(){
        location.href = this.options[this.selectedIndex].value
      }
      s.selectedIndex = 0;
	}
	
  
	
		
</script>





<style>

	.flexbox-container {
		    display: flex;
    width: 100%;
    min-width: 1200px;
    margin: 0 auto;
    max-width: 2000px;
    padding-left: 10px;
    padding-right: 40px;
	}
	
	.sidebar {
		flex: 0 !important;
		margin-top: -105px;
	}
	
	.searchBarRow {

		padding-left: 40px;
		padding-right: 40px;
		margin: 0 auto;
		float: none;
	}
	
	.main {
		margin-top: 10px;
	}
	
	#keywordBox {
		width: 80%; 
		height: 31px; 
		box-shadow: 5px 5px 5px #888888; 
		padding: 3px; 
		position: relative; 
		top: -17px; 
		font-size: 20px; 
	}
	
		.keywordContain {
		margin-top: 70px;
margin-bottom: -6px;
	}
    
    
        #myList li{ display:none;
        }
        #loadMore {
            color:green;
            cursor:pointer;
        }
        #loadMore:hover {
            color:black;
        }
        #showLess {
            color:red;
            cursor:pointer;
        }
        #showLess:hover {
            color:black;
        }    



</style>





	
  <div style="position: relative; top: -20px">
	  

	  
	  
	  
	  <!-- Slider Start -->
	  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <!-- Add this css File in head tag-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


 
	  
<link href="css/slider-new.css" rel="stylesheet" id="bootstrap-css">
	  


        <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="4000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
		
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
				
                <div class="item active">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink1; ?>">
                    <img src="https://landscapearchitect.com/banner/<? echo $picBan1; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink2; ?>">
                   	<img src="https://landscapearchitect.com/banner/<? echo $picBan2; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink3; ?>">
                    <img src="https://landscapearchitect.com/banner/<? echo $picBan3; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        

			<script src="js/slider-new.js"></script> 
	  
	  
	  
	  
	  
	<!-- Slider End --> 
	  
	<link href="css/lad-format.css" rel="stylesheet" id="bootstrap-css">
	  
	  
	  
	  
	
	  
	  
	
	  
  
	  

	  
  	  			<div style="position: relative; top: 75px">
						
                            

	  

	  
							
	
							
							
				<div class="flexbox-container">  <!-- took 'colShift' class off -->

				  <div class="main col-md-9" style="position: relative; top: -75px">
					  
                      <h1>Product Search</h1>
                      
                      
			
					  		<section>
                                
                                
									<?
									
						                  include('connect3.inc');
                                
                                
                                            $xwordSE4 = $_GET['xwordSE3'];
                                
                                        
                                            if (empty($xwordSE4)) {  
                                
                                                $keywordSE4 = $_GET['keywordSE3'];
                                                
                                            } else {
                                                
                                                $keywordSE4 = $xwordSE4;
                                                
                                                $xname = $_GET['keywordSE3'];
                                                
                                            }
                                
                                
                                
                                
                                            $iCount = 1;
                                            $xCount = 1;
                                            $tCount = 1;
                                            $yCount = 1;                                
                                
                                
                                            if (!empty($keywordSE4)) {

                                                $keywordSE = $keywordSE4; 

                                            } elseif ($_POST['keywrd'] === NULL) {

                                                $keywordSE = $items2; 

                                            } elseif ($_POST['keywrd'] === "") {

                                                $keywordSE = $items2; 

                                            } else {

                                                $keywordSE = $_POST['keywrd']; 

                                            }	
                                
                                
						$sql = 	"SELECT * FROM new_vendor WHERE (`profile` LIKE '%" . $keywordSE . "%' OR `company_name` LIKE '%" . $keywordSE . "%' OR `xlist` LIKE '%" . $keywordSE . "%') AND status > '2' ORDER BY company_name ASC";			                                
                                
						$result = $conn->query($sql);
																   
						$rowcount=mysqli_num_rows($result);
                                
                        $baseCount = $rowcount;        
                                
                             echo '<span style="font-size: 30px;">Vendors</span>';
                                
                               if ($rowcount == 0) {
                                   
                                  echo '<p style="position:relative; left:25px; font-weight: bold">No Results Found</p>';
                                   
                               } 
                                
                                
							while($row = mysqli_fetch_assoc($result)) {
                                
                                
                                
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash                                
                                
                                
																   
                                                                    // Counts for sets start


                                                                        if ($iCount == 1) {

                                                                            if ($xCount == $baseCount) {

                                                                                echo "<div class='container' style='width:130%'><div class='row'><div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>".$row['product_name']."</p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button'>View Profile</a></p></figcaption></figure></div></div></div>";
                                                                                $iCount = 1;

                                                                            } else {

																                echo "<div class='container' style='width:130%'><div class='row'><div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>".$row['product_name']."</p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button'>View Profile</a></p></figcaption></figure></div>";
                                                                                $iCount++; 
                                                                                $xCount++;       

                                                                            }


                                                                        } elseif ($iCount == 2) {

                                                                            if ($xCount == $baseCount) {

																                echo "<div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>".$row['product_name']."</p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button'>View Profile</a></p></figcaption></figure></div></div></div>";
                                                                                $iCount = 1;

                                                                            } else {

																                echo "<div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>".$row['product_name']."</p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button'>View Profile</a></p></figcaption></figure></div>";
                                                                                $iCount++;                                                            
                                                                                $xCount++;       
                                                                            }


                                                                        } elseif ($iCount == 3) {


																            echo "<div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "'><figure><div class='limagelad'><img class='limagelad3' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><figcaption><p>".$row['product_name']."</p><hr><p class='text-center'>" . $deLogo . "<a href='https://landscapearchitect.com/landscape-design/" . $string . "/" . $row["id"] . "' class='btn btn-success' role='button'>View Profile</a></p></figcaption></figure></div></div></div>";

                                                                            $iCount = 1;
                                                                            $xCount++;       

                                                                        }


                                                                    // Counts for sets end                                
                                
                                
                            }
                                
                                
                        //Search for Products        
                                
                                
                                
						$sql = 	"SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id = vendor_product.vendor_id WHERE (`product_name` LIKE '%" . $keywordSE . "%' OR `description` LIKE '%" . $keywordSE . "%' OR `vendor_product`.`xlist` = '" . $keywordSE . "') AND new_vendor.status > '2' AND series_product = '0' ORDER BY Rand()";			                                
                                
						$result = $conn->query($sql);
																   
						$rowcount=mysqli_num_rows($result);
                                
                        $baseCount11 = $rowcount;        
                                
                             echo '<br><br><span style="font-size: 30px;">Products</span>';
                                
                               if ($rowcount == 0) {
                                   
                                  echo '<p style="position:relative; left:25px; font-weight: bold">No Results Found</p>';
                                   
                               }                                 
                                
                                
							while($row = mysqli_fetch_assoc($result)) {
                                
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash		                                
                                
                                
                                
                                
                                                                   // Counts for sets start


                                                                        if ($tCount == 1) {

                                                                            if ($yCount == $baseCount11) {

                                                                                echo "<div class='container' style='width:130%'><div class='row'><div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div class='limage-full' style=\"background-image: url('https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/".$row['photo']."&w=242')\"></div><figcaption><h4 class='coName'>".$row['company_name']."</h4><h5>".$row['product_name']."</h5></figcaption></figure></a></div></div></div>";
                                                                                $tCount = 1;

                                                                            } else {

																                echo "<div class='container' style='width:130%'><div class='row'><div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div class='limage-full' style=\"background-image: url('https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/".$row['photo']."&w=242')\"></div><figcaption><h4 class='coName'>".$row['company_name']."</h4><h5>".$row['product_name']."</h5></figcaption></figure></a></div>";
                                                                                $tCount++; 
                                                                                $yCount++;       

                                                                            }


                                                                        } elseif ($tCount == 2) {

                                                                            if ($yCount == $baseCount11) {

																                echo "<div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div class='limage-full' style=\"background-image: url('https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/".$row['photo']."&w=242')\"></div><figcaption><h4 class='coName'>".$row['company_name']."</h4><h5>".$row['product_name']."</h5></figcaption></figure></a></div></div></div>";
                                                                                $tCount = 1;

                                                                            } else {

																                echo "<div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div class='limage-full' style=\"background-image: url('https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/".$row['photo']."&w=242')\"></div><figcaption><h4 class='coName'>".$row['company_name']."</h4><h5>".$row['product_name']."</h5></figcaption></figure></a></div>";
                                                                                $tCount++;                                                            
                                                                                $yCount++;       
                                                                            }


                                                                        } elseif ($tCount == 3) {


																            echo "<div class='col-md-3'><a href='https://landscapearchitect.com/landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div class='limage-full' style=\"background-image: url('https://landscapearchitect.com/optimized-images/timthumb.php?src=https://landscapearchitect.com/products/images/".$row['photo']."&w=242')\"></div><figcaption><h4 class='coName'>".$row['company_name']."</h4><h5>".$row['product_name']."</h5></figcaption></figure></a></div></div></div>";

                                                                            $tCount = 1;
                                                                            $yCount++;       

                                                                        }


                                                                    // Counts for sets end                                        
                                
                                
                            }                                
                                                                
                                

                                
                                
                                
								   ?>                                
                                
                                

			<!--						
                                
                                <ul id="myList">
                                    <li>One</li>
                                    <li>Two</li>
                                    <li>Three</li>
                                    <li>Four</li>
                                    <li>Five</li>
                                    <li>Six</li>
                                    <li>Seven</li>
                                    <li>Eight</li>
                                    <li>Nine</li>
                                    <li>Ten</li>
                                    <li>Eleven</li>
                                    <li>Twelve</li>
                                    <li>Thirteen</li>
                                    <li>Fourteen</li>
                                    <li>Fifteen</li>
                                    <li>Sixteen</li>
                                    <li>Seventeen</li>
                                    <li>Eighteen</li>
                                    <li>Nineteen</li>
                                    <li>Twenty one</li>
                                    <li>Twenty two</li>
                                    <li>Twenty three</li>
                                    <li>Twenty four</li>
                                    <li>Twenty five</li>
                                </ul>
                                <div id="loadMore">Load more</div>
                                <div id="showLess">Show less</div>



                                <p class="totop"> 
                                    <a href="#top">Back to top</a> 
                                </p>
                                
                                <script>

                                     $(document).ready(function () {
                                        size_li = $("#myList li").size();
                                        x=3;
                                        $('#myList li:lt('+x+')').show();
                                        $('#loadMore').click(function () {
                                            x= (x+5 <= size_li) ? x+5 : size_li;
                                            $('#myList li:lt('+x+')').show();
                                        });
                                        $('#showLess').click(function () {
                                            x=(x-5<0) ? 3 : x-5;
                                            $('#myList li').not(':lt('+x+')').hide();
                                        });
                                    });
       
       
                                </script>
                                
                                -->
                                
                                
                                
                                
                                
                                
					 					  
					  		</section>
                      
                      
                      
                      
                      
					  
							<!-- Details End -->
					  

					  
					  

					</div> 
					
					

					
					

				  <div class="sidebar">
					  

					  							
							<!-- Keyword Search Start -->
                      
                      <?
                      
                            if (!empty($xname)) {
                                
                               $keywordSE = $xname; 
                                
                            }
                      
                      
                      
                      
                      ?>
                              
					  
							<div class="keywordContain">

<!--										 <h3 style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 24px;">Keyword Search: <? echo $keywordSE; ?></h3>-->

											<form method="post" action="Search-Products.php">

											

												<input type="text" name="keywrd" value="<? echo $keywordSE ?>" id="keywordBox" placeholder="Keyword Search"><input type="image" value="Go" width="34px" src="https://landscapearchitect.com/images/mag-button.png"  class ="sch" id="sch" onmouseover="this.src='https://landscapearchitect.com/images/mag-button-over.png';"  onmouseout="this.src='https://landscapearchitect.com/images/mag-button.png';" style="position: relative; top: -7px" /><br><br>
													<!-- <input type="submit" value="Submit" style="background-color: #4fb548; position: relative; left: -10px; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"> -->

												

											</form>

								  </div>					  
					  
							<!-- Keyword Search End -->								  
					  					  
					  
							<!-- Banners Start -->
					  
					  
							<div style="position: relative; z-index: 50000; padding-bottom: 50px">
					  
							<?

							// Category Banners
							include("banner-LAD-sc.inc");

							?>
								
				  			</div>	
								
					  
							<!-- Banners End -->

				  </div>	



				</div>									
							
							
							
							
	
			  
			  
	
				  
			
		

	
  </div>


	
	


				
				
				
				
				
				
				
  </div>
</div>
	
	
	
	


	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>
	
	