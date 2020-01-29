
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$chemc0001 = $_POST['chemc0001'];
	$chemc0002 = $_POST['chemc0002'];
	$chemc0003 = $_POST['chemc0003'];
	$chemc0004 = $_POST['chemc0004'];
	$chemc0005 = $_POST['chemc0005'];
	$chemc0006 = $_POST['chemc0006'];
	$chemc0007 = $_POST['chemc0007'];
	$chemc0008 = $_POST['chemc0008'];
	$chemc0009 = $_POST['chemc0009'];
	$chemc0010 = $_POST['chemc0010'];
	$chemc0011 = $_POST['chemc0011'];
	$chemc0012 = $_POST['chemc0012'];
	$chemc0013 = $_POST['chemc0013'];
	$chemc0014 = $_POST['chemc0014'];
	$chemc0015 = $_POST['chemc0015'];
	$chemc0016 = $_POST['chemc0016'];
	$chemc0017 = $_POST['chemc0017'];
	$chemc0018 = $_POST['chemc0018'];
	$chemc0019 = $_POST['chemc0019'];
	$chemc0020 = $_POST['chemc0020'];



	if ((!empty($chemc0001)) || (!empty($chemc0002)) || (!empty($chemc0003)) || (!empty($chemc0004)) || (!empty($chemc0005)) || (!empty($chemc0006)) || (!empty($chemc0007)) || (!empty($chemc0008)) || (!empty($chemc0009)) || (!empty($chemc0010)) || (!empty($chemc0011)) || (!empty($chemc0012)) || (!empty($chemc0013)) || (!empty($chemc0014)) || (!empty($chemc0015)) || (!empty($chemc0016)) || (!empty($chemc0017)) || (!empty($chemc0018)) || (!empty($chemc0019)) || (!empty($chemc0020))) {





	$plants = $chemc0001 . "," . $chemc0002 . "," . $chemc0003 . "," . $chemc0004 . "," . $chemc0005 . "," . $chemc0006 . "," . $chemc0007 . "," . $chemc0008 . "," . $chemc0009 . "," . $chemc0010 . "," . $chemc0011 . "," . $chemc0012 . "," . $chemc0013 . "," . $chemc0014 . "," . $chemc0015 . "," . $chemc0016 . "," . $chemc0017 . "," . $chemc0018. "," . $chemc0019. "," . $chemc0020;


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
		$sql = "UPDATE new_vendor SET brands_c = '" . $plants . "' WHERE id = '" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>T &amp; O Chemicals &amp; Admendments Brands Updated successfully</h3><br></center>";
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





