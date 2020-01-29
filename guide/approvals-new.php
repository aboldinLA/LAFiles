<?
  include("lo_top-main2.inc");

?>

  <!-- Menu Section -->  
  <div class="main1">

  <!-- Start - Div is here to move the header for the articles in correct position -->
  <div style="position:relative; left:-10px; top:-30px">
<?
  include $include_path . "lo_header-main2-js.inc";
?>

<?
  // Database login
  include("config.inc2.php"); //include config file
  
    $results = mysqli_query($connecDB,"select *, vendor_product.company_name as cn, vendor_product.best_phone as bp  from vendor_product LEFT JOIN new_vendor ON new_vendor.id=vendor_product.vendor_id LEFT JOIN vendor_product_contact ON vendor_product_contact.vendor_id=vendor_product.vendor_id LEFT JOIN vendor_product_lg_approvals ON vendor_product_lg_approvals.vendor_product_id=vendor_product.id where vendor_product_lg_approvals.app_hash = '" .  $_GET['hash'] . "'");
?>

 <?php 
 if(isset($_POST['submit']) && $_POST['submit']=='I approve this Lead Generator'){

    $vendor_product_id = mysql_escape_string($_REQUEST['pid']);
    $revision = $revision + 1;
    $status = 'approved';
    $app_hash = md5('land'.time().$vendor_product_id);
    $rev_hash = md5('land'.time().$vendor_product_id);
    $created = date('Y-m-d h:i:s');
    $edited = date('Y-m-d h:i:s');
    $sent_to = $_REQUEST['sent_to_email'];
    $accept_date = date('Y-m-d h:i:s');
    $ip = $_SERVER['SERVER_ADDR'];
    $signature = $_REQUEST['signature'];
    $company_name = $_REQUEST['company_name'];

    $mysql_query = "update vendor_product_lg_approvals set accept_date = '".$accept_date."', 
    signature = '".$signature."',
    status = '".$status."',
    app_hash = '".$app_hash."',
    ip = '".$ip."' where app_hash ='".$_REQUEST['hashval']."'";
    mysql_query($mysql_query);
  
  if( isset($_POST['editor_email']) && !empty($_POST['editor_email'])){

    $get_editor_email = "select email from editors where name_alias = '".$_POST['editor_email']."'";
    $editor_to = mysql_query($get_editor_email);
    $res_editor = mysql_fetch_row($editor_to);
    //print_r($res_editor);
    $to_email = $res_editor['0']; 
    $to = $to_email;
    // $to = "pankaj.belwal@dotsquares.com";
    $subject = "Lead Generator Request Approval";
    $txt = 'Lead generator for '.$company_name.' has been approved.';
    $headers2 = 'From: ' . $sent_to_email . "\r\n";
    /* $headers = "From: noreply@landscapeonline.com";*/
     mail($to,$subject,$txt,$headers2);
    // die;
  }
  // die('ffffff');
    //header("location: approvals-thankyou.php?stat=yes");
    echo "<script>
        window.location.href = 'approvals-thankyou.php?stat=yes';
    </script>";

}



 if(isset($_POST['submit']) && $_POST['submit']=='Submit Change Request'){

   // print_r( $_POST);
    //die;
    $vendor_product_id = mysql_escape_string($_REQUEST['pid']);
    $revision = $revision + 1;
    $status = 'pending';
    $hashval = $_POST['hashval'];
    $app_hash = md5('land'.time().$vendor_product_id);
    $rev_hash = md5('land'.time().$vendor_product_id);
    $created = date('Y-m-d h:i:s');
    $edited = date('Y-m-d h:i:s');
    //$sent_to = $_REQUEST['sent_to_email'];
    $accept_date = date('Y-m-d h:i:s');
    $ip = $_SERVER['SERVER_ADDR'];
    $signature = $_REQUEST['signature'];
    $sent_to_email = $_POST['sent_to_email'];

    $mysql_query = "update vendor_product_lg_approvals set 
    rev_hash = '".$hashval."',
    app_hash = '',
    ip = '".$ip."' where app_hash ='".$_REQUEST['hashval']."'";
    mysql_query($mysql_query);


    $mysql_query = "insert into vendor_product_lg_approvals set signature = '".$signature."',
    revision = '".$revision."',
    vendor_product_id = '".$_POST['vendor_product_id']."',
    sent_to = '".$sent_to_email."',
    status = '".$status."',
    app_hash = '".$app_hash."',
    ip = '".$ip."',
    rev_hash = '".$rev_hash."'";
    mysql_query($mysql_query);
// die;

if( isset($sent_to_email) && !empty($sent_to_email)){



  $get_editor_email = "select * from editors where name_alias = '".$_POST['editor_email']."'";

  $editor_to = mysql_query($get_editor_email);
  $res_editor = mysql_fetch_row($editor_to);
  //print_r($res_editor);
  $to_email = $res_editor['3']; 
  $to_phone = $res_editor['4']; 
  $to_extension = $res_editor['6']; 
  // $to_email = $res_editor['0']; 


  $mail_sendto_email = $sent_to_email; 
  $to = $mail_sendto_email;
  // $to = "pankaj.belwal@dotsquares.com";
  // $to = "jshort@landscapeonline.com";

  $subject = "Revised Lead Generator Approval Link";

  // $txt = $_REQUEST['message'];
$txt =  "Thank you for submitting your: 
".$size." Lead Generator Profile for the 2016 LASN Specifier's Guide

A proof of your Lead Generator has been created and is pending your
approval. To review and approve the content, please visit the following
link. (NOTE: If you can't click the link, please copy and paste the address
into your browser.)

https://landscapearchitect.com/guide/approvals-new.php?hash=".$app_hash."

If you have any questions, please Contact: ".str_replace('_', ' ', $editor)."

Email : ".$to_email."
Phone: ".$to_phone." *".$to_extension."
Fax: ".$to_phone."

Thank you again for being part of the #1 Product Directory in the industry";



  $headers = "From: info@landscapeonline.com";


  mail($to,$subject,$txt,$headers);

}


if( isset($_POST['editor_email']) && !empty($_POST['editor_email'])){

    $get_editor_email = "select email from editors where name_alias = '".$_POST['editor_email']."'";
    $editor_to = mysql_query($get_editor_email);
    $res_editor = mysql_fetch_row($editor_to);
    //print_r($res_editor);
    $to_email = $res_editor['0']; 
    $to = $to_email;
    // $to = "pankaj.belwal@dotsquares.com";
    $subject = "Lead Generator Change Request";
    $txt = $_REQUEST['message'];
    $headers2 = "From: $company_name <$sent_to_email>\r\n";
    /* $headers = "From: noreply@landscapeonline.com";*/
     mail($to,$subject,$txt,$headers2);

    // die;
  }
    echo "<script>
    window.location.href = 'approvals-thankyou.php?stat=no';
    </script>";
}
?>
</div>

  <!-- Start Content Section -->

  <!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
  <tr>
      <td style="line-height:10px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Old Code Start -->

  <div>
    <div class="tb2" style="width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
    <span style="font-size:16px">Lead Generator Product Profile Proof & Approval Request Form&nbsp;&nbsp;</span>
    </div><br />
  </div>
  <div>
    <div>
      <p>Please review the content of your <b>Lead Generator Product Profile</b> below, then use the approval form below to make edits or approve the profile.</p>
    </div><br><br>
                
    <div>
        
