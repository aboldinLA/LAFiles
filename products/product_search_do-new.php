<?php
include("debug_pcm.php");
session_start();
// Connect to the database server
$dbcnx = @mysql_connect('localhost', 'landscap_lol', 'meow2meow');
if (!$dbcnx) {
    die( '<p>Unable to connect to the database server at this time.</p>' );
}

// Connect to loldev DB
if (! @mysql_select_db('landscap_lollive') ) {
    die( '<p>Unable to locate the loldev database at this time.</p>' );
}

$keyword    = ($_POST['keyword'])? $_POST['keyword'] : $_GET['keyword'];
$searchtype = ($_POST['searchtype'])? $_POST['searchtype'] : $_GET['searchtype'];


$localtype = $_GET['localtype'];
$vst = $_GET['vst'];
if($_GET["searchby"] == "ac"){
	$areacodes = $_GET['areacodes'];
}
else{
	$areacodes = "";
}
$state = $_GET['state'];

$searchby = $_GET['searchby'];
$next = $_GET['next'];
$find = $_GET['find'];
$proceed = true;

    if(($keyword=="" || !isset($keyword)) && ($localtype=="" || !isset($localtype))){
        echo add_tabs();
        echo "<div id='pageBody'>
            <center>
        	<table width='753' border='0' align='center'><br>Keyword Empty.</table>
            </center>
        </div>";
        $proceed = false;
    }
    
    if(($keyword=="" || !isset($keyword)) && isset($localtype) && (!isset($find) || $find == '')){
        $proceed = false;
    }
 
if($searchtype == 'company' && $proceed == true){
	
    echo add_tabs();
    
	if(isset($keyword) && $keyword!=''){
   		$results = search_company_key($keyword);
	}
    else{
    	$results = search_company($next);
    }    	
    if(!$results){
        echo "<div id='pageBody'>
            <center>
        	<table width='753' border='0' align='center'><br>Click Here to Modify Search.</table>
            </center>
        </div>";
    }
    else
        echo company_results_html($results);
}

if($searchtype == 'photo' && $proceed == true){
    echo add_tabs();
	if(isset($keyword) && $keyword!='') {
   		$results = search_photo_key($keyword);
    } else
    	$results = search_photo($next);
    if(!$results) {
        echo "<div id='pageBody'>
        <center>
        	<table width='753' border='0' align='center'><br>No Matches Found. Please Try Again.</table>
            </center>
        </div>";
    }
    else
        echo photo_results_html($results);
}

function company_results_html($results){
    $html .="<div id='pageBody'>
			<div style='position:relative; top:0px'>
        	<table width='753' border='0'><tr>
            	    <td>Company</td>
            	    <td align='center'> </td>
            	    <td width='20'>&nbsp;</td>
            	    <td width='226'>Company</td>
            	    <td align='center'> </td>
            	</tr>";
    $counter=0;
    foreach($results as $r){
        if($counter % 2 == 0)
            $html .= "<tr>";
    	if($counter % 2 != 0)
    	   $html .= "    <TD width=30>&nbsp;</TD>";
    	$html .= "	<td width=226 bgcolor=#ffffff>";
		
	    if($r['status'] >= 4) $html .="	<a href='listing.php?id=$r[id]'>";
	    if($r['status'] >= 4) $html .="	<img width='180' height='86' src='https://landscapearchitect.com/products/images/$r[logo]'><br>";
		$html .="	$logo";
		
	    if($r['status'] >= 4) $html .="	<a href='listing.php?id=$r[id]'>";
	    $html .="	$r[company_name]";

	    if($r['status'] >= 4) $html .="	</a>";
	    $html .="	<br>";
	    $html .= $r['phone'];
	    $html .= '<br><br>';
	    $html .= "</td>";
    	$html .= "    <td bgcolor=#ffffff align=center>"."</td>";
    	if($counter % 2 != 0)
    	   $html .= "</tr>";
    	   
    	$counter++;
    }
    $html.="                </table>


            </center>
        </div></div>";
    return $html;
}

