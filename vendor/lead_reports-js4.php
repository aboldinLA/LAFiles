<?

include "lol_common.inc";

$Firstname = $_GET['Firstname'];

$secthdr = "Leads Report for $Firstname";

$password = $_GET['password'];


$sql    = 'SELECT * FROM leads WHERE vendor_id = '.$password.'';
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

include $include_path . "lol_header2.inc";


echo "<div id=\"table0\"><table width=\"763\">";

while ($row = mysql_fetch_assoc($result)) {
	
echo "<tr><td valign=\"top\" width=\"225\" style=\"font-size:12px\"><strong>Name:</strong> ". $row['fname']  . "&nbsp;" .  $row['lname'] . "</td><td valign=\"top\" width=\"175\" style=\"font-size:12px\"><strong>Company: </strong>". $row['company'] . "</td><td valign=\"top\" rowspan=\"11\" style=\"font-size:12px\"><strong>Demographics: </strong>" . $row['demographic'] . "</td></tr>";

echo "<tr><td width=\"225\" style=\"font-size:12px\"><strong>Address: </strong> ". $row['address'] . "</td><td valign=\"top\" width=\"175\" style=\"font-size:12px\"><strong>Choices: </strong>". $row['choices']  . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\"><strong>City: </strong> ". $row['city'] . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\"><strong>State/Zip: </strong>". $row['state'] . "&nbsp;" .  $row['zip'] . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\"><strong>Phone: </strong>". $row['phone'] . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\"><strong>Fax: </strong>". $row['fax'] . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\"><strong>Email: </strong>". $row['email'] . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\">" . "</td></tr>";

echo "<tr><td colspan=\"2\"  width=\"225\" style=\"font-size:12px\"><strong>Brand: </strong>". $row['brand'] . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\"><strong>Date: </strong>". $row['Date'] . "</td></tr>";

echo "<tr><td colspan=\"2\" width=\"225\" style=\"font-size:12px\"><strong>Source: </strong>". $row['from'] . "</td></tr>";

echo "<tr><td colspan=\"3\" width=\"225\" style=\"font-size:12px\"><hr> </hr>" . "</td></tr>";

}

echo "</table></div>";

mysql_free_result($result);

?>

<script type="text/javascript">
function printTable(obj) {
content = document.getElementById(obj).innerHTML;
newwin = window.open('');
newwin.document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"\n',
'"http://www.w3.org/TR/html4/strict.dtd">\n',
'<html>\n',
'<head>\n',
'<title>Printing...</title>\n',
'<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">\n',
'<body>\n',
''+content+'\n',
'</body>\n',
'</html>');
newwin.print();
newwin.close();
}
</script>
<p>Print table: <a href="#" onclick="printTable('table0'); return false;">0</a></p>






<? include  $include_path . "lol_footer.inc" ?>
	
