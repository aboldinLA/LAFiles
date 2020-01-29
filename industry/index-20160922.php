<?
include("lo_top-main2-js.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	<?
	include $include_path . "lo_header-main2-js.inc";
	?>
	</div>

	<!-- Start Content Section -->
	
	<!-- Start Assoc Search Section -->

<?
include "lol_common-main.inc";
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

   #  echo $error; die;

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


// WHY THE FORM HERE?

?>
<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->
	<div style="position:absolute; left:0px">
    <span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Association Search Center</center></span><br>
    
<div>

<center><span style="font-size:16px">To find contact information for an association, simply enter the association acronym,<br />
or association name and click the search button.</span></center><br /><br />

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
                        <h2 style="font-family:Arial, Helvetica, sans-serif">Search by Name:</h2>
                        <form METHOD="get" ACTION="<?echo $PHP_SELF?>"  target="_blank">
                        <input type="hidden"  name="uid" value=<?echo $uid?>>
                        <input type="hidden" name="type_event" value="meeting">
                        <input type="hidden" name="action" value="search">
						<table border='0' cellpadding="0" cellspacing="8px">
							<tr>
								<td><input type="radio" name="search" value="acronym" checked></td>
								<td style="font-size:16px"><b>Acronym</b></td>
								<td><? $I->assoc_pick(); ?></td>
							</tr>
							<tr>
								<td><input type="radio" name="search" value="name"></td>
								<td style="font-size:16px"><b>Name</b></td>
								    <td>
								<input type="text" name="association" size='70' value="<?echo $association ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
								</td>
							</tr>
                            <tr>
                            	<td style="height:5px"> </td>
                             </tr>
							<tr>
								<td colspan="3" align="left"><INPUT type="submit"  VALUE="Search" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; cursor:pointer"></td>
							</tr>
						</table>
                        </form>
					</td>
	
				</tr>
                            <tr>
                            	<td style="height:5px"> </td>
                             </tr>                
				<tr>
					<td VALIGN="BOTTOM" COLSPAN="4">
                    	<span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">&nbsp;</span><br>
				</td></tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<table border='0' cellpadding="5" width="720">
				<tr>
					<td valign='bottom' colspan='5' style="font-size:14px">
                        <h2 style="font-family:Arial, Helvetica, sans-serif; font-size:23px; font-weight:bold">Regional Search:</h2>
                        <form METHOD="get" ACTION="<?echo $PHP_SELF?>"  target="_blank">
                        <input type="hidden" name="uid" value=<?echo $uid?>>
                        <input type="hidden" name="type_event" value="meeting">
                        <input type="hidden" name="action" value="search">
						<span style="font-size:16px">Please select one of the three geographical areas for your search.</span><br><br />
						 <INPUT TYPE="RADIO" NAME="search" VALUE="national" checked>
						 <span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;National Association</span><BR>
						 <INPUT TYPE="RADIO" NAME="search" VALUE="state">
						 <span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;State:</span> <? $C->select_state($state) ?><br>
                         
	        <IMG src="/imgz/spacer.gif" width="2" height="5"><br><br />
		<INPUT type="submit"  VALUE="Search" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; cursor:pointer"><br />
<br />
                         
						 <!-- <INPUT TYPE="RADIO" NAME="search" VALUE="city" >
						 <span style="font-size:16px; font-weight:bold">&nbsp;&nbsp;Local Chapter</span><br><br /> -->
						 <!-- <INPUT TYPE="RADIO" NAME="search" VALUE="all">
						 <strong>All of the Above</strong><br><br> -->
						<!--<INPUT TYPE="TEXT" NAME="citys" VALUE="<?echo $citys?>" SIZE="12">-->
					    <!-- <input type="radio" name="search" value="membership"> -->
					<span style="font-size:16px; font-style:italic">You can narrow your location search to the following categories.</span><br />
	</td></tr>
	<tr>
		<td align='left' style="font-size:14px">
		<span style="font-size:23px; font-family:Arial, Helvetica, sans-serif; font-weight:bold">Demographic Search: </span><br>
        (Selecting more than one category <strong>EXPANDS</strong> search results)<br />
	        <IMG src="/imgz/spacer.gif" width="2" height="5"><br><br />
		<INPUT type="submit"  VALUE="Search" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; cursor:pointer"><br />
		</td>
	</tr>
                            <tr>
                            	<td style="height:10px"> </td>
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
	</tr> -->
    </form>	<? } ?>	
</table>
</div>


<!-- End Assoc Search Section -->


	<!-- End Content Section -->
    
<!-- End Main Section -->
</div>
</div>
<!-- Start Banner Section -->  

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div>
    	<?
		include $include_path . "banner-unvers-js2.inc";
		?>
	</div> <br>
        
        
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div style="position:relative; left:-700px">
	<center><? include $include_path . "lo_footer-main2.inc"; ?><br><br></center>
	</div>

</div>