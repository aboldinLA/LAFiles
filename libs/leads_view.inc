 	<?

//$data = $V->vendor($id);

$V->fetch($_REQUEST['id']);

$phone_list = array();

                 
$comp_name = $V->getCompanyName();
$address = $V->getCompanyAddress();
$city = $V->getCompanyCity();
$state = $V->getCompanyState();
$zip = $V->getCompanyPostalCode();
$country = $V->country;
$profile= $V->getProfile();
$area_code = $V->getCompanyPhoneAreaCode();
$phone = $V->getCompanyPhone();
$fax = $V->getCompanyFax();
if(is_null($fax) || $fax == "") {
	$area_fax = "";
}
//$fax = $data['fax'];
$website = $V->getWebsite();
$email = $V->getCompanyEmail();
$request = $V->info_request;
$vst = $V->vendor_type_id;
$sign_up  = $V->input_date;
$active  = $V->active;
$logo  = $V->logo;

$hot = $data['hot'];
$list  = $data['list'];

$profile = $V->getProfile();
//$fee  = $data['fee'];
//$alt  = $data['alt'];
$xlist = explode(",",$V->xlist);

if (strpos($PHP_SELF, "ven_view.php")) $admin=1;

if (strlen($logo)) {?>

<? } ?>
		<tr>
			<TD colspan='6' valign='top'>
				<h3>Lead Report for Advertiser: <?echo $comp_name?></h3>
			</TD>
        </tr>
		
		<tr>
			<td colspan='6'>
				<img src="/vendor/images/leads-Bar1.jpg">
			</td>
		</tr>
		

		
		<tr>
			<td colspan='6'>
		 		<? $V->vendor_prod($id,$admin); ?>
			</td>
		</tr>
