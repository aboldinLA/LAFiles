<?php
require('https://landscapearchitect.com/products/auto-complete-tutorial_part2/constant.php');
require('https://landscapearchitect.com/products/auto-complete-tutorial_part2/database.php');

if (!isset($_GET['keyword'])) {
	die("");
}

$keyword = $_GET['keyword'];
$data = serachForKeyword($keyword);
echo json_encode($data, JSON_HEX_APOS);