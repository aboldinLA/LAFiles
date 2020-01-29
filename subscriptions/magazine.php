<?php
    include('lol_common.inc');
    $_lol_title = $secthdr = 'Almost Finished...';

    if(!isset($_SESSION['uid'])) { header('/subscriptions/index.php'); }
    include('lol_header.inc');

    switch($protype) {
        case 'c': $mag = 'Landscape Contractor National'; $img= 'lcm_logo.jpg';  break;
        case 's': $mag = 'Landscape Superintendent and Maintenance Professional'; $img='lsmp_logo_sm.jpg'; break;
        case 'd': default:  $mag = 'Landscape Architect and Specifier News'; $img='lasn_logo.jpg'; break;
    }
?>
    <div align='left' style='text-align: left;'>
    <h2>Congratulations!  You're almost finished -- Just one more question:</h2>
    <center>
        <h1> Do you want a free subscription to</h1>
        <img src='/imgz/<?= $img ?>' border='0' />
    </center>
    <p>
        You may qualify for a free professional subscription to <?= $mag ?>.
    </p>
    <p>
        To receive this free publication, check the Yes box and we will begin your free professional subscription if you qualify.
    </p>
    <form action='thank_you.php' method=GET>
        <input type='hidden' name='protype' value='<?= $protype ?>' />
        <input checked type='radio' name='wantmag' value='yes'><strong>Yes, I want to receive <?= $mag ?></strong></input><br />
        <input type='radio' name='wantmag' value='no'>No Thanks, I do not wish to receive <?= $mag ?></input><br />
        <input type='radio' name='wantmag' value='already'>Thanks, but I already have a subscription.</input>
        <center><input type='submit' name='Continue' value='Continue' /></center>
    </form>
    </div>
<?
    include('lol_footer.inc');
?>
