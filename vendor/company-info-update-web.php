

<?

  $vendNum2 = $_POST['venNum'];
  $previousEmail = $_POST['previousEmail'];


  $company_name = $_POST['company_name'];
  $company_name_changed = $_POST['changedInputs'][0];

  $address = $_POST['address'];
  $address_changed = $_POST['changedInputs'][1];

  $city = $_POST['city'];
  $city_changed = $_POST['changedInputs'][2];

  $state = $_POST['state'];
  $state_changed = $_POST['changedInputs'][3];

  $zip = $_POST['zip'];
  $zip_changed = $_POST['changedInputs'][4];

  $phone = $_POST['phone'];
  $phone_changed = $_POST['changedInputs'][5];

  $fax = $_POST['fax'];
  $fax_changed = $_POST['changedInputs'][6];

  $email = $_POST['email'];
  $email_changed = $_POST['changedInputs'][7];

  $contact_us = $_POST['contact_us'];
  $contact_us_changed = $_POST['changedInputs'][8];

  // Name Translation

// Name Translation


$profile = $_POST['profile'];
$profile_changed = $_POST['changedInputs'][9];
$transString2 = str_replace(["“","”",'"',"’","'","®","™","–","•","°"],["&#34;","&#34;","&#34;","&#39;","&#39;","&reg;","&trade;","-","&bull;","&deg;"],"$profile");


 

  $link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  // Attempt insert query execution
  $sql = "UPDATE new_vendor SET company_name = '" . $company_name . "', address = '" . $address . "', city = '" . $city . "', state = '" . $state . "', zip = '" . $zip . "', phone = '" . $phone . "', fax = '" . $fax . "', email = '" . $email . "', contact_us = '" . $contact_us . "', profile = '" . $transString2 . "'  WHERE id = '" . $vendNum2 . "'";

  if(!mysqli_query($link, $sql)){

    $data = ['success' => false, 'vendorName' => $company_name];

    header('Content-type: application/json');
    echo json_encode($data);

  } else {
    
    
  $changedContentString = '';
    
  if($company_name_changed == "true"){
    $changedContentString .= "<strong>Company Name:</strong> " . $company_name . "<br>"; 
  }
  
  if($address_changed == "true"){
    $changedContentString .= "<strong>Address:</strong> " . $address . "<br>"; 
  }
   
  if($city_changed == "true"){
    $changedContentString .= "<strong>City:</strong> " . $city . "<br>"; 
  }

  if($state_changed == "true"){
    $changedContentString .= "<strong>State:</strong> " . $state . "<br>"; 
  }

  if($zip_changed == "true"){
    $changedContentString .= "<strong>Zip:</strong> " . $zip . "<br>"; 
  }
    
  if($phone_changed == "true"){
    $changedContentString .= "<strong>Phone:</strong> " . $phone . "<br>"; 
  }

  if($fax_changed == "true"){
    $changedContentString .= "<strong>Fax:</strong> " . $fax . "<br>"; 
  }
    
  if($email_changed == "true"){
    $changedContentString .= "<strong>Email:</strong> " . $email . "<br>"; 
  }    
    
  if($contact_us_changed == "true"){
    $changedContentString .= "<strong>Contact Us:</strong> " . $contact_us . "<br>"; 
  }
    
  if($profile_changed == "true"){
    $changedContentString .= "<strong>Profile:</strong> " . $profile . "<br>"; 
  }  
    
    
  $internalFromEmail = 'auto-send@landscapearchitect.com';


  // email to Us
  $to = 'dbrinkley@landscapearchitect.com';
  $subject = $company_name . ' made an edit to their Vendor Profile';
  $headers = "From: $internalFromEmail\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $msg = '<html><body>'.
  "$company_name made an edit to their Vendor Profile:<br><br>" .
  "Company Edited: $company_name <br>".
  "Company Edited Id: $vendNum2 <br><br>".
  "Content Edited (Changes Below): <br> $changedContentString <br>".
  "</body></html>";

  mail ($to, $subject, $msg, $headers); 

  

  // email to Us
  $to = 'alinares@landscapearchitect.com';
  $subject = $company_name . ' made an edit to their Vendor Profile';
  $headers = "From: $internalFromEmail\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $msg = '<html><body>'.
  "$company_name made an edit to their Vendor Profile:<br><br>" .
  "Company Edited: $company_name <br>".
  "Company Edited Id: $vendNum2 <br><br>".
  "Content Edited (Changes Below): <br> $changedContentString <br>".
  "</body></html>";

  mail ($to, $subject, $msg, $headers); 


    
  // email to Us
  $to = 'jvictor@landscapearchitect.com';
  $subject = $company_name . ' made an edit to their Vendor Profile';
  $headers = "From: $internalFromEmail\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $msg = '<html><body>'.
  "$company_name made an edit to their Vendor Profile:<br><br>" .
  "Company Edited: $company_name <br>".
  "Company Edited Id: $vendNum2 <br><br>".
  "Content Edited (Changes Below): <br> $changedContentString <br>".
  "</body></html>";

  mail ($to, $subject, $msg, $headers); 

    
    
  // email to Us
  $to = 'jmiranda@landscapearchitect.com';
  $subject = $company_name . ' made an edit to their Vendor Profile';
  $headers = "From: $internalFromEmail\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $msg = '<html><body>'.
  "$company_name made an edit to their Vendor Profile:<br><br>" .
  "Company Edited: $company_name <br>".
  "Company Edited Id: $vendNum2 <br><br>".
  "Content Edited (Changes Below): <br> $changedContentString <br>".
  "</body></html>";

  mail ($to, $subject, $msg, $headers); 


    
  // email to Us
  $to = 'all.sales@landscapearchitect.com';
  $subject = $company_name . ' made an edit to their Vendor Profile';
  $headers = "From: $internalFromEmail\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $msg = '<html><body>'.
  "$company_name made an edit to their Vendor Profile:<br><br>" .
  "Company Edited: $company_name <br>".
  "Company Edited Id: $vendNum2 <br><br>".
  "Content Edited (Changes Below): <br> $changedContentString <br>".
  "</body></html>";

  mail ($to, $subject, $msg, $headers); 



    
    // Mail to Vendor Start
    $to = $previousEmail;

    $subject = 'LandscapeArchitect.com Vendor Profile for ' . $company_name . ' has been edited.';

    $headers = "From: $internalFromEmail\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';

    $message .= '<img src="https://landscapearchitect.com/LandscapeProducts/images/basic/logo.jpg" width="350"><br><br><br>';
    $message .= '<strong><span style="font-size:18px; font-weight: 400">Your vendor profile on LandscapeArchitect.com has been edited.</span><br><br>';
    $message .= '<strong><span style="font-size:16px; font-weight: 400">If you or someone you authorized made these edits, please disregard this email.</span><br><br>';
    $message .= '<strong><span style="font-size:16px; font-weight: 400">If you do not recognize this request or authorize changes to your vendor profile, <br>please contact support immediately at 714-979-5276.</span><br><br>';

    $message .= '</body></html>';

    mail($to, $subject, $message, $headers);

    // Mail to Vendor End
    



   $data = ['success' => true];

   header('Content-type: application/json');
   echo json_encode($data);
    
  }

												
?>  	  
	  