<?php
include "lol_common.inc";
include $include_path . "lol_header2-js.inc";
    if($pos = strpos($pageTitle, " :: ")) {
        $pt = substr($pageTitle, 0, $pos);
    } else {
        $pt = $pageTitle;
    }
?>
        <style type='text/css' media='screen'>@import "vendor_styles-js.css";</style>
    <body>
    <div align="left" style="position: absolute; left:10px; top:0px">        

    <div id='wrapper'>
    <table cellpadding='0' cellspacing='0' border='0'>
        <tbody>
        <tr>
             <td valign='middle' width='605'>
                <div class='pageTitle'><?= $pt ?></div>
            </td>
        </tr>
        </tbody>
    </table>
    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
        <tr class='pageContainer'> 
            <!-- <td width='85' valign='top' align='right' class='stageLabel'>
                <? if(!$noShowButton) { ?>
                <div class='labelButton'><?= $this->form_id ?></div>
                <? } ?>
            </td> -->
            <td valign='top' class='pageContent'>
