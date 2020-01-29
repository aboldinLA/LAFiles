<?php
echo('<table class="local-list" border="0" cellpadding="0" cellspacing="0" width="95%" align="center">');
    $i = 1;
    foreach($quicklaunch as $element) {
        if($element['ac']) {
            $sb = 'ac';
        } else {
            $sb = 'nl';
        }
        if(!$element['rawlink']) {
            $link = "subscribe.php?action=list&protype=" . $element['pro'];
            //$link = $_SERVER['PHP_SELF'] . "?localtype=" . $element['link'] . '&searchby=' . $sb;
        } else {
            $link = "subscribe.php?action=list&protype=" . $element['pro'];
            //$link = $element['link'];
        }
        if($i % 2)
            echo("<tr>\n");
        if(!$element['dummy']) {
        ?>
        <td height="48" valign="middle" width="10%">
            <a href="<?= $link ?>"><img height="45" width="45" src="<?= $element['image'] ?>" border="0"></a>
        </td>
        <td width="40%">
            <a href="<?= $link ?>"><div class="local-title"><strong><?= $element['title'] ?></strong></div></a>
            <div class="description"><?= $element['desc'] ?></div>
        </td>
        <?
        } else {
        ?>
            <td>&nbsp;</td><td>&nbsp;</td>
        <?
        }
        if(!($i % 2)) {
            ?> 
            </tr><tr><td colspan="4"><hr noshade size="-1"></td></tr>
            <?
        }
        $i++;
    }
echo('</table>');
?>
