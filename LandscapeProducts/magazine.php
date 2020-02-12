<?php session_start() ?>
<?php include '../modules/configuration.inc'; ?>
<?php include '../modules/db.php'; ?>
<? 
	$pageId = 'resources';
	
  
	include $rootInclude.'la-common-top.php';

	include $rootInclude.'la-common-header.inc'; 
		
?>




		<style>
      td.day {
        background: none;
      }

      .datepicker table tr td.active,
      .datepicker table tr td.active.disabled,
      .datepicker table tr td.active.disabled:hover,
      .datepicker table tr td.active:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: -ms-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: -webkit-gradient(
          linear,
          0 0,
          0 100%,
          from(#1b8047),
          to(#1b8047)
        );
        background-image: -webkit-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: -o-linear-gradient(to bottom, #1b8047, #1b8047);
        background-image: linear-gradient(to bottom, #1b8047, #1b8047);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1b8047', endColorstr='#0044cc', GradientType=0);
        border-color: #1b8047 #1b8047 #002a80;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
      }

      .list_items .container {
        max-width: 1188px;
        margin: 0 auto;
      }

      .form_field .container {
        max-width: 1188px;
        margin: 0 auto;
      }
			
			.magTitleContainer {
				height: 110px;
				clear: both;
			}
			
			.group_of_pdf .row {
				display: flex;
				flex-wrap: wrap;
			}
    </style>


<section class="tool_page full_width" >

  <? include $rootInclude.'la-common-leaderboard-banner.inc'; ?>
  
</section><!-- /.tool_page -->


      <div class="mag_ban full_width">
      <div class="container">
      		<span class="img_di">
            	<img src="<?php echo BASE_URL; ?>imgz2/05_LASN_May2019.jpg" alt="img" width="100%"/>
            </span><!-- /.img_di -->
            <div class="texx">
            	<h3>2019 Specifier's Guide</h3>
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>-->
                <a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=612078" target="_blank"><button type="button" style="width: 100%; max-width: 250px;">VIEW THE SPECIFIER’S GUIDE</button></a>
            </div><!-- /.texx -->
      </div><!-- /.container -->
      </div><!-- /.mab_ban -->
      
      <div class="green_dinkle full_width">
      <div class="container">
<!--      	<a href="#" class="like_bttt">Landscape Architect Magazine</a>-->
<!--        <h3>Landscape Contractor Magazine</h3>-->
<!--
        <div class="right_side_sel">
        	<label>Browse Our Previous Magazine Issues</label>
            <select>
            	<option>2019</option>
                <option>2018</option>
            </select>
        </div><! -- /.right_side_sel -- >
-->
      </div><!-- /.container -->
      </div><!-- /.green_dinkle -->
      
      <div class="group_of_pdf full_width">
      <div class="container">
      <div class="row">
			
			
			<? 
				$LASNmagazines = [
					//month, title, linkId, imageName
					['January 2020', 'Sustainability and Regeneration', '645240', '01_LASN_Jan2020.jpg'],
					['December 2019', '2019 Yearbook, 2020 Forecast', '639267', '12_LASN_Dec2019.jpg'],
					['November 2019', 'ASLA in San Diego: Firms of SoCal', '632019', '11_LASN_Nov2019.jpg'],
					['October 2019', 'Amusement Parks and Zoos', '624014', '10_LASN_Oct2019.jpg'],
					['September 2019', 'Innovatively Designed', '617827', '09_LASN_Sep2019.jpg'],
					['August 2019', 'Downtown Streetscapes', '612075', '08_LASN_Aug2019.jpg'],
					['July 2019', 'Water In The Landscape', '612076', '07_LASN_Jul2019.jpg'],
					['June 2019', 'School & Campus Design', '612077', '06_LASN_Jun2019.jpg'],
					['May 2019', 'Specifier\'s Guide', '612078', '05_LASN_May2019.jpg'],
					['April 2019', 'Lighting Luminous Landscapes','612079', '04_LASN_Apr2019.jpg'],
					['March 2019', 'Parks Around The Nation', '612080', '03_LASN_Mar2019.jpg'],
					['February 2019', 'Hardscape Design', '612081', '02_LASN_Feb2019.jpg'],
					['January 2019', 'Sustainable Design', '612082', '01_LASN_Jan2019.jpg']

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=' . $mag[2] . '" target="_blank"><img src="'.BASE_URL.'imgz2/' . $mag[3] . '" alt="img" width="100%" /></a>
										<div class="magTitleContainer">
											<h3>' . $mag[1] . '</h3>
											<h4><span>' . $mag[0] . '</span> | <a href="https://lsc-pagepro.mydigitalpublication.com/publication/?i=' . $mag[2] . '" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
      </div><!-- /.group_of_pdf -->

        





			<? include $rootInclude.'la-common-footer-inner.inc'; ?>


	


  </body>
</html>
