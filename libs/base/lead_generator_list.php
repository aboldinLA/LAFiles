<?php
	/*
	 * Controller Class for Lead Generator List -- needs a vendor id
	 */
	define ("MAX_SIZE","1000"); 
	
	require_once('HTTP/Upload.php');
	require_once('base/vendor_listing.php');
	require_once('base/lead_generator.php');
	require_once('base/lead_generator_media.php');
	require_once('base/lead_generator_product_focus.php');

	$year = '';
	$issue = '';
	$brand = '';

if( isset($_REQUEST['brand']))
{

	$_SESSION['year'] = $_REQUEST['year'];
	$_SESSION['issue'] = $_REQUEST['issue'];
	$_SESSION['brand'] = $_REQUEST['brand'];
}




	class lead_generator_list {
		var $_errors;
		var $_vname;
		var $_listing;
		var $_listAll;
		var $_appAll;
		var $_leadGenerator;
		var $_leadMedia;
		var $_lgContact;
        var $_brand;
/* 		lead_generator_list() {{{
 *      Constructor, takes in a vendor id to set up a pointer to
 *      the associated vendor_listing record.
 */
		function lead_generator_list($vendor_id=NULL) {
			if(is_null($vendor_id)) {
				$this->_errors[] = "Missing vendor id.";
				$this->_vname = "";
				$this->_listing = NULL;
			} else {
				$this->_listing = new vendor();
				$this->_listing->fetch($vendor_id);

				$this->_lgContact = new contact();
				if($this->_lgContact->fetchContact('ven',$this->_listing->id, 'lg') === FALSE) {
					// fetch the default and make a vendor lg contact
					$this->_lgContact->fetchContact('ven',$this->_listing->id, 'primary');
					$this->_lgContact->id   = NULL;
					$this->_lgContact->code = 'lg';
					$this->_lgContact->commit();
				}
			}

			$this->_appAll  = FALSE;
			$this->_listAll = FALSE;
			$this->_errors  = array();
		}
/*}}}*/

/* vendorName() {{{*/
		function vendorName() {
			return($this->_listing->company_name);
		}
/*}}}*/

		/* baseUrl() {{{ */
		function baseUrl() {
			// parent app or root
			// this whacks off the .php as well -- cleaner looking urls
			return("http://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['SCRIPT_NAME'], 0, -4));
		}
		/* }}} */

		/* appUrl() {{{ */
		function appUrl() {
			return($this->baseUrl() . $this->_uriAppend);
		}
		/* }}} */

/* handler($vars=NULL) {{{*/
		function handler($vars=NULL) {
			// this is the switchboard of this class
			
			// lets figure out our verb
			if(isset($_SERVER['PATH_INFO'])) {
				$pathParts = explode('/',ltrim($_SERVER['PATH_INFO'],'/'));
				$pathParts = array_reverse($pathParts, TRUE);
				//$verb = $pathParts[0];
				$verb = array_pop($pathParts);
			} else {
				// default verb
				$verb = 'list';
				$pathParts = array();
			}

			$this->action($verb, &$pathParts, &$vars);
		}
/*}}}*/


/*  file widget function */
	function fileWidget() {
			?>
			<input type="file" name="attachment" />
			<?php
		}

/* */

/* action($verb, $args) {{{*/
		function action($verb, $args) {
			switch($verb) {
				case 'approved':
					break;
				case 'badApproval':
					// FIXME: Better error page for LG approval
					die("wugga wugga");
					break;
				case 'saveApproval':
					$lg =& new lead_generator();

					if(is_null($_REQUEST["approvalHash"]) || ( strlen($_REQUEST["approvalHash"]) == 0 )) {
						// error out, we have no approval hash
						$this->_errors[] = "Missing information for approval!";
						$this->redirect('/badApproval');
					}

					if(($errs = $lg->processApproval($_REQUEST["approvalHash"])) === TRUE) {
						$this->redirect('/approved');
						// redirect to approved page
					} else {
						// redirect for errors
						foreach($errs as $err) {
							$this->_errors[] = $err;
						}
						$this->redirect('/approvals/' . $_REQUEST["approvalHash"]);
					}
					break;
				case 'approvals':
					$lg =& new lead_generator();
					foreach($this->_errors as $err) {
						$lg->_errors[] = $err;
					}
					$this->_errors = array();
					
					$lg->approvalPage(array_pop($args));
					break;
				case 'saveContact':
					$this->saveContact();
					break;
				case 'editContact':
					$this->editContact();
					break;
				case 'chooseEditor':
					$this->chooseEditor();
					break;
				case 'addproductFocus':
					$this->addproductFocus();
					break;
				case 'updateproductFocus':
					$this->updateproductFocus($args);
					break;			
				case 'saveproductFocus':
				$this->saveproductFocus();
				break;
				case 'productFocusUpdate':
				$this->productFocusUpdate();
				break;		
				case 'viewproductFocus':
					$this->viewproductFocus($args);
					break;	
				case 'saveEditor':
					$this->assignEditor($_REQUEST['editor']);
					break;
				case 'mediaSelector':
					$lm =& $this->_leadMedia;

					if(!is_object($lm)) {
						$lm = new lead_generator_media($this->_listing->id);
						$lm->_vendor =& $this->_listing;
						$lm->_uriAppend = "media";
					}

					$lm->mediaSelector(array_pop($args));
					break;
				case 'photoPicker':
					$lm =& $this->_leadMedia;

					if(!is_object($lm)) {
						$lm = new lead_generator_media($this->_listing->id);
						$lm->_vendor =& $this->_listing;
						$lm->_uriAppend = "media";
					}
					$lm->photoPicker($args);
					break;
				case 'dump':
					//$this->_leadGenerator =& lead_generator::load(76);
					print("<pre>");
					print_r($this);
					print("</pre>");
					break;
				case 'media':
					$this->editMedia(&$args);
					break;
				case 'listAll':
					$this->showAllLG();
					break;
				case 'appAll':
					$this->showAllApp();
					break;
				case 'edit':
					$this->edit(&$args);
					break;
				case 'delete':
					$this->delete(&$args);
					break;
				case 'create':
					$this->create();
					break;
				default:
				case 'list':
					$this->viewList();
					break;
			}
		}
/*}}}*/

/* listErrors() {{{*/
		function listErrors() {
			if(is_array($this->_errors) && (count($this->_errors) > 0)) {
				?>
				<div id="notify">
					<div class='attn'>There were errors with your request:</div>
					<ul>
						<?php
							foreach($this->_errors as $error) {
								print("<li>$error</li>");
							}
						?>
					</ul>
				</div>
				<?
				$this->_errors = array();
			} 
		}
/*}}}*/

/* viewList() {{{*/
		function viewList() {
			$pageTitle = "LG Admin :: " . $this->vendorName();
			require('views/lead_generator/header.php');
			?>
			<div id="header">
				<h1>Lead Generators :: <?= $this->vendorName(); ?></h1>
			</div>
			<?php
			$this->listErrors();
			?>
			<div id="content">
				<div class="clearer">&nbsp;</div>
			<?php
				$this->listLeadGenerators();
				$this->listApprovals();
				$this->listInformation();
				$this->listMedia();
				$this->productFocus();
				$this->downloadFocus();
			?>
			</div>
			<?php
			require('views/lead_generator/footer2.php');
		}
/*}}}*/

/* listInformation() {{{*/
		function listInformation() {
			print("<h1>Company Defaults</h1>");
			print("<div id=\"information\">");
			$this->listingInformation();
			$this->editorInformation();
			$this->contactInformation();
			print("</div>");
			print("<div class=\"clearer\">&nbsp;</div>");
		}
/*}}}*/



/* */

function viewproductFocus( $args ){
  
      		$id = array_pop($args);
            $verb = array_pop($args);
            if(!is_string($verb)) {
                $verb = 'default';
            }

            if(!is_numeric($id)) { 
                $this->errorOut("Missing id for view","");
            }

            switch($verb) {
                case 'save':
                    $this->saveItem($id);
                    break;
                case 'edit':
                    $this->editItem($id);
                    break;
                default:
                    $this->_errors[] = "Unknown verb: $verb";
                case 'default':
                    $this->viewItem($id);
                    break;
            }
}


/* listingInformation() {{{*/
		function listingInformation() {
			$c = new contact();
			$c->fetchContact('ven',$this->_listing->id,'company');
			?>
			<div class="floatBox">
				<h2>Listing Information</h2>
				<div>
					<h3><?= template_class::strShorten($this->_listing->company_name, 20); ?></h3>
					<br />
					<a href="http://<?= $this->_listing->website ?>"><?= $this->_listing->website ?></a><br />
					<strong>Phone: </strong> <?= $c->getPhoneNumber(); ?>
				</div>
			</div>
			<?php
		}
/*}}}*/

		/* chooseEditor() {{{ */
		function chooseEditor() {
			$c = new contact();
			$c->fetchContact('ven',$this->_listing->id,'editor');

			$pageTitle = "LG Editor" . $this->_id . " for " . $this->_listing->company_name;
			require('views/lead_generator/header.php');
			?>
			<div id="header">
				<h1>Editor&mdash;<?= $this->_listing->company_name ?></h1>
			</div>
			<?php $this->listErrors();  ?>
			<div id="content">
				<form method="POST" action="<?= $this->appUrl(); ?>/saveEditor">
				<div class="navButtons borderBottom">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="left">
								<a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
							</td>
							<td class="right">
								<input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
							</td>
					</table>
				</div>
				<h1>Select an Editor</h1>
				<div>
				<br />
				<?= lg_editor::selectEditorWidget($c->email); ?>
				<br />
				<br />
				</div>
				<div class="navButtons borderTop">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="left">
								<a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
							</td>
							<td class="right">
								<input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
							</td>
					</table>
				</div>
				</form>
			</div>
			<?php
			require('views/lead_generator/footer.php');
		}
		/* }}} */
		
		
		 /*  addproductFocus function */ 
		 
		 
		 
		 function addproductFocus() {


		  //  $c = new contact();
		  //  $c->fetchContact('ven',$this->_listing->id,'editor');

			$pageTitle = "LG Editor" . $this->_id . " for " . $this->_listing->company_name;
			require('views/lead_generator/header.php');
			$month = array('1'=>'January','2'=>'February', '3'=>'March', '4'=>'April', '5'=>'May', '6'=>'June', '7'=>'July', '8'=>'August','9'=>'September', '10'=>'October', '11'=>'November', '12'=>'December');
			?>
			<div id="header">
		        <?php // echo "<pre>";  print_r($this->_listing); ?>
				<h1>Editor&mdash;<?= $this->_listing->company_name ?></h1>
			</div>
				 <?php $this->listErrors();  ?>
				  <div id="content">
				<form method="post" action="<?= $this->appUrl(); ?>/saveproductFocus" ENCTYPE="multipart/form-data">

				<h1>Web Vendor Id</h1>
				<div style="padding: 5px;">
				<input type="text" name="web_vendor_id" value="" >
					<br />
					<br />
				<div>
				<span style="font-size:14px; font-weight:bold;">Issue:</span>
				<select name="month" id="month"> 
				<option>-Select-</option>
				<?php foreach ( $month as $key=>$monthname ){ ?>
					<option value="<?php echo $key?>" <?php if($key == date('m')){ echo 'selected';} ?> ><?php echo $monthname;?></option>
				<?php 
					} 
				?>
				</select>
				</span>
				<span style="margin-left: 20px;font-size:14px; font-weight:bold;">Year: 
				<select name= "year" id="year">
					<option>-Select-</option>
					<option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
				</select>
				</span>
				<span style="margin-left: 20px;font-size:14px; font-weight:bold;">Brand: 
				<select name= "brand" id="brand">
					<option>-Select-</option>
					<option value="lasn">lasn</option>
					<option value="lcn">lcn</option>
					<option value="lsmp">lsmp</option>
				</select>
				</span>

				</div>

				<h1>Image</h1>
				<div style="padding: 5px;">
					<?= $this->fileWidget(); ?>
					<br />
					<br />

				</div>
				<h1>Description</h1>
				 <div style="padding: 5px;">
				   <textarea name="description" style="height: 100px; width: 300px"></textarea>
					<br />
					<br />

				</div>
				<div class="navButtons borderTop">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="left">
								<a href="<?= $this->baseUrl(); ?><?= $this->_redirLocation ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
							</td>
							<td class="right">
								<!--<input type="image" src="/imgz/vendor/save.gif" name="" /> -->
								<input type="submit" name="submit" value="Add" style="background-color: #3D80Df;color: #fff;padding: 1px 25px;font-weight: bold;font-size: 21px;border-radius: 4px;" />
								<input type="submit" name="submit" value="Add Another" style="background-color: #3D80Df;color: #fff;padding: 1px 25px;font-weight: bold;font-size: 21px;border-radius: 4px;"/>
							</td>
					</table>
				</div>
				<input type="hidden" name="vendor_id" value="<?php echo $this->_listing->id; ?>" />
				</form>
			</div>
			<?php
			require('views/lead_generator/footer.php');
		}
		
		 
		 /*  */ 




		/*   */


		 function updateproductFocus( $args ) {

    		$id = array_pop($args);
            $verb = array_pop($args);
            if(!is_string($verb)) {
                $verb = 'default';
            }

            if(!is_numeric($id)) { 
                $this->errorOut("Missing id for view","");
            }

            $sql="SELECT * FROM lead_generator_product_focus where id='".$id."'";

			$result=mysql_query($sql);
 			$sel_query = mysql_fetch_row($result) ;
			//print_r($sel_query); die;

		  //  $c = new contact();
		  //  $c->fetchContact('ven',$this->_listing->id,'editor');

			$pageTitle = "LG Editor" . $this->_id . " for " . $this->_listing->company_name;
			require('views/lead_generator/header.php');
			$month = array('1'=>'January','2'=>'February', '3'=>'March', '4'=>'April', '5'=>'May', '6'=>'June', '7'=>'July', '8'=>'August','9'=>'September', '10'=>'October', '11'=>'November', '12'=>'December');
			?>
			<div id="header">
		        <?php // echo "<pre>";  print_r($this->_listing); ?>
				<h1>Product Focus::</h1>
			</div>
				 <?php $this->listErrors();  ?>
				  <div id="content">
				<form method="post" action="<?= $this->appUrl(); ?>/productFocusUpdate" ENCTYPE="multipart/form-data">

				<h1>Web Vendor Id</h1>
				<div style="padding: 5px;">
				<input type="text" name="web_vendor_id" value="<?php echo $sel_query[4]; ?>" >
					<br />
					<br />
				<div>
				<span style="font-size:14px; font-weight:bold;">Issue:</span>
				<select name="month" id="month"> 
				<option>-Select-</option>
				<?php foreach ( $month as $key=>$monthname ){ ?>
					<option value="<?php echo $key?>" <?php if($key == $sel_query[5]){ echo 'selected';} ?> ><?php echo $monthname;?></option>
				<?php 
					} 
				?>
				</select>
				</span>
				<span style="margin-left: 20px;font-size:14px; font-weight:bold;">Year: 
				<select name= "year" id="year">
					<option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
				</select>
				</span><span style="margin-left: 20px;font-size:14px; font-weight:bold;">Brand: 
				<select name= "brand" id="brand">
					<option value="lasn" <?php if( $sel_query[6] =='lasn') echo "selected"; ?>>lasn</option>
					<option value="lcn" <?php if( $sel_query[6] =='lcn') echo "selected"; ?>>lcn</option>
					<option value="lsmp" <?php if( $sel_query[6] =='lsmp') echo "selected"; ?>>lsmp</option>
				</select>
				</span>
				</div>

				<h1>Image</h1>
				<div style="padding: 5px;">
					<input type="file" name="attachment" value="<?php echo $sel_query[1]; ?>">
					<br />
					<br />
				<img src="https://landscapearchitect.com/product_focus_images/<?php echo $sel_query[1]; ?>"  />	
				</div>
				<h1>Description</h1>
				 <div style="padding: 5px;">
				   <textarea name="description" style="height: 100px; width: 300px"><?php echo $sel_query[2]; ?></textarea>
					<br />
					<br />

				</div>
				<div class="navButtons borderTop">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="left">
								<a href="<?= $this->baseUrl(); ?><?= $this->_redirLocation ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
							</td>
							<td class="right">
								<input type="image" src="/imgz/vendor/edit_contact.gif" name="" />
							</td>
					</table>
				</div>
				<input type="hidden" name="id" value="<?php echo $sel_query[0]; ?>" />
				<input type="hidden" name="vendor_id" value="<?php echo $sel_query[4]; ?>" />
				</form>
			</div>
			<?php
			require('views/lead_generator/footer.php');
		}
		

		/* */

		
			
		/* assignEditor($email) {{{ */
		function assignEditor($email) {
			$c = new contact();
			$c->fetchContact('ven',$this->_listing->id,'editor');

			$editors = array(
				'amartin@landscapeonline.com' => array(
					'firstName' => 'Alli',
					'lastName'  => 'Martin',
					'email'     => 'amartin@landscapeonline.com',
					'phoneAC'   => 714,
					'phone'     => '979-5276 x132',
					'faxAC'     => 714,
					'fax'       => '434-3862'
				),
				'jmoreno@landscapeonline.com' => array(
					'firstName' => 'Jeff',
					'lastName'  => 'Moreno',
					'email'     => 'jmoreno@landscapeonline.com',
					'phoneAC'   => 714,
					'phone'     => '979-5276 x116',
					'faxAC'     => 714,
					'fax'       => '434-3862'
				),
				'mdahl@landscapeonline.com' => array(
					'firstName' => 'Mike',
					'lastName'  => 'Dahl',
					'email'     => 'mdahl@landscapeonline.com',
					'phoneAC'   => 714,
					'phone'     => '979-5276 x124',
					'faxAC'     => 714,
					'fax'       => '434-3862'
				),				
				'lshield@landscapeonline.com' => array(
					'firstName' => 'Larry',
					'lastName'  => 'Shield',
					'email'     => 'lshield@landscapeonline.com',
					'phoneAC'   => 714,
					'phone'     => '979-5276 x125',
					'faxAC'     => 714,
					'fax'       => '979-3543'
				),
				'mmedaris@landscapeonline.com' => array(
					'firstName' => 'Michell',
					'lastName'  => 'Medaris',
					'email'     => 'mmedaris@landscapeonline.com',
					'phoneAC'   => 714,
					'phone'     => '979-5276 x136',
					'faxAC'     => 714,
					'fax'       => '979-3543'
				 ),
				'skelly@landscapeonline.com' => array(
					'firstName' => 'Steve',
					'lastName'  => 'Kelly',
					'email'     => 'skelly@landscapeonline.com',
					'phoneAC'   => 714,
					'phone'     => '979-5276 x120',
					'faxAC'     => 714,
					'fax'       => '979-3543'
				)
			);
			$editor = $editors[$email];
			$c->first_name      = $editor['firstName'];
			$c->last_name       = $editor['lastName'];
			$c->email           = $editor['email'];
			$c->phone_area_code = $editor['phoneAC'];
			$c->phone_number    = $editor['phone'];
			$c->fax_area_code   = $editor['faxAC'];
			$c->fax_number      = $editor['fax'];
			$c->commit();
			
			$this->redirect();
		}
		/* }}} */

/* editorInformation() {{{*/
		function editorInformation() {
			$c = new contact();
			if($c->fetchContact('ven',$this->_listing->id, 'editor') === FALSE) {
				// fetch the default and assign
				$c->fetchContact('editor',0,'default');
				$c->id = NULL;
				$c->ref_type = 'ven';
				$c->ref_id = $this->_listing->id;
				$c->code = 'editor';
				$c->commit();
			}
			?>
			<div class="floatBox">
				<div class="floater">
					[ <a href="<?= $this->appUrl(); ?>/chooseEditor">assign</a> ]
				</div>
				<h2>Editor</h2>
				<div>
					<strong><a href="mailto:<?= $c->getEmail(); ?>"><?= $c->getFullName(); ?></a></strong><br />
					<br />
					<strong>Phone:</strong><?= $c->getPhoneNumber(); ?> <br />
					<strong>Fax:</strong><?= $c->getFaxNumber(); ?><br />
				</div>
			</div>
			<?php
		}
/*}}}*/

		/* saveContact() {{{ */
		function saveContact() {
			$this->_lgContact->first_name      = $_REQUEST['first_name'];
			$this->_lgContact->last_name       = $_REQUEST['last_name'];
			$this->_lgContact->email           = $_REQUEST['email'];
			$this->_lgContact->phone_area_code = $_REQUEST['phoneAC'];
			$this->_lgContact->phone_number    = $_REQUEST['phone'];
			$this->_lgContact->fax_area_code   = $_REQUEST['faxAC'];
			$this->_lgContact->fax_number      = $_REQUEST['fax'];
			$this->_lgContact->commit();

			$this->redirect();
		}
		/* }}} */

		
		
		  /* saveContact() {{{ */
		function saveproductFocus() {
		   
	   $image =$_FILES['attachment'] ['name']; 
	   $uploadedfile = $_FILES['attachment']['tmp_name'];
	   //  $this->imageUpload($file);
	   // echo '<img src="'.$_SERVER['DOCUMENT_ROOT'].'/image/1back.jpg';
	   
		   
		if ($image) 
		{
		$filename = stripslashes($_FILES['attachment']['name']);
		$extension = $this->getExtension($filename);
		$extension = strtolower($extension);
		if (($extension != "jpg") && ($extension != "jpeg") 
		&& ($extension != "png") && ($extension != "gif")) 
		{
		// echo ' Unknown Image extension ';
		 $upload = new HTTP_Upload();
		 $file   = $upload->getFiles("attachment");
			  //  if(PEAR::isError($file   = $upload->getFiles("attachment"))) {
				$this->errorOut("Please upload a valid file", "/addproductFocus");
		  //  }
		$errors=1;
		}
		else
		{
		$size=filesize($_FILES['attachment']['tmp_name']);

		if ($size > MAX_SIZE*1024)
		{
		echo "You have exceeded the size limit";
		$errors=1;
		}

		if($extension=="jpg" || $extension=="jpeg" )
		{
		$uploadedfile = $_FILES['attachment']['tmp_name'];
		$src = imagecreatefromjpeg($uploadedfile);
		}
		else if($extension=="png")
		{
		$uploadedfile = $_FILES['attachment']['tmp_name'];
		$src = imagecreatefrompng($uploadedfile);
		}
		else 
		{
		$src = imagecreatefromgif($uploadedfile);
		}

		list($width,$height)=getimagesize($uploadedfile);

		$newwidth=200;
		$newheight=($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);

		$newwidth1=150;
		$newheight1=($height/$width)*$newwidth1;
		$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
		$width,$height);

		imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1, 
		$width,$height);
		$original_filename = $_FILES['attachment']['name'];
		$path_parts = pathinfo($_FILES['attachment']['name']);
		$image_path = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];


		$filename = $_SERVER['DOCUMENT_ROOT']."/product_focus_images/". $image_path;
		$filename1 = $_SERVER['DOCUMENT_ROOT']."/product_focus_images_thumb/". $image_path;

		imagejpeg($tmp,$filename,100);
		imagejpeg($tmp1,$filename1,100);

		imagedestroy($src);
		imagedestroy($tmp);
		imagedestroy($tmp1);
		$date = date('Y-m-d h:i:s'); 
		// die;
		$vendor_id = isset($_REQUEST['web_vendor_id'])?$_REQUEST['web_vendor_id']:$_REQUEST['vendor_id'];
		$mysql_query = "insert into lead_generator_product_focus ( vendor_id, image, description, date, issue, brand, created ) values ('".$vendor_id."', '".$image_path ."', '".$_REQUEST['description']."', '".$_REQUEST['year'] ."', '".$_REQUEST['month']."', '".$_REQUEST['brand']."', '".date('Y-m-d')."' )";
		mysql_query($mysql_query);

		if( $_REQUEST['submit'] == 'Add Another'){
			$this->redirect("/addproductFocus");
		}

		$this->redirect();
		}
		}
		else{
				$upload = new HTTP_Upload();
				$file   = $upload->getFiles("attachment");
				$this->errorOut("You must upload a file!", "/addproductFocus");
		}
		}
		
		/* }}} */
		



	  /* saveContact() {{{ */
	  function productFocusUpdate() {
	 	//	die("dddd"); 
	  $id = 	$_REQUEST['id'];

	   $image =$_FILES['attachment'] ['name']; 
	   $uploadedfile = $_FILES['attachment']['tmp_name'];
	   //  $this->imageUpload($file);
	   // echo '<img src="'.$_SERVER['DOCUMENT_ROOT'].'/image/1back.jpg';
	   
		   
		if ($image) 
		{
		$filename = stripslashes($_FILES['attachment']['name']);
		$extension = $this->getExtension($filename);
		$extension = strtolower($extension);
		if (($extension != "jpg") && ($extension != "jpeg") 
		&& ($extension != "png") && ($extension != "gif")) 
		{
		// echo ' Unknown Image extension ';
		 $upload = new HTTP_Upload();
		 $file   = $upload->getFiles("attachment");
			  //  if(PEAR::isError($file   = $upload->getFiles("attachment"))) {
				$this->errorOut("Please upload a valid file", "/updateproductFocus/".$id);
		  //  }
		$errors=1;
		}
		else
		{
		$size=filesize($_FILES['attachment']['tmp_name']);

		if ($size > MAX_SIZE*1024)
		{
		echo "You have exceeded the size limit";
		$errors=1;
		}

		if($extension=="jpg" || $extension=="jpeg" )
		{
		$uploadedfile = $_FILES['attachment']['tmp_name'];
		$src = imagecreatefromjpeg($uploadedfile);
		}
		else if($extension=="png")
		{
		$uploadedfile = $_FILES['attachment']['tmp_name'];
		$src = imagecreatefrompng($uploadedfile);
		}
		else 
		{
		$src = imagecreatefromgif($uploadedfile);
		}

		list($width,$height)=getimagesize($uploadedfile);

		$newwidth=200;
		$newheight=($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);

		$newwidth1=150;
		$newheight1=($height/$width)*$newwidth1;
		$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
		$width,$height);

		imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1, 
		$width,$height);
		$original_filename = $_FILES['attachment']['name'];
		$path_parts = pathinfo($_FILES['attachment']['name']);
		$image_path = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];


		$filename = $_SERVER['DOCUMENT_ROOT']."/product_focus_images/". $image_path;
		$filename1 = $_SERVER['DOCUMENT_ROOT']."/product_focus_images_thumb/". $image_path;

		imagejpeg($tmp,$filename,100);
		imagejpeg($tmp1,$filename1,100);

		imagedestroy($src);
		imagedestroy($tmp);
		imagedestroy($tmp1);
		$date = date('Y-m-d h:i:s'); 
		// die;
		$vendor_id = $_REQUEST['vendor_id']; 
		$mysql_query = "update lead_generator_product_focus 
		SET vendor_id ='".$vendor_id."', image  ='".$image_path ."',description = '".$_REQUEST['description']."',date  ='".$_REQUEST['year']."',issue = '".$_REQUEST['month']."',brand = '".$_REQUEST['brand']."',created = '".date('Y-m-d')."' WHERE id = '".$id."' ";
		mysql_query($mysql_query);
		$this->redirect();
		}
		}
		else{
		$date = date('Y-m-d h:i:s'); 
		// die;
		$vendor_id = $_REQUEST['vendor_id'];
		$mysql_query = "update lead_generator_product_focus 
		SET vendor_id ='".$vendor_id."',description = '".$_REQUEST['description']."',date  ='".$_REQUEST['year']."',issue = '".$_REQUEST['month']."',brand = '".$_REQUEST['brand']."',created = '".date('Y-m-d')."' WHERE id = '".$id."' ";
		mysql_query($mysql_query);

		}
		// die("sdfsdf");
		$this->redirect();
		}
		
		/* }}} */
		





		/* editContact() {{{ */
		function editContact() {
			$c =& $this->_lgContact;
			// $c->fetchContact('ven',$this->_listing->id,'lg');

			$pageTitle = "LG Contact for " . $this->_listing->company_name;
			require('views/lead_generator/header.php');
			?>
			<div id="header">
				<h1>LG Contact&mdash;<?= $this->_listing->company_name ?></h1>
			</div>
			<?php $this->listErrors();  ?>
			<div id="content">
				<form method="POST" action="<?= $this->appUrl(); ?>/saveContact">
				<div class="navButtons borderBottom">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="left">
								<a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
							</td>
							<td class="right">
								<input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
							</td>
					</table>
				</div>
				<h1>Contact Editor</h1>
				<div>
				<table width="100%" border="0" cellpadding="0" cellspacing="4">
					<tbody>
						<tr>
							<td><strong>Name:</strong></td>
							<td>
								<input type="text" name="first_name" value="<?= $c->getFirstName(); ?>" />
								<input type="text" name="last_name" value="<?= $c->getLastName(); ?>" />
							</td>
						</tr>
						<tr>
							<td><strong>Email:</strong></td>
							<td><input type="text" name="email" value="<?= $c->getEmail(); ?>" /></td>
						</tr>
						<tr>
							<td><strong>Phone:</strong></td>
							<td>
								(<input type="text" size="3" name="phoneAC" value="<?= $c->phone_area_code ?>" />)
								<input type="text" name="phone" value="<?= $c->phone_number ?>" />
							</td>
						</tr>
						<tr>
							<td><strong>Fax:</strong></td>
							<td>
								(<input type="text" size="3" name="faxAC" value="<?= $c->fax_area_code ?>" />)
								<input type="text" name="fax" value="<?= $c->fax_number ?>" />
							</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="navButtons borderTop">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="left">
								<a href="<?= $this->appUrl(); ?>/cancelContact"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
							</td>
							<td class="right">
								<input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
							</td>
					</table>
				</div>
				</form>
			</div>
			<?php
			require('views/lead_generator/footer.php');
		}
		/* }}} */

