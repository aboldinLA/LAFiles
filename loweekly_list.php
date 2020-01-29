<? 
$db_username = 'landscap_lol';
$db_password = 'meow2meow';
$db_name = 'landscap_lollive';
$db_host = 'localhost';
$item_per_page = 15;

$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');

//Limit our results within a specified range. 
$results = mysqli_query($connecDB,"select * from editorial WHERE subject = '6' ORDER by id DESC");

echo "<div style='position:absolute; left:25px'>";
echo "<ul>";
$counter = 1;
while($counter < 16){
$row = mysqli_fetch_array($results);

?>

		<li><a href="https://landscapearchitect.com/research/article-js2.php/<? echo $row["id"] ?>" target="_blank"><?php echo $row["title"] ?></a></li>

<?
$counter++;
}

?>

	</ul><br>
    <a href="https://landscapearchitect.com/research/article-loweekly.php" target="_blank">View Full List of LO Weekly</a>
    </div>