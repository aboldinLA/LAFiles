<?php session_start() ?>


<? 
 
      $id = $_POST['id'];

      $name = $_POST['userName'];
  
  
//   $ylist_id = implode(",",$_POST['ylist']);

     $ylist_id = array();
     parse_str($_POST['ylist'], $ylist_id);
     $ylist_id = implode(",", $ylist_id['ylist']);


		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 
		// Attempt insert query execution

    $sql = "UPDATE subscribe SET ylist_id = '" . $ylist_id . "', status = '0', active = '1' WHERE id='" . $id . "'";

    mysqli_query($link, $sql);
//    
//		if(){
//			echo "&nbsp;";
//		} else{
//			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//		}

  $data = ['success' => true, 'ylist' => $ylist_id, 'id' => $id, 'name' => $name];

  header('Content-type: application/json');
  echo json_encode($data);


?>
