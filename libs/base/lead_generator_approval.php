<?php
    // status list:
    /*
     *  waiting
     *  cancelled
     *  rejected
     *  approved
     */

    class lead_generator_approval extends template_class {
        var $history;
        var $parentName;
        var $errList;

        var $id;
        var $lg_id;
        var $rev_id;
        var $status;
        var $app_hash;
        var $rev_hash;
        var $created;
        var $edited; // outside of column scope
        var $sent_to;
        var $accept_date;
        var $accept_type;
        var $signature;
        var $ip;

        function lead_generator_approval() {
            $table = 'lead_generator_approvals';

            $columns = array(
                'id',
                'lg_id',
                'rev_id',
                'status',
                'app_hash',
                'rev_hash',
                'created',
                'sent_to',
                'accept_date',
                'accept_type',
                'signature',
                'ip'
            );

            $this->instantiate($table, $columns, NULL);
            $this->debug = FALSE;
        }

        function getApprovalsByLG($lg=NULL) {
            if(is_null($lg)) return(FALSE);
            if(!is_numeric($lg)) return(FALSE);

            $sql = "SELECT * FROM {$this->dbTable} WHERE lg_id={$lg} ORDER BY created DESC";
            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("LGA::getApprovalsByLG",$result);
            } 

            return($result);
        }

        function isPending($lg = NULL) {
            if(is_null($lg)) return(FALSE);
            if(!is_numeric($lg)) return(FALSE);

            $sql = "SELECT * FROM {$this->dbTable} WHERE lg_id={$lg} AND status='waiting' ORDER BY created DESC";

            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("LGA::getApprovalsByLG",$result);
            } 

            if(count($result) > 0) {
                // yep, something is waiting
                return($result['app_hash']);
            } else {
                // in the clear
                return(FALSE);
            }
        }

        function clearPending($id, $status='waiting') {
            if(is_null($id) || !is_numeric($id)) {
                return(FALSE);
            }

            $sql = "UPDATE {$this->dbTable} SET status='cancelled' WHERE  lg_id={$lg} AND status='{$status}'";
            
            if(DB::isError($result = $this->db->query($sql))) {
                $this->dbError("LGA::clearPending",$result);
            } 
            return(TRUE);
        }

        // static method
        function deleteRequests($id) {
            $lga = new lead_generator_approval();
            if(is_null($id) || !is_numeric($id)) {
                return(FALSE);
            }

            $sql = "DELETE FROM {$lga->dbTable} WHERE lg_id=$id";

            if(DB::isError($result = $lga->db->query($sql))) {
                $lga->dbError("LGA::deleteRequests",$result);
            } 
            return(TRUE);

        }

        // static
        function &fetchByHash($hash) {
            // check the hash
            $lga = new lead_generator_approval();
	    
	
        
            $sql = "SELECT id FROM {$lga->dbTable} WHERE app_hash='$hash'";
            if(DB::isError($id = $lga->db->getOne($sql))) {
                $lga->dbError("LGA::fetchByHash",$id);
            }

            if(is_null($id)) return(FALSE);

            $lga->fetch($id);

            return($lga);
        }

        function findWaitingHash($lg) {
		
            if(is_null($lg)) return(FALSE);
            if(!is_numeric($lg)) return(FALSE);
	    
            $sql = "SELECT app_hash FROM {$this->dbTable} WHERE lg_id={$lg} AND (status='waiting' OR status='approved')";

            if(DB::isError($hash = $this->db->getOne($sql))) {
                $this->dbError("LGA::findWaitingHash",$hash);
            }

            return($hash);
            
        }
    }
?>
