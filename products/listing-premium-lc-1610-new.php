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
									  
									var y = document.forms["requForm"]["fname"].value;
									if (y == "") {
										alert("Name must be filled out");
										return false;
									}								  
									  
									var x = document.forms["requForm"]["email"].value;
									var atpos = x.indexOf("@");
									var dotpos = x.lastIndexOf(".");
									if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
										alert("Not a valid e-mail address");
										return false;
									}
									  
									var z = document.forms["requForm"]["phone"].value;
									if (z == "" || 9<=z.length) {
										alert("Phone must be filled out");
										return false;
									}									  
									  
									  
									  
				
                                
                                    if(!form.captcha.value.match(/^\d{5}$/)) {
                                      alert('Please enter the CAPTCHA digits in the box provided');
                                      form.captcha.focus();
                                      return false;
                                    }
                                
                                
                                    return true;
                                  }

                                
                                </script>


                                <form method="post" name="requForm" action="prod-request-mail-vendor.php" onsubmit="return checkForm(this);">
									<p style="font-weight: bold">Please fill out the informaiton below:</p>
                                <strong>Name:</strong> <input type="text" name="fname"  style="background-color:#B7B3B3"><br>
                                <strong>Email:</strong> <input type="email" name="email"  required style="background-color:#B7B3B3; width: 300px"><br>
                                <strong>Phone:</strong> <input type="text" name="phone" style="background-color:#B7B3B3"><br><br>
                                
                                
                                        
								<script>
                                
								$(document).ready(function(){
								$('input[name="all"],input[name="title"]').bind('click', function(){
								var status = $(this).is(':checked');
								$('input[type="checkbox"]', $(this).parent('li')).attr('checked', status);
								});
								});
                                
                                </script>

                              
                                    	<div>
                                        	<h3 id="numralh3">Featured Vendors for October&nbsp; &nbsp;<br></h3><br />
                                            
                                            
  
                                  </div>
                                      	<div align="	left">
                                        
                                            <div id="wrapper">
                                         <li style=" font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px">
                                         
                                         
                                         
                                          	<input type="checkbox" name="all" id="all" /> <label for='all'>&nbsp;Select All for information request from all companies</label><br><br>
                                          	
                                            <input type="checkbox" name="selected1" id="box_1" value="19997" /> <label for="box_1">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/aei/aei.php?id=<? echo $_GET[id] ?>&coid=19997" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_75b733c98d395aab97ab5272c299b974.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/aei/aei.php?id=<? echo $_GET[id] ?>&coid=19997" target="_blank">AEI Corporate</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For 50 Years, AEI Corporation has focused its energy and resources on two categories…<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gas grills and patio heating equipment. Today AEI is the first choice for COMMERCIAL<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GAS GRILLS and <a href="https://landscapearchitect.com/vendor-pages/aei/aei.php?id=<? echo $_GET[id] ?>&coid=19997" target="_blank"> More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                            
                                            <input type="checkbox" name="selected2" id="box_2" value="44118" /> <label for="box_2">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/arborgreen/arborgreen.php?id=<? echo $_GET[id] ?>&coid=44118" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_7aa834b3c0ae1c55a4c977907ef5fc50.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/arborgreen/arborgreen.php?id=<? echo $_GET[id] ?>&coid=44118" target="_blank">Arbor Green Pro</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forest trees and plants thrive without the addition of fertilizer because forest soils are rich<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in humus, which is replenished by the decay of leaves and other organic matter. In contrast,<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;urban forest trees live <a href="https://landscapearchitect.com/vendor-pages/arborgreen/arborgreen.php?id=<? echo $_GET[id] ?>&coid=44118" target="_blank">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected3" id="box_3" value="13560" /> <label for="box_3">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/delawarequarries/delawarequarries.php?id=<? echo $_GET[id] ?>&coid=13560" target="_blank"><img width="25%" src="https://landscapearchitect.com/products/images/logo_c5c647e7aeb4f4f3ea48e7616e1eb17b.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/delawarequarries/delawarequarries.php?id=<? echo $_GET[id] ?>&coid=13560" target="_blank">Delaware Quarries, Inc.</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delaware Quarries, Inc. has been in business for 70 years from our original location on the banks<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the historic Delaware River where we’ve quarried and sold the finest quality stone for building<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;landscaping purposes. Our <a href="https://landscapearchitect.com/vendor-pages/delawarequarries/delawarequarries.ph?id=<? echo $_GET[id] ?>&coid=13560" target="_blank">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            <input type="checkbox" name="selected4" id="box_4" value="12764" /> <label for="box_4">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/ez-trench/ez-trench.php?id=<? echo $_GET[id] ?>&coid=12764" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_be99ef5d05b183c20d1189afb533b65f.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/infinity/infinity.php?id=<? echo $_GET[id] ?>&coid=12764" target="_blank">E-Z Trench</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like a lot of small business owners, the Porters started E-Z Trench out of necessity.<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They had a need and found a solution. Their business at the time wasinstalling the<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;now outdated 12 ft <a href="https://landscapearchitect.com/vendor-pages/ez-trench/ez-trench.php?id=<? echo $_GET[id] ?>&coid=12764" target="_blank">More . . .</a></label><br><br>            
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected5" id="box_5" value="5017" /> <label for="box_5">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/gardenlight/gardenlight.php?id=<? echo $_GET[id] ?>&coid=5017" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_eb693f9858fc86e379e08a9df4d81634.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/gardenlight/gardenlight.php?id=<? echo $_GET[id] ?>&coid=5017" target="_blank">Garden Light Inc</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Established in 1996, Garden Light LED (GLLED) is a US manufacturer of high-quality LED<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lighting fixtures. Every electronic component and all LED fixtures are proudly handcrafted<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in our Tampa, Fla., factory <a href="https://landscapearchitect.com/vendor-pages/gardenlight/gardenlight.php?id=<? echo $_GET[id] ?>&coid=5017" target="_blank">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected6" id="box_6" value="44093" /> <label for="box_6">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/itb/itb.php?id=<? echo $_GET[id] ?>&coid=44093" target="_blank"><img width="15%" src="https://landscapearchitect.com/products/images/logo_ITBLogo.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/itb/itb.php?id=<? echo $_GET[id] ?>&coid=44093" target="_blank">ITB Company</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serving landscape professionals for over 20 years, ITB Co., Inc. is proud to be the United States <br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;distributor for Birchmeier high quality sprayers, spreaders, and specialty equipment."Smart &amp;<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Swiss SEIT 1876" means over 140 years of <a href="https://landscapearchitect.com/vendor-pages/itb/itb.php?id=<? echo $_GET[id] ?>&coid=44093" target="_blank">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected7" id="box_7" value="14829" /> <label for="box_7">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/moonvalley/moonvalley.php?id=<? echo $_GET[id] ?>&coid=14829" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_73ac431b13894c183b5c123da3be8033.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/moonvalley/moonvalley.php?id=<? echo $_GET[id] ?>&coid=14829" target="_blank">Moon Valley Nurseries</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At Moon Valley Nurseries, we realize that the trees that you plant for your clients are usually the
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;most visible pieces of the landscape. Not only can they make or break the client's
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/moonvalley/moonvalley.php">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                            
                                            <input type="checkbox" name="selected8" id="box_8" value="10585" /> <label for="box_8">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/slt/slt.php?id=<? echo $_GET[id] ?>&coid=10585" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_26975b7128ecc61494c1652619e36f65.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/slt/slt.php?id=<? echo $_GET[id] ?>&coid=10585" target="_blank">Super Lawn Technologies</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello, My name is Tony Bass. I’m the founder & CEO at Super Lawn Trucks. I’m also the<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;co-author of The E-Myth Landscape Contractor: Why Most Landscape Companies Don’t Work<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp; What To Do About It. I’m publishing this ad because we are introducing a brand new <a href="https://landscapearchitect.com/vendor-pages/slt/slt.php?id=<? echo $_GET[id] ?>&coid=10585" target="_blank">More . . .</a></label><br><br> 
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                                                                       
                                            <input type="checkbox" name="selected9" id="box_9" value="4572" /> <label for="box_9">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/superthrive/superthrive.php?id=<? echo $_GET[id] ?>&coid=4572" target="_blank"><img width="20%" src="https://landscapearchitect.com/products/images/logo_c284254384cc510a35f90e73bc6ef37f.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/superthrive/superthrive.php?id=<? echo $_GET[id] ?>&coid=4572" target="_blank">The Vitamin Institute</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When searching for a product that will yield superior growing results, professionals<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recognize that heavy-duty landscaping jobs require a strong and reliable solution. Today<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and for over 75 years, the unique <a href="https://landscapearchitect.com/vendor-pages/superthrive/superthrive.php?id=<? echo $_GET[id] ?>&coid=4572" target="_blank">More . . .</a></label><br><br>
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                                                                        
                                            <input type="checkbox" name="selected10" id="box_10" value="43639" /> <label for="box_10">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/trenchbadger/trenchbadger.php?id=<? echo $_GET[id] ?>&coid=43639" target="_blank"><img width="25%" src="https://landscapearchitect.com/products/images/logo_142d6464df61f0a09b9a42481e090c24.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/trenchbadger/trenchbadger.php?id=<? echo $_GET[id] ?>&coid=43639" target="_blank">TrenchBadger</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For those serious about trenching, the hand-held TrenchBadger Pro 12 is your tool of choice like<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no other on the market. Its lightweight (just 25 lbs.), versatile, portable design makes it easy<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to transport, trench your toughest jobs, and <a href="https://landscapearchitect.com/vendor-pages/trenchbadger/trenchbadger.php?id=<? echo $_GET[id] ?>&coid=43639" target="_blank">More . . .</a></label><br><br> 
                                            
<!-- Horizontal Bar Start -->
<div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
<!-- Horizontal Bar End -->                                            
                                            
                                                                                        
                                                                                       
                                            <input type="checkbox" name="selected11" id="box_11" value="43915" /> <label for="box_11">&nbsp;&nbsp;&nbsp;<a href="https://landscapearchitect.com/vendor-pages/yardmax/yardmax.php?id=<? echo $_GET[id] ?>&coid=43915" target="_blank"><img width="25%" src="https://landscapearchitect.com/products/images/logo_YardmaxLogo.jpg"></a><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><a href="https://landscapearchitect.com/vendor-pages/yardmax/yardmax.php?id=<? echo $_GET[id] ?>&coid=43915" target="_blank">Yardmax</a></strong><br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YARDMAX&trade; two-stage snow blowers deliver performance and quality that can be counted on,<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;job after job. Providing optimal user-experience, the snow blowers include premium design<br>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enhancements as standard, at no additional cost. <a href="https://landscapearchitect.com/vendor-pages/yardmax/yardmax.php">More . . .</a></label><br><br>
                                            
                                          
                                            
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