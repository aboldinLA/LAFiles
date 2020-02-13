<?php
function trending_categories($conn,$parent_cate_id, $base_url){
	$sql2333 = "SELECT *, (SELECT slug FROM xlist WHERE id=$parent_cate_id) AS parent_slug FROM `xlist` WHERE `idParent` = $parent_cate_id AND name NOT LIKE '%*%' ORDER BY `xlist`.`name` ASC";
	$result2333 = $conn->query($sql2333);										

    $string = '<strong>Categories</strong><br>';  
		
	while($row = mysqli_fetch_array($result2333)) {
		$cate_slug = $row['slug'];
        $url = $base_url.$row['parent_slug'].'/'.$row['slug'];
      	$string .= '<a href="'.$url.'" class="trending-links">' . $row['name'] . '</a><br>';  
        
    }

    return $string;
}

function get_category_link($conn,$id){
	$sql2333 = "SELECT slug FROM `xlist` WHERE `id` = $id";
	$result2333 = $conn->query($sql2333);										
	$cate_slug = '';
    while($row = mysqli_fetch_array($result2333)) {
		$cate_slug = $row['slug'];
    }

    return $cate_slug;
}