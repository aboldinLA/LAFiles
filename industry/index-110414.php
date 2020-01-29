<?
include "lol_common.inc";
include $include_path . "class/industry_class.inc";

$I = new industry_Class($db);

// SEARCH LOGIC

if($action == "search") {
    $error = "";

	if(strlen($search) < 2)	$error .= "- Please enter a search choice<br>";

	if ($search == "acronym") { 
		if(!is_numeric($acro))  $error.="You must enter one acronym";
	}	 

	if ($search == "name") {
		if (strlen($association) == 0 || $association == "Enter Name") 
          $error.="You must enter a name";
	}	 
    
	if ($search == "membership") { 
		   if(!is_numeric($members))
		    $error.="- Can't Happen - You must enter membership category";
	}	   

    if ($search == "national") {
        $first = "local = 'national' ";
        $local = "National";
        $area  = "";
    }

    if ($search == "state") {
        if(strlen($state) < 2)
            $error .= "Please pick a valid state.<br>";

        $first = "state = '" . $state . "' ";
        $local = "State";
        $area  = "$state";
    }

    if ($search == "city") {
        $first = "local <> 'state' AND local <> 'national' ";
        $local = "City";
    }

    if ($search == "all") {
        $first = "1 = 1 ";
    }

    if(!strlen($error)) {
        if ($search == "acronym") {
            $last = "id = '".$acro."'"; 
            $cat ="";
        } else if ($search == "name") {
            $last = "association LIKE  '%".$association."%'";
            $cat ="";
        } else {
            // members search
            if(is_array($members)) {
                // do some comma expansion
                $members = explode(",", implode(',',$members));
                $outlist = array();
                foreach($members as $id => $value) {
                    $outlist[] = "subtype_id like '%" . $value  . "%'";
                }
                    $last = "( " . implode(" OR ", $outlist) . " ) AND";
            }
            /*
		        if ($search == "membership") 
			    {$last = "subtype_id like '%".$members."%'";
		        $cat = $members;}	   
            */

        }
		$action = "view";
    }//end error
}// end post

// DEFAULT HEADER

include $include_path . "lol_header2.inc";

// WHY THE FORM HERE?

?>

<!--<a href="https://landscapearchitect.com/research/LASN-Expo/index-LAX-2013.php"><img src="/imgz2/position-1.gif" width="500" /></a><br /><br />-->

<span style="font-size:32px; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" width="295" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />
	<span style="font-size:32px; font-weight:bold"><center>Association Search Center</center></span><br>

<div id='pageBody'>
<p><font size="3">To find contact information for an association, simply enter the association acronym, or association name and click the search button.</font></p>
<table border="0" ALIGN="center" CELLPADDING="0" WIDTH="100%" CELLSPACING="0" > 
	<tr><td>
			<table border="0" ALIGN="center"  WIDTH="100%"  CELLPADDING="0" CELLSPACING="0" >
