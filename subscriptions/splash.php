<?php
    include('lol_common.inc');
    //$secthdr = "Subscriptions";
    $_lol_title = "Sign-up Now!!!";
    include('lol_header.inc');
?>
<table width='535' border='0' cellpadding='0' cellspacing='0'>
    <tr>
        <td height='22' background='/imgz/header_bg.gif'><div class='headerText'>Opportunities in Your Local Market</div></td>
    </tr>
    <tr>
        <td background='/imgz/stageListbg.jpg'>
            <table id='stageList' width='100%' border='0' cellpadding='0' cellspacing='0'>
                <tbody>
                    <tr>
                        <td align='center' class='completed'>Basic Listing</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Top Position Linked Listing</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Local Clientelle</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>

<TABLE WIDTH=534 BORDER=0 CELLPADDING=0 CELLSPACING=0>
    <TR>
        <TD COLSPAN=2>
                <IMG SRC="images/new-professional_01.gif" WIDTH=534 HEIGHT=155 BORDER=0 ALT=""></TD>
    </TR>
    <TR>
        <TD ROWSPAN=2>
                <IMG SRC="images/new-professional_02.gif" WIDTH=336 HEIGHT=269 BORDER=0 ALT=""></TD>
        <TD>
            <A HREF="subscribe.php?protype=<?= $protype ?>&action=subscribe&hot=2">
                <IMG SRC="images/new-professional_03.gif" WIDTH=198 HEIGHT=28 BORDER=0 ALT="Sign up for a 
Linked Listing"></A></TD>
    </TR>
    <TR>
        <TD>
            <IMG SRC="images/new-professional_04.gif" WIDTH=198 HEIGHT=241 ALT="Link your listing to your 
company website for one low fee of $9.95/mo, covers all locations."></TD>
    </TR>
    <TR>
        <TD COLSPAN=2>
            <A HREF="subscribe.php?protype=<?= $protype ?>&action=subscribe&hot=2">
                <IMG SRC="images/new-professional_05.gif" WIDTH=534 HEIGHT=54 BORDER=0 ALT=""></A></TD>
    </TR>
</TABLE>
<h2 style='font-size: 16px;'><a href='subscribe.php?protype=<?= $protype ?>&action=subscribe&hot=1'>Sign up for a Basic Listing</a></h2>
<hr noshade size='-1' />
<h2 style='font-size: 16px;'><a href='subscribe.php?protype=<?= $protype ?>&action=subscribe&hot=0'>Sign up for a Free Professional Subscription Only</a></h2>
<?
    include('lol_footer.inc');
?>
