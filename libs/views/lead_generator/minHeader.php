<?php
    if(!isset($pageTitle)) $pageTitle = 'Lead Generator Admin';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?= $pageTitle ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="/devel/lg/lg_style.css" />
        <script type='text/javascript' language='javascript'>
            <!--
            function openWindow(page) {
                var win = window.open(page,'photoWin','width=715,height=600,toolbar=no,scrollbars=yes,resizable=yes,menubar=no,location=no,status=no');
                if(window.focus) { win.focus() }
                return false;
            }

            function showPicture(id,pUri,tUri) {
                parent.showPicture(pUri);
                parent.document.getElementById('pictureID').value = id;
                parent.document.getElementById('thumbURI').value  = tUri;
                return false;
            }
            -->
        </script>
    </head>
    <body>
