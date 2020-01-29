<?php
require_once("template_class.php");
require_once("xlist_class.php");

class vendor_class extends template_class {
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
    var $vendor_type_id;
    var $xlist;
    var $xlist_idparent;
    var $comp_name;
    var $website;
    var $first_name;
    var $last_name;
    var $address;
    var $address2;
    var $city;
    var $state;
    var $zip;
    var $country;
    var $phone;
    var $area_code;
    var $area_fax;
    var $fax;
    var $email;
    var $profile;
    var $request;
    var $sign_up;
    var $edit;
    var $edit_who;
    var $logo;
    var $active;
    var $hot;
    var $list;
    var $trans_id;
    var $cc_exp;
    var $fee;
    var $notify_credit;
    var $alt;
    var $sentpass;
    var $chld;
    var $cc_last;
    var $date_edited;

    function vendor_class() {
        // table name
        $table   = "vendor";
        // list of db columns
        $columns = array(
            'id',
            'vendor_type_id',
            'xlist',
            'xlist_idparent',
            'comp_name',
            'website',
            'first_name',
            'last_name',
            'address',
            'address2',
            'city',
            'state',
            'zip',
            'country',
            'phone',
            'area_code',
            'area_fax',
            'fax',
            'email',
            'profile',
            'request',
            'sign_up',
            'edit',
            'edit_who',
            'logo',
            'active',
            'hot',
            'list',
            'trans_id',
            'cc_exp',
            'fee',
            'notify_credit',
            'alt',
            'sentpass',
            'chld',
            'cc_last',
            'date_edited'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
    }

    function changeStatus($record=NULL, $status=NULL) {
        $hot = 0;
        $active = 0;

        if(is_null($record) || is_null($status)) {
            // invalid record or status
            $this->addErrors("Invalid status [$status] or record [$record]");
            return(FALSE);
        }

        if($this->fetch($record)) {
            switch($status) {
                case 4:
                    $this->hot = 3; $this->active = 1 ;
                    break;
                case 3:
                    $this->hot = 2; $this->active = 1 ;
                    break;
                case 2:
                    $this->hot = 1; $this->active = 1;
                    break;
                case 1:
                    $this->hot = 0; $this->active = 1;
                    break;
                case 0:
                default:
                    $this->hot = 0; $this->active = 0;
                    break;
            }
            $this->commit();
            $this->clear();
            return(TRUE);
        }
    }

    function displayCompanyLogo() {
        if(!is_null($this->logo) && strlen($this->logo) > 3) {
            print("<img src='/products/images/" . $this->logo . "' border='0' />");
        } else {
            print("&nbsp;");
        }
    }

    function displayPhoneNumber() {
        print("(" . $this->area_code . ") " . $this->phone);
    }

    function displayWebsite() {
        if(!is_null($this->website)) {
            print($this->website);
        } else {
            print('None');
        }
    }

    function displayAddress() {
        print($this->address . "<br />" . $this->city . ", " . $this->state . " " . $this->zip);
    }

    function getXlistArray() {
        $X = new xlist();
        return($X->fetchXlistArray($this->xlist));
        //return($array);
    }

    function salesContact($message) {
        $name = strtolower($this->comp_name);
        if($name[0] <= 'h') {
            // Joel
            $repEmail = 'adsalesa-h@landscapeonline.com';
        } else if($name[0] <= 'p') {
            // tanisha
            $repEmail = 'adsalesi-p@landscapeonline.com';
        } else {
            // Peggy
            $repEmail = 'adsalesanc@landscapeonline.com';
        } else {
            // matt
            $repEmail = 'adsalesq-z@landscapeonline.com';
            // q - z
        }

        // for debugging
        //$repEmail = 'porwig@landscapeonline.com';

        $mail = array();
        $mail['To'] = $repEmail;
        $mail['From'] = 'Landscape Online Sales Requests <webmaster@landscapeonline.com>';
        $mail['Subject'] = "Contact request from {$this->comp_name}";
        $mail['bodyTXT'] = "Please contact someone from {$this->comp_name} regarding:\r\n" . $message;

        if(!(($result = $this->sendMail($mail) === TRUE)) ) {
            $this->addErrors("Error sending email to " . $mail['To']);
            return(FALSE);
        } else {
            return(TRUE);
        }
    }
}
?>
