<?php session_start() ?>


<?

  include("passconfig.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['password'];
      $myPage = $_POST['page'];
      $myNumber = $_POST['vNum'];
      $myProduct = $_POST['pNum'];
  
	   
	  //$myPage = '/LandscapeProducts/product-details-js.php?number=6883&prodNum=7923'; 
	   
	   
	   // echo $myusername . '<br>';
	   // echo $mypassword . '<br>';
	   // echo $myPage . '<br>';
	   
	   
      
	$sql = "SELECT * FROM subscribe where pass = '" . $mypassword . "'";
//     	$sql = "SELECT * FROM subscribe where email = '" . $myusername . "' and pass = '" . $mypassword . "'";
	$result = $conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];	   
      
      $count = mysqli_num_rows($result);
	   
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

        $_SESSION['user'] = $row['id'];

        $_SESSION['name'] = $row['first_name'];

        $_SESSION['lname'] = $row['last_name'];
        
        $_SESSION['loggedIn'] = true;
                
        


        $uname = $row['first_name'];

        $unamel = $row['last_name'];

        $ucode = $row['id'];


        $data = ['login' => true, 'name' => $row['first_name'], 'ucode' => $row['id'], 'lname' => $row['last_name']];

        header('Content-type: application/json');
        echo json_encode($data);


		  
      } else {
		  
        
				  $data = ['login' => false];

        header('Content-type: application/json');
        echo json_encode($data);
		  
      }
   }




?>




