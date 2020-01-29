<?php
////////////////////////////////////////////////////////////
// EasyChat v1.0
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////

//
// CONFIGURE BASIC SETTINGS BELOW
//

// You need this to be able to access the admin section. Please change it something else below.
$adminChatPassword = '3c8X9k25L';

// The title / caption that appears on the chat window
$captionText = 'Welcome to Website Support';

// Your support chatname
$supportDisplayName = 'Website Support';

// Where chat logs are temporarily kept; 'currentchats' is default sub folder location
$chatFilesFolder = 'currentchats'; // Specify a path relative to this file. No trailing slash / 

// Chats get deleted / removed from view after this period of idleness
$autoDeleteLogsOlderThanSeconds = 1800; // 1800 = 30 minutes, 86400 = 24 hours

// The live chat button on your website disapears after no admin found for this period of time (when user loads a page with button javascript on it)
$autoDisableLiveChatButtonAfterNoAdminLoggedInForSeconds = 20; // 120 = 2 minutes etc.


// ADVANCED USERS ONLY
//
// This is the Chat Window HTML design that both support users and end users see.
// You can customize it to suit your tastes but it must have the css classes / element types as commented below

$defaultChatWindowHTML =  // NO Apostrophes in html content here --> '
'<div class="chatwindow"><!-- Must have this classname: chatwindow -->
	<div class="caption">' . $captionText . '</div><div class="speakingwith"></div>
	<div class="icon">&nbsp;</div>      
	<div class="chatoutput"><!-- Must have this classname: chatoutput --></div>
	<div class="usertypingnotification"></div>
	<table class="msgresponsearea">
		<tr>
	 		<td>Message:</td>
	 		<td><textarea class="msgtxt"></textarea><!-- Must have this classname: msgtxt --></td>
	 		<td><button class="sendmessage">Send</button><!-- Must have this classname: sendmessage - but can be anything an onClick event can be registered to (image, etc) --></td>
		</tr>
	</table>
</div>
<br>
';



/************** STOP EDITING NOW     *****************/
/************** STOP EDITING NOW     *****************/
/************** STOP EDITING NOW     *****************/














// Keep chat logs clear - to avoid huge build up of chat logs and user interaction files, initiated when admin chats refreshed, and when a user exits the session.
// Sufficient to keep files down and load, low.
function cleanupChatLogs()
{
	global $chatFilesFolder, $autoDeleteLogsOlderThanSeconds;
	
	$chatlogs_array = glob($chatFilesFolder . '/*.html');
	
	foreach($chatlogs_array as $logfile)
	{
		if (file_exists($logfile)) // should..
		{
			$modifiedtime = filemtime($logfile);
		
			if ($modifiedtime !== FALSE)
				// Delete old log files
				if ($modifiedtime < (time() - $autoDeleteLogsOlderThanSeconds))
					unlink($logfile);
		}
	}
}

function cleanFileAndUserName($string)
{
	// Strip non alphanumeric except '-'
	$newstr = preg_replace('/[^-_.A-Z0-9\s]/i', '', $string);	
	$newstr = str_replace(' ', '_SP_', $newstr);  // Replace spaces for valid element ID usage
	$newstr = trim(str_replace(array('cd ', 'mv ', '..', '\\', '/', '?'), '', $newstr)); 
	return $newstr;	
}

?>