<?


$sub = $_GET['subject'];
$fileType = $_GET['file'];
$ucode = $_GET['ucode'];

// Email Start
// Function to get the client ip address
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}

$ipaddress = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set("America/Los_Angeles");

$dateFile = date("Y-m-d h:i:sa");



$to = "jshort@landscapearchitect.com"; 
$subject = $sub; 
$txt = "User:" . $ucode . " has downloaded " . $fileType . " from " . get_client_ip_env() . " " . $dateFile . ""; 
$headers = "From: webmaster@landscapearchitect.com" . "\r\n" . mail($to,$subject,$txt,$headers); 

$to = "gschmok@landscapearchitect.com"; 
$subject = $sub; 
$txt = "User:" . $ucode . " has downloaded " . $fileType . " from " . get_client_ip_env() . " " . $dateFile . ""; 
$headers = "From: webmaster@landscapearchitect.com" . "\r\n" . mail($to,$subject,$txt,$headers); 




// Database Upload
    $servername = "localhost";
    $username = "land_patchew";
    $password = "59q2GB6k$3";
    $dbname = "land_landscap_lollive";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO lad_downloads (user_id, file_name, ip_number, date)
VALUES ('$ucode', '$fileType', '$ipaddress', '$dateFile')";

if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


                                        // Start Mail Vendor

										// Get Company ID

											$sql = "select * from vendor_product where cadd LIKE '%" . $fileType . "%' OR cadd_2 LIKE '%" . $fileType . "%' OR cadd_3 LIKE '%" . $fileType . "%' OR pdff LIKE '%" . $fileType . "%' OR skup LIKE '%" . $fileType . "%' OR vwxx LIKE '%" . $fileType . "%' OR mediap LIKE '%" . $fileType . "%' OR zipp LIKE '%" . $fileType . "%' ";
											$result = $conn->query($sql);									
									
							
											while($row = mysqli_fetch_array($result)) {
												
                           $companyId = $row['vendor_id'];
                           $productName = $row['product_name'];

                      }

										// Get Company Info

											$sql = "select * from new_vendor where id ='" . $companyId . "' ";
											$result = $conn->query($sql);									
									
							
											while($row = mysqli_fetch_array($result)) {

                         $companyName = $row['company_name'];
                         $companyEmail = $row['email'];


                      }

										// Get Person Info

											$sql = "select * from subscribe where id ='" . $ucode . "' ";
											$result = $conn->query($sql);									
									
							
											while($row = mysqli_fetch_array($result)) {
												
                               $name = $row['first_name'] . " " . $row['last_name'];
                               $companyPerson = $row['comp_name'];
                               $personEmail = $row['email'];

                          }




                        $emailTest = "jshort@landscapearchitect.com";
                        $emailTest2 = "dbrinkley@landscapearchitect.com";



                        $to = $companyEmail;

                        $subject = 'Sales Lead for ' . $companyName;

                        $headers = "From: all.sales@landscapearchitect.com\r\n";
                        $headers .= 'Cc: gschmok@landscapearchitect.com' . "\r\n";
                        $headers .= 'Cc: jshort@landscapearchitect.com' . "\r\n";
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                        $message = '<html><body>';



                        $message .= '<center><strong><span style="font-size:28px">A detail file has been downloaded</span></center>';
                        $message .= '<center><span style="font-size:22px; color:green; font-weight:bold" align="center">for the Product:<br />' . $productName . '</span></center><br /><br />';
                        $message .= '<center><span style="font-size:18px">Users Information<br />
                                    <span style="font-size:18px"><strong>User\'s Name: </strong>' . $name . '<br>
                                    <span style="font-size:18px"><strong>User\'s Company: </strong>' . $companyPerson . '<br>
                                    <span style="font-size:18px"><strong>User\'s Email: </strong>' . $personEmail . '<br><br />' . 

                                    '<br><br>This information is provide by: <br>
                                    LandscapeOnline.com<br>
                                    <img src="https://landscapearchitect.com/lol-logos/la-details-logo-sm.jpg"><br><br>

                                    714-979-5276 x140<br>
                                    for inquiries.<br /><br /></span><br /></center>';



                        $message .= '</body></html>';

                        mail($to, $subject, $message, $headers);


                        // End Mail Vendor
                                        



mysqli_close($conn);



?>
	
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LAD Confimation</title>
</head>

<body>
	
	<center>
	<img width="75%" src='https://landscapearchitect.com/lol-logos/la-details-logo.jpg'>
	
	<h3>File Downloaded</h3>
		
	</center>
	
<!-- New Tracking -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2956957-1', 'auto');
  ga('send', 'pageview');

</script>    	
	
</body>
</html>
