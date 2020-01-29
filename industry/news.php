<?

include "lol_common.inc";

include $include_path . "class/industry_class.inc";

include $include_path . "class/pagespan_class.inc";



$I = new industry_Class($db);

// include  $include_path . "lol_header.inc";

$data = $I->association_info($id);

?>





<TABLE ALIGN="center" CELLPADDING="0" WIDTH="100%" CELLSPACING="0"> 

	<tr>

		<td class="cellhead"><B>Association News Search Results Page</B></FONT>

		</td>

	</tr><!-- mm r2 -->

	<? 

 	

	$span=new PageSpan($db);

	$span->perpage=5;

	$span->pagename=$PHP_SELF;

	$span->querystring($QUERY_STRING);

	$query = "SELECT * FROM assoc_news WHERE uid  = $id ORDER BY input";

	$sql = $span->span_start($query, $page);

	?>

	<tr><td><table CELLPADDING="2" WIDTH="100%"	 CELLSPACING="0">

	 <TR> 

		 <TD COLSPAN="5"><b>Association Acronym : </b><?= $data['acronym']?></TD> 

	 </tr>

	 <TR> 

		 <TD COLSPAN="5"><b>Association Name : </b><?= $data['association'] ?></TD> 

	 </tr>

	<? if ($sql) {

			$result = $db->query($sql);

			if($db->num_rows($result)) {

				$i=1;

				while($row = $db->fetch_array($result))	{

					$bg="";

					if ($i%2) $bg="bgcolor=".$srch_altcolor;

					echo "<tr ".$bg.">";

					if (strlen($event_name) < 1 )

						 echo "<td>Not Named</td>";

					echo "<td  align=center>".date("F j, Y ",$row['input'])."</td>";

					echo "<td  align=center>".ucwords($row['title'])."</td>";

					echo "</tr>";			                

					$i++;

					if ($i == $total)   echo exit;

		   		}           

			}		

		}

		?>		

		</table>

	 </TD> 

 </tr>

 <?	$span->span_end($page);?>

 <TR> 

		 <TD align="center">

		  <a href="index.php">New Search</a>

		 </TD> 

 </tr>

</table>



<?

include $include_path . "lol_footer.inc";

?>