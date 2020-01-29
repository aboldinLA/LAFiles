<?php 
    include('lol_common.inc'); 
    $secthdr = 'Vendor Listing Options';
    include('lol_header.inc');
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
        padding: 4px;
        font-size: 12px;
    }
    div.advContent {
        padding: 4px;
    }

    td.rowBox {
        border: 1px solid #dddddd;
    }

    div.rightFloater {
        float: right;
        padding: 5px;
        width: 75px;
    }

</style>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#FBEFB4'>
        <td class='rowBox'>
            <div class='advLabel'>LandscapeOnline now offers Enhanced Vendor Listings!</div>
            <div class='advSupp'>For only $19.95 a month, you can place your company above the competition!  Your listing will appear above free listings, and will link directly to your company web site and your company profile.  Paid listings are positioned on a first come, first serve bases, and will remain in that position as long as your listing is active.  Sign up now!<br />
            <a href='profile.php?action=add&hot=1'>Place your company above the crowd with a link to your website directly from your LandscapeOnline Product Search listing!  Only $19.95/month!</a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <a href='profile.php?action=add&hot=1'><img src='vendor_splash.gif' /></a>
            <br />
        </td>
    </tr>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#D6DAFD'>
        <td class='rowBox'>
            <div class='advLabel'>Basic, FREE Listing!</div>
            <div class='advSupp'>
                Our basic listings allow you to ...
                <ul>
                    <li>List yourself according to the regions and products you provide.</li>
                    <li>Provide your phone number to prospective customers directly in our product index.</li>
                    <li>Maintain contact information for future Landscape Communications publishing.</li>
                </ul>
                <a href='profile.php?action=add&hot=0'>Sign up for a FREE listing in our product search database now!</a>
            </div>
        </td>
</table>
<?php 
    include('lol_footer.inc'); 
?>
