<?php session_start() ?>


<? 

  
  include '../../includes/la-common-top.php';

  include '../../includes/connect4.inc';

?>


 <div style="box-shadow: 0 2px 30px 0 rgba(0, 0, 0, 0.28); border-bottom: 1px solid #f5f5f5;" id="topOfPage">
      
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

      $action = $_GET['action'];

      $id = $_GET['id'];

//      $id = $_POST['id'];


      if($action == "edit"){
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $comp_name = $_POST['coname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fax = $_POST['fax'];

        if(isset($_POST['opt_inla001'])){
          $opt_inla001 = $_POST['opt_inla001'] . ", ";
        }

        if(isset($_POST['opt_inla002'])){
          $opt_inla002 = $_POST['opt_inla002'] . ", ";
        }

        if(isset($_POST['opt_inla003'])){
          $opt_inla003 = $_POST['opt_inla003'] . ", ";
        }

        if(isset($_POST['opt_inla004'])){
          $opt_inla004 = $_POST['opt_inla004'] . ", ";
        }

        if(isset($_POST['opt_inla005'])){
          $opt_inla005 = $_POST['opt_inla005'] . ", ";
        }





        $biz_title = $_POST['title'];
        $am_id = implode(",",$_POST['am_id']);
        $auth = implode(",",$_POST['authority']);
        $area = implode(",",$_POST['overwork_id']);
        $acres = $_POST['acreage_id'];
        $sites_id = implode(",",$_POST['sites_id']);
        $type_biz = implode(",",$_POST['does']);
        $assoc = implode(",",$_POST['assoc']);
        $identifier = $_POST['month'];
        $webId = $id;
        $optString = $opt_inla001 . $opt_inla002 . $opt_inla003 . $opt_inla004 . $opt_inla005;


        
     
        // Attempt insert query execution
        $sql = "UPDATE subscribe SET comp_name = '" . $comp_name . "', first_name = '" . $first_name . "', last_name = '" . $last_name . "', address = '" . $address . "', city = '" . $city . "', state = '" . $state . "', zip = '" . $zip . "', email = '" . $email . "', phone = '" . $phone . "', fax = '" . $fax ."', month = '" . $identifier . "', biz_title = '" . $biz_title . "', am_id = '" . $am_id . "', auth = '" . $auth . "', area = '" . $area . "', acres = '" . $acres . "', sites_id = '" . $sites_id . "', type_biz = '" . $type_biz . "', assoc = '" . $assoc . "', status = '0', active = '1', opt_inla = '" . $optString . "' WHERE id='" . $id . "'";

        if(mysqli_query($conn, $sql)){
          echo "&nbsp;";
        } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

     
        
      } else if($action == "prod"){
       
        $webId = $id;
        $first_name = $_SESSION['name'];
        $last_name = $_SESSION['lname'];
      }
      
				

      // Edit Fill
      $sql="select * from subscribe where id='" . $webId . "'";
      $result = $conn->query($sql);									


      while($result = mysqli_fetch_array($result)) {
                            							
							

?>

 <form action="/" id="subRenewForm">

   
   
	<input type="hidden" value="<? echo $first_name; ?>" name="first_name">
	<input type="hidden" value="<? echo $last_name; ?>" name="last_name">
	<input type="hidden" value="<? echo $email; ?>" name="email">    
   
   
      
  <section class="content_sec full_width vendorPages subPage">
        
    <div class="container">
      <div class="row"> 
		

<?php

    $sql="select * from subscribe where id='" . $_GET['id'] . "'";
    $result=mysqli_query($conn,$sql);

      while($row = mysqli_fetch_array($result)) {

        $ylist_id = explode(",", $row['ylist_id']);


//
//        $pieces = explode(",", $row['ylist_id']);
//        echo $pieces[0]; // piece1
//        echo $pieces[1]; // piece2									


      }         												
?>
			
			
<!-- Categories Start -->			
<div class="col-sm-12" style="margin-bottom: 40px;">

      <div class="col-lg-10 col-lg-offset-1 col-md-12" style="border-bottom: 1px solid gray; margin-bottom: 30px;">
        <h2 class="text-center" style="font-size: 30px; margin-top: 0px;">Welcome <? echo $first_name . " " . $last_name ?></h2>
        <p style="text-align: center; font-size: 18px; margin-top: 15px; margin-bottom: 5px;">to the</p>
        <h2 class="subscriptionSectionTitles text-center" style="margin-bottom: 5px; font-size: 40px; margin-top: 0px;">Product Info Request Center:</h2>
        <p class="subHead text-center">Connect with Several Manufacturers All at Once!<br>Select the product categories below to receive product details, quotes and special offers from leading manufacturers.</p>
      </div>

     <div class="col-lg-10 col-lg-offset-1 col-md-12 text-center" id="top_subcategories">
	 
               
                <div class="col-sm-4">
                    <h4><a href="#LL">Landscape Lighting</a></h4> 
                </div>	
       
                <div class="col-sm-4">
                    <h4><a href="#PMBR">Pavers, Masonry, Blocks &amp; Rocks</a></h4> 
                </div>	
       
                <div class="col-sm-4">
                    <h4><a href="#WF">Water Features</a></h4> 
                </div>	
       
                <div class="col-sm-4">
                    <h4><a href="#PM">Plant Materials</a></h4> 
                </div>	
       
                <div class="col-sm-4">
                    <h4><a href="#PA">Plant Accessories</a></h4> 
                </div>
       
                <div class="col-sm-4">
                    <h4><a href="#TO">Turf &amp; Ornamental</a></h4> 
                </div>	 	 

                <div class="col-sm-4">
                    <h4><a href="#OL">Outdoor Living</a></h4> 
                </div>	
                <div class="col-sm-4">
                    <h4><a href="#PR">Park and Recreation</a></h4> 
                </div>	
       
                 <div class="col-sm-4">
                    <h4><a href="#SA">Site Amenities</a></h4> 
                </div>	

                <div class="col-sm-4">
                    <h4><a href="#GR">Green Roof</a></h4> 
                </div>	

                <div class="col-sm-4">
                    <h4><a href="#WM">Water Management / Irrigation</a></h4> 
                </div>

                <div class="col-sm-4">
                    <h4><a href="#SEC">Stormwater/Erosion Control</a></h4> 
                </div>	

                <div class="col-sm-4">
                    <h4><a href="#BS">Business Services</a></h4> 
                </div>	

                <div class="col-sm-4">
                  <h4>&nbsp;</h4></label> 
                </div>  

                <div class="col-sm-4">
                    <h4>Tools &amp; Equipment</h4> 
                </div>

                 <div class="col-sm-4">
                    <h4><a href="#EI">Installation Equipment</a></h4> 
                </div>	

                  <div class="col-sm-4">
                    <h4><a href="#EM">Maintenance Equipment</a></h4> 
                </div>	

                  <div class="col-sm-4">
                    <h4><a href="#EPR">Parts &amp; Repair</a></h4> 
                </div>	
                
            </div>	 	 		 

	  </div>	
<!-- Catgories End -->			
		   
  
<!--
  <div class="check_box__ col-md-4 col-xs-6">
    <input type="checkbox" class="form-check-input prodRequestsInput" id="2608" name="ylist[]" value="2608">
    <label for="2608"></label>
    <label class="form-check-label" for="2608">compost</label>
  </div>
-->
        
        
  <?
      include '../../includes/connect3.inc';
            
      $categorys = [
          ['Landscape Lighting', 'LL', 13731],
          ['Pavers, Masonry, Blocks & Rocks', 'PMBR', 13734],
          ['Water Features', 'WF', 13726],
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
          ['Installation Equipment', 'EI', 13727], 
          ['Maintenance Equipment', 'EM', 13728],
          ['Parts & Repair', 'EPR', 13729],
        ];
            
            
        foreach($categorys as $index){
            $catName = $index[0];
            $catAbbrev = $index[1];
            $catNum = $index[2];   
          
          ?>
          
        
          <div style="position: relative; top: -30px; clear: both;" id="<? echo $catAbbrev ?>">&nbsp;</div>
      
          <div class="col-sm-12" style="margin-top: -40px;">

              <div class="col-sm-12">
                <h2 class="subscriptionSectionTitles"><? echo $catName ?>&nbsp;&nbsp;&nbsp;<span style="font-size: 14px; font-weight: 400">*Choose desired product information</span></h2>
              </div>

             <div class="cell col-sm-12">
        
        
        <?
          
          
            $sql = "SELECT * FROM ylist WHERE idParent = " . $catNum . " AND prod_info = 0 ORDER BY name";
            $result = $conn->query($sql);							


            $num_rows = mysqli_num_rows($result);

               while ($row = mysqli_fetch_assoc($result)) {

                 if ($row["name"] > 0) { echo "checked"; }

                      if (in_array($row['sub_number'] ,$ylist_id))
                      $t = "";
                      else
                      $t = "";													

                     echo '<div class="col-lg-3 col-md-4 col-sm-6 check_box__">
                        <input type="checkbox" name="ylist[]" class="form-check-input ylist" value="' . $row['sub_number'] . '" id="' . $row['sub_number'] . '" ' . $t . '>
                        <label for="' . $row['sub_number'] . '"></label>
                        <label for="' . $row['sub_number'] . '" class="form-check-label">' . $row['name'] . '</label>
                        </div>';

                }
												
          ?>
               
            
               
            </div><!-- /.cell -->
            <div class="subcateogry_footerLinks" style="padding-top: 15px; clear: both;"><a href="#topOfPage">Top</a> <a href="#sub3SubmitBtn">Finished Picking Products</a></div>
          </div><!-- /.col-sm-12 -->
      
        <? 
          } //end forEach
        ?>
 
	
	        <div style="position: relative; top: -40px; clear: both;" id="BBB">&nbsp;</div>
      
      
            <div class="cell col-md-6 col-md-offset-3" style="background: none; padding: 0px;">
              <div class="check_box__ text-center noProdContainer">
                <input type="checkbox" class="form-check-input ylist" id="none" name="ylist[]" value="none">
                <label for="none" data-toggle="confirmation" data-title="Are you sure?" data-content="Checking this box will uncheck all products above." id="noYlist"></label>
                <label class="form-check-label" for="none" style="width: auto;" data-toggle="confirmation" data-title="Are you sure?" data-content="Checking this box will uncheck all products above.">No thanks, I don't want to select any products</label>
              </div>
            </div>

		
		
            <div class="col-sm-12" style="margin-top: 20px;">
              <button type="submit" class="button_style" id="sub3SubmitBtn">Submit</button>
              <p class="text-center" style="margin-top: 15px;">Need help? Call<a href="tel:7149795276"> 714-979-5276</a> |
              <a href="mailto:info@landscapearchitect.com">Email Us</a></p>
            </div>
            <!-- /.col-sm-12 -->

			  
      </div><!-- /.row -->	
    </div> <!-- /.container -->		
    
  </section> <!-- /.content_sec -->		
</form>
        
       <? } ?> 
        

        
  <!-- Mag OptIn End -->						

		<? include '../../includes/la-common-footer-inner.inc'; ?>




<div class="all_modals_ full_width">
  <div class="modal fade start subThankYou" id="id01" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog logInModal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="margin-top: 10px;">Profile Updated</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">CLOSE X</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="modal_cot full_width">
              <p style="font-size: 25px; text-align: center; margin-top: 10px;">Thank you <span id="firstNameThankYou"></span></p>
              <p style="font-size: 19px; text-align: center;">Your subscription has been updated</p>
              <a class="button_style" href="https://landscapearchitect.com" style="padding-top: 10px">
               Return To Site
              </a>
            </div><!-- /.modal_cot -->
          </div>
        </div>
      </div>
    </div>
  </div>



<script>
$(window).on('load',function(){     

      $('#sub3SubmitBtn').click(function(event){
        event.preventDefault();

        $.post(
          'thankyou-renew-db.php',
          {ylist: $('.ylist:checked').serialize(), id: "<? echo $_GET['id'] ?>", userName: "<? echo $_POST['first_name'] ?>"},
          function(data){
            data = JSON.parse(data);
            if(data.success == true){
              document.getElementById("firstNameThankYou").innerHTML = data.name;
              $('#id01.subThankYou').modal('show');
            }
          }
        )
      });


      //on form completion, return user to home page
      $('#id01.subThankYou').on('hide.bs.modal', function (e) {
          window.location = "https://landscapearchitect.com";
        });
  
//      $('[data-toggle=confirmation]').click(function(event){
//        if($('#none.ylist:checked')){
//          $('#noYlist[data-toggle=confirmation]').confirmation('destroy');
//          $("#none.ylist").attr('checked', false);
//        }
//      });
//      
//
//       $('[data-toggle=confirmation]').confirmation({
//            rootSelector: '[data-toggle=confirmation]',
//            onConfirm: function(v1){
//             $("input:checkbox").attr('checked', false);
////             $("#none.ylist").attr('checked', true);
//                          $("#none.ylist").prop('checked', true);
//            }
//        }); 

      //unchecks none checkbox when another checkbox is selected
      if($('#none.ylist:checked')){
        $("input[value!=none]").change(function(){
           $("#none.ylist").attr('checked', false);
        })
      }

}); //end window.on('load')

</script>