/* contactInformation() {{{*/
		function contactInformation() {
			$c =& $this->_lgContact;
			// try a vendor lg contact first


			/*
			if($c->fetchContact('ven',$this->_listing->id, 'lg') === FALSE) {
				// fetch the default and make a vendor lg contact
				$c->fetchContact('ven',$this->_listing->id, 'primary');
				$c->id   = NULL;
				$c->code = 'lg';
				$c->commit();
			} */
			?>
			<div class="floatBox">
				<div class="floater">
					[ <a href="<?= $this->appUrl(); ?>/editContact">edit</a> ]
				</div>
				<h2>Contact</h2>
				<div>
					<strong><a href="mailto:<?= $c->getEmail(); ?>"><?= $c->getFullName(); ?></a></strong><br />
					<br />
					<strong>Phone:</strong><?= $c->getPhoneNumber(); ?> <br />
					<strong>Fax:</strong><?= $c->getFaxNumber(); ?><br />
				</div>
			</div>
			<?php
		}
/*}}}*/

/* listApprovals() {{{*/
		function listApprovals() {
			$lg = new lead_generator_model();
			if($this->_appAll) {
				$appList = $lg->getLeadGenerators($this->_listing->id);
				$title = "Approvals";
			} else {
				$year = $this->currentLGYear();
				$year2=2012;
				$title = "$year Approvals";
				$appList = $lg->getLeadGenerators($this->_listing->id,$year);
			  /*  $appList = $lg->getLeadGenerators($this->_listing->id,$year2); */
			}
			?>
			<div class='floater'>
				<?php
					$label = ($this->_appAll) ? "hide most" : "show all";
				?>
				[ <a href="<?= $this->appUrl(); ?>/appAll"><?= $label ?></a> ]
			</div>
			<h1><?= $title ?></h1>
			<?php
			if((count($appList) > 0) && $appList !== FALSE) {
				?>
				<table class="styled" width="100%" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>ID</td>
							<td>Year</td>
							<td>Magazine</td>
							<td>Size</td>
							<td>Categories</td>
							<td>Status</td>
							<!-- <td>Created</td> -->
							<td>Edited</td>
							<td colspan="2">&nbsp;</td>
						</tr>
					</thead>
					<tbody>
				<?php
				$alt = FALSE;
				foreach($appList as $item) {
					$alt = ($alt) ? FALSE : TRUE;
					if($alt) {
						$style = "style=\"background: #e0edff;\"";
					} else {
						$style = "";
					}
					if($item['status'] == "approved") {
						$this->printLGRow($item, $style);
					}
				}
				print("</tbody>");
				print("</table>");
			} else {
				print("<center><strong><em>Sorry, there are no approvals for this company.</em></strong></center>");
			}

		}
