
<?

session_start();

$_SESSION['test'] = 42;
$test = 43;


$prodNum2 = $_GET['prodNum'];
$vendNum2 = $_GET['venNum'];


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LO Cad PDF Upload</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="../dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>
	  
	  <form method="post" action="index-words-xlist.php">
		  <input type="hidden" name="prodNum" value="<? echo $_GET['prodNum'] ?>" >

    <main role="main" class="container">

      <h3>Product Search Category</h3>
        
    <?
    
										// start for the banner add counting and getting from table
										
											// $ad = $_GET["ad"];
											include("connect3.inc");

											

											$sql = "SELECT * FROM vendor_product WHERE id='" . $_GET['prodNum'] . "'";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                echo '<img width="20%" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '">';
                                                
                                            }
    
		                      mysqli_close($conn);
    
    ?>
        
      <p class="lead mb-4">
       Choose the Search Category for this Product.<br>
       You can choose one category for this product.
      </p>

      <div class="row">
        <div class="col-md-10 col-sm-12">
          
      
            
            <div class="row">
                <div class="col-sm-4">Business Services<br>
                                       <a href="#install">Equipment: Installation</a><br>
                                       <a href="#main">Equipment: Maintenance</a><br>
                                       <a href="#tools">Equipment: Tools / Parts / Rentals</a><br>
                                       <a href="#erosion">Erosion Control</a><br>
                                       <a href="#fencing">Fencing</a><br>

                
                </div>
                <div class="col-sm-4">
                                       <a href="#irrigation">Irrigation</a><br>
                                       <a href="#lighting">Lighting/Electrical</a><br>                    
                                        <a href="#outdoor">Outdoor Living</a><br>
                                       <a href="#park">Park and Recreation</a><br>
                                       <a href="#pavers">Pavers, Masonry, Blocks &amp; Rocks</a><br>
                                       <a href="#pest">Pest/Wildlife</a><br>
                
                </div>
                
                <div class="col-sm-4">
                                       <a href="#plant">Plant Accessories</a><br>
                    <a href="#site">Site Amenities</a><br>
                                       <a href="#furnish">Site Furnishings &amp; Receptacles</a><br>
                                       <a href="#art">Sculpture/Art/Garden Ornaments</a><br>
                                       <a href="#water">Water Features</a><br>
                                      <a href="#manage"> Water Management</a><br>
                
                </div>
             </div> 
            
            
    <div class="row">
                
    <div class="col-sm-4">
    <h5>Business Services</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='28' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='28' ORDER BY name ASC LIMIT 10 OFFSET 10";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='28' ORDER BY name ASC LIMIT 10 OFFSET 20";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div> 
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
            
    <div class="row">
     <a name="install" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Equipment: Installation</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1209' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1209' ORDER BY name ASC LIMIT 12 OFFSET 12";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1209' ORDER BY name ASC LIMIT 12 OFFSET 24";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>  
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
            
    <div class="row">
     <a name="main" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Equipment: Maintenance</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1210' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1210' ORDER BY name ASC LIMIT 12 OFFSET 12";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1210' ORDER BY name ASC LIMIT 12 OFFSET 24";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>  
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
            
    <div class="row">
     <a name="tools" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Equipment: Tools/Parts/Rentals</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1211' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1211' ORDER BY name ASC LIMIT 12 OFFSET 12";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1211' ORDER BY name ASC LIMIT 12 OFFSET 24";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 12) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>  
            
            
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
            
                
    <div class="row">
     <a name="erosion" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Erosion Control</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='30' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 5) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='30' ORDER BY name ASC LIMIT 5 OFFSET 5";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='30' ORDER BY name ASC LIMIT 4 OFFSET 10";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>  
            
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="fencing" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Fencing</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1300' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 5) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1300' ORDER BY name ASC LIMIT 5 OFFSET 5";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1300' ORDER BY name ASC LIMIT 5 OFFSET 10";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->   

        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="irrigation" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Irrigation</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1139' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 8) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1139' ORDER BY name ASC LIMIT 8 OFFSET 8";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1139' ORDER BY name ASC LIMIT 8 OFFSET 16";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->   

        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="lighting" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Lighting/Electrical</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='32' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='32' ORDER BY name ASC LIMIT 11 OFFSET 11";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='32' ORDER BY name ASC LIMIT 11 OFFSET 22";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->               

        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="outdoor" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Outdoor Living</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1214' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 7) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1214' ORDER BY name ASC LIMIT 7 OFFSET 7";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 7) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1214' ORDER BY name ASC LIMIT 7 OFFSET 14";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 6) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End --> 
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="park" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Park and Recreation</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='33' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 15) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='33' ORDER BY name ASC LIMIT 15 OFFSET 15";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 15) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='33' ORDER BY name ASC LIMIT 15 OFFSET 30";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 14) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->           
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="pavers" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Pavers, Masonry, Blocks &amp; Rocks</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='38' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 13) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='38' ORDER BY name ASC LIMIT 13 OFFSET 13";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 13) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='38' ORDER BY name ASC LIMIT 13 OFFSET 26";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 13) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->           
                        
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="pest" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Pest/Wildlife</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1212' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 3) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1212' ORDER BY name ASC LIMIT 3 OFFSET 3";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 3) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1212' ORDER BY name ASC LIMIT 3 OFFSET 6";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 3) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->     
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="plant" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Plant Accessories</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1002' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1002' ORDER BY name ASC LIMIT 10 OFFSET 10";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1002' ORDER BY name ASC LIMIT 10 OFFSET 20";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 10) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->                       
        
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="site" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Site Amenities</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='29' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 11) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='29' ORDER BY name ASC LIMIT 11 OFFSET 11";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 11) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='29' ORDER BY name ASC LIMIT 11 OFFSET 22";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 11) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->                                   
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="furnish" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Site Frunishings &amp; Receptacles</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1215' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 4) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1215' ORDER BY name ASC LIMIT 4 OFFSET 4";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 4) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1215' ORDER BY name ASC LIMIT 4 OFFSET 8";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 4) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->                                       
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="art" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Sculpture/Art/Garden Ornaments</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1301' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 2) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1301' ORDER BY name ASC LIMIT 2 OFFSET 2";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 2) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1301' ORDER BY name ASC LIMIT 2 OFFSET 4";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 2) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->      
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="water" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Water Features</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='41' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 6) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='41' ORDER BY name ASC LIMIT 6 OFFSET 6";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 6) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>

             </div>   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='41' ORDER BY name ASC LIMIT 6 OFFSET 12";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 6) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->  
            
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>            
            
            
            
    <!-- Cat Start -->        
    <div class="row">
     <a name="manage" style="position: relative; top: -15px"></a>           
    <div class="col-sm-4">
    <h5>Water Management</h5>
                
               <?
                
											include("connect3.inc");
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1213' ORDER BY name ASC";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 6) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>
        

             </div> 
                
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1213' ORDER BY name ASC LIMIT 6 OFFSET 6";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 6) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
                ?>
        
             </div> 
        
   
                
    <div class="col-sm-4">
    <h5>&nbsp;</h5>
                
               <?
                
            
                                            $xxx = 0;
                                            $yyy = 0;
                                            $zzz = 0;

											$sql = "SELECT * FROM xlist WHERE idParent='1213' ORDER BY name ASC LIMIT 6 OFFSET 12";
											$result = $conn->query($sql);
											$xlistCatCount=mysqli_num_rows($result);
                    
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                if ($xxx < 6) {
                                                    
                                                    echo '<input type="radio" value="' . $row['id'] . '" name="xlistCat"> ' . $row['name'] . '</label></br>';
                                                    $xxx++;
                                                
                                                }
                                                
                                            }
    
		                      mysqli_close($conn);                
                ?>

             </div>                   
                
             </div>              
    <!-- Cat End -->                            
            
 
            
            
        
        
        <div class="row">
 
            <div style="position: relative; left: 15px"><input type="submit" value="Submit"></div>
            
        </div>
            
	  </form>
            

<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
    
    function close_window() {
      
        close();
    }
    
    
    
</script>


        
        
        
        
        

    </main> <!-- /container -->


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script src="../dist/js/jquery.dm-uploader.min.js"></script>
    <script src="demo-ui.js"></script>
	<script type="text/javascript">var dog = "<?= $prodNum2 ?>" + "&venNum=" + "<?= $vendNum2 ?>";</script>
    <script src="demo-config10.js"></script>

    <!-- File item template -->
    <script type="text/html" id="files-template">
      <li class="media">
        <div class="media-body mb-1">
          <p class="mb-2">
            <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
          </p>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
              role="progressbar"
              style="width: 0%" 
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
          <hr class="mt-1 mb-1" />
        </div>
      </li>
    </script>

    <!-- Debug item template -->
    <script type="text/html" id="debug-template">
      <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
    </script>
  </body>
</html>
