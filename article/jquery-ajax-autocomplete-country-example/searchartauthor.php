<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="select * from editorial where author like '%" . $_POST["keyword"] . "%' ORDER BY id DESC";
$result = $db_handle->runQuery($query);

echo "<table align='center' id='country-list' width='700'>";
echo "<tr><td2 colspan'3' align='center'> </td2></tr>";
echo "</table>";


if(!empty($result)) {
$counter=0;
echo "<table align='center' id='country-list' width='700'>";
echo "<tr>";
	

foreach($result as $country) {
	
?>
<td onClick="selectCountry('<?php echo $country["title"]; ?>');">
<a href="https://landscapearchitect.com/research/article.php/<?php echo $country["id"] ?>" target='_blank'>
<?php echo $country["images"] ?></br>
<strong><?php echo $country["title"] ?></strong></a><br />
<strong><?php echo $country["author"] ?></strong></td>

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