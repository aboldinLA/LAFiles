<?php
    require_once('lead_generator_info_model.php');

    class lead_generator_info {
        var $_storage;
        var $_ref_type;
        var $_code;

        var $_company_name;
        var $_phone_number;
        var $_website;

        function lead_generator_info() { }
        function create() {}
        function load() {}
        function save() {}

        function companyName() { return($this->_company_name); }
        function phoneNumber() { return($this->_phone_number); }
        function website() { return($this->_website); }

        function setCompanyName($name) {
            $this->_company_name = $name;
        }

        function setPhoneNumber($number) {
            $this->_phone_number = $number;
        }

        function setWebsite($site) {
            $this->_website = $site;
        }
    }
?>
