<?php
    include('lol_common.inc');
    //$secthdr = "Used By...";
    $_lol_title = "Listing Choice";
    include('lol_header.inc');
?>

<table width='535' border='0' cellpadding='0' cellspacing='0'>
    <tr>
        <td height='22' background='/imgz/header_bg.gif'><div class='headerText'>Used By...</div></td>
    </tr>
    <tr>
        <td background='/imgz/stageListbg.jpg'>
            <table id='stageList' width='100%' border='0' cellpadding='0' cellspacing='0'>
                <tbody>
                    <tr>
                        <td align='center' class='completed'>Developers</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Parks &amp; Resorts</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Commercial Facilities</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Homeowners</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>

    <a href='splash.php?protype=<?= $mag ?>'><img src='who_uses.gif' border='0' /></a>
<?
    include('lol_footer.inc');
?>
