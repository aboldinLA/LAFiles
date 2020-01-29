<? 
$localtype = $_GET["localtype"];
if($localtype == 'turfgrass2') {
    if($_GET['searchby'] == 'ac' && strlen($_GET['areacodes']) == 0 && strlen($_GET['state']) > 0) {
        $searchby = 'st';
    }
} else if($localtype == 'services') {
$titleCat = 'service'; $titleSearch = 'Find a Pro'; $imgSearch = 'FAP-Search-button.jpg';
} else {
$titleCat = 'product'; $titleSearch = 'Product'; $imgSearch = 'Product-Search.gif';
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

$choice = $_GET[searchby];

$codeA = $_GET[areacodes];





?>
<script language="JavaScript" type="text/javascript">
<!--
    function launchSearch(refine2) {
        document.refine2.searchby.value = refine2;
        document.refine2.submit();
    }
// --> 
</script>
<script language="JavaScript" type="text/javascript">
<!-- 

<!-- Begin
function checkall(chk)
{
for (i = 0; i < chk.length; i++)
chk[i].checked = true ;
}

function uncheckall(chk)
{
for (i = 0; i < chk.length; i++)
chk[i].checked = false ;
}
// End -->

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




    <form handler="<? $_SERVER['PHP_SELF'] ?>" method="get" name="refine2" style='margin: 0; padding: 0;' onsubmit="return validateform()">
    <input type="hidden" value="<?= $localtype ?>" name="localtype" />
    <input type="hidden" value="<?= $_GET['vst'] ?>" name="vst" />
    
<!-- Added Section -->    

 <!-- Category Section Start --> 
 <div style="position:absolute; top:25px">       

<div style="position:absolute; left:15px; top:205px; padding:0px; width:500px; font-size:15px; color:#000; font-weight:bold">
		Choose a Category Below:
</div>

<div style="position:absolute; left:15px; top:235px; padding:0px; width:500px; font-size:18px">

<table>
	<tr>
		<td><a href="https://landscapearchitect.com/products/index-product.php?localtype=manu_imp&vst=&keyword=&next=34&keyword=&next=34&ca=no&areacodes=&state=&searchby=nl&searchtype=company">Plant Material / Trees</a></td>
    </tr>
    
    <tr><td style="height:5px"> </td></tr>
    
    <tr>
		<td><a href="https://landscapearchitect.com/products/index-product.php?localtype=manu_imp&vst=&keyword=&next=35&ca=no&areacodes=&state=&searchby=nl&searchtype=company">Wholesale Facilities</a></td>
    </tr>
    
    <tr><td style="height:5px"> </td></tr>
        
    <!-- <tr>
		<td><a href="https://landscapearchitect.com/products/index-product.php?localtype=manu_imp&vst=&keyword=&next=1211&ca=no&areacodes=&state=&searchby=nl&searchtype=company">Wholesale Parts and Supplies</a></td>
    </tr> -->
</table>
    
</div> 

<div style="position:absolute; left:5px; top:240px; padding:0px; width:500px; font-size:28px; color:#000; font-weight:bold">




		<!-- <select name="next" style="width:325px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px" onchange="document.refine2.submit();">
        	<option value="">Please choose a <?= $titleCat ?> category.</option>
            <? if($localtype == 'services') {
            $vl->vendor_xlist_cats_find($nextDisplay);
            } else {
            $vl->vendor_xlist_catp_find2($nextDisplay); //this is the one that is used for dropdown
             }?>
        </select> -->
        
        <?

		if(($_GET["next"] == "35") || ($_GET["next"] == "34") || ($_GET["next"] == "1211")){
		$searchtype = "company";
		}
		else{
			$searchtype = "photo";
		}
	
		?>
        
</div>



<div style="position:absolute; left:335px; top:70px; padding:0px; width:500px; font-size:28px; color:#000; font-weight:bold">
            <? if($operation == "SearchCategory") { 
            if(!is_array($quicklaunch[$localtype]['cat'])) {
            if(is_array($categories)) {
            	foreach($categories as $value) {
                	echo('<input type="hidden" name="xlist[]" value="' . $value . '" />');
                    	}
                	 }
                }  
             ?>
<div style="position:relative; left:-80px; top:285px; z-index:21000">
		<input type="submit" alt="Modify" align="middle" name="op3" value="Modify" style="width:200px; height:40px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:24px; color:#C60; background-color:#c0c0c0"/>
        </div>
       		<? } else { ?>
<div style="position:relative; left:-80px; top:285px">
    	<input type="submit" alt="Search" align="middle" name="op2" value="Search" style="width:200px; height:40px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:24px; color:#C60; background-color:#c0c0c0; display: none"/>
        	<? } ?>
   		<input name="ca" type="hidden" value="<?= $ca ?>" />
   		<input name="next" type="hidden" value="<?= $next ?>" />
        </div>
</div>



           
<div style="position:absolute; left:545px; top:205px; padding:0px; width:200px; font-size:14px; color:#000; font-weight:bold">
	Define Your Region:
</div>


<div style="position:absolute; left:900px; top:235px; padding:0px; width:200px; font-size:14px; color:#000">
   <? if (($quicklaunch[$_GET['localtype']]['st'] != TRUE) && 
    ($quicklaunch[$_GET['localtype']]['ac'] != TRUE )) { ?>
    <input type="hidden" name="searchby" value="nl" <? if($searchby == 'nl') echo("checked"); ?> />
                     <!-- National -->     
</div> 
<? $searchby == 'st'; ?>
<div style="position:absolute; left:545px; top:233px; padding:0px; width:200px; font-size:14px; color:#000">
	<input type="radio" name="searchby" value="st" <? if($searchby == 'st')  echo("checked"); ?> checked />
        State <?= $C->select_state($state, "searchby[1]"); ?>
</div>

<div style="position:absolute; left:545px; top:258px; z-index:20000; padding:0px; width:200px; font-size:14px; color:#000">
		<input type="radio" name="searchby" value="ac" <? if($_GET['searchby'] == 'ac') echo("checked");  ?>  />

		Area Codes
		<?php if($_GET["searchby"] == "ac"){
               $areacodes = $_GET['areacodes'];
                          }
               else {
                      $areacodes = "";
                                      } ?>
                <input onFocus="this.form.searchby[2].checked = true;" size="6" type="text" name="areacodes" value="<?php echo $areacodes;  ?>" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" />
 </div> 
 
<div style="position:absolute; left:545px; top:283px; padding:0px; width:250px; font-size:14px; color:#000; font-family:'Times New Roman', Times, serif">
	<span style="font-family:Arial, Helvetica, sans-serif; font-size:11px; font-style:italic">
	<em>(Tip! For multiple area codes enter in<br />the following format: 949 714 909)<br>
		<strong>No Comma's between Area Codes</strong></em>
</div> 
                   
                     
    <? } ?>
    
    
    
<div style="position:absolute; left:0px; top:7805px; padding:0px; width:200px; font-size:14px; color:#000; font-weight:bold">
		&nbsp;
</div>

<div style="position:absolute; left:345px; top:205px; padding:0px; width:250px; font-size:14px; color:#000; font-family:'Times New Roman', Times, serif">
	<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Choose Your Options:</span>
</div>
        
<div style="position:absolute; left:345px; top:235px; padding:0px; width:200px; font-size:14px; color:#000">
          <input type="radio" name="searchtype" value="photo" <? if($searchtype == 'photo') echo "checked"; ?> />
				Product / Project Photoss
</div> 

<div style="position:absolute; left:360px; top:255px; padding:0px; width:250px; font-size:12px; color:#000; font-family:'Times New Roman', Times, serif">
	<em>Find product examples.</em>
</div>              
                
<div style="position:absolute; left:345px; top:275px; padding:0px; width:250px; font-size:14px; color:#000">
          <input type="radio" name="searchtype" value="company" <? if($searchtype == 'company') echo "checked"; ?> />
  				Company Listings<br /><br />
</div>

<div style="position:absolute; left:360px; top:295px; padding:0px; width:250px; font-size:12px; color:#000; font-family:'Times New Roman', Times, serif">
	<em>Find companies suppyling<br>
	those products.</em>
</div>




<div style="position:absolute; left:100px; top:1580px; padding:0px; width:665px; font-size:14px; color:#000">
<? 
if($_GET['next']) {
    $oc = 'onchange="document.refine2.ca.value=\'yes\'; checkall(document.refine); document.refine.submit();"';
} else {
    $oc = 'onChange="document.refine2.submit();"';
} ?>
</div>

<div style="position:absolute; left:50px; top:345px; padding:0px; width:720px; font-size:14px; color:#000">
<?php if($operation == "ExpandCategory" && $_GET['next'] > 1) { ?>

                            <hr width="90%" noshade='noshade' size='-1' /><br />
                            <div style='margin-left: 10px;'>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            
                                            <div align="center"  style="margin-bottom: 20px;">
                                                <div style='font-size: 100%; float: left; margin-left: 0px; margin-top: 3px; z-index:100; position:relative; left:12px'>
												<script language="JavaScript">
												function toggle(source) {
  												checkboxes = document.getElementsByName('find[]');
  												for(var i=0, n=checkboxes.length;i<n;i++) {
    											checkboxes[i].checked = source.checked;
  												}
												}
												</script>
                                            
											<!-- <input type="checkbox" onClick="toggle(this)" /> Check All / Uncheck All<br/> -->


                                                </div>
                                                <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60">Specify Category Options&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            </div>
                                            <div class='infocontents'>
                                                <?    $vl->search_list($next, $categories);
                                               // include('categories.php'); 
                                                ?>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

								<?
} ?>
</div>

<br>
</form>

</div>
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