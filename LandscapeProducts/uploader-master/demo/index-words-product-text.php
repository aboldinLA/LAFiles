
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


$prodNum3 = $_POST['prodNum'];
// Name Translation
$prodName = $_POST['product_name'];

$transString2 = str_replace(["“","”","’","®","™","–","•","'","″"],["\"","\"","\'","&reg;","&trade;","-","&bull;","\'","\""],"$prodName");

$prodName2 = $transString2;

// Description Translation
$prodDesc = $_POST['description'];

$transString = str_replace(["“","”","’","®","™","–","•","'","″"],["\"","\"","\'","&reg;","&trade;","-","&bull;","\'","\""],"$prodDesc");

$prodDesc2 = $transString;
    


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
      
      
                                        $link = mysqli_connect("localhost", "landscap_lol", "meow2meow", "landscap_lollive");

                                        // Check connection
                                        if($link === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }

                                        // Attempt insert query execution
                                        $sql = "UPDATE vendor_product SET description = '" . $prodDesc2 . "', product_name = '" . $prodName2 . "'  WHERE id = '" . $prodNum3 . "'";

                                        if(mysqli_query($link, $sql)){
                                            echo "<br><center><h3>Category has been updated</h3><br></center>";
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
