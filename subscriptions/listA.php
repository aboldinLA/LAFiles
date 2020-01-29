<?
    include "lol_common.inc";
    include $include_path . "lol_header.inc";
        $uid=$_SESSION['uid'];

    if ($action == "edit") {
        $subscribe =$_SESSION['subscribe_list'];
        $protype=$_SESSION['protype_list'];
        $uid=$_SESSION['uid'];
    }
    if ($subscribe == "lasn") {	
        $logo = "lasn_logo.jpg";
        $name = "Landscape Architect Magazine ";
    } elseif ($subscribe == "lcm") {
        $logo = "lcm_logo.jpg";	
        $name = "Landscape Contractor Magazine ";
    } else {
        $logo = "main_lol_logo.gif";
        $name = "LandscapeOnLine.com";
    }
?>
<TABLE ALIGN="center" cellpadding="0" cellspacing="0" width="500">
    <tr>
      <td>
        <p align="center"><center><font style="font-size:22px;font-family:arial"><?php print "$comp_name" ?>Congratulations! Your Listing is Complete<?php $_REQUEST["needs"]; echo $rounded_number ?>!<br />
        </font><font size="3" face="Arial, Helvetica, sans-serif"><b>If you are applying for both a subscription <br />
  and a &lsquo;Find a Pro&rsquo; listing you are finished. <br />
          <br />
        If not please answer the questions below:</b></font></p>
        <hr align="center" width=80% color=67999A noshadow>      	</td>
     </tr>
     <tr>
        <td>
    <!-- STEP 1: Put the full URL to Tectite FormMail on your website in the 'action' value. -->
<form method="post" action="https://landscapearchitect.com/subform.php" name="SampleForm">
    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />

    <!-- STEP 2: Put your email address(es) in the 'recipients' value.
                 Note that you also have to allow this email address in the
                 $TARGET_EMAIL setting within formmail.php!
                 If you've set AT_MANGLE in FormMail, you can use it to hide email addresses from bots.
    -->
    <input type="hidden" name="recipients" value="subscriptionEyYUHG8landscapeonline.com,webmasterEyYUHG8landscapeonline.com" />

    <!-- STEP 3: Specify required fields in the 'required' value -->

    <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="Subscription - <?php echo $uid ?>" />

    <!-- STEP 5: Put the URL to the page you want the user to redirect to in
        the 'good_url' value. This is a page that might say "Thanks for your
        submission!"
    -->
    <input type="hidden" name="good_url" value="" />

    <table border="1" cellspacing="5%">
    <tr>
        <td>
           <input type="radio" name="contact" value="No Pro" />
         </td>
        <td><p><font size="3" face="Times New Roman, Times, serif">I do not wish to be listed in LandscapeOnline's <strong>Find a Pro</strong></font></p>        </td>    
    </tr>
    <tr>
        <td>
           <input type="radio" name="contact" value="No Mag" />
         </td>
        <td><p><font size="3" face="Times New Roman, Times, serif">I want to be listed in LandscapeOnline's <strong>Find a Pro</strong>, but do not wish a magazine subscription.</font></p>        </td>    
    </tr>

    <tr>
        <td><input type="submit" value="Submit" /></td>
        <td></td>
    </tr>
    </table>
</form>
		</td>
     </tr>
     </tr>
</table>

<? include $include_path . "lol_footer.inc"; ?>	
