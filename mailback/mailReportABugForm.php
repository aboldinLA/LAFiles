

<?

   session_start();



    if($_SERVER["REQUEST_METHOD"] == "POST") {

      //user information
      $myname = $_POST['name'];
      $myemail = $_POST['userEmail'];
      $myMessage = $_POST['problemMessage'];



      // Mail to us Start
      $to = 'gschmok@landscapearchitect.com';

      $subject = 'Website Problem Submitted from: ' . $myname;

      $headers = "From:" . $myemail . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      $message = '<html><body>';

      $message .= '<span style="font-size:16px"><strong>' . $myname . '</strong> reported a problem on the website.</span><br><br>';
      $message .= '<strong><span style="font-size:16px; font-weight: bold">Message: </span></strong><br><span style="font-size:16px; font-weight: 400">' . $myMessage . '.</span><br /><br>';

      $message .= '</body></html>';

      mail($to, $subject, $message, $headers);

      // Mail to Vendor End


      $data = ['success' => true, 'name' => $myname];

      header('Content-type: application/json');
      echo json_encode($data);

  } 



?>






