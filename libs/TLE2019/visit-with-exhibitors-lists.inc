<?

	//pre: takes a keyword as a string
	//post: echos linked exhibitor logos in the corresponding array that equals the keyword provided
	function visitWithExhibitorsList($keyword){
			

		// Get Article Info
		$servername = "localhost";
		$username = "landscap_lol";
		$password = "meow2meow";
		$dbname = "landscap_lollive";

		// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
				 die("Connection failed: " . $conn->connect_error);
		} 	

		$sql = "SELECT * FROM vshows LEFT JOIN new_vendor ON vshows.vendor_id = new_vendor.id where tsname LIKE '%TLE-LB 19%' ORDER BY company_name ASC";
		$result = $conn->query($sql);	//holds all tle exhibitors	
		


		//selects exhibitorList array based on keyword passed to function
		$exhibitorsList;
		switch($keyword) {
			case "waterConservation":
				$exhibitorsList = &$irrigationExhibitors;
				break;
			case "treeAcademy":
				$exhibitorsList = &$treeExhibitors;
				break;
			case "growersLane":
				$exhibitorsList = &$growersLaneExhibitors;
				break;
			case "nurseriesMinusGrowersLane":
				$exhibitorsList = &$nurseriesMinusGrowersLaneExhibitors;
				break;
			case "trucks":
				$exhibitorsList = &$trucks;
				break;
			case "designCenter":
				$exhibitorsList = &$designCenter;
				break;
			case "pesticide":
				$exhibitorsList = &$pesticide;
				break;
			case "lighting":
				$exhibitorsList = &$lighting;
				break;
		}
		
		
//		if($keyword == "waterConservation"){
//			$exhibitorsList = &$irrigationExhibitors;
//		} else if($keyword == "treeAcademy"){
//			$exhibitorsList = &$treeExhibitors;
//		} else if($keyword == "growersLane"){
//			$exhibitorsList = &$growersLaneExhibitors;
//		} else if($keyword == "nurseriesMinusGrowersLane"){
//			$exhibitorsList = &$nurseriesMinusGrowersLaneExhibitors;
//		} else if($keyword == "trucks"){
//			$exhibitorsList = &$trucks;
//		}

			


		// List of Irrigation Exhibitors
		$irrigationExhibitors = array(
			"Aivaka",
			"ANC Technology",
			"Antelco Corporation",
			"Bowsmith, Inc.",
			"Buckner Superior",
			"Dura Plastic Products Inc.",
			"Eagle Spec Sales Group",
			"Ewing Irrigation Products",
			"Green Product Sales",
			"Greywater Irrigation",
			"Griswold Controls",
			"HIT Products Corporation",
			"Hunter Industries",
			"Hydro-Rain",
			"Imperial Sprinkler Supply",
			"Irrometer Company, Inc.",
			"K-Rain Manufacturing",
			"Netafim USA",
			"Connor Sales Inc",
			"Rain Bird Corporation",
			"Senninger Irrigation",
			"Smith Pipe & Supply",
			"T. Christy Enterprises, Inc.",
			"Target Specialty Products",
			"The Toro Company");				

		// List of tree related Exhibitors
		$treeExhibitors = array(
			"Arborjet",
			"Gro-Power, Inc.",
			"Milfelds",
			"Monterey Bay Nursery, Inc.",
			"Century Products",
			"Mauget Company",
			"Mountain States Wholesale Nursery",
			"Rainbow Treecare Scientific Advancements",
			"Rancho Soledad Nurseries",
			"Sims Tree Health Specialists, Inc.",
			"Sunrise Nursery LLC",
			"Western Chapter ISA WCISA"
		);
		
		
		$growersLaneExhibitors = array (
			"Moon Valley Nursery - GroWest Nursery",
			"South Coast Wholesale",
			"Mountain States Wholesale Nursery",
			"Rancho Soledad Nurseries",
			"Hanson Palms",
			"Monterey Bay Nursery, Inc.",
			"Village Nurseries"
		);
		
		
		$nurseriesMinusGrowersLaneExhibitors = array(
			"DLT Growers",
			"Milfelds",
			"Sunrise Nursery LLC",
		);
		
		$trucks = array(
			"Courtesy Chevrolet San Diego",
			"Reynolds Fleet Sales"
		);
		
		$designCenter = array(
			"Asian Ceramics",
			"Irrometer Company",
			"MOD Fountain",
			"Outdoor Fire Concepts",
			"Pottery Manufacturing",
			"SWG Olive Trees"
		);
		
		$pesticide = array(
			"Agri-Turf Distributing",
			"Agriserve Pest Control",
			"Arborjet",
			"Mauget Company",
			"Pesticide Applicators Professional Association",
			"Rainbow Treecare Scientific Advancements",
			"Sims Tree Health Specialists",
			"Target Specialty Products",
			"Univar USA"
		);
		
		$lighting = array(
			"Corona Lighting",
			"Focus Industries",
			"Hunter Industries",
			"Lightcraft Outdoor Environments",
			"NewLite Specialty Products",
			"Unique Lighting"
		);

			
			
		//foreach element in exhibitorList array, checks if that element is contained in the name of a company that
		//is exhibiting and if so echos them in. checks if contained so to help with filemaker name differences.
		//echos them in order they are listed in above arrays
		$i = 1;
		foreach($exhibitorsList as $exhibitor){
			while($row = mysqli_fetch_array($result)){
				if(strpos( $row['company_name'], $exhibitor ) !== false){
					if(strpos( $exhibitor, 'Moon Valley Nursery' ) !== false){
						echo "<a href=\"https://landscapearchitect.com/products/listing.php?id=" . $row['vendor_id'] . "\" id=\"" . $keyword . "-" . $row['vendor_id'] . "-logo\" style='order:" . strval($i) . "'>
								<img src=\"/TLE-LB/images/2019/moon-valley-gold-sponsor-logo.jpg\" border=\"0\" alt=\"" . $row['company_name'] . "\" >
							</a>";
					} else if(strpos( $exhibitor, 'South Coast Wholesale' ) !== false){
						echo "<a href=\"https://landscapearchitect.com/products/listing.php?id=" . $row['vendor_id'] . "\" id=\"" . $keyword . "-" . $row['vendor_id'] . "-logo\" style='order:" . strval($i) . "'>
								<img src=\"/TLE-LB/images/2019/south-coast-wholesale-gold-sponsor-logo.jpg\" border=\"0\" alt=\"" . $row['company_name'] . "\" >
							</a>";
					} else {
						echo "<a href=\"https://landscapearchitect.com/products/listing.php?id=" . $row['vendor_id'] . "\" id=\"" . $keyword . "-" . $row['vendor_id'] . "-logo\" style='order:" . strval($i) . "'>
								<img src=\"/products/images/" . $row['logo'] . "\" border=\"0\" alt=\"" . $row['company_name'] . "\" >
							</a>";
					}
				}
			}
			mysqli_data_seek($result, 0);
			$i++;
		}	
	} //END visitWithExhibitorsList
			
			
			


?>