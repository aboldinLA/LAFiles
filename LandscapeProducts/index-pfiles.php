<?

include("connect3.inc");


		$sql899 = "SELECT * FROM vendor_product WHERE `cadd` LIKE '%dwg%' OR `cadd_2` LIKE '%dwf%' OR `cadd_3` LIKE '%dxf%' OR `pdff` LIKE '%pdf%' OR `skup` LIKE '%skp%' OR `vwxx` LIKE '%vwx%' OR `mediap` LIKE '%pdf%' ORDER BY id DESC";

	 	$result899 = $conn->query($sql899);
		

					
				while($row = mysqli_fetch_array($result899)) {
                    
                    echo $row['id'] . "&nbsp;&nbsp;<img width='250px' src='https://landscapearchitect.com/products/images/" . $row['photo'] . "'>" . "&nbsp;&nbsp;<img width='250px' src='https://landscapearchitect.com/LandscapeProducts/dfiles/images/" . $row['id'] . "-p.jpg' border='1'>&nbsp;&nbsp;" . $row['vendor_id'] . "<br><hr><br>";


				}

			


?>