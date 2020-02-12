
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


$prodNum3 = $_GET['id'];

// Name Translation
$prodName = $_POST['product_name'];

$transString2 = str_replace(["“","”","’","®","™","–","•","'"],["\"","\"","\'","&reg;","&trade;","-","&bull;","\'"],"$prodName");

$prodName2 = $transString2;

// Description Translation
$prodDesc = $_POST['description'];

$transString = str_replace(["“","”","’","®","™","–","•","'"],["\"","\"","\'","&reg;","&trade;","-","&bull;","\'"],"$prodDesc");

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
      
                                   

												
												
									?>  
      
      
 
     
                                  <script type='text/javascript'>
                                      
                                    javascript:self.close();window.opener.location.reload(true);
                                      
                                  </script>      
      
      
      
      
  </body>
</html>
