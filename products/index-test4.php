<?
include("lo_top-js.inc");
?>
<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  
<?
include $include_path . "lo_header-js.inc";

	function hot_topics() {
        global $ht;

		foreach ($ht as $id => $title) {
			echo "<a class='infolink' href='research/article.php/$id'>$title</a><br>";
		}

		echo "<a class='infolink' href='research/recent_news.php'>- Previous News Items for LandscapeOnline</a><br>";
	}
?>

</div>

<!-- Content Section -->
<!-- Begin Section 1 -->  
<div class="main1">

<div class="tb2">
  &nbsp;&nbsp;Featured Stories:&nbsp;&nbsp
</div>
    
 	<div style="position:relative; top:10px">   
		<!-- Start WOWSlider.com -->
		<iframe src="https://landscapearchitect.com/front-slide/LO/index.html" style="width:680px;height:380.5px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
        <!-- End WOWSlider.com -->
	</div>
    
     <div style="position:relative; left:30px; top:-45px; background-color:#585249; border: 0px solid black; width: 675px; height:2px"></div>    
 
 	<!-- Start Section One Boxes 1 -->
 	<div style="position:relative; left:-5px; top:-30px">
    	<table width="763">
        	<tr>
            	<td width="230">
		<!--Bar 2-->
		<div class="mosaic-block bar2">
			<a href="https://landscapearchitect.com/research/article.php/17913" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Playground Extension Grants</h4>
					<p>Schools, cities and playground providers face difficulties...</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="https://landscapearchitect.com/imgz2/section2-img1.jpg" width="250" /></div>
		</div>
        	</td>
        	<td width="230">
		<!--Bar 2-->
		<div class="mosaic-block bar2">
			<a href="https://landscapearchitect.com/research/article.php/17911" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Firewise Landscaping</h4>
					<p>To save lives and property from wildfire, the NFPA...</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="https://landscapearchitect.com/imgz2/section2-img2.jpg" width="250" /></div>
		</div>
        	</td>
        	<td width="230">
 		<!--Bar 2-->
		<div class="mosaic-block bar2">
			<a href="https://landscapearchitect.com/research/article.php/17910" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>PCA Forecast Downgraded</h4>
					<p>PCA has moderated its predictions for cement usage in 2013</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="https://landscapearchitect.com/imgz2/section2-img3.jpg" width="250" /></div>
		</div>
        	</td>            
   		</tr>
    </table>        
    </div>
 
 	<!-- End Section One Boxes -->
<!-- End Section 1 -->
<div class="clear"></div>

<!-- Start Section 2 -->
<div class="boxed">
  &nbsp;&nbsp;Articles:&nbsp;&nbsp;<span style="font-size:12px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#FFF"><a href="https://landscapearchitect.com/research/index.php">Search Articles</a> | <a href="https://landscapearchitect.com/research/recent_news.php">Recent News</a> | <a href="https://landscapearchitect.com/research/submissions/index.php">Submit Editorial</a> | <a href="/research/article.php/2786">Commentary</a> | <a href="/research/recent_news.php">Previous News Items for LandscapeOnline</a></span>
</div>

    <link type="text/css" href="https://landscapearchitect.com/res/css/front-boxes.css" rel="stylesheet" />

<!-- This is controlled by front-boxes.css -->
<div class="equal">
	<div class="row">
		<div class="one">
			<!-- <h2>This is a box</h2> -->
			<!-- <p>This box has less content than the one next to it, but both boxes will still have equal height. No background-image trickery.</p> -->
			<a href='/research/article.php/17862'><img src="https://landscapearchitect.com/imgz2/news01.jpg" width="125">		
            </div>
		<div class="six">
        	<!-- <h2>This is another box</h2> -->
			<p><? hot_topics(); ?></p>
		</div>
 
	</div>
</div>
<div class="clear"></div>

<div class="boxed">
  &nbsp;&nbsp;Product Search:&nbsp;&nbsp;<span style="font-size:12px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#FFF"><a href="https://landscapearchitect.com/research/index.php">Product Search</a> | <a href="https://landscapearchitect.com/research/recent_news.php">Recent News</a> | <a href="https://landscapearchitect.com/research/submissions/index.php">Submit Editorial</a> | <a href="/research/article.php/2786">Commentary</a> | <a href="/research/recent_news.php">Previous News Items for LandscapeOnline</a></span>
