<?
			
			
	function relatedArticles($tleArticlesKeyword1, $tleArticlesKeyword2){

			// Article Start

			$servername = "localhost";
			$username = "landscap_lol";
			$password = "meow2meow";
			$dbname = "landscap_lollive";

		// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
					 die("Connection failed: " . $conn->connect_error);
			} 


			
//			$sql5 = "select * from editorial where title RLIKE '" . "% tree %" . "' ORDER BY id DESC";

			$sql5 = "select * from editorial where title REGEXP '[[:<:]]" . $tleArticlesKeyword1 . "[[:>:]]'
							UNION
							select * from editorial where title REGEXP '[[:<:]]" . $tleArticlesKeyword2 . "[[:>:]]' 
							ORDER BY id DESC";
			$result5 = $conn->query($sql5);									

		// banner rotating section
				$i = 1;
			while($row = mysqli_fetch_array($result5)) {
				if ($i <= "11") {
					echo "<p><a href='https://landscapearchitect.com/research/article-a.php?number=" . $row["id"] . "' class='primary-text'>" . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row["title"]))) . "</a></p>";
					$i++;		
				}
			}
		} /* End realtedArticles() */ 
			
			?>                                                               
