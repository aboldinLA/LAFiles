<?

// Top Section - HTML
$page = 'subscribe-lb-2019-login';
include("tle_top-main-2.inc");

?>

    <?

// Top Section - Nav Section
include("tle_header-main-2019.inc");


	$banName = $_GET['ad'];

	if ($banName == 1300) {

		$picBan = "Fencing1.jpg";
		$picBan2 = "Fencing2.jpg";
		$picBan3 = "Fencing3.jpg";

	} elseif ($banName == 32) {

		$picBan = "Lighting1.jpg";
		$picBan2 = "Lighting2.jpg";
		$picBan3 = "Lighting3.jpg";

	} elseif ($banName == 1214) {

		$picBan = "Outdoor1.jpg";
		$picBan2 = "Outdoor2.jpg";
		$picBan3 = "Outdoor1.jpg";

	} elseif ($banName == 38) {

		$picBan = "PMBR1.jpg";
		$picBan2 = "PMBR2.jpg";
		$picBan3 = "PMBR1.jpg";

	} elseif ($banName == 29) {

		$picBan = "SiteAmenities1.jpg";
		$picBan2 = "SiteAmenities1.jpg";
		$picBan3 = "SiteAmenities1.jpg";

	} elseif ($banName == 1301) {

		$picBan = "sculpture1.jpg";
		$picBan2 = "sculpture2.jpg";
		$picBan3 = "sculpture1.jpg";

	} elseif ($banName == 1215) {

		$picBan = "SiteFurnishings1.jpg";
		$picBan2 = "SiteFurnishings1.jpg";
		$picBan3 = "SiteFurnishings1.jpg";

	} elseif ($banName == 33) {

		$picBan = "Park1.jpg";
		$picBan2 = "Park2.jpg";
		$picBan3 = "Park1.jpg";

	} elseif ($banName == 41) {

		$picBan = "WaterFeatures1.jpg";
		$picBan2 = "WaterFeatures2.jpg";
		$picBan3 = "WaterFeatures1.jpg";

	}

