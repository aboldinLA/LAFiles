
<?
include '../../includes/la_top-common.php';

include("../../includes/lo_common_new.inc");

//include '../../includes/class/media_class.inc';

$action = $_GET['action'];

$action2 = $_GET['action'];

$uid = $_GET['id'];

$id = $_GET['id'];


?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	 <?
		// include("../../includes/la_header-common.inc");
        
        
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	
	
	
		<?
			// include("../../includes/la_banner-common.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
			// include("../../includes/la_left-side-common2.inc");
		?>	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
				
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->
				
<div style="position: relative; left: 10px; top: 30px">				

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the Subscription Request and <br>Profile Management Center </center></span><br><br>
		<center><table><tr><td valign="middle"><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="250px" /></td><td style="width: 25px">&nbsp;</td><td><img src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" width="250px" /></td></tr></table></center>
<!--
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Subscription / Product Request Center</center></span>
	<center><h4 style="position: relative; top: 15px">Forgot Your Password?  Click Here</h4></center><br><br>
-->
	<!-- <center><img width="90%" src="images/prog-reg-button01.jpg"></center><br> -->
</div>
				
	<? $button = $_GET['action']; if ($button == 'edit') {    ?>		
			
	<div style="position: relative; left: 320px; top: 40px; z-index: 2000">
		
		<img src="https://landscapearchitect.com/imgz/skip-to-request-center-starburst.jpg" width="175px" alt="Skip to the product request center" onClick="window.location.href='https://landscapearchitect.com/subscriptions/sub3.php?action=edit&media_id=<? echo $_SESSION['uid']; ?>'">
				
				
		<!-- ORIGINAL BUTTON
		
				<button id="myBtn" style="font-size: 16px; padding: 5px; font-weight: bold; background-color: darkgoldenrod; box-shadow: 2px 2px #888888" onClick="window.location.href='https://landscapearchitect.com/subscriptions/sub3.php?action=edit&media_id=<? //echo $_SESSION['uid']; ?>'" />Skip to<br>
				The Product Info<br>
				Request Center</button>   
		
		-->
		
	</div>
			
	<?   }   ?>		

                
<!-- Old Code Start -->




<SCRIPT language="javascript" type="text/javascript">
function validate(){
	if (document.form1.comp_name.value.length < 1) {
		alert("Please enter your company name.");
		return false;
	}
	if (document.form1.first_name.value.length < 2) {
		alert("Please enter your first name.");
		return false;
	}
	if (document.form1.last_name.value.length < 2) {
		alert("Please enter your last name.");
		return false;
	}
	if (document.form1.address.value.length < 3) {
		alert("Please enter your company address.");
		return false;
	}	
	if (document.form1.city.value.length < 3) {
		alert("Please enter your city.");
		return false;
	}	
	if (document.form1.state.value.length < 1) {
		alert("Please enter your state.");
		return false;
	}
	if (document.form1.zip.value.length < 3) {
		alert("Please enter your zip code.");
		return false;
	}	
	if (document.form1.area_code.value.length < 3) {
		alert("Please enter your area code.");
		return false;
	}	
	if (document.form1.phone.value.length < 3) {
		alert("Please enter your phone number.");
		return false;
	}
	if (document.form1.email.value.length < 3) {
		alert("Please enter your email address.");
		return false;
	}	
	if (document.form1.month.value.length < 1) {
		alert("Please enter the city you were born in.");
		return false;
	}
	if (document.form1.brand.value.length < 1) {
		alert("Please enter the city you were born in.");
		return false;
	}	
	return true;
}
</script>

