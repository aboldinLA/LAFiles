<!--
<div id="onload_m" class="modal">
  
  <form class="modal-content animate" method="post"  action="https://landscapearchitect.com/passCheck.php">
      <div class="modal-header">
        <h5 class="modal-title">Subscribe to the Magazine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">CLOSE X</span>
        </button>
      </div>
    

      <input type="hidden" name="page" value="<? echo $xpage; ?>"> 
      <input type="hidden" name="vNum" value="<? echo $_GET['number']; ?>">  
      <input type="hidden" name="pNum" value="<? echo $_GET['prodNum']; ?>">  
      
    <div class="container">
      <label for="email"><b>Email </b></label>
      <input type="text" placeholder="Enter Email Address" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="https://landscapearchitect.com/LandscapeProducts/index-login.php?ad=1300&catMain=Fencing" target="_blank">password?</a></span><br>
      <span class="psw">New User <a href="https://landscapearchitect.com/LandscapeProducts/sign-up.php?number=<? echo $_GET['number'] ?>&prodNum=<? echo $_GET['prodNum'] ?>">Register</a></span>
    </div>
  </form>
</div>
-->

<!--
<div class="all_modals_ full_width">
<form class="animate" method="post"  action="https://landscapearchitect.com/passCheck.php">
  <div class="modal fade" id="id01" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog logInModal" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sign In.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">CLOSE X</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="modal_cot full_width">
            <div class="full_width input_fl">
              <input type="hidden" name="page" value="<? echo $xpage; ?>"> 
              <input type="hidden" name="vNum" value="<? echo $_GET['number']; ?>">  
              <input type="hidden" name="pNum" value="<? echo $_GET['prodNum']; ?>">  


              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>

              <input type="checkbox" checked="checked" name="remember" style="margin-bottom: -2px;">
              <label for="remember">Keep Me Logged In</label>
             


              
                <button type="submit" class="button_style loginBtn">SIGN IN</button>
                            
              <div class="loginExtraLinks">
                <span class="psw">Forgot <a href="https://landscapearchitect.com/LandscapeProducts/index-login.php?ad=1300&catMain=Fencing" target="_blank">password?</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <span class="psw">New User <a href="https://landscapearchitect.com/LandscapeProducts/sign-up.php?number=<? echo $_GET['number'] ?>&prodNum=<? echo $_GET['prodNum'] ?>">Register</a></span>
                <p style="margin-top: 7px; margin-bottom: 0px;">Need help? Call 714-979-5276</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
-->



<style>

  .logInModal {
      max-width: 500px;
  }
  
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

</style>










<div class="all_modals_ full_width">
  <div class="modal fade start" id="id01" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form class="animate" action="/" id="loginForm">
      <div class="modal-dialog logInModal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">User Login</h5>
            <p class="modal-subtitle">Log in to download product information or to manage your profile.</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">CLOSE X</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="modal_cot full_width">
              <div class="full_width input_fl">
                <input type="hidden" name="page" value="<? echo $xpage; ?>"> 
                <input type="hidden" name="vNum" value="<? echo $_GET['number']; ?>">  
                <input type="hidden" name="pNum" value="<? echo $_GET['prodNum']; ?>">  

  <!--
                <label for="email"><b>Email </b></label>
                <input type="text" placeholder="Enter Email Address" name="email" required>
  -->
                
                
                
                <div class="passContainer" style="margin-top: 10px;">
                  
                  <div id="incorrectPasswordText" style="color: red; position: absolute; top: 10px;"></div>
                  
                  <label for="password"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" id="loginPass" class="smallPass" required>
                  
                   <input type="checkbox" checked="checked" name="remember" style="margin-bottom: -2px;">
                <label for="remember">Keep Me Logged In</label>
                  
                </div>

                  <button type="submit" class="button_style loginBtn">LOGIN</button>
  <!--            <button type="button" class="cancelbtn button_style">Cancel</button>-->

                <div class="loginExtraLinks">
                  <span class="psw">Forgot <a href="#" id="forgotPassBtn">password?</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <span class="psw createAccountBtn">New User <a href="#">Register</a></span>
                  <p style="margin-top: 7px; margin-bottom: 0px;">Need help? Call 714-979-5276</p>
                </div>
              </div>
            </div><!-- /.modal_cot -->
          </div>
        </div>
      </div>
    </form>
  </div>
  
  <div class="modal fade true" id="id01" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog logInModal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="margin-top: 10px;">User Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">CLOSE X</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="modal_cot full_width">
              <div class="full_width ">
                <h2>Welcome <span id="userName"></span></h2>
                <div class="loginExtraLinks">
                <button type="button" class="button_style" onClick="" id="udpateSubBtn"> 
                    <span>Update Subscription / Profile</span>
                 </button>
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
  
    <div class="modal fade forgotPass" id="id01" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog logInModal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="margin-top: 10px;">Forgot Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">CLOSE X</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="modal_cot full_width">
              <div class="full_width input_fl">
                
                <h3>
                  Please enter your email address below and it will be emailed to you.
                   Your Password is the same as your LandscapeArchitect Subscriber Password.
                </h3>
                
                
                <form action="/" id="forgotPasswordForm">
                  <label for="forgotPasswordEmail">Email Address:</label>
                  <input type="text" id="forgotPassEmail" name="forgotPasswordEmail" placeholder="Email Address" />
                  
                   <div id="incorrectEmailText" style="color: red; margin-top: 5px;"></div>
                  
                  <button type="submit" class="button_style forgotPassSubmit">Submit</button>
               </form>
                
               

              </div>
            </div><!-- /.modal_cot -->
          </div>
        </div>
      </div>
  </div>
  
  <div class="modal fade forgotPassThankYou" id="id01" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog logInModal" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="margin-top: 10px;">Forgot Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">CLOSE X</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="modal_cot full_width">
            <div class="full_width input_fl">

              <h3 class="text-center">
                Your password for your account will be sent to your email address on record. Remember to also check your junk mail.
              </h3>

             <button type="button" class="button_style" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">Return To Site</span>
                </button>

            </div>
          </div><!-- /.modal_cot -->
        </div>
      </div>
    </div>
  </div>
  
