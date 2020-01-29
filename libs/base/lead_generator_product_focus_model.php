<?php

    class lead_generator_product_focus_model extends template_class {
        var $history;
        var $parentName;
        var $errList;
        var $id;
        var $vendor_id;
        var $title;
        var $source;
        var $sourceType;
        var $basename;
        var $keywords;
        var $description;
        var $notes;
        var $format; // jpeg, gif, png, tiff, ...
        var $height; // in pixels
        var $width;  // in pixels
        var $dpi;    // not used
        var $input; 
        var $edited;

        function lead_generator_media_model() {
            $table = 'lead_generator_media';

            $columns = array(
                'id',
                'vendor_id',
                'title',
                'source',
                'sourceType',
                'basename',
                'format',
                'height',
                'width',
                'dpi',
                'keywords',
                'description',
                'notes',
                'input',
                'edited'
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