<? 
                

                
                
                
                
                
                if ($action == 'edit') {
                
                
                $webId = $_GET['id'];
                
				
                include '../../includes/connect3.inc';

				// Edit Fill

					$sql="select * from subscribe where id='" . $webId . "'";
					$result = $conn->query($sql);									

												
						while($row = mysqli_fetch_array($result)) {
                            
                            
                            $firstName = $row['first_name'];
                            $last_name = $row['last_name'];
                            $comp_name = $row['comp_name'];
                            $address = $row['address'];
                            $city = $row['city'];
                            $state = $row['state'];
                            $zip = $row['zip'];
                            $phone = $row['phone'];
                            $fax = $row['fax'];
                            $email = $row['email'];
                            
                
                ?>


<form NAME="form1" method="post" action="sub2.php" onSubmit="return validate();">
<input type="hidden" name="action" value="<?=$action2 ?>">
<? if ($action == "edit") { ?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="protype" value="<?=$DISPLAY['protype']?>">
<input type="hidden" name="subscribe" value="<?=$DISPLAY['subscribe']?>">
<? } else { ?>
<input type="hidden" name="protype" value="<?=$protype ?>">
<input type="hidden" name="subscribe" value="<?=$subscribe ?>">
<? } ?>
<!-- <div align="left" style="position: absolute; left:5px; top:35px"> -->
<div align="left" style="position: absolute; left:5px; top:65px"> 

<? if ($action == "new") {
	$sub_type = "Subscription Request Center <br> <a href=\"https://landscapearchitect.com/member/login3.php?t=s\"><span style=\"font-size:14px\">If you already have a password click here</span></a>";
	} else {
	$sub_type = "Subscription Management Center";
	}?>
 


    
  <div>


<? if ($error) $C->errors($error); ?>
<? if ($action == "edit" || $action == "renew") { ?>

    
	<? } ?>
 <div style="position:absolute; left: 280px; <? if ($action2 == 'edit') { echo 'top:515px'; } else { echo 'top:435px'; }   ?>">   
	 
<!-- Horizontal Bar Start -->
<div style="position:relitive; left:0px; top:150px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->
    
    <div style="position:absolute; left:0px; top:20px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>Please Provide/Confirm Your Business Information</strong><br />
	</div>
    
    <div style="position:absolute; left:0px; top:50px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		Please make sure the following Information is complete.
        <span style="font-size:14px; font-weight:bold; color:#F00">&nbsp;&nbsp;&nbsp;*Required Field</span>
	</div>
</div>    

 <div style="position:absolute; left: 280px; <? if ($action2 == 'edit') { echo 'top:200px'; } else { echo 'top:120px'; }   ?>">   
	<div style="position:absolute; left:55px; top:400px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Your Name:</span>
		<INPUT NAME="first_name" SIZE="20" VALUE="<? echo $firstName; ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name">
		<INPUT NAME="last_name" SIZE="30" VALUE="<? echo $last_name; ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name">    
	</div>        
        
	<div style="position:absolute; left:18px; top:430px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Company Name:</span>
		<INPUT NAME="comp_name" SIZE="34"  VALUE="<? echo $comp_name; ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Name">
	</div>
	<div style="position:absolute; left:0px; top:460px; padding:0px; font-size:16px; width:750px; height:30px">
			<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Company Address:</span>	
			<INPUT NAME="address" SIZE="50"  VALUE="<? echo $address; ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Address">
    </div>
    
	<div style="position:absolute; left:110px; top:490px; padding:0px; font-size:16px; width:750px; height:30px">
			<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*City:</span>
		  	<INPUT NAME="city" SIZE="34"  VALUE="<? echo $city; ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="City">
	</div>
    
    
	<div style="position:absolute; left:100px; top:520px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*State:</span>
				   <SELECT NAME="state" SIZE="1" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> 
		<?
          if (strlen($DISPLAY['state']) > 2)    {?>
		           <OPTION VALUE="<?=$DISPLAY['state']?>"><?=$DISPLAY['state']?></OPTION> 
		  <?} else {?>
					<OPTION VALUE="">Choose State</OPTION> 
		 <?}?>						
                   <OPTION VALUE="AL" <?php if("AL"==$DISPLAY['state']) echo 'selected="selected"'?> >Alabama</OPTION>
                   <OPTION VALUE="AK" <?php if("AK"==$DISPLAY['state']) echo 'selected="selected"'?> >Alaska</OPTION>
                   <OPTION VALUE= "AB" <?php if("AB"==$DISPLAY['state']) echo 'selected="selected"'?> >Alberta</OPTION>
                   <OPTION VALUE= "AZ" <?php if("AZ"==$DISPLAY['state']) echo 'selected="selected"'?> >Arizona</OPTION>
                   <OPTION VALUE= "AR" <?php if("AR"==$DISPLAY['state']) echo 'selected="selected"'?> >Arkansas</OPTION>
                   <OPTION VALUE= "BC" <?php if("BC"==$DISPLAY['state']) echo 'selected="selected"'?> >British Columbia</OPTION>
                   <OPTION VALUE= "CA" <?php if("CA"==$DISPLAY['state']) echo 'selected="selected"'?> >California</OPTION>
                   <OPTION VALUE= "CO" <?php if("CO"==$DISPLAY['state']) echo 'selected="selected"'?> >Colorado</OPTION>
					<OPTION VALUE= "CT" <?php if("CT"==$DISPLAY['state']) echo 'selected="selected"'?> >Connecticut</OPTION>
                  <OPTION VALUE= "DE" <?php if("DE"==$DISPLAY['state']) echo 'selected="selected"'?> >Delaware</OPTION>
                  <OPTION VALUE= "DC" <?php if("DC"==$DISPLAY['state']) echo 'selected="selected"'?> >District of Columbia</OPTION>
                  <OPTION VALUE= "FL" <?php if("FL"==$DISPLAY['state']) echo 'selected="selected"'?> >Florida</OPTION>
                  <OPTION VALUE=  "GA" <?php if("GA"==$DISPLAY['state']) echo 'selected="selected"'?> >Georgia</OPTION>
                  <OPTION VALUE=  "HI" <?php if("HI"==$DISPLAY['state']) echo 'selected="selected"'?> >Hawaii</OPTION>
                  <OPTION VALUE=  "ID" <?php if("ID"==$DISPLAY['state']) echo 'selected="selected"'?> >Idaho</OPTION>
                  <OPTION VALUE=  "IL" <?php if("IL"==$DISPLAY['state']) echo 'selected="selected"'?> >Illinois</OPTION>
                  <OPTION VALUE=  "IN" <?php if("IN"==$DISPLAY['state']) echo 'selected="selected"'?> >Indiana</OPTION>
                  <OPTION VALUE=  "IA" <?php if("IA"==$DISPLAY['state']) echo 'selected="selected"'?> >Iowa</OPTION>
                   <OPTION VALUE= "KS" <?php if("KS"==$DISPLAY['state']) echo 'selected="selected"'?> >Kansas</OPTION>
                    <OPTION VALUE="KY" <?php if("KY"==$DISPLAY['state']) echo 'selected="selected"'?> >Kentucky</OPTION>
                    <OPTION VALUE="LA" <?php if("LA"==$DISPLAY['state']) echo 'selected="selected"'?> >Louisiana</OPTION>
                    <OPTION VALUE="ME" <?php if("ME"==$DISPLAY['state']) echo 'selected="selected"'?> >Maine</OPTION>
                   <OPTION VALUE= "MB" <?php if("MB"==$DISPLAY['state']) echo 'selected="selected"'?> >Manitoba</OPTION>
                    <OPTION VALUE="MD" <?php if("MD"==$DISPLAY['state']) echo 'selected="selected"'?> >Maryland</OPTION>
                   <OPTION VALUE= "MA" <?php if("MA"==$DISPLAY['state']) echo 'selected="selected"'?> >Massachusetts</OPTION>
                   <OPTION VALUE= "MI" <?php if("MI"==$DISPLAY['state']) echo 'selected="selected"'?> >Michigan</OPTION>
                   <OPTION VALUE= "MN" <?php if("MN"==$DISPLAY['state']) echo 'selected="selected"'?> >Minnesota</OPTION>
                    <OPTION VALUE="MS" <?php if("MS"==$DISPLAY['state']) echo 'selected="selected"'?> >Mississippi</OPTION>
                   <OPTION VALUE= "MO" <?php if("MO"==$DISPLAY['state']) echo 'selected="selected"'?> >Missouri</OPTION>
                   <OPTION VALUE= "MT" <?php if("MT"==$DISPLAY['state']) echo 'selected="selected"'?> >Montana</OPTION>
                   <OPTION VALUE= "NE" <?php if("NE"==$DISPLAY['state']) echo 'selected="selected"'?> >Nebraska</OPTION>
                    <OPTION VALUE="NV" <?php if("NV"==$DISPLAY['state']) echo 'selected="selected"'?> >Nevada</OPTION>
                    <OPTION VALUE="NB" <?php if("NB"==$DISPLAY['state']) echo 'selected="selected"'?> >New Brunswick</OPTION>
                   <OPTION VALUE= "NF" <?php if("NF"==$DISPLAY['state']) echo 'selected="selected"'?> >Newfoundland</OPTION>
                   <OPTION VALUE= "NH" <?php if("NH"==$DISPLAY['state']) echo 'selected="selected"'?> >New Hampshire</OPTION>
                   <OPTION VALUE= "NJ" <?php if(",J"==$DISPLAY['state']) echo 'selected="selected"'?> >New Jersey</OPTION>
                   <OPTION VALUE= "NM" <?php if("NM"==$DISPLAY['state']) echo 'selected="selected"'?> >New Mexico</OPTION>
                   <OPTION VALUE= "NY" <?php if("NY"==$DISPLAY['state']) echo 'selected="selected"'?> >New York</OPTION>
                   <OPTION VALUE= "NC" <?php if("NC"==$DISPLAY['state']) echo 'selected="selected"'?> >North Carolina</OPTION>
                   <OPTION VALUE= "ND" <?php if("ND"==$DISPLAY['state']) echo 'selected="selected"'?> >North Dakota</OPTION>
                   <OPTION VALUE= "NT" <?php if("NT"==$DISPLAY['state']) echo 'selected="selected"'?> >Northwest Territories</OPTION>
                   <OPTION VALUE= "NS" <?php if("NS"==$DISPLAY['state']) echo 'selected="selected"'?> >Nova Scotia</OPTION>
                   <OPTION VALUE= "OH" <?php if("OH"==$DISPLAY['state']) echo 'selected="selected"'?> >Ohio</OPTION>
                   <OPTION VALUE= "OK" <?php if("OK"==$DISPLAY['state']) echo 'selected="selected"'?> >Oklahoma</OPTION>
                   <OPTION VALUE= "ON" <?php if("ON"==$DISPLAY['state']) echo 'selected="selected"'?> >Ontario</OPTION>
                   <OPTION VALUE= "OR" <?php if("OR"==$DISPLAY['state']) echo 'selected="selected"'?> >Oregon</OPTION>
                    <OPTION VALUE="PA" <?php if("PA"==$DISPLAY['state']) echo 'selected="selected"'?> >Pennsylvania</OPTION>
                    <OPTION VALUE="QC" <?php if("QC"==$DISPLAY['state']) echo 'selected="selected"'?> >Quebec</OPTION>
                    <OPTION VALUE="RI" <?php if("RI"==$DISPLAY['state']) echo 'selected="selected"'?> >Rhode Island</OPTION>
                   <OPTION VALUE= "SK" <?php if("SK"==$DISPLAY['state']) echo 'selected="selected"'?> >Saskatchewan</OPTION>
                    <OPTION VALUE="SC" <?php if("SC"==$DISPLAY['state']) echo 'selected="selected"'?> >South Carolina</OPTION>
                    <OPTION VALUE="SD" <?php if("SD"==$DISPLAY['state']) echo 'selected="selected"'?> >South Dakota</OPTION>
                    <OPTION VALUE="TN" <?php if("TN"==$DISPLAY['state']) echo 'selected="selected"'?> >Tennessee</OPTION>
                   <OPTION VALUE= "TX" <?php if("TX"==$DISPLAY['state']) echo 'selected="selected"'?> >Texas</OPTION>
                  <OPTION VALUE=  "UT" <?php if("UT"==$DISPLAY['state']) echo 'selected="selected"'?> >Utah</OPTION>
                  <OPTION VALUE=  "VT" <?php if("VT"==$DISPLAY['state']) echo 'selected="selected"'?> >Vermont</OPTION>
                  <OPTION VALUE=  "VA" <?php if("VA"==$DISPLAY['state']) echo 'selected="selected"'?> >Virginia</OPTION>
                   <OPTION VALUE= "WA" <?php if("WA"==$DISPLAY['state']) echo 'selected="selected"'?> >Washington</OPTION>
                   <OPTION VALUE= "WV" <?php if("WV"==$DISPLAY['state']) echo 'selected="selected"'?> >West Virginia</OPTION>
                   <OPTION VALUE= "WI" <?php if("WI"==$DISPLAY['state']) echo 'selected="selected"'?> >Wisconsin</OPTION>
                   <OPTION VALUE= "WY" <?php if("WY"==$DISPLAY['state']) echo 'selected="selected"'?> >Wyoming</OPTION>
                   <OPTION VALUE= "YT" <?php if("YT"==$DISPLAY['state']) echo 'selected="selected"'?> >Yukon</OPTION>
						</SELECT>
	</div>
 
	<div style="position:absolute; left:72px; top:550px; padding:0px; font-size:16px; width:750px; height:30px">
            <span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Zip Code:</span>
		  	<INPUT NAME="zip" SIZE="34"  VALUE="<? echo $zip; ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Zip Code">
	</div>
    
    	<div style="position:absolute; left:95px; top:580px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Mail To:</span>
		<? if ($DISPLAY['mail_to'] == "alt") {
				$altchk="checked";
			} else {
				$compchk="checked";
			}?>
		   <INPUT TYPE="radio" value="comp" name="mail_to" <?=$compchk?>>&nbsp;Company address above
           </div>
		   <div style="position:absolute; left:158px; top:610px; padding:0px; font-size:16px; width:500px; height:30px">
				<INPUT TYPE="radio" value="alt" name="mail_to" <?=$altchk?>>&nbsp;Alternate address below:
           </div>
			<div style="position:absolute; left:159px; top:630px; padding:0px; width:500px; height:30px">
				<TEXTAREA COLS="50" NAME="alt_mail" ROWS="3" value="<?=$DISPLAY['alt'];?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Optional Address"><?=$DISPLAY['alt'];?></TEXTAREA>
			</div>

	<div style="position:absolute; left:95px; top:660px; padding:0px; font-size:16px; width:750px; height:30px">
				<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Phone:</span>
		<INPUT NAME="phone" SIZE="15" VALUE="<? echo $phone; ?>" MAXLENGTH="12" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Phone Number" ><span style="font-size:12px; font-style:italic">&nbsp;&nbsp;&nbsp;(Please include Area Code)</span>
	</div>
	<div style="position:absolute; left:120px; top:695px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">FAX:</span>
		<INPUT NAME="fax" SIZE="15" VALUE="<? echo $fax; ?>" MAXLENGTH="12"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"  placeholder="Fax Number"><span style="font-size:12px; font-style:italic">&nbsp;&nbsp;&nbsp;(Please include Area Code)</span>
	</div>
	<div style="position:absolute; left:100px; top:730px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Email:</span>
		<INPUT NAME="email" SIZE="54"  VALUE="<? echo $email; ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address">
	</div>
    
    <div style="position:absolute; left:159px; top:763px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:12px">
		<a href="/research/Privacy-Policies/LCI-Privacy-Statement.pdf">Never Sold or Given to 3rd Party (See Privacy Policy)</a><br><br>
	</div>
   

    
    <div style="position:absolute; left:0px; top:-100px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
    	
   <div style="position:absolute; left:0px; top:935px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>&nbsp;</strong>
	</div>
        
        
        
        
        
        
        
		
		<?
              
}} else {
                
                
?>
        
<form NAME="form1" method="post" action="<?echo $PHP_SELF?>" onSubmit="return validate();">
<input type="hidden" name="action" value="<?=$action ?>">
<? if ($action == "edit") { ?>
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="protype" value="<?=$DISPLAY['protype']?>">
<input type="hidden" name="subscribe" value="<?=$DISPLAY['subscribe']?>">
<? } else { ?>
<input type="hidden" name="protype" value="<?=$protype ?>">
<input type="hidden" name="subscribe" value="<?=$subscribe ?>">
<? } ?>
<!-- <div align="left" style="position: absolute; left:5px; top:35px"> -->
<div align="left" style="position: absolute; left:5px; top:65px"> 

<? if ($action == "new") {
	$sub_type = "Subscription Request Center <br> <a href=\"https://landscapearchitect.com/member/login3.php?t=s\"><span style=\"font-size:14px\">If you already have a password click here</span></a>";
	} else {
	$sub_type = "Subscription Management Center";
	}?>
 


    
  <div>


<? if ($error) $C->errors($error); ?>
<? if ($action == "edit" || $action == "renew") { ?>

    
	<? } ?>
 <div style="position:absolute; left: 280px; <? if ($action2 == 'edit') { echo 'top:515px'; } else { echo 'top:435px'; }   ?>">   
	 
<!-- Horizontal Bar Start -->
<div style="position:relitive; left:0px; top:150px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->
    
    <div style="position:absolute; left:0px; top:20px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>Please Provide/Confirm Your Business Information</strong><br />
	</div>
    
    <div style="position:absolute; left:0px; top:50px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		Please make sure the following Information is complete.
        <span style="font-size:14px; font-weight:bold; color:#F00">&nbsp;&nbsp;&nbsp;*Required Field</span>
	</div>
</div>    

 <div style="position:absolute; left: 280px; <? if ($action2 == 'edit') { echo 'top:200px'; } else { echo 'top:120px'; }   ?>">   
	<div style="position:absolute; left:55px; top:400px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Your Name:</span>
		<INPUT NAME="first_name" SIZE="20" VALUE="<?=$DISPLAY['first_name']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name">
		<INPUT NAME="last_name" SIZE="30" VALUE="<?=$DISPLAY['last_name']?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name">    
	</div>        
        
	<div style="position:absolute; left:18px; top:430px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Company Name:</span>
		<INPUT NAME="comp_name" SIZE="34"  VALUE="<?=$DISPLAY['comp_name'] ;?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Name">
	</div>
	<div style="position:absolute; left:0px; top:460px; padding:0px; font-size:16px; width:750px; height:30px">
			<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Company Address:</span>	
			<INPUT NAME="address" SIZE="50"  VALUE="<?=$DISPLAY['address']?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Address">
    </div>
    
	<div style="position:absolute; left:110px; top:490px; padding:0px; font-size:16px; width:750px; height:30px">
			<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*City:</span>
		  	<INPUT NAME="city" SIZE="34"  VALUE="<?=$DISPLAY['city'] ;?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="City">
	</div>
    
    
	<div style="position:absolute; left:100px; top:520px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*State:</span>
				   <SELECT NAME="state" SIZE="1" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> 
		<?
          if (strlen($DISPLAY['state']) > 2)    {?>
		           <OPTION VALUE="<?=$DISPLAY['state']?>"><?=$DISPLAY['state']?></OPTION> 
		  <?} else {?>
					<OPTION VALUE="">Choose State</OPTION> 
		 <?}?>						
                   <OPTION VALUE="AL" <?php if("AL"==$DISPLAY['state']) echo 'selected="selected"'?> >Alabama</OPTION>
                   <OPTION VALUE="AK" <?php if("AK"==$DISPLAY['state']) echo 'selected="selected"'?> >Alaska</OPTION>
                   <OPTION VALUE= "AB" <?php if("AB"==$DISPLAY['state']) echo 'selected="selected"'?> >Alberta</OPTION>
                   <OPTION VALUE= "AZ" <?php if("AZ"==$DISPLAY['state']) echo 'selected="selected"'?> >Arizona</OPTION>
                   <OPTION VALUE= "AR" <?php if("AR"==$DISPLAY['state']) echo 'selected="selected"'?> >Arkansas</OPTION>
                   <OPTION VALUE= "BC" <?php if("BC"==$DISPLAY['state']) echo 'selected="selected"'?> >British Columbia</OPTION>
                   <OPTION VALUE= "CA" <?php if("CA"==$DISPLAY['state']) echo 'selected="selected"'?> >California</OPTION>
                   <OPTION VALUE= "CO" <?php if("CO"==$DISPLAY['state']) echo 'selected="selected"'?> >Colorado</OPTION>
					<OPTION VALUE= "CT" <?php if("CT"==$DISPLAY['state']) echo 'selected="selected"'?> >Connecticut</OPTION>
                  <OPTION VALUE= "DE" <?php if("DE"==$DISPLAY['state']) echo 'selected="selected"'?> >Delaware</OPTION>
                  <OPTION VALUE= "DC" <?php if("DC"==$DISPLAY['state']) echo 'selected="selected"'?> >District of Columbia</OPTION>
                  <OPTION VALUE= "FL" <?php if("FL"==$DISPLAY['state']) echo 'selected="selected"'?> >Florida</OPTION>
                  <OPTION VALUE=  "GA" <?php if("GA"==$DISPLAY['state']) echo 'selected="selected"'?> >Georgia</OPTION>
                  <OPTION VALUE=  "HI" <?php if("HI"==$DISPLAY['state']) echo 'selected="selected"'?> >Hawaii</OPTION>
                  <OPTION VALUE=  "ID" <?php if("ID"==$DISPLAY['state']) echo 'selected="selected"'?> >Idaho</OPTION>
                  <OPTION VALUE=  "IL" <?php if("IL"==$DISPLAY['state']) echo 'selected="selected"'?> >Illinois</OPTION>
                  <OPTION VALUE=  "IN" <?php if("IN"==$DISPLAY['state']) echo 'selected="selected"'?> >Indiana</OPTION>
                  <OPTION VALUE=  "IA" <?php if("IA"==$DISPLAY['state']) echo 'selected="selected"'?> >Iowa</OPTION>
                   <OPTION VALUE= "KS" <?php if("KS"==$DISPLAY['state']) echo 'selected="selected"'?> >Kansas</OPTION>
                    <OPTION VALUE="KY" <?php if("KY"==$DISPLAY['state']) echo 'selected="selected"'?> >Kentucky</OPTION>
                    <OPTION VALUE="LA" <?php if("LA"==$DISPLAY['state']) echo 'selected="selected"'?> >Louisiana</OPTION>
                    <OPTION VALUE="ME" <?php if("ME"==$DISPLAY['state']) echo 'selected="selected"'?> >Maine</OPTION>
                   <OPTION VALUE= "MB" <?php if("MB"==$DISPLAY['state']) echo 'selected="selected"'?> >Manitoba</OPTION>
                    <OPTION VALUE="MD" <?php if("MD"==$DISPLAY['state']) echo 'selected="selected"'?> >Maryland</OPTION>
                   <OPTION VALUE= "MA" <?php if("MA"==$DISPLAY['state']) echo 'selected="selected"'?> >Massachusetts</OPTION>
                   <OPTION VALUE= "MI" <?php if("MI"==$DISPLAY['state']) echo 'selected="selected"'?> >Michigan</OPTION>
                   <OPTION VALUE= "MN" <?php if("MN"==$DISPLAY['state']) echo 'selected="selected"'?> >Minnesota</OPTION>
                    <OPTION VALUE="MS" <?php if("MS"==$DISPLAY['state']) echo 'selected="selected"'?> >Mississippi</OPTION>
                   <OPTION VALUE= "MO" <?php if("MO"==$DISPLAY['state']) echo 'selected="selected"'?> >Missouri</OPTION>
                   <OPTION VALUE= "MT" <?php if("MT"==$DISPLAY['state']) echo 'selected="selected"'?> >Montana</OPTION>
                   <OPTION VALUE= "NE" <?php if("NE"==$DISPLAY['state']) echo 'selected="selected"'?> >Nebraska</OPTION>
                    <OPTION VALUE="NV" <?php if("NV"==$DISPLAY['state']) echo 'selected="selected"'?> >Nevada</OPTION>
                    <OPTION VALUE="NB" <?php if("NB"==$DISPLAY['state']) echo 'selected="selected"'?> >New Brunswick</OPTION>
                   <OPTION VALUE= "NF" <?php if("NF"==$DISPLAY['state']) echo 'selected="selected"'?> >Newfoundland</OPTION>
                   <OPTION VALUE= "NH" <?php if("NH"==$DISPLAY['state']) echo 'selected="selected"'?> >New Hampshire</OPTION>
                   <OPTION VALUE= "NJ" <?php if(",J"==$DISPLAY['state']) echo 'selected="selected"'?> >New Jersey</OPTION>
                   <OPTION VALUE= "NM" <?php if("NM"==$DISPLAY['state']) echo 'selected="selected"'?> >New Mexico</OPTION>
                   <OPTION VALUE= "NY" <?php if("NY"==$DISPLAY['state']) echo 'selected="selected"'?> >New York</OPTION>
                   <OPTION VALUE= "NC" <?php if("NC"==$DISPLAY['state']) echo 'selected="selected"'?> >North Carolina</OPTION>
                   <OPTION VALUE= "ND" <?php if("ND"==$DISPLAY['state']) echo 'selected="selected"'?> >North Dakota</OPTION>
                   <OPTION VALUE= "NT" <?php if("NT"==$DISPLAY['state']) echo 'selected="selected"'?> >Northwest Territories</OPTION>
                   <OPTION VALUE= "NS" <?php if("NS"==$DISPLAY['state']) echo 'selected="selected"'?> >Nova Scotia</OPTION>
                   <OPTION VALUE= "OH" <?php if("OH"==$DISPLAY['state']) echo 'selected="selected"'?> >Ohio</OPTION>
                   <OPTION VALUE= "OK" <?php if("OK"==$DISPLAY['state']) echo 'selected="selected"'?> >Oklahoma</OPTION>
                   <OPTION VALUE= "ON" <?php if("ON"==$DISPLAY['state']) echo 'selected="selected"'?> >Ontario</OPTION>
                   <OPTION VALUE= "OR" <?php if("OR"==$DISPLAY['state']) echo 'selected="selected"'?> >Oregon</OPTION>
                    <OPTION VALUE="PA" <?php if("PA"==$DISPLAY['state']) echo 'selected="selected"'?> >Pennsylvania</OPTION>
                    <OPTION VALUE="QC" <?php if("QC"==$DISPLAY['state']) echo 'selected="selected"'?> >Quebec</OPTION>
                    <OPTION VALUE="RI" <?php if("RI"==$DISPLAY['state']) echo 'selected="selected"'?> >Rhode Island</OPTION>
                   <OPTION VALUE= "SK" <?php if("SK"==$DISPLAY['state']) echo 'selected="selected"'?> >Saskatchewan</OPTION>
                    <OPTION VALUE="SC" <?php if("SC"==$DISPLAY['state']) echo 'selected="selected"'?> >South Carolina</OPTION>
                    <OPTION VALUE="SD" <?php if("SD"==$DISPLAY['state']) echo 'selected="selected"'?> >South Dakota</OPTION>
                    <OPTION VALUE="TN" <?php if("TN"==$DISPLAY['state']) echo 'selected="selected"'?> >Tennessee</OPTION>
                   <OPTION VALUE= "TX" <?php if("TX"==$DISPLAY['state']) echo 'selected="selected"'?> >Texas</OPTION>
                  <OPTION VALUE=  "UT" <?php if("UT"==$DISPLAY['state']) echo 'selected="selected"'?> >Utah</OPTION>
                  <OPTION VALUE=  "VT" <?php if("VT"==$DISPLAY['state']) echo 'selected="selected"'?> >Vermont</OPTION>
                  <OPTION VALUE=  "VA" <?php if("VA"==$DISPLAY['state']) echo 'selected="selected"'?> >Virginia</OPTION>
                   <OPTION VALUE= "WA" <?php if("WA"==$DISPLAY['state']) echo 'selected="selected"'?> >Washington</OPTION>
                   <OPTION VALUE= "WV" <?php if("WV"==$DISPLAY['state']) echo 'selected="selected"'?> >West Virginia</OPTION>
                   <OPTION VALUE= "WI" <?php if("WI"==$DISPLAY['state']) echo 'selected="selected"'?> >Wisconsin</OPTION>
                   <OPTION VALUE= "WY" <?php if("WY"==$DISPLAY['state']) echo 'selected="selected"'?> >Wyoming</OPTION>
                   <OPTION VALUE= "YT" <?php if("YT"==$DISPLAY['state']) echo 'selected="selected"'?> >Yukon</OPTION>
						</SELECT>
	</div>
 
	<div style="position:absolute; left:72px; top:550px; padding:0px; font-size:16px; width:750px; height:30px">
            <span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Zip Code:</span>
		  	<INPUT NAME="zip" SIZE="34"  VALUE="<?=$DISPLAY['zip'] ;?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Zip Code">
	</div>
    
    	<div style="position:absolute; left:95px; top:580px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Mail To:</span>
		<? if ($DISPLAY['mail_to'] == "alt") {
				$altchk="checked";
			} else {
				$compchk="checked";
			}?>
		   <INPUT TYPE="radio" value="comp" name="mail_to" <?=$compchk?>>&nbsp;Company address above
           </div>
		   <div style="position:absolute; left:158px; top:610px; padding:0px; font-size:16px; width:500px; height:30px">
				<INPUT TYPE="radio" value="alt" name="mail_to" <?=$altchk?>>&nbsp;Alternate address below:
           </div>
			<div style="position:absolute; left:159px; top:630px; padding:0px; width:500px; height:30px">
				<TEXTAREA COLS="50" NAME="alt_mail" ROWS="3" value="<?=$DISPLAY['alt'];?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Optional Address"><?=$DISPLAY['alt'];?></TEXTAREA>
			</div>

	<div style="position:absolute; left:95px; top:660px; padding:0px; font-size:16px; width:750px; height:30px">
				<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Phone:</span>
		<INPUT NAME="phone" SIZE="15" VALUE="<?=$DISPLAY['phone']?>" MAXLENGTH="12" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Phone Number" ><span style="font-size:12px; font-style:italic">&nbsp;&nbsp;&nbsp;(Please include Area Code)</span>
	</div>
	<div style="position:absolute; left:120px; top:695px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">FAX:</span>
		<INPUT NAME="fax" SIZE="15" VALUE="<?=$DISPLAY['fax'] ?>" MAXLENGTH="12"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"  placeholder="Fax Number"><span style="font-size:12px; font-style:italic">&nbsp;&nbsp;&nbsp;(Please include Area Code)</span>
	</div>
	<div style="position:absolute; left:100px; top:730px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Email:</span>
		<INPUT NAME="email" SIZE="54"  VALUE="<?=$DISPLAY['email'] ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address">
	</div>
    
    <div style="position:absolute; left:159px; top:763px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:12px">
		<a href="/research/Privacy-Policies/LCI-Privacy-Statement.pdf">Never Sold or Given to 3rd Party (See Privacy Policy)</a><br><br>
	</div>
   

    
    <div style="position:absolute; left:0px; top:-100px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
    	
   <div style="position:absolute; left:0px; top:935px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>&nbsp;</strong>
	</div>
		        
        
        <?
                }
		
        // Free result set
		//mysqli_free_result($result);              
              
              
        ?>

