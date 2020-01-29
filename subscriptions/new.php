<?
	include("lo_top-main2-tle-a.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
    
<?
	include $include_path . "lo_header-main2-tle-a.inc";
?>
 
	</div>


<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
    
 	<tr>
		<td><img src="https://landscapearchitect.com/TLE-LB/images/tle17-homepage.jpg"> </td>
	</tr>   
 
    
</table>

<div style="position: absolute; left: 10px; top: 177px; z-index: 2000; width: 1040px">
	<table>
		<tr>
			<td style="width: 1024px; height: 40px; background-color: #294330">&nbsp;</td>
		</tr>
	</table>
</div>


<?
	include("lo_top-main2-bar-tle-a.inc");
?>

<div>	
	<table width="1024">
		<tr>
			<td valign="top" width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-tle-a.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
			
				
			</td>
			
			
			
			<td width="784">
				<table>
					<tr valign="top">
						<td valign="top" width="634" style="padding-left: 25px; position: relative; top: 13px">
						
							<center><h3 style="font-family: Helvetica, Arial, sans-serif">The Landscape Expo 2017</h3></center>
						
							<!-- Do Not Change Above -->
							<!-- Center Column Start -->
						
<?php


// from seminarpost start

	$first_name2 = $_POST['first_name'];
	$last_name2 = $_POST['last_name'];	
	$name = $_POST['first_name'] . ' ' . $_POST['last_name'];
	$email = $_POST['email'];
	$seminar01 = $_POST['seminar01'];
	$seminar02 = $_POST['seminar02'];
	$seminar03 = $_POST['seminar03'];
	$seminar04 = $_POST['seminar04'];
	$seminar05 = $_POST['seminar05'];
	$seminar06 = $_POST['seminar06'];
	$seminar07 = $_POST['seminar07'];
	$seminar08 = $_POST['seminar08'];
	$seminar24 = $_POST['seminar24'];
	
	$card = $_POST['card'];
	$ccn = $_POST['ccn'];
	$type_biz_other = $_POST['type_biz_other'];
	$type_biz_other2= $_POST['type_biz_other2'];
	$cardname = $_POST['cardname'];
	$billme = $_POST['billme'];
	$billme2 = $_POST['billme2'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$phone = $_POST['phone'];
	$promo = $_POST['promo'];
	$seminarNum = $_POST['seminarNum'];
	$seminarNuma = $_POST['seminarNuma'];
	$seminarNumb = $_POST['seminarNumb'];
	$seminarNumc = $_POST['seminarNumc'];
	$seminarNumd = $_POST['seminarNumd'];
	$seminarNumd = $_POST['seminarNumd'];
	$package = $_POST['package'];
	$hot01 = $_POST['hot01'];
	$hot02 = $_POST['hot02'];
	$hot03 = $_POST['hot03'];
	$hot04 = $_POST['hot04'];
	$hot05 = $_POST['hot05'];
	$hot06 = $_POST['hot06'];
	$hot07 = $_POST['hot07'];
	$hot08 = $_POST['hot08'];
	$hot09 = $_POST['hot09'];
	$hot10 = $_POST['hot10'];
	$hot11 = $_POST['hot11'];
	$compname = $_POST['compname'];
	$addressB3 = $_POST['addressB3'];
	$cityB3 = $_POST['cityB3'];
	$stateB3 = $_POST['stateB3'];
	$zipB3 = $_POST['zipB3'];
	$emailB4 = $_POST['emailB3'];

	








 
	

	
?>




				<!-- Top -->
                
  				<STYLE>
						<!--
							a:link { color:#026DF1; }
							a:visited { color:#FFF; } 
							a:hover { color:#FFF700; } 
						//-->
					</STYLE>                 
                
					<article id="main">
				<!-- Top -->
    
						<section class="wrapper style5">
                            
                        <!-- Main2 -->
                        
                            
                            
                         <!-- Main2 -->
                          <div style="position:relative; top: 0px">
                          
<br>
				<center><div id="main2">
					<div>
						<div class="row 150%">
							<div class="8u 12u$(medium)">
									<section>
								<!-- Content Start -->
                                
                                <div id="printableArea" align="center">
                                    <h3 id="numralh3">Summary of Seminar(s) / Hotel</h3><br>
                                    <p>Please review your order for <? echo $name ?></em><br />
                                    <br />
                                    
                                    <hr><br>
                                    
                                     <p>Seminars:</p><br />
                                     
									<?
									
     								if($seminar01 != "None") {
										echo "Wednesday, October 19th - 8:30 AM - 10:00 AM - " . $seminar01 . "<br>";
									}	
									
     								if($seminar02 != "None") {
										echo "Wednesday, October 19th -10:30 AM - 12:00 PM - " . $seminar02 . "<br>";
									}									
									
     								if($seminar03 != "None") {
										echo "Wednesday, October 19th - 1:00 PM - 3:00 PM - " . $seminar03 . "<br>";
									}									
									
     								if($seminar04 != "None") {
										echo "Wednesday, October 19th - 3:00 PM - 4:30 PM - " . $seminar04 . "<br>";
									}									
									
     								if($seminar05 != "None") {
										echo "Thursday, October 20th - 8:30 AM - 10:00 AM - " . $seminar05 . "<br>";
									}
									
     								if($seminar06 != "None") {
										echo "Thursday, October 20th - 10:30 AM - 12:00 PM - " . $seminar06 . "<br>";
									}									
									
     								if($seminar07 != "None") {
										echo "Thursday, October 20th - 1:00 PM - 3:00 PM - " . $seminar07 . "<br>";
									}									
									
     								if($seminar08 != "None") {
										echo "Thursday, October 20th - 3:00 PM - 4:30 PM - " . $seminar08 . "<br>";
									}
									
									?>

 									<br>
                                    
									<button onClick="window.history.back()">Edit</button>

                                    
                                    <br><br>
                                    
  
                                    
                                    <hr><br>                                    
                                    
                                     <p>Total Cost:</p><br>
                                     
     								<?
									
     									if(!empty($seminarNum)) {
										echo $seminarNum;
									}
									
									?>
     
     
                                    
                                    <br><br>
                                    
                                    <hr><br>                                       
                                     
                                     <p>Payment Method:</p><br />
                                     
                                     <div align="left">
									<form NAME="form04" action="TLE-LB-17-confirmation-js.php?firstname3=<? echo $firstname2 ?>&compname2=<? echo $compname ?>" method="POST" onSubmit="return validate();">
                                    <input type="hidden" value="<? echo $first_name ?>" name="first_name2" >
                                    <input type="hidden" value="<? echo $last_name ?>" name="last_name2" >
                                    <input type="hidden" value="<? echo $name ?>" name="name2" >
                                    <input type="hidden" value="<? echo $email ?>" name="email" >
                                    <input type="hidden" value="<? echo $compname ?>" name="compname" >
                                    <input type="hidden" value="<? echo $seminar01 ?>" name="seminar01" >
                                    <input type="hidden" value="<? echo $seminar02 ?>" name="seminar02" >
                                    <input type="hidden" value="<? echo $seminar03 ?>" name="seminar03" >
                                    <input type="hidden" value="<? echo $seminar04 ?>" name="seminar04" >
                                    <input type="hidden" value="<? echo $seminar05 ?>" name="seminar05" >
                                    <input type="hidden" value="<? echo $seminar06 ?>" name="seminar06" >
                                    <input type="hidden" value="<? echo $seminar07 ?>" name="seminar07" >
                                    <input type="hidden" value="<? echo $seminar08 ?>" name="seminar08" >
                                    <input type="hidden" value="<? echo $seminar09 ?>" name="seminar09" >
                                    <input type="hidden" value="<? echo $seminar10 ?>" name="seminar10" >
                                    <input type="hidden" value="<? echo $seminarNum ?>" name="seminarNum" >
                                    <input type="hidden" value="<? echo $package ?>" name="package" >
                                    <input type="hidden" value="<? echo $hot01 ?>" name="hot01" >
                                    <input type="hidden" value="<? echo $hot02 ?>" name="hot02" >
                                    <input type="hidden" value="<? echo $hot03 ?>" name="hot03" >
                                    <input type="hidden" value="<? echo $hot04 ?>" name="hot04" >
                                    <input type="hidden" value="<? echo $hot05 ?>" name="hot05" >
                                    <input type="hidden" value="<? echo $hot06 ?>" name="hot06" >
                                    <input type="hidden" value="<? echo $hot07 ?>" name="hot07" >
                                    <input type="hidden" value="<? echo $hot08 ?>" name="hot08" >
                                    <input type="hidden" value="<? echo $hot09 ?>" name="hot09" >
                                    <input type="hidden" value="<? echo $hot10 ?>" name="hot10" >
                                    <input type="hidden" value="<? echo $hot11 ?>" name="hot11" >
                                    
                                    <p><a name="reg">Please select from the following:</a></p>
                                           
                                            <div>                                            
     

                                            <div>
                                                <INPUT TYPE="RADIO" id="billme01" NAME="billme" <? if ($billme =="Bill Me Later"){echo "Checked"; } ?> value="Bill Me Later" >
												<label for="billme01">Bill Me Later</label></a><br />
                                                <INPUT TYPE="RADIO" id="billme02" NAME="billme" <? if ($billme =="Bill My Card"){echo "Checked"; } ?> value="Bill My Card" checked="checked">
                                                <label for="billme02">Bill My Card</label><br />
                                            </div><br>
                                            
                                           <hr><br>

                                            <div>
                                             <h4 style="font-weight:bold">Credit Card Information: Type of Credit Card</h4><br />
                                                <INPUT TYPE="RADIO" id="card01a" NAME="card" <? if ($card =="Master Card"){echo "Checked"; } ?> value="Master Card" >
                                                <label for="card01a">Master Card</label><br />
                                                <INPUT TYPE="RADIO" id="card01b" NAME="card" <? if ($card =="Visa"){echo "Checked"; } ?> value="Visa" >
                                                <label for="card01b">Visa</label><br />
                                                <INPUT TYPE="RADIO" id="card01c" NAME="card" <? if ($card =="American Express"){echo "Checked"; } ?> value="American Express" >
                                                <label for="card01c">American Express</label><br />
                                            </div><br>
                                            
                                            <div>
                                                <label for="ccn01">CC Number:</label>
                                                <input type="text" id="ccn01" size='40' name="ccn" placeholder="Card Number" style="background-color:#C2C0C0; color:#000000" />
                                            </div><br>
                                            
                                            <div>
                                            <h4 style="font-weight:bold">Card Expiration</h4>
                                            </div>
                                                
											<div class="12u$">
                                            <div class="select-wrapper">                                            
                                                			<label for="year01">month</label>
                                                           <SELECT NAME="type_biz_other" id="month01" SIZE="1" style="background-color:#C2C0C0; color:#000000"  > 
                                                <?
                                                  if (strlen($DISPLAY['type_biz_other']) > 2)    {?>
                                                           <OPTION VALUE="<?=$DISPLAY['type_biz_other']?>"><?=$DISPLAY['type_biz_other']?></OPTION> 
                                                  <?} else {?>
                                                            <OPTION VALUE="">Choose Month</OPTION> 
                                                 <?}?>						
                                                           <OPTION VALUE="January" <?php if("Januaryr"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >January</OPTION>
                                                           <OPTION VALUE= "February" <?php if("February"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >February</OPTION>
                                                           <OPTION VALUE= "March" <?php if("March"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >March</OPTION>
                                                           <OPTION VALUE= "April" <?php if("April"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >April</OPTION>
                                                           <OPTION VALUE= "May" <?php if("May"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >May</OPTION>
                                                           <OPTION VALUE= "June" <?php if("June"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >June</OPTION>
                                                           <OPTION VALUE= "July" <?php if("July"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >July</OPTION>
                                                            <OPTION VALUE= "August" <?php if("August"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >August</OPTION>
                                                          <OPTION VALUE= "October" <?php if("October"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >October</OPTION>
                                                          <OPTION VALUE= "October" <?php if("October"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >October</OPTION>
                                                          <OPTION VALUE=  "November" <?php if("November"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >November</OPTION>
                                                          <OPTION VALUE=  "December" <?php if("December"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >December</OPTION>
                                                    </SELECT>
                                            </div>
											</div><br>
                                            
											<div class="12u$">
                                            <div class="select-wrapper">
                                                 			<label for="year01">Year</label>
                                                           <SELECT NAME="type_biz_other2" id="year01" SIZE="1" style="background-color:#C2C0C0; color:#000000"  > 
                                                <?
                                                  if (strlen($DISPLAY['type_biz_other2']) > 2)    {?>
                                                           <OPTION VALUE="<?=$DISPLAY['type_biz_other2']?>"><?=$DISPLAY['type_biz_other2']?></OPTION> 
                                                  <?} else {?>
                                                            <OPTION VALUE="">Choose Year</OPTION> 
                                                 <?}?>						
                                                           <OPTION VALUE="2015" <?php if("2015"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2016</OPTION>
                                                           <OPTION VALUE= "2016" <?php if("2016"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2017</OPTION>
                                                           <OPTION VALUE= "2017" <?php if("2017"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2018</OPTION>
                                                           <OPTION VALUE= "2018" <?php if("2018"==$DISPLAY['type_biz_othe2r']) echo 'selected="selected"'?> >2019</OPTION>
                                                           <OPTION VALUE= "2019" <?php if("2019"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2020</OPTION>
                                                           <OPTION VALUE= "2020" <?php if("2020"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2021</OPTION>
                                                           <OPTION VALUE= "2021" <?php if("2021"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2022</OPTION>
                                                            <OPTION VALUE= "2022" <?php if("2022"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2023</OPTION>
                                                            <OPTION VALUE= "2022" <?php if("2022"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2024</OPTION>
                                                            <OPTION VALUE= "2022" <?php if("2022"==$DISPLAY['type_biz_other2']) echo 'selected="selected"'?> >2025</OPTION>
                                                    </SELECT>
                                            </div>
                                            </div><br>
                                            
                                            <div>
                                                <label for="cardname01">Name that appears on card:</label>
                                                <input type="text" id="cardname01" size='40' name="cardname" placeholder="Name on Card" style="background-color:#C2C0C0; color:#000000" />
                                            </div><br>
                                            
                                        
                                            
                                            <div>
                                                <h4 style="font-weight:bold">Please Provide Billing Address</h4>
                                            </div>
                                            
                                            <div>
                                                <label for="address01">Billing Address:</label>
                                                <input type="text" id="address01" size='50' name="address" placeholder="Billing Address" style="background-color:#C2C0C0; color:#000000" />
                                            </div><br>
                                            
                                            <div>
                                                <label for="city01">City:</label>
                                                <input type="text" id="city01" size='30' name="city" placeholder="City" style="background-color:#C2C0C0; color:#000000" />
                                            </div><br>
                                            
											<div class="12u$">
                                            <div class="select-wrapper">
                                                			<label for="state01">State:</label>
                                                           <SELECT NAME="state" id="state01" SIZE="1" style="background-color:#C2C0C0; color:#000000"  > 
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
                                            </div><br>
                                            
                                            <div>
                                                <label for="zipcode01">Zip Code:</label>
                                                <input type="text" id="zipcode01" name="zipcode" placeholder="Zip Code" style="background-color:#C2C0C0; color:#000000; padding-left:3px" />
                                            </div> <br>
                                           
                                           <hr><br>
    
                                            <div>
                                                <label for="email01">Contact Email Address: </label>
                                                <input type="text" id="email01" size='40' value="<? echo $emailB4; ?>" name="email" placeholder="Email Address" style="background-color:#C2C0C0; color:#000000; padding-left:3px" />
                                            </div> <br>
 
                                            
                                            <div>
                                                <label for="phone01">Contact Phone (Include Area Code):</label>
                                                <input type="text" id="phone01" name="phone" placeholder="Phone Number (Include Area Code)" style="background-color:#C2C0C0; color:#000000; padding-left:3px" />
                                            </div><br>
                                            
                                            <div>
                                                <label for="promo01">Enter Promo Code (Leave blank if you do not have one):</label>
                                                <input type="text" id="promo" name="promo01" placeholder="Promo Code" style="background-color:#C2C0C0; color:#000000; padding-left:3px" />
                                            </div><br>
                                           
                                           <hr><br>

                                            <div>
                                            <p style="font-size:12px">Seminar Cancellation Policy:  A written request will be required for all refunds.  Cancellation requests received before October 1, 2016 will receive a 50% refund.  No refunds after October 1st.<br /><br />
                                            
Seminar/Hotel Cancellation Policy: No refunds on Seminar/Hotel Packages due to hotel prepayment requirements.<br /><br />

Seminar/Hotel Packages: Includes hotel room & tax, complimentary breakfast.  (Rate does not include incidentals, convention parking, or meals) Rates based on single or double double occupancy. (One seminar attendee per package)</p>
                                            </div> <br>
                                      
                                           <hr><br>
                                           
                                            <div>
                                            <center>
                                                <input type="submit" value="Submit" class="special" /><br>
                                                <input type="reset" value="Reset" /><br>
                                            </center>
                                            </div>                                           
                                           
                                    
                                    
                                    </div>
                                    
                                        
                                </div>  									
                                    
								<!-- Content End -->
									</section>
                                							
							
							
							
							
							<!-- Center Column End -->
							<!-- Do Not Change Below -->

						</td>
					
			<td width="150"  style="position: relative; top: 13px"><p>
				
				<center><h3 style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px">Sponsors</h3></center>
				
									<?
									
										// Banner Ads Start

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


										// start for the banner add counting and getting from table

											$key = "TLE-LB-17trans";

											$sql = "SELECT * FROM banner_ups2 WHERE web like '%" . $key . "%' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "10") {
													echo '<center><a href="https://landscapearchitect.com/TLE-LB/transfer/' . $row[web] . '" target="_blank"><img width="125px" src="https://landscapearchitect.com/TLE-LB/images/sponsors/' . $row[picture] . '" alt="Thumbnail Image 1" class="img-responsive"></a></center><br>';
										 			$i++;
     											}
											}
									?>				
				
				
				
				</p></td>
					</tr>
				</table>
			
			
			

							
							
							
								
  
			
			</td>
			
			
			
		</tr>
	</table>
	





	








<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  

</div>


<?
 include("lo_top-main2-bottom-tle-a.inc");
?>


<?
include("lo_footer-main2-new.inc");
?>



