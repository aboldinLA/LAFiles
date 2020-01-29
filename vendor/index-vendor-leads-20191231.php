
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

      
      <style>
        .salesLeadHeaderContainer button {
          margin-top: 0px;
          font-size: 14px;
          min-width: 300px;
          width: 100%;
        }
        
        .salesLeadHeaderContainer {
            display: flex;
            align-items: center;
        }
        
        .singleLeadContainer {
          font-size: 14px;
          margin-top: 30px;
          margin-bottom: 40px !important;
        }
        
        .singleLeadContainer .userInfo td {
            padding-bottom: 8px;
        }
        
        .salesLeadButtonContainer button {
          width: 100%;
          font-size: 15px;
          padding: 19px;
          background: white;
          color: #1b8047;
          border: 1px solid #1b8047;
          transition: 300ms;
          margin-top: 20px;
        }
        
        .salesLeadButtonContainer button:hover {
          background: #1b8047;
          color: white;
        }
        
        
        @media print{
          #div1 .userInfoTd {
            width: 600px !important;
          }
          
          #div1 .demoTd {
            width: auto !imporant;
          }
          
          .singleLeadContainer {
            margin-bottom: 40px;
          }
        }
       
      
      </style>
      

          <div class="headerBanner col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h3>
              <span style="font-weight: 400">Welcome</span> <span style="font-weight: 800"><? echo $company_name ?></span>
              <p>Scroll down for <strong>Sales Lead Retrieval</strong> or to edit your company information, add or delete search engine categories, update regional outlets, and manage product profile.</p>     
            </h3>

            <div class="black_v"></div>
          </div>
          <!-- header END -->
      
      
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center_section salesLeadPage">

               <div class="salesLeadHeaderContainer">
                  <h2 class="vendorSectionTitles">Sales Lead Retrieval</h2>
                  <a href="https://landscapearchitect.com/vendor/index-vendor.php?action=edit&id=<? echo $company_id ?>"><button class="button_style">Back to Vendor Profile &amp; Lead Center</button></a>
              </div>

              <div class="salesLeadButtonContainer row">
                
                <a href="https://landscapearchitect.com/vendor/ex-test-week3.php?id=<? echo $company_id ?>&week=<? echo $week2 ?>" class="col-md-6"><button class="button_style">Download This Lead Report in .xls Format</button></a>

                <a href="javascript:printDiv('div1')" class="col-md-6"><button class="button_style">Print This Lead Report</button></a>
                
              </div>
            
      
              <br /><hr />
            
                <div id="div1">
                  
         <?php

                $sql="SELECT * FROM `leads` WHERE `vendor_id` = '" . $company_id . "' AND `week` LIKE '" . $week2 . "' ORDER BY `lead_id` DESC";
                $result = $conn->query($sql);
              
              
              


                while($row = mysqli_fetch_array($result)) {
                  
                    echo "<table width=\"100%\" class=\"singleLeadContainer\" style=\"margin-bottom: 30px;\">";

                    $pattern1='•';
                    $repl1='<br>&#8226;&nbsp;';
                    $demogs = str_replace($pattern1, $repl1, iconv('CP1252', 'UTF-8//TRANSLIT', (stripslashes($row['demographic']))));
                  
                    echo "<tr><td valign=\"top\" class=\"col-md-4 userInfoTd\" style=\"min-width: 300px;\"><table class=\"userInfo\">";

                    echo "<tr><td valign=\"top\" ><strong>Name:</strong> ". $row['fname']  . "&nbsp;" .  $row['lname'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>Company: </strong>". $row['company'] . "</td></tr>";

                    echo "<tr><td ><strong>Address: </strong> ". $row['address'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>City: </strong> ". $row['city'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>State/Zip: </strong>". $row['state'] . "&nbsp;" .  $row['zip'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>Phone: </strong>". $row['phone'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>Fax: </strong>". $row['fax'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>Email: </strong>". $row['email'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\"  ><strong>Brand: </strong>". $row['brand'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\"  ><strong>Issue: </strong>". $row['issueId'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>Date: </strong>". $row['Date'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>Source: </strong>". $row['from'] . "</td></tr>";

                    echo "<tr><td colspan=\"2\" ><strong>Choices: </strong>". $row['choices']  . "</td></tr>";
                  
                    echo "</table></td>";
                      
                    echo "<td valign=\"top\" rowspan=\"12\" class=\"col-md-8 demoTd\"><strong>Demographics: </strong>" . $demogs . "</td>";
                      
                    echo "</tr>";


                }

                // Free result set
                mysqli_free_result($result);

                echo "</table>";

          ?>
          
                  </div>
            
				
		     <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
		
         
      </div><!-- ./center-section -->
    </div><!-- /.row -->
    	
  </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->

            
 <? include '../../includes/la-common-footer-inner.inc'; ?>

<?  function downloadExcel(){
  
    $query = ("SELECT fname, lname, company, address, city, state, zip, phone, email, demographic, brand, issueId, Date, choices FROM leads WHERE vendor_id = '. $company_id .' AND week = '. $week2 . '") or die('Query failed!');
  $result = $conn->query($query) or die('Error, query failed');	
  //$result = mysqli_query($query) or die('Error, query failed');


  // $tsv = array();
  $html = array();

  while($row = mysqli_fetch_array($result, MYSQLI_NUM))
  {
      // $tsv[]  = implode("\t", $row);
      $html[] = "<tr><td>" .implode("</td><td>", $row) . "</td></tr>";
    
  }

  // $tsv  = implode("\r\n", $tsv);
  $html = "<table>" . "<tr><td>First Name</td><td>Last Name</td><td>Company Name</td><td>Address</td><td>City</td><td>State</td><td>Zip</td><td>Phone</td><td>Email</td><td>Demographic</td><td>Brand</td><td>Issue</td><td>Date</td><td>Choices</td></tr>" . implode("\r\n", $html) . "</table>";

  $fileName = date("d-m-Y").'_mysql.xls';
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=$fileName");
}

?>

      
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
