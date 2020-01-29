<?php session_start() ?>


<?  include '../../includes/la-common-top.php'; ?>



    <div style="box-shadow: 0 2px 30px 0 rgba(0, 0, 0, 0.28); border-bottom: 1px solid #f5f5f5;">
      
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <img src="http://landscapearchitect.com/images/basic/logo.jpg" width="100%" style="max-width: 450px; padding-top: 10px; padding-bottom: 15px;">
          <h2 style="font-size: 31px; text-align: center;">Welcome to the Subscription Request and Profile Management Center</h2>
        </div>
    
      </div>

     </div>   
    </div>


<?


    $uname2 = $_SESSION['name'];

    $uname3 = $_SESSION['lname'];

    $ucode = $_GET['ucode3'];

    $vnumber = $_GET['number'];

    $prodNumber = $_GET['prodNum'];

    $xpage2 = '/LandscapeProducts/product-details.php?number=' . $vnumber . '&prodNum=' . $prodNumber . '';


    function random_password( $length = 8 ) {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $passwordus = substr( str_shuffle( $chars ), 0, $length );
      return $passwordus;
    }


    $passwordus = random_password(8);

    $action2 = $_GET['action'];
    $id = $_GET['id'];
                
				
          include '../../includes/connect3.inc';


				  // Edit Fill
					$sql="select * from subscribe where id='" . $id . "'";
					$result = $conn->query($sql);									

												
						while($row = mysqli_fetch_array($result)) {
                            

              $firstName = $row['first_name'];
              $last_name = $row['last_name'];
              $comp_name = $row['comp_name'];
              $address = $row['address'];
              $city = $row['city'];
              $state = $row['state'];
              $zip = $row['zip'];
              $phone = $row['phone'];
              $fax = $row['fax'];
              $email = $row['email'];
              $personal = $row['month'];


              $biz_title = $row['biz_title'];
              $am_id = explode(",", $row['am_id']);
              $authority = explode(",", $row['auth']);
              $overwork_id = explode(",", $row['area']);
              $acreage_id = $row['acres'];
              $sites_id = explode(",", $row['sites_id']);
              $does = explode(",", $row['type_biz']);
              $assoc = explode(",", $row['assoc']);	
							
							

?>



  <form action="sub3-renew.php?action=edit&id=<? echo $id; ?>" method="POST" id="subRenewForm">
	<input type="hidden" value="<? echo $passwordus; ?>" name="pass" />

  <section class="content_sec full_width vendorPages subPage">
        
    <div class="container">
      <div class="row">
      
    
        <div style="display: flex; flex-wrap: wrap;">
        
          <!-- START personal info input -->
          <div class="col-md-6 col-sm-12 input_fl renewInputContainer">
          
            <div class="col-sm-12">
              <h2 class="subscriptionSectionTitles">Personal Information:</h2>
            </div>
            
            <div class="cell col-sm-12">

              <div class="col-sm-6">
                <label for="chkk"> First Name</label> 
                <input type="text" name="first_name" value="<? echo $firstName ?>" required/>
              </div>
              <div class="col-sm-6">
                <label for="chkk"> Last Name</label> 
                <input type="text" name="last_name" value="<? echo $last_name ?>" required/>
              </div>
              <div class="col-sm-6">
                <label for="chkk"> Company Name</label> 
                <input type="text" name="coname" value="<? echo $comp_name ?>" required/>
              </div>
              <div class="col-sm-6">
                <label for="chkk"> Company Address</label> 
                <input type="text" name="address" value="<? echo $address ?>" required/>
              </div>				
              <div class="col-md-6 col-sm-12">
                <label for="chkk"> City</label> 
                <input type="text" name="city" value="<? echo $city ?>"required />
              </div>
              <div class="col-md-3 col-sm-12">
                <label for="chkk"> State</label> 
                <input type="text" name="state" value="<? echo $state ?>" required/>
              </div>						
              <div class="col-md-3 col-sm-12">
                <label for="chkk"> Zip</label> 
                <input type="text" name="zip" value="<? echo $zip ?>" required/>
              </div>	
              <div class="col-sm-12">
                <label for="chkk"> Email</label> 
                <input type="text" name="email" value="<? echo $email ?>" required />
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="chkk"> Phone</label> 
                <input type="text" name="phone" value="<? echo $phone ?>" required/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="chkk"> FAX</label> 
                <input type="text" name="fax" value="<? echo $fax ?>" />
              </div>					
              <div class="col-sm-12" id="personalIdentifierContainer">
                 <h4 style="padding-top: 15px;">Also We Need A Personal Identifier <span style="font-style: italic; font-size: 14px;">(A US post office requirement.)</span></h4>
                <label for="chkk">First Three Letters of the Name of my High School</label> 
                <input type="text" name="month" value="<? echo  $personal ?>" pattern=".{3,3}" maxlength="3" required/>
              </div>					
            </div>
          </div><!-- /.renewInputContainer -->
			    <!-- END personal info input -->
        
        
        
        
          <?php

            $sql="select * from subscribe where id='" . $_GET['id'] . "'";
            $result=mysqli_query($conn,$sql);

              while($row = mysqli_fetch_array($result)) {

                if (!empty($row['opt_inla'])) {


                    $str = $row['opt_inla'];

                    list($opt_inla001, $opt_inla002, $opt_inla003, $opt_inla004, $opt_inla005) = explode(',', $str);                                        


                }

              }         								

          ?>
			
			   <!-- START Subscription options checkboxes -->
         <div class="col-md-6 col-sm-12 input_fl subscriptionCheckBoxContainer flex-column">
            <div class="col-sm-12">
              <h2 class="subscriptionSectionTitles">Subscriptions:</h2>
            </div>
           
            <div class="cell col-sm-12 flex-column" style="flex-grow: 1;">
             <div class="row">
                <div class="col-sm-12">
                  <img width="100%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" style="margin-top:20px; display: block; margin: 0 auto; max-width: 600px;">
                   <h4 style="font-size: 20px; margin-top: 25px;" class="text-center">I would like to subscribe / opt-in to receive</h4>
                   
                </div>

                <div class="col-sm-12">
                  <input type="checkbox" name="opt_inla001" class="webCheckbox" value="LA-MS" id="lasn1" value="LA-MS" checked>
                  <label for="lasn1"> LASN Magazine Subscription</label> 
                </div>
               
                 <div class="col-sm-12">
                  <input type="checkbox" name="opt_inla005" class="webCheckbox" value="LA-W" id="lasn5" <? if ($opt_inla005 == "LA-W") echo "checked"; ?> value="LA-W" checked>
                  <label for="lasn5"> LA Weekly E-Newsletter</label> 
                </div>
               
                  <div class="col-sm-12">
                  <input type="checkbox" name="opt_inla003" class="webCheckbox" value="LA-DM" id="lasn3" <? if ($opt_inla003 == "LA-DM") echo "checked"; ?> value="LA-DM" checked>
                  <label for="lasn3"> LASN Digital Magazine</label> 
                </div>
               
                <div class="col-sm-12">
                  <input type="checkbox" name="opt_inla002" class="webCheckbox" value="LA-CE" id="lasn2" <? if ($opt_inla002 == "LA-CE") echo "checked"; ?> value="LA-CE" checked>
                  <label for="lasn2"> LASN Calls for Editorial</label> 
                </div>

                  <div class="col-sm-12">
                  <input type="checkbox" name="opt_inla004" class="webCheckbox" value="LA-ASP" id="lasn4" <? if ($opt_inla004 == "LA-ASP") echo "checked"; ?> value="LA-ASP" checked>
                  <label for="lasn4">Targeted Vendor Promotions</label> 
                </div>	 
             </div><!-- /.row -->

                    

            <!--
                  <div class="col-lg-8 col-sm-offset-4">

                    <div class="row">
                      <div class="col-sm-6">
                            <center><h4 style="font-size: 16px">I would like to opt-in to allow relevant Eblasts<br>
                        from manufacturers of products in the follow categories.</h4>
                        <img width="30%" src="http://landscapearchitect.com/lol-logos/eblast-logo.jpg"></center>		
                    </div>
                  </div><br>

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb001" value="EB-BS" class="webCheckbox" id="eb001" <? if ($opt_ineb001 == "EB-BS") echo "checked";?>>
                      <label for="EB-BS"> Business Services &amp; Software</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb002" value="EB-PMBR" class="webCheckbox" id="eb002" <? if ($opt_ineb002 == "EB-PMBR") echo "checked";?>>
                      <label for="EB-PMBR"> Pavers, Masonry, Blocks &amp; Rocks</label> 
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb003" value="EB-EI" class="webCheckbox" id="eb003" <? if ($opt_ineb003 == "EB-EI") echo "checked";?>>
                      <label for="EB-EI"> Equipment: Installation</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb004" value="EB-PW" class="webCheckbox" id="eb004" <? if ($opt_ineb004 == "EB-PW") echo "checked";?>>
                      <label for="EB-PW"> Pest / Wildlife</label> 
                      </div>	  
                    </div>

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb005" value="EB-EM" class="webCheckbox" id="eb005" <? if ($opt_ineb005 == "EB-EM") echo "checked";?>>
                      <label for="EB-EM"> Equipment: Maintenance</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb006" value="EB-PA" class="webCheckbox" id="eb006" <? if ($opt_ineb006 == "EB-PA") echo "checked";?>>
                      <label for="EB-PA"> Plant Accessories &amp; Amendments</label> 
                      </div>	  
                    </div>

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb007" value="EB-ETP" class="webCheckbox" id="eb007" <? if ($opt_ineb007 == "EB-ETP") echo "checked";?>>
                      <label for="EB-ETP"> Equipment: Tools / Parts</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb008" value="EB-SAG" class="webCheckbox" id="eb008" <? if ($opt_ineb008 == "EB-SAG") echo "checked";?>>
                      <label for="EB-SAG"> Sculpture / Art / Garden Ornaments</label> 
                      </div>	  
                    </div>	

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb009" value="EB-EC" class="webCheckbox" id="eb009" <? if ($opt_ineb009 == "EB-EC") echo "checked";?>>
                      <label for="EB-EC"> Erosion Control</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb010" value="EB-SA" class="webCheckbox" id="eb010" <? if ($opt_ineb010 == "EB-SA") echo "checked";?>>
                      <label for="EB-SA"> Site Amenities</label> 
                      </div>	  
                    </div>	

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb011" value="EB-F" class="webCheckbox" id="eb011" <? if ($opt_ineb011 == "EB-F") echo "checked";?>>
                      <label for="EB-F"> Fencing</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb012" value="EB-SFR" class="webCheckbox" id="eb012" <? if ($opt_ineb012 == "EB-SFR") echo "checked";?>>
                      <label for="EB-SFR"> Site Furnishings &amp; Receptacles</label> 
                      </div>	  
                    </div>	

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb013" value="EB-LE" class="webCheckbox" id="eb013" <? if ($opt_ineb013 == "EB-LE") echo "checked";?>>
                      <label for="EB-LE"> Lighting / Electrical</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb014" value="EB-WF"  class="webCheckbox" id="eb014" <? if ($opt_ineb014 == "EB-WF") echo "checked";?>>
                      <label for="EB-BS"> Water Features</label> 
                      </div>	  
                    </div>	

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb015" value="EB-OL" class="webCheckbox" id="eb015" <? if ($opt_ineb015 == "EB-OL") echo "checked";?>>
                      <label for="EB-OL"> Outdoor Living</label> 
                      </div>
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb016" value="EB-WM" class="webCheckbox" id="eb016" <? if ($opt_ineb016 == "EB-WM") echo "checked";?>>
                      <label for="EB-WM"> Water Management</label> 
                      </div>	  
                    </div>	

                    <div class="row">
                      <div class="col-sm-3">
                      <input type="checkbox" name="opt_ineb017" value="EB-PR" class="webCheckbox" id="eb017" <? if ($opt_ineb017 == "EB-PR") echo "checked";?>>
                      <label for="EB-PR"> Park &amp; Recreation</label> 
                      </div>
                      <div class="col-sm-3">

                      <label for="chkk"></label> 
                      </div>	  
                    </div>


                    <br>

                  </div>	
            -->
              
              
              
           </div> <!-- /.cell -->
        </div><!-- /.renewInputContainer -->
         <!-- END Subscription options checkboxes -->
        
        </div>

	<input type="hidden" value="<? echo $id; ?>" name="id" />


	<?
								
//    $sql="select * from subscribe where id='" . $_GET['id'] . "'";
//    $result=mysqli_query($conn,$sql);
//
//      while($row = mysqli_fetch_array($result)) {
//
//        if (!empty($row['opt_inla'])) {
//
//
//            $str = $row['opt_inla'];
//
//            list($overwork_id, $opt_inla002, $opt_inla003, $opt_inla004, $opt_inla005) = explode(',', $str);                                        
//
//
//        }
//
//      }         								
																
	?>
			
			
<!-- Title Start -->			
<div class="col-sm-12" style="margin-top: 60px;">
		
 <div class="cell col-sm-12">
    <div class="col-sm-12">
       <h2>Title&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Please Choose One)</span></h2>
	</div>
      
   
	 
						<?
              
                include '../../includes/connect4.inc';

								
								$sql = "SELECT * FROM type_title ORDER by id ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							

                 while ($row = mysqli_fetch_assoc($result)) {
                    
                   if ($row["name"] == $biz_title) {  $t = "checked"; } else { $t = " ";}
                   
                   $name = str_replace('_', ' ', $row['name']);
                   
                     echo '<div class="col-md-3 col-sm-4">
                        <input type="radio" name="title" class="webRadio" value="' . $row['name'] . '" id="title-' . $row['id'] . '" ' . $t . ' required>
                        <label for="title-' . $row['id'] . '">&nbsp;' . $name . '</label> 
                        </div>';

                  }//end while
																					
							?>	 
	 
	 
		
  
		
    </div>
  </div>	  
