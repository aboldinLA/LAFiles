<? include '../../includes/la-common-top.php'; ?>

<? include '../../includes/la-common-header-inner.inc'; ?>

<?


	$uname2 = $_SESSION['name'];

	$uname3 = $_SESSION['lname'];

	$ucode = $_GET['ucode3'];

	$vnumber = $_GET['number'];
	//echo $vnumber . 'dog<br>';
	$prodNumber = $_GET['prodNum'];
	//echo $prodNumber . 'cat<br>';
	$xpage2 = '/LandscapeProducts/product-details.php?number=' . $vnumber . '&prodNum=' . $prodNumber . '';


	function random_password( $length = 8 ) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$passwordus = substr( str_shuffle( $chars ), 0, $length );
		return $passwordus;
	}


	$passwordus = random_password(8);



?>

    <form action="update-nsub2.php?number=<? echo $vnumber; ?>&prodNum=<? echo $prodNumber; ?>" method="POST">
	<input type="hidden" value="<? echo $passwordus; ?>" name="pass" />
	<input type="hidden" value="lad" name="brand" />

      <section class="content_sec full_width">
        <div class="login_cover">
          <h3>
            Create a New Account<span>Enter your information below.</span>
          </h3>
          <form id="sign_up_form">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" name="fname" placeholder="First Name" required />
              </div>
              <!-- /.col-sm-6 -->
              <div class="col-sm-6">
                <input type="text" name="lname" placeholder="Last Name" required />
              </div>
              <!-- /.col-sm-6 -->
              <div class="col-sm-12">
                <input type="text" name="coname" placeholder="Company Name" required />
              </div>
              <!-- /.col-sm-12 -->
              <div class="col-sm-12">
                <input type="email" name="email" placeholder="Email Address" required />
              </div><br><br>
				
				
		
				
				
              <!-- /.col-sm-12 -->
              <div class="col-sm-12">
                <button type="submit">CREATE ACCCOUNT</button>
              </div>
              <!-- /.col-sm-12 -->
            </div>
            <!-- /.row -->
			  
			  
          </form>

          <div class="btm_links full_width">
            <label
              >Need help? Call<a href="tel:18001234567"> 1-800-123-4567</a> |
              <a href="#">Email Us</a></label
            >
          </div>
          <!-- /.btm_links -->
        </div>
        <!-- /.login_cover -->
      </section>
      <!-- /.content_sec -->
		
	
				
						
		
		

		<? include '../../includes/la-common-footer-inner.inc'; ?>
		
		
		<script>

			 $(function() {
						$('.lazy').Lazy();
				});

		</script>