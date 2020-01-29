<?



?>


  <!-- Break for header start --> 
	
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="https://landscapearchitect.com/research/shop-a.php"><img width='30%' style="position: relative; top: -13px" src="https://landscapearchitect.com/lol-logos/lo-LAD2.png"></a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://landscapearchitect.com/LADetails/index-js2.html">Page</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
	
  <!-- Break for header end --> 

  <!-- Break for login start --> 

	<style>
		
			@import url(http://fonts.googleapis.com/css?family=Roboto);

			/****** LOGIN MODAL ******/
			.loginmodal-container {
			  padding: 30px;
			  max-width: 350px;
			  width: 100% !important;
			  background-color: #F7F7F7;
			  margin: 0 auto;
			  border-radius: 2px;
			  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			  overflow: hidden;
			  font-family: roboto;
			}

			.loginmodal-container h1 {
			  text-align: center;
			  font-size: 1.8em;
			  font-family: roboto;
			}

			.loginmodal-container input[type=submit] {
			  width: 100%;
			  display: block;
			  margin-bottom: 10px;
			  position: relative;
			}

			.loginmodal-container input[type=text], input[type=password] {
			  height: 44px;
			  font-size: 16px;
			  width: 100%;
			  margin-bottom: 10px;
			  -webkit-appearance: none;
			  background: #fff;
			  border: 1px solid #d9d9d9;
			  border-top: 1px solid #c0c0c0;
			  /* border-radius: 2px; */
			  padding: 0 8px;
			  box-sizing: border-box;
			  -moz-box-sizing: border-box;
			}

			.loginmodal-container input[type=text]:hover, input[type=password]:hover {
			  border: 1px solid #b9b9b9;
			  border-top: 1px solid #a0a0a0;
			  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			}

			.loginmodal {
			  text-align: center;
			  font-size: 14px;
			  font-family: 'Arial', sans-serif;
			  font-weight: 700;
			  height: 36px;
			  padding: 0 8px;
			/* border-radius: 3px; */
			/* -webkit-user-select: none;
			  user-select: none; */
			}

			.loginmodal-submit {
			  /* border: 1px solid #3079ed; */
			  border: 0px;
			  color: #fff;
			  text-shadow: 0 1px rgba(0,0,0,0.1); 
			  background-color: #4d90fe;
			  padding: 17px 0px;
			  font-family: roboto;
			  font-size: 14px;
			  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
			}

			.loginmodal-submit:hover {
			  /* border: 1px solid #2f5bb7; */
			  border: 0px;
			  text-shadow: 0 1px rgba(0,0,0,0.3);
			  background-color: #357ae8;
			  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
			}

			.loginmodal-container a {
			  text-decoration: none;
			  color: #666;
			  font-weight: 400;
			  text-align: center;
			  display: inline-block;
			  opacity: 0.6;
			  transition: opacity ease 0.5s;
			} 

			.login-help{
			  font-size: 12px;
			}		
		
		
	</style>
	




		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>

  <!-- Break for login end --> 




