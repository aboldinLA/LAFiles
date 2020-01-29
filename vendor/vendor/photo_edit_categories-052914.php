<?php
    require_once ('photo_edit_categories_do.php');
    $product_id = $_GET['product_id'];
    $company_id = $_GET['company_id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Edit Photo Categories</title>
        <style type='text/css' media='screen'> @import "/res/css/vendor_signup.css"; </style>
        <style type='text/css' media='print'> @import "/res/css/vendor_signup.css"; </style>
        <script language='javascript' src='/res/js/jsOldLib.js'></script>

    </head>
    <body>
<!--<script type="text/JavaScript" src="/res/js/vdaemon.js"></script>-->

<SCRIPT LANGUAGE="JavaScript">
function checkCount(field){
    var count = document.RContact.count.value;
    var elem = document.getElementById('xlist_'+field);

    if(elem.checked)
    {
        if (count >= 5){
            alert('Sorry, only five categories can be chosen at a time.');
            elem.checked = false;
        }else{
            document.RContact.count.value++;
        }
    }
    else
    {
        document.RContact.count.value--;
    }
}
</SCRIPT>

    <div id='wrapper'>
    <table cellpadding='0' cellspacing='0' border='0'>
        <tbody>
        <tr>
            <td width='175'>
                <img src='/imgz/main_lol_logo.gif' border='0' />
            </td>
            <td valign='bottom' width='605'>
                <div class='pageTitle'></div>
            </td>
        </tr>
        </tbody>
    </table>

    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
        <tr class='pageContainer'> 
            <td valign='top' class='pageContent'>
            
        <form method="POST" name="RContact" action="photo_edit_categories_do.php">
            <div class="errSummary" id="VDaemonID_1" style="display:none"></div>
            <input type="hidden" name="id" value="<?= $product_id ?>" />
            
                <input type="hidden" name="company_id" value="<?php echo $company_id ?>" />
                <input type="hidden" name="action" value="true" />
                
                <table width='100%' cellpadding=2 cellspacing=0 border=0>

            <tr><td colspan='2'> <a name='topList'><h2>Categories</h2></a> </td></tr>

            <?php echo get_parents_html(); ?>
            
            <tr><td><a href='photo_edit.php?company_id=<?= $company_id ?>'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type="image" src="/imgz/continue-save.jpg" border="0" /></td></tr>
            
            <?php echo get_children_html($product_id); ?>
            
            
            <tr><td><a href='photo_edit.php?company_id=<?= $company_id ?>'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type="image" src="/imgz/continue-save.jpg" border="0" /></td></tr></table>
        </form>
                        </td>
            </tr>

        </table>
        </div>
    </body>
</html>
