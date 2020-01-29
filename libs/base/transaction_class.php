<?php



require_once("template_class.php");



class transaction_class extends template_class {

    // meta

    var $parentName;

    var $errList;

    var $egress;



    // columns

    var $id;

    var $ccNumber;

    var $ccType;

    var $ccExpMonth;

    var $ccExpYear;

    var $transAmount;

    var $ccName; 

    var $email;

    var $area_code;

    var $phone;

    var $company;

    var $address;

    var $address2;

    var $city;

    var $state;

    var $zip;

    var $country;

    var $ip;

    var $monthly;

    var $refType;

    var $refID;

    var $orderID;

    var $status;

    var $enterDate;

    var $editDate;



    function transaction_class() {

        // table name

        $table   = "cc_list";

        // list of db columns

        $columns = array(

            'id',

            'ccNumber',

            'ccType',

            'ccExpMonth',

            'ccExpYear',

            'transAmount',

            'ccName',

            'email',

            'area_code',

            'phone',

            'company',

            'address',

            'address2',

            'city',

            'state',

            'zip',

            'country',

            'ip',

            'monthly',

            'refType',

            'refID',

            'orderID',

            'status',

            'enterDate',

            'editDate'

        );



        $this->ccTypes = array (

            'visa' => 'Visa',

            'mc'   => 'Mastercard',

            'amex' => 'American Express' );



        $this->refTypes = array (

            'sub'   => 'Subscription',

            'sub2'  => 'Subscription2',

            'ven'   => 'Vendor',

            'bull'  => 'Bulletin',

            'class' => 'Classified'

        );



        // instantiate class instance

        //$this->parentName = get_parent_class($this);

        //$this->parentName = get_parent_class($this);

        $this->instantiate($table,$columns,$record);

    }



    function action($action = 'default', $page = NULL, $vars = NULL) {

        // this is the action hub



        if(!is_null($vars))

            $this->input($vars);



        switch($action) {

            case 'commit':

                $this->submit();

                $this->page($page);

                break;

            case 'enter':

                if($this->submit()) {

                    $this->page('congratulations');

                } else {

                    $this->page($page);

                }

                break;

            case 'edit':

                $this->page($page);

                break;

            case 'view':

                $this->top('Viewing');

                $this->view();

                $this->bot();

                break;

            default:

                // handle free classifieds

                /*if($this->refType == 'class') {

                    $this->transAmount = 0;

                    $this->page('free');

                } else {

                    $this->page($page);

                } */

                $this->page($page);

                break;

        }    

    }



    function getOrderID() {

        if(is_null($this->orderID)) {

            if(is_null($this->refType) || is_null($this->refID)) {

                $this->addErrors(array('orderID' => "Missing refType or refID for order generation"));

                return(FALSE);

            }

            $this->orderID = $this->refType . $this->refID . time();

        } 

        return(TRUE);

    }



    function submit() {

        $this->errList = NULL;

        if($this->validateForm() && $this->getOrderID()) {

            $this->commit();

            return(TRUE);

        }

        return(FALSE);

    }



    function page($page) {

        extract($this->getValuesArray());



        switch($page) {

            case 'free':

                $this->top('Congratulations');

                $this->showView('cc_free_header.php');

                $this->showView('cc_free.php');

                $this->bot();

                $this->clear();

                break;

            case 'congratulations':

                if(is_string($this->egress)) {

                    $this->smartRedirect($this->egress);

                    $this->clear();

                    exit();

                } else {

                    $this->top('Congratulations!');

                    $this->showView('congrats.php');

                    //require_once('views/' . $this->className . '/congrats.php');

                    $this->bot();

                    $this->clear();

                }

                $this->top('Congratulations!');

                $this->showView('congrats.php');

                //require_once('views/' . $this->className . '/congrats.php');

                $this->bot();

                $this->clear();

                break;

            default:

                $this->top('Processing Information');

                print("<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>");

                print("<input type='hidden' name='pageId' value='$pageId' />");

                print("<input type='hidden' name='refType' value='$refType' />");

                print("<input type='hidden' name='transAmount' value='$transAmount' />");

                print("<input type='hidden' name='pt' value='$refType' />");

                print("<input type='hidden' name='refID' value='$refID' />");

                print("<input type='hidden' name='id' value='$refID' />");

                if(!$this->errors())

                    $this->showView('cc_header.php');

                $this->showView('cc_page2.php');

                $this->showView('cc_page1.php');

                print("</form>");

                $this->bot();

                break;

        }

    }





    function getCardName($type=NULL) {

        if(array_key_exists($type, $this->ccTypes))

            return($this->ccTypes[$type]);



        return(NULL);

    }



    function getCcLast($ccn=NULL) {

        if(!is_null($ccn))

            return(substr($ccn,-4));

    }



