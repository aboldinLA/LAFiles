
<? 
	
	include '../../includes/la-common-top-inner.php';


  $password = $_GET['password'];
  $Firstname = $_GET['Firstname'];


  if ( !$_SESSION['np'] && $t == "ad"){
    $new_npage = "/private/index.php";
  } else 	if ( !$_SESSION['np'] && $t == "v"){
    $new_npage = "/subscriptions/subscribe.php?action=edit";
  } else {
    $new_npage = "/subscriptions/subscribe.php?action=edit";
  }

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

  <div class="container" style="max-width: 1200px; margin-top: 100px;">
    <div class="row">
        
      
      
      
      <div class="col-md-6 hidden-sm hidden-xs">
        <img src="https://landscapearchitect.com/lol-logos/LASN-Media-Group-logos.jpg" width="100%" style="display: block; margin: 0 auto;" />
      </div>
      
      <div class="col-lg-5 col-lg-offset-1 col-md-6" style="margin-top: 22px;">
        <h4 class="text-center" style="font-size: 35px; margin-top: 0px;">Welcome</h4>
        <h4 class="text-center" style="font-family: 'Nunito Sans', sans-serif; font-size: 55px;"><?php echo $Firstname ?></h4>
<!--       <h4 class="text-center" style="font-size: 30px;">to the EXPRESS <br>Profile &amp; Subscription Management Center</h4>-->
        
        <form method="post" action="login_sub2.php" name="loginform" id="loginf">
           <input type="hidden" name="password2" value="<? echo $_GET['password']; ?>">
           <input TYPE="submit" VALUE="Click Here To Enter" class="button_style">
           <input type="hidden" name="npage" value="<?=$new_npage?>">
           <input type="hidden" name="action" value="login">
           <input type="hidden" name="t" value="<?=$t?>">
        </form>
      </div>


    </div>
  </div>
  




<style>
  footer {
    display: none;
  }
</style>


 <? include '../../includes/la-common-footer-inner.inc'; ?>