<!-- Title End -->	
		   
		   

<!-- Iam Start -->			
 <div class="col-sm-12" style="margin-top: 60px;">

   <div class="cell col-sm-12">
      <div class="col-sm-12">
         <h2>I Am A&nbsp;&nbsp;&nbsp;<span id="iAmCheckBoxContainer-RequiredText" class="subFormRequiredText">*Required Field (Select all that apply)</span></h2>
      </div>

           <div class="iAmCheckBoxContainer required subFormLargeCheckContainer" id="iAmCheckBoxContainer">
              <?

              $sql = "SELECT * FROM type_iam ORDER by id ASC";
              $result = $conn->query($sql);	

              $num_rows = mysqli_num_rows($result);

              $first = true;


                 while ($row = mysqli_fetch_assoc($result)) {


                     $dresult = substr($row['name'], 0, 3);

                      if ($dresult == '---') {

                        $str2 = substr($row['name'], 3);

                        $newName = $str2;

                        $newLine = '&nbsp;';


                        if(!$first){
                            $newLine2 = '<label for="am_id" class="checkBoxSubTitle">&nbsp;' . $newName . '</label>';
                        } else {
                          $newLine2 = '<label for="am_id" class="checkBoxSubTitleFirst">&nbsp;' . $newName . '</label>';
                        }



                      } else {

                       $newName = str_replace('_', ' ', $row['name']);

                      if (in_array($row['name'] ,$am_id))
                      $t = "checked";
                      else
                      $t = "";

                       $newLine = '<input type="checkbox" ' . $t . ' name="am_id[]" class="webCheckbox" value="' . $row['name'] . '" id="am_id-' . $row['id'] . '">';

                       $newLine2 = '<label for="am_id-' . $row['id'] . '">&nbsp;' . $newName . '</label>';

                      }

                        echo '<div class="">
                          ' . $newLine . '
                          ' . $newLine2 . '
                          </div>';

                    $first = false;
                  }



              ?>	 



    </div><!-- /.iAmCheckBoxContainer -->


  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	  
