<?php


 $password = '$_POST['password']';
        
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
        
		$query ="SELECT * FROM subscribe WHERE  pass = '$password' ";
		$result = $conn->query($sql);									
									
			// banner rotating section
			while($row = mysqli_fetch_array($result)) {
                
                echo $row['id'];
                                                
            }









?>