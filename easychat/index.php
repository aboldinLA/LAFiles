<?php
////////////////////////////////////////////////////////////
// EasyChat v1.1
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////


session_start();

include('config.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<title><?php echo $captionText; ?></title>
<link href="images/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">body { background: none; } </style>
<script language="javascript" type="text/javascript">

	var messageshavebeentransmitted = false;
	var chatclosed = false;
	
	function getElementsByClassName(node, classname) 
	{
		var a = [];
		var re = new RegExp('(^| )'+classname+'( |$)');
		var els = node.getElementsByTagName("*");
		
		for(var i=0,j=els.length; i<j; i++)
			if(re.test(els[i].className))a.push(els[i]);
		return a;
	}
	

	function getHTTPObject()
	{
		if (window.ActiveXObject) 
			return new ActiveXObject("Microsoft.XMLHTTP");
		else if (window.XMLHttpRequest) 
			return new XMLHttpRequest();
		else 
		{
			alert("Your browser is too old or has javascript disabled. Please use another web browser.");
			return null;
		}
	} 
	

	function sendMessage(text)
	{
		var httpObject = getHTTPObject();
		if (httpObject != null && text != null && text != '')
		{
			var link = "message.php?msg="+encodeURIComponent(text);
			httpObject.open("GET", link, true);		
			httpObject.onreadystatechange =  function() { updateUserChatWindow(httpObject, text); };
			httpObject.send(null);
	 	}
	} 


	function disableElementAndChildren(obj)
	{
		obj.disabled = true;
		obj.readOnly = true;
		
		if (obj.firstChild != null) 
			for (var i = 0; i < obj.childNodes.length; i++)
				disableElementAndChildren(obj.childNodes[i]);
	}


	function updateUserChatWindow(httpObject, text)
	{		
		if (httpObject.readyState == 4)
		{
			var response = httpObject.responseText;	
						
			response = response.replace(/_SP_/g, ' ');
			
			var objDiv = document.getElementById("enduserchatwindow"); <?php /* Specific container DIV for end users */ ?>		
			
			if (objDiv != null)
			{
				var chatMessagesElement = getElementsByClassName(objDiv, "chatoutput");
				if (chatMessagesElement && chatMessagesElement.length > 0)
				{
					if (messageshavebeentransmitted && response === '<CHATEXPIRED>') <?php // || response.indexOf('<NEWCHAT>') === 0) ?>
					{
						closeChat();
						
						chatMessagesElement[0].innerHTML += '<br><b>The chat session has ended.</b>';
						chatMessagesElement[0].scrollTop = chatMessagesElement[0].scrollHeight;
						disableElementAndChildren(document.getElementById("enduserchatwindow"));
						
						return;
					}
					else if (response != '' && response != '<CHATEXPIRED>') 
						<?php /* Messages have not been transmitted yet, so don't take no message log file as sign to sign out */ ?>
						messageshavebeentransmitted = true;
					else
						return; // dont update chat window
					
					if (text == '') // refreshing entire chat
						chatMessagesElement[0].innerHTML = response;
					else // updating with one message by user
						chatMessagesElement[0].innerHTML += response;
					chatMessagesElement[0].scrollTop = chatMessagesElement[0].scrollHeight;
				}
					
				var msgTextElement = getElementsByClassName(objDiv, "msgtxt");						
				if (msgTextElement && msgTextElement.length > 0 && text != '')
				{
					msgTextElement[0].value = "";
					msgTextElement[0].focus();
				}				
			}
		}
	}


	function refreshEndUserChatWindow()
	{    
		var httpObject = getHTTPObject();
		var randomnumber=Math.floor(Math.random()*9999);
		if (httpObject != null)
		{
			var isTyping = ((new Date().getTime() - lastKeyStroke) < 2000);
			
			var link = "message.php?refresh&msg=1" + (isTyping ? "&istyping" : "") + "&rnd="+randomnumber;
			httpObject.open("GET", link , true);
			httpObject.onreadystatechange = function() { updateUserChatWindow(httpObject, ''); };
			httpObject.send(null);
		}
	}


	function refreshEndUserChatWindowTimer() 
	{
		if (chatclosed)
			return;
			
		refreshEndUserChatWindow();   
		setTimeout("refreshEndUserChatWindowTimer()", 2000);
	}
	
	
	function closeChat()
	{	
		chatclosed = true;
	
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
</head>
<body onLoad="refreshEndUserChatWindowTimer();">

<?php 

// Process user identification form post
if (isset($_POST['username']))
{
	$username = isset($_POST['username']) ? $_POST['username'] : "Unnamed user";	
	$username = cleanFileAndUserName($username);
	
	$_SESSION['username'] = $username;
}

if (!empty($_SESSION['username'])) // We have "logged in" display chat window
{ 
	echo '<span id="enduserchatwindow">' . $defaultChatWindowHTML . '</span>';
	
	// Add onclick etc to this specific chat window now
	?>
	<script language="javascript" type="text/javascript">
	
	var lastKeyStroke = null;//Math.floor(new Date().getTime() / 1000)
	
	var objDiv = document.getElementById("enduserchatwindow");
	
	if (objDiv != null)
	{
		
		var msgTextElement = getElementsByClassName(objDiv, "msgtxt");
		var sendMsgElement = getElementsByClassName(objDiv, "sendmessage");
		if (msgTextElement && msgTextElement.length > 0 && sendMsgElement && sendMsgElement.length > 0)
		{
			
			msgTextElement[0].value = 'Please enter a message...';
			msgTextElement[0].onfocus= function() { if (this.value == 'Please enter a message...') this.value = ''; };
			
			
			sendMsgElement[0].onclick = (function(textfield) 
				{ return function() { if (!chatclosed) sendMessage(textfield.value); } })(msgTextElement[0]);
							msgTextElement[0].onkeyup = (function(thisSendMsgElement)	
								{ return function(event) { lastKeyStroke = new Date().getTime(); var e = (typeof window.event == "undefined" ? event : window.event); if (e.keyCode=='13' && e.shiftKey !== true) thisSendMsgElement.click(); } })(sendMsgElement[0]);
							
			var chatMessagesElement = getElementsByClassName(objDiv, "chatoutput");
			//if (chatMessagesElement && chatMessagesElement.length > 0)
			//	chatMessagesElement[0].innerHTML = ' str_replace("'", $Hi, how can we help?';					
		}
	}    
	</script>  

<?php
	
}
else
{
	// Show basic username selection form and exit
    showUserIdentificationForm(); 

} 


function showUserIdentificationForm()
{
	
?>

    <form id="loginform" style="background:url(images/bg.jpg); background-repeat: no-repeat; background-color: #2893E7; color:white" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="if (document.getElementById('username').value == '' || document.getElementById('username').value == 'Please enter your name') { alert('Please enter your name.'); return false; } else return true;">
   
    <?php
	
	global $captionText;
	echo "<h4 style='display: inline; border-bottom:1px solid'>$captionText</h4>";

	?><br /><br>
   <div class="icon" style="display:inline">&nbsp;</div>
    <h4>Please enter your name to begin!</h4><br />
    <table align="center" width="100%" >
      
      <tr><td>Your Name: </td>
      <td><input type="text" style="height:20px" id="username" name="username" value="Please enter your name" onfocus="this.value=''" size="30" /></td></tr>
      <tr><td align="center" colspan="2"><br />
         <input type="image" src="images/startchatbutton.png"  name="usernamesubmit"/>
      </td></tr>
    </table>
    </form>
    
   
<?php
}
?>
</body>  
</html>