<!-- Iam End -->			
		   

		   
<!-- Authority Start -->			
<div class="col-sm-12" style="margin-top: 60px;">
		
 <div class="cell col-sm-12">
    <div class="col-sm-12">
       <h2>My Authority Allows Me to&nbsp;&nbsp;&nbsp;<span id="authorityCheckboxContainer-RequiredText" class="subFormRequiredText">*Required Field (Select all that apply)</span></h2>
	</div>
	 		
     <div class="authorityCheckboxContainer required" id="authorityCheckboxContainer">
       <?php
										
						$sql = "SELECT * FROM type_authority ORDER by sub_number ASC";
            $result = $conn->query($sql);	

            $num_rows = mysqli_num_rows($result);


               while ($row = mysqli_fetch_assoc($result)) {

                  if (in_array($row['name'] ,$authority))
                  $t = "checked";
                  else
                  $t = "";

                 echo '<div class="col-sm-3">
                    <input type="checkbox" name="authority[]" class="webCheckbox" value="' . $row['name'] . '" id="authority-' . $row['id'] . '" ' . $t . '>
                    <label for="authority-' . $row['id'] . '">&nbsp;' . $row['name'] . '</label>
                    </div>';


                }
											
				?>	 
      </div><!-- /.authorityCheckboxContainer -->
   
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->			   
		   
