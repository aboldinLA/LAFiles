<?

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
$xlist = explode(",",$V->xlist);

if (strpos($PHP_SELF, "ven_view.php")) $admin=1;

if (strlen($logo)) {?>
	<TR>
    	<TD colspan=2><img src="/products/images/<?=$logo?>"></TD> 
	</TR>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
<? } ?>
	<TR>
		<TD colspan='2' valign='top' style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; font-weight:bold"></TD>
	</tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>     
	<tr>
		<TD><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Address:<? echo $status ?></span></TD> 
		<TD ><?echo $address?></TD>
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>      
	<tr>
		<TD nowrap ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">City/State/Zip:</span></TD> 
		<TD ><?echo $city?>, <? echo $state?>, <?echo $zip?></TD> 
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
    <tr>
		<TD ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Country:</span></TD> 
		<TD ><?echo $country?></TD> 
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
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
		<TD ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Phone:</span></TD>
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
    	<td style="line-height:5px">&nbsp;</td>
    </tr>      
	<tr>
		<TD ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Fax:</span></TD>
		<TD ><strong><?echo $area_fax ?></strong> <?echo $fax ?></TD> 
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>      
	<tr>
		<TD ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Website:</span></TD>
		<?  if ($website) {
				if (!strpos($website, "http://")) $website = "http://" . $website; ?>
				<TD ><a href='javascript:open_window("<?= $website?>",700,600);'><?= $website?></a></TD> 
				<? } else { ?> 
				<td>Not provided</td>
				<? } ?>
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
    
								<script>
	
									function myButtonFunction5() {
										
										var comp = "<?php echo $comp_name ?>";
										var coem = "<?php echo $email ?>";
										var coid = "<?php echo $id ?>";
										window.open("https://landscapearchitect.com/products/prod-request2.php?mainco="+comp+"&mainem="+coem+"&mainid="+coid, "_blank", "toolbar=no,scrollbars=no,resizable=yes,top=300,left=500,width=800,height=900");
									   }
											
											
											
								</script>                 
    
    
    
         
	<tr>
		<TD ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Email:</span></TD>
		<TD ><a href="#" onClick="myButtonFunction5()"><img width="40%" src="https://landscapearchitect.com/images/Request-more-product-info.jpg"></a> </TD>
    </tr> 
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>     
	<tr>
		<TD ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Vendor type:</span></TD>
        <TD ><? echo $V->vendor_type_name($vst)?></TD>
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>     
        <?  if ($profile) { ?> 
    <tr>
		<TD valign='top' ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Vendor Profile:</span></TD>
        <TD ><? echo $profile?></TD>
    </tr> 
    <tr>
    	<td style="line-height:10px">&nbsp;</td>
    </tr> 
    
    </table>
    
    <table>
    <tr>
		<TD valign='top' colspan="2" ><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Vendor Products:</span></TD>
    </tr>    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>        
	<? } ?>
		 <!-- <tr>
				<TD valign="top" ><B>Categories:</B></TD>
				<TD>
				<?
                    $V->displayListingSummary(FALSE);
				    //$V->get_vendor_inputs($xlist,$admin);
				?>
			</TD>
		 </tr> -->
	<tr>
    	<td colspan=2 width="763">
		 		<?   
					$V->vendor_prod($id,$admin);
				?>
		</td>
   </tr>
