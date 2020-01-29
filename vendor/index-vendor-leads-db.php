
<? 
	
	include '../../includes/la-common-top-inner.php';

	include '../../includes/la-common-header-inner.inc'; 

	include '../../includes/connect4.inc';

?>





<section class="tool_page full_width vendorPages">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sideBarNoSearch">
	

				
				<div class="white_side full_width">
					<h2 class="mobtoggle">ALL CATEGORIES</h2>
					<div class="full_width" id="mobile_slide">


						<!-- sidebar accordian menu -->
						<? include '../../includes/la-common-sidebar-menu.inc'; ?>


					 </div><!-- #mobslide --> 
        </div><!-- /.white_side -->
				
				
				
				<!-- banner ads 4-end left side -->
				<?
				
//					$sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND()";
//					$result = $conn->query($sql);									
//
//					while($row = mysqli_fetch_array($result)){
//            echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div><!-- /.add__ -->'; 
//					}
				
				?>
			
        
        
    </div><!-- /.col-lg-3 -->
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
      
      
      
                              
                <?php

										$company_id = $_GET['id'];
				            $week2 = $_POST['week'];

      
										$sql = "SELECT * FROM new_vendor WHERE id='" . $company_id . "' ";
										$result = $conn->query($sql);									


										 while($row = mysqli_fetch_assoc($result)) {
                       
                        $company_name = $row['company_name'];
                       
                    }
      
                ?>
      
          <!-- header START -->          
          <div style="position: absolute; right: 0px; top: 10; z-index: 200; border-top-right-radius: 5px; overflow: hidden;">
            <a href='https://www.landscapearchitect.com/vendor/logoff.php'><input type='image' src='/imgz2/logoff-button.jpg' style="box-shadow: -5px 5px 5px #888888;" border='0' id="logOffBtn" /></a>
          </div>


          <div class="headerBanner col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h3>
              <span style="font-weight: 400">Welcome</span> <span style="font-weight: 800"><? echo $company_name ?></span>
              <p>Scroll down for <strong>Sales Lead Retrieval</strong> or to edit your company information, add or delete search engine categories, update regional outlets, and manage product profile.</p>     
            </h3>

            <div class="black_v"></div>
          </div>
          <!-- header END -->
      
      
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center_section salesLeadPage">

            <h2 class="vendorSectionTitles">Sales Lead Retrieval</h2>
            
            

          <!-- Begin Old Code -->  
       
                <p><font size="3"><br />
              <a href="https://landscapearchitect.com/vendor/ex-test-week3.php?id=' . $company_id . '&week=' . $week2 . '"><font size="3"><strong><span style="text-shadow:none"> <span style="color:#00F">Click Here</span> to Download This Lead Report in .xls Format</strong></span></font></a></p>
              <p><font size="3"><a href="javascript:printDiv('div1')"><span style="text-shadow:none"><strong><span style="color:#00F">Click Here</span> to Print This Lead Report</strong></span></a></font></p>
              <p><font size="3">
              <a href="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&id=' . $company_id . '"><span style="text-shadow:none"><strong><strong><span style="color:#00F">Click Here</span> to Return to Your Vendor Profile & Lead Center</strong></a></span></font></p>
              <br /><hr /><div id="div1">

              <div>
                <table width="100%" style="singleLeadContainer">

         <?php

                $sql="SELECT * FROM `leads` WHERE `vendor_id` = '" . $company_id . "' AND `week` LIKE '" . $week2 . "' ORDER BY `lead_id` DESC";
                $result = $conn->query($sql);


                while($row = mysqli_fetch_array($result)) {

                    $pattern1='•';
                    $repl1='<br>&#8226;';
                    $demogs = str_replace($pattern1, $repl1, iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['demographic']))));

                    echo "<tr><td valign=\"top\" width=\"215\" style=\"font-size:12px\"><strong>Name:</strong> ". $row['fname']  . "&nbsp;" .  $row['lname'] . "</td><td valign=\"top\" width=\"200\" rowspan=\"12\" style=\"font-size:12px\"><strong>Demographics: </strong>" . $demogs . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Company: </strong>". $row['company'] . "</td></tr>";


                    echo "<tr><td width=\"215\" style=\"font-size:12px\"><strong>Address: </strong> ". $row['address'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>City: </strong> ". $row['city'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>State/Zip: </strong>". $row['state'] . "&nbsp;" .  $row['zip'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Phone: </strong>". $row['phone'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Fax: </strong>". $row['fax'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Email: </strong>". $row['email'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\">" . "</td></tr>";

                    echo "<tr><td colspan=\"2\"  width=\"215\" style=\"font-size:12px\"><strong>Brand: </strong>". $row['brand'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\"  width=\"215\" style=\"font-size:12px\"><strong>Issue: </strong>". $row['issueId'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Date: </strong>". $row['Date'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Source: </strong>". $row['from'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px\"><strong>Choices: </strong>". $row['choices']  . "</td></tr>";

                    echo "<tr><td colspan=\"2\" width=\"215\" style=\"font-size:12px; height:15px\">" . "</td></tr>";

                }

                // Free result set
                mysqli_free_result($result);

                echo "</table>";

          ?>
				
		     <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
		
         
      </div><!-- ./center-section -->
    </div><!-- /.row -->
    	
  </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

            
 <? include '../../includes/la-common-footer-inner.inc'; ?>

      
<script>
  
    printDivCSS = new String ('<link href="myprintstyle.css" rel="stylesheet" type="text/css">')
    function printDiv(divId) {
        window.frames["print_frame"].document.body.innerHTML=printDivCSS + document.getElementById(divId).innerHTML;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }

    function printTable(obj) {
      content = document.getElementById(obj).innerHTML;
      newwin = window.open('');
      newwin.document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"\n',
      '"http://www.w3.org/TR/html4/strict.dtd">\n',
      '<html>\n',
      '<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">\n',
      '<title>Leads Report</title>\n',
      '\n',
      '<body>\n',
      ''+content+'\n',
      '</body>\n',
      '</html>');
      newwin.print();
      newwin.close();
   }
</script>			


 
    </body>
</html>
