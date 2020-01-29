<?

// from seminarpost start

	$fname5 = $_GET['fname4'];
	$lname5 = $_GET['lname4'];
	$coname5 = $_GET['coname4'];
	$zip5 = $_GET['zip4'];
	$state5 = $_GET['state4'];
	$email5 = $_GET['email4'];
	$phone5 = $_GET['phone4'];
	$comment5 = $_GET['comment4'];
	$mainco5 = $_GET['mainco4'];
	$mainem5 = $_GET['mainem4'];
	$mainid5 = $_GET['mainid4'];
	
	$emailse = 'jshort@landscapeonline.com';
	
	


	$to = 'jshort@landscapeonline.com';
	$subject = 'Vendor Information Request';
	$msg = "$fname5 $lname5 is requesting product information from : $mainco5\n" .
	"Personse Name: $fname5 $lname5 \n" .
	"Company sent to ID: $mainid5 \n".
	"My Company: $coname5 \n".
	"My Email: $email5 \n".
	"My Phone: $phone5 \n".
	"My State: $state5 \n".
	"My Comnent: $comment5 \n";
	
mail ($to, $subject, $msg, 'From:' . $email5);


include("lo_top-test.inc");

?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	    <?
	include $include_path . "lo_header-main2-js.inc";
	?>
 
	</div>
    
		<!-- Content -->
                                    
		<div style="position:relative; top:0px">
			<header>
            	<center><img src="https://landscapearchitect.com/lol-logos/LO_600-brown.jpg"></center><br><br>
				<center><h2>Email Sent</h2></center>
					<center><h3>For Product Information from: <? echo $mainco5 ?></h3></center>
			</header> 
                                    
			<section>
			<!-- Main2 -->
				<center><h1 id="headh1">Product Information Request Confirmation</h1></center>
                
                
				<center><div id="main2">
				<div><br>
                                
                <!-- Horizontal Bar Start -->
                <div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
                <!-- Horizontal Bar End -->
                                     
				<center><h4>If you do not recieve information<br>
				or need further asstiance<br>
				Please contact<br>
				714-979-5276 x113</h4></center><br><br> 
                
                                    
				<!-- Mail to User Start -->
                                                    
                                                        <?
                                                        
                                                        // Start
                                                        
                                                               
                                                        
                                                        $to = $mainem5;
                                                        
                                                        $subject = 'Connecting ' . $coname5 . ' with ' . $mainco5;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Cc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $coname5 . ' with ' . $mainco5 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $mainid5 . ' <br>
                                                                    My Company is: ' . $coname5 . ' <br>
                                                                    My Name is: ' . $fname5 . ' ' . $lname5 . ' <br>
                                                                    My email is: <a href="mailto:'. $email5 .'">' . $email5 . '</a> <br>
                                                                    My Phone Number is: ' . $phone5 . ' <br>
                                                                    My State is: ' . $state5. ' <br>
                                                                    My Message is: ' . $comment5 . ' </span><br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your vendor profile at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // End
                                                        
                                                        
                                                        
                                                        ?>                                                                     
                                    
                                    
				<!-- Mail to User End -->
                                        
				</div>  									
                                    
				<!-- Content End -->
				</section>  						
		</div>
      
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:absolute; left:725px; top:223px">
    	<?
		include $include_path . "banner-ads-norot-listing.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1">
	<? // include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>      
      