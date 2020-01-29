<?php
session_start();
if (isset($_GET['logout'])) {
session_unset();
session_destroy();
header("/log-test/index.php");
exit;
}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<title>Login Script</title>
<style type="text/css">
body { font-size: 12px; }
input { font-size: 12px; }
</style>
</head>
<body>

<h2>Member Login</h2>
<form action="login.php" method="POST">
Password:<br>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="Login">
</form>

</body>
</html>
