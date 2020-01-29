<!-- Photo Section -->
<?
$pass = $_GET['pass'];
?>
        
<br />
<div class="tb4" style="width:700px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Products / Project Photos [ <a href='<?php echo "photo_edit-auto.php?company_id=$this->id&pass=$pass"; ?>'>edit</a>  ]&nbsp;&nbsp
</div><br /><br />

        <table width="700" cellpadding='0' cellspacing='0' border='0'>
            <tr>
                <td> </td>
            </tr>
            
<?php
require_once('photo_edit_do-auto.php');

echo get_products_list_html2($this->id);

function get_products_list_html2($company_id){
    $products_list = get_products($company_id);
    $html = "";
    $counter=0;
    foreach($products_list as $product){
        $html .= "<tr>";
        $html .= "<td style='width:100px'></td>";
        $html .= "<td style='font-size:16px; width:300px'>";
        $html .= "<b>$product[name]</b><br /><br />";
        $html .= "$product[description]";
 		$dog = $product[web];
		$html .='<br><br><strong>Web Link:</strong><br><a href="' . $dog . '">' .  $product[web] .  '</a><br>';
        $html .= "</td>";			
        $html .= "<td align='right' width='60%' >";
        $html .= "<img src='/products/images/$product[photo]' style='box-shadow: 5px 5px 5px #888888'>";
        $html .= "</td>";
	
        $html .= "</tr><tr><td style='height:20px'></td></tr>";
    }
    return $html;
}
?>
            
        </table>
