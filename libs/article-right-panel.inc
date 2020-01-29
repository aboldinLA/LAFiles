 <?php
    for ($i = 2; $i <= 21; ++$i) {
        $questions[] = $i;
    }
    
    shuffle($questions);
?> 

<div>

		<? $C->banner($_SERVER['PHP_SELF'], $questions[1]);  ?>
                
		<? $C->banner($_SERVER['PHP_SELF'], $questions[2]);  ?>

		<? $C->banner($_SERVER['PHP_SELF'], $questions[3]);  ?>
		
		<? $C->banner($_SERVER['PHP_SELF'], $questions[4]);  ?>
		
		<? $C->banner($_SERVER['PHP_SELF'], $questions[5]);  ?>
		
		<? $C->banner($_SERVER['PHP_SELF'], $questions[6]);  ?>
		
		<? $C->banner($_SERVER['PHP_SELF'], $questions[7]);  ?>
		
		<? $C->banner($_SERVER['PHP_SELF'], $questions[8]);  ?>
		
		<? $C->banner($_SERVER['PHP_SELF'], $questions[9]);  ?>
		
		<? $C->banner($_SERVER['PHP_SELF'], $questions[10]);  ?>
        
		<? $C->banner($_SERVER['PHP_SELF'], $questions[11]);  ?>
       
		<? $C->banner($_SERVER['PHP_SELF'], $questions[12]);  ?>
        
		<? $C->banner($_SERVER['PHP_SELF'], $questions[13]);  ?>
        
		<? $C->banner($_SERVER['PHP_SELF'], $questions[14]);  ?>
        
		<? $C->banner($_SERVER['PHP_SELF'], $questions[15]);  ?>

		<? $C->banner($_SERVER['PHP_SELF'], $questions[16]);  ?>

		<? $C->banner($_SERVER['PHP_SELF'], $questions[17]);  ?>

		<? $C->banner($_SERVER['PHP_SELF'], $questions[18]);  ?>

		<? $C->banner($_SERVER['PHP_SELF'], $questions[19]);  ?>
        
		<? $C->banner($_SERVER['PHP_SELF'], $questions[20]);  ?>
        
		<? $C->banner($_SERVER['PHP_SELF'], $questions[21]);  ?>	
		
</div>
