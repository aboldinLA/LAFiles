<?
include_once $include_path . "class/common_class.inc";
class ylist_Class  extends Common_Class
{
var $db; // reference to db object
var $CSSClassLeafActionLink;
var $image_expand;
var $image_collapse;
var $image_circle;
var $id_parent="idParent";
var $table="tree";
var $field_name="name";
var $field_section="section";
var $order="ASC";
var $where;
var $debug = false;
var $display_filter;
var $expanded;
var $acion;
var $display_header_class = "headerfield";
var $display_data_class = "datafield1";
var $display_table_border_class = "tableborder";
var $menu_name="treemenu[]";
var $menu_size="5";
var $menu_multiple=true;
var $menu_selected_items;
var $menu_select_tag;
var $menu_first_displayed_item;
var $menu_got_first_displayed_item=false;

var $edit = "(edit)";
var $edit_sub= "(edit_sub)";
var $add = "(add)";
var $delete = "(delete)";

var $tree_first_displayed_item;
var $tree_got_first_displayed_item=false;
var $tree_last_displayed_item;
var $tree_got_last_displayed_item=false;
var $tree_show_link = true;
var $tree_show_table = true;
var $tree_show_table_tag = true;
var $tree_shift_leaf = true;
var $tree_callback_function;
var $tree_highlighted_id;
var $tree_highlighted_item_tag_open;
var $tree_highlighted_item_tag_close;

var $tree_item_tag_open;
var $tree_item_tag_close;

var $expand_all=false;
var $show_section=false;
var $show_action_buttons=true;
var $show_title=true;
var $show_root = true;
var $show_bookmark = false;
var $show_add_action_button = false;

var $image_spacer;

var $title;

var $depth;
var $register;

var $nbsp = "&nbsp;";
var $tree_link_style = "treeaction";

var $action_toggle_leaf="toggleleaf";
var $action_set_leaf="setleaf";
var $action_add_leaf="addleaf";
var $action_edit_leaf="editleaf";
var $action_delete_leaf="deleteleaf";

var $leafs = Array();

var $no_record_message = "No record added.";
//,$action,$expanded=""$this->display_filter=$display_filter;
// constructor

function ylist_Class(&$db)
{	
	$this->db=&$db;
}
//**********************************************************
function delete_item($id)
{
     $query = "DELETE FROM ylist WHERE id = $id";		
	 $this->db->query($query);
		return true;

}
//**********************************************************
function edit_name($name,$id)
{
     $query = "UPDATE ylist  SET  name = '$name' WHERE id = $id ";		
	 $this->db->query($query);
	 return true;

}

//**********************************************************
function edit_sub_number($sub_number,$id)
{
     $query = "UPDATE ylist  SET sub_number = ".$sub_number." WHERE id = $id ";		
	 $this->db->query($query);
	return true;

}


//**********************************************************
function enter_name($name,$idParent) 
{
      $query = "INSERT INTO ylist ( name, idParent) VALUES ('$name', '$idParent')";
	  $this->db->query($query);
	 	return true;

}

//**********************************************************
function add_num($id,$sub_number)
{
    $query = "UPDATE ylist  SET  sub_number  = '$sub_number ' WHERE id = $id ";		
	$this->db->query($query);
		return true;


}
//**********************************************************
function get_num($id,$sub_number)
{
    $query = "SELECT sub_number WHERE  id  =  $id ";		
	$this->db->query($query);
		return true;


}

//***************************************************************************************************************
function enter_names($name,$id,$sub_number) 
	{
		  $query = "INSERT INTO ylist ( name, idParent, sub_number) VALUES ('$name', '$id', '$sub_number')";
		  $this->db->query($query);
		 
		  return true;

	}

}
?>