<?php

require_once("template_class.php");

class lead_generator_categories extends template_class {
    // meta
    var $parentName;
    var $errList;

    // columns
    var $id;
    var $parentId;
    var $sgl;
    var $name;

    var $parents = array(
            1  => 'Business Services',
            2  => 'Computer Equipment',
            3  => 'Consulting',
            4  => 'Erosion Control',
            5  => 'Irrigation',
            6  => 'Lighting / Electrical',
            7  => 'Park & Recreation',
            8  => 'Pest / Wildlife Control',
            9  => 'Plant Material',
            10 => 'Plant Related Chemicals / Fertilizers',
            11 => 'Planting Accessories',
            12 => 'PMBR: Pavers, Masonry, Blocks & Rocks',
            13 => 'Site Amenities',
            14 => 'Tools & Equipment',
            15 => 'Tools For Testing',
            16 => 'Water Features'
    );
    

    function lead_generator_categories() {
        // table name
        $table   = "lead_generator_categories";
        // list of db columns
        $columns = array(
            'id',
            'parentId',
            'sgl',
            'name'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
    }

    function fetchCategoryArray($list) {
        $sql = "SELECT * FROM {$this->dbTable} ORDER BY parentId ASC, name ASC";
        if(DB::isError($result = $this->db->getAll($sql))) {
            $this->dbError('LGC::listCategories',$result);
        }

        $resultSet = array();

        foreach($result as $row) {
            $parentName = $this->parents[$row['parentId']];
            $resultSet["$parentName"][] = $row;
        }

        return($resultSet);
    }

    function categoryName($id) {
        if(!is_numeric($id)) return(FALSE);

        $this->fetch($id);
        return($this->parents[$this->parentId] . "&mdash;" . $this->name);
    }

}
?>
