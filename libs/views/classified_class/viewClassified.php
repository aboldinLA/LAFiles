<div class='classified'>

    <div id='classTitle'><?= stripslashes($adTitle); ?></div>

    <div id='classText'>

    <?= nl2br(stripslashes($adText)); ?><br />

    <? if(strlen($email) > 1) { ?>

    <a href='<?= $_SERVER['PHP_SELF'] ?>?action=respond&id=<?= $id ?>'>Respond</a>

    <? } ?>

    </div>

</div>

