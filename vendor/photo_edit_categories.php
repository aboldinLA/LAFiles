<?php
	include "lol_common-main.inc";
	include $include_path . "lo_top-main-ven.inc";
    require_once ('photo_edit_categories_do.php');
    $product_id = $_GET['product_id'];
    $company_id = $_GET['company_id'];
?>


        <style type='text/css' media='screen'> @import "/res/css/vendor_signup.css"; </style>
        <style type='text/css' media='print'> @import "/res/css/vendor_signup.css"; </style>
        <script language='javascript' src='/res/js/jsOldLib.js'></script>
        
<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  
<?
include $include_path . "lo_header-main-ven.inc";

	
?>

</div>

<!-- Content Section -->
<!-- Begin Section 1 -->  
<div class="main1">

<div style="position:relative; top:-115px">
<div class="tb3" style=" position:relative; left:-10px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Photo Category
   Center:&nbsp;&nbsp
</div><br /><br />

<!-- Begin Old Code -->  

<SCRIPT LANGUAGE="JavaScript">
function checkCount(field){
    var count = document.RContact.count.value;
    var elem = document.getElementById('xlist_'+field);

    if(elem.checked)
    {
        if (count >= 1){
            alert('Sorry, only one category can be chosen.');
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

    <div>
    <table cellpadding='0' cellspacing='0' border='0'>
        <tbody>
        <tr>
            <td width='175'>
                <img src='/imgz/main_lol_logo.gif' border='0' />
            </td>
            <td valign='bottom' width='605'>
            </td>
        </tr>
        </tbody>
    </table>

    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
        <tr class='pageContainer'> 
            <td valign='top'>
            
        <form method="POST" name="RContact" action="photo_edit_categories_do.php">
            <div class="errSummary" id="VDaemonID_1" style="display:none"></div>
            <input type="hidden" name="id" value="<?= $product_id ?>" />
            
                <input type="hidden" name="company_id" value="<?php echo $company_id ?>" />
                <input type="hidden" name="action" value="true" />
                
                <table width='100%' cellpadding=2 cellspacing=5 border=0 style="font-size:16px">
        <tr>
        	<td colspan='2'>
        		<span style="font-family:'Times New Roman', Times, serif">You may select up to five(5) categories for each product photo.<br />
				To enhance your corporate reputation, be sure to limit your selections to only those categories represented<br />by the photo itself.</span><br>
        		<span style="font-family:'Times New Roman', Times, serif; font-style:italic; font-weight:bold">LandscapeOnline reserves the right to edit your categories for any reason.</span>
        	</td>
        </tr>
        
            <tr>
            	<td style="height:10px"></td>
            </tr>
                    
            <tr><td colspan='2'> <a name='topList'><h2>Categories</h2></a> </td></tr>

            <?php echo get_parents_html(); ?>
            
            <tr>
            	<td style="height:10px"></td>
            </tr>
            
            <tr><td><a href='photo_edit.php?company_id=<?= $company_id ?>'><img src='/imgz2/back-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a></td><td align='right'><input type="image" src="/imgz2/save-button2.jpg" style="box-shadow: 5px 5px 5px #888888" border="0" /></td></tr>
            
            <tr>
            	<td style="height:10px"></td>
            </tr>            

            <?php echo get_children_html($product_id); ?>
            
            
            <tr><td><a href='photo_edit.php?company_id=<?= $company_id ?>'><img src='/imgz2/back-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a></td><td align='right'><input type="image" src="/imgz2/save-button2.jpg" style="box-shadow: 5px 5px 5px #888888" border="0" /></td></tr></table>
        </form>
                        </td>
            </tr>

        </table>
        </div>
        
<!-- End Old Code -->  
</div>




<!-- End Section 1 -->  
</div>

<div class="banner2">
<!-- Banner Section -->
		<? include $include_path . "banner-ads-norot.inc"; ?>

</div>

<div class="bottom1">
<!-- Footer Section -->  
<? include $include_path . "lo_footer-main.inc"; ?>
  
</div>

</div>
