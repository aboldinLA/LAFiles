<?php
    /* this is the top level of the document */
    /* we need to set the title, meta tags, include any needed js and any needed stylesheets */
    $lol_home = ""; // why why why why why?
    $this_page_title = "LandscapeOnline.com";
    if(isset($_lol_title)) {
        $this_page_title .= " :: " .$_lol_title;
    } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title><?= $this_page_title ?></title>
        <meta name='keywords' content='landscape, landscaping, landscape architecture, landscape contractor, landscape magazine, landscape irrigation, landscaping irrigation, landscape erosion'>
        <meta name='description' content='Resources for Landscape Architects, Contractors and Superintendents from the publisher of Landscape Architect and Specifier News, Landscape Contractor National, and Landscape Superintendent and Maintenance Professional.'>
        <link rel='stylesheet' href='<?= $lol_home ?>/res/css/style-js.css'  type='text/css'>
        <link rel='stylesheet' href='<?= $lol_home ?>/res/css/layout-js.css' type='text/css'>
        <script language='javascript' type='text/javascript'  src='/res/js/menuIncludeCSS.js'></script>
        <script language='javascript' type='text/javascript' src='/res/js/menuLayout-js.js'></script>
        <script language='javascript' type='text/javascript' src='/res/js/jsOldLib.js'></script>
	<link rel="shortcut icon" href="favicon.ico" >

	<script language="JavaScript" src="https://seal.networksolutions.com/siteseal/javascript/siteseal.js" type="text/javascript"></script>

<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1000','height','760','src','intro','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','intro' ); //end AC code
</script>

	
   </head>
    <body text="#000000" link="#000066" vlink="#000066" alink="#000066" leftmargin="0" topmargin="3" marginwidth="0">

<div style="position:absolute; left:0px; top:0px; padding:0px; width:1024px">
            <img src="https://landscapearchitect.com/imgz/lol-back.jpg">
</div>

<div id="lol_header">
    <div id="lol_bannerTop"> <? $C->banner($_SERVER['PHP_SELF'],1); ?> </div>
</div>

<div style="position:absolute; left:903px; top:118px; padding:0px; width:200px">
		<? $C->banner($_SERVER['PHP_SELF'],11); //was 12 ?>
</div>		
<div style="position:absolute; left:903px; top:725px; padding:0px; width:200px">
		<? $C->banner($_SERVER['PHP_SELF'],12);  ?>
</div>
<div style="position:absolute; left:405px; top:5px; padding:0px; width:200px">
		<? $C->banner($_SERVER['PHP_SELF'],13);  ?>
</div>

<div id="menubar" style="position:absolute; left:-20px; top:78px; padding:0px; width:1024px; height:30px">
    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
        <tr valign='top' align='center'>
	    <td width='75'><a href=" ">Home</a></td>
	    <td width='125'><a id="act4" href="/research/index-js.php" onmouseover="ypSlideOutMenu.showMenu('menu5')" onmouseout="ypSlideOutMenu.hideMenu('menu5')">Articles/News</a></td>
		<td width='125'><a id="act2" onmouseover="ypSlideOutMenu.showMenu('menu3')" onmouseout="ypSlideOutMenu.hideMenu('menu3')">Product Search</a></td>
	    <td width='125'><a id="act6" href="/calendar/index-js.php" onmouseover="ypSlideOutMenu.showMenu('menu7')" onmouseout="ypSlideOutMenu.hideMenu('menu7')">Industry Links</a></td>
	    <td width='100'><a id="act7" onmouseover="ypSlideOutMenu.showMenu('menu8')" onmouseout="ypSlideOutMenu.hideMenu('menu8')">Sign-Up</a></td>
	    <td width='175'><a id="act5" href="https://landscapearchitect.com/research/TLE/index-2010" onmouseover="ypSlideOutMenu.showMenu('menu6')" onmouseout="ypSlideOutMenu.hideMenu('menu6')">2010 Landscape Expo</a></td>
	    <td width='125'><a id="act8" href="/contact" onmouseover="ypSlideOutMenu.showMenu('menu9')" onmouseout="ypSlideOutMenu.hideMenu('menu9')">Contact Us</a></td>
       </tr>
    </table>
</div>

<div style="position:absolute; left:-7px; top:117px; padding:0px; width:200px">
<table width='780' border='0' cellpadding='0' cellspacing='0'>

<tr>
    <td>
        <table cellpadding='0' cellspacing='0' border='0'>
            <tr valign='top'>
                <td>
	                <table cellpadding='0' cellspacing='1' height='615'>
		                <tr valign=top><td><? include $include_path . "advertising_top-js.inc"; ?></td></tr>
	                </table>
                </td>
                <td><img src='/imgz/spacer.gif' width='3' height='8'></td>
                <td valign='top' WIDTH='75%' align='center' id='bodyc'><!-- width=543-->
                    <? if ($secthdr) { ?>
                    <h1 id='pageTitle'><?= $secthdr ?></h1>
                    <table align='center' CELLPADDING='0' WIDTH='100%' CELLSPACING='0' > 
	                    <tr>
                            <td align=center>
                    <? } ?> 
