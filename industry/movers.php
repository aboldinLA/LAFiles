<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/industry_class.inc";



$I = new industry_Class($db);

$C = new common_class($db);



if($REQUEST_METHOD=="POST")

{

    $error = "";



	if(strlen($search) < 2)

		$error .= "- Please enter a search choise<br>";

	

	if ($search == "acronym") 

		{

		 if(!is_numeric($acro))

		   $error.="You must enter one acronym";

		 }	 

	if ($search == "name") 

		{

		if (strlen($association) == 0 || $association == "Enter Name") 

          $error.="You must enter a name";

		}	 

	if ($search == "membership") 

		{ 

		   if(!is_numeric($members))

		    $error.="You must enter membership category";

		 }	   

	  if(!strlen($error))

	  {

					

					 

				



	  }//end error



 }// end post

include $include_path . "main_top.inc"; 

include $banner_include_path . "top_menu.inc";

?>



<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>"> 

		<TABLE ALIGN="center" CELLPADDING="5" WIDTH="75%"

		 CELLSPACING="3" > 

		  <tr><td class="cellhead" colspan=3><B>Movers and Shakers </B></FONT></td></tr><!-- mm r2 --> 

		  

		</TABLE></FORM>

<?

include $include_path . "main_bottom.inc";

?>