<?
  while($row = mysqli_fetch_array($results))
  {
    //echo "<pre>";
    //print_r($row);

   // die;
    $editor_name = $row["editor"];
    $sent_to_email = $row["sent_to"];
    $hash_status = $row["status"];
    $vendor_product_id = $row["vendor_product_id"];
    $revision = $row["revision"];
    $company_name = $row["cn"];
  
  
  if ($row["brand"] == 'lasn') {
    $brand2 = 'LASN';
  } else {
    $brand2 = 'LCDBM';
  }
  
?>                
      
      <h1>Listing Information</h1><br>
      <span style="font-size:16px">This <strong><?php echo $row["size"] ?> Lead Generator Product Profile</strong> is scheduled to appear in <strong><?php echo $brand2 ?>.</strong></span><br><br>
            <strong>Your Editor is:</strong> <?php echo str_replace('_', ' ', $row["editor"] ); ?>
    </div><br><br>
                             
    <div>

      <!-- Horizontal Bar Start -->
      <div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
      <!-- Horizontal Bar End -->
            
      
            

      <h1>Contact Information</h1><br>
      <div><span style="font-size:16px; font-family:\'Times New Roman\', Times, serif; line-height:1.1em">
        Company Name: <strong><?php echo $row["cn"] ?></strong><br />
        Website: <strong><?php echo $row["web"] ?></strong><br />
        Best Phone: <strong><?php echo $row["bp"] ?></strong><br /><br />                    
        <h1 style="font-family:Arial, Helvetica, sans-serif">Product Profile Text:</h1><br>
        <?php echo iconv('CP1252', 'ASCII//TRANSLIT', stripslashes($row['description'])); ?></span>
    </div><br>
  </div><br>
    
      <!-- Horizontal Bar Start -->
      <div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
      <!-- Horizontal Bar End -->
                            
              <h1>Image(s)</h1>
                <div>
                    <p>
                        This lead generator will use the following image or images:
                    </p><br>
                    <div>
                        <?
            if (!empty($row["photo2"])) {
            ?>
                      <table>
                          <tr>
                              <td><img src="https://landscapearchitect.com/products/images/<?php echo $row["photo"] ?>"></td>
                              <td><img src="https://landscapearchitect.com/products/images/<?php echo $row["photo2"] ?>"></td>
                        </tr>
                        </table>    
                    </div>
                </div><br><br>
                
                <? } else { ?>

                              <td><img src="https://landscapearchitect.com/products/images/<?php echo $row["photo"] ?>"></td>
                    </div>
                </div><br><br>                
                
                <? } ?>
                
                

<?
  }
