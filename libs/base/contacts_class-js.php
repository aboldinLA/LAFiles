<?php

/*
    Contact Type Map
        Vendor [ven]:
            * Company [company]   -- vendor address information
            * Primary Contact [primary] -- primary contact
            Contact [contact]   -- additional contacts
            Regional [regional] -- regional contacts
 */

require_once("template_class.php");

class contact extends template_class {
    // meta
    var $parentName;
    var $errList;

    // columns
    var $id;
    var $active;
    var $ref_type;
    var $ref_id;
    var $code;
    var $input_date;
    var $edit_date;
    var $first_name;
    var $last_name;
    var $title;
    var $email;
    var $country;
    var $address1;
    var $address2;
    var $postal_code;
    var $city;
    var $state;
    var $phone_area_code;
    var $phone_number;
    var $fax_area_code;
    var $fax_number;
    var $other_1;
    var $other_2;
    var $notes;

    function contact() {
        // table name
        $table   = "contactsLG";
        // list of db columns
        $columns = array(
            'id',
            'active',
            'ref_type',
            'ref_id',
            'code',
            'input_date',
            'edit_date',
            'first_name',
            'last_name',
            'title',
            'email',
            'country',
            'address1',
            'address2',
            'postal_code',
            'city',
            'state',
            'phone_area_code',
            'phone_number',
            'fax_area_code',
            'fax_number',
            'other_1',
            'other_2',
            'notes'
        );
        $this->instantiate($table,$columns,$record);
        $this->typeList = array(
            'ven',
            'sub',
            'bull',
            'class'
        );
    }

    /* retrieves the primary contact information */
    function getPrimary($type, $record, $active=1) {
        /* we can only have ONE primary record! */
        $types = array(
            'ven',
            'sub'
        );

        if(!in_array($type, $types)) {
            return(FALSE);
        }

        if(!is_numeric($record)) {
            return(FALSE);
        }

        if(!is_numeric($active)) {
            return(FALSE);
        }

        $query = "select * from " . $this->dbTable . " where type='{$type}' AND ref_id={$record} AND active={$active}";
        
        
        if(DB::isError($results = $this->db->getAll($query))) {
            $this->dbError("getPrimary::pQuery", $results);
        }

        if(count($results) != 1) {
            return(FALSE);
        }

        return($results[0]);
    }

    /* retrieves primary contact information for a vendor */
    function getVendorPrimary(&$venID) {
        if(!is_numeric($venID)) {
            return(FALSE);
        }

        return($this->getPrimary('ven', $venID));
    }

    function action($action = 'default', $vars = NULL) {
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

    // returns TRUE/FALSE
    function validType($type=NULL) {
        if(is_array($this->typeList) && in_array($type, $this->typeList)) {
            return(TRUE);
        }
        return(FALSE);
    }

    function addContact($type=NULL, $id=NULL, $code, & $hashList) {
        if(is_null($type) || is_null($id) || is_null($hashList) || !$this->validType($type)) {
            return(FALSE);
        }

        $this->clear();
        $this->ref_type = $type;
        $this->ref_id = $id;
        $this->code = $code;
        $this->input($hashList);
        $this->commit();
    }

    function fetchContact($ref_type, $ref_id, $code=NULL) {
        $query = "select * from " . $this->dbTable . " where ref_type='${ref_type}' and ref_id='${ref_id}'";

//        echo $query;
        
        if(!is_null($code))
            $query .= " and code='${code}'";

        if(DB::isError($results = $this->db->getAll($query))) {
            $this->dbError("fetchContact::Query", $results);
        }

        switch(count($results)) {
            case 0:
                return(FALSE);
                break;
            case 1:
                $this->fetch($results[0]['id']);
                return(TRUE);
                break;
            default:
                $this->dbError("fetchContact::Result -- too many records returned.");
                return(FALSE);
        }
    }

    function fetchContactsArray($ref_type, $ref_id, $code=NULL) {
        $sql = "SELECT * from {$this->dbTable} WHERE ref_type='{$ref_type}' AND ref_id={$ref_id}";
        if(!is_null($code))
            $sql .= " and code='{$code}'";
        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("fetchContactsArray::Query", $results);
        }
        return($results);
    }

    function getAddress() {
        $string  = $this->address1 . "<br />";
        $string .= ($this->address2) ? $this->address2 . "<br />" : "";
        $string .= $this->city . " " . $this->state . ", " . $this->postal_code;
        return(stripslashes($string));
    }

    function getPhoneNumber() {
        $string = "(" . $this->phone_area_code . ") " . $this->phone_number;
        return(stripslashes($string));
    }

    function getFaxnumber() {
        $string = "(" . $this->fax_area_code . ") " . $this->fax_number;
        return(stripslashes($string));
    }

    function getLastName() {
        return(stripslashes($this->last_name));
    }

    function getFirstName() {
        return(stripslashes($this->first_name));
    }

    function getFullName() {
        return($this->getFirstName() . " " . $this->getLastName());
    }

    function getEmail() {
        return(stripslashes($this->email));
    }

    function getAddress1() {
        return(stripslashes($this->address1));
    }

    function getAddress2() {
        return(stripslashes($this->address2));
    }

    function getPostalCode() {
        return(stripslashes($this->postal_code));
    }

    function getCity() {
        return(stripslashes($this->city));
    }

    function getVendorAreaCodesArray($vid=NULL) {
        if(is_null($vid)) {
            return(array());
        }
        $sql  = "SELECT * FROM {$this->dbTable} WHERE ref_type='ven' AND ref_id={$vid} AND ";
        $sql .= "( code='regional' OR code='company')";

        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("fetchContactsArray::Query", $results);
        }

        if(count($results) == 0) {
            return(array());
        }
        $stack = array();

        foreach($results as $o) {
            if($o['code'] == 'company') {
                $stack[] = $o['phone_area_code'];
            } else {
                $stack[] = $o['other_1'];
            }
        }

        return($stack);

    }
}
?>
