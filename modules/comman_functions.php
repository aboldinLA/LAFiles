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

function get_vendor_details($conn,$id){
	$sql2333 = "SELECT * FROM `new_vendor` WHERE `id` = $id";
	$result2333 = $conn->query($sql2333);										
	$vendor_slug = '';
    while($row = mysqli_fetch_array($result2333)) {
		$vendor_slug = $row['slug'];
    }

    return $vendor_slug;	
}
/*
function getCategoryDetailsFromProductId($conn,$product_id){
	$sql2333 = "SELECT slug FROM `xlist` 
				LEFT JOIN vendor_product
				ON vendor_product.xlist = xlist.id
				WHERE vendor_product.`id` = $product_id";

	$result2333 = $conn->query($sql2333);										

	while($row = mysqli_fetch_array($result2333)) {
		$cate_slug = $row['slug'];
    }

    return $cate_slug;					
}*/

function getCategoryDetails($conn,$id){
	$sql2333 = "SELECT slug FROM `xlist` WHERE `id` = $id";
	$result2333 = $conn->query($sql2333);										
	$cate_slug = '';
    while($row = mysqli_fetch_array($result2333)) {
		$cate_slug = $row['slug'];
    }

    return $cate_slug;	
}

function build_sub_category_list($conn, $cate_id='', $base_url){
	$xlist = [];
	$sql2333 = "SELECT * FROM vendor_product WHERE Clicks > '0' AND (";
	switch ($cate_id) {
		case '28':
			$xlist = [56,59,60,62,63,65,74,75,76,78,126,612,646,876,891,894,896,908,995,1041,1102,1150,1235,1244,1260,1338,1340,1357,1358,1383];
			break;

		case '30':
			$xlist = [149,152,156,157,158,161,164,165,167,78,615,616,1087,1160,1164];
			break;
		case '1300':
			$xlist = [101,106,556,797,871,874,875,890,1309,1310,1311,1312,1325,1350,1351];
			break;
		case '1139':
			$xlist = [170,171,172,177,178,180,183,186,187,188,191,194,195,197,198,199,598,606,725,734,779,1343,1345,1346];
			break;
		case '32':
			$xlist = [203,204,205,208,209,212,212,216,218,219,221,222,223,224,225,226,227,617,650,667,680,720,763,766,821,823,935,948,953,989,1179,1194,1304,1337];
			break;
		case '1214':
			$xlist = [85,91,110,113,134,139,244,758,818,853,907,1025,1032,1186,1187,1188,1207,1224,1239,667,680,720,763,766,821,823,935,948,953,989,1179,1313,1388];
			break;
		case '33':
			$xlist = [229,230,231,235,237,240,242,246,248,250,253,256,257,258,259,260,261,262,264,265,611,619,620,621,622,659,702,745,810,820,879,902,1097,1184,1240,1261,1320,1332,1333,1354,1355,1362];
			break;
		case '33':
			$xlist = [229,230,231,235,237,240,242,246,248,250,253,256,257,258,259,260,261,262,264,265,611,619,620,621,622,659,702,745,810,820,879,902,1097,1184,1240,1261,1320,1332,1333,1354,1355,1362];
			break;
		case '38':
			$xlist = [329,330,331,334,335,336,338,339,340,341,343,344,347,348,353,565,575,640,657,660,685,743,756,827,832,833,851,944,950,961,974,1040,1226,1305,1318,1353,1363,1368,1386];
			break;
		case '1212':
			$xlist = [322,323,324,325,783,916,933,972];
			break;
		case '1002':
			$xlist = [288,289,297,300,308,311,312,313,314,317,318,319,420,562,652,661,665,802,805,806,813,852,1015,1029,1171,1229,1308,1348,1369,1370,1393];
			break;
		case '1394':
			$xlist = [457,638,647,1253,1326,1328];
			break;
		case '29':
			$xlist = [87,90,93,95,97,98,104,107,109,111,117,119,120,121,123,131,132,135,137,145,581,595,689,719,789,838,1034,1230,1231,1238,1356,1366];
			break;
		case '1215':
			$xlist = [114,127,128,129,130,141,618,697,740,1243,1329];
			break;
		case '1301':
			$xlist = [144,784,839,901,1330,1331];
			break;
		case '41':
			$xlist = [427,428,453,459,687,848,1100,1196,1263,1315,1316,1317];
			break;
		case '1213':
			$xlist = [175,179,181,424,425,435,440,442,443,449,971,978,979,994,1201,1372];
			break;
		


	}
	$xlistString = '';
	foreach ($xlist as $key => $value) {
		$xlistString .= "xlist = '".$value."' || ";
	}

	$xlistString = rtrim($xlistString, " || ");
	
	$sql2333 .= $xlistString. ") ORDER BY Clicks DESC LIMIT 0,8"; 

	$sql2333;

	$result2333 = $conn->query($sql2333);
	while($row = mysqli_fetch_array($result2333)) {
		$string2 = $row['product_name'];
		$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
		$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters
		$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces
		$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash		
		$xlistId = $row['xlist'];
		
		$sql2334 = "SELECT * FROM new_vendor WHERE id='" . $row['vendor_id'] . "'";
		$result2334 = $conn->query($sql2334);
		$row2334 = mysqli_fetch_assoc($result2334);

		$string =  $row2334['company_name']; // Trim String
		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters
		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces
		$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		

		$rowXlist = 1;
		$sql555 = "SELECT * FROM xlist WHERE id='" . $xlistId . "'";
		$result555 = $conn->query($sql555);
		$row555 = mysqli_fetch_assoc($result555);
		$subCatName = $row555['name'];	
		$string555 =  $row555['name']; // Trim String
		$string555 = strtolower($string555); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
		$string555 = preg_replace("/[^a-z0-9_\s-]/", "", $string555);  //Strip any unwanted characters
		$string555 = preg_replace("/[\s-]+/", " ", $string555); // Clean multiple dashes or whitespaces
		$string555 = preg_replace("/[\s_]/", "-", $string555); //Convert whitespaces and underscore to dash	
		$sub_cate_slug = $row555['slug'];
		$vendor_slug = $row2334['slug'];
		$product_url = $base_url.'product/'.$sub_cate_slug.'/'.$vendor_slug.'/'.$row['slug'];

		return '<div class="pc-wrap">
				<div class="product-item">
					<div class="elem">
						<a href="' .$product_url. '">
							<div class="img-cover">
								<img src="'.$base_url.'optimized-images/timthumb.php?src='.$base_url.'products/images/' . $row['photo'] . '" class="img-responsive lazy" alt=""/>
							</div>
							<p class="padding12">' . $row['product_name'] . '</p>
							<img src="'.$base_url.'optimized-images/timthumb.php?src='.$base_url.'products/images/'. $row2334['logo'] . '" class="productLogo lazy" />
						</a>
					</div>
				</div>
			</div>';
	} 
}
