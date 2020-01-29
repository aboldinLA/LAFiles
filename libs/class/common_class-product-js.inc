<?

// used for printing out common user info & form elements
class Common_Class
{
	var $db;
	var $uid;
	var $key;
	var $name;
	var $pass;
	var $topmenu = array(			
			'advertising' => array("/advertising/index.php", "advertising<BR>information"),
			'subscriptions' => array("/subscriptions/index.php", "list your<BR>company"),
			'products' => array("/products/index.php", "product<BR>search"),
			'services'=> array("/services/index.php", "find a<BR>pro!"),
			'research' => array("/research/index.php", "research<BR>&amp; editorial"),
			'industry' => array("/industry/index.php", "industry<BR>associations"),
			'calendar' => array("/calendar/index.php", "calendar<BR>of events"),
			'store' => array("/store/index.php", "classified ads/<BR>&amp; bookstore"),
			'contact' => array("/contact/index.php", "contact<BR>us")
		);
		
	var $sitenav = array(
	 	"subscriptions" => array(
			"begin listing/free subscription" => "/subscriptions/index.php?action=new",
			//"renew listing/subscription" => "/subscriptions/index.php?action=renew",
			"update listing/subscription" => "/subscriptions/index.php?action=change",
			"vendor sign up" => "/vendor/profile.php?action=add",
		),
	 	"products" => array(
			"search national database of products and services" => "/products/",
		),
	 	"advertising" => array(
			"list your company on lol " => "/advertising", 
			"edit vendor profile" => "/vendor/profile.php?action=edit",
			"request advertising info" => "/advertising/advertising_media.php",   
			"email marketing" => "/ebull/ebull.php",
			"place a classified ad" => "/store/ad_class.php",
		),
		"services" => array(
			"find design service consultants" => "/services/index.php?actions=design",
			"find installation/ maintenance professionals" => "/services/index.php?actions=contractors"
		),
	 	"research" => array(
			"search archives " => "/research/index.php",
			"submit editorial" => "/research/submissions/",
			"letters to the editor" => "/research/letter_sub.php"
		),
	 	"industry" => array(
			"find an association" => "/industry/",
			"calendar of events" => "/calendar/",
			"association news" => "/industry/",
			"list your association" => "/industry/associat_list.php",
			"edit your association" => "/industry/associat_list.php?action=edit",
		),
	 	"calendar" => array(
			"search for events by date or association" => "/calendar/",
		),
		"store" =>  array(
			"bookstore" => "/store/books.php",
			"products" => "/store/classifieds.php?action=list&section=1",
			"jobs" => "/store/classifieds.php?action=list&section=2",
			"education" => "/store/classifieds.php?action=list&section=3",
			"other" => "/store/classifieds.php?action=list&section=4",
			"list your own" => "/store/classifieds.php"
		),
	 	"contact" => array(" " => "")
	);


// constructor
function Common_Class($db)
{
	$this->db = $db;
}

//*****************************************************************************************
function mkpass($one, $two) { 

	$query = "UPDATE user_index SET number=number+1";
	$result = $this->db->query($query); 
	$query = "SELECT * FROM user_index";
	$result = $this->db->query($query);
	$row =  $this->db->fetch_array($result);
	$usercount = $row['number'];

	$w = substr($usercount,1,6);

	return $one. $two. $w;
}//end
   
function mkpass_sub($uid) { 

	$query = "SELECT * FROM  subscribe WHERE  id = '$uid'";
	$result = $this->db->query($query);
	$row = $this->db->fetch_array($result);
	$A = strtolower($row['subscribe']);
	if ($A == "lasn")	{
		$one = "A";
	}
	if ($A == "lcm")	{
		$one = "C";
	}
	if ($A == "lol")	{
		$one = "L";
	}	
    if ($A == "lsmp")   {
        $one = "S";
    }
	$two = strtoupper(substr($row['comp_name'],0,2));

	return $this->mkpass($one,$two);
}//end


//*****************************************************************************************
function mkpass_ven($uid) 	{ 

	$query = "SELECT * FROM vendor WHERE  id = '$uid'";
	$result = $this->db->query($query);
	$row = $this->db->fetch_array($result);

	$one = "V";
	$two = strtoupper(substr($row['comp_name'],0,2));

	return $this->mkpass($one,$two);
}
//*******************************************************************************************
function mkpass_ass($assoc_id) 	{ 

	$query = "SELECT * FROM associations WHERE  id = '$assoc_id'";
	$result = $this->db->query($query);
	$row = $this->db->fetch_array($result);


	$one = "A";
	$two = strtoupper(substr($row['comp_name'],0,2));



	return $this->mkpass($one,$two);
}//end
//*******************************************************************************************
function get_name($uid)
{ 	
	$result = $this->db->query("SELECT * FROM  login WHERE  uid = '$uid ' ");
	if($this->db->num_rows($result))
	{
		$row = $this->db->fetch_array($result);
		return $row['name'];
	}
	else
		return 0;
}//end

//****************************************************************************************

//****************************************************************************************
function banner($page,$location) {
    $lb = new lol_banner();
	global $lol_home;

    // PRODUCT SEARCH :
    /*
    if (strlen($_GET['banner_product']) > 1) {
        $banner_product = $_GET['banner_product'];
    } else if (strlen($_SESSION['banner_product']) > 1) {
        $banner_product = $_SESSION['banner_product'];
    }
        
    $pquery = "SELECT * FROM banner_ups WHERE active = 'yes' AND location = '$location' AND product = '" . $banner_product . "' ";
    // DEFAULT :
    $query = "SELECT * FROM banner_ups WHERE active = 'yes' AND page = '$page' AND location = '$location' ";

    if($banner_product != "" && (is_integer(strpos($page, "/product"))))
   	    $result = $this->db->query($pquery);

    if(!$result)
        $result = $this->db->query($query);

    
	$data = $this->db->fetch_array($result);
    */
    if(strpos($page, '/research/article.php') === 0) {
        $page = '/research/article.php';
    }

    // $data = $lb->findBanner($page, $location);

	switch ($location) {
		case 1:	 $pw = 468; $ph = 80; break;
		case 2:	 $pw = 240; break;
		case 3:	 $pw = 240; break;
		case 4:	 $pw = 240; break;
		case 5:	 $pw = 240; break;
		case 6:	 $pw = 240; break;
		case 7:	 $pw = 240; break;
		case 8:	 $pw = 240; break;
		case 9:  $pw = 240; break;
		case 10: $pw = 240; break;
		case 11: $pw = 240; break;
		case 12: $pw = 240; break;
		case 13: $pw = 240; break;
		case 14: $pw = 240; break;
		case 15: $pw = 240; break;
		case 16: $pw = 240; break;
		case 17: $pw = 240; break;
		case 18: $pw = 240; break;
		case 19: $pw = 240; break;
		case 20: $pw = 240; break;
		case 21: $pw = 240; break;
		case 22: $pw = 240; break;
		case 23: $pw = 240; break;
		case 24: $pw = 240; break;
		case 25: $pw = 240; break;
		case 26: $pw = 240; break;
		case 27: $pw = 240; break;
		case 28: $pw = 240; break;
		case 29: $pw = 240; break;
		case 30: $pw = 240; break;
		

	}
		//$picture .= $location  . ".gif";
	if ($page == "/private/banner/placement.php") {
		echo "<div style=\"border: none; margin:1px;font-size:13px;font-weight:bold;";
		echo "vertical-align : middle;text-align : center;cursor:hand;width:".$pw."px; height: ".$ph."px;\"";
		echo "onclick=\"SaveData(".$location.");\">". $location ."</div>";
	} else {
		if (strlen($data['picture']) > 1) {
			$picture = $data['picture']."";  
 			$web =$data['web'];	
			$alt =$data['alttag'];
            $open_mode = $data['open_mode'];
		} else { //default banners
			$alt = "Advertisement";
			switch ($location) {
				case 1:  $picture = "LO-Web-top_banner_social-media.jpg";
					$link="/social/index.php"; break;
				case 2:	 $picture = "C9_blank.gif";
					 break;
				case 3:	 $picture = "C9_blank.gif";
					break;
				case 4:	 $picture = "C9_blank.gif";
					 break;
				case 5:	 $picture = "C9_blank.gif";
					; break;
				case 6:	 $picture = "C9_blank.gif";
					 break;
				case 7:	 $picture = "C9_blank.gif";
					 break;
				case 8:	 $picture = "C9_blank.gif";
					 break;
				case 9: $picture = "C9_blank.gif";
					 break;
				case 10: $picture = "C9_blank.gif";
					 break;
				case 11: $picture = "C9_blank.gif";
					 break;
				case 12: $picture = "C9_blank.gif";
					 break;
				case 13: $picture = "C9_blank.gif";
					 break;
				case 14: $picture = "C9_blank.gif";
					 break;
				case 15: $picture = "C9_blank.gif";
					 break;
				case 16: $picture = "C9_blank.gif";
					 break;
				case 17: $picture = "C9_blank.gif";
					 break;
				case 18: $picture = "C9_blank.gif";
					 break;
				case 19: $picture = "C9_blank.gif";
					 break;
				case 20: $picture = "C9_blank.gif";
					 break;
				case 21: $picture = "C9_blank.gif";
					 break;
				case 22: $picture = "C9_blank.gif";
					 break;
				case 23: $picture = "C9_blank.gif";
					 break;
				case 24: $picture = "C9_blank.gif";
					 break;
				case 25: $picture = "C9_blank.gif";
					 break;
				case 26: $picture = "C9_blank.gif";
					 break;	
				case 27: $picture = "C9_blank.gif";
					 break;					 
				case 28: $picture = "C9_blank.gif";
					 break;					 
				case 29: $picture = "C9_blank.gif";
					 break;					 
				case 30: $picture = "C9_blank.gif";
					 break;					 
					 
					 				 
			}
		}
 	


        if(preg_match('/(\.swf)$/i',$picture)) {
            // flash banner
            $img_src  = '<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"';
            $img_src .= ' codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"';
            $img_src .= ' WIDTH="' . $pw . '" HEIGHT="' . $ph . ' " id="' . $picture .  '" ALIGN="">';
            $img_src .= ' <PARAM NAME=movie VALUE="/banner/' . $picture . '">';
            $img_src .= ' <PARAM NAME=quality VALUE=high>';
            $img_src .= ' <PARAM NAME=bgcolor VALUE=#FFFFFF>';
            $img_src .= ' <PARAM NAME=wmode VALUE=transparent>';
            $img_src .= ' <EMBED wmode=transparent src="/banner/' . $picture . '" quality=high bgcolor=#FFFFFF  ';
            $img_src .= ' WIDTH="' . $pw  . '" HEIGHT="' . $ph . '" NAME="' . $picture . '" ALIGN= ""';
            $img_src .= ' TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">';
            $img_src .= ' </EMBED></OBJECT>';
        } else {
		    $img_src = "<img src=\"/banner/$picture\" width=$pw border=0 style='margin-bottom:10px' ALT='$alt'>";
        }

        if($picture) {
            if($web) {
                if(strpos($web,'http://') === FALSE) {
                    $web = 'http://' . $web;
                }
                switch($open_mode) {
                    case 2:
                        // normal link
                        $href = "<a target=\"_blank\" href='$web'>$img_src</a>";
                        break;
                    case 1:
                    default:
                        // new window -- default
                        $href = "<a href='javascript:banner_launch(\"$web\",780,500)'>$img_src</a>";
                        break;
                }
                print($href);
            } else if($link) {
				echo "<a target=\"_blank\" href=\"$link\">$img_src</a>";
            } else {

            }
        }
		/*if ($picture) {
			if ($web) {
				echo "<a href='javascript:open_window(\"$web\",450,450)'>$img_src</a>";
			} else if ($link) {
				echo "<a href=\"$link\">$img_src</a>";
			} else {
				echo $img_src;
			}
		} */
	}
}
//****************************************************************************************
function errors($error)
	{
      
		echo "<table bgcolor=#CC0000 cellpadding=2 >";
		echo "<tr>";
		echo "<td><font color=#ffffff >".$error."</font></td>";
		echo "</tr>";
		echo "</table>";
	
    }

//********************************************************************************************
function check_credit()
{
        $first = strtotime("today");
		$first1 = strtotime("-5 weeks");

        $query ="SELECT * FROM vendor WHERE notify_credit = 0 AND cc_exp BETWEEN $first1 AND $first ";
		$result = $this->db->query($query);
				   
			 
while($row =  $this->db->fetch_array($result))
        {
			
			    $email = $row['email'];
				$mess1 = "Your Credit Card Expires ".date("M Y",$row['cc_exp']);
				$mess2=  "Click on link below to update";
				$mess3 = $lol_url_s ."/landscape/payment.php?action=update&ven_id=".$row['id'];
				$this->update_mail($row['id'],"vendor",1);
	    }

		
			
			$to = $email;
			$from =  "landscapeOnLine.com";
			$subject = "Update Credit Info";
            $body = $mess1." \n".$mess2." \n" .$mess3." \n\n";
	
			$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);




