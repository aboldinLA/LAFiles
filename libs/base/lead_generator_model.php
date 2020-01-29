<?php

    class lead_generator_model extends template_class {
        var $history;
        var $parentName;
        var $errList;

        var $id;
        var $vendor_id;
        var $status;
        var $slug;
        var $size;
        var $category;
        var $magazines;
        var $year;
        var $edited;
        var $input;

        function lead_generator_model() {
            $table = 'lead_generator';

            $columns = array(
                'id',
                'vendor_id',
                'status',
                'slug',
                'size',
                'category',
                'magazines',
                'year',
                'edited',
                'input'
            );

            $this->instantiate($table, $columns, NULL);
            $this->history = new history();
        }

        function getLeadGenerators($vendor = NULL,$year = NULL) {
            if(is_null($vendor)) return(FALSE);
            if(!is_numeric($vendor)) return(FALSE);

           $sql = "SELECT * FROM " . $this->dbTable . " WHERE ";
            if(is_numeric($year)) {
                $sql .= " year=$year AND vendor_id=$vendor";
            } else {
                $sql .= " vendor_id=$vendor";
            }
            $sql .= " ORDER BY year desc, status desc";

            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("LG_MODEL::getLeadGenerators", $result);
                return(FALSE);
            } else {
                return($result);
            }
        }
    }

?>
