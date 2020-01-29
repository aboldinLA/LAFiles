<?
$requiredClasses[] = 'base/vendor_listing.php';
include "lol_common.inc";
//include $include_path . "class/banner_class.inc";
//include $include_path . "class/vendor_class.inc";

$vl = new vendor();
//$V = new vendor_class($db);
//$B = new banner_class($db);
$secthdr="Product Search";

if($next) {
    $_SESSION['banner_product'] = $next;
} else {
    unset($_SESSION['banner_product']);
}



include $include_path . "lol_header.inc";
?>

<form method="get" action="search.php" name="sform"> 
<input type=hidden name="action" value="search">
  <TABLE WIDTH="100%" cellpadding="0" cellspacing="0"> 
	
				<tr>
					<td> 
						<font color="red"><?echo $error?></font>
						LandscapeOnline has the largest product and plant material database on the
web. Please begin your search with Step 1 below:
						<BR>
						<hr>
						<strong>Step 1</strong><br>
						<strong>Select Category:</strong>
					</td>
				</tr>			 
				<TR> 
					<TD VALIGN="TOP" NOWRAP="NOWRAP">
						<select name="next" onChange="window.location='<?=$PHP_SELF?>?next='+this.value;">
						<option value="">Please choose a category</option>
			             <? $vl->vendor_xlist_cate_find($next) ;?>
						 </select>
					</TD> 
				</TR>
				<TR>
					<TD>
						<hr>
					</TD>
				</TR>
                <? if(is_numeric($next)) { ?>
				<TR>
					<TD VALIGN="BOTTOM">
						<strong>Step 2</strong><br>
                        <table border="0" width="100%">
                        <tr>
                            <td width="50%">
                                <strong>You can choose one of the following:</strong><br>
					   	        <?   $vl->vendor_type($vst, $next) ?>
                            </td>
                            <td width="50%" valign="top">
						        <strong>You can choose where you want to search:</strong><br>
						        <INPUT TYPE="RADIO" NAME="check" VALUE="National" CHECKED="CHECKED"> Across the Nation<br>
						        <INPUT TYPE="RADIO" NAME="check" VALUE="State"> In the State of <?=$C->select_state($state);?><br>
						        <INPUT TYPE="RADIO" NAME="check" VALUE="AreaCode"> In the Area Code of <INPUT TYPE="TEXT" NAME="numb" SIZE="4">
                            </td>
                        </tr>
                        </table>
					</TD>
				</TR>
			  <TR>
				 <TD>
				 	<hr>
					<strong>Step 3</strong><br>
					<strong>Subcategory Search:</strong> : (Choose more than one category to broaden your search.)
<br>
					</TD>
			  </TR>
			  <TR><script>
			  	function checkall(f) {
					if (document.sfchecked) {
						tocheck = false;
						document.sfchecked = false;
						document.getElementById('chkall').innerHTML="Check All";
					} else {
						tocheck = true;
						document.sfchecked = true;
						document.getElementById('chkall').innerHTML="Uncheck All";
					}
			  		for(i=0;i<f.elements.length;i++){
      if(f.elements[i].type=="checkbox"){
        
			f.elements[i].checked = tocheck;
		
	  }
    } }
</script>
				 <TD> <? if ($next) { ?>
				 <span id="chkall" onclick="checkall(document.sform)" style="text-decoration:underline;cursor:hand;">Check All</span><br>
				 <?
				 		$vl->search_list($next); 
				 	} else { ?> 
				 Please choose a category in Step 1 to see Subcategories. <? } ?></TD>
			  </TR> 
                <? } ?>
			   <tr>
					<td>
					<br>
					<INPUT NAME="Search" TYPE="submit" VALUE="Search">
					</form>
					</TD> 
			  </TR>	
			</TABLE>

<? include $include_path . "lol_footer.inc"; ?>
