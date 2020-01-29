<?php
if( true ):
	ob_start();
		

		echo "<div class='sideBannersInfinite' style='position: relative; top:" . $_POST['topPosition'] . "px; overflow: hidden;'>";
		
		include '../../includes/connect4.inc'; 
	
			$sql21 = "SELECT * FROM banner_ups WHERE ROS='yes' AND id != '$adNum' ORDER BY RAND() LIMIT 6";
			$result21 = $conn->query($sql21);									
			
			while($row = mysqli_fetch_array($result21)) {
				
				echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div>';

			} 
								
			echo "</div><div class='rightBannerContainers'></div>";

	$output = ob_get_contents();
	ob_get_clean();
	sleep(1);
	echo $output;
	die;
else:
	return  '';
	die;
endif;