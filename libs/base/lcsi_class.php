<?php
require_once("template_class.php");

class lcsi_class extends template_class {
    // meta
    var $parentName;
    var $errList;
    var $stage;
    var $trans;
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
    var $batchID;
    var $ticker;
    var $price;
    var $date;

    function lcsi_class($record=NULL) {
        // table name
        $table   = "lcsi";
        // list of db columns
        $columns = array(
            'id',
            'batchID',
            'ticker',
            'price',
            'date'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
    }

    function batchInput($ticker, $price)  {
        $this->clear();
        $this->ticker = $ticker;
        $this->price = $price;
        $this->commit();
        $this->clear();
    }

    function getLCSI() {
        $query = "select sum(price) from " . $this->dbTable .  " group by batchID order by batchID desc limit 1";
        if(DB::isError($result = $this->db->getOne($query))) {
            $this->dbError('getLCSI::query', $result);
        }

        return($result);
    }

    function getCurrentMonthSums() {
        $slice  = date('Ym');
        $month  = date('M');

        $query  = "select batchID, sum(price) as price, extract(day from batchID) as day from " . $this->dbTable;
        $query .= " where extract(year_month from batchID) = $slice group by batchID asc";

        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError('getCurrentMonthSums::query', $result);
        }

        return($result);
    }

    function getMonthSums($year,$month) {
        $slice = $year . $month;

        $query  = "select batchID, sum(price) as price, extract(day from batchID) as day from " . $this->dbTable;
        $query .= " where extract(year_month from batchID) = $slice group by batchID asc";

        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError('getCurrentMonthSums::query', $result);
        }

        return($result);
    }
}
?>