<script>
	
	//resets the cat dropdown 
	
	window.onbeforeunload = function () {
		    var s = document.getElementById("catSelectBox");
      s.onchange = function(){
        location.href = this.options[this.selectedIndex].value
      }
      s.selectedIndex = 0;
	}
	
  
	
		
</script>


<style>

	.flexbox-container {
		    display: flex;
    width: 100%;
    min-width: 1200px;
    margin: 0 auto;
    max-width: 1600px;
    padding-left: 40px;
    padding-right: 40px;
	}
	
	.sidebar {
		flex: 0 !important;
		margin-top: -105px;
	}
	
	.searchBarRow {

		padding-left: 40px;
		padding-right: 40px;
		margin: 0 auto;
		float: none;
	}
	
	.main {
		margin-top: 10px;
	}
	
	#keywordBox {
		width: 80%; 
		height: 31px; 
		box-shadow: 5px 5px 5px #888888; 
		padding: 3px; 
		position: relative; 
		top: -17px; 
		font-size: 20px; 
	}
	
		.keywordContain {
		margin-bottom: 40px;
		margin-top: 25px;
	}



</style>




		<div style="position: absolute; left: 50px; top: 900px; width: 750px">
		<strong><span style="font-size:22px; color:#C60">Also We Need A Personal Identifier <?  //echo $action2; ?></span></strong><br />
        		(It's A Post Office Requirement)<br /><br />
                <span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*The First Letter of the Name of my High School:</span><br />
                <INPUT NAME="month" SIZE="40" VALUE="<?=$DISPLAY['month']?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888; position: relative; top: 5px" placeholder="First Letter of High School"><br />           
			</div>     
                    
			
			
<!-- Horizontal Bar Start -->
<div style="position:absolute; left:20px; top:1040px; padding:0px; width:700px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->   			
   
    <!-- <div style="position:absolute; left:0px; top:1780px; padding:0px; font-size:16px; width:274px; height:30px">
         Page 1 of 3 
	</div> -->
	
			
	<?
	
                            include '../../includes/connect3.inc';
	
							$sql="select * from subscribe where id='338034'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									if (empty($row['opt_inla'])) {

										$opla =  "none";
										
									}
									
									if (empty($row['opt_inlc'])) {

										$oplc =  "none";
										
									}									
									
									if (empty($row['opt_intle'])) {

										$optle =  "none";
										
									}
									
									if (empty($row['opt_ineb'])) {

										$opeb =  "none";
										
									}

								}

								// Free result set
								mysqli_free_result($result);
					   
					   			if (($opla == "none") && ($opla == "none") && ($opla == "none") && ($opla == "none")) {
									
									$opTot = "allNone";
									
								}
	
	
	
	?>
			


			
				
