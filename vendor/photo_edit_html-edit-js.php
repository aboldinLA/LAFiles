<!-- Photo Section -->        
<br />
<div class="tb4" style="width:725px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Products / Project Photos <!-- [ <a href='<?php echo "photo_edit-js.php?company_id=$this->id"; ?>'><span style="color: #FFFFFF">Mark for Deletion or Add New Products</span></a>  ] -->&nbsp;&nbsp;
</div><br /><br />

        <table width="700" cellpadding='0' cellspacing='0' border='0'>
            <tr>
                <td> </td>
            </tr>
            
<?php
require_once('photo_edit_do-js.php');

echo get_products_list_html2($this->id);

function get_products_list_html2($company_id){
    $products_list = get_products($company_id);
    $html = "";
    $counter=0;
    foreach($products_list as $product){
		
		if (empty($product['series_product'])) {
			
			$ppt = "None";
			
		} else {
			
			$ppt = $product['series_product'];
			
		}
		
	
		
		
		
        $html .= "<tr>";
        $html .= "<td style='width:10px'></td>";
        $html .= "<td style='font-size:16px; width:350px'><strong>Product / Collection Name: </strong><br>";
        $html .= "".iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($product['product_name'])))."<br /><br />";

        
		
		
		$str = "$product[description]";
		$str = str_replace ('“', '"',  $str);
		$str2 = htmlspecialchars($str);
		
				
        $html .= "<strong>Product Description: </strong>".iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($product['description'])))."";
		
 		$dog = $product['web'];
		$html .='<br><br><strong>Product Link:</strong><span style="font-size: 14px">(This should link to the Specific Product Page and NOT just your main Web Address.)</span><br><a href="http://' . $dog . '"><strong>' .  $product['web'] .  '</strong></a><br><br><strong>Details Status:<br><span style="font-size:12px">(Files availabe if name appears next to file type)</span></strong><table cellspacing="10px"><tr><td style="text-align: center"><strong>File Type</strong></td><td style="text-align: center"><strong>Uploaded File</strong></td></tr><tr><td style="text-align: center">CAD DWG</td><td style="text-align: center">' .  $product['cadd'] .  '</td></tr><tr><td style="text-align: center">CAD DWF</td><td style="text-align: center">' .  $product['cadd_2'] .  '</td></tr><tr><td style="text-align: center">CAD DXF</td><td style="text-align: center">' .  $product['cadd_3'] .  '</td></tr><tr><td style="text-align: center">CAD PDF</td><td style="text-align: center">' .  $product['pdff'] .  '</td></tr><tr><td style="text-align: center">3D SKP</td><td style="text-align: center">' .  $product['skup'] .  '</td></tr><tr><td style="text-align: center">3D VWX</td><td style="text-align: center">' .  $product['vwxx'] .  '</td></tr></table>';
        $html .=get_current_category_selected($product['id'],$company_id)."<br><br>Administrative Use: " . $product['id'] . "&nbsp;" . $ppt  . " ";		
        $html .= "</td>";
		
        $html .= "<td style='line-width: 3px'>&nbsp;</td>";
		
    
		
        $html .= "<td align='right'>";
        $html .= "<img width='225' src='/products/images/$product[photo]' style='box-shadow: 5px 5px 5px #888888; position: relative; left: -25px'><br><br><center><h3 style='font-family: Helvetica, Arial, sans-serif; color: darkgreen; padding-left: 125px'><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor-detail-edit-js.php?number=" . $product['vendor_id'] . "&prodNum=" . $product['id'] . "' target='_blank'><!-- Click To Edit This Product --></a></h3></center>";
        $html .= "</td>";
		
        $html .= "<td style='line-width: 5px'>&nbsp;</td>";
		
        $html .= "<td align='right'>";
        $html .= "</td>";	
		
        $html .= "<td align='right'>";
        $html .= "</td>";			
		
		
		
	
        $html .= "</tr><tr><td colspan='4' style='height:20px'><br><div style='width:750px; height:2px; background-color:#605b51;'> </div><br></td></tr>";
		
    }
    return $html;
}
?>
            
        </table><p>&nbsp;</p><p>&nbsp;</p>
