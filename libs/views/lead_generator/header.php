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
                var win = window.open(page,'photoWin','width=715,height=620,toolbar=no,scrollbars=yes,resizable=yes,menubar=no,location=no,status=no');
                if(window.focus) { win.focus() }
                return false;
            }

            function showPicture(uri) {
                if(document.getElementById) {
                    hImg = document.getElementById('holder');
                    hImg.src = uri;
                    return false;
                } 
            }

            function updateParent(id) {
                var pid   = document.getElementById('pictureID').value;
                var thumb = document.getElementById('thumbURI').value;

                window.opener.document.getElementById('photo' + id.toString()).value = pid;
                window.opener.document.getElementById('thumb' + id.toString()).src   = thumb;

                window.close();
                return false;
            }

            function confirmBox(url,msg) {
                if(confirm(msg)) {
                    document.location = url;
                    return true;
                }
            }
            -->
        </script>
    </head>
    <body>
        <div id="metaContainer">
