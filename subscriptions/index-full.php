<?

include "lol_common.inc";
include $include_path . "class/media_class-tle.inc";
include_once $include_path . "base/transaction_class.php";
$cc = new transaction_class();
$M = new media_class($db);
$expiration = "TLE-SAC 16";

$code_feed = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyv0123456789";
$code_length = 8;  // Set this to be your desired code length
$final_code = "";
$feed_length = strlen($code_feed);

for($i = 0; $i < $code_length; $i ++) {
$feed_selector = rand(0,$feed_length-1);
$final_code .= substr($code_feed,$feed_selector,1);
} 
$code = "TLE016-SAC" . $final_code;
// $alt_mail = $code;

if(isset($_REQUEST['hot'])) {
$_SESSION['shot'] = $_REQUEST['hot'];
}

// echo $REQUEST_METHOD; die;
if($REQUEST_METHOD=="POST") {




$DISPLAY= $_POST;
// error check
// print_r($DISPLAY);
// die;

$authval = $auth = implode(",",$auth);
$acresval = $DISPLAY['acres'];
 $media_id = $DISPLAY['id'];
//$doesval = $DISPLAY['does'];
// print_r($doesval);
// $doesval = implode(",",$doesval);
$error = "";
if ($action == "edit") $uid = $media_id; //die; //  $uid = $media_id;
if (strlen($biz_title_other) == 0)  $biz_title_other = "";  
if (strlen($does_other) == 0)   $does_other = "";
if (strlen($am_other) == 0) $am_other = "";
if (strlen($sites_other) == 0)  $sites_other = "";
if (strlen($biz_title) < 2 )    $error .= "- Please enter your Title<br>";
if (strlen($am_id) < 2 )    $error .= "- Please enter what you are<br>";
if (strlen($sites_id) < 2 )   $error .= "- Please enter where you work<br>";
if (strlen($does) < 2 )   $error .= "- Please enter what you do<br>";
if (strlen($type_biz_other) < 2 )   $error .= "- Please enter how you heard about the TLE<br>";
// echo $error; die('dffdfd');
if(!strlen($error))  {
//to take check boxes array
if (is_array($does))  $does = implode(",",$does);
if (is_array($am_id))   $am_id = implode(",",$am_id);
if (is_array($sites_id))  $sites_id = implode(",",$sites_id);

//set listing to number in data base
if (strlen($website) > 0 ) {
if (strpos($website,"http://") != 0) $website = "http://" . $website;
}
if ($action == "renew" ||  $action == "edit" ) {
 //  die('dfsdfsd');

// print_r($doesval);

$M->subscribtion_form_edit($uid, $brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $authval, $mail_to, $alt_mail,$area_code, $phone,$area_code_fax, $fax, $email,$month, $subscribe, $status, $biz_title, $am_id, $sites_id, $does, $expiration, $type_biz_other, $acresval, $code, 0);

header("location:sub3-sac.php?action=".$action."&protype=".$protype);
} else {
$total = $M->check_user($comp_name,$subscribe);
if (is_numeric($total)) { 
header("location:have_listing-tle.php?total=$total");
} else {
$_SESSION['auth'] = $SUBSCRIBE_AUTH;
$code = $acreage_id;

/*echo "auth value===========" .$authval;
echo "<br>accers value======>".$acresval; */

$_SESSION['uid'] = $M->subscribtion_form($brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $authval, $mail_to, $alt_mail,$area_code, $phone,$area_code_fax, $fax, $email,$month, $subscribe, $status, $biz_title, $am_id, $sites_id, $does, $expiration, $type_biz_other, $acresval, $code, 0);

header("location:sub3-sac.php?firstname=$first_name&lastname=$last_name&email=$email&alt_mail2=$alt_mail");
}
}
}
}

$subscribe=$_SESSION['subscribe_list'];
$protype=$_SESSION['protype_list'];
$uid=$_SESSION['uid'];


// Handle login for edit
if($action == "edit") {
$uid = $_SESSION['uid'];
$auth = $_SESSION['auth'];
$uids = $DISPLAY['uid'];

if (!$uid || $auth != $SUBSCRIBE_AUTH) {
session_register("np");
$_SESSION['np'] = $PHP_SELF . "?action=edit";
header("location: ". $lol_url ."/subscriptions/sub3-sac.php?action=".$action."&media_id=$uids");  
} else {
if ($uid && $auth == $SUBSCRIBE_AUTH) $DISPLAY = $M->get_info_list($uid);
}
} else { 
$DISPLAY = $_POST;
if ($is_staging) $DISPLAY = $M->get_info_list(204); 
}