function photo_results_html($results){
    $html .="<div id='pageBody'>
			<div style='position:relative; top:0px'>
        	<table width='753' border='0'>";
    $counter=0;
    foreach($results as $r){
    	if(!file_exists('images/'.$r['photo']))
		  continue;
        if($counter % 3 == 0)
            $html .= "<tr>";
        $html .= "<td align=center><div style='overflow: hidden; width: 250px;'>";
        if($r['status'] >= 4) $html .= "<a href='listing.php?id=$r[vendor_id]'>";
        $html .= "<img src='images/$r[photo]' border='0'width='250px'></div><br />$r[company_name]";
		
        if($r['status'] >= 4) $html .= "</a>";


        $html .= "<br /><br /></td>";
        
        if($counter % 3 == 2)
            $html .= "</tr>";
        $counter++;
    }
    $html .= "                </table>
            </center>
        </div></div>";
    return $html;
}

function search_company($next){
    global $searchby, $vst, $find, $state, $areacodes;
    $extra = (isset($where) || isset ($clike))? " and ($where $clike)" : "";
    $query2 = find_listings($searchby, $extra, $vst, $find, $state, $areacodes);
    $result_all_vendors_by_xlist = query($query2);
    if(count($result_all_vendors_by_xlist)==0)
        return false;

    $results = array();   
    foreach($result_all_vendors_by_xlist as $vendor){
        $results[$vendor['id']] = $vendor;
    }
    return $results;
}

function search_photo($next){
    global $searchby, $vst, $find, $state, $areacodes;
        $query = "select vp.*,v.company_name,v.status,v.edit_date,vp.photo_time 
          		  from vendor_product as vp
                  left join new_vendor as v on vp.vendor_id = v.id
                  where v.active=1 and v.status>0 ";
        if($searchby == "ac") {
	        	if($areacodes != ""){
	        		$ary_areacodes = explode(" ", trim($areacodes));
	        		foreach ($ary_areacodes as $val){
	        			$ary_sql_area_codes[] = "(v.area_code = '$val')"; 
	        		}
	           		$query .= "AND ( ".join(" OR ",$ary_sql_area_codes)." ) ";
	        	}
        } else if($searchby == "st") {
            $query .= "AND v.state = '$state' ";
        }
        
        if(is_array($find)) {
            foreach($find as $xlist) {
                $condition[] = " find_in_set($xlist,vp.xlist) ";
            }   
            $query .= "AND ((" . implode(' OR ', $condition) . ")) ";
        }
        
        if(is_numeric($vst) && $vst!=0) {
            $query .= "AND v.vendor_type_id = $vst ";
        }
        $query .= $extra . " ORDER BY v.status DESC, vp.photo_time DESC";
        $products = query($query);
        
        foreach($products as $product){
            $products_list[$product['id']] = $product;
        }
    return $products_list;
}

// Search Company by keyword - @param string $keyword  -   @return array of company informations
function search_company_key($keyword){
    global $searchby, $vst, $find, $state, $areacodes;
    
    $kws = explode(" ",$keyword);
    $nlike=each_keyword($kws, 'name');
    $clike=each_keyword($kws, 'company_name');

    $query = "select * from xlist where $nlike";

    $result_by_xname = query($query);

    if($result_by_xname){
        $where = xlistor($result_by_xname, 'v');
        $where .= " OR ";
    }

    $query2 = find_listings_key($searchby, "and ($where $clike)", $vst, $find, $state, $areacodes);
    $result_all_vendors_by_xlist = query($query2);
    if(count($result_all_vendors_by_xlist)==0)
        return false;

    $results = array();   
    foreach($result_all_vendors_by_xlist as $vendor){
        $results[$vendor['id']] = $vendor;
    }
    return $results;
}

