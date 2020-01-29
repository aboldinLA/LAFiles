<?
///////////////////////////////////////////////////////////////////////
// General Tree class written by Patrik Laszlo corifeus.com 2001     //
//
// Included display in class definition.
//
// v1.0.1
///////////////////////////////////////////////////////////////////////
include_once $include_path . "class/common_class.inc";
class Tree_Class  extends Common_Class
{
/* Links */
var $db; // reference to db object

var $CSSClassLeafActionLink;
var $image_expand;
var $image_collapse;
var $image_circle;
var $id_parent="idParent";
var $sub_number="sub_number";
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
var $action_add_sm_leaf="add-sm_leaf";
var $action_edit_sub="editLeafsubnub";
var $action_delete_leaf="deleteleaf";

var $leafs = Array();

var $no_record_message = "No record added.";
//,$action,$expanded=""$this->display_filter=$display_filter;
// constructor
function Tree_Class(&$db,$action,$expanded="",$display_filter="")
{
	$this->display_filter=$display_filter;
	$this->action=$action;
	$this->expanded=$expanded;
	$this->db=&$db;

}//end

//********************************************************************************************
function &get_nodes($id_parent=0) 
{
	$sql = "SELECT id, ".$this->id_parent.", ".$this->field_name;
	$sql.= $this->show_section?", ".$this->field_section:"";

	$sql.= " FROM ".$this->table;
	$sql.= " WHERE ".$this->id_parent."=$id_parent ";
	$sql.= $this->where==""?"":" AND ".$this->where;
	$sql.= ($this->display_filter!="" && $id_parent==0)?" AND LEFT(".$this->field_name.",1)='".$this->display_filter."'":"";
	$sql.= ($this->show_section?" ORDER BY ".$this->field_section:" ORDER BY ".$this->field_name)." ".$this->order;
	$result = $this->db->query($sql);

     	 		
	$count=0;
	$nodes=Array();

	
	if ($this->db->num_rows($result) > 0)
		{
		  while($data = $this->db->fetch_array($result))
			  {
					$nodes[$count][id]=$data[id];
					$nodes[$count][id_parent]=$data[$this->id_parent];
					$nodes[$count][name]=$data[$this->field_name];
					$nodes[$count][section]=$data[$this->field_section];
					$nodes[$count][children]=$this->get_children_count($data[id]);
					$nodes[$count][sub_number]=$this->subnumber_count($data[id]);
					

					$count++;
    		}
	}
	return $nodes;
}


//******************************************************************************************
function get_children_ids($id_parent,&$children) 
	{
	
	$children[count($children)] = $id_parent;

	$sql = "SELECT id ";
	$sql.= " FROM ".$this->table;
 	$sql.= " WHERE ".$this->id_parent."= $id_parent ";
	$sql.= $this->where==""?"":" AND ".$this->where;

	$result = $this->db->query($sql);
	
	
	while($data = $this->num_rows($result));
	{
		$this->get_children_ids($data[id],$children);
	}

}// end get child ids


//******************************************************************************************
function sub_number($id)
	{
             
			$sql = "SELECT sub_number ";
			$sql.= " FROM ".$this->table;
			$sql.= " WHERE id= $id ";
            
			$result = $this->db->query($sql);
			$data = $this->db->fetch_array($result);
			

			return $data['sub_number'];
			
			
    }// end
//*******************************************************************************************
function subnumber_count($id=0) 
{
	$result = $this->db->query("SELECT COUNT(*) AS subnumber FROM ".$this->table." WHERE ".$this->id_parent."=$id");
	$data = $this->db->fetch_array($result);
	return $data[subnumber];
}

//*******************************************************************************************
function get_children_count($id=0) 
{
	$result = $this->db->query("SELECT COUNT(*) AS children FROM ".$this->table." WHERE ".$this->id_parent."=$id");
	$data = $this->db->fetch_array($result);
	return $data[children];
}

//*******************************************************************************************
function get_leaf_count()
{
	$result=$this->db->query("SELECT COUNT(*) AS leaf_count FROM ".$this->table);
	$data = $this->db->num_rows($result);
	return $data[leaf_count];
}

//*******************************************************************************************
function get_parent($id) 
{
	$result=$this->db->query("SELECT $this->id_parent FROM ".$this->table." WHERE id=$id");
	$row = $this->db->fetch_array($result);
	return $row[id_parent];
}

//*******************************************************************************************
function get_depth($id,$depth=0)
{
	$this->register=$depth;
	$id_parent=$this->db->get_parent($id);
	if ($id_parent!=0)
	{
		$this->get_depth($id_parent,$this->register+1);
	}
	return $this->register;
}

//*******************************************************************************************
function display_tree(&$display,&$nodes,$level=0,$section="")
{
	global $PHP_SELF;
	$nodecount=count($nodes);

	if ($this->db->tree_show_table_tag || $level != 0)	
	{
		$display.= "\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" align=\"center\">\n";
	}

	if ($this->tree_show_table || $level != 0)
	{

		if ($level==0)
		{
			if ($this->show_title)
			{
				$display.= "<tr><td colspan=\"2\" >\n";
				$display.= "<b>".$this->title."</b>\n";
				$display.= "";
				$display.= "</td></tr>\n";
			}

				if ($this->show_root == true) 
				{
					$display.= "<tr><td colspan=\"2\">\n";
						if ($this->tree_show_link)
						{
								$display.= "<a href=\"javascript:void(0)\"";
									if ($this->action=="add" || $this->action=="edit"  )
									{
										$display.= " onclick=\"".$this->action_set_leaf."(0,'Root');\"";
									}
									$display.= ">";
							}
								$display.= "Root";
								$display.= $this->tree_show_link?"</a>\n":"";
								$display.= "</td></tr>\n";
						   }
					 }
				}

	if ($nodecount>0)
	{
		for ($i=0; $i<$nodecount; $i++) 
		{
			$safeName = str_replace("'", "`", $nodes[$i]["name"]);
			$safeName = str_replace("\"", "``", $safeName);


			$subName = str_replace("'", "`", $nodes[$i]["sub_name"]);
			$subName = str_replace("\"", "``", $subName);


			if ($this->tree_show_table)
			{
				$display.= "<tr><td valign=\"top\" align=\"right\">\n";
			}

				if ($this->show_bookmark)
				{
					$display.= "<a name=\"".$nodes[$i][id]."\"></a>";
				}

				if ( (!isset($this->tree_first_displayed_item) || $nodes[$i][id] == $this->tree_first_displayed_item ||         $this->tree_got_first_displayed_item == true) && ($this->tree_got_last_displayed_item == false) )
					{
						if ($nodes[$i][children]>0)
						{

								if ($this->expanded[$nodes[$i][id]] || $this->expand_all)
								{ 
									$toggle_image=$this->image_collapse;
									$toggle_text="Collapse: ".$nodes[$i][name];
								}
								else
								{
									$toggle_image=$this->image_expand;
									$toggle_text="Expand: ".$nodes[$i][name];
								}

								if (!$this->expand_all)
								{
									$display.= "<a href=\"javascript:".$this->action_toggle_leaf."(".$nodes[$i][id].")\"";
									$display.= ">";
									$display.= "<img alt=\"$toggle_text\" src=\"$toggle_image\" border=\"0\">";
									$display.= "</a>\n";
								}
						}
						$display.= ($level==0?"":$this->nbsp);
					}

				if ($this->tree_show_table)
				{
					$display.= "<img src=\"".$this->image_spacer."\" width=\"1\" height=\"1\"></td><td nowrap>\n";
				}

				if ( (!isset($this->tree_first_displayed_item) || $nodes[$i][id] == $this->tree_first_displayed_item || $this->tree_got_first_displayed_item == true) && ($this->tree_got_last_displayed_item == false) )
				{
					$display .= $this->tree_item_prepend;
				
					if ($this->tree_show_link)
					{
						$display.="<a class=\"".$this->CSSClassAddLeafLink."\" href=\"javascript:";
						if ($this->action=="add" || $this->action=="edit"  )
							{
							$display.= $this->action_set_leaf."(".$nodes[$i][id].",'".$safeName."');";

					}
					else
					{
		                                   $display.= $this->action_edit_leaf."(".$nodes[$i][id].",'".$safeName."');";
					}
						   $display.= "\">";
					}

						if ($this->tree_callback_function != "") 
						{
							eval ("\$call_back_result = ".$this->tree_callback_function."(".$nodes[$i][id].");");
						}
					
							if ($this->tree_callback_function == "" || $call_back_result != false) 
							{
								$display.= $this->tree_item_tag_open;

								$display.= $this->tree_highlighted_id == $nodes[$i][id] ? $this->tree_highlighted_item_tag_open:"";

								$display.= $this->show_section ? $section.($nodes[$i][section]).". " : "";
					
								$display.= $nodes[$i][name];

								$display.= $this->tree_highlighted_id == $nodes[$i][id] ? $this->tree_highlighted_item_tag_close:"";

								$display.= $this->tree_item_tag_close;

								$display .= !$this->tree_show_table ? "<br>":"";
         
								$display .= $this->tree_callback_function != ""?$call_back_result:"";
										 		
							}
						
						if ($this->tree_show_link) 
						{
							$display.= "</a>\n";
						}
					        $display.= " &nbsp; ";

	                      
$display.= "<a class=\" ".$this->CSSClassLeafActionLink."\" href=\"javascript:".$this->action_edit_sub."(".$nodes[$i][id].",'". $this->sub_number($nodes[$i][id]) ."')\">".$this->sub_number($nodes[$i][id])."</a> \n";
				
						$display.= "  &nbsp;&nbsp; ";
					
					if ($this->show_add_action_button)
					{   
						if ($nodes[$i][children] > 0) 
							{
								$display.= "<a href= ychange.php?id=".$nodes[$i][id].">".$this->add."</a> \n";   }
					      
							}
					if ($this->show_action_buttons)
					{
						/*if ($nodes[$i][children] > 0) 
							{
						$display.= "<a class=\"".$this->CSSClassLeafActionLink."\" href=\"javascript:".$this->action_edit_leaf."( ".$nodes[$i][id]. ",' ". $safeName ." ')\">".$this->edit."</a>\n";
                            }*/
						if ($nodes[$i][children] == 0)
						{
							$display.= "<a class=\"".$this->CSSClassLeafActionLink."\" href=\"javascript:".$this->action_delete_leaf."(".$nodes[$i][id].",'". $safeName ."')\">".$this->delete."</a>\n";		    
						}
					}
				}
				if ($nodes[$i][id] == $this->tree_last_displayed_item) {
					$this->tree_got_last_displayed_item = true;
				}

				if ($nodes[$i][id] == $this->tree_first_displayed_item) {
					$this->tree_got_first_displayed_item = true;
				}


			if ($nodes[$i][children]>0 && ($this->expanded[$nodes[$i][id]] || $this->expand_all))
				{
				if ( (!isset($this->tree_first_displayed_item) || $nodes[$i][id] == $this->tree_first_displayed_item || $this->tree_got_first_displayed_item == true) && ($this->tree_got_last_displayed_item == false) )
					{
						if ($this->tree_shift_leaf)
						{
							for ($j=0; $j<$level; $j++) $display.= "&nbsp;&nbsp;&nbsp;";
						}
				}

				if (!$this->tree_got_last_displayed_item) 
				{
					$this->display_tree($display, $this->get_nodes($nodes[$i][id]) , $level+1, ($this->show_section?$section.$nodes[$i][section].".":0) );
				}
			}
			
				if ($this->tree_show_table)
				{
					$display.= "</td></tr>\n";
				}

		}

	} 
	if ($level==0 & $nodecount==0)
	{
		$display.= "<tr class=\"".$this->display_data_class."\"><td>". $this->no_record_message ."</td></tr>";
		$this->tree_got_first_displayed_item = false;
		unset($this->tree_first_displayed_item);
		$this->tree_got_last_displayed_item = false;
		unset($this->tree_last_displayed_item);
	}
		if ( ($this->tree_show_table && $this->tree_show_table_tag) || $level!= 0)
		{
			$display.= "</table>\n";
		}

}


//*******************************************************************************************
function display_tree_menu(&$display,&$nodes,$level=0,$section="") 
{
	global $PHP_SELF;
	$nodecount=count($nodes);

		if ($level==0 && $nodecount >0)
		{
				$display.= "<select ".$this->menu_select_tag." class=\"datafield2\" name=\"".$this->menu_name."\" ".($this->menu_size>1?"size=\"".$this->menu_size."\"":"")." ".($this->menu_multiple?"multiple":" ").">\n";
		} 
		elseif ($level==0 && $nodecount==0)
			{
				$display.= "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\" height=\"50\"><tr><td align=\"center\" >\n";
				$display.= "No manual entries.";
				$display.= "</td></tr></table>";
				return false;
		   }

	if ($nodecount >0) 
	{
		for ($i=0; $i<$nodecount; $i++) 
		{
			if (!isset($this->menu_first_displayed_item) || $nodes[$i][id] == $this->menu_first_displayed_item || $this->menu_got_first_displayed_item == true ) {

					if ($nodes[$i][id] == $this->menu_first_displayed_item) 
					{
						$this->menu_got_first_displayed_item = true;
					}

						$display.= "\t<option value=\"".$nodes[$i][id]."\"".(is_array($this->menu_selected_items) && in_array($nodes[$i][id],$this->menu_selected_items)?" selected":"").">\n";

				if ($this->show_section)
				{
					$display.= "\t\t".$section.($nodes[$i][section])."";
				}
					
					$display.= ". - ".$nodes[$i][name]."\n";

					$display.= "\t</option>\n";
		    	}
	
				if ($nodes[$i][children]>0 && ($this->expanded[$nodes[$i][id]] || $this->expand_all))
				{
					$this->display_tree_menu($display, $this->get_nodes($nodes[$i][id]) , $level+1, ($this->show_section?$section.$nodes[$i][section].".":0) );
				}

		}

	}

		if ($level==0 && $nodecount>0)
		{
				$display.= "</select>\n";
				$this->menu_got_first_displayed_item = false;
				unset($this->menu_first_displayed_item);
		}
		return true;
}

//*******************************************************************************************
function display_node(&$display,$id,$level=0,$setleafs)
{
	if ($level==0)
	{
		$this->depth=$this->get_depth($id);
		$this->leafs = Array();
   }
		$id_parent=$this->get_parent($id);

			if ($setleafs)
			{
				$this->leafs[count($this->leafs)]= $id;
			}

			if ($id_parent!=0 )
			{
				$this->display_node($display,$id_parent,$level+1, $setleafs);

				if (!$this->show_section) for ($i=0; $i<($this->depth-$level); $i++) $display.= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
	
	$sql = "SELECT id, ".$this->field_name;
	$sql.= $this->show_section?", ".$this->field_section:"";
	$sql.= " FROM ".$this->table;
	$sql.= " WHERE id=$id ";
	$sql.= $this->where==""?"":" AND ".$this->where;
	$result=$this->db->query($sql);
	$data=$this->db->fetch_array($result);

			if ($this->show_section)
			{
				$display.= $data[$this->field_section].".";
				if ($level==0) $display.= " ".$data[$this->field_name];
			}
			else 
			{
				$display.= $id_parent==0?"<img src=\"".$this->image_circle."\" border=\"0\">":" &nbsp;";
				$display.= $data[$this->field_name];
				$display.= $level==0?"":"<br>\n";
			}
}

//*******************************************************************************************
function debug($text)
{
	if ($this->debug)
	{
		echo $text;
	}
}// end debug

//*******************************************************************************************


}// end class
?>