/*}}}*/

/* currentLGYear() {{{ */
	function currentLGYear() {
		// returns the year for the current LG's
		// if this month is jun-dec, year+1, else year
		if(date("m") > 5) {
			return(date("Y") + 1);
		} else{
			return(date("Y"));
		}
	}
/* }}} */

/* listLeadGenerators() {{{*/
		function listLeadGenerators() {
			$lg = new lead_generator_model();
			$lg->debug = TRUE;

			if($this->_listAll) {
				$label = "hide most";
				$lgList = $lg->getLeadGenerators($this->_listing->id);
				$title = "Lead Generators";
			} else {
				$label = "show all";
				$year = $this->currentLGYear();
				$title = "$year Lead Generators";
				$lgList = $lg->getLeadGenerators($this->_listing->id,$year);
			}

			?>
			<div class='floater'>
				[ <a href="<?= $this->appUrl(); ?>/create">new</a> | <a href="<?= $this->appUrl(); ?>/listAll"><?= $label ?></a> ]
			</div>
			<h1><?= $title ?></h1>
			<?php
			if((count($lgList) > 0) && ($lgList !== FALSE)) {
				?>
				<table class="styled" width="100%" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>ID</td>
							<td>Year</td>
							<td>Magazine</td>
							<td>Size</td>
							<td>Categories</td>
							<td>Status</td>
							<!-- <td>Created</td> -->
							<td>Edited</td>
							<td colspan="2">&nbsp;</td>
						</tr>
					</thead>
					<tbody>
				<?php
				$alt = FALSE;
				foreach($lgList as $item) {
					$alt = ($alt) ? FALSE : TRUE;
					if($alt) {
						$style = "style=\"background: #e0edff;\"";
					} else {
						$style = "";
					}
					if($item['status'] != "approved") {
						$this->printLGRow($item, $style);
					}
				}
				print("</tbody>");
				print("</table>");
			} else {
				print("<center><strong><em>Sorry, there are no lead generators for this company.</em></strong></center>");
			}
		}
		/*}}}*/

		/* listMedia() {{{ */
		function listMedia() {
			// list the associated media for this vendor
			// rows of photo thumbnails with slugs and links
			?>
			<div class="floater">
				[ 
					<a href="<?= $this->appUrl(); ?>/media/new">new</a> | 
					<a href="<?= $this->appUrl(); ?>/media">manage</a> 
				]
			</div>
			<h1>Company Media</h1>
			<?php
			lead_generator_media::listMedia($this->_listing->id);
		}

		/* }}} */
		
		
 /*  function  product focus */  		
		  function productFocus() {
			// list the associated media for this vendor
			// rows of photo thumbnails with slugs and links

			$brand = $_REQUEST['brand'];
			$year = $_REQUEST['year'];
			$issue = $_REQUEST['issue'];
			$dsstart = $_REQUEST['dsstart'];
			$dsend = $_REQUEST['dsend'];
			$pagelimit = $_REQUEST['pagelimit'];


			if( $issue != '')
			{
				$selected_month = $_REQUEST['issue'];
			}
 			else{
				$selected_month =date('m');
 			}
           // echo "sssss" .$_SESSION['brand']; 
			$month = array('1'=>'January','2'=>'February', '3'=>'March', '4'=>'April', '5'=>'May', '6'=>'June', '7'=>'July', '8'=>'August','9'=>'September', '10'=>'October', '11'=>'November', '12'=>'December');
			?>
			<h1 style="background-color: #556666; padding: 6px 5px 6px 5px; color : #fff ">Product Focus Tool</h1>
			        <form method="get" action="<?php echo $this->appUrl(); ?>" name="form_parent">
				<div style="margin: 10px; padding: 0px 50px 0px;font-size:14px; font-weight:bold;"><span>Issue:
				<select name="issue" id="issue"> 
				<option value="">-Select-</option>
				<?php foreach ( $month as $key=>$monthname ){ ?>
					<option value="<?php echo $key?>" <?php if($key == $selected_month){ echo 'selected';} ?> ><?php echo $monthname;?></option>
				<?php 
					} 
				?>
				</select>
				</span>
				<span style="margin-left: 12px;font-size:14px; font-weight:bold;">Year: 
				<select name= "year" id="year">
					<option value="">-Select-</option>
					<option value="<?php echo date('Y');?>" <?php if(date('Y') == $year) echo "selected"; ?>><?php echo date('Y');?></option>
				</select>
				</span><span style="margin-left: 12px;font-size:14px; font-weight:bold;">Brand: 
				<select name= "brand" id="brand">
					<option value="">-Select-</option>
					<option value="lasn" <?php if($brand == 'lasn') echo "selected"; ?>>lasn</option>
					<option value="lcn" <?php if($brand == 'lcn') echo "selected"; ?>>lcn</option>
					<option value="lsmp" <?php if($brand == 'lsmp') echo "selected"; ?>>lsmp</option>
				</select>
				</span>
				<span style="margin-left: 12px;font-size:14px; font-weight:bold;">Count: <?php $this->countProductFocus($this->_listing->id,$issue,$year,$brand,$dsstart,$dsend,$pagelimit ); ?></span>
				</div>
				<div>
				</div>
			<p style="text-align: center;">
		
					<input id="dsstart" name="dsstart" type="date" placeholder="YYYY-MM-DD" value="<?php if(isset($_SESSION['dsstart'])) {echo $_SESSION['dsstart']; } else  { echo $_REQUEST['dsstart']; }?>"/>
					&nbsp;
					<input id="dsend" name="dsend" type="date" placeholder="YYYY-MM-DD" value="<?php if(isset($_SESSION['dsend'])) {echo $_SESSION['dsend']; } else  { echo $_REQUEST['dsend']; }?>" />
					&nbsp;
					    
			</p>
			 <p style="text-align:center;">
					Records per page: <select name="pagelimit" id="pagelimit" required>
					<option selected="selected">-Select-</option>
					<option value="25" <?php if( $pagelimit == '25'){ echo "selected"; } ?>>25</option>
					<option value="50" <?php if( $pagelimit == '50'){ echo "selected"; } ?>>50</option>
					<option value="100" <?php if( $pagelimit == '100'){ echo "selected"; } ?>>100</option>
					<option value="250" <?php if( $pagelimit =='250'){ echo "selected"; } ?>>250</option>
				    </select> <input type="submit" name="submit" value="Search"> 
			 </p>

			<p style="text-align:center;">
				<a href="https://landscapearchitect.com/devel/lg/default/lead_generator_list.php">RESET</a>
			</p>

			</form>
			  <div class="floater">
				[ 
					<a href="<?= $this->appUrl(); ?>/addproductFocus">Click to add an image</a>
				]
			</div>
			<br><br>
			<?php
			//   echo $this->_listing->id;
				$this->listProductFocus($this->_listing->id,$issue,$year,$brand,$dsstart,$dsend,$pagelimit );
			}



	 /*  function  Download focus */  		
		  function downloadFocus() {
			// list the associated media for this vendor
			// rows of photo thumbnails with slugs and links
			$month = array('1'=>'January','2'=>'February', '3'=>'March', '4'=>'April', '5'=>'May', '6'=>'June', '7'=>'July', '8'=>'August','9'=>'September', '10'=>'October', '11'=>'November', '12'=>'December');
			?>
			<h1 style="background-color: #556666; padding: 6px 5px 6px 5px; color : #fff ">Download Options</h1>
			<div><h1>Product Focus:</h1></div>
			<div style="margin: 10px; padding: 0px 25px 0px;"><span style="font-size:14px; font-weight:bold;">Issue: <select> 
			<option>-Select-</option>
			<?php foreach ( $month as $key=>$monthname ){ ?>
				<option value="<?php echo $key?>" <?php if($key == date('m')){ echo 'selected';} ?> ><?php echo $monthname;?></option>
			<?php 
				} 
			?>
			</select>
			</span>
			<span style="margin-left: 20px;font-size:14px; font-weight:bold;">Year: <select>
				<option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
			</select>
			</span><span style="margin-left: 20px;font-size:14px; font-weight:bold;">Brand: <select><option value="lasn">LASN</option></select></span><span style="margin-left: 20px;font-size:14px; font-weight:bold;">Count: </span><span style="margin-left: 20px;"><input type="button" name="Download1" value="Download"></span>
			<br>
			<span><input type="button" name="pushtoweb1" value="Push To Web" style="float: right; margin-top: 10px; margin-left: 178px;
"></span>
			</div>
			<div style="clear: both;"></div>
			
			<div><h1>Lead Generations:</h1></div>
			<div style="margin: 10px; padding: 0px 50px 0px;">
			<span style="font-size:14px; font-weight:bold;">Section:<select> 
			<option>-Section-</option>
			<option value="water_features">Water Features</option>
			</select>
			</span>
			<span style="margin-left: 20px;"><input type="button" name="Download2" value="Download"></span>
			<br>
			<span><input type="button" name="pushtoweb2" value="Push To Web" style="margin-top: 10px; margin-left: 198px;
"></span></div>
			<br>
			<span style="margin: 10px; padding: 0px 50px 0px;font-size:14px; font-weight:bold;">Brand:<select> 
			<option>-Section-</option>
			<option value="lasn">LASN</option>
			</select>
			</span>
			<?php
		}	
		

