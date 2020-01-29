<?
	include('configuration.inc');								
    //$servername = "localhost";
    //$username = "land_patchew";
    //$password = "59q2GB6k$3";
    //$dbname = "land_landscap_lollive";


	$servername = DB_HOST;
	$username = DB_USER;
	$password = DB_PASS;
	// $dbname = "devlands_live2019";
	$dbname = DB_NAME;

	// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
									
?>