<?  

 	// First Menu
	$menuData = array(); 
	$childMenu = array();
	$childSubMenu = array(); 
 
	$key3 = '28';

	$sql = "select * from xlist where id='" . $key3 . "'";
	$result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
        
                $catMain = $row['name'];
    }

	$sql = "select * from xlist where idParent='" . $key3 . "' ORDER BY name ASC";
	$result = $conn->query($sql); 
		while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                        
                        $xName = "Landscape / Irrigation Supply";
                        
                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                        
                        $xName = "Bidding & Estimating";
                        
                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                        
                        $xName = "Landscape Management";
                        
                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                        
                        $xName = "Irrigation Design";
                        
                    } elseif ($row['name'] == "* SW - Plant Identification") {
                        
                        $xName = "Plant Identification";
                        
                    } elseif ($row['name'] == "* SW - Site Design") {
                        
                        $xName = "Site Design";
                        
                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                        
                        $xName = "Vendor Specific Design";
                        
                    } elseif ($row['name'] == "* SW - Website Design") {
                        
                        $xName = "Website Design";
                        
                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                        
                        $xName = "Chemicals, Soil Nutrients & Mulch";
                        
                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                        
                        $xName = "Light Tools & Equipment";
                        
                    } elseif ($row['name'] == "W - Lighting") {
                        
                        $xName = "Lighting";
                        
                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                        
                        $xName = "Pavers, Masonry, Blocks & Rocks";
                        
                    } elseif ($row['name'] == "W - Power Equipment") {
                        
                        $xName = "Power Equipment";
                        
                    } elseif ($row['name'] == "W - Small Engine Repair") {
                        
                        $xName = "Small Engine Repair";
                        
                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                        
                        $xName = "Water Garden Supplies";
                        
                    } elseif ($row['name'] == "P - Aquatic Plants") {
                        
                        $xName = "Wholesale Aquatic Plants";
                        
                    } elseif ($row['name'] == "P - Bamboo") {
                        
                        $xName = "Bamboo";
                        
                    } elseif ($row['name'] == "P - Ground Cover") {
                        
                        $xName = "Ground Cover";
                        
                    } elseif ($row['name'] == "P - Plant Brokers") {
                        
                        $xName = "Plant Brokers";
                        
                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                        
                        $xName = "Tree Relocation Services";
                        
                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                        
                        $xName = "Tree Research & Introduction";
                        
                    } elseif ($row['name'] == "P - Trees - Palms") {
                        
                        $xName = "Trees - Palms";
                        
                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                        
                        $xName = "Trees - Wholesale";
                        
                    } elseif ($row['name'] == "P - Tropical Foliage") {
                        
                        $xName = "Tropical Foliage";
                        
                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                        
                        $xName = "Turf Grass / Sod / Seed";
                        
                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                        
                        $xName = "Wildflower Seeds";
                        
                    } else {
                        
                       $xName = $row['name'];
                        
                    } 
                    $slug =  makeSlug($xName);
        			 $childSubMenu[strtolower(trim($slug))] = array(
						'name' => $xName,
						'slug' => strtolower($slug),
						'ad'  => $key3,
						'number' => $row['id'],
						'catName' => $xName,
						'catMain' => $catMain,
						'kind' => 8,
                        'metaTitle' => $xName.' | Landscape Architect',
                        'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                        'description' => '', 
					);  
                }
									
		}  
			$subMenu    	= 'Business Services & Software'; 
			$subMenuSlug    = 'commercial-exterior-business-services-software'; 
		$menuData[$subMenuSlug] = array(
			'name' => $subMenu,
			'slug' => $subMenuSlug,
			'ad'    => $key3,
            'category_name' => 'la_details',
            'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
            'heading' => 'Commercial Exterior '.$subMenu, 
            'description' => '', 
			'childes' => $childSubMenu, 
		);  



         /*******************************************************************
         * Second Menu ( LA Details Categlo )
         **************************************************************/
        $childSubMenu = array();
        $key4 = '30';
        $sql = "select * from xlist where id='" . $key4 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key4 . "' ORDER BY name ASC";
        $result = $conn->query($sql);       

            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                    
                                
                        $slug =  makeSlug($xName);
                        $childSubMenu[strtolower(trim($slug))] = array(
                            'name' => $xName,
                            'slug' => strtolower($slug),
                            'ad'  => $key4,
                            'number' => $row['id'],
                            'catName' => $xName,
                            'catMain' => $catMain,
                            'kind' => 8,
                            'metaTitle' => $xName.' | Landscape Architect',
                            'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                            'description' => '', 
                        );  
                    
                }
                                    
        }        


        $subMenu        = 'Erosion Control'; 
        $subMenuSlug    = 'commercial-exterior-erosion-control';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key4,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 

        /*******************************************************************
         * Third Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();

        $key5 = '1300';
                
        $sql = "select * from xlist where id='" . $key5 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key5 . "' ORDER BY name ASC";
        $result = $conn->query($sql);

            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                            $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key5,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );  
                    
                }
                                    
        }

        $subMenu        = 'Fencing'; 
        $subMenuSlug    = 'commercial-exterior-fencing';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key5,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 


        /*******************************************************************
        * Third Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();

        $key6 = '1139';
                
        $sql = "select * from xlist where id='" . $key6 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key6 . "' ORDER BY name ASC";
        $result = $conn->query($sql);

            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                        
                            $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key6,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );  
                }
                                    
        }

        $subMenu        = 'Irrigation'; 
        $subMenuSlug    = 'commercial-exterior-irrigation';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key6,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 

        /*******************************************************************
        * Forth Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();

        $key7 = '32';
                
        $sql = "select * from xlist where id='" . $key7 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key7 . "' ORDER BY name ASC";
        $result = $conn->query($sql);
                    
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                            $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key7,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                ); 
                        }    
                }

        $subMenu        = 'Lighting/Electrical'; 
        $subMenuSlug    = 'commercial-exterior-lighting-electrical';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key7,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 

        /*******************************************************************
        * Fifth Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();


        $key8 = '1214';
                
        $sql = "select * from xlist where id='" . $key8 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key8 . "' ORDER BY name ASC";
        $result = $conn->query($sql);       
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                        $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key8,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                ); 
                    
                }
                                    
        }

        $subMenu        = 'Outdoor Living'; 
        $subMenuSlug    = 'commercial-exterior-outdoor-living';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key8,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 

        /*******************************************************************
        * Six Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();

        $key9 = '33';
                
        $sql = "select * from xlist where id='" . $key9 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
                $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key9 . "' ORDER BY name ASC";
        $result = $conn->query($sql);   
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }   
                            $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key9,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );                                                       
                    
                }
                                    
        }    


        $subMenu        = 'Park & Recreation'; 
        $subMenuSlug    = 'commercial-exterior-park-recreation';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key9,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 



        /*******************************************************************
        * Seven Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();

        $key10 = '38';
        $sql = "select * from xlist where id='" . $key10 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key10 . "' ORDER BY name ASC";
        $result = $conn->query($sql);
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                             $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key10,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );            
                    
                }
                                    
        }


        $subMenu        = 'Paver, Masonry, Blocks, Rocks'; 
        $subMenuSlug    = 'commercial-exterior-paver-masonry-blocks-rocks';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key10,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 



        /*******************************************************************
        * Eaight Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();

        $key11 = '1212';
        $sql = "select * from xlist where id='" . $key11 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key11 . "' ORDER BY name ASC";
        $result = $conn->query($sql);            
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                        $slug =  makeSlug($xName);
                        $childSubMenu[strtolower(trim($slug))] = array(
                                                'name' => $xName,
                                                'slug' => strtolower($slug),
                                                'ad'  => $key11,
                                                'number' => $row['id'],
                                                'catName' => $xName,
                                                'catMain' => $catMain,
                                                'kind' => 8,
                                                'metaTitle' => $xName.' | Landscape Architect',
                                                'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                'description' => '', 
                                            );            
                
                }
                                    
        }

        $subMenu        = 'Pest/Wildlife'; 
        $subMenuSlug    = 'commercial-exterior-pest-wildlife';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key11,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 




        /*******************************************************************
        * Nine Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();

        $key12 = '1002';
        $sql = "select * from xlist where id='" . $key12 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {            
            $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key12 . "' ORDER BY name ASC";
        $result = $conn->query($sql);       

            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                        $slug =  makeSlug($xName);
                        $childSubMenu[strtolower(trim($slug))] = array(
                                                'name' => $xName,
                                                'slug' => strtolower($slug),
                                                'ad'  => $key12,
                                                'number' => $row['id'],
                                                'catName' => $xName,
                                                'catMain' => $catMain,
                                                'kind' => 8,
                                                'metaTitle' => $xName.' | Landscape Architect',
                                                'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                'description' => '', 
                                            );            
                    
                }
                                    
        }

        
        $subMenu        = 'Plant Accessories & Amendments'; 
        $subMenuSlug    = 'commercial-exterior-plant-accessories-amendments';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key12,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 




        /*******************************************************************
        * Ten Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();
        $key13 = '1301';
        $sql = "select * from xlist where id='" . $key13 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key13 . "' ORDER BY name ASC";
        $result = $conn->query($sql);   

        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                        $slug =  makeSlug($xName);
                        $childSubMenu[strtolower(trim($slug))] = array(
                                                'name' => $xName,
                                                'slug' => strtolower($slug),
                                                'ad'  => $key13,
                                                'number' => $row['id'],
                                                'catName' => $xName,
                                                'catMain' => $catMain,
                                                'kind' => 8,
                                                'metaTitle' => $xName.' | Landscape Architect',
                                                'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                'description' => '', 
                                            );            
                    
                }
                                    
        }
        
        $subMenu        = 'Sculpture/Art/Garden Ornaments'; 
        $subMenuSlug    = 'commercial-exterior-sculpture-art-garden-ornaments';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key13,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 


        /*******************************************************************
        * 11 Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();
            
        $key14 = '1301';
                
        $sql = "select * from xlist where id='" . $key14 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key14 . "' ORDER BY name ASC";
        $result = $conn->query($sql);   
      
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                             $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key14,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );          
                    
                }
                                    
        }
        $subMenu        = 'Site Amenities'; 
        $subMenuSlug    = 'commercial-exterior-site-amenities';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key14,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 

        /*******************************************************************
        * 12 Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();
            
        $key15 = '1301';    
        $sql = "select * from xlist where id='" . $key15 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key15 . "' ORDER BY name ASC";
        $result = $conn->query($sql);    
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                        $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key15,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );          
                    
                }
                                    
        }

        $subMenu        = 'Site Furnishings & Receptacles'; 
        $subMenuSlug    = 'commercial-exterior-site-furnishings-eeceptacles';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key15,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 

        /*******************************************************************
        * 13 Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();
        
        $key15 = '41';
        $sql = "select * from xlist where id='" . $key15 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            
                    $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key15 . "' ORDER BY name ASC";
        $result = $conn->query($sql);   

        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* Misc. Lighting") {
                                        
                                        $xName = "Miscellaneous Lighting";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                    
                           $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key16,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );       
                    
                }
                                    
        }

        $subMenu        = 'Water Features'; 
        $subMenuSlug    = 'commercial-exterior-water-features';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key16,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 

        /*******************************************************************
        * 14 Menu ( LA Details Categlo )
        **************************************************************/
        $childSubMenu = array();
        
        $key17 = '1213';  
        $sql = "select * from xlist where id='" . $key17 . "'";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_array($result)) {
            $catMain = $row['name'];
        }

        $sql = "select * from xlist where idParent='" . $key17 . "' ORDER BY name ASC";
        $result = $conn->query($sql);   
        
            
        while($row = mysqli_fetch_array($result)) {
            
                $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
                $result34 = $conn->query($sql34);
                $rowcount34=mysqli_num_rows($result34);
                
                if($rowcount34 != 0) {
                    
                                   if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                        
                                        $xName = "Landscape / Irrigation Supply";
                                        
                                    } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                        
                                        $xName = "Bidding & Estimating";
                                        
                                    } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                        
                                        $xName = "Landscape Management";
                                        
                                    } elseif ($row['name'] == "* SW - Irrigation Design") {
                                        
                                        $xName = "Irrigation Design";
                                        
                                    } elseif ($row['name'] == "* SW - Plant Identification") {
                                        
                                        $xName = "Plant Identification";
                                        
                                    } elseif ($row['name'] == "* SW - Site Design") {
                                        
                                        $xName = "Site Design";
                                        
                                    } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                        
                                        $xName = "Vendor Specific Design";
                                        
                                    } elseif ($row['name'] == "* SW - Website Design") {
                                        
                                        $xName = "Website Design";
                                        
                                    } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                        
                                        $xName = "Chemicals, Soil Nutrients & Mulch";
                                        
                                    } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                        
                                        $xName = "Light Tools & Equipment";
                                        
                                    } elseif ($row['name'] == "W - Lighting") {
                                        
                                        $xName = "Lighting";
                                        
                                    } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                        
                                        $xName = "Pavers, Masonry, Blocks & Rocks";
                                        
                                    } elseif ($row['name'] == "W - Power Equipment") {
                                        
                                        $xName = "Power Equipment";
                                        
                                    } elseif ($row['name'] == "W - Small Engine Repair") {
                                        
                                        $xName = "Small Engine Repair";
                                        
                                    } elseif ($row['name'] == "W - Water Garden Supplies") {
                                        
                                        $xName = "Water Garden Supplies";
                                        
                                    } elseif ($row['name'] == "P - Aquatic Plants") {
                                        
                                        $xName = "Wholesale Aquatic Plants";
                                        
                                    } elseif ($row['name'] == "P - Bamboo") {
                                        
                                        $xName = "Bamboo";
                                        
                                    } elseif ($row['name'] == "P - Ground Cover") {
                                        
                                        $xName = "Ground Cover";
                                        
                                    } elseif ($row['name'] == "P - Plant Brokers") {
                                        
                                        $xName = "Plant Brokers";
                                        
                                    } elseif ($row['name'] == "P - Tree Relocation Services") {
                                        
                                        $xName = "Tree Relocation Services";
                                        
                                    } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                        
                                        $xName = "Tree Research & Introduction";
                                        
                                    } elseif ($row['name'] == "P - Trees - Palms") {
                                        
                                        $xName = "Trees - Palms";
                                        
                                    } elseif ($row['name'] == "P - Trees - Wholesale") {
                                        
                                        $xName = "Trees - Wholesale";
                                        
                                    } elseif ($row['name'] == "P - Tropical Foliage") {
                                        
                                        $xName = "Tropical Foliage";
                                        
                                    } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                        
                                        $xName = "Turf Grass / Sod / Seed";
                                        
                                    } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                        
                                        $xName = "Wildflower Seeds";
                                        
                                    } else {
                                        
                                       $xName = $row['name'];
                                        
                                    }                                                         
                            $slug =  makeSlug($xName);
                            $childSubMenu[strtolower(trim($slug))] = array(
                                                    'name' => $xName,
                                                    'slug' => strtolower($slug),
                                                    'ad'  => $key17,
                                                    'number' => $row['id'],
                                                    'catName' => $xName,
                                                    'catMain' => $catMain,
                                                    'kind' => 8,
                                                    'metaTitle' => $xName.' | Landscape Architect',
                                                    'heading' => 'Commercial Exterior '.$catMain." | ".$xName,
                                                    'description' => '', 
                                                );     
                    
                }
                                    
        }

        $subMenu        = 'Water Mgmt.'; 
        $subMenuSlug    = 'commercial-exterior-water-mgmt';
        $menuData[$subMenuSlug] = array(
                                        'name' => $subMenu,
                                        'slug' => $subMenuSlug,
                                        'ad'    => $key17,
                                        'category_name' => 'la_details',
                                        'metaTitle' => 'Commercial Exterior '.$subMenu.' | Landscape Architect', 
                                        'heading' => 'Commercial Exterior '.$subMenu, 
                                        'description' => '', 
                                        'childes' => $childSubMenu, 
                                    ); 


