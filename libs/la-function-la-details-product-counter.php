<?
	
	$totalProdCount = 0;

	$xlistNumber = $_GET['xlist'];
            
	//$sql1 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' ORDER BY vendor_id ASC";
	$sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 18 ORDER BY vendor_id ASC";
	$result1 = $conn->query($sql1);  


	$rowcount1=mysqli_num_rows($result1);	
	$totalProdCount += $rowcount1;
	
	            
	//$sql1 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' ORDER BY vendor_id ASC";
	 $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 16 ORDER BY vendor_id ASC";
	$result1 = $conn->query($sql1);  

	$rowcount1=mysqli_num_rows($result1);
	$totalProdCount += $rowcount1;
	
	
	//$sql1 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' ORDER BY vendor_id ASC";
	 $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 14 ORDER BY vendor_id ASC";
	$result1 = $conn->query($sql1);  

	$rowcount1=mysqli_num_rows($result1);
	$totalProdCount += $rowcount1;
	
	
	//$sql1 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' ORDER BY vendor_id ASC";
	 $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 12 ORDER BY vendor_id ASC";
	$result1 = $conn->query($sql1);  

	$rowcount1=mysqli_num_rows($result1);
	$totalProdCount += $rowcount1;
	
	
	
	//$sql1 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' ORDER BY vendor_id ASC";
	 $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status = 10 ORDER BY vendor_id ASC";
	$result1 = $conn->query($sql1);  

	$rowcount1=mysqli_num_rows($result1);
	$totalProdCount += $rowcount1;


	echo $totalProdCount;


?>