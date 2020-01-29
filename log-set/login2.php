<?php
session_start();
function salt($pw) {
$salt = "This comment should suffice as salt.";
return sha1($salt.$pw);
}
if (isset($_POST['submit'])) {
mysql_connect('localhost', 'landscap_lol', 'meow2meow') or die("Cannot open connection: " . mysql_error());
mysql_select_db("landscap_lollive") or die("Database not found");
$password = mysql_real_escape_string($_POST['password']);
$query = mysql_query("SELECT * FROM new_vendor WHERE pass='$password'");
if (mysql_num_rows($query) == 0) {
	$query = mysql_query("SELECT * FROM subscribe WHERE pass='$password'");
	if (mysql_num_rows($query) == 0) {
		$URL="https://landscapearchitect.com/tcart/OnlineStoreLogin/OnlineStorelogin.php";
		echo "<script>alert('Incorrect password. Please recheck your password.'); 
		window.location='/tcart/OnlineStoreLogin/OnlineStorelogin.php'</script>"; 
		exit;
		}
		$_SESSION['user'] = 'company_name';
		$URL="https://landscapearchitect.com/tcart/OnlineStoreLogin/OnlineStoreTemp.php";
		header ("Location: $URL");
		}
$_SESSION['user'] = 'company_name';
$URL="https://landscapearchitect.com/tcart/OnlineStoreLogin/OnlineStoreTemp.php";
header ("Location: $URL");
}
?>
