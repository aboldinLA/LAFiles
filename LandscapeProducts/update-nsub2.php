
<?



	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$comp_name = $_POST['conam'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$brand = $_POST['brand'];
	$xpage2 = $_GET['xpage2'];
	$number = $_GET['number'];
	$prodNumber = $_GET['prodNum'];

	$biz_title = $_POST['title'];

	$name = $_POST['fname'] . " " . $_POST['lname'];



	$iam1 = $iam[0];
	$iam2 = $iam[1];
	$iam3 = $iam[2];
	$iam4 = $iam[3];
	$iam5 = $iam[4];
	$iam6 = $iam[5];
	$iam7 = $iam[6];
	$iam8 = $iam[7];
	$iam9 = $iam[8];
	$iam10 = $iam[9];
	$iam11 = $iam[10];
	$iam12 = $iam[11];
	$iam13 = $iam[12];
	$iam14 = $iam[13];
	$iam15 = $iam[14];
	$iam16 = $iam[15];
	$iam17 = $iam[16];
	$iam18 = $iam[17];
	$iam19 = $iam[18];
	$iam20 = $iam[19];
	$iam21 = $iam[20];
	$iam22 = $iam[21];
	$iam23 = $iam[22];
	$iam24 = $iam[23];
	$iam25 = $iam[24];
	$iam26 = $iam[25];
	$iam27 = $iam[26];
	$iam28 = $iam[27];
	$iam29 = $iam[28];
	$iam30 = $iam[29];
	$iam31 = $iam[30];
	$iam32 = $iam[31];
	$iam33 = $iam[32];






		
	if ((!empty($iam1)) || (!empty($iam2)) || (!empty($iam3)) || (!empty($iam4)) || (!empty($iam5)) || (!empty($iam6)) || (!empty($iam7)) || (!empty($iam8)) || (!empty($iam9)) || (!empty($iam10)) || (!empty($iam11)) || (!empty($iam12)) || (!empty($iam13)) || (!empty($iam14)) || (!empty($iam15)) || (!empty($iam16)) || (!empty($iam17)) || (!empty($iam18)) || (!empty($iam19)) || (!empty($iam20)) || (!empty($iam21)) || (!empty($iam22)) || (!empty($iam23)) || (!empty($iam24)) || (!empty($iam25)) || (!empty($iam26)) || (!empty($iam27)) || (!empty($iam28)) || (!empty($iam29)) || (!empty($iam30)) || (!empty($iam31)) || (!empty($iam32)) || (!empty($iam33))) {




	$am_id = $iam1 . "," . $iam2 . "," . $iam3 . "," . $iam4 . "," . $iam5 . "," . $iam6 . "," . $iam7 . "," . $iam8 . "," . $iam9 . "," . $iam10 . "," . $iam11 . "," . $iam12 . "," . $iam13 . "," . $iam14 . "," . $iam15 . "," . $iam16 . "," . $iam17 . "," . $iam18 . "," . $iam19 . "," . $iam20 . "," . $iam21 . "," . $iam22 . "," . $iam23 . "," . $iam24 . "," . $iam25 . "," . $iam26 . "," . $iam27 . "," . $iam28 . "," . $iam29 . "," . $iam30 . "," . $iam31 . "," . $iam32 . "," . $iam33;

	} else {
		
		$am_id = '';
		
	}


	$uname2 = $_SESSION['name'];

	$ucode = $_SESSION['user'];

	// echo $xpage2;

	// echo $pass;




        $link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// Attempt insert query execution
		$sql = "INSERT INTO subscribe (biz_title, first_name, last_name, comp_name, email, pass, brand)
				VALUES ('$biz_title', '$first_name', '$last_name', '$comp_name', '$email', '$pass', '$brand');";

		if(mysqli_query($link, $sql)){
			
		
			echo "<br><center><h3>Your Subscription has been added.</h3><br></center>";
			
			
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}



						
																					
								$servername = "localhost";
								$username = "land_patchew";
								$password = "59q2GB6k$3";
								$dbname = "land_landscap_lollive";

								// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									} 

								$sql = "SELECT * FROM subscribe ORDER BY ID DESC LIMIT 1";
								$result = $conn->query($sql);	
																					
																					
									 while ($row = mysqli_fetch_assoc($result)) {
											
												 
												$ucode3 = $row['id'];
										 
										 		echo $ucode3 . '<br>';
										 
										 
											 }



?>

<script>
	
var page = '<? echo $number; ?>';
var page2 = '<? echo $prodNumber; ?>';
var fname = '<? echo $first_name; ?>';
var lname = '<? echo $last_name; ?>';
var ucode = '<? echo $ucode3; ?>';
	
window.location.replace('https://www.landscapearchitect.com/LandscapeProducts/product-details.php?number='+page+'&prodNum='+page2+'&uname2='+fname+'&uname3='+lname+'&ucode3='+ucode+'');

</script>





<?

		// Close connection





?>
	
