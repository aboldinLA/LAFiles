


<?
$page = 'Advertising-Information';
include '../../includes/la_top-common.php';







?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
		include("../../includes/la_header-common.inc");
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
			include("../../includes/la_banner-common.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("../../includes/la_left-side-common2.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:relative; left: 260px; top: 0px; z-index: 0; width: 700px">
			
		<?
		
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
			
	
		
		
		<table WIDTH="100%" align=center cellpadding="0" cellspacing="0"> 
			<tr>
				<td colspan="3">
					<br /><br /><br />
				 	<center><strong><font size="6" >Welcome to </font></center><br />
					<center><img src="https://landscapearchitect.com/lol-logos/LASN-Media-Group-logo.jpg" width="280" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/TLE-Media-Group-logo.jpg" width="300" /></center>
					<br />

				  <center><font size="5" >Advertising Information Request Center!</font></strong></center><center><br />

				  <p><font size="3"><i>Since 1985 Landscape Communications, Inc (LCI) has had one simple goal . . . Entertain and educate landscape professionals, and connect them to vendors and service providers. With highly focused readership groups and specifically titled media and events, LCI brings you together with your target market better than any other resource in the industry.</font></p>
					</i></center><br />
					<center><font size="2">Please complete this short form and an advertising representative will respond to your request promptly.<br /> 
						Or for immediate information call (714) 979-5276 ext. 122.</font>
					</center>
				</td>
			</tr>
			</table>
		<p><br>
		  <br>
		  
								<script type="text/javascript">
                                
                                  function checkForm(form)
                                  {
                                
                                    if(!form.captcha.value.match(/^\d{5}$/)) {
                                      alert('Please enter the CAPTCHA digits in the box provided');
                                      form.captcha.focus();
                                      return false;
                                    }
                                
                                
                                    return true;
                                  }
                                
                                </script>
		</p>
		<p>			
		  
		  <?php
				   // generate a new token for the $_SESSION superglobal and put them in a hidden field
					$newToken = generateFormToken('rqform');   
				?>	
		  
		  </p>
			<style>
				
				/*in your css hide the field so real users cant fill it in*/
				form #website{ display:none; }				
				
			</style>
		
		<?
		
		
		
		
		?>
		
		
		
		<div style="position: relative; left: 15px">
			  <form method="post" name="rqform" action="report3.php" onsubmit="return checkForm(this);">
					<!-- within your existing form add this field -->
					<input type="text" id="website" name="website"/>				  
					<input type="hidden" name="token" value="<?php echo $newToken; ?>">	
					
					<label style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; padding-left: 44px">Full Name: </label>
					<input name="fullname" pattern="[a-zA-Z0-9\s]+" type="text" style="width: 225px; height: 20px; box-shadow: 5px 5px 5px #888888" placeholder="Please Enter Your Full Name" required><br><br> 			

					<label style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px">Company Name: </label>
					<input name="coname" type="text" pattern="[a-zA-Z0-9\s]+" style="width: 225px; height: 20px; box-shadow: 5px 5px 5px #888888" placeholder="Please Enter Your Company Name" required><br><br> 
					
					<label style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; padding-left: 33px">Your E-Mail: </label>
					<input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" style="width: 225px; height: 20px; box-shadow: 5px 5px 5px #888888" placeholder="Please Enter Your E-Mail Address" required><br><br> 
					
					<label style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 16px; padding-left: 69px">Phone:<br>
					&nbsp;&nbsp;&nbsp;(xxx-xxx-xxxx)&nbsp;</label>
					<input name="phone" type="tel" pattern="^\d{3}-\d{3}-\d{4}$" style="width: 225px; height: 20px; box-shadow: 5px 5px 5px #888888" placeholder="Please Enter Your 10 Digit Phone Number" required><br><br>
					
<?
if ($request == Null){$request[] = ""; }
//$V->request($request);
?> 

<table>
  <TR>
    <TD VALIGN="top" colspan=2 style="right: 56px; position: relative;"><br>
      <center>
        <font size="5"><b>Which media are you interested in?</b></font> <br />
        <font size="2">Click on the appropriate 'Yes' box below to request the media information you are interested in.</font>
      </center>
    </TD>
  </tr>
  <tr>
    <td colspan="2">
      <center><br />&nbsp;</center><br /> </td>
  </tr>
  <tr>
    <TD VALIGN="top">
      <center>
        <IMG SRC="/lol-logos/LASN_BLUE_500.jpg" width="310" BORDER="0" ALT="Landscape Architect & Specifier News">
      </center><br />
      <center>
        <font size="2">With 90,000 Monthly Readers LASN Reaches Virtually Every Registered Landscape Architect Nationwide</font>
      </center><br>
      <center>
        <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request1" VALUE="LA Media Kit/Rates Package">
        <font size="3"><b>&nbsp;Yes!</b></font>
        </b> <br />
        <font size="2">Send me the Landscape Architect and Specifier News Media Kit and Rates Packet!</font>
      </center>
    </TD>
    <TD VALIGN="top">
      <br></br>
      <center>
        <IMG SRC="https://landscapearchitect.com/lol-logos/la-details-logo.jpg" width="270" ALT="LA Details" BORDER="0">
      </center><br>

      <center>
        <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request9" VALUE="LA Details Media Kit/Rates Package">
        <font size="3"><b>&nbsp;Yes!</b> <br />
          <font size="2">Send me the LA Details Media Kit <br />and Rates Packet!</font>
      </center>
  </tr>
	

	<tr height="60px">&nbsp;</tr>
	
	<TR>
    <TD VALIGN="top">
      <br>
      <center>
        <IMG SRC="https://landscapearchitect.com/lol-logos/LandscapeArchitect-Online-Dot_Com-1200.jpg" width="225" ALT="LandscapeArchitect.com" BORDER="0" />
      </center><br />
      <center>
        <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request10" VALUE="LOL Media Kit/Rates Package">
        <font size="3"><b>&nbsp;Yes!</b> </font><br />
        <font size="2">Send me the LandscapeArchitect.com Media Kit and Rates Packet!</font>
      </center>
    </TD>
		<TD VALIGN="top">
				<br>
				<center>
					<IMG SRC="https://landscapearchitect.com/lol-logos/Landscape-Architect-Weekly-logo.jpg" width="225" ALT="LA Weekly" BORDER="0" />
				</center><br />
				<center>
					<INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request11" VALUE="LOL Media Kit/Rates Package">
					<font size="3"><b>&nbsp;Yes!</b> </font><br />
					<font size="2">Send me the LA Weekly Media Kit and Rates Packet!</font>
				</center>
		 </TD>
  </TR>
	
		<tr height="30px">&nbsp;</tr>
	
	<TR>
    <TD VALIGN="top">
      <br /><br />
      <center>
        <a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php" target="_blank">
          <IMG SRC="/lol-logos/TLE-Logo-BLANK.jpg" width="310" ALT="TLE" BORDER="0">
        </a>
      </center><br><br />
      <center>
        <font size="2">The #1 Regional Trade Show and Educational
          <br />Conference for Landscape Decision Makers in <br /> Long Beach, California</font>
      </center><br /><br />
      <center>
        <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request7" VALUE="TLE Exhibitor Prospectus">
        <font size="3"><b>&nbsp;Yes!</b> </font><br />
        <font size="2">Send me the Landscape Expo Media Kit <br />and Rates Packet!</font>
      </center>
    </TD>
		<TD VALIGN="top">
				<br>
				<center>
					<font size="6"><b>TLE Quarterly</b> </font><br>
					<font size="4"><b>formerly Landscape Contractor</b> </font>
				</center><br />
				<center>
					<INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request12" VALUE="LOL Media Kit/Rates Package">
					<font size="3"><b>&nbsp;Yes!</b> </font><br />
					<font size="2">Send me the TLE Quarterly (formerly Landscape Contractor)<br>Media Kit and Rates Packet!</font>
				</center>
		 </TD>
  </TR>
	
	
		<tr height="60px">&nbsp;</tr>
	
	<TR>
    <TD VALIGN="top">
      <br>
      <center>
        <IMG SRC="https://landscapearchitect.com/lol-logos/TLE-Weekly-Header-20180108.jpg" width="225" ALT="LandscapeArchitect.com" BORDER="0" />
      </center><br />
      <center>
        <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request13" VALUE="LOL Media Kit/Rates Package">
        <font size="3"><b>&nbsp;Yes!</b> </font><br />
        <font size="2">Send me the TLE Weekly Media Kit and Rates Packet!</font>
      </center>
    </TD>
		<TD VALIGN="top">
      <br>
      <center>
        <IMG SRC="/imgz/eblast_logo_sm.jpg" width="225" ALT="Landscape Superintendent &amp; Maintenance Professional" BORDER="0" />
      </center><br />
      <center>
        <font size="2">Demographic and/or Geographically Targeted <br />Email Marketing</font>
      </center><br /><br />
      <center>
        <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request8" VALUE="LOL Media Kit/Rates Package">
        <font size="3"><b>&nbsp;Yes!</b> </font><br />
        <font size="2">Send me the E-Blast Media Kit and Rates Packet!</font>
      </center>
    </TD>
  </TR>
	
	
 
	<tr height="30px">&nbsp;</tr>

  <TR>
     <TD VALIGN="top">
      <br>
<!--
      <center>
        <IMG SRC="/imgz/eblast_logo_sm.jpg" width="225" ALT="Landscape Superintendent &amp; Maintenance Professional" BORDER="0" />
      </center><br />
      <center>
        <font size="2">Demographic and/or Geographically Targeted <br />Email Marketing</font>
      </center><br /><br />
      <center>
        <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request8" VALUE="LOL Media Kit/Rates Package">
        <font size="3"><b>&nbsp;Yes!</b> </font><br />
        <font size="2">Send me the E-Blast Media Kit and Rates Packet!</font>
      </center>
-->
    </TD>
    <td>

      <br /><br /><br /><br /><br />
      <table width="350" border="0">
        <tr>
          <td colspan="2">
            <font size="4">
              <center>
                <B>Contact Preferences</B>:</center>
            </font><br />
          </td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>
            <font size="2">
              <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" NAME="contact_preferences1" VALUE="Media Kit in Mail">&nbsp;Send Media Kit in Mail
              <BR>
              <INPUT TYPE="CHECKBOX" style="width:16px;height:16px" NAME="contact_preferences1" VALUE="Media Kit in Email">&nbsp;Email Media Kit
              <BR>
              <INPUT TYPE="CHECKBOX" style="width:15px;height:15px" NAME="contact_preferences2" VALUE="Call Me">&nbsp;Call Me</font>
          </td>
        </tr>
        <tr>
          <td align="right">
            <font size="2">
              <B>Comments</B>:&nbsp;</font>
          </td>
          <td>
            <TEXTAREA COLS="36" NAME="note" ROWS="5" value="<? echo $note; ?>" style="background-color:#A5A4A4"><?echo $note;?></TEXTAREA>
          </td>
        </tr>
        <tr>
          <td style="line-height: 10px">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">

            <div class="g-recaptcha" data-sitekey="6LfbIFoUAAAAAFxVEEkqOVzAJvDpfaag82j8NNuy" style="position: relative; left: 70px; top: 0px"></div>








            <div align="left" style="width:500px; height:30px; position: relative; left: -130px; top: 5px">
              <center><input type="submit" value="Submit" name="submit" name="submit" style="height:30px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#FFFFFF; background-color:#000000; padding-left:10px; box-shadow: 5px 5px 5px #888888"
                /></center>
            </div>

          </td>
        </tr>
      </table>






      </form>


      </div>




    </td>



  </tr>
</table><br>
	
	<div style="position: relative; left: 0px">
		<? include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
    include("../../includes/lo_footer-main2-new.inc");
?>



