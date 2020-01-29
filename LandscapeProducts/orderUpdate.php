<?php 
 
// Include and create instance of DB class 
$coNumber = $_GET['venNum'];
require_once 'DB.class.php'; 
$db = new DB(); 
 
// Get images id and generate ids array 
$idArray = explode(",", $_POST['ids']); 
 
// Update images order 
$coNumber = $_GET['venNum'];
$db->updateOrder($idArray); 
 
?>