</div>

	<!-- Start Section 2 Boxes -->
    	<table width="763">
        	<tr>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details2">
					<h4>Kidstuff Playsystems</h4>
					<p>Revolutionary new safety surface made of loose rubber</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product1.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Koolfog</h4>
					<p>Fog Can delivers a stunning fog blanket that perfectly enhances any deck fountain</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product2.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Landscape Structures</h4>
					<p>Stimulate your senses with Pulse! With light, sound, touch and more...</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product3.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>LTR Products</h4>
					<p>Landscaping just got a lot SMARTER. GroundSmart Rubber Mulch is the...</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product4.jpg" width="125" /></div>
				</div>
        	</td>
       	<td width="125">
		<!--Bar 3-->
		<div class="mosaic-block2 bar3">
			<a href="http://www.nonsensesociety.com/2010/12/i-am-not-human-portraits/" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Miracle Recreation</h4>
					<p>Get back to nature with Nature's Choice by Miracle!</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="/imgz2/Product5.jpg" width="125" /></div>
				</div>
        	</td>
            
   		</tr>
    </table>        
 
 	<!-- End Section 2 Boxes -->
<div class="clear"></div>
<!-- End Section 2 -->

<!-- Start Section 3 -->
<div class="boxed">
  &nbsp;&nbsp;LandscapeOnline Digital Magazines:&nbsp;&nbsp;<span style="font-size:12px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#FFF"><a href="https://landscapearchitect.com/digital-mags/index.php">Past Issues - iPad Version</a></span>
</div>

<div class="equal3">
	<div class="row3">
		<div class="three">
			<a href="http://landscapearchitect.epubxp.com/title/13311"><img style="margin:0px; padding:5px;" src="https://landscapearchitect.com/lol-logos/LASN-FULL-Logo-325.jpg" name="LASN-Digital" width="132" height="50" border="0" /></a>
            <a href="http://landscapearchitect.epubxp.com/title/13311"><img style="margin:0px; padding:5px;" width="132" src="https://landscapearchitect.com/imgz2/lasn-cover.jpg" name="LASN-Digital" border="0" /></a>
		</div>
		<div class="four">
			<a href="http://landscapecontractor.epubxp.com/title/13313"><img style="margin:0px; padding:5px;" width="132" height="50" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" name="LCDBM-Digital" border="0" /></a><br />        
			<a href="http://landscapecontractor.epubxp.com/title/13313"><img style="margin:0px; padding:5px;" width="132" src="https://landscapearchitect.com/imgz2/lcdbm-cover.jpg" name="LCDBM-Digital" border="0" /></a>
		</div>
		<div class="seven">
			<center><span>LandscapeOnline<br>Product Directories</span><br />
			<a href="http://landscapearchitect.epubxp.com/title/13311"><img style="margin:0px; padding:5px;" src="https://landscapearchitect.com/lol-logos/LASN-FULL-Logo-325.jpg" name="LASN-Digital" width="145" border="0" /></a>
            <span>Specifiers Guide</span><br /><br />
            <a href="http://landscapearchitect.epubxp.com/title/13311"><img style="margin:0px; padding:5px;" width="145" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" name="LASN-Digital" border="0" /></a>
            <span>Buyer's Guide</span></center>
		</div>        
		<div class="six" style="position:relative; left:5px">
        	<!-- <h2>This is another box</h2> -->
            <a href="https://landscapearchitect.com/research/article.php?id=15871"><img width="215" src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" name="LASN-Digital" border="0" /></a>
            	<span>Previous Issues:</span>
			    <ul>
    				<li><a href="https://landscapearchitect.com/research/article/17927">06-18-13</a>: LO Weekly</li>
    				<li><a href="https://landscapearchitect.com/research/article/17925">06-11-13</a>: LO Weekly</li>
    				<li><a href="https://landscapearchitect.com/research/article/17895">06-04-13</a>: LO Weekly</li>
    				<li><a href="https://landscapearchitect.com/research/article/17855">05-21-13</a>: LO Weekly</li>
    				<li><a href="https://landscapearchitect.com/research/article.php?id=15871">More LandscapeOnline Weekly</a></li>
   					</ul>
		</div>                
	</div>
</div>
<div class="clear"></div>
<!-- End Section 3 -->

<!-- Start Section 4 -->
<div class="boxed">
  &nbsp;&nbsp;Associations/Events:&nbsp;&nbsp;<span style="font-size:12px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#FFF"><a href="https://landscapearchitect.com/research/LASN-Expo/index-LAX-2014.php">LA Expo 2014</a> | <a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php">Landscape Expo 2013</a> | <a href="https://landscapearchitect.com/industry/index.php">Find an Association</a> | <a href="https://landscapearchitect.com/calendar/index.php">Search for Events</a></span>
</div>

