<?Php
///////// Database Details , add  here  ////
$dbhost_name = "localhost";
$database = "landscap_lollive";  // Your database name
$username = "landscap_lol";                  //  Login user id 
$password = "meow2meow";                  //   Login password
/////////// End of Database Details //////



//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

?> 