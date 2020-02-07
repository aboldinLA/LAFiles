<?
include '../modules/configuration.inc';
include '../modules/db.php';
include $rootInclude.'la-lad-top.inc';
//include("../../includes/lo_common_new.inc");

$action = $_GET['action'];

$action2 = $_GET['action'];

$uid = $_GET['id'];

$id = $_GET['id'];

?>

<link rel="stylesheet" href="../css/bootstrap-LA.css">


<?

// Top Section - Nav Section
		include($rootInclude."la-lad-header.inc");

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
				top: 50%;.
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
									

        
                                        //include '../../includes/connect4.inc';
        
        
        

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
						<div> <center><img width="60%" src="<?php echo BASE_URL; ?>products/images/<? echo $row['logo']; ?>" alt="company logo" ></center>
					</td>
				</tr>
	
			</table>
            </div>
			
	
	  
	 
			
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
												
												
										$xlistNum = $row['xlist'];
												
										$prodTop = $row['series_product'];
												
										$parentName = $row['product_name']		
												
												
									?>                            	
	
			
		
		
									<hr>

									<? if (empty($prodTop)) { ?>
                    
                  


					<center><h3 style="line-height: 34px">Edit page for your product:<br><span style="font-size: 32px"><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?></span></h3><p><em>After submitting files it will take a few moments for the screen to refresh.</em></p>
                    <p>When finished with all your edits for this product, click on the button below. The Link will update after using the submit button.</p></center><br>
                    
                


									<?   } elseif ($prodCount > 1) {  ?>

									<center><h4>Model for - <? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))); ?> Collection</h4></center><br>

									<? }  ?>
		
		
		
		
		
								  <div class="row" style="position: relative; left: 50px; top: -140px">
                                      
                                      
									  <div style="position: relative; top: 500px; z-index: 500">

										<h4>Upload a New Product Image: </h4><button onclick="myFunction43()" style="background-color: #5ee330; position: relative; top: -5px">Click Here</button></center> 
                    
                                        <?
                                        
                                                
                                                if ($row['imported'] == 0) {
                                        
                                        
                                        ?>
                                        
										<p style="position: relative; top: 10px"><strong>This Product is Active<br>- Click the button to deactivate.</strong></p>
											<a onclick="myFunction51()"><img width="6%" src="<?php echo BASE_URL; ?>vendor/images/active-button-new.png" alt="product-active"></a><br>
                                        <?
                                                    
                                                } else {
                                                    
                                         ?>  
                                        
										<p><strong>This Product is Not Active<br>- Click the button to activate.</strong></p>
											<a onclick="myFunction52()"><img width="6%" src="<?php echo BASE_URL; ?>vendor/images/inactive-button-new.jpg" alt="product-active"></a><br>                                                    
                                                    
                                          <?          
                                                }
                                                    
                                        ?>
                                        
                                        <?
                                        
                                                
                                                if ($row['marked_for_deletion'] == 'no') {
                                        
                                        
                                        ?>
                                        
										<br><p><strong>Mark this Product for deletion.</strong></p>
											<a onclick="myFunction53()"><img width="6%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/delete.jpg" alt="product-active"></a><br>
                                        <?
                                                    
                                                } else {
                                                    
                                         ?>  
                                        
										<br><p><strong>Unmark this Product from deletion.</strong></p>
											<a onclick="myFunction54()"><img width="6%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/undelete.jpg" alt="product-active"></a><br>                                                    
                                                    
                                          <?          
                                                }
                                                    
                                        ?>                      
                    
                                        </div>									  

									  

									<form name="form_detail"  method="post" action="uploader-master/demo/index-words-text.php" target="_blank"> 
										<input type="hidden" name="id" value="<? echo $_GET['prodNum'] ?>" >
                                        
                                    <style>
                                        
                                        div.ex2 {
                                          height: 250px;
                                          width: 300px;  
                                          overflow-y: scroll;
                                        } 
                                        
                                    </style>										

									<div class="col-lg-3 col-md-6 col-sm-6">
										<center><div class="ex2"><img width="90%" src="<?php echo BASE_URL; ?>products/images/<? echo $row['photo'] ?>"></div></center>
										
                                        
                                        
                                        
                                        
                                        
									</div>

									<div class="col-lg-3 col-md-6 col-sm-6">
                                        <h4>Update Product Name and/or Description</h4>
										<p><strong>Product Name: </strong><br><? echo $row['product_name'] ?></p>
										<p><strong>Product Description: </strong><br><? echo $row['description'] ?></p>
                                        
 										<a onclick="myFunction56()"><img width="28%" style="position: relative; z-index: 500; cursor: pointer" src="<?php echo BASE_URL; ?>vendor/images/edit-text-button.jpg" alt="edit-text"></a><br><br>	
                                        
									  </form>
            
                                        <hr noshade><br>
                                        
									<form name="form_detail"  method="post" action="uploader-master/demo/index-words-text.php" target="_blank"> 
                                        
                                        <p>To link this product link directly to a page on your web site. Provide the link below.</p>                                        
										<p><strong>Direct Web Link: </strong><br><? echo $row['web_photo'] ?></p>  
                                        
 										<a onclick="myFunction57()"><img width="28%" style="position: relative; z-index: 500; cursor: pointer" src="<?php echo BASE_URL; ?>vendor/images/edit-link-button.jpg" alt="edit-link"></a><br><br>	
                                        
									  </form>
                                        
									<form name="form_detail2"  method="post" action="uploader-master/demo/index-words-js.php?id=<? echo $key22 ?>" > 
                                        

                                        
                                    <div style="position: relative; left: -45px; top: 0px; width: 350px">
                                        
                                        <center><h3>Product Search Category</h3>
                                        
                                        <p>Pick the search category that you wish<br>your product to appear in.</p>
                                        
                                        <p><strong>You Currently appear in:</strong></p>
                                        
                                        <p>
                                            
                                         <?
                                                
											$sql = "select * from xlist where id='" . $xlistNum . "'";
											$result = $conn->query($sql);
                                                
											$xlistCount=mysqli_num_rows($result);
                                                
                                                
									       if ($xlistCount > 0) {
											
											$xcount = 0;	
							
											while($row = mysqli_fetch_array($result)) {
                                                
                                                
                                                $xlistName = '<span style="font-size: 16px; font-weight: bold">' . $row['name'] . '</span>';
                                                
                                            }
                                               
                                           } else {
                                               
                                               $xlistName = 'Not Currently Listed';
                                               
                                           }
                                                
                                                echo $xlistName;
                                                
                                                
                                                
                                         ?>
                                            
                                            
                                            
                                            
                                            
                                        </p></center>   
                                        
										<div class="col-md-3" style="position: relative; left: 115px; top: 0px; z-index: 2000">
											<figure><a onclick="myFunction55()"><img width="150%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/category-button.jpg" alt="Category"  cursor: pointer></a></figure>
										</div> 
                                        
                                        <p><a href="<?php echo BASE_URL; ?>LandscapeProducts/index-vendor-detail-edit-add-model.php?number=<? echo $key2; ?>&prodNum=<? echo $_GET['prodNum']; ?>&xlistNum=<? echo $xlistNum; ?>" target="_blank"><img width="25%" src="<?php echo BASE_URL; ?>vendor/images/add-model-button.png" style="position: relative; left: 45px; top: 50px"></a></p>                            
                    
                                    </div>                                                            
                                        
                                        
                                        
                                        
										
										
										<!-- <p>You can upload detail files by clicking the Upload Details link below.</p>
										<a href=" https://landscapearchitect.com/cftp/" target="_blank">Upload Detail Files - Over 3 MB</a> -->
									</div>
                                        
 										<input type="submit" value="Submit &amp; Save"  style="background-color: #5ee330; font-weight: bold; font-size: 18px; position: absolute; left: 525px; top: 125px; z-index: 505">	
                                        
									  </form>

									<div class="col-lg-3 col-md-6 col-sm-6">
										<center><h2>CAD <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>Files &amp; Spec Sheets</h2>
									  <p>To add or update a CAD File, 3D File or Spec Sheet, click on the icon below - Max file size 3MB, except for SKP and DWG files.</p></center><br>
                                        
                                        
                                        <?
                                                
											$sql = "select * from vendor_product where id='" . $key22 . "'";
											$result = $conn->query($sql);
							
											while($row = mysqli_fetch_array($result)) {
                                                
                                        ?>



											<div class="container">
											  <div class="row">
												<div class="col-md-3" style="font-size: 12px">
													<figure><button onclick="myFunction44()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/pdf.jpg" alt="CAD-PDF"></button><figcaption><center>CAD PDF:<br> <? if ($row['pdff'] === NULL || $row['pdff'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction44()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction44()">Edit</a>'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; font-size: 12px">
													<figure><button onclick="myFunction45()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/dwg.jpg" alt="CAD-DWG"></button><figcaption><center>CAD DWG: <? if ($row['cadd'] === NULL || $row['cadd'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction45()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction45()">Edit</a>'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 15px; font-size: 12px">
													<figure><button onclick="myFunction46()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/dwf.jpg" alt="CAD-DWF"></button><figcaption><center>CAD DWF: <? if ($row['cadd_2'] === NULL || $row['cadd_2'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction46()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction46()">Edit</a>'; } ?></center></figcaption></figure>
												</div>				  

												<div class="col-md-3" style="position: relative; left: 20px; font-size: 12px">
													<figure><button onclick="myFunction47()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/dxf.jpg" alt="CAD-DXF"></button><figcaption><center>CAD<br>DXF: <? if ($row['cadd_3'] === NULL || $row['cadd_3'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction47()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction47()">Edit</a>'; } ?></center></figcaption></figure>
												</div>
								            </div>


								            <div class="row">
												<div class="col-md-3" style="position: relative; top: 10px;  z-index: 1000; font-size: 12px">
													<figure><button onclick="myFunction48()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/skp.jpg" alt="CAD-SKP"></button><figcaption><center>3D SKP: <? if ($row['skup'] === NULL || $row['skup'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction48()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction48()">Edit</a>'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; top: 10px;  z-index: 1000; font-size: 12px">
													<figure><button onclick="myFunction49()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/skp.jpg" alt="CAD-VWX"></button><figcaption><center>3D VWX: <? if ($row['vwxx'] === NULL || $row['vwxx'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction49()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction49()">Edit</a>'; } ?></center></figcaption></figure>
												</div>	

												<div class="col-md-3" style="position: relative; left: 15px; top: 10px;  z-index: 1000; font-size: 12px">
													<figure><button onclick="myFunction50()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/pdf.jpg" alt="CAD-MPDF"></button><figcaption><center>Media:<br> <? if ($row['mediap'] === NULL || $row['mediap'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction50()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction50()">Edit</a>'; } ?></center></figcaption></figure>
												</div>
                                                  
												<div class="col-md-3" style="position: relative; left: 20px; top: 10px; font-size: 12px">
													<!-- <figure><button onclick=""><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="ZIP"></button><figcaption><center>Full Set: <? if (empty ($row['zipp'])) { echo 'Added by LCI'; } else { echo 'Edit'; } ?></center></figcaption></figure> -->
												</div>					
													</center>
								            </div>
								        </div>
                    
                                    <?
                                                
                                            }
                                                
                                    ?>
                    

                    
								 	 </div>
            
                                    

            
            
            

								</div>	
								</div>	

      
      
                                            <script>
                                                window.onunload = refreshParent;
                                                function refreshParent() {
                                                    window.opener.location.reload();
                                                }

                                                function close_window() {

                                                    close();
                                                }



                                            </script>                
      
      
	  
												<!------ Start Drag and Drop ---------->
	  
													<script>
													function myFunction43() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index2.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}
                                                        
													function myFunction44() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}   
                                                        
													function myFunction45() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cdwg.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}    
                                                        
													function myFunction46() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cdwf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}      
                                                        
													function myFunction47() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cdxf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}     
                                                        
													function myFunction48() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cskp.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                                 
                                                        
													function myFunction49() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cvwx.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                             
                                                        
													function myFunction50() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cmpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}  
                                                        
													function myFunction51() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-deactive.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													} 
                                                        
													function myFunction52() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-active.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}  
                                                        
													function myFunction53() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-delete.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													} 
                                                        
													function myFunction54() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-keep.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}  
                                                        
													function myFunction55() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-categories.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													} 
                                                        
													function myFunction56() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-product-text-js.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
                                                        document.location.reload(true)
													} 
                                                        
													function myFunction57() {
														
														 var val = "<? echo $key22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-link-text-js.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
                                                        document.location.reload(true)
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

                                            $childX = 1;

											$prodCount=mysqli_num_rows($result96);

                                            $childY = $prodCount;                                          

							
											while($row = mysqli_fetch_array($result96)) {
												
                                                
                                                ?>

    <!-- Child Start -->

    <?
                                                
                                                
      if($childX <= $childY)  {    
          
          
           $keyC22 = $row['id']; 
                                                
                                                
    ?>
    



    <div class="col-lg-9">
        <div class="row">
            <a id="cprods">&nbsp;</a>
            <div style="width: 125%; position: relative; top: -125px">
                
                <hr>
            
									<center><h3 style="line-height: 34px">Model for:<br><span style="font-size: 32px"><? echo iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($parentName))); ?></span></h3><p>Your edited graphic(s) will appear on this page, HOWEVER, <u>it will not become active</u> at LandscapeArchitect (LA) until an LA staff member approves the pic (1-2 working days)<br>
                                    This is to protect your product information from being hacked. We appreciate your understanding.<br>
                                        <em>After submitting files it will take a few moments for the screen to refresh</em></p></center><br>
                                                
                                                
                                <div class="row" style="position: relative; left: 50px; top: -100px">
                                    
                                    <style>
                                        
                                          .buttonHeight {
                                            position: relative;  
                                            top: 425px;
                                          }                                        
                                        
                                        @media screen and (max-width: 1360px) {
                                          .buttonHeight {
                                            position: relative;  
                                            top: 335px;
                                          }
                                        }                                        
                                        
                                        
                                    </style>
                                    
                                    
                                    
                                    <div class="buttonHeight">
                                        
										<h4>Upload a New Product Image: </h4><button onclick="myFunction<? echo $childX; ?>443()" style="background-color: #5ee330; position: relative; top: -5px; z-index: 500">Click Here</button></center> 
                                        
                                        <?
                                        
                                                
                                                if ($row['imported'] == 0) {
                                        
                                        
                                        ?>
                                        
										<p><strong>This Product is Active - Click the button to deactivate.</strong></p>
											<a onclick="myFunction<? echo $childX; ?>451()"><img width="6%" src="<?php echo BASE_URL; ?>vendor/images/active-button-new.png" alt="product-active"></a><br>
                                        <?
                                                    
                                                } else {
                                                    
                                         ?>  
                                        
										<p><strong>This Product is Not Active - Click the button to activate.</strong></p>
											<a onclick="myFunction<? echo $childX; ?>452()"><img width="6%" src="<?php echo BASE_URL; ?>vendor/images/inactive-button-new.jpg" alt="product-active"></a><br>                                                    
                                                    
                                          <?          
                                                }
                                                    
                                        ?>                                        
                                        
                                        
                                        
                                    </div>
                                    
                                    
									  

									  

									<form name="form_detail3"  method="post" action="uploader-master/demo/index-words-text-model.php?prodNum=<? echo $row['id'] ?>"  target="_blank"> 
										<input type="hidden" name="id" value="<? echo $row['id'] ?>" >
                                        
										

									<div class="col-lg-3 col-md-6 col-sm-6">
                                        
                                        
                                       <?
                                        
                                            if (!empty($row['photo'])) {
                                                
                                                echo '<center><div class="ex2"><img width="90%" src="'.BASE_URL.'products/images/' . $row['photo'] . '"></div></center>';
                                                
                                            } else {
                                                
                                                echo '<center><img width="100%" src="'.BASE_URL.'LandscapeProducts/images/blank-mod.jpg"></center>';
                                                
                                            }
                                        
                                        
                                        ?>    
                                        

                                        
                                        
                                        
									</div>

									<div class="col-lg-3 col-md-6 col-sm-6">
                                        <p><strong>Update Model Name</strong></p>
										<p><strong>Model Name: </strong><br><input type="text" name="product_name" value="<? echo $row['product_name'] ?>" style="width: 255px"></p>
                                        
										<p>When finished with all your edits for this model, click on the button below</p>
 										<input type="submit" value="Submit Model Name"  style="background-color: #a86dc6; font-weight: bold; font-size: 14px"><br><br>										
										
										
										<!-- <p>You can upload detail files by clicking the Upload Details link below.</p>
										<a href=" https://landscapearchitect.com/cftp/" target="_blank">Upload Detail Files - Over 3 MB</a> -->
									</div>
                                    
									  </form>
                
                                        <?
                                                
											$sql = "select * from vendor_product where id='" . $keyC22 . "'";
											$result = $conn->query($sql);
							
											while($row = mysqli_fetch_array($result)) {
                                                
                                        ?>                
                                    

									<div class="col-lg-3 col-md-6 col-sm-6">
										<center><h2>CAD <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>Files &amp; Spec Sheets</h2>
									  <p>To add or update a CAD File, 3D File or Spec Sheet, click on the icon below - Max file size 3MB, except for SKP files.</p></center><br>


											<div class="container">
											  <div class="row">
												<div class="col-md-3" style="font-size: 12px">
													<figure><button onclick="myFunction<? echo $childX; ?>444()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/pdf.jpg" alt="CAD-PDF"></button><figcaption><center>CAD PDF:<br> <? if ($row['pdff'] === NULL || $row['pdff'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '444()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '444()">Edit</a>'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; font-size: 12px">
													<figure><button onclick="myFunction<? echo $childX; ?>445()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/dwg.jpg" alt="CAD-DWG"></button><figcaption><center>CAD DWG: <? if ($row['cadd'] === NULL || $row['cadd'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '445()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '445()">Edit</a>'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 15px; font-size: 12px">
													<figure><button onclick="myFunction<? echo $childX; ?>446()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/dwf.jpg" alt="CAD-DWF"></button><figcaption><center>CAD DWF: <? if ($row['cadd_2'] === NULL || $row['cadd_2'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '446()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '446()">Edit</a>'; } ?></center></figcaption></figure>
												</div>				  

												<div class="col-md-3" style="position: relative; left: 20px; font-size: 12px">
													<figure><button onclick="myFunction<? echo $childX; ?>447()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/dxf.jpg" alt="CAD-DXF"></button><figcaption><center>CAD<br>DXF: <? if ($row['cadd_3'] === NULL || $row['cadd_3'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '447()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '447()">Edit</a>'; } ?></center></figcaption></figure>
												</div>
								            </div>


								            <div class="row">
												<div class="col-md-3" style="position: relative; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction<? echo $childX; ?>448()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/skp.jpg" alt="CAD-SKP"></button><figcaption><center>3D SKP: <? if ($row['skup'] === NULL || $row['pdff'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '448()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '448()">Edit</a>'; } ?></center></figcaption></figure>
												</div>

												<div class="col-md-3" style="position: relative; left: 10px; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction<? echo $childX; ?>449()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/skp.jpg" alt="CAD-VWX"></button><figcaption><center>3D VWX: <? if ($row['vwxx'] === NULL || $row['vwxx'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '449()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '449()">Edit</a>'; } ?></center></figcaption></figure>
												</div>	

												<div class="col-md-3" style="position: relative; left: 15px; top: 10px; font-size: 12px">
													<figure><button onclick="myFunction<? echo $childX; ?>450()"><img width="100%" src="<?php echo BASE_URL; ?>LandscapeProducts/images/pdf.jpg" alt="CAD-MPDF"></button><figcaption><center>Media:<br> <? if ($row['mediap'] === NULL || $row['mediap'] === 'none') { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '450()">Add</a>'; } else { echo '<a style="cursor: pointer; font-weight: bold" onclick="myFunction' . $childX . '450()">Edit</a>'; } ?></center></figcaption></figure>
												</div>
                                                  
												<div class="col-md-3" style="position: relative; left: 20px; top: 10px; font-size: 12px">
													<!-- <figure><button onclick=""><img width="100%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="ZIP"></button><figcaption><center>Full Set: <? if (empty ($row['zipp'])) { echo 'Added by LCI'; } else { echo 'Edit'; } ?></center></figcaption></figure> -->
												</div>					
													</center>
								            </div>
								        </div>	
                
                                    <?
                                                
                                            }
                                                
                                    ?>                
                
                
								 	 </div>

								</div>	
                          </div>
	  
												<!------ Start Drag and Drop ---------->
	  
													<script>
													function myFunction<? echo $childX . '443'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index2.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}
                                                        
													function myFunction<? echo $childX . '444'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}   
                                                        
													function myFunction<? echo $childX . '445'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cdwg.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}    
                                                        
													function myFunction<? echo $childX . '446'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cdwf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}      
                                                        
													function myFunction<? echo $childX . '447'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cdxf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}     
                                                        
													function myFunction<? echo $childX . '448'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cskp.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                                 
                                                        
													function myFunction<? echo $childX . '449'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cvwx.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                             
                                                        
													function myFunction<? echo $childX . '450'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-Cmpdf.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}  
                                                        
													function myFunction<? echo $childX . '451'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-deactive.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													} 
                                                        
													function myFunction<? echo $childX . '452'; ?>() {
														
														 var val = "<? echo $keyC22 ?>" + "&venNum=" + "<? echo $key2 ?>";
														
														
														window.open("<?php echo BASE_URL; ?>LandscapeProducts/uploader-master/demo/index-active.php?prodNum="+val, "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=800,height=700");
													}                                                        
                                                        
                                                        
													</script> 
	  
												<!------ End Drag and Drop ---------->
	  
	          
        
        
      </div>



    </div> 

    <?
        
         $childX++;
                                            
                                            
      }
                                            
                                            
    ?>


    <!-- Child End -->

												
											
                                                <?

																}	
                    


															
															$conn->close();
					

														?>	



		  
     
	  


  </div>

<div style="position: relative; left: 20px; top: -150px">

<a href="<?php echo BASE_URL; ?>LandscapeProducts/index-vendor-detail-edit-add-model.php?number=<? echo $key2; ?>&prodNum=<? echo $_GET['prodNum']; ?>&xlistNum=<? echo $xlistNum; ?>" target="_blank"><img width="7%" src="<?php echo BASE_URL; ?>vendor/images/add-model-button.png"></a>

</div>

</div>








	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
		include($rootInclude."la-lad-bottom.inc"); 

?>	

<?
    include($rootInclude."lo_footer-main2-new.inc");
?>
	
	