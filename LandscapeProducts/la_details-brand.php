


<? include '../../includes/la-common-top.php'; ?>

<? include '../../includes/la-common-header-inner.inc'; ?>


<section class="gray_shade_anchor full_width">
<div class="container">
	<div class="full_width overflow_">
	<a href="#" class="active">LA DETAILS</a>
    <a href="#">TOOLS &amp; EQUIPMENT</a>
    <a href="#">LOCAL WHOLESALE &amp; PLANT MATERIALS</a>
    </div><!-- /.overflow_-->
</div><!-- /.container -->
</section><!-- /.gray_shade_anchor -->

<section class="search_section_ban full_width">
<div class="container">
<div class="row">
	<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
    		<input type="text" placeholder="Search products by keyword or vendor name" />
            <button type="button"></button>
        </div><!-- /.relative -->
    </div><!-- /.col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.search_section_ban -->

<section class="tool_page full_width">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
    	<div class="white_side full_width">
        	<h2 class="mobtoggle">ALL CATEGORIES</h2>
            <div class="full_width" id="mobile_slide">
                
            <!-- Sub-Category List Start -->
        <?
            
                                            $servername = "localhost";
                                            $username = "land_patchew";
                                            $password = "59q2GB6k$3";
                                            $dbname = "land_landscap_lollive";

                                            // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }                
            
            
														$cat1 = $_GET['ad'];
            
														$sql1 = "SELECT * FROM xlist WHERE idParent = '" . $cat1 ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            echo '<a href="https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=' . $cat1 . '&xlist=' . $row['id'] .'">' . $row['name'] .'</a>';  
                                                                                                                        
                                                            
                                                        }
            
        ?>
            <!-- Sub-Category List End -->
                
                
                
            <!-- Brand List Start -->
            <h4 class="full_width">Brand</h4>
                
             <form method="post" action="#">   
                
            <ul>
                
        <?
            
                                                        $vendorID = 0;
            
														$xlistNumber = $_GET['xlist'];
                
                                                        $companyName2 = "LCI";
            
                                                        $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status > 2 ORDER BY vendor_product.company_name ASC";
                                                        $result1 = $conn->query($sql1);  
                
														$rowcount1=mysqli_num_rows($result1);
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            $prodName = substr($row['product_name'],0,21);
                                                            $companyName = substr($row['company_name'],0,20);
                                                            
                                                            
                                                            if ($companyName2 != $row['company_name']) {
                                                            
                                                            
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<li>
                                                                    <div class="check_box__ pull-left">
                                                                        <input type="checkbox" class="form-check-input" id="chkk">
                                                                        <label for="chkk"></label>
                                                                        <label class="form-check-label" for="chkk">' . $companyName . '</label>
                                                                    </div>
                                                                </li>';                                                                  
                                                                
                                                                
                                                                $companyName2 = $row['company_name'];
                                                                
                                                            }
                                                                                                                        
                                                            
                                                        }
            
        ?>                
            <!-- Brand List End -->

            </ul>
                 
                          <br><br>
                          <input type="submit" value="Submit">
                 
            </form>                    
                
                
            </div><!-- #mobile_slide -->
            
        </div><!-- /.white_side -->
        
        <div class="add__ full_width">
        	<img src="images/add2.png" alt="img" />
        </div><!-- /.add__ -->
        <div class="add__ full_width">
        	<img src="images/ad.JPG" alt="img" />
        </div><!-- /.add__ -->
        
        
    </div><!-- /.col-lg-3 -->
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
    	<div class="col-xs-12 adver">
        	<img src="images/advertise.jpg" alt="img" />
        </div><!-- /.adver -->
        
        <?
        
										$ad = $_GET['ad'];
        
                                        if ($ad == '28') {
                                           echo '<title>Business Services | Landscape Architect</title>';
                                            $parentName = 'Business Services';
                                        } elseif ($ad == '30') {
                                            echo '<title>Landscape Erosion Control Products | Landscape Architect</title>';
                                            $parentName = 'Landscape Erosion Control Products';                                            
                                        }elseif ($ad == '1300') {
                                            echo '<title>Commercial / Wholesale Fencing | Landscape Architect</title>';
                                            echo '<h2>Commercial / Wholesale Fencing</h2>';
                                        } elseif ($ad == '1139') {
                                            echo '<title>Landscape Erosion Control Products | Landscape Architect</title>';
                                            $parentName = 'Landscape Erosion Control Products';    
                                        } elseif ($ad == '32') {
                                            echo '<title>Commercial Exterior Lighting / Electrical | Landscape Architect</title>';
                                            $parentName = 'Commercial Exterior Lighting / Electrical';
                                        } elseif ($ad == '1214') {
                                            echo '<title>Outdoor Living / Residential Landscape | Landscape Architect</title>';
                                            $parentName = 'Outdoor Living / Residential Landscape';
                                        } elseif ($ad == '33') {
                                            echo '<title>Parks / Playground Products | Landscape Architect</title>';
                                            $parentName = 'Parks / Playground Products';
                                        } elseif ($ad == '38') {
                                            echo '<title>Commercial Pavers, Masonry, Blocks, Rocks | Landscape Architect</title>';
                                            $parentName = 'Commercial Pavers, Masonry, Blocks, Rocks';
                                        } elseif ($ad == '1212') {
                                            echo '<title>Wildlife / Commercial Landscape Pest Control | Landscape Architect</title>';
                                            $parentName = 'Wildlife / Commercial Landscape Pest Control';
                                        } elseif ($ad == '1002') {
                                            echo '<title>Wholesale Plant Accessories & Soil Amendments | Landscape Architect</title>';
                                            $parentName = 'Wholesale Plant Accessories & Soil Amendments';
                                        } elseif ($ad == '1394') {
                                            echo '<title>Pool and Spa | Landscape Architect</title>';
                                            $parentName = 'Pool and Spa';
                                        } elseif ($ad == '29') {
                                            echo '<title>Commercial Site Amenities | Landscape Architect</title>';
                                            echo 'Commercial Site Amenities';
                                        } elseif ($ad == '1215') {
                                            echo '<title>Site Furnishings / Receptacles | Landscape Architect</title>';
                                            $parentName = 'Site Furnishings / Receptacles';
                                        } elseif ($ad == '1301') {
                                            echo '<title>Landscape Art, Sculpture, Metal / Stone Garden Ornaments | Landscape Architect</title>';
                                            $parentName = 'Landscape Art, Sculpture, Metal / Stone Garden Ornaments';
                                        } elseif ($ad == '41') {
                                            echo '<title>Water Features, Fountains, Ponds / Equipment | Landscape Architect</title>';
                                            $parentName = 'Water Features, Fountains, Ponds / Equipment';
                                        } elseif ($ad == '1213') {
                                            echo '<title>Landscape Irrigation & Water Management | Landscape Architect</title>';
                                            $parentName = 'Landscape Irrigation & Water Management';
                                        } elseif ($ad == '1209') {
                                            echo '<title>Landscape Irrigation & Water Management | Landscape Architect</title>';
                                            $parentName = 'Installation Equipment';
                                        } elseif ($ad == '1210') {
                                            echo '<title>Landscape Irrigation & Water Management | Landscape Architect</title>';
                                            $parentName = 'Maintenance Equipment';
                                        } elseif ($ad == '1211') {
                                            echo '<title>Landscape Irrigation & Water Management | Landscape Architect</title>';
                                            $parentName = 'Tools, Tires & Replacement Parts';
                                        }  
        
        
														$cat1 = $_GET['ad'];
        
														$xlistNumber = $_GET['xlist'];
            
														$sql1 = "SELECT * FROM xlist WHERE id = '" . $xlistNumber ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
														$result1 = $conn->query($sql1);  
            
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            $catName = $row['name'];  
                                                                                                                        
                                                            
                                                        }        
        
        
        ?>
        
        
        
        
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
            <h2 class="adj_mar">Showing Results for: <? echo $catName ?></h2>
            
                
            <!-- Sub-Category Products 18 Start -->
        <?
            
                                                        $vendorID = 0;
                                                        $xlistCount = 0;
            
														$xlistNumber = $_GET['xlist'];
            
														//$sql1 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' ORDER BY vendor_id ASC";
                                                        $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 18 ORDER BY vendor_id ASC";
														$result1 = $conn->query($sql1);  
                
														$rowcount1=mysqli_num_rows($result1);
                
                
                
                
                                                        echo '<p class="sort_area">' . $rowcount1 . ' Products</p><p class="sort_area">Sort from A-Z</p>
                                                        <p class="sort_area">Show <span>24</span> | <span>48</span> | <a href="#">View All</a></p>


                                                        <div class="full_width brand_ss">
                                                        <div class="row">';
                
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            $prodName = substr($row['product_name'],0,21);
                                                            $companyName = substr($row['company_name'],0,20);
                                                            
                                                            
                                                            if ($xlistCount == 0) {
                                                            
                                                            
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products' . $xlistCount . '</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>';                                                                  
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                                $xlistCount++;                                                                
                                                                
                                                            } elseif ($xlistCount == 1) {
                                                                
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products' . $xlistCount . '</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>'; 
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                                $xlistCount++;                                                                
                                                                
                                                                
                                                            } elseif ($vendorID != $row['vendor_id'] && $xlistCount == 2) {
                                                                
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products' . $xlistCount . '</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>'; 
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                                $xlistCount = 1;                                                                
                                                                
                                                                
                                                            }
                                                                                                                        
                                                            
                                                        }
            
        ?>
            <!-- Sub-Category Products 18 End -->         
            
            <!-- Sub-Category Products 16 Start -->         
        <?
            
                                                        $vendorID = 0;
                                                        $xlistCount = 0;
            
														$xlistNumber = $_GET['xlist'];
            
														//$sql1 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' ORDER BY vendor_id ASC";
                                                        $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 16 ORDER BY vendor_id ASC";
														$result1 = $conn->query($sql1);  
                
														$rowcount1=mysqli_num_rows($result1);
                
                
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            $prodName = substr($row['product_name'],0,21);
                                                            $companyName = substr($row['company_name'],0,20);
                                                            
                                                            
                                                            if ($xlistCount == 0) {
                                                            
                                                            
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products' . $xlistCount . '</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>';                                                                  
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                                $xlistCount++;                                                                
                                                                
                                                            } elseif ($xlistCount == 1) {
                                                                
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products' . $xlistCount . '</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>'; 
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                                $xlistCount++;                                                                
                                                                
                                                                
                                                            } elseif ($vendorID != $row['vendor_id'] && $xlistCount == 2) {
                                                                
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products' . $xlistCount . '</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>'; 
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                                $xlistCount = 1;                                                                
                                                                
                                                                
                                                            }
                                                                                                                        
                                                            
                                                        }
            
        ?>
            <!-- Sub-Category Products 16 End -->                        
            
            
           <!-- Sub-Category Products 14 Start -->
        <?
            
                                                        $vendorID = 0;
            
														$xlistNumber = $_GET['xlist'];
            
                                                        $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 14 ORDER BY vendor_id ASC";
                                                        $result1 = $conn->query($sql1);  
                
														$rowcount1=mysqli_num_rows($result1);
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            $prodName = substr($row['product_name'],0,21);
                                                            $companyName = substr($row['company_name'],0,20);
                                                            
                                                            
                                                            if ($vendorID != $row['vendor_id']) {
                                                            
                                                            
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>';                                                                  
                                                                
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                            }
                                                                                                                        
                                                            
                                                        }
            
        ?>
            <!-- Sub-Category Products 14 End -->  
            
           <!-- Sub-Category Products 12 Start -->
        <?
            
                                                        $vendorID = 0;
            
														$xlistNumber = $_GET['xlist'];
            
                                                        $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 12 ORDER BY vendor_id ASC";
                                                        $result1 = $conn->query($sql1);  
                
														$rowcount1=mysqli_num_rows($result1);
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            $prodName = substr($row['product_name'],0,21);
                                                            $companyName = substr($row['company_name'],0,20);
                                                            
                                                            
                                                            if ($vendorID != $row['vendor_id']) {
                                                            
                                                            
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>';                                                                  
                                                                
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                            }
                                                                                                                        
                                                            
                                                        }
            
        ?>
            <!-- Sub-Category Products 12 End -->               
                
           <!-- Sub-Category Products 10 Start -->
        <?
            
                                                        $vendorID = 0;
            
														$xlistNumber = $_GET['xlist'];
            
                                                        $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 10 ORDER BY vendor_id ASC";
                                                        $result1 = $conn->query($sql1);  
                
														$rowcount1=mysqli_num_rows($result1);
            
                                                        while($row = mysqli_fetch_array($result1)) {
                                                            
                                                            $prodName = substr($row['product_name'],0,21);
                                                            $companyName = substr($row['company_name'],0,20);
                                                            
                                                            
                                                            if ($vendorID != $row['vendor_id']) {
                                                            
                                                            
                                                                $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                                                                $result99 = $conn->query($sql99);  

                                                                $rowcount99=mysqli_num_rows($result99);                                                                
                                                            
                                                                
                                                            echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
                                                                <div class="full_width brdr">
                                                                    <img src="https://www.landscapearchitect.com/products/images/'. $row['photo'] . '" alt="img" style="padding-bottom:10px; width: 100%; height: 150px; object-fit: contain" />
                                                                    <span class="full_width he_det">
                                                                        <h4>'. $prodName . '<br>'. $companyName . '<span>'. $rowcount99 . ' Matching Products</span></h4>
                                                                    </span>
                                                                </div>    
                                                                </a>';                                                                  
                                                                
                                                                
                                                                $vendorID = $row['vendor_id'];
                                                                
                                                            }
                                                                                                                        
                                                            
                                                        }
            
        ?>
            <!-- Sub-Category Products 10 End -->                   
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
			
            <div class="pagination_strip full_width">
            	<a href="#" class="prev">Prev</a>
                <a href="#" class="disable">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#" class="nxt active">Next</a>
            </div><!-- /.pagination_strip -->
            
        </div><!-- ./col-lg-8 -->
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="add__ full_width">
                <img src="images/add2.png" alt="img" />
            </div><!-- /.add__ -->
            <div class="add__ full_width">
                <img src="images/ad-3.JPG" alt="img" />
            </div><!-- /.add__ -->
            <div class="add__ full_width">
                <img src="images/adver2.jpg" alt="img" />
            </div><!-- /.add__ -->
        </div><!-- ./col-lg-4 -->
    </div><!-- /.row -->
    	
    </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

<section class="green_newsletter full_width">
<div class="container">
<form id="news_letter_form">
	<h3>Sign up for LAWeekly newsletter.</h3>
    <div class="coverinput">
    <input type="text" name="email_address" placeholder="Enter your email address" />
    <button type="submit">Sign up</button>
    </div><!-- /.coverinput -->
</form>    
</div><!-- /.contianer -->
</section><!-- /.green_newsletter -->
	
            
<? include '../../includes/la-common-footer-inner.inc'; ?>
