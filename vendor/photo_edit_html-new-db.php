<!-- Photo Section -->        
<br />
<a name="defpro"></a>
<div class="tb4" style="width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Products / Project Photos <!-- [ <a href='<?php echo "photo_edit-js.php?company_id=$this->id"; ?>'><span style="color: #FFFFFF">Mark for Deletion or Add New Products</span></a>  ] -->&nbsp;&nbsp;
</div><br /><br />
    

<style>

.productViewProductName {
	font-family: Helvetica, Arial, sans-serif; 
	font-size:16px; 
	margin-top: 10px;
	width: 100%; 
/*	overflow: scroll; */
	-webkit-line-clamp: 1; 
	-webkit-box-orient: vertical;
	height: 46px;
	overflow: hidden;
/*
	align-items: center;
	display: flex;
	justify-content: center;
*/
}


#London figcaption {
	margin-bottom: 10px;
}


/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
		width: 750px;
		margin-top: -15px;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 15px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 20px;
    border: 1px solid #ccc;
    border-top: none;
		width: 750px;
}

.tabcontent .container {
	width: 100%;
}

.tabcontent h3 {
margin-bottom: 15px;

}

.styledCatHead {
	padding: 10px;
color: #00ade7;
background-color: #f1f1f1;
}

    
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
/*							height: 250px;    */
	padding-top: 80%;   
	overflow: hidden;
	margin-top: 5px;
	margin-bottom: 5px;
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


.productsRefineSelect {
	background-color: #f1f1f1;
	padding: 14px 16px;
	font-size: 17px;
	font-style: inherit;
	transition: 0.3s;
	border: 1px solid #f1f1f1;
	height: 54px;
}

.productsRefineSelect:hover {
	background-color: #ddd;
	border: 1px solid #ddd;
}

.viewBarAddProductsBtn {
	float: right; 
	margin-top: 4px; 
	margin-right: 10px;
}

.row {
	margin-bottom: 20px;
}

/* add to main css */

.listViewItemContain {
	display: flex;
	align-items: center;
}



a.listViewItemTitle {
	flex-grow: 1;
}


.fileTypeThumb {
	width: 50%;
	max-width: 54px;
	min-width: 24px;
}

.fileTypeThumbContain{
	display: flex;
	justify-content: center;
	width: 60%;
}

.fileTypeThumbListContain {
	text-align: center;
	display: flex;
	float: right;
	width: 25%;
	min-width: 240px;
	justify-content: right;
	margin-top: 10px;
}

		#prodBox { 

		border: thin silver solid;
	box-shadow: 5px 5px 5px #888888;
	padding-left: 5px;
	padding-right: 5px;

}	

#prodBox2 { 

	border: thin silver solid;
	box-shadow: 5px 5px 5px #888888;
	position:relative;
	left:30px;
	padding-left: 5px;
	padding-right: 5px;

}

#prodBox3 { 

	border: thin silver solid;
	box-shadow: 5px 5px 5px #888888;
	position:relative;
	left:60px;
	padding-left: 5px;
	padding-right: 5px;

}	



@media only screen and (max-width: 500px) {

	#prodBox2 { 

		border: thin silver solid;
		box-shadow: 5px 5px 5px #888888;
		left: 0px;

	}

	#prodBox3 { 

		border: thin silver solid;
		box-shadow: 5px 5px 5px #888888;
		left: 0px;

	}												

}										

    
    
</style>

<link rel="stylesheet" href="https://landscapearchitect.com/css/bootstrap-LA.css">


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">List View</button>
  <button class="tablinks" onclick="openCity(event, 'London')">Product View</button>

	
	<select onchange="if (this.value) window.location.href=this.value" id="fixed" style="width: 40%" class="productsRefineSelect">
	              
	<option value="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&tview=allp" selected ><?  if (($sName == "allp") || ($sName == "")) { echo "Refine Search"; } elseif ($sName == "other") { echo $xChoice; } ?></option>
	<option value="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&tview=allp#defpro" >All Products</option>  
		                


		<?

				$key2 = $this->id;

				include("connect3.inc");  

					 $sql33 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id WHERE vendor_id='" . $key2 . "' ORDER BY name ASC";
						$result33 = $conn->query($sql33);    

						$xname = "none";


						while($row = mysqli_fetch_array($result33)) { 

							if ($xname != $row['name']) {

										echo '<option value="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&tview=other&xlist=' . $row['xlist'] . '#defpro" >' . $row['name'] . '</option>';

										$xname = $row['name'];                                              


							}



						}


		?>




	</select>
			 <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="15%" src="https://landscapearchitect.com/vendor/images/add-button.png" class="viewBarAddProductsBtn"></a>
