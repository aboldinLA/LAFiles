
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;



$prodName = $_POST['product_name'];
$coId = $_POST['id'];
$prodId = $_POST['prodId'];
$coName = $_POST['coName'];
$xlistNum = $_POST['xlist'];
$webAdd = $_POST['web_photo'];
$seriesProd = $prodId;
$import = 1;

    


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LA Name Description Upload</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles -->
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>

      
									<?
      
                                        echo $prodNum3 . "dog";
      
                                        echo $webAdd;
      
      
                                        $link = mysqli_connect("localhost", "landscap_lol", "meow2meow", "landscap_lollive");

                                        // Check connection
                                        if($link === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }

                                        // Attempt insert query execution
                                        $sql = "INSERT INTO vendor_product (vendor_id, product_name, imported, xlist, web_photo, company_name, cadd, cadd_2, cadd_3, pdff, skup, vwxx, mediap, zipp, series_product)
                                        VALUES ('" . $coId . "', '" . $prodName . "', '" . $import . "', '" . $xlistNum . "', '" . $webAdd . "', '" . $coName . "', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', '" . $seriesProd . "')";
      
                                        if(mysqli_query($link, $sql)){
                                            echo "<br><center><h3>Your Product is being Created.</h3><br></center>";
                                        } else{
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                        }
      
      
										// Vendor Start

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
      
      
                                        $sql2 = "SELECT * FROM vendor_product WHERE ID = (SELECT MAX(ID) FROM vendor_product)";
                                        $result2 = $conn->query($sql2);
      
                                        while($row = mysqli_fetch_array($result2)) {
                                            
                                            $prodId = $row['id'];
                                                                                        
                                            
                                        }

                                            
      
                                        $num = $coId;
      
                                        $num2 = $prodId;
      

                                        // Close connection
                                        mysqli_close($link);

												
												
									?>  
      
      
                                  <script type='text/javascript'>
                                      
                                      
                                    javascript:self.close();window.opener.location.reload(true);

    
                                
                                      
                                  </script>       
      
      
      
  </body>
</html>
