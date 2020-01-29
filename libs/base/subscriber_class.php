<?php
require_once("template_class.php");

class subscriber_class extends template_class {
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
    var $type_biz;
    var $type_biz_other;
    var $comp_name;
    var $biz_title;
    var $biz_title_other;
    var $website;
    var $sal;
    var $first_name;
    var $last_name;
    var $address;
    var $address_2;
    var $city;
    var $state;
    var $zip;
    var $country;
    var $area_code;
    var $phone;
    var $fax;
    var $area_code_fax;
    var $email;
    var $month;
    var $how;
    var $assoc;
    var $assoc_other;
    var $reg;
    var $auth;
    var $input;
    var $edited;
    var $mail_to;
    var $how_other;
    var $alt;
    var $subscribe;
    var $protype;
    var $note;
    var $list;
    var $pay_link;
    var $trans_id;
    var $cc_exp;
    var $active;
    var $status;
    var $hot;
    var $ylist_id;
    var $needs;
    var $ebull;
    var $expiration;
    var $notify;
    var $notify_credit;
    var $chld;
    var $cc_last;

    function subscriber_class() {
        // table name
        $table   = "subscribe";
        // list of db columns
        $columns = array(
            'id',
            'type_biz',
            'type_biz_other',
            'comp_name',
            'biz_title',
            'biz_title_other',
            'website',
            'sal',
            'first_name',
            'last_name',
            'address',
            'address_2',
            'city',
            'state',
            'zip',
            'country',
            'area_code',
            'phone',
            'fax',
            'area_code_fax',
            'email',
            'month',
            'how',
            'assoc',
            'assoc_other',
            'reg',
            'auth',
            'input',
            'edited',
            'mail_to',
            'how_other',
            'alt',
            'subscribe',
            'protype',
            'note',
            'list',
            'pay_link',
            'trans_id',
            'cc_exp',
            'active',
            'status',
            'hot',
            'ylist_id',
            'needs',
            'ebull',
            'expiration',
            'notify',
            'notify_credit',
            'chld',
            'cc_last'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
    }

    function changeStatus($record=NULL, $status=NULL) {
        $hot = 0;
        $list = 'no';

        if(is_null($record) || is_null($status)) {
            // invalid record or status
            $this->addErrors("Invalid status [$status] or record [$record]");
            return(FALSE);
        }

        if($this->fetch($record)) {
            switch($status) {
                case 3:
                    $this->hot = 2; $this->list = 'yes';
                    break;
                case 2:
                    $this->hot = 1; $this->list = 'yes';
                    break;
                case 1:
                    $this->hot = 0; $this->list = 'yes';
                    break;
                case 0:
                default:
                    $this->hot = 0; $this->list = 'no';
                    break;
            }
            $this->commit();
            $this->clear();
            return(TRUE);
        }
    }

    function fetchRecentlyChanged($days = 1) {
        $sql = "SELECT  id, comp_name " .
               "FROM    {$this->dbTable} " .
               "WHERE   edited > date_sub(current_date(), interval $days day)" .
               "AND     active=1";

        $result = $this->db->getAll($sql);

        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("fetchRecentlyChanged::Result", $results);
        }
        return($results);
    }



}
?>
