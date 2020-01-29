<?

		if(strpos(htmlentities($_SERVER['PHP_SELF']), 'search-results')){
			$action = htmlentities($_SERVER['PHP_SELF']);
		} else {
			$action = 'https://landscapearchitect.com/search-results-site.php';
		}
			
		
		

?>




		<form action="<?php echo $action ?>" method="post" name="productFinder" id="productFinder">
			<input type="text" name="keywordSE4" id="keywordSE4" value="<?php echo $keywordSE; ?>" />
			<button type="button" name="defaultSub" value="defaultSub" onClick="submitForm('<?php echo htmlentities($_SERVER['PHP_SELF']); ?>')"></button>
			<div id="seSubmitBtnsContainer">
				<button type="button" name="siteSub" value="siteSub" class="searchEngineSubmitBtns" onClick="submitForm('https://landscapearchitect.com/search-results-site.php')">Search All</button>
				<button type="button" name="productSub" value="productSub" class="searchEngineSubmitBtns" onClick="submitForm('https://landscapearchitect.com/search-results-products.php')">Products Only</button>
				<button type="button" name="articleSub" value="articleSub" class="searchEngineSubmitBtns" onClick="submitForm('https://landscapearchitect.com/search-results-articles.php')">Articles Only</button>
			</div>
		</form>
			
			
			<script>
				
					function submitForm(action) {						
		var form = document.getElementById('productFinder');
		form.action = action + '?key=' + document.getElementById('keywordSE4').value;
		form.submit();
	}

			
			</script>