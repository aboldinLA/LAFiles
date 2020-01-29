


<?



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


		// start for the banner add counting and getting from table


			echo '<div style="position: relative; left: 100px">';							

			$sql = "SELECT * FROM banner_ups_new WHERE ROS LIKE 'yes' AND product IS NULL AND picture IS NOT NULL ORDER BY RAND()";
			$result = $conn->query($sql);									
									
			// banner rotating section
				while($row = mysqli_fetch_array($result)) {
                                                
                      echo $row['id'] . '&nbsp;' . $row['Views'] . '<br>';    
                     
                     
		          }

 


// Close the MySql connection
// mysqli_close($conn);

?>
    
 </div>   
    