if ($action == "edit") { //grab from db
$subscribe = $DISPLAY['subscribe'];
$protype = $DISPLAY['protype'];
$brand = explode(",", $DISPLAY['brand']);
$data = $M->get_info_list($uid);
$biz_title = $data['biz_title'];
$does = explode(",",$data['type_biz']);
$country = $data['country'];
$am_id = explode(",", $data['am_id']);
// echo "sdddd";  print_r($am_id); die;
// $sites_id = explode(",", $data['sites_id']);
$sites_id = $data['sites_id'];
// $acres = explode(",", $data['acres']);
$acres =  $data['acres'];
// $auth = explode(",",$authority);
$authselect = $data['auth'];
$expiration = "TLE";

} else { // sign up
if ($action == "list") {
$subscribe = "lol";
} else {
if ($protype == "d")  $subscribe = "lasn";
if ($protype == "c")  $subscribe = "lcm";
if ($protype == "s")  $subscribe = "lsmp";
}
}
$_SESSION['subscribe_list'] = $subscribe;
$_SESSION['protype_list'] = $protype;


// Malay - this also needs to write in everytime for action=new or edit
$expiration = "TLE-SAC 16";


?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Fullscreen Form Interface</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/css/component.css" />
		<link rel="stylesheet" type="text/css" href="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/css/cs-skin-boxes.css" />
		<script src="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Subscription Registration</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a>
						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a>
						<a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a>
					</div>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="on">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Enter first name?</label>
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Dean Moriarty" required/><br>
							<label class="fs-field-label fs-anim-upper" for="qc1">Enter last name?</label>
							<input class="fs-anim-lower" id="qc1" name="qc1" type="text" placeholder="Dean Moriarty" required/><br> 
							<label class="fs-field-label fs-anim-upper" for="qc2">Enter company name?</label>
							<input class="fs-anim-lower" id="qc2" name="qc2" type="text" placeholder="Dean Moriarty" required/><br>                            
							<label class="fs-field-label fs-anim-upper" for="qc3">Enter company Address?</label>
							<input class="fs-anim-lower" id="qc3" name="qc3" type="text" placeholder="Dean Moriarty" required/><br>   
							<label class="fs-field-label fs-anim-upper" for="qc4">Enter City?</label>
							<input class="fs-anim-lower" id="qc4" name="qc4" type="text" placeholder="Dean Moriarty" required/><br>                              
							<label class="fs-field-label fs-anim-upper" for="qc5">Enter State?</label>
							<input class="fs-anim-lower" id="qc5" name="qc5" type="text" placeholder="Dean Moriarty" required/><br>                              
							<label class="fs-field-label fs-anim-upper" for="qc6">Enter Zip Code?</label>
							<input class="fs-anim-lower" id="qc6" name="qc6" type="text" placeholder="Dean Moriarty" required/><br> 
							<label class="fs-field-label fs-anim-upper" for="qc7">Enter Phone Number?</label>
							<input class="fs-anim-lower" id="qc7" name="qc7" type="text" placeholder="Dean Moriarty" required/><br>                                    
							<label class="fs-field-label fs-anim-upper" for="qc8">Enter Fax number?</label>
							<input class="fs-anim-lower" id="qc8" name="qc8" type="text" placeholder="Dean Moriarty" required/><br>                                    
							<label class="fs-field-label fs-anim-upper" for="qc9">Enter Email Address?</label>
							<input class="fs-anim-lower" id="qc9" name="qc9" type="text" placeholder="Dean Moriarty" required/><br>                                                               
                            
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">Now Tell Us About Yourself</label>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">My Title is:</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                            
                            <?
							
							// Login for Reistration
							
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
							
							  $sql = "SELECT * FROM type_title ORDER BY id";
							  $result = $conn->query($sql);                 
						
							  $counter = 1;
							  
      echo('<div>');
      echo('<table style="font-size:16px; width:75%">');
      
      while($row = mysqli_fetch_array($result)) {
          $sel = '';
          if( trim($biz_title) == trim($row['name']) ){
            $sel = "checked=checked";
          }
          // echo $sel."<br>"; 
        if ($counter == 1 | $counter == 4 | $counter == 7 | $counter == 10 ) {


  

        echo ('<tr><td><input type="radio" id="title'.$row['name'].'" name="biz_title" value="'.$row['name'].'" '.$sel.' >') ;
        echo ('<label for="title'.$row['name'].'">'.$row['name'].'</label></td>');
         $counter++;
        } elseif ($counter == 3 | $counter == 6 | $counter == 9 | $counter == 12 ) {
        echo ('<td><input type="radio" id="title'.$row['name'].'" name="biz_title" value="'.$row['name'].'" '.$sel.' >') ;
        echo ('<label for="title'.$row['name'].'">'.$row['name'].'</label></td></tr>');
         $counter++;
        } else {
        echo ('<td><input type="radio" id="title'.$row['name'].'" name="biz_title" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('<label for="title'.$row['name'].'">'.$row['name'].'</label></td>');  
         $counter++;
        }
      }
      echo('</table>');
      echo('</div><br>');
	  
      $sql = "SELECT * FROM type_iam_tle2 ORDER BY idAccount";
      $result = $conn->query($sql);                 

      $counter = 1;
                                    
      echo('<div class="table-wrapper2">');
      echo('<table id="table-sub" style="font-size:16px">');

      while($row = mysqli_fetch_array($result)) {
        $sel = '';  
       if( is_array($am_id)){
       if(  in_array(trim($row['name']), $am_id)){
            $sel = "checked=checked";
          }
        }
        if ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {
        if (stristr($row['name'],"---")) {  
          echo ('<tr><td>') ;
        echo ('<label for="'.ltrim($row['name'],"---").'">'.ltrim($row['name'],"---").'</label></td>');
         $counter++;
        } else {
          echo ('<tr><td><input type="checkbox" id="'.$row['name'].'" name="am_id[]" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('<label for="'.$row['name'].'">'.$row['name'].'</label></td>');
         $counter++;
        }
         
        } elseif ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        if (stristr($row['name'],"---")) {  
          echo ('<td>') ;
        echo ('<label for="'.ltrim($row['name'],"---").'">'.ltrim($row['name'],"---").'</label></td></tr>');
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'" name="am_id[]" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('<label for="'.$row['name'].'">'.$row['name'].'</label></td></tr>');
         $counter++;
        }
        } else {
        if (stristr($row['name'],"---")) {  
        echo ('<td>') ;
        echo ('<label for="'.ltrim($row['name'],"---").'">'.ltrim($row['name'],"---").'</label></td>'); 
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'" name="am_id[]" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('<label for="'.$row['name'].'">'.$row['name'].'</label></td>'); 
         $counter++;
        }
        }
      }
      echo('</table>');
      echo('</div>');	  
	  
	  	  							
							?>
                            
                            
             
							</div>
						</li>                        
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">What's your email address?</label>
							<input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="dean@road.us" required/>
						</li>

						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over">Choose a color for your website.</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>Pick a color</option>
								<option value="#588c75" data-class="color-588c75">#588c75</option>
								<option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
								<option value="#f3e395" data-class="color-f3e395">#f3e395</option>
								<option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
								<option value="#da645a" data-class="color-da645a">#da645a</option>
								<option value="#79a38f" data-class="color-79a38f">#79a38f</option>
								<option value="#c1d099" data-class="color-c1d099">#c1d099</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
								<option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
								<option value="#e1837b" data-class="color-e1837b">#e1837b</option>
								<option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
								<option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
								<option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
								<option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
								<option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
							</select>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Describe how you imagine your new website</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">What's your budget?</label>
							<input class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1000" step="100" min="100"/>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Send answers</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

			<!-- Related demos -->
			<div class="related">
				<p>If you enjoyed this demo you might also like:</p>
				<a href="http://tympanus.net/Development/MinimalForm/">
					<img src="img/relatedposts/minimalform1-300x162.png" />
					<h3>Minimal Form Interface</h3>
				</a>
				<a href="http://tympanus.net/Development/ButtonComponentMorph/">
					<img src="img/relatedposts/MorphingButtons-300x162.png" />
					<h3>Morphing Buttons Concept</h3>
				</a>
			</div>

		</div><!-- /container -->
		<script src="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/js/classie.js"></script>
		<script src="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/js/selectFx.js"></script>
		<script src="https://landscapearchitect.com/responsive/LO-new/FullscreenForm/js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>