/* printLGRow($item=NULL, $style=NULL) {{{*/
		function printLGRow($item=NULL, $style=NULL) {
			$lgc = new lead_generator_categories();

			if(is_null($item)) return(FALSE);

			?>
			<tr <?= $style ?>>
				<td> <?= $item['id'] ?> </td>
				<td> <?= $item['year'] ?> </td>
				<td> <?= $item['magazines'] ?> </td>
				<td> <?= $item['size'] ?> </td>
				<td> <?= $item['categories'] ?> </td>
				<td> <?= ucwords($item['status']); ?> </td>
				<!-- <td> <?= date("m/j/y",$item['input']); ?> </td> -->
				<td> <?= template_class::parseDate($item['edited']); ?> </td>
				<td><a href="<?= $this->appUrl(); ?>/edit/<?= $item['id'] ?>"><img src="/imgz/vendor/pencil.gif" height="20" border="0" /></a></td>
				<td><a href="javascript:confirmBox('<?= $this->appUrl(); ?>/delete/<?= $item['id'] ?>','Are you sure you want to delete LG #<?= $item['id'] ?>?\n\nThis will remove all pending approval requests, revisions, and other changes, and cannot be undone.')">
					<img src="/imgz/vendor/delete.gif" height="20" border="0" /></a></td>
			</tr>
			<?php
		}
