<?php
    /* this is the driver class for vendor signup
     * it should make no db connections until all required information has been gathered
     * from the user, at which point, it commits all records
     *
     * this is designed to be serialized and used to retain status of the signup process
     * while it's running.
     */

// Added to get past adding xlist number
$name = "SP";


require_once("xlist_class.php");
require_once("vendor_listing.php");
require_once("contacts_class.php");
require_once("template_class.php");
require_once("vendor_type_class.php");

class vendor_signup extends template_class {
    // current form id
    var $form_id;
    var $action;
    var $hotlink;
    var $steps;

    // form results
    var $company;
    var $contact;
    var $interests;
    var $billing;
    var $id;

    var $mfg;
    var $btype;
    
    function vendor_signup ($hotlink = FALSE, $mfg = FALSE) {
        if($mfg) {
            $this->mfg = TRUE;
            $this->btype = 'm';
        } else {
            $this->mfg = FALSE;
        }
        $this->hotlink = FALSE;
        $this->steps = array(
            1   => array(
                'id'        => 1,
                'name'      => 'company',
                'display'   => 'Step 1 of 3 - Company Info',
                'valid'     => FALSE),
            2   => array(
                'id'        => 2,
                'name'      => 'interests',
                'display'   => 'Step 2 of 3 - Listing Info',
                'valid'     => FALSE)
        );
        $this->action = 'next';
    }

    function process(&$v) {
        global $oVDaemonStatus;
        if(isset($v['btype'])) {
            $this->btype=$v['btype'];
        }
        error_log("Entering VS::Process");
        if(isset($v['cancel'])) {
            $this->smartRedirect('/vendor/signup/cancel.php');
        }
        if(!is_numeric($v['form_id'])) { $form_id  = 1;  } else {   $form_id  = $v['form_id']; }
        if(!array_key_exists($form_id,$this->steps)) {
            return(FALSE);   // no, invalid form_id
        } else {
            $formname = $this->steps[$form_id]['name'];
        }
//echo '<pre>'; print_r($this->steps); echo '</pre>';
//echo $this->action.'__forname:'.$formname; exit;
        if($this->action == 'next') {
            // if we haven't hit the hub design
            error_log("VS::Process received valid form data");
            if($oVDaemonStatus->bValid) {
                // the form that just came in is valid
                $this->steps[$form_id]['valid'] = TRUE;
                // store the values from that form in the session to commit later
                $this->{$formname} = $v;
            }
            $view = $this->findView();
            error_log("VS::Process - First Mode [${view}]");
        } else {
            $view = isset($v['view']) ? $v['view'] : 'hub';
            error_log("VS::Process - Hub Mode [${view}]");
            // should only hit this once we're valid
            if(is_numeric($v['form_id'])) {
                error_log("VS::Process - Slurping Data for [{$formname}:{$form_id}]");
                // we were sent a form
                $this->{$formname} = $v;
            }
        }
        
        switch($view) {
            case 'commit':
                $this->commitRecord();
                $_SESSION['vendor_id'] = $this->id;
                $this->smartRedirect('');
                break;
            case 'hub':
                $this->show('summary-js', "Summary");
                break;
            case 'interests':
                $this->form_id = ($this->hotlink) ? 3 : 2;
                $this->show('interests-js', "Search Categories");
                break;
            case 'company':
                $this->form_id = 1;
                $this->show('company-js', "Company Information");
                break;
            default:
                if($this->action == 'next')
                    $this->show('company', "Company Information");
                else
                    $this->show('summary', "Summary");
                break;
        }
        error_log("VS::Process - Exiting");
        return(TRUE);
    }

	// Page format in views section
    function show($view, $pt=NULL) {
        $pageTitle = "New Vendor Signup";
        if(!is_null($pt)) {
            $pageTitle .= " :: $pt";
        }
        $o = $this->{$view};
        error_log("VS::Show - Entering View with [${view}]");
        // put header
		// Took out stages view below
        // $this->showStages($view);
        include('views/vendor_signup/' . $view . '.php');
        error_log("VS::Show - Exiting");
    }

    function findView() {
        // default to first step
        $id = 1;
        foreach($this->steps as $key => $obj) {
            // find the first invalid step
            if(!$obj['valid']) {
                $this->form_id = $key;
                return($obj['name']);
            }
        }
        // else, they're all valid.. return hub page
        $this->action = 'hub';
        return('hub');
    }

