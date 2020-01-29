
<?php



$key = $_GET[keyword2];

$key6 = 'pave tech';

$key7 = addslashes($key6);


include("config.inc2.php"); //include config file

echo $key . 'cat';
echo $key7 . 'dog';

//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}

//get current starting point of records
$position = ($page_number * $item_per_page);


//Limit our results within a specified range. 
$results = mysqli_query($connecDB,"select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id  LEFT JOIN xlist ON xlist.id=vendor_product.xlist  where new_vendor.company_name like '%" . $key7 . "%' ORDER by new_vendor.status DESC, vendor_product.photo_time DESC LIMIT $position, $item_per_page");

//output results from database
echo '<ul class="page_result">';

echo $key1;

echo "<table align='center' id='country-list' width='700'>";
echo "<tr>";

while($row = mysqli_fetch_array($results))
{
	if ($row["status"] == '16'){
	
	?>
    
<td onClick="selectCountry('<?php echo $row["product_name"]; ?>');">
<a href="https://landscapearchitect.com/products/listing.php?id=<?php echo $row["vendor_id"] ?>" target='_blank'>
<img src="https://landscapearchitect.com/products/images/<?php echo $row["photo"] ?>" width='233' /></br>
<strong><?php echo $row["product_name"] ?></strong></a><br />
<strong><?php echo $row["company_name"] ?></strong></td>

<? } else { ?>

<td>
<img src="https://landscapearchitect.com/products/images/<?php echo $row["photo"] ?>" width='233' /></br>
<strong><?php echo $row["product_name"] ?></strong><br />
<strong><?php echo $row["company_name"] ?></strong></td>

<? } ?>
    
    <?

// this is for the table to be only 3 wide
if($counter % 3 == 2)
echo '</tr>';
$counter++;
	
	
}
?>

</tr>

</table>

<?php
// Banner Ads Start

class DBController {
	private $host = "localhost";
	private $user = "landscap_lol";
	private $password = "meow2meow";
	private $database = "landscap_lollive";
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysql_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	
	function selectDB($conn) {
		mysql_select_db($this->database,$conn);
	}
	
	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}

$db_handle = new DBController();

if(!empty($_GET[keyword2])) {
$query ="select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id LEFT JOIN xlist ON xlist.id=vendor_product.xlist where (xlist.name like '%" . $_GET[keyword2] . "%'AND xlist.id > '99') ORDER by vendor_product.photo_time DESC ";


$result = $db_handle->runQuery($query);

    if(count($result)==0)
        return false;

}
// start for the banner add counting and getting from table

	$x = $country["idParent"];
foreach($result as $country) {
	$y = $country["idParent"];

	if ($x != $y) {
    	$z = $y;
	} else {
    	echo '&nbsp;';
	}

}

	$x = $country["idParent"];
	if ($x == 0) {
		$x = 38;
	} else {
		$x = $country["idParent"];
	}
	
foreach($result as $country) {
	$y = $country["idParent"];

	if ($x != $y AND $z != $y) {
    	$q = $y;
	} else {
    	echo '&nbsp;';
	}

}

$query2 ="select * from banner_ups where product IN ('$x', '$q', '$z') AND picture IS NOT NULL";
$result2 = $db_handle->runQuery($query2);


echo "<div style='position:absolute; left:782px; top:-210px'> ";
	echo "<table width='240'>";
	
foreach($result2 as $country) {
	echo "<tr><td>";
	echo "<img src='/banner/" . $country["picture"] . "' width=240 border=0 style='margin-bottom:10px'";
	echo "</td></tr>";
}

	echo "</table'>";
echo "</div>";

// Banner Ads end

?>

<div style="position:absolute; left:-230px; top:-188px">
    <div> <a href="https://landscapearchitect.com/social/index.php"><img src="/banner/LO-Web-top_banner_social-media.jpg" width=468 height="110" border=0 style='margin-bottom:10px' ALT='Advertisement'></a> </div>
</div>