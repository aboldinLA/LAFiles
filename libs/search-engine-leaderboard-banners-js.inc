<?

include("connect3.inc");



$banName = $_GET['ad'];

	if ($banName == 1300) { /* Fencing */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1300' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Fencing2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Fencing3.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Fencing3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Fencing1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Fencing2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Fencing3.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 32) { /* Lighting/Electrical */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '32' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting31.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Lighting1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 1214) { /* Outdoor Living */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1214' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Outdoor1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Outdoor2.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Outdoor2.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Outdoor1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Outdoor2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Outdoor1.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 38) { /* PMBR */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '38' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "PMBR1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "PMBR2.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "PMBR1.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "PMBR1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "PMBR2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "PMBR1.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 29) { /* Site Amenities */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '29' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "SiteAmenities1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "SiteAmenities1.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "SiteAmenities1.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "SiteAmenities1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "SiteAmenities1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "SiteAmenities1.jpg";
					$picBanLink3 = "#";					

			}
				
		
	} elseif ($banName == 1301) { /* Sculpture/Art/Garden Ornaments */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1301' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "sculpture1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "sculpture2.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "sculpture1.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "sculpture1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "sculpture2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "sculpture1.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 1215) { /* Site Furnishings & Receptacles */
		
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1215' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "SiteFurnishings1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "SiteFurnishings1.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "SiteFurnishings1.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "SiteFurnishings1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "SiteFurnishings1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "SiteFurnishings1.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 33) { /* Park & Recreation */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '33' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Park1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Park2.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Park1.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Park1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Park2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Park1.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 41) { /* Water Features */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '41' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "WaterFeatures1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "WaterFeatures2.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "WaterFeatures2.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "WaterFeatures1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "WaterFeatures2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "WaterFeatures2.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 1209) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1209' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "EquipmentInstallation2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "EquipmentInstallation3.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "EquipmentInstallation3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "EquipmentInstallation1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "EquipmentInstallation2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "EquipmentInstallation3.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 1210) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1210' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "EquipmentMaintenance1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "EquipmentMaintenance2.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "EquipmentMaintenance1.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "EquipmentMaintenance1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "EquipmentMaintenance2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "EquipmentMaintenance1.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 1211) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1211' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "tools1.jpg";
					$picBanLink2 = "#";
					$picBan3 = "tools2.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "tools1.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "tools1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "tools2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "tools1.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 28) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '28' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Lighting1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

			}
		
	} elseif ($banName == 30) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '30' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Lighting1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 1212) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1212' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Lighting1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 1002) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1002' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Lighting1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 1213) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1213' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Lighting1.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Lighting2.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Lighting3.jpg";
					$picBanLink3 = "#";					

			}
		
		
	}

?>

