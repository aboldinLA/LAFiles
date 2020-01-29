// used to launch banner ads
function banner_launch(url,width,height) {
    window.open(url,"wind",'toolbar=1,location=0,directories=0,status=0,menubar=0,resizable=1,width=' + width + ',height=' + height + ',scrollbars=yes');
}

// used to launch 'other' windows
function open_window(url,width,height) 
{
    window.open(url,"wind",'toolbar=0,location=0,directories=0,status=0,menubar=0,resizable=1,width=' + width + ',height='+ height +',scrollbars=yes');
}

function newWin(url,id,width,height) {
    window.open(url,id,'toolbar=0,location=0,directories=0,status=0,menubar=0,resizable=1,width=' + width + ',height='+ height +',scrollbars=yes');
    return false;
}

// used to confirm before loading a page
function conf_redir(url,msg)
{
    if(confirm(msg))
    {
        document.location = url;
        return true;
    }
} 

// take no credit from here on down .....

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
    
    // document.onmousemove = grabEl;
    
    /// End the dhtml mouse over functions
