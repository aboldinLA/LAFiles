<?php

$coname2=$_GET[mainco];
$coem2=$_GET[mainem];
$coid2=$_GET[mainid];

?>





		<!-- Content -->
                                    
		<div style="position:relative; top:0px">
			<header>
            	<!-- <center><img src="https://landscapearchitect.com/lol-logos/LO_600-brown.jpg"></center><br><br> -->
				<center><h2>Product Information Request</h2></center>
					<center><h3>For Product Information from: <? echo $coname2 ?></h3></center><br><br>
			</header> 
                                    
			<section>
			<!-- Main2 -->
            
            <form name="form1" method="post" action="validate.php">
            <input type="hidden" name="mainco2" value="<? echo $coname2 ?>">
            <input type="hidden" name="mainem2" value="<? echo $coem2 ?>">
            <input type="hidden" name="mainid2" value="<? echo $coid2 ?>">
            <center><table width="763">
            	<tr>
                	<td>
                        <div align="left">
                              <label for="ven-req01">Name: (*Required Field)</label><br>
                            <input type="text" name="fname" id="ven-req01"  placeholder="Full Name" style="font-size:16px; width:200px; height:30px" />
                        </div><br>
                    </td>
     
               </tr>
            </table>                                   
            <table width="763">
            	<tr>
                	<td>
                        <div align="left">
                              <label for="ven-req03">Company Name: (*Required)</label><br>
                            <input type="text" name="coname" id="ven-req03"  placeholder="Company Name" style="font-size:16px; width:200px; height:30px" />
                        </div><br>
                    </td>
           
               </tr>
            </table> 
            <table width="763">
            	<tr>
                	<td>
                        <div align="left">
                              <label for="ven-req07">Email Address: (*Required)</label><br>
                            <input type="text" name="email" id="ven-req07"  placeholder="Email Address" style="font-size:16px; width:200px; height:30px" />
                        </div><br>
                    </td>
                	<td>
                        <div align="left">
                              <label for="ven-req08">Phone:</label><br>
                            <input type="text" name="phone" id="ven-req08"  placeholder="Phone" style="font-size:16px; width:200px; height:30px" />
                        </div><br>
                    </td>
               </tr>
            </table>                  
   
            <table width="763">
            	<tr>
                	<td colspan="2">
                        <div align="left">
                              <label for="ven-req10">Comments (*Required Field)</label><br>
                            <input type="text" id="ven-req10" name="comment" style="width:450px; height:150px; vertical-align:top" placeholder="Enter Text Here ..." />
                        </div><br>
                    </td>
                </tr>
            </table> </center>  
            
            <table align="left" cellspacing="0" border="0" cellpadding="8" style="background-color:#ffcc66; position:relative">
            	<tr>
                	<td>
                    	<label>Enter the Number in Blue: </label>
                        <input name="captcha" type="text">
                        <img src="captcha.php" /><br>                    
                    
                    
            		</td>
            	</tr>
            </table>
            
         	<table width="763" style="position:relative; left:325px; top:100px">
            	<tr>
                	<td>
						<div>
							<input type="submit" class="special" value="Send Message" style="background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" />
						</div>
                    </td>
                </tr>
                <tr>
                	<td style="line-height:15px">&nbsp;</td>
                </tr>
            </table>            
            </form>
            </section>
            </div>
	
    
    
    
    
                
                                    
		
