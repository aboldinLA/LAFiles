<div class="all_modals_ full_width">



<?php

if(($_SERVER['PHP_SELF'] == '/LandscapeProducts/magazine.php') && ($_GET['sub'] != 'complete')) { ?>
	
					<!-- Modal -->
	<div class="modal fade mdl1" id="onload_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Subscribe to the Magazine</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">CLOSE X</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="modal_cot full_width">
									<h2>Enjoy Landscape Architect?</h2>
									<span class="pdf_img text-center">
										<img src="images/la-mag-collage-19.png" alt="img" width="100%" />
									</span>
									<button type="button" class="button_style" id="receiveMagBtn">YES, I WANT TO RECEIVE THE MAGAZINE</button>
									<a href="#" class="continue_t" data-dismiss="modal" >CONTINUE TO VIEW PDF</a>
								</div><!-- /.modal_cot -->
							</div>
						</div>
					</div>
				</div>



<? } ?>


<style>
	
	.modal {
		overflow-x: hidden;
    overflow-y: auto;
	}

	.center_check .check_box__ input[type="checkbox"] + label,
	.check_wrp .check_box__ input[type="checkbox"] + label {
    width: 17px;
    height: 17px;
    background-size: 100% 100%;
    margin: 7px 0;
    border: solid 1px #979797;
    background: #ffffff;
	}
		
		.center_check .check_box__ input[type="checkbox"]:checked + label,
		.check_wrp .check_box__ input[type="checkbox"]:checked + label {
    width: 17px;
    height: 17px;
    background-size: 100% 100%;
    margin: 7px 0;
    border: solid 1px #979797;
    background-color: #1b8047;
		background-image: url(https://www.landscapearchitect.com/LandscapeProducts/images/check-mark.svg);
}



.scroll_wrp .check_box__ input[type="checkbox"]:checked + label {
	    background-color: #1b8047;
		background-image: url(https://www.landscapearchitect.com/LandscapeProducts/images/check-mark.svg);
}

.contact_wrp {
    width: 100%;
    max-width: 500px;
    display: block;
    margin: 0 auto;
}

.selectboxit-container {
	display: block;
      margin-top: 0px
}

.input_fl .col-sm-6 {
    padding-left: 8px;
    padding-right: 8px;
}

.selectboxit-text {
	max-width: 100% !important;
}

.selectboxit {
	    width: 100% !important;
    height: 33px;
    border-radius: 5px !important;
    border: solid 1px rgba(35, 35, 35, 0.15);
    background-color: #ffffff;
    font-size: 10px;
    font-weight: 600;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: 0.83px;
    color: #949494;
    font-family: 'Nunito Sans', sans-serif;
    padding: 0 15px;
    outline: none;
}
  
  span.selectboxit.selectboxit-enabled.selectboxit-btn {
      border: solid 1px rgba(35, 35, 35, 0.15);
    height: 33px;
  }



/* new mag sub step 2 */
.product_jumpTos a {
	width: 33%;
	text-align: center;
	margin-bottom: 4px;
}

.subcategory_container {
	display: flex;
	flex-wrap: wrap;
	flex-direction: column;
}

.subcateogry_footerLinks {
		text-align: center;
    margin-top: 10px;
    margin-bottom: 30px;
}

.subcateogry_footerLinks a {
	text-decoration: underline;
	text-transform: uppercase;
	font-size: 15px;
	padding: 0px 25px;
}


.subcategory_container .check_box__ {
/*	width: 33%;*/
	    margin-bottom: 5px;
	align-self: center;
    text-transform: capitalize;

}

.subcategory_container .check_box__ input[type="checkbox"] + label + label {
	height: auto;
	width: calc(100% - 30px);
	text-align: left;
	    padding: 0px 10px 0px 5px;
}

.scroll_wrp {
	height: auto;
	max-width: 650px;
}

.scroll_wrp h4 {
	font-size: 20px;
}

input[name="newSubForm"] .subcategory_headers {
	    font-size: 20px;
    font-weight: bold;
}


.product_jumpTos {
	   display: flex;
    flex-wrap: wrap;
    max-width: 650px;
    margin: 0 auto;
    font-size: 14px;
    justify-content: center;
    align-items: center;
		margin-bottom: 20px;
}


.modal_cot p.blel {
	padding-top: 18px;
}

.dummy_height {
		 min-height: 50px;
		}
		
  .selectboxit {
      selectboxit
  }
		

/* error messages */
  .contact_wrp .error {
      padding-top: 3px;
    color: red;
    margin-bottom: 0px;
  }
		
		
@media (min-width: 768px) {
	#onload_m .modal-dialog {
    width: 100%;
    margin: 30px auto;
    max-width: 1050px;
}

}

		

.scroll_wrp {
    height: auto;
    width: 100%;
    max-width: none;
}
  
  

  .modal_cot h3 span {
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 7px;
    margin-bottom: 8px;
    font-size: 16px;
  }
  
  span.selectboxit.selectboxit-enabled.selectboxit-btn {
    margin-top: 0px;
  }
  
  .mdl1.step4 .modal-content {
    min-height: 380px;
}
		
  .mdl1.step4 h3 {
      font-size: 40px;
  }

  .mdl1.step4 p {
          font-size: 20px;
    padding-left: 40px;
    padding-right: 40px;
    text-align: center;
  }
		
</style>




<?



//include 'connect4.inc'; 	
include '../modules/db.php';

$DISPLAY = $_POST;

if($_GET['sub'] == 'complete'){


	
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$comp_name = $_POST['comp_name'];
		$address = $_POST['mailing_address_1'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$phone = $_POST['phone'];
		$fax = $_POST['fax'];
		$email = $_POST['email'];
		$month = $_POST['month'];
		$am_id = implode(",",$_POST['am_id']);
		$status = "0";
		$biz_title = $_POST['title'];

		$opt_inla001 = $_POST['opt_inla001'];
		$opt_inla002 = $_POST['opt_inla002'];
		$opt_inla003 = $_POST['opt_inla003'];
		$opt_inla004 = $_POST['opt_inla004'];
		$opt_inla005 = $_POST['opt_inla005'];
		
		$opt_inla = $opt_inla001 . ", " . $opt_inla002 . ", " . $opt_inla003 . ", " . $opt_inla004 . ", " . $opt_inla005;
		
		$ylist_id = implode(",",$_POST['ylist']);
		$needs = implode(",",$_POST['needs']);
  
    
    //password generator
    function genRandomString() {
      $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXZY';
      $string = '';
      
      for ($p = 0; $p < 3; $p++) {
        $string .= $letters[mt_rand(0, strlen($letters))];
      }
      
      for ($p = 0; $p < 6; $p++) {
        $string .= mt_rand(0, 9);
      }

      return $string;
    } //END genRandomString
    
    $passwordCheck = true;
    $pass = '';
    
    //checks to make sure password doesn't already exist
    while($passwordCheck){
      
      $pass = genRandomString();
      
      $sql = "SELECT * FROM subscribe where pass = '" . $pass . "'";

      $result = $conn->query($sql);
      $count = mysqli_num_rows($result);

      if($count == 0){
        $passwordCheck = false;
      }
    }
  
  
    //attempts to insert subscriber into subscribe table
		  $sql = "INSERT INTO subscribe (biz_title, brand, comp_name, sal, first_name, last_name, address, address_2, city, state, zip, country,".
    "mail_to, alt, area_code, phone, area_code_fax, fax, email, month, subscribe, status, am_id, opt_inla, opt_inlc, opt_intle, opt_ineb, pass,".
    "edited) VALUES ".
        "('$biz_title', '$brand', '$comp_name', '$sal', '$first_name', '$last_name', '$address', '$address_2', '$city' , '$state', '$zip', '$country', ".
    "'$mail_to', '$alt_mail', '$area_code', '$phone', '$area_code_fax', '$fax', '$email','$month', ".
    "'$subscribe', '$status', '$am_id', '$opt_inla', '$opt_inlc', '$opt_intle', '$opt_ineb', '$pass', NULL)";
  
		if(mysqli_query($conn, $sql)){
			echo "";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}

    
		//attempts to update ylist on subscriber from above												 
		$sql = "UPDATE subscribe SET ylist_id = '" . $ylist_id . "', needs = '" . $needs . "' WHERE first_name='" . $first_name . "' AND last_name='" . $last_name . "' AND email='" . $email . "'";
		
		if(mysqli_query($conn, $sql)){
			echo "";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
  
  
    //sends password to user
    $to = $email;
    $subject = ' Re: LADetails Account';
    $msg = $first_name . ", you have successfully completed the New Subscription Request Application. \n" .
    "Here is your password for LandscapeArchitect.com: \n" .
    "Password: " . $pass . "\n".
    "   \n" .
    "We encourage you to browse the Product Information Request page and request \n" .
    "any product information you need from our vendors. In order to provide you \n" .
    "with timely service, all product information requests are processed weekly. \n" .
    "   \n" .
    "Thank you for visiting LandscapeArchitect.com. \n" .
    "   \n" .
    "The largest landscape oriented database on the web!" ;

    mail ($to, $subject, $msg, 'From:' . $email);
  
    $DISPLAY = [];
    
		
		?>
  
  
		
				<!-- Step 4 - Thank You - Start -->
				<div class="modal fade mdl1 step4" id="onload_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Thank You</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">CLOSE X</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="modal_cot full_width">

									<h3 class="center_align">Congratulations <? echo $first_name ?></h3> 

									<p class="center_align" style="font-size: 20px; ">You have successfully completed the New Subscription Request Application. Once your request has been processed, you will be notified by email of your acceptance status and will be given a password to access/edit your profile and/or download LADetails</p> 



								</div><!-- /.modal_cot -->
							</div>
						</div>
					</div>
				</div>
				<!-- Step 4 - Thank You - End -->

<? 


  } else { 

  if($_GET['number']){
    $number = "&number=" . $_GET['number'];
  }
  if($_GET['prodNum']){
    $prodNum = "&prodNum=" . $_GET['prodNum'];
  }
  
?>

<form NAME="newSubForm" onSubmit="return validateStep3();" id="newSubForm" method="post" action="<?echo $PHP_SELF?>?sub=complete<? echo $number . $prodNum ?>" >



<!-- Step 1 Start -->
<div class="modal fade mdl1 step1" id="onload_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Your Account</h5>
        <button type="button" class="close">
          <span aria-hidden="true">CLOSE X</span>
        </button>
      </div>
      <div class="step_sec full_width">
           <a href="#" class="active step1_btn">Step 1</a>
          <a href="#" class=" step2_btn">Step 2</a>
          <a href="#" class=" step3_btn">Step 3</a>
      </div><!-- /.step_sec -->
      <div class="modal-body">
        <div class="modal_cot full_width">
          <!--  <h2>Important</h2>-->
          <p class="blel">Please take the time to complete this section as accurately as possible. The information is used to ensure you receive the magazine(s), news and promotions you want to receive and not the ones you don't want. Thank you!</p>
          <div class="contact_wrp">
            <h3 class="stl-ar">Contact Information</span></h3>
            <div class="full_width input_fl">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label>First Name*</label><label id="sub_first_name-error"></label>
                  <input type="text" name="first_name" id="sub_first_name" value="<?=$DISPLAY['first_name']?>" data-msg="Please fill in your first name."/>
                </div><!-- .col-lg-6 -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <label>Last Name*</label>
                  <input type="text" name="last_name" id="sub_last_name" value="<?=$DISPLAY['last_name']?>" data-msg="Please fill in your last name."/>
                </div><!-- .col-lg-6 -->
								<div class="col-sm-12">
                  <label>Company Name*</label>
                  <input type="text" placeholder="Company Name" name="comp_name" id="sub_comp_name" value="<?=$DISPLAY['comp_name']?>" data-msg="Please fill in your company's name."/>
                </div><!-- .col-lg-6 -->
								<div class="col-sm-12">
                  <label>EMAIL*</label>
                  <input type="text" placeholder="yourname@email.com" name="email" id="sub_email" value="<?=$DISPLAY['email']?>" data-msg="Please fill in your email."/>
                </div><!-- .col-lg-6 -->
                <div class="col-sm-12">
                  <label>CONFIRM EMAIL*</label>
                  <input type="text" placeholder="yourname@email.com" name="confirm_email" id="sub_confirm_email" value="<?=$DISPLAY['confirm_email']?>" data-msg="Please confirm your email."/>
                </div><!-- .col-lg-6 -->
                <div class="col-sm-12">
                  <label>PHONE NUMBER*</label>
                  <input type="text" placeholder="555-123-4567" name="phone" id="sub_phone" value="<?=$DISPLAY['phone']?>" data-msg="Please fill in your phone number."/>
                </div><!-- .col-lg-6 -->

                <div class="col-sm-6">
                  
                  <style> #titleSelectSelectBoxItOptions {width: 100%} </style>
                  
                  <label>Title*</label>
                  <select name="title" required id="titleSelect">
										<option selected disabled value="titleDefault">Job Title</option>
										<?

											$sql = "SELECT * FROM type_title ORDER BY sub_number";
											$result = $conn->query($sql);

											while($row = mysqli_fetch_array($result)){
                        $newName = str_replace('_', ' ', $row['name']);
												echo '<option value="' . $row['name'] . '">' . $newName . '</option>';
											}

										?>
										<option value="Sole_Owner">Other</option>
                    
                  </select>
                </div><!-- .col-lg-6 -->

               

                <div class="col-sm-6">
                  
                  <style> #amSelectSelectBoxItOptions {width: 100%} </style>
                  
                  <label>I Am A*</label>
                  <select name="am_id[]" multiple required id="amSelect">
                    <option selected disabled value="am_idDefault">I am a...</option>
										
										<?
										
											$sql2 = "SELECT * FROM type_iam ORDER BY id";
											$result2 = $conn->query($sql2);
  
                      $georgeSelectsIds = [4,7,10,34,37,16,19,2,28,23,26,32,35,6,9,30,33,36,19];
                      
											
											while($row = mysqli_fetch_array($result2)){
                       if(in_array($row['idAccount'], $georgeSelectsIds)){
                          if (!stristr($row['name'],"---")) {
                            $newName = str_replace('_', ' ', $row['name']);
                            echo '<option value="' . $row['name'] . '" name="am_id[]">' . $newName . '</option>';
                          }
                       }
										
											}
											
											?>
               		</select>
                </div><!-- .col-lg-6 -->

            </div><!-- /.row -->  
            </div><!-- /.input_fl -->
              <div class="check_wrp full_width" style="margin-top: 15px;">
              <span class="iwouldlike">I would like to subscribe / opt-in to receive:</span>
              <ul>
                <li>
                    <div class="check_box__ pull-left">
                          <input type="checkbox" class="form-check-input" id="opt_inla001" name="opt_inla001" value="LA-MS" checked>
                          <label for="opt_inla001"></label>
                          <label class="form-check-label" for="opt_inla001">LASN Magazine Subscription</label>
                      </div>
                  </li>
                 <li>
                    <div class="check_box__ pull-left">
                          <input type="checkbox" class="form-check-input" id="opt_inla002" name="opt_inla002" value="LA-W" checked>
                          <label for="opt_inla002"></label>
                          <label class="form-check-label" for="opt_inla002" >LA Weekly</label>
                      </div>
                  </li>
                
                  <li>
                    <div class="check_box__ pull-left">
                          <input type="checkbox" class="form-check-input" id="opt_inla003" name="opt_inla003" value="LA-DM" checked>
                          <label for="opt_inla003"></label>
                          <label class="form-check-label" for="opt_inla003">LASN Digital Magazine</label>
                      </div>
                  </li>
                  <li>
                    <div class="check_box__ pull-left">
                          <input type="checkbox" class="form-check-input" id="opt_inla004" name="opt_inla004" value="LA-ASP" checked>
                          <label for="opt_inla004"></label>
                          <label class="form-check-label" for="opt_inla004">Targeted Vendor Promotions</label>
                      </div>
                  </li>
                  <li>
                    <div class="check_box__ pull-left">
                          <input type="checkbox" class="form-check-input" id="opt_inla005" name="opt_inla005" value="LA-CE" checked>
                          <label for="opt_inla005"></label>
                          <label class="form-check-label" for="opt_inla005" >LASN Calls for Editorial</label>
                      </div>
                  </li>
                  
              </ul>
            </div>
          <!-- chk_wrp -->
						

          </div><!-- /.contact_wrp -->

          <button type="button" class="button_style" id="requestProdsBtn">NEXT: REQUEST PRODUCT INFORMATION</button>
          <span class="dummy_height"></span>
        </div><!-- /.modal_cot -->
      </div>
    </div>
  </div>
</div>
<!-- Step 1 End -->


<!-- Step 2 Start -->
<div class="modal fade mdl1 step2" id="onload_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Request Product Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">CLOSE X</span>
        </button>
      </div>
      <div class="step_sec full_width" id="top_subcategories">
          <a href="#" class="step1_btn">Step 1</a>
          <a href="#" class="active step2_btn">Step 2</a>
          <a href="#" class=" step3_btn">Step 3</a>
      </div><!-- /.step_sec -->
      <div class="modal-body">
        <div class="modal_cot full_width">
            
          <h3 class="center_align">Select Products<span>To receive special offers and/or information about specific products, jump to the categories and select the products below.

To skip this section or when you are Finished Picking Products, scroll to the bottom of the page and select the 'Submit' button.</span></h3> 

					
					
          
          <div class="product_jumpTos" style="display: flex; flex-wrap: wrap;">
						<a href="#LL">Landscape Lighting</a>                        <a href="#OL">Outdoor Living</a>                      <a href="#BS">Business Services</a>	
            <a href="#PMBR">Pavers, Masonry, Blocks &amp; Rocks</a>     <a href="#PR">Park and Recreation</a>			            <a href="#EQI"></a>
            <a href="#DWF">Water Features</a>                           <a href="#SA">Site Amenities</a>	                    <a href="#EQI" style="color: #535353;">Tools &amp; Equipment</a>
            <a href="#PM">Plant Materials</a>                           <a href="#GR">Green Roof</a>                          <a href="#EQI">Installation Equipment</a>
            <a href="#PA">Plant Accessories</a>                         <a href="#WMI">Water Management / Irrigation</a>      <a href="#EQM">Maintenance Equipment</a>
            <a href="#TO">Turf &amp; Ornamental</a>                     <a href="#SEC">Stormwater/Erosion Control</a>         <a href="#EQPR">Parts &amp; Repair</a>
					</div>
          
          
					<div class="product_jumpTos" style="display: flex; flex-wrap: wrap;">
							  																					
																									




					</div>

          <div class="scroll_wrp content" id="content-7">
          <div class="row">
					
              
            
            
						<? 
						
							//include 'connect4.inc';   	
              include '../modules/db.php';     
																
							$categorys = [
								
								['Landscape Lighting', 'LL', 13731],
                ['Pavers, Masonry, Blocks & Rocks', 'PMBR', 13734],
                ['Water Features', 'DWF', 13726],
								['Plant Materials', 'PM', 13736],
								['Plant Accessories', 'PA', 13735],
                ['Turf & Ornamental', 'TO', 13739],
								['Outdoor Living', 'OL', 13732],
								['Park and Recreation', 'PR', 13733],
								['Site Amenities', 'SA', 13737],
                ['Green Roof', 'GR', 13730],
                ['Water Management / Irrigation', 'WMI', 13740],
								['Stormwater/Erosion Control', 'SEC', 13738],
								['Business Services', 'BS', 13725], 
								['Equipment - Installation', 'EQI', 13727], 
								['Equipment - Maintenance', 'EQM', 13728],
								['Equipment - Parts & Repair', 'EQPR', 13729],
							];
																
																
							foreach($categorys as $index){
								$catName = $index[0];
								$catAbbrev = $index[1];
								$catNum = $index[2];
								
								
								$sql = "SELECT * FROM ylist WHERE idParent = " . $catNum . " AND prod_info = 0 ORDER BY name";
								$result = $conn->query($sql);
								$numOfRows = mysqli_num_rows($result);
								
								
								echo '<div class="col-xs-12 for_small">';
								echo '<h4 id="' . $catAbbrev . '" class="subcategory_headers">' . $catName . '</h4>';
								
								echo '<style>
												.catNum' . $catNum . ' { height:' . ((ceil($numOfRows / 2) * 36) + 150) . 'px }

												 @media (min-width:650px){
													.catNum' . $catNum . ' { height:' . ((ceil($numOfRows / 2) * 36) + 20) . 'px }
												 }

												 @media (min-width:992px){
													.catNum' . $catNum . ' { height:' . ceil($numOfRows / 3) * 36 . 'px }
												}
										</style>';
								
								echo '<div class="subcategory_container catNum' . $catNum . ' row">';
								
								
								while($row = mysqli_fetch_array($result)) {
									$id = $row['sub_number'];

									echo '<div class="check_box__ col-md-4 col-xs-6">
													<input type="checkbox" class="form-check-input prodRequestsInput" id="' . $id . '" name="ylist[]" value="' . $id . '">
													<label for="' . $id . '"></label>
													<label class="form-check-label" for="' . $id . '">' . $row['name'] . '</label>
												</div>';
								}
								
								echo '</div>
									
									<div class="subcateogry_footerLinks"><a href="#top_subcategories">Top</a> <a href="#mailingAddressBtn">Finished Picking Products</a></div>
									
									</div>';
								
							}
															
							
						?>
							
          </div><!-- /.row -->  
          </div><!-- /.scroll_wrp -->

          <div class="center_check" style="clear: both;">
            
            <div class="check_box__">
              <input type="checkbox" class="form-check-input prodRequestsInput" id="chkk100" name="ylist[]" value="none">
              <label for="chkk100"></label>
              <label class="form-check-label"  for="chkk100">No thanks, I don't want to select any products</label>
            </div>

          </div><!-- /.center_check -->

          <button type="button" class="button_style" id="mailingAddressBtn">NEXT: ENTER YOUR MAILING ADDRESS</button>
          <span class="dummy_height2"></span>
        </div><!-- /.modal_cot -->
      </div>
    </div>
  </div>
</div>
<!-- Step 2 End -->


<!-- Step 3 Start -->
<div class="modal fade mdl2 step3" id="onload_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Subscribe to the Magazine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">CLOSE X</span>
        </button>
      </div>
      <div class="step_sec full_width">
          <a href="#" class="step1_btn">Step 1</a>
          <a href="#" class="step2_btn">Step 2</a>
          <a href="#" class="active step3_btn">Step 3</a>
      </div><!-- /.step_sec -->
      <div class="modal-body">
        <div class="modal_cot full_width">
                    
          <div class="contact_wrp txt_ll">
            <h3>Enter Your Mailing Address
            <span style="padding-left: 0px;">LASN is happy to send your magazine to your Home or Office. </span>
            </h3>
            <div class="full_width input_fl">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                  <label>ADDRESS LINE 1*</label>
                  <input type="text" name="mailing_address_1" value="<?php echo $DISPLAY['mailing_address_1'] ?>" />
                </div><!-- .col-lg-6 -->

                <div class="col-xs-12 col-sm-12">
                  <label>ADDRESS LINE 2</label>
                  <input type="text" name="mailing_address_2" value="<?php echo $DISPLAY['mailing_address_2'] ?>" />
                </div><!-- .col-lg-6 -->

<!--                <div class="col-xs-12 col-sm-12">-->

                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <label>CITY*</label>
                    <input type="text" name="city" value="<?php echo $DISPLAY['city'] ?>" />
                  </div><!-- /.left_marne -->

                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <label>State*</label>
                    <select name="state">
                     <? if (strlen($DISPLAY['state']) > 2)    {?>
		          					 <OPTION VALUE="<?=$DISPLAY['state']?>"><?=$DISPLAY['state']?></OPTION> 
										<?} else {?>
												<OPTION VALUE="">State</OPTION> 
									 <?}?>						
										 <OPTION VALUE="AL" <?php if("AL"==$DISPLAY['state']) echo 'selected="selected"'?> >Alabama</OPTION>
										 <OPTION VALUE="AK" <?php if("AK"==$DISPLAY['state']) echo 'selected="selected"'?> >Alaska</OPTION>
										 <OPTION VALUE= "AB" <?php if("AB"==$DISPLAY['state']) echo 'selected="selected"'?> >Alberta</OPTION>
										 <OPTION VALUE= "AZ" <?php if("AZ"==$DISPLAY['state']) echo 'selected="selected"'?> >Arizona</OPTION>
										 <OPTION VALUE= "AR" <?php if("AR"==$DISPLAY['state']) echo 'selected="selected"'?> >Arkansas</OPTION>
										 <OPTION VALUE= "BC" <?php if("BC"==$DISPLAY['state']) echo 'selected="selected"'?> >British Columbia</OPTION>
										 <OPTION VALUE= "CA" <?php if("CA"==$DISPLAY['state']) echo 'selected="selected"'?> >California</OPTION>
                   		<OPTION VALUE= "CO" <?php if("CO"==$DISPLAY['state']) echo 'selected="selected"'?> >Colorado</OPTION>
											<OPTION VALUE= "CT" <?php if("CT"==$DISPLAY['state']) echo 'selected="selected"'?> >Connecticut</OPTION>
											<OPTION VALUE= "DE" <?php if("DE"==$DISPLAY['state']) echo 'selected="selected"'?> >Delaware</OPTION>
											<OPTION VALUE= "DC" <?php if("DC"==$DISPLAY['state']) echo 'selected="selected"'?> >District of Columbia</OPTION>
											<OPTION VALUE= "FL" <?php if("FL"==$DISPLAY['state']) echo 'selected="selected"'?> >Florida</OPTION>
											<OPTION VALUE=  "GA" <?php if("GA"==$DISPLAY['state']) echo 'selected="selected"'?> >Georgia</OPTION>
											<OPTION VALUE=  "HI" <?php if("HI"==$DISPLAY['state']) echo 'selected="selected"'?> >Hawaii</OPTION>
											<OPTION VALUE=  "ID" <?php if("ID"==$DISPLAY['state']) echo 'selected="selected"'?> >Idaho</OPTION>
											<OPTION VALUE=  "IL" <?php if("IL"==$DISPLAY['state']) echo 'selected="selected"'?> >Illinois</OPTION>
											<OPTION VALUE=  "IN" <?php if("IN"==$DISPLAY['state']) echo 'selected="selected"'?> >Indiana</OPTION>
											<OPTION VALUE=  "IA" <?php if("IA"==$DISPLAY['state']) echo 'selected="selected"'?> >Iowa</OPTION>
											 <OPTION VALUE= "KS" <?php if("KS"==$DISPLAY['state']) echo 'selected="selected"'?> >Kansas</OPTION>
												<OPTION VALUE="KY" <?php if("KY"==$DISPLAY['state']) echo 'selected="selected"'?> >Kentucky</OPTION>
												<OPTION VALUE="LA" <?php if("LA"==$DISPLAY['state']) echo 'selected="selected"'?> >Louisiana</OPTION>
												<OPTION VALUE="ME" <?php if("ME"==$DISPLAY['state']) echo 'selected="selected"'?> >Maine</OPTION>
											 <OPTION VALUE= "MB" <?php if("MB"==$DISPLAY['state']) echo 'selected="selected"'?> >Manitoba</OPTION>
												<OPTION VALUE="MD" <?php if("MD"==$DISPLAY['state']) echo 'selected="selected"'?> >Maryland</OPTION>
											 <OPTION VALUE= "MA" <?php if("MA"==$DISPLAY['state']) echo 'selected="selected"'?> >Massachusetts</OPTION>
											 <OPTION VALUE= "MI" <?php if("MI"==$DISPLAY['state']) echo 'selected="selected"'?> >Michigan</OPTION>
											 <OPTION VALUE= "MN" <?php if("MN"==$DISPLAY['state']) echo 'selected="selected"'?> >Minnesota</OPTION>
												<OPTION VALUE="MS" <?php if("MS"==$DISPLAY['state']) echo 'selected="selected"'?> >Mississippi</OPTION>
											 <OPTION VALUE= "MO" <?php if("MO"==$DISPLAY['state']) echo 'selected="selected"'?> >Missouri</OPTION>
											 <OPTION VALUE= "MT" <?php if("MT"==$DISPLAY['state']) echo 'selected="selected"'?> >Montana</OPTION>
											 <OPTION VALUE= "NE" <?php if("NE"==$DISPLAY['state']) echo 'selected="selected"'?> >Nebraska</OPTION>
												<OPTION VALUE="NV" <?php if("NV"==$DISPLAY['state']) echo 'selected="selected"'?> >Nevada</OPTION>
												<OPTION VALUE="NB" <?php if("NB"==$DISPLAY['state']) echo 'selected="selected"'?> >New Brunswick</OPTION>
											 <OPTION VALUE= "NF" <?php if("NF"==$DISPLAY['state']) echo 'selected="selected"'?> >Newfoundland</OPTION>
											 <OPTION VALUE= "NH" <?php if("NH"==$DISPLAY['state']) echo 'selected="selected"'?> >New Hampshire</OPTION>
											 <OPTION VALUE= "NJ" <?php if(",J"==$DISPLAY['state']) echo 'selected="selected"'?> >New Jersey</OPTION>
											 <OPTION VALUE= "NM" <?php if("NM"==$DISPLAY['state']) echo 'selected="selected"'?> >New Mexico</OPTION>
											 <OPTION VALUE= "NY" <?php if("NY"==$DISPLAY['state']) echo 'selected="selected"'?> >New York</OPTION>
											 <OPTION VALUE= "NC" <?php if("NC"==$DISPLAY['state']) echo 'selected="selected"'?> >North Carolina</OPTION>
											 <OPTION VALUE= "ND" <?php if("ND"==$DISPLAY['state']) echo 'selected="selected"'?> >North Dakota</OPTION>
											 <OPTION VALUE= "NT" <?php if("NT"==$DISPLAY['state']) echo 'selected="selected"'?> >Northwest Territories</OPTION>
											 <OPTION VALUE= "NS" <?php if("NS"==$DISPLAY['state']) echo 'selected="selected"'?> >Nova Scotia</OPTION>
											 <OPTION VALUE= "OH" <?php if("OH"==$DISPLAY['state']) echo 'selected="selected"'?> >Ohio</OPTION>
											 <OPTION VALUE= "OK" <?php if("OK"==$DISPLAY['state']) echo 'selected="selected"'?> >Oklahoma</OPTION>
											 <OPTION VALUE= "ON" <?php if("ON"==$DISPLAY['state']) echo 'selected="selected"'?> >Ontario</OPTION>
											 <OPTION VALUE= "OR" <?php if("OR"==$DISPLAY['state']) echo 'selected="selected"'?> >Oregon</OPTION>
												<OPTION VALUE="PA" <?php if("PA"==$DISPLAY['state']) echo 'selected="selected"'?> >Pennsylvania</OPTION>
												<OPTION VALUE="QC" <?php if("QC"==$DISPLAY['state']) echo 'selected="selected"'?> >Quebec</OPTION>
												<OPTION VALUE="RI" <?php if("RI"==$DISPLAY['state']) echo 'selected="selected"'?> >Rhode Island</OPTION>
											 <OPTION VALUE= "SK" <?php if("SK"==$DISPLAY['state']) echo 'selected="selected"'?> >Saskatchewan</OPTION>
												<OPTION VALUE="SC" <?php if("SC"==$DISPLAY['state']) echo 'selected="selected"'?> >South Carolina</OPTION>
												<OPTION VALUE="SD" <?php if("SD"==$DISPLAY['state']) echo 'selected="selected"'?> >South Dakota</OPTION>
												<OPTION VALUE="TN" <?php if("TN"==$DISPLAY['state']) echo 'selected="selected"'?> >Tennessee</OPTION>
											 <OPTION VALUE= "TX" <?php if("TX"==$DISPLAY['state']) echo 'selected="selected"'?> >Texas</OPTION>
											<OPTION VALUE=  "UT" <?php if("UT"==$DISPLAY['state']) echo 'selected="selected"'?> >Utah</OPTION>
											<OPTION VALUE=  "VT" <?php if("VT"==$DISPLAY['state']) echo 'selected="selected"'?> >Vermont</OPTION>
											<OPTION VALUE=  "VA" <?php if("VA"==$DISPLAY['state']) echo 'selected="selected"'?> >Virginia</OPTION>
											 <OPTION VALUE= "WA" <?php if("WA"==$DISPLAY['state']) echo 'selected="selected"'?> >Washington</OPTION>
											 <OPTION VALUE= "WV" <?php if("WV"==$DISPLAY['state']) echo 'selected="selected"'?> >West Virginia</OPTION>
											 <OPTION VALUE= "WI" <?php if("WI"==$DISPLAY['state']) echo 'selected="selected"'?> >Wisconsin</OPTION>
											 <OPTION VALUE= "WY" <?php if("WY"==$DISPLAY['state']) echo 'selected="selected"'?> >Wyoming</OPTION>
											 <OPTION VALUE= "YT" <?php if("YT"==$DISPLAY['state']) echo 'selected="selected"'?> >Yukon</OPTION>
                    </select>
                  </div><!-- /.right_marne --> 

<!--                </div>-->
              <!-- .col-lg-6 -->
                
                <div class="col-md-3 col-sm-12 col-xs-12 ">
                  <label>ZIP CODE*</label>
									<input type="text" name="zip" value="<?php echo $DISPLAY['zip'] ?>" />
                </div><!-- .col-lg-6 -->

            </div><!-- /.row -->  
            </div><!-- /.input_fl -->
            <div class="full_width text-center">
              
              <button type="submit" class="button_style2" id="placeOrderBtn">SUBMIT ADDRESS</button>
            </div>
            
          </div><!-- /.contact_wrp -->
        </div><!-- /.modal_cot -->
      </div>
    </div>
  </div>
</div>
<!-- Step 3 End -->


</form>



<? }  ?>


</div><!-- all_modals  -->



<!-- && !isset($_SESSION['magSub'])-->

<? if($_GET['sub'] == "complete"){ ?>

	<script type="text/javascript">
      $(window).on('load',function(){
				
				$('#onload_m.step4').modal('show');
        
        
        //reloads page after thank you
        $('#onload_m.step4').on('hidden.bs.modal', function(e){
         
          var currentUrl = window.location.href;
          var firstCheck = currentUrl.indexOf('?sub=complete&');
          
          if(firstCheck > -1){
            currentUrl = currentUrl.replace('sub=complete&', '');
          } else {
            currentUrl = currentUrl.replace('?sub=complete', '');
          }
         
          window.location.replace(currentUrl);
          
       });
				
	   });
  </script>

<? 

$_SESSION['magSub'] = 'yes';

} else { ?>

    <script type="text/javascript">
      $(window).on('load',function(){
			

					<? if($_SERVER["PHP_SELF"] == '/LandscapeProducts/magazine.php' && !$_SESSION['loggedIn']){ ?>
						
							$('#onload_m').modal('show');
					
					<? }  ?>
          

					$('#getItNowBtn').on('click', startSubPopUp);
					$('#receiveMagBtn').on('click', startSubPopUp);
					$('.newsletterSignUpBtn').on('click', startSubPopUp);
          $('#footerSubscribeBtn').on('click', startSubPopUp);
          $('#menuSubscribeBtn').on('click', startSubPopUp);
					
          
        
           // allows 'enter' key to work with modal slides
           $(document).keypress(function(e) {
              if(e.which == 13 && $('#onload_m').is(':visible')) {
                e.preventDefault();
                if($('#onload_m.step1').is(':visible')){
                   $('#requestProdsBtn').click();
                }
                if($('#onload_m.step2').is(':visible')){
                   $('#mailingAddressBtn').click();
                }
                if($('#onload_m.step3').is(':visible')){
                   $('#placeOrderBtn').click();
                }
              }
            });
          
          
          
          //Opening and closing modals with buttons
					$('#requestProdsBtn').click(function(){
						 if(validateStep1()){
						 	 $('#onload_m.step1').modal('hide');
							 $('#onload_m.step2').modal('show');
               if($('#opt_inla001').prop('checked') == false){
                 $('#mailingAddressBtn').text("Submit");
               }
						 }
					});
          
          
        
        
					
					$('#mailingAddressBtn').click(function(){
						 if(validateStep2()){
              $('#onload_m.step2').modal('hide');
              if($('#opt_inla001').prop('checked')){
                $('#onload_m.step3').modal('show');
              } else {
                newSubForm.submit();
              }
						 }
					});
					
        
					$('#placeOrderBtn').click(function(){
						if(!validateStep3()){
								$('form[name=newSubForm]').submit(function(evt){
									 evt.preventDefault();
								});
						} else {
							newSubForm.submit();
						}
					});
				
			
			$('.step2 .step1_btn').on('click', function(evt){
				 $('#onload_m.step2').modal('hide');
				 $('#onload_m.step1').modal('show');
			});
			
			 $('.step3 .step1_btn').on('click', function(evt){
				 $('#onload_m.step3').modal('hide');
				 $('#onload_m.step1').modal('show');
			});
			
			 $('.step3 .step2_btn').on('click', function(evt){
				 $('#onload_m.step3').modal('hide');
				 $('#onload_m.step2').modal('show');
			});
        
      
       //removes padding that is put on 'body' tag when modal is shown
       $('#onload_m').on('hidden.bs.modal', function(e){
         $('body').css("padding-right", "0px");
       });

        
			
         //confirm closing and losing progress
        $('#onload_m .close').on('click', function (e) {
          if(confirm('Are you sure you want to close? You will lose your progress.')){
            $('#onload_m.step1').modal('hide');
            $('#onload_m.step2').modal('hide');
            $('#onload_m.step3').modal('hide');
          } 
        });

			
			function startSubPopUp(evt){
				 evt.preventDefault();
				 
				 let inputs = $('.newsletterEmailInput');
				 
				 if($(inputs).length){
				 		let email = $(inputs[0]).val();
				 		for(var i = 0; i < inputs.length; i++){	
							if($(inputs[i]).val().length > email.length){
								email = $(inputs[i]).val();
							}
						}
						$(".contact_wrp input[name='email']").val(email);
				 }
			
				 $('#onload_m.step1').modal('show');
			}
        
        
        
        

     
        
      
			function validateStep1(){
        
        var validator = $( "#newSubForm" ).validate({
          rules: {
            first_name: {
              required: true,
            },
            last_name: {
              required: true,
            },
            email: {
              required: true,
              email: true,
            },
            confirm_email: {
              required: true,
              email: true,
              equalTo: "#sub_email"
            },
            comp_name: {
              required: true,
            },
            phone: {
              required: true,
              min: 9
            },
            title: {
              required: true
            },
            am_id: {
              required: true
            }
          }
        });
        var validated = true;
        
        if(!validator.element("#sub_email")){
          validated = false;
        }
        if(!validator.element("#sub_confirm_email")){
          validated = false;
        }
        if(!validator.element("#sub_first_name")){
          validated = false;
        }
        if(!validator.element("#sub_last_name")){
          validated = false;
        }
        if(!validator.element("#sub_comp_name")){
          validated = false;
        }
        if(!validator.element("#sub_phone")){
          validated = false;
        }
        if(!validator.element("#titleSelect")){
          validated = false;
        }
          if(!validator.element("#amSelect")){
          validated = false;
        }
        
        

        if(!($("#opt_inla001").is(":checked") || $("#opt_inla002").is(":checked") || $("#opt_inla003").is(":checked") || $("#opt_inla004").is(":checked") || $("#opt_inla005").is(":checked"))){
					alert("Please subscribe/opt-in to at least one item.");
					validated = false;
				}
        
//				if (document.newSubForm.first_name.value.length < 2) {
//					alert("Please enter your first name.");
//					return false;
//				}
//				if (document.newSubForm.last_name.value.length < 2) {
//					alert("Please enter your last name.");
//					return false;
//				}
//				if (document.newSubForm.phone.value.length < 3) {
//					alert("Please enter your phone number.");
//					return false;
//				}
//				if (document.newSubForm.email.value.length < 3) {
//					alert("Please enter your email address.");
//					return false;
//				}
//        if(document.newSubForm.email.value !== document.newSubForm.confirm_email.value){
//          alert("Emails must match.");
//					return false;
//        }
//				if (document.newSubForm.title.value.length < 3) {
//					alert("Please enter your title.");
//					return false;
//				}
//				if (document.newSubForm.comp_name.value.length < 1) {
//					alert("Please enter your company name.");
//					return false;
//				}

//        if(document.newSubForm.title.value == "titleDefault"){
//          alert("Please select your title.");
//					return false;
//        }
//        if( document.getElementById("amSelect").selectedIndex < 1){
//          alert("Please select what you do at your company.");
//					return false;
//        }
//
				return validated;
			}
			
			
			function validateStep2(){
				if ($("input[type=checkbox].prodRequestsInput:checked").length < 1) {
					alert("Please check at least one product or no products.");
					return false;
				}
				return true;
			}
			
			function validateStep3(){
				if (document.newSubForm.mailing_address_1.value.length < 3) {
					alert("Please enter your mailing address.");
					return false;
				}
				if (document.newSubForm.zip.value.length < 3) {
					alert("Please enter your zip code.");
					return false;
				}
				if (document.newSubForm.city.value.length < 1) {
					alert("Please enter your city .");
					return false;
				}
				if (document.newSubForm.state.value.length < 1) {
					alert("Please select your state.");
					return false;
				}
				return true;
			}
					
					
      });
			
  </script>
	
<? } ?>	




