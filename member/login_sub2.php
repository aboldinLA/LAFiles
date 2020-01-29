<?php



        $passwordSub = $_POST['password2'];
        
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
        
		$sql ="SELECT * FROM subscribe WHERE pass = '$passwordSub' ";
		$result = $conn->query($sql);									
									
			// banner rotating section
			while($row = mysqli_fetch_array($result)) {
                
                $personId = $row['id'];
;
                                                
            }


				echo "<META HTTP-EQUIV='Refresh' Content='0; URL=https://landscapearchitect.com/subscriptions/subscribe-renew.php?action=edit&id=" . $personId . "' />";     
				exit;    



    echo 'cat<br>';







?>