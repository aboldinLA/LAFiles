<?php
$conn = mysqli_connect('localhost', 'root', '', 'sortnews');
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db($conn, "sortnews");
?>