    function getRefName($ref=NULL) {

        if(is_null($ref)) {

            $ref = $this->refType;

        }



        if(!is_null($ref)) {

            switch($ref) {

                case 'bull':

                    return("Electronic Bulletin");

                    break;

                case 'ven':

                    return("Vendor Fee-Based Listing");

                    break;

                case 'class':

                    return("Classified Ad");

                    break;

                case 'sub':

                default: 

                    return("Subscription Fee-Based Listing");

                    break;

            }

        } 

    }



    function cardType($type) {



        foreach($this->ccTypes as $val => $name) {

            if($type == $val) {

                $sel = 'checked';

            } else {

                $sel = '';

            }

            print("<input id='$val' type='radio' name='ccType' value='$val' $sel />");

            print("<label for='$val'>$name</label><br />");

        }



    }



    function month($month=1, $var) {

        $months = array(

            '1'  => 'Jan',

            '2'  => 'Feb',

            '3'  => 'Mar',

            '4'  => 'Apr',

            '5'  => 'May',

            '6'  => 'Jun',

            '7'  => 'Jul',

            '8'  => 'Aug',

            '9'  => 'Sep',

            '10' => 'Oct',

            '11' => 'Nov',

            '12' => 'Dec');



        print("<select name='$var'>");

        foreach($months as $num => $name) {

            if($month == $num) {

                $sel = 'selected';

            } else {

                $sel = '';

            }

            print("<option value='$num' $sel>");

            print($name);

            print("</option>");

        }

        print("</select>"); 

    }



    function year($year, $name, $count=10) {

        $today = getdate();

        $stYear = $today['year'];

        print("<select name='$name'>");

        for($i = $stYear ; $i < $stYear + $count ; $i++) {

            if($i == $year) {

                $sel = 'selected';

            } else {

                $sel = '';

            }

            print("<option value='$i' $sel >$i</option>");

        }

        print("</select>");

    }



    function validateForm() {

        $errors = NULL;



        if(strlen($this->ccNumber) < 13) {

            $errors[] = "Error: Invalid Credit Card Number (" . $this->ccNumber . ")";

        }



        if(! @array_key_exists($this->ccType, $this->ccTypes)) {

            $errors[] = "Error: Invalid Card Type (" . $this->ccType . ")";

        }



        if(strlen($this->ccExpMonth) < 1) {

            $errors[] = "Error: Invalid Card Expiration Month (" . $this->ccExpMonth . ")";

        }



        if(strlen($this->ccExpYear) < 1) {

            $errors[] = "Error: Invalid Card Expiration Year (" . $this->ccExpYear . ")";

        }



        if(strlen($this->ccName) < 1) {

            $errors[] = "Error: Invalid Billing Name (" . $this->ccName . ")";

        }



        if(strlen($this->email) < 1) {

            $errors[] = "Error: Invalid Email Address (" . $this->email . ")";

        }



        if(strlen($this->area_code) < 1) {

            $errors[] = "Error: Invalid Area Code (" . $this->area_code . ")";

        }



        if(strlen($this->phone) < 1) {

            $errors[] = "Error: Invalid Phone Number (" . $this->phone . ")";

        }



        if(strlen($this->address) < 1) {

            $errors[] = "Error: Invalid Billing Address (" . $this->address . ")";

        }



        if(strlen($this->city) < 1) {

            $errors[] = "Error: Invalid Billing City (" . $this->city . ")";

        }



        if(strlen($this->state) < 1) {

            $errors[] = "Error: Invalid Billing State (" . $this->state . ")";

        }



        if(strlen($this->zip) < 1) {

            $errors[] = "Error: Invalid Billing Zip Code (" . $this->zip . ")";

        }



        if(strlen($this->company) < 1) {

            $errors[] = "Error: Invalid Company (" . $this->company . ")";

        }



        if(is_null($this->transAmount)) {

            $errors[] = "Error: Missing Transaction Amount (" . $this->transAmount . ")";

        }



        if(is_null($this->refType)) {

            $errors[] = "Error: Missing Transaction Type (" . $this->refType . ")";

        }



        if(is_null($this->refID)) {

            $errors[] = "Error: Missing Reference ID (" . $this->refID . ")";

        }



        if(is_null($this->enterDate)) {

            $this->enterDate = date("Y-m-d H:i:s");

        }



        if(is_array($errors)) {

            $this->addErrors($errors);

            return(FALSE);

        } else {

            return(TRUE);

        }

        

    }



    function getByRefID($id, $type) {

        $query = "select id from " . $this->dbTable . " where refID=$id AND refType=$type";

        if(DB::isError($id = $this->db->getOne($query))) {

            $this->dbError("getRefID::Result", $id);

        } 



        if($count ==  0) {

            return(FALSE);

        } else {

            return($count);

        }

    }

}

?>