        $query ="SELECT * FROM subscribe  WHERE notify_credit = 0 AND cc_exp BETWEEN $first1 AND $first ";
		$results = $this->db->query($query);
		
		while($rows =  $this->db->fetch_array($results))
        {
			
			    $email = $rows['email'];
				$mess1 = "Your Credit Card Expires ".date("M Y",$row['cc_exp']);
				$mess2=  "Click on link below to update";
				$mess3 = $lol_url_s ."/landscape/payment_subscriber.php?action=update&media_id=".$rows['id'];
				$this->update_mail($rows['id'],"subscribe",1);
	    }
    
			$to = $email;
			$from =  "landscapeOnLine.com";
			$subject = "Update Credit Info";
            $body = $mess1." \n".$mess2." \n" .$mess3." \n\n";
	
			$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);



}//end function

//********************************************************************************************
function update_mail($id,$table,$change)
{
   
        $query ="UPDATE $table SET notify_credit = $change WHERE id = $id ";
		$result =$this->db->query($query);

		echo $query;

}

//******************************************************************************
function pro_state($city,$state,$zip)
{


 ?>
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>City </B></TD> 
		<TD></TD> 
		<TD>
			<INPUT NAME="city" SIZE="34"  VALUE="<?echo ucwords($city)?>">    
			
					 </td>
		</tr>		<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>State or Province </B></TD> 
		<TD></TD> 
		<TD>
		
			<?$this->select_state($state); ?>
					 </td>
		</tr>	
		<tr>
			<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Postal Code</B></TD> 
			<TD></TD> 
			<TD><INPUT NAME="zip" SIZE="10"	VALUE="<?echo $zip?>"  MAXLENGTH="10" >
			</td>
        </tr>
			<?


}

