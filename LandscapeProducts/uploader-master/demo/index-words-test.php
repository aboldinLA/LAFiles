
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


echo 'dog<br>';


$testString = '“•How’s now – brown® cow™”';

 echo str_replace(["“","”","’","®","™","–","•"],["\"","\"","'","&reg;","&trade;","-","&bull;"],"$testString");


    echo '<br>';


 echo htmlentities(str_replace(["“","”","’","®","™","–","•"],["\"","\"","'","&reg;","&trade;","-","&bull;"],"$testString"));

?>
