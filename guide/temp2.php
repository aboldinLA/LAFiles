<?
	include("lo_top-main2.inc");
	
	$key = '22687';	
	
	$hash2=$_GET[hash];
	echo $hash2
?>

	<!-- Menu Section -->  
	<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
<?
	include $include_path . "lo_header-main2-js.inc";
?>

<?
	// Database login
	include("config.inc2.php"); //include config file
	
	$results = mysqli_query($connecDB,"select * from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id LEFT JOIN vendor_product_contact ON vendor_product_contact.vendor_id=vendor_product.vendor_id LEFT JOIN vendor_product_lg_approvals ON vendor_product_lg_approvals.vendor_product_id=vendor_product.id where vendor_product_lg_approvals.app_hash =" .  $hash2 . "");
	
	
?>

 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:10px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Old Code Start -->

	<div>
		<div class="tb2" style="width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
		<span style="font-size:16px">Lead Generator Product Profile Proof & Approval Request Form&nbsp;&nbsp;</span>
		</div><br />
	</div>
	<div>
		<div>
			<p>Please review the content of your <b>Lead Generator Product Profile</b> below, then use the approval form below to make edits or approve the profile.</p>
		</div><br><br>
                
		<div>
        
<?
	while($row = mysqli_fetch_array($results))
	{
?>              
        
        
			<h1>Listing Information</h1><br>
			<span style="font-size:16px">This <strong><?php echo $row["size"] ?> Lead Generator Product Profile</strong> is scheduled to appear in <strong><?php echo $row["brand"] ?>.</strong></span><br><br>
		</div><br><br>
                             
		<div>

			<!-- Horizontal Bar Start -->
			<div style="width:750px; height:2px; background-color:#605b51;"> </div>
			<!-- Horizontal Bar End -->
            
      
            

			<h1>Contact Information</h1><br>
			<div><span style="font-size:16px; font-family:\'Times New Roman\', Times, serif; line-height:1.1em">
				Company Name: <strong><?php echo $row["company_name"] ?></strong><br />
				Website: <strong><?php echo $row["web"] ?></strong><br />
				Best Phone: <strong><?php echo $row["toll"] ?></strong><br /><br />                    
				<h1 style="font-family:Arial, Helvetica, sans-serif">Product Profile Text:</h1><br>
				<?php echo iconv('CP1252', 'ASCII//TRANSLIT', htmlentities(stripslashes($row['description']))); ?></span>
		</div><br><br>
	</div><br><br>
    
			<!-- Horizontal Bar Start -->
			<div style="width:750px; height:2px; background-color:#605b51;"> </div>
			<!-- Horizontal Bar End -->
                            
              <h1>Image(s)</h1>
                <div>
                    <p>
                        This lead generator will use the following image or images:
                    </p>
                    <div>
                        <?
						if (!empty($row["photo2"])) {
						?>
                    	<table>
                        	<tr>
                            	<td><img src="https://landscapearchitect.com/products/images/<?php echo $row["photo"] ?>"></td>
                            	<td><img src="https://landscapearchitect.com/products/images/<?php echo $row["photo2"] ?>"></td>
                   			</tr>
                        </table>    
                    </div>
                </div><br><br>
                
                <? } else { ?>

                            	<td><img src="https://landscapearchitect.com/products/images/<?php echo $row["photo"] ?>"></td>
                    </div>
                </div><br><br>                
                
                <? } ?>
                
                

<?
	}
