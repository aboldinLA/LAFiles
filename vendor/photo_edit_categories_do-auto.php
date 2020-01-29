<?php
session_start();
// Connect to the database server
$dbcnx = @mysql_connect('localhost', 'landscap_lol', 'meow2meow');
if (!$dbcnx) {
    die( '<p>Unable to connects to the database server at this time.</p>' );
}

// Connect to loldev DB
if (! @mysql_select_db('landscap_lollive') ) {
    die( '<p>Unable to locate the loldev database at this time.</p>' );
}

 



if($_POST['action'] == true)
    action();

function action(){
    if($_POST['xlist']) update_vendor_product($_POST['id'],implode(",",$_POST['xlist']));
    else update_vendor_product($_POST['id'],"");
    header("Location: photo_edit-auto.php?company_id=$_POST[company_id]");
}




function get_parents_html(){
    $html = "";
    $parents = getParents();
    foreach($parents[0] as $key=>$parent){
        $html .= "<tr><td width='50%'><a href='#id$parent[id]'><strong>$parent[name]</strong></a></td>";
        $html .= "<td><a href='#id".$parents[1][$key]['id']."'><strong>".$parents[1][$key]['name']."</strong></a></td></tr>";
    }
    return $html;
}

function get_children_html($product_id){
    $html = "";
    $parents = getParents(true);
    
    $html = "";
    $count=0;
    foreach($parents as $key=>$parent){
        $html .= "<tr><td class='tb3' colspan='2'><a name='id$parent[id]'><h3>$parent[name]</h3></a></td></tr>";
        $html .= "<tr><td colspan='2'><hr noshade size='-1' /></td></tr>";
        
        $children = getChildren($parent['id']);
        
        
        foreach($children[0] as $k=>$child){
            $checked1 = ""; $checked2 = "";

            if(isset($children[1][$k]['id']) && isCurrentlySelected($product_id, $children[1][$k]['id'])){
                $checked2 = "checked";
                $count++;
            }
            elseif(isCurrentlySelected($product_id, $child[id])){
                $checked1 = "checked";
                $count++;
            }
            $html .= "<tr><td><input ".$checked1." type='checkbox'  name='xlist[]' id='xlist_$child[id]' value='$child[id]' onchange='checkCount($child[id])' /> $child[name]</td>";
            if($children[1][$k]['id']) $html .= "<td><input ".$checked2." type='checkbox' name='xlist[]' id='xlist_".$children[1][$k]['id']."' value='".$children[1][$k]['id']."' onchange='checkCount(".$children[1][$k]['id'].")' />".$children[1][$k]['name']."</td></tr>";
        }
        
        $html .= "<tr><td colspan='2'><a href='#topList'><h4 style='color:#000; text-shadow:none; font-weight:bold'>Back to Top</h4></a></td></tr>";
        
    }
    $html.='<input type="hidden" name="count" value="'.$count.'" />';
    return $html;
}


function isCurrentlySelected($product_id, $subnumber){
    $query = "select xlist from vendor_product where id='$product_id'";
    $result = query($query);
    
    $xlist = $result[0]['xlist'];
    if(is_null($xlist))
        return false;
    $x_array = explode(',',$xlist);

    foreach($x_array as $x){
        if($x==$subnumber)  
            return true;
    }
    return false;
}

function getParents($whole = false){
    $query = 'select * from xlist where idParent=0 AND idAccount=0 order by name';
    $result = query($query);
    
    if(!$whole) return chunk($result);
    else return $result;
}

function chunk($array){
    $c = count($array);
    $farray = array();
    $sarray = array();
    $i=0;
    for(; $i < ceil($c/2); $i++){
        $farray[] = $array[$i];
    }
    for(; $i < $c; $i++){
        $sarray[] = $array[$i];
    }
    
    return array(0=>$farray,1=> $sarray);
}
function getChildren($parent_id){
    $query = "select * from xlist where idParent=$parent_id order by name";
    $result = query($query);
    return chunk($result);
}

function update_vendor_product($id, $categories){
    $query = "UPDATE vendor_product SET xlist = '$categories' WHERE id = $id";
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
