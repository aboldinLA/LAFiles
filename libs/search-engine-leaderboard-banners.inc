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
					$picBan2 = "ODL-LC-1706-Page-26.jpg";
					$picBanLink2 = "#";
					$picBan3 = "ODL-Page-60-LASN-1711.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "ODL-LC-1706-Page-26.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "ODL-LC-1706-Page-26.jpg";
					$picBanLink1 = "#";
					$picBan2 = "ODL-Page-60-LASN-1711.jpg";
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
					$picBan2 = "PMBR-LA-1802-pg-72.jpg";
					$picBanLink2 = "#";
					$picBan3 = "PMBR-LA-1802-pg-52.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "PMBR-LA-1802-pg-72.jpg";
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
					$picBan2 = "PMBR-LA-1802-pg-72.jpg";
					$picBanLink2 = "#";
					$picBan3 = "PMBR-LA-1802-pg-52.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 29) { /* Site Amenities */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '29' AND ROS = 'lad' ORDER BY RAND()";

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
					$picBan3 = "Site-Furn-LA-1706-page-61.jpg";
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
					$picBan2 = "Site-Furn-LA-1706-page-61.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Site-Furn-LA-1708-pg29.jpg";
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
					$picBan2 = "PR-LA-page-70-1803.jpg";
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
					$picBan3 = "PR-LA-page-70-1803.jpg";
					$picBanLink3 = "#";					

			}
		
		
	} elseif ($banName == 41) { /* Water Features */
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '41' AND ROS = 'lad' ORDER BY RAND()";

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
					$picBan2 = "Maintenance-eq-LC-1805-pg-48.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Maintenance-eq-LC-1805-pg-56.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Maintenance-eq-LC-1805-pg-48.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Maintenance-eq-LC-1805-pg-48.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Maintenance-eq-LC-1805-pg-56.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Maintenance-eq-LC-1802-pg-20.jpg";
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
					$picBan2 = "Tools-parts-LC-1805-pg-40.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Tools-parts-LC-1805-pg-26.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Tools-parts-LC-1805-pg-40.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Tools-parts-LC-1805-pg-40.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Tools-parts-LC-1805-pg-26.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Tools-parts-LC-1805-pg-28.jpg";
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
					$picBan2 = "Business-LC-BG-pg-7.jpg";
					$picBanLink2 = "https://landscapearchitect.com/landscape-design/progressive-commercial-insurance/12636";
					$picBan3 = "Business-LC-BG-pg-10.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/the-plantium-company-inc/44159";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Business-LC-BG-pg-7.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/progressive-commercial-insurance/12636";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Business-LC-BG-pg-7.jpg";
					$picBanLink1 = "https://landscapearchitect.com/landscape-design/progressive-commercial-insurance/12636";
					$picBan2 = "Business-LC-BG-pg-10.jpg";
					$picBanLink2 = "https://landscapearchitect.com/landscape-design/the-plantium-company-inc/44159";
					$picBan3 = "Business-LC-BG-pg-8.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/online-designscapes/22924";					

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
					$picBan2 = "Erosion-Control-LA-1801-pg-53.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Erosion-Control-LA-1805pg-248.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Erosion-Control-LA-1805pg-248.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Erosion-Control-LA-1805pg-248.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Erosion-Control-LA-1801-pg-53.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Erosion-Control-LA-1801-pg-56.jpg";
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
					$picBan2 = "Plant-Assessories-LC-1805-pg-152.jpg";
					$picBanLink2 = "#";
					$picBan3 = "Plant-Assessories-LC-1805-pg-154-bottom.jpg";
					$picBanLink3 = "#";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "Plant-Assessories-LC-1805-pg-152.jpg";
					$picBanLink3 = "#";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "Plant-Assessories-LC-1805-pg-152.jpg";
					$picBanLink1 = "#";
					$picBan2 = "Plant-Assessories-LC-1805-pg-154-bottom.jpg";
					$picBanLink2 = "#";
					$picBan3 = "PlantAccessories1.jpg";
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
					$picBan2 = "T3623LB1808.jpg";
					$picBanLink2 = "https://landscapearchitect.com/landscape-design/the-toro-company/8549";
					$picBan3 = "I2106LB1808.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/irritrol/19002";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "T3623LB1808.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/the-toro-company/8549";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "T3623LB1808.jpg";
					$picBanLink1 = "https://landscapearchitect.com/landscape-design/the-toro-company/8549";
					$picBan2 = "I2106LB1808.jpg";
					$picBanLink2 = "https://landscapearchitect.com/landscape-design/irritrol/19002";
					$picBan3 = "R2954LB1808.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/reef-industries-inc/11463";					

			}
		
		
	} elseif ($banName == 1139) {
		
		$sql899 = "SELECT * FROM banner_ups WHERE product = '1139' AND ROS = 'lad'";

	 	$result899 = $conn->query($sql899);
		
		$rowcount899=mysqli_num_rows($result899);
		
		
					if (empty($rowcount899)) {
						$rowcount899 = 4;
					}			
		
		
			if ($rowcount899 == 1){

				while($row = mysqli_fetch_array($result899)) {
				
					$picBan1 = $row['picture'];
					$picBanLink1 = $row['web'];
					$picBan2 = "T3623LB1808.jpg";
					$picBanLink2 = "https://landscapearchitect.com/landscape-design/the-toro-company/8549";
					$picBan3 = "I2106LB1808.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/irritrol/19002";					

				}
				
			} elseif ($rowcount899 == 2){
				
					$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}
				
					$picBan3 = "T3623LB1808.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/the-toro-company/8549";				
				
			} elseif ($rowcount899 == 3){
				
						$i = 1;
					
				while($row = mysqli_fetch_array($result899)) {
					
					
					${"picBan$i"} = $row['picture'];
					${"picBanLink$i"} = $row['web'];
					
					$i++;
				
				}	
				
			} elseif ($rowcount899 == 4) {
				
					$picBan1 = "T3623LB1808.jpg";
					$picBanLink1 = "https://landscapearchitect.com/landscape-design/the-toro-company/8549";
					$picBan2 = "I2106LB1808.jpg";
					$picBanLink2 = "https://landscapearchitect.com/landscape-design/irritrol/19002";
					$picBan3 = "R2954LB1808.jpg";
					$picBanLink3 = "https://landscapearchitect.com/landscape-design/reef-industries-inc/11463";					

			}
		
		
	}


?>

