
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$lighl0001 = $_POST['lighl0001'];
	$lighl0002 = $_POST['lighl0002'];
	$lighl0003 = $_POST['lighl0003'];
	$lighl0004 = $_POST['lighl0004'];
	$lighl0005 = $_POST['lighl0005'];
	$lighl0006 = $_POST['lighl0006'];
	$lighl0007 = $_POST['lighl0007'];
	$lighl0008 = $_POST['lighl0008'];
	$lighl0009 = $_POST['lighl0009'];
	$lighl0010 = $_POST['lighl0010'];
	$lighl0011 = $_POST['lighl0011'];
	$lighl0012 = $_POST['lighl0012'];
	$lighl0013 = $_POST['lighl0013'];
	$lighl0014 = $_POST['lighl0014'];
	$lighl0015 = $_POST['lighl0015'];
	$lighl0016 = $_POST['lighl0016'];
	$lighl0017 = $_POST['lighl0017'];
	$lighl0018 = $_POST['lighl0018'];
	$lighl0019 = $_POST['lighl0019'];
	$lighl0020 = $_POST['lighl0020'];
	$lighl0021 = $_POST['lighl0021'];
	$lighl0022 = $_POST['lighl0022'];
	$lighl0023 = $_POST['lighl0023'];
	$lighl0024 = $_POST['lighl0024'];


		
	if ((!empty($lighl0001)) || (!empty($lighl0002)) || (!empty($lighl0003)) || (!empty($lighl0004)) || (!empty($lighl0005)) || (!empty($lighl0006)) || (!empty($lighl0007)) || (!empty($lighl0008)) || (!empty($lighl0009)) || (!empty($lighl0010)) || (!empty($lighl0011)) || (!empty($lighl0012)) || (!empty($lighl0013)) || (!empty($lighl0014)) || (!empty($lighl0015)) || (!empty($lighl0016)) || (!empty($lighl0017)) || (!empty($lighl0018)) || (!empty($lighl0019)) || (!empty($lighl0020)) || (!empty($lighl0021)) || (!empty($lighl0022)) || (!empty($lighl0023)) || (!empty($lighl0024))) {




	$plants = $lighl0001 . "," . $lighl0002 . "," . $lighl0003 . "," . $lighl0004 . "," . $lighl0005 . "," . $lighl0006 . "," . $lighl0007 . "," . $lighl0008 . "," . $lighl0009 . "," . $lighl0010 . "," . $lighl0011 . "," . $lighl0012 . "," . $lighl0013 . "," . $lighl0014 . "," . $lighl0015 . "," . $lighl0016 . "," . $lighl0017 . "," . $lighl0018 . "," . $lighl0019 . "," . $lighl0020 . "," . $lighl0021 . "," . $lighl0022 . "," . $lighl0023 . "," . $lighl0024;

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
		$sql = "UPDATE new_vendor SET brands_l = '" . $plants . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>Lighting Brands Updated successfully</h3><br></center>";
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





