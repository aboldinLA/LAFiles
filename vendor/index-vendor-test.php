<?

$id = $_GET['id'];



?>


        <!-- Company Info Section End -->     
        

        <!-- Lead Info Section Start -->
        
        <div style="position: relative;  left: 100px">
            <table>
                
               <tr><td width='700px'>
            
                    <span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 28px; font-weight: bold">Sales Lead Retrieval</span><br>
                   
                   
                   <table>
                       <tr>
                           <td>
                               
        <table width='720' class='searchOptions' cellpadding='0' cellspacing='0' border='0' style="margin: 0 auto;">
                    <tr>
                        <td align="center" colspan="2">
                            <img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="250" />
                        </td>
                    </tr>                    
                    
                    <tr>
                        <td align="center" colspan="2" align="center"><br />
                        <span style="font-size:16px">All advertisers receive sales leads updated every Friday by 5:00 PM.<br />
                            To view your leads, by date, select the date range below and <br>click on "<strong>Retrieve Leads for Selected Week</strong></span>"<br /><br />
                            <span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for the Week of: <span style="font-size:14px; color:#F00">(Make sure to click on a week in the box below)</span></span>
                        </td>
                    </tr>
                    
<script>
 function validateForm() {
    var x = document.forms["leadsform"]["week"].value;
    if (x == null || x == "") {
        alert("Please Choose a Date Range");
        return false;
    }
}
</script>                            
                    
                    <tr>
                        <td style="height:10px"></td>
                    </tr>    
                    <tr>
                        <td colspan="2" align="center">
							
							
							
							<form name="leadsform" method="POST" action="index-vendor-leads-test.php?action=categories2&id=<? echo $_GET['id']; ?>&week2=05182019">
												<input type="hidden" name="week3" value="cat" >
                                
							  <input type="submit"  value="Retrieve Leads for Selected Week" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:250px; height:30px; box-shadow: 5px 5px 5px #888888"><br><br>

                                    <select multiple name="week" size="4" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:250px; height:75px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; border: 2px inset; margin-left:auto; text-align: center">
                                        <? 
     

                                       include '../../includes/connect4.inc';

	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 

			
											$key5 = $_GET['id'];	
		
								
			

											$sql = "SELECT distinct `week` FROM leads WHERE vendor_id='" . $key5 . "' ";
											$result = $conn->query($sql);									
									
										// banner rotating section
												
											   $xx = 0;
												$zCount = 0;
					   
					   							$i = 1;
					   
											   while($row = mysqli_fetch_assoc($result)) {
                                                   
                                                   
                                    $a = $row['week'];
                                    $weekcsv = $a;

                                    date_default_timezone_set('America/Los_Angeles');
                                        $yWeek = substr($a, -4);
                                        $mWeek = substr($a, 0, 2);
                                        $dWeek = substr($a, 2, 2);
                                    $date = $yWeek.'-'.$mWeek.'-'.$dWeek;
                                    $date1 = strtotime($date);
                                    $date2 = strtotime("+7 day", $date1);

                                    $leftpart = '&nbsp;&nbsp;'.date('m.d.y', $date1).' - '.date('m.d.y', $date2);


                                    //$leftpart = substr($a,0,2).substr($a,3,2).substr($a,6,4);

                                        $dlist .= '<option name="dlistweek" value="'.$a.'">'.$leftpart.'</option>';                                                   

                                                  echo $dlist; 
                                               
                        }                                        
                                        
                                        
                                        
                                        ?>
                                    </select><br /><br /><br />
								
								
<label>Please choose one or more pets:
  <select name="pets" multiple size="4">
    <optgroup label="4-legged pets">
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
      <option value="hamster" disabled>Hamster</option>
    </optgroup>
    <optgroup label="Flying pets">
      <option value="parrot">Parrot</option>
      <option value="macaw">Macaw</option>
      <option value="albatross">Albatross</option>
    </optgroup>
  </select>
</label>								
								
								
								
								
							</form>
							
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2" style="height:40px"><span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for Custom Date Range: <span style="font-size:14px; color:#F00">(Please select your date range)</span> </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="center">
							
							<form name="leadsform" method="POST" action="index-vendor-leads.php?action=categories2&id=<? $_GET['id'] ?>&week2=week">
												<input type="hidden" name="week3" value="cat" >
                                
							  <input type="submit"  value="Retrieve Leads for Selected Week" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:250px; height:30px; box-shadow: 5px 5px 5px #888888"><br><br>

                                    <select multiple name="week" size="4" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:250px; height:75px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; border: 2px inset; margin-left:auto; text-align: center">
                                        <? echo $dlist ?>
                                    </select><br /><br /><br />
							</form>							
							
							
							
							
                           <!-- <span style="font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; background-color:#FFF">Leads for Custom Date Range</span> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="height:10px"></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" align="center">
							
							
							
							
      <form name="custdate" method="POST" action="index-vendor-leads2.php?action=categories3&id=<? $_GET['id'] ?>">
												<input type="hidden" name="week3" value="cat" >
    <table width = "585px" align = "center">
    <tr>
    <td align="center"><b><i>Please enter date yyyy-mm-dd in the field below (ex: Start 2014-01-01, End 2014-01-31)</i></b></td>
    </tr>
    <tr>
        <td style="height:10px"> </td>
    <tr>
    <td align="center" style="position: relative; left: -25px">
    <span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Start Date&nbsp;:&nbsp;</span>
    <input type = "text" name = "small" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; text-align:center">
    &nbsp;&nbsp;&nbsp;<span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">End Date&nbsp;:&nbsp;</span>
    <input type = "text" name = "large" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; width:100px; height:30px; background-color:#f1f1f1; box-shadow: 5px 5px 5px #888888; text-align:center; position: relative; z-index: 5000"></td>
    </tr>
    <tr>
        <td style="height:10px"> </td>
    <tr>
    <tr>
    <td align = "center">
    <input type = "submit" name = "find" value = "View Custom Leads" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:150px; height:30px; box-shadow: 5px 5px 5px #888888; position: relative; left: 19px">
    &nbsp;&nbsp;&nbsp;
    <input type = "reset" value = "Reset Choice" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:#7eff3b; width:130px; height:30px; box-shadow: 5px 5px 5px #888888; position: relative; left: 24px">
    </td>   
    </tr>
    </table>
    </form> 
                    
        </table><br>    
                           
                           
                           </td>
                        </tr>
                       
                                
                       
                    </table>
                       
                       
            
                </td></tr>
                
            </table>
        </div><br>
        
        <!-- Lead Info Section End -->     
                
  


<?
                                                   
	mysqli_close($con);    
    
    
    include("../../includes/lo_footer-main2-new.inc");
?>





                