<!-- Authority End -->
		   

		   
<!-- My Company Start -->			
<div class="col-sm-12" style="margin-top: 60px;">
		
 <div class="cell col-sm-12">
    <div class="col-sm-12">
       <h2>Over 10% of My Company's or Department's Work&nbsp;&nbsp;&nbsp;<span id="myCompanyCheckBoxContainer-RequiredText" class="subFormRequiredText">*Required Field (Select all that apply)</span></h2>
	</div>
	   
       <div class="myCompanyCheckBoxContainer required" id="myCompanyCheckBoxContainer">
			<?php
										
            $sql = "SELECT * FROM type_overwork ORDER by sub_number ASC";
            $result = $conn->query($sql);	


           while ($row = mysqli_fetch_assoc($result)) {

              if (in_array($row['name'] ,$overwork_id))
              $t = "checked";
              else
              $t = "";													

              $name = str_replace('_', ' ', $row['name']);
              
               echo '<div class="col-md-3 col-sm-4">
                  <input type="checkbox" name="overwork_id[]" class="webCheckbox" value="' . $row['name'] . '" id="overwork_id-' . $row['id'] . '" ' . $t . ' >
                  <label for="overwork_id-' . $row['id'] . '">&nbsp;' . $name . '</label>
                  </div>';
            }

		?>	 
    </div><!-- /.myCompanyCheckBoxContainer -->
   
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	 
<!-- My Company End -->
		   

		   
		   
