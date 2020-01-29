<?  
$menuData = array(); 
$childSubMenu = array(); 


// New categorys array 12 Dec. 2019


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '28' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 28,
                'xlist' => $row['id'],
             );
        }
}   

$menuName   = 'Business Services & Software'; 
$menuSlug   = 'commercial-exterior-business-services-software'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 28,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '30' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 30,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Erosion Control'; 
$menuSlug   = 'commercial-exterior-erosion-control'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 30,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1300' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1300,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Fencing'; 
$menuSlug   = 'commercial-exterior-fencing'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1300,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);   


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1139' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1139,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Irrigation'; 
$menuSlug   = 'commercial-exterior-irrigation'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1139,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);  



$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '32' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 32,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Lighting / Electrical'; 
$menuSlug   = 'commercial-exterior-lighting-electrical'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 32,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);  



$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1214' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1214,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Outdoor Living'; 
$menuSlug   = 'commercial-exterior-outdoor-living'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1214,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);  



$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '33' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 33,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Park & Recreation'; 
$menuSlug   = 'commercial-exterior-park-recreation'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 33,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);  



$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '38' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 38,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Paver, Masonry, Blocks, Rocks'; 
$menuSlug   = 'commercial-exterior-paver-masonry-blocks-rocks'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 38,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 1, 
        'childes' => $childMenu, 
);  

// ------------------------------------------------------------------------- 


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1212' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1212,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Pest / Wildlife'; 
$menuSlug   = 'commercial-exterior-pest-wildlife'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1212,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 2, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1002' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1002,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Plant Accessories & Amendments'; 
$menuSlug   = 'commercial-exterior-plant-accessories-amendments'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1002,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 2, 
        'childes' => $childMenu, 
); 


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1394' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1394,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Pool & Spa'; 
$menuSlug   = 'commercial-exterior-pool-spa'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1394,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 2, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1301' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1301,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Scupture / Art / Garden Ornaments'; 
$menuSlug   = 'commercial-exterior-scupture-art-garden-ornaments'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1301,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 2, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '29' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 29,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Site Amenities'; 
$menuSlug   = 'commercial-exterior-site-amenities'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 29,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 2, 
        'childes' => $childMenu, 
);  



$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1215' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1215,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Site Furnishings & Receptables'; 
$menuSlug   = 'commercial-exterior-site-furnishings-receptables'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1215,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 2, 
        'childes' => $childMenu, 
); 



$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '41' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 41,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Water Features'; 
$menuSlug   = 'commercial-exterior-water-features'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 41,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 2, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1213' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1213,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Water Management'; 
$menuSlug   = 'commercial-exterior-water-management'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1213,
        'list_number' => 2, 
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'childes' => $childMenu, 
);  

// -----------------------------------------

$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1209' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1209,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Installation Equipment'; 
$menuSlug   = 'commercial-exterior-installation-equipment'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1209,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 3, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1210' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1210,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Maintenance Equipment'; 
$menuSlug   = 'commercial-exterior-maintenance-equipment'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1210,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 3, 
        'childes' => $childMenu, 
);  


$childMenu = array();
$sql1 = "SELECT * FROM xlist WHERE idParent = '1211' AND name NOT LIKE '%*%' ORDER BY name ASC";
$result1 = $conn->query($sql1);  
while($row = mysqli_fetch_array($result1)) {   
         $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2' AND vendor_product.series_product = 0";
            $result34 = $conn->query($sql34);
            $rowcount34=mysqli_num_rows($result34);

        if($rowcount34 != 0) {
            $slug =  strtolower(trim(makeSlug($row['name'])));
            $childMenu[$slug] = array( 
                'name'  => $row['name'],
                'count' => $rowcount34,
                'slug'  => $slug,
                'ad'    => 1211,
                'xlist' => $row['id'],
             );
        }
}
$menuName   = 'Tools & Parts'; 
$menuSlug   = 'commercial-exterior-tools-parts'; 
$menuData[$menuSlug] = array(
        'name' => $menuName,
        'slug' => $menuSlug,
        'ad'    => 1211,
        'category_name' => 'la_details',
        'metaTitle' => 'Commercial Exterior '.$menuName.' | Landscape Architect', 
        'heading' => 'Commercial Exterior '.$menuName, 
        'description' => '', 
        'list_number' => 3, 
        'childes' => $childMenu, 
);  


// echo '<pre>'; print_r($menuData); die;


function makeSlug($string){
        $string =  trim($string); // 

        $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

        $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

        $string = preg_replace("/[\s_]/", "-", $string);

        return $string;
}
?> 
