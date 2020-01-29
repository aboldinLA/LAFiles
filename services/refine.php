<script language="JavaScript" type="text/javascript">
<!--
    function launchSearch(refine) {
        document.refine.searchby.value = refine;
        document.refine.submit();
    }
// -->
</script>
<form handler="<?= $_SERVER['PHP_SELF'] ?>" method="get" name="refine">
    <input type="hidden" value="<?= $_GET['localtype'] ?>" name="localtype" />
    <input type="hidden" value="<?= $_GET['vst'] ?>" name="vst" />
<table width="100%">
    <tr>
        <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[0].checked = true;">
            <input type="radio" name="searchby" value="ac" <? if($_GET['searchby'] == 'ac') echo("checked"); ?> />
            <strong>Area Codes: </strong>
            <input onFocus="this.form.searchby[0].checked = true;" size="6" type="text" name="areacodes" value="<?= $_SESSION['areacodes'] ?>" />
        </td>
        <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[1].checked = true;">
            <input type="radio" name="searchby" value="st" <? if($_GET['searchby'] == 'st') echo("checked"); ?> />
            <strong>State: </strong>
            <?= $C->select_state($state, "searchby[1]"); ?>
        </td>
<? if ($quicklaunch[$_GET['localtype']]['ac'] != TRUE) { ?>
        <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[2].checked = true;">
            <input type="radio" name="searchby" value="nl" <? if($_GET['searchby'] == 'nl') echo("checked"); ?> />
            <strong>National</strong>
        </td>
<? } ?>
        <td align="right">
            <div class="refinebuttonactive"><a href="javascript:document.refine.submit();">Search!</a></div>
        </td>
</tr>
</table>
<div>
    <strong>Multiple Area Codes can be seperated by commas or spaces.  Example: 818, 213, 800</strong>
</div>
<br>
<script language="JavaScript" type="text/javascript">
<!--
<? if($searchby == 'ac' || $searchby == '') { ?>
    document.refine.areacodes.focus();
<? } ?>

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
<? 
// xlist from previous search
if($q['adv']) {
    // advanced search
    // require "next"
    // once next, require "categories"
    if($_GET['next']) {
        $oc = 'onchange="document.refine.ca.value=\'yes\'; checkall(document.refine); document.refine.submit();"';
    } else {
        $oc = 'onChange="document.refine.submit();"';
    }
    ?>
    <select name="next" <?= $oc ?>>
        <option value="">Please choose a product category.</option>
        <? $vl->vendor_xlist_cate_find($next); ?>
    </select>
    <br>
    <?
    if($_GET['next'] > 1) {
        include("categories.php");
    } 
} else {
    if(!is_array($q['cat'])) {
        if(is_array($categories)) {
            foreach($categories as $value) {
                echo('<input type="hidden" name="find[]" value="' . $value . '" />');
            }
        }
        include("categories.php");
    }  
}
?>
</form>
