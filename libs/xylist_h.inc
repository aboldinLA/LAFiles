<?php



$T=&new Tree_Class(&$db,$action,$_SESSION["keywordExpanded"]);

unset($DISPLAY, $action);

switch ($_POST["action"]) {

	 case "add":

		if (trim($name) != "")			{

		 $X->enter_name($name,$idParent); 



		}		else		{

			$alert = "Enter name.";

		}

		break;



case "edit":

	if (trim($name) != "")	{

		$X->edit_name($name,$id);

	}	else	{

	    $alert = "Enter name.";

	}

	break;



case "edit_sub":

	if (trim($name) != "")		{  

		$X->edit_sub_number($name,$id );

	}	else	{

	    $alert = "Enter number.";

	}

	break;

case "toggle":

	$keywordExpanded = &$_SESSION["keywordExpanded"];

	if (isset($keywordExpanded[$_POST["id"]])){

	    unset($keywordExpanded[$_POST["id"]]);

	} else {

	    $keywordExpanded[$_POST["id"]] = true;

	}

	break;



case "add_num":

	if (trim($name) != "")			{

		$X->add_num($id,$sub_number);

	}	else	{

		$alert = "Enter number.";

	}

	break;



case "delete":

       $X->delete_item($id);

	break;





}



/*******************

 * VIEW,$action,$_SESSION["keywordExpanded"]

**/



$T=&new Tree_Class(&$db,$action,$_SESSION["keywordExpanded"]);



?>

