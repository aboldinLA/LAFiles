<h2>Assign a Vendor Password</h2>
<form method=get action=<?= $_SERVER['PHP_SELF'] ?>>
<input type='hidden' name='action' value='passwordSet' />
<input type='hidden' name='record' value='<?= $this->id ?>' />
    <table width='100%' border='0'> 
        <tr>
            <td class='formLabel'>
                Password
            </td>
            <td class='formObject'>
                <input type='text' name='vpass' value='<?= htmlentities(stripslashes($this->findAPassword()), ENT_QUOTES); ?>' />
                &nbsp; &nbsp;
                <input type='submit' name='submit' value='submit' />
            </td>
        </tr>
    </table>
</form>
