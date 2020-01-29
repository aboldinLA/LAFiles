<?php session_start();



echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "dylan: " . $_SESSION['name'];

$_SESSION['name'] = "Nicole";

?>

<br><br>

<a href="/LandscapeProducts/session-test-2.php">Link Test 2</a>
<a href="/LandscapeProducts/session-test-3.php">Link Test 3</a>