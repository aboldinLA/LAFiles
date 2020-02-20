<?
	include '../modules/configuration.inc';
	include '../modules/db.php';

	$date = strtotime("now");
	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];
	$author = $_POST['author'];
	$keywords = $_POST['keywords'];
	$subject = $_POST['subject'];
	$ed_text = $_POST['ed_text'];

	$transString2 = str_replace(["'"],["\'"],"$ed_text");


    /*$servername = "localhost";
    $username = "land_patchew";
    $password = "59q2GB6k$3";
    $dbname = "land_landscap_lollive";*/

	/*// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}*/
		// Check connection
	

	// Attempt insert query execution
	$sql = "INSERT INTO editorial (title, subtitle, ed_text, author, issue, source, keywords, subject, slug)
			VALUES ('" . $title . "', '" . $subtitle . "', '" . $transString2. "', '" . $author . "', '" . $date . "', 'other', '" . $keywords . "', '" . $subject . "', '')";
	
	if ($conn->query($sql) === TRUE) {
	    $last_id = $conn->insert_id;

	    $title =  trim($title); // 

		$title = strtolower($title); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

		$title = preg_replace("/[^a-z0-9_\s-]/", "", $title);  //Strip any unwanted characters

		$title = preg_replace("/[\s-]+/", " ", $title); // Clean multiple dashes or whitespaces

		$title = preg_replace("/[\s_]/", "-", $title);


		$check = "SELECT id,slug FROM editorial WHERE slug = '".$title."'";
		$resultCheck = $conn->query($check);
		$checkCount = mysqli_num_rows($resultCheck);		
		
		if($checkCount > 0){
			
			$resultCheck -> free_result();
			$title = $title.'-'.$last_id;
			$duplicateCount++;
		}		

		$sql = "UPDATE editorial SET slug='".preg_replace('/\s+/', ' ', $title)."' WHERE id=" . $last_id . "";
		if ($conn->query($sql) === TRUE) {
            echo $string."</br>";
            echo "Story Uploaded";
        } else {
            echo "Error updating record: " . $conn->error;
        } 
		

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
