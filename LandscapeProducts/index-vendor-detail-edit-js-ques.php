<?

// Top Section - HTML
include("lad_top-main.inc");

?>
	
	
<?

// Top Section - Nav Section
include("lad_header-main3.inc");

?>

            

	
	
	
		<style>
			.banner_holder{
				width: 100%;
				height: 300px;
				min-height: 200px;
				overflow: hidden;
				background-color: dimgrey;
				display: block;
			}

			.banner_holder img{
				width: 100%;
			}
			
			.limage {
				width: 100%;
				height: 250px;    
				overflow: hidden;
				margin-top: 5px;
				text-align: center;
				line-height: 75px;
			}
			.limage2 {
				max-width: 100%;
				max-height: 100%;
				vertical-align: middle;
				position: relative;
				top: 50%;
				transform: translateY(-50%);			
			}	

			.limage3 {
				width: 100%;
				height: 75px;    
				overflow: hidden;
				margin-top: 5px;
				text-align: left;
				line-height: 75px;
			}
			.limage4 {
				max-width: 100%;
				max-height: 100%;
				vertical-align: middle;
				position: relative;
				top: 50%;
				transform: translateY(-50%);			
			}

			.limage5 {
				width: 100%;
				height: 350px;    
				overflow: hidden;
				margin-top: 5px;
				text-align: center;
				line-height: 150px;
			}
			.limage6 {
				max-width: 200%;
				max-height: 100%;
				vertical-align: middle;
				position: relative;
				top: 50%;
				transform: translateY(-50%);				
			}								
				
			
		</style>	
	
	
	
	
 
  <div class="row">
    <div class="col-lg-12">
		

									<?
									
										// Vendor Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 


										// start article from table
							
											$key2 = $_GET['number'];
											$key22 = $_GET['prodNum'];							
		
											//$key2 = "28909";

											$sql = "select * from vendor_product where id='" . $key22 . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
												
												if ($xcount < 1) {
												
												
									?>                            	
	
	
	
	
	
		<!-- Main Image -->
        <!--<div class="col-lg-6">
			<div class="thumbnail" style="background-color: #FFFFFF; box-shadow: 5px 5px 5px #888888"> <div class="limage5"><img src="https://landscapearchitect.com/products/images/<? echo $row['photo']; ?>" alt="Thumbnail Image 1" class="limage6"></div>
            <div class="caption">
				<center><h3><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?></h3>
              <p><? echo $row['description']; ?></p></center>
      
            </div>
          </div>
        </div> -->	
	
										<?
													
											$xcount++;
													
											}}
												
												
										?>
	

									<?
									
										// Vendor Start

										

										// start article from table
							
											$key2 = $_GET['number'];							
											//$key2 = "28909";

											$sql = "select * from new_vendor where id='" . $key2 . "' AND `vendor_type_id` != '6' AND `vendor_type_id` != '4'";
											$result = $conn->query($sql);									
									
										// banner rotating section
							
											while($row = mysqli_fetch_array($result)) {
												
												
									?>                	
	
	
	
	
		<!-- Product Info -->
        <div class="col-lg-4">
            
            <style>
                
                .logoPos {
                  position: relative;
                  left: 110%;
                }

                @media only screen and (min-width: 1600px) {
                  .logoPos {
                    position: relative;
                    left: 115%;                    
                  }
                }    
                
                @media only screen and (max-width: 950px) {
                  .logoPos {
                    position: relative;
                    left: 45%;                    
                  }
                }                     
                
                
            </style>
            
            
			<div class="logoPos">
			<table>
				<tr>
					<td>
						<div> <center><img width="60%" src="https://landscapearchitect.com/products/images/<? echo $row['logo']; ?>" alt="company logo" ></center>
					</td>
				</tr>
				<!-- <tr>
					<td style="width: 5px">&nbsp;</td>
					<td>
						<div class="caption">
							<center><h2><? echo $row['company_name']; ?></h2></center>
						  <p><strong>Address: </strong><? echo $row['address']; ?><br>

							<strong>City/State/Zip: </strong><? echo $row['city']; ?> / <? echo $row['state']; ?> / <? echo $row['zip']; ?><br>


							<strong>Phone: </strong><? echo $row['phone']; ?><br>


							<strong>FAX: </strong><? echo $row['fax']; ?><br>


							  <strong>Website: </strong><a href="http://<? echo $row['website']; ?>" target="_blank"><? echo $row['website']; ?></a><br>


							  <strong>Contact: </strong><a href="http://<? echo $row['contact_us']; ?>" target="_blank">More Information</a></p>
						  <hr>
						</div>
					</td>
				</tr> -->
			</table>
            </div>
			
			<!-- <table>
				<tr>
					
					<td colspan="2">
						
						<p><strong>Vendor Information: </strong><span style='width: 100%; overflow: scroll; display: -webkit-box; -webkit-line-clamp: 8; -webkit-box-orient: vertical;'><? echo $row['profile']; ?></span></p>
						
						</div>
					</td>
				</tr>
			</table> -->
	  
	 
			
          </div>

 
		<!-- Ad Section 1 Start -->
        <div class="col-lg-2">
			
			
			
			
			
	  	</div>
		<!-- Ad Section 1 End -->

        </div>	
	

									<?

										}

										// Vendor Start

									?>	
	
	  
   </div>	
   </div>

