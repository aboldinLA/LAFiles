<?php 
    include('lol_common.inc'); 
    $secthdr = 'Subscription &amp; Professional Listing Options';
    include('lol_header.inc');

    $_SESSION['ptype'] = (isset($_REQUEST['protype'])) ? $_REQUEST['protype'] : 'c';
    $pt = & $_SESSION['ptype'];
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
    <tbody>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#FBEFB4'>
        <td class='rowBox'>
            <div class='advLabel'>Enhanced Listing &amp; Free Subscription</div>
            <div class='advSupp'>
            <a href='subscribe.php?protype=<?=$pt ?>&action=subscribe&hot=2'>Put your company in front of thousands of Developers, Property Administrators and Home Owners!</a> Beyond our free listings, an Enhanced Listing offers you...
            <ul>
                <li>Preferred listing status!  Rise above the free listings in search results, be the first company seen by people searching for the services you provide.</li>
                <li>A link directly to your web site, and an online profile for your company!</li>
                <li>Unbeatable pricing!  Preferred listings are just $9.95 a month!</li>
            </ul>
            Enhanced Listings appear in the order in which professionals sign up for them -- reserve yours today.
            </div>
        </td>
    </tr>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#D1FDD1'>
        <td class='rowBox'>
            <div class='advLabel'>Free Listing &amp; Free Subscription</div>
            <div class='advSupp'>
                <a href='subscribe.php?protype=<?=$pt?>&action=subscribe&hot=1'>List yourself in the Landscape Online Find a Pro database</a>, a resource specifically designed to provide to aid project managers searching for professionals in their region.  Listing priority is on a first come, first listed basis.
            </div>
        </td>
    </tr>
    <tr><td><hr noshade size='-1' /></td></tr>
    <tr bgcolor='#E1F8FE'>
        <td class='rowBox'>
            <div class='advLabel'>Subscription Only</div>
            <div class='advSupp'>
                Not interested in listing yourself online?  Then just <a href='subscribe.php?action=subscribe&protype=<?=$pt?>&hot=0'>fill out our subscription form</a> to sign up for your magazine subscription.
            </div>
        </td>
    </tr>
    </tbody>
</table>
<?php 
    include('lol_footer.inc'); 
?>
