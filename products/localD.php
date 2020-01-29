
<div id='pageBody'>
<table class="local-list" border="1" cellpadding="2" cellspacing="2" width="95%" align="center">
     <form method="GET" action="/products/indexD.php" name="manu_imp">
    <tr>
        <td width="40%">
                <div style="background-image: none" onClick="document.refine.searchby[0].checked = true;">
                   <input type="radio" name="searchby" value="ac" <? if($_GET['searchby'] == 'ac') echo("checked"); ?> />
                    <strong>Area Code(s)</strong>
                    <?php  
                    if($_GET["searchby"] == "ac"){
                        $areacodes = $_GET['areacodes'];
                    }
                    else {
                        $areacodes = "714 949 310";
                    } ?>
                    <input onFocus="this.form.searchby[0].checked = true;" size="11" type="text" name="areacodes" value="<?php echo $areacodes;  ?>" />
                </div>
                <div onClick="document.refine.searchby[1].checked = true;">
                    <input type="radio" name="searchby" value="st" <? if($searchby == 'st') echo("checked"); ?> />
                    <strong>State </strong>
                     <?= $C->select_state($state, "searchby[1]"); ?>
                </div>
                <div onClick="document.refine.searchby[2].checked = true;">
                    <input type="radio" name="searchby" value="nl" <? if($searchby == 'nl') echo("checked"); ?> />
                    <strong>National</strong>
                </div>
        </td>   
        <td width="20%">
            Area codes can enter multiple by using a space between.
        </td>
        <td width="40%">
            <u><strong>Search For</strong></u></br>
            <input type="radio" name="searchtype" value="photo" checked />Product Photos <br />
            <input type="radio" name="searchtype" value="company" />Companies <br />
        </td>
        </tr>
        <tr>
        <td width="160px">
            <u><strong>Search Keyword</strong></u></br>
            <div style='padding-top: 5px; padding-bottom: 5px;'>
                <input type='text' name='keyword' value='mower' size='25' />
            </div>
            <div class='infobox'>
                For phrases use “Quotation Marks”. For pre-established select “Please Choose Product Category” link below.
           </div>
        </td>
        <td width="20%">
            Choose only one of these.
            <div class='fButtonBox' style='width: 80px;'>
            <a href="javascript:document.manu_imp.submit()" onclick="return val_form_this_page()"> Search!   </a>
 <!           <input type="hidden" name="start_new_search" id="start_new_search" value="true" />
            </div>
        </td>
        <td>
            <u><strong>Search Category</strong></u></br>
            <input type='hidden' name='localtype' value='manu_imp' />
            <input type='hidden' name='searchby' value='nl' />
            <div style='padding-top: 5px; padding-bottom: 5px;'>
                <select name='next' onChange="document.manu_imp.submit();">
                <option value="">Please choose product category.</option>
                <? $vl->vendor_xlist_cate_find($next); ?>
                </select>
            </div>
            <div class='infobox'>
            <strong>Find a Manufacturer, Exclusive Importer, or Representative</strong> across the nation or in your local area by choosing a category from the selection above
            </div>
        </td>
    </tr>
    </form> 
</table>
