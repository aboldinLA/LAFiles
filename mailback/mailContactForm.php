

<?

   session_start();



//   include("passconfig.php");
    include '../../includes/connect4.inc';

    $mylastname = $_POST['lname'];
    $myemail = $_POST['userEmail'];

    $sql0 = "SELECT * FROM subscribe WHERE last_name ='" . $mylastname . "' AND email ='" . $myemail . "'";
    $result0 = $conn->query($sql0);

    while($row = mysqli_fetch_array($result0)) {
        $personId = $row['id']; 
      }
    $count0 = mysqli_num_rows($result0);



  if($_SERVER["REQUEST_METHOD"] == "POST") {


      //user information
      $myfirstname = $_POST['fname'];
      $mylastname = $_POST['lname'];
      $myphone = $_POST['contactPhone'];
      $myemail = $_POST['userEmail'];
      $myMessage = $_POST['contactMessage'];
      $name = $myfirstname . " " . $mylastname;
      
    
      $internalFromEmail = 'auto-reply@landscapearchitect.com';

    
    
       //if user exsists
       if ($count0 > 0) {

          // Attempt insert query execution to contact_message table
          $sql = "INSERT INTO contact_message (user_id, first_name, last_name, email, message)
                      VALUES ('$personId', '$myfirstname', '$mylastname', '$myemail', ' $myMessage');";


          if(!mysqli_query($conn, $sql)){
            
            $data = ['success' => false, 'error' => 'database error', 'response' => 'error1'];

            header('Content-type: application/json');
            echo json_encode($data);
            
            mysqli_close($conn);
            exit();
            
          }
           
      
         
       } else {
         
           // Attempt insert query execution
            $sql = "INSERT INTO subscribe (first_name, last_name, phone, email, status)
                    VALUES ('$myfirstname', '$mylastname', '$myphone', '$myemail', '0');";
         
            if(!mysqli_query($conn, $sql)){
              
                $data = ['success' => false, 'error' => 'database error', 'response' => 'error2'];

                header('Content-type: application/json');
                echo json_encode($data);
              
            } // End if/else subscribe insert
                  
         
          $sql2 = "SELECT * FROM subscribe where last_name = '" . $mylastname . "' and email = '" . $myemail . "'";
//            $sql2 = "SELECT mysqli_insert_id(" . $conn . ")";
            $result2 = $conn->query($sql2);

            while($row = mysqli_fetch_array($result2)) {
              $personId = $row['id'];  
            }

            if(mysqli_num_rows($result2) > 0) {
              
                $sql3 = "INSERT INTO contact_message (user_id, first_name, last_name, email, message)
                        VALUES ('$personId', '$myfirstname', '$mylastname', '$myemail', ' $myMessage');";

                if(!mysqli_query($conn, $sql3)){              
                  $data = ['success' => false, 'error' => 'database error', 'response' => 'error3'];

                  header('Content-type: application/json');
                  echo json_encode($data);
                }
              
            } else {
              
              $data = ['success' => false, 'error' => 'database error', 'response' => 'error4'];

                header('Content-type: application/json');
                echo json_encode($data);
              
            }
         
          
      }
    
    

         

          // Mail to us Start
          $to = 'all.sales@landscapearchitect.com';

          $subject = 'Contact Us Form Submitted from: ' . $name;

          $headers = "From:" . $myemail . "\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

          $message = '<html><body>';

          $message .= '<img src="https://landscapearchitect.com/LandscapeProducts/images/basic/logo.jpg" width="450"><br><br>';
          $message .= '<strong><span style="font-size:22px">' . $name . '</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: 400">Submitted the Contact Us form.</span><br><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Message: </span></strong><span style="font-size:16px; font-weight: 400">' . $myMessage . '.</span><br /><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Contact Information:</span></strong><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Name: </span></strong><span style="font-size:16px; font-weight: 400">' . $name . '.</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Phone: </span></strong><span style="font-size:16px; font-weight: 400">' . $myphone . '.</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Email: </span></strong><span style="font-size:16px; font-weight: 400">' . $myemail . '.</span><br>';

          $message .= '</body></html>';

          mail($to, $subject, $message, $headers);

          // Mail to us End
    
    
          // Mail to us Start
          $to = 'jmiranda@landscapearchitect.com';

          $subject = 'Contact Us Form Submitted from: ' . $name;

          $headers = "From:" . $myemail . "\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

          $message = '<html><body>';

          $message .= '<img src="https://landscapearchitect.com/LandscapeProducts/images/basic/logo.jpg" width="450"><br><br>';
          $message .= '<strong><span style="font-size:22px">' . $name . '</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: 400">Submitted the Contact Us form.</span><br><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Message: </span></strong><span style="font-size:16px; font-weight: 400">' . $myMessage . '.</span><br /><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Contact Information:</span></strong><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Name: </span></strong><span style="font-size:16px; font-weight: 400">' . $name . '.</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Phone: </span></strong><span style="font-size:16px; font-weight: 400">' . $myphone . '.</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Email: </span></strong><span style="font-size:16px; font-weight: 400">' . $myemail . '.</span><br>';

          $message .= '</body></html>';

          mail($to, $subject, $message, $headers);

          // Mail to Us End




          // Mail to User Start
          $to = $myemail;

          $subject = 'Auto-Reply: Your message has been seen to LandscapeArchitect.com';

          $headers = "From: " . $internalFromEmail . "\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

          $message = '<html><body>';

          $message .= '<a href="https://landscapearchitect.com"><img src="https://landscapearchitect.com/LandscapeProducts/images/basic/logo.jpg" width="450"></a><br><br>';
          $message .= '<strong><span style="font-size:20px">Thank You ' . $myfirstname . '</span><br /><br />';
          $message .= '<strong><span style="font-size:16px; font-weight: 400">Your message has been sent and we will get back to you as soon as possible.<br>If you need to contact us sooner, you can reach us at 714-979-5276.</span><br><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Information Sent:</span></strong><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Name: </span></strong><span style="font-size:16px; font-weight: 400">' . $name . '.</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Phone: </span></strong><span style="font-size:16px; font-weight: 400">' . $myphone . '.</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Email: </span></strong><span style="font-size:16px; font-weight: 400">' . $myemail . '.</span><br>';
          $message .= '<strong><span style="font-size:16px; font-weight: bold">Message: </span></strong><span style="font-size:16px; font-weight: 400">' . $myMessage . '.</span><br /><br />';


          $message .= '</body></html>';

          mail($to, $subject, $message, $headers);


          // Mail to User End		   



           mysqli_close($conn);
           $data = ['success' => true, 'fname' => $myfirstname];

           header('Content-type: application/json');
           echo json_encode($data);
         
    } else {
      mysqli_close($conn);
      $data = ['success' => false, 'error' => 'database error'];

      header('Content-type: application/json');
      echo json_encode($data);
      exit();
    } ?>