    function showStages($view) {
        ?>
        <table width='763' cellpadding='0' cellspacing='0' border='0' style="position:absolute; left:335px; top:338px">
            <tr><td>
            <table width='763' id='stageList' cellpadding='0' cellspacing='0' border='0'>
                <tbody>
                    <tr>
            <?
                foreach($this->steps as $id => $obj) {
                    if($view == $obj['name']) {
                        $class = 'selected';
                    } else if($this->action == 'next' && $this->form_id == $id) {
                        $class = 'selected';
                    } else if($obj['valid']) {
                        $class = 'completed';
                    } else {
                        $class = 'inactive';
                    }
                    $rows[] = "<td align='center' class='$class'>" . $obj['display'] . "</td>";
                }
                if($view == 'summary') {
                    $class = 'selected';
                } else {
                    $class = 'inactive';
                }
                $rows[] = "<td align='center' class='$class'>Step 3 of 3 - Confirmation</td>";
                print(implode("<td class='stageSpacer'></td>", $rows));
            ?>
                    </tr>
                </tbody>
            </table>
            </td></tr>
        </table>
        <?
    }

    function showVendorSummary($edit=TRUE) {
        $o = &$this->company;
        ?>
        <h2>Listing Information</h2>
        <dl>
        
            <dt>Your Contact Info:</dt>
            <dd>
                <?= $o['name'] ?><br />
                <?= $o['email2'] ?>
            </dd>
            
            <dt>Company Name</dt>
            <dd>
                <?= $o['company_name'] ?><br />
            </dd>            
            
            
            <dt>Address:</dt>
            <dd>
                <?= $o['address1'] ?><br />
                <?= $o['city'] ?> <?= $o['state'] ?>, <?= $o['postal'] ?>
            </dd>
            <dt>Phone:</dt>
            <dd>
                <?= $o['phone'] ?>
            </dd>
            <dt>Fax:</dt>
            <dd>
                <?= $o['fax_phone'] ?>
            </dd>
            <dt>Website:</dt>
            <dd>
                http://<?= $o['website'] ?>
            </dd>
            <dt>Corporate Email:</dt>
            <dd>
                <?= $o['email'] ?>
            </dd>
            <dt>Profile:</dt>
            <dd>
                <?= $o['profile'] ?>
            </dd>
                 
        </dl>
        <?
    }

    function showListingSummary() {
        $o = &$this->interests;
        $xl = new xlist();
        $list = $xl->fetchXlistArray($o['xlist']);
        ?>
        <h2>Listing Categories</h2>
        <ul>
        <?  foreach($list as $obj) {
            print("<li>{$obj['name']}</li>");
        } ?>
        </ul>
        <?
    }

    function showContactSummary() {
    }

    function commitRecord() {
        // commit vendor and then redirect
        error_log("VS::commitRecord() entry");
        $v = new vendor();
        // adapt (if needed) company
        if(isset($this->id) && is_numeric($this->id)) {
            $v->id = $this->id;
        }
        $v->active =  0;
        $v->status = 2.0;
        $v->vendor_type_id =  $this->company['vendor_type'];
        $v->company_name = $this->company['company_name'];
        $v->website = $this->company['website'];
        $v->profile  =  $this->company['profile'];
        $v->input_date = time();
        $v->email  =  $this->company['email'];
        $v->address  =  $this->company['address1'];
        $v->zip  =  $this->company['postal_code'];
        $v->area_code  =  substr($this->company['phone'], 0, 3);
        $v->state  =  $this->company['state'];
        $v->phone  =  $this->company['phone'];
        $v->fax =  $this->company['fax_phone'];
        $v->web_mod = '1';
        $v->name = $this->company['name'];
        $v->email2 = $this->company['email2'];

        $v->xlist = implode(',',$this->interests['xlist']);
        $v->sentpass = 0;

        $v->commit();

        error_log("VS::commitRecord() vendor commit, id: " . $v->id);
           /* 'country' => $this->company['country'],
            'fax_area_code' => $this->company['fax_ac'],  delete from form*/
//        $v->generatePassword();
        error_log("VS::commitRecord() exit");
    }
}
?>