?>

                
        <div>
        <!-- Horizontal Bar Start -->
          <div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
        <!-- Horizontal Bar End -->
                
           <center><h1>What Will the Lead Generator<br>
          Product Profile Look Like?</h1></center><br>
                </div>
         
                
        <div>
                        <center>Below are examples of Single and Double Lead Generator Product Profiles.</center>
                </div>
                                
        <div>
                     <center>(Example: Single Lead Generator Product Profiles)</center>
                </div>
                                
                <div>
          <img width="200" src="/devel/lg/Kalamazoo-hz.jpg">              
        </div>
                
                <div>
          <img width="200" src="/devel/lg/Kalamazoo-vrt.jpg">              
        </div>
                
        <div>
                     <center>(Example: Double Lead Generator Product Profile)</center>
                </div>                                
                <div>
          <img width="600" src="/devel/lg/Shade-Devices.jpg">
              
        </div><br>
                
        <!-- Horizontal Bar Start -->
          <div style="width:750px; height:2px; background-color:#605b51;"> </div><br>
        <!-- Horizontal Bar End -->                
               
        <div>
                 <center><h1>Add an Image ! Increase Your Exposure!</h1><br>
                    <span style="font-family:'Times New Roman', Times, serif; font-size:14px">Double your exposure or add profiles to the print or digital issue<br>
          plus add the product profile to the &nbsp; <img width="20%" src="https://landscapearchitect.com/lol-logos/LO_600-brown.jpg"> &nbsp; Product Search Engine for only $195.00 !!!</span></center><br>

                    <center><span style="font-family:'Times New Roman', Times, serif; font-size:14px">If you would like to add additional Product Profiles<br>
          or increase from a Single to a Double Lead Generator Product Profile<br>
          contact your Advertising Representative <em>by clicking the link or calling the number below.</em></span><br><br>
                    
                    
                    <table cellspacing="10">
                      <tr>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>If Your Company<br>Name Begins with:</center></td>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>Your Sales Representative is:</center></td>
                        </tr>
                        <tr>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>A-H</center></td>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center><a href="mailto:kongstad@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Jason Seaberg - (714) 979-5276 x 126</a></center></td>
                        </tr>
                        <tr>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>I-P</td>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><a href="mailto:vchavira@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Clint Phipps - (714) 979-5276 x 111</a></center></td>
                        </tr>                        
                        <tr>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center>Q-Z</td>
                          <td style="font-size:16px; font-family:\'Times New Roman\', Times, serif"><center><a href="mailto:mhenderson@landscapeonline.com?subject=Lead Generator Upgrade Information Request&body=Please send me Lead Generator Upgrade Information">Matt Henderson - (714) 979-5276 x 114</a></center></td>
                        </tr>                        
                  </table>
                </div> 
                <div> <br>
                 
             

             <?php if( isset($hash_status) && $hash_status != 'approved' ){ ?>       
                    <form method="POST" action="">
                    <input type="hidden" name="sent_to_email" value="<?php echo $sent_to_email?>">
          <input type="hidden" name="company_name" value="<?php echo $company_name?>">
                      <input type="hidden" name="revision" value="<?php echo $revision?>">
                    <input type="hidden" value="<?php echo $editor_name; ?>" name="editor_email" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
                   <input type="hidden" name="vendor_product_id" value="<?php echo $vendor_product_id?>">



                    <table cellpadding="5" cellspacing="0" border="0" width="763">
                        <tr>
                          <td><div style="width:750px; height:2px; background-color:#605b51;"> </div></td>
                        </tr>                
                
                        <tr>
                            <td width="763"><br><strong>PLEASE INPUT YOUR FULL NAME: </strong>
                              <input size="65" type="text" name="signature" value="<?= $_REQUEST["signature"] ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Enter Your Name" /><br><br>
                              <input type="hidden" name="hashval" value="<?php echo $_GET['hash']; ?>">
                             
                              <center><label><span style="font-size:18px; color:#F00">Lead Generator Approval</span></label><br>
                                <input type="submit" name="submit" value="I approve this Lead Generator" style="height:20px; width:225px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" /></center><br>
                            </td>
                        </tr>
                    
                        <tr>
                          <td><div style="width:750px; height:2px; background-color:#605b51;"> </div><br></td>
                        </tr>
                            
                   <tr>
                      <td>
                        <!--<input type="button" name="d_approve" value="I do not approve" onclick="javascript: d_show()" />-->                       
              <label><span style="font-size:18px; font-weight:bold">Lead Generator Change Request</span></label><br>                    
                        <label>The Lead Generator still needs to be edited.<br>
              Please make the following changes.</label><br><br>
                        <textarea name="message" rows="5" cols="82" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Enter Your Comments"></textarea> <br/><br>
              <input type="submit" name="submit"  value="Submit Change Request" style="height:20px; width:225px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" />
 
                      </td>
                    </tr>                            
                            
                            
                            
                            
                            
                    </table>
                                       
                    
                    
                    

                    </form>           
            <?php } ?>
 </div>                                    

<!-- Old Code End -->

<!-- Spacing added to move footer down Start -->
<table>
  <tr>
      <td style="line-height:100px">&nbsp;</td>
    </tr>
</table>
<!-- Spacing added to move footer down End -->
    
  <!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

  <!-- Start - Divs is here to move the ads for the articles in correct position -->
  <div style="position:absolute; left:465px; top:165px">
      <?
    include $include_path . "banner-unvers-no-rot.inc";
    ?>
  </div>      
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
  <div class="bottom1">
  <? include $include_path . "lo_footer-main2.inc"; ?>
  </div>
</div>