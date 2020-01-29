<?php
session_start();
// Connect to the database server
$dbcnx = @mysql_connect('localhost', 'lol', 'meow2meow');
if (!$dbcnx) {
    die( '<p>Unable to connect to the database server at this time.</p>' );
}

// Connect to loldev DB
if (! @mysql_select_db('lollive') ) {
    die( '<p>Unable to locate the loldev database at this time.</p>' );
}

if($_POST['action'] == true)
    action();

function action(){
    $company_id = $_POST['id'];
    $products_list = get_products($company_id);
    $red_flags = array();
    
    foreach($products_list as $product){
        //$new_catg = $_POST['category_'.$product['id']];
        $new_catgs = $_POST['categories_'.$product['id']];
        $new_mark = $_POST['mark_'.$product['id']];
        
        if($new_catgs)
            //update_vendor_product($product['id'],$new_catgs);
        if($new_mark == 'on')
            delete_product_photo($product['id']);
    }
    header("Location: profile.php");
}
 
function get_products_list_html($company_id){
 
    $products_list = get_products($company_id);
    $html = "";
    $counter=0;
    foreach($products_list as $product){
        if($counter != 0){
            $html .="<tr>";
            $html .="<td colspan=3><hr></td>";
            $html .="</tr>";
        }
        $html .="<tr>";
        $html .="<td>";
        $html .="<img src='/products/images/$product[photo]' align='left'>";
        $html .="</td>";
        $html .="<td>";
        $html .="<br><a href='photo_edit_categories.php?product_id=$product[id]&company_id=$company_id'>Edit Categories</a> &nbsp;";
        $html .= get_current_category_selected($product['id']);
        $html .="<br><br><br><input type='checkbox' name='mark_$product[id]' id='mark_$product[id]'>&nbsp;Mark photo for deletion";
        $html .="</td>";
        $html .="</tr>";
        $counter=1;
    }
    $html .="<tr>";
    $html .="<td colspan=3><hr></td>";
    $html .="</tr>";
    return $html;
}


function get_current_category_selected($product_id){
    $query = "select xlist from vendor_product where id = $product_id";
    $result = query($query);
    $product_types = explode(',',$result[0]['xlist']);

    $str = "";
    $counter = 0;
    if(count($product_types) == 0 || $product_types[0] == '')
        return $str;
    
    
    $str = '<br><br><b>Currently Selected: </b><br>';
    foreach($product_types as $category){
        if($counter!=0)
            $str .= '<br>';
        $query = "select sub_number, name from xlist where id = $category order by sub_number";
        $result = query($query);
        $str .= substr($result[0]['sub_number'],1);
        $str .= ' - ';
        $str .= $result[0]['name'];
        $counter=1;
    }
    return $str;
}

function get_products($vendor_id){
    $query = "select * from vendor_product where vendor_id = $vendor_id";
    return query($query);
}

function delete_product_photo($product_id){
    $query = "select photo from vendor_product where id = $product_id";
    $photo = query($query);
    $query = "UPDATE vendor_product SET photo = NULL";
    mysql_query($query);
    //unlink('../products/images/'.$photo[0]);
}

function update_vendor_product($id, $categories){
    $categories = explode(', ', $categories);
    $cat_number = array();
    foreach($categories as $cat){
          $query = "select * from xlist where sub_number=$cat";
          $result = query($query);

          if(isset($result[0]['name'])){
            $number = $result[0]['id'];
            $cat_number[] = $number;
          }
    }
    
    $query = "UPDATE vendor_product SET xlist = '".implode(',',$cat_number)."' WHERE id = $id";
    mysql_query($query);
} 

function query($query){
    $result = mysql_query($query);
    if(!$result){
        return false;
    }
    $results = array();
    while($assoc = mysql_fetch_assoc($result))
        $results[] = $assoc;
    return $results;
}
?>
