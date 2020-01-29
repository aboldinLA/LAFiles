                        <?php

						echo '<select>';

						 $servername = "localhost";
						$username = "land_patchew";
						$password = "59q2GB6k$3";
						$dbname = "land_landscap_lollive";

					// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
						if ($conn->connect_error) {
								 die("Connection failed: " . $conn->connect_error);
						} 


                        $sql = "SELECT distinct `week`, `created` FROM leads WHERE `vendor_id`='4582' ORDER BY `leads`.`created` DESC LIMIT 0, 50";
                        $result = $conn->query( $sql );
				  		
				  		$$datenew = 0;

                        while ( $row = mysqli_fetch_assoc( $result ) ) {


                          $a = $row[ 'week' ];
                          $weekcsv = $a;

                          date_default_timezone_set( 'America/Los_Angeles' );
                          $yWeek = substr( $a, -4 );
                          $mWeek = substr( $a, 0, 2 );
                          $dWeek = substr( $a, 2, 2 );
                          $date = $yWeek . '-' . $mWeek . '-' . $dWeek;
                          $date1 = strtotime( $date );
                          $date2 = strtotime( "+7 day", $date1 );
							
							

                          $leftpart = '&nbsp;&nbsp;' . date( 'm.d.y', $date1 ) . ' - ' . date( 'm.d.y', $date2 );
							
						  $dlist = '<option name="dlistweek" value="' . $a . '">' . $leftpart . '</option>';							
							
							if ($date1 != $datenew) {
																
                          		echo $dlist . '<br>';
								
								$datenew =  $date1;
								
							}

                        }

						echo '</select>';


                        ?>