<?php
////////////////////////////////////////////////////////////
// EasyChat v1.1
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////


// Generic logout / session destroy and opportunity to clean up chat logs at a reasonable pace.

// This is called when the user leaves the chat window or logs out somehow. Same for admin

include('config.php');

cleanupChatLogs();

session_start();
session_destroy();

?>