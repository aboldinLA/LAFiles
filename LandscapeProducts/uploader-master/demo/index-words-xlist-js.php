
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


$prodNum3 = $_POST['id'];
$prodName = $_POST['product_name'];
$prodDesc = $_POST['description'];
$xlistCat = $_POST['xlistCat'];
    


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

      
	
      <? echo $xlistCat; ?>
      
      
      
  </body>
</html>
