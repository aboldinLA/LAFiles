<?php
// Banner Ads Start

// Page Path Name Script Start
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

  // When I delete this line - function doesn't work
  echo "<span style='color:#FFFFFF'>" . curPageURL() . "</span>";

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}



$rootPath = $_SERVER['DOCUMENT_ROOT'];
$thisPath = dirname($_SERVER['PHP_SELF']);
$onlyPath = str_replace($rootPath, '', $thisPath);



$pathname = $onlyPath . "/" . curPageName();

echo "<br>";

echo $pathname;

// Page Path Name Script End

if (isset($_GET['next2'])) {
	$next3 = $_GET['next2'];
}else{
    echo 'catdogcatdogcatdog';
}

	$servername = "localhost";
	$username = "landscap_lol";
	$password = "meow2meow";
	$dbname = "landscap_lollive";
	
	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// start for the banner add counting and getting from table

$sql = "SELECT * FROM banner_ups where page =" . $pathname . " AND picture IS NOT NULL ORDER BY RAND()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<div style='position:absolute; left:60px; top:-105px'>";
	echo "<table width='240'>";
    while($row = $result->fetch_assoc()) {
	echo "<tr><td><a href='". $row["web"]. "'><img src='/banner/" . $row["picture"]. "' width=240 border=0 style='margin-bottom:10px>'</a></td></tr>";
    }
} 
	echo "</table>"; 
	echo "</div>";

$conn->close();

// Banner Ads end

?>

<div style="position:absolute; left:-175px; top:-275px">
    <div> <a href="https://landscapearchitect.com/social/index.php"><img src="https://landscapearchitect.com/banner/LO-Web-top_banner_social-media.jpg" width=468 height="110" border=0 style='margin-bottom:10px' ALT='Advertisement'></a> </div>
</div>