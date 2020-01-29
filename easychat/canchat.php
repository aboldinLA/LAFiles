<?php
////////////////////////////////////////////////////////////
// EasyChat v1.1
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////


include ('config.php');

// Stop firefox whinging about missing document type or whatever
header('Content-Type: text/plain; charset=UTF-8');

if (file_exists($chatFilesFolder . '/canchat.txt'))
	// If canchat.txt last modified within allowed auto chat button disable period, then output "yes" for javascript to read and display chat button
	if (filemtime($chatFilesFolder . '/canchat.txt') > (time() - ($autoDisableLiveChatButtonAfterNoAdminLoggedInForSeconds)))
		die('var ec_canchat = true;');

echo 'var ec_canchat = false;';

?>