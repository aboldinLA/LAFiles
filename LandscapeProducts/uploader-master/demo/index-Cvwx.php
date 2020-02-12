
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

    <title>LO Cad VWX Upload</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="../dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>
	  
	  <form method="post">
		  <input type="hidden" name="prodNum" value="<? echo $_GET['prodNum'] ?>" >
	  </form>

    <main role="main" class="container">

   <h3>Edit the CAD VWX File for this product</h3>
        
    <?
    
                                            $servername = "localhost";
                                            $username = "land_patchew";
                                            $password = "59q2GB6k$3";
                                            $dbname = "land_landscap_lollive";

                                            // Create connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                } 

											

											$sql = "SELECT * FROM vendor_product WHERE id='" . $_GET['prodNum'] . "'";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {  
                                                
                                                echo '<img width="20%" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '">';
                                                
                                            }
    
		                      mysqli_close($conn);
    
    ?>
        
      <p class="lead mb-4">
       Edit Cad VWX for this Product.<br>
       To change this image, drag your new image to the window below and click on the Submit Button.
      </p>

      <div class="row">
        <div class="col-md-6 col-sm-12">
          
          <!-- Our markup, the important part here! -->
          <div id="drag-and-drop-zone" class="dm-uploader p-5">
            <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop your new image here</h3>

            <div class="btn btn-primary btn-block mb-5">
                <span>Browse for Image</span>
                <input type="file" title='Click to add Files' />
            </div>
          </div><!-- /uploader -->

        </div>
        <!--<div class="col-md-6 col-sm-12">
          <div class="card h-100">
            <div class="card-header">
              File List
            </div>

            <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
              <li class="text-muted text-center empty">No files uploaded.</li>
            </ul>
          </div>
        </div>
      </div> --><!-- /file list -->

  

      <div class="row">
        <div class="col-12">
           <div class="card h-100">
            <div class="card-header">
              Progress
            </div>

            <ul class="list-group list-group-flush" id="debug">
              <li class="list-group-item text-muted empty">Loading plugin....</li>
            </ul>
          </div>
        </div>
      </div> <!-- /debug -->
          
    </div>
        
        
        <div class="row">
 
            <div style="position: relative; left: 15px"><a href="javascript:close_window();" style="background-color: #5ee330; padding: 5px; color: #000000; font-weight: bold; box-shadow: 2px 2px #888888">Submit</a></div>
            
        </div>

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
    <script src="demo-config8.js"></script>

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
