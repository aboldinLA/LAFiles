<?

include $include_path . "class/industry_class.inc";

include $include_path . "class/pagespan_class.inc";

include $include_path . "class/research_class.inc";

$R = new research_class($db);

$I = new industry_Class($db);

if (!$terms) $terms=$keywords;

$terms_disp="<font color=#70A183>" . $terms . "</font>";

	if ($adv) {



		if ($lookup == "article") {

			$srch_type ="Search by Article/Column Title ".$terms_disp;

			$search = " title LIKE '%" . $terms."%'";

		}

		if ($lookup == "author") {

			$srch_type ="Search by Author ".$terms_disp; 

			$search = " author LIKE '%". $terms . "%'";

		}

		if ($lookup == "keywords") {

			$srch_type ="Search by Keyword ".$terms_disp;

			$search = " MATCH (ed_text) AGAINST ('" .$terms ."')"; // . " AND subject = " . $subject;

		}

		if ($filter == "LCN" || $filter == "LCM" || $filter == "LASN" ) {

			$datestr=sprintf("%02d/01/%02d", $month, $year);

			$issue = strtotime($datestr);

			$datestr2 = date("F, Y", $issue);

			$srch_type .= " in " . $datestr2; 

			$sfilter = " AND issue = '" . $issue . "' ";//AND source = '" . $type . "'";

		}		

			

		

	} else {

		if (strlen($keywords) > 2) {

			$srch_type ="Search Terms: ".$terms_disp;

			$search  = " ( lower(title) like '%" . $terms . "%')";

			$search .= " OR ( lower(ed_text) like '%" . $terms . "%')";



			// $search = " MATCH (ed_text) AGAINST ('" .$terms ."')"; // . " AND subject = " . $subject;

		}

	}



	if ($subj) {

		$srch_type = $R->subject_name($subj);

		$search = " subject = '" . $subj ."'"; // . " AND subject = " . $subject;

	}

	if ($cat) {

		$query = "SELECT * FROM editorial_subject WHERE idParent = 3";

		$result =$db->query($query);

		$i=0;

		$srch_type = "Projects";//$R->subject_name($subj);

		while($row= $db->fetch_array($result)) {

			

			if ($i != 0) $search .= " OR ";

			$search .= " subject = '" . $row['id'] ."'"; // . " AND subject = " . $subject;

			$i++;

		}	

	}

?>

<TABLE CELLPADDING="5" WIDTH="100%"	 CELLSPACING="3" > 

   <TR> 

		 <TD class="srch_t"><b><?echo $srch_type?></b></TD> 

   </tr>

	<? if ($search) {

		$span=new PageSpan($db);

		$span->perpage=10;

		$span->pagename="search.php";

		$span->querystring($QUERY_STRING);

		$sql = $span->span_start("SELECT * FROM editorial WHERE title <> '' AND title IS NOT NULL AND " . $search . $sfilter . "order by issue+0 desc", $page);

		

		$R->list_editorials($sql);



		$span->span_end($page);

		}

	?>

 	<TR> 

		 <TD  align="center">

		  <a href="index.php">New Search</a>

		<?//=$db->odbc_tables();?> </TD> 

 	</tr>

</table>

