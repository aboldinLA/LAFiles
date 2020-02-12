
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


$proNum3 = $prodNum2
    


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LO Active</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles -->
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>

      
									<?
      
    
                                        echo $prodNum3;
      
      
                                        $link = mysqli_connect("localhost", "landscap_lol", "meow2meow", "landscap_lollive");

                                        // Check connection
                                        if($link === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }


                                        $sql22 = "select * from vendor_product vendor_id='" . $vendNum2 . "' and top='top'";
                                        $result22 = $conn->query($sql22); 

                                            while($row = mysqli_fetch_array($result22)) {
                                                
                                                
                                                $oldProduct = $row[id];
                                                
                                                // Set old top product back to 0
                                                $sql = "UPDATE vendor_product SET top = '0' WHERE id = '" . $oldProduct . "'";
                                                if(mysqli_query($link, $sql)){
                                                    echo "<br><center><h3>Product is now active</h3><br></center>";
                                                } else{
                                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                }
                                                
                                                
                                                    
                                                }




                                        // Attempt assign new product
                                        $sql = "UPDATE vendor_product SET top = 'top' WHERE id = '" . $proNum3 . "'";
                                        if(mysqli_query($link, $sql)){
                                            echo "<br><center><h3>Product is now active</h3><br></center>";
                                        } else{
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                        }

                                        // Close connection
                                        mysqli_close($link);

												
												
									?>  
      
      
 
     
                                  <script type='text/javascript'>
                                      
                                    javascript:self.close();window.opener.location.reload(true);
                                      
                                  </script>      
      
      
      
      
  </body>
</html>
