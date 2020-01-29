<?

	$servername = "localhost";
	$username = "land_patchew";
	$password = "59q2GB6k$3";
	$dbname = "land_landscap_lollive";
	
		// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
			if ($conn->connect_error) {
   				die("Connection failed: " . $conn->connect_error);
			} 


		// start for the banner add counting and getting from table



			$sql = "SELECT * FROM banner_ups_new WHERE ROS LIKE 'yes' AND product IS NULL AND picture IS NOT NULL ORDER BY RAND()";
			$result = $conn->query($sql);									
									
			// banner rotating section
				while($row = mysqli_fetch_array($result)) {
                    
                     $banCount = $row['Views'];
                                                
                      echo $row['id'] . '&nbsp;' . $row['Views'] . '<br>';    
                     


?>







<script>
    
$(function(){
   $('img').load(function(){
        $.post('update.php', {img: $(this).attr("id")});
   });
});    
    
if(window.attachEvent) {
    window.attachEvent('onload', myFunction);
}
    
function myFunction() {
    
var x = <? echo $banCount; ?>;
var y = 1;
    
var z = x + y;
    
document.getElementById("myText").innerHTML = z;    
    
}    
    
</script>



<body onload="myFunction()">


<div style="position: relative; left: 25px; top: 250px">


    <h3><? echo $bannerNum; ?>: <span id="myText"></span></h3><br>
    
</div>    
    

<?

		}

 


// Close the MySql connection
// mysqli_close($conn);

?>