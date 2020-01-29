<?php
include "lol_common.inc";
include $include_path . "lol_header2.inc";
    if($pos = strpos($pageTitle, " :: ")) {
        $pt = substr($pageTitle, 0, $pos);
    } else {
        $pt = $pageTitle;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title><?= $pageTitle ?></title>
        <style type='text/css' media='screen'> @import "/res/css/vendor_signup.css"; </style>
        <style type='text/css' media='print'> @import "/res/css/vendor_signup.css"; </style>
        <script language='javascript' src='/res/js/jsOldLib.js'></script>
    </head>
    <body>
    <div align="left" style="position: absolute; left:10px; top:0px">        
    <div id='wrapper'>
    <table cellpadding='0' cellspacing='0' border='0'>
        <tbody>
        <tr>
             <td valign='middle' width='650'>
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

