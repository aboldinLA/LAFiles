<?
include "lol_common.inc";
include $include_path . "class/media_class.inc";
$M = new media_class($db);

$uid = $_GET['id'];

if($_SERVER['REQUEST_METHOD']=="POST")
{
	extract($_POST);
  $error = "";
  if ($action == "edit")  $uid = $media_id;
    if (strlen($biz_title_other) == 0)  $biz_title_other = "";  
    if (strlen($assoc_other) == 0)    $assoc_other = "";
    if (strlen($does_other) == 0)   $does_other = "";
    if (strlen($am_other) == 0) $am_other = "";
    if (strlen($sites_other) == 0)  $sites_other = "";
    // if (strlen($biz_title) == 0 )    $error .= "- Please enter your Title<br>";
    // if (count($assoc) < 2 && count($assoc_other) < 2)   $error .= "- Please enter your Associations<br>";
    if (count($overwork_id) < 1)   $error .= "- Work Area<br>";
    if (count($acreage_id) < 1)    $error .= "- Work Acreage<br>";
    if (count($sites_id) < 1 && count($sites_other) < 1)    $error .= "- Work Site<br>";
  #echo "error==>".$error;
  if (!strlen($error)){  
    //to take check boxes array
    if (is_array($does))  $does = implode(",",$does);
    //if (is_array($assoc))   $assoc = implode(",",$assoc);
    if (is_array($am_id))   $am_id = implode(",",$am_id);
    if (is_array($overwork_id))   $overwork_id = implode(",",$overwork_id);
    if (is_array($acreage_id))  $acreage_id = implode(",",$acreage_id);
    if (is_array($sites_id))  $sites_id = implode(",",$sites_id);
    if (is_array($authority)) $authority = implode(",",$authority);
    $input = strtotime("now");
        $M->sub2_input($uid, $biz_title, $biz_title_other, $am_id, $am_other, $overwork_id, $acreage_id, $sites_id, $sites_other, $does, $does_other, $assoc, $assoc_other, $authority, $country, $input);
    if ($action == "edit" || $action == "renew")
              header("location:sub3-js.php?action=".$action."&media_id=$media_id");
    else
             header("location:sub3-js.php?title=$biz_title");     
  }
 }
$subscribe=$_SESSION['subscribe_list'];
$protype=$_SESSION['protype_list'];
//$uid=$_SESSION['uid'];



$secthdr=$magtit;
// set values for edit & renew
if ($action == "edit" || $action == "renew") {
  $data = $M->get_info_list($uid);
  $biz_title = explode(",", $data['biz_title']);
  $biz_title_other = $data['biz_title_other'];
  $assoc = explode(",", $data['assoc']);
  $assoc_other = $data['assoc_other'];
  $am_id = explode(",", $data['am_id']);
    $am_other = $data['am_other'];
    $country = $data['country'];
  $overwork_id = explode(",", $data['area']);
  $acreage_id = explode(",", $data['acres']);
  $sites_id = explode(",", $data['sites_id']);
  $authority = explode(",",$data['auth']);
  $does = explode(",",$data['type_biz']);
  $does_other = $data['type_biz_other'];
  $protype = $data['protype'];
}

/*ini_set('display_errors', 1);
error_reporting(-1);*/
?>


<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
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
			include("lo_top-main2-side2-js50.inc");
		?>

		<?
//			include("lo_top-main2-side2-js50.inc");
		?>


	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side2-js-banner.inc");
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
				

				
<form method="post" action="<?echo $PHP_SELF?>">
<input type="hidden" value="<?echo $uid?>" name="media_id" >
<input type="hidden" value="<?echo $action?>" name="action">
<input type="hidden" value="<?echo $protype?>" name="protype">

<div align="left" style="position: absolute; left: 275px; top: 210px; width:763px"> 
<? if ($action == "edit") {
  $sub_type = "Subscription Management Center</a>";
  } else {
  $sub_type = "Subscription Request Center ";
  }?>
 

  <span style="font-size:32px; font-weight:bold"><center><? echo $sub_type ?></center></span><br><br />
  <center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="260" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" width="275" /></center><br />
  <span style="font-size:16px"><center><strong>Important!</strong> Please take the time to complete this section as accurately as possible.<br />
  The information is used to ensure you receive the magazine(s), news<br />
  and promotions you want to receive and not the ones you don't want.  <br />Thank you! <? echo $uid . "dog"; ?></center></span><br>
   
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
            <?  $M->type_title3($biz_title, $protype, 'highlight'); ?>
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
            <?  $M->type_iam2($am_id, $protype, 'highlight'); ?>
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
            <? $M->authority2($authority, $protype, 'highlight'); ?>
                        
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
            <?  $M->type_overwork2($overwork_id, $protype, 'highlight'); ?>
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
            <?  $M->type_acreage2($acreage_id, $protype, 'highlight'); ?>
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
            <?  $M->type_sites2($sites_id, $protype, 'highlight'); ?>
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
            <?  $M->type_does2($does, $protype, 'highlight'); ?>
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
          <? $M->assoc2($assoc, $protype);?>
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
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





