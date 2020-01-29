<?PHP
include "lol_common.inc";
$company_id = 82;

	// Original PHP code by Chirp Internet: www.chirp.com.au
	// Please acknowledge use of this code by including this header.

function cleanData(&$str)
{
	// escape tab characters
	$str = preg_replace("/\t/", "\\t", $str);
	
	// convert 't' and 'f' to boolean values
	if($str == 't') $str = 'TRUE';
	if($str == 'f') $str = 'FALSE';

	// force certain number/date formats to be imported as strings
	if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
		$str = "'$str";
	}

	// escape fields that include double quotes
	if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
	}
	

	// file name for download
	$filename = "Leads_Report_" . date('Ymd') . ".csv";

	header("Content-Disposition: attachment; filename=\"$filename\"");
	header("Content-Type: application/vnd.ms-excel");
	
	$out = fopen("php://output", 'w');

	$flag = false;
	$result = mysql_query('SELECT * FROM leads WHERE lead_id = '.$company_id.'') or die('Query failed!');
	while(false !== ($row = mysql_fetch_assoc($result))) {
		if(!$flag) {
			// display field/column names as first row
			fputcsv($out, array_keys($row), ',', '"');	
			$flag = true;
		}
		array_walk($row, 'cleanData');
		fputcsv($out, array_values($row), ',', '"');
	}
	
	fclose($out);
?>