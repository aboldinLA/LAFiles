
<?
include("lo_top-main2-prod.inc");

	$keyword = str_replace(' ', '%', trim($_POST['keywrd'])); 

	$keywordSE = $keyword;

?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-search.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
	
	
	
	
	
	
	
	<div style="position:relative; left: 10px; top: 0px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Product Keyword Search For: <? echo $_POST['keywrd'] ?></h3></center><br>
                   
                   
	</div>					
			
			
			
	<div style="position:absolute; left: 560px; top:225px; z-index: 0">
		<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Enter Your Keyword<br>
		<span style="font-size: 12px">(Then click submit or return)</span></h3></center>
	</div>
			
				<div style="position:absolute; left: 535px; top:275px; z-index: 0">
						
						
						<form method="post" action="prod-seac.php">
						
							<center><label><span style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Enter Keyword for Search</span></label><br>
							<input type="text" name="keywrd" style="width: 250px; height: 20px; box-shadow: 5px 5px 5px #888888" placeholder="Please enter Keyword"><br>
								<input type="submit" value="Submit" style="background-color: #4fb548; position: relative; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"></center>
							
						</form>
							
							
				<div id="featured" style="position: absolute; left: -220px; top: 75px">
					
				<div style="position: relative; left: -35px; top: 25px">
                   			
				<div style='width:750px; height:2px; background-color:#605b51;'> </div><br>
                   			
                   			
	
		
	
	
	
	
	
	
	<div style="position:relative; left: -15px; top: 0px; z-index: 0">
		
                   <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Results:</h3></center><br>
	<center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Featured Advertisers <span style="font-size: 12px">(Below is a list of Advertiers that match your keyword)</span></h3></center>
			
				<div style="position:absolute; left: 40px; top:100px; z-index: 0">
								
								
                                 
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


										// start for the banner add counting and getting from table
										
											// $ad = $_GET["ad"];
											$ad = 1;


											$sql = "SELECT * FROM editorial WHERE title LIKE '%" . $keywordSE . "%' ORDER BY id DESC";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												
												
												// echo $links;
												
														
													echo $row['id'] . "<br>";														
												
														
												
												
											}
												
												
															
									?>        
				
				</div>
				
				</div>
				
			
					
							
							
							
		
				
			
			</td>
			
			
			
		</tr>
	</table>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





