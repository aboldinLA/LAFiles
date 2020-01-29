<?php
    switch($response) {
        case 'correction':
            $response = 'Correction';
            break;
        default:
            $response = 'General Comment';
            break;
    }
?>
<table width='100%' cellpadding='0' cellspacing='0' border='0'>
    <tr>
        <td class="cellhead" colspan="2">Reader Comments</td>
    </tr>
    <tr><td colspan="2"><hr noshade size="-1"></td></tr>
    <tr>
        <td colspan="2">
            <?= ucwords($first_name . " " .  $last_name); ?>
            wrote in with a
            <?= $response ?> about 
            <?= ucwords($title_text); ?>:
        </TD>
    </TR>
    <tr>
        <TD>&nbsp;</td>
        <td align="left">
            <table width="100%" border="0" cellspacing="3" cellpadding="3">
            <tr><td><?= trim(nl2br($comment)); ?></pre></td></tr>
            </table>
        </td>
    </TR>
</table>

