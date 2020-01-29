<?
$requiredClasses[] = 'base/leads_listing.php';

include "lol_common.inc";
$secthdr = "Leads Report";


$V = new vendor();

include $include_path . "lol_header2.inc";?>
<div id='pageBody'>
    <table width="775" cellpadding='2' cellspacing='2' valign='top'>
      <? include $file_path . "includes/leads_view.inc"; ?>
    </table>

</div>


<? include  $include_path . "lol_footer.inc" ?>
	
