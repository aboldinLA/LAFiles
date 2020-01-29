<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="zipform">
					<label>Enter your ZIP Code: <input type="text" name="zipcode" size="6" maxlength="5" value="<?php echo $_POST['zipcode']; ?>" /></label>
					<br />
					<label>Select a distance in miles from this point:</label>
					<select name="distance">
						<option<?php if($_POST['distance'] == "5") { echo " selected=\"selected\""; } ?>>5</option>
						<option<?php if($_POST['distance'] == "10") { echo " selected=\"selected\""; } ?>>10</option>
						<option<?php if($_POST['distance'] == "25") { echo " selected=\"selected\""; } ?>>25</option>
						<option<?php if($_POST['distance'] == "50") { echo " selected=\"selected\""; } ?>>50</option>
						<option<?php if($_POST['distance'] == "100") { echo " selected=\"selected\""; } ?>>100</option>
						<option<?php if($_POST['distance'] == "200") { echo " selected=\"selected\""; } ?>>200</option>
					</select>
					<br />
					<input type="submit" name="submit" value="Submit" />
				</form>		
		

        <?php 
			if(isset($_POST['submit'])) {
				if(!preg_match('/^[0-9]{5}$/', $_POST['zipcode'])) {
					echo "<p><strong>You did not enter a properly formatted ZIP Code.</strong> Please try again.</p>\n";
				}
				elseif(!preg_match('/^[0-9]{1,3}$/', $_POST['distance'])) {
					echo "<p><strong>You did not enter a properly formatted distance.</strong> Please try again.</p>\n";
				}
				else {
					//connect to db server; select database
					$servername = "localhost"; 
					$username = "land_patchew";
					$password = "59q2GB6k$3";
					$dbname = "land_landscap_lollive";

                // Create connection
                    $link = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                    if ($link->connect_error) {
                            die("Connection failed: " . $link->connect_error);
                    }       
					
					
					

				//query for coordinates of provided ZIP Code
				
					
						//if found, set variables
						$row = mysqli_fetch_array($rs);
						$lat1 = '33.742069';
						$lon1 = '-117.819771';
						$d = $_POST['distance'];
						$r = 3959;
						

						//compute max and min latitudes / longitudes for search square
						$latN = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(0))));
						$latS = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(180))));
						$lonE = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(90)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
						$lonW = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(270)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
						
						

						//display information about starting point
						//provide max and min latitudes / longitudes
						
						//find all coordinates within the search square's area
						//exclude the starting point and any empty city values
						
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


                $cat1 = $_GET['ad'];

                $sql1 = "SELECT *  FROM `us_zips` WHERE (`lat` < '" . $latN . "' AND `lat` > '" . $latS . "')";
                $result1 = $conn->query($sql1);  
								$rowcount1=mysqli_num_rows($result1);
					
					
						
					
                while($row = mysqli_fetch_array($result1)) {
					
					
					
							if (($row['lng'] < $lonE) && ($row['zip'] != $_POST['zipcode'])) {
					
					
							$zCodes[] = "OR zip = '" . $row['zip'] . "'";
								
								
								
							}
								

							}
					
							$zCodesA = implode(" ",$zCodes);
					
							$zCodesB = substr($zCodesA, 3);
					
					
                $sql2 = "SELECT *  FROM `new_vendor` WHERE (" . $zCodesB . ") AND (xlist LIKE '%271%' OR xlist LIKE '%279%' OR xlist LIKE '%998%' OR xlist LIKE '%1027%' OR xlist LIKE '%1143%' OR xlist LIKE '%560%' OR xlist LIKE '%572%' OR xlist LIKE '%590%' OR xlist LIKE '%1248%' OR xlist LIKE '%1365%') AND status > '2'";
                $result2 = $conn->query($sql2);  
						
					
                while($row = mysqli_fetch_array($result2)) {
					
					echo $row['id'] . '<br>';
					
					
				}					
					
					
					
					
					
					
					
						
			}
		} 
	?>	
	
	
	
</body>
</html>