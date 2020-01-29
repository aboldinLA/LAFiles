<?

  if($_POST && "all required variables are present") {

    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

  }





include("lo_top-test.inc");

										// Get Person Start

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


										// start for the banner add counting and getting from table

											$key = $_GET[id];



											$sql = "SELECT * FROM subscribe WHERE id ='" . $key . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$name =  $row[first_name] . " " . $row[last_name];
													$email = $row[email];
													$phone = $row[phone];
											}



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

	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
<div>

<div>
        <center><p style="font-family:Helvetica, Arial, sans-serif; font-weight:bold; font-size:24px">Welcome <? echo $name ?></p></center><br>

	<center><p style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:20px">As a valued subscriber to LA and/or LC/DBM<br>
   Welcome to</p>
	<span style="font-size:24px; font-weight:bold; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">LandscapeOnline's Featured Products Center</span><br>
	<p style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:20px">Simply click on the the link to view the online Vendor Profiles Center<br>
    - or - <br />
	<span style="font-weight:bold;">To request product information from one or more vendors,</span> <br />
	select the box <img src="https://landscapearchitect.com/products/ppp-checkbox.jpg" /> &nbsp;and hit the submit button. </p></center><br>

<!-- Old Code Start -->

<?
$requiredClasses[] = 'base/vendor_listing-js.php';

include "lol_common.inc";
$secthdr = "Vendor Profile";


$V = new vendor();

?>

