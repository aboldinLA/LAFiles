<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/industry_class.inc";



$I = new industry_Class($db);

$C = new common_class($db);



if($REQUEST_METHOD=="POST") {

    $error = "";

	if(!strlen($error)) {

		if ($search == "list") 

			{header("location: associat_list.php");  }	 

		if ($search == "personnel") 

			{header("location:movers.php");  }	  

		if ($search == "other") 

			{header("location:movers.php");  }	  	   

		if ($search == "assocation") 

			{header("location: assoc_news.php?acro=$acro");  }	  	 

		if ($search == "product") 

			{header("location: product_news.php?product_id=$product");  }	  	  

	  }//end error

 }

include $include_path . "main_top.inc";

include $banner_include_path . "top_menu.inc";

?>

<TR valign="top"><td>

<? include $banner_include_path . "advertising_top.inc"; ?>

</td><TD VALIGN="top" WIDTH="75%" align="center">  



<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>"> 

		<TABLE ALIGN="center" CELLPADDING="5" WIDTH="75%" CELLSPACING="3" > 

		  <tr><td class="cellhead" colspan=3><B>News Submission</B></FONT></td></tr><!-- mm r2 --> 

		  <TR> 

			 <TD COLSPAN="3" align="center">We encourage you to submit your news to

				us via this web site, using the options provided below.<br> We prefer that general

				news be in the form of a standard press release including your name and contact

				info, dateline and any relevant information. <br>We also encourage you to submit at

				least one photo with your news items. Photos can be in .jpg or .gif formats of

				at least 300 dpi (at a standard 4" x 5" size). </TD> 

		  </TR> 

		  <TR> 

			 <TD WIDTH="-6"><INPUT TYPE="radio" NAME="search"

				VALUE="assocation"></TD> 

			 <TD WIDTH="150"><B>Accociation News :</B><BR>Select one only</TD> 

			 <TD ><? $I->assoc_pick(); ?></TD> 

		  </TR> 

		  <TR> 

			 <TD WIDTH="-6">	<INPUT TYPE="radio" NAME="search" VALUE="list"></TD> 

			 <TD COLSPAN="2" ><B>My Association is not listed at

				LandscapOnLine.com, but I would like to have my association listed for fee so

				that I can submit future news and events</B></TD> 

		  </TR> 

		  <TR> 

			 <TD WIDTH="-6"><INPUT TYPE="radio" NAME="search"

				VALUE="product"></TD> 

			 <TD WIDTH="150"><B>Product News </B></TD> 

			 <TD WIDTH="464"><? $I->vendor_pick() ?></TD> 

		  </TR> 

		  <TR> 

			 <TD WIDTH="-6"><INPUT TYPE="radio" NAME="search"

				VALUE="personnel"></TD> 

			 <TD COLSPAN="2" WIDTH="640"><B>Personnel News </B></TD> 

		  </TR> 

		  <TR> 

			 <TD WIDTH="-6"><INPUT TYPE="radio" NAME="search" VALUE="other"></TD> 

			 <TD COLSPAN="2" WIDTH="640"><B>Other News </B></TD> 

		  </TR> 

		  <TR> 

			 <TD ALIGN="center" COLSPAN="3" WIDTH="646"><INPUT

				TYPE="submit" VALUE="Enter" NAME="enter"> </TD> 

		  </TR> 

		  <TR> 

			 <TD COLSPAN="3" HEIGHT="7" BACKGROUND="../imgz/head_mid_up_txt.gif"

			  WIDTH="646"></TD> 

		  </TR> 

		</TABLE></FORM>

 </td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>