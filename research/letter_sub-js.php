<?
include "lol_common.inc";

include $include_path . "class/research_class.inc";

$R = new research_class($db); 

if($REQUEST_METHOD=="POST") 	{
	$error = "";
	if(strlen($first_name) < 2)	$error .= "- Please enter your First Name<br>";
	if(strlen($last_name) < 2) $error .= "- Please enter your Last Name<br>";
	if(strlen($email) < 2) $error .= "- Please enter your E-mail<br>";
	if(strlen($city) < 2) $error .= "- Please enter your City<br>";
	if(strlen($state) < 1) $error .= "- Please enter your State<br>";
	if(strlen($zip) < 5) $error .= "- Please enter your Zip code<br>";
	if(!strlen($error)){		
		$input = strtotime($month." ".$year);
		$sub_id=$R->input_letter($id, $first_name, $last_name,$email,$city,$state,$zip,$company,$title,$area_code,$phone,$response,$input,$title_text,trim($comment),$uid);
		header("location: sub_ty.php?sub_id=$sub_id&sub_type=ls");
	}	
}
if ($id) {
	$data = $R->editorial_view($id, 0);
}
$secthdr="Letters and Commentary Submission Page";
include $include_path . "lol_header2-js.inc";
?>
			<FORM method="post" action="<?echo $PHP_SELF?>">				
				<INPUT type="hidden" name="action" value="<?echo $action?>">
				<? if($id) { ?>
					<INPUT type="hidden" name="id" value="<?echo $id?>">
				<? } ?>
				<TABLE align="center" width="87%">
				
					<TR>
						<TD colspan="3"><I>Thank you for taking the time to express your comments
						and concerns to LandscapeOnline.com (LOL).
						<br><br>
						Your comments are valuable to both LOL and to those who use LandscapeOnline.com
						to gain information and	insight into landscape development issues.  Your comments will be linked to the article listed below only, and after verification/approval, will be viewable by all LandscapeOnLine.com users.
						<br><br>
						We consider your privacy as critical to your expressing your view so any
						other personal information you submit will not appear in this Web site
						nor will it be used for any reason other than content verification.
						<br><br>
						Landscape Communications reserves the right to edit submitted letters
						for length, grammar and spelling. All letters are subject to verification
						before being published.</I>
						</TD>
					</TR>
					<TR>
						<TD colspan="3" align="center">	Fields in
		             <FONT color="#ff0000">red</B></FONT> are required
						</TD>
					</TR>
					<TR>
						<TD align="center" colspan="3"><? if ($error) $C->errors($error); ?>
						</TD>
					</TR>
					<TR>
						<TD align="RIGHT" valign="TOP"><FONT color="#ff0000"><B>Name :</B></FONT>
						</TD>
						<TD>
						</TD>
						<TD valign="TOP">							
							<INPUT type="text" name="first_name" value="<?echo ucwords($first_name)?>"  >							
							<INPUT type="text" name="last_name" value="<?echo ucwords($last_name)?>" >
						</TD>
					</TR>
					<TR>
						<TD align="RIGHT" valign="TOP"><FONT color="#ff0000"><B>E-mail:</B></FONT>
						</TD>
						<TD>
						</TD>
						<TD valign="TOP">							
							<INPUT TYPE="TEXT"	NAME="email" SIZE="25" VALUE="<?echo $email?>"  >
						</TD>
					</TR><? $C->pro_state($city,$state,$zip) ?>
					<TR>
						<TD align="RIGHT" valign="TOP"><B>Company:</B></FONT>
						</TD>
						<TD>
						</TD>
						<TD valign="TOP">							
							<INPUT type="text" name="company" value="<?echo ucwords($company)?>"  >
						</TD>
					</TR>
					<TR>
						<TD align="RIGHT" valign="TOP"><B>Job Title:</B></FONT>
						</TD>
						<TD>
						</TD>
						<TD valign="TOP">							
							<INPUT type="text" name="title" value="<?echo ucwords($title)?>"  >
						</TD>
					</TR>
					<TR>
						<TD align="right" valign="TOP"><B>Daytime Phone</B>:
						</TD>
						<TD>
						</TD>
						<TD>							
							<INPUT NAME="area_code" SIZE="3" VALUE="<?echo $area_code?>" MAXLENGTH="3"  >							
							<INPUT NAME="phone" SIZE="15" VALUE="<?echo $phone?>" MAXLENGTH="8"  >
						</TD>
					</TR>
					<TR>
						<TD align="right" valign="TOP"><B>Letter is in response to</B>:
						</TD>
						<TD>
						</TD>
						<TD>							
							<INPUT  type="radio" name="response" value="general" <? if($response == "general") echo("checked"); ?>>General Comment<BR>
							<INPUT  type="radio" name="response" value="correction" <? if($response == "correction") echo("checked"); ?>>
							A Correction or Comment to a Specific ARTICLE<BR>
						</TD>
					</TR>
					<TR>
						<TD valign="TOP" colspan="3"><B>To Respond to a Specific ARTICLE:</B>						</TD>
				  </TR>
					<? if ($id) { ?>
					<TR>
						<TD valign="TOP" align="right" ><B>Title:</B>
						</TD>
					<td>
					</td>
						<TD valign="TOP">							
							<?echo ucwords($data['title'])?>
							<INPUT type="hidden" NAME="title_text" size="70" value="<?echo $data['title']?>"   >
						</TD>
					</TR>
					<TR>
						<TD valign="TOP" align="right" ><B>Author:</B>
						</TD>
					<td>
					</td>
						<TD valign="TOP">							
							<?echo ucwords($data['author'])?>
						</TD>
					</TR>
					
					<? } else { ?>
					<TR>
						<TD valign="TOP" colspan="3">	Please provide the following information:
						</TD>
					</TR>
					<TR>
						<TD valign="TOP" align="right"><B>Year of issue :</B>
						</TD>
						<TD>
						</TD>
						<TD>							
							<INPUT  type="text" name="year" value="<?echo $year?>"  >
						</TD>
					</TR>
					<TR>
						<TD valign="TOP" align="right"><B>Month of issue :</B>
						</TD>
						<TD>
						</TD>
						<TD>
							<SELECT name="month" size="1"  ><?if (strlen($month)== 0 )
					{
					  echo "<OPTION VALUE=".$month.">Enter Month</OPTION>";
					}else{?>
								<OPTION value="<?echo $month?>"><?echo $month?></OPTION><?}?>
								<OPTION value="January">January</OPTION>
								<OPTION value="February">February</OPTION>
								<OPTION value="March">March</OPTION>
								<OPTION value="April">April</OPTION>
								<OPTION value="May">May</OPTION>
								<OPTION value="June">June</OPTION>
								<OPTION value="July">July</OPTION>
								<OPTION value="August">August</OPTION>
								<OPTION value="September">September</OPTION>
								<OPTION value="October">October</OPTION>
								<OPTION value="November">November</OPTION>
								<OPTION value="December">December</OPTION>
							</SELECT>
						</TD>
					</TR>
					<TR>
						<TD valign="TOP" colspan="3"><B>Please provide the title and/or the article number below :</B>						</TD>
				  </TR>
					<TR>
						<TD valign="TOP" colspan="3">							
							<INPUT type="text" NAME="title_text" size="70" value="<?echo $title_text?>"   >
						</TD>
					</TR>
					<? } ?>
					<TR>
						<TD valign="TOP" colspan="3"><B>General Comment :</B>
						</TD>
					</TR>
					<TR>
						<TD valign="TOP" colspan="3">
							<TEXTAREA name="comment" rows="9" cols="70" wrap="VIRTUAL" value="<?echo $comment ?>"  ><?echo $comment?></TEXTAREA>
						</TD>
					</TR>
					<TR>
						<TD align="center">							
							<INPUT TYPE="SUBMIT"  NAME="SUBMIT"  VALUE="Submit"  >
						</TD>
						<TD align="center">
						</TD>
						<TD align="center">							
							<INPUT TYPE="SUBMIT"  NAME="SUBMIT"  VALUE="Choose a different topic"  >
						</TD>
					</TR>
				</TABLE>
			</FORM>
<? include $include_path . "lol_footer-js.inc"; ?>
	