<div class="tb2" style="width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
<span style="font-size:16px">Featured Vendors&nbsp;&nbsp;</span>
</div><br />

    
								<script type="text/javascript">
                                
                                  function checkForm(form)
                                  {
                                
                                    if(!form.captcha.value.match(/^\d{5}$/)) {
                                      alert('Please enter the CAPTCHA digits in the box provided');
                                      form.captcha.focus();
                                      return false;
                                    }
                                
                                
                                    return true;
                                  }
                                
                                </script>


                                <form method="post" action="prod-request-mail-vendor.php" onsubmit="return checkForm(this);">
                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                                
                                
                                        
								<script>
                                
								$(document).ready(function(){
								$('input[name="all"],input[name="title"]').bind('click', function(){
								var status = $(this).is(':checked');
								$('input[type="checkbox"]', $(this).parent('li')).attr('checked', status);
								});
								});
                                
                                </script>

                              
                                    	<div>
                                        	<h3 id="numralh3">Featured Vendors for September &nbsp; &nbsp;<br></h3><br />
                                            
                                            
  
                                  </div>
                                      	<div align="	left">
                                        
                                            <div id="wrapper">
                                         <li style=" font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px">
                                         
                                         
                                         
                                          	<input type="checkbox" name="all" id="all" /> <label for='all'>&nbsp;Select All for information request from all companies</label><br><br>
                                            <input type="checkbox" name="selected1" id="box_1" value="10371" /> <label for="box_1">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/unique/unique.php?id=<? echo $_GET[id] ?>&coid=10371" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_0a45fbafadc491dad27a68389dbfcfcf.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/unique/unique.php?id=<? echo $_GET[id] ?>&coid=10371" target="_blank">Unique Lighting Systems&reg;</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unique Lighting Systems&reg; has introduced a new LED FLEX-FIT&trade; feature offering ease of
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;installation, versatility and reliable performance on nine of its most popular brass and copper<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/unique/unique.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                            
                                            <input type="checkbox" name="selected2" id="box_2" value="41943" /> <label for="box_2">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/rootwell/rootwell.php?id=<? echo $_GET[id] ?>&coid=41943" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_4f5fa6a6209c564df4438761ad3eb4bb.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/rootwell/rootwell.php?id=<? echo $_GET[id] ?>&coid=41943" target="_blank">Rootwell Products, Inc.</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IT'S A MATTER OF LIFE AND DEATH... for your trees and plants Rootwell Pro-318 • Saves<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Water / Saves Trees Multi-featured sub-surface tree and shrub irrigation and oxygenation<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/rootwell/rootwell.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected3" id="box_3" value="14829" /> <label for="box_3">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/moonvalley/moonvalley.php?id=<? echo $_GET[id] ?>&coid=14829" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_73ac431b13894c183b5c123da3be8033.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/moonvalley/moonvalley.php?id=<? echo $_GET[id] ?>&coid=14829" target="_blank">Moon Valley Nurseries</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At Moon Valley Nurseries, we realize that the trees that you plant for your clients are usually the
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;most visible pieces of the landscape. Not only can they make or break the client's
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/moonvalley/moonvalley.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected4" id="box_4" value="11796" /> <label for="box_4">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/kifco/kifco.php?id=<? echo $_GET[id] ?>&coid=11796" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_685c15f5352b8c24773f9b98ec47fff0.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/kifco/kifco.php?id=<? echo $_GET[id] ?>&coid=11796" target="_blank">Kifco Irrigation</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The all new Kifco Model E140 is great for landscape professionals who manage multiple<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;properties with lower water pressures available. The E140 can run on pressures and flows<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as low as 13 gpms <a href="https://landscapearchitect.com/vendor-pages/kifco/kifco.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected5" id="box_5" value="41444" /> <label for="box_5">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/water-fs/water-fs.php?id=<? echo $_GET[id] ?>&coid=41444" target="_blank"><img width="25%" src="https://landscapearchitect.com/products/images/logo_687af28091d2061057ab482f0a0370cc.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/water-fs/water-fs.php?id=<? echo $_GET[id] ?>&coid=41444" target="_blank">Water Feature Solutions</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Water Feature Solutions basins were designed by a landscaper to make water features fast<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and easy to install. We've eliminated the mess and hassle of pond liner, and our<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;heavy-duty basins hold <a href="https://landscapearchitect.com/vendor-pages/water-fs/water-fs.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected6" id="box_6" value="42484" /> <label for="box_6">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/lawn-debbi/lawn-debbi.php?id=<? echo $_GET[id] ?>&coid=42484" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_095f3aa1df4a12735e7fc9448c20a643.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/lawn-debbi/lawn-debbi.php?id=<? echo $_GET[id] ?>&coid=42484" target="_blank">IBBZ Inc.</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This new loader can be ordered in 2 standard lengths or custom ordered. The loader can be<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fitted with a dump basket that loads up to 14 bushels of debris (up to 200lbs) or a Lawn Debbi<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trash bin <a href="https://landscapearchitect.com/vendor-pages/lawn-debbi/lawn-debbi.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected7" id="box_7" value="12476" /> <label for="box_7">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/stoneage/stoneage.php?id=<? echo $_GET[id] ?>&coid=12476" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_44989f7ed9233caad6e7f3e98316920a.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/stoneage/stoneage.php?id=<? echo $_GET[id] ?>&coid=12476" target="_blank">Stone Age Manufacturing, Inc.</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stone Age Manufacturing is the industry leader in modular masonry outdoor living kits, with the<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;largest line of fireplaces, wood-fired pizza ovens, kitchen islands, fire pits, and barbecue<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/stoneage/stoneage.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected8" id="box_8" value="4441" /> <label for="box_8">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/otterbine/otterbine.php?id=<? echo $_GET[id] ?>&coid=4441" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_ba08bc2a8cdbf773281749fc3128dde1.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/otterbine/otterbine.php?id=<? echo $_GET[id] ?>&coid=4441" target="_blank">Otterbine Barebo, Inc.</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Otterbine Aerators provide natural solutions to water quality problems that threaten the healthy<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ecosystems of ponds and lakes, while creating attractive displays that can be enjoyed<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/otterbine/otterbine.php">More . . .</a></label><br><br> 
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                                                                       
                                            <input type="checkbox" name="selected9" id="box_9" value="42448" /> <label for="box_9">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/brave/brave.php?id=<? echo $_GET[id] ?>&coid=42448" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_2ade3a44552a3a70a57f506b2ed84831.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/brave/brave.php?id=<? echo $_GET[id] ?>&coid=42448" target="_blank">Brave</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brave's 18-inch trencher, model BRPT, is powered by a Honda GX160 and constructed with<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;heavy gauge, powder coated steel for durability. Its compact size and built-in lift handles<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make it easy <a href="https://landscapearchitect.com/vendor-pages/brave/brave.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                                                                        
                                            <input type="checkbox" name="selected10" id="box_10" value="12092" /> <label for="box_10">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/earthway/earthway.php?id=<? echo $_GET[id] ?>&coid=12092" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_8f3bcdbbd47bfb2221c0a9c87ae7c1b5.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/earthway/earthway.php?id=<? echo $_GET[id] ?>&coid=12092" target="_blank">Earthway Products, Inc.</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Are you the type of person who has a Swiss Army knife? Well, the Flex-Select&reg; Series spreaders<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are what you have been waiting for! The Flex-Select&reg; models feature easily interchangeable<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shut-off <a href="https://landscapearchitect.com/vendor-pages/earthway/earthway.php">More . . .</a></label><br><br> 
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                                                                       
                                            <input type="checkbox" name="selected11" id="box_11" value="20176" /> <label for="box_11">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/stoneagecreations/stoneagecreations.php?id=<? echo $_GET[id] ?>&coid=20176" target="_blank"><img width="25%" src="https://landscapearchitect.com/products/images/logo_69fbaeb462d10f5db969a9df37aa60a9.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/stoneagecreations/stoneagecreations.php?id=<? echo $_GET[id] ?>&coid=20176" target="_blank">Stone Age Creations</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stone Age Creations makes it easy to add functional beauty to any landscape with our wide<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selection of unique, fine quality, natural stone benches, birdbaths, water features, lanterns,<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;animals, and <a href="https://landscapearchitect.com/vendor-pages/stoneagecreations/stoneagecreations.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected12" id="box_12" value="43022" /> <label for="box_12">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/infinity/infinity.php?id=<? echo $_GET[id] ?>&coid=43022" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_2869caee4d711fddcd105b6ff9be657f.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/infinity/infinity.php?id=<? echo $_GET[id] ?>&coid=43022" target="_blank">Infinity Canopy, Inc.</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Infinity Canopy is the most dynamic and versatile shade system in the world. Its patented<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modular design allows it to adapt to any space, be configured in one or multiple colors,<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and change <a href="https://landscapearchitect.com/vendor-pages/infinity/infinity.php">More . . .</a></label><br><br> 
											
											                                                                                      
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected13" id="box_13" value="12764" /> <label for="box_13">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/ez-trench/ez-trench.php?id=<? echo $_GET[id] ?>&coid=12764" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_be99ef5d05b183c20d1189afb533b65f.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/infinity/infinity.php?id=<? echo $_GET[id] ?>&coid=12764" target="_blank">E-Z Trench</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like a lot of small business owners, the Porters started E-Z Trench out of necessity.<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They had a need and found a solution. Their business at the time wasinstalling the<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;now outdated 12 ft <a href="https://landscapearchitect.com/vendor-pages/ez-trench/ez-trench.php?id=<? echo $_GET[id] ?>&coid=12764" target="_blank">More . . .</a></label><br><br>                                                        
                                            
                                         </li>
                                        </div>
                                        
								<script>
	
									function myButtonFunction5() {
										
										var comp = "<?php echo $comp_name ?>";
										var coem = "<?php echo $email ?>";
										var coid = "<?php echo $id ?>";
										window.open("https://landscapearchitect.com/products/prod-request2.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
									   }
											
											
											
								</script>                                                 
                                        
                                        
                                            <h3 id="numralh3"><p><img src="captcha-form.php" width="150" height="30" border="1" alt="CAPTCHA"></p>
                                            <p><input type="text" size="6" maxlength="5" name="captcha" value="" style="width:100px; height:20px; background-color:#BFBFBF; border:solid; border-color:#000000; color:#000000; padding-left:5px" placeholder="Input Numbers"><br>
                                            <small>copy the digits from the image<br>
											into this box, then hit submit.</small></p>                                           
                                        <input  type="submit" value="Submit for Vendor Info" style="height:20px; width:200px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888"></h3>
  
                                                                                 
                                                    
                                       </div><br>
                                       
             
                               </form>        
                                       
                                       
                                       




<!-- Old Code End -->

    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div>
    	<?
		include $include_path . "banner-unvers-js2.inc";
		?>
	</div> <br>
        
        
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div style="position:relative; left:-700px; top:2500px">
	<center><? include $include_path . "lo_footer-main2.inc"; ?><br><br></center>
	</div>

</div>