/********************************************************************************************
 *
 * Tools & Equipment Categories
 *
 *******************************************************************************************/
$equipment_url_slug = 'equipment-categories-';
$equipment_url_title = 'equipment-categories-';

// 1st Menu
$childSubMenu = array();
$key18 = '1209';      
$sql = "select * from xlist where id='" . $key18 . "'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)) {
    $catMain = $row['name'];
}

$sql = "select * from xlist where idParent='" . $key18 . "' ORDER BY name ASC";
$result = $conn->query($sql); 

while($row = mysqli_fetch_array($result)) {
    
        $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
        $result34 = $conn->query($sql34);
        $rowcount34=mysqli_num_rows($result34);
        
        if($rowcount34 != 0) {
            
                           if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                
                                $xName = "Landscape / Irrigation Supply";
                                
                            } elseif ($row['name'] == "* Misc. Lighting") {
                                
                                $xName = "Miscellaneous Lighting";
                                
                            } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                
                                $xName = "Bidding & Estimating";
                                
                            } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                
                                $xName = "Landscape Management";
                                
                            } elseif ($row['name'] == "* SW - Irrigation Design") {
                                
                                $xName = "Irrigation Design";
                                
                            } elseif ($row['name'] == "* SW - Plant Identification") {
                                
                                $xName = "Plant Identification";
                                
                            } elseif ($row['name'] == "* SW - Site Design") {
                                
                                $xName = "Site Design";
                                
                            } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                
                                $xName = "Vendor Specific Design";
                                
                            } elseif ($row['name'] == "* SW - Website Design") {
                                
                                $xName = "Website Design";
                                
                            } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                
                                $xName = "Chemicals, Soil Nutrients & Mulch";
                                
                            } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                
                                $xName = "Light Tools & Equipment";
                                
                            } elseif ($row['name'] == "W - Lighting") {
                                
                                $xName = "Lighting";
                                
                            } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                
                                $xName = "Pavers, Masonry, Blocks & Rocks";
                                
                            } elseif ($row['name'] == "W - Power Equipment") {
                                
                                $xName = "Power Equipment";
                                
                            } elseif ($row['name'] == "W - Small Engine Repair") {
                                
                                $xName = "Small Engine Repair";
                                
                            } elseif ($row['name'] == "W - Water Garden Supplies") {
                                
                                $xName = "Water Garden Supplies";
                                
                            } elseif ($row['name'] == "P - Aquatic Plants") {
                                
                                $xName = "Wholesale Aquatic Plants";
                                
                            } elseif ($row['name'] == "P - Bamboo") {
                                
                                $xName = "Bamboo";
                                
                            } elseif ($row['name'] == "P - Ground Cover") {
                                
                                $xName = "Ground Cover";
                                
                            } elseif ($row['name'] == "P - Plant Brokers") {
                                
                                $xName = "Plant Brokers";
                                
                            } elseif ($row['name'] == "P - Tree Relocation Services") {
                                
                                $xName = "Tree Relocation Services";
                                
                            } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                
                                $xName = "Tree Research & Introduction";
                                
                            } elseif ($row['name'] == "P - Trees - Palms") {
                                
                                $xName = "Trees - Palms";
                                
                            } elseif ($row['name'] == "P - Trees - Wholesale") {
                                
                                $xName = "Trees - Wholesale";
                                
                            } elseif ($row['name'] == "P - Tropical Foliage") {
                                
                                $xName = "Tropical Foliage";
                                
                            } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                
                                $xName = "Turf Grass / Sod / Seed";
                                
                            } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                
                                $xName = "Wildflower Seeds";
                                
                            } else {
                                
                               $xName = $row['name'];
                                
                            }                                                         
            
                    $slug =  makeSlug($xName);
                    $childSubMenu[strtolower(trim($slug))] = array(
                                            'name' => $xName,
                                            'slug' => strtolower($slug),
                                            'ad'  => $key18,
                                            'number' => $row['id'],
                                            'catName' => $xName,
                                            'catMain' => $catMain,
                                            'kind' => 8,
                                            'metaTitle' => $equipment_url_title.' '.$xName.' | Landscape Architect',
                                            'heading' => $equipment_url_title.' '.$xName, 
                                            'description' => '', 
                                        );     
            
        }
                            
}

