<?php 
$localtype = $_GET["localtype"];
if($localtype == 'turfgrass2') {
    if($_GET['searchby'] == 'ac' && strlen($_GET['areacodes']) == 0 && strlen($_GET['state']) > 0) {
        $searchby = 'st';
    }
} else if($localtype == 'services') {
$titleCat = 'service'; $titleSearch = 'Find a Pro'; $imgSearch = 'FAP-Search-button.jpg';
} else {
$titleCat = 'product'; $titleSearch = 'Product'; $imgSearch = 'Product-Search.gif';
}
$keywd = $_GET['keyword'];
if(isset($_GET['op1'])) $operation = "SearchKeyword"; else if(isset($_GET['op2'])) $operation = "SearchCategory"; else $operation = "ExpandCategory";
if( $operation == "ExpandCategory") {
    $ca = "no";
    $nextDisplay = $next;
    $keywd = "";
} else if( $operation == "SearchKeyword") {
    $ca = "";
    $nextDisplay = "";
    $keywd = $_GET['keyword'];
} else if( $operation == "SearchCategory") {
    $nextDisplay = $next;
    $ca = $_GET['ca'];
    $keywd = "";
}
$searchtype = $_GET["searchtype"];
if($searchtype == ""){
    if($_GET["next"] == "34"){
        $searchtype = "company";
    }
    else{
        $searchtype = "photo";
    }
}

?>
<script language="JavaScript" type="text/javascript">
<!--
    function launchSearch(refine) {
        document.refine.searchby.value = refine;
        document.refine.submit();
    }
// --> 
</script>
<script language="JavaScript" type="text/javascript">
<!-- 

<!-- Begin
function checkall(chk)
{
for (i = 0; i < chk.length; i++)
chk[i].checked = true ;
}

function uncheckall(chk)
{
for (i = 0; i < chk.length; i++)
chk[i].checked = false ;
}
// End -->

</script>
<style type="text/css">
<!--
.style1 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 24px;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style7 {font-family: "Times New Roman", Times, serif; font-size: 14px; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style9 {
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
    font-size: 14px;
}
.vendor_listing{
     height: auto;
    /*overflow-y: scroll;*/

}
.vendor_listing ul{list-style:none}
.vendor_listing ul li{width:33%; float:left; font-size:13px; margin-bottom:15px;}
-->
</style>

    <form handler="<? $_SERVER['PHP_SELF'] ?>" method="get" name="refine" style='margin: 0; padding: 0; '>
    <input type="hidden" value="<?= $localtype ?>" name="localtype" />
    <input type="hidden" value="<?= $_GET['vst'] ?>" name="vst" />
    
<!-- Added Section -->    

 <!-- Category Section Start -->
 <div>       

<div>
        Select the Category from the Drop Down List:
</div>

<div>

        <select name="next" style="width:325px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px" onchange="document.refine.submit();">
            <option value="">Please choose a <?= $titleCat ?> category.</option>
            <? if($localtype == 'services') {
            $vl->vendor_xlist_cats_find($nextDisplay);
            } else {
            $vl->vendor_xlist_catp_find10($nextDisplay); //this is the one that is used for dropdown 
             }?>
        </select>
        
        <?

        if(($_GET["next"] == "35") || ($_GET["next"] == "34")){
        $searchtype = "company";
        }
        else{
            $searchtype = "photo";
        }
    
        ?>
        
</div>

<div>
            <? if($operation == "SearchCategory") { 
            if(!is_array($quicklaunch[$localtype]['cat'])) {
            if(is_array($categories)) {
                foreach($categories as $value) {
                    echo('<input type="hidden" name="xlist[]" value="' . $value . '" />');
                        }
                     }
                }  
             ?>
<div>
        <input type="submit" alt="Modify" align="middle" name="op3" value="Modify" style="font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:18px; color:#C60; background-color:#c0c0c0"/>
<div class="vendor_listing">
<ul>
<?php 
// $sql = "SELECT id,company_name FROM new_vendor where active=1 and status=16";

$sql = "SELECT distinct vendor_id FROM vendor_product where find_in_set('".$_REQUEST['find'][0]."',xlist)";

$result = mysql_query($sql);
$vendor_name_array = array();
if (mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_array($result)) { 
    $vendor_name = get_vendor_name($row["vendor_id"]);
    // echo $vendor_name; 
    if(!empty($vendor_name)){
      $count_rec = get_product_count_for_vendor2($row["vendor_id"]);

      $vendor_name = $vendor_name.'_'.$count_rec.'_'.$row["vendor_id"];
    ?>
    

    <?php 
  } 
$vendor_name_array[] = $vendor_name;
}
}

sort($vendor_name_array);
//print_r($vendor_name_array);
foreach ($vendor_name_array as $key => $value) {
 $new_value =  explode('_', $value);
  if(!empty($value)){
    ?>
  <li><a href='https://landscapearchitect.com/products/listing.php?id=<?php echo $new_value[2]; ?>'> <?php echo substr($new_value[0],0,27).' '.$new_value[1]; ?> </a>
  </li>
<?php 
  }
}
?>
</ul>
</div>
   
<div style="padding:0px; width:665px; font-size:14px; color:#000; margin-left: -9px;">
<?php 

$cat = $find[0];
$mysql_query = "select name from xlist where id='".$cat."'"; 
$catres = mysql_query( $mysql_query ); 
$res = mysql_fetch_row($catres);
//echo $res['0'];
?>
<br />
<!--To refine your search, please click on the tabs below.--><br />
<table border='0' cellpadding='0' cellspacing='0' width='753'>
    <tr>
        <td width="95" align="center" nowrap style=" position:relative; top:50px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:normal; color:#000; background-color:#a97f3f; padding-left:10px; box-shadow: 5px 5px 5px #888888">Search Results For: <?php echo $res['0']; ?></td>
    </tr>


</table>
</div>

<?php    
    if (isset($_GET['op1']) || isset($_GET['op2']) ){
        //print_r($_SERVER);
     include ("product_search_do2-js.php"); //n-1
    }
     
?>
 </div>

            <? } else { ?>
<div>
        <input type="submit" alt="Search" align="middle" name="op2" class="op2search" value="Search" style="width:200px; height:40px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:24px; color:#C60; background-color:#c0c0c0; display: none"/>
            <? } ?>
        <input name="ca" type="hidden" value="<?= $ca ?>" />
        </div>