//Search Photo by Keyword - @param string $keyword - @return array of photo url
function search_photo_key($keyword){
    global $searchby, $vst, $find, $state, $areacodes;
    $kws = explode(" ",$keyword);

    $nlike = each_keyword($kws, 'name');
    //echo "nlike".show_php($nlike);
    $query = "select * from xlist where $nlike";
    //echo "query".show_php($query);
    //$query = $query.' and (state like "%oh%")';
    $clike=each_keyword($kws, 'v.company_name');
    //echo "clike".show_php($clike);
    $result_by_xname = query($query);
    //echo "result_by_xname".show_php($result_by_xname);

    $products_list = array();
    
    $where = xlistor($result_by_xname, 'vp');
    if($where != "") $where .= ' OR '; 
        $query = "select vp.*,v.company_name,v.status 
        			from vendor_product as vp
                    left join new_vendor as v on vp.vendor_id = v.id
                    where ($where $clike) and v.active=1 and v.status>0 ";
        if($searchby == "ac") { 
        	if($areacodes != ""){
        		
        		$ary_areacodes = explode(" ", trim($areacodes));
        		
        		foreach ($ary_areacodes as $val){
        			$ary_sql_area_codes[] = "(v.area_code = '$val')"; 
        		}
           		$query .= "AND ( ".join(" OR ",$ary_sql_area_codes)." ) ";
        	}
        } else if($searchby == "st") {
            $query .= "AND v.state = '$state' ";
        }
         
        if(is_array($find)) {
            foreach($find as $xlist) {
                $condition[] = " find_in_set($xlist,vp.xlist) ";
            }   
            $query .= "AND (" . implode(' OR ', $condition) . ") ";
        }
        
        if(is_numeric($vst) && $vst!=0) {
            $query .= "AND v.vendor_type_id = $vst ";
        }
        
        $query .= $extra . " ORDER BY v.status DESC, vp.photo_time DESC";
        $products = query($query);
        
        foreach($products as $product){
            $products_list[$product['id']] = $product;
        }
    return $products_list;
}


function find_listings_key($searchby, $extra, $vst, $find, $state, $areacodes) {
    $query = "SELECT v.* FROM  new_vendor as v WHERE v.active=1 ";
    if($searchby == "ac") { 
        	if($areacodes != ""){
        		$ary_areacodes = explode(" ", trim($areacodes));
        		foreach ($ary_areacodes as $val){
        			$ary_sql_area_codes[] = "(v.area_code = '$val')"; 
        		}
           		$query .= "AND ( ".join(" OR ",$ary_sql_area_codes)." ) ";
        	}

    } else if($searchby == "st") {
        $query .= "AND v.state = '$state' ";
    }
    if(is_array($find)) {
        foreach($find as $xlist) {
            $condition[] = " find_in_set($xlist,v.xlist)";
        }   
        $query .= "AND (" . implode(' OR ', $condition) . ") ";
    }
    if(is_numeric($vst) && $vst!=0) {
        $query .= "AND v.vendor_type_id = $vst ";
    }
    $query .= $extra . " ORDER BY v.status DESC, v.company_name";
    return $query;
}

function find_listings($searchby, $extra, $vst, $find, $state, $areacodes) {
     $query = "SELECT v.* FROM  new_vendor as v WHERE v.active=1 ";
    if($searchby == "ac") { 
    	if($areacodes != ""){
    		$ary_areacodes = explode(" ", trim($areacodes));
    		foreach ($ary_areacodes as $val){
    			$ary_sql_area_codes[] = "(v.area_code = '$val')"; 
    		}
       		$query .= "AND ( ".join(" OR ",$ary_sql_area_codes)." ) ";
    	}
    } else if($searchby == "st") {
		$query .= "AND v.state = '$state' ";
    }
    if(isset($clike)) $extra = " OR " . $extra;
    if(is_array($find)) {
        foreach($find as $xlist) {
            $condition[] = " find_in_set($xlist,v.xlist)"; 
        }   
        $query .= "AND (" . implode(' OR ', $condition) . ") ";
    }
    
    if(is_numeric($vst) && $vst!=0) {
        $query .= "AND v.vendor_type_id = $vst ";
    }
    $query .= $extra . " ORDER BY v.status DESC, v.company_name";
        //echo $query; exit;
    return $query;
}

