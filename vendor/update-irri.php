
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$irrii0001 = $_POST['irrii0001'];
	$irrii0002 = $_POST['irrii0002'];
	$irrii0003 = $_POST['irrii0003'];
	$irrii0004 = $_POST['irrii0004'];
	$irrii0005 = $_POST['irrii0005'];
	$irrii0006 = $_POST['irrii0006'];
	$irrii0007 = $_POST['irrii0007'];
	$irrii0008 = $_POST['irrii0008'];
	$irrii0009 = $_POST['irrii0009'];
	$irrii0010 = $_POST['irrii0010'];
	$irrii0011 = $_POST['irrii0011'];
	$irrii0012 = $_POST['irrii0012'];
	$irrii0013 = $_POST['irrii0013'];
	$irrii0014 = $_POST['irrii0014'];
	$irrii0015 = $_POST['irrii0015'];
	$irrii0016 = $_POST['irrii0016'];
	$irrii0017 = $_POST['irrii0017'];
	$irrii0018 = $_POST['irrii0018'];
	$irrii0019 = $_POST['irrii0019'];
	$irrii0020 = $_POST['irrii0020'];
	$irrii0021 = $_POST['irrii0021'];
	$irrii0022 = $_POST['irrii0022'];



	if ((!empty($irrii0001)) || (!empty($irrii0002)) || (!empty($irrii0003)) || (!empty($irrii0004)) || (!empty($irrii0005)) || (!empty($irrii0006)) || (!empty($irrii0007)) || (!empty($irrii0008)) || (!empty($irrii0009)) || (!empty($irrii0010)) || (!empty($irrii0011)) || (!empty($irrii0012)) || (!empty($irrii0013)) || (!empty($irrii0014)) || (!empty($irrii0015)) || (!empty($irrii0016)) || (!empty($irrii0017)) || (!empty($irrii0018)) || (!empty($irrii0019)) || (!empty($irrii0020)) || (!empty($irrii0021)) || (!empty($irrii0022))) {






	$plants = $irrii0001 . "," . $irrii0002 . "," . $irrii0003 . "," . $irrii0004 . "," . $irrii0005 . "," . $irrii0006 . "," . $irrii0007 . "," . $irrii0008 . "," . $irrii0009 . "," . $irrii0010 . "," . $irrii0011 . "," . $irrii0012 . "," . $irrii0013 . "," . $irrii0014 . "," . $irrii0015 . "," . $irrii0016 . "," . $irrii0017 . "," . $irrii0018 . "," . $irrii0019 . "," . $irrii0020 . "," . $irrii0021 . "," . $irrii0022;

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
		$sql = "UPDATE new_vendor SET brands_i = '" . $plants . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>Irrigation Brands Updated successfully</h3><br></center>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
		mysqli_close($link);



?> 		
		
		
		<center><button href='#' onClick="close_window()">Back To Profile</button></center>
		
	
	
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





