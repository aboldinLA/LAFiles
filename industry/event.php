<?

include "lol_common.inc";



include $include_path . "class/industry_class.inc";

include $include_path . "class/pagespan_class.inc";



$I = new industry_Class($db);



include $include_path . "lol_header.inc";



$data = $I->association_info($id);

?>





<TABLE ALIGN="center" CELLPADDING="5" WIDTH="100%"	 CELLSPACING="3" > 

	<tr><td class="cellhead" colspan=5><B>Association Events Search Results Page</B></FONT></td></tr><!-- mm r2 -->

	 <TR> 

		 <TD COLSPAN="5"><b>Association Acronym : </b><?echo $data['acronym'] ?></TD> 

	 </tr>

	 <TR> 

		 <TD COLSPAN="5"><b>Association Name : </b><?echo $data['association'] ?></TD> 

	 </tr>

 <? 

 // define some values



$PERPAGE = 5;

if(!isset($page))

{

$page = 0;

}

if(!isset($QUERY_STRING))

{

$QUERY_STRING = "";

}



// select the count for the number of records

$countresult=$db->query("SELECT COUNT(*) AS total FROM assoc_event WHERE assoc_id  = $id ");

if($countresult == 0)

	{

echo "<tr>";

echo "<td  COLSPAN=5>";

echo "<table align=center>";

echo "<tr>";

echo "<td><b>No News</B></td>";

echo "<td></td>";

echo "</table>";

echo "</td>";

echo "</tr>";

	}else{



$data=$db->fetch_array($countresult);



$total = $data['total'];





if ($page*$PERPAGE > $total) 

	$page=floor($total/$PERPAGE);





$eventlistsql="SELECT * FROM assoc_event WHERE assoc_id  = $id ORDER BY input";

	if ($total > $PERPAGE)

{

	$eventlistsql.=" LIMIT ".($page*$PERPAGE).", $PERPAGE";

	

	$span=new PageSpan;

	$span->amountofdata=$total;	 

	$span->perpage=$PERPAGE;

	$span->pagename="event.php";

	$span->querystring($QUERY_STRING);

	$span->tablewidth="90%";

	$span->prevtext="<< Previous page";

	$span->nexttext="Next page >>";







$value = ($PERPAGE*($page+1));

if ($value > $total)

{

   $value =  $total;

}

if ($value == 0)

{

   $value = 1;

}

$start = (($PERPAGE*$page)+1);



echo "<tr>";

echo "<td  COLSPAN=5>";

echo "<table align=center>";

echo "<tr>";

echo "<td><b>Displaying</B></td>";

echo "<td><b>".$start." - ".$value."&nbsp;of &nbsp;".$total." records</b></td>";

echo "</table>";

echo "</td>";

echo "</tr>";

echo "<tr>";

echo "<td COLSPAN=5>";



	$span->dospan($page);

	

}   



 



$result = $db->query($eventlistsql);



if($db->num_rows($result))

	{

			$i=1;

			while($row = $db->fetch_array($result))

			{

	           $bg="";

			   if ($i%2) 

				{

				 $bg="bgcolor=".$srch_altcolor;

				}	           

											

									echo "<tr ".$bg.">";

									echo "<td ".$bg." align=center>".ucwords($row['type_event'])."</td>";

								

									if (strlen($event_name) < 1 )

									{

									 

									}else{

										 echo "<td>Not Named</td>";

									}

		                        	echo "<td  align=center>".date("F j, Y ",$row['input'])."</td>";

									echo "<td  align=center>".ucwords($row['place'])."</td>";

									echo "<td  align=center>".ucwords($row['contact'])."</td>";

									echo "<td  align=center >".$row['fee']."</td>";

									echo "</tr>";			                

									$i++;

									if ($i == $total)

									{

									   echo exit;

									}

                		}

		                  

	}		

?>

	 </TD> 

 </tr>

 <TR> 

		 <TD COLSPAN="5">

		 <?if ($total > $PERPAGE)

				$span->dospan($page);?>

		 </TD> 

 </tr>

 <?}?>

 <TR> 

		 <TD COLSPAN="5" align="center">

		  <a href="accoc_find.php">New Search</a>

		 </TD> 

 </tr>

</table>

<? include $include_path . "lol_footer.inc"; ?>

	