</div>	


<div id="London" class="tabcontent">
  <p>
      
	
      <style>
  
          
            select {
                font-family: Arial, sans-serif;
                font-size: 18px;
                font-style: italic;
                width: 100px;
                padding: 5px;
            }
            select#fixed {
                -webkit-appearance: none;
            }          
      </style>
		</p>	
      
      <?
      
            $catView  = $_GET['tview'];
    
      
      
      
      ?>
      
      
      
      
      
                                <?
      
                                    include("connect3.inc"); 
      
                                        $xCat = $_GET['xlist'];
                                
                                       $sql44 = "select * from xlist WHERE id='" . $xCat . "'";
                                        $result44 = $conn->query($sql44);  
      
                                            while($row = mysqli_fetch_array($result44)) { 
                                                
                                               $xChoice = $row['name']; 
                                                
                                            }
      
                                    $sName = $_GET['tview'];
      
                                ?>
      
      
      
      
                              <h3 style="margin-bottom: 15px;"><? echo $xChoice; ?></h3>
                                



	
	
      <?
        
            if (($catView == "allp") || ($catView == "")) {      
      
                 $key2 = $this->id;

                    include("connect3.inc");
      
      

                    $sql22 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id WHERE vendor_id='" . $key2 . "' ORDER BY name ASC";
                    $result22 = $conn->query($sql22); 
      
                        $xname = "none";
      
      
                        while($row = mysqli_fetch_array($result22)) {
                            
                            if ($xname != $row['name']) {
                            
                                echo '<h3 class="styledCatHead"><!--<span style="font-family: Helvetica, Arial, sans-serif; font-size:18px; font-weight:bold; padding-top: 10px">Category:</span>--> ' . $row['name'] . "</h3>";
                                
                                $xId = $row['id'];
                                
                                $xname = $row['name'];
                                
                                
                                    // Add Second Search Start
                                
                                

                                        $sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $xId . "' AND `series_product` = '0' ORDER BY photo_time DESC";
                                        $result = $conn->query($sql); 
                                
                                        $rowcount=mysqli_num_rows($result);
                                

                                            $iCount = 1;
                                
                                            $xCount = 1;
                                        

                                            while($row = mysqli_fetch_array($result)) {

                                                        $string =  $row['product_name']; // Trim String

                                                        $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

                                                        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

                                                        $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

                                                        $string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
                                                
                                                // Counts for sets start

                                                        if ($row['product_act'] == 'yes') { $actButton = 'active-button.jpg'; } else { $actButton = 'inactive-button.jpg'; };
                                                        if ($row['top'] == 1) { $topButton = '<img width="35%" src="https://landscapearchitect.com/vendor/images/top-button.jpg"><br><br>'; } else { $topButton = ''; };
                                                
                                                
//                                                       
                                                

                                                    if ($iCount == 1) {

                                                        if ($xCount == $rowcount) {

                                                            echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p><a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div></div></div>';
                                                            $iCount = 1;
                                                            
                                                        } else {
                                                            
                                                            echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div>';
                                                            $iCount++; 
                                                            $xCount++;       
                                                            
                                                        }
                                                            

                                                    } elseif ($iCount == 2) {
                                                        
                                                        if ($xCount == $rowcount) {

                                                            echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div></div></div>';
                                                            $iCount = 1;
                                                            
                                                        } else {
                                                            
                                                            echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div>';
                                                            $iCount++;                                                            
                                                            $xCount++;       
                                                        }
                                                        

                                                    } elseif ($iCount == 3) {


                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a><br>  </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount = 1;
                                                        $xCount++;       

                                                    }
                                                    
                                                
                                                
                                                
                                                
                                                // Counts for sets end



                                            }

                                
                 
                            
                                    // Add Second Search End
                            }
                            
                            
                        }                
      
            } elseif ($catView == 'other') {
                
                
                 $key2 = $this->id;

                    include("connect3.inc"); 
                
                                    $catXlist  = $_GET['xlist'];

                
                
                                        $sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $catXlist . "' AND `series_product` = '0' ORDER BY photo_time DESC";
                                        $result = $conn->query($sql); 

                                        $rowcount=mysqli_num_rows($result);

                                            $iCount = 1;
                                        
                                            echo '';

                                            while($row = mysqli_fetch_array($result)) {

                                                        $string =  $row['product_name']; // Trim String

                                                        $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

                                                        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

                                                        $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

                                                        $string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	
                                                
                                                // Counts for sets start

                                                
                                                if (($rowcount == 3) || ($rowcount == 6) || ($rowcount == 9) || ($rowcount == 12)) {


                                                    if ($iCount == 1) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars

                                                        if ($row['product_act'] == 'yes') { $actButton = 'active-button.jpg'; } else { $actButton = 'inactive-button.jpg'; };
                                                        if ($row['top'] == 1) { $topButton = '<img width="35%" src="https://landscapearchitect.com/vendor/images/top-button.jpg"><br><br>'; } else { $topButton = ''; };

                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p><br><br><a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 2) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 3) {


                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount = 1;


                                                    }
                                                    
                                                } elseif ($rowcount == 1) {
                                                    
                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                    
                                                } elseif ($rowcount == 2) {
                                                    
                                                    if ($iCount == 1) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars

                                                        if ($row['product_act'] == 'yes') { $actButton = 'active-button.jpg'; } else { $actButton = 'inactive-button.jpg'; };
                                                        if ($row['top'] == 1) { $topButton = '<img width="35%" src="https://landscapearchitect.com/vendor/images/top-button.jpg"><br><br>'; } else { $topButton = ''; };

                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 2) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        $iCount = 1;

                                                    }                                                    
                                                    
                                                    
                                                } elseif ($rowcount == 4) {
                                                    
                                                    
                                                    
                                                    if ($iCount == 1) {


                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p><br><br><a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 2) {

                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div>';
                                                        $iCount++;

                                                    } elseif ($iCount == 3) {


                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount++;


                                                    } elseif ($iCount == 4) {


                                                        // took out ' display: -webkit-box;' to remove inactive scroll bars
                                                        echo '<div class="container"><div class="row"><div class="col-md-3" id="prodBox" style="width:30%; margin-right: 22px"><div align="center" style="margin:auto"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div><figcaption><p class="productViewProductName">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</p> <a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="35%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a> <br> </figcaption></figure></div></div></div></div>';
                                                        
                                                        $iCount = 1;


                                                    }                                                               
                                                    
                                                    
                                                    
                                                }    
                                                
                                                
                                                
                                                
                                                // Counts for sets end



                                            }

                                
                                            echo '';        
                
                
                
            }
      
      
      
      ?>
      
	
	
	
	
	
	
	</p>