$subMenu        = 'Installation Equipment'; 
$subMenuSlug    = $equipment_url_slug.'installation-equipment';
$menuData[$subMenuSlug] = array(
                                'name' => $subMenu,
                                'slug' => $subMenuSlug,
                                'ad'    => $key18,
                                'category_name' => 'equipment_cat',
                                'metaTitle' => $equipment_url_title.' '.$subMenu.' | Landscape Architect', 
                                'heading' => $equipment_url_title.' '.$subMenu, 
                                'description' => '', 
                                'childes' => $childSubMenu, 
                            ); 

// 2st Menu
$childSubMenu = array();
$key19 = '1210';
$sql = "select * from xlist where id='" . $key19 . "'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)) {
    $catMain = $row['name'];
}

$sql = "select * from xlist where idParent='" . $key19 . "' ORDER BY name ASC";
$result = $conn->query($sql);        
    
while($row = mysqli_fetch_array($result)) {
    
        $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
        $result34 = $conn->query($sql34);
        $rowcount34=mysqli_num_rows($result34);
        
        if($rowcount34 != 0) {
            
                           if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                
                                $xName = "Landscape / Irrigation Supply";
                                
                            } elseif ($row['name'] == "* Misc. Lighting") {
                                
                                $xName = "Miscellaneous Lighting";
                                
                            } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                
                                $xName = "Bidding & Estimating";
                                
                            } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                
                                $xName = "Landscape Management";
                                
                            } elseif ($row['name'] == "* SW - Irrigation Design") {
                                
                                $xName = "Irrigation Design";
                                
                            } elseif ($row['name'] == "* SW - Plant Identification") {
                                
                                $xName = "Plant Identification";
                                
                            } elseif ($row['name'] == "* SW - Site Design") {
                                
                                $xName = "Site Design";
                                
                            } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                
                                $xName = "Vendor Specific Design";
                                
                            } elseif ($row['name'] == "* SW - Website Design") {
                                
                                $xName = "Website Design";
                                
                            } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                
                                $xName = "Chemicals, Soil Nutrients & Mulch";
                                
                            } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                
                                $xName = "Light Tools & Equipment";
                                
                            } elseif ($row['name'] == "W - Lighting") {
                                
                                $xName = "Lighting";
                                
                            } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                
                                $xName = "Pavers, Masonry, Blocks & Rocks";
                                
                            } elseif ($row['name'] == "W - Power Equipment") {
                                
                                $xName = "Power Equipment";
                                
                            } elseif ($row['name'] == "W - Small Engine Repair") {
                                
                                $xName = "Small Engine Repair";
                                
                            } elseif ($row['name'] == "W - Water Garden Supplies") {
                                
                                $xName = "Water Garden Supplies";
                                
                            } elseif ($row['name'] == "P - Aquatic Plants") {
                                
                                $xName = "Wholesale Aquatic Plants";
                                
                            } elseif ($row['name'] == "P - Bamboo") {
                                
                                $xName = "Bamboo";
                                
                            } elseif ($row['name'] == "P - Ground Cover") {
                                
                                $xName = "Ground Cover";
                                
                            } elseif ($row['name'] == "P - Plant Brokers") {
                                
                                $xName = "Plant Brokers";
                                
                            } elseif ($row['name'] == "P - Tree Relocation Services") {
                                
                                $xName = "Tree Relocation Services";
                                
                            } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                
                                $xName = "Tree Research & Introduction";
                                
                            } elseif ($row['name'] == "P - Trees - Palms") {
                                
                                $xName = "Trees - Palms";
                                
                            } elseif ($row['name'] == "P - Trees - Wholesale") {
                                
                                $xName = "Trees - Wholesale";
                                
                            } elseif ($row['name'] == "P - Tropical Foliage") {
                                
                                $xName = "Tropical Foliage";
                                
                            } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                
                                $xName = "Turf Grass / Sod / Seed";
                                
                            } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                
                                $xName = "Wildflower Seeds";
                                
                            } else {
                                
                               $xName = $row['name'];
                                
                            }                                                         
            
                        
                    $slug =  makeSlug($xName);
                    $childSubMenu[strtolower(trim($slug))] = array(
                                            'name' => $xName,
                                            'slug' => strtolower($slug),
                                            'ad'  => $key19,
                                            'number' => $row['id'],
                                            'catName' => $xName,
                                            'catMain' => $catMain,
                                            'kind' => 8,
                                            'metaTitle' => $equipment_url_title.' '.$xName.' | Landscape Architect',
                                            'heading' => $equipment_url_title.' '.$xName, 
                                            'description' => '', 
                                        );     
            
        }
                            
} 

