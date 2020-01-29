<?php
$connection = mysql_connect('localhost', 'landscap_lol', 'meow2meow');
$db = mysql_select_db('landscap_lollive', $connection);
$term = strip_tags(substr($_POST['searchit'],0, 100));
$term = mysql_escape_string($term); // Attack Prevention
$name=$_POST['name']; 
$term=$name;
if($term=="")
echo "Click inside box";
else{
$query = mysql_query("select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id  LEFT JOIN xlist ON xlist.id=vendor_product.xlist  where vendor_product.product_name   like '%{$term}%'", $connection);
$string = " ";

// Start of table and counter
$counter=0;
$string = "<table width='753' border='0'>";
$string = "<tr>";
if (mysql_num_rows($query)){
while($row = mysql_fetch_assoc($query)){
$string .= "<td width='275px'><b><a href='https://landscapearchitect.com/products/listing.php?id=".$row['vendor_id']."' target='_blank'></b></br>";
$string .= "<b> <img src='https://landscapearchitect.com/products/images/".$row['photo']."' width='150'  /></b> </br> ";
$string .= "<b>".$row['product_name']."</b> </a></br>";
$string .= "<b>".$row['company_name']."</b>";
$string .= "<br/></td>";

// this is for the table to be only 3 wide
if($counter % 3 == 2)
$string .= '</tr>';
$counter++;



}

}else{
$string = "No matches found!";
}

// String echoed here
echo $string;

// end of table
echo "</tr>";
echo "</table>";

}
?>