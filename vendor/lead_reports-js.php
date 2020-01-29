<?

include "lol_common.inc";
$secthdr = "Leads Report";
$comp_name = "Ashley Art";

$password = 22920;


$sql    = 'SELECT * FROM leads WHERE vendor_id = '.$password.'';
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

include $include_path . "lol_header2.inc";

echo ("<img src=\"https://landscapearchitect.com/vendor/images/leads-Bar1.jpg\">"); 

echo "<table width=\"763\">";

while ($row = mysql_fetch_assoc($result)) {
	
echo "<tr><td width=\"80\" style=\"font-size:12px\"><strong> ". $row['brand'] . "</strong></td><td width=\"135\" style=\"font-size:12px\">". $row['fname']  .  $row['lname'] . "</td><td width=\"40\" style=\"font-size:12px\">". $row['state'] . "</td><td width=\"100\" style=\"font-size:12px\">". $row['phone'] . "</td><td valign=\"top\" rowspan=\"4\" width=\"100\" style=\"font-size:12px\">". $row['choices'] . "</td>,<td rowspan=\"4\" style=\"font-size:12px\">" . $row['demographic'] ."</td></tr>";

echo "<tr><td valign=\"top\" width=\"80\" style=\"font-size:12px\"><strong> ". $row['issueId'] . "</strong></td><td valign=\"top\" width=\"135\" style=\"font-size:12px\">". $row['company']  . "</td><td valign=\"top\" rowspan=\"3\" width=\"40\" style=\"font-size:12px\">". $row['zip'] . "</td><td valign=\"top\" width=\"100\" style=\"font-size:12px\">". $row['fax'] . "</td></tr>";

echo "<tr><td valign=\"top\" width=\"80\" style=\"font-size:12px\"><strong> ". $row['Date'] . "</strong></td><td valign=\"top\" width=\"135\" style=\"font-size:12px\">". $row['address']  . "</td><td valign=\"top\" rowspan=\"2\" width=\"100\" style=\"font-size:12px\">". $row['email'] . "</td></tr>";

echo "<tr><td valign=\"top\" width=\"80\" style=\"font-size:12px\"><strong> ". $row['from'] . "</strong></td><td valign=\"top\" width=\"135\" style=\"font-size:12px\">". $row['city']  . "</td></tr>";

}



echo "</table>";


mysql_free_result($result);




?>







<? include  $include_path . "lol_footer.inc" ?>
	
