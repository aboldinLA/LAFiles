<?php
// TODO:
//  migrate existing classifieds over
//  write & test email functionality
//  go live

require_once("template_class.php");
require_once("transaction_class.php");

// Definitions
// Stages:
define('STAGE_AD_EDIT', 1);
define('STAGE_AD_CONFIRM', 2);
define('STAGE_AD_BILLING', 3);
define('STAGE_AD_EXIT', 4);
define('STAGE_LIST',101);
define('STAGE_RESPOND',102);
define('STAGE_EMAILED',103);

class classified_class extends template_class {
    // meta
    var $parentName;
    var $errList;
    var $stage;
    var $trans;
    // list of stages and their usability
    var $stageList;
    var $stageNames;
    var $sectionList;

    // columns
    var $id;
    var $first_name;
    var $last_name;
    var $email;
    var $comp_name;
    var $area_code;
    var $phone;
    var $ip;
    var $adTitle;
    var $adText;
    var $adCost;
    var $section;
    var $isHTML;
    var $paymentId;
    var $active;
    var $enterDate;
    var $editDate;
    var $expireDate;

    function classified_class() {
        // table name
        $table   = "classified_ads";
        // list of db columns
        $columns = array(
            'id',
            'first_name',
            'last_name',
            'email',
            'comp_name',
            'area_code',
            'phone',
            'ip',
            'adTitle',
            'adText',
            'adCost',
            'section',
            'isHTML',
            'paymentId',
            'active',
            'enterDate',
            'editDate',
            'expireDate'
        );
        $this->instantiate($table,$columns,$record);
        $this->stageList = array(
            1 => TRUE,
            2 => FALSE,
            3 => FALSE,
            4 => FALSE
        );

        $this->stageNames  = array(
            1 => 'Your Ad',
            2 => 'Confirmation',
            3 => 'Billing',
            4 => 'Complete!'
        );

        $this->sectionList = array(
            1 => 'Products for Sale',
            2 => 'Employment',
            3 => 'Instructional Opportunities/Seminars',
            4 => 'Miscellaneous/Other'
        );
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
        $this->determineStage($action);
        switch ($this->stage) {
            case STAGE_EMAILED:
                if($this->sendResponse($vars['id'],$vars)) {
                    $this->top();
                    $this->showView('bullstyles.css');
                    print("<div style='border: 1px solid black;'>");
                    print("<div style='margin-bottom: 5px;' id='bullTitle'>");
                    print("Thank You");
                    print("</div>");
                    $this->showView('sendResult.php');
                    print("<div style='padding: 5px;'>");
                    print("<span id='classButton'><a href='" . $vars['returnto'] . "'>Continue</a></span>");
                    print("</div>");
                    print("</div>");
                    $this->bot();
                }  else {
                    $this->top();
                    $this->showView('bullstyles.css');
                    print("<div style='border: 1px solid black;'>");
                    print("<div id='bullTitle'>");
                    print("Classified Response");
                    print("</div>");
                    print("<form name='classified' method='post' action='" . $_SERVER['PHP_SELF'] . "'>");
                    print("<input type='hidden' name='action' value='email' />");
                    print("<input type='hidden' name='id' value='" . $vars['id'] . "' />");
                    print("<input type='hidden' name='returnto' value='" . $vars['returnto'] . "' />");
                    $this->fetch($vars['id']);
                    $this->showView('viewClassified.php');
                    $this->clear();
                    $this->input($vars);
                    $this->errors();
                    $this->showView('classResponse.php');
                    $this->showView('submit.php');
                    print("</form>");
                    print("</div>");
                    $this->bot();
                }
                break;
            case STAGE_RESPOND:
                if(is_null($vars['returnto'])) {
                    $vars['returnto'] = $_SERVER['HTTP_REFERER'];
                }
                $this->top();
                $this->showView('bullstyles.css');
                print("<div style='border: 1px solid black;'>");
                print("<div id='bullTitle'>");
                print("Classified Response");
                print("</div>");
                print("<form name='classified' method='post' action='" . $_SERVER['PHP_SELF'] . "'>");
                print("<input type='hidden' name='action' value='email' />");
                print("<input type='hidden' name='id' value='" . $vars['id'] . "' />");
                print("<input type='hidden' name='returnto' value='" . $vars['returnto'] . "' />");
                $this->fetch($vars['id']);
                $this->showView('viewClassified.php');
                $this->clear();
                $this->input($vars);
                $this->errors();
                $this->showView('classResponse.php');
                $this->showView('submit.php');
                print("</form>");
                print("</div>");
                $this->bot();
                break;
            case STAGE_LIST:
                // list classifieds
                $this->top();
                $this->showView('bullstyles.css');
                print("<div style='border: 1px solid black;'>");
                print("<div id='bullTitle'>");
                print($this->getSectionName($vars['section']));
                print("</div>\n");
                $this->list_all($vars['section']);
                print("</div>");
                $this->bot();
                break;
            case STAGE_AD_EXIT:
                unset($_SESSION['class_id']);
                unset($_SESSION['class_cost']);
                unset($_SESSION['class_egress']);
                $this->top();
                $this->showView('bullstyles.css');
                $this->showView('viewClassified.php');
                //$this->renderStages();
                //$this->errors();
                $this->showView('congrats.php');
                $this->bot();
                $this->clear();
                $this->clearStages();
                break;
            case STAGE_AD_BILLING:
                // billing
                //$this->adCost = $this->calculateCost();
				//cost is now fixed at $49.95
				$this->adCost = 49.95;
                $this->commit();
                error_log('committing classified, where is my mind? ' . $this->id);
                $_SESSION['class_id'] = $this->id;
                $_SESSION['class_cost'] = $this->adCost; 
                $_SESSION['class_egress'] = $this->baseLink() . "?action=thanks";
                session_write_close();
                $this->smartRedirect("/store/Classified-Response.html", TRUE);
                /*
                if(is_null($this->trans)) {
                    $this->trans = new transaction_class();
                    $this->trans->widgetMode = TRUE;
                    $this->trans->refType = 'class';
                    $this->trans->transAmount = $this->calculateCost();
                    $this->trans->ccName = $this->first_name . " " . $this->last_name;
                    $this->trans->company = $this->comp_name;
                    $this->trans->input($this->getValuesArray());
                }
                //$this->trans->input($this->getValuesArray());
                $this->top();
                $this->showView('bullstyles.css');
                print("<div style='border: 1px solid black;'>");
                $this->renderStages();
                $this->showView('classFree.php');
                $this->trans->showView('cc_free.php');
                //$this->trans->action($action, $vars);
                print("</div>");
                $this->bot();
                */
                break;
            case STAGE_AD_CONFIRM:
                // summary and submission
                $this->top();
                $this->showView('bullstyles.css');
                print("<div style='border: 1px solid black;'>");
                $this->renderStages();
                print("<form name='classified' method='post' action='" . $_SERVER['PHP_SELF'] . "'>");
                print("<input type='hidden' name='action' value='billing' />");
                $this->showView('summaryHeader.php');
                $this->errors();
                $this->showView('viewClassified.php');
                print("</form>");
                print("</div>");
                $this->bot();
                break;
            case STAGE_AD_EDIT:
            default:
                // ad and info edit
                $this->top();
                $this->showView('bullstyles.css');
                print("<div style='border: 1px solid black;'>");
                $this->renderStages();
                print("<form name='classified' method='post' action='" . $_SERVER['PHP_SELF'] . "'>");
                print("<input type='hidden' name='action' value='stage2' />");
                $this->showView('explain.php');
                $this->errors();
                $this->showView('edituser.php');
                $this->showView('editad.php');
                $this->showView('submit.php');
                print("</form>");
                print("</div>");
                $this->bot();
                break;
        }
    }

