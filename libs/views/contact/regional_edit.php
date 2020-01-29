<? require('regionalFormTop.php'); ?>
<?
    if(is_numeric($this->phone_area_code)) {
        $pb1 = "checked=\"checked\"";
        $pb0 = "";
    } else {
        $pb0 = "checked=\"checked\"";
        $pb1 = "";
    }
?>
<input type='hidden' name='intent' value='edit' />
<fieldset>
    <legend>Edit Regional Contact</legend>
    <vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Error(s) found:</h3>" />
    <table width='100%' border='0' align='center'>
        <tbody>
            <tr>
                <td width='125' valign='top' class='formLabel'>
                    <vllabel errClass='errLabel' validators='CityReq'>City</vllabel>
                </td>
                <td class='formObject'>
                    <input type='text' id='city' name='city' size='16' value='<?= $this->city ?>' /> *
                    <vlvalidator name='CityReq' type='required' control='city' errmsg='Please supply a city to be listed in.' />
                </td>
            </tr>
            <tr>
                <td width='125' valign='top' class='formLabel'>
                    <vllabel errClass='errLabel' validators='StateReq,PostalReq'>State / Postal</vllabel>
                </td>
                <td class='formObject' valign='top'>
                    <?= $this->stateSelectionWidget($this->state); ?> &nbsp;
                    <input name='postal_code' id='postal_code' type='text' size='16' value="<?= $this->postal_code ?>" /> *
                    <vlvalidator
                        name='StateReq'
                        type='required'
                        control='state'
                        errmsg='A State or Province is required.' />
                    <vlvalidator
                        name='PostalReq'
                        type='required'
                        control='postal_code'
                        minlength='3'
                        errmsg='A postal code is required.' />
                </td>
            </tr>
            <tr>
                <td width='125' valign='top' class='formLabel'>
                    <vllabel errClass='errLabel' validators='AreaCodeReq,pboolReq'>Regional Presence</vllabel>
                </td>
                <td class='formObject'>
                    <table width='100%' border='0'>
                        <tbody>
                            <tr>
                                <td width='15'>
                                    <input type='radio' name='pbool' id='pbool0' <?= $pb0 ?> value='0' />
                                </td>
                                <td> 
                                    <strong>List my area in this area code, but display the primary company phone number in search results.</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <strong>Regional Area Code</strong> <input type='text' id='area_code' name='area_code' size='3' value='<?= $this->other_1 ?>' /> *<br />
                                    <hr noshade size='-1' />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type='radio' name='pbool' id='pbool1' <?= $pb1 ?> value='1' />
                                </td>
                                <td>
                                    <strong>List my company in the following area code using the full phone number provided. </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <strong>Full Phone Number</strong> (<input type='text' name='area_code2' id='area_code2' size='3' value='<?= $this->phone_area_code ?>' />) 
                                    <input type='text' name='phone_number' size='10' value='<?= $this->phone_number ?>' />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <vlvalidator name='pboolReq' type='required' control='pbool' errmsg='Please select a regional presence option' />
                    <vlgroup name='AreaCodeReq' errmsg='An area code is required.'>
                        <vlvalidator type='required' control='area_code'  />
                        <vlvalidator type='required' control='area_code2'  />
                    </vlgroup>
                    <vlgroup name='regionalReq' errmsg='An full phone number is required when not using the primary company contact information.'>
                        <vlvalidator type='required' control='phone_number' />
                        <vlvalidator type='compare' control='pbool' comparevalue='0' validtype='integer' operator='e' />
                    </vlgroup>
                </td>
            </tr>
            <tr>
                <td align='left'><a href='<?= $_SERVER['PHP_SELF'] ?>?action=regional&record=<?= $_REQUEST['record'] ?>'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='/imgz/vendor/save.gif' border='0' /></td>
                    <div class='formInfo'>
                        List my company in this region with the phone number provided.
                    </div>
            </tr>
        </tbody>
    </table>
</fieldset>
<? require('regionalFormBottom.php'); ?>
