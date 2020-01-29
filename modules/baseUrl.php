<?php 

if($_SERVER['HTTP_HOST'] == 'dev.landscapearchitect.com'){
define("SITE_URL", "https://dev.landscapearchitect.com/");

}else{
define("SITE_URL", "https://landscapeonline.com.com/");
}

define( "VENDER_PROFILE_SLUG" , SITE_URL.'commercial-landscape-companies/' );
 
 
?>