<?
session_start();

include '../../../modules/configuration.inc';
include '../../../modules/db.php';

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


$prodNum3 = $_POST['prodNum'];
$prodName = $_POST['product_name'];
$prodDesc = $_POST['description'];
$xlistCat2 = $_POST['xlistCat'];
    


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LO Name Description Upload</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles -->
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>

      
									<?
      
                                        echo $prodNum3;
                                        echo $_POST['xlistCat'];
      
      
                                        //$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

                                        // Check connection
                                        if($conn === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }

                                        // Attempt insert query execution
                                        $sql = "UPDATE vendor_product SET xlist = '" . $xlistCat2 . "' WHERE id = '" . $prodNum3 . "';
                                ";
                                        if(mysqli_query($conn, $sql)){
                                            echo "<br><center><h3>Category has been updated</h3><br></center>";
                                        } else{
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                        }

                                        // Close connection
                                        mysqli_close($conn);

												
												
									?>  
      
      
 
     
                                  <script type='text/javascript'>
                                      
                                    javascript:self.close();window.opener.location.reload(true);
                                      
                                  </script>      
      
      
      
      
  </body>
</html>
