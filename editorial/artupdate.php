<?

 $date = strtotime("now");
 $title = $_POST['title'];
 $subtitle = $_POST['subtitle'];
 $author = $_POST['author'];
 $keywords = $_POST['keywords'];
 $subject = $_POST['subject'];
 $ed_text = $_POST['ed_text'];

	$transString2 = str_replace(["'"],["\'"],"$ed_text");


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
		// Check connection
	

		// Attempt insert query execution
		$sql = "INSERT INTO editorial (title, subtitle, ed_text, author, issue, source, keywords, subject)
				VALUES ('" . $title . "', '" . $subtitle . "', '" . $transString2. "', '" . $author . "', '" . $date . "', 'other', '" . $keywords . "', '" . $subject . "')";

if ($conn->query($sql) === TRUE) {
    echo "Story Uploaded";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<!DOCTYPE html>
<html>

<body>
	
	<h3>story entered.</h3>


</body>
</html>