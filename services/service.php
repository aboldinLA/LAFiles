<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";

$M = new media_class($db);

$C = new common_class($db);



if($REQUEST_METHOD=="POST")

{ 

			$error = "";

			if(strlen($area_code) < 3)

				$error .= "- Please enter an Area Code<br>";

			if(strlen($biz_id) == null)

				$error .= "- Please enter Categories<br>";

			if(!strlen($error))

			  {

			    	$action = "view";

			  }	

 }

include $include_path . "main_top.inc";   

include $banner_include_path . "top_menu.inc";

?>

<TR valign="top"><td>

<? include $banner_include_path . "advertising_top.inc"; ?>

</td><TD VALIGN="top" WIDTH="75%" align="center">  

 

<?

if ($action == "view")

{

?>

<? 





$M->find_some($area_code,$biz_id,$conditions);

?>

<table align="center" width="75%" >

	<tr>

		<td align="center">

			<a href="index.php" >Back</a>

		</td>

	</tr>

</table>

</td>



<?}else{?>

<!---end view action--->

	

	

<form method="post" action="<?echo $PHP_SELF?>"> 

 <TABLE WIDTH="75%"> 

 <input type="hidden" name="actions"  value="<?echo $actions?>">

 <input type="hidden" name="serv"  value="<?echo $actions?>">



<?

if ($actions) echo "<TD COLSPAN=3 HEIGHT=27 class=\"cellhead\">"; 

if ($actions == "design")

{

       echo "Design Services / Consultants</TD>"; 

}

?> 

<?	if ($actions == "contractors")

	{

		echo "Installation and Maintenance Professionals</TD>"; 

	}

?>

<!--- end selection bar header--->

<!--- show selection first choise--->

<?

if ($actions == !"contractors" || $actions == !"design")

{

?> <TR> 

	 <TD COLSPAN="3" HEIGHT="27" class="cellhead">Find a Pro !

	</TD> 

  </TR> 

 <TR> 

		 <td align="center">Use LandscapeOnLine.com's Find-A-Pro Services Search to find development and Maintenance professionals across the United States and Canada!<br><br></td>

 </tr>

  <TR> 

		 <td align="center"></td>

 </tr>

  <tr>

         <td>From Architecture to Park and Recreation . . .<br><br>

			 From Pool Design to Tree Relocation . . .<br><br>

			 From Hotel Design to Irrigation Repair . . .<br><br>

         </td>

 </tr>

  <tr>

         <td>Choose from either Design Professionals or Contractors and Maintance Professionals and then go and <br><br><br>

              Find-A-Pro!



		 </td> 

  <TR> 

		  <td ALIGN="CENTER">

<TABLE WIDTH="100%">

	<TR>

		<TD nowrap align=left>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="RADIO"  name="serv" value="Design Services" ONCLICK="location.href='index.php?actions=design'">

			<b>Design Services</b><br>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#151;<B>or</B>&#151;<br> 

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="RADIO"  name="serv" value="Contractors"  ONCLICK="location.href='index.php?actions=contractors'">

			<b>Installation and Consultants 

			Maintenance Professionals</b>

	 	</td>

   </tr>

</TABLE>

</TD>

</TR>

<?}?>



<?

if ($actions == "design") 

{

?>

   <TR>

		<TD COLSPAN="3" ALIGN="CENTER">

		<table>

			<TR>

				<TD align="center">Use LandscapeOnline.com's Find-a-Pro Search to locate Landscape Architects and Commercial Design 			Professionals in any telephone area code across the United States and Canada.

				</td>

            </TR>

			<TR>

				<td align="center"><b>Select Your Desired Area Code Here:</b><INPUT TYPE="TEXT" NAME="area_code" VALUE="<?echo $area_code?>" SIZE="5" MAXLENGTH="3">

				</td>

            </TR>

			<TR>

				<td align="center">Now . . . to "Find a Pro" who can meet your needs more precisely . . .

				</td>

             </TR>

			 <TR>

				<td align="center">Select specialties from the list below to further define your search.<br>

				</td>

             </TR>

			 <TR>

				<td align="center">	<FONT SIZE="-1">Then use the "And" selection criteria to narrow your search results or the "Or" selection 	criteria to broaden the results of your search.</FONT>

				</TD>

	</TR>

	</table>

		</TD>

	</TR> 

	<tr>

		<TD COLSPAN="3" align="center" >

				<?

				if ($error)

					{

						 $C->errors($error);

					}

				?>

		</TD>

	</tr>

	<tr>

		<TD COLSPAN="3" ><b>Design Services / Consultants</b>:</td>

	</TR>

<!--- if no array stop errors --->



<?

	if (!is_array($biz_id))

	{

		$biz_id[] = "";

	}

?>

		<td COLSPAN="3"><table><tr><td><? $M->types($biz_id,$actions,10) ?></td></tr></table>

			

		</TD>

	</tr>

	<TR> 

		<TD  align="right" valign="top"><INPUT TYPE="RADIO" NAME="conditions" VALUE="1">

		</td>

		 <td nowrap COLSPAN="2"><B>And</B> (select only if each and every term matches)<BR>Small number of matches</FONT>

		 </td> 

	</TR> 

	<TR> 

		<TD align="right" valign="top"><INPUT TYPE="RADIO" checked NAME="conditions" VALUE="2">

		</td> 

		<td nowrap COLSPAN="2"><B>Or</B> (select if any one term  matches)<BR>Large number of matches</FONT>

		</TD> 

	</TR> 

	<tr>

		<td  colspan="3" align="center">

			<INPUT NAME="Search" TYPE="SUBMIT" VALUE="Search">&nbsp&nbsp

		</td>

	</tr>

<?}?>



<!--- end design --->

<?

if ($actions == "contractors") 

{

?>

	<TR>

		<TD COLSPAN="3" ALIGN="CENTER">

		<table>

			<TR>

				<TD align="center">Use LandscapeOnline.com's Find-a-Pro Search to locate Landscape Contractors as well as other Installation and Maintenance Professionals, in any telephone area code across the United States and Canada.

				</td>

            </TR>

			<TR>

				<td align="center"><b>Select Your Desired Area Code Here:</b><INPUT TYPE="TEXT" NAME="area_code" VALUE="<?echo $area_code?>" SIZE="5" MAXLENGTH="3">

				</td>

            </TR>

			<TR>

				<td align="center">Now . . . to "Find a Pro" who can meet your needs more precisely . . .

				</td>

             </TR>

			 <TR>

				<td align="center">Select specialties from the list below to further define your search.<br>

				</td>

             </TR>

			 <TR>

				<td align="center">	<FONT SIZE="-1">Then use the "And" selection criteria to narrow your search results or the "Or" selection 	criteria to broaden the results of your search.</FONT>

				</TD>

	</TR>

	</table>

		</TD>

	</TR> 

	<tr>

		<TD COLSPAN="3" align="center" >

				<?

				if ($error)

					{

						 $C->errors($error);

					}

				?>

		</TD>

	<tr>

	 	<TD COLSPAN="3" ><b>Installation and Maintenance Professionals</b>:</td>

     </tr>

	<tr>

 <?

	if (!is_array($biz_id))

	   {

             $biz_id[] = "";

	   }

?>

		<td COLSPAN="3"><table><tr><td><? $M->types($biz_id,$actions,10) ?></td></tr></table></TD>

	</TR> 

	<TR> 

		<TD  align="right" valign="top"><INPUT TYPE="RADIO" NAME="conditions" VALUE="1">

		</td>

		 <td nowrap COLSPAN="2"><B>And</B> (select only if each and every term matches)<BR>Small number of matches</FONT>

		 </td> 

	</TR> 

	 <TR> 

		<TD align="right" valign="top"><INPUT TYPE="RADIO" checked NAME="conditions" VALUE="2">

		</td> 

		<td nowrap COLSPAN="2"><B>Or</B> (select if any one term  matches)<BR>Large number of matches</FONT>

		</TD> 

	</TR> 

	<tr>

		<td  colspan="3" align="center">

			<INPUT NAME="Search" TYPE="SUBMIT" VALUE="Search">&nbsp&nbsp

		</td>

	</tr>

	

<?}?>



</table>

		</td>

</FORM>	

 <?}?>



</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>