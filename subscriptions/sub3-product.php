<?
include "lol_common.inc";
include $include_path . "class/media_class.inc";

$M = new media_class($db);

if($REQUEST_METHOD=="POST")	{
	$error = "";
	if (strlen($ylist) < 2 ) $error .= "- Please enter at least one product<br>";
	if (!strlen($error)) {  
		if ($action == "edit") 		$uid = $media_id;
		if (strlen($ebull) < 1)		$ebull = "yes";
		//to take check boxes array
		if (is_array($ylist)) $ylist = implode(",",$ylist);	
		if (is_array($needs)) $needs = implode(",",$needs);
        $M->pro_int($ylist, $needs ,$ebull ,$uid);
		if ($action == "edit" || $action == "renew") {
			$data= $M->get_info_list($media_id);
			$goto = $data['pay_link'];
	
			if ($goto == "yes")	{
    			header("location: thank_you.php?media_id=$media_id&action=".$action);
   			} else {
      			header("location: thank_you.php?media_id=$media_id&action=".$action);
    		}
		}
		if ($action == !"edit")
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://landscapearchitect.com/subscriptions/thank_you.php?media_id=$media_id&action=".$action>';    
				exit;

	}
}	
$subscribe =$_SESSION['subscribe_list'];
$protype=$_SESSION['protype_list'];
$uid=$_SESSION['uid'];
	// set values for edit & renew
	if ($action == "edit" || $action == "renew") {
		$data = $M->get_info_list($uid);
		$ylist = explode(",", $data['ylist_id']);
		$needs = explode(",", $data['needs']);
	}



include  $include_path . "lol_header2.inc";
?>

<form method="post" action="<?echo $PHP_SELF?>">
<input type="hidden" value="<?echo $media_id?>" name="media_id" >
<input type="hidden" value="<?echo $action?>" name="action" >
<input type="hidden" value="<?echo $protype?>" name="protype" >

<div align="left" style="position: absolute; left:5px; top:-14px; width:763px"> 
<? if ($action == "edit") {
	$sub_type = "Product Request Center</a>";
	} else {
	$sub_type = "Product Request Center";
	}?>
 

	<span style="font-size:32px; font-weight:bold"; position:absolute; left:10px><center><? echo $sub_type ?></center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" width="295" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />
    <center><span style="font-size:16px"><b>LandscapeOnline</b> is the Single Best Source for Commercial Landscape-Oriented Products.<br /><br />
    To receive Brochures and/or Product Information from LandscapeOnline vendors<br />
	just check the appropriate box(es) below then hit the <b>"Finish"</b> button at<br />
	the bottom of the page. <br /><br />
    If you do not wish to receive Product Information simply
	scroll to the bottom of this page, <br />check the appropriate box and hit the <b>"Finish"</b> button.</span></center><br>
	<span style=" position:absolute; left:13px; font-size:22px; color:#C60; font-weight:bold">Now Build Your Product Library</span><br />
    
  <div>

<div style="position:absolute; left:10px; top:400px; padding:0px; width:763px; height:30px">
<TABLE WIDTH="763"  VALIGN="top" align="center"> 
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
                    <td><a href="#LL"><span style="font-size:14px; color:#153bb6">Landscape Lighting</span></a></td>
                    <td><a href="#SA"><span style="font-size:14px; color:#153bb6">Site Amenities</span></a></td>
                </tr>
                <tr>
                	<td><a href="#DWF"><span style="font-size:14px; color:#153bb6">Decorative Water Features</span></a></td>
                    <td><a href="#OL"><span style="font-size:14px; color:#153bb6">Outdoor Living</span></a></td>
                    <td><a href="#SEC"><span style="font-size:14px; color:#153bb6">Stormwater/Erosion Control</span></a></td>
                </tr>
                <tr>
                	<td><a href="#EQI"><span style="font-size:14px; color:#153bb6">Equipment - Installation</span></a></td>
                    <td><a href="#PR"><span style="font-size:14px; color:#153bb6">Park and Recreation</span></a></td>
                    <td><a href="#TO"><span style="font-size:14px; color:#153bb6">Turf & Ornamental</span></a></td>
                </tr>                
                <tr>
                	<td><a href="#EQM"><span style="font-size:14px; color:#153bb6">Equipment - Maintenance</span></a></td>
                    <td><a href="#PMBR"><span style="font-size:14px; color:#153bb6">Pavers, Masonry, Blocks & Rocks</span></a></td>
                    <td><a href="#WMI"><span style="font-size:14px; color:#153bb6">Water Management / Irrigation</span></a></td>
                </tr>                
                <tr>
                	<td><a href="#EQPR"><span style="font-size:14px; color:#153bb6">Equipment - Parts & Repair</span></a></td>
                    <td><a href="#PA"><span style="font-size:14px; color:#153bb6">Plant Accessories</span></a></td>
                    <td><span style="font-size:14px; color:#153bb6"> </span></td>
                </tr>                
                <tr>
                	<td><a href="#GR"><span style="font-size:14px; color:#153bb6">Green Roof</span></a></td>
                    <td><a href="#PM"><span style="font-size:14px; color:#153bb6">Plant Materials</span></a></td>
                    <td><span style="font-size:14px; color:#153bb6"> </span></td>
                </tr>                
           </TABLE>
        </td>
	</tr>

    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="BS">Business Services: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table3($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>    
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="DWF">Decorative Water Features: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table4($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>    
         
        
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="EQI">Equipment - Installation: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table5($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>                
        
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="EQM">Equipment - Maintenance: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table6($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>          
        
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="EQPR">Equipment - Parts & Repair: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table7($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>  
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="GR">Green Roof: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table8($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>      
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="LL">Landscape Lighting: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table9($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>      
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="OL">Outdoor Living: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table10($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>      
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PR">Park and Recreation: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table11($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>      
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PMBR">Pavers, Masonry, Blocks & Rocks: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table12($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>          
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PA">Plant Accessories: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table13($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>      
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="PM">Plant Materials: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table14($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>          
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="SA">Site Amenities: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table15($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>          
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="SEC">Stormwater/Erosion Control: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table16($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>      
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="TO">Turf & Ornamental: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table17($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>          
    
    <tr>
         <td style="font-size:22px; color:#C60; font-weight:bold" id="WMI">Water Management / Irrigation: <span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></span></td>
    </tr>


	<tr>
		<td colspan="3">
			<?	$M->table18($ylist, $protype); ?>

		</td>
	</tr>
    <tr>
    	<td>
        	<a href="#BTT"><font font size="3" color="#153bb6">Back to Top</font></a>
        </td>
    </tr>
    <tr>
    	<td>
        	 
        </td>
    </tr>                  
            
    
    
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
 <? include $include_path . "lol_footer2.inc"; ?>
	
