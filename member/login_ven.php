<?php 
     //include '../../includes/connect4.inc';
     include '../modules/db.php';
    
     $passwordSub = $_POST['password'];
        
		
        
		$sql ="SELECT * FROM new_vendor WHERE pass = '" . $passwordSub . "' ";
		$result = $conn->query($sql);									
								

    $count = mysqli_num_rows($result);


    if($count > 0){
      
      while($row = mysqli_fetch_array($result)) {
        $vendorId = $row['id'];
      }

      $data = ['login' => true, 'vendorId' => $vendorId];

      header('Content-type: application/json');
      echo json_encode($data); 
				
      
    } else {
      
      $data = ['login' => false];

      header('Content-type: application/json');
      echo json_encode($data); 
      
    }




?>