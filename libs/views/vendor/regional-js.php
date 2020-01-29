<table>
	<tr>
    	<td style="font-size:16px; font-family:'Times New Roman', Times, serif; color:#000; width:750px">
    	Regional listings allow you to list your company in the regional markets your clients are searching in.<br />
		Product searches are done on a National, State wide, and Area Code level.<br /><br />
    	Please provide a City, State, Postal Code, and Area Code for searching, and a phone number to display for the listing.
		</td>
    </tr>
</table>
        <br />
<form method='POST' name='RContact' runat='vdaemon' action='<?= $_SERVER['PHP_SELF'] ?>'>
    <input type='hidden' name='action' value='regional' />
    <input type='hidden' name='record' value='<?= $this->id ?>' />
    <input type='hidden' name='id' value='<?= $this->id ?>' />
    <input type='hidden' name='intent' value='add' />
    <fieldset>
        <legend><span style="font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold">Edit Regional Contact</span></legend>
        <vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Error(s) found:</h3>" />
        <table width='750' border='0' align='center' style="font-size:16px">
            <tbody>
            	<tr>
                	<td colspan="2">List my company in this region with the phone number provided.</td>
                </tr>
                <tr>
                    <td style="height:10px"> </td>
                </tr>
                <tr>
                    <td width='125' valign='top' class='formLabel' style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
                        <vllabel errClass='errLabel' validators='CityReq'>City</vllabel>
                    </td>
                    <td class='formObject'>
                        <input type='text' id='city' name='city' size='16' value='' style="font-family:Arial, Helvetica, sans-serif; font-size:14px; background-color:#ccc; width:200px; height:20px; box-shadow: 5px 5px 5px #888888" /> *
                        <vlvalidator name='CityReq' type='required' control='city' errmsg='Please supply a city to be listed in.' />
                    </td>
                </tr>
                <tr>
                    <td style="height:10px"> </td>
                </tr>                
                <tr>
                    <td width='125' valign='top' class='formLabel' style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
                        <vllabel errClass='errLabel' validators='StateReq,PostalReq'>State / Postal</vllabel>
                    </td>
                    <td class='formObject' valign='top'>
                        <?= $this->stateSelectionWidget($this->getCompanyState()); ?> &nbsp;&nbsp;
                        <input tabindex=12 name='postal_code' id='postal_code' type='text' size='16' value="<?= $this->getCompanyPostalCode(); ?>" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; background-color:#ccc; width:75px; height:20px; box-shadow: 5px 5px 5px #888888" /> *
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
                    <td style="height:10px"> </td>
                </tr>                    
                <tr>
                    <td width='125' valign='top' class='formLabel' style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
                        <vllabel errClass='errLabel' validators='AreaCodeReq,pboolReq'>Regional Presence</vllabel>
                    </td>
                    <td class='formObject'>
                        <table width='750' border='0'>
                            <tbody>
                                <tr>
                                    <td width='15'>
                                        <input type='radio' name='pbool' id='pbool0' value='0' />
                                    </td>
                                    <td style="font-family:'Times New Roman', Times, serif; font-size:16px"> 
                                        List my area in this area code, but display the primary company phone number in search results.
                                    </td>
                                </tr>
                				<tr>
                    				<td style="height:10px"> </td>
                				</tr>                                      
                                <tr>
                                    <td>&nbsp;</td>
                                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
                                        Regional Area Code <input type='text' id='area_code' name='area_code' size='3' value='' style="font-family:Arial, Helvetica, sans-serif; font-size:14px; background-color:#ccc; width:50px; height:20px; box-shadow: 5px 5px 5px #888888" /> *<br />
                                        <hr noshade size='-1' />
                                    </td>
                                </tr>
                				<tr>
                    				<td style="height:10px"> </td>
                				</tr>                                      
                                <tr>
                                    <td>
                                        <input type='radio' name='pbool' id='pbool1' value='1' />
                                    </td>
                                    <td>
                                        List my company in the following area code using the full phone number provided.
                                    </td>
                                </tr>
               					<tr>
                    				<td style="height:10px"> </td>
                				</tr>                                     
                                <tr>
                                    <td>&nbsp;</td>
                                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">
                                        Full Phone Number (<input type='text' name='area_code2' id='area_code2' size='3' value='' style="font-family:Arial, Helvetica, sans-serif; font-size:14px; background-color:#ccc; width:50px; height:20px; box-shadow: 5px 5px 5px #888888" />&nbsp;)&nbsp;&nbsp; 
                                        <input type='text' name='phone_number' size='10' value='' style="font-family:Arial, Helvetica, sans-serif; font-size:14px; background-color:#ccc; width:100px; height:20px; box-shadow: 5px 5px 5px #888888" />
                                    </td>
                                </tr>
               					<tr>
                    				<td style="height:15px"> </td>
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
                    <td align='left'><a href='<?= $_SERVER['PHP_SELF'] ?>?action=regional&record=<?= $this->id ?>'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                    <td align='right'><input type='image' src='/imgz/vendor/save.gif' border='0' /></td>
                </tr>
               					<tr>
                    				<td style="height:20px"> </td>
                				</tr>                  
            </tbody>
        </table>
    </fieldset>
</form>
