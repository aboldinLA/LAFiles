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
	
	$string =  trim($title); // 

	$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

	$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

	$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

	$string = preg_replace("/[\s_]/", "-", $string);


	$check = "SELECT id,slug FROM editorial WHERE slug = '".$string."'";
	$resultCheck = $conn->query($check);
	$checkCount = mysqli_num_rows($resultCheck);		
	
	if($checkCount > 0){
		$resultCheck -> free_result();
		$last_id_sql = "SELECT id from editorial ORDER BY id DESC LIMIT 1";
		$last_id_res = $conn->query($last_id_sql);
		while($row = mysqli_fetch_array($last_id_res)){
			$next_id = $row['id'] + 1;
		}
		$slug = $string.'-'.$next_id;
	}else{
		$slug = $string;
	}		
	// Attempt insert query execution
	$sql = "INSERT INTO editorial (title, subtitle, ed_text, author, issue, source, keywords, subject, slug)
			VALUES ('" . $title . "', '" . $subtitle . "', '" . $transString2. "', '" . $author . "', '" . $date . "', 'other', '" . $keywords . "', '" . $subject . "', '".$slug."')";
	
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