/*}}}*/

/* create() {{{*/
		function create() {
			// create a new lg, redirect to list page for now
			$lg = new lead_generator();
			$lg->_vendor =& $this->_listing;
			$lg_2 =& $lg->create($this->_listing->id);
			// force attribute setup
			$this->redirect('/edit/' . $lg_2->_id . '/attributes');
		}
/*}}}*/

/* redirect() {{{*/
		function redirect($verb=NULL) {
			session_write_close();
			template_class::redirect($this->appUrl() . $verb);
		}
/*}}}*/

/* editMedia($args) {{{ */
	function editMedia($args) {
		$lm =& $this->_leadMedia;
		if(!is_object($lm)) {
			$lm = new lead_generator_media($this->_listing->id);
			$lm->_vendor =& $this->_listing;
			$lm->_uriAppend = "media";
		}
		$lm->_uriAppend = "media";
		$lm->handle(&$args);
	}
/* }}} */

/* edit($args) {{{*/
		function edit($args) {
			if(!is_array($args)) {
				$this->errorOut("Missing arguments for edit action.");
				return(FALSE);
			} else if(!is_numeric($lg_id = array_pop($args))) {
				$this->errorOut("Badly formatted lead generator id: $lg_id");
				return(FALSE);
			} else {
				if($this->_leadGenerator->_id != $lg_id) {
					// not the same lg, load
					$this->_leadGenerator =& lead_generator::load($lg_id);
				}
				if($this->_leadGenerator === FALSE) {
					$this->errorOut("Invalid lead generator id: $lg_id");
					return(FALSE);
				}
			}
			$this->_leadGenerator->_vendor =& $this->_listing;
			$this->_leadGenerator->_uriAppend = "edit/$lg_id";
			$this->_leadGenerator->handle(&$args);
		}
