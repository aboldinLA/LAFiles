<?

include "lol_common.inc";

include $include_path . "class/banner_class.inc";

include $include_path . "class/vendor_class.inc";



$V = new vendor_class($db);

$B = new banner_class($db);



if($REQUEST_METHOD=="POST")

{   

	$error = "";

		if(strlen($cat_id) < 2 )

	$error .= "- Please enter a Category<br>";

		if(!strlen($error))

		  {  

             header("location:vendor_search_area.php?cat_id=$cat_id"); 	        

		 }

}

include $include_path . "lol_header.inc";

?>



<form method="post" action="<?echo $PHP_SELF ?>" > 

  <TABLE WIDTH="100%"> 

  <TR> 

	 <TD COLSPAN="3" HEIGHT="27" class="cellhead" >

	 Vendor Search Form</TD> 

  </TR> 

        <TR>

        	 <TD ALIGN="center">I want to search for vendors who provide the following products or services

				 <BR>(select one choice only)<BR><BR><hr color="#3399ff"><b>&#151; Categories &#151;</B><BR>

			</td>

	 </tr>			 

	<TR> 

		<TD VALIGN="TOP" NOWRAP="NOWRAP"><font color="red"><?echo $error?></font>

             <? $V->vendor_xlist_cate_find($id) ;?>

    	</TD> 

   </TR> 

   <tr>

		<td align="center"><hr color="#3399ff"><font size="-1">	Page 1 of 2</font>

		<INPUT NAME="Search" TYPE="image" src="../image/butt_enter.gif" VALUE="Enter"></form>

		</TD> 

  </TR>

  <TR> 

		<td><HR><!--mm replaced--></td>

	</TR> 

			

</TABLE></FORM>  

<? include $include_path . "lol_footer.inc"; ?>

	