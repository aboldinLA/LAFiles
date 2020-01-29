<?php
$deny = array("188.120.247.80", "82.146.41.82", "78.24.221.247", "134.255.235.242", "62.109.18.238", "78.24.216.237", "91.215.152.97", "91.215.152.118", "82.146.61.221", "149.154.69.37", "207.244.108.244", "217.79.178.92", "185.228.232.194", "185.159.129.9", "193.201.224.209", "217.79.178.209", "217.79.178.177", "188.120.234.46", "185.130.104.209");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://landscapearchitect.com/");
   exit();
} ?>



<?
include("lo_top-main2-art-new.inc");
include('lo_common_new.inc');
?>


<!-- Popup Section Start -->  

			<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
			<style type="text/css">
			#overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #000;
			filter:alpha(opacity=70);
			-moz-opacity:0.7;
			-khtml-opacity: 0.7;
			opacity: 0.7;
			z-index: 90100;
			display: none;
			}
			.cnt223 a{
			text-decoration: none;
			}
			.popup{
			width: 100%;
			margin: 0 auto;
			display: none;
			position: fixed;
				left: 0px;
			z-index: 90101;
			}
			.cnt223{
			min-width: 600px;
			width: 600px;
			min-height: 150px;
			margin: 100px auto;
			background: #f3f3f3;
			position: relative;
			z-index: 90103;
			padding: 10px;
			border-radius: 5px;
			box-shadow: 0 2px 5px #000;
			}
			.cnt223 p{
			clear: both;
			color: #000000;
			text-align: justify;
			}
			.cnt223 p a{
			color: #FFFFFF;
			font-weight: bold;
			}
			.cnt223 .x{
			float: right;
			height: 35px;
			left: 22px;
			position: relative;
			top: -25px;
			width: 34px;
			}
			.cnt223 .x:hover{
			cursor: pointer;
			}
			</style>

			<script type='text/javascript'>

								   // ++++++++++++++++++++++++++++++++++++++++++   

									// Written by: Michael Regan   
									// Website   : www.owt4nowt.ca   
									//   
									// Released under the GPL.   
									// ++++++++++++++++++++++++++++++++++++++++++   
									var key_value = "myTestCookie=true";   
									var foundCookie = 0;   

									// Get all the cookies from this site and store in an array   
									var cookieArray = document.cookie.split(';');   

										// Walk through the array   
										for(var i=0;i < cookieArray.length;i++)   
											{   
												   var checkCookie = cookieArray[i];   
											// Remove any leading spaces   
												   while (checkCookie.charAt(0)==' ')   
												   {   
													 checkCookie = checkCookie.substring(1,checkCookie.length);   
												   }   

											// Look for cookie set by key_value   
													if (checkCookie.indexOf(key_value) == 0)   
												   {   




													   // The cookie was found so set the variable   
													   foundCookie = 1;   
												   }   
										}   
										// Check if a cookie has been found   
										if ( foundCookie == 0)   
										{   


											// The key_value cookie was not found so set it now  


											document.cookie = key_value;  


													$(function(){
													var overlay = $('<div id="overlay"></div>');
													overlay.show();
													overlay.appendTo(document.body);
													$('.popup').show();
													$('.close').click(function(){
													$('.popup').hide();
													overlay.appendTo(document.body).remove();
													return false;
													});


														setTimeout(function()
														{

														   $('.popup').hide();
															overlay.appendTo(document.body).remove();


														}, 10000);


													$('.x').click(function(){
													$('.popup').hide();
													overlay.appendTo(document.body).remove();
													return false;
													});
													});

										}    	


			</script>

			<!-- Modal Start -->  

				<div class='popup'>
				<div class='cnt223'>
				<p>
					<a href="https://landscapearchitect.com/research/Ad-Transfer/transfer/belgardpop.html" target="new"><img src="https://landscapearchitect.com/banner/belgard-popup.jpg"><img src="http://badtreecomic.com/images/LODot.jpg"></a>
				<br/>
				<br/>
				<a href='' class='close'>Close</a>
				</p>
				</div>
				</div>

			<!-- Modal End -->  

<!-- Popup Section End -->  







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
		include("lo_top-main2-side-new.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 25px; top: 0px; z-index: 0; width: 700px">
			

		 								<style>
												.viewWidth1 {
													width:763px;
												}
												.viewWidth2 {
													width:1212px;
												}
												.viewWidth3 {
													width:500px;
												}
											
										 </style>			
			
			
			
				
									<? tablearticleMain() ?>	
	
	
	</div>			
				
	<div style="position:relative; left: 15px; top: 25px; z-index: 0; width: 700px">
			
				<div style='width:775px; height:2px; background-color:#605b51;'> </div><br>
		
		
				<? tablekeySearch() ?>
		
		
	</div>
				
				
			
			
	<div style="position:relative; left: 15px; top: 25px; z-index: 0; width: 700px">
			
				<div style='width:775px; height:2px; background-color:#605b51;'> </div><br>
				
                    			<center><h2>Related Stories</h2></center>
                    			
									<? tablerelatedArticle() ?>	
	
	
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





