<?
if($pub=='lasn'){
    include ('lol_common.inc');
    include ('lol_header2.inc');
}
elseif($pub=='lcdbm'){
    include ('lol_common.inc');
    include ('lol_header2.inc');
}
elseif($pub=='lo'){
    include ('lol_common.inc');
    include ('lol_header2.inc');
}
elseif($pub=='lax'){
    include ('lol_common-show.inc');
    include ('lol_header2-show-lax-2015.inc');
	echo '<div class="lax-container">'; 
	echo '<div class="clear"></div>';
	echo '<div align="center">';
    
	echo '<div align="left" class="left1">';
    include ('lax-show-left-panel-2015.inc');
}
elseif($pub=='tlelb'){
    include ('lol_common-show.inc');
    include ('lol_header2-show-tle.inc');
	echo '<div class="tle-container">'; 
	echo '<div class="clear"></div>';
	echo '<div align="center">';
    
	echo '<div align="left" class="left1">';
    include ('tle-show-left-panel.inc');
}
elseif($pub=='tlesm'){
    include ('lol_common-show.inc');
    include ('lol_header2-show-tle-sm.inc');
	echo '<div class="tle-container">'; 
	echo '<div class="clear"></div>';
	echo '<div align="center">';
    
	echo '<div align="left" class="left1">';
    include ('tle-sm-show-left-panel.inc');
}
elseif($pub=='eb'){
    include ('lol_common.inc');
    include ('lol_header2.inc');
}
else{
    include ('lol_common.inc');
    include ('lol_header2.inc');
}


switch($pub) {
    case 'lasn':
        $acro = "LASN";
        $pubName = "Landscape Architect and Specifier News";
        $logo = '/lol-logos/LASN_BLUE_325.png';
        $twitter = 'https://landscapearchitect.com/social/index.php#LASN';
        $fbook = 'https://landscapearchitect.com/social/index.php#LASN';
        $link = 'https://landscapearchitect.com/social/index.php#LASN';
        break;
    case 'lcdbm':
        $acro = "LCDBM";
        $pubName = "Landscape Contractor Design•Build•Maintain•Supply";
        $logo = '/imgz/lcm_logo.jpg';
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
    include ('mag-la.inc');
}
elseif($pub=='lcdbm'){
    include ('mag-lc.inc');
}
elseif($pub=='lo'){
    include ('mag-lo.inc');
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
    include ('mag-eb.inc');
}
else{
    include ('mag-lo.inc');
}


?>