<div style="position:absolute; left:-45px; top:1100px; padding:0px; font-size:16px; width:800px">
    
		
			<center>
		
				<img  src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" style="width:50%"><br/><br/>
		
		
				<table  width='650px' style="position: relative; left: -5px">
					<tr>
						<td colspan="2" align="center"><h3>I would like to subscribe / opt-in to receive<br>
										Landscape Architect &amp; Specifier News (LASN)</h3></td>
					</tr>
					
					<tr><td style="line-height: 10px">&nbsp;</td></tr>
						
					<tr>
						<td>
							
							<?
							
			   
			   				if ($action2 == 'edit') {
								
                                $uid = $_GET['id'];
                                
                            include '../../includes/connect3.inc';
                                
							$sql="select * from subscribe where id='" . $_GET['id'] . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									if (!empty($row['opt_inla'])) {

                                        
                                        $str = $row['opt_inla'];
                                        
                                        list($opt_inla001, $opt_inla002, $opt_inla003, $opt_inla004, $opt_inla005) = explode(',', $str);                                        
                                      
										
									}
									
								}                                
								  
								
	
							?>
							
									<?  if ($opTot == 'allNone') { ?>
							
									<div id="divCheckboxList" style="position: relative; left: 75px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_inla001" id="lasn1" value="LA-MS" checked />&nbsp;LASN Magazine Subscription</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inla002" id="lasn2" value="LA-CE" checked />&nbsp;LASN Calls for Editorial</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_inla003" id="lasn3" value="LA-DM" checked />&nbsp;LASN Digital Magazine</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inla004" id="lasn4" value="LA-ASP" checked />&nbsp;LASN Advertising Sales Promos</div></td>
											</tr>

											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td colspan="3" style="position: relative; left: 85px"><div><input type="checkbox" name="opt_inla005" id="lasn5" value="LA-W" checked />&nbsp;<img width="50%" src="https://landscapearchitect.com/lol-logos/la-details-weekly.jpg"><br><strong style="position: relative; left: 60px">Landscape Architect Details Weekly</strong></div></td>
											</tr>											
											
											
										</table>
									</div>
									<!-- <div id="divCheckAll"  style="position: relative; left: 75px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox4(this.checked);" />UnCheck All</div> -->								
							
							
									<?  } else {  //this is for edit ?>
							
									<div id="divCheckboxList" style="position: relative; left: 75px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_inla001" id="lasn1" <? if ($opt_inla001 == "LA-MS") echo "checked"; ?> value="LA-MS" />&nbsp;LASN Magazine Subscriptions</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inla002" id="lasn2" <? if ($opt_inla002 == "LA-CE") echo "checked";?> value="LA-CE" />&nbsp;LASN Calls for Editorial</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_inla003" id="lasn3" <? if ($opt_inla003 == "LA-DM") echo "checked";?> value="LA-DM" />&nbsp;LASN Digital Magazine</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inla004" id="lasn4" <? if ($opt_inla004 == "LA-ASP") echo "checked";?> value="LA-ASP" />&nbsp;LASN Advertising Sales Promos</div></td>
											</tr>

											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td colspan="3" style="position: relative; left: 85px"><div><input type="checkbox" name="opt_inla005" id="lasn5" <? if ($opt_inla005 == "LA-W") echo "checked";?> value="LA-W" />&nbsp;<img width="50%" src="https://landscapearchitect.com/lol-logos/la-details-weekly.jpg"><br><strong style="position: relative; left: 60px">Landscape Architect Weekly</strong></div></td>
											</tr>											
											
											
										</table>
									</div>
									<!-- <div id="divCheckAll"  style="position: relative; left: 75px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox4(this.checked);" />UnCheck All</div> -->
							
									<?  }  ?>
							
							
						
									<?  //$opt_inla[] = explode(',', $checkbox['opt_inla[]']);  ?>
							
								<? } elseif ($action2 == "new") {  //this is for new ?>
							
									<div id="divCheckboxList" style="position: relative; left: 75px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_inla001" id="lasn1" value="LA-MS" checked />&nbsp;LASN Magazine Subscription</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inla002" id="lasn2" value="LA-CE" checked />&nbsp;LASN Calls for Editorial</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_inla003" id="lasn3" value="LA-DM" checked />&nbsp;LASN Digital Magazine</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inla004" id="lasn4" value="LA-ASP" checked />&nbsp;LASN Advertising Sales Promos</div></td>
											</tr>

											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td colspan="3" style="position: relative; left: 85px"><div><input type="checkbox" name="opt_inla005" id="lasn5" value="LA-W" checked />&nbsp;<img width="50%" src="https://landscapearchitect.com/lol-logos/Landscape-Architect-Weekly-logo.png"><br><strong style="position: relative; left: 60px">Landscape Architect Weekly</strong></div></td>
											</tr>											
											
											
										</table>
									</div>
									<!-- <div id="divCheckAll"  style="position: relative; left: 75px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox4(this.checked);" />UnCheck All</div> -->									
						
									<?  //$opt_inla[] = explode(',', $checkbox['opt_inla[]']);  ?>
							
							<? } ?>
							
						
					  </td>
					</tr>
					
				</table>
	</center>
		
		
	</div>	
			
			
