<?php
////////////////////////////////////////////////////////////
// EasyChat v1.1
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////


include('config.php');

ini_set('session.gc_maxlifetime', '1800'); // 30 minute expiry - you can lose connection to the admin for that long
session_start();


// Check login is correct if so register login as ok
if (isset($_POST['adminpass']) && $_POST['adminpass'] === $adminChatPassword)
	$_SESSION['adminloggedin'] = true;

if (empty($_SESSION['adminloggedin']))
{
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
	<html>
    <head>
    <title>Easy Chat - Please login</title>
	<link href="images/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    
    <?php 
	
		if (isset($_POST['adminpass']))
			echo '<h4 style="color: red">Error: Invalid password. Please try again.</h4>';	
	?>
     
    <form style="color: white" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h1><img src="images/easychatlogo.png" align="absmiddle" /> Welcome to Easy Chat!</h1>
    Please log in with your admin password to enable Live Chat.<br /><br />
    
    <strong>Your password:</strong>&nbsp;&nbsp;
    <input name="adminpass" type="password" value="" />
    <input type="submit" value="Login to Easy Chat" />
    </form>
    </body>
    </html>
<?php	
	exit; // show login form and exit
}


$_SESSION['adminusername'] = $supportDisplayName;

$username = isset($_SESSION['adminusername']) ? $_SESSION['adminusername'] : "Hidden";   



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<title>Easy Chat - Admin User</title>
<link href="images/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
  
  	
	var chatWindowArr = new Array();
  
  	var defaultChatWindowHtml = '<?php echo str_replace(array("\r","\n", "'"), array('','', "\\'"), $defaultChatWindowHTML); ?>';
  
  	var sndNewChat = new Audio("images/newchat.wav"); // buffers automatically when created
	var sndNewChatMsg = new Audio("images/newchatmsg.wav");
  	var sndNewCloseChat = new Audio("images/closechat.wav");
	
	var disableSounds = false;

  
	function detectIfMobile() 
	{ 
		if(    navigator.userAgent.match(/Android/i)
			|| navigator.userAgent.match(/webOS/i)
			|| navigator.userAgent.match(/iPhone/i)
			|| navigator.userAgent.match(/iPad/i)
			|| navigator.userAgent.match(/iPod/i)
			|| navigator.userAgent.match(/BlackBerry/i)
			|| navigator.userAgent.match(/Windows Phone/i))
		{
		 
			if (navigator.userAgent.match(/iPhone/i)
				|| navigator.userAgent.match(/iPad/i)
				|| navigator.userAgent.match(/iPod/i))
			{
				disableSounds = true; // piss poor Apple support on safari mobile
				document.getElementById("iosfix").style.display = '';
			}
		 
			return true;
		}
		else 
		{
			return false;
		}
	}
  
	function initiateIOSSound()
	{
		alert('Initiating sound on iOS - You\'re on an iOS device. \'New chat\' sound will use \'new message\' sound. Blame Apple for a business decision to limit audio support to keep the games market to their app store and not on web pages (is the going underlying theory). May not be bandwidth efficient either due to their non-caching of audio (it seems). If your mobile data usage goes up considerably do not activate sounds on this iDevice in future.');
	
		sndNewChat = sndNewChatMsg;
		sndNewChatMsg.play();
		disableSounds = false;
	}
  
  	function flashChatWindow(chatwindow, color)
	{
		
		chatwindow.style.backgroundColor = color;
		
		var msgTextElement = getElementsByClassName(chatwindow, "msgtxt");				
		if (msgTextElement && msgTextElement.length > 0)
		{
			if (msgTextElement[0].rel == 'focused')
			{
				chatwindow.style.backgroundColor = '';
				return; // stop flashing				
			}
		}

		setTimeout(function() { flashChatWindow(chatwindow, (color == '#f6fffc' ? '#9bf448' : '#f6fffc')) }, 1000);
	}
  

	function getElementsByClassName(node, classname) 
	{
		var a = [];
		var re = new RegExp('(^| )'+classname+'( |$)');
		var els = node.getElementsByTagName("*");
		
		for(var i=0,j=els.length; i<j; i++)
			if(re.test(els[i].className))a.push(els[i]);
		return a;
	}
	
	
	String.prototype.endsWith = function(suffix) {
		return this.indexOf(suffix, this.length - suffix.length) !== -1;
	};
	
	function replaceAll(findstr, replacestr, str) 
	{
		return str.replace(new RegExp(findstr, 'g'), replacestr);
	}
	

	function getHTTPObject()
	{
		if (window.ActiveXObject) 
			return new ActiveXObject("Microsoft.XMLHTTP");
		else if (window.XMLHttpRequest) 
			return new XMLHttpRequest();
		else 
		{
			alert("Your browser does not support AJAX.");
			return null;
		}
	}   


	function updateUserChatWindow(httpObject, filename)
	{		
		if(httpObject.readyState == 4)
		{
			var response = httpObject.responseText;	
			
			var objDiv = document.getElementById(filename);					
			
			if (objDiv != null)
			{
				var chatMessagesElement = getElementsByClassName(objDiv, "chatoutput");

				if (chatMessagesElement && chatMessagesElement.length > 0)
				{
					chatMessagesElement[0].innerHTML += response;
					chatMessagesElement[0].scrollTop = chatMessagesElement[0].scrollHeight;
				}
					
					
				var msgTextElement = getElementsByClassName(objDiv, "msgtxt");
						
				if (msgTextElement && msgTextElement.length > 0)
				{
					msgTextElement[0].value = "";
					msgTextElement[0].focus();
				}
				
				
			}
		}
	}
	
	function killChat(filename)
	{
		var httpObject = getHTTPObject();
		if (httpObject != null)
		{
			var randomnumber=Math.floor(Math.random()*9999);
			var link = "message.php?msg=EXPIRECHAT&filename="+filename+"&rnd=" + randomnumber;
			httpObject.open("GET", link, true);		
			httpObject.onreadystatechange =  function() { updateUserChatWindow(httpObject, filename); };
			httpObject.send(null);
			// Remove the chat window above will kill the chat window to user on their next update in a few seconds
			document.body.removeChild(document.getElementById(filename));
			
			if (!disableSounds)
				sndNewCloseChat.play();
	 	}
		
	}

	var existingChatWindowIDs = new Array();
	

	function updateAllUserChatWindows(httpObject) 
	{
		if (httpObject.readyState == 4 && httpObject.status == 200) 
		{
			var response = httpObject.responseText;
			if (response.indexOf('ERROR: Problem writing to ') === 0)
			{
				alert('The file "canchat.txt" in the current chats folder, must be writable (including the folder it is in). Please change it\'s permissions and refresh this window for active chat windows to appear.');
				return;
			}//alert(response);
			var chats = JSON.parse(response);		
			var currentChatIDs = new Array();
			
			
			var oneOrMoreNewMessages = false;
			
			for (var key in chats)
			{
				if (chats.hasOwnProperty(key))
				{		
					// username_127.0.0.1_log.html
					var userIPAddress = key.substring(0, key.lastIndexOf('_'));
					userIPAddress = userIPAddress.replace(/\.\./g, ':').substring(userIPAddress.lastIndexOf('_') + 1); // get IP, undo windows :: IPv6 char issue
				
					currentChatIDs.push(key); // all returned IDs of current chats
					
					var objDiv = document.getElementById(key);
					
					if (objDiv == null)
					{						
						existingChatWindowIDs.push(key); // add chat to list of newly created chat windows
						
						objDiv = document.createElement("span");
            			objDiv.id = key;
						objDiv.style.display = "inline-block";
						objDiv.style.borderRadius = '15px';
						objDiv.innerHTML = '<a style="cursor:pointer; padding-left:15px;" onclick="killChat(\'' + key + '\')"><img src="images/closechat.png" border="0" align="absmiddle" height="20"> <strong>Kill chat</strong></a><small><strong style="color:white; padding-left:30px;">User IP:</strong> <a style="color:white; font-weight:bold" target="_blank" href="http://www.dnswatch.info/dns/ip-location?ip=' + userIPAddress + '&submit=Locate+IP">' + userIPAddress + '</a></small>' + defaultChatWindowHtml;
           				document.body.appendChild(objDiv);
						
						var msgTextElement = getElementsByClassName(objDiv, "msgtxt");
						var sendMsgElement = getElementsByClassName(objDiv, "sendmessage");
						if (msgTextElement && msgTextElement.length > 0 && sendMsgElement && sendMsgElement.length > 0)
						{
							msgTextElement[0].onblur = (function() { this.rel = '';});
							msgTextElement[0].onfocus = (function() { this.rel = 'focused'; }); // stop flashing
							
							
							sendMsgElement[0].onclick = (function(filename, textfield) 
								{ return function() { sendMessage(filename, textfield.value); } })(key, msgTextElement[0]);		
							msgTextElement[0].onkeyup = (function(thisSendMsgElement)	
								{ return function(event) { var e = (typeof window.event == "undefined" ? event : window.event); if (e.keyCode=='13' && e.shiftKey !== true) thisSendMsgElement.click(); } })(sendMsgElement[0]);
						}
						if (!disableSounds)
							sndNewChat.play();  
						
					}			
												
					var chatMessagesElement = getElementsByClassName(objDiv, "chatoutput");

					if (chatMessagesElement && chatMessagesElement.length > 0)
					{
						
						var userTyping = chats[key][0];					
						var chatUserNotificationElement = getElementsByClassName(objDiv, "usertypingnotification");							
						
						if (chatUserNotificationElement && chatUserNotificationElement.length > 0)
						{
							if (userTyping)
							{
								chatUserNotificationElement[0].innerHTML = 'User is typing...';
								chatUserNotificationElement[0].style.visibility = 'visible';
							}
							else
								chatUserNotificationElement[0].style.visibility = 'hidden';
						}
								
												
						// Replace previously stored space replacement, _SP_ with regular space again for display
						var newChatMsgs = decodeURIComponent(chats[key][1]).replace(/_SP_/g, ' ');
						//alert(newChatMsgs + " AND BEFORE: " + chatMessagesElement[0].innerHTML);
						if (!newChatMsgs.endsWith("<!-- a -->\n") && newChatMsgs != chatMessagesElement[0].innerHTML)
							oneOrMoreNewMessages = true;
						chatMessagesElement[0].innerHTML = newChatMsgs;
						chatMessagesElement[0].scrollTop = chatMessagesElement[0].scrollHeight;
						
						if (oneOrMoreNewMessages)
						{
							if (!disableSounds)
								sndNewChatMsg.play();
							
							flashChatWindow(objDiv, '');
						}
					}									
				}
			}
		
			var oneormorechatsclosed = false;
		
			// Remove existing chat windows if no longer current
			for (var a = (existingChatWindowIDs.length - 1); a >= 0; a--)			
			{				
				var foundWindow = false;
			
				for (var i = 0; i < currentChatIDs.length; i++)
				{
					if (currentChatIDs[i] == existingChatWindowIDs[a])
					{
						foundWindow = true;
						break;
					}
				}
				
				if (currentChatIDs.length > 0 && !foundWindow) // no longer current chat, remove the chat window
				{
					document.body.removeChild(document.getElementById(existingChatWindowIDs[a]));
					existingChatWindowIDs.splice(a, 1);
					existingChatWindowIDs = existingChatWindowIDs.join("#%#").split("#%#"); // renumber 
					
					oneormorechatsclosed = true;
				}				
			}
			
			if (oneormorechatsclosed)
				if (!disableSounds)
					sndNewCloseChat.play();
			
		}
	}	  

	function sendMessage(filename, text)
	{   //alert("MESSAGE SENT FROM: " + filename + " text: " + text);
		var httpObject = getHTTPObject();
		if (httpObject != null && text != null && text != '')
		{
			var link = "message.php?filename="+filename+"&msg="+encodeURIComponent(text);
			httpObject.open("GET", link, true);		
			httpObject.onreadystatechange =  function() { updateUserChatWindow(httpObject, filename); };
			httpObject.send(null);
	 	}
	}

	function refreshChatWindows()
	{    
		var httpObject = getHTTPObject();
		var randomnumber=Math.floor(Math.random()*9999);
		
		if (httpObject != null) 
		{
			//link = "message.php?all=1&rnd="+randomnumber;
			var link = 'findnewchats.php?rnd='+randomnumber;
			
			httpObject.open("GET",link, true);
			httpObject.onreadystatechange = function() { updateAllUserChatWindows(httpObject); };
			httpObject.send(null);
		}
	}

	function refreshChatWindowsTimer() 
	{
		refreshChatWindows();   
		setTimeout("refreshChatWindowsTimer()", 3000);
	}

	function closeChat()
	{
		var httpObject = getHTTPObject();
		var randomnumber=Math.floor(Math.random()*9999);
		
		if (httpObject != null)
		{
			var link = "logout.php?rnd="+randomnumber;
			httpObject.open("GET", link, false);			
			httpObject.send(null);
		}
	}		
	window.onbeforeunload = function() { closeChat(); };


