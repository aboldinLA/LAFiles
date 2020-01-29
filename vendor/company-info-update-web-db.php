

<?

  $vendNum2 = $_POST['venNum'];


  $company_name = $_POST['company_name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $email = $_POST['email'];
  $contact_us = $_POST['contact_us'];

  // Name Translation


  $profile = $_POST['profile'];
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
    



$internalFromEmail = 'auto-send@landscapearchitect.com';


// email to Us
$to = 'dbrinkley@landscapearchitect.com';
$subject = $company_name . ' made an edit to their Vendor Profile';
$msg = "$company_name made an edit to their Vendor Profile: \n\n" .
"Company Edited: $company_name \n".
"Company Edited Id: $vendNum2 \n\n";
"Content Edited: $vendNum2 \n";

mail ($to, $subject, $msg, 'From:' . $internalFromEmail); 


//                          // email to Us
//                          $to = 'alinares@landscapearchitect.com';
//                          $subject = $company_name . ' made an edit to their Vendor Profile';
//                          $msg = "$company_name made an edit to their Vendor Profile: \n\n" .
//                          "Company Edited: $company_name \n".
//                          "Company Edited Id: $vendorId \n";
//                          "Content Edited: $vendNum2 \n";
//
//                          mail ($to, $subject, $msg, 'From:' . $internalFromEmail); 
//    
//
//                          // email to Us
//                          $to = 'jvictor@landscapearchitect.com';
//                          $subject = $company_name . ' made an edit to their Vendor Profile';
//                          $msg = "$company_name made an edit to their Vendor Profile: \n\n" .
//                          "Company Edited: $company_name \n".
//                          "Company Edited Id: $vendorId \n";
//                          "Content Edited: $vendNum2 \n";
//
//                          mail ($to, $subject, $msg, 'From:' . $internalFromEmail); 
//    
//    
//                          // email to Us
//                          $to = 'jmiranda@landscapearchitect.com';
//                          $subject = $company_name . ' made an edit to their Vendor Profile';
//                          $msg = "$company_name made an edit to their Vendor Profile: \n\n" .
//                          "Company Edited: $company_name \n".
//                          "Company Edited Id: $vendorId \n";
//                          "Content Edited: $vendNum2 \n";
//
//                          mail ($to, $subject, $msg, 'From:' . $internalFromEmail); 
//    
//    
//                          // email to Us
//                          $to = 'all.sales@landscapearchitect.com';
//                          $subject = $company_name . ' made an edit to their Vendor Profile';
//                          $msg = "$company_name made an edit to their Vendor Profile: \n\n" .
//                          "Company Edited: $company_name \n".
//                          "Company Edited Id: $vendorId \n";
//                          "Content Edited: $vendNum2 \n";
//
//                          mail ($to, $subject, $msg, 'From:' . $internalFromEmail); 






   $data = ['success' => true, 'vendorName' => $company_name];

   header('Content-type: application/json');
   echo json_encode($data);
    
  }

												
?>  	  
	  