<!-- Horizontal Bar Start -->
<div style="position:absolute; left:20px; top:1500px; padding:0px; width:700px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End --> 			
			
			
			
<div style="position:absolute; left:-45px; top:1550px; padding:0px; font-size:16px; width:800px">
		
			<center>
		
				<img  src="https://landscapearchitect.com/lol-logos/LC-TLE19-Logo.jpg" style="width:50%"><br/><br/>
		
		
				<table  width='650px' style="position: relative; left: -5px">
					<tr>
						<td colspan="2" align="center"><h3>I would like to subscribe / opt-in to receive <br>
										Landscape Contractor, The Official Magazine of the Landscape Expo (LC-TLE)</h3></td>
					</tr>
					
					<tr><td style="line-height: 10px">&nbsp;</td></tr>
						
					<tr>
						<td>
							
							<?
							
			   
			   				if ($action2 == 'edit') {
								
                                $uid = $_GET['id'];
                                
                            include '../../includes/connect3.inc';
                                
							$sql="select * from subscribe where id='" . $_GET['id'] . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									if (!empty($row['opt_inlc'])) {

                                        
                                        $str = $row['opt_inlc'];
                                        
                                        list($opt_inlc001, $opt_inlc002, $opt_inlc003, $opt_inlc004, $opt_inlc005) = explode(',', $str);                                        
                                      
										
									}
									
								}                                
								  								
								  						
	
							?>							
							
									<?  if ($opTot == 'allNone') { ?>
							
									<div id="divCheckboxList" style="position: relative; left: 50px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_inlc001" value="LC-MS" checked />&nbsp;LC-TLE Magazine Subscription</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inlc002" value="LC-CE" checked />&nbsp;LC-TLE Calls for Editorial</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_inlc003" value="LC-DM" checked />&nbsp;LC-TLE Digital Magazine</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inlc004" value="LC-ASP" checked />&nbsp;LC-TLE Advertising Sales Promos</div></td>
											</tr>

																						
											
											
										</table>
									</div>
									 <!-- <div id="divCheckAll"  style="position: relative; left: 50px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox3(this.checked);" />UnCheck All</div> -->
							
							
									<?  } else {  ?>							
						
									<div id="divCheckboxList" style="position: relative; left: 50px">
										<table>
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_inlc001" id="lcdbm1" <? if ($opt_inlc001 == "LC-MS") echo "checked"; ?> value="LC-MS" />&nbsp;LC-TLE Magazine Subscription</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inlc002" id="lcdbm2" <? if ($opt_inlc002 == "LC-CE") echo "checked";?> value="LC-CE" />&nbsp;LC-TLE Calls for Editorial</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_inlc003" id="lcdbm3" <? if ($opt_inlc003 == "LC-DM") echo "checked";?> value="LC-DM" />&nbsp;LC-TLE Digital Magazine</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inlc004" id="lcdbm4" <? if ($opt_inlc004 == "LC-ASP") echo "checked";?> value="LC-ASP" />&nbsp;LC-TLE Advertising Sales Promos</div></td>
											</tr>

											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td colspan="3" style="position: relative; left: 85px"><div><input type="checkbox" name="opt_inlc005" id="lcdbm5" <? if ($opt_inlc005 == "LC-W") echo "checked";?> value="LC-W" />&nbsp;<img width="50%" src="https://landscapearchitect.com/lol-logos/TLE-Weekly-Logo.jpg"><br><strong style="position: relative; left: 60px">The Landscape Expo Weekly</strong></div></td>
											</tr>											
											
											
										</table>
									</div>
									 <!-- <div id="divCheckAll"  style="position: relative; left: 50px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox3(this.checked);" />UnCheck All</div> -->
										
										<?  }  ?>
										
						
								<? } elseif ($action2 == "new") { ?>
							
							
								<div id="divCheckboxList" style="position: relative; left: 100px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_inlc001" value="LC-MS" checked />&nbsp;LC-TLE Magazine Subscription</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inlc002" value="LC-CE" checked />&nbsp;LC-TLE Calls for Editorial</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_inlc003" value="LC-DM" checked />&nbsp;LC-TLE Digital Magazine</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_inlc004" value="LC-ASP" checked />&nbsp;LC-TLE Advertising Sales Promos</div></td>
											</tr>

											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td colspan="3" style="position: relative; left: 100px"><div><input type="checkbox" name="opt_inlc005" value="LC-W" checked />&nbsp;<img style="position: relative; left: 0px; top: 10px" width="50%" src="https://landscapearchitect.com/lol-logos/TLE-Weekly-Logo.jpg"><br><br><strong style="position: relative; left: 20px">The Landscape Expo Weekly</strong></div></td>
											</tr>											
											
											
										</table>
									</div>
									<!-- <div id="divCheckAll"  style="position: relative; left: 50px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox3(this.checked);" />UnCheck All</div> -->							
							
							<? } ?>
						
						</td>
					</tr>
					
				</table>
	</center>
		
		
	</div>	
			

			