</script>

<!-- stop iphone zooming in and then not zooming out -->
<meta aname="viewport" aid="view" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="viewport" id="view"  content="user-scalable=yes, initial-scale=0.8" />
</head>
<body onload="refreshChatWindowsTimer();">

<h1 style="display: inline"><img src="images/easychatlogo.png" align="absmiddle" /> Logged into Easy Chat</h1>

<span id="iosfix" onclick="initiateIOSSound(); this.style.display = 'none'" style="display: none; width:200px; height:200px; font-size:14pt; padding:20px; background-color:#CCC">Initiate sounds on your iDevice</span><!-- for playing sounds -->
<br /><br />
<span id="msgnochatsfound" style="padding-left:10px; color:white">Live chats will appear below as visitors request chat support.</span><br /><br />
<script type="text/javascript">

	if (detectIfMobile())
	{
		// Hack to stop iphone zooming in on text field but still allowing screen to be manually zoomed in / out
		document.documentElement.addEventListener("touchstart", 
			function (event) 
			{
				if((event.target.nodeName == "SELECT") || (event.target.nodeName == "INPUT") || (event.target.nodeName == "TEXTAREA")) 
				{
					document.getElementById("view").setAttribute('content', 'user-scalable=no, initial-scale=0.8');
					setTimeout(function() { document.getElementById("view").setAttribute('content', 'user-scalable=yes, initial-scale=0.8'); }, 1500);
				}
			}, true);
	}
	
</script>
</body>
</html>