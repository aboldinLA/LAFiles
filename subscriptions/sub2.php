<?
include '../../includes/la_top-common.php';

$action = $_POST['action'];




    if ($action == 'new') {

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$comp_name = $_POST['comp_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$month = $_POST['month'];

	$opt_inla001 = $_POST['opt_inla001'];
	$opt_inla002 = $_POST['opt_inla002'];
	$opt_inla003 = $_POST['opt_inla003'];
	$opt_inla004 = $_POST['opt_inla004'];
	$opt_inla005 = $_POST['opt_inla005'];

	$opt_inla = $opt_inla001 . "," . $opt_inla002 . "," . $opt_inla003 . "," . $opt_inla004 . "," . $opt_inla005;

	$opt_inlc001 = $_POST['opt_inlc001'];
	$opt_inlc002 = $_POST['opt_inlc002'];
	$opt_inlc003 = $_POST['opt_inlc003'];
	$opt_inlc004 = $_POST['opt_inlc004'];
	$opt_inlc005 = $_POST['opt_inlc005'];

	$opt_inlc = $opt_inlc001 . "," . $opt_inlc002 . "," . $opt_inlc003 . "," . $opt_inlc004 . "," . $opt_inlca005;


	$opt_intle001 = $_POST['opt_intle001'];
	$opt_intle002 = $_POST['opt_intle002'];
	$opt_intle005 = $_POST['opt_intle005'];

	$opt_intle = $opt_intle001 . "," . $opt_intle002 . "," . $opt_intle005;


	$opt_ineb001 = $_POST['opt_ineb001'];
	$opt_ineb002 = $_POST['opt_ineb002'];
	$opt_ineb003 = $_POST['opt_ineb003'];
	$opt_ineb004 = $_POST['opt_ineb004'];
	$opt_ineb005 = $_POST['opt_ineb005'];
	$opt_ineb006 = $_POST['opt_ineb006'];
	$opt_ineb007 = $_POST['opt_ineb007'];
	$opt_ineb008 = $_POST['opt_ineb008'];
	$opt_ineb009 = $_POST['opt_ineb009'];
	$opt_ineb010 = $_POST['opt_ineb010'];
	$opt_ineb011 = $_POST['opt_ineb011'];
	$opt_ineb012 = $_POST['opt_ineb012'];
	$opt_ineb013 = $_POST['opt_ineb013'];
	$opt_ineb014 = $_POST['opt_ineb014'];
	$opt_ineb015 = $_POST['opt_ineb015'];
	$opt_ineb016 = $_POST['opt_ineb016'];
	$opt_ineb017 = $_POST['opt_ineb017'];





	$opt_ineb = $opt_ineb001 . "," . $opt_ineb002 . "," . $opt_ineb003 . "," . $opt_ineb004 . "," . $opt_ineb005 . "," . $opt_ineb006 . "," . $opt_ineb007 . "," . $opt_ineb008 . "," . $opt_ineb009 . "," . $opt_ineb010 . "," . $opt_ineb011 . "," . $opt_ineb012 . "," . $opt_ineb013 . "," . $opt_ineb014 . "," . $opt_ineb015 . "," . $opt_ineb016 . "," . $opt_ineb017;




		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// Attempt insert query execution
		$sql = "INSERT INTO subscribe (comp_name, first_name, last_name, address, city, state, zip, phone, fax, email, month, opt_inla, opt_inlc, opt_intle, opt_ineb) VALUES ('$comp_name', '$first_name', '$last_name', '$address', '$city', '$state', '$zip', '$phone', '$fax', '$email', '$month', '$opt_inla', '$opt_inlc', '$opt_intle', '$opt_ineb')";

		if(mysqli_query($link, $sql)){
			echo "&nbsp;";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
    }


    if ($action == 'edit') {
        
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$comp_name = $_POST['comp_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$month = $_POST['month'];

	$opt_inla001 = $_POST['opt_inla001'];
	$opt_inla002 = $_POST['opt_inla002'];
	$opt_inla003 = $_POST['opt_inla003'];
	$opt_inla004 = $_POST['opt_inla004'];
	$opt_inla005 = $_POST['opt_inla005'];

	$opt_inla = $opt_inla001 . "," . $opt_inla002 . "," . $opt_inla003 . "," . $opt_inla004 . "," . $opt_inla005;

	$opt_inlc001 = $_POST['opt_inlc001'];
	$opt_inlc002 = $_POST['opt_inlc002'];
	$opt_inlc003 = $_POST['opt_inlc003'];
	$opt_inlc004 = $_POST['opt_inlc004'];
	$opt_inlc005 = $_POST['opt_inlc005'];

	$opt_inlc = $opt_inlc001 . "," . $opt_inlc002 . "," . $opt_inlc003 . "," . $opt_inlc004 . "," . $opt_inlca005;


	$opt_intle001 = $_POST['opt_intle001'];
	$opt_intle002 = $_POST['opt_intle002'];
	$opt_intle005 = $_POST['opt_intle005'];

	$opt_intle = $opt_intle001 . "," . $opt_intle002 . "," . $opt_intle005;


	$opt_ineb001 = $_POST['opt_ineb001'];
	$opt_ineb002 = $_POST['opt_ineb002'];
	$opt_ineb003 = $_POST['opt_ineb003'];
	$opt_ineb004 = $_POST['opt_ineb004'];
	$opt_ineb005 = $_POST['opt_ineb005'];
	$opt_ineb006 = $_POST['opt_ineb006'];
	$opt_ineb007 = $_POST['opt_ineb007'];
	$opt_ineb008 = $_POST['opt_ineb008'];
	$opt_ineb009 = $_POST['opt_ineb009'];
	$opt_ineb010 = $_POST['opt_ineb010'];
	$opt_ineb011 = $_POST['opt_ineb011'];
	$opt_ineb012 = $_POST['opt_ineb012'];
	$opt_ineb013 = $_POST['opt_ineb013'];
	$opt_ineb014 = $_POST['opt_ineb014'];
	$opt_ineb015 = $_POST['opt_ineb015'];
	$opt_ineb016 = $_POST['opt_ineb016'];
	$opt_ineb017 = $_POST['opt_ineb017'];





	$opt_ineb = $opt_ineb001 . "," . $opt_ineb002 . "," . $opt_ineb003 . "," . $opt_ineb004 . "," . $opt_ineb005 . "," . $opt_ineb006 . "," . $opt_ineb007 . "," . $opt_ineb008 . "," . $opt_ineb009 . "," . $opt_ineb010 . "," . $opt_ineb011 . "," . $opt_ineb012 . "," . $opt_ineb013 . "," . $opt_ineb014 . "," . $opt_ineb015 . "," . $opt_ineb016 . "," . $opt_ineb017;
        
        
		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}        
        
        $sql = "UPDATE subscribe SET first_name = '" . $first_name . "', last_name = '" . $last_name . "', comp_name = '" . $comp_name . "', address = '" . $address . "', city = '" . $city . "', state = '" . $state . "', zip = '" . $zip . "', phone = '" . $phone . "', fax = '" . $fax . "', email = '" . $email . "', month = '" . $month . "', status = '0', opt_inla = '" . $opt_inla . "', opt_inlc = '" . $opt_inlc . "', opt_intle = '" . $opt_intle . "', opt_ineb = '" . $opt_ineb . "' WHERE id='" . $id . "'";
        
		if(mysqli_query($link, $sql)){
			echo "&nbsp;";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
        
        
										// Get data from profile

											$servername = "localhost";
											$username = "land_patchew";
											$password = "59q2GB6k$3";
											$dbname = "land_landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 



											$sql = "SELECT * FROM subscribe where id = '" . $id . "'";
											$result = $conn->query($sql);									
									
											while($row = mysqli_fetch_array($result)) {
                                                
                                                $biz_title = explode(",", $row['biz_title']);
                                                $am_id = explode(",", $row['am_id']);
                                                $authority = explode(",", $row['auth']);
                                                $overwork_id = explode(",", $row['area']);
                                                $acreage_id = explode(",", $row['acres']);
                                                $sites_id = explode(",", $row['sites_id']);
                                                $does = explode(",", $row['type_biz']);
                                                $assoc = explode(",", $row['assoc']);
                                                
                                            }        
        
        
        

		// Close connection
		// mysqli_close($link);        
        
        
    }








?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	<?
		// include("../../includes/la_header-common.inc");
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
	
		<?
			// include("../../includes/la_banner-common.inc");
		?>

		<?
//			include("lo_top-main2-side2-js50.inc");
		?>


	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
			// include("../../includes/la_left-side-common2.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
				
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->
				

				
<form method="post" action="sub3.php">
<input type="hidden" value="<? echo $uid; ?>" name="media_id" >
<input type="hidden" value="<? echo $action; ?>" name="action">
<input type="hidden" value="<? echo $protype; ?>" name="protype">
<input type="hidden" value="<? echo $first_name; ?>" name="first_name">
<input type="hidden" value="<? echo $last_name; ?>" name="last_name">
<input type="hidden" value="<? echo $email; ?>" name="email">
    

<div align="left" style="position: absolute; left: 275px; top: 210px; width:763px"> 
<? if ($action == "edit") {
  $sub_type = "Subscription Management Center</a>";
    echo '<input type="hidden" value="'. $id . '" name="id"';
    echo '<input type="hidden" value="edit" name="action"';
  } else {
  $sub_type = "Subscription Request Center ";
  }?>
 

  <span style="font-size:32px; font-weight:bold"><center><? echo $sub_type ?></center></span><br><br />
  <center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="260" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" width="275" /></center><br />
  <span style="font-size:16px"><center><strong>Important!<? echo $action; ?></strong> Please take the time to complete this section as accurately as possible.<?  echo $firstName;  ?><br />
  The information is used to ensure you receive the magazine(s), news<br />
  and promotions you want to receive and not the ones you don't want.  <br />Thank you!</center></span><br>
   
   
	<!-- <center><img width="90%" src="images/prog-reg-button02.jpg"></center><br> -->
    
  <div>
  
<!-- <div style="position:absolute; left:10px; top:335px; padding:0px; width:763px"> -->

<div style="position:absolute; left:10px; top:250px; padding:0px; width:763px">
<TABLE WIDTH="763" cellpadding="0" cellspacing="0"> 

  <TR> 
    <TD  align="center">
      <?  if ($protype) { ?><IMG SRC="/imgz/<?=$protype?>_list.gif"  BORDER="0"><BR><? } ?>
    </TD>
  </TR>
  <TR VALIGN="MIDDLE">
    <TD VALIGN="MIDDLE" ALIGN="center">
      
      <BR>
      <B></B><BR><br>
      
    </TD>
  </TR>
  <tr>
    <TD align="center" >
      <? if ($error) $C->errors2($error);  ?>
    </TD>
  </TR>
  <TR>
    <td valign='top'>
        <table>
            
             <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">Please Edit Your Preference Information<br /><hr align="left" width="95%" noshade="noshade" />
          Title <span style="font-size:14px; color:#000">*Required Field (Please Choose One)</span></td>
                </tr>
                
        <tr>
          <TD VALIGN="TOP" >
            <?  
              
    include '../../includes/connect3.inc';

              
    $sql = "SELECT * FROM type_title ORDER BY sub_number";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";
              

    $counter = 1;

WHILE ($counter <4) {
  while($row = mysqli_fetch_array($result)) {      
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {    
      if (in_array($row['name'] ,$biz_title))
      $t = "checked";
      else
      $t = "";
      echo "<tr><td valign=top><input type=\"radio\" ".$t." name=\"biz_title[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
        $counter++;
    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        if (in_array($row['name'] ,$biz_title))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"radio\" ".$t." name=\"biz_title[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$biz_title))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"radio\" ".$t." name=\"biz_title[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }
    }
    } 
  }
    echo "</table>"; 
              
              
              
              
            ?>
              
                        <input type="radio" name="biz_title" <? if ($biz_title_other) echo "checked";?> value="other" style="margin-left: 11px;"> 
            <span  style="font-size:15px; color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other </span><input type="text" name="biz_title_other" value="<? echo $biz_title_other ?>" size="50">
          </td>
        </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
              <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">I Am A <span style="font-size:14px; color:#000">*Required Field<strong>&nbsp;&nbsp;&nbsp;(Select all that apply)</span></td>
                </tr>
                
          <TD VALIGN="TOP" >
            <?  
    
    include '../../includes/connect3.inc';
              
    $sql = "SELECT * FROM type_iam ORDER BY idAccount";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";

    $counter = 1;

WHILE ($counter <4){
  while($row = mysqli_fetch_array($result)) {
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {    
      if (stristr($row['name'],"---")) {
                      echo '<tr><td colspan="2" valign=top><font size="3" color="#153bb"><B>'.ltrim($row['name'],"--- ").':</B></FONT></td>';
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$am_id))
        $t = "checked";
        else
        $t = "";
        echo "<tr><td valign=top><input type=\"checkbox\" ".$t." name=\"am_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }
    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {

      if (stristr($row['name'],"---")) {
                      echo '<td colspan="2" valign=top><font size="3" color="#153bb"><B>'.ltrim($row['name'],"--- ").':</B></FONT></td></tr>';
          $counter++;
      }
      ELSE{       
        if (in_array($row['name'] ,$am_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"am_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }

      }
      ELSE{
      if (stristr($row['name'],"---")) {
                      echo '<td colspan="2" valign=top><font size="3" color="#153bb"><B>'.ltrim($row['name'],"--- ").':</B></FONT></td>';
          $counter++;
      }
      ELSE{

        if (in_array($row['name'] ,$am_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"am_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }

      }
    }
    } 
  }
    echo "</table>";               
              
              
            
              
              
              
            ?>
              
              
                        <input type="checkbox" name="am_id[]" <? if ($am_other) echo "checked";?> value="other" style="margin-left: 11px;">
            <span  style="font-size:15px; color:#000">&nbsp;&nbsp;Other </span><input type="text" name="am_other" value="<? echo $am_other ?>" size="50">
            <!-- <font size="3">*Contractors License Number: </font><input type="text" name="country" value="<? echo $country ?>"> -->
          </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>  
            <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">My Authority Allows Me to <span style="font-size:14px; color:#000">*Required Field<strong>&nbsp;&nbsp;&nbsp;(Select all that apply)</span></td>
                </tr>
                
          <TD VALIGN="TOP" >
            <? 
              
    include '../../includes/connect3.inc';
    
              
    $sql = "SELECT * FROM type_authority ORDER BY sub_number";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";

    $counter = 1;

WHILE ($counter <4){
  while($row = mysqli_fetch_array($result)) {
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {    
      if (in_array($row['name'] ,$authority))
      $t = "checked";
      else
      $t = "";
      echo "<tr><td valign=top><input type=\"checkbox\" ".$t." name=\"authority[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
        $counter++;
    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        if (in_array($row['name'] ,$authority))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"authority[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$authority))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"authority[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }
    }
    } 
  }
    echo "</table>";               
            
              
              
              
            ?>
                        
          </TD> 
                </tr>                
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">Over 10% of My Company's or Department's Work <span style="font-size:14px; color:#000">*Required Field</span>
<FONT size="2" COLOR="#000"><strong>(Select all that apply)</span></td>
                </tr>
                <TR>
          <TD VALIGN="TOP" >
            <?
              
    include '../../includes/connect3.inc';
              
              
    $sql = "SELECT * FROM type_overwork ORDER BY sub_number";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";

    $counter = 1;

WHILE ($counter <4){
  while($row = mysqli_fetch_array($result)) {
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {    
      if (in_array($row['name'] ,$overwork_id))
      $t = "checked";
      else
      $t = "";
      echo "<tr><td valign=top><input type=\"checkbox\" ".$t." name=\"overwork_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
        $counter++;
    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        if (in_array($row['name'] ,$overwork_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"overwork_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$overwork_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"overwork_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }
    }
    } 
  }
    echo "</table>";               
              
              
              
              
            ?>
              
          </TD> 
                </tr> 
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">The Annual Acreage My Company or Departments Works On is <span style="font-size:14px; color:#000">*Required Field<strong>&nbsp;&nbsp;&nbsp;(Please Choose One)</span></td>
                </tr>
                <tr>
          <TD VALIGN="TOP" >
            <? 
              
    include '../../includes/connect3.inc';
              
              
    $sql = "SELECT * FROM type_acreage ORDER BY sub_number";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";

    $counter = 1;

WHILE ($counter <4){
  while($row = mysqli_fetch_array($result)) {
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {    
      if (in_array($row['name'] ,$acreage_id))
      $t = "checked";
      else
      $t = "";
      echo "<tr><td valign=top><input type=\"radio\" ".$t." name=\"acreage_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
        $counter++;
    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        if (in_array($row['name'] ,$acreage_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"radio\" ".$t." name=\"acreage_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$acreage_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"radio\" ".$t." name=\"acreage_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }
    }
    } 
  }
    echo "</table>";               
              
              
              
              
            
            ?>
              
          </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">My Company or Department Is A <span style="font-size:14px; color:#000">*Required Field<strong>&nbsp;&nbsp;&nbsp;(Please Choose One)</span></td>
                </tr>
                <tr>
          <TD VALIGN="TOP" >
            <?  
              
    $sql = "SELECT * FROM type_title ORDER BY sub_number";
              
    $sql = "SELECT * FROM type_sites ORDER BY sub_number";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";

    $counter = 1;

WHILE ($counter <4){
  while($row = mysqli_fetch_array($result)) {
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {    
      if (in_array($row['name'] ,$sites_id))
      $t = "checked";
      else
      $t = "";
      echo "<tr><td valign=top><input type=\"radio\" ".$t." name=\"sites_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
        $counter++;
    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        if (in_array($row['name'] ,$sites_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"radio\" ".$t." name=\"sites_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$sites_id))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"radio\" ".$t." name=\"sites_id[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }
    }
    } 
  }
    echo "</table>";               
              
              
              
            ?>
              
            <input type="radio" name="sites_id[]" <? if ($sites_other) echo "checked";?> value="other" style="margin-left: 11px;"> 
            <span  style="font-size:15px; color:#000">&nbsp;&nbsp;Other : </span><input type="text" name="sites_other" value="<? echo $sites_other ?>" size="50">
                    </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>     
                <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">My Work Includes <span style="font-size:14px; color:#000">*Required Field<strong>&nbsp;&nbsp;&nbsp;(Select all that apply)</span></td>
                </tr>
                <tr>
          <TD VALIGN="TOP" >
            <?  

    include '../../includes/connect3.inc';
    
              
    $sql = "SELECT * FROM type_does ORDER BY idAccount";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";

    $counter = 1;

WHILE ($counter <4){
  while($row = mysqli_fetch_array($result)) {
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55 || $counter == 58 || $counter == 61 || $counter == 64 || $counter == 67 || $counter == 70 || $counter == 73 || $counter == 76 || $counter == 79 || $counter == 82) {    
      if (stristr($row['name'],"---")) {
                      echo '<tr><td colspan="2" valign=top><font size="3" color="#153bb"><B>'.ltrim($row['name'],"--- ").':</B></FONT></td>';
          $counter++;
      }
      ELSE{
      if (in_array($row['name'] ,$does))
      $t = "checked";
      else
      $t = "";
      echo "<tr><td valign=top><input type=\"checkbox\" ".$t." name=\"does[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
        $counter++;
      }

    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57 || $counter == 60 || $counter == 63 || $counter == 66 || $counter == 69 || $counter == 72 || $counter == 75 || $counter == 78 || $counter == 81 || $counter == 83) {

      if (stristr($row['name'],"---")) {
                      echo '<td colspan="2" valign=top><font size="3" color="#153bb"><B>'.ltrim($row['name'],"--- ").':</B></FONT></td></tr>';
          $counter++;
      }
      ELSE{ 
        if (in_array($row['name'] ,$does))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"does[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }


      }
      ELSE{

      if (stristr($row['name'],"---")) {
                      echo '<td colspan="2" valign=top><font size="3" color="#153bb"><B>'.ltrim($row['name'],"--- ").':</B></FONT></td>';
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$does))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"does[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }

      }
    }
    } 
  }
    echo "</table>";               
              
              
              
              
            ?>
              
                        <input type="checkbox" name="does[]" <? if ($does_other) echo "checked";?> value="other" style="margin-left: 11px;"> 
            <span  style="font-size:15px; color:#000">&nbsp;&nbsp;Other : </span><input type="text" name="does_other" value="<? echo $does_other ?>" size="50">
          </td>
                </tr> 
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td style="font-size:22px; color:#C60; font-weight:bold">I Am a Member of the Following Association(s) <span style="font-size:14px; color:#000">*Required Field<strong>&nbsp;&nbsp;&nbsp;(Please select all associations that you belong to)</span></td>
                </tr>
                <tr>
          <TD VALIGN="TOP" >
          <? 
    
    include '../../includes/connect3.inc';
              
              
    $sql = "SELECT * FROM type_assoc ORDER BY idAccount";
    $result = $conn->query($sql);
                   
    echo "<TABLE WIDTH=\"763\" CELLPADDING=0 CELLSPACING=5 valign=top>";
    echo " ";

    $counter = 1;

WHILE ($counter <4){
  while($row = mysqli_fetch_array($result)) {
    IF ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55 || $counter == 58 || $counter == 61 || $counter == 64 || $counter == 67 || $counter == 70 || $counter == 73 || $counter == 76 || $counter == 79 || $counter == 82) {    
      if (in_array($row['name'] ,$assoc))
      $t = "checked";
      else
      $t = "";
      echo "<tr><td valign=top><input type=\"checkbox\" ".$t." name=\"assoc[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
        $counter++;
    }
    ELSE {
      IF ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57 || $counter == 60 || $counter == 63 || $counter == 66 || $counter == 69 || $counter == 72 || $counter == 75 || $counter == 78 || $counter == 81 || $counter == 83) {
        if (in_array($row['name'] ,$assoc))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"assoc[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td></tr>\n" ; 
          $counter++;
      }
      ELSE{
        if (in_array($row['name'] ,$assoc))
        $t = "checked";
        else
        $t = "";
        echo "<td valign=top><input type=\"checkbox\" ".$t." name=\"assoc[]\"  value=\"".$row['name']. "\" ></td><td style=\"font-size:15px; color:#000\">".$row['name']. "</font></td>\n" ; 
          $counter++;
      }
    }
    } 
  }
    echo "</table>";               
              
              
              
            ?>
              
              
              
            <input type=checkbox name="assoc[]" <? if ($assoc_other) echo "checked";?> value="other" style="margin-left: 11px;">
            <span  style="font-size:15px; color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other : </span><input type=text name=assoc_other value="<?=$assoc_other?>" size="50"><br>
          </td>
                </tr>
            
            
            
            
                  
      </table>
    </td>
  </TR>
    <tr>
      <td style="height:30px"> </td>
    </tr>
  <TR>
    <TD align="left" style="font-size:16px"><INPUT type="submit" value="Continue To Next Page" style="width:315px; height:35px; font-size:22px; font-weight:bold; color:#C60; position: relative; z-index: 20000"></TD> 
  </tr>
  <TR>
    <td style="height:10px"> </TD> 
  </tr> 
    <TR>
    <TD align="left" style="font-size:16px">Page 2 of 3</TD> 
  </tr>
    
</TABLE>
</div>
  </form>				
				
				
				
				
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px; top: 2400px">
		<? // include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	
<div>
	
	
	
	<p style="line-height: 50px">&nbsp;</p>






<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
    include("../../includes/lo_footer-main2-new.inc");
?>





