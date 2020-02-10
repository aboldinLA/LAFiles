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
		defined('DB_USER') or define('DB_USER', 'dbuser');
		defined('DB_PASS') or define('DB_PASS', 'Admin@123#');
		defined('DB_NAME') or define('DB_NAME', 'land_landscap_lollive');	
		defined('GCAPTCHA_KEY') or define('GCAPTCHA_KEY', '6LcO59AUAAAAAMUIT7T-cocR4GWVVnK8nGnvsMKs');
		defined('BASE_URL') or define('BASE_URL', 'http://local.laarchitect.com/');
	else if($environment == 'staging'):
		defined('DB_HOST') or define('DB_HOST', 'localhost');
		defined('DB_USER') or define('DB_USER', 'devlands_mrudul');
		defined('DB_PASS') or define('DB_PASS', 'LZi7xHnm5)j5');
		defined('DB_NAME') or define('DB_NAME', 'devlands_mab2019');	
		defined('GCAPTCHA_KEY') or define('GCAPTCHA_KEY', '6LcO59AUAAAAAMUIT7T-cocR4GWVVnK8nGnvsMKs');
		defined('BASE_URL') or define('BASE_URL', 'http://dev.landscapearchitect.com/');
	else:	
		defined('DB_HOST') or define('DB_HOST', 'localhost');
		defined('DB_USER') or define('DB_USER', 'land_patchew');
		defined('DB_PASS') or define('DB_PASS', '59q2GB6k$3');
		defined('DB_NAME') or define('DB_NAME', 'land_landscap_lollive');
		defined('GCAPTCHA_KEY') or define('GCAPTCHA_KEY', '6LeWWMYUAAAAAJd2h7hNl8BGknakenroC05XhfPC');
		defined('BASE_URL') or define('BASE_URL', 'https://landscapearchitect.com/');
	endif;	
	

	
?>
