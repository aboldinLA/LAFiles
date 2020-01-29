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
					$link = mysqli_connect('localhost', 'land_patchew', '59q2GB6k$3') or die('Cannot connect to database server');
					mysqli_select_db('land_landscap_lollive') or die('Cannot select database');

				//query for coordinates of provided ZIP Code
				if(!$rs = mysqli_query("SELECT * FROM us_zips WHERE zip LIKE '%$_POST[zipcode]%'")) {
					echo "<p><strong>There was a database error attempting to retrieve your ZIP Code.</strong> Please try again.</p>\n";
				}
				else {
					if(mysqli_num_rows($rs) == 0) {
						echo "<p><strong>No database match for provided ZIP Code.</strong> Please enter a new ZIP Code.</p>\n";	
					}
					else {
						//if found, set variables
						$row = mysqli_fetch_array($rs);
						$lat1 = $row['Lat'];
						$lon1 = $row['lng'];
						$d = $_POST['distance'];
						$r = 3959;

						//compute max and min latitudes / longitudes for search square
						$latN = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(0))));
						$latS = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(180))));
						$lonE = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(90)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
						$lonW = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(270)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));

						//display information about starting point
						//provide max and min latitudes / longitudes
						echo "<table class=\"bordered\" cellspacing=\"0\">\n";
						echo "<tr><th>City</th><th>State</th><th>Lat</th><th>Lon</th><th>Max Lat (N)</th><th>Min Lat (S)</th><th>Max Lon (E)</th><th>Min Lon (W)</th></tr>\n";
						echo "<tr><td>".str_replace('"','',$row['city'])."</td><td>".str_replace('"','',$row['state_id'])."</td><td>$row[Lat]</td><td>$row[llong]</td><td>$latN</td><td>$latS</td><td>$lonE</td><td>$lonW</td></tr>\n";
						echo "</table>\n<br />\n";

						//find all coordinates within the search square's area
						//exclude the starting point and any empty city values
						$query = "SELECT * FROM us_zips WHERE (lat <= $latN AND lat >= $latS AND lng <= $lonE AND lng >= $lonW) AND (zip != $_POST[zipcode]) ORDER BY state_id, city, lat, lng";
						if(!$rs = mysqli_query($query)) {
							echo "<p><strong>There was an error selecting nearby ZIP Codes from the database.</strong></p>\n";
						}
						elseif(mysqli_num_rows($rs) == 0) {
							echo "<p><strong>No nearby ZIP Codes located within the distance specified.</strong> Please try a different distance.</p>\n";								
						}
						else {
							//output all matches to screen
							echo "Zip codes within $_POST[distance] miles of the center of $_POST[zipcode]:<BR><BR>";
						while($row = mysqli_fetch_array($rs)) {
							echo str_replace('"','',$row[zip])." ". str_replace('"','',$row[city]) ." (". str_replace('"','',$row[county_name]) .")<BR>";
								// echo acos(sin(deg2rad($lat1)) * sin(deg2rad($row['Lat'])) + cos(deg2rad($lat1)) * cos(deg2rad($row['Lat'])) * cos(deg2rad($row['llong']) - deg2rad($lon1))) * $r;

							}

						}
					}
				}
			}
		} 
	?>	
	
	
	
</body>
</html>