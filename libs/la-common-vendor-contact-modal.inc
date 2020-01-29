

<style>

  .contactVendorModal {
    max-width: 600px;
  }
  
  .contactVendorModal .modal-body,
  .logInModal .modal-body {
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 30px;
  }
  
  .loginExtraLinks{
    padding-top: 10px;
    border-top: 1px solid gray;
    margin-top: 30px;
  } 
  
  .button_style.loginBtn {
   width: 100%;
  }
  
  input[name=remember]{
    border: solid 1px #979797;
    width: 12px;
    height: 12px;
    padding-top: 8px;
  }
  
  input[name=remember]:checked {
    background-image: url(https://www.landscapearchitect.com/LandscapeProducts/images/check-mark.svg);
    background-color: #1b8047;
  }
  
  input[name=remember]:focus {
    outline: none;
  }
  
  .thankYouBodyText {
    padding-top: 20px;
    font-size: 20px;
    text-align: center;
  }
  
  .contactTextArea {
    margin-left: 10px;
    margin-right: 10px;
    width: 100%;
    max-width: 497px;
    border-radius: 5px;
    padding: 10px;
    border-radius: 5px !important;
    border: solid 1px rgba(35, 35, 35, 0.15);
  }
  
  .contactTextAreaLabel {
    margin-left: 10px;
  }
  
  #errorText {
          text-align: center;
    height: 16px;
    margin-bottom: -22px;
    margin-top: 8px;
    color: red;
  }

</style>





<?
  
  // start article from table
  $vendorNum_get = $_GET['number'];

  $sql = "select * from new_vendor where id='" . $vendorNum_get . "'";
  $result = $conn->query($sql);	

  $xcount = 0;	

  while($row = mysqli_fetch_array($result)) {
    $vendorName = $row['company_name'];
    $vendorEmail = $row['email'];
  }


  if($_SESSION['loggedIn']){
    
     $sql = "select * from subscribe where id='" . $_SESSION['user'] . "'";
     $row = mysqli_fetch_array($conn->query($sql));
    
     $loggedInUserEmail = $row['email'];
     $loggedInUserTitle = $row['biz_title'];
     $loggedInUserCompanyName = $row['comp_name'];
    
  }



?>



<div class="all_modals_ full_width">
  
  <div class="modal fade start" id="id03" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form class="animate" action="/" id="vendorLoginForm">
      <div class="modal-dialog contactVendorModal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Contact <? echo $vendorName ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">CLOSE X</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="modal_cot full_width">
              <div class="full_width input_fl">
                
                  <input type="hidden" name="vendor" value="<? echo $vendorName; ?>">
                  <input type="hidden" name="vendor_Id" value="<? echo $vendorNum_get; ?>">
                  <input type="hidden" name="vendorEmail" value="<? echo $vendorEmail; ?>">
                

                    <div class="row">
                
                      <div class="col-sm-6"><label for="fname"><b>First Name*</b></label> <input type="text" placeholder="Enter Your First Name" name="fname" required value="<? echo $_SESSION['name']?>"></div>
                      <div class="col-sm-6"><label for="lname"><b>Last Name*</b></label> <input type="text" placeholder="Enter Your Last Name" name="lname" required value="<? echo $_SESSION['lname']?>"></div>

                      <div class="col-sm-6"><label for="company_name"><b>Company Name</b></label><input type="text" placeholder="Enter Your Company Name" name="company_name" value="<? echo $loggedInUserCompanyName ?>"></div>
                      <div class="col-sm-6"><label for="userEmail"><b>Email*</b></label><input type="text" placeholder="Enter Your Email" name="userEmail" required value="<? echo $loggedInUserEmail ?>"></div>

                      <div class="col-sm-6"><label for="title"><b>Title</b></label><input type="text" placeholder="Enter Your Title" name="title" value="<? echo $loggedInUserTitle ?>"></div>
                      <div class="col-sm-6"><label for="project"><b>Project</b></label><input type="text" placeholder="Enter the name of your Project" name="project"></div>

                     <label for="message" class="contactTextAreaLabel"><b>Message</b></label><br>
                     <textarea name="message" rows="3" cols="80" placeholder="Enter Your Message" class="contactTextArea"> </textarea><br>

                    </div>
                  
                  <div id="errorText"></div>
                    
                  <button type="submit" class="contactSubmitBtn button_style" style="margin-bottom: 10px;">Send Email</button>
                    
              </div>
            </div><!-- /.modal_cot -->
          </div>
        </div>
      </div>
    </form>
    
  </div>
  
  <div class="modal fade true" id="id03" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog logInModal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Email Successfully Sent</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">CLOSE X</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="modal_cot full_width">
              <div class="full_width ">
                <p class="thankYouBodyText">An email has been sent to <span id="vendorNameResponse"></span>. You will receive a confirmation email shortly confirming the information sent. Thank you.</p>
                <div class="loginExtraLinks">
                  <button type="button" class="button_style" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">Return To Site</span>
                  </button>
                </div>
              </div>
            </div><!-- /.modal_cot -->
          </div>
        </div>
      </div>
  </div>
  
</div>




<script>
    
    //used on product-detail page when clicking on detail icon for download
    $(window).on('load',function(){
      $('#contactCompanyBtn').click(function(){
        $('#id03.start').modal('show');
      });

      $('#id03.true').on('hide.bs.modal', function (e) {
        location.reload();
      });

      
       //removes padding that is put on 'body' tag when modal is shown
       $('#id01').on('hide.bs.modal', function(e){
         $('body').css("padding-right", "0px");
       });
      
          
      $('.contactSubmitBtn').click(function(event){
          event.preventDefault();
          document.getElementById("errorText").innerHTML = " ";
          $.post(
            '/mailback/passMailVendor.php',
            {
              fname: $('input[name=fname]').val(),
              lname: $('input[name=lname]').val(),
              company_name: $('input[name=company_name]').val(),
              userEmail: $('input[name=userEmail]').val(),
              title: $('input[name=title]').val(),
              project: $('input[name=project]').val(),
              message: $('textarea[name=message]').val(),
              vendor: $('input[name=vendor]').val(),
              vendor_Id: $('input[name=vendor_Id]').val(),
              vendorEmail: $('input[name=vendorEmail]').val(),
            },
             function(data){
               data = JSON.parse(data);               
               if(data.success == true){
                  $('#id03.start').modal('hide');
                  document.getElementById("vendorNameResponse").innerHTML = data.vendorName;                      
                  $('#id03.true').modal('show');
               } else {
                 setTimeout(function(){
                   document.getElementById("errorText").innerHTML = "There was an error with your request, please try again. Thank you."
                }, 200);
               }
             }
          )
        });

      
      

    });

</script>