<!-- Acreage Start -->			
<div class="col-sm-12" style="margin-top: 60px;">
		
 <div class="cell col-sm-12">
    <div class="col-sm-12">
       <h2>The Annual Acreage My Company or Department Works On is&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Required Field (Please Choose One)</span></h2>
	</div>
	 
				<?
																					
            $sql = "SELECT * FROM type_acreage ORDER by sub_number ASC";
            $result = $conn->query($sql);	

            while ($row = mysqli_fetch_assoc($result)) {
              
                if($row['sub_number'] != 4){
                  $name = $row['name'];
                } else {
                  $name = str_replace('1', '0', $row['name']);
                }

                if ($name == $acreage_id) {  $t = "checked"; } else { $t = " ";}												
                 echo '<div class="col-lg-3 col-md-6 col-sm-6">
                    <input type="radio" name="acreage_id" class="webRadio" value="' . $name . '" id="acreage_id-' . $row['id'] . '" ' . $t . ' required>
                    <label for="acreage_id-' . $row['id'] . '">&nbsp;' . $name . '</label> 
                    </div>';
            }

        ?>	 

		
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	
<!-- Acreage End -->					   
		   

		   
<!-- My Company Is Start -->			
<div class="col-sm-12" style="margin-top: 60px;">
		
 <div class="cell col-sm-12">
    <div class="col-sm-12">
       <h2>My Company or Department Is A&nbsp;&nbsp;&nbsp;<br class="hidden-lg hidden-md"><span id="myCompanyIsCheckBoxContainer-RequiredText" class="subFormRequiredText">*Required Field (Select all that apply)</span></h2>
	</div>
	     
       <div class="myCompanyIsCheckBoxContainer required" id="myCompanyIsCheckBoxContainer">
				<?
											
              $sql = "SELECT * FROM type_sites ORDER by id ASC";
              $result = $conn->query($sql);	
              $count = 0;
                
               while ($row = mysqli_fetch_assoc($result)) {

                    if (in_array($row['name'] ,$sites_id))
                    $t = "checked";
                    else
                    $t = "";
                 
                    $name = str_replace('_', ' ', $row['name']);
                  
                    
                   echo '<div class="col-lg-3 col-md-6 col-sm-6">
                      <input type="checkbox" name="sites_id[]" class="webCheckbox" value="' . $row['name'] . '" id="sites_id-' . $row['id'] . '" ' . $t . '>
                      <label for="sites_id-' . $row['id'] . '">&nbsp;' . $name . '</label>
                      </div>';

                  $count++;
                }
																																						
				?>	 
	  </div><!-- /.myCompanyIsCheckBoxContainer -->
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	
<!-- My Company Is End -->		   
		   

		   
<!-- My Work Start -->			
<div class="col-sm-12" style="margin-top: 60px;">
		
 <div class="cell col-sm-12">
    <div class="col-sm-12">
       <h2>My Work Includes&nbsp;&nbsp;&nbsp;<span id="myWorkCheckBoxContainer-RequiredText" class="subFormRequiredText">*Required Field (Select all that apply)</span></h2>
	</div>
	 
   
          <div class="myWorkCheckBoxContainer required subFormLargeCheckContainer" id="myWorkCheckBoxContainer">
								<?
																					
								$sql = "SELECT * FROM type_does ORDER by id ASC";
								$result = $conn->query($sql);	
																					
								$num_rows = mysqli_num_rows($result);
							
									$first = true;
																					
									 while ($row = mysqli_fetch_assoc($result)) {
										 
										 
										 	 $dresult = substr($row['name'], 0, 3);
										 
										 	  if ($dresult == '---') {
												  
												  $str2 = substr($row['name'], 3);
												  
												  $newName = $str2;
												  
												  $newLine = '&nbsp;';
												  
                          
                           if(!$first){
                              $newLine2 = '<label for=lasn1" class="checkBoxSubTitle">&nbsp;' . $newName . '</label>';
                            } else {
                              $newLine2 = '<label for="lasn1" class="checkBoxSubTitleFirst">&nbsp;' . $newName . '</label>';
                            }
                          
												  
											  } else {
												  
												 $newName = str_replace('_', ' ', $row['name']);
												  
													if (in_array($row['name'] ,$does))
													$t = "checked";
													else
													$t = "";													  
												  
												  
												 $newLine = '<input type="checkbox" name="does[]" class="webCheckbox" value="' . $row['name'] . '" id="does-' . $row['id'] . '" ' . $t . '>';
												  
												 $newLine2 = '<label for="does-' . $row['id'] . '">&nbsp;' . $newName . '</label>';
												  
											  }
										 
											
												 echo '<div class="">
														' . $newLine . '
														' . $newLine2 . '
													  </div>';
                     
                      $first = false;
										 
										}
																					
																					
																	
								?>	 
	 
	 
		
  
   </div><!-- /.myWorkCheckBoxContainer -->
		
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->	 
<!-- My Work End -->		   
		   

		   
<!-- I Am a Member Start -->			
<div class="col-sm-12" style="margin-top: 60px;">
		
 <div class="cell col-sm-12">
    <div class="col-sm-12">
       <h2>I Am a Member of the Following Association(s)&nbsp;&nbsp;&nbsp;<br class="hidden-lg"><span style="font-size: 14px; font-weight: 400">*Required Field (Select all that apply)</span></h2>
	</div>
	 
		      <?
										
              $sql = "SELECT * FROM type_assoc ORDER by id ASC";
              $result = $conn->query($sql);	

              $num_rows = mysqli_num_rows($result);

                $rcount = 0;

                 while ($row = mysqli_fetch_assoc($result)) {


                        if (in_array($row['name'] ,$assoc))
                        $t = "checked";
                        else
                        $t = "";												

                       echo '<div class="col-lg-3 col-md-4 col-sm-4">
                          <input type="checkbox" name="assoc[]" class="webCheckbox" value="' . $row['name'] . '" id="assoc-' . $row['id'] . '" ' . $t . '>
                          <label for="assoc-' . $row['id'] . '">&nbsp;' . $row['name'] . '</label>
                          </div>';

                  }



              ?>	 
  
		
  </div><!-- /.cell -->
