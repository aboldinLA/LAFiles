<?php
/*check for duplicate count before inserting the records.*/


error_reporting(E_ALL & ~E_NOTICE);
	ini_set('display_errors',true);
 
include './db.php';
	$duplicateCount = 0;
  
	$sql = "select id,product_name from vendor_product"; 
	$result = $conn->query($sql);	
                         
    $i =0;
    while($row = mysqli_fetch_array($result)) {

	    $string =  $row['product_name']; // Trim String

	    $string =  trim($string); // 

		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

		$string = preg_replace("/[\s_]/", "-", $string);

		$check = "SELECT id,slug FROM vendor_product WHERE slug = '".$string."'";
		$resultCheck = $conn->query($check);
		$checkCount = mysqli_num_rows($resultCheck);		
		
		if($checkCount > 0){
			
			$resultCheck -> free_result();
			$string .= $string.'-'.$row['id'];
			$duplicateCount++;
		}

		$sql = "UPDATE vendor_product SET slug='".preg_replace('/\s+/', ' ', $string)."' WHERE id=" . $row['id'] . "";

        if ($conn->query($sql) === TRUE) {
            echo $string."</br>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    	 
    }   

    echo "Duplicate Count : ". $duplicateCount;                  	               
                                           
	 
	//echo "<pre>";print_r(mysqli_fetch_array($result));die; 
	 
 ?>