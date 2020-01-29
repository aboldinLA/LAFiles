<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'land_patchew');
define('DB_PASSWORD', '59q2GB6k$3');
define('DB_NAME', 'land_landscap_lollive');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



//    $servername = "localhost";
//    $username = "land_patchew";
//    $password = "59q2GB6k$3";
//    $dbname = "land_landscap_lollive";


?>
