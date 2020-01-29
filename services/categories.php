<input name="ca" type="hidden" value="<?= $_GET['ca'] ?>" />
<span id="chkall" onclick="checkall(document.refine)" style="text-decoration:underline;cursor:hand;"><? if($_GET['ca'] == 'yes') { ?>Uncheck All<? } else { ?>Check All<? } ?></span><br>
<?php
    $M->types($categories, $q['pro'], 10);
?>
