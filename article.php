<?
				
				$artNum = $_GET['id'];
				
				if (!empty($artNum)) {
					
					header("Location: https://landscapearchitect.com/research/article-a.php?number=" . $artNum . "");
					die();					
					
				} else {
					
					$rest = substr($_SERVER['PHP_SELF'], 22);					
					header("Location: https://landscapearchitect.com/research/article-a.php?number=" . $rest . "");
					die();					
				}


?>
				
	