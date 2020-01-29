<!-- <?=__FILE__ ?> Begin -->

<? 

	$lol_home = ""; 

?>

<HTML> 

  <HEAD>

  <LINK REL="stylesheet" HREF="<?= $lol_home ?>/style.css" TYPE="text/css"> 

  <script>

<!---

// start rollover code

function newImage(arg)

{

	if (document.images)

	{

		rslt = new Image();

		rslt.src = arg;

		return rslt;

	}

}

function expand(folder, spanlink) {

	//parent.alert(folder);

	var lbx = document.getElementById('linkbox');

	var spinner = new String(spanlink.innerHTML);

	if (spinner.indexOf("more") != -1) {

		spanlink.innerHTML="Show fewer choices...";

	} else {

		spanlink.innerHTML="See more choices...";

	}

	count=0;

    with (document.getElementById(folder).style)

    {

		//prevents expand/collapse if a link is clicked

		if (document.all) { if (window.event.srcElement.tagName == "A") { return false; } }

		    

		if (display == 'none') {

			display = 'block';

			if (count) { window.scrollTo(0, document.body.scrollTop  + (count * 12)); }

		} else {

			display =  'none';

			if (count) { window.scrollTo(0, document.body.scrollTop  + (count * -12)); }

		 }

	}

    return true;

}



function banner_launch(url,width,height) {

    window.open(url,"wind",'toolbar=1,location=0,directories=0,status=0,menubar=0,resizable=1,width=' + width + ',height=' + height + ',scrollbars=yes');

}



function open_window(url,width,height) 

{

window.open(url,"wind",'toolbar=0,location=0,directories=0,status=0,menubar=0,resizable=1,width='+ width+',height='+ height +',scrollbars=yes');

}



// The following code is used to support the small popups that

	// give the full description of an event when the user move the

	// mouse over it.

	

	NS4 = (document.layers) ? 1 : 0;

	IE4 = (document.all) ? 1 : 0;

	

	

	function show(name) {

		//x = currentX;

		y = currentY + 20;

		if(NS4) {

			//Position popup correctly

			var docWidth=document.width;   //width of current frame

			var docHeight=document.height;  //height of current frame

			var layerWidth=document.layers[name].clip.width;  //width of popup layer

			var layerHeight=document.layers[name].clip.height; //height of popup layer

			if((currentX+layerWidth)>=docWidth) {

				x=(currentX-layerWidth);

			} else {

				x=currentX;

			}

	

		/********************

		  if((currentY+layerHeight)>=docHeight)

		  {

			y=(currentY-layerHeight-20);

		  }

		  else {

			y=currentY+20;

		  }

		*********************/

			document.layers[name].xpos = parseInt ( x );

			document.layers[name].left = parseInt ( x );

			document.layers[name].ypos = parseInt ( y );

			document.layers[name].top = parseInt ( y );

			document.layers[name].visibility = "show";

		} else {

			var docHeight=document.body.offsetHeight;

			var docWidth=document.body.offsetWidth;

			var layerWidth=document.all[name].offsetWidth;

			var layerHeight=document.all[name].offsetHeight;

			if((currentX+layerWidth)>docWidth) {

			  x=(currentX-layerWidth);

			} else {

			  x=currentX;

			}

			if((currentY+layerHeight)>=docHeight) {

			   y=(currentY-layerHeight-40);

			} else {

			  y=currentY+40;

			}

	

			document.all[name].style.left = parseInt ( x );

			document.all[name].style.top = parseInt ( y );

			document.all[name].style.visibility = "visible";

		}

	

	}// end function definition

	

	

	function hide(name) {

		if(NS4) {

			document.layers[name].visibility = "hide";

		} else {

			document.all[name].style.visibility = "hidden";

		}

	}

	

	currentX = currentY = 0;

	

	function grabEl(e) {

		if( NS4 ) {

			currentX = e.pageX;

			currentY = e.pageY;

		} else {

			currentX = e.x + document.body.scrollLeft;

			currentY = e.y + document.body.scrollTop  

			//currentX = event.x;

			//currentY = event.y;

		}

	}

	

	if(NS4) {

		document.captureEvents(Event.MOUSEDOWN | Event.MOUSEMOVE);

	}

	

	document.onmousemove = grabEl;

	

	/// End the dhtml mouse over functions





function conf_redir(url,msg)

{

	if(confirm(msg))

	{

		document.location = url;

		return true;

	}

} 

//-->

</script>

<script language="JavaScript" type="text/JavaScript">

<!--

 	<?=$C->sitenav_jsarray();?>

	function findleft(obj) {

		var leftsum = 0;

		for(i=0;i<topnav_keys.length;i++) {

			if (obj.id == topnav_keys[i]) {

				return leftsum;

			} else {

				if (navigator) {



					leftsum = leftsum + document.getElementById(topnav_keys[i]).offsetWidth;

				} else {

				leftsum = leftsum + document.getElementById(topnav_keys[i]).clientWidth; }

			}

			//alert(leftsum);

		}



		return leftsum;

	}

	function lol_menuover(obj) { 

		if (document.cur_obj) { 

			if (document.cur_obj==document.start_obj) {

				//document.cur_obj.style.background = '#70A183'; //green

			} else {

				document.cur_obj.style.background = '#67645F'; //gray 

			}

		}

		if (!obj.id) { //find by string

			obj = document.getElementById(obj);

			if (!obj) {

				return;

			}

			document.start_obj=obj;

			//obj.style.background = '#70A183'; //green

		} else {

			if (!document.start_obj) { obj.style.background = '#383838'; } else {

			if (obj.id != document.start_obj.id) {

				obj.style.background = '#383838'; //dark-gray

			} }

		

		}

		document.cur_obj=obj;

	 	

		var sub_left = findleft(obj);

		for(i=0;i<topnav_keys.length;i++) {

			if (obj.id == topnav_keys[i])  {

				if (document.cur_nav) {  document.cur_nav.style.display='none'; }

				nav=document.getElementById(obj.id + '_div');

				navtab=document.getElementById(obj.id + '_tab');

				navspacer=document.getElementById('navspacertd');

				nav.style.display='block';

				if (navigator) {

					nw=(sub_left + (obj.offsetWidth/2)) - (navtab.offsetWidth/2);

				} else {

					nw=(sub_left + (obj.clientWidth/2)) - (navtab.clientWidth/2);

				}// centers subnav div

				if (nw > 0) { navspacer.style.width=nw; }

				else { navspacer.style.width=3; }

				//alert(sub_left);

				document.cur_nav=nav;

			}

		}

	}

	function restoreSubnav() {

		if (document.start_obj) { lol_menuover(document.start_obj) } 

		else if (document.cur_nav) {  

			document.cur_nav.style.display='none'; };

	}

	

//-->

</script>



<!--bgcolor="#FFF6D2"-->



<title>LandscapeOnLine.com</title>

  </HEAD> 

 <body  text="#000000" link="#000066" vlink="#000066" alink="#000066" leftmargin="0" 

 topmargin="3" marginwidth="0" onload="lol_menuover('<?=$sect?>')"> 

 

 <DIV ID="overDiv" STYLE="position:absolute; visibility:hide; z-index:100; filter:alpha(opacity=85)"></DIV>

<script src="/overlib.js"></script>

	 



<!-- <?=__FILE__ ?> End -->

