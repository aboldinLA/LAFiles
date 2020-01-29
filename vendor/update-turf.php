
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$turft0001 = $_POST['turft0001'];
	$turft0002 = $_POST['turft0002'];
	$turft0003 = $_POST['turft0003'];
	$turft0004 = $_POST['turft0004'];
	$turft0005 = $_POST['turft0005'];
	$turft0006 = $_POST['turft0006'];
	$turft0007 = $_POST['turft0007'];
	$turft0008 = $_POST['turft0008'];
	$turft0009 = $_POST['turft0009'];


	if ((!empty($turft0001)) || (!empty($turft0002)) || (!empty($turft0003)) || (!empty($turft0004)) || (!empty($turft0005)) || (!empty($turft0006)) || (!empty($turft0007)) || (!empty($turft0008)) || (!empty($turft0009))) {

	$plants = $turft0001 . "," . $turft0002 . "," . $turft0003 . "," . $turft0004 . "," . $turft0005 . "," . $turft0006 . "," . $turft0007 . "," . $turft0008 . "," . $turft0009;

	} else {
		
		$plants = '';
		
	}			
		

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
	
		<?
			include("lo_top-main2-side2-js50.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side2-js-banner.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			

<?php

	

		$link = mysqli_connect("localhost", "landscap_lol", "meow2meow", "landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// Attempt insert query execution
		$sql = "UPDATE new_vendor SET plants_t = '" . $plants . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>Turf Suppliers Updated successfully</h3><br></center>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
		mysqli_close($link);



?> 		
		
		
		<center><a href='/vendor/index-vendor-js.php'><img src='https://landscapearchitect.com/imgz2/back-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a></center>
		
	
	
	</div>					
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
    
    
                                  <script type='text/javascript'>
                                      
                                    javascript:self.close();window.opener.location.reload(true);
                                      
                                  </script>      
    
	
	<div style="position: relative; left: 250px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





