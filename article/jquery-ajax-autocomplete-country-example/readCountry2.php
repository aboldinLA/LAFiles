<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id  LEFT JOIN xlist ON xlist.id=vendor_product.xlist  where vendor_product.product_name like '" . $_POST["keyword"] . "%' ";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
$counter=0;
echo "<table align='center' id='country-list' width='610'>";
echo "<tr>";	

foreach($result as $country) {
	
?>
<td onClick="selectCountry('<?php echo $country["product_name"]; ?>');">
<a href="https://landscapearchitect.com/products/listing.php?id=<?php echo $country["vendor_id"] ?>" target='_blank'>
<img src="https://landscapearchitect.com/products/images/<?php echo $country["photo"] ?>" width='165' /></br>
<strong><?php echo $country["product_name"] ?></strong></a><br />
<strong><?php echo $country["company_name"] ?></strong></td>

<?
// this is for the table to be only 3 wide
if($counter % 3 == 2)
echo '</tr>';
$counter++;
?>

<?php } ?>
</tr>
</table>
<?php } } ?>