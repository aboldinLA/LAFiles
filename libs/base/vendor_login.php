<?php
require_once("template_class.php");
require_once("transaction_class.php");
require_once("vendor_login.php");

class vendor_login extends template_class {
    // meta
    var $parentName;
    var $errList;
    var $stage;
    // list of stages and their usability

    // paginators
    var $from;
    //var $sortBy='id';
    var $sortStr;
    var $sortDir='ASC';
    var $pageNum=0;
    var $pageLimit=20;


    // columns
    var $id;
    var $uid;
    var $pass;
    var $time_start;

    function vendor_login() {
        // table name
        $table   = "vendor_login";
        // list of db columns
        $columns = array(
            'id',
            'uid',
            'pass',
            'time_start'
        );
        $this->instantiate($table,$columns,$record);
    }

    function fetchPassword($vid=NULL) {
        if(is_null($vid)) {
            return(FALSE);
        }

        $sql = "select * from {$this->dbTable} where uid=$vid";
        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("findPassword::Result",$results);
        }

        switch(count($results)) {
            case 0:
                // no password
                return(0);
                break;
            case 1:
                return($results[0]['pass']);
                break;
            default:
                $this->dbError("findPassword::Consistency Error -- too many passwords");
                return(FALSE);
        }
    }

    function fetchByVendor($vid=NULL) {
        if(is_null($vid)) 
            return(FALSE);

        $sql = "select * from {$this->dbTable} where uid=$vid";
        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("findPassword::Result",$results);
        }

        switch(count($results)) {
            case 0:
                return(0);
                break;
            case 1:
                return($results[0]);
                break;
            default:
                $this->dbError("findPassword::Consistency Error -- too many passwords");
                return(FALSE);
                break;
        }

        return($result[0]);
    }
}
?>