function pro_state2($state)
{


 ?>
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>State or Province </B></TD> 
		<TD>
		</TD> 
		<TD>
			<?$this->select_state($state); ?>
		</td>
		</tr>	
			<?
}



function select_state($state, $name="", $banner=FALSE) {
    $state_list = array(
        'AB', 'AK', 'AL', 'AR', 'AZ', 'BC', 'CA', 'CO', 'CT', 'DE', 'DC', 'FL',
        'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MB', 'MD',
        'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NB', 'NC', 'ND', 'NE', 'NF', 'NH',
        'NJ', 'NM', 'NV', 'NS', 'NT', 'NU', 'NY', 'NY', 'OH', 'OK', 'ON', 'OR',
        'PA', 'PE', 'QC', 'RI', 'SC', 'SD', 'SK', 'TN', 'TX', 'UT', 'VA', 'VT',
        'WA', 'WI', 'WV', 'WY', 'YK'
    );

    if(strlen($name) > 0) {
        $add = "onChange=\"this.form.$name.checked = true;\"";
    } else {
        $add = "";
    }

    print("<select $add name='state' size='1'>");
    if($banner) {
        $t = ($state == 'default') ? 'selected' : '';
        print("<option value='default' $t >default</option>\r\n");
    } else {
        print("<option value=''>Pick State</option>\r\n");
    }
    foreach($state_list as $ab) {
        $t = ($state == $ab) ? 'selected' : '';
        print("<option value='$ab' $t >$ab</option>\r\n");
    }
    print("</select>");

}

