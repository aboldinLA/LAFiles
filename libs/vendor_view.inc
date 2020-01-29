<?

//$data = $V->vendor($id);

$V->fetch($_REQUEST['id']);

$phone_list = array();
/*
    $query = "SELECT DISTINCT 
    				v.*, c.phone_number, c.phone_area_code 
    		  FROM " .
                 " new_vendor as v " .
              "LEFT JOIN " .
                 "contacts as c ON (c.ref_id=v.id AND c.ref_type='ven') " .
              "WHERE " .
                 "v.active=1 " .
                 "AND c.active=1 " .
                 "AND v.status > 0 " .
                 "AND v.id = '" . $_REQUEST['id'] . "'";
                 
$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {
    $phone_list[] = "<b>" . $row["phone_area_code"] . "</b>-" . $row["phone_number"];
}

*/

                 
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
<TR>
    <TD colspan=2><img src="/products/images/<?=$logo?>"></TD> 
</TR> 
<? } ?>
	<TR>
				<TD colspan='2' valign='top'><h4><?echo $comp_name?> </TD>
        </tr>
		 <tr>
				<TD nowrap><B>Address:</B></TD> 
				<TD ><?echo $address?></TD>
        </tr> 
		 <tr>
				<TD nowrap ><B>City/State/Zip:</B></TD> 
				<TD ><?echo $city?>, <? echo $state?>, <?echo $zip?></TD> 
        </tr> 
		 <tr>
				<TD ><B>Country:</B></TD> 
				<TD ><?echo $country?></TD> 
        </tr> 
		<? if ($alt) { ?>
		<tr>
				<TD nowrap><B>Alternate Address:</B></TD>
				<TD ><?echo $alt?></TD> 
        </tr> 
		<? } if ($admin == 1) { ?>
			 <tr>
        </tr> 
		<? } ?>
		 <tr>
				<TD ><B>Phone:</B></TD>
				<TD ><?echo $phone ?></TD> 
				<?php 
				/*
				?>
				<TD ><?php echo join("<br />",$phone_list); ?></b></TD> 
				<?php 
				*/
				
				?>
        </tr> 
		<tr>
				<TD ><B>Fax:</B></TD>
				<TD ><strong><?echo $area_fax ?></strong> <?echo $fax ?></TD> 
        </tr> 
		 <tr>
				<TD ><B>Website:</B></TD>
				<?  if ($website) {
					if (!strpos($website, "http://")) $website = "http://" . $website; ?>
				<TD ><a href='javascript:open_window("<?= $website?>",700,600);'><?= $website?></a></TD> 
				<? } else { ?> 
				<td>Not provided</td>
				<? } ?>
        </tr> 
		<tr>
				<TD ><B>Email:</B></TD>
				<TD ><a href="mailto:<?echo $email?>"><?echo $email?></a></TD>
        </tr> 
		 <tr>
				<TD ><B>Vendor type:</B></TD>
                <TD ><? echo $V->vendor_type_name($vst)?></TD>
        </tr>
        <?  if ($profile) { ?> 
        <tr>
				<TD valign='top' ><B>Vendor Profile:</B></TD>
                <TD ><? echo $profile?></TD>
        </tr> <? } ?>
		 <!-- <tr>
				<TD valign="top" ><B>Categories:</B></TD>
				<TD>
				<?
                    $V->displayListingSummary(FALSE);
				    //$V->get_vendor_inputs($xlist,$admin);
				?>
			</TD>
		 </tr> -->
		 <tr><td colspan=2>
		 		<?   
					$V->vendor_prod($id,$admin);
				?>
		</td></tr>
