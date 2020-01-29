<?php
    include('lol_common.inc');
    $_lol_title = "Sign-up Now!!!";
    include('lol_header.inc');
?>
<table width='535' border='0' cellpadding='0' cellspacing='0'>
    <tr>
        <td height='22' background='/imgz/header_bg.gif'><div class='headerText'>Vendor Listing</div></td>
    </tr>
    <tr>
        <td background='/imgz/stageListbg.jpg'>
            <table id='stageList' width='100%' border='0' cellpadding='0' cellspacing='0'>
                <tbody>
                    <tr>
                        <td align='center' class='completed'>Free Listings</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Linked Listings</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Vendor Profiles</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Product Specific Searches</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>
<TABLE WIDTH=535 BORDER=0 CELLPADDING=0 CELLSPACING=0>
    <TR>
        <TD COLSPAN=2>
            <IMG SRC="images/vendor_splash_01.gif" WIDTH=535 HEIGHT=412 BORDER=0 ALT=""></TD>
    </TR>
    <TR>
        <TD>
            <A HREF="/vendor/signup/index.php?hotlink=1&btype=<?= $_REQUEST['btype'] ?>"
                ONMOUSEOVER="window.status='Sign up for an Enhanced Listing!';  return true;"
                ONMOUSEOUT="window.status='';  return true;">
                <IMG SRC="images/vendor_splash.gif" WIDTH=160 HEIGHT=158 BORDER=0 ALT=""></A></TD>
        <TD>
            <IMG SRC="images/vendor_splash_03.gif" WIDTH=375 HEIGHT=158 ALT=""></TD>
    </TR>
</TABLE>
<hr noshade size='-1' />
<h2 align='left'><a href='/vendor/signup/index.php?btype=<?= $_REQUEST['btype'] ?>'>Sign up for a Basic Listing</a></h2>
<?
    include('lol_footer.inc');
?>
