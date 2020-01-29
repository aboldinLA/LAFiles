<?php session_start();



echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "dylan: " . $_SESSION['dylan'];

?>


<br><br>

<a href="/LandscapeProducts/session-test-1.php">Link Test 1</a>
<a href="/LandscapeProducts/session-test-2.php">Link Test 2</a>