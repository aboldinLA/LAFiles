<?php
require_once("template_class.php");
require_once("transaction_class.php");

class history extends template_class {
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
    var $ref_id;
    var $ref_type;
    var $code;
    var $message;
    var $date;

    function history() {
        // table name
        $table   = "history";
        // list of db columns
        $columns = array(
            'id',
            'ref_id',
            'ref_type',
            'code',
            'message',
            'date'
        );
        $this->instantiate($table,$columns,$record);
    }

    function getCodeDescription($code) {
        switch($code) {
            case 'testtransmit':
                return('Test Bulletin Sent');
                break;
            case 'transmit':
                return('Bulletin Sent to Recipients');
                break;
            case 'sendsummary':
            case 'sentsummary':
                return('Sent Bulletin Summary to Sender');
                break;
            default:
                return('Unknown');
                break;
        }
    }

    function add($ref_type, $ref_id, $code, $message='') {
        if(is_null($ref_type) || is_null($ref_id)) {
            return(FALSE);
        }
        $this->ref_id = $ref_id;
        $this->ref_type = $ref_type;
        $this->code = $code;
        $this->message = $message;
        $this->commit();

        $this->clear();
        return(TRUE);
    }

    function getArray($ref_type,$ref_id,$limit=NULL) {
        $sql = "select * from " . $this->dbTable . " where ref_type='$ref_type' AND ref_id=$ref_id order by date desc";
        if(!is_null($limit)) {
            $sql .= " limit $limit";
        }
        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("getHistoryArray::Result", $results);
        }
        return($results);
    }

    function displayTable($ref_type,$ref_id,$limit=NULL) {
        ?>
        <table>
            <tbody>
                <?
                foreach($this->getArray($ref_type,$ref_id,$limit) as $obj) {
                    ?>
                    <tr>
                        <td><?= $obj['message'] ?></td>
                        <td><?= date('m/d/y',$this->myTimeStampToEpoch($obj['date'])); ?></td>
                    </tr>
                    <?
                }
                ?>
            </tbody>
        </table>
        <?
    }
}
?>
