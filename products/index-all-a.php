
<?
include("lo_top-main2-prod.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	    <?
	include $include_path . "lo_header-main2-js.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
			
<div style="position:relative; left: -50px; top:-40px; z-index: 0">
			
                   <center><h3>Featured Products</h3></center>
	</div>
			
                    			
                    			
<div style="position:relative; left: 0px; top:10px; z-index: 0">

	<!-- Slide Start -->
	
	<style>
* {box-sizing:border-box}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: transparent;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

	

<div class="slideshow-container">
<!-- Slide Show Start -->


      
									<?
									
										// Product Script Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 


										// start for getting products from table

											$key = "TLE-LBtrans";

											$sql = "SELECT * FROM vendor_product WHERE featured = 'yes' ";
											$result = $conn->query($sql);									
									
										// products rotating section
												$i = 1;
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "10") {
													if ($i == 1){
													echo '<div class="mySlides fade"><div class="numbertext">' . $i . '/ 10</div><a href="https://landscapearchitect.com/template-prod-a.php?number=' . $row[id] .'" target="_blank"><center><img style="max-height: 300px" src="https://landscapearchitect.com/products/images/' . $row[photo] .'" alt="Product Image"></center></a><div class="text"><h3 style="color: #FFFFFF; background-color: rgba(0, 0, 0, 0.75)">'. $row[product_name] . '</h3></div></div>';
										 			$i++;
													}
													else {
													echo '<div class="mySlides fade"><div class="numbertext">' . $i . '/ 10</div><a href="https://landscapearchitect.com/template-prod-a.php?number=' . $row[id] .'" target="_blank"><center><img style="max-height: 300px" src="https://landscapearchitect.com/products/images/' . $row[photo] .'" alt="Product Image"></center></a><div class="text"><h3 style="color: #FFFFFF; background-color: rgba(0, 0, 0, 0.75)">'. $row[product_name] . '</h3></div></div>';
										 			$i++;								
													}
													
													
     											}													
											}
										// Product Script End
									?>



<!-- Slide Show End -->
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>   
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>     
  <span class="dot"></span>     
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

	<!-- Slide End -->
	
                    			
                    			
        <hr><br><br>            			
                    			
                    	
                    	<table>
                    		<tr>
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>			
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>
							</tr>
                    		<tr>
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>			
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>
							</tr>								
                    		<tr>
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>			
                    			<td>
                    			 	<a href="https://landscapearchitect.com/template-prod-a.php?number=10557" target="_blank" class="col-sm-4">
 									<figure>
										<center><img width="50%" src="https://landscapearchitect.com/imgz2/Product1.jpg" alt="image"><br><br>
										<figcaption style="width:50%"><span style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:bold; text-align: center">Outdoor Shower Co.<br>
										Outdoor Shower Company manufactures and distributes 304 and 316 grade stainless . . .</span></figcaption></center>									
									</figure>
                                	</a>
								</td>
							</tr>								
						</table>
			
			</td>
			
			
			
		</tr>
	</table>




	








<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>