<? 
if($_GET['localtype'] == 'turfgrass') {
    if($_GET['searchby'] == 'ac' && strlen($_GET['areacodes']) == 0 && strlen($_GET['state']) > 0) {
        $searchby = 'st';
    }
}
$keywd = $_GET['keyword'];
if(isset($_GET['op1'])) $operation = "SearchKeyword"; else if(isset($_GET['op2'])) $operation = "SearchCategory"; else $operation = "ExpandCategory";
if( $operation == "ExpandCategory") {
    $ca = "no";
    $nextDisplay = $next;
    $keywd = "";
} else if( $operation == "SearchKeyword") {
    $ca = "";
    $nextDisplay = "";
    $keywd = $_GET['keyword'];
} else if( $operation == "SearchCategory") {
    $nextDisplay = $next;
    $ca = $_GET['ca'];
    $keywd = "";
}
$searchtype = $_GET["searchtype"];
if($searchtype == ""){
	if($_GET["next"] == "34"){
		$searchtype = "company";
	}
	else{
		$searchtype = "photo";
	}
}

?>
<script language="JavaScript" type="text/javascript">
<!--
    function launchSearch(refine) {
        document.refine.searchby.value = refine;
        document.refine.submit();
    }
// --> 
</script>
<script language="JavaScript" type="text/javascript">
<!--

    function checkall(f) {
        if (f.ca.value == 'yes') {
            tocheck = false;
            //document.sfchecked = false;
            f.ca.value = 'no';
            document.getElementById('chkall').innerHTML="Check All";
        } else {
            tocheck = true;
            //document.sfchecked = true;
            f.ca.value = 'yes';
            document.getElementById('chkall').innerHTML="Uncheck All";
        }
        for(i=0;i<f.elements.length;i++){
            if(f.elements[i].type=="checkbox"){
                f.elements[i].checked = tocheck;
            }
        }
    }