<!-- This is controlled by front-boxes.css -->
<div class="equal2">
	<div class="row2">
		<div class="one">
			<!-- <h2>This is a box</h2> -->
			<!-- <p>This box has less content than the one next to it, but both boxes will still have equal height. No background-image trickery.</p> -->
			<a href="https://landscapearchitect.com/research/article/17924"><img width="125" src="/imgz2/assoc01.jpg"></a>		
            </div>
		<div class="two">
        	<!-- <h2>This is another box</h2> -->
			<p><a href="https://landscapearchitect.com/research/article/17924">A Day on the Links with CLASS Fund</a><br>
    		<a href="https://landscapearchitect.com/research/article/17860">STMA Supports U.S. National Arboretum</a><br>
    		<a href="https://landscapearchitect.com/research/article/17918">Washington State Gets Star Park</a><br>
    		<a href="https://landscapearchitect.com/research/article/17919">Bicycling: A Renewed Trend?</a><br>
    		<a href="https://landscapearchitect.com/research/article/17882">Tree Encyclopedia Winner of NADF Award</a></p>
		</div>
		<div class="three">
			<a href="https://landscapearchitect.com/research/LASN-Expo/index-LAX-2014.php"><img width="125" src="https://landscapearchitect.com/imgz2/Front-LA-Expo.jpg" name="LAExpo" border="1" /></a>
		</div>
		<div class="four">
			<a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php"><img width="125" src="https://landscapearchitect.com/imgz2/Front-TLE-Expo.jpg" name="TLE-Expo" border="1" /></a>
		</div>        
	</div>
</div>
<!-- End Section 4 -->

<!-- Start Section 5 -->
<div class="boxed">
  &nbsp;&nbsp;Economic Indicators:&nbsp;&nbsp;<span style="font-size:12px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#FFF"><a href="https://landscapearchitect.com/research/article.php/2862">More Market News</a> | <a href="https://landscapearchitect.com/lcsi/">LCSI History</a></span>
</div>

<!-- This is controlled by front-boxes.css -->
<div class="equal">
	<div class="row">
		<div class="one">
			<!-- <h2>This is a box</h2> -->
			<!-- <p>This box has less content than the one next to it, but both boxes will still have equal height. No background-image trickery.</p> -->
			<a href="https://landscapearchitect.com/research/article/17909"><img src="/imgz2/ec01.jpg" width="125" height="125"></a>		
            </div>
		<div class="six">
        	<!-- <h2>This is another box</h2> -->
			<p><a href="https://landscapearchitect.com/research/article/17909">Private Building Bolsters April Construction Spending</a><br>
   			<a href="https://landscapearchitect.com/research/article/17910">PCA Downgrades 2013 Cement Forecast</a><br>
   			<a href="https://landscapearchitect.com/research/article/17871">April Existing Home Sales, Prices Increase</a><br>
   			<a href="https://landscapearchitect.com/research/article/17876">New Home Sales Rate Improves in April</a></p>
		</div>
 
	</div>
</div>
<div class="clear"></div>
<!-- End Section 5 -->

<!-- Start Section 6 -->
<div class="equal4">
	<div class="row4">
		<div class="six">
        	<h2>We Support</h2>
			<p>LO financially supports many<br />
			asssociations through either the<br />
			payment of dues, conference<br />
			exhibits and/or discounted advertising</p>
		</div>
		<div class="one">
			<!-- <h2>This is a box</h2> -->
			<!-- <p>This box has less content than the one next to it, but both boxes will still have equal height. No background-image trickery.</p> -->
			<a href="https://landscapearchitect.com/lcc/lcc.html"><img src="/imgz2/lcc-logo.jpg" width="50"></a>		
        </div> 
		<div class="seven">
			<!-- <h2>This is a box</h2> -->
			<!-- <p>This box has less content than the one next to it, but both boxes will still have equal height. No background-image trickery.</p> -->
			<a href="https://landscapearchitect.com/bad-tree/index.php"><img src="/imgz2/btcomic-button3.jpg" width="200"></a>		
        </div>
		<div class="seven">
			<!-- <h2>This is a box</h2> -->
			<!-- <p>This box has less content than the one next to it, but both boxes will still have equal height. No background-image trickery.</p> -->
			<a href="https://landscapearchitect.com/research/article/9130"><img src="/imgz2/etreefbutton.jpg" width="200" height="50"></a>		
        </div>                     
    </div>
</div>
<div class="clear"></div>
<!-- End Section 6 -->

<!-- End Main Section -->  
</div>

<div class="banner1">
<!-- Banner Section -->
		<? include $include_path . "banner-front.inc"; ?>

</div>

<div class="bottom1">
<!-- Footer Section -->  
<? include $include_path . "lo_footer-js.inc"; ?>
  
</div>

</div>

