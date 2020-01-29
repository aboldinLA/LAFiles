<?
include "lol_common.inc";

?>


<?
include("lo_top-main2.inc");
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

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-search-engines.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>New Vendor Profile Sign-Up Center</center></span><br>
<div>


<!-- Old Code Start -->

<form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
    <input type='hidden' name='form_id' value='<?= $this->form_id ?>' />
    <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Error(s) found:</h3>' />
    <div style="position:relative; top:15px">
        <h1 style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Now Tell Us What You Sell</h1>
        <span style="font-size:16px">Please select from the list of Product or Services categories below.<br /><br />
		The categories you select should reflect the primary products and services your business provides. <u><br /><br />
		<strong style="line-height:30px">You can select as many categories as apply to your company,</strong></u><br>
		HOWEVER please be careful not to select categories from which you don't provide the product or service.<br>
		We review every submission and reserve the right to edit your choices.<br /><br />
		You must select at least one product category to continue.</span>
    </div>
    
    <div style="position:relative; top:25px">
    <? 
        $xl = new xlist();
        $xl->displayXlistSelectionWidget($o['xlist'],$this->company['vendor_type']);
    ?>
    </div>
    
    <!--
    <table width='100%' cellpadding='2' cellspacing='0'>
<?php
    if(isset($o['xlist'])) {
        $xlist = $o['xlist'];
        // we have an xlist to work with
    } else {
        $xlist = array();
    }

    $xl = new xlist();
    if($this->company['vendor_type'] == 4 || $this->company['vendor_type'] == 5) {
        $parents = $xl->fetchXlistWholesaleParentArray();   
    } else {
        $parents = $xl->fetchXlistParentArray();
    }

    $pCount = count($parents);
    $tParents = array_slice($parents, 0, $pCount/2);
    $bParents = array_slice($parents, $pCount/2);  ?>
            <tr>
                <td colspan='2'> <a name='topList'><h2>Categories</h2></a></td>
            </tr>
    <? for($i = 0 ; $i < ceil($pCount/2) ; $i++) {
        print("<tr>");
        print("<td width='50%'><a href='#id{$tParents[$i]['id']}'>{$tParents[$i]['name']}</a></td>");
        print("<td><a href='#id{$bParents[$i]['id']}'>{$bParents[$i]['name']}</a></td>");
        print("</tr>");
    }
    ?>
            <tr>
                <td><a href='cancel.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue.gif' border='0' /></td>
            </tr>
    <?

    foreach($parents as $row => $obj) {
        $children = $xl->fetchXlistChildrenArray($obj['id']); 
        $pChildren = count($children);
        $tChildren = array_slice($children, 0, floor($pChildren/2));
        $bChildren = array_slice($children, floor($pChildren/2));
        ?>
        	<tr>
            	<td colspan='2'><a name='id<?= $obj['id'] ?>'><h2><?= $obj['name'] ?></h2></a></td>
        	</tr>
        <?
            for($i = 0 ; $i < ceil($pChildren/2) ; $i++) { 
                $s1 = (in_array($tChildren[$i]['id'],$xlist)) ? 'checked' : '';
                $s2 = (in_array($bChildren[$i]['id'],$xlist)) ? 'checked' : '';
            ?>

            <tr>
                <td>
                <? if(array_key_exists($i, $tChildren)) {
                ?>
                    <input type='checkbox' name='xlist[]' id='xlist_<?= $tChildren[$i]['id'] ?>' value='<?= $tChildren[$i]['id']?>' <?= $s1 ?> /> <?= $tChildren[$i]['name'] ?>
                <? } else { ?>
                    &nbsp;
                <? }?>
                </td>

                <td><input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?></td>
            </tr>
            <? }
        ?>
        	<tr>
            	<td colspan='2'><a href='#topList'>Back to Top</a></td>
            </tr>
        <?
    }
?>
            <tr>
                <td><a href='cancel.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue.gif' border='0' /></td>
            </tr>
    </table> -->
    
    <!-- <vlvalidator
        type='required'
        name='xlistReq'
        control='xlist[]'
        errmsg='Please select at least one product interests.'; /> -->
</form>


<!-- Old Code End -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:relative; left:312px; top:-8245px">
    	<?
		include $include_path . "banner-ads2.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1" style="position:relative; left:-150px">
	<? //include $include_path . "lo_footer-main2.inc"; ?>
	</div>
</div>	