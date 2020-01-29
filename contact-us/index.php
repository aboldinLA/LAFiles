<?php session_start() ?>

<? 
 
	include '../../includes/la-common-top.php';

  $pageId = "other";

	include '../../includes/la-common-header.inc'; 

 


if($_SESSION['loggedIn']){
  
  include '../../includes/connect4.inc'; 
  
  $sql = "SELECT * FROM subscribe WHERE id ='" . $_SESSION['user'] . "'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  
  $firstName = $_SESSION['name'];
  $lastName = $_SESSION['lname'];
  $phone = $row['phone'];
  $email = $row['email'];
  
}

?>


	<section class="contact-page supplemental-pages">
	
			<!--Banner Start -->
      <div class="page-top-banner text-center" style="width:100%; background-image:url('images/contact-bg.png'); height:259px; background-size:cover;">
        <div class="inner-banner">
          <div class="container">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 padding30">
              <h1>Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner End -->
    
    
			
			<section class="content-section">
				<div class="container">

						
								<style>
                  
                  .contactTextArea {
                    margin-right: 10px;
                    width: 100%;
                    max-width: 497px;
                    border-radius: 5px;
                    padding: 10px;
                    border-radius: 5px !important;
                    border: solid 1px rgba(35, 35, 35, 0.15);
                    font-size: 12px;
                  }
                  
                  .contact-section .button_style {
                    margin: 10px 0px 0px 0px;
                    max-width: 250px;
                  }
          
								</style>
          
								
						<div class="row padding20 contact-section" style="padding-bottom: 0px;">
              
              
              <div class="col-md-5 col-sm-12 col-xs-12 contact-col">
                <h2 style="margin-top: 0px;">Contact Us</h2>
								
                <form NAME="contactUsForm" id="contactUsForm" action="/" >
                  <div class="input_fl">
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>First Name*</label>
                        <input type="text" name="fname" id="contact_first_name" value="<? echo $firstName ?>" data-msg="Please fill in your first name."/>
                      </div><!-- .col-lg-6 -->
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>Last Name*</label>
                        <input type="text" name="lname" id="contact_last_name" value="<? echo $lastName ?>" data-msg="Please fill in your last name."/>
                      </div><!-- .col-lg-6 -->
                     <div class="col-sm-12">
                        <label>PHONE NUMBER*</label>
                        <input type="text" placeholder="555-123-4567" name="phone" id="contact_phone" value="<? echo $phone ?>" data-msg="Please fill in your phone number."/>
                      </div><!-- .col-lg-12 -->
                      <div class="col-sm-12">
                        <label>EMAIL*</label>
                        <input type="text" placeholder="yourname@email.com" name="email" id="contact_email" value="<? echo $email ?>" data-msg="Please fill in your email."/>
                      </div><!-- .col-lg-6 -->
                      <div class="col-sm-12">
                        <label>CONFIRM EMAIL*</label>
                        <input type="text" placeholder="yourname@email.com" name="confirm_email" id="contact_confirm_email" value="<? echo $email ?>" data-msg="Please confirm your email."/>
                      </div><!-- .col-lg-6 -->

                       <div class="col-sm-12">
                        <label>Message</label>
                        <textarea placeholder="Type your message here..." rows="4" class="contactTextArea" name="contact_message" id="contact_message" data-msg="Please fill in your phone number."></textarea>
                      </div><!-- .col-lg-12 -->
                    </div>
                  </div><!-- /.input_fl -->

                  <button type="submit" class="button_style" id="contactSubmitBtn">SUBMIT</button>
                  
                  <div id="errorText"></div>
                
                </form>
                
                <div id="contactThankYou" style="display: none;">
                  <h3>Thank you <span id="contactUsResponseName"></span></h3>
                  <p style="font-size: 18px;">Your message has been sent and we will get back to you as soon as possible. If you need to contact us sooner, you can reach us at 714-979-5276.</p>
                </div>
                
							</div>
              
              <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12 contact-col">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40918.68114073412!2d-117.84025170463795!3d33.74920910248354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcdbc69bdaf81f%3A0xc4a93eb47e20e1a5!2sLandscape%20Communications%20Inc!5e0!3m2!1sen!2sus!4v1578004685216!5m2!1sen!2sus" width="100%" height="375" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                
                <div class="row">
                   <div class="col-md-5 col-sm-12 col-xs-12">
                    <p class="padding20">
                    <strong>OUR OFFICE</strong><br>
                      14771 Plaza Drive, Suite. A,
                      Tustin, CA 92780
                    </p>
                  </div>

                  <div class="col-md-7 col-sm-12 col-xs-12">
                    <p class="padding20">
                      <strong>Advertising (By Company Name)</strong><br>
                      A-L 714-979-5276 x111<br>
                      M-Z 714-979-5276 x114<br>
                      <a href="mailto:all.sales@landscapearchitect.com">all.sales@landscapearchitect.com</a>
                    </p>
                    <p class="padding10">
                      <strong>General</strong><br>
                      714-979-5276
                    </p>
                  </div>
                </div>
               
                
              </div>
            </div>
              
             <div class="row padding20 contact-section"> 
              
              
							<div class="col-md-4 col-sm-12 col-xs-12 contact-col">
								<h3>Landscape Architect and Specifier News</h3>
								<p class="padding20">
								  <strong>Publisher/Editor-in-Chief</strong><br>
                  George Schmok<br>
                  <a href="mailto:gschmok@landscapearchitect.com">gschmok@landscapearchitect.com</a><br>
                  Ext. 110
								</p>
                <p class="padding10">
								  <strong>Managing Editor</strong><br>
                  Mike Dahl<br>
                  <a href="mailto:mdahl@landscapearchitect.com">mdahl@landscapearchitect.com</a><br>
                  Ext. 124
								</p>
                <p class="padding10">
								  <strong>Associations Editor</strong><br>
                  Darryl Carter<br>
                  <a href="mailto:dcarter@landscapearchitect.com">dcarter@landscapearchitect.com</a><br>
                  Ext. 139
								</p>
                 <p class="padding10">
								  <strong>Editorial Assistant</strong><br>
                  Amy Timar<br>
                  <a href="mailto:atimar@landscapearchitect.com">atimar@landscapearchitect.com</a><br>
                  Ext. 132
								</p>
                <p class="padding10">
								  <strong>Ad Coordinator/Jr. Graphic Designer</strong><br>
                  Jeremy Victor<br>
                  <a href="mailto:jvictor@landscapearchitect.com">jvictor@landscapearchitect.com</a><br>
                  Ext. 125
								</p>
							</div>
							
							<div class="col-md-4 col-sm-12 col-xs-12 contact-col">
								<h3 >Print Advertising Sales</h3>
								<p class="padding20">
								  <strong>If your Company Name Begins With: <br>A-L</strong><br>
                  Mark Pack<br>
                  <a href="mailto:mpack@landscapearchitect.com">mpack@landscapearchitect.com</a><br>
                  Ext. 111
								</p>
                <p class="padding10">
								  <strong>M-Z</strong><br>
                  Clint Phipps<br>
                  <a href="mailto:cphipps@landscapearchitect.com">cphipps@landscapearchitect.com</a><br>
                  Ext. 114
								</p>
                <p class="padding10">
								  <strong>Digital Advertising Sales</strong><br>
                  Salvador Rivera<br>
                  <a href="mailto:srivera@landscapearchitect.com">srivera@landscapearchitect.com</a><br>
                  Ext. 126
								</p>
                 <p class="padding10">
								  <strong>Circulation / Subscriptions</strong><br>
                  Calvin Scott<br>
                  <a href="mailto:cscott@landscapearchitect.com">cscott@landscapearchitect.com</a><br>
                  Ext. 144
								</p>
                <p class="padding10">
								  <strong>Office Manager</strong><br>
                  Cynthia McCarthy<br>
                  <a href="mailto:cmccarthy@landscapearchitect.com">cmccarthy@landscapearchitect.com</a><br>
                  Ext. 142
								</p>
                <p class="padding10">
								  <strong>Accounts Receivables</strong><br>
                  Javier Miranda<br>
                  <a href="mailto:jmiranda@landscapearchitect.com">jmiranda@landscapearchitect.com</a><br>
                  Ext. 122
								</p>
							</div>
							
							
							<div class="col-md-4 col-sm-12 col-xs-12 contact-col">
								<h3>The Landscape Expo</h3>
								<p class="padding20">
								  <strong>Trade Show Manager</strong><br>
                  Margot Boyer<br>
                  <a href="mailto:mboyer@thelandscapeexpo.com">mboyer@thelandscapeexpo.com</a><br>
                  Ext. 143
								</p>
                <p class="padding10">
								  <strong>Trade Show Sales</strong><br>
                  Nathan Schmok<br>
                  <a href="mailto:nschmok@thelandscapeexpo.com">nschmok@thelandscapeexpo.com</a><br>
                  Ext. 118
								</p>
                <p class="padding10">
								  <strong>Communications/Editor</strong><br>
                  Chanté McKowan<br>
                  <a href="mailto:cmckowan@thelandscapeexpo.com">cmckowan@thelandscapeexpo.com</a><br>
                  Ext. 128
								</p>
							</div>
							
							
						</div>
						
						
					</div>
				</div>	
			</section>
            
			
	
	</section>		
           
			
 <? include '../../includes/la-common-footer-inner.inc'; ?>


