<?php

require_once("template_class.php");

class lead_generator_categories extends template_class {
    // meta
    var $parentName;
    var $errList;

    // columns
    var $id;
    var $idParent;
    var $sub_number;
    var $name;

    var $parents = array(
            27  => 'Business Services',
            28  => 'Computer (SW) & Hardware',
            1208  => 'Consultants',
            1003  => 'Designers',
            1008  => 'Earth Sciences',
            1209  => 'Equipment: Installation',
            1210  => 'Equipment: Maintenance',
            1211  => 'Equipment: Parts and Repair',
            40  => 'Equipment: Testing Tools',
            30  => 'Erosion Control',
            32  => 'Lighting / Electrical',
            1214  => 'Outdoor Living',
            33  => 'Park & Recreation',
            38 => 'Pavers, Masonry, Blocks & Rocks',
            1212  => 'Pest / Wildlife Control',
            34  => 'Plant Material, Turf & Trees',
            1216 => 'Plant Related Chemicals / Fertilizers',
            1002 => 'Planting Accessories',
            1011 => 'Seasonal Specialties',
            29 => 'Site Amenities',
            1215 => 'Site Furnishings',
            41 => 'Water Features',
            1213 => 'Water Management/Irrigation',
            35 => 'Wholesale Facilities'
    );
    

    function lead_generator_categories() {
        // table name
        $table   = "xlist";
        // list of db columns
        $columns = array(
            'id',
            'idParent',
            'sub_number',
            'name'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
    }

    function fetchCategoryArray($list) {
        $sql = "SELECT * FROM {$this->dbTable} WHERE (idParent > '0') AND (idParent <> '1001') ORDER BY name ASC";
        if(DB::isError($result = $this->db->getAll($sql))) {
            $this->dbError('LGC::listCategories',$result);
        }

        $resultSet = array();

        foreach($result as $row) {
            $parentName = $this->parents[$row['idParent']];
            $resultSet["$parentName"][] = $row;
        }

        return($resultSet);
    }

    function categoryName($id) {
        if(!is_numeric($id)) return(FALSE);

        $this->fetch($id);
        return($this->parents[$this->idParent] . "&mdash;" . $this->name);
    }

}
?>
