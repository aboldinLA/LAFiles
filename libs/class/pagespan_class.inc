<?

include_once $include_path . "class/common_class.inc";

class PageSpan  extends Common_Class {

	var $db;

	var $total=0;

	var $pagename="";

	var $querystring="";

	var $perpage=2;

	var $tablewidth="100%";

	var $prevtext="<< Previous";

	var $nexttext="Next >>";

	var $middlenav=true;

	

	function PageSpan($db) {

		$this->db = $db;

	}

	function span_start($sql, $page) {

		$PERPAGE=$this->perpage;

		if (!$page) $page = 0;

		if (!$QUERY_STRING) $QUERY_STRING = "";

		

		// select the count for the number of records

		$sql = str_replace("SELECT * FROM", "", $sql);

		$countresult=$this->db->query("SELECT COUNT(*) AS total FROM" . $sql);

		$sql = "SELECT * FROM" . $sql;

		if ($countresult == 0) { 

			$sql = 0;

		?>

					<tr>

					<td><b>No Match. Click New Search and try again</B></td>

					</tr>

		<? } else {

		

			$data=$this->db->fetch_array($countresult);

			

			$total = $data['total'];

			

			

			if ($page*$PERPAGE > $total) 

				$page=floor($total/$PERPAGE);

			

				if ($total > $PERPAGE) {

					$sql.=" LIMIT ".($page*$PERPAGE).", $PERPAGE";

					

					$this->total=$total;	 

					$value = ($PERPAGE*($page+1));

					if ($value > $total) $value =  $total;

					if ($value == 0) $value = 1;

					$start = (($PERPAGE*$page)+1);

				?>

				<tr>

					<td>

						<b>Displaying</B>

						<b><?=$start ?> - <?= $value ?>&nbsp;of &nbsp;<?=$total ?> records</b>

					</td>

				</tr>

				<tr>

					<td>

						<?	$this->dospan($page);?>

					</td>

				</tr>

				<?

			} 

		}

	

	return $sql;

	

	}

	function span_end($page) {

		if ($this->total > $this->perpage) { ?>

			<tr>

				<td>

					<?	$this->dospan($page);?>

				</td>

			</tr>

		<?	

		}

	}

	

	function dospan($page) {

	

		echo "<table width=\"".$this->tablewidth."\" align=\"center\">";

		echo "<td width=20% nowrap>";

		

		if ($page>0) echo "<a style=\"font-size:10px\" href=\"".$this->pagename.($this->querystring!=""?("?".$this->querystring."&"):"?")."page=".($page-1)."\">".$this->prevtext."</a>";

		

			else echo "&nbsp;";

		echo "</td>";

		

		echo "<td width=60% align=center>";

		

		$from=($page-5)<0?0:($page-5);

		$to=(($from+10)>(ceil($this->total/$this->perpage)))?(ceil($this->total/$this->perpage)):($from+10);

		

		if ($from!=($to-1) && $this->middlenav)

		{	

			for ($i=$from;$i<$to;$i++)

			{

				echo "<a  style=\"font-size:10px; ".($page==$i?"color: red;":"")."\" href=\"";

				echo $this->pagename.($this->querystring!=""?("?".$this->querystring."&"):"?")."page=".$i."\">".($i+1);

				echo "</a> ";

			}

		}

		else

			echo "&nbsp;";

		

		echo "</td>";

		

		echo "<td width=20% align=right nowrap>";

		if ((($page*$this->perpage)+$this->perpage)<$this->total) echo "<a style=\"font-size:10px\" href=\"".$this->pagename.($this->querystring!=""?("?".$this->querystring."&"):"?")."page=".($page+1)."\">".$this->nexttext."</a>"; else echo "&nbsp;";

		echo "</td>";

		

		echo "</table>";

	}

	

	function displayinfo($page) {

		echo "<br><b>".$this->total."</b> documents matched the search criteria.<br>Displaying ".(($page*$this->perpage)+1)."-".((($page*$this->perpage)+$this->perpage)>$this->total?$this->total:(($page*$this->perpage)+$this->perpage));

	}

	

	function querystring($querystring) {

		$this->querystring=ereg_replace("((&?)|(\??))page=[0-9]([0-9]+)","",$querystring);

	}



} // class

?>
