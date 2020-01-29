<?php



header("Cache-Control: no-cache,
must-revalidate");
header("Expires: Mon, 5 Jul 2020 05:00:00
GMT");


$servername = "localhost";
$username = "land_tracker";
$password = "H.M6vuUU[H_p";
$dbname = "land_landscap_landtrack";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = date("Y-m-d");

$eid = $_GET['eid'];
$ip = $HTTP_SERVER_VARS['REMOTE_ADDR'];

$sql = "INSERT INTO crtracking6 (eid, ipaddr, atime)
VALUES ('".$eid."', '".$ip."', '".$date."')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




header("https://landscapearchitect.com/imgz2/onebyoneimage.jpg");
return;
?>