<h2>Manage Company Logo</h2>
<?php
    if(isset($this->logo) && strlen($this->logo) > 0) {
        ?><center><img src='/products/images/<?= $this->logo ?>' border='0' /></center><?
    } else {
        ?><center>NO LOGO</center><?
    }
?>
<hr noshade size='-1' />
<form enctype='multipart/form-data' action='<?= $_SERVER['PHP_SELF'] ?>' method='POST' name='fileForm' runat='vdaemon'>
<input type='hidden' name='intent' value='savelogo' />
<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
<input type='hidden' name='record' value='<?= $this->id ?>' />
<input type='hidden' name='action' value='logo' />
<vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Error(s) found:</h3>" />
<table width='100%'>
    <tbody>
        <tr>
            <td class='formLabel' width='25%'>Upload Logo</td>
            <td class='formObject'>
                <input type='file' name='logo_upload' id='logo_upload' />
                <vlvalidator type='required' name='fileReq' control='logo_upload' errmsg='File is Required to Upload.' />
            </td>
        </tr>
    </tbody> 
    <tfoot>
        <tr>
            <td align='left'><a href='<?= $_SERVER['PHP_SELF'] ?>?record=<?= $this->id ?>&action=manage'><img src='/imgz/vendor/exit.gif' border='0' /></a></td>
            <td align='right'><input type='image' src='/imgz/vendor/save.gif' /></td>
        </tr>
    </tfoot>
</table>
</form>
