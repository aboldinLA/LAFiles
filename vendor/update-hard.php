
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$hardh0001 = $_POST['hardh0001'];
	$hardh0002 = $_POST['hardh0002'];
	$hardh0003 = $_POST['hardh0003'];
	$hardh0004 = $_POST['hardh0004'];
	$hardh0005 = $_POST['hardh0005'];
	$hardh0006 = $_POST['hardh0006'];
	$hardh0007 = $_POST['hardh0007'];
	$hardh0008 = $_POST['hardh0008'];
	$hardh0009 = $_POST['hardh0009'];
	$hardh0010 = $_POST['hardh0010'];
	$hardh0011 = $_POST['hardh0011'];
	$hardh0012 = $_POST['hardh0012'];
	$hardh0013 = $_POST['hardh0013'];
	$hardh0014 = $_POST['hardh0014'];
	$hardh0015 = $_POST['hardh0015'];
	$hardh0016 = $_POST['hardh0016'];
	$hardh0017 = $_POST['hardh0017'];
	$hardh0018 = $_POST['hardh0018'];
	$hardh0019 = $_POST['hardh0019'];
	$hardh0020 = $_POST['hardh0020'];
	$hardh0021 = $_POST['hardh0021'];
	$hardh0022 = $_POST['hardh0022'];
	$hardh0023 = $_POST['hardh0023'];
	$hardh0024 = $_POST['hardh0024'];
	$hardh0025 = $_POST['hardh0025'];
	$hardh0026 = $_POST['hardh0026'];
	$hardh0027 = $_POST['hardh0027'];	



	if ((!empty($hardh0001)) || (!empty($hardh0002)) || (!empty($hardh0003)) || (!empty($hardh0004)) || (!empty($hardh0005)) || (!empty($hardh0006)) || (!empty($hardh0007)) || (!empty($hardh0008)) || (!empty($hardh0009)) || (!empty($hardh0010)) || (!empty($hardh0011)) || (!empty($hardh0012)) || (!empty($hardh0013)) || (!empty($hardh0014)) || (!empty($hardh0015)) || (!empty($hardh0016)) || (!empty($hardh0017)) || (!empty($hardh0018)) || (!empty($hardh0019)) || (!empty($hardh0020)) || (!empty($hardh0021)) || (!empty($hardh0022)) || (!empty($hardh0023)) || (!empty($hardh0024)) || (!empty($hardh0025)) || (!empty($hardh0026)) || (!empty($hardh0027))) {




	$plants = $hardh0001 . "," . $hardh0002 . "," . $hardh0003 . "," . $hardh0004 . "," . $hardh0005 . "," . $hardh0006 . "," . $hardh0007 . "," . $hardh0008 . "," . $hardh0009 . "," . $hardh0010 . "," . $hardh0011 . "," . $hardh0012 . "," . $hardh0013 . "," . $hardh0014 . "," . $hardh0015 . "," . $hardh0016 . "," . $hardh0017 . "," . $hardh0018 . "," . $hardh0019 . "," . $hardh0020 . "," . $hardh0021 . "," . $hardh0022 . "," . $hardh0023 . "," . $hardh0024 . "," . $hardh0025 . "," . $hardh0026 . "," . $hardh0027;

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
		$sql = "UPDATE new_vendor SET brands_h = '" . $plants . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>Hardscape Brands Updated successfully</h3><br></center>";
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





