<?php

require_once("template_class.php");
require_once("transaction_class.php");

// Definitions
// Stages:

class lol_banner extends template_class {
    // meta
    var $parentName;
    var $errList;
    var $stage;
    var $trans;
    // list of stages and their usability
    var $stageList;
    var $stageNames;
    var $sectionList;

    // columns
    var $id;
    var $comp_name;
    var $first_name;
    var $last_name;
    var $email;
    var $area_code;
    var $phone;
    var $web;
    var $picture;
    var $page;
    var $location;
    var $open_mode;
    var $alttag;
    var $input;
    var $product;
    var $search_type;
    var $state;
    var $expire;
    var $active;

    function lol_banner() {
        // table name
        $table   = "banner_ups";
        // list of db columns
        $columns = array(
            'id',
            'comp_name',
            'first_name',
            'last_name',
            'email',
            'area_code',
            'phone',
            'web',
            'picture',
            'page',
            'location',
            'open_mode',
            'alttag',
            'input',
            'product',
            'search_type',
            'state',
            'expire',
            'active'
        );

        $this->instantiate($table,$columns,$record);
    }

    function findBannerByState($page, $location, $type, $state) {
        // returns null for no banners
        $query = "select * from " . $this->dbTable . " where active='yes' AND location = '$location' ";

        switch($type) {
            case 'turfgrass':
            case 'plantmat':
            case 'wholesale':
            case 'retail':
                $query .= " AND search_type='$type' AND state='$state'";
                break;
            default: return(NULL);
                break;
        }

        //print("<!-- $query -->\r\n");


        if(db::isError($result = $this->db->getAll($query))) 
            $this->dbError('findBannerByState::query', $result);

        if(count($result) > 0)
            return($result[0]);

        return(NULL);
    }
        

    function findBanner($page, $location) {
        // $page = page where banner sits
        // $location = location of banner on page

        // base query
        $b_query = "select * from " . $this->dbTable . " where active='yes' AND location = '$location' ";

        if(isset($_SESSION['banner_search']) && strlen($_SESSION['banner_search']) > 1)
            $st = $_SESSION['banner_search'];

        if(isset($_SESSION['banner_product']) && strlen($_SESSION['banner_product']) > 0) 
            $bp = $_SESSION['banner_product'];

        if(isset($_SESSION['banner_state']) && strlen($_SESSION['banner_state']) > 1) 
            $bs = $_SESSION['banner_state'];

        if($st != "" && is_integer(strpos($page, "/products"))) {
            if(!is_null($banner = $this->findBannerByState($page, $location, $st, $bs))) {
                // found a good banner
                //print("found state banner.\r\n");
                return($banner);
            } else if(!is_null($banner = $this->findBannerByState($page, $location, $st, 'default'))) {
                // found default banner
                //print("found default state banner.\r\n");
                return($banner);
            } 
                
            // product search specific banners
            $query = $b_query .  " AND product='$bp' ";
            //print("<!-- $query -->\r\n");
            if(DB::isError($result = $this->db->getAll($query))) {
                $this->dbError('findBanner::product');
            }

            if(count($result) > 0) {
                //print("found product banner.\r\n");
                return($result[0]);
            }
            
            // run state query first if state is set
            // then run product query if one is set
        } 
        // fall through for defaults
        $query = $b_query . " AND page='$page'";
        //print("<!-- $query -->\r\n");
        //print($b_query);
        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError('findBanner::simple', $result);
        } else {
            //print("found page banner.\r\n");
            return($result[0]);
        }

        return(NULL);
            // location banner
    }

    function searchTypeWidget($selected) {
        $searchTypes = array( 
            'turfgrass' => 'Turf Grass' ,
            'plantmat'  => "Plant Material",
            'wholesale' => "Wholesale Facilities",
            'retail'    => "Retail Facilities"
        );

        foreach($searchTypes as $val => $disp) {
            $t = ($selected == $val) ? 'selected' : ''; 
            print("<option value='$val' $t >$disp</option>");
        }
    }
}
?>
