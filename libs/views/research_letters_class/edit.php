    <table width='100%' class='searchOptions' border='0' cellpadding='0' cellspacing='0'>
        <tr><td colspan='3' class='cellhead'>Article</td></tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Article ID:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><?= $art_id ?></td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Article Title:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><?= $title_text ?></td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Issue:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><?= date('M Y', $input); ?></td>
        </tr>
    </table>
    <br />
    <table width='100%' class='searchOptions' border='0' cellpadding='0' cellspacing='0'>
        <tr><td colspan='3' class='cellhead'>Sender</td></tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Name:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td>
                <input type='text' size='20' name='first_name' value='<?= $first_name ?>' />
                <input type='text' size='20' name='last_name' value='<?= $last_name ?>' />
            </td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Company:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><input type='text' size='50' name='company' value='<?= $company ?>' /></td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Title:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><input type='text' size='50' name='title' value='<?= $title ?>' /></td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Email:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><input type='text' size='50' name='email' value='<?= $email ?>' /></td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Phone:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td>    
                <input type='text' size='5' name='area_code' value='<?= $area_code ?>' />
                <input type='text' size='20' name='phone' value='<?= $phone ?>' />
            </td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>City:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><input type='text' size='20' name='city' value='<?= $city ?>' /></td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>State:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><?= common_class::select_state($state); ?></td>
        </tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>ZIP:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><input type='text' size='20' name='zip' value='<?= $zip ?>' /></td>
        </tr>
    </table>
    <br />
    <table width='100%' class='searchOptions' border='0' cellpadding='0' cellspacing='0'>
        <tr><td colspan='3' class='cellhead'>Response</td></tr>
        <tr>
            <td height='15' width='15%' align='right'><strong>Type:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><?= $response ?></td>
        </tr>
        <tr><td colspan='3'>&nbsp;</td></tr>
        <tr>
            <td valign='top'  height='15' width='15%' align='right'><strong>Text:</strong></td>
            <td width='2%'>&nbsp;</td>
            <td><textarea name='comment' rows='9' cols='70' wrap='virtual'><?= stripslashes($comment); ?></textarea></td>
    </table>
    <hr noshade> 
    <div align='center'>
        <input type='submit' name='Update' value='Update' />
        <input type='submit' name='Proof' value='Proof' />
    </div>

