<?php



require_once("template_class.php");



class type_biz_class extends template_class {

    // meta

    var $parentName;

    var $errList;



    // columns

    var $id;

    var $idParent;

    var $weight;

    var $sub_number;

    var $name;

    



    function type_biz_class() {

        // table name

        $table   = "type_biz";

        // list of db columns

        $columns = array(

            'id',

            'idParent',

            'weight',

            'sub_number',

            'name'

        );

        $this->instantiate($table,$columns,$record);

    }



    function action($action = 'default', $vars = NULL) {

    }



    function setDbTable() {

        // used in statically called functions

         'type_biz';

    }



    function showTypeBizSelections($bizList) {

        $query = "select * from " . $this->dbTable . " order by name ";

        if(DB::isError($results = $this->db->getAll($query))) {

            $this->dbError("showTypeBizSelections::pQuery", $results);

        }

        foreach($results as $row) {

            if(in_array($row['id'],$bizList)) {

                if($row['weight'] > 6) {

                    print('<strong>' . ucwords($row['name']) . '</strong><br />');

                } else {

                    print(ucwords($row['name']) . '<br />');

                }

            }

        }



    }



    function displayList($bizList = NULL, $proType = NULL, $format = 'normal') {

        $table = 'type_biz';

        if(is_null($bizList)) {

            $bizList = array();

        } else if(!is_array($bizList)) {

            if(is_string($bizList) && strlen($bizList) > 0) {

                $list = $bizList;

                $bizList = explode(',', $list);

            } else {

                $bizList = array();

            }

        } 



        switch($proType) {

            case 'd':

                $weight = 6;

                $parent = 0;

                break;

            case 'c':

                $weight = 6;

                $parent = 1;

                break;

            default:

                break;

        }



        if($format != 'normal' && $weight > 0) {

            $basequery  = "SELECT id, name FROM " . $table . " WHERE idParent = $parent";

            $pQuery = $basequery . " AND weight >= $weight ORDER BY weight DESC, id";

            $query  = $basequery . " AND weight <  $weight ORDER BY weight DESC, name";

        } else {

            $query  = "SELECT id, name FROM " . $table . " ORDER BY name";

        }



        if(isset($pQuery)) {

            if(DB::isError($results = $this->db->getAll($pQuery))) {

                $this->dbError("displayList::pQuery", $results);

            }



            print('<table width="100%" border="0" cellpadding="0" cellspacing="0">');

            foreach($results as $rowNum => $row) {

                if(in_array($row['id'], $bizList))

                    $t = 'checked';

                else

                    $t = '';

                print('<tr><td width="10%" align="left">');

                print('<input type="checkbox" name="biz_id[]" ' . $t);

                print(' value="' . $row['id'] . '" /></td>');

                print('<td align="left"><strong>' . $row['name'] . '</strong></td></tr>');

            }

            print('</table><br>');

        }





        if(DB::isError($qresults = $this->db->getAll($query))) {

            $this->dbError("displayList::Query", $results);

        }



        print('<table width="100%" border="0" cellpadding="0" cellspacing="0">');

        foreach($qresults as $rowNum => $row) {

            if(in_array($row['id'], $bizList))

                $t = 'checked';

            else

                $t = '';

            print('<tr><td width="10%" align="left">');

            print('<input type="checkbox" name="biz_id[]" ' . $t);

            print(' value="' . $row['id'] . '"></td>');

            print('<td align="left">' . $row['name'] . '</td></tr>');

        }

        echo('</table><br>');

    }

}

?>

