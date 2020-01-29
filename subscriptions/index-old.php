<?php 
    include('lol_common.inc'); 
    $secthdr = 'Subscription &amp; Professional Listing Options';
    include('lol_header.inc');

    if($failedlogin == "1") {
        $error .= "Unknown User or Password!<br>";
        $error .= "Please choose a subscription below, or return to the ";
        $error .= "<a href=\"/member/login.php?t=s\">Subscription Login Page</a>.<br>";
    }
    if($defaultp == "1") {
        $error .= "Since this is your first visit to LandscapeOnline.com, we apologize for requiring you t
o enter your information again. ";
        $error .= "Please choose the magazine that you are updating your subscription for below.<br>";
    }


?>
<style type='text/css'>
    table.advList a { color: black; }
    table.advList a:hover { color: #83935E; }

    div.advLabel {
        font-color: black;
        font-family: Helvetica, sans-serif;
        font-weight: bolder;
        font-size: 16px;
    }

    div.advSupp {
        font-family: Helvetica, sans-serif;
        font-weight: bold;
        padding: 4px;
        font-size: 12px;
    }
    div.advContent {
        padding: 6px;
    }

    td.rowBox {
        border: 1px solid #dddddd;
    }

    div.rightFloater {
        float: right;
        padding: 5px;
        width: 75px;
    }

    div.splain {
        font-size: 12px;
        padding: 5px;
        border-right: 1px solid #dddddd;
    }

</style>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#FBEFB4'>
        <td class='rowBox'>
<?php
    if($error) {
        $C->errors($error);
    } else {
?>

            <div class='advLabel'>Vendor Listing</div>
            <div class='advSupp'>
                If you are a Vendor, Manufacturer's Representative, Turf Farm, Plant Material Supplier, Wholesale or Retail Facility, please sign up for <a href='/vendor/'>product search listings.</a>
            </div>
<?php } ?>
        </td>
    </tr>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#D1FDD1'>
        <td class='rowBox'>
            <div class='advLabel'>New Subscriptions &amp; Online Listings</div>
            <div class='advSupp' width='100%'>
                <table width='100%' cellpadding='0' cellspacing='0'>
                    <tbody>
                        <tr> 
                            <td width='33%' valign='top'>
                                <div class='splain'>
                                    <center><a href='options.php?protype=d'><img src='lasn_logo.gif' border='1' /></a></center>
                                    <div class='advContent'>
                                        <a href='options.php?protype=d'>Begin your <strong>FREE</strong> professional subscription</a> to the #1 publication for Landscape Architects, Designers, Planners, Developers and Property Administrators in North America. #1 in Features, Columns, News and Product Information. 12 issues/yr.
                                    </div>
                                </div>
                            </td>
                            <td width='33%' valign='top'>
                                <div class='splain'>
                                    <center><a href='options.php?protype=c'><img src='lcn_logo.gif' border='1' /></a></center>
                                    <div class='advContent'>
                                        The premiere source of information for Landscape Contractors.  <a href='options.php?protype=c'>Begin your <strong>FREE</strong> professional subscription</a> to the only publication specifically designed for the Landscape Contractor Business Owner nationwide. #1 in Features, Columns, News and Product Information. 12 issues/yr.
                                    </div>
                                </div>
                            </td>
                            <td width='33%' valign='top'>
                                <div class='splain'>
                                    <center><a href="mailto:circulation@landscapeonline.com?subject=LSMP Subscription"><img src='lsmp_logo.gif' border='1' /></a></center>
                                    <div class='advContent'>
                                        <a href="mailto:circulation@landscapeonline.com?subject=LSMP Subscription">Begin your <strong>FREE</strong> professional subscription</a> to LSMP, the only industry magazine geared primary for Landcape Superintendents, Facility Managers and institutional maintenance professionals.  4 issues/yr.
                                    </div>
                                </div>
                            </td>
                    </tbody>
                </table>
            </div>
        </td>
    </tr>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#E1F8FE'>
        <td class='rowBox'>
            <div class='advLabel'>Current Subscribers</div>
            <div class='advSupp'>
                <a href='/subscriptions/subscribe.php?action=edit'>Please sign</a> in to update or edit your subscription and listing information.
            </div>
        </td>
    </tr>
</table>
<?php 
    include('lol_footer.inc'); 
?>