?>

                
				<div>
				<!-- Horizontal Bar Start -->
					<div style="width:750px; height:2px; background-color:#605b51;"> </div>
				<!-- Horizontal Bar End -->
                    <center><h1>What Will the Lead Generator Product Profile Look Like?</h1></center><br>
                </div>
         
                
				<div>
                        <center>Below are examples of Single and Double Lead Generator Product Profiles.</center>
                </div>
                                
				<div>
                     <center>(Example: Single Lead Generator Product Profiles)</center>
                </div>
                                
                <div>
					<img width="200" src="/devel/lg/Kalamazoo-hz.jpg">              
 				</div>
                
                <div>
					<img width="200" src="/devel/lg/Kalamazoo-vrt.jpg">              
 				</div>
                
				<div>
                     <center>(Example: Double Lead Generator Product Profile)</center>
                </div>                                
                <div>
					<img width="600" src="/devel/lg/Shade-Devices.jpg">              
 				</div>
               
				<div>
                	<center><h1>Can you Add an Image or an Additional Product?</h1>
                    <h1>Yes! You can!</h1><br>
                    <span style="font-family:'Times New Roman', Times, serif; font-size:14px">Depending on how many you want<br>
                    you can get them as Low as $195.00/ea.</span></center><br>

                    <center><span style="font-family:'Times New Roman', Times, serif; font-size:14px">If you would like to add additional Product Profiles<br>
					or increase from a Single to a Double Lead Generator Product Profile<br>
					contact your Advertising Representative <em>by clicking the link or calling the number below.</em></span><br><br>
                    
                    
                    <table cellspacing="10">
                    	<tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>If Your Company<br>Name Begins with:</center></td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>Your Sales Representative is:</center></td>
                        </tr>
                        <tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>A-H</center></td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center><a href="mailto:kongstad@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Kip Ongstad - (714) 979-5276 x 126</a></center></td>
                        </tr>
                        <tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>I-P</td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><a href="mailto:vchavira@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Vince Chavira - (714) 979-5276 x 111</a></center></td>
                        </tr>                        
                        <tr>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>Q-Z</td>
                        	<td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center><a href="mailto:mhenderson@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Matt Henderson - (714) 979-5276 x 114</a></center></td>
                        </tr>                        
                  </table>
                </div> 
                <div>                  
                    text           
           <form method="POST" action="<?= $this->appUrl(); ?>/saveApproval">
                <input type="hidden" name="approvalHash" value="<?= $hash ?>" />
                <input type="hidden" name="_editor_email" value="<?= $this->editor->email(); ?>" />
                <input type="hidden" name="_company_name" value="<?= $this->current->companyName(); ?>" />
                <table cellpadding="5" cellspacing="0" border="0" width="700">
                
                    <tr>
                    	<td"><hr width="100%" noshade></td>
                    </tr>                
                
                    <tr>
                        <td><br><strong>PLEASE INPUT YOUR FULL NAME: </strong>
                        <input size="65" type="text" name="signature" value="<?= $_REQUEST["signature"] ?>" /><br><br>
                        <hr width="100%" noshade><br>
                        
                        <label><span style="font-size:18px; color:#F00">Lead Generator Approval</span></label><br><br><br/>
                            <input type="submit" name="submit" value="I approve this Lead Generator" />
                        </td>
                    </tr>
                    
                    <tr>
                    	<td><hr width="100%" noshade></td>
                    </tr>
                    
                    <!------------------------------ MARL 03/23/06 ------------------------------>
                    <tr>
                    	<td>
                     		<!--<input type="button" name="d_approve" value="I do not approve" onclick="javascript: d_show()" />-->                    		
							<label><span style="font-size:18px">Lead Generator Change Request</span></label><br><br>                   		
                    		<label>The Lead Generator still needs to be edited.<br>
							Please make the following changes.</label><br>
                    		<textarea name="d_txtarea" cols="82" rows="5"></textarea> <br/>
							<input type="submit" name="submit"  value="Submit Change Request" />
                            <script type="text/javascript">
                            	function d_show(){
 									var mydiv = document.getElementById("mydiv");
 									mydiv.innerHTML = "<textarea name=\"d_txtarea\" cols=\"25\" rows=\"5\"></textarea> <br/> <input type=\"submit\" name=\"submit\" value=\"Do Not Approve\" />";
                            	}
							</script>
							<div id="mydiv"></div>
                    	</td>
                    </tr>
                </table>
                <br />
            </form>
                                           
           </div>                                    


           


<!-- Old Code End -->

<!-- Spacing added to move footer down Start -->
<table>
	<tr>
    	<td style="line-height:100px">&nbsp;</td>
    </tr>
</table>
<!-- Spacing added to move footer down End -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:absolute; left:465px; top:165px">
    	<?
		include $include_path . "banner-unvers-no-rot.inc";
		?>
	</div>      
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>