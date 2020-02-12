
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


$prodNum3 = $_POST['id'];

// Name Translation
$prodName = $_POST['product_name'];

$transString2 = str_replace(["“","”",'"',"’","'","®","™","–","•","°"],["&#34;","&#34;","&#34;","&#39;","&#39;","&reg;","&trade;","-","&bull;","&deg;"],"$prodName");

$prodName2 = $transString2;

// Description Translation
$prodDesc = $_POST['description'];

$transString = str_replace(["“","”",'"',"’","'","®","™","–","•","°"],["&#34;","&#34;","&#34;","&#39;","&#39;","&reg;","&trade;","-","&bull;","&deg;"],"$prodDesc");

$prodDesc2 = $transString;

$webAdd = $_POST['web_photo'];

 

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
      
                                        echo $prodDesc2;
      
      
                                        $link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

                                        // Check connection
                                        if($link === false){
                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                        }

                                        // Attempt insert query execution
                                        $sql = "UPDATE vendor_product SET web_photo = '" . $webAdd . "'  WHERE id = '" . $_GET['prodNum'] . "';
                                ";
                                        if(mysqli_query($link, $sql)){
                                            echo "<br><center><h3>Link has been updated</h3><br></center>";
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
