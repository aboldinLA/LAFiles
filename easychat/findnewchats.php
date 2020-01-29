<?php
////////////////////////////////////////////////////////////
// EasyChat v1.1
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////


// This file is called repeatedly by admins. It keeps things clear of clutter and alerts javascript chat button on your website that an admin is around to chat.
// If you close your admin chat window, this file stops being called by it, and the live chat button will disappear from your website after your chosen period in config.php
session_start();

if (!isset($_SESSION['adminusername'])) // unacceptable access of file
{
	header('HTTP/1.0 404 Not Found');
	exit;
}
	
include('config.php');

// Clean up chat logs so admin screen stays clean of clutter
cleanupChatLogs();

// This file is read by chat button javascript to see if we can chat or not. Update its modification time.
@file_put_contents($chatFilesFolder . '/canchat.txt', '-') or die("ERROR: Problem writing to $chatFilesFolder/canchat.txt - Please make sure you have write permissions to both that folder and file.");

$chatlogs_array = glob($chatFilesFolder . '/*_log.html');
$chatlogdata = array();

function sort_by_ctime($file1, $file2) 
{
	$time1 = filectime($file1);
	$time2 = filectime($file2);
	 
    if ($time1 == $time2)
		return 0;

	return ($time1 < $time2) ? 1 : -1;
}
// Sort by file created time on windows and "close enough" to that on linux, for screen positioning to remain the same, and new chats to append rather than shift existing windows
usort($chatlogs_array,'sort_by_ctime'); 


foreach($chatlogs_array as $logfile)
{
	if (file_exists($logfile)) // should..
	{	
		$filename = str_replace(array($chatFilesFolder, '\\', '/'), '', $logfile); // need file name without path
		
		$userTyping = false;
		$lastModifiedTimeLogFile = filemtime($logfile);
		$lastModifiedTimeUserInteractionFile = filemtime(str_replace('_log.html', '_lastuserinteraction.html', $logfile));
		
		 // If user typed / did something within 4 seconds, we can say they are typing
		if (abs($lastModifiedTimeLogFile - $lastModifiedTimeUserInteractionFile) > 1 && (time() - $lastModifiedTimeUserInteractionFile) < 3)
			$userTyping = true;

		$chatlogdata[$filename] = array($userTyping, rawurlencode(file_get_contents($logfile))); // rawurlencode to avoid auto backslash adding by json_encode				
	}	
}

echo json_encode($chatlogdata);

?>