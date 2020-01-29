<?



?>


  <!-- Begin Top Footer -->
  <div class="row top-footer">
  <div class="shadow"></div>

    <div class="large-3 columns">

      <h5>Company</h5>
      <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing</b> elit. Duis mollis, est non commodo luctus, <highlight>nisi erat porttitor</highlight> ligula, eget lacinia odio sem nec elit. Duis mollis, est non <i>commodo luctus</i>, nullam quis risus eget urna.</p>

    </div>

    <div class="large-3 columns">

      <h5>Latest from blog</h5>

        <ul class="footer-list">
          <li><i class="icon-angle-right"></i><a href="#">Mauris pellentesque laoreet.</a></li>
          <li><i class="icon-angle-right"></i><a href="#">Vestibulum vel diam orci.</a></li>
          <li><i class="icon-angle-right"></i><a href="#">Suspendisse elementum magna.</a></li>
          <li><i class="icon-angle-right"></i><a href="#">Phasellus placerat convallis.</a></li>
          <li><i class="icon-angle-right"></i><a href="#">Etiam vehicula lacus fringilla.</a></li>
          <li><i class="icon-angle-right"></i><a href="#">Vestibulum vel diam orci.</a></li>
          <li><i class="icon-angle-right"></i><a href="#">Suspendisse elementum magna.</a></li>          
        </ul>  
 
    </div>

    <div class="large-3 columns">
                    
      <h5>Flickr</h5>
        
      <ul id="basicuse" class="thumbs">
      	<li></li>
      </ul>
 
    </div>
        
    <div class="large-3 columns">
                    
      <h5>Get in Touch</h5>
      <p>We say what we do, <b>we do what</b> we say, and we're looking <highlight>forward</highlight> to prove it to you.</p>
      <p>14771 Plaza Dr.<br/>
         Tustin, CA 92780<br/>
         714-979-5276</p>
         
      <ul class="inline-list">
        <li><a class="smallipopOrange" href="http://www.facebook.com" title="Facebook"><i class="icon-facebook-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.twitter.com" title="Twitter"><i class="icon-twitter-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.google.com" title="Google+"><i class="icon-google-plus-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.linkedin.com" title="Linkedin"><i class="icon-linkedin-sign icon-large"></i></a></li>
        <li><a class="smallipopOrange" href="http://www.pinterest.com" title="Pinterest"><i class="icon-pinterest-sign icon-large"></i></a></li>
      </ul>

    </div>        

  </div>
  <!-- End Top Footer -->
  
  <!-- Begin Footer -->  
  <div class="row bottom-footer">
    
    <div class="large-6 columns">
        
      <p>
            <? date_default_timezone_set("America/Los_Angeles"); ?>
	    	<?= date("F j, Y, g:i a "); ?>PDT&nbsp;&nbsp;&nbsp;© 2019 Landscape Communications Inc. All rights reserved</p>
        
    </div>

    <div class="large-6 columns" style="padding-right:80px">

      <ul class="inline-list right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Pages</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
	  </ul>
        
    </div>
    
  </div><!-- End Footer -->

  
  
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
    
  <script>
    $(document).foundation();
  </script>  
 
  <!-- Smallipop JS - Tooltips -->
  <script type="text/javascript" src="plugins/smallipop/lib/contrib/prettify.js"></script>
  <script type="text/javascript" src="plugins/smallipop/lib/jquery.smallipop.js"></script>
  <script type="text/javascript" src="plugins/smallipop/lib/smallipop.calls.js"></script> 
  
  <!-- Initialize JS Plugins -->
  <script src="js/app-bottom-calls.js"></script>
  
  
</div>
<!-- End Main Wrapper -->

<!-- Back To Top -->
  <a href="#" class="scrollup">Scroll</a>
<!-- End Back To Top -->

<!-- Modals -->
<div id="firstModal" class="reveal-modal medium">
  <h2>This is a modal.</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!-- End Modals -->

		<script>
			
			jQuery(document).ready(function() {
				jQuery('.banner').revolution(
				{
					delay:5000,
					startheight:600,
					startwidth:1170,

					hideThumbs:300,

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:5,

					navigationType:"both",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
					navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
					navigationStyle:"round",				//round,square,navbar

					touchenabled:"on",						// Enable Swipe Function : on/off
					onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

					navOffsetHorizontal:0,
					navOffsetVertical:20,

					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:1,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
					fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
				});
			});
			function loadVideo(){
				jQuery("#video_link").html('<iframe id="video_frame" width="960" height="540" src="http://www.youtube.com/embed/t9N36YbFS4c?autoplay=1&fmt=22" frameborder="0" allowfullscreen style="max-width:100%;"></iframe>');
			}
		</script>

</body>
</html>
