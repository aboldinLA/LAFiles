<?


               include('connect3.inc');


                                    // Check if Valid Password


                                        $sql = "select * from subscribe where pass='" . $passwordUser . "'";
                                        $result = $conn->query($sql);
                                        $rowcount=mysqli_num_rows($result);

                                            if ($rowcount != 0) {

                                                // Get User Id

                                                while($row = mysqli_fetch_array($result)) {

                                                    $number = $row['id'];

                                                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://landscapearchitect.com/template-subscription-renew-js.php?id='.$number.'">';    
                                                    exit;   


                                                } 

                                            } else {

                                                echo "Wrong Password" . $passwordUser;

                                            }


        


		

?>