    function setStage($stage) {
        if($this->stage < $stage) {
            $this->stage = $stage;
        } 
    }

    function determineStage($action, $set = TRUE) {
        // @action attempted phase
        // actual phase will depend on validation of previous steps
        $stage = 0;
        $this->stage = 0;
        switch($action) {
            case 'email':
                $this->setStage(103);
                break;
            case 'respond':
            case '102':
                $this->setStage(102);
                break;
            case 'list':
            case '101':
                $this->setStage(101);
                //standalone for view
                break;
            case 'stage4':
            case 'complete':
            case 'thanks':
                // free, enable confirm button
                $this->stageList[4] = TRUE;
                $this->setStage(4);
            case 'stage3':
            case 'billing':
                if($this->validatePhase1()) {
                    $this->stageList[3] = TRUE;
                    $this->setStage(3);
                }
            case 'stage2':
                if($this->validatePhase1())
                    $this->setStage(2);
            case 'stage1':
            default:
                $this->setStage(1);
                break;
        }
    }

    function clearStages() {
        foreach($this->stageList as $id => $bool) {
            $this->stageList[$id] = FALSE;
        }
        $this->stageList[1] = TRUE;
    }

    function fetchPayment() {
        if(!is_null($this->trans)) {
            if($id = $this->trans->getRefByID($this->id, 'class')) {
                $this->paymentID = $id;
                return(TRUE);
            }
        }
        return(FALSE);
    }


    function renderStages() {
        $spans = array();
        print("<div id='bullTitle'>Classified Ad Entry</div>\n");
        print("<div class='bullNav'>\n");
        foreach($this->stageList as $stageId => $status) {
            $str = "";
            if($this->stage == $stageId) {
                $class = 'bullNavSelected';
            } else if($status) {
                $class = 'bullNavActive';
            } else {
                $class = 'bullNavInactive';
            }
            $str = "<span class='$class'>";
            if($status) {
                $str .= "<a href='" . $_SERVER['PHP_SELF'] . "?action=stage" . $stageId . "'>";
                $str .= $this->stageNames["$stageId"];
                $str .= "</a>";
            } else {
                $str .= $this->stageNames["$stageId"];
            }
            $str .= "</span>\n";
            $spans[] = $str;
        }
        print(implode("<span class='bullNavDivider'><img src='/image/curl.gif' height='32' width='32' border='0' /></span>\n", $spans));
        print("</div>\n");
    }