<!-- Horizontal Bar Start -->
<!-- <div style="position:absolute; left:20px; top:1930px; padding:0px; width:700px; height:2px; background-color:#605b51;"> </div> -->
<!-- Horizontal Bar End --> 			
			
			
			
<div style="position:absolute; left:-45px; top:1980px; padding:0px; font-size:16px; width:800px">
		
			<center>
		
				<img  src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" style="width:50%"><br/><br/>
		
		
				<table  width='650px' style="position: relative; left: -5px">
					<tr>
						<td colspan="2" align="center"><h3>I would like to subscribe / opt-in to receive <br>
										The Landscape Expo (TLE)</h3></td>
					</tr>
					
					<tr><td style="line-height: 10px">&nbsp;</td></tr>
						
					<tr>
						<td>
							
							<?
							
			   
			   				if ($action2 == 'edit') {
								
                                $uid = $_GET['id'];
                                
                            include '../../includes/connect3.inc';
                                
							$sql="select * from subscribe where id='" . $_GET['id'] . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									if (!empty($row['opt_intle'])) {

                                        
                                        $str = $row['opt_intle'];
                                        
                                        list($opt_intle001, $opt_intle002) = explode(',', $str);                                        
                                      
										
									}
									
								}                                
								  																
	
							?>			
							
									<?  if ($opTot == 'allNone') { ?>
							
									<div id="divCheckboxList" style="position: relative; left: 135px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_intle001" value="TLE-AP" checked />&nbsp;TLE Attendance Promos</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_intle002" value="TLE-EP" checked />&nbsp;TLE Exhibitor Promos</div></td>
											</tr>
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td colspan="3" style="position: relative; left: 70px"><div><input type="checkbox" name="opt_inlc005" value="LC-W" checked />&nbsp;<img style="position: relative; left: 0px; top: 10px" width="50%" src="https://landscapearchitect.com/lol-logos/TLE-Weekly-Logo.jpg"><br><br><strong style="position: relative; left: 60px">The Landscape Expo Weekly</strong></div></td>
											</tr>
										</table>
									</div>
									<!-- <div id="divCheckAll"  style="position: relative; left: 135px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox2(this.checked);" />UnCheck All</div> -->								
												
							
							
									<?  } else {  ?>										
							
							
							
									<div id="divCheckboxList" style="position: relative; left: 135px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_intle001" <? if ($opt_intle001 == "TLE-AP") echo "checked";?> value="TLE-AP" />&nbsp;TLE Attendance Promos</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_intle002" <? if ($opt_intle002 == "TLE-EP") echo "checked";?> value="TLE-EP" />&nbsp;TLE Exhibitor Promos</div></td>
											</tr>
										</table>
									</div>
									<!-- <div id="divCheckAll"  style="position: relative; left: 135px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox2(this.checked);" />UnCheck All</div> -->
							
							
									<?  }  ?>
									
							
								<? } elseif ($action2 == "new") { ?>
							
							
							
									<div id="divCheckboxList" style="position: relative; left: 135px">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_intle001" value="TLE-AP" checked />&nbsp;TLE Attendance Promos</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_intle002" value="TLE-EP" checked />&nbsp;TLE Exhibitor Promos</div></td>
											</tr>
										</table>
									</div><br><br>
                            
<?   if ($action2 == 'edit') {   ?>	
		
<div style="position:absolute; left:0px; top:75px; padding:0px; font-size:16px; width:800px">
	
<?  } else {  ?>
		
<div style="padding:0px; width:700px; height:2px; background-color:#605b51;"> </div>
		
<?  }  ?>        
                            
                            
                            
                            
                            
									<!-- <div id="divCheckAll"  style="position: relative; left: 135px; top: 10px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox2(this.checked);" />UnCheck All</div> -->							
							
							<? } ?>
							
							
						
						</td></tr>
					
				</table>							
							
						</td>
					</tr>
					
					<tr><td style="line-height: 10px">&nbsp;</td></tr>
						
				
				</table>
        
        
        
        
	</center>
		
		
	</div>	
			
