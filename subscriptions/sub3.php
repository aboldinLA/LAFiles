<?
include '../../includes/la_top-common.php';

$action = $_POST['action'];


    if ($action == 'new') {


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$biz_title = implode(" ", $_POST['biz_title']);
$am_id = implode(",",$_POST['am_id']);
$authority = implode(",",$_POST['authority']);
$area = implode(",",$_POST['overwork_id']);
$acres = implode(" ",$_POST['acreage_id']);
$sites_id = implode(" ",$_POST['sites_id']);
$type_biz = implode(",",$_POST['does']);
$assoc = implode(",",$_POST['assoc']);


		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// Attempt insert query execution

        $sql = "UPDATE subscribe SET biz_title = '" . $biz_title . "', am_id = '" . $am_id . "', auth = '" . $authority . "', area = '" . $area . "', acres = '" . $acres . "', sites_id = '" . $sites_id . "', type_biz = '" . $type_biz . "', assoc = '" . $assoc . "' WHERE first_name='" . $first_name . "' AND last_name='" . $last_name . "' AND email='" . $email . "'";
		if(mysqli_query($link, $sql)){
			echo "&nbsp;";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
		// mysqli_close($link);
        
    }


if ($action == 'edit') {
    
        $id = $_POST['id'];
    
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        $biz_title = implode(" ", $_POST['biz_title']);
        $am_id = implode(",",$_POST['am_id']);
        $authority = implode(",",$_POST['authority']);
        $area = implode(",",$_POST['overwork_id']);
        $acres = implode(" ",$_POST['acreage_id']);
        $sites_id = implode(" ",$_POST['sites_id']);
        $type_biz = implode(",",$_POST['does']);
        $assoc = implode(",",$_POST['assoc']);

    
    

		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 
		// Attempt insert query execution

        $sql = "UPDATE subscribe SET biz_title = '" . $biz_title . "', am_id = '" . $am_id . "', auth = '" . $authority . "', area = '" . $area . "', acres = '" . $acreage_id . "', sites_id = '" . $sites_id . "', type_biz = '" . $type_biz . "', assoc = '" . $assoc . "' WHERE id='" . $id . "'";
    
		if(mysqli_query($link, $sql)){
			echo "&nbsp;";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
    
    
    
										// ylist breakout

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

											$sql = "SELECT * FROM subscribe where id = '" .$id . "'";
											$result = $conn->query($sql);

                                            $xx = 1;

										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
                                                
                                               $ylist = explode(",", $row['ylist_id']);
                                                
                                               $needs = explode(",", $row['needs']);
                                                
                                                foreach($ylist as $i =>$key) {
                                                    
                                                    
                                                    $sql = "SELECT * FROM ylist where sub_number = '".$key ."'";
                                                    $result = $conn->query($sql); 
                                                    
                                                        while($row = mysqli_fetch_array($result)) {
                                                            
                                                           $num[$xx] =  $row['name'];
                                                            
                                                            $xx++;
                                                            
                                                        }
                                                    
                                                }    
                                                
                                            }  

    
    
    
    

		// Close connection
		//mysqli_close($link);    
    
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
			
	
				
<form method="post" action="thank_you.php">
<input type="hidden" value="<?echo $media_id?>" name="media_id" >
<input type="hidden" value="<?echo $action?>" name="action" >
<input type="hidden" value="<?echo $protype?>" name="protype" >
<input type="hidden" value="<? echo $first_name; ?>" name="first_name">
<input type="hidden" value="<? echo $last_name; ?>" name="last_name">
<input type="hidden" value="<? echo $email; ?>" name="email">    
    

<div align="left" style="position: absolute; left:250px; top:200px; width:763px"> 
<? if ($action == "edit") {
	$sub_type = "Product Information Request Center</a>";
	} else {
	$sub_type = "Product Information Request Center ";
	}?>
 
<br><br><br>
  <span style="font-size:32px; font-weight:bold; position:absolute; left:0px; top: 0px"><center><? echo $sub_type ?></center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/LA-LC-search-engines.jpg" width="675" /></center><br><br>
  
	<!-- <center><img width="90%" src="images/prog-reg-button03.jpg"></center><br> -->

  <center><span style="font-size:16px">
    To recieve<? echo $action; ?> product info, special offers, or quotes from select vendors, simply check the appropriate box(es) below then hit the <b>"Finish"</b> button at the bottom of the page. <br /><br /><!-- -OR- -->
	
    If you do not wish to receive Product Information simply
	scroll to the bottom of this page, <br />check the appropriate box and hit the <b>"Finish"</b> button.</span>
	
	
	<?
	
			$selAction = $_GET['action'];
      
      
	
	?>
	
	
						<!--	<center> <a href="https://landscapearchitect.com/subscriptions/thank_you-a.php?action=<? echo $selAction ?>"><img width="40%" src="https://landscapearchitect.com/subscriptions/images/sem-reg-button.jpg"
                                                               onmouseover="this.src='https://landscapearchitect.com/subscriptions/images/sem-reg-button2.jpg'"
                                                               onmouseout="this.src='https://landscapearchitect.com/subscriptions/images/sem-reg-button.jpg'"
                                                              /></a></center><br> -->
                                                              
	
	
	 </span></center>
	<p><br>
	  <br>
  </p>
	<p>	  <!-- <span style=" position:absolute; left:13px; top 35px font-size:22px; color:#C60; font-weight:bold">Product Information Request Center</span> --><br />
	  
	  <div>
	  
	  <!-- <div style="position:absolute; left:10px; top:445px; padding:0px; width:763px; height:30px"> -->
	  
	  <div style="position:absolute; left:10px; top:375px; padding:0px; width:763px; height:30px">
	  <TABLE WIDTH="763"  VALIGN="top" align="center"> 
  </p>
	<TR> 
		<TD ALIGN="center" colspan="2">
		<?  if ($error) $C->errors($error); ?>	
		</td>
	</tr>

    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="BTT"><hr align="left" width="95%" noshade="noshade" />
         Product Information: <span style="font-size:14px; color:#000"><strong>Choose links below for desired product information</strong></span></td>
    </tr>
    
	<tr>
		<td colspan="3">
			<TABLE WIDTH="763" CELLPADDING="5" CELLSPACING="10" valign=top>
            	<tr>
                	<td><a href="#BS"><span style="font-size:14px; color:#153bb6">Business Services</span></a></td>
                    <td><a href="#OL"><span style="font-size:14px; color:#153bb6">Outdoor Living</span></a></td>
                    <td><a href="#SEC"><span style="font-size:14px; color:#153bb6">Stormwater/Erosion Control</span></a></td>
                </tr>
                <tr>
                	<td><a href="#EQI"><span style="font-size:14px; color:#153bb6">Equipment - Installation</span></a></td>
                    <td><a href="#PR"><span style="font-size:14px; color:#153bb6">Park and Recreation</span></a></td>
                    <td><a href="#TO"><span style="font-size:14px; color:#153bb6">Turf &amp; Ornamental</span></a></td>
                </tr>
                <tr>
                	<td><a href="#EQM"><span style="font-size:14px; color:#153bb6">Equipment - Maintenance</span></a></td>
                    <td><a href="#PMBR"><span style="font-size:14px; color:#153bb6">Pavers, Masonry, Blocks &amp; Rocks</span></a></td>
                	<td><a href="#DWF"><span style="font-size:14px; color:#153bb6">Water Features</span></a></td>
                </tr>                
                <tr>
                	<td><a href="#EQPR"><span style="font-size:14px; color:#153bb6">Equipment - Parts &amp; Repair</span></a></td>
                    <td><a href="#PA"><span style="font-size:14px; color:#153bb6">Plant Accessories</span></a></td>
                    <td><a href="#WMI"><span style="font-size:14px; color:#153bb6">Water Management / Irrigation</span></a></td>
                </tr>                
                <tr>
                	<td><a href="#GR"><span style="font-size:14px; color:#153bb6">Green Roof</span></a></td>
                    <td><a href="#PM"><span style="font-size:14px; color:#153bb6">Plant Materials</span></a></td>
                    <td><span style="font-size:14px; color:#153bb6"> </span></td>
                </tr>                
                <tr>
                    <td><a href="#LL"><span style="font-size:14px; color:#153bb6">Landscape Lighting</span></a></td>
                    <td><a href="#SA"><span style="font-size:14px; color:#153bb6">Site Amenities</span></a></td>
                    <td><span style="font-size:14px; color:#153bb6"> </span></td>
                </tr>                
           </TABLE>
        </td>
	</tr>
          
    <!-- Section Start AI List -->      
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="BS">Business Services: <? echo $num[1]; ?><span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE idParent = 13725 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->      

         
        
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="EQI">Equipment - Installation: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13727 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->         
        
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="EQM">Equipment - Maintenance: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13728 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->         
        
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="EQPR">Equipment - Parts &amp; Repair: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13729 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->       
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="GR">Green Roof: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13730 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->       
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="LL">Landscape Lighting: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13731 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->       
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="OL">Outdoor Living: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13732 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->       
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PR">Park and Recreation: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13733 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->       
          
          
          
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PMBR">Pavers, Masonry, Blocks &amp; Rocks: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13734 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->    
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PA">Plant Accessories: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13735 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->    
          
          
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PM">Plant Materials: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13736 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->    
          
          
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="SA">Site Amenities: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13737 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->    
          
          
          
          
          
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="SEC">Stormwater/Erosion Control: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13738 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->    
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="TO">Turf &amp; Ornamental: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13739 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->    
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="DWF">Water Features: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13726 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->              
                                                               
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="WMI">Water Management / Irrigation: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	
            
                // Start AI list Section
                include '../../includes/connect4.inc';
            
                $cols = 3; //number of columns, you can set this to any positive integer
                $values = array();
            
            
				$sql = "SELECT * FROM ylist WHERE  idParent = 13740 AND prod_info = 0 ORDER BY name";
				$result = $conn->query($sql);	            
            
                $numrows = mysqli_num_rows($result);
                $rows_per_col = ceil($numrows / $cols);
                for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
                $c = 1;
                $r = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $values['col_'.$c][$r] = stripslashes($row['name']);
                    $values2['col_'.$c][$r] = stripslashes($row['sub_number']);
                    if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
                }
                echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
                for ($r=1;$r<=$rows_per_col;$r++) {
                    echo "<tr>" ;
                    for ($c=1;$c<=$cols;$c++) { $nano =  $values['col_'.$c][$r]; if (($nano == $num[1] && !empty($nano)) || ($nano == $num[2] && !empty($nano)) || ($nano == $num[3] && !empty($nano)) || ($nano == $num[4] && !empty($nano)) || ($nano == $num[5] && !empty($nano)) || ($nano == $num[6] && !empty($nano)) || ($nano == $num[7] && !empty($nano)) || ($nano == $num[8] && !empty($nano)) || ($nano == $num[9] && !empty($nano)) || ($nano == $num[10] && !empty($nano)) || ($nano == $num[11] && !empty($nano)) || ($nano == $num[12] && !empty($nano)) || ($nano == $num[13] && !empty($nano)) || ($nano == $num[14] && !empty($nano)) || ($nano == $num[15] && !empty($nano)) || ($nano == $num[16] && !empty($nano)) || ($nano == $num[17] && !empty($nano)) || ($nano == $num[18] && !empty($nano)) || ($nano == $num[19] && !empty($nano)) || ($nano == $num[20] && !empty($nano)) || ($nano == $num[21] && !empty($nano)) || ($nano == $num[22] && !empty($nano)) || ($nano == $num[23] && !empty($nano)) || ($nano == $num[24] && !empty($nano)) || ($nano == $num[25] && !empty($nano)) || ($nano == $num[26] && !empty($nano)) || ($nano == $num[27] && !empty($nano)) || ($nano == $num[28] && !empty($nano)) || ($nano == $num[29] && !empty($nano)) || ($nano == $num[30] && !empty($nano)) || ($nano == $num[31] && !empty($nano)) || ($nano == $num[32] && !empty($nano)) || ($nano == $num[33] && !empty($nano)) || ($nano == $num[34] && !empty($nano)) || ($nano == $num[35] && !empty($nano)) || ($nano == $num[36] && !empty($nano)) || ($nano == $num[37] && !empty($nano)) || ($nano == $num[38] && !empty($nano)) || ($nano == $num[39] && !empty($nano)) || ($nano == $num[40] && !empty($nano)) || ($nano == $num[41] && !empty($nano)) || ($nano == $num[42] && !empty($nano)) || ($nano == $num[43] && !empty($nano)) || ($nano == $num[44] && !empty($nano)) || ($nano == $num[45] && !empty($nano)) || ($nano == $num[46] && !empty($nano)) || ($nano == $num[47] && !empty($nano)) || ($nano == $num[48] && !empty($nano)) || ($nano == $num[49] && !empty($nano)) || ($nano == $num[50] && !empty($nano))) { $t = 'checked'; } else { $t = ''; }; echo "<td valign=top><input type=\"checkbox\" ". $t ." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ></td><td WIDTH=\"254\" style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</td>" ; }
                    echo "</tr>" ;
                }
                echo "</table>" ;
                unset($values);            
            
                // Start AI list Section
            
            ?>
		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BBB"><font font size="3" color="#153bb6">Complete My Subscription</font></a>
        </td>
    </tr>
    <tr>
    	<td style="line-height: 10px">&nbsp;</td>
    </tr>    
    <!-- Section End AI List -->          
            
    
    
	<TR>
		<td colspan="3">
				<TABLE CELLPADDING="0" CELLSPACING="10" align="left"> 
					<TR> 
						<TD NOWRAP="NOWRAP" ALIGN="LEFT" style="font-size:14px"> 
								<DL> 
							<DT><span style="font-size:22px; color:#C60; font-weight:bold">I need the information for:</span> (check all that apply):</DT> 
							<?
									
									if (!$action == "edit" || !$error) 
									{$needs[] = "";}
			
								echo "<DD><input type=checkbox name=needs[] value=current_project ".
								(in_array("current_project",$needs)?"checked":"") .
								">Current Project</DD> ";
			
								echo "<dd><input type=checkbox name=needs[] value=future_project ".
								(in_array("future_project",$needs)?"checked":"") .
								">Future Project</DD> ";
			
								echo "<dd><input type=checkbox name=needs[] value=college_project ".
								(in_array("college_project",$needs)?"checked":"") .
								">College Project</DD> ";
						    ?>
							</DL>
						</TD> 
				</TR> 
			</TABLE>

		<BR>
			<TABLE align="left" width="100%">
				<TR> 
					<TD NOWRAP="NOWRAP" ALIGN="left" colspan="3" style="font-size:15px"> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT	TYPE="CHECKBOX" NAME="ylist" VALUE="none">Thank you, but no product information at this time.
					</TD> 
				</TR>
               	<tr>
				   <td style="line-height: 5px">&nbsp;</td>
				</tr>               	
               	<tr>
				   <td><h2 style="padding-left: 50px">Thank You For Your Readership!</h2></td><br>
				</tr> 
                <a name="BBB">&nbsp;</a>
				<br>
				<tr>
					<td align="left" colspan="3">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT NAME="Continue" TYPE="SUBMIT" VALUE="Finish" style="width:315px; height:35px; font-size:22px; font-weight:bold; color:#C60">
					</TD>
				</TR>
				<TR>
					<td style="height:5px" colspan="3"> </TD> 
				</tr>	
    			<TR>
					<TD align="left" style="font-size:16px" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Page 3 of 3</TD> 
				</tr>
				<TR>
					<td style="height:40px" colspan="3"> </TD> 
				</tr>				
			 </TABLE></FORM>
			</td>
		</tr>
	</table>
    </div>				
				
				
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px; top: 5500px">
		<? // include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
    include("../../includes/lo_footer-main2-new.inc");
?>





