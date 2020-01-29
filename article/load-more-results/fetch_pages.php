

<?php

$key2 = 'rock';


include("config.inc2.php"); //include config file



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
$results = mysqli_query($connecDB,"select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id LEFT JOIN xlist ON xlist.id=vendor_product.xlist where (xlist.name like '%" . $key2 . "%'AND xlist.id > '99') ORDER by vendor_product.photo_time DESC LIMIT $position, $item_per_page");

//output results from database
echo '<ul class="page_result">';

echo $key1;

echo "<table align='center' id='country-list' width='700'>";
echo "<tr>";

while($row = mysqli_fetch_array($results))
{
	?>
    
<td onClick="selectCountry('<?php echo $row["product_name"]; ?>');">
<a href="https://landscapearchitect.com/products/listing.php?id=<?php echo $row["vendor_id"] ?>" target='_blank'>
<img src="https://landscapearchitect.com/products/images/<?php echo $row["photo"] ?>" width='233' /></br>
<strong><?php echo $row["product_name"] ?></strong></a><br />
<strong><?php echo $row["company_name"] ?></strong></td>
    
    <?

// this is for the table to be only 3 wide
if($counter % 3 == 2)
echo '</tr>';
$counter++;
	
	
}
?>

</tr>

</table>

