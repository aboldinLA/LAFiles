<?php
require_once("template_class.php");
require_once("research_class.php");

class research_letters_class extends template_class {
    // meta
    var $parentName;
    var $errList;
    var $stage;
    var $trans;
    // list of stages and their usability

    // paginators
    var $from;
    //var $sortBy='id';
    var $sortStr;
    var $sortDir='ASC';
    var $pageNum=0;
    var $pageLimit=20;


    // columns
    var $id;
    var $art_id;
    var $first_name;
    var $last_name;
    var $email;
    var $city;
    var $state;
    var $zip;
    var $company;
    var $title;
    var $area_code;
    var $phone;
    var $response;
    var $title_text;
    var $comment;
    var $input;
    var $active;
    var $gen_active;
    var $active_day;
    var $proofed;

    function research_letters_class() {
        // table name
        $table   = "research";
        // list of db columns
        $columns = array(
            'id',
            'art_id',
            'first_name',
            'last_name',
            'email',
            'city',
            'state',
            'zip',
            'company',
            'title',
            'area_code',
            'phone',
            'response',
            'title_text',
            'comment',
            'input',
            'active',
            'gen_active',
            'active_day',
            'proofed'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
  }
}
?>
