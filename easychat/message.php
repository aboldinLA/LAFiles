<?php 
////////////////////////////////////////////////////////////
// EasyChat v1.1
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////


session_start();

include('config.php');

if (!empty($_GET['msg']))
{		
	if (!empty($_SESSION['adminusername']) && !empty($_GET['filename']))
	{
		$user_nick = $_SESSION['adminusername'];
		$chatlogfile = $chatFilesFolder . '/' . cleanFileAndUserName($_GET['filename']);
		
		//@MODAN PROB DOESNT WORK??
		if ($_GET['msg'] == 'EXPIRECHAT')
		{
			if (file_exists($chatlogfile))
				unlink($chatlogfile);
				
			exit;
		}
		// Added security should never be an issue but nonetheless
		if (!strncmp($chatlogfile, '_log.html', strlen('_log.html')))
			die('Security problem. IP logged');
	}
	else if (!empty($_SESSION['username']))
	{		

		$user_nick = cleanFileAndUserName($_SESSION['username']);		
		$chatlogfile = $chatFilesFolder . '/' . $user_nick . '_' . str_replace(':', '..', $_SERVER['REMOTE_ADDR']) . '_log.html'; // replace : in IPV6 addresses invalid file char on Windows
		$lastuserinteractionfile = $chatFilesFolder . '/' . $user_nick . '_' . str_replace(':', '..', $_SERVER['REMOTE_ADDR']) . '_lastuserinteraction.html'; 
	}
	else
		exit; // should never come here - no one is registered in session, or user is sending a message but they've timed out already
		
	
	// used from end user only, periodically to get all messages sent to date
	if (isset($_GET['refresh']))  
	{
		// Update user last interaction timestamp so admin side can know if user is typing... clever I am
		if (isset($_GET['istyping']))
			touch($lastuserinteractionfile); 			
		
		if (file_exists($chatlogfile)) 
		{
			$chatloglines = file($chatlogfile);

			foreach ($chatloglines as $message) 
				echo $message;
		}
		else // File does not exist, probably deleted by admin to indicate end of chat or they left, this echo will tell the user JS to disable the chat
		{
			echo '<CHATEXPIRED>';	
			
		}
	}
	else // is admin or regular user sending a message
	{
		if (file_exists($chatlogfile)) 
		{
		   $f = @fopen($chatlogfile,"a+") or die ("ERROR: Could not create chat log. Check permissions.");;
		} 
		else
		{
		   $f = @fopen($chatlogfile,"w+") or die ("ERROR: Could not write chat log. Check permissions.");
		   //fwrite($f,'<NEWCHAT>'); // to tell the JS this is a brand new message file being made, needed to be able to log users out from admin section due to a series of technical reasons
		}
		
		$user_msg = str_replace(array("\n","\r\n"), '<br>', htmlspecialchars(strip_tags(trim($_GET['msg']), '<a><b><strong><i><em><p><br>')));
		if(get_magic_quotes_gpc()) 
			$user_msg = stripslashes($user_msg);
			
		$line = "<p><span class=\"" . (!empty($_SESSION['adminusername']) ? "adminusername" : "username") . "\">$user_nick:</span><span class=\"txt\">$user_msg</span></p>" . (!empty($_SESSION['adminusername']) ? "<!-- a -->" : ''); // mark if this message was from admin
		fwrite($f, "$line\n");
		fclose($f);
		
		// Update user last interaction timestamp if this is a message from user
		// Actually no, user already sent this just now, his not typing in theory...
		//if (!empty($_SESSION['username']))
		//	touch($lastuserinteractionfile);
			
		echo $line;
	}
}

?>