<?   if ($action2 == 'edit') {   ?>	
		
<!-- Horizontal Bar Start -->
<div style="position:absolute; left:305px; top:2100px; padding:0px; width:700px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End --> 			
	
<?  } else {  ?>
		
<!-- Horizontal Bar Start -->
<div style="position:absolute; left:305px; top:2025px; padding:0px; width:700px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End --> 		
		
<?  }  ?>
			

        
        
        
        
        
        
        
        
        
<?   if ($action2 == 'edit') {   ?>	
		
<div style="position:absolute; left:240px; top:2375px; padding:0px; font-size:16px; width:800px">
	
<?  } else {  ?>
		
<div style="position:absolute; left:240px; top:2375px; padding:0px; font-size:16px; width:800px">
		
<?  }  ?>        

    
    
    
        
		
			<center>
		
				<img  src="https://landscapearchitect.com/lol-logos/eblast-logo.jpg" style="width:30%"><br/><br/>
		
		
				<table  width='700px' style="position: relative; left: -5px">
					<tr>
						<td colspan="2" align="center"><h3>I would like to opt-in to allow relevant Eblasts from<br>manufacturers of products in the follow categories.</h3></td>
					</tr>
					
					
					
					<tr><td style="line-height: 10px">&nbsp;</td></tr>
						
					<tr><td>
						
							<?
							
			   
			   				if ($action2 == 'edit') {
								
                                $uid = $_GET['id'];
                                
                            include '../../includes/connect3.inc';
                                
							$sql="select * from subscribe where id='" . $_GET['id'] . "'";
							$result=mysqli_query($conn,$sql);

								while($row = mysqli_fetch_array($result)) {
									
									if (!empty($row['opt_ineb'])) {

                                        
                                        $str = $row['opt_ineb'];
                                        
                                        list($opt_ineb001, $opt_ineb002, $opt_ineb003, $opt_ineb004, $opt_ineb005, $opt_ineb006, $opt_ineb007, $opt_ineb008, $opt_ineb009, $opt_ineb010, $opt_ineb011, $opt_ineb012, $opt_ineb013, $opt_ineb014, $opt_ineb015, $opt_ineb016, $opt_ineb017) = explode(',', $str);                                        
                                      
										
									}
									
								}                                								
	
							?>		
						
						
									<?  if ($opTot == 'allNone') { ?>
							
									<div id="divCheckboxList" style="position: relative; left: 100px; font-family: Gotham, Helvetica, Arial, 'sans-serif'">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_ineb001" value="EB-BS" checked />&nbsp;Business Services &amp; Software</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb002" value="EB-PMBR" checked />&nbsp;Pavers, Masonry, Blocks &amp; Rocks</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb003" value="EB-EI" checked />&nbsp;Equipment: Installation</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb004" value="EB-PW" checked />&nbsp;Pest / Wildlife</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb005" value="EB-EM" checked />&nbsp;Equipment: Maintenance</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb006" value="EB-PA" checked />&nbsp;Plant Accessories &amp; Amendments</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb007" value="EB-ETP" checked />&nbsp;Equipment: Tools / Parts</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb008" value="EB-SAG" checked />&nbsp;Sculpture / Art / Garden Ornaments</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb009" value="EB-EC" checked />&nbsp;Erosion Control</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb010" value="EB-SA" checked />&nbsp;Site Amenities</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb011" value="EB-F" checked />&nbsp;Fencing</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb012" value="EB-SFR" checked />&nbsp;Site Furnishings &amp; Receptacles</div></td>
											</tr>	
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb013" value="EB-LE" checked />&nbsp;Lighting / Electrical</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb014" value="EB-WF" checked />&nbsp;Water Features</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb015" value="EB-OL" checked />&nbsp;Outdoor Living</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb016" value="EB-WM6" checked />&nbsp;Water Management</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb017" value="EB-PR" checked />&nbsp;Park &amp; Recreation</div></td><td style="width: 10px">&nbsp;</td><td>&nbsp;</td>
											</tr>
										</table>
									</div><br>
									<!-- <div id="divCheckAll" style="position: relative; left: 100px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox(this.checked);" />UnCheck All</div> -->		
							
							
									<?  } else {  ?>										
													
						
									
									<div id="divCheckboxList" style="position: relative; left: 100px; font-family: Gotham, Helvetica, Arial, 'sans-serif'">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_ineb001" <? if ($opt_ineb001 == "EB-BS") echo "checked";?> value="EB-BS" />&nbsp;Business Services &amp; Software</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb002" <? if ($opt_ineb002 == "EB-PMBR") echo "checked";?> value="EB-PMBR" />&nbsp;Pavers, Masonry, Blocks &amp; Rocks</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb003" <? if ($opt_ineb003 == "EB-EI") echo "checked";?> value="EB-EI" />&nbsp;Equipment: Installation</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb004" <? if ($opt_ineb004 == "EB-PW") echo "checked";?> value="EB-PW" />&nbsp;Pest / Wildlife</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb005" <? if ($opt_ineb005 == "EB-EM") echo "checked";?> value="EB-EM" />&nbsp;Equipment: Maintenance</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb006" <? if ($opt_ineb006 == "EB-PA") echo "checked";?> value="EB-PA" />&nbsp;Plant Accessories &amp; Amendments</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb007" <? if ($opt_ineb007 == "EB-ETP") echo "checked";?> value="EB-ETP" />&nbsp;Equipment: Tools / Parts</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb008" <? if ($opt_ineb008 == "EB-SAG") echo "checked";?> value="EB-SAG" />&nbsp;Sculpture / Art / Garden Ornaments</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb009" <? if ($opt_ineb009 == "EB-EC") echo "checked";?> value="EB-EC" />&nbsp;Erosion Control</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb010" <? if ($opt_ineb010 == "EB-SA") echo "checked";?> value="EB-SA" />&nbsp;Site Amenities</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb011" <? if ($opt_ineb011 == "EB-F") echo "checked";?> value="EB-F" />&nbsp;Fencing</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb012" <? if ($opt_ineb012 == "EB-SFR") echo "checked";?> value="EB-SFR" />&nbsp;Site Furnishings &amp; Receptacles</div></td>
											</tr>	
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb013" <? if ($opt_ineb013 == "EB-LE") echo "checked";?> value="EB-LE" />&nbsp;Lighting / Electrical</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb014" <? if ($opt_ineb014 == "EB-WF") echo "checked";?> value="EB-WF" />&nbsp;Water Features</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb015" <? if ($opt_ineb015 == "EB-OL") echo "checked";?> value="EB-OL" />&nbsp;Outdoor Living</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb016" <? if ($opt_ineb016 == "EB-WM") echo "checked";?> value="EB-WM" />&nbsp;Water Management</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb017" <? if ($opt_ineb017 == "EB-PR") echo "checked";?> value="EB-PR" />&nbsp;Park &amp; Recreation</div></td><td style="width: 10px">&nbsp;</td><td>&nbsp;</td>
											</tr>
										</table>
									</div><br>
									<!-- <div id="divCheckAll" style="position: relative; left: 100px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox(this.checked);" />UnCheck All</div> -->
						
									<?  }  ?>
								
						
								<? } elseif ($action2 == "new") { ?>
						
						
									<div id="divCheckboxList" style="position: relative; left: 100px; font-family: Gotham, Helvetica, Arial, 'sans-serif'">
										<table>
											<tr>
												<td><div><input type="checkbox" name="opt_ineb001" value="EB-BS" checked />&nbsp;Business Services &amp; Software</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb002" value="EB-PMBR" checked />&nbsp;Pavers, Masonry, Blocks &amp; Rocks</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb003" value="EB-EI" checked />&nbsp;Equipment: Installation</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb004" value="EB-PW" checked />&nbsp;Pest / Wildlife</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb005" value="EB-EM" checked />&nbsp;Equipment: Maintenance</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb006" value="EB-PA" checked />&nbsp;Plant Accessories &amp; Amendments</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb007" value="EB-ETP" checked />&nbsp;Equipment: Tools / Parts</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb008" value="EB-SAG" checked />&nbsp;Sculpture / Art / Garden Ornaments</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb009" value="EB-EC" checked />&nbsp;Erosion Control</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb010" value="EB-SA" checked />&nbsp;Site Amenities</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb011" value="EB-F" checked />&nbsp;Fencing</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb012" value="EB-SFR" checked />&nbsp;Site Furnishings &amp; Receptacles</div></td>
											</tr>	
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb013" value="EB-LE" checked />&nbsp;Lighting / Electrical</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb014" value="EB-WF" checked />&nbsp;Water Features</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb015" value="EB-OL" checked />&nbsp;Outdoor Living</div></td><td style="width: 10px">&nbsp;</td><td><div><input type="checkbox" name="opt_ineb016" value="EB-WM6" checked />&nbsp;Water Management</div></td>
											</tr>
											
											<tr><td style="line-height: 10px">&nbsp;</td></tr>
											
											<tr>
												<td><div><input type="checkbox" name="opt_ineb017" value="EB-PR" checked />&nbsp;Park &amp; Recreation</div></td><td style="width: 10px">&nbsp;</td><td>&nbsp;</td>
											</tr>
										</table>
									</div><br>
									<!-- <div id="divCheckAll" style="position: relative; left: 100px">
									<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox(this.checked);" />UnCheck All</div> -->						
						
							<? } ?>
						
						
						
						</td></tr>
					
				</table>
				
				
				
					<script>
							
								function check_uncheck_checkbox(isChecked) {
									if(isChecked) {
										$('input[name="opt_ineb[]"]').each(function() {
											this.checked = false;
										});
									} else {
										$('input[name="opt_ineb[]"]').each(function() { 
											this.checked = true; 
										});
									}
								}
						
								function check_uncheck_checkbox2(isChecked) {
									if(isChecked) {
										$('input[name="opt_intle[]"]').each(function() {
											this.checked = false;
										});
									} else {
										$('input[name="opt_intle[]"]').each(function() { 
											this.checked = true; 
										});
									}
								}						
						
								function check_uncheck_checkbox3(isChecked) {
									if(isChecked) {
										$('input[name="opt_inlc[]"]').each(function() {
											this.checked = false;
										});
									} else {
										$('input[name="opt_inlc[]"]').each(function() { 
											this.checked = true; 
										});
									}
								}			
						
								function check_uncheck_checkbox4(isChecked) {
									if(isChecked) {
										$('input[name="opt_inla[]"]').each(function() {
											this.checked = false;
										});
									} else {
										$('input[name="opt_inla[]"]').each(function() { 
											this.checked = true; 
										});
									}
								}									
						

							
						</script>				
				
				
	
	</center>
	
	
