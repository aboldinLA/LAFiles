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

$display = "none";

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


    <form handler="<? $_SERVER['PHP_SELF'] ?>" method="get" name="refine" style='margin: 0; padding: 0; '>
    <input type="hidden" value="<?= $localtype ?>" name="localtype" />
    <input type="hidden" value="<?= $_GET['vst'] ?>" name="vst" />
    
<!-- Added Section -->
 
<!-- Keyword Search Section Section Start -->
<div style="position:relative; top:-10px; font-family:'Times New Roman', Times, serif; font-size:16px; font-style:italic">
	<span style="font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold">Keyword Search:</span> (Just enter a Product or Company to begin search.)
</div><br /><br />

<div style="position:absolute; left:20px; top:355px; padding:0px; width:500px; font-size:28px; color:#000; font-weight:bold">
		<input type='text' name='keyword' value="<?=$keywd?>" style="width:275px; height:25px; background-color:#CCC; box-shadow: 5px 5px 5px #888888"/>
        <input type="submit" type="hidden" alt="Search" align="middle" name="op1" value="Keyword Search" style="width:150px; height:25px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FFF; background-color:#524c44; box-shadow: 5px 5px 5px #888888"/>
</div>
    <span style="position:relative; left:15px; top:5px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold"><a href="javascript:ReverseDisplay('uniquename')">
Advanced Search show/hide. </a></span>

<!-- Keyword Search Section Section End -->

<!-- Feature Products Section Start -->
<div style=" position:relative; left:0px; top:20px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
	<span style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#a67d3b">Feature Products:</span>
 	<!-- Start Section 2 Boxes -->
    	<table width="763">
        	<tr>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3"">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details2">
					<h4>Kidstuff Playsystems</h4>
					<p>Revolutionary new safety surface made of loose rubber</p>
				</div>
			</a>
			<div class="mosaic-backdrop" style="position:relative; top:30px"><img src="/imgz2/Product1.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3"">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Koolfog</h4>
					<p>Fog Can delivers a stunning fog blanket that perfectly enhances any deck fountain</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product2.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3"">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Landscape Structures</h4>
					<p>Stimulate your senses with Pulse! With light, sound, touch and more...</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product3.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3"">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>LTR Products</h4>
					<p>Landscaping just got a lot SMARTER. GroundSmart Rubber Mulch is the...</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product4.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Miracle Recreation</h4>
					<p>Get back to nature with Nature's Choice by Miracle!</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product5.jpg" width="125" /></div>
				</div>
        	</td>
   		</tr>
    </table>        
 	<!-- End Section 2 Boxes -->
<div class="clear"></div>
<!-- Feature Products Section End -->

	<!-- Advanced Search Link Start -->
<script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//--></script>

<div id="uniquename" style="display:<? echo $display ?>">

<!-- Advance Search Section Start -->
<div class="tb4" style="position:relative; top:20px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Advance Search&nbsp;&nbsp
</div><br /><br /> 

<!-- Product Search Section -->    
<div style="position:relative; top:0px; padding:0px; width:500px; font-size:22px; color:#C60; font-weight:bold">
		Product Category:<br />
        <span style="font-family:'Times New Roman', Times, serif; font-size:16px; font-style:italic; color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Choose Category)</span>
</div>

<div style="position:relative; left:205px; top:-25px; padding:0px; width:500px; font-size:28px; color:#000; font-weight:bold">
		<select name="next" style="width:325px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; background-color:#CCC; box-shadow: 5px 5px 5px #888888" onchange="document.refine.submit(); ">
        	<option value="">Please choose a <?= $titleCat ?> category.</option>
            <? if($localtype == 'services') {
            $vl->vendor_xlist_cats_find($nextDisplay);
            } else {
            $vl->vendor_xlist_catp_find($nextDisplay); 
             }
			 ?>
        </select>
        
        <?

		if(($_GET["next"] == "35") || ($_GET["next"] == "34")){
		$searchtype = "company";
		}
		else{
			$searchtype = "photo";
		}
	
		?>
</div>

<div style="position:absolute; left:335px; top:380px; padding:0px; width:500px; font-size:28px; color:#000; font-weight:bold">
            <? if($operation == "SearchCategory") { 
            if(!is_array($quicklaunch[$localtype]['cat'])) {
            if(is_array($categories)) {
            	foreach($categories as $value) {
                	echo('<input type="hidden" name="xlist[]" value="' . $value . '" />');
                    	}
                	 }
                }  
             ?>
<div style="position:relative; left:210px; top:-127px">
		<input type="submit" alt="Modify" align="middle" name="op3" value="Modify"  style="width:150px; height:25px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FFF; background-color:#524c44; box-shadow: 5px 5px 5px #888888"/>
        </div>
       		<? } else { ?>
<div style="position:relative; left:210px; top:-127px">
    	<input type="submit" alt="Search" align="middle" name="op2" value="Search Category"  style="width:150px; height:25px; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FFF; background-color:#524c44; box-shadow: 5px 5px 5px #888888"/>
        	<? } ?>
   		<input name="ca" type="hidden" value="<?= $ca ?>" />
        </div>
</div>

<div style="position:relative; left:20px; top:0px; padding:0px; width:250px; font-size:14px; color:#000; font-family:'Times New Roman', Times, serif">
	<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Choose Your Options:</span>
</div>

<div style="position:relative; left:25px; top:55px; padding:0px; width:250px; font-size:14px; color:#000; font-family:'Times New Roman', Times, serif">
	<em>Find product examples and/or<br />companies suppling those products.</em>
</div>