<div class="container">
  <div class="row">
      
    <div class="col-lg-9">
        <div class="row">
				<a id="cprods">&nbsp;</a>
				<div style="width: 125%">
				 <center><h1>Product / Collection Edit Page</h1></center>
	
									<?
									



										// start article from table
							
											$key2 = $_GET['number'];
											$key22 = $_GET['prodNum'];							
	
											//$key2 = "28909";

											$sql = "select * from vendor_product where id='" . $key22 . "' ORDER BY series_product ASC";
											$result = $conn->query($sql);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
												
											$prodCount=mysqli_num_rows($result);
												
												
												
												
										$prodTop = $row['series_product'];
												
										$parentName = $row['product_name']		
												
												
									?>                            	
	
			
		
		
									<hr>

									<? if (empty($prodTop)) { ?>


					<center><h3 style="line-height: 34px">Edit page for your product:<br><span style="font-size: 32px"><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?></span></h3><p>Your edited graphic(s) will appear on this page, HOWEVER, it will not become active at LandscapeOnline (LO) until an LO staff member approves the pic(1-2 working days)<br>
                    This is to protect your product information from being hacked. We appreciate your understanding.</p></center><br>


									<?   } elseif ($prodCount > 1) {  ?>

									<center><h4>Model for - <? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?> Collection</h4></center><br>

									<? }  ?>
		
		
		
		
		
								  <div class="row" style="position: relative; left: 50px">
									  

									  

									<form name="form_detail"  method="post" action="uploader-master/demo/index-words.php" > 
										<input type="hidden" name="id" value="<? echo $_GET['prodNum'] ?>" >
										

									<div class="col-lg-3 col-md-6 col-sm-6">
										<center><img width="100%" src="https://landscapearchitect.com/products/images/<? echo $row['photo'] ?>"></center>
										<h4>Upload a New Product Image: </h4><button onclick="myFunction43()" style="background-color: #5ee330; position: relative; top: -5px">Click Here</button></center> 
										<!-- <h4>Update Product Photo: <a href="https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index2.php?prodNum=<? echo $_GET['prodNum'] ?>&venNum=<? echo $_GET['number'] ?>">Click Here</a></h4></center> -->
                                        
                                        <?
                                        
                                                
                                                if ($row['imported'] == 0) {
                                        
                                        
                                        ?>
                                        
										<p><strong>This Product is Active - Click the button to deactivate.</strong></p>
											<a onclick="myFunction51()"><img width="30%" src="https://landscapearchitect.com/vendor/images/active-button-new.png" alt="product-active"></a><br>
                                        <?
                                                    
                                                } else {
                                                    
                                         ?>  
                                        
										<p><strong>This Product is Not Active - Click the button to activate.</strong></p>
											<a onclick="myFunction52()"><img width="30%" src="https://landscapearchitect.com/vendor/images/inactive-button-new.jpg" alt="product-active"></a><br>                                                    
                                                    
                                          <?          
                                                }
                                                    
                                        ?>
                                        
                                        
                                        
									</div>

									<div class="col-lg-3 col-md-6 col-sm-6">
                                        <p><strong>Update Product Name and/or Description<br>and press the submit button.</strong></p>
										<p><strong>Product Name: </strong><br><input type="text" name="product_name" value="<? echo $row['product_name'] ?>" style="width: 255px"></p>
										<p><strong>Product Description: </strong><br><textarea name="description" rows="12" cols="39"><? echo $row['description'] ?></textarea></p>
										
 										<input type="submit" value="Submit"  style="background-color: #5ee330"><br><br>										
										
										
										<!-- <p>You can upload detail files by clicking the Upload Details link below.</p>
										<a href=" https://landscapearchitect.com/cftp/" target="_blank">Upload Detail Files - Over 3 MB</a> -->
									</div>

									<div class="col-lg-3 col-md-6 col-sm-6">
										<center><h2>CAD <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>Files &amp; Spec Sheets</h2>
									  <p>To add or update a CAD File, 3D File or Spec Sheet, click on the icon below - Max file size 3MB</p></center><br>



											<div class="container">
											  <div class="row">
												<div class="col-md-3" style="font-size: 12px">
													<figure><button onclick="myFunction44()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="CAD-PDF"></button><figcaption><center>CAD PDF:<br> <? if (empty ($row['pdff'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; font-size: 12px">
													<figure><button onclick="myFunction45()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" alt="CAD-DWG"></button><figcaption><center>CAD DWG: <? if (empty ($row['cadd'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 15px; font-size: 12px">
													<figure><button onclick="myFunction46()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwf.jpg" alt="CAD-DWF"></button><figcaption><center>CAD DWF: <? if (empty ($row['cadd_2'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>				  

												<div class="col-md-3" style="position: relative; left: 20px; font-size: 12px">
													<figure><button onclick="myFunction47()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dxf.jpg" alt="CAD-DXF"></button><figcaption><center>CAD<br>DXF: <? if (empty ($row['cadd_3'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>
								            </div>


								            <div class="row">
												<div class="col-md-3" style="position: relative; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction48()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="CAD-SKP"></button><figcaption><center>3D SKP: <? if (empty ($row['skup'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction49()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="CAD-VWX"></button><figcaption><center>3D VWX: <? if (empty ($row['vwxx'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>	

												<div class="col-md-3" style="position: relative; left: 15px; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction50()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="CAD-MPDF"></button><figcaption><center>Media:<br> <? if (empty ($row['mediap'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>
                                                  
												<div class="col-md-3" style="position: relative; left: 20px; top: 10px; font-size: 12px">
													<!-- <figure><button onclick=""><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="ZIP"></button><figcaption><center>Full Set: <? if (empty ($row['zipp'])) { echo 'Added by LCI'; } else { echo 'Edit'; } ?></center></figcaption></figure> -->
												</div>					
													</center>
								            </div>
								        </div>						
								 	 </div>

								</div>	
								</div>	

									  </form>
	  
												<!------ Start Drag and Drop ---------->
	  
													<script>
													function myFunction43() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index2.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}
                                                        
													function myFunction44() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}   
                                                        
													function myFunction45() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cdwg.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}    
                                                        
													function myFunction46() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cdwf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}      
                                                        
													function myFunction47() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cdxf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}     
                                                        
													function myFunction48() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cskp.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                                 
                                                        
													function myFunction49() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cvwx.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                             
                                                        
													function myFunction50() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cmpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}  
                                                        
													function myFunction51() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-deactive.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													} 
                                                        
													function myFunction52() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-active.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                        
                                                        
                                                        
													</script> 
	  
												<!------ End Drag and Drop ---------->
	  
	  
	  

														<?
                                            
                                                           

																}	
                    


															
					

														?>					

		  
      </div>
    </div>
	  


<!-- Children -->

      

	
									<?
									



										// start article from table
							
											$key2 = $_GET['number'];
											$key22 = $_GET['prodNum'];	
                    
                    
                    
	
											//$key2 = "28909";

											$sql96 = "select * from vendor_product where series_product='" . $key22 . "' ORDER BY id ASC";
											$result96 = $conn->query($sql96);									
									
										// banner rotating section
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result96)) {
												
											$prodCount=mysqli_num_rows($result96);
                                                
                                                ?>

    <!-- Child Start -->
    <div class="col-lg-9">
        <div class="row">
            <a id="cprods">&nbsp;</a>
            <div style="width: 125%">
                
                <hr>
            
									<center><h3 style="line-height: 34px">Model for:<br><span style="font-size: 32px"><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($parentName))); ?></span></h3><p>Your edited graphic(s) will appear on this page, HOWEVER, it will not become active at LandscapeOnline (LO) until an LO staff member approves the pic(1-2 working days)<br>
                                    This is to protect your product information from being hacked. We appreciate your understanding.</p></center><br>
                                                
                                                
                                <div class="row" style="position: relative; left: 50px">
									  

									  

									<form name="form_detail"  method="post" action="uploader-master/demo/index-words.php" > 
										<input type="hidden" name="id" value="<? echo $row['id'] ?>" >
										

									<div class="col-lg-3 col-md-6 col-sm-6">
										<center><img width="100%" src="https://landscapearchitect.com/products/images/<? echo $row['photo'] ?>"></center>
										<h4>Upload a New Product Image: </h4><button onclick="myFunction43()" style="background-color: #5ee330; position: relative; top: -5px">Click Here</button></center> 
										<!-- <h4>Update Product Photo: <a href="https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index2.php?prodNum=<? echo $_GET['prodNum'] ?>&venNum=<? echo $_GET['number'] ?>">Click Here</a></h4></center> -->
                                        
                                        <?
                                        
                                                
                                                if ($row['imported'] == 0) {
                                        
                                        
                                        ?>
                                        
										<p><strong>This Product is Active - Click the button to deactivate.</strong></p>
											<a onclick="myFunction51()"><img width="30%" src="https://landscapearchitect.com/vendor/images/active-button-new.png" alt="product-active"></a><br>
                                        <?
                                                    
                                                } else {
                                                    
                                         ?>  
                                        
										<p><strong>This Product is Not Active - Click the button to activate.</strong></p>
											<a onclick="myFunction52()"><img width="30%" src="https://landscapearchitect.com/vendor/images/inactive-button-new.jpg" alt="product-active"></a><br>                                                    
                                                    
                                          <?          
                                                }
                                                    
                                        ?>
                                        
                                        
                                        
									</div>

									<div class="col-lg-3 col-md-6 col-sm-6">
                                        <p><strong>Update Product Name and/or Description<br>and press the submit button.</strong></p>
										<p><strong>Product Name: </strong><br><input type="text" name="product_name" value="<? echo $row['product_name'] ?>" style="width: 255px"></p>
										
 										<input type="submit" value="Submit &amp; Save"  style="background-color: #5ee330"><br><br>										
										
										
										<!-- <p>You can upload detail files by clicking the Upload Details link below.</p>
										<a href=" https://landscapearchitect.com/cftp/" target="_blank">Upload Detail Files - Over 3 MB</a> -->
									</div>

									<div class="col-lg-3 col-md-6 col-sm-6">
										<center><h2>CAD <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>Files &amp; Spec Sheets</h2>
									  <p>To add or update a CAD File, 3D File or Spec Sheet, click on the icon below - Max file size 3MB</p></center><br>



											<div class="container">
											  <div class="row">
												<div class="col-md-3" style="font-size: 12px">
													<figure><button onclick="myFunction44()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="CAD-PDF"></button><figcaption><center>CAD PDF:<br> <? if (empty ($row['pdff'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; font-size: 12px">
													<figure><button onclick="myFunction45()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" alt="CAD-DWG"></button><figcaption><center>CAD DWG: <? if (empty ($row['cadd'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 15px; font-size: 12px">
													<figure><button onclick="myFunction46()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dwf.jpg" alt="CAD-DWF"></button><figcaption><center>CAD DWF: <? if (empty ($row['cadd_2'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>				  

												<div class="col-md-3" style="position: relative; left: 20px; font-size: 12px">
													<figure><button onclick="myFunction47()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/dxf.jpg" alt="CAD-DXF"></button><figcaption><center>CAD<br>DXF: <? if (empty ($row['cadd_3'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>
								            </div>


								            <div class="row">
												<div class="col-md-3" style="position: relative; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction48()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="CAD-SKP"></button><figcaption><center>3D SKP: <? if (empty ($row['skup'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction49()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="CAD-VWX"></button><figcaption><center>3D VWX: <? if (empty ($row['vwxx'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>	

												<div class="col-md-3" style="position: relative; left: 15px; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction50()"><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="CAD-MPDF"></button><figcaption><center>Media:<br> <? if (empty ($row['mediap'])) { echo 'Add'; } else { echo 'Edit'; } ?></center></figcaption></figure>
												</div>
                                                  
												<div class="col-md-3" style="position: relative; left: 20px; top: 10px; font-size: 12px">
													<!-- <figure><button onclick=""><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="ZIP"></button><figcaption><center>Full Set: <? if (empty ($row['zipp'])) { echo 'Added by LCI'; } else { echo 'Edit'; } ?></center></figcaption></figure> -->
												</div>					
													</center>
								            </div>
								        </div>						
								 	 </div>

								</div>	
                          </div>
									  </form>
	  
												<!------ Start Drag and Drop ---------->
	  
													<script>
													function myFunction43() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index2.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}
                                                        
													function myFunction44() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}   
                                                        
													function myFunction45() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cdwg.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}    
                                                        
													function myFunction46() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cdwf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}      
                                                        
													function myFunction47() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cdxf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}     
                                                        
													function myFunction48() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cskp.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                                 
                                                        
													function myFunction49() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cvwx.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                             
                                                        
													function myFunction50() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-Cmpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}  
                                                        
													function myFunction51() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-deactive.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													} 
                                                        
													function myFunction52() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("https://landscapearchitect.com/LandscapeProducts/uploader-master/demo/index-active.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                        
                                                        
                                                        
													</script> 
	  
												<!------ End Drag and Drop ---------->
	  
	          
        
        
      </div>
    </div> 


    <!-- Child End -->

												
											
                                                <?

																}	
                    


															
															$conn->close();
					

														?>					

		  
     
	  


  </div>
</div>
<p>&nbsp;</p>









	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>
	
	a