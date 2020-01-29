<?
	include("lo_top-main2.inc");
	
	
		$key = '22687';	
		$hash2 = "91ee7597b87149977cc8f0e2ee0e0248e87f031a";
	
	// Database login
	include("config.inc2.php"); //include config file

	
	$results = mysqli_query($connecDB,"select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id LEFT JOIN vendor_product_contact ON vendor_product_contact.vendor_id=vendor_product.vendor_id LEFT JOIN vendor_product_lg_approvals ON vendor_product_lg_approvals.vendor_product_id=vendor_product.id where vendor_product_lg_approvals.app_hash = '" .  $hash2 . "'");
	
	
		while($row = mysqli_fetch_array($results))
	{
		
		echo $row["size"];
		
	}