</div>




    
    
    
<div>
        &nbsp;
</div>

<div>
    <span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Choose Your Options:</span>
</div>
        
<div>
          <input type="radio" name="searchtype" value="photo" <? if($searchtype == 'photo') echo "checked"; ?>  />
          Product / Project Photos
</div> 

<div>
    <em>Find product examples.</em>
</div>              
                
<div>
          <input type="radio" name="searchtype" value="company" <? if($searchtype == 'company') echo "checked"; ?> />
                Company Listings<br /><br />
</div>

<div>
    <em>Find companies supplying those products.</em>
</div>




<div>
<? 
if($_GET['next']) {
    $oc = 'onchange="document.refine.ca.value=\'yes\'; checkall(document.refine); document.refine.submit();"';
} else {
    $oc = 'onChange="document.refine.submit();"';
} ?>
</div>

<div>
<?php if($operation == "ExpandCategory" && $_GET['next'] > 1) { ?>

                            <hr width="90%" noshade='noshade' size='-1' /><br />
                            <div style='margin-left: 10px;'>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            
                                            <div align="center" style="margin-bottom: 20px;">
                                                <div style='font-size: 100%; float: left; margin-left: 0px; margin-top: 3px; z-index:100'>
                                                <script language="JavaScript">
                                                function toggle(source) {
                                                checkboxes = document.getElementsByName('find[]');
                                                for(var i=0, n=checkboxes.length;i<n;i++) {
                                                checkboxes[i].checked = source.checked;
                                                }
                                                }
                                                </script>
                                            
                                <?php /* <input type="checkbox" onClick="toggle(this)" /> Check All / Uncheck All<br/> */ ?>


                                                </div>
                                                <span style="font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60">Specify Category Options&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            </div>
                                            <div class='infocontents'>
                                                <?     $vl->search_list($next, $categories,'', 'subcat');
                                               // include('categories.php'); 
                                                ?>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                                <?
} ?>
</div>

<br>
</form>
</div>

<?php
     function get_product_count_for_vendor2( $vendor_id = null){
        $num_rows = '';
        $select_query = "SELECT * FROM  `vendor_product` WHERE vendor_id =".$vendor_id ;
        $query = mysql_query($select_query);
        $num_rows = mysql_num_rows($query); 
        if( $num_rows!=0 ){
            return  "(" .$num_rows. ")";
        } else {
           return  '';
        }
    }

function get_vendor_name( $vendor_id = null){
        $num_rows = '';
        $select_query = "SELECT company_name FROM  `new_vendor` WHERE active=1 and status =16 and id =".$vendor_id ;
        $query = mysql_query($select_query);

    if (mysql_num_rows($query) > 0) {
        while($row = mysql_fetch_array($query)) { 
        return $vendor_name = $row["company_name"];
      }
    } else{
      return '';
    }
}
?>


<script type="text/javascript">
    var execute_search = '<?php echo $_GET["execute_search"]; ?>';
    var start_new_search_ahref = document.getElementById("start_new_search");
    if(execute_search == "true"){
        start_new_search_ahref.value = "";
        start_new_search();
    }
<? if($searchby == 'ac' || $searchby == '') { ?>
    document.refine.areacodes.focus();
<? } ?>
</script>