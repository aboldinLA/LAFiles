
<?php



    if($_SERVER["REQUEST_METHOD"] == "POST") {
                
           
        include("passconfig.php");
            
        
        $email = $_POST['email'];

      
        $sql = "SELECT * FROM subscribe where email = '" . $email . "'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
      
      
        if($count == 1){
          
            $your_password = $row['pass'];          
            $name = $row['first_name'];
            $email = $row['email'];

            $to = $email;
            $subject = ' Re: LADetails Password';
            $msg = $name . "\n" .
            "You have successfully completed the New Subscription Request Application. \n" .
            "Here is your password for LandscapeArchitect.com: \n" .
            "Password: " . $your_password . "\n".
            "   \n" .
            "We encourage you to browse the Product Information Request page and request \n" .
            "any product information you need from our vendors. In order to provide you \n" .
            "with timely service, all product information requests are processed weekly. \n" .
            "   \n" .
            "Thank you for visiting LandscapeArchitect.com. \n" .
            "   \n" .
            "The largest landscape oriented database on the web!" ;


            mail ($to, $subject, $msg, 'From:' . $email);

             $data = ['success' => true];

             header('Content-type: application/json');
             echo json_encode($data);

          } else if($count == 0) {

             $data = ['success' => false];

             header('Content-type: application/json');
             echo json_encode($data);

          } else {
            
            $data = ['success' => 'error'];
            header('Content-type: application/json');
             echo json_encode($data);
            
          }

    }
                                        
?>								
