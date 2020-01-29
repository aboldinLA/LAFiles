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
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?= $this_page_title ?></title>
        <meta name='keywords' content='landscape, landscaping, landscape architecture, landscape contractor, landscape magazine, landscape irrigation, landscaping irrigation, landscape erosion'>
        <meta name='description' content='Resources for Landscape Architects, Contractors and Superintendents from the publisher of Landscape Architect and Specifier News, Landscape Contractor National, and Landscape Superintendent and Maintenance Professional.'>
        <link rel='stylesheet' href='<?= $lol_home ?>/res/css/style.css'  type='text/css'>
        <link rel='stylesheet' href='<?= $lol_home ?>/res/css/layout.css' type='text/css'>
        <script language='javascript' type='text/javascript'  src='/res/js/menuIncludeCSS.js'></script>
        <script language='javascript' type='text/javascript' src='/res/js/menuLayout.js'></script>
        <script language='javascript' type='text/javascript' src='/res/js/jsOldLib.js'></script>
	<link rel="shortcut icon" href="favicon.ico" >
	<script language="JavaScript" src="https://seal.networksolutions.com/siteseal/javascript/siteseal.js" type="text/javascript"></script>
   </head>
    <body text="#000000" link="#000066" vlink="#000066" alink="#000066" leftmargin="0" topmargin="3" marginwidth="0">
