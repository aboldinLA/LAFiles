<form action="search.php" method="get" name="srch">

<input type=hidden name="adv" value=1>

<table cellspacing="0" cellpadding="0" >

							<TR>

								<TD colspan="2"><? if ($error) $C->errors($error); ?>

								<SPAN style="color:#cc3300; font-size:12px; font-weight: bold; text-decoration:underline;">

								Advanced Search</SPAN>

								</TD>

							</TR>

							<TR>

								<TD colspan="2" align="center"><? if ($error) $C->errors($error); ?></TD>

							</TR>

							<TR>

								<TD colspan="2"><strong>Search by:</strong></td>

							</tr>

							<tr>						

								<td width=5 align="right"><INPUT type="radio" name="lookup" value="article" <? if ($lookup == "author") {echo "checked";}?>checked></td>

								<td><B>Article Title</B></td>

							</tr>

							<tr>

								<!--<INPUT type="text" name="keywords" value="<?echo $lookup?>" size="25">-->						

								<td width=5 align="right"><INPUT type="radio" name="lookup" value="author" <? if ($lookup == "article") {echo "checked";}?>></td>

								<td><B>Author</B></td>

							</tr>

							<TR>

								<TD width=5 align="right"><INPUT type="radio" name="lookup" value="keywords"></td>

								<td><B>Keywords</B></TD>

							</TR>

							<!--

							<TR>

								<TD><B>Choose one only :</B><BR>							

									<INPUT type="radio" name="peram" value="and" title="Match on all words (Lanscape and Irrigation and Design)">And<BR>							

									<INPUT type="radio" name="peram" value="or" >Or - Match on any words (Lanscape or Irrigation or Design)<BR>							

									<INPUT type="radio" name="peram" value="match" >Exact - Match exact phrase (Lanscape Irrigation Design)<BR>

								</TD>

							</TR>	-->

							<TR>

								<TD colspan="2"><br><strong>Search:</strong> <INPUT type="text" name="terms" value="<?echo $title ?>" size="37"><br><br></td>

							</TR>

							<TR>

								<TD colspan="2" style="text-align: center;border-color: black; width:250px; padding:4px; background-color:<?=$srch_altcolor?>; border: 1px solid Black;">

										<TABLE cellpadding="0" cellspacing="0">

											<TR>

												<TD colspan="2"><B>Filter by Magazine Issue: (Optional)</B></TD>

											</TR>

											<TR>

												<TD><? 

														if ($type == "LASN") $sel1 = 'checked'; 

														if ($type == "LCM")  $sel2 = 'checked';

                                                        if ($type == "LSMP") $sel3 = 'checked';

													?>											

													<INPUT type='radio' name='filter' VALUE="LASN" <?=$sel1?>>

												</TD>

												<TD>	Landscape Architect and Specifier Magazine

												</TD>

											</TR>

											<TR>

												<TD>											

													<INPUT type='radio' name='filter' VALUE="LCN" <?=$sel2?>>

												</TD>

												<TD>	Landscape Contractor Magazine

												</TD>

											</TR>

											<TR>

												<TD>											

													<INPUT type='radio' name='filter' VALUE="LSMP" <?=$sel3?>>

												</TD>

												<TD>Landscape Superintendent &amp; Specifier News</TD>

											</TR>

											<TR>

												<TD>	&nbsp;

												</TD>

												<TD>

													<? date_dropdowns('month','','year',time(),1980,2008); ?>

													

												</TD>

											</TR>

											<TR>

												<TD colspan="2"><IMG src="/imgz/spacer.gif" width="4" height="2">

												</TD>

											</TR>

										</TABLE>

								</TD>

							</TR>

							<TR>

								<TD align="center" colspan="2">

								<br>				

									<INPUT type="submit" value="Search"><BR><BR>

								</TD>

							</TR>

						</table>

					</form>

