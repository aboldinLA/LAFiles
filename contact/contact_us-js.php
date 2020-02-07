<?
$pub = $_GET['pub'];


if($pub=='lasn'){
    //include ('lol_common.inc');
}
elseif($pub=='lcdbm'){
    include ('lol_common.inc');
}
elseif($pub=='lo'){
    include ('lol_common.inc');
}
elseif($pub=='tlelb'){
    include ('lol_common-show.inc');
    include ('lol_header2-show-tle-2016.inc');
	echo '<div class="tle-container">'; 
	echo '<div class="clear"></div>';
	echo '<div align="center">';
    
	echo '<div align="left" class="left1">';
    include ('tle-show-left-panel-2016.inc');
}
elseif($pub=='eb'){
    include ('lol_common.inc');
}
else{
    include ('lol_common.inc');
}


switch($pub) {
    case 'lasn':
        $acro = "LASN";
        $pubName = "Landscape Architect and Specifier News";
        $logo = '../lol-logos/LASN-Media-Group-logo.jpg';
        $twitter = 'https://landscapearchitect.com/social/index.php#LASN';
        $fbook = 'https://landscapearchitect.com/social/index.php#LASN';
        $link = 'https://landscapearchitect.com/social/index.php#LASN';
        break;
    case 'lcdbm':
        $acro = "LCDBM";
        $pubName = "Landscape Contractor Design&#8226;Build&#8226;Maintain&#8226;Supply";
        $logo = '../lol-logos/LCDBM-500.png';
        $twitter = 'https://landscapearchitect.com/social/index.php#LCDBM';
        $fbook = 'https://landscapearchitect.com/social/index.php#LCDBM';
        $link = 'https://landscapearchitect.com/social/index.php#LCDBM';
        break;
    case 'lo':
        $acro = "LO";
        $pubName = "Landscape Online";
        $logo = '/lol-logos/LO-LOW-logo-325.jpg';
        $twitter = 'https://landscapearchitect.com/social/index.php#LO';
        $fbook = 'https://landscapearchitect.com/social/index.php#LO';
        $link = 'https://landscapearchitect.com/social/index.php#LO';	
        break;
    case 'lax':
        $acro = "LA Expo";
        $pubName = "The Landscape Expo - Long Beach";
        $logo = '/lol-logos/LO-LOW-logo-325.jpg';
        $twitter = 'https://landscapearchitect.com/social/index.php#LAX';
        $fbook = 'https://landscapearchitect.com/social/index.php#LAX';
        $link = 'https://landscapearchitect.com/social/index.php#LAX';
        break;			
    case 'tlelb':
        $acro = "TLE-LB";
        $pubName = "The Landscape Expo - Long Beach";
        $logo = '/lol-logos/LO-LOW-logo-325.jpg';
        $twitter = 'https://landscapearchitect.com/social/index.php#TLE-LB';
        $fbook = 'https://landscapearchitect.com/social/index.php#TLE-LB';
        $link = 'https://landscapearchitect.com/social/index.php#TLE-LB';
        break;		
    case 'tlesm':
        $acro = "TLE-SM";
        $pubName = "The Landscape Expo - San Mateo";
        $logo = '/lol-logos/LO-LOW-logo-325.jpg';
        $twitter = 'https://landscapearchitect.com/social/index.php#TLE-SM';
        $fbook = 'https://landscapearchitect.com/social/index.php#TLE-SM';
        $link = 'https://landscapearchitect.com/social/index.php#TLE-SM';		
        break;			
    case 'eb':
        $acro = "LO-EB";
        $pubName = "Landscape Online - E-Blast";
        $logo = '/lol-logos/eblast-logo.jpg';
        $twitter = 'https://landscapearchitect.com/social/index.php#LO';
        $fbook = 'https://landscapearchitect.com/social/index.php#LO';
        $link = 'https://landscapearchitect.com/social/index.php#LO';		
        break;					
}

?>


<? 

if($pub=='lasn'){
    include '../../includes/mag-la-js3.inc';
}
elseif($pub=='lcdbm'){
    include ('mag-lc-js2.inc');
}
elseif($pub=='lo'){
    include ('mag-lo-js2.inc');
}
elseif($pub=='lax'){
    include ('show-lax.inc');
}
elseif($pub=='tlelb'){
    include ('show-tlelb.inc');
}
elseif($pub=='tlesm'){
    include ('show-tlesm.inc');
}
elseif($pub=='eb'){
    include ('mag-eb-js2.inc');
}
else{
    include ('mag-lo-js.inc');
}


?>

