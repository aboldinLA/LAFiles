<?php

 

/*$T->add = "<img src=\"../../image/addStructure.gif" . "\" border=\"0\" align=\"absmiddle\" alt=\"Add\">";*/

$T->add = "add";

$T->edit = "<img src=\"../../image/pencil.jpg" . "\" border=\"0\" align=\"absmiddle\" alt=\"Edit\">";

$T->delete = "<img src=\"../../image/trashcan.jpg" . "\" border=\"0\" align=\"absmiddle\" alt=\"Delete\">";

$T->add_num = "add_num";

$T->field_name = "name";

$T->show_root =false;

$T->show_title = true;

$T->tree_show_table_tag = false;

$T->tree_show_link = true;

$T->no_record_message = "<img src=\"../../image/transparent.gif\">";

$T->display_header_class = "headerField";

$T->display_data_class = "structureField";

$T->display_table_border_class = "tableBorder";

$T->action_toggle_leaf = "toggleLeaf ";

$T->action_add_leaf = "addLeaf";

$T->action_add_sm_leaf = "add_sm_Leaf";

$T->action_edit_leaf = "editLeaf";

$T->action_delete_leaf = "deleteLeaf";

$T->nbsp = "<img src=\"../../image/transparent.gif\" width=\"1\" height=\"1\">";

$T->image_expand ="../../image/expandStructure.gif";

$T->image_collapse ="../../image/collapseStructure.gif";

$T->image_spacer = "../../image/transparent.gif";

$T->show_add_action_button = true;

?>

<TABLE BORDERCOLOR="#70a183" cellpadding="4" width="60%"> 



<tr><td colspan="2"align="center" ><b>Add to Main Category<b> <a href="javascript:addLeaf(0,'Root')">Add to Root</a>

</td>

</tr>

<tr>

<td colspan="2"><table align ="center" >

<?

$T->display_tree($display="",$T->get_nodes());

echo $display;

?></table>

</td>

</tr>



<form name="structure" method="post">

	<input type="hidden" name="action" value="add">

	<input type="hidden" name="idParent" value="0">

	<input type="hidden" name="sub_name" value="">

	<input type="hidden" name="name" value="">

	<input type="hidden" name="id" value="">

</form>



<tr>

<td colspan="2" align=center><hr color="#70a183">

<form action="xlist_action.php"><? hidden("action","id")?>

<input type="submit" value="Export">



</td>

</tr>

</table>



</form>

