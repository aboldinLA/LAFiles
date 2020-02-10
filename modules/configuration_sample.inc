<?php

	$environment = '';
    if($_SERVER['HTTP_HOST'] == 'local.laarchitect.com'){
        $environment = 'development';
    }else if($_SERVER['HTTP_HOST'] == "dev.landscapearchitect.com"){
    	$environment = 'staging';
    }
    else{
        $environment = 'production';
    }

    $rootInclude = $_SERVER['DOCUMENT_ROOT'].'/libs/';
	
	if($environment == 'development'):
		defined('DB_HOST') or define('DB_HOST', 'localhost');
		defined('DB_USER') or define('DB_USER', '#######');
		defined('DB_PASS') or define('DB_PASS', '########');
		defined('DB_NAME') or define('DB_NAME', '########');	
		defined('GCAPTCHA_KEY') or define('GCAPTCHA_KEY', '###########');
		defined('BASE_URL') or define('BASE_URL', 'http://local.laarchitect.com/');
	else if($environment == 'staging'):
		defined('DB_HOST') or define('DB_HOST', 'localhost');
		defined('DB_USER') or define('DB_USER', '#########');
		defined('DB_PASS') or define('DB_PASS', '##########');
		defined('DB_NAME') or define('DB_NAME', '#########');	
		defined('GCAPTCHA_KEY') or define('GCAPTCHA_KEY', '#####################');
		defined('BASE_URL') or define('BASE_URL', 'http://dev.landscapearchitect.com/');
	else:	
		defined('DB_HOST') or define('DB_HOST', 'localhost');
		defined('DB_USER') or define('DB_USER', '############');
		defined('DB_PASS') or define('DB_PASS', '########');
		defined('DB_NAME') or define('DB_NAME', '#########');
		defined('GCAPTCHA_KEY') or define('GCAPTCHA_KEY', '########################');
		defined('BASE_URL') or define('BASE_URL', 'https://landscapearchitect.com/');
	endif;	
	

	
?>
