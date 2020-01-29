<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/research_class.inc";





$R = new research_class($db); 

$C = new Common_Class($db);



if($REQUEST_METHOD=="POST")

{

	

    $error = "";





    if(strlen($lookup) < 2)

	$error.="You must enter Search by  ";

		

	  if(!strlen($error))

	  {   

		      

			  if ($lookup == "author")

				  {

		             header("location:search.php?author=".$art);			

				  }

			  if ($lookup == "article")

				  {

		            

					 header("location:search.php?article=".$title);	

				  

				  }

			 if ($lookup == "magazine")

				  {

					

                       

						

						 

				  }





	  }//end error



 }// end post



include $include_path . "main_top.inc";

include $banner_include_path . "top_menu.inc";

?>

<TR valign="top"><td>

<? include $banner_include_path . "advertising_top.inc"; ?>

</td><TD VALIGN="top" WIDTH="75%" align="center">  



<form method="post" action="<?echo $PHP_SELF?>">

<TABLE ALIGN="center" WIDTH="85%"  cellpadding="6"> 

	<TR> 

		<TD COLSPAN="3" HEIGHT="27"  BACKGROUND="../imgz/head_mid_up_txt.gif">

			<FONT COLOR="#FFFFFF" SIZE="3" FACE="Arial, Helvetica, sans-serif">

			<STRONG>Advanced Search Page</STRONG></FONT>

		</TD> 

	</TR> 

	<tr>

		<td  COLSPAN="3">

				<?

				if ($error)

				{

					 $C->errors($error);

				}

				?>

		</td>

	</tr>

	<tr>

		<td COLSPAN="3"><input type="radio" name="lookup" value="author" <? if ($lookup == "author") {echo "checked";

		}?> checked>

		<b>Search by Author :</b>

			<input type="text" name="art" value="<? if ($art) echo $art; else echo "matt"  ?>" size="45">

		</td>

    </TR> 

	<tr>

		<td COLSPAN="3"><input type="radio" name="lookup" value="article" <? if ($lookup == "article") {echo "checked";

		}?>><b>Search by Article/Column Title</b>

			<input type="text" name="title" value="<?echo $title ?>" size="45">

		</td>

    </TR> 

 

		<tr>

		<td  COLSPAN="3"><b>Choose one only :</b><br>

			<input type="radio" name="peram" value="and" title="Match on all words (Lanscape and Irrigation and Design)"> And <br>

			<input type="radio" name="peram" value="or" > Or - Match on any words (Lanscape or Irrigation or Design)<br>

			<input type="radio" name="peram" value="match" > Exact - Match exact phrase (Lanscape Irrigation Design)<br>

        </td>

	</tr>	<tr>

		<td COLSPAN="3"><input type="radio" name="lookup" value="magazine" <? if ($lookup == "magazine") {echo "checked";

		}?>><b>Search by Magazine</b> 

		</td>

    </TR>

	<tr>

		<td><SELECT NAME="type" SIZE="1">

			<?if (strlen($type)== 0 )

			{?>

			   <OPTION VALUE="<? echo $type?>">Select</OPTION> 

			<?}else{?>

				  <OPTION VALUE="<? echo $type?>"><? echo $type?></OPTION> 

             <?}?>				  

				  <OPTION VALUE="LASN">LASN</OPTION> 

				  <OPTION VALUE="LCM">LCM</OPTION> 

				</SELECT>

    	</td>

		<TD><SELECT NAME="month" SIZE="1"> 

					<?if (strlen($month)== 0)

					{?>

					  <OPTION VALUE="<? echo $month ?>">Enter Month</OPTION>

					<?}else{?>

					<OPTION VALUE="<?echo $month?>"><? echo $month ?></OPTION> 

					<?}?>

						<OPTION VALUE="January">January</OPTION> 

						<OPTION VALUE="February">February</OPTION> 

						<OPTION VALUE="March">March</OPTION> 

						<OPTION VALUE="April">April</OPTION> 

						<OPTION VALUE="May">May</OPTION> 

						<OPTION VALUE="June">June</OPTION> 

						<OPTION VALUE="July">July</OPTION> 

						<OPTION VALUE="August">August</OPTION> 

						<OPTION VALUE="September">September</OPTION> 

						<OPTION VALUE="October">October</OPTION> 

						<OPTION VALUE="November">November</OPTION> 

						<OPTION VALUE="December">December</OPTION> 

						</SELECT>

		</TD> 

		<TD><SELECT NAME="year" SIZE="1" > 

					<?if (strlen($year)== 0 )

					{

					  echo "<OPTION VALUE=".$year.">Enter Year</OPTION>";

					}else{?>

					<OPTION VALUE="<?echo $year?>"><?echo $year?></OPTION> 

					<?}?>

						<OPTION VALUE="1985">1985</OPTION> 

						<OPTION VALUE="1986">1986</OPTION> 

						<OPTION VALUE="1987">1987</OPTION> 

						</SELECT>

		</TD> 

   </tr>

   <tr>

		<td align="center" COLSPAN="3">

			<input type="submit" name="submit" value="Find it !">

        </td>

		</tr>

   <tr>

		<td COLSPAN="3" HEIGHT="10" BACKGROUND="../imgz/head_mid_up_txt.gif">

		</td>

    </TR>

</table>

</form>

</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>