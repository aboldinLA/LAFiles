<?
include "lol_common.inc";
include $include_path . "lol_header2.inc";

$email = "LO-IT@landscapeonline.com";
?>



<div style="position:absolute; left:10px; top:20px; padding:0px; width:700px; height:175px; font-family:Arial, Helvetica, sans-serif; font-size:24px; text-align:left; font-weight:bold">
IT Support Request Form (<font style="font-size:18px">for company use only)</font><br><br>

<font style="font-size:14px">Before you submit a request for assistance be sure to check out the FAQ's for common answers to problems.<br><br>
If you do not see a solution for you problem then use the below form to fill out an IT request. You will receive a response of when your problem is scheduled to be handled. If you need to check the status of your request you can</font><font style="font-size:18px; font-weight:bold"> <a href="/IT-Support/calendar-jerry.php" target="_blank">View the IT Calendar here.</a></font>
</div>

<div style="position:absolute; left:10px; top:200px; padding:0px; width:375px; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left">

<font style="font-size:24px; font-weight:bold">IT Request Form</font><br>
<form action="ITpost.php" method="POST">
<input type="hidden" value="<?echo $email?>" name="email2" >
	
    <strong>Type of Problem</strong><br />
        <INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Software Update"){echo "Checked"; } ?> value="Software Update"> 
        Software Update<br />  
		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Software Request"){echo "Checked"; } ?> value="Software Request" > 
		Software Request<br />
        		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Hardware Issue"){echo "Checked"; } ?> value="Hardware Issue" > 
		Hardware Issue<br />
		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Computer Issues"){echo "Checked"; } ?> value="Computer Issues" > 
		Computer Issues<br />
		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Microsoft Progam(s) Not Working"){echo "Checked"; } ?> value="Microsoft Progam(s) Not Working" > 
		Microsoft Progam Issues<br />
		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="FileMaker Issue"){echo "Checked"; } ?> value="FileMaker Issue" > 
		FileMaker Issue<br />
		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Email Autoresponse Request"){echo "Checked"; } ?> value="Email Autoresponse Request" > 
		Email Autoresponse Request<br />
		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Website Issues"){echo "Checked"; } ?> value="Website Issues" > 
		Website Issues<br />
		<INPUT TYPE="RADIO" NAME="Problem01" <? if ($Problem01 =="Media Kit Request"){echo "Checked"; } ?> value="Media Kit Request" > 
		Media Kit Request<br /><br>        
</div>

<div style="position:absolute; left:25px; top:425px; padding:0px; width:450px; height:225px; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left">
    <strong>Priority:</strong><br />
		<INPUT TYPE="RADIO" NAME="Priority" <? if ($Priority =="Low"){echo "Checked"; } ?> value="Low" > Low (Not an imediate prblem)<br />
		<INPUT TYPE="RADIO" NAME="Priority" <? if ($Priority =="Medium"){echo "Checked"; } ?> value="Medium" > Medium (Work flow slowed)<br />
		<INPUT TYPE="RADIO" NAME="Priority" <? if ($Priority =="High"){echo "Checked"; } ?> value="High" > High (Unable to complete work)<br><br>
</div>




<div style="position:absolute; left:25px; top:510px; padding:0px; width:450px; height:225px; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left">
    <strong>Employee Name:</strong><br />
		<input type="text" id="name" name="name" size="50" />
</div>
 
<div style="position:absolute; left:25px; top:560px; padding:0px; width:450px; height:225px; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left">
		<label for="description"><strong>Description
 of problem:</strong></label><br>
		<textarea cols="75" rows="5" id="description" name="description" />Please enter a brief description of the problem</textarea><br><br>
    
		Click Here <input type="submit" value="Submit" name="submit" style="width:75px; height:25px; font-size:14px; font-weight:bold" /> to submit 
		your IT Request<br /><br />
 
    
</form>
</div>

<div style="position:absolute; left:400px; top:200px; padding:0px; width:350px; height:225px; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left">
<font style="font-size:24px; font-weight:bold">FAQ's</font><br>
<ul>
	<li><a href="/IT-Support/microsoft.html" onclick="return popitup2('microsoft.html')">Microsoft Product not working</a></li>
    <li><a href="/IT-Support/filemaker.html" onclick="return popitup2('filemaker.html')">FileMaker not working</a></li>
    <li><a href="/IT-Support/Computer.html" onclick="return popitup2('Computer.html')">Computer not working</a></li>
    <li><a href="/IT-Support/mouse-key.html" onclick="return popitup2('mouse-key.html')">Mouse or Keyboard not working</a></li>
    <li><a href="/IT-Support/transfer3.html" onclick="return popitup2('transfer3.html')">Lost Transfer3 folder</a></li>
    <li><a href="/IT-Support/email.html" onclick="return popitup2('email.html')">Not recieving Email</a></li>
    <li><a href="/IT-Support/internet.html" onclick="return popitup2('internet.html')">Internet down</a></li>
    <li><a href="/IT-Support/Basic-Mac Instructions.pdf">Mac User Guide (download)</a></li>
    <li><a href="/IT-Support/How-to-get-email-via-the-web.pdf">How to get email over the internet (download)</a></li>
</ul><br>
</div>




<? include $include_path . "lol_footer2.inc"; ?>