function xlistor($result_by_xname, $table=''){
    $where="";
    $count=0;
    foreach($result_by_xname as $x){
        $xid=$x['id'];
        if($count!=0)
           $where .= " or ";
        $where .= "($table.xlist like '%,$xid,%' OR $table.xlist like '$xid,%' OR $table.xlist like '%,$xid' OR $table.xlist like '$xid')";
        $count=1;
    }
    return $where;
}

function each_keyword($kws, $table){
    $like="(";
    $counter=0;
    foreach($kws as $kw){
        if($counter != 0)
            $like .= ' or ';
        $like .= "$table like '%$kw%'";
        $counter=1;
    }
    $like .= ")";
    return $like;
}

function get_typecode($type){
    $typecodes = array(0 => "A", 1 => "M",2 => "E", 3 => "R", 4 => "W", 5 => "T", 6 => "G", 7 => "S");
    return $typecodes[$type];
}

function query($query){
    echo "<!-- query ";
    echo $query;
    echo "-->";
	
    $result = mysql_query($query);
    echo mysql_error();
    if(!$result){
        return false;
    }
    

    
    $results = array();
    while($assoc = mysql_fetch_assoc($result))
        $results[] = $assoc;
    return $results;
}

function add_tabs(){
    global $vst, $searchtype; 
    if($vst == 1){
        $local0 = 'local_vendor_inactive';
        $local1 = 'local_vendor_active';
        $local2 = 'local_vendor_inactive';
        $local3 = 'local_vendor_inactive';
    }
    elseif($vst == 2){
        $local0 = 'local_vendor_inactive';
        $local1 = 'local_vendor_inactive';
        $local2 = 'local_vendor_active';
        $local3 = 'local_vendor_inactive';
    }
    elseif($vst == 3){ 
        $local0 = 'local_vendor_inactive';
        $local1 = 'local_vendor_inactive';
        $local2 = 'local_vendor_inactive';
        $local3 = 'local_vendor_active';
    }
    else{
        $local0 = 'local_vendor_active';
        $local1 = 'local_vendor_inactive';
        $local2 = 'local_vendor_inactive';
        $local3 = 'local_vendor_inactive';
    }
    ?>
    
<div style="position:relative; top:-10px; padding:0px; width:665px; font-size:14px; color:#000">
<br />
<!--To refine your search, please click on the tabs below.--><br />
<table border='0' cellpadding='0' cellspacing='0' width='753'>
    <tr>
        <td width="15" height="20">&nbsp;</td>
        <td width="95" align="center" nowrap class="<?= $local0 ?>" onClick='javascript: document.refine.vst.value = 0; document.refine.submit();'>
                <strong>All</strong> 
        </td>
        <td width="15" height="20">&nbsp;</td>
        <td width="95" align="center" nowrap class="<?= $local1 ?>" onClick='javascript: document.refine.vst.value = 1; document.refine.submit();' >
            <a href="javascript: document.refine.vst.value = 1; document.refine.submit();" class="locallink">Manufacturers</a>
        </td>
        <td width="15" height="20">&nbsp;</td>
        <td width="95" align="center" nowrap class="<?= $local2 ?>" onClick='javascript: document.refine.vst.value = 2; document.refine.submit();' >
            <a href="javascript: document.refine.vst.value = 2; document.refine.submit();" class="locallink">Exclusive Importers</a>
        </td>
        <td width="15" height="20">&nbsp;</td>
        <td width="95" align="center" nowrap class="<?= $local3 ?>" onClick='javascript: document.refine.vst.value = 3; document.refine.submit();' >
            <a href="javascript: document.refine.vst.value = 3; document.refine.submit();" class="locallink">Manufacturers Representatives</a>
        </td>
        <td width='15'>&nbsp;</td>
    </tr>

    <tr>
        <td colspan="10" bgcolor="#70a183"><img width="1" height="4" alt=""></td>
    </tr>
</table>
</div>
  <?php
    
}
/*
$result = mysql_query("SELECT * FROM contacts");

while ($row = mysql_fetch_array($result)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);  
}*/

?>