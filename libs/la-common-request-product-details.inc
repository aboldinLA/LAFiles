
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
  
  .button_style.loginBtnProds {
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
  <div class="modal fade prodStart standardModal centeredModal subTitleModal" id="id02" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form class="animate" action="/" id="loginForm">
      <div class="modal-dialog logInModal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Product Request Login</h5>
            <p class="modal-subtitle">Log in to request product details.</p>
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
                  
                  <div id="incorrectPasswordTextProd" style="color: red; position: absolute; top: 10px;"></div>
                  
                  <label for="password"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" id="loginPassProd" class="smallPass" required>
                  
                   <input type="checkbox" checked="checked" name="remember" style="margin-bottom: -2px;">
                <label for="remember">Keep Me Logged In</label>
                  
                </div>

                  <button type="submit" class="button_style loginBtnProds">LOGIN</button>
  <!--            <button type="button" class="cancelbtn button_style">Cancel</button>-->
                
                <p class="text-center" style="margin-top: 20px; font-size: 17px; margin-bottom: -7px;">or</p>
                
                <button class="button_style createAccountBtn" style="width: 100%;">Create an Account</button>

                <div class="loginExtraLinks">
                  <span class="psw">Forgot <a href="#" id="forgotPassBtnProd">password?</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <span style="margin-top: 7px; margin-bottom: 0px;">Need help? Call 714-979-5276</span>
                </div>
              </div>
            </div><!-- /.modal_cot -->
          </div>
        </div>
      </div>
    </form>
  </div>
  
</div>


<?
  
  //both files are the landscapearchitect root folder
  if((strpos($_SERVER['REQUEST_URI'], '/LandscapeProducts/') !== false) || 
     (strpos($_SERVER['REQUEST_URI'], '/research/') !== false) ||
     (strpos($_SERVER['REQUEST_URI'], '/member/') !== false) ||
     (strpos($_SERVER['REQUEST_URI'], '/vendor/') !== false))
  {
    $passCheckLink = "../passCheck-la.php";
    $mailbackLink = "../mailback-forgotPass-la.php";
  } else {
    $passCheckLink = "passCheck-la.php";
    $mailbackLink = "mailback-forgotPass-la.php";
  }

?>


<script>
    
    //used on product-detail page when clicking on detail icon for download
    $(window).on('load',function(){

      
       $('#requestProductDetailsBtn').click(function(){

          var loggedIn = <? 
              if(isset($_SESSION['loggedIn'])){
                echo "true";
              } else {
                echo "false";
              } ?>;

          var userId = <? 
              if(isset($_SESSION['user'])){
                echo $_SESSION['user'];
              } else {
                echo "00000";
              } 
          ?>
         
          if(loggedIn){
            window.location = "https://landscapearchitect.com/subscriptions/sub3-renew.php?action=prod&id=" + userId;
          } else {
              $('#id02.prodStart').modal('show');
          }
       });
     
    
      
   
      $("#forgotPassBtnProd").on('click', function(e){
         $('#id02.prodStart').modal('hide');
         $('#id01.forgotPass').modal('show');
      });
      
      $(".createAccountBtn").on('click', function(e){
        $('#id02.prodStart').modal('hide');
        $('#onload_m.step1').modal('show');
      });
      
      
          
      $('.loginBtnProds').click(function(event){        
          event.preventDefault();
          document.getElementById("incorrectPasswordTextProd").innerHTML = " ";
          $.post(
            '<? echo $passCheckLink ?>',
            {password: $('#loginPassProd').val()},
             function(data){
               data = JSON.parse(data);               
               if(data.login == true){
                console.log(data.login);
                 window.location = "https://landscapearchitect.com/subscriptions/sub3-renew.php?action=prod&id=" + data.ucode;
               } else {
                 setTimeout(function(){
                   console.log("false");
                   document.getElementById("incorrectPasswordTextProd").innerHTML = "Incorrect Password. Please try again."
                }, 200);
               }
             }
          )
        });
      
      
      
      

    });

</script>

