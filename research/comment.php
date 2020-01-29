<?
include "lol_common.inc";
include $include_path . "class/research_class.inc";
$R = new research_Class($db);

include  $include_path . "lol_header2.inc";
if(is_numeric($id)) { 
	$data = $R->view_comment($id);
    $art  = $R->editorial_view($data['art_id'], 0);
    switch($data['response']) {
        case "correction":
            $response = "Correction";
            break;
        default: 
            $response = "General Comment";
    } 
}
?>
<TABLE width="100%" cellpadding="0" cellspacing="0">
    <TR> 
		<TD class="cellhead" colspan="2">Reader Comments</td>
    </tr>
    <tr><td colspan="2">
        <table width="100%" border="0" cellpadding="0" cellspcaing="0">
        <tr>
            <td><strong>For:</strong> <?= $art['title'] ?></td>
            <td align="center"><?= $art['source'] ?></td>
            <td align="right"><?= date("M Y ", $art['issue']) ?></td>
        </tr>
        </table>
    </td></tr>
    <tr><td colspan="2"><hr noshade size="-1"></td></tr>
    <tr>
        <td colspan="2">
            <?= ucwords($data['first_name'] . " " .  $data['last_name']); ?>
            wrote in with a 
            <?= $response ?>
            on <?= date("m/d/y", $data['input']); ?>:
		</TD> 
	</TR> 
    <tr>
		<TD>&nbsp;</td>
        <td align="left">
            <table width="100%" border="0" cellspacing="3" cellpadding="3">
            <tr><td><?= trim(nl2br($data['comment'])); ?></pre></td></tr>
            </table>
        </td>
	</TR> 
</table>
<? include $include_path . "lol_footer.inc"; ?>
