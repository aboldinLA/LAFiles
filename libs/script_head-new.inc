<?php 

include $include_path . "connect.inc";

require_once 'base/lcsi_class.php';

// start the session



// check for uid and cookie

session_set_cookie_params(0, "/", $_SERVER["SERVER_NAME"]); //time + (60 * 60)

//session_start();

				

if(!session_is_registered("uid") && isset($HTTP_COOKIE_VARS["green_thumb"]))

{	

	// run login by cookie code

	include_once $include_path . "class/common_class.inc";

	$C = new Common_Class(&$db);

	$uid = $C->check_cookie($HTTP_COOKIE_VARS["green_thumb"]);

	unset($C);

	

}

if(!is_numeric($uid)) {

		  $uid = 0;

}

	//session_register("uid") = $uid;



include_once $include_path . "functions.inc";



$SUBSCRIBE_AUTH = "s";

$ASSOC_AUTH = "as";

$VENDOR_AUTH = "v";

$ADMIN_AUTH = "ad";

$lol_url = "http://". $_SERVER["SERVER_NAME"];		//default

$lol_url_a = "http://". $_SERVER["SERVER_NAME"];	//admin

$lol_url_s = "https://". $_SERVER["SERVER_NAME"];	//secure

//$lol_url_s = "https://secure.landscapeonline.com";

if ($lol_url == "http://staging.landscapeonline.com" || $lol_url == "http://lol.motherway.net") $is_staging = 1;

if($_SERVER["SERVER_PORT_SECURE"]) {

	$lol_url_host=$lol_url; //changes relative links in menu to point to the non-secure site

}

$research_img_path = "research/images";

$research_imgfile_path = $file_path . "web/" . $research_img_path;

$srch_altcolor="#efefef";



$L = new lcsi_class();



$lcsi = $L->getLCSI();



$leftpane = "

        <tr><td class='cellhead'>Economic Indicators</td></tr>

        <tr><td><strong>Today's LCSI:</strong><br /> " . date('m/d/y', time()) . " $$lcsi <br />

        <a href='/research/article/2862'>More Market News</a>

        </td></tr>

		";

?>