//******************************************************************************
function country($country)	{	
?>
<TR> 
		<TD ALIGN="right" ><B>Country</B>:</TD>
		<TD ALIGN="right" ></TD>
		<TD><SELECT NAME="country" SIZE="1" TABINDEX="8"> 
					<?if (strlen($country) == 0)
					{
						echo "<OPTION VALUE=USA>United States</OPTION>";
					}else{?>
					<OPTION VALUE="<?echo $country?>"><?echo $country?></OPTION>     
					<?}?>
					<OPTION VALUE="USA">United States</OPTION> 
					<OPTION VALUE="CN">Canada</OPTION> 
					</SELECT>
		</TD> 
	</TR> 
<?
	}//end function
	
	
function sitenav_jsarray() {
	$js_cat = "var topnav_keys = new Array();\n";
	$js_cat_i=0;

	foreach ($this->sitenav as $key => $value) { 
		$js_subcat_i=0;
		$js_cat .= "topnav_keys[". $js_cat_i . "] ='" . $key . "';\n";
		$js_cat_i++;
	}
	return $js_cat;
	}	

function topmenunav() {

	return $this->topmenu;
	
}
function sitenav() {
	
	return $this->sitenav;

}
function siteindex() {
	$query = "SELECT * FROM siteindex";
	$result = $this->db->query($query);
	$i=0;
	while($row = $this->db->fetch_array($result)) {
		$index[$i]=$row['url'];
		$i++;
	}
	return $index;
}
function create_siteindex() {
	global $file_path;
	$query = "DELETE FROM siteindex";
	$result = $this->db->query($query);
	$this->create_siteindex_filelist($file_path . "web");
}
	
