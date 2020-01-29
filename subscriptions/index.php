<?php
    include('lol_common.inc');
    $_lol_title = "Subscriptions &amp; Online Listings";
    //$secthdr = "Subscriptions &amp; Online Listings";
    include('lol_header2.inc');

    $defaultTag = "<strong>Begin</strong> your Free Company Listing &amp; Magazine Subscription.";
    $map = array(
        0 =>    array(
                    'name' => 'Landscape Architects',
                    'mag'  => 'd'
                ),
        1 =>    array(
                    'name' => 'Landscape Contractors',
                    'mag'  => 'c'
                ),
        2 =>    array(
                    'name' => 'Land Planner or Commercial Developer',
                    'mag'  => 'd'
                ),
        3 =>    array(
                    'name' => 'Private Landscape Maintenance Company',
                    'mag'  => 'c'
                ),
        4 =>    array(
                    'name' => 'Operate or Develop Resort Hotels or Amusement Parks',
                    'mag'  => 'd',
                    'nolist' => TRUE
                ),
        5 =>    array(
                    'name' => 'Landscape Facility Maintenance',
                    'text' => 'Click here if you are a landscape superintendent, facility, or general manager at a University, commercial facility, cemetery, city park or other government entity.',
                    'mag'  => 's',
                    'nolist' => TRUE
                ),
        6 =>    array(
                    'name' => 'Erosion Control Consultants',
                    'mag'  => 'd'
                ),
        7 =>    array(
                    'name' => 'Hydroseeders',
                    'mag'  => 'c'
                ),
        8 =>    array(
                    'name' => 'Lighting Consultants',
                    'mag'  => 'd'
                ),
        9 =>    array(
                    'name' => 'Pool Contractors',
                    'mag'  => 'c'
                ),
        10 =>   array(
                    'name' => 'Irrigation Consultants',
                    'mag'  => 'd'
                ),
        11 =>   array(
                    'name' => 'Tree/Arbor Care',
                    'mag'  => 'c'
                ),
        12 =>   array(
                    'name' => 'Other Design Professionals',
                    'mag'  => 'd'
                ),
        13 =>   array(
                    'name' => 'Other Installation/Maintenance Professionals',
                    'mag'  => 'c'
                )
    );
    ?>
    <style type='text/css'>
        div.subImg {
            float: left;
            vertical-align: center;
            right: 50%;
            left: 50%;
            height: 65px;
            width: 65px;
        }

        div.subBox h4 {
            margin-bottom: 2px;
            text-decoration: underline;
        }

        div.subBox div.tag {
            padding-left: 75px;
        }
        div.subBox div.tag a {
            color: black;
            text-decoration: none;
        }
    </style>
<table width='535' border='0' cellpadding='0' cellspacing='0'>
    <tr>
        <td height='22' background='/imgz/header_bg.gif'><div class='headerText'>Signup Opportunities</div></td>
    </tr>
    <tr>
        <td background='/imgz/stageListbg.jpg'>
            <table id='stageList' width='100%' border='0' cellpadding='0' cellspacing='0'>
                <tbody>
                    <tr>
                        <td align='center' class='completed'>Basic Listings</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Linked Listings</td>
                        <td class='stageSpacer'><img src='/imgz/stage_spacer.gif' border='0' /></td>
                        <td align='center' class='completed'>Free Subscriptions</td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>
    <table width='100%' border='0' cellpadding='0' cellspacing='5'>
    <?
    foreach($map as $idx => $obj) {
        if(!($idx % 2)) print("<tr>");
        switch($obj['mag']) {
            case 'c':
                $img = 'services_contractor.jpg';
                break;
            case 'd':
                $img = 'services_design.jpg';
                break;
            case 's':
                $img = 'services_super.jpg';
                break;

        }
        //if($obj['mag'] == 's') {
        //    $link = 'mailto:circulation@landscapeonline.com?subject=LSMP Subscription';
        //} else {
            //kozo//if($obj['nolist']) {
                $link = 'subscribe.php?protype=' . $obj['mag'] . '&action=subscribe&hot=0';
            //kozo//} else {
            //kozo//    $link = 'used_by.php?mag=' . $obj['mag'];
            //kozo//}
        //}
        ?>
        <td width='50%' valign='top'>
            <div class='subBox'>
                <div class='subImg'><a href='<?= $link ?>'><img src='/imgz/<?= $img ?>'  height='60' width='60' border='1' /></a></div>
                <h4><a href='<?= $link ?>'><?= $obj['name'] ?></a></h4>
                <div class='tag'><a href='<?= $link ?>'><?= ($obj['text']) ? $obj['text'] : $defaultTag ?></a></div>
            </div>
        </td>
        <?
        if(!($idx+1 %2)) print("</tr>");
    }
    ?>
        </tr>
    </table>
<?
    include('lol_footer.inc');
?>
