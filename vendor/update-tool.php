
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$toolt0001 = $_POST['toolt0001'];
	$toolt0002 = $_POST['toolt0002'];
	$toolt0003 = $_POST['toolt0003'];
	$toolt0004 = $_POST['toolt0004'];
	$toolt0005 = $_POST['toolt0005'];
	$toolt0006 = $_POST['toolt0006'];
	$toolt0007 = $_POST['toolt0007'];
	$toolt0008 = $_POST['toolt0008'];
	$toolt0009 = $_POST['toolt0009'];
	$toolt0010 = $_POST['toolt0010'];
	$toolt0011 = $_POST['toolt0011'];
	$toolt0012 = $_POST['toolt0012'];
	$toolt0013 = $_POST['toolt0013'];
	$toolt0014 = $_POST['toolt0014'];
	$toolt0015 = $_POST['toolt0015'];
	$toolt0016 = $_POST['toolt0016'];
	$toolt0017 = $_POST['toolt0017'];
	$toolt0018 = $_POST['toolt0018'];
	$toolt0019 = $_POST['toolt0019'];
	$toolt0020 = $_POST['toolt0020'];
	$toolt0021 = $_POST['toolt0021'];
	$toolt0022 = $_POST['toolt0022'];
	$toolt0023 = $_POST['toolt0023'];
	$toolt0024 = $_POST['toolt0024'];





	if ((!empty($toolt0001)) || (!empty($toolt0002)) || (!empty($toolt0003)) || (!empty($toolt0004)) || (!empty($toolt0005)) || (!empty($toolt0006)) || (!empty($toolt0007)) || (!empty($toolt0008)) || (!empty($toolt0009)) || (!empty($toolt0010)) || (!empty($toolt0011)) || (!empty($toolt0012)) || (!empty($toolt0013)) || (!empty($toolt0014)) || (!empty($toolt0015)) || (!empty($toolt0016)) || (!empty($toolt0017)) || (!empty($toolt0018)) || (!empty($toolt0019)) || (!empty($toolt0020)) || (!empty($toolt0021)) || (!empty($toolt0022)) || (!empty($toolt0023)) || (!empty($toolt0024))) {






	$plants = $toolt0001 . "," . $toolt0002 . "," . $toolt0003 . "," . $toolt0004 . "," . $toolt0005 . "," . $toolt0006 . "," . $toolt0007 . "," . $toolt0008 . "," . $toolt0009 . "," . $toolt0010 . "," . $toolt0011 . "," . $toolt0012 . "," . $toolt0013 . "," . $toolt0014 . "," . $toolt0015 . "," . $toolt0016 . "," . $toolt0017 . "," . $toolt0018 . "," . $toolt0019 . "," . $toolt0020 . "," . $toolt0021 . "," . $toolt0022 . "," . $toolt0023 . "," . $toolt0024;

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
		$sql = "UPDATE new_vendor SET brands_t = '" . $plants . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>Tools &amp; Equipment Brands Updated successfully</h3><br></center>";
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





