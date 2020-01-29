
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$planp0001 = $_POST['planp0001'];
	$planp0002 = $_POST['planp0002'];
	$planp0003 = $_POST['planp0003'];
	$planp0004 = $_POST['planp0004'];
	$planp0005 = $_POST['planp0005'];
	$planp0006 = $_POST['planp0006'];
	$planp0007 = $_POST['planp0007'];
	$planp0008 = $_POST['planp0008'];
	$planp0009 = $_POST['planp0009'];
	$planp0010 = $_POST['planp0010'];
	$planp0011 = $_POST['planp0011'];
	$planp0012 = $_POST['planp0012'];
	$planp0013 = $_POST['planp0013'];
	$planp0014 = $_POST['planp0014'];
	$planp0015 = $_POST['planp0015'];
	$planp0016 = $_POST['planp0016'];
	$planp0017 = $_POST['planp0017'];
	$planp0018 = $_POST['planp0018'];
	$planp0019 = $_POST['planp0019'];
	$planp0020 = $_POST['planp0020'];
	$planp0021 = $_POST['planp0021'];
	$planp0022 = $_POST['planp0022'];
	$planp0023 = $_POST['planp0023'];
	$planp0024 = $_POST['planp0024'];
	$planp0025 = $_POST['planp0025'];
	$planp0026 = $_POST['planp0026'];



	if ((!empty($planp0001)) || (!empty($planp0002)) || (!empty($planp0003)) || (!empty($planp0004)) || (!empty($planp0005)) || (!empty($planp0006)) || (!empty($planp0007)) || (!empty($planp0008)) || (!empty($planp0009)) || (!empty($planp0010)) || (!empty($planp0011)) || (!empty($planp0012)) || (!empty($planp0013)) || (!empty($planp0014)) || (!empty($planp0015)) || (!empty($planp0016)) || (!empty($planp0017)) || (!empty($planp0018)) || (!empty($planp0019)) || (!empty($planp0020)) || (!empty($planp0021)) || (!empty($planp0022)) || (!empty($planp0023)) || (!empty($planp0024)) || (!empty($planp0025)) || (!empty($planp0026))) {






	$plants = $planp0001 . "," . $planp0002 . "," . $planp0003 . "," . $planp0004 . "," . $planp0005 . "," . $planp0006 . "," . $planp0007 . "," . $planp0008 . "," . $planp0009 . "," . $planp0010 . "," . $planp0011 . "," . $planp0012 . "," . $planp0013 . "," . $planp0014 . "," . $planp0015 . "," . $planp0016 . "," . $planp0017 . "," . $planp0018 . "," . $planp0019 . "," . $planp0020 . "," . $planp0021 . "," . $planp0022 . "," . $planp0023 . "," . $planp0024 . "," . $planp0025 . "," . $planp0026;

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
		$sql = "UPDATE new_vendor SET plants_s = '" . $plants . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>Plant Suppliers Updated successfully</h3><br></center>";
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