// -->
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style7 {font-family: "Times New Roman", Times, serif; font-size: 14px; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style9 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>

    <form handler="<? $_SERVER['PHP_SELF'] ?>" method="get" name="refine" style='margin: 0; padding: 0; '>
    <input type="hidden" value="<?= $_GET['localtype'] ?>" name="localtype" />
    <input type="hidden" value="<?= $_GET['vst'] ?>" name="vst" />
    <table border="0" cellpadding="0" cellspacing="0" width='100%'>
        <tbody>
            <tr>
                <td colspan='2' align='center' class='secthdr'>
                    <div style='float: right; font-size: 8px;'>                    </div>
                    <span class="style1">LandscapeOnline Product Search                </span></td>
          </tr>
    	</tbody>
    </table>

  <table border="0" cellpadding="0" cellspacing="0" width='100%'>
  		<tr>
       	  <td colspan="2">
       	    <p><center class="style8">
       	      <strong>       	      Search Options      	      </strong>
       	    </center>
           	  </p>
           	
          </td>
        </tr>    
          <tr>
  				<td  colspan='2' valign="top" width="150">
           			<p align="left" class="style7">Search by Keyword or Product Category. Type in a Keyword or use the drop down menu which provide you with Product Categories.</p>                </td>
          </tr>
          
          <tr>
                <td valign="top">
           			<img src="https://landscapearchitect.com/products/images/Product-Search-button2.jpg" alt="blast.jpg" border="0">                </td>    
                            
<td valign='center'>
                                    <table border='0' cellspacing=3>
                                        <tbody>
                                       <tr>
                                        <td colspan="2">
                                            <p align="center" class="style6">Start Here:</p>										</td>
                                        </tr>
                                            <td style="cursor: pointer; cursor: hand;">
                                                    <span class="style9">Keyword:</span>
                                              <input type='text' name='keyword' value="<?=$keywd?>" size='20'/>
                                                    <input type="submit"  src="../imgz/gobutton.gif" alt="Search" align="middle" name="op1" value="Search"/>
                                                    <br>-- or --<br>
                                                    <select name="next" class="style9" onchange="document.refine.submit();">
                                                      <option value="">Please choose a product category.</option>
                                                      <? $vl->vendor_xlist_cate_find($nextDisplay); ?>
                                        </select>
                                                    <? if($operation == "SearchCategory") { 
                                                    if(!is_array($quicklaunch[$_GET['localtype']]['cat'])) {
                                                        if(is_array($categories)) {
                                                            foreach($categories as $value) {
                                                                echo('<input type="hidden" name="xlist[]" value="' . $value . '" />');
                                                            }
                                                        }
                                                    }  
                                                ?>
                                                        <input type="submit" alt="Modify" align="middle" name="op3" value="Modify"/>
                                                <? } else { ?>
                                                        <input type="submit" alt="Search" align="middle" name="op2" value="Search"/>
                                                <? } ?>
                                                    <input name="ca" type="hidden" value="<?= $ca ?>" />                                              </td>
                                          </tr>
                                        </tbody>
                                    </table>


            </td>
    </tr>
  		<tr>
       	  <td colspan="2">
       	    <p><center class="style8">
       	      <strong>       	      Additional Search Options       	      </strong>
       	    </center>
           	  </p>
           	
          </td>
        </tr>    
          <tr>
  				<td  colspan='2' valign="top" width="150">
           			<p align="center" class="style7">Choose from the following options below to further define your search.</p>                </td>
          </tr>
           
       <tr>      
   		 <td colspan="1">

                                <?php 
                                $localtype = $_GET["localtype"];
                                if($localtype == "wholesale" || $localtype == "retail" || $localtype == "plantmat" || $localtype == "turfgrass"){
                                ?>
                                <span style="font-size: 10px;">*required</span>
                                <?php 
                                }
                                ?>

                                <table border='0' cellspacing=3  height='70px'>
                                    <tbody>
                                        <tr>
                                        <td colspan="3">
                                            <p align="center" class="style6">Search By:</p>
										</td>
                                        </tr>
                                        <tr> 
                                            <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[0].checked = true;">
                                               <input type="radio" name="searchby" value="ac" <? if($_GET['searchby'] == 'ac') echo("checked"); ?> />
                                            </td>
                                            <td valign='middle'><strong>Area Codes</strong></td>
                                            <td>
                                                <?php if($_GET["searchby"] == "ac"){
                                                    $areacodes = $_GET['areacodes'];
                                                }
                                                else {
                                                    $areacodes = "";
                                                } ?>
                                                 <input onFocus="this.form.searchby[0].checked = true;" size="6" type="text" name="areacodes" value="<?php echo $areacodes;  ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[1].checked = true;">
                                                <input type="radio" name="searchby" value="st" <? if($searchby == 'st') echo("checked"); ?> />
                                            </td>
                                            <td><strong>State </strong></td>
                                            <td><?= $C->select_state($state, "searchby[1]"); ?></td>
                                        </tr>
    <? if (($quicklaunch[$_GET['localtype']]['st'] != TRUE) && 
    ($quicklaunch[$_GET['localtype']]['ac'] != TRUE )) { ?>
                                        <tr>
                                            <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[2].checked = true;">
                                                <input type="radio" name="searchby" value="nl" <? if($searchby == 'nl') echo("checked"); ?> />
                                            </td>
                                            <td colspan='2'><strong>National</strong></td>
                                        </tr>
    <? } ?>
                                    </tbody>
                                </table>
         </td>
 
                <td  colspan="1" valign="top">
                                    <table border='0' cellspacing=3 align="center">
                                        <tbody>
                                       <tr>
                                        <td colspan="2">
                                            <p align="center" class="style6">Find:</p>
										</td>
                                        </tr>
                                        <tr>                                                 <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchtype[0].checked = true;">
                                                    <input type="radio" name="searchtype" value="company" <? if($searchtype == 'company') echo "checked"; ?> />
                                                </td>
                                                <td colspan='2'>
                                                    <strong>Company</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchtype[1].checked = true;">
                                                    <input type="radio" name="searchtype" value="photo" <? if($searchtype == 'photo') echo "checked"; ?> />
                                                </td>
                                                <td colspan='2'>
                                                    <strong>Product Photos</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
    
         </td>
<? 
if($_GET['next']) {
    $oc = 'onchange="document.refine.ca.value=\'yes\'; checkall(document.refine); document.refine.submit();"';
} else {
    $oc = 'onChange="document.refine.submit();"';
} ?>

                        </td>
                    </tr>
<?php if($operation == "ExpandCategory" && $_GET['next'] > 1) { ?>
                    <tr>
                        <td colspan='2' align='left' id="specify_box" >
                            <hr noshade='noshade' size='-1' />
                            <div style='margin-left: 10px;'>
                            <div class='wrap1'>
                                <div class='wrap2'>
                                    <div class='wrap3'>
                                        <div class='infobox'  >
                                            <div class='infotitle'>
                                                <div style='font-size: 80%; float: right; margin-right: 10px; margin-top: 3px;'>
                                                    [ <span id="chkall" onclick="checkall(document.refine)" style="text-decoration:underline;cursor:pointer;"><? if($_GET['ca'] == 'yes') { ?>uncheck all<? } else { ?>check all<? } ?></span> ]<br>
                                                </div>
                                                Specify Category Options
                                            </div>
                                            <div class='infocontents'>
                                                <? include('categories.php'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr> <?
} ?>
    </table>
<br>
</form>
<script type="text/javascript">
	var execute_search = '<?php echo $_GET["execute_search"]; ?>';
    var start_new_search_ahref = document.getElementById("start_new_search");
	if(execute_search == "true"){
		start_new_search_ahref.value = "";
		start_new_search();
	}
<? if($searchby == 'ac' || $searchby == '') { ?>
    document.refine.areacodes.focus();
<? } ?>
</script>
