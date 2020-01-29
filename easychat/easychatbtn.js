////////////////////////////////////////////////////////////
// EasyChat v1.1
//
// THIS IS NOT FREE SOFTWARE. The author has worked hard 
// to produce it. Please support the author by purchasing.
////////////////////////////////////////////////////////////


	function getHTTPObject()
	{
		if (window.ActiveXObject) 
			return new ActiveXObject("Microsoft.XMLHTTP");
		else if (window.XMLHttpRequest) 
			return new XMLHttpRequest();
		else 
		{
			// Browser not compatible with live chat (JS disabled or truly ancient browser)
			return null;
		}
	}  
	
	/*function checkLiveChatAvailability(script_location)
	{
		var httpObject = getHTTPObject();
		if (httpObject != null)
		{
			var randomnumber=Math.floor(Math.random()*9999)
			var link = script_location + "/ca" + "nch" + "at.ph" + "p?rnd=" + randomnumber;
			httpObject.open("POST", link, mcshowbutton);		
			httpObject.onreadystatechange =  function() { changeLiveChatButton(script_location, httpObject); };
			httpObject.send(null);
	 	}
	}	*/
	
	function checkLiveChatAvailability(script_location)
	{	
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.async = true;
		// One or the other fires, depending on browser
		script.onload = function() { changeLiveChatButton(script_location, ec_canchat); }
		script.onreadystatechange = function() { if (this.readyState == 'loaded' || this.readyState == 'complete') changeLiveChatButton(script_location, ec_canchat); };
		var randomnumber=Math.floor(Math.random()*9999)
		script.src = script_location + "/ca" + "nch" + "at.ph" + "p?rnd=" + randomnumber;
		document.getElementsByTagName('head')[0].appendChild(script);
	}	
	
	
	function changeLiveChatButton(script_location, canchat) 
	{		
		var chatbtn = document.getElementById('easychatbutton');
		
		if (canchat)
		{
			mccanchat = true;
		
			if (mcshowbutton)
			{
				if (chatbtn == null)
					alert("Missing chat button ID 'easychatbutton'");
				else
					chatbtn.innerHTML = "<img sr" + "c=\"" + script_location + "/images/livechat.png\" align=\"absmiddle\" style=\"cursor:pointer\" onclick=\"window.open('" + script_location + "/','','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,width=500,height=400');\" >"
			}
		}
		else
		{ } /* show unavailable image here if desired or place in your html <span> tag, otherwise only hides chat button by default */
	}
	
	var mccanchat = false;
	var mcshowbutton = true;
	
	// Get our relative path - required
	var scripts = document.getElementsByTagName("script");
	var script_location = scripts[scripts.length-1].src;
	// If we just want to know if we can chat or not - no display of button
	if (script_location.indexOf('?mccanchat') != -1)
		mcshowbutton = false;
	script_location = script_location.substring(0, script_location.lastIndexOf("/"));
	
	checkLiveChatAvailability(script_location);