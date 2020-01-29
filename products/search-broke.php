<?

$requiredClasses[] = 'base/vendor_listing.php';



include "lol_common.inc";

//include $include_path . "class/vendor_class.inc";

//$V = new vendor_class($db);

$vl = new vendor();





if($action=="search")	{

	$error = "";

	//if(strlen($find) < 2 )							$error .= "- Please enter a Subcategory <br>";

	if($check == "State" &&  strlen($state)<2 )		$error .= "- Please enter a State<br>";   

	if($check == "AreaCode" &&  strlen($numb) < 3 )		$error .= "- Please enter an area code<br>";  

	

	if(!strlen($error)) {  

		$action = 'look';

	}

}

$secthdr="Product Search";

include $include_path . "lol_header.inc";

if ($action == 'look') {



	if ($vst) $lim = $vl->vendor_type_name($vst);

	if ($find) $finds = implode(",",$find);

	else $finds = "";

	$cat = $vl->xlist_names($next);

?>

  <TABLE WIDTH="95%" cellpadding="0" cellspacing="0"> 



	 <TR>

		<TD>

<TABLE cellpadding="0" width="100%"> 	

	<TR>

		  <TD ALIGN="LEFT"><B>You requested the	following:</B>

		  </td>

	</tr>

	<tr>

		<td>Search by <b><? 

		if($check == "AreaCode") echo "Area Code: " . $numb; 

		else echo $check;

		if ($check == 'State') echo ": " . $state; ?></b><br>

		         Search refined to: <b><? echo $lim ?></B><br>

				 Category: <b><?echo $cat ;?></B><br>

				 <table cellpadding="0" cellspacing="0" width="100%">

				 	<tr>

						<td valign=top>

							Subcategor<?=((count($find)>1) ?"ies" : "y")?>:&nbsp;&nbsp; 

						</td>

					</tr>

					<tr>

						<td><table cellpadding="0" cellspacing="0" width="100%"><tr><td><? 

							if ($find) {

								$c=0;

								$ot=(count($find)/3);

								$i=0; 

								foreach ($find as $finds) { 

				 					if ($i != 0) echo "<br>"; 

									if ($i%(int)$ot==0 && $c < 3) {

										echo "</td><td>&nbsp; &nbsp; <td valign=top >";

										$c++;

									}

									echo "<b>" . $vl->xlist_names($finds); 

									$i++;

								}

							}

							?>

							</td></tr></table>

						<hr></td>

					</tr>

				</table> 

		</td>     

	</tr>

	<TR> 

		<td align="center"> 

			 <table cellpadding="5">

			 <?

			if ($check == 'National')

				$vl->find_listings($check,"",$vst,$find,$cat_id,$state=False,$numb=false); 

				

			if ($check == 'AreaCode')

				$vl->find_listings($check,"",$vst,$find,$cat_id,$state=false ,$numb);

			

			if ($check == 'State')

				$vl->find_listings($check,"",$vst,$find,$cat_id,$state,$numb=false);

			?>

			 </table>

			 <br><br><br>

				Vendor codes: M = Manufacturer, E = Exclusive Importer,

R = Manufacturers Representative,  W = Wholesale Facility, T = Retail

Facility, G = Grower, O = Other.<br>

				<br><br><br>

		</td>

	</TR> 

	<TR> 

		<TD NOWRAP="NOWRAP" VALIGN="TOP" COLSPAN="5" ALIGN="CENTER"> 

				<a href="index.php">New Search</a>

				

		</TD> 

	</TR> 

</TABLE>

		</td>

	</tr>

</table>

</FORM> 

<? } include $include_path . "lol_footer.inc"; ?>

	

