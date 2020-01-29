<HEAD>



<SCRIPT LANGUAGE="JavaScript">

<!-- Original:  Shawn Seley -->



<!-- This script and many more are available free online at -->

<!-- The JavaScript Source!! http://javascript.internet.com -->



<!-- Begin

function CountWords (this_field, show_word_count, show_char_count) {

if (show_word_count == null) {

show_word_count = true;

}

if (show_char_count == null) {

show_char_count = false;

}

var char_count = this_field.value.length;

var fullStr = this_field.value + " ";

var initial_whitespace_rExp = /^[^A-Za-z0-9]+/gi;

var left_trimmedStr = fullStr.replace(initial_whitespace_rExp, "");

var non_alphanumerics_rExp = rExp = /[^A-Za-z0-9]+/gi;

var cleanedStr = left_trimmedStr.replace(non_alphanumerics_rExp, " ");

var splitString = cleanedStr.split(" ");

var word_count = splitString.length -1;

if (fullStr.length <2) {

word_count = 0;

}

if (word_count == 1) {

wordOrWords = " word";

}

else {

wordOrWords = " words";

}

if (char_count == 1) {

charOrChars = " character";

} else {

charOrChars = " characters";

}

if (show_word_count & show_char_count) {

alert ("Word Count:\n" + "    " + word_count + wordOrWords + "\n" + "    " + char_count + charOrChars);

}

else {

if (show_word_count) {

alert ("Word Count:  " + word_count + wordOrWords);

}

else {

if (show_char_count) {

alert ("Character Count:  " + char_count + charOrChars);

      }

   }

}

return word_count;

}

//  End -->

</script>

<script language="JavaScript" type="text/JavaScript">

<!--

function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}



function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}

//-->

</script>



<title>LandscapeOnLine.com</title>

  </HEAD> 

  <body background="../imgz/txt.jpg" text="#000000" link="#000066" vlink="#000066" alink="#000066" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

 