    function validatePhase1() {
        $errors = NULL;
        if(strlen($this->first_name) < 1) {
            $errors[] = "Error: Invalid First Name (" . $this->first_name . ")";
        }

        if(strlen($this->last_name) < 1) {
            $errors[] = "Error: Invalid Last Name (" . $this->last_name . ")";
        }

        if(strlen($this->area_code) < 1) {
            $errors[] = "Error: Invalid Area Code (" . $this->area_code . ")";
        }

        if(strlen($this->phone) < 1) {
            $errors[] = "Error: Invalid Phone Number (" . $this->phone . ")";
        }

        if(strlen($this->comp_name) < 1) {
            $errors[] = "Error: Invalid Company (" . $this->comp_name . ")";
        }
    
        if(strlen($this->adText) < 1) {
            $errors[] = "Invalid Ad Text (" . $this->adText . ")" .
                        " Title must be at least one word in length.";
        } else {
            $this->adText = strip_tags($this->adText);
        }

        if(strlen($this->adTitle) < 1) {
            $errors[] = "Invalid Ad Title (" . $this->adTitle . ")" .
                        " Title must be at least one word in length.";
        }

        if(!($this->section > 0)) {
            $errors[] = "Invalid Section!  Please choose a section from the list below.";
        }

        if(is_null($this->enterDate)) {
            $this->enterDate = date("Y-m-d H:i:s");
        }

        if(is_null($this->expireDate)) {
            $this->expireDate = date("Y-m-d H:i:s", strtotime("+30 days"));
        }

        $this->editDate = NULL;

        if(is_array($errors)) {
            $this->addErrors($errors);
            return(FALSE);
        } else {
            // make the next stage visible
            $this->stageList[2] = TRUE;
            return(TRUE);
        }
        
    }

    function calculateCost($adText = NULL, $adTitle=NULL) {
        if(is_null($adText)) {
            $adText = $this->adText;
            if(is_null($adTitle)) {
                $adText .= $this->adTitle;
            }
        } 
        $wordCount = str_word_count(strip_tags($adText));
        if($wordCount > 20) {
            return($wordCount - 5);
        } else {
            return(15.00);
        }
    }

    function sectionSelect($section = NULL) {
        print("<select name='section'>");
        if(is_null($section)) {
            print("<option value='0'>Select a section for your ad!</option>");
        }

        foreach($this->sectionList as $val => $name) {
            $c = ($section == $val) ? 'selected' : '';
            print("<option $c value='$val'>$name</option>");
        }
        print("</select>");
    }

    function getSectionName($section = NULL) {
        if(!is_null($section) && array_key_exists($section, $this->sectionList)) {
            return($this->sectionList[$section]);
        } else {
            return("Classified Listings");
        }
    }

    function list_all($section = NULL) {
        $query = "select * from " . $this->dbTable . " where active=1";
        if(!is_null($section) && array_key_exists($section, $this->sectionList)) {
            $query .= " and section=$section";
        }

        $query .= " order by id desc";

        if(DB::isError($results = $this->db->getAll($query))) {
            $this->dbError("list_all::Result", $results);
        }
        
        $this->clear();
        foreach($results as $row => $obj) {
            $this->input($obj);
            $this->id = $obj['id'];
            $this->showView('viewClassified.php');
            $this->clear();
        }

        if(count($results) < 1) {
            $this->showView('viewEmpty.php');
        }
        //$this->showView('placeClassified.php');
    }

    function sendResponse($id, $vars = NULL) {
        $headers = array();
        if(is_null($id)) 
            return(FALSE);

        if(!$this->validateResponse($vars))
            return(FALSE);
        // send response email

        $this->fetch($id);
        if(strlen($this->email) < 1) {
            return(FALSE);
        } 


        $from    = $vars['first_name'] . "<" . $vars['email'] . ">";
        $to      = $this->first_name . " " . $this->last_name . " <" . $this->email . ">";
        $subject = "Landscape Online Classified Response:" . $this->adTitle;
        
        common_class::send_mail($to, $subject, $vars['adText'], $from);
        
        return(TRUE);
    }

    function validateResponse(& $vars) {
        $errors = array();
        if(is_null($vars))
            return(FALSE);
        if(strlen($vars['first_name']) < 1) {
            $errors[] = "Missing Name.";
        }

        if(strlen($vars['email']) < 1) {
            $errors[] = "Missing Email Address.";
        }

        if(strlen($vars['adText']) < 1) {
            $errors[] = "Empty Response.";
        }

        if(count($errors) > 0) {
            $this->addErrors($errors);
            return(FALSE);
        } else {
            return(TRUE);
        }
    }
}
?>
