<? $dog = 'cat';

?>

 <!-- Add Content Below this line--> 
   
 <div>
 	<span style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold">
    Text Here
    </span>
    <? echo "Hello World" ?><br><br>
    
<CENTER>
<form>
    <input type='hidden' name='form_id' />

 <table cellspacing='5' border='0'>
        <thead>
            <tr>
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>
                <td align='right'><input type='image' src='/imgz/continue-save.jpg' border='0' /></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width='125' class='formLabel' valign='top'>
                    Company Name <? echo $dog ?> <? echo $id ?>
                </td>
                <td valign='top' class='formObject'>
                    <input tabindex=1 type='text' name='company_name' id='company_name' size='32' value="<? echo $dog ?>" maxlength='255' /> 
                    <div class='formInfo'>Your company name will be displayed in all of your subscriber-facing promotional  material and listings.</div>
                    
                </td>
            </tr>
            </tbody>
            </table>











<INPUT TYPE="text" NAME="username"> : name <BR>
<INPUT TYPE="text" NAME="email"> : email <BR>
comments <BR>
<TEXTAREA NAME="COMMENTS" ROWS="10" WRAP="hard">
</TEXTAREA>
<INPUT NAME="redirect" TYPE="hidden" VALUE="index.html">
<INPUT NAME="NEXT_URL" TYPE="hidden" VALUE="index.html">
<BR>
<INPUT TYPE="submit" VALUE="Send">
<INPUT TYPE="reset" VALUE="Clear">
</FORM>
</CENTER>
<!-- END OF FORM -->
    
 </div>

 <!-- Add Content Above this line --> 
