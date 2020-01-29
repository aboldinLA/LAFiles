        <table width='100%' class='searchOptions' cellpadding='10' cellspacing='0' border='0'>
            <tr class='cellhead'>
                <td colspan='3' class='cellhead'>Photos <strong>[ <a href='<?php echo "photo_edit.php?company_id=$this->id"; ?>'>edit</a>  ]</strong></td>
            </tr>
            
<?php
require_once('photo_edit_do.php');

echo get_products_list_html2($this->id);

function get_products_list_html2($company_id){
    $products_list = get_products($company_id);
    $html = "";
    $counter=0;
    foreach($products_list as $product){
        $html .= "<tr>";
        $html .= "<td align='left'>";
        $html .= "<img src='/products/images/$product[photo]' align='left'><br /><br />";
        $html .= "</td>";
        $html .= "<td colspan='2'>";
        $html .= "<b>$product[name]</b><br /><br />";
        $html .= "$product[description]";
        $html .= "</td>";		
        $html .= "</tr>";
    }
    return $html;
}
?>
            
        </table>
