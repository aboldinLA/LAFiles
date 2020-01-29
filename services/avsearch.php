<?

include "lol_common.inc";

include $include_path . "class/media_class.inc";

$M = new media_class($db);



if($action=="search"){ 

	$error = "";

	if(!strlen($error)) {

		$secthdr="Search Results:";

		include $include_path . "lol_header.inc";

		$M->find_some($area_code,$biz_id,$conditions,$protype);

?>

 <table width="100%" cellspacing="0" cellpadding="0"> 

	<tr>

		<td align="center">

<br><br>

			<a href="javascript:history.back();" >Back</a>

		</td>

	</tr>

</table>



<?

	}

} else {

	

	if ($pro == "d") {

	    $secthdr="\"Find A Pro\" Design Professional or Consultant"; 

		$desc1="Landscape Architects and Commercial Design Professionals";

		$desc2="Design Services / Consultants";

	}else if ($pro == "c")	{

		$secthdr="\"Find A Pro\" Installation Contractor and Maintenance Professional"; 

		$desc1="Landscape Contractors as well as other Installation and Maintenance Professionals";

		$desc2="Installation and Maintenance Professionals";

	} else {

		$secthdr="Welcome to LandscapeOnline's Nationwide \"Find A Pro\" Database!";

	}

	include $include_path . "lol_header.inc";

	

	if (!$pro) {

?> 

  <table width="100%" cellspacing="0" cellpadding="0"> 

 <TR> 

	<td>

		<table width="100%" cellspacing="3" cellpadding="0"> 

 			<tr>

				 <td COLSPAN="2"><br>Use LandscapeOnLine.com's Find-A-Pro Services Search to find Landscape

Design, Installation and Maintenance professionals across the United States

and Canada!<br>

<br>





<strong>Choose from either Design Professionals and Consultants or Installation

Contractors and Maintenance Professionals.</strong></td></tr>

  <tr>

         <td COLSPAN="2"><hr></td>

 </tr>

  <tr>

         <td COLSPAN="2"><strong>Design Professionals and Consultants</strong><br>

		 </td> 

 </tr>

  <tr>

		 <td><img src="/imgz/services_design.jpg"></td>

		 <td><font size="+1" color="#FF6900">»</font>

			<a href="<?=$_SERVER['PHP_SELF'] ?>?pro=d" class=infolink>Click Here</a> to locate Landscape Architects, Designers or Consultants in

any telephone area code across the United States and Canada.

			<br><br>

		 </td>

  </TR> 

  <tr><td COLSPAN="2"><hr></td></tr>

    <tr>

         <td COLSPAN="2"><strong>Installation Contractors and Maintenance Professionals</strong><br>

		 </td> 

 </tr>

  <tr>

		 <td><img src="/imgz/services_contractor.jpg"></td>

		 <td><font size="+1" color="#008000">»</font>

			<a href="<?=$_SERVER['PHP_SELF'] ?>?pro=c" class=infolink>Click Here</a> to locate Landscape Contractors, Landscape Maintenance

Companies, Pool Contractors, Hydroseeders or other Installation and Maintenance Contractors throughout North America!

			<br><br>

		 </td>

  </TR> 

  <tr><td COLSPAN="2"><hr></td></tr>

  

  </table></td></tr>



<?

} else {



?>	

	

<form method="get" action="<?echo $PHP_SELF?>" name="sform"> 

 <table width="100%" cellspacing="0" cellpadding="0"> 

 <input type="hidden" name="protype"  value="<?echo $pro?>">

 <input type="hidden" name="serv"  value="<?echo $pro?>">

 <input type="hidden" name="action"  value="search">



   <TR>

		<TD COLSPAN="3" ALIGN="CENTER">

		<table>

			<TR>

				<TD>With LandscapeOnline's "Find A Pro" nationwide database of Landscape

Professionals you can locate the perfect "Pro" for your project, by

telephone area code, anywhere in North America . . .</td>

            </TR>

			<TR>

				<td>

				



<strong>Step 1</strong>: Type the Area Code or two letter state code for your search here:

			<INPUT TYPE="TEXT" NAME="area_code" VALUE="<?echo $area_code?>" SIZE="5" MAXLENGTH="3">

				</td>

            </TR>



			 <TR>

				<td ><strong>Step 2</strong>:  Select from the following "Specialties" to find the perfect match

for your project.

<br>

				</td>

             </TR>



	</table>

		</TD>

	</TR> 

	<tr>

		<TD COLSPAN="3" align="center" >

				<?

				if ($error)	 $C->errors($error);

				?>

		</TD>

	</tr>



<!--- if no array stop errors --->

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

				 <TD COLSPAN="3"><span id="chkall" onclick="checkall(document.sform)" style="text-decoration:underline;cursor:hand;">Check All</span>

</TD>

			  </TR> 

<?

	if (!is_array($biz_id))	$biz_id[] = "";

?>

		<td COLSPAN="3"><table><tr><td><? $M->types($biz_id,$pro,10) ?></td></tr></table>

			

		</TD>

	</tr>

	<TR>

				<td colspan="3">	<strong>Step 3</strong>: Use the "And" selection criteria to narrow your search results or

the "Or" selection criteria to broaden the results of your search.

				</TD>

	</TR>

	<TR> 

		<TD valign="top" align="right"><INPUT TYPE="RADIO" NAME="conditions" VALUE="1"></td>

		 <td nowrap COLSPAN="2"><B>And</B> (select only if each and every term matches)<BR>

		 Small number of matches</FONT>

		 </td> 

	</TR> 

	<TR> 

		<TD valign="top" align="right" ><INPUT TYPE="RADIO" checked NAME="conditions" VALUE="2"></td> 

		<td nowrap COLSPAN="2"><B>Or</B> (select if any one term  matches)<BR>

		Large number of matches</FONT>

		</TD> 

	</TR> 

	<tr>

		<td  colspan="3" align="center">

			<INPUT NAME="Search" TYPE="SUBMIT" VALUE="Search">&nbsp&nbsp

		</td>

	</tr>

<?}?>





</table>

		

</FORM>	

<? } include $include_path . "lol_footer.inc"; ?>

