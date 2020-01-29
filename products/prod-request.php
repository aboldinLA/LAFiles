<?


// from seminarpost start

	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$coname = $_GET['coname'];
	$email2 = $_GET['emailB2'];
	$phone = $_GET['phone'];
	$state = $_GET['state'];
	$mess2 = $_GET['mess'];
	$comail = $_GET['comail'];
	$coname2 = $_GET['coname2'];
	$email = 'jshort@landscapeonline.com';
	
	


	$to = 'jshort@landscapeonline.com';
	$subject = 'Vendor Test';
	$msg = "$fname $lname is requesting product information from : $coname2\n" .
	"Personse Name: $fname $lname \n" .
	"My Company: $coname \n".
	"My Email: $email \n".
	"My Phone: $phone \n".
	"My Sate: $state \n".
	"My Message: $mess2";
	
mail ($to, $subject, $msg, 'From:' . $email);


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
					<center><h3>For Product Information from: <? echo $coname2 ?></h3></center>
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
                                                        
                                                               
                                                        
                                                        $to = $comail;
                                                        
                                                        $subject = 'LO Info Request From' . $fname . $lname;
                                                        
                                                        $headers = "From: " . $email2 . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">' . $fname . ' &nbsp; ' . $lname . ' at E-Mail address - ' . $email2 . ' , is requesting product information.<br /><br><br>
                                                                    My Company is: ' . $coname . ' <br>
                                                                    My Phone Number is: ' . $phone . ' <br>
                                                                    My State is: ' . $state. ' <br>
                                                                    My Message is: ' . $mess2 . ' </span><br><br><br>
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
      