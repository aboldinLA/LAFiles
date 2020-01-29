<?php session_start();



echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "name: " . $_SESSION['name'];

?>


<br><br>

<a href="/LandscapeProducts/session-test-1.php">Link Test 1</a>
<a href="/LandscapeProducts/session-test-3.php">Link Test 3</a>