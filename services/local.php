<div id='pageBody'>
<h2 class='attn'>Local Professional Search</h2>
<hr noshade size='-1' />
<?php
echo('<table class="local-list" border="0" cellpadding="2" cellspacing="2" width="95%" align="center">');
    $i = 1;
    foreach($quicklaunch as $element) {
        if($element['ac']) {
            $sb = 'ac';
        } else {
            $sb = 'nl';
        }
        if(!$element['rawlink']) {
            $link = $_SERVER['PHP_SELF'] . "?localtype=" . $element['link'] . '&searchby=' . $sb;
        } else {
            $link = $element['link'];
        }
        if($i % 2)
            echo("<tr>\n");
        if(!$element['dummy']) {
        ?>
        <td height="60" valign="middle" width="10%">
            <a href="<?= $link ?>"><img height="60" width="60" src="<?= $element['image'] ?>" border="0"></a>
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
</div>
