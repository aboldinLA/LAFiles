<?php
define('DSN', 'mysql://landscap_lol:meow2meow@localhost/landscap_lollive');
//define('DSN', 'mysql://lol:meow2meow@www.landscapeonline.com/lollive');
$file_path    = realpath(dirname(__FILE__) . '/..') . '/';
$sep = ':';

$liveurl="http://www.landscapeonline.com";

/* Live */
//  $file_path    = "d:/data/web/live/landscapeonline.com/";
//  $sep = ';';

$include_path = $file_path . "includes/";
$cache_path   = $file_path . "cache/";
$banner_include_path = $include_path;
ini_set("session.save_path", $file_path . "sessions");
ini_set('include_path', ini_get('include_path') . $sep . $include_path . "base/");
ini_set("register_globals", "1");
//ini_set("session.auto_start", "1");

//ini_set("display_errors","0");

// Required Class Loader
// Needs to be called before session_start()

$requiredClasses[] = "class/common_class2.inc";
$requiredClasses[] = "base/lol_banner_class.php";
$requiredClasses[] = "base/lcsi_class.php";
if(is_array($requiredClasses)) {
    foreach($requiredClasses as $file)
        require_once($include_path . $file);
}

include $include_path . "script_head.inc";
$C = new common_class($db);
$PHP_SELF=$_SERVER['PHP_SELF'];
$path_parts = pathinfo(dirname($PHP_SELF));
$sect = $path_parts["basename"];
?>
