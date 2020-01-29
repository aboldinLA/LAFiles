<?php
    class lead_generator_info_model extends template_class {
        var $id;
        var $ref_type;
        var $code;
        var $company_name;
        var $phone_number;
        var $website;

        function lead_generator_info_model() {
            // call parent
            $this->instantiate();
        }
    }
?>
