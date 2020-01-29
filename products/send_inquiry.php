<?
include("lo_top-test.inc");

if( isset($_POST)){


$to = 'pankaj.belwal@dotsquares.com';


$subject = $_POST['subject'];
$message = $_POST['comments'];
$email = $_POST['email'];

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: LandscapeOnline Product Info Request<info@landscapeonline.com>' . "\r\n";
$headers .= "Reply-to: $email";

/*$headers .= 'Cc: myboss@example.com' . "\r\n";*/

mail($to,$subject,$message,$headers);
}


?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	    <?
	include $include_path . "lo_header-main2-js.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->

<!-- Above used to correct content position need to rewrite to do correct -->

	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
<div>


<!-- Old Code Start -->

<?
$requiredClasses[] = 'base/vendor_listing-js.php';

include "lol_common.inc";
$secthdr = "Send Inquiry";


$V = new vendor();

?>

<style type="text/css">
	
	td {
		border: solid 1px;
	}
</style>


 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="tb2" style="width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
			<span style="font-size:16px">Send Inquiry&nbsp;&nbsp;</span>
		</div><br />

		<div>


<form method="post" name="send_inquiry" action="">
  <fieldset class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="first_name" class="form-control" id="" placeholder="Enter FIrst Name">
  </fieldset>
   <fieldset class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" name="last_name" class="form-control" id="" placeholder="Enter Last Name">
  </fieldset>
   <fieldset class="form-group">
    <label for="exampleInputEmail1">Company</label>
    <input type="text" name="company" class="form-control" id="" placeholder="Enter FIrst Name">
  </fieldset>
   <fieldset class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" id="" placeholder="Enter Last Name">
     </fieldset>
   <fieldset class="form-group">
    <label for="exampleInputEmail1">State</label>
    <input type="text" name="state" class="form-control" id="" placeholder="Enter FIrst Name">
  </fieldset>
   <fieldset class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" name="phone_number" class="form-control" id="" placeholder="Enter Last Name">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" name="subject" class="form-control" id="" placeholder="Enter Last Name">
  </fieldset>
<fieldset class="form-group">
    <label for="exampleTextarea">Comments</label>
    <textarea class="form-control" name="comments" id="exampleTextarea" rows="3"></textarea>
  </fieldset>
<button type="submit" class="btn btn-primary">Submit</button>
</form>



		</div>


<!-- Old Code End -->

    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:absolute; left:725px; top:223px">
    	<?
		include $include_path . "banner-ads-norot-listing.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>