<?php

    class lead_generator_revision_model extends template_class {
        var $history;
        var $parentName;
        var $errList;

        var $id;
        var $ref_id;
        var $revision;
        var $status;
        var $company_name;
        var $phone;
        var $website;
        var $content;
        var $photos;
        var $edited;
        var $input;

        function lead_generator_revision_model() {
            $table = 'lead_generator_revision';

            $columns = array(
                'id',
                'ref_id',
                'revision',
                'status',
                'company_name',
                'website',
                'phone',
                'content',
                'photos',
                'edited',
                'input'
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
                $this->dbError("LG_REVISION_MODEL::getRevisionArray", $result);
                return(FALSE);
            }

            return($result);
        }
    }
?>
