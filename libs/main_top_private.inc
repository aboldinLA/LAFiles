<?php
//ini_set('display_errors', 1);
//error_reporting(-1);
$uid = $_SESSION['admin_id'];
$auth = $_SESSION['admin_auth'];

if ($auth != $ADMIN_AUTH) {
    
    if (!strpos($PHP_SELF, "login.php")) {
       // $_SESSION("np");
        $_SESSION['np'] = $PHP_SELF; 
        header("location: " . $lol_url_a ."/private/login.php?t=ad"); 
    }
}
?>
<HTML> 
  <HEAD>
  <LINK REL="stylesheet" HREF="/private/style.css" TYPE="text/css"> 
<title>LandscapeOnLine.com</title>
<script language="JavaScript">
function conf_redir(url,msg)
{
    if(confirm(msg))
    {
        document.location = url;
        return true;
    }
} 
function open_window(url,width,height) 
{
window.open(url,"wind",'toolbar=0,location=0,directories=0,status=0,menubar=0,resizable=1,width='+ width+',height='+ height +',scrollbars=yes');
}

function newWin(url,id,width,height) {
    window.open(url,id,'toolbar=0,location=0,directories=0,status=0,menubar=0,resizable=1,width='+ width+',height='+ height +',scrollbars=yes');
    return false;
}
</script>
  </HEAD> 
    <body  topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
     <TABLE  WIDTH="100%"> 
        <TR> 
          <TD VALIGN="MIDDLE" ALIGN="CENTER" colspan="2"><a href="/">
          <IMG SRC="<?=$lol_home?>/lol-logos/LO_800-brown.jpg" width="250" border=0></a> </TD> 
        </TR> 
    <tr><td width="10%" valign=top BGCOLOR="#524c44" style="border: 2px solid #a87e3f;">
     <TABLE BGCOLOR="#524c44" height="100%">
         <TR> 
          <TD CLASS="menulink" VALIGN="MIDDLE" colspan="2">
          <strong><font color="#FFFFFF">Switchboards</font></strong></TD> 
        </TR>
 
         
                 <TR> 
          <TD width="168" BGCOLOR="#a87e3f" onclick="window.location='/private/stock/index.php'"   
            ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#a87e3f'"
            CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
             HREF="#">LCSI Admin</A></TD> 
        </TR>       
        
        <TR> 
          <TD BGCOLOR="#a87e3f" onclick="window.location='/private/research/index.php'"   
            ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#a87e3f'"
            CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
             HREF="/private/research/index.php">Research</A></TD> 
        </TR>
        
        <TR> 
          <TD BGCOLOR="#a87e3f" onclick="window.location='/private/tracking/index.php'"   
            ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#a87e3f'"
            CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
             HREF="/private/tracking/index.php">Tracking</A></TD> 
        </TR>        
        
        <TR> 
          <TD BGCOLOR="#a87e3f" onclick="window.location='/private/vendor/index.php'"   
            ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#a87e3f'"
            CLASS="menulink"  VALIGN="MIDDLE" colspan="2">
            <A HREF="/private/vendor/index.php">Vendor</A></TD> 
        </TR> 

                <TR> 
          <TD BGCOLOR="#a87e3f" onclick="window.location='/private/product/index.php'"   
            ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#a87e3f'"
            CLASS="menulink"  VALIGN="MIDDLE" colspan="2">
            <A HREF="/private/product/index.php">Products</A></TD> 
        </TR> 
        
         <TR> 
          <TD BGCOLOR="#a87e3f" onclick="window.location='/private/'" 
            ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#a87e3f'"
            CLASS="menulink" VALIGN="MIDDLE" colspan="2"><A
             HREF="/private/" >home</A></TD> 
        </TR> 
         


        <?
            // This section won't allow login box to show up
    
             //$query ="SELECT count(*) AS total  FROM contact  WHERE  status = 0 ";
             //$result = $C->db->query($query);
             //$data = $C->db->fetch_array($result);
             //$to_view=$data['total'];
    
         ?>


      

     </TABLE> 
     </td>
    <td valign=top class=pwin>
    <FONT color="#a87e3f"><strong><?=ucwords($sect)?>:</strong></font>&nbsp;<strong><?=$secthdr?></strong><br>


              