/*}}}*/

/* errorOut($msg) {{{*/
		function errorOut($msg, $verb = null ) {
			$this->_errors[] = "$msg";
			$this->redirect( $verb );
		}
/*}}}*/

/* delete($args=NULL) {{{*/
		function delete($args=NULL) {
			if(!is_array($args)) {
				$this->errorOut("Missing arguments for delete action.");
				return(FALSE);
			} else if(!is_numeric($lg_id = array_pop($args))) {
				$this->errorOut("Badly formatted lead generator id: $lg_id");
				return(FALSE);
			} else {
				if(!lead_generator::delete($lg_id)) {
					$this->errorOut("Sorry, you cannot delete a locked or pending lead generator.");
				} 
				$this->redirect();
			}
		}
/*}}}*/

/* showAllLG() {{{*/
		function showAllLG() {
			$this->_listAll = ($this->_listAll) ? FALSE : TRUE ;
			$this->redirect();
		}
/*}}}*/

/* showAllApp() {{{*/
		function showAllApp() {
			$this->_appAll = ($this->_appAll) ? FALSE : TRUE ;
			$this->redirect();
		}
/*}}}*/


 /* function isValidMime($type) {{{ */
		function isValidMime($type) {
			switch($type) {
				case 'image/png':
					return('png');
					break;
				case 'image/jpg':
				case 'image/jpeg':
					return('jpg');
					break;
				case 'image/tiff':
					return('tiff');
					break;
				case 'image/pjpeg':
					return('jpg');
					break;
				default:
					return(FALSE);
			}
		}
		/* }}} */
		
		
		function getExtension($str) {

		 $i = strrpos($str,".");
		 if (!$i) { return ""; } 
		 $l = strlen($str) - $i;
		 $ext = substr($str,$i+1,$l);
		 return $ext;
 }

      function countProductFocus($vendor_id, $issue=null, $year=null, $brand=null, $dsstart=null, $dsend=null) { 
			// if(!is_numeric($vendor_id)) return(FALSE);
		if(!is_numeric($vendor_id)) return(FALSE);

		$where .=  "WHERE vendor_id='".$vendor_id."'";
		

 		if($issue != ''){
               $where .= ' AND issue='.$issue;
        }
        if($brand != ''){
            $where .= " AND brand='".$brand."'";
        }
        if($year != ''){
            $where .= ' AND date='.$year;
        }

		if(isset($dsstart) && !empty($dsstart) && isset($dsend) && !empty($dsend)){
		  $where .= " AND (date BETWEEN '".$dsstart."' AND '".$dsend."')";
		}

 		// echo "SELECT * FROM lead_generator_product_focus ".$where." ORDER BY id DESC"; 

		$sql  = mysql_query("SELECT * FROM lead_generator_product_focus ".$where." ORDER BY id DESC");
			if(mysql_num_rows( $sql) > 0 ) {
				echo mysql_num_rows( $sql);
			}
			else {
				return 0;
			}
      }


		function listProductFocus($vendor_id, $issue=null, $year=null, $brand=null, $dsstart=null, $dsend=null,$pagelimit=null) { 
			// echo "brand" . $this->_brand;
			if(!is_numeric($vendor_id)) return(FALSE);

			$where .=  "WHERE vendor_id='".$vendor_id."'";
		
		if($pagelimit != ''){
               $pagelimit = $pagelimit;
        }
        else {

        	$pagelimit = 5;
        }
 		if($issue != ''){
               $where .= ' AND issue='.$issue;
        }
        if($brand != ''){
            $where .= " AND brand='".$brand."'";
        }
        if($year != ''){
            $where .= ' AND date='.$year;
        }

		if(isset($dsstart) && !empty($dsstart) && isset($dsend) && !empty($dsend)){
		  $where .= " AND (date BETWEEN '".$dsstart."' AND '".$dsend."')";
		}

       // echo "SELECT * FROM lead_generator_product_focus ".$where." ORDER BY id DESC limit " .$pagelimit;

 		$sql  = mysql_query("SELECT * FROM lead_generator_product_focus ".$where." ORDER BY id DESC limit " .$pagelimit);
		?>
		<table border="0" width="100%" cellpadding="0" cellspacing="0" style="margin-top: 10px;">
		<?php
		if(mysql_num_rows( $sql) > 0 ) {
		while ($row = mysql_fetch_array( $sql)) {
					 $chunks[] = $row;
				 }
				$chunks = array_chunk($chunks, 3);
			foreach($chunks as $chunk) {
		?>
			 <tr>
			  <?php
			   foreach($chunk as $item) {
		         //      echo "<pre>";	print_r($item);
			   ?>
			  <td class="center" height="150" width="150" valign="top">
			  	<a href="<?php echo $this->appUrl(); ?>/updateproductFocus/<?php echo $item['id']; ?>" style="font-weight:bold;vertical-align: top; display: block;">Add Company Name</a>
				<a href="<?php echo $this->appUrl(); ?>/updateproductFocus/<?php echo $item['id']; ?>"><img src="https://landscapearchitect.com/product_focus_images/<?php echo $item['image']; ?>" border="1" style="margin-top: 5px;"/></a><br />
				<p style="min-height:30px; text-align:center"><?php echo $item['description']; ?></p><br />
				<input type="button" name="double" value="double"><br>
				<a href="<?php echo $this->appUrl(); ?>/viewproductFocus/<?php echo $item['id']; ?>">
				<input type="button" name="view" value="view" style="margin: 8px 0px;">
				</a>
			  </td>
			  <?php 
				}
			  ?>
			</tr>
		<?php
		}
	   ?>
	   </table>
	  <?php
			} else {
				print("<center><strong><em>No product focus found for this vendor.</em></strong></center>");
			}
		}
 


        /* viewItem($id) {{{ */
        function viewItem($id) {
            $pageTitle = "View Product Focus";
           // $lgm = new lead_generator_media();
            $result = mysql_query("SELECT * FROM lead_generator_product_focus WHERE id='".$id."' LIMIT 1");
			$row = mysql_fetch_row($result);
			// print_r($row);
			// echo $row['option_value'];
            //$lgm->load($id);
            
            require('views/lead_generator/header.php');
            //$mediaArray =& $this->_storage->getForVendor($this->_vendor->id);
            ?>
            <div id="header">
                <h1>Product Focus :: <?= $this->_vendor->company_name ?></h1>
            </div>
            <?= $this->listErrors(); ?>
            <div id="content">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
                <h1>Media Item </h1>
                <table width="100%" cellpadding="0" cellspacing="5">
                    <tbody>
                        <tr>
                            <td>
                                <a href="https://landscapearchitect.com/product_focus_images/<?php echo  $row['1']?>">
                                <?php //  $lgm->scaledElement(); ?>
								<img src="https://landscapearchitect.com/product_focus_images/<?php echo  $row['1']?>"
                                </a>
                            </td>
                         <tr>
                         <tr>
                         	<td colspan="2">
                               <?php echo  $row['2']?>
                            </td>
                         </tr>
                         <tr>   
                            <td valign="top">

                                <center>
                                    <a href="<?= $this->appUrl(); ?>/updateproductFocus/<?=$row['0']; ?>"><img src="/imgz/vendor/edit_contact.gif" border="0" /></a>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */



		 function editItem($id ) {

            $pageTitle = "Edit Product Focus";
           // $lgm = new lead_generator_media();
            $result = mysql_query("SELECT * FROM lead_generator_product_focus WHERE id='".$id."' LIMIT 1");
			$row = mysql_fetch_row($result);

		  //  $c = new contact();
		  //  $c->fetchContact('ven',$this->_listing->id,'editor');

			// $pageTitle = "LG Editor" . $this->_id . " for " . $this->_listing->company_name;
			require('views/lead_generator/header.php');
			?>
			<div id="header">
		  <?php // echo "<pre>";  print_r($this->_listing); ?>
			<h1>Editor&mdash;<?= $this->_listing->company_name ?></h1>
			</div>
				<?php $this->listErrors();  ?>
				<div id="content">
				<form method="post" action="<?= $this->appUrl(); ?>/viewproductFocus/<?php echo $row[0]?>/save" ENCTYPE="multipart/form-data">
				<h1>Image</h1>
				<div style="padding: 5px;">
					<?= $this->fileWidget(); ?>
					<br />
					<br />

					<td>
                               <a href="https://landscapearchitect.com/product_focus_images/<?php echo  $row['1']?>">
                                <img width="300" src="https://landscapearchitect.com/product_focus_images/<?php echo  $row['1']?>" border="1">                                </a>
                    </td>
				</div>


				<h1>Description</h1>
				 <div style="padding: 5px;">
				   <textarea name="description" style="height: 100px; width: 300px"><?php echo $row[2]; ?></textarea>
					<br />
					<br />

				</div>
				<div class="navButtons borderTop">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="left">
								<a href="<?= $this->baseUrl(); ?><?= $this->_redirLocation ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
							</td>
							<td class="right">
								<input type="image" src="/imgz/vendor/save.gif" name="" />
							</td>
					</table>
				</div>
				<input type="hidden" name="vendor_id" value="<?php echo $this->_listing->id; ?>" />
				</form>
			</div>
			<?php
			require('views/lead_generator/footer.php');
		}


		function saveItem($id) {
		 	
	   $image =$_FILES['attachment'] ['name']; 
	   $uploadedfile = $_FILES['attachment']['tmp_name'];
	   //  $this->imageUpload($file);
	   // echo '<img src="'.$_SERVER['DOCUMENT_ROOT'].'/image/1back.jpg';
		   
		   
		if ($image) 
		{
		$filename = stripslashes($_FILES['attachment']['name']);
		$extension = $this->getExtension($filename);
		$extension = strtolower($extension);
		if (($extension != "jpg") && ($extension != "jpeg") 
		&& ($extension != "png") && ($extension != "gif")) 
		{
		// echo ' Unknown Image extension ';
		 $upload = new HTTP_Upload();
		 $file   = $upload->getFiles("attachment");
			  //  if(PEAR::isError($file   = $upload->getFiles("attachment"))) {
				$this->errorOut("Please upload a valid file", "/addproductFocus");
		  //  }
		$errors=1;
		}
		else
		{
		$size=filesize($_FILES['attachment']['tmp_name']);

		if ($size > MAX_SIZE*1024)
		{
		echo "You have exceeded the size limit";
		$errors=1;
		}

		if($extension=="jpg" || $extension=="jpeg" )
		{
		$uploadedfile = $_FILES['attachment']['tmp_name'];
		$src = imagecreatefromjpeg($uploadedfile);
		}
		else if($extension=="png")
		{
		$uploadedfile = $_FILES['attachment']['tmp_name'];
		$src = imagecreatefrompng($uploadedfile);
		}
		else 
		{
		$src = imagecreatefromgif($uploadedfile);
		}

		list($width,$height)=getimagesize($uploadedfile);

		$newwidth=200;
		$newheight=($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);

		$newwidth1=150;
		$newheight1=($height/$width)*$newwidth1;
		$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
		$width,$height);

		imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1, 
		$width,$height);
		$original_filename = $_FILES['attachment']['name'];
		$path_parts = pathinfo($_FILES['attachment']['name']);
		$image_path = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];


		$filename = $_SERVER['DOCUMENT_ROOT']."/product_focus_images/". $image_path;
		$filename1 = $_SERVER['DOCUMENT_ROOT']."/product_focus_images_thumb/". $image_path;

		imagejpeg($tmp,$filename,100);
		imagejpeg($tmp1,$filename1,100);

		imagedestroy($src);
		imagedestroy($tmp);
		imagedestroy($tmp1);
		$date = date('Y-m-d h:i:s'); 
		// die;
		$mysql_query = "UPDATE lead_generator_product_focus SET image='".$image_path."'  WHERE id = '".$id."'";		
		mysql_query($mysql_query);
		
		}

        }


       	$mysql_query = "UPDATE lead_generator_product_focus SET description='".$_REQUEST['description']."'  WHERE id = '".$id."'";		
		mysql_query($mysql_query);
		// 
		//die;

        $this->redirect();
	}
  		// if()
}