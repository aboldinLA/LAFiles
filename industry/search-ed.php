<?php
define('DB_USER', 'landscap_lol');
define('DB_PASSWORD', 'meow2meow');
define('DB_SERVER', 'localhost');
define('DB_NAME', 'landscap_lollive');


if (!$db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME)) {
	die($db->connect_errno.' - '.$db->connect_error);
}

$arr = array();

if (!empty($_POST['keywords'])) {
	$keywords = $db->real_escape_string($_POST['keywords']);
	$sql = "SELECT * FROM editorial WHERE title LIKE '%".$keywords."%' ORDER BY id DESC";
	$result = $db->query($sql) or die($mysqli->error);
	if ($result->num_rows > 0) {
		while ($obj = $result->fetch_object()) {
			$arr[] = array('id' => $obj->id, 'title' => $obj->acronym);
		}
	}
}
echo json_encode($arr);