$subMenu        = 'Maintenance Equipment'; 
$subMenuSlug    = $equipment_url_slug.'maintenance-equipment';
$menuData[$subMenuSlug] = array(
                                'name' => $subMenu,
                                'slug' => $subMenuSlug,
                                'ad'    => $key19,
                                'category_name' => 'equipment_cat',
                                'metaTitle' => $equipment_url_title.' '.$subMenu.' | Landscape Architect', 
                                'heading' => $equipment_url_title.' '.$subMenu, 
                                'description' => '', 
                                'childes' => $childSubMenu, 
                            ); 

// 3st Menu
$childSubMenu = array();
$key20 = '1211';               
$sql = "select * from xlist where id='" . $key20 . "'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)) {
    $catMain = $row['name'];
}

$sql = "select * from xlist where idParent='" . $key20 . "' ORDER BY name ASC";
$result = $conn->query($sql);   

while($row = mysqli_fetch_array($result)) {
    
        $sql34 = "select * from `new_vendor` LEFT JOIN `vendor_product` ON `new_vendor`.`id` = `vendor_product`.`vendor_id` where `vendor_product`.`xlist`='" . $row['id'] . "' AND `new_vendor`.`status` > '2'";
        $result34 = $conn->query($sql34);
        $rowcount34=mysqli_num_rows($result34);
        
        if($rowcount34 != 0) {
            
                           if ($row['name'] == "W - Landscape / Irrigation Supply") {
                                
                                $xName = "Landscape / Irrigation Supply";
                                
                            } elseif ($row['name'] == "* Rental Equipment") {
                                
                                $xName = "Rental Equipment";
                                
                            } elseif ($row['name'] == "* Misc. Lighting") {
                                
                                $xName = "Miscellaneous Lighting";
                                
                            } elseif ($row['name'] == "* SW - Bidding & Estimating") {
                                
                                $xName = "Bidding & Estimating";
                                
                            } elseif ($row['name'] == "* SW - Landscape Mgmt.") {
                                
                                $xName = "Landscape Management";
                                
                            } elseif ($row['name'] == "* SW - Irrigation Design") {
                                
                                $xName = "Irrigation Design";
                                
                            } elseif ($row['name'] == "* SW - Plant Identification") {
                                
                                $xName = "Plant Identification";
                                
                            } elseif ($row['name'] == "* SW - Site Design") {
                                
                                $xName = "Site Design";
                                
                            } elseif ($row['name'] == "* SW - Vendor Specific Design") {
                                
                                $xName = "Vendor Specific Design";
                                
                            } elseif ($row['name'] == "* SW - Website Design") {
                                
                                $xName = "Website Design";
                                
                            } elseif ($row['name'] == "W - Chemicals, Soil Nutrients & Mulch") {
                                
                                $xName = "Chemicals, Soil Nutrients & Mulch";
                                
                            } elseif ($row['name'] == "W - Light Tools & Equipment") {
                                
                                $xName = "Light Tools & Equipment";
                                
                            } elseif ($row['name'] == "W - Lighting") {
                                
                                $xName = "Lighting";
                                
                            } elseif ($row['name'] == "W - Pavers, Masonry, Blocks & Rocks") {
                                
                                $xName = "Pavers, Masonry, Blocks & Rocks";
                                
                            } elseif ($row['name'] == "W - Power Equipment") {
                                
                                $xName = "Power Equipment";
                                
                            } elseif ($row['name'] == "W - Small Engine Repair") {
                                
                                $xName = "Small Engine Repair";
                                
                            } elseif ($row['name'] == "W - Water Garden Supplies") {
                                
                                $xName = "Water Garden Supplies";
                                
                            } elseif ($row['name'] == "P - Aquatic Plants") {
                                
                                $xName = "Wholesale Aquatic Plants";
                                
                            } elseif ($row['name'] == "P - Bamboo") {
                                
                                $xName = "Bamboo";
                                
                            } elseif ($row['name'] == "P - Ground Cover") {
                                
                                $xName = "Ground Cover";
                                
                            } elseif ($row['name'] == "P - Plant Brokers") {
                                
                                $xName = "Plant Brokers";
                                
                            } elseif ($row['name'] == "P - Tree Relocation Services") {
                                
                                $xName = "Tree Relocation Services";
                                
                            } elseif ($row['name'] == "P - Tree Research & Introduction") {
                                
                                $xName = "Tree Research & Introduction";
                                
                            } elseif ($row['name'] == "P - Trees - Palms") {
                                
                                $xName = "Trees - Palms";
                                
                            } elseif ($row['name'] == "P - Trees - Wholesale") {
                                
                                $xName = "Trees - Wholesale";
                                
                            } elseif ($row['name'] == "P - Tropical Foliage") {
                                
                                $xName = "Tropical Foliage";
                                
                            } elseif ($row['name'] == "P - Turf Grass / Sod / Seed") {
                                
                                $xName = "Turf Grass / Sod / Seed";
                                
                            } elseif ($row['name'] == "P - Wildflower Seeds: See Erosion Control") {
                                
                                $xName = "Wildflower Seeds";
                                
                            } else {
                                
                               $xName = $row['name'];
                                
                            }                                                         
                 $slug =  makeSlug($xName);
                $childSubMenu[strtolower(trim($slug))] = array(
                                        'name' => $xName,
                                        'slug' => strtolower($slug),
                                        'ad'  => $key20,
                                        'number' => $row['id'],
                                        'catName' => $xName,
                                        'catMain' => $catMain,
                                        'kind' => 8,
                                        'metaTitle' => $equipment_url_title.' '.$xName.' | Landscape Architect',
                                        'heading' => $equipment_url_title.' '.$xName, 
                                        'description' => '', 
                                    );     
            
        }
                            
}

$subMenu        = 'Tools/Parts'; 
$subMenuSlug    = $equipment_url_slug.'tools-parts';
$menuData[$subMenuSlug] = array(
                                'name' => $subMenu,
                                'slug' => $subMenuSlug,
                                'ad'    => $key20,
                                'category_name' => 'equipment_cat',
                                'metaTitle' => $equipment_url_title.' '.$subMenu.' | Landscape Architect', 
                                'heading' => $equipment_url_title.' '.$subMenu, 
                                'description' => '', 
                                'childes' => $childSubMenu, 
                            ); 

//echo "<pre>";print_r($menuData);die;
//print_r($menuData);

function makeSlug($string){
        $string =  trim($string); // 

        $string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

        $string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

        $string = preg_replace("/[\s_]/", "-", $string);

        return $string;
}
?> 
