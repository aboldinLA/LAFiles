

<?

   session_start();

	   include("passconfig.php");
									

	
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['password'];
	  $myPage = $_POST['page']; 
	   
	   // echo $myusername . '<br>';
	   // echo $mypassword . '<br>';
	   // echo $myPage . '<br>';
	   
	   
      
	$sql = "SELECT * FROM subscribe where email = '" . $myusername . "' and pass = '" . $mypassword . "'";
	$result = $conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];	   
      
      $count = mysqli_num_rows($result);
	   
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

		  $_SESSION['user'] = $row['id'];
		  
		  $_SESSION['name'] = $row['first_name'];
		  
		  $_SESSION['lname'] = $row['last_name'];
		  
		  
		  $uname = $row['first_name'];
		  
		  $unamel = $row['last_name'];
		  
		  $ucode = $row['id'];
		  
         
				echo "You're being logged in.";
				sleep(2);
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.location.href='http://www.landscapearchitect.com" . $myPage . "&uname2=" . $uname . "&uname3=" . $unamel . "';
					 </SCRIPT>");


		  
      }else {
		  
				echo "You need to register.";
				sleep(2);
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.location.href='https://landscapearchitect.com/subscriptions/subscribe.php?action=new';
					 </SCRIPT>");		  
		  
		  
      }
   }




?>




