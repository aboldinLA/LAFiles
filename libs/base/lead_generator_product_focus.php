<?php

    class lead_generator_product_focus_model extends template_class {
        var $id;
        var $image;
		var $description;
		var $date;

        function lead_generator_product_focus_model() {
            $table = 'lead_generator_product_focus';

            $columns = array(
                'id',
                'image',
		'description',
		'date'
 
            );

            $this->instantiate($table, $columns, NULL);
            $this->history = new history();
            $this->debug = TRUE;
        }

        function latestRevisionID($lg_id=NULL) {
            if(is_null($lg_id)) return(FALSE);
            if(!is_numeric($lg_id)) return(FALSE);

            $sql  = "SELECT revision FROM " . $this->dbTable;
            $sql .= " WHERE ref_id=$lg_id ORDER BY revision DESC LIMIT 1";
            if(DB::isError($result =& $this->db->getOne($sql))) {
                $this->dbError("LG_REV_MODEL::latestRevisionID", $result);
                return(FALSE);
            }

            if($result < 1) {
                return(0);
            } else {
                return($result);
            }
        }

        function getRevisionArray($id) {
            if(is_null($id) || !is_numeric($id)) return(FALSE);

            $sql  = "SELECT * FROM {$this->dbTable}";
            $sql .= " WHERE ref_id={$id}";
            $sql .= " ORDER BY revision DESC";
            if(DB::isError($result =& $this->db->getAll($sql))) {
                $this->dbError("LG_REV_MODEL::getRevisionArray", $result);
                return(FALSE);
            }

            return($result);
        }

        function getForVendor($id) {
            if(is_null($id) || !is_numeric($id)) return(FALSE);

            $sql  = "SELECT * FROM {$this->dbTable}";
            $sql .= " WHERE vendor_id={$id}";
            $sql .= " ORDER BY id DESC";
            if(DB::isError($result =& $this->db->getAll($sql))) {
                $this->dbError("LG_MEDIA_MODEL::getForVendor", $result);
                return(FALSE);
            }

            return($result);
        }
    }
?>
