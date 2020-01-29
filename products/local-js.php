
<div id='pageBody'>
<h2 class='attn'>Keyword Search</h2>
<?php
echo('<table class="local-list" border="0" cellpadding="2" cellspacing="2" width="95%" align="center">');
    $i = 1;
    
    ?>
    <tr>
        <td colspan="2">
   
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

      
        <td width="40%">
        	
            
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
