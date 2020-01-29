

<?

   session_start();



//   include("passconfig.php");
//
//    $mylastname = $_POST['lname'];
//    $myemail = $_POST['userEmail'];
//
//    $sql = "SELECT * FROM subscribe WHERE last_name ='" . $mylastname . "' AND email ='" . $myemail . "'";
//    $result = $conn->query($sql);
//
//    while($row = mysqli_fetch_array($result)) {
//        $personId = $row['id'];  
//      }
//  
  


  if($_SERVER["REQUEST_METHOD"] == "POST") {


      //user information
      $myfirstname = $_POST['fname'];
      $mylastname = $_POST['lname'];
      $myphone = $_POST['contactPhone'];
      $myemail = $_POST['userEmail'];
      $myMessage = $_POST['contactMessage'];
      $name = $myfirstname . " " . $mylastname;
      
    
      $internalFromEmail = 'auto-reply@landscapearchitect.com';

    
//      $sql = "SELECT * FROM subscribe where last_name = '" . $mylastname . "' and email = '" . $myemail . "'";
//      $result = $conn->query($sql);
//
//      $count = mysqli_num_rows($result);
//
//    
//    
//       if ($count > 0) {
         
         

//          // Exists - Write to message table
//          $link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");
//
//          // Check connection
//          if($link === false){
//            die("ERROR: Could not connect. " . mysqli_connect_error());
//          }
//
//          // Attempt insert query execution to contact_message table
//          $sql = "INSERT INTO contact_message (user_id, first_name, last_name, company_name, email, title, project_name, co_company_name, co_company_id, message)
//                      VALUES ('$personId', '$myfirstname', '$mylastname', '$mycompanyname', '$myemail', '$myTitle', '$myProject', '$vendorName', '$vendorId', ' $myMessage');";
//
//
//          if(mysqli_query($link, $sql)){
//          } else{
//            $data = ['success' => false, 'error' => 'database error', 'lastName' => $mylastname, 'email' => $myemail];
//
//            header('Content-type: application/json');
//            echo json_encode($data);
//          }


          // Close connection
          //mysqli_close($link);           



         

          // Mail to us Start
          $to = 'dbrinkley@landscapearchitect.com';

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

          // Mail to Vendor End




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



           $data = ['success' => true, 'fname' => $myfirstname];

           header('Content-type: application/json');
           echo json_encode($data);
         
         
         
         
         
//
//        } else {
//
//
//            // Doesn't Exist - Write to message table
//            $link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");
//
//            // Check connection
//            if($link === false){
//            die("ERROR: Could not connect. " . mysqli_connect_error());
//            }
//
//
//            // Attempt insert query execution
//            $sql = "INSERT INTO subscribe (first_name, last_name, comp_name, email, biz_title)
//                    VALUES ('$myfirstname', '$mylastname', '$mycompanyname', '$myemail', '$myTitle');";
//
//            $sql2 = "INSERT INTO contact_message (user_id, first_name, last_name, company_name, email, title, project_name, co_company_name, co_company_id, message)
//                    VALUES ('$personId', '$myfirstname', '$mylastname', '$mycompanyname', '$myemail', '$myTitle', '$myProject', '$vendorName', '$vendorId', ' $myMessage');";
//
//
//            // email to Us
//            $to = 'jshort@landscapearchitect.com';
//            $subject = 'Error - Lead From LADetails for ' . $vendorName;
//            $msg = "$name is requesting the following information from $vendorName: \n\n" .
//            "Name: $name \n" .
//            "Company Name: $mycompanyname \n" .
//            "Email: $myemail \n".
//            "Title: $myTitle \n".
//            "Project Name: $myProject \n".
//            "Message: $myMessage \n\n".
//            "Company Contacted: $vendorName \n".
//            "Company Contacted Id: $vendorId \n";
//
//
//             mail ($to, $subject, $msg, 'From:' . $email); 
//
//         
//           $data = ['success' => false, 'error' => 'no associated user', 'lastName' => $mylastname, 'email' => $myemail];
//
//           header('Content-type: application/json');
//           echo json_encode($data);
//        }
//    
    
    

    } ?>