</div><!-- /.col-sm-12 -->		    
<!-- I Am a Member End -->		   		   
		   

	
<?
							
        $sql="select * from subscribe where id='" . $_GET['id'] . "'";
        $result=mysqli_query($conn,$sql);

          while($row = mysqli_fetch_array($result)) {

            if (!empty($row['opt_ineb'])) {


                $str = $row['opt_ineb'];

                list($opt_ineb001, $opt_ineb002, $opt_ineb003, $opt_ineb004, $opt_ineb005, $opt_ineb006, $opt_ineb007, $opt_ineb008, $opt_ineb009, $opt_ineb010, $opt_ineb011, $opt_ineb012, $opt_ineb013, $opt_ineb014, $opt_ineb015, $opt_ineb016, $opt_ineb017) = explode(',', $str);                                        


            }

          }                                															
							
?>
	
	
	
	
        
        
        
    
            <div class="col-sm-12" style="margin-top: 20px;">
              <button type="submit" class="button_style" id="subRenewStepOneSubmit">Continue to Step 2 of 2</button>
              <p class="text-center" style="margin-top: 15px;">Need help? Call<a href="tel:7149795276"> 714-979-5276</a> |
              <a href="mailto:info@landscapearchitect.com">Email Us</a></p>
            </div>
            <!-- /.col-sm-12 -->

			  
      </div><!-- /.row -->	
    </div> <!-- /.container -->		
    
  </section> <!-- /.content_sec -->		
