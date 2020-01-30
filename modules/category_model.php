<?php
 
include './db.php';
  
	$sql = "select id,name from xlist"; 
	$result = $conn->query($sql);	
                         
    $i =0;
    while($row = mysqli_fetch_array($result)) {

	    $string =  $row['name']; // Trim String

	    $string =  trim($string); // 

		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

		$string = str_replace('&', 'and', $string);

		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

		$string = preg_replace("/[\s_]/", "-", $string);

		$string = str_replace('-sw', '', $string);
		
		$string = str_replace('-sw-', '', $string);
		$string = ltrim($string, '-');
		$string = ltrim($string, 'p-');
		$string = ltrim($string, 'w-');

		//echo $row['id']. '=>' .$string. '<br />';


	    $sql = "UPDATE xlist SET slug='".preg_replace('/\s+/', ' ', $string)."' WHERE id=" . $row['id'] . "";

        if ($conn->query($sql) === TRUE) {
            echo $string."</br>";
        } else {
            echo "Error updating record: " . $conn->error;
        } 
    	 
    }                     	               
                                           
	 
	//echo "<pre>";print_r(mysqli_fetch_array($result));die; 
	 
 ?>