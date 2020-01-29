<?php
$connection = mysql_connect('localhost', 'landscap_lol', 'meow2meow');
$db = mysql_select_db('landscap_lollive', $connection);
$term = strip_tags(substr($_POST['searchit'],0, 100));
$term = mysql_escape_string($term); // Attack Prevention
if($term=="")
echo "Enter Something to search";
else{
$query = mysql_query("select * from vendor_product where product_name like '%{$term}%'", $connection);
$string = '';

if (mysql_num_rows($query)){
while($row = mysql_fetch_assoc($query)){
$string .= "<b><a href='https://landscapearchitect.com/products/listing.php?id=".$row['vendor_id']."' target='_blank'></b></br>";
$string .= "<b> <img src='https://landscapearchitect.com/products/images/".$row['photo']."' width='150'  /></b> </br> ";
$string .= "<b>".$row['product_name']."</b> </a> - ";
$string .= "<br/>\n";
}

}else{
$string = "No matches found!";
}

echo $string;
}
?>