<!-- Horizontal Bar Start -->
<div style="position:absolute; left:60px; top:550px; padding:0px; width:700px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End --> 			
				
	
	
	
	
   <div style="position:absolute; left:150px; top:575px; z-index: 1000; padding:0px; font-size:22px; color:#C60; width:274px; height:50px">
         <INPUT type="submit" value="Continue To Next Page"  style="height:40px; width:200px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; cursor:pointer">
	</div>        
   					
		
		
	</div>										
			
				
 			 
        
 </div>
    




    

        
    
<?php if($_SESSION['shot'] != 0) { ?>

 
        

        <?
        if($_SESSION['shot'] != 2 && $action != "edit" && $action != 'renew') {
?>
   
        <h2>Are You Sure...</h2>
        <p>You have chosen a Free Professional Listing on LandscapeOnline.com.  You can still select an enhanced listing for just $9.95 each month and put your company's name before thousands of potential clients.</p>


      <input checked type='radio' name='hot' value='1' />No, I only want the free professional listing at this time.<br />
        <input type='radio' name='hot' value='2' />Yes, please enhance my company listing.  Please use the following credit card information.

<?php
        } else {
?>

        <h2>Congratulations...</h2>
        <p>
            For taking advantage of LandscapeOnline.com's targetted marketting opportunity.  You've just put your company in front of 1000's of prospective clients.
        </p>


<?php
        }
?>
<?php $color = ($_SESSION['shot'] == 2) ? '#ff0000' : '#000000'; ?>

    <? } ?>
	<?	if ($action == "edit") {?>
		<input type=hidden name=change value=edit>
		<input type=hidden name=action value=edit><input type=hidden name=uid value="<?=$uid?>">
		<!-- <INPUT type=submit value=Edit  name=Enter> -->
        
	  <?	echo " ";
			echo "</FORM>";	
					
			}else{
		
		if ($action == "renew")	{ 
			echo " "; 		
		   echo "<input type=hidden  name=action value=renew>";
			$M->renew_up($uid);
			echo "<input type=hidden name=uid value=".$uid.">";
			echo "<INPUT type=submit value=Renew name=renew >";
			echo " ";
		?>

	   <?
			echo " ";
			echo "</FORM>";	
			

			}else{?>


			</FORM>
			 <? } ?>
			 <? } ?>
				                    
                    
                    
                    
                    

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? // include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
    include("../../includes/lo_footer-main2-new.inc");
?>





