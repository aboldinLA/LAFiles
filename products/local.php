
<div id='pageBody'>
<h2 class='attn'>Keyword Search</h2>
<?php
echo('<table class="local-list" border="0" cellpadding="2" cellspacing="2" width="95%" align="center">');
    $i = 1;
    
    ?>
    <tr>
        <td colspan="2">
        
                                   <!--<form method='post' action="research/products/search.product.do.php" style='padding: 0; margin: 0;'> -->
		<form method='post' action="product_search_keyword.php?localtype=manu_imp&searchby=nl" style='padding: 0; margin: 0;'>
							&nbsp; <input type="radio" name="searchtype" value="photo" checked />Search for Product Photos <br />
							&nbsp; <input type="radio" name="searchtype" value="company" />Search for Companies <br />
	  					    &nbsp; <input type='text' name='keyword' value='mower' size='20' />
							<input type="image" src="../imgz/gobutton.gif" alt="go" align="absmiddle" />
							</form>	
        </td>
        <td>&nbsp; </td>
        <td align='center'>
               <div class='infobox' style='width: 200px;'>
					Keyword searches override all other searches.
					To search phrases use “Quotation Marks”.
					To search by pre-established product categories make
					your selection from the “Please Choose a Product Category” link below.
               </div>
        </td>
     </tr>
     
     <tr><td colspan="4"><hr noshade size="-1"></td></tr>
        
    <?php
    
    foreach($quicklaunch as $element) {
        if($element['ac']) {
            $sb = 'ac';
        } else {
            $sb = 'nl';
        }
        $link = $_SERVER['PHP_SELF'] . "?localtype=" . $element['link'] . '&searchby=' . $sb;
        if($i % 2)
            echo("<tr>\n");
        if(!$element['dummy']) {
        ?>

        <td <?= $element['img_extra'] ?> height="60" valign="middle" width="10%">
            <a href="<?= $link ?>"><img src="<?= $element['image'] ?>" border="0"></a>
        </td>
        <td width="40%">
        	<?php if($element['link'] != 'turfgrass'){ ?>
            <a href="<?= $link ?>"><div class="local-title"><strong><?= $element['title'] ?></strong></div></a>
            <?php } ?>
              <? if($element['adv']) { ?>
                <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>" name="<?= $element['link']?>">
                    <input type='hidden' name='localtype' value='<?= $element['link']?>' />
                    <input type='hidden' name='searchby' value='<?= $sb ?>' />
                    <select name='next' onChange="document.<?= $element['link']?>.submit();">
                    <option value="">Please choose a product category.</option>
                    <? $vl->vendor_xlist_cate_find($next); ?>
                    </select>
                </form>
            <div class="description">
                <?= $element['desc'] ?>

            <? } else if($element['link'] == 'turfgrass') {?>
            	<a href="javascript: turfgrass_submit();"><div class="local-title"><strong><?= $element['title'] ?></strong></div></a>
                <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>" name="turfgrass_frm">
                    <input type='hidden' name='localtype' value='<?= $element['link']?>' />
                    <input type='hidden' name='searchby' value='<?= $sb?>' />
                    <input type='hidden' name='searchtype' value='company' />
                    <input type='hidden' name='execute_search' value='true' />
                    <input type='text' size='10' name='areacodes' value="" />
                    <?= $C->select_state($state); ?>
                    <input type='button' name='search' value='Go!' onclick="javascript: turfgrass_submit();" /><br />
                    <i style="font-size: 10px;">Enter area code or pick a state</i>
                    <script type="text/javascript">
                    	function turfgrass_submit(){
                    		var areacodes = document.turfgrass_frm.areacodes;
                    		var turfgrass_frm = document.turfgrass_frm;
                    		
                    		if(areacodes.value == ""){
                    			areacodes.value = "";
                    		}
                    		turfgrass_frm.submit();
                    	}
                    </script>
                </form>
            <? } ?>
            </div>
        </td>
        <?
        } else {
            if(!$element['empty']) {
            ?>
                <td>&nbsp;</td><td>&nbsp;</td>
            <?
            }
        }
        if(!($i % 2)) {
            ?> 
            </tr><tr><td colspan="4"><hr noshade size="-1"></td></tr>
            <?
        }
        $i++;
    }
echo('</table>');
?>
