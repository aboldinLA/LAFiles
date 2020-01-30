
<?
include("lo_top-main2-prod.inc");


		
	    session_start();
    
    function getRealIp() {
       if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
         $ip=$_SERVER['HTTP_CLIENT_IP'];
       } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
         $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
       } else {
         $ip=$_SERVER['REMOTE_ADDR'];
       }
       return $ip;
    }

    function writeLog($where) {
    
    	$ip = getRealIp(); // Get the IP from superglobal
    	$host = gethostbyaddr($ip);    // Try to locate the host of the attack
    	$date = date("d M Y");
    	
    	// create a logging message with php heredoc syntax
    	$logging = <<<LOG
    		\n
    		<< Start of Message >>
    		There was a hacking attempt on your form. \n 
    		Date of Attack: {$date}
    		IP-Adress: {$ip} \n
    		Host of Attacker: {$host}
    		Point of Attack: {$where}
    		<< End of Message >>
LOG;
// Awkward but LOG must be flush left
    
            // open log file
    		if($handle = fopen('https://landscapearchitect.com/advertising/hacklog.log', 'a')) {
    		
    			fputs($handle, $logging);  // write the Data to file
    			fclose($handle);           // close the file
    			
    		} else {  // if first method is not working, for example because of wrong file permissions, email the data
    		
    			$to = 'jshort@landscapeonline.com';  
            	$subject = 'HACK ATTEMPT';
            	$header = 'From: jshort@landscapeonline.com';
            	if (mail($to, $subject, $logging, $header)) {
            		echo "Sent notice to admin.";
            	}
    
    		}
    }

    function verifyFormToken($form) {
        
        // check if a session is started and a token is transmitted, if not return an error
    	if(!isset($_SESSION[$form.'_token'])) { 
    		return false;
        }
    	
    	// check if the form is sent with token in it
    	if(!isset($_POST['token'])) {
    		return false;
        }
    	
    	// compare the tokens against each other if they are still the same
    	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
    		return false;
        }
    	
    	return true;
    }
    
    function generateFormToken($form) {
    
        // generate a token from an unique value, took from microtime, you can also use salt-values, other crypting methods...
    	$token = md5(uniqid(microtime(), true));  
    	
    	// Write the generated token to the session variable to check it against the hidden field when the form is sent
    	$_SESSION[$form.'_token'] = $token; 
    	
    	return $token;
    }
    
    // VERIFY LEGITIMACY OF TOKEN
    if (verifyFormToken('rqform')) {
    
        // CHECK TO SEE IF THIS IS A MAIL POST
        if (isset($_POST['URL-main'])) {
        
            // Building a whitelist array with keys which will send through the form, no others would be accepted later on
            $whitelist = array('token','req-name','req-email','typeOfChange','urgency','URL-main','addURLS', 'curText', 'newText', 'save-stuff', 'mult');
            
            // Building an array with the $_POST-superglobal 
            foreach ($_POST as $key=>$item) {
                    
                    // Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
            		if (!in_array($key, $whitelist)) {
            			
            			writeLog('Unknown form fields');
            			die("Hack-Attempt detected. Please use only the fields in the form");
            			
            		}
            }
            
            
            
            
            
            
            // Lets check the URL whether it's a real URL or not. if not, stop the script
            
            if(!filter_var($_POST['URL-main'],FILTER_VALIDATE_URL)) {
            			writeLog('URL Validation');
            		die('Hack-Attempt detected. Please insert a valid URL');
            }
    
    
    
    
    
            // SAVE INFO AS COOKIE, if user wants name and email saved
            
            $saveCheck = $_POST['save-stuff'];
            if ($saveCheck == 'on') {
                setcookie("WRCF-Name", $_POST['req-name'], time()+60*60*24*365);
                setcookie("WRCF-Email", $_POST['req-email'], time()+60*60*24*365);
            }
            
            
            
            
            // PREPARE THE BODY OF THE MESSAGE

			$message = '<html><body>';
			$message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['req-name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['req-email']) . "</td></tr>";
			$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . strip_tags($_POST['typeOfChange']) . "</td></tr>";
			$message .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['urgency']) . "</td></tr>";
			$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";
			$addURLS = $_POST['addURLS'];
			if (($addURLS) != '') {
			    $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
			}
			$curText = htmlentities($_POST['curText']);           
			if (($curText) != '') {
			    $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
			}
			$message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";
			
			
			
			
			//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
			
			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($_POST['req-email'])))) { 
                $cleanedFrom = trim(strip_tags($_POST['req-email'])); 
            } else { 
                return "The email address you entered was invalid. Please try again!"; 
            } 
			
			
            
            
            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'JUNKKKKK@gmail.com';
			
			$subject = 'Website Change Reqest';
			
			$headers = "From: " . $cleanedFrom . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
              echo 'Your message has been sent.';
            } else {
              echo 'There was a problem sending the email.';
            }
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();
        
        }
    } else {
    
   		if (!isset($_SESSION[$form.'_token'])) {
   		
   		} else {
   			echo "Hack-Attempt detected. Got ya!.";
   			writeLog('Formtoken');
   	    }
   
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
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side2-js3.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 15px; top: 0px; z-index: 0; width: 700px">
		
		<center><h1 style="font-family: Helvetica, Arial, 'sans-serif'">Welcome To</h1></center>
		
		<center><img width="90%" src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg"></center>
		
		<center><h1 style="font-family: Helvetica, Arial, 'sans-serif'">Photo Editing Center</h1></center><br>
		
		<center><h3 style="font-family: Helvetica, Arial, 'sans-serif'">Choose to Edit Existing Photo's or Add New Photo's</h3></center><br><br>
		
		<hr noshade><br>
		
		<h3 style="font-family: Helvetica, Arial, 'sans-serif'">Existing Photo's</h3><br><br>
		
		
			
									<?
									
										// Article Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 


										// start article from table
							
											$key2 = $_GET[number];							
											//$key2 = "28909";

											$sql = "select * from vendor_product where vendor_id='" . $key2 . "'";
											$result = $conn->query($sql);
							
											
									
										// banner rotating section
		
											   echo "<table cellspacing='5px'><tr>";
											   $xx = 0;
												$zCount = 0;		
							
											while($row = mysqli_fetch_array($result)) {
											
												
												   echo "<td width='250px'><a href='https://landscapearchitect.com/products/listing-a.php?number=" .$row['vendor_id']. "' target='_blank'><figure><img style='width: 90%' src='https://landscapearchitect.com/products/images/".$row['photo']."'><br><br><figcaption style='90%'><span style='font-family:Helvetica, Arial, sans-serif; font-size:12px'>" .$row['description']. "</span></figcaption><a><br><button href='#' onClick='' style='padding: 3px; background-color: darkgoldenrod'>Edit Photo</button></td>";
												   $xx++;
												   $zCount++;
												   if ($xx % 3 == 0) { echo "</tr><tr><td style='line-height: 40px'>&nbsp;</td></tr><tr>";
												   $zCount++;
																	 }
												
										
										
									 } 
												
											   	echo "</tr></table><br>"; 
												echo "<div style='width:750px; height:2px; background-color:#605b51;'> </div><br>";																
												
									?>			
		
		<h3 style="font-family: Helvetica, Arial, 'sans-serif'">Add A Photo</h3><br><br>
		
	
						<script src="jquery.js"></script>
						<script src="javascript.js"></script>
						<link rel="stylesheet" type="text/css" href="style-photo.css" />
						<link rel="stylesheet" type="text/css" href="pacifico.css" />



						<div class="content">
							<div id="drop-files" ondragover="return false">
								Drop Images Here
							</div>

							<div id="uploaded-holder">
								<div id="dropped-files">
									<div id="upload-button">
										<a href="#" class="upload">Upload!</a>
										<a href="#" class="delete">delete</a>
										<span>0 Files</span>
									</div>
								</div>
								<div id="extra-files">
									<div class="number">
										0
									</div>
									<div id="file-list">
										<ul></ul>
									</div>
								</div>
							</div>

							<div id="loading">
								<div id="loading-bar">
									<div class="loading-color"> </div>
								</div>
								<div id="loading-content">Uploading file.jpg</div>
							</div>

							<div id="file-name-holder">
								<ul id="uploaded-files">
									<h1>Uploaded Files</h1>
								</ul>
							</div>
						</div>	
	
	
	
	
	
	

	
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