<div style="position:relative; left:500px; top:-5px; padding:0px; width:250px; font-size:14px; color:#000; font-family:'Times New Roman', Times, serif">
	<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-style:italic">
	<em>(*For multiple area codes enter in<br />the following format: 949 714 909)</em>
</div>

<div style="position:relative; left:10px; top:630px; padding:0px; width:425px; font-size:12px; color:#000; font-family:'Times New Roman', Times, serif">
	
</div>
           
<div style="position:relative; left:280px; top:-75px; padding:0px; width:200px; font-size:14px; color:#000; font-weight:bold">
	Define your Region:
</div>

<div style="position:relative; left:500px; top:-90px; padding:0px; width:200px; font-size:14px; color:#000; font-weight:bold">
	Localize by area code:
</div>

<div style="position:relative; left:279px; top:-85px; padding:0px; width:200px; font-size:14px; color:#000">
    <? if (($quicklaunch[$_GET['localtype']]['st'] != TRUE) && 
    ($quicklaunch[$_GET['localtype']]['ac'] != TRUE )) { ?>
      <input type="radio" name="searchby" value="nl" <? if($searchby == 'nl') echo("checked"); ?> />
                     National
</div>

<div style="position:relative; left:279px; top:-75px; padding:0px; width:200px; font-size:14px; color:#000">
	<input type="radio" name="searchby" value="st" <? if($searchby == 'st') echo("checked"); ?> />
        State <?= $C->select_state($state, "searchby[1]"); ?>
</div>

<div style="position:relative; left:500px; top:-120px; padding:0px; width:200px; font-size:14px; color:#000">
		<input type="radio" name="searchby" value="ac" <? if($_GET['searchby'] == 'ac') echo("checked"); ?> />

		Area Codes
		<?php if($_GET["searchby"] == "ac"){
               $areacodes = $_GET['areacodes'];
                          }
               else {
                      $areacodes = "";
                                      } ?>
                <input onFocus="this.form.searchby[2].checked = true;" size="6" type="text" name="areacodes" value="<?php echo $areacodes;  ?>" />
 </div>                   
                     
    <? } ?>
    
    
    
<div style="position:relative; left:0px; top:0px; padding:0px; width:200px; font-size:14px; color:#000; font-weight:bold">
		&nbsp;
</div>        
        
<div style="position:relative; left:21px; top:-150px; padding:0px; width:200px; font-size:14px; color:#000">
          <input type="radio" name="searchtype" value="photo" <? if($searchtype == 'photo') echo "checked"; ?> />
				Product / Project Photos
</div>               
                
<div style="position:relative; left:21px; top:-140px; padding:0px; width:250px; font-size:14px; color:#000">
          <input type="radio" name="searchtype" value="company" <? if($searchtype == 'company') echo "checked"; ?> />
  				Company Listings<br /><br />
</div>


<div style="position:relative; left:21px; top:-140px; padding:0px; width:250px; font-size:14px; color:#000">
<? 
if($_GET['next']) {
    $oc = 'onchange="document.refine.ca.value=\'yes\'; checkall(document.refine); document.refine.submit();"';
} else {
    $oc = 'onChange="document.refine.submit();"';
} ?>
</div>

<div style="position:relative; left:21px; top:-140px; padding:0px; width:750px; font-size:14px; color:#000">
<?php if($operation == "ExpandCategory" && $_GET['next'] > 1) { ?>

                            <hr width="90%" noshade='noshade' size='-1' /><br /><br /><br />
                            <div style='margin-left: 10px;'>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            
                                            <div align="center">
                                                <div style='font-size: 100%; float: left; margin-left: 0px; margin-top: 3px; z-index:100; position:relative; left:12px'>
												<script language="JavaScript">
												function toggle(source) {
  												checkboxes = document.getElementsByName('find[]');
  												for(var i=0, n=checkboxes.length;i<n;i++) {
    											checkboxes[i].checked = source.checked;
  												}
												}
												</script>
                                            
											<input type="checkbox" onClick="toggle(this)" /> Check All / Uncheck All<br/>


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





        
<!-- Advance Search Section End -->

</div>

	<!-- Advanced Search Link End -->

<!-- Advance Search Section Start -->
<div class="tb4" style="position:relative; top:20px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Search Results&nbsp;&nbsp
</div><br /><br />   







      
<!-- Advance Search Section End -->
        
        
        
        
                                   
                


    
    

    
    
    
    
    
	</div>
    
<!-- End Added Section -->    
    
<!-- Search Section -->  

<!-- Product Search Section -->    





<!-- Second Button Start 
<div style="position:absolute; left:620px; top:620px; z-index:100; padding:0px; width:500px; font-size:28px; color:#000; font-weight:bold">
            <? if($operation == "SearchCategory") { 
            if(!is_array($quicklaunch[$localtype]['cat'])) {
            if(is_array($categories)) {
            	foreach($categories as $value) {
                	echo('<input type="hidden" name="xlist[]" value="' . $value . '" />');
                    	}
                	 }
                }  
             ?>
<div style="position:relative; left:-200px">
		<input type="submit" alt="Modify" align="middle" name="op3" value="Modify" style="width:100px; height:30px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:18px; color:#C60; background-color:#c0c0c0"/>
        </div>
       		<? } else { ?>
<div style="position:relative; left:-200px">
    	<input type="submit" alt="Search" align="middle" name="op2" value="Search" style="width:100px; height:30px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:18px; color:#C60; background-color:#c0c0c0"/>
        	<? } ?>
   		<input name="ca" type="hidden" value="<?= $ca ?>" />
        </div>
</div>
Second Button End -->








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
