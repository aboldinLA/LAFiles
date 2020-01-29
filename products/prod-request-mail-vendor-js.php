<?

// from seminarpost start

	$selected1 = $_POST['selected1'];
	$selected2 = $_POST['selected2'];
	$selected3 = $_POST['selected3'];
	$selected4 = $_POST['selected4'];
	$selected5 = $_POST['selected5'];
	$selected6 = $_POST['selected6'];
	$selected7 = $_POST['selected7'];
	$selected8 = $_POST['selected8'];
	$selected9 = $_POST['selected9'];
	$selected10 = $_POST['selected10'];
	$selected11 = $_POST['selected11'];
	$selected12 = $_POST['selected12'];
	$name02 = $_POST['name'];
	$email02 = $_POST['email'];
	$phone02 = $_POST['phone'];
	
	
				if (!empty($selected1)) {
										$selectedco1 = $selected1;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key = $selectedco1;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company =  $row[company_name];
													$emailco = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco;
                                                        
                                                        $subject = 'Connecting ' . $company . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco1 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}
					
				if (!empty($selected2)) {
										$selectedco2 = $selected2;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key02 = $selectedco2;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key02 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company02 =  $row[company_name];
													$emailco02 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco02;
                                                        
                                                        $subject = 'Connecting ' . $company02 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company02 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco2 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}					
	
				if (!empty($selected3)) {
										$selectedco3 = $selected3;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key03 = $selectedco3;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key03 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company03 =  $row[company_name];
													$emailco03 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco03;
                                                        
                                                        $subject = 'Connecting ' . $company03 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company03 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco3 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}	
					
				if (!empty($selected4)) {
										$selectedco4 = $selected4;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key04 = $selectedco4;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key04 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company04 =  $row[company_name];
													$emailco04 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco04;
                                                        
                                                        $subject = 'Connecting ' . $company04 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company04 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco4 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
					
				if (!empty($selected5)) {
										$selectedco5 = $selected5;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key05 = $selectedco5;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key05 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company05 =  $row[company_name];
													$emailco05 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco05;
                                                        
                                                        $subject = 'Connecting ' . $company05 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company05 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco5 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
					
				if (!empty($selected6)) {
										$selectedco6 = $selected6;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key06 = $selectedco6;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key06 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company06 =  $row[company_name];
													$emailco06 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco06;
                                                        
                                                        $subject = 'Connecting ' . $company06 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company06 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco6 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
					
				if (!empty($selected7)) {
										$selectedco7 = $selected7;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key07 = $selectedco7;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key07 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company07 =  $row[company_name];
													$emailco07 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco07 = $row[email];
                                                        
                                                        $subject = 'Connecting ' . $company07 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company07 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco7 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
					
				if (!empty($selected8)) {
										$selectedco8 = $selected8;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key08 = $selectedco8;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key08 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company08 =  $row[company_name];
													$emailco08 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco08 = $row[email];
                                                        
                                                        $subject = 'Connecting ' . $company08 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company08 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco8 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
					
				if (!empty($selected9)) {
										$selectedco9 = $selected9;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key09 = $selectedco9;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key09 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company09 =  $row[company_name];
													$emailco09 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco09;
                                                        
                                                        $subject = 'Connecting ' . $company09 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company09 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco9 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
					
				if (!empty($selected10)) {
										$selectedco10 = $selected10;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key10 = $selectedco10;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key10 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company10 =  $row[company_name];
													$emailco10 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco10;
                                                        
                                                        $subject = 'Connecting ' . $company10 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company10 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco10 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
				if (!empty($selected11)) {
										$selectedco11 = $selected11;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key11 = $selectedco11;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key11 . "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company11 =  $row[company_name];
													$emailco11 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco11 = $row[email];
                                                        
                                                        $subject = 'Connecting ' . $company11 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company11 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco11 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
				if (!empty($selected12)) {
										$selectedco12 = $selected12;
										
										// Get Coompany Start

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


										// start for the banner add counting and getting from table

											$key12 = $selectedco12;


											$sql = "SELECT * FROM new_vendor WHERE id ='" . $key12. "'";
											$result = $conn->query($sql);									
									
										// Person Info Section
											while($row = mysqli_fetch_array($result)) {
												
													$company12 =  $row[company_name];
													$emailco12 = $row[email];
											}
		
                                                        // Mail Start
                                                        
                                                        
                                                        $to = $emailco12;
                                                        
                                                        $subject = 'Connecting ' . $company12 . ' with ' . $name02;
                                                        
                                                        $headers = 'From: LandscapeOnline Sales Lead <LOSalesLeads@Landscapeonline.com>' ."\r\n";
														$headers .= 'Bcc: all.sales@landscapeonline.com' . "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        
                                                        $message = '<html><body>';
                                                        
                                                        $message .= '<span style="font-size:18px">Connecting ' . $company12 . ' with ' . $name02 . '<br /><br><br>
                                                                    Company Sent To ID is: ' . $selectedco12 . ' <br>
                                                                    My Name is: ' . $name02 . ' <br>
                                                                    My email is: <a href="mailto:'. $email02 .'">' . $email02 . '</a> <br>
                                                                    My Phone Number is: ' . $phone02 . ' <br><br><br>
                                                                    <span style="font-size:10px">This email was generated from your Premium Lead Company Display at LandscapeOnline.com.</span>';
                                                        
                                                        $message .= '</body></html>';
                                                        
                                                        mail($to, $subject, $message, $headers);
                                                     
                                                        
                                                        // Mail End		
		
		
					}								
					
					
								
	
	
	
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
					<center><h3>For Product Information from: <? echo $company . "&nbsp;" . $company02 . "&nbsp;" . $company03 . "&nbsp;" . $company04 . "&nbsp;" . $company05 . "&nbsp;" . $company06 . "&nbsp;" . $company07 . "&nbsp;" . $company08 . "&nbsp;" . $company09 . "&nbsp;" . $company10 . "&nbsp;" . $company11 . "&nbsp;" . $company12 ?></h3></center
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
      