?>

        <style>
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Fjalla One', sans-serif;
            }
            
            p,
            td,
            span {
                font-family: 'Open Sans';
            }
            
            figure {
                width: 75%;
                /*                box-shadow: 5px 5px 5px #888888;*/
                /*                text-align: center;*/
                font-size: smaller;
                text-indent: 0;
                /*                border: thin silver solid;*/
                margin: 0.5em;
                padding: 0.5em;
            }
            
            .exhibitorFigure {
                width: 75%;
                box-shadow: 5px 5px 5px #888888;
                text-align: center;
                font-size: smaller;
                text-indent: 0;
                border: thin silver solid;
                margin: 0.5em;
                padding: 0.5em;
                margin-bottom: 30px;
				min-width: 171px;
            }
            
            .banner_holder {
                width: 100%;
                height: 300px;
                min-height: 200px;
                overflow: hidden;
                background-color: dimgrey;
                display: block;
            }
            
            .banner_holder img {
                width: 100%;
            }
            
            .limagelad {
                width: 175px;
                height: 75px;
                overflow: hidden;
                margin: 10px;
                text-align: center;
                line-height: 75px;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            
            .limagelad2 {
                max-width: 100%;
                max-height: 100%;
                align-content: center;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            
            .adSize {
                width: 350px;
            }
            
            .cute-slider {
                margin-top: 50px;
            }
            
            .wrapper {
                margin: 0 auto;
                max-width: 1200px;
                min-width: 438px;
            }
            
            .assocLogo {
                max-width: 165px;
                padding-left: 10px;
                padding-right: 10px;
                margin-bottom: 15px;
            }
            
            .assocLogo img {
                max-height: 180px;
                max-width: 180px;
            }
            /*
   .maxWidth {
   max-width: 900px;
   }
   */
            
            .imgsWrapper {
                margin-top: 25px;
                margin: 0 auto;
            }
            
            .imgsWrapper img {
                padding: 1%;
            }
            
            .headersOne {
                font-size: 36px;
                text-align: left;
                margin-top: 47px;
                margin-bottom: 25px;
            }
            
            .containerCarousel {
                width: 100%;
            }
            
            .containerMain {
                max-width: 1600px;
                margin: 0 auto;
                padding-left: 50px;
                padding-right: 50px;
            }
            
            .carousel {
                max-height: 450px;
                overflow: hidden;
            }
            
            .containerWidth {
                max-width: 1600px;
                padding-left: 50px;
                padding-right: 50px;
                display: flex;
                justify-content: space-between;
                height: 100%;
                margin: 0 auto;
            }
            
            figcaption h5 {
                letter-spacing: 0.03em;
            }
            /* Overflow text solution for firefox */
            
            @-moz-document url-prefix() {
                figcaption span {
                    position: relative;
                    line-height: 1.4em;
                    /* 3 times the line-height to show 3 lines */
                    height: 7.1em;
                }
				
				.text {
                    position: relative;
                    line-height: 1.4em;
                    /* 3 times the line-height to show 3 lines */
                    height: 5.7em;
                }
                figcaption span::after, .text::after {
                    content: "...";
                    font-weight: bold;
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    padding: 0 20px 1px 45px;
                    background: url(https://landscapearchitect.com/TLE-LB/images/ellipsis_bg.png) repeat-y;
                }
            }
            
            .first {
                display: block;
            }
            
            .exhibitorListGridContain {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            
            .exhibitorFigure {
                width: 29%;
            }
            
            .featuredBoxQuote {
                text-align: center;
                font-size: 24px;
                color: #ffffff;
                padding: 30px 30px 10px 30px;
                font-style: italic;
            }
            /* Style the tab */
            
            .tab {
                overflow: hidden;
                border-bottom: 3px solid gold;
                border-top: 3px solid gold;
                display: flex;
                justify-content: space-between;
                font-size: 20px;
                margin-top: 6px;
            }
            /* Style the buttons that are used to open the tab content */
            
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-family: 'Fjalla One', sans-serif;
            }
            /* Change background color of buttons on hover */
            
            .tab button:hover {
                background-color: #ddd;
            }
            /* Create an active/current tablink class */
            
            .tab button.active {
                background-color: #D5D5D5;
            }
			
			.tablinks {
				letter-spacing: 0.1em;
			}
			
            /* Style the tab content */
            
            .tabcontent {
                display: none;
            }
            
            .tabcontent {
                animation: fadeEffect 1s;
                /* Fading effect takes 1 second */
            }
            /* Go from zero to full opacity */
            
            @keyframes fadeEffect {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
            
            .first {
                display: block;
            }
            
            .exhibitorContainer {
                display: flex;
                width: 100%;
                height: 140px;
                padding-bottom: 30px;
                justify-content: space-between;
                -ms-align-items: center;
                align-items: center;
                border-bottom: 1px solid black;
                padding-top: 30px;
                text-decoration: none;
                color: #333333;
            }
            
            .exhibitorContainerImage {
                width: 250px;
                height: 100px;
                text-align: center;
                display: flex;
                justify-content: center;
            }
            
            .boothNumber {
                font-size: 20px;
                font-weight: bold;
                width: 12%;
				margin: 0px 10px;
            }
            
            .exhibitorContainerImage img {
                max-height: 100%;
                max-width: 100%;
                align-self: center;
            }
            
            .text {
                width: 46%;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
				margin-right: 15px;
            }
            
			.exhibitorContainer1 {
				transition: background-color 0.2s 50ms;
			}
			
            .exhibitorContainer1:hover {
                background-color: #F7F7F7;
                text-decoration: none;
            }
            
            .btn {
                width: 120px;
                margin-right: 15px;
				margn-left: 15px;
            }
			
			
			@media screen and (max-width: 1160px) {
				.limagelad {
    				width: 150px;
				}
			}
			
            
            @media screen and (max-width: 1000px) {
                .adSize {
                    width: 250px;
                }
            }
			
			 @media screen and (max-width: 1000px) {
				.exhibitorFigure {
   					 width: 46%;
				 }
			}
			
			@media screen and (max-width: 775px) {
				.exhibitorFigure {
   					 width: 100%;
				 }
			}
            
            @media screen and (max-width: 400px) {
                .limagelad {
                    width: 175px;
                    height: 75px;
                    overflow: hidden;
                    margin: 10px;
                    text-align: center;
                    line-height: 75px;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                .limagelad2 {
                    width: 25px;
                    max-height: 75%;
                    align-content: center;
                    position: relative;
                    top: 50%;
                    transform: translateY(-50%);
                }
                .colShift {
                    position: relative;
                    left: 100px;
                }
                .colShift2 {
                    position: absolute;
                    left: -200px;
                }
                .colSize {
                    position: absolute;
                    left: 450px;
                }
            }
            
            @media screen and (max-width: 400px) {
                .colShift {
                    position: absolute;
                    left: -200px;
                }
                .colSize {
                    position: absolute;
                    left: 100%;
                }
                .adShift {
                    position: relative;
                    left: -15px;
                }
                .adSize {
                    width: 350px;
                }
            }
            
            @media screen and (max-width: 400px) {
                .adShift {
                    position: absolute;
                    left: 100px;
                }
                .adSize {
                    width: 100%;
                }
            }
        </style>

        <!-- Tabs Script Start -->
        <script>
            function openCity(evt, cityName) {
                // Declare all variables
                var i, tabcontent, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the button that opened the tab
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
        <!-- Tabs Script End -->

        <div class="mainContentContainer">
            <!-- Slider Start -->
            <table width="100%">
                <tr>
                    <td>
                        <section>
                            <div class="containerCarousel" id="myCarousel">
                                <div id="carousel-299058" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active"> <img class="img-responsive" src="https://landscapearchitect.com/TLE-LB/images/banners/tle3.jpg" alt="thumb"></div>
                                        <div class="item"> <img class="img-responsive" src="https://landscapearchitect.com/TLE-LB/images/banners/tle2.jpg" alt="thumb"></div>
                                        <div class="item"> <img class="img-responsive" src="https://landscapearchitect.com/TLE-LB/images/banners/tle1.jpg" alt="thumb"></div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-299058" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel-299058" data-slide="next"><span class="icon-next"></span></a>
                                </div>
                            </div>

                        </section>
                    </td>
                </tr>
            </table>
            <!-- Slider End -->

            <!-- Date & Btn Band Start -->

            <?  include("dateBand-2019-registration.inc"); ?>

                <!-- Date & Btn Band End -->

                <!-- Slider End -->
                <div class="containerMain">
                    <table width="100%">
                        <tr>
                            <td valign="top" style="vertical-align: top;">

                                <!--<div style="position: relative; top: 25px">-->

                                <!-- Do Not Change Above -->

                               									<section>
    									<center>
                                        <div style="margin-top: 40px;">
                                        <table>
                                            <tr>
                                                <td>
                                                <div>
                                                    <h1><center>Welcome to the</center></h1>
                                                   <h2><center>The Landscape Expo 2019</center></h2>
                                                    <h2><center>EXPRESS Registration Center</center></h2><br />
                                                    
                                            
                                                    
                                                    
                                                    <span style="font-size:24px; font-weight: bold;"><center>Please Enter Your Password Here</center></span><br />
                                                </div>
                                                </div>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        
                                                    <form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">
                                                    <table border=0 cellpadding=0 cellspacing=5>
                                                        <? if ($t == "ad") {?>
                                                        <tr>
                                                            <td>Login:</td>
                                                            <td><input type="text" name="email" MAXLENGTH="45" width="30px" value=""></td>
                                                        </tr>
                                                        <? } ?>
                                                        <tr>
                                                            <td> </td><td><input type="password" name="password" MAXLENGTH="10" style="background-color:#C2C0C0; height: 20px; width: 250px; padding: 3px"  placeholder="Please Enter Your Password">
                                                            <script type="text/javascript" lang="javascript">
                                                            <!--
                                                                <? if ($t == "ad") { ?>
                                                                document.loginform.email.focus();
                                                                <? } else { ?>
                                                                document.loginform.password.focus();
                                                                <? } ?>
                                                            // -->
                                                            </script>
                                                            </td>
                                                        </tr>
                                                        <tr><td style="line-height:5px">&nbsp;</td></tr>
                                                        <tr>
                                                        <?
                                                            if ( !$_SESSION['np'] && $t == "ad"){
                                                                $new_npage = "/private/index.php";
                                                            } else 	if ( !$_SESSION['np'] && $t == "v"){
                                                            $new_npage = "/subscriptions/subscribe-lb-19.php?action=edit";
                                                            } else {
                                                            $new_npage = "/subscriptions/subscribe-lb-19.php?action=edit";
                                                            }
                                                        ?>
                                                            <td align="center" colspan=2><INPUT TYPE="submit" VALUE="Login" style="width: 175px; height: 30px; padding: 3px; font-size: 16px; font-weight: bold; background-color: darkgoldenrod">
                                                                <input type="hidden" name="npage" value="<?=$new_npage?>">
                                                                <input type="hidden" name="action" value="login">
                                                                <input type="hidden" name="t" value="<?=$t?>"></FORM>
                                                            </td>
                                                        </tr>
                                                    </table>


                                		</center>
									</section>
			

                                <!-- Do Not Change Below -->

                            </td>

                            <td style="vertical-align: top;">
                                <!-- Banners TLE-2018 Start -->
                                <div style="float: right; margin-top: 40px; margin-left: 60px;">
                                    <? 	include("banner-tle-2018-v.inc"); ?>
                                </div>
                                <!-- Banners TLE-2018 End -->
                            </td>

                        </tr>
                    </table>

                </div>



<!-- Sponsors and Footers -->
<div style="position: relative; margin-top:100px;">
		<? include("lo_top-main2-bottom-tle3-sponsors-2019.inc"); ?>
</div>

<div style="position: relative;">
		<? include("lo_top-main2-bottom-tle3-2019.inc"); ?>
</div>

<? include("lo_footer-main2-new.inc"); ?>