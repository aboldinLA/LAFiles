<html>
<body>
<style>
.displayDiv { display:inline-block; vertical-align:top; overflow:hidden; border:solid grey 1px; }
 .displayDiv select { padding:10px; margin:-5px -20px -5px -5px; }
</style>
<script type="text/javascript">
function ajaxFunction(str)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
function stateChanged() 
    {
    if(httpxml.readyState==4)
      {
document.getElementById("displayDiv").innerHTML=httpxml.responseText;
document.getElementById("msg").style.display='none';

      }
    }
	var url="ajax-search-demock.php";
url=url+"?txt="+str;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
document.getElementById("msg").innerHTML="Please Wait ...";
document.getElementById("msg").style.display='inline';

  }
</script>
</head>
<body>
<div id=msg style="position:absolute; width:400px; height:25px; 
z-index:1; left: 400px; top: 0px; 
border: 1px none #000000"></div>

<form name="myForm">
<input type="text"
onkeyup="ajaxFunction(this.value);" name="username" /> Type letter by letter slowly to read the records displayed.  ( Example type b then i )
 
<div id="displayDiv"></div>

</form>


<div id=mylinks style="position:absolute;  z-index:1; left: 400px; top: 400px;" >Return to <a href=ajax-search.php>Source and tutorial on Keyword search script</a> | <a href=ajax.php>Ajax</a> </div>
</body>
</html>