</div>


<?
  
  //both files are the landscapearchitect root folder
//  if((strpos($_SERVER['REQUEST_URI'], '/LandscapeProducts/') !== false) || 
//     (strpos($_SERVER['REQUEST_URI'], '/research/') !== false) ||
//     (strpos($_SERVER['REQUEST_URI'], '/member/') !== false) ||
//     (strpos($_SERVER['REQUEST_URI'], '/vendor/') !== false))
//  {
//    $passCheckLink = "/passCheck-la.php";
//    $mailbackLink = "/mailback-forgotPass-la.php";
//  } else {
//    $passCheckLink = "/passCheck-la.php";
//    $mailbackLink = "/mailback-forgotPass-la.php";
//  }

?>



<script>
    
    //used on product-detail page when clicking on detail icon for download
    $(window).on('load',function(){
      $('.logInModalPopUpBtn').click(function(){
        $('#id01.start').modal('show');
      });
      $('.cancelbtn').click(function(){
        $('#id01.start').modal('hide');
      });
      
      $('#id01.true').on('hide.bs.modal', function (e) {
        location.reload();
      });
      
      $("#forgotPassBtn").on('click', function(e){
         $('#id01.start').modal('hide');
         $('#id01.forgotPass').modal('show');
      });
      
      $(".createAccountBtn").on('click', function(e){
        $('#id01.start').modal('hide');
        $('#onload_m.step1').modal('show');
      });
      
       //removes padding that is put on 'body' tag when modal is shown
       $('#id01').on('hide.bs.modal', function(e){
         $('body').css("padding-right", "0px");
       });
      
          
      $('.loginBtn').click(function(event){
          event.preventDefault();
          document.getElementById("incorrectPasswordText").innerHTML = " ";
          $.post(
            '/passCheck-la.php',
            {password: $('#loginPass').val()},
             function(data){
               data = JSON.parse(data);               
               if(data.login == true){
                  $('#id01.start').modal('hide');
                  
                  $('#udpateSubBtn').attr({"onClick" : "window.location.href = '<?php echo BASE_URL; ?>subscriptions/subscribe-renew.php?action=edit&id=" + data.ucode + "';"});
                  document.getElementById("userName").innerHTML = data.name;
                  $('#id01.true').modal('show');
                 
               } else {
                 setTimeout(function(){
                   document.getElementById("incorrectPasswordText").innerHTML = "Incorrect Password. Please try again."
                }, 200);
               }
             }
          )
        });
      
      
        $('.forgotPassSubmit').click(function(event){
          event.preventDefault();
          document.getElementById("incorrectEmailText").innerHTML = " ";
          $.post(
            '/mailback-forgotPass-la.php',
            {email: $('#forgotPassEmail').val()},
             function(data){               
               data = JSON.parse(data); 
               if(data.success == true){
                  $('#id01.forgotPass').modal('hide');
                  $('#id01.forgotPassThankYou').modal('show');
               } else if(data.success == false) {
                 setTimeout(function(){
                   document.getElementById("incorrectEmailText").innerHTML = "Your email address was not found.<br>If you are a current subscriber to LASN or LC/DBM, you can check your mailing label for your password.";
                 }, 200);
               } else if(data.success == 'error'){
                 setTimeout(function(){
                   document.getElementById("incorrectEmailText").innerHTML = "We're sorry but there seems to be an error with this email.<br>Please try again or contact 714-979-5276 for assistance. Thank you.";
                 }, 200);
               }
             }
          )
        });
      
      
      
      
      

    });

</script>

