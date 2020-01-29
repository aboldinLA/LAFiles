<?

                                            include '../includes/connect4.inc';                               

                
											$sql = "SELECT * FROM banner_ups_new WHERE ROS='yes' AND id != '$adNum' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
                
                                            $bCount = 1;
												
											while($row = mysqli_fetch_array($result)) {
                                                
                                                                if ($bCount < 3) {
                                                                    
                                                                    echo '<img src="/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:15%;" /><div class="space10 hidden-xs clearfix"></div><br>';
                                                                    
                                                                    $viewsNew = $row['Views'] + 1;
                                                                    
                                                                    $sql = "UPDATE banner_ups_new SET Views='" . $viewsNew . "' WHERE id=" . $row['id'] . "";

                                                                        if ($conn->query($sql) === TRUE) {
                                                                            echo " ";
                                                                        } else {
                                                                            echo "Error updating record: " . $conn->error;
                                                                        }
                                                                    
                                                                    $bCount++;
                                                                    
                                                                }
                                                
											} 

?>

