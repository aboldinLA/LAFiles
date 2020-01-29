
<?
include("lo_top-main2-prod-js3.inc");

	$id = $_POST['id'];

	$detail0001 = $_POST['product_act'];
	$detail0002 = $_POST['product_name'];
	$detail0003 = $_POST['description'];



	
		

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
		$sql = "UPDATE vendor_product SET product_act='" . $detail0001 . "', product_name='" . $detail0002 . "', description='" . $detail0003 . "' WHERE id ='" . $id . "';
";
		if(mysqli_query($link, $sql)){
			echo "<br><center><h3>Product has been updateds.</h3><br></center>";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
		mysqli_close($link);



?> 		
		
		
		<center><a href="javascript:refreshParent();">Close Window</a></center>
		
		<script language="JavaScript">
				<!--
				function refreshParent() {
				  window.opener.location.href = window.opener.location.href;

				  if (window.opener.progressWindow)

				 {
					window.opener.progressWindow.close()
				  }
				  window.close();
				}
				//-->
		</script>
		
	
	
	</div>					
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
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





