<?php
 
include './db.php';
  
	$sql = "select id,title from editorial"; 
	$result = $conn->query($sql);	 
    $i =0;
    while($row = mysqli_fetch_array($result)) {

	    $string =  $row['title']; // Trim String

	    $string =  trim($string); // 

		$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

		$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

		$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

		$string = preg_replace("/[\s_]/", "-", $string);

		    $sql = "UPDATE editorial SET slug='".preg_replace('/\s+/', ' ', $string)."' WHERE id=" . $row['id'] . "";

	        if ($conn->query($sql) === TRUE) {
	            echo $string."</br>";
	        } else {
	            echo "Error updating record: " . $conn->error;
	        } 
    	 
    }                                       
	 
	//echo "<pre>";print_r(mysqli_fetch_array($result));die; 
	 
 ?>