<form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
    <input type='hidden' name='form_id' value='<?= $this->form_id ?>' />
    <vlsummary class='errSummary' displaymode='bulletlist' headertext='<h3>Error(s) found:</h3>' />
    <div>
        <h1>Now Tell Us What You Sell</h1>
        <span style="font-size:14px">Please select from the list of Product or Services categories below.<br /><br />
The categories you select should reflect the primary products and services your business provides. <u><br /><br />
<strong>You can select as many categories as apply to your company,</strong></u> HOWEVER be careful not to<br />
select categories from which you don’t provide the product or service as <u><strong>you will get calls from those search results!</strong></u><br /><br />
You must select at least one product category to continue.</span>
    </div>
    <? 
        $xl = new xlist();
        $xl->displayXlistSelectionWidget($o['xlist'],$this->company['vendor_type']);
    ?>
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
                <td colspan='2'> <a name='topList'><h2>Categories</h2></a> </td>
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
                <td align='right'><input type='image' src='continue2.gif' border='0' /></td>
            </tr>
    <?

    foreach($parents as $row => $obj) {
        $children = $xl->fetchXlistChildrenArray($obj['id']); 
        $pChildren = count($children);
        $tChildren = array_slice($children, 0, floor($pChildren/2));
        $bChildren = array_slice($children, floor($pChildren/2));
        ?>
        <tr>
            <td colspan='2'>
                <a name='id<?= $obj['id'] ?>'><h2><?= $obj['name'] ?></h2></a>
            </td>
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

                <td>
                    <input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?>
                </td>
            </tr>
            <? }
        ?>
        <tr><td colspan='2'><a href='#topList'>Back to Top</a></td></tr>
        <?
    }
?>
            <tr>
                <td><a href='cancel.php'><img src='cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='continue2.gif' border='0' /></td>
            </tr>
    </table> -->
    <!-- <vlvalidator
        type='required'
        name='xlistReq'
        control='xlist[]'
        errmsg='Please select at least one product interest.'; /> -->
</form>
