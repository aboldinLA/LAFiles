<form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
    <input type='hidden' name='action' value='regional' />
    <input type='hidden' name='record' value='<?= $_REQUEST['record'] ?>' />
    <input type='hidden' name='id' value='<?= $_REQUEST['record'] ?>' />
    <input type='hidden' name='cid' value='<?= $this->id ?>' />