</form>
        
       <? } ?> 
        
        
       
<style>
  footer {
    display: none;
  }
</style> 
        
        
        
        
  <!-- Mag OptIn End -->						

		<? include '../../includes/la-common-footer-inner.inc'; ?>

<script>
  
    $("input[name=opt_inla001]").change(function(){
      if($("input[name=opt_inla001]")[0].checked){
        $("input[name=address]").prop("required", "true");
        $("input[name=city]").prop("required", "true");
        $("input[name=state]").prop("required", "true");
        $("input[name=zip]").prop("required", "true");
      } else {
        $("input[name=address]").removeAttr("required");
        $("input[name=city]").removeAttr("required");
        $("input[name=state]").removeAttr("required");
        $("input[name=zip]").removeAttr("required");
      }
    })

  
    //validates checkbox groups and error styles to required text if none were selected in group
    $('#subRenewStepOneSubmit').click(function(event){
      
      var checkboxArr = []; //array of classes of checkbox groups with no checkboxes selected
      if( $('div.iAmCheckBoxContainer.required :checkbox:checked').length < 1 ){ checkboxArr.push('iAmCheckBoxContainer'); };
      if( $('div.authorityCheckboxContainer.required :checkbox:checked').length < 1 ){ checkboxArr.push('authorityCheckboxContainer'); };
      if( $('div.myCompanyCheckBoxContainer.required :checkbox:checked').length < 1 ){ checkboxArr.push('myCompanyCheckBoxContainer'); };
      if( $('div.myCompanyIsCheckBoxContainer.required :checkbox:checked').length < 1 ){ checkboxArr.push('myCompanyIsCheckBoxContainer'); };
      if( $('div.myWorkCheckBoxContainer.required :checkbox:checked').length < 1 ){ checkboxArr.push('myWorkCheckBoxContainer'); };
      
      if(!$.isEmptyObject(checkboxArr)){
        event.preventDefault();
        $.each(checkboxArr, function(key, value){
          if(key == 0){
            $('html, body').stop().animate({'scrollTop': $('.' + value).offset().top - 100}, 100, 'swing');
          }
          setTimeout(function(){  $('#' + value + '-RequiredText').addClass('subFormError', 500); }, 300);
        });
      }
    });
  
  
    //removes error styles from required text when one or more are checked in checkbox group
    $('div.required :checkbox').change(function(event){
      var divContainerId = $(this).parent().parent()[0].id;
      $('#' + divContainerId + '-RequiredText').removeClass('subFormError', 100);
    }); 
  
  
</script>
		