<script>

  $(window).on('load',function(){
    
    $('#contactSubmitBtn').click(function(event){
        event.preventDefault();
        document.getElementById("errorText").innerHTML = " ";
        if(validateContactForm()){
          $.post(
            '/mailback/mailContactForm.php',
            {
              fname: $('input[name=fname]').val(),
              lname: $('input[name=lname]').val(),
              userEmail: $('input[name=email]').val(),
              contactMessage: $('textarea[name=contact_message]').val(),
              contactPhone: $('#contact_phone').val(),
            },
             function(data){
               data = JSON.parse(data);               
               if(data.success == true){
                  document.getElementById("contactUsResponseName").innerHTML = data.fname;  
                  $('#contactUsForm').toggle("100");
                  $('#contactThankYou').toggle("500");
                } else {
                  console.log(data);
                }
             }
          )//end post
        } // end if (validateContactForm)
      }); //end contactSubmitBtn click event
    
    }); //end window onload
  
  
    function validateContactForm(){

      var validator = $( "#contactUsForm" ).validate({
        rules: {
          fname: {
            required: true,
          },
          lname: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          confirm_email: {
            required: true,
            email: true,
            equalTo: "#contact_email"
          },
          phone: {
            required: true,
            min: 9
          }
        }
      });
      
        var validated = true;
        
        if(!validator.element("#contact_email")){
          validated = false;
        }
        if(!validator.element("#contact_confirm_email")){
          validated = false;
        }
        if(!validator.element("#contact_first_name")){
          validated = false;
        }
        if(!validator.element("#contact_last_name")){
          validated = false;
        }
        if(!validator.element("#contact_phone")){
          validated = false;
        }
      
      return validated;
    }

</script>

