

<!-- Above used to correct content position need to rewrite to do correct -->

<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
?>

<?php
//Firefox Chrome
if ($firefox) {?> 


<!-- Old Code Start -->

	<? include $include_path . "/base/research_search_application2-js2-test.php" ?>
         

<!-- Old Code End -->




<? } else { ?>
               <style>
					#wrapper7 {
    					margin-left:auto;
    					margin-right:auto;
    					width:960px;
					}
				</style>
                
	<?
	include $include_path . "/base/research_search_application2-js2-test.php";
	?>                
                
 
<!-- Old Code End -->
<? } ?>