</div>

<div id="Paris" class="tabcontent">
	
  <p>
      

       <style>
  
          
            select {
                font-family: Arial, sans-serif;
                font-size: 18px;
                font-style: italic;
                width: 100px;
                padding: 5px;
            }
            select#fixed {
                -webkit-appearance: none;
            }          
      </style>
	</p>
      
      <?
      
            $catView  = $_GET['tview'];
    
      
      
      
      ?>
      
      
      
      
      
                                <?
      
                                    include("connect3.inc"); 
      
                                        $xCat = $_GET['xlist'];
                                
                                       $sql44 = "select * from xlist WHERE id='" . $xCat . "'";
                                        $result44 = $conn->query($sql44);  
      
                                            while($row = mysqli_fetch_array($result44)) { 
                                                
                                               $xChoice = $row['name'];  
                                                
                                            }
      
                                    $sName = $_GET['tview'];
      
                                ?>
      
      
      
      
                              <h3 style="margin-bottom: 15px;"><? echo $xChoice; ?></h3>


	
	
      <?
        
            if (($catView == "allp") || ($catView == "")) {      
      

                   $key2 = $this->id;

                    include("connect3.inc");
      
      

                    $sql22 = "select * from vendor_product LEFT JOIN xlist ON vendor_product.xlist = xlist.id WHERE vendor_id='" . $key2 . "' ORDER BY name ASC";
                    $result22 = $conn->query($sql22); 
      
                        $xname = "none";
      
      
                        while($row = mysqli_fetch_array($result22)) {
                            
                            if ($xname != $row['name']) {
                            
                                echo '<h3 style="margin-top: 0px;" class="styledCatHead">' . $row['name'] . "</h3>";
                                
                                $xId = $row['id'];
                                
                                $xname = $row['name'];
                                
                                
                                    // Add Second Search Start
                                
                                

                    $sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $xId . "' ORDER BY photo_time DESC";
                    $result = $conn->query($sql); 

                        $iCount = 1;


                        while($row = mysqli_fetch_array($result)) {
                            
                                if ($row['product_act'] == 'yes') { $actButton = 'active-button.jpg'; } else { $actButton = 'inactive-button.jpg'; };
                            
                                $pdf = $row['pdff'];
                                $cad1 = $row['cadd'];
                                $cad2 = $row['cadd_2'];
                                $cad3 = $row['cadd_3'];
                                $d3d1 = $row['skup'];
                                $d3d2 = $row['vwxx'];
                                $med1 = $row['mediap'];
                                $zip1 = $row['zipp'];
                            
                            
                                if (($pdf === NULL) && ($cad1 === NULL) && ($cad2 === NULL) && ($cad3 === NULL) && ($d3d1 === NULL) && ($d3d2 === NULL) && ($med1 === NULL) && ($zip1 === NULL)) {
                                   $noDwg = "No details assigned for this product.";
                                } else {
                                   $noDwg = " "; 
                                }
                        
                            
                                if($pdf === NULL) {
                                    $pdfImg = "";
                                } else {
                                    $pdfImg = '<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="cad-pdf">';
                                }
                            
                                if($cad1 === NULL) {
                                    $dwgImg = "&nbsp;&nbsp;";
                                } else {
                                    $dwgImg = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" alt="cad-dwg">';
                                }                            
                            
                                if($cad2 === NULL) {
                                    $dwgImg2 = "&nbsp;&nbsp;";
                                } else {
                                    $dwgImg2 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/dwf.jpg" alt="cad-dwf">';
                                } 
                            
                                if($cad3 === NULL) {
                                    $dwgImg3 = "&nbsp;&nbsp;";
                                } else {
                                    $dwgImg3 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/dxf.jpg" alt="cad-dxf">';
                                }   
                            
                                if($d3d1 === NULL) {
                                    $dwgImg4 = "&nbsp;&nbsp;";
                                } else {
                                    $dwgImg4 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="cad-skp">';
                                }                              
                          
                                if($d3d2 === NULL) {
                                    $dwgImg5 = "&nbsp;&nbsp;";
                                } else {
                                    $dwgImg5 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/vwx.jpg" alt="cad-vwx">';
                                }   
                            
                                if($med1 === NULL) {
                                    $dwgImg6 = "&nbsp;&nbsp;";
                                } else {
                                    $dwgImg6 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" alt="cad-media-pdf">';
                                }  
                            
                                if($zip1 === NULL) {
                                    $dwgImg7 = "&nbsp;&nbsp;";
                                } else {
                                    $dwgImg7 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="details-zip">';
                                }                               
                                                     
                                if ($row['top'] == 1) { $topButton = '<img width="10%" src="https://landscapearchitect.com/vendor/images/top-button.jpg">'; } else { $topButton = ''; };
                            
                                
								// took out ' display: -webkit-box;' to remove inactive scroll bars
                                
                                if ($row['product_act'] == 'yes') { $actButton = 'active-button.jpg'; } else { $actButton = 'inactive-button.jpg'; };
                            
								$string =  $row['product_name']; // Trim String

								$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

								$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

								$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

								$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		                            
                            
                                
								echo '<div class="container"><div class="row"><div class="col-md-2" id="prodBox" style="width:30%"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div></div><div class="col-md-2" style="width:70%"><span style="font-family: Helvetica, Arial, sans-serif; font-size:18px; font-weight:bold; padding-top: 10px">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</span><br><span style="font-family: Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Product Description:</span><br>' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['description']))) . '<br><span style="font-family: Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Product Link: </span>' . $row['web_photo'] . '</span><br><span style="font-family: Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Available Detail Files:</span><br>' . $pdfImg . $dwgImg . $dwgImg2 . $dwgImg3 . $dwgImg4 . $dwgImg5 . $dwgImg6 . $dwgImg7 . $noDwg . '</figure><br></div></div></div> <div style="position:relative; left:15px; top:10px"><a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="10%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg"></a>&nbsp;' . $topButton . '&nbsp;<a href="https://landscapearchitect.com/vendor/add-edit-construction.php" target="_blank"><img width="10%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></a></div> <br>';

                            
                        }                                
                                
                                
                                
                                
                                
 
                            
                                    // Add Second Search End
                            
                            }
                            
                        }                           
                
                
                
                
                
                
      
            } elseif ($catView == 'other') {
                
                
                 $key2 = $this->id;

                    include("connect3.inc"); 
                
                                    $catXlist  = $_GET['xlist'];

                
                
                                    $sql = "select * from vendor_product where vendor_id='" . $key2 . "' AND xlist='" . $catXlist . "' ORDER BY photo_time DESC";
                                    $result = $conn->query($sql); 

                                        $iCount = 1;


                                        while($row = mysqli_fetch_array($result)) {

                                                if ($row['product_act'] == 'yes') { $actButton = 'active-button.jpg'; } else { $actButton = 'inactive-button.jpg'; };

                                                $pdf = $row['pdff'];
                                                $cad1 = $row['cadd'];
                                                $cad2 = $row['cadd_2'];
                                                $cad3 = $row['cadd_3'];
                                                $d3d1 = $row['skup'];
                                                $d3d2 = $row['vwxx'];
                                                $med1 = $row['mediap'];
                                                $zip1 = $row['zipp'];


                                                if (($pdf === NULL) && ($cad1 === NULL) && ($cad2 === NULL) && ($cad3 === NULL) && ($d3d1 === NULL) && ($d3d2 === NULL) && ($med1 === NULL) && ($zip1 === NULL)) {
                                                   $noDwg = "No details assigned for this product.";
                                                } else {
                                                   $noDwg = " "; 
                                                }


                                                if($pdf === NULL) {
                                                    $pdfImg = "";
                                                } else {
                                                    $pdfImg = '<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf.jpg" alt="cad-pdf">';
                                                }

                                                if($cad1 === NULL) {
                                                    $dwgImg = "&nbsp;&nbsp;";
                                                } else {
                                                    $dwgImg = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/dwg.jpg" alt="cad-dwg">';
                                                }                            

                                                if($cad2 === NULL) {
                                                    $dwgImg2 = "&nbsp;&nbsp;";
                                                } else {
                                                    $dwgImg2 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/dwf.jpg" alt="cad-dwf">';
                                                } 

                                                if($cad3 === NULL) {
                                                    $dwgImg3 = "&nbsp;&nbsp;";
                                                } else {
                                                    $dwgImg3 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/dxf.jpg" alt="cad-dxf">';
                                                }   

                                                if($d3d1 === NULL) {
                                                    $dwgImg4 = "&nbsp;&nbsp;";
                                                } else {
                                                    $dwgImg4 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/skp.jpg" alt="cad-skp">';
                                                }                              

                                                if($d3d2 === NULL) {
                                                    $dwgImg5 = "&nbsp;&nbsp;";
                                                } else {
                                                    $dwgImg5 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/vwx.jpg" alt="cad-vwx">';
                                                }   

                                                if($med1 === NULL) {
                                                    $dwgImg6 = "&nbsp;&nbsp;";
                                                } else {
                                                    $dwgImg6 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/pdf2.jpg" alt="cad-media-pdf">';
                                                }  

                                                if($zip1 === NULL) {
                                                    $dwgImg7 = "&nbsp;&nbsp;";
                                                } else {
                                                    $dwgImg7 = '&nbsp;&nbsp;<img width="8%" src="https://landscapearchitect.com/LandscapeProducts/images/zip.jpg" alt="details-zip">';
                                                }                               

                                                if ($row['top'] == 1) { $topButton = '<img width="10%" src="https://landscapearchitect.com/vendor/images/top-button.jpg">'; } else { $topButton = ''; };


                                                // took out ' display: -webkit-box;' to remove inactive scroll bars

                                                if ($row['product_act'] == 'yes') { $actButton = 'active-button.jpg'; } else { $actButton = 'inactive-button.jpg'; };

                                                $string =  $row['product_name']; // Trim String

                                                $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

                                                $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

                                                $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

                                                $string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		                            


                                                echo '<div class="container"><div class="row"><div class="col-md-2" id="prodBox" style="width:30%"><figure><div class="limage" style="background-image: url(\'https://landscapearchitect.com/products/images/' . $row['photo'] . '\'); background-size: cover; background-position: center;" title="' . $string . '"></div></div><div class="col-md-2" style="width:70%"><span style="font-family: Helvetica, Arial, sans-serif; font-size:18px; font-weight:bold; padding-top: 10px">' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['product_name']))) . '</span><br><span style="font-family: Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Product Description:</span><br>' . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['description']))) . '<br><span style="font-family: Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Product Link: </span>' . $row['web_photo'] . '</span><br><span style="font-family: Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Available Detail Files:</span><br>' . $pdfImg . $dwgImg . $dwgImg2 . $dwgImg3 . $dwgImg4 . $dwgImg5 . $dwgImg6 . $dwgImg7 . $noDwg . '</figure><br></div></div></div> <div style="position:relative; left:15px; top:10px"><img width="10%" src="https://landscapearchitect.com/vendor/images/edit-button.jpg">&nbsp;' . $topButton . '&nbsp;<img width="10%" src="https://landscapearchitect.com/vendor/images/' . $actButton . '"></div> <br>';


                                        }                                
                                              
                
                
                
                
            }
      
      
      
      ?>
      
	
	
      
      
	
	
	
	</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Outlet Locations</h3>
  	<p>
	
	Things 3
	
	
	
	</p>
</div>

<script>

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();	
	
	
	
	
</script>
     	
		  
		




