
<div id='pageBodyeBody'>
<h2 class='attn'>Maybe used later</h2>
<table class="local-list" border="0" cellpadding="2" cellspacing="2" width="95%" align="center">
    <form method='post' action="product_search_keyword.php?localtype=manu_imp&searchby=nl" style='padding: 0; margin: 0;'>
        <tr><td>
                &nbsp; <input type="radio" name="searchtype" value="photo" checked />Search for Product Photos <br />
                &nbsp; <input type="radio" name="searchtype" value="company" />Search for Companies <br />
                &nbsp; <input type='text' name='keyword' value='mower' size='20' />
                <input type="image" src="../imgz/gobutton.gif" alt="go" align="absmiddle" />
        </td></tr>

         <tr><td>
            <table border="1" cellpadding="2" cellspacing="2" width="100%" align="left">
                <tr>
                    <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[0].checked = true;">
                       <input type="radio" name="searchby" value="ac" <? if($_GET['searchby'] == 'ac') echo("checked"); ?> /><strong>Area Codes</strong>
                        <?php  
                        if($_GET["searchby"] == "ac"){
                            $areacodes = $_GET['areacodes'];
                        }
                        else {
                            $areacodes = "";
                        } ?>
                         <input onFocus="this.form.searchby[0].checked = true;" size="6" type="text" name="areacodes" value="<?php echo $areacodes;  ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[1].checked = true;">
                        <input type="radio" name="searchby" value="st" <? if($searchby == 'st') echo("checked"); ?> /><strong>State </strong>
                        <?= $C->select_state($state, "searchby[1]"); ?>
                    </td>
                </tr>
                <tr>
                    <td align="left" style="cursor: pointer; cursor: hand;" onClick="document.refine.searchby[2].checked = true;">
                        <input type="radio" name="searchby" value="nl" <? if($searchby == 'nl') echo("checked"); ?> /><strong>National</strong>
                    </td>
                </tr>
            </table>
        </td></tr>
            <tr><td>
            <form method="GET" action="/products/index3.php" name="manu_imp">
                <input type='hidden' name='localtype' value='manu_imp' />
                <input type='hidden' name='searchby' value='nl' />
                <select name='next' onChange="document.manu_imp.submit();">
                <option value="">Please choose a product category.</option>
                <? $vl->vendor_xlist_cate_find($next); ?>
                </select>
            </form>
            </td></tr>
     </form>	
</table>
