<?
$uid = "EW25s";
$auth = "EW25s";


?>
<HTML> 
  <HEAD>
  <? echo "dog" . $uid ?>
  <? echo "cat" . $auth ?>
  
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
		  <IMG SRC="<?=$lol_home?>/imgz/main_lol_logo.gif" border=0></a> </TD> 
		</TR> 
	<tr><td width="10%" valign=top BGCOLOR="#67645f" style="border: 2px solid #70a183;">
	 <TABLE BGCOLOR="#67645f" height="100%">
	 	 <TR> 
		  <TD CLASS="menulink" VALIGN="MIDDLE" colspan="2">
		  <strong><font color="#FFFFFF">Switchboards</font></strong></TD> 
		</TR>

		 <TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/industry/index.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/industry/index.php">Association</A></TD> 
		</TR>
		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/banner/index.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2" ><A
			 HREF="/private/banner/index.php">Banner</A></TD> 
		</TR> 

		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/research/index.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/research/index.php">Research</A></TD> 
		</TR>
		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/subscriber/index.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2">
			<A HREF="/private/subscriber/index.php">Subscriber</A></TD> 
		</TR>

		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/vendor/index.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2">
			<A HREF="/private/vendor/index.php">Vendor</A></TD> 
		</TR> 


		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/zlist/zlist.php'"  
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink" VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/zlist/zlist.php">Z-list</A></TD> 
		</TR>
		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/ylist/ylist.php'"  
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink" VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/ylist/ylist.php" >Y-list</A></TD> 
		</TR>
		
		<!-- deactivated -->
	 <TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/proof/proof_switchboard.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink" VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/proof/proof_switchboard.php">Ad Proof</A></TD> 
		</TR>

		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/bull/index.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/bull/index.php">Bulletin Transmission Info</A></TD> 
		</TR> 

		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/classifieds/classifieds.php'"   
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/classifieds/classifieds.php">Classifieds</A></TD> 
		</TR> 

		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/media/media.php'"  
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/media/media.php">Media</A></TD> 
		</TR>

		<?
         $query ="SELECT count(*) AS total  FROM contact  WHERE  status = 0 ";
		 $result = $C->db->query($query);
		 $data = $C->db->fetch_array($result);
	     $to_view=$data['total'];
?>

		<TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/contact/contact.php'"  
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink" VALIGN="MIDDLE"><A
			 HREF="/private/contact/contact.php">mail</A>
			 <? if ($to_view > 0 )  
				 echo "<br>*  $to_view new Messages" 
			?>
			 </td>
		</TR>

		
		
		 <TR> 
		  <TD BGCOLOR="#70a183" onclick="window.location='/private/'" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink" VALIGN="MIDDLE" colspan="2"><A
			 HREF="/private/" >home</A></TD> 
		</TR>

	 </TABLE> 
	 </td>
	<td valign=top class=pwin>
	<FONT color="#70a183"><strong><?=ucwords($sect)?>:</strong></font>&nbsp;<strong><?=$secthdr?></strong><br>



               
	 

