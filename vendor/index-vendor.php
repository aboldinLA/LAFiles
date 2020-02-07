<? 
  include '../modules/configuration.inc';
  include '../modules/db.php';
	
	include $rootInclude.'la-common-top.php';

	include $rootInclude . 'la-common-header.inc'; 

	/*include $rootInclude . 'connect4.inc';*/

?>

<section class="tool_page full_width vendorPages">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBarNoSearch">
	

				
				<div class="white_side full_width">
					<h2 class="mobtoggle">ALL CATEGORIES</h2>
					<div class="full_width" id="mobile_slide">


						<!-- sidebar accordian menu -->
						<? include $rootInclude.'la-common-sidebar-menu.inc'; ?>


					 </div><!-- #mobslide --> 
        </div><!-- /.white_side -->
				
				
        
    </div><!-- /.col-lg-3 -->
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
      
      
                        
                <?php

										$webVenId = $_GET['id'];	

										$sql = "SELECT * FROM new_vendor WHERE id='" . $webVenId . "' ";
										$result = $conn->query($sql);									


										 while($row = mysqli_fetch_assoc($result)) {
                       
                ?>
                
          <div style="position: absolute; right: 0px; top: 10; z-index: 200; border-top-right-radius: 5px; overflow: hidden;">
            <a href='<?php echo BASE_URL; ?>vendor/logoff.php'><input type='image' src='/imgz2/logoff-button.jpg' style="box-shadow: -5px 5px 5px #888888;" border='0' id="logOffBtn" /></a>
          </div>
      
          
        <div class="headerBanner col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
          <h3>
            <span style="font-weight: 400">Welcome</span> <span style="font-weight: 800"><? echo $row['company_name'] ?></span>
            <p>Scroll down for <strong>Sales Lead Retrieval</strong> or to edit your company information, add or delete search engine categories, update regional outlets, and manage product profile.</p>     
          </h3>
          
          <div class="black_v"></div>
        </div>
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center_section">
      
          
          
              
          
            <div class="row topNewsSectionArticles">
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <img style="width: 100%" src="<?php echo BASE_URL; ?>products/images/<? echo $row['logo']; ?>">
                    <div class="txt full_width companyInfo">
                        <h5><? echo $row['company_name']; ?></h5>
                        <p style="margin-bottom: 2px; font-weight: 600;">Profile:</p>
                        <p class="companyEditProfile"><? echo $row['profile']; ?></p>
                        <p style="margin-bottom: 2px; font-weight: 600;">Address:</p>
                        <p><? echo $row['address'] . ' ' . $row['state'] . ' ' . $row['zip']; ?></p>
                        <div class="phoneFaxContainer">
                           <div style="width: 50%;">
                             <p style="margin-bottom: 2px; font-weight: 600;">Phone:</p>
                             <p><? echo $row['phone']; ?></p>
                          </div>
                          <div style="width: 50%;">
                             <p style="margin-bottom: 2px; font-weight: 600;">Fax:</p>
                             <p><? echo $row['fax']; ?></p>
                          </div>
                        </div>
                        <p style="margin-bottom: 2px; font-weight: 600;">Website:</p>
                        <p> <a style="margin-top: 0px;" href="http://<? echo $row['website']; ?>"><? echo $row['website']; ?></a></p>
                        <p style="margin-bottom: 2px; font-weight: 600;">Email:</p>
                        <p><? echo $row['email']; ?></p>
                        <p style="margin-bottom: 2px; font-weight: 600;">Contact Page:</p>
                        <p style="margin-bottom: 15px;"><a style="margin-top: 0px;" href="http://<? echo $row['contact_us']; ?>"><? echo $row['contact_us']; ?></a></p>
                        
                        <a href="#" class="button_style" style="color: white; margin-top: 0px; display: flex; align-items: center; justify-content: center;" id="editCompanyBtn">EDIT COMPANY INFO</a>
                        <p style="font-size: 14px; font-style: italic; margin-top: 5px;">Last Updated: <? $editTime = substr($row['edit_date'], 0, 10);  echo $editTime; ?></p>
                    </div><!-- /.txt -->
               </div><!-- /.col-lg-5 -->
              
              
              
                
              
              
              <div class="col-lg-6 col-md-6 img_fit col-lg-offset-1 col-md-offset-1 statusTiersContainer">
                      
                

                <!-- Regional Tiers Start -->	

                    <?php


                      $tier =  $row['status'];
                      $ventype = $row['vendor_type_id'];

                       
                       
						$string =  $row['company_name']; // Trim String

						$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

						$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

						$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

						$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	

						$bString = $string;
                       


                       if (($ventype == 4) || ($ventype == 6)) {


                        $hstate = $row['state'];


                        $sql433 = "SELECT DISTINCT state FROM new_vendor WHERE outlets='" . $webVenId . "' AND info_request = '1' ORDER BY state ASC ";
                        $result433 = $conn->query($sql433);


                        while($rowStates = mysqli_fetch_assoc($result433)) {

                            $tstate =  $rowStates['state'];

                            if ($tstate == 'AL') { $stateAL = 'yes'; }
                            if ($tstate == 'AK') { $stateAK = 'yes'; }
                            if ($tstate == 'AZ') { $stateAZ = 'yes'; }
                            if ($tstate == 'AR') { $stateAR = 'yes'; }
                            if ($tstate == 'CA') { $stateCA = 'yes'; }															
                            if ($tstate == 'CO') { $stateCO = 'yes'; }															
                            if ($tstate == 'CT') { $stateCT = 'yes'; }
                            if ($tstate == 'DE') { $stateDE = 'yes'; }															
                            if ($tstate == 'FL') { $stateFL = 'yes'; }															
                            if ($tstate == 'GA') { $stateGA = 'yes'; }															
                            if ($tstate == 'HI') { $stateHI = 'yes'; }															
                            if ($tstate == 'ID') { $stateID = 'yes'; }															
                            if ($tstate == 'IL') { $stateIL = 'yes'; }															
                            if ($tstate == 'IN') { $stateIN = 'yes'; }	
                            if ($tstate == 'IA') { $stateIA = 'yes'; }															
                            if ($tstate == 'KS') { $stateKS = 'yes'; }	
                            if ($tstate == 'KY') { $stateKY = 'yes'; }															
                            if ($tstate == 'LA') { $stateLA = 'yes'; }															
                            if ($tstate == 'ME') { $stateME = 'yes'; }															
                            if ($tstate == 'MD') { $stateMD = 'yes'; }															
                            if ($tstate == 'MA') { $stateMA = 'yes'; }															
                            if ($tstate == 'MI') { $stateMI = 'yes'; }															
                            if ($tstate == 'MN') { $stateMN = 'yes'; }															
                            if ($tstate == 'MS') { $stateMS = 'yes'; }															
                            if ($tstate == 'MO') { $stateMO = 'yes'; }															
                            if ($tstate == 'MT') { $stateMT = 'yes'; }															
                            if ($tstate == 'NE') { $stateNE = 'yes'; }	
                            if ($tstate == 'NV') { $stateNV = 'yes'; }															
                            if ($tstate == 'NH') { $stateNH = 'yes'; }															
                            if ($tstate == 'NJ') { $stateNJ = 'yes'; }															
                            if ($tstate == 'NM') { $stateNM = 'yes'; }															
                            if ($tstate == 'NY') { $stateNY = 'yes'; }															
                            if ($tstate == 'NC') { $stateNC = 'yes'; }															
                            if ($tstate == 'ND') { $stateND = 'yes'; }	
                            if ($tstate == 'OH') { $stateOH = 'yes'; }															
                            if ($tstate == 'OK') { $stateOK = 'yes'; }															
                            if ($tstate == 'OR') { $stateOR = 'yes'; }															
                            if ($tstate == 'PA') { $statePA = 'yes'; }	
                            if ($tstate == 'RI') { $stateRI = 'yes'; }															
                            if ($tstate == 'SC') { $stateSC = 'yes'; }															
                            if ($tstate == 'SD') { $stateSD = 'yes'; }															
                            if ($tstate == 'TN') { $stateTN = 'yes'; }															
                            if ($tstate == 'TX') { $stateTX = 'yes'; }															
                            if ($tstate == 'UT') { $stateUT = 'yes'; }															
                            if ($tstate == 'VT') { $stateVT = 'yes'; }	
                            if ($tstate == 'VA') { $stateVA = 'yes'; }															
                            if ($tstate == 'WA') { $stateWA = 'yes'; }															
                            if ($tstate == 'WV') { $stateWV = 'yes'; }															
                            if ($tstate == 'WI') { $stateWI = 'yes'; }
                            if ($tstate == 'WY') { $stateWY = 'yes'; }															

                          }


                      ?>


                      <div class="statusContainer">

                        <h6>Your Local Wholesale &amp; Plant Search Status is:</h6>

                        <div class="wholesaleStatusBoxContainer">
                           <div class="wholesaleStatusBox" style="<? if ($tier==12){ echo "background-color: chartreuse";} ?>">
                              <div class='tooltip5 tooltipAll text-center'>You Dominate<span class='tooltiptext'>You are active in the LandscapeOnline Local Wholesale and Plant Material Search Engine, with your Logo at the top of all related searches in your chosen state(s), links to an expanded Vendor Profile, lists and locations of your outlets, and the logos of the major brands each outlet offers. Also includes premiere listing in the relevant vendor listings in both the Landscape Architect and Landscape Contractor magazines  (Requires <a href="https://landscapearchitect.com/abante" target="_blank" style="color: #ffffff;"><u>Online purchase</u></a> or booth space in the upcoming <a href="<?php echo BASE_URL;?>TLE-LB/index-tle-2018.php" target="_blank" style="color: #ffffff;"><u>Landscape Expo</u></a>.)</span></div>
                          </div>

                          <div class="wholesaleStatusBox" style="<? if ($tier==2){ echo "background-color: chartreuse";} ?>">
                             <div class='tooltip5 tooltipAll text-center'>You Have a Basic Listing<span class='tooltiptext'>Your location with your phone number and a link to Google maps will appear for each location in the state(s) with your outlets.</span></div>
                          </div>
                        </div>
                     	
                         <p style=" color:#9B6A17; text-decoration: underline; font-size: 18px; margin-top: 10px;"><a href="<?php echo BASE_URL; ?>abante/index.php?rt=product/product&product_id=137" target="_blank">Enhance My Profile!</a> </p>
                        
                      </div>


                      <h6 style=" margin-top: 30px;">Your Dominator States are:</h6>
                      <h3 style="font-size: 20px; border-bottom: none;"><span style="color: chartreuse; -webkit-text-stroke: 0.5px #000000;">Home State</span>&nbsp;&nbsp;&nbsp;<span style="color: #5cedf2; -webkit-text-stroke: 0.5px #000000;">Outlet State</span></h3>

                      <div class="stateBoxContainer">

                        <div class="stateBox" style=" <? if ($hstate == 'AL'){ echo "background-color: chartreuse"; } elseif ($stateAL == 'yes') { echo "background-color: #5cedf2"; } ?>">AL</div>
                        <div class="stateBox" style=" <? if ($hstate == 'HI'){ echo "background-color: chartreuse"; } elseif ($stateHI == 'yes') { echo "background-color: #5cedf2"; } ?>">HI</div>
                        <div class="stateBox" style=" <? if ($hstate == 'MA'){ echo "background-color: chartreuse"; } elseif ($stateMA == 'yes') { echo "background-color: #5cedf2"; } ?>">MA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'NM'){ echo "background-color: chartreuse"; } elseif ($stateNM == 'yes') { echo "background-color: #5cedf2"; } ?>">NM</div>
                        <div class="stateBox" style=" <? if ($hstate == 'SD'){ echo "background-color: chartreuse"; } elseif ($stateSD == 'yes') { echo "background-color: #5cedf2"; } ?>">SD</div>
                        <div class="stateBox" style=" <? if ($hstate == 'AK'){ echo "background-color: chartreuse"; } elseif ($stateAK == 'yes') { echo "background-color: #5cedf2"; } ?>">AK</div>
                        <div class="stateBox" style=" <? if ($hstate == 'ID'){ echo "background-color: chartreuse"; } elseif ($stateID == 'yes') { echo "background-color: #5cedf2"; } ?>">ID</div>
                        <div class="stateBox" style=" <? if ($hstate == 'MI'){ echo "background-color: chartreuse"; } elseif ($stateMI == 'yes') { echo "background-color: #5cedf2"; } ?>">MI</div>
                        <div class="stateBox" style=" <? if ($hstate == 'NY'){ echo "background-color: chartreuse"; } elseif ($stateNY == 'yes') { echo "background-color: #5cedf2"; } ?>">NY</div>
                        <div class="stateBox" style=" <? if ($hstate == 'TN'){ echo "background-color: chartreuse"; } elseif ($stateTN == 'yes') { echo "background-color: #5cedf2"; } ?>">TN</div>
                        <div class="stateBox" style=" <? if ($hstate == 'AZ'){ echo "background-color: chartreuse"; } elseif ($stateAZ == 'yes') { echo "background-color: #5cedf2"; } ?>">AZ</div>
                        <div class="stateBox" style=" <? if ($hstate == 'IL'){ echo "background-color: chartreuse"; } elseif ($stateIL == 'yes') { echo "background-color: #5cedf2"; } ?>">IL</div>
                        <div class="stateBox" style=" <? if ($hstate == 'MN'){ echo "background-color: chartreuse"; } elseif ($stateMN == 'yes') { echo "background-color: #5cedf2"; } ?>">MN</div>
                        <div class="stateBox" style=" <? if ($hstate == 'NC'){ echo "background-color: chartreuse"; } elseif ($stateNC == 'yes') { echo "background-color: #5cedf2"; } ?>">NC</div>
                        <div class="stateBox" style=" <? if ($hstate == 'TX'){ echo "background-color: chartreuse"; } elseif ($stateTX == 'yes') { echo "background-color: #5cedf2"; } ?>">TX</div>
                        <div class="stateBox" style=" <? if ($hstate == 'AR'){ echo "background-color: chartreuse"; } elseif ($stateAR == 'yes') { echo "background-color: #5cedf2"; } ?>">AR</div>
                        <div class="stateBox" style=" <? if ($hstate == 'IN'){ echo "background-color: chartreuse"; } elseif ($stateIN == 'yes') { echo "background-color: #5cedf2"; } ?>">IN</div>
                        <div class="stateBox" style=" <? if ($hstate == 'MS'){ echo "background-color: chartreuse"; } elseif ($stateMS == 'yes') { echo "background-color: #5cedf2"; } ?>">MS</div>
                        <div class="stateBox" style=" <? if ($hstate == 'ND'){ echo "background-color: chartreuse"; } elseif ($stateND == 'yes') { echo "background-color: #5cedf2"; } ?>">ND</div>
                        <div class="stateBox" style=" <? if ($hstate == 'UT'){ echo "background-color: chartreuse"; } elseif ($stateUT == 'yes') { echo "background-color: #5cedf2"; } ?>">UT</div>
                        <div class="stateBox" style=" <? if ($hstate == 'CA'){ echo "background-color: chartreuse"; } elseif ($stateCA == 'yes') { echo "background-color: #5cedf2"; } ?>">CA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'IA'){ echo "background-color: chartreuse"; } elseif ($stateIA == 'yes') { echo "background-color: #5cedf2"; } ?>">IA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'MO'){ echo "background-color: chartreuse"; } elseif ($stateMO == 'yes') { echo "background-color: #5cedf2"; } ?>">MO</div>
                        <div class="stateBox" style=" <? if ($hstate == 'OH'){ echo "background-color: chartreuse"; } elseif ($stateOH == 'yes') { echo "background-color: #5cedf2"; } ?>">OH</div>
                        <div class="stateBox" style=" <? if ($hstate == 'VT'){ echo "background-color: chartreuse"; } elseif ($stateVT == 'yes') { echo "background-color: #5cedf2"; } ?>">VT</div>
                        <div class="stateBox" style=" <? if ($hstate == 'CO'){ echo "background-color: chartreuse"; } elseif ($stateCO == 'yes') { echo "background-color: #5cedf2"; } ?>">CO</div>
                        <div class="stateBox" style=" <? if ($hstate == 'KS'){ echo "background-color: chartreuse"; } elseif ($stateKS == 'yes') { echo "background-color: #5cedf2"; } ?>">KS</div>
                        <div class="stateBox" style=" <? if ($hstate == 'MT'){ echo "background-color: chartreuse"; } elseif ($stateMT == 'yes') { echo "background-color: #5cedf2"; } ?>">MT</div>
                        <div class="stateBox" style=" <? if ($hstate == 'OK'){ echo "background-color: chartreuse"; } elseif ($stateOK == 'yes') { echo "background-color: #5cedf2"; } ?>">OK</div>
                        <div class="stateBox" style=" <? if ($hstate == 'VA'){ echo "background-color: chartreuse"; } elseif ($stateVA == 'yes') { echo "background-color: #5cedf2"; } ?>">VA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'CT'){ echo "background-color: chartreuse"; } elseif ($stateCT == 'yes') { echo "background-color: #5cedf2"; } ?>">CT</div>
                        <div class="stateBox" style=" <? if ($hstate == 'KY'){ echo "background-color: chartreuse"; } elseif ($stateKY == 'yes') { echo "background-color: #5cedf2"; } ?>">KY</div>
                        <div class="stateBox" style=" <? if ($hstate == 'NE'){ echo "background-color: chartreuse"; } elseif ($stateNE == 'yes') { echo "background-color: #5cedf2"; } ?>">NE</div>
                        <div class="stateBox" style=" <? if ($hstate == 'OR'){ echo "background-color: chartreuse"; } elseif ($stateOR == 'yes') { echo "background-color: #5cedf2"; } ?>">OR</div>
                        <div class="stateBox" style=" <? if ($hstate == 'WA'){ echo "background-color: chartreuse"; } elseif ($stateWA == 'yes') { echo "background-color: #5cedf2"; } ?>">WA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'DE'){ echo "background-color: chartreuse"; } elseif ($stateDE == 'yes') { echo "background-color: #5cedf2"; } ?>">DE</div>
                        <div class="stateBox" style=" <? if ($hstate == 'LA'){ echo "background-color: chartreuse"; } elseif ($stateLA == 'yes') { echo "background-color: #5cedf2"; } ?>">LA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'NV'){ echo "background-color: chartreuse"; } elseif ($stateNV == 'yes') { echo "background-color: #5cedf2"; } ?>">NV</div>
                        <div class="stateBox" style=" <? if ($hstate == 'PA'){ echo "background-color: chartreuse"; } elseif ($statePA == 'yes') { echo "background-color: #5cedf2"; } ?>">PA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'WN'){ echo "background-color: chartreuse"; } elseif ($stateWV == 'yes') { echo "background-color: #5cedf2"; } ?>">WV</div>
                        <div class="stateBox" style=" <? if ($hstate == 'FL'){ echo "background-color: chartreuse"; } elseif ($stateFL == 'yes') { echo "background-color: #5cedf2"; } ?>">FL</div>
                        <div class="stateBox" style=" <? if ($hstate == 'ME'){ echo "background-color: chartreuse"; } elseif ($stateME == 'yes') { echo "background-color: #5cedf2"; } ?>">ME</div>
                        <div class="stateBox" style=" <? if ($hstate == 'NH'){ echo "background-color: chartreuse"; } elseif ($stateNH == 'yes') { echo "background-color: #5cedf2"; } ?>">NH</div>
                        <div class="stateBox" style=" <? if ($hstate == 'RI'){ echo "background-color: chartreuse"; } elseif ($stateRI == 'yes') { echo "background-color: #5cedf2"; } ?>">RI</div>
                        <div class="stateBox" style=" <? if ($hstate == 'WI'){ echo "background-color: chartreuse"; } elseif ($stateWI == 'yes') { echo "background-color: #5cedf2"; } ?>">WI</div>
                        <div class="stateBox" style=" <? if ($hstate == 'GA'){ echo "background-color: chartreuse"; } elseif ($stateGA == 'yes') { echo "background-color: #5cedf2"; } ?>">GA</div>
                        <div class="stateBox" style=" <? if ($hstate == 'MD'){ echo "background-color: chartreuse"; } elseif ($stateMD == 'yes') { echo "background-color: #5cedf2"; } ?>">MD</div>
                        <div class="stateBox" style=" <? if ($hstate == 'NJ'){ echo "background-color: chartreuse"; } elseif ($stateNJ == 'yes') { echo "background-color: #5cedf2"; } ?>">NJ</div>
                        <div class="stateBox" style=" <? if ($hstate == 'SC'){ echo "background-color: chartreuse"; } elseif ($stateSC == 'yes') { echo "background-color: #5cedf2"; } ?>">SC</div>
                        <div class="stateBox" style=" <? if ($hstate == 'WY'){ echo "background-color: chartreuse"; } elseif ($stateWY == 'yes') { echo "background-color: #5cedf2"; } ?>">WY</div>

                      </div>








                  <!-- Regional Tiers End -->					

                  <?    } elseif (($ventype != 4) || ($ventype != 6)) {      ?>	



                  <!-- National Tiers Start -->	

                       <h6>Your Product Search Status is:</h6>
                
                        <div style="clear: both; margin-bottom: 15px; display: flex; flex-wrap: wrap; font-size: 24px;">
                          <div class="productSearchStatusBox" style="<? if ($tier==18){ echo "background-color: chartreuse";} ?>">
                            <div class='tooltip5 tooltipAll'>Platinum<span class='tooltiptext'>Congratulations! Your products and profile will appear at the top of all related product searches. As a Platinum Advertiser you can host an unlimited number of products, complete with pictures, descriptions and any related CAD Files or Spec Sheets.(Requires minimum of 8 pages of print over 12 month schedule)</span></div>
                          </div>
                          <div class="productSearchStatusBox" style="<? if ($tier==16){ echo "background-color: chartreuse";} ?>">
                            <div class='tooltip6 tooltipAll'>Gold<span class='tooltiptext'>Appearing in the search results immediately following Platinum Advertisers, Golden Advertisers can host up to 50 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets. (Requires Marketplace Double or minimum of 2.4 pages of print over 12 month schedule)</span></div>
                          </div>
                          <div class="productSearchStatusBox" style="<? if ($tier==14){ echo "background-color: chartreuse";} ?>">
                            <div class='tooltip7 tooltipAll'>Silver<span class='tooltiptext'>Appearing in the search results immediately following Golden Advertisers, Silver Advertisers can host up to 25 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets.  (Requires Marketplace Single, minimum of 1.2 pages of print or purchase of separate Vendor Profile )</span></div>
                          </div>
                          <div class="productSearchStatusBox" style="<? if ($tier==10){ echo "background-color: chartreuse";} ?>">
                            <div class='tooltip8 tooltipAll'>Bronze<span class='tooltiptext'>Start your program with the LASN Annual Directory and you can host up to 10 products, complete with pictures, descriptions and any related CAD Files or Spec Sheets, for 3 Full Months. Your main product appears online for the entire year.  (Requires Product Profile in Annual Specifier's Guide.) </span></div>
                          </div>
                           <div class="productSearchStatusBox" style="<? if ($tier==12){ echo "background-color: chartreuse";} ?>">
                             <div class='tooltip9 tooltipAll'>Exhibitor<span class='tooltiptext'>Next in line, Trade Show Advertisers receive up to 10 products per 100 sq ft of exhibit space, complete with pictures, descriptions and any related CAD Files or Spec Sheets. (Requires Booth Space in the upcoming Landscape Expo)</span></div>
                          </div>
                           <div class="productSearchStatusBox" style="<? if ($tier==2){ echo "background-color: chartreuse";} ?>">
                             <div class='tooltip10 tooltipAll'>Inactive<span class='tooltiptext'>You can view your profile through the link below, but it is not accessible through the "What Are You Shopping For?" search engines. GOOD NEWS . . . You can have an active profile by tomorrow if you contact us today! <br>Just contact your sales rep below:</span></div>
                          </div>
                        </div>

                  <!-- National Tiers End -->	


                  <?   }  	?>  



                    <p style=" font-weight: bold; margin-bottom: 20px; clear: both;">As a current advertiser or exhibitor your company products are active in thousands of product searches every week</p>

                    <a href="#" onClick="openProfileWindow();">
                      <h5 style='text-decoration:underline; margin-bottom: 15px; margin-top: 30px; position: relative; z-index: 20000'><a href="https://landscapearchitect.com/landscape-design-products/<? echo $bString; ?>/<? echo $webVenId; ?>">View Your Current Profile</a></h5>
                    </a>


                    <p>To Upgrade Your Profile, or to speak with someone about your current profile status contact your advertising representative as indicated below:</p>


                    <h6 style="margin-top: 30px;">Sales Representatives:</h6>
                    <p style="margin-bottom: 5px;">If Your Company Name Begins With: <span style="font-weight: 800">A - L</span></p>
                    <p style="font-weight: 600; font-size: 18px; margin-bottom: 15px;">Mark Pack  - (714) 979-5276 x111&nbsp;&nbsp;<a href="mailto:mailto:mpack@landscapearchitect.com?subject=Advertising Information Request&body=Please send me information about my LandscapeOnline vendor profile and any other Landscape Communications, Inc. products that would be relevant for my company.">Email Mark</a></p>
                    <p style="margin-bottom: 5px;">If Your Company Name Begins With: <span style="font-weight: 800">M - Z</span></p>
                    <p style="font-weight: 600; font-size: 18px">Clint Phipps  - (714) 979-5276 x114&nbsp;&nbsp;<a href="mailto:cphipps@landscapearchitect.com?subject=Advertising Information Request&body=Please send me information about my LandscapeOnline vendor profile and any other Landscape Communications, Inc. products that would be relevant for my company.">Email Clint</a></p>


                
                
               </div><!-- /.col-lg-7 -->
						</div>
          
          

        <?     }  ?>
        <!-- Company Info Section End -->     
								
      </div>		
      
      <h2 class="vendorSectionTitles">Sales Lead Retrieval</h2>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center_section">				
								
		  
      
			<!-- Lead Info Section Start -->
      <div class="salesLeadRetrievalContainer row">
                      
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              
            <img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" style="width: 80%; max-width: 400px" />

             <p style="margin-top: 10px;">
               All advertisers receive sales leads updated every Friday by 5:00 PM. To view your leads, by date, select the date range below and click on "<strong>Retrieve Leads for Selected Week</strong>"
             </p>

           
          </div>       
        
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
             <h6 style="margin-bottom: 0px">Leads for the Week of:</h6>
              <p style="font-size:12px; color:#F00">(Make sure to click on a week in the box below)</p>
            <form name="leadsform" method="POST" action="index-vendor-leads.php?action=week&id=<? echo $webVenId ?>">
                    <input type="hidden" name="week3" value="cat" >

                    <div class="weekStyleContainer">
                      <select multiple name="week" size="4" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:250px; height:75px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; border: 2px inset; margin-left:auto; text-align: center">
                        <option name="dlistweek" value="none">Select a Week</option>
                        <?php


                        $sql = "SELECT distinct `week`, `created` FROM leads WHERE `vendor_id`=" . $webVenId . " ORDER BY `leads`.`created` DESC LIMIT 0, 450";
                        $result = $conn->query( $sql );
				  		
				  		$$datenew = 0;

                        while ( $row = mysqli_fetch_assoc( $result ) ) {


                          $a = $row[ 'week' ];
                          $weekcsv = $a;

                          date_default_timezone_set( 'America/Los_Angeles' );
                          $yWeek = substr( $a, -4 );
                          $mWeek = substr( $a, 0, 2 );
                          $dWeek = substr( $a, 2, 2 );
                          $date = $yWeek . '-' . $mWeek . '-' . $dWeek;
                          $date1 = strtotime( $date );
                          $date2 = strtotime( "+7 day", $date1 );
							
							

                          $leftpart = '&nbsp;&nbsp;' . date( 'm.d.y', $date1 ) . ' - ' . date( 'm.d.y', $date2 );
							
						  $dlist = '<option name="dlistweek" value="' . $a . '">' . $leftpart . '</option>';							
							
							if ($date1 != $datenew) {
																
                          		echo $dlist . '<br>';
								
								$datenew =  $date1;
								
							}

                        }


                        ?>
                      </select>
                      <input type="submit"  value="Retrieve Leads for Selected Week" class="button_style" style="margin-top: 15px;">
                    </div>

                  </form>
          </div>       
        
        
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <form name="leadsform" method="POST" action="index-vendor-leads.php?action=custom&id=<? echo $webVenId ?>">
                <input type="hidden" name="week3" value="cat" >
                    
                    <h6 style="margin-bottom: 0px">Custom Date Range:</h6>
                    <i>Please enter date yyyy-mm-dd in the field below (ex: Start 2014-01-01, End 2014-01-31)</i>
                
                    <div class="input_fl" style="margin-left: -8px; margin-right: -8px;">
                      
                      <div class="col-sm-6">
                        <label>Start Date:</label>
                        <input type="text" name="small">
                      </div>
                      
                      <div class="col-sm-6">
                        <label>End Date:</label>
                        <input type="text" name="large">
                      </div>
                      
                      <div class="col-sm-8" style="padding-left: 8px; margin-top: 15px;">
                        <input type="submit" name="find" value="View Custom Leads" class="button_style" style="margin-top: 0px;">
                      </div>
                      
                       <div class=" col-sm-4" style="margin-top: 15px;">
                           <input type= "reset" value = "Reset" style="font-size: 14px; width: 100%; min-height: 36px; text-align: left;" class="resetHover">
                      </div>
                                            
                 
                      
                     
                      
                    </div>

              </form>
          </div>       
        
        

       </div>
       <!-- Lead Info Section End -->

				
		</div>		
      
      <h2 class="vendorSectionTitles">Company Search Categories - <span style="font-size: 20px">[Edit]</h2>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center_section">					
							
							
				<!-- Category Info Section Start -->
                                        
				<div style="text-align: center">
					<img src="<?php echo BASE_URL; ?>lol-logos/LA-LC-Local-Wholesale-search-engines.jpg" width="100%" style="margin: 0 auto; max-width: 650px;"><br><br>
					<p>These categories are used by the <strong>Keyword Search Engine</strong> to help our 65,000+ monthly users to find you company.
							When editing, it is important to select only those categories which represent products that you currently sell.
							LCI reserves the right to edit your categories.</p>
				</div>
	
	
			<h6 class="text-center" style="margin-bottom: 0px; margin-top: 20px;">Your Current Categories Are: </h6>

    
				<div class='currentCategoriesList'>


							<?php

									$sql = "SELECT * FROM new_vendor WHERE id='" . $webVenId . "' ";
									$result = $conn->query($sql);									


										 while($row = mysqli_fetch_assoc($result)) {

												$xCats = $row['xlist'];

												$xCats2 = explode(",", $row['xlist']);

												$animals_list = array($row['xlist']);


												foreach($xCats2 as $array_values){

													$xNums = $array_values;

													$sql = "SELECT * FROM xlist WHERE id='" . $xNums . "' ";
													$result = $conn->query($sql);	                                                    

													while($row = mysqli_fetch_assoc($result)) {

															echo "<p class='currentCategory'>" . $row['name'] . "</p>";

														}

													}                                                   

											}  

												if (empty($xCats)) {

														echo "You have no categories selected.";


												} else {

													foreach($sortIndex as $idx => $sub) {  ?>
													 <?= $list[$idx]['name'] ?> <br />
												 <? }          
												} ?>
				</div>
		
		
		
			  <!-- Category Info Section End -->
								
								
								
				
		</div>		
        	<a name="defpro"></a>
      <h2 class="vendorSectionTitles">
        Products / Project Photos 
       
      </h2>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productContainerHeader">					
							
				

				<!-- Photo Edit Start -->       

				<!-- Photo Section --> 

       

		
                
								
						<div class="tabVenProducts">
							<button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">Category View</button>


							<!-- Category Options set Start -->

							<select onchange="if (this.value) window.location.href=this.value" id="fixed" style="width: 40%" class="productsRefineSelect">

								<option value="<?php echo BASE_URL; ?>vendor/index-vendor.php?action=edit&tview=allp&id=<? echo $webVenId ?>" selected ><?  if (($sName == "allp") || ($sName == "")) { echo "Refine Category Search"; } elseif ($sName == "other") { echo $xChoice; } ?></option>
								<option value="<?php echo BASE_URL; ?>vendor/index-vendor.php?action=edit&tview=allp&id=<? echo $webVenId ?>#defpro" >All Products</option>  

								<?php

											$sql33 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id WHERE vendor_id='" . $webVenId . "' ORDER BY name ASC";
											$result33 = $conn->query($sql33);    

											$xname = "none";

											while($row = mysqli_fetch_array($result33)) { 

												if ($xname != $row['name']) {

															echo '<option value="'.BASE_URL.'vendor/index-vendor.php?action=edit&tview=other&xlist=' . $row['xlist'] . '&id=' . $webVenId . '#defpro" >' . $row['name'] . '</option>';

															$xname = $row['name'];                                              

												}
											}

								?>

							</select>
							<!-- Category Options set end -->
							

               <a onclick="myFunction77()">
                 <img width="100%" style="margin-left: 20px;" src="<?php echo BASE_URL; ?>vendor/images/reorder-button.png" onmouseover="this.style.cursor='pointer'" class="viewBarAddProductsBtn">
              </a>
              						  <a href="<?php echo BASE_URL; ?>LandscapeProducts/index-vendor-detail-edit-add.php?number=<? echo $webVenId; ?>" target="_blank">
                <img width="100%" src="<?php echo BASE_URL; ?>vendor/images/add-button-new.png" class="viewBarAddProductsBtn">
              </a>

						</div><!-- /.tabVenProducts -->
								
								
								
        </div>
        
														

			<?php
        
            $catXlist  = $_GET['xlist'];
            $catView  = $_GET['tview'];
            $sName = $_GET['tview'];
           
           
           
            if (($catView == "allp") || ($catView == "")) {     

                    

                    $sql22 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id WHERE vendor_id='" . $webVenId . "' ORDER BY name ASC";
                    $result22 = $conn->query($sql22); 
      
                    $xname = "none";
      
      
                        while($row = mysqli_fetch_array($result22)) {
                            
                            if ($xname != $row['name']) {
                            
                                echo '<h3 class="styledCatHead col-lg-12">' . $row['name'] . '</h3>';
                                
                                $xId = $row['id'];
                                
                                $xname = $row['name'];
                                

                                $sql = "select * from vendor_product where vendor_id='" . $webVenId . "' AND xlist='" . $xId . "' AND `series_product` = '0' ORDER BY photo_time DESC";
                                $result = $conn->query($sql); 

                                $rowcount=mysqli_num_rows($result);


                                 echo "<div class='row'>";


                                while($row = mysqli_fetch_array($result)) {


                                    $string =  $row['product_name']; // Trim String

                                    $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

                                    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

                                    $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

                                    $string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
                                  
                                  
                                  
                                    if (empty($row['pdff']) || $row['pdff'] == 'none') {
                                        $cadPdf = '';
                                    } else {
                                        $cadPdf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/3.png" style="width:100%;" /></a></div>';
                                    }                                                     

                                    if (empty($row['cadd']) || $row['cadd'] == 'none') {
                                        $cadDwg = '';
                                    } else {
                                        $cadDwg = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/2.png" style="width:100%;" /></a></div>';
                                    }     

                                    if (empty($row['cadd_2']) || $row['cadd_2'] == 'none') {
                                        $cadDwf = '';
                                    } else {
                                        $cadDwf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/dwf.jpg" style="width:100%;" /></a></div>';
                                    }                                               

                                    if (empty($row['cadd_3']) || $row['cadd_3'] == 'none') {
                                        $cadDxf = '';
                                    } else {
                                        $cadDxf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/dxf.jpg" style="width:100%;" /></a></div>';
                                    }         

                                    if (empty($row['skup']) || $row['skup'] == 'none') {
                                        $cadSkp = '';
                                    } else {
                                        $cadSkp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/skp.jpg" style="width:100%;" /></a></div>';
                                    }                                                        

                                    if (empty($row['vwxx']) || $row['vwxx'] == 'none') {
                                        $cadVwx = '';
                                    } else {
                                        $cadVwx = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/vwx.jpg" style="width:100%;" /></a></div>';
                                    }                                                        

                                    if (empty($row['mediap']) || $row['mediap'] == 'none') {
                                        $cadMedia = '';
                                    } else {
                                        $cadMedia = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/1.png" style="width:100%;" /></a></div>';
                                    }                                                        

                                    if (empty($row['zipp']) || $row['zipp'] == 'none') {
                                        $cadZip = '';
                                    } else {
                                        $cadZipp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/4.png" style="width:100%;" /></a></div>';
                                    }     
                                    
                                   
                                

                                strlen($cadPdf . $cadDwg . $cadDwf. $cadDxf . $cadSkp . $cadVwx . $cadMedia . $cadZip) < 10
                                  ? $cadDetals = '<div class="row" style="height: 45px;"><div class="col-md-12" ><p>No detail files have been uploaded for this product.</p></div></div>'
                                  : $cadDetals = '<div class="row" style="height: 35px;">' . $cadPdf . $cadDwg . $cadDwf. $cadDxf . $cadSkp . $cadVwx . $cadMedia . $cadZip . '</div>';



                                if ($row['imported'] == '0') { $actButton = 'active-button-new.png'; } else { $actButton = 'inactive-button-new.png'; };


                                echo '<div class="col-md-4 col-sm-6 col-xs-12 for_small vendorEditProduct">
                                      <article style="background: white; margin-bottom:20px;">
                                          <div class="post-thumb">
                                              <img src="'.BASE_URL.'products/images/' . $row['photo'] . '""  class="vendorEditProductImage" alt="">
                                          </div>

                                          <div class="" style="padding: 10px 10px 15px 10px;">
                                            <p class="productHeader">' . $row['product_name'] . '</p>
                                            <p style="height: 200px; overflow: auto;"><strong>Product Description:</strong><br>' . $row['description'] . '</p>
                                            <p style="height: 60px;"><strong>Product Link:</strong><br><a href="' . $row['web_photo'] . '">' . $row['product_name'] . '</a></p>
                                            <p><strong>Available Detail Files:</strong></p>' . $cadDetals . '
                                            <div class="row" style="height: 45px;">
                                              <div class="col-md-12" style="display: flex;">
                                                <a href="'.BASE_URL.'LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank" class="editActiveBtnLink" style="display: block;">
                                                  <img src="'.BASE_URL.'vendor/images/edit-button-new.png" style="width: 60%; display: block; margin: 0 auto;">
                                                </a>
                                                <a href="'.BASE_URL.'vendor/add-edit-construction.php" target="_blank" class="editActiveBtnLink" style="display: block;">
                                                  <img src="'.BASE_URL.'vendor/images/' . $actButton . '" style="width: 60%; display: block; margin: 0 auto;">
                                                </a>
                                              </div>
                                            </div>

                                          </div>
                                      </article>
                                    </div>';                                                



                                }

                                echo "</div>";


                            } //end if() 
                        } //end while   
              
              
      
            } elseif ($catView == 'other') {
                
                	
                //category header start
                $sql44 = "select * from xlist WHERE id='" . $catXlist . "'";
                $result44 = $conn->query($sql44);  


                while($row = mysqli_fetch_array($result44)) { 

                    $xChoice = $row['name']; 

                    echo '<h3 class="styledCatHead col-lg-12">' . $row['name'] . '</h3>';

                }
                //category header end


                //category products start
                $sql = "select * from vendor_product where vendor_id='" . $webVenId . "' AND xlist='" . $catXlist . "' AND `series_product` = '0' ORDER BY photo_time DESC";
                $result = $conn->query($sql); 

                $rowcount=mysqli_num_rows($result);


                echo "<div class='row'>";


                while($row = mysqli_fetch_array($result)) {

                    $string =  $row['product_name']; // Trim String

                    $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

                    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

                    $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

                    $string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	

                   
                    if (empty($row['pdff']) || $row['pdff'] == 'none') {
                        $cadPdf = '';
                    } else {
                        $cadPdf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/3.png" style="width:100%;" /></a></div>';
                    }                                                     

                    if (empty($row['cadd']) || $row['cadd'] == 'none') {
                        $cadDwg = '';
                    } else {
                        $cadDwg = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/2.png" style="width:100%;" /></a></div>';
                    }     

                    if (empty($row['cadd_2']) || $row['cadd_2'] == 'none') {
                        $cadDwf = '';
                    } else {
                        $cadDwf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/dwf.jpg" style="width:100%;" /></a></div>';
                    }                                               

                    if (empty($row['cadd_3']) || $row['cadd_3'] == 'none') {
                        $cadDxf = '';
                    } else {
                        $cadDxf = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/dxf.jpg" style="width:100%;" /></a></div>';
                    }         

                    if (empty($row['skup']) || $row['skup'] == 'none') {
                        $cadSkp = '';
                    } else {
                        $cadSkp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/skp.jpg" style="width:100%;" /></a></div>';
                    }                                                        

                    if (empty($row['vwxx']) || $row['vwxx'] == 'none') {
                        $cadVwx = '';
                    } else {
                        $cadVwx = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/vwx.jpg" style="width:100%;" /></a></div>';
                    }                                                        

                    if (empty($row['mediap']) || $row['mediap'] == 'none') {
                        $cadMedia = '';
                    } else {
                        $cadMedia = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/1.png" style="width:100%;" /></a></div>';
                    }                                                        

                    if (empty($row['zipp']) || $row['zipp'] == 'none') {
                        $cadZip = '';
                    } else {
                        $cadZipp = '<div class="col-md-2 col-sm-2 col-xs-2 single-icon"><a href="#"><img src="/LandscapeProducts/images/products/details/formats/4.png" style="width:100%;" /></a></div>';
                    }     




                   strlen($cadPdf . $cadDwg . $cadDwf. $cadDxf . $cadSkp . $cadVwx . $cadMedia . $cadZip) < 10
                      ? $cadDetals = '<div class="row" style="height: 45px;"><div class="col-md-12" > No detail files have been uploaded for this product.</p></div>'
                      : $cadDetals = '<div class="row" style="height: 35px;">' . $cadPdf . $cadDwg . $cadDwf. $cadDxf . $cadSkp . $cadVwx . $cadMedia . $cadZip . '</div>';



                    if ($row['imported'] == '0') { $actButton = 'active-button-new.png'; } else { $actButton = 'inactive-button-new.jpg'; };


                    echo '<div class="col-md-4 col-sm-6 col-xs-12 for_small vendorEditProduct">
                          <article style="background: white; margin-bottom:20px;">
                              <div class="post-thumb">
                                  <img src="'.BASE_URL.'products/images/' . $row['photo'] . '""  class="vendorEditProductImage" alt="">
                                  <a href="'.BASE_URL.'LandscapeProducts/index-vendor-detail-edit-js.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" target="_blank" class="editBtnProductView">
                                    <img width="40%" src="'.BASE_URL.'vendor/images/edit-button.png">
                                  </a>
                                  <a href="'.BASE_URL.'vendor/add-edit-construction.php" target="_blank" class="actBtnProductView">
                                    <img width="40%" src="'.BASE_URL.'vendor/images/' . $actButton . '">
                                  </a>
                              </div>

                              <div class="" style="padding: 10px 10px 15px 10px;">
                                <p class="productHeader">' . $row['product_name'] . '</p>
                                <p style="height: 200px; overflow: auto;"><strong>Product Description:</strong><br>' . $row['description'] . '</p>
                                <p style="height: 60px;"><strong>Product Link:</strong><br><a href="' . $row['web_photo'] . '">' . $row['product_name'] . '</a></p>
                                <p><strong>Available Detail Files:</strong><br>' . $cadDetals . '</p>
                              </div>
                          </article>
                        </div>';                                                
                   


                  }//end while

                  echo "</div>";      
                   //category products start
                
                
            }//end $catView == 'other'
      
      
      
      ?>      
        
                
       <!-- Photo Edit End -->       
                
       
        </div><!-- ./col-lg-8 -->

    </div><!-- /.row -->
    	
    </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

            
 <? include $rootInclude.'la-common-footer-inner.inc'; ?>

<?

  $sql = "SELECT * FROM new_vendor WHERE id='" . $webVenId . "' ";
  $result = $conn->query($sql);									


   while($row = mysqli_fetch_assoc($result)) {

?>

<style>
.contactTextArea {
    margin-right: 10px;
    width: 100%;
    max-width: 497px;
    border-radius: 5px;
    padding: 10px;
    border-radius: 5px !important;
    border: solid 1px rgba(35, 35, 35, 0.15);
}
  
  .input_fl .col-sm-4 {
    padding-left: 8px;
    padding-right: 8px;
}
  
  #submitChangesBtn {
    margin-top: 30px;
  }

</style>

<div class="all_modals_ full_width">

 <form>
  <input type="hidden" name="vendorEdit-venNum" id="vendorEdit-venNum" value="<? echo $_GET['id']; ?>">

    <!-- Step 1 Start -->
    <div class="modal fade mdl1 step1 standardModal" id="id04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Update Your Vendor Profile</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">CLOSE X</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal_cot full_width">
              <div class="contact_wrp">
                <h3 class="stl-ar">Vendor Information</span></h3>
                <div class="full_width input_fl">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <label for="vendorEdit-company_name">Company Name</label>
                       <input type="text" id="vendorEdit-company_name" name="vendorEdit-company_name" value="<? echo $row['company_name']; ?>">
                    </div><!-- .col-lg-6 -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                       <label for="vendorEdit-address">Address:</label>
                       <input type="text" id="vendorEdit-address" name="vendorEdit-address" value="<? echo $row['address']; ?>">
                    </div><!-- .col-lg-6 -->
                    <div class="col-sm-4">
                       <label for="vendorEdit-city">City:</label>
                      <input type="text" id="vendorEdit-city" name="vendorEdit-city" value="<? echo $row['city']; ?>">
                    </div><!-- .col-lg-6 -->
                    <div class="col-sm-4">
                     <label for="vendorEdit-state">State</label>
                      <select id="vendorEdit-state" name="vendorEdit-state">
                        <option value="AL" <? if ($row['state'] == 'AL') { echo 'selected'; };  ?>>Alabama</option>
                        <option value="AK" <? if ($row['state'] == 'AK') { echo 'selected'; };  ?>>Alaska</option>
                        <option value="AB" <? if ($row['state'] == 'AB') { echo 'selected'; };  ?>>Alberta</option>
                        <option value="AZ" <? if ($row['state'] == 'AZ') { echo 'selected'; };  ?>>Arizona</option>
                        <option value="AR" <? if ($row['state'] == 'AR') { echo 'selected'; };  ?>>Arkansas</option>
                        <option value="BC" <? if ($row['state'] == 'BC') { echo 'selected'; };  ?>>British Columbia</option>
                        <option value="CA" <? if ($row['state'] == 'CA') { echo 'selected'; };  ?>>California</option>
                        <option value="CO" <? if ($row['state'] == 'CO') { echo 'selected'; };  ?>>Colorado</option>
                        <option value="CT" <? if ($row['state'] == 'CT') { echo 'selected'; };  ?>>Connecticut</option>
                        <option value="DE" <? if ($row['state'] == 'DE') { echo 'selected'; };  ?>>Delaware</option>
                        <option value="DC" <? if ($row['state'] == 'DC') { echo 'selected'; };  ?>>District Of Columbia</option>
                        <option value="FL" <? if ($row['state'] == 'FL') { echo 'selected'; };  ?>>Florida</option>
                        <option value="GA" <? if ($row['state'] == 'GA') { echo 'selected'; };  ?>>Georgia</option>
                        <option value="HI" <? if ($row['state'] == 'HI') { echo 'selected'; };  ?>>Hawaii</option>
                        <option value="ID" <? if ($row['state'] == 'ID') { echo 'selected'; };  ?>>Idaho</option>
                        <option value="IL" <? if ($row['state'] == 'IL') { echo 'selected'; };  ?>>Illinois</option>
                        <option value="IN" <? if ($row['state'] == 'IN') { echo 'selected'; };  ?>>Indiana</option>
                        <option value="IA" <? if ($row['state'] == 'IA') { echo 'selected'; };  ?>>Iowa</option>
                        <option value="KS" <? if ($row['state'] == 'KS') { echo 'selected'; };  ?>>Kansas</option>
                        <option value="KY" <? if ($row['state'] == 'KY') { echo 'selected'; };  ?>>Kentucky</option>
                        <option value="LA" <? if ($row['state'] == 'LA') { echo 'selected'; };  ?>>Louisiana</option>
                        <option value="ME" <? if ($row['state'] == 'ME') { echo 'selected'; };  ?>>Maine</option>
                        <option value="MB" <? if ($row['state'] == 'MB') { echo 'selected'; };  ?>>Manitoba</option>
                        <option value="MD" <? if ($row['state'] == 'MD') { echo 'selected'; };  ?>>Maryland</option>
                        <option value="MA" <? if ($row['state'] == 'MA') { echo 'selected'; };  ?>>Massachusetts</option>
                        <option value="MI" <? if ($row['state'] == 'MI') { echo 'selected'; };  ?>>Michigan</option>
                        <option value="MN" <? if ($row['state'] == 'MN') { echo 'selected'; };  ?>>Minnesota</option>
                        <option value="MS" <? if ($row['state'] == 'MS') { echo 'selected'; };  ?>>Mississippi</option>
                        <option value="MO" <? if ($row['state'] == 'MO') { echo 'selected'; };  ?>>Missouri</option>
                        <option value="MT" <? if ($row['state'] == 'MT') { echo 'selected'; };  ?>>Montana</option>
                        <option value="NE" <? if ($row['state'] == 'NE') { echo 'selected'; };  ?>>Nebraska</option>
                        <option value="NV" <? if ($row['state'] == 'NV') { echo 'selected'; };  ?>>Nevada</option>
                        <option value="NB" <? if ($row['state'] == 'NB') { echo 'selected'; };  ?>>New Brunswick</option>
                        <option value="NH" <? if ($row['state'] == 'NH') { echo 'selected'; };  ?>>New Hampshire</option>
                        <option value="NJ" <? if ($row['state'] == 'NJ') { echo 'selected'; };  ?>>New Jersey</option>
                        <option value="NM" <? if ($row['state'] == 'NM') { echo 'selected'; };  ?>>New Mexico</option>
                        <option value="NY" <? if ($row['state'] == 'NY') { echo 'selected'; };  ?>>New York</option>
                        <option value="NC" <? if ($row['state'] == 'NC') { echo 'selected'; };  ?>>North Carolina</option>
                        <option value="ND" <? if ($row['state'] == 'ND') { echo 'selected'; };  ?>>North Dakota</option>
                        <option value="NT" <? if ($row['state'] == 'NT') { echo 'selected'; };  ?>>Northwest Territories</option>
                        <option value="NS" <? if ($row['state'] == 'NS') { echo 'selected'; };  ?>>Nova Scotia</option>
                        <option value="OH" <? if ($row['state'] == 'OH') { echo 'selected'; };  ?>>Ohio</option>
                        <option value="OK" <? if ($row['state'] == 'OK') { echo 'selected'; };  ?>>Oklahoma</option>
                        <option value="ON" <? if ($row['state'] == 'ON') { echo 'selected'; };  ?>>Ontario</option>
                        <option value="OR" <? if ($row['state'] == 'OR') { echo 'selected'; };  ?>>Oregon</option>
                        <option value="PA" <? if ($row['state'] == 'PA') { echo 'selected'; };  ?>>Pennsylvania</option>
                        <option value="PE" <? if ($row['state'] == 'PE') { echo 'selected'; };  ?>>Prince Edward Island</option>
                        <option value="QC" <? if ($row['state'] == 'QC') { echo 'selected'; };  ?>>Quebec</option>
                        <option value="RI" <? if ($row['state'] == 'RI') { echo 'selected'; };  ?>>Rhode Island</option>
                        <option value="SK" <? if ($row['state'] == 'SK') { echo 'selected'; };  ?>>Saskatchewan</option>
                        <option value="SC" <? if ($row['state'] == 'SC') { echo 'selected'; };  ?>>South Carolina</option>
                        <option value="SD" <? if ($row['state'] == 'SD') { echo 'selected'; };  ?>>South Dakota</option>
                        <option value="TN" <? if ($row['state'] == 'TN') { echo 'selected'; };  ?>>Tennessee</option>
                        <option value="TX" <? if ($row['state'] == 'TX') { echo 'selected'; };  ?>>Texas</option>
                        <option value="UT" <? if ($row['state'] == 'UT') { echo 'selected'; };  ?>>Utah</option>
                        <option value="VT" <? if ($row['state'] == 'VT') { echo 'selected'; };  ?>>Vermont</option>
                        <option value="VA" <? if ($row['state'] == 'VA') { echo 'selected'; };  ?>>Virginia</option>
                        <option value="WA" <? if ($row['state'] == 'WA') { echo 'selected'; };  ?>>Washington</option>
                        <option value="WV" <? if ($row['state'] == 'WV') { echo 'selected'; };  ?>>West Virginia</option>
                        <option value="WI" <? if ($row['state'] == 'WI') { echo 'selected'; };  ?>>Wisconsin</option>
                        <option value="WY" <? if ($row['state'] == 'WY') { echo 'selected'; };  ?>>Wyoming</option>
                        <option value="YT" <? if ($row['state'] == 'YT') { echo 'selected'; };  ?>>Yukon</option>
                        <option value="NA" <? if ($row['state'] == 'NA') { echo 'selected'; };  ?>>None of the Above</option>
                      </select>
                    </div><!-- .col-lg-6 -->
                    <div class="col-sm-4">
                     <label for="vendorEdit-zip">Zip:</label>
                      <input type="text" id="vendorEdit-zip" name="vendorEdit-zip" value="<? echo $row['zip']; ?>">
                    </div><!-- .col-lg-6 -->
                    <div class="col-md-6 col-sm-12">
                       <label for="vendorEdit-phone">Phone:</label>
                      <input type="text" id="vendorEdit-phone" name="vendorEdit-phone" value="<? echo $row['phone']; ?>">
                    </div><!-- .col-lg-6 -->
                   <div class="col-md-6 col-sm-12">
                       <label for="vendorEdit-fax">Fax:</label>
                      <input type="text" id="vendorEdit-fax" name="vendorEdit-fax" value="<? echo $row['fax']; ?>">
                    </div><!-- .col-lg-6 -->
                   <div class="col-sm-12">
                       <label for="vendorEdit-email">Email:</label>
                      <input type="text" id="vendorEdit-email" name="vendorEdit-email" value="<? echo $row['email']; ?>">
                    </div><!-- .col-lg-6 -->
                   <div class="col-sm-12">
                      <label for="vendorEdit-contact_us">Contact Us:</label>
                      <input type="text" id="vendorEdit-contact_us" name="vendorEdit-contact_us" value="<? echo $row['contact_us']; ?>">
                    </div><!-- .col-lg-6 -->
                   <div class="col-sm-12">
                        <label for="vendorEdit-profile">Profile:</label>
                     <textarea class="contactTextArea" id="vendorEdit-profile" name="vendorEdit-profile" rows="6"><? echo $row['profile']; ?></textarea>
                    </div><!-- .col-lg-6 -->


                </div><!-- /.row -->  
                </div><!-- /.input_fl -->
              </div><!-- /.contact_wrp -->

              <button type="button" class="button_style" id="submitChangesBtn">SUBMIT CHANGES</button>
              <span class="dummy_height"></span>
            </div><!-- /.modal_cot -->
          </div>
        </div>
      </div>
    </div>
    <!-- Step 1 End -->
  </form> 
</div>

<? } ?>

<?

																		$string =  $row2334['company_name']; // Trim String

																		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																		$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash			



?>


<script>
  
    function openProfileWindow(){
      window.open('<?php echo BASE_URL; ?>landscape-design-products/<? echo $string ?>/<? echo $webVenId ?>', "_blank", "location=no,menubar=no,width=1200, height=800");
    }
  
    function validateForm() {
                    var x = document.forms["leadsform"]["week"].value;
                    if (x == null || x == "") {
                        alert("Please Choose a Date Range");
                        return false;
                    }
                }
  
    function myFunction77() {
      var valR = "<? echo $webVenId ?>";
      window.open("<?php echo BASE_URL; ?>LandscapeProducts/index-reorder.php?venNum="+valR, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=960,height=860");
    }      
  
  
  
  
    $( document ).ready(function() {
      $('#editCompanyBtn').on('click', function(evt){
				 $('#id04.step1').modal('show');
			});
      
      
       var changed = [false, false, false, false, false, false, false, false, false, false];
      
        $("#vendorEdit-company_name").on("input", function() {
          changed[0] = true;
        })
        
        $("#vendorEdit-address").on("input", function() {
          changed[1] = true;
        })
      
       $("#vendorEdit-city").on("input", function() {
          changed[2] = true;
        })
      
       $("#vendorEdit-state").on("input", function() {
          changed[3] = true;
        })
      
       $("#vendorEdit-zip").on("input", function() {
          changed[4] = true;
        })
      
       $("#vendorEdit-phone").on("input", function() {
          changed[5] = true;
        })
      
       $("#vendorEdit-fax").on("input", function() {
          changed[6] = true;
        })
      
       $("#vendorEdit-email").on("input", function() {
          changed[7] = true;
        })
      
        $("#vendorEdit-contact_us").on("input", function() {
          changed[8] = true;
        })
      
       $("#vendorEdit-profile").on("input", function() {
          changed[9] = true;
        })
        
        
        $('#submitChangesBtn').click(function(event){
          postChangesFunction(changed, event);
        })

        function postChangesFunction(changed,event){
          event.preventDefault();          
          
          $.post(
            '/vendor/company-info-update-web.php',
            {
              venNum: $('#vendorEdit-venNum').val(),
              company_name: $('#vendorEdit-company_name').val(),
              address: $('#vendorEdit-address').val(),
              city: $('#vendorEdit-city').val(),
              state: $('#vendorEdit-state').val(),
              zip: $('#vendorEdit-zip').val(),
              phone: $('#vendorEdit-phone').val(),
              fax: $('#vendorEdit-fax').val(),
              email: $('#vendorEdit-email').val(),
              contact_us: $('#vendorEdit-contact_us').val(),
              profile: $('#vendorEdit-profile').val(),
              changedInputs: changed
            },
             function(data){
               data = JSON.parse(data);               
               if(data.success == true){
                  console.log(data);
                  $('#id04.step1').modal('hide');
//                  location.reload();
               } else {
                 console.log(data);
//                 setTimeout(function(){
//                   document.getElementById("incorrectPasswordText").innerHTML = "Incorrect Password. Please try again."
//                }, 200);
               }
             }
          )
        }
      
      
    });

</script>
 
    </body>
</html>
