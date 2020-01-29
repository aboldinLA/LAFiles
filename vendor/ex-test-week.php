<?PHP
include "lol_common.inc";

	// Original PHP code by Chirp Internet: www.chirp.com.au
	// Please acknowledge use of this code by including this header.

  function cleanData(&$str)
  {
    if($str == 't') $str = 'TRUE';
    if($str == 'f') $str = 'FALSE';
    if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
      $str = "'$str";
    }
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }
	

	// file name for download
	$filename = "Leads_Report_" . date('Ymd') . ".csv";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: text/csv");
	
	$out = fopen("php://output", 'w');

	$company_id = $_GET['id'];
	
	$small = $_GET['small'];
	
	$large = $_GET['large'];
						
	$week = $_GET['week'];

	$flag = false;
	$result = mysql_query('SELECT * FROM leads WHERE vendor_id = '.$company_id.' AND week = '.$week.'') or die('Query failed!');
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