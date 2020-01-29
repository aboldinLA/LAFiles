<? 

//	$pageId = 'news';

	include '../../../includes/la-common-top.php';

	include '../../../includes/la-common-header.inc'; 

  include $rootInclude . 'connect4.inc';

?>


	
	

<!-- leaderboard banner -->
<section class="tool_page full_width">

  <? include $rootInclude . 'la-common-leaderboard-banner.inc'; ?>
  
</section>



<section class="full_width architech_arti brdr">
  <div class="container">
    <div class="row">
      <div class="widthmaker">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="width_adjust full_width">	

        
            
            <!-- content goes here -->
            <h2 style="color: black; margin-top: 0px; margin-bottom: 10px;">Submit Material to LASN's Monthly Columns</h2>

<table>
	<tr>
		<td colspan="3">
		<p class="articleBodyText">LASN's monthly columns - Playgrounds, Hardscapes, Technology, Stewardship (pro bono design work), Moment of Silence and Letters to the Editor - reflect the design work of landscape architects.</p>
		</td>
	</tr>
	

	
	<tr>
		<td>
		  <img src="images/23283-5.jpg" width="200px"  alt=""/></td>
		<td width="20px"></td>
		<td><span style="font-size: 15px; font-weight: bold">Playground Column</span><br>
A celebration of unique and interesting playgrounds for children young and old while simultaneously diving deep into playground design, layout and special features.<br>
Submit to Amy Timar <a href="mailto: atimar@landscapearchitect.com">atimar@landscapearchitect.com</a><br>
<em>Requirements:</em> Length: 400-800 words, 8 graphics</td>
	</tr>
	
	<tr>
		<td colspan="3" height="10px">&nbsp;
		</td>
	</tr>	
	<tr>
		<td>
		  <img src="images/23374-1.jpg" width="200px"  alt=""/></td>
		<td width="20px"></td>
		<td><span style="font-size: 15px; font-weight: bold">Hardscape Column</span><br>
Showcasing the latest and greatest hardscape designs and projects from across the nation that include pavers, masonry units, blocks or rocks. If you have designed a project with extensive hardscaping, share it with us!<br>
Submit to Mike Dahl <a href="mailto: mdahl@landscapearchitect.com">mdahl@landscapearchitect.com</a><br>
<em>Requirements:</em> Length: 400-800 words, 8 graphics</td>
	</tr>
	
	<tr>
		<td colspan="3" height="10px">&nbsp;
		</td>
	</tr>
	
	<tr>
		<td>
		  <img src="images/Technology-1.jpg" width="200px"  alt=""/></td>
		<td width="20px"></td>
		<td><span style="font-size: 15px; font-weight: bold">Technology Column</span><br>
A closer look at the newest technology that is making an impact in the landscape architecture profession. From drones to virtual reality, this column will keep the reader informed on the advances pertinent to the occupation.<br>
Submit to Ashley Steffens <a href="mailto: steffens@uga.edu">steffens@uga.edu</a><br>
College of Environment and Design, University of Georgia<br>
<em>Requirements:</em> Length: 400-800 words, 8 graphics</td>
	</tr>

	<tr>
		<td colspan="3" height="10px">&nbsp;
		</td>
	</tr>
	
	<tr>
		<td>
		  <img src="images/flagraising-brubanker.jpg" width="200px"  alt=""/></td>
		<td width="20px"></td>
		<td><span style="font-size: 15px; font-weight: bold">Stewardship Column</span><br>
This column focuses on the altruistic acts of landscape architecture firms that donate their services, time and expertise to make communities better places to live. If you have done any pro-bono work recently, we would love to hear about it.<br>
Submit to Darryl Carter <a href="mailto: dcarter@landscapearchitect.com">dcarter@landscapearchitect.com</a><br>
<em>Requirements:</em> Length: 250-400 words, 5 graphics</td>
	</tr>
	
	<tr>
		<td colspan="3" height="10px">&nbsp;
		</td>
	</tr>
	
	<tr>
		<td>
		  <img src="images/22419-1.jpg" width="200px"  alt=""/></td>
		<td width="20px"></td>
		<td><span style="font-size: 15px; font-weight: bold">Moment of Silence</span><br>
LASN pays tribute to landscape architects who have passed on.<br>
Submit obituaries to Mike Dahl <a href="mailto: mdahl@landscapearchitect.com">mdahl@landscapearchitect.com</a><br>
<em>Requirements:</em> No word count requirements, submit graphics as available</td>
	</tr>
		
	<tr>
		<td colspan="3" height="10px">&nbsp;
		</td>
	</tr>	
	
	<tr>
		<td>&nbsp;
		  </td>
		<td width="20px"></td>
		<td><span style="font-size: 15px; font-weight: bold">Letters to the Editor</span><br>
Submit to Mike Dahl <a href="mailto: mdahl@landscapearchitect.com">mdahl@landscapearchitect.com</a><br>
<em>Requirements:</em> No word count or graphic requirements</td>
	</tr>
			  
</table>

	 	

	 	

	 	

	 	

	 	



 	 	


          </div><!-- /.width_adjust -->    
        </div><!-- ./col-lg-8 -->

        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="newsltr full_width">
                <h3>Sign up for<br>LAWeekly newsletter. <span>Get exclusive content today.</span></h3>
                  <form id="news_letter_form" novalidate>
                      <input type="text" name="email_address" placeholder="Enter your email address" class="newsletterEmailInput">
                      <button type="submit" class="newsletterSignUpBtn">Sign up</button>
                  </form>
              </div><!-- /.newsltr -->


              <!-- ROS banner ads -->
              <?
                $sql = "SELECT * FROM banner_ups WHERE ROS='yes' ORDER BY RAND() Limit 4";
                $result = $conn->query($sql);									

                while($row = mysqli_fetch_array($result)){
                    echo '<div class="add__ full_width"><a href="' .  $row['web'] . '"><img src="../../banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div> '; 
                }

              ?>

        </div><!-- ./col-lg-4 -->
      </div><!-- /.widthmaker -->
    </div><!-- /.row -->
  </div><!-- /.contianer -->
</section><!-- /.architech_arti -->




      <? include '../../../includes/la-common-footer-inner.inc'; ?>  

      <? include '../../../includes/la-common-magazine-subscribe.php'; ?>

      <? include '../../../includes/la-common-log-in-modal.inc'; ?>


    </body>
</html>