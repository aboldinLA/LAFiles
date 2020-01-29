<?
    include("lol_common.inc");
    include($include_path . "class/industry_class.inc");

    $I = new industry_class($db);
    if(is_numeric($_GET['association'])) {
        $data = $I->association_info($_GET['association']);
    } else {
        // error
        exit();
    }
?>
<html>
<head>
<link REL="stylesheet" HREF="/res/css/style.css" TYPE="text/css">
<title>
    Information for <?=$data['association'];?>
</title>
<script language="JavaScript">
<!--
    function loadParent(url, close) {
        self.opener.location = url;
        if(close)
            self.close();
    }
-->
</script>
</head>
<body>
    <table>
    <? $I->find_ass("", "", "", "id = '" . $_GET['association'] . "' ", "", "child"); ?>
    </table>
</body>
</html>
