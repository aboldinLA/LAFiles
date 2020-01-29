
<?php



      if (isset($_POST['submit'])) {
        
        mysql_connect('localhost', 'land_patchew', '59q2GB6k$3') or die("Cannot open connection: " . mysql_error());
        mysql_select_db("land_landscap_lollive") or die("Database not found");
        
        $email=$_POST['email'];
        $query = mysql_query("SELECT * FROM subscribe WHERE email='$email'");
        $count=mysql_num_rows($query);
        
        if($count==1){
          $row = mysql_fetch_array($query);
          $your_password = $row['pass'];
          
          $data = ['success' => true];

          header('Content-type: application/json');
          echo json_encode($data);
          
          
            $name = $row['first_name'];
            $email = $row['email'];

            $to = $email;
            $subject = ' Re: LADetails Password';
            $msg = "$name \n" .
            "Thanks for your request. \n" .
            "Here is your password for LandscapeArchitect.com: \n" .
            "Password: $your_password \n".
            "   \n" .
            "When you login, please take a moment to review and update any information \n" .
            "that has changed on your Personal Member Profile. \n" .
            "   \n" .
            "We encourage you to browse the Product Information Request page and request \n" .
            "any product information you need from our vendors. In order to provide you \n" .
            "with timely service, all product information requests are processed weekly. \n" .
            "   \n" .
            "Thank you for visiting LandscapeOnline.com. \n" .
            "   \n" .
            "The largest landscape oriented database on the web!" ;


            mail ($to, $subject, $msg, 'From:' . $email);
          
          
        } else if($count == 0) {
          
           $data = ['success' => false];

          header('Content-type: application/json');
          echo json_encode($data);
          
        }

        
   

        }
                                        
?>								
