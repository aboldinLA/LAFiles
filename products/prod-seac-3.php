
<?
include("lo_top-main2-prod.inc");

	$keyword = str_replace(' ', '%', trim($_POST['keywrd'])); 

	if (!empty($keyword)){

	$keywordSE = $keyword;
		
	} else {
		
	$keywordSE = $_GET['keywordSE3'];
		
	}

?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-search.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
	
	
	
	
	
	
	
	<div style="position:relative; left: 10px; top: 0px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Product Keyword Search For: <? echo $keywordSE ?></h3></center><br>
                   
                   
	</div>					
			
			
			
	<div style="position:absolute; left: 560px; top:225px; z-index: 0">
		<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Enter Your Keyword<br>
		<span style="font-size: 12px">(Then click submit or return)</span></h3></center>
	</div>
			
				<div style="position:absolute; left: 535px; top:275px; z-index: 0">
						
						
						<form method="post" action="prod-seac-3.php">
						
							<center><label><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Enter Keyword for Search</span></label><br>
							<input type="text" name="keywrd" value="<? echo $keywordSE ?>" style="width: 250px; height: 20px; padding: 3px; box-shadow: 5px 5px 5px #888888" placeholder="Please enter Keyword"><br>
								<input type="submit" value="Submit" style="background-color: #4fb548; position: relative; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"></center>
							
						</form>
							
							
				<div id="featured" style="position: absolute; left: -220px; top: 75px">
					
				<div style="position: relative; left: -35px; top: 25px">
                   			
				<div style='width:750px; height:2px; background-color:#605b51;'> </div><br>
                   			
                   			
	
		
	
	
	
	
	
	
	<div style="position:relative; left: -15px; top: 0px; z-index: 0; width: 700px">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Results: Featured News and Articles</h3></center><br>
	<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Featured News and Articles<span style="font-size: 12px">(Below is a list of Articles that match your keyword)</span></h3></center>
			
				<div style="position:absolute; left: 40px; top:50px; z-index: 0">
								
								
   
									
						<?php
	
						$keywordSE2 = $keywordSE;
	
	
						// database connection info
						$conn = mysql_connect('localhost','landscap_lol','meow2meow') or trigger_error("SQL", E_USER_ERROR);
						$db = mysql_select_db('landscap_lollive',$conn) or trigger_error("SQL", E_USER_ERROR);

						// find out how many rows are in the table 
						$sql = "SELECT COUNT(*) FROM editorial WHERE (title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 . "%' OR keywords LIKE '%" . $keywordSE2 . "%') AND title NOT LIKE '%LO Weekly%' ";
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
						$r = mysql_fetch_row($result);
						$numrows = $r[0];

						// number of rows to show per page
						$rowsperpage = 20;
						// find out total pages
						$totalpages = ceil($numrows / $rowsperpage);
					   	// echo $totalpages . "<br>";

						// get the current page or set a default
						if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
						   // cast var as int
						   $currentpage = (int) $_GET['currentpage'];
						} else {
						   // default page num
						   $currentpage = 1;
						} // end if

						// if current page is greater than total pages...
						if ($currentpage > $totalpages) {
						   // set current page to last page
						   $currentpage = $totalpages;
						} // end if
						// if current page is less than first page...
						if ($currentpage < 1) {
						   // set current page to first page
						   $currentpage = 1;
						} // end if

						// the offset of the list, based on current page 
						$offset = ($currentpage - 1) * $rowsperpage;

						// get the info from the db 
						$sql = "SELECT * FROM editorial WHERE (title LIKE '%" . $keywordSE2 . "%' OR ed_text LIKE '%" . $keywordSE2 . "%' OR keywords LIKE '%" . $keywordSE2 . "%') AND title NOT LIKE '%LO Weekly%' ORDER BY id DESC LIMIT $offset, $rowsperpage";
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);

						// while there are rows to be fetched...
						while ($list = mysql_fetch_assoc($result)) {
							
									$searchvalue = implode('<span style="color:green;font-weight:800;">'.$keywordSE2.'</span>',explode($keywordSE2,$list['ed_text']));
							
			
														
							
						   // echo data
						   echo "<table>";
						   echo "<tr><td><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'><img style='max-height: 125px; max-width: 125px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/research/images/" . $list['id'] . ".jpg'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/research/article-a.php?number= " .  $list['id'] . "' target='_blank'>" . iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($list['title']))) . "</a></strong><br /><strong>Author:</strong> " .  $list['author'] . "<strong><br>Issue:</strong> " .  date('m-d-y', $list['issue']) . "</td></tr><br /><br />" ;
						} // end while
						   echo "<table><br><br><h4>View More News for: " . $keywordSE2 . "</h4>";

						/******  build the pagination links ******/
						// range of num links to show
						$range = 20;

						// if not on page 1, don't show back links
						if ($currentpage > 1) {
						   // show << link to go back to page 1
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
						   // get previous page num
						   $prevpage = $currentpage - 1;
						   // show < link to go back to 1 page
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
						} // end if 

						// loop to show links to range of pages around current page
						for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
						   // if it's a valid page number...
						   if (($x > 0) && ($x <= $totalpages)) {
							  // if we're on current page...
							  if ($x == $currentpage) {
								 // 'highlight' it but don't make a link
								 echo " [<b>$x</b>] ";
							  // if not current page...
							  } else {
								 // make it a link
								 echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=" . $x . "&keywordSE3=" . $keywordSE2 ."'>$x</a> ";
							  } // end else
						   } // end if 
						} // end for

						// if not on last page, show forward and last page links        
						if ($currentpage != $totalpages) {
						   // get next page
						   $nextpage = $currentpage + 1;
							// echo forward link for next page 
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=" . $nextpage . "&keywordSE3=" . $keywordSE2 ."'>></a> ";
						   // echo forward link for lastpage
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
						} // end if
						/****** end build pagination links ******/
						?>					
					
					
					
				</div>
				
				</div>
				
			
					
							
							
							
		
				
			
			</td>
			
			
			
		</tr>
	</table>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





