

<?

   session_start();

  

//   include("passconfig.php");
    include '../includes/connect4.inc';

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
      $mycompanyname = $_POST['company_name'];
      $myemail = $_POST['userEmail'];
      $myTitle = $_POST['title'];
      $myMessage = $_POST['message'];
      $myProject = $_POST['project'];
      $name = $myfirstname . " " . $mylastname;
      
      //vendor information
      $vendorName = $_POST['vendor'];
      $vendorEmail = $_POST['vendorEmail'];
      $vendorId = $_POST['vendor_Id'];
    
      $internalFromEmail = 'auto-send@landscapearchitect.com';



       //if user exsists
       if ($count0 > 0) {

          // Attempt insert query execution to contact_message table
          $sql = "INSERT INTO contact_message (user_id, first_name, last_name, company_name, email, title, project_name, co_company_name, co_company_id, message)
                      VALUES ('$personId', '$myfirstname', '$mylastname', '$mycompanyname', '$myemail', '$myTitle', '$myProject', '$vendorName', '$vendorId', ' $myMessage');";


          if(mysqli_query($conn, $sql)){
          } else{
            $data = ['success' => false, 'error' => 'database error', 'lastName' => $mylastname, 'email' => $myemail];

            header('Content-type: application/json');
            echo json_encode($data);
            exit();
          }


          // Close connection
          //mysqli_close($conn);           
      
         
       } else {
         
           // Attempt insert query execution
            $sql = "INSERT INTO subscribe (first_name, last_name, comp_name, email, biz_title, status)
                    VALUES ('$myfirstname', '$mylastname', '$mycompanyname', '$myemail', '$myTitle', '0');";
         
            if(mysqli_query($conn, $sql)){
              
                $sql2 = "SELECT * FROM subscribe where last_name = '" . $mylastname . "' and email = '" . $myemail . "'";
                $result = $conn->query($sql);

                while($row = mysqli_fetch_array($result)) {
                  $personId = $row['id'];  
                }
                
                $count = mysqli_num_rows($result);
              
                if($count > 0){
                  
                  $sql3 = "INSERT INTO contact_message (user_id, first_name, last_name, company_name, email, title, project_name, co_company_name, co_company_id, message)
                    VALUES ('$personId', '$myfirstname', '$mylastname', '$mycompanyname', '$myemail', '$myTitle', '$myProject', '$vendorName', '$vendorId', ' $myMessage');";
         
                  if(mysqli_query($conn, $sql3)){
                  } else {
                    $data = ['success' => false, 'error' => 'database error', 'lastName' => $mylastname, 'email' => $myemail];

                    header('Content-type: application/json');
                    echo json_encode($data);
                    exit();
                  }
                  
                } else {
                  $data = ['success' => false, 'error' => 'database error', 'lastName' => $mylastname, 'email' => $myemail];

                  header('Content-type: application/json');
                  echo json_encode($data);
                  exit();
                } // End if/else count
                
              
            } else {
              $data = ['success' => false, 'error' => 'database error', 'lastName' => $mylastname, 'email' => $myemail];

              header('Content-type: application/json');
              echo json_encode($data);
              exit();
            } // End if/else subscribe insert
          
      }



         
        // email to Us
        $to = 'jshort@landscapearchitect.com';
        $subject = 'Lead From LADetails for ' . $vendorName;
        $msg = "$name is requesting the following information from $vendorName: \n\n" .
        "Name: $name \n" .
        "Company Name: $mycompanyname \n" .
        "Email: $myemail \n".
        "Title: $myTitle \n".
        "Project Name: $myProject \n".
        "Message: $myMessage \n\n".
        "Company Contacted: $vendorName \n".
        "Company Contacted Id: $vendorId \n";

        mail ($to, $subject, $msg, 'From:' . $internalFromEmail); 



        // email to Us
      	$to = 'all.sales@landscapearchitect.com';
      	$subject = 'Lead From LADetails for ' . $vendorName;
      	$msg = "$name is requesting the following information from $vendorName: \n\n" .
      	"Name: $name \n" .
      	"Company Name: $mycompanyname \n" .
      	"Email: $myemail \n".
      	"Title: $myTitle \n".
      	"Project Name: $myProject \n".
      	"Message: $myMessage \n\n".
      	"Company Contacted: $vendorName \n".
      	"Company Contacted Id: $vendorId \n";
      	
        mail ($to, $subject, $msg, 'From:' . $internalFromEmail); 



         
         
         

          // Mail to Vendor Start
          $to = $vendorEmail;

          $subject = 'Lead From LADetails for ' . $vendorName;

          $headers = "From: all.sales@landscapearchitect.com\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

          $message = '<html><body>';

          $message .= '<center><img src="https://landscapearchitect.com/LandscapeProducts/images/basic/logo.jpg" width="450"></center><br><br>';
          $message .= '<center><strong><span style="font-size:22px">Subscriber ' . $name . '</span></center><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Is requesting information.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">For:  ' . $myProject . '.</span></center><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Message:  ' . $myMessage . '.</span></center><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: bold"></span>Contact Information:</center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Name:  ' . $name . '.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Company Name:  ' . $mycompanyname . '.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Title:  ' . $myTitle . '.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Email:  ' . $myemail . '.</span></center>';

          $message .= '</body></html>';

          mail($to, $subject, $message, $headers);

          // Mail to Vendor End




          // Mail to User Start
          $to = $myemail;

          $subject = 'Request has been sent to' . $vendorName;

          $headers = "From: all.sales@landscapearchitect.com\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

          $message = '<html><body>';

          $message .= '<center><img src="https://landscapearchitect.com/LandscapeProducts/images/basic/logo.jpg" width="450"></center><br><br>';
          $message .= '<center><strong><span style="font-size:22px">Subscriber ' . $name . '</span></center><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Your request has been sent.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">For:  ' . $myProject . '.</span></center><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Message:  ' . $myMessage . '.</span></center><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: bold"></span>Contact Information:</center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Name:  ' . $name . '.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Company Name:  ' . $mycompanyname . '.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Title:  ' . $myTitle . '.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Email:  ' . $myemail . '.</span></center><br /><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Company Contact Information:.</span></center>';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Company Name:  ' . $vendorName . '.</span></center><br />';
          $message .= '<center><strong><span style="font-size:16px; font-weight: 400">Company Email:  ' . $vendorEmail . '.</span></center><br />';

          $message .= '</body></html>';

          mail($to, $subject, $message, $headers);


          // Mail to User End		   



           $data = ['success' => true, 'vendorName' => $vendorName];

           header('Content-type: application/json');
           echo json_encode($data);
         
    } ?>






