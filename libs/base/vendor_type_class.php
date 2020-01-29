<?php

require_once("template_class.php");

class vendor_type extends template_class {
    // meta
    var $parentName;
    var $errList;

    // columns
    var $id;
    var $type_num;
    var $name;
    var $plural;
    

    function vendor_type() {
        // table name
        $table   = "vendor_type";
        // list of db columns
        $columns = array(
            'id',
            'type_num',
            'name',
            'plural'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
    }

    function fetchVendorTypeArray($type) {
        switch($type) {
            case 'm':
                // manufacturers & exclusive importers
                $set = "1,2";
                break;
            case 'w':
                // wholesale, retail, reps
                $set = "3,4,5";
                break;
            case 'g':
                // growers
                $set = "6";
                break;
            case 's':
                // service providers
                $set = "7";
                break;				
            default:
                $set = FALSE;
                break;
        }

        $query = "select * from {$this->dbTable}";
        if($set) {
            $query .= " WHERE find_in_set(id,'$set')";
        }
        $query .= " ORDER BY name";

        if(DB::isError($results = $this->db->getAll($query))) {
            $this->dbError("fetchVendorTypeArray::query", $results);
        }
        return($results);
    }

    // basic vendor type selection widget this is for Primary Company Info Manufacturers
    function selectionWidget($selected = NULL, $type=NULL) {
        $i = 0;
        $list = & $this->fetchVendorTypeArray($type);
        print("<table border='0' cellspacing='5'>");
        print("  <tbody>");
        
        foreach($list as $row) {
            $s = ($row['id'] == $selected) ? 'checked' : '';
            if(!($i % 2)) {
                print("<tr>");
            }
            ?>

						<? if ($row['id'] != 11) { ?>				

                    <td width='5%' valign='top' align='right'>
								
                        <input <?= $s ?> type='radio' id='<?= $row['name'] ?>' name='vendor_type' value='<?= $row['id'] ?>' />
                    </td>
                    <td width='45%' valign='top'>
                        <label for='<?= $row['name'] ?>'><?= $row['name'] ?></label>
						
                    </td>

						<? } ?>

            <?
            $i++;
            if(!($i % 2)) {
                print("</tr>");
            }
        }
        print("  </tbody>");
        print("</table>");
    }
	
   // basic vendor type selection widget this is for Primary Company Info Wholesale
    function selectionWidget2($selected = NULL, $type=NULL) {
        $i = 0;
        $list = & $this->fetchVendorTypeArray($type);
        print("<table border='0' cellspacing='5'>");
        print("  <tbody>");
        
        foreach($list as $row) {
            $s = ($row['id'] == $selected) ? 'checked' : '';
            if(!($i % 2)) {
            }
            ?>

						<? if (($row['id'] != 11) && ($row['id'] != 6) && ($row['id'] != 4) && ($row['id'] != 3) && ($row['id'] != 7)) { ?>				

                    <td width='5%' valign='top' align='right'>
								
                        <input <?= $s ?> type='radio' id='<?= $row['name'] ?>' name='vendor_type' value='<?= $row['id'] ?>' />
                    </td>
                    <td width='45%' valign='top' style="padding-right: 10px">
                        <label for='<?= $row['name'] ?>'><?= $row['name'] ?></label>
						
                    </td>

						<? } ?>

            <?
            $i++;
            if(!($i % 2)) {
            }
        }
        print("  </tbody>");
        print("</table>");
    }
	
	
   // basic vendor type selection widget this is for Service
    function selectionWidget3($selected = NULL, $type=NULL) {
        $i = 0;
        $list = & $this->fetchVendorTypeArray($type);
        print("<table border='0' cellspacing='5'>");
        print("  <tbody>");
        
        foreach($list as $row) {
            $s = ($row['id'] == $selected) ? 'checked' : '';
            if(!($i % 2)) {
                print("<tr>");
            }
            ?>

						<? if (($row['id'] != 11) && ($row['id'] != 6) && ($row['id'] != 4) && ($row['id'] != 1) && ($row['id'] != 2)) { ?>				

                    <td width='5%' valign='top' align='right'>
								
                        <input <?= $s ?> type='radio' id='<?= $row['name'] ?>' name='vendor_type' value='<?= $row['id'] ?>' />
                    </td>
                    <td width='45%' valign='top'>
                        <label for='<?= $row['name'] ?>'><?= $row['name'] ?></label>
						
                    </td>

						<? } ?>

            <?
            $i++;
            if(!($i % 2)) {
                print("</tr>");
            }
        }
        print("  </tbody>");
        print("</table>");
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
                print('<input type="radio" name="biz_id[]" ' . $t);
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
