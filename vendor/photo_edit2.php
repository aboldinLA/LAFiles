<?php
include "lol_common-main.inc";
include $include_path . "lo_top-main.inc";
require_once('photo_edit_do.php');
$company_id = $_GET['company_id'];
?>


        <style type='text/css' media='screen'> @import "/res/css/vendor_signup.css"; </style>
        <style type='text/css' media='print'> @import "/res/css/vendor_signup.css"; </style>
        <script language='javascript' src='/res/js/jsOldLib.js'></script>
        
<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  
<?
include $include_path . "lo_header-main.inc";

	
?>

</div>

<!-- Content Section -->
<!-- Begin Section 1 -->  
<div class="main1">

<div class="tb3" style=" position:relative; left:-10px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Photo Management Center:&nbsp;&nbsp
</div><br /><br />

<!-- Begin Old Code -->  

 	<div align="left" style="position: absolute; left:0px; top:250px">        
    <script type="text/JavaScript" src="/res/js/vdaemon.js"></script>
	<script type="text/JavaScript">
<!--

	vdDelimiter="~";
	var f,v,i,l,s;

	f=new Object(); f.name="RContact"; f.validators=new Array(); f.labels=new Array(); f.summaries=new Array();
	v=new Object(); v.type="required"; v.name="xlistReq"; v.errmsg="Please select at least one product interest."; v.control="xlist[]"; v.minlength=1; v.maxlength=-1; f.validators[v.name]=v;
	s=new Object(); s.id="VDaemonID_1"; s.headertext="<h3>Error(s) found:</h3>"; s.displaymode="bulletlist"; s.showsummary=true; s.messagebox=false; f.summaries[f.summaries.length]=s;
	vdAllForms[f.name]=f;

//-->
	</script>

    <div>
 
	
	<table cellpadding='0' cellspacing='0' border='0'>
		<tr> 
            <td colspan="2" valign='top' style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
			<br />
			<strong><a href='/vendor/vendor/cancel-main-auto.php'><span class="tb6" style="width:100px; box-shadow: 5px 5px 5px #888888">Back to Profile</span></a> 
            </strong>
    	    <form method="POST" name="photo_edit" action="photo_edit_do.php" onsubmit="return">        	
            <input type="hidden" name="id" value="<?php echo $company_id ?>" />
            <input type="hidden" name="action" value="true" />
            	<table border='0' width='750' cellpadding='0' cellspacing='0'>
                    <?php echo get_products_list_html($company_id); ?>
					<tr>
            			<td colspan="2" align='right'><a href='/vendor/vendor/save-main.php'><img src='/imgz2/save-button2.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a></td>
					</tr>
                </table>
			</form>
            </td>
		</tr>
	</table>  
    </div>


<!-- End Old Code -->  
</div>




<!-- End Section 1 -->  
</div>

<div class="banner2">
<!-- Banner Section -->
		<? include $include_path . "banner-front.inc"; ?>

</div>

<div class="bottom1">
<!-- Footer Section -->  
<? include $include_path . "lo_footer-main.inc"; ?>
  
</div>

</div>