function create_siteindex_filelist($currentdir, $startdir=NULL, $files=array()) {
	global $file_path;
	
	$currentdir = str_replace('\\','/', $currentdir);
	chdir ($currentdir);
	
	// remember where we started from
	if (!$startdir) {
		$startdir = $currentdir;
	}
	$d = opendir (".");

	while ($file = readdir ($d)) {
		if ($file != ".." && $file != ".") {
			if (is_dir ($file)) {
				// If $file is a directory take a look inside
				//$dirs[] = getcwd() . '/' . $file;
				$files = $this->create_siteindex_filelist(getcwd().'/'.$file, getcwd(), $files);
			} else {
				//$repl = "/home/mamaway/lol/web";
				$repl = strtolower($file_path . "web");
				$dir = strtolower(str_replace('\\', '/', getcwd()));
				// If $ file is not a directory then add it to our output array
				if ($dir == $repl) {
					$dir = "";
				} else {
					$dir = str_replace($repl . "/","",$dir);
				}
				if ($dir) $dir = $dir . '/'; 
				
				if (strpos($file, '.php') && (strpos($dir, 'private') === false)) {
					$query = "INSERT INTO siteindex (url) VALUES ('$dir$file')";
					$result = $this->db->query($query);
				}//$files[] = $file;
		}
	}
	}
	
	closedir ($d);
	chdir ($startdir);
	/*
	foreach ($this->sitenav as $key => $value) {
		foreach ((array)$value as $subkey => $subvalue) { 
				$query = "DELETE FROM siteindex WHERE url = '$subvalue'";
				$result = $this->db->query($query);
				$query = "INSERT INTO siteindex (url) VALUES ('$subvalue')";
				$result = $this->db->query($query);
		}
	}
	foreach ($this->topmenu as $nkey => $val) { 
	
		$query = "DELETE FROM siteindex WHERE url = '$val[0]'";
		$result = $this->db->query($query);
		$query = "INSERT INTO siteindex (url) VALUES ('$val[0]')";
		$result = $this->db->query($query);
		
	}*/
	return $this->db->error();
}

/*
function send_mail($to,$subject,$body,$from="webmaster@landscapeonline.com") {

	@$CDONTS = new COM("CDONTS.NewMail"); 
	
	@$CDONTS->From = $from; 
	@$CDONTS->To = $to; 
	@$CDONTS->Subject = $subject;
	@$CDONTS->BodyFormat = 1; 
	@$CDONTS->MailFormat = 0; 
	@$CDONTS->Body = $body; 
	@$CDONTS->Send(); 
	@$CDONTS->Close(); 

}
*/

function send_mail($to,$subject,$body,$from="webmaster@landscapeonline.com", $isHTML=FALSE) {
    $p = array();
    $p['To'] = $to;
    $p['Subject'] = $subject;
    $p['From'] = $from;

    if($isHTML) {
        $p['bodyHTML'] = $body;
    } else {
        $p['bodyTXT'] = $body;
    }

    $t = new template_class();
    $t->sendMail($p);
    return(TRUE);
}

}
?>
