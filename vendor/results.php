<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Guide Signup</title>
</head>

<body> 	
								
<?
	
	
	?>
								
			<center><img width="40%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_325.png"><img width="40%" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" style="padding-left: 10px"></center>
							
							<hr noshade><br>
								
								
								
 								
 												
 																				<form method="post" action="thankyou.php?coid=<? echo $_GET['coid']; ?>">
									<?
									
										// Banner Ads Start

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



											$sql5 = "SELECT toll FROM vendor_product where id = '" . $_GET['coid'] ."' ";
											$result5 = $conn->query($sql5);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result5)) {
												$toll = $row['toll'];	
											}										
									?>                      
					<label>Use For 2017 LASN Specifiers Guide</label>
                <input type='radio' name='toll' id='toll'  value='17-SG' />Yes<br>
                
                
                
                
									<?
									
										// Banner Ads Start

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



											$sql5 = "SELECT toll FROM vendor_product where id = '" . $_GET['coid'] ."' ";
											$result5 = $conn->query($sql5);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result5)) {
												$fax = $row['fax'];	
											}										
									?>                      
					<label>Use For 2017 LC\DBM Buyer's Guide</label>
                <input type='radio' name='fax' id='fax'  value='17-BG' />Yes
<br>
<input type="submit" value="submit"> <br>
                              
							<hr noshade>
                
</body>
</html>
                
 
 
 <?php


 

?>
