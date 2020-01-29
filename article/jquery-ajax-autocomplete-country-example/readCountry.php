<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id  LEFT JOIN xlist ON xlist.id=vendor_product.xlist  where vendor_product.product_name like '" . $_POST["keyword"] . "%' ";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["product_name"]; ?>');">
<a href="https://landscapearchitect.com/products/listing.php?id=<?php echo $country["vendor_id"] ?>" target='_blank'>
<img src="https://landscapearchitect.com/products/images/<?php echo $country["photo"] ?>" width='150' /></br>
<strong><?php echo $country["product_name"] ?></strong></a><br />
<strong><?php echo $country["company_name"] ?></strong>
</li>
<?php } ?>
</ul>
<?php } } ?>