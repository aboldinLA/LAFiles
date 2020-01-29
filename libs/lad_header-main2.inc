<?

$xpage = $_SERVER['REQUEST_URI'];

?>


  <!-- Break for header start -->
			<style>

	
				
	
					@media screen and (max-width: 3000px) {
						
					#headHeight {
						position: relative;	
						top: -90px;
						padding-right: 15px;
					}
						
					}	
				
		
				


			</style>


	
	
			<nav class="navbar navbar-inverse" style="height: 75px">
			  <div class="container-fluid"> 
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				  <a class="navbar-brand" href="http://landscapeonline.com"><img width='42%' style="position: relative; top: -10px" src="https://landscapearchitect.com/lol-logos/lo-LAD2.png"></a> </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="myInverseNavbar2">
				  <ul class="nav navbar-nav navbar-right" id="headHeight">
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">LA Details<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=1300&catMain=Fencing">Fencing</a></li>
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=32&catMain=Lighting/Electrical">Lighting/Electrical</a></li>
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=1214&catMain=Outdoor%20Living">Outdoor Living</a></li>
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=38&catMain=Paver,%20Masonry,%20Blocks,%20Rocks">Paver, Masonry, Blocks, Rocks</a></li>
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=29&catMain=Site%20Amenities">Site Amenities</a></li>
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=1301&catMain=Sculpture/Art/Garden%20Ornaments">Sculpture/Art/Garden Ornaments</a></li>			  
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=1215&catMain=Site%20Furnishings%20and%20Receptacles">Site Furnishings &amp; Receptacles</a></li>
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=33&catMain=Park%20and%20Recreation">Park &amp; Recreation</a></li>
						<li><a href="https://landscapearchitect.com/LADetails/index-js3.php?ad=41&catMain=Water%20Features">Water Features</a></li>			  
					  </ul>
					</li>		  

					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Tools &amp; Equipment<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="https://landscapearchitect.com/ToolsandEquipment/index-js3.php?ad=1209&catMain=Equipment:%20Installation">Equipment: Installation</a></li>
						<li><a href="https://landscapearchitect.com/ToolsandEquipment/index-js3.php?ad=1210&catMain=Equipment:%20Maintenance">Equipment: Maintenance</a></li>
						<li><a href="https://landscapearchitect.com/ToolsandEquipment/index-js3.php?ad=1211&catMain=Equipment:%20Tool/Parts">Equipment: Tool/Parts</a></li>
					  </ul>
					</li>		


					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Other<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="https://landscapearchitect.com/products/index-all-b-top-BS.php?ad=28">Business Services &amp; Software</a></li>
						<li><a href="https://landscapearchitect.com/products/index-all-b-top-ER.php?ad=30">Erosion Control</a></li>
						<li><a href="https://landscapearchitect.com/products/index-all-b-top-PW.php?ad=1212">Pest/Wildlife</a></li>
						<li><a href="https://landscapearchitect.com/products/index-all-b-top-WM.php?ad=1213">Water Management</a></li>
						<li><a href="https://landscapearchitect.com/products/index-all-b-top-PA.php?ad=1002">Plant Accessories &amp; Amendments</a></li>
					  </ul>
					</li>			  


					<!-- <li><a href="#">Link</a></li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Dropdown <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					  </ul>
					</li> -->
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





					<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; z-index: 30000">
					  <div class="modal-dialog">
							<div class="loginmodal-container">
								<h1>Login to Your Account</h1><br>
							  <form method="post" action="passCheck.php">
								<input type="hidden" name="page" value="<? echo $xpage; ?>">  
								<input type="text" name="email" placeholder="Email">
								<input type="password" name="password" placeholder="Password">
								<input type="submit" name="login" class="login loginmodal-submit" value="Login">
							  </form>

							  <div class="login-help">
								<a href="#">Register</a> - <a href="#">Forgot Password</a>
							  </div>
							</div>
						</div>
					  </div>

			  <!-- Break for login end --> 




