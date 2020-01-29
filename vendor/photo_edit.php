<?php
include "lol_common-main.inc";
include $include_path . "lo_top-main-ven.inc";
require_once('photo_edit_do-js.php');
$company_id = $_GET['company_id'];
?>


        <style type='text/css' media='screen'> @import "/res/css/vendor_signup.css"; </style>
        <style type='text/css' media='print'> @import "/res/css/vendor_signup.css"; </style>
        <script language='javascript' src='/res/js/jsOldLib.js'></script>
        
<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  
<?
include $include_path . "lo_header-main-ven.inc";
	
	$coId = $_GET['company_id'];

	
?>

</div>

<!-- Content Section -->
<!-- Begin Section 1 -->  
<div class="main1">

<div style="position:relative; top:-115px">
<div class="tb3" style=" position:relative; left:-10px; width:780px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Photo Management Center:&nbsp;&nbsp;
</div><br /><br />

<!-- Begin Old Code -->  

 	<div align="left" style="position: absolute; left:0px; top:250px">        
    <script type="text/JavaScript" src="/res/js/vdaemon.js"></script>
	<script type="text/JavaScript">
<!--

	vdDelimiter="~";
	var f,v,i,l,s;

	f=new Object(); f.name="RContact"; f.validators=new Array(); f.labels=new Array(); f.summaries=new Array();
	v=new Object(); v.type="required"; v.name="xlistReq"; v.errmsg="Please select at least one product interest."; v.control="xlist[]"; v.minlength=1; v.maxlength=-1; f.validators[v.name]=v;
	s=new Object(); s.id="VDaemonID_1"; s.headertext="<h3>Error(s) found:</h3>"; s.displaymode="bulletlist"; s.showsummary=true; s.messagebox=false; f.summaries[f.summaries.length]=s;
	vdAllForms[f.name]=f;

//-->
	</script>
    
    <script>
		
var index = 1;
    function insertRow(){
                var table=document.getElementById("myTable");
                var row=table.insertRow(table.rows.length);
                var cell1=row.insertCell(0);
                var t1=document.createElement("input");
                    t1.id = "txtName"+index;
                    cell1.appendChild(t1);
                var cell2=row.insertCell(1);
                var t2=document.createElement("input");
                    t2.id = "txtAge"+index;
                    cell2.appendChild(t2);
                var cell3=row.insertCell(2);
                var t3=document.createElement("input");
                    t3.id = "txtGender"+index;
                    cell3.appendChild(t3);
                var cell4=row.insertCell(3);
                var t4=document.createElement("input");
                    t4.id = "txtOccupation"+index;
                    cell4.appendChild(t4);
          index++;

    }		
		
	</script>
   

									<?
										// Category Name Start

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


										// category for table

											$cat1 = $_GET['ad'];
											$cat2 = $_GET['company_id'];

											$sql77 = "SELECT id FROM vendor_product ORDER BY id DESC LIMIT 1";
											$result77 = $conn->query($sql77);									
									
										// cat section
												
											while($row = mysqli_fetch_array($result77)) {
													$catName1 = $row["id"] + 1;	
												
											}

		

	
									?>		  				
    

    <div style="position:relative; top:-190px">
 
	
	<table cellpadding='0' cellspacing='0' border='0'>
		<tr> 
            <td colspan="2" valign='top' style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
				<br />
				<div style="position: absolute; left: 590px; top: -62px; z-index: 3000"<strong><a href='https://landscapearchitect.com/vendor/index-vendor.php'><span class="tb6" style="width:100px">Back to Profile</span></a></strong></div>
    	    	<form method="POST" name="photo_edit" action="photo_edit_do.php" onsubmit="return">        	
            	<input type="hidden" name="id" value="<?php echo $company_id ?>" />
            	<input type="hidden" name="action" value="true" />
            	
					<h4 style="position: relative; left: 100px; top: -20px">Click on the <img src="https://landscapearchitect.com/imgz/vendor/pencil.gif"> under a specific Graphic to edit that individual Product Profile.<br><br>
						Click Here to Add a Product. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Requires that you re-enter your Password - <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You will need to navigate back to this page once to add products. You will that a blank image has been added. Edit that on and add any more that you wish.</h4>
						
            	<div style='width:763px; height:2px; background-color:#605b51;'> </div><br>
						
					<p style="width: 740px; font-size: 14px; text-align: center">For your security, although you see them here, your new and edited products are reviewed and activated by LandscapeOnline staff before showing in the Product Search Engine. This takes 1-2 working days.<br>
					Your patience is appreciated.</p><br>
            	
            	<div style='width:763px; height:2px; background-color:#605b51;'> </div><br>

            	
            		<table border='0' width='750' cellpadding='0' cellspacing='0'>
                    <?php  echo get_products_list_html($company_id); ?>
					<tr>
            			<td colspan="2" align='right'></td>
					</tr>
                	</table>
				</form>
            	</td>
						<td style="position: absolute; left: 100px; top: 37px; z-index: 2000"><form method="post" action="add.php?company_id=<? echo $cat2 ?>">
						
									<input type="submit" value="Click Here To Add Product" name="submit" style="width 350px; height: 30px; background-color: darkgoldenrod; box-shadow: 5px 5px 5px #888888; padding: 3px; font-size: 18px; font-weight: bold; cursor: pointer">	  								  							
			</td>
		</tr>
	</table>  
    </div>


<!-- End Old Code -->  
</div>




<!-- End Section 1 -->  
</div>
	
	
<div style="position: absolute; left: 500px; top: 395px">
<!-- Banner Section -->
		<? include $include_path . "banner-ads-norot2.inc"; ?>

</div>

	
	


<div class="bottom1">
<!-- Footer Section -->  
<? include $include_path . "lo_footer-main.inc"; ?>
  
</div>

</div>