<? 
    // THIS IS THE SEARCH RESULTS

    if ($action == "view") { ?> 
				<tr>
					<td align="left" >
						Search Results:<hr>
					</td>
				</tr>
				<tr>
					<td>
						<table width=100%>
							<? $I->find_ass($local,$area,$cat,$first,$last); ?>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" ><br>
						<a href="index.php">Change Search</a><br>
						<a href="associat_list.php">My Association is not listed</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
<? } else {   
    // THIS IS THE FORM
?>
                <? if($error) { ?>
				<tr>
					<TD COLSPAN="2" ALIGN="center">
						<? if ($error) $C->errors($error); ?>
					</td>
				</tr>
                <? } ?>
				<tr>
					<td colspan="5" valign='top'>
                        <h2 class='attn'>Search by Name:</h2>
                        <form METHOD="get" ACTION="<?echo $PHP_SELF?>">
                        <input type="hidden"  name="uid" value=<?echo $uid?>>
                        <input type="hidden" name="type_event" value="meeting">
                        <input type="hidden" name="action" value="search">
						<table border='0' cellpadding="0" cellspacing="8px">
							<tr>
								<td><input type="radio" name="search" value="acronym" checked></td>
								<td style="font-size:14px"><b>Acronym</b></td>
								<td><? $I->assoc_pick(); ?></td>
							</tr>
							<tr>
								<td><input type="radio" name="search" value="name"></td>
								<td style="font-size:14px"><b>Name</b></td>
								    <td>
								<input type="text" name="association" size='70' value="<?echo $association ?>">
								</td>
							</tr>
							<tr>
								<td colspan="3" align="left"><INPUT type="submit"  VALUE="Search"></td>
							</tr>
						</table>
                        </form>
					</td>
		<td valign='top'>
                    <!--<div class='wrap1' style='float: right; width: 220px;'>
                        <div class='wrap2'>
                            <div class='wrap3'>
                                <div class='infobox'>
                                    <div class='infotitle'>Association Actions</div>
                                    <div class='infocontents'>
								<font size="+1" color="#008000">&raquo;</font> <a href="associat_list.php">List Your Association</a><br>
								<font size="+1" color="#008000">&raquo;</font> <a href="associat_list.php?action=edit">Edit Your Association Listing</a><br>
								<font size="+1" color="#008000">&raquo;</font> <a href="suggest.php">Suggest a new Association</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
		</td>
				</tr>
				<tr>
					<td VALIGN="BOTTOM" COLSPAN="4">
                        <div align="center">
                            <hr noshade size="-1">
                            <b>OR</b><br>
                            <hr noshade size="-1">
                        </div>
				</td></tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<table border='0' cellpadding="5">
				<tr>
					<td valign='bottom' colspan='5' style="font-size:14px">
                        <h2 class='attn'>Search by Membership:</h2>
                        <form METHOD="get" ACTION="<?echo $PHP_SELF?>">
                        <input type="hidden" name="uid" value=<?echo $uid?>>
                        <input type="hidden" name="type_event" value="meeting">
                        <input type="hidden" name="action" value="search">
						<font size="3">Please select one of the three geographical areas for your search.</font><br>
						 <INPUT TYPE="RADIO" NAME="search" VALUE="national" checked>
						 <B>National Association</B><BR>
						 <INPUT TYPE="RADIO" NAME="search" VALUE="state">
						 <strong>State:</strong> <? $C->select_state($state) ?><br>
						 <INPUT TYPE="RADIO" NAME="search" VALUE="city">
						 <strong>Local Chapter</strong><br><br />
						 <!-- <INPUT TYPE="RADIO" NAME="search" VALUE="all">
						 <strong>All of the Above</strong><br><br> -->
						<!--<INPUT TYPE="TEXT" NAME="citys" VALUE="<?echo $citys?>" SIZE="12">-->
					    <!-- <input type="radio" name="search" value="membership"> -->
					<font size="3">You can narrow your location search to the following categories.</font>
<br />
	</td></tr>
	<tr>
		<td align='center' style="font-size:14px">
		<b>Membership Category: <br>(Selecting more than one category EXPANDS search results)</b><br />
	        <IMG src="/imgz/spacer.gif" width="2" height="2"><br>
		<INPUT type="submit"  VALUE="Search">
		</td>
	</tr>
</table>
<!--		</td>
		<td>
-->
		</td>
	</tr>
	<tr>
		<td colspan=3>
			<table width="100%" cellpadding="5">
				<tr><td></td>
					<td colspan=2><? $I->member_pick(1, TRUE);?></td>
				</tr>	
			</table>
		</td>			
	</tr>
	<!-- <tr>
		<td align="center" colspan="3"><br><INPUT type="submit"  VALUE="Search">
			<br><br>
		</td>
	</tr> --></form>	<? } ?>	
</table>
</div>
<? include $include_path . "lol_footer.inc"; ?>
