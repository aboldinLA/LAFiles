<?PHP
include "lol_common.inc";

	// Original PHP code by Chirp Internet: www.chirp.com.au
	// Please acknowledge use of this code by including this header.

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if($str == 't') $str = 'TRUE';
	if($str == 'f') $str = 'FALSE';
	if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) { $str = "'$str";
	}
	
	if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }
	

	// file name for download
	$filename = "Leads_Report_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");
	
	$company_id = $_GET['id'];
	
	$small = $_GET['small'];
	
	$large = $_GET['large'];
			
	$week = $_GET['week'];

	$flag = false;
	$result = mysql_query("SELECT * FROM leads WHERE (Date BETWEEN '$small' and '$large') AND vendor_id='$id' ")or die('Query failed!');
	while(false !== ($row = mysql_fetch_assoc($result))) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\n";
      $flag = true;
    }
    array_walk($row, 'cleanData');
    echo implode("\t", array_values($row)) . "\n";
  }

  exit;
?>