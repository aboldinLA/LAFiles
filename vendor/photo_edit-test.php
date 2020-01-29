<?php
require_once('photo_edit_do-test.php');
$company_id = $_GET['company_id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Photo Edit</title>
        <style type='text/css' media='screen'> @import "/res/css/vendor_signup.css"; </style>
        <style type='text/css' media='print'> @import "/res/css/vendor_signup.css"; </style>
        <script language='javascript' src='/res/js/jsOldLib.js'></script>

    </head>
	<body>
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

    <div id='wrapper'>
    <table cellpadding='0' cellspacing='0' border='0'>
        <tbody>
        <tr>

            <td width='175'>
                <img src='/imgz/main_lol_logo.gif' border='0' />
            </td>
            <td valign='bottom' width='605'>
                <div class='pageTitle'></div>
            </td>
        </tr> 
        </tbody>
    </table>
	
    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
        <tr class='pageContainer'> 
        
            <td valign='top' class='pageContent'>
            	<br />
				<strong>[ <a href='/vendor/profile.php?action=manage&record=<?=$company_id?>'>Manage</a> <!--| 
                <a href='/vendor/profile.php?action=products&record=<?=$company_id?>&intent=add'>Add a Product</a>-->
                 ] </strong>
                <hr noshade size='-1' />
                
    	    <form method="POST" name="photo_edit" action="photo_edit_do-test.php" onsubmit="return">        	
                <input type="hidden" name="id" value="<?php echo $company_id ?>" />
                <input type="hidden" name="action" value="true" />
            	<table border='0' width='100%' cellpadding='0' cellspacing='0'>
                    <?php echo get_products_list_html($company_id); ?>
			<tr>
				<td colspan=2  align=right>
					<!--<font style="font-size:9px;"><i>
				*To add Categories, edit your profile and add categories that apply to your company's 
products.</i></font>-->		
				</td>
			</tr> 
            		<tr>
			        <td>&nbsp;</td>
            			<td align='right'>
            				<a href='profile.php'><img src='/imgz/vendor/continue.gif' border='0' /></a>
        				</td>
        				<!---<td align='right'>
        					<input type="image" src="/imgz/vendor/continue.gif" border="0" />
        				</td>-->
        			</tr>
            	
            	
			</form>
     	</tr>

    </table>   
    </body>
</html>
