<?php 
  /*
<input name="ca" type="hidden" value="<?= $_GET['ca'] ?>" />
<span id="chkall" onclick="checkall(document.refine)" style="text-decoration:underline;cursor:hand;"><? if($_GET['ca'] == 'yes') { ?>Uncheck All<? } else { ?>Check All<? } ?></span><br>
  */
?>
<?php
if($quicklaunch[$_GET['localtype']]['adv']) {
    $vl->search_list($next, $categories);
} else {
    if(!is_array($types)) {
        $vl->search_list($types, $categories);
    } else {
        foreach($types as $key => $value) {
            if($value == 4) {
                $vl->search_list($value, $categories, 'Wholesale');
            } else if ($value == 5) {
                $vl->search_list($value, $categories, 'Retail');
            } else {
                $vl->search_list($value, $categories);
            }
        }
    }
}
?>
