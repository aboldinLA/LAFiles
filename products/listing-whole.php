<?
$requiredClasses[] = 'base/vendor_listing-whole.php';

include "lol_common.inc";
$secthdr = "Vendor Profile";
//include $include_path . "class/vendor_class.inc";
//$V = new vendor_class($db);

$V = new vendor();

include $include_path . "lol_header2.inc";?>
<div id='pageBody'>
    <table width="765" cellpadding='2' cellspacing='2' valign='top'>
      <? //include $include_path . "vendor_view.inc"; ?>
      <? include $file_path . "includes/vendor_view.inc"; ?>
    </table>
  <!-- <TABLE WIDTH="100%" cellpadding="0" cellspacing="0" border="0"> 
	 <TR>
		<TD>
		<table>
		</table>
		</td>
	</tr>
</table>
   -->
</div>


<? include  $include_path . "lol_footer.inc" ?>
	
