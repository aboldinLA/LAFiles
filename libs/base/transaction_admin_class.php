<?php



require_once("transaction_class.php");

// require_once("pagespan_class.inc");

require_once("Pager/Sliding.php");



class transaction_admin_class extends transaction_class {

    // meta

    var $parentName;

    var $errList;

    var $pageSpan;



    // link variables

    var $from;

    var $sortBy='id';

    var $sortDir='ASC';

    var $pageNum=0;

    var $pageLimit=10;



    function transaction_admin_class() {

        // define pages and the variables they take

        $parentName = get_parent_class($this);

        $this->{$parentName}();

    }



    function action($action = 'default', $vars = NULL) {

        // this is the action hub



        if(!is_null($vars))

            $this->input($vars);



        if($vars['sortBy']) {

            $this->setSort($vars['sortBy'], $vars['sortDir']);

        }



        $this->setPage($vars['pageNum']);



        switch($action) {

            case 'findbull':

                $this->top('Processing List');

                $this->errors();

                $this->tableList('bull', $vars['record']);

                $this->bot();

                break;

            case 'delete':

                if($this->deleteRow($vars['record'])) {

                    $this->clear();

                    $this->redirect();

                } else {

                    $this->top();

                    print("Error deleting row " . $vars['id'] . "<br />");

                    $this->bot();

                }

                break;

            case 'commit':

            case 'enter':

                $this->id = $vars['id'];

                if($this->submit()) {

                    $this->redirect();

                } else {

                    $this->action('manage',$vars);

                }

                break;

            case 'status':

                $this->changeStatus($vars['record'],$vars['status']);

                $this->redirect();

                break;

            case 'manage':

            case 'edit':

                $this->fetch($vars['record']);

                $this->top('Manage Record');

                $this->errors();

                print("<form name='manage' method='post' action='" . $this->baseLink() . "'>");

                print("<input type='hidden' name='id' value='" . $this->id . "' />");

                $this->showView('cc_edit.php', FALSE);

                $this->showView('cc_page2.php', TRUE);

                $this->showView('cc_page1.php', TRUE);

                print("</form>");

                $this->bot();

                $this->clear();

                break;

            case 'view':

                $this->top('View Record');

                $this->errors();

                $this->viewRecord($vars['record']);

                $this->bot();

                break;

            default:

                $this->top('Processing List');

                $this->errors();

                $this->tableList();

                $this->bot();

                break;

        }    

    }



    function setPage($page=0) {

        // need to reduce by 1 to get real page number

        // zero index vs one index

        if(is_numeric($page) && ($page > 0)) {

            $this->pageNum = $page-1;

        } else {

            $this->pageNum = 0;

        }

    }



    function setSort($col, $dir=NULL) {

        if($this->sortBy == $col) {

            if(is_null($dir)) {

                $this->setSortDir('FLIP');

            } else {

                $this->setSortDir($dir);

            }

        } else {

            $this->setSortDir();

            if(in_array($col, $this->dbData)) {

                $this->sortBy = $col;

                $this->setSortDir($dir);

            } else {

                // bad val

                // error

            }

        } 



    }



    function setSortDir($dir='DESC') {

        switch($dir) {

            case 'ASC':

                $this->sortDir = $dir;

                break;

            case 'DESC':

                $this->sortDir = $dir;

                break;

            case 'FLIP':

            default:

                if($this->sortDir == 'DESC') {

                    $this->sortDir = 'ASC';

                } else {

                    $this->sortDir = 'DESC';

                }

                break;

        }

    }



    function page($page) {

        extract($this->getValuesArray());



        switch($page) {

            case 'manage':

                $this->top($page);

                $this->errors();

                $this->bot();

                break;

            case 'edit':

                break;

            case 'view':

                break;

            default:

                $this->top('Processing List');

                $this->errors();

                $this->tableList();

                $this->bot();

                break;

        }

    }



    function sqlLimit() {

        // use pageNum and pageLimit

        return(" LIMIT " . ($this->pageNum * $this->pageLimit) . ", " .

            $this->pageLimit );

            //($this->pageNum * $this->pageLimit));

        

    }



    function getMatchingWhere($type='any', $record=0) {

        switch($type) {

            case 'sub':

            case 'ven':

            case 'bull':

                $req[] = "refType = '$type'";

                if(!is_null($record) && $record != 0) {

                    $req[] = "refID = $record";

                }

                break;

            case 'any':

            default:

                break;

        }



        if(count($req) > 0) {

            $params = " WHERE " . implode(' AND ', $req);

            return($params);

        }



        return('');

    }

    

    function tableList($type=NULL, $typeId=NULL) {

        $cSql = "select count(*) as total from " . $this->dbTable;

        $cSql .= $this->getMatchingWhere($type, $typeId);



        if(DB::isError($count = $this->db->getOne($cSql))) {

            $this->dbError("tableList::Count", $rc);

        }



        $sql  = "select * from " . $this->dbTable;

        if(!is_null($type) && !is_null($typeId)) {

            $sql .= $this->getMatchingWhere($type,$typeId);

        } 

        $sql .= " ORDER BY " . $this->sortBy . " " . $this->sortDir;

        if($count >= $this->pageLimit) {

            $sql .= $this->sqlLimit();

        }



        if(DB::isError($results = $this->db->getAll($sql))) {

            $this->dbError("tableList::Result", $results);

        }



        if($this->DEBUG) {

            print("<pre>");

            print("sql: " . $sql);

            print("\r\npagenum: " . $this->pageNum);

            print("\r\ncount: " . $count);

            print("</pre>");

        }



        $pgParams = array (

            'urlVar'     => 'pageNum',

            'perPage'    => $this->pageLimit,

            'delta'      => 4,

            'totalItems' => $count

        );



        $pageSpan = & new Pager_Sliding($pgParams);



        if(PEAR::isError($pageSpan)) {

            $this->dbError('tableList::Pager');

        }



        $this->printPagerLinks($pageSpan->getLinks(), $pageSpan->numPages(), $pageSpan->getCurrentPageID());





        //$links = $pageSpan->getLinks();



        //print("<div align='center'>" . $links['all'] . "</div>");

        $this->tableBegin();

        $alt = 0;

        foreach($results as $rowNum => $rowVal) {

            $class = "rowAlt" . (($alt++ % 2) ? '1'  : '0');

            $this->printRow($rowVal, $class);

        }

        $this->tableEnd();

    }



    function baseLink() {

        return($_SERVER['PHP_SELF']);

    }



    function buildLink($assocArgs=NULL) {

        return( basename($this->baseLink()) . 

            "?sortBy=" . $this->sortBy .

            "&sortDir=" . $this->sortDir);/* .

            "&pageNum=%d"); */

    }



    function sortByLink($col, $name=NULL) {

        if(is_null($name))

            $name=$col;



        $link = $this->baseLink() . "?sortBy=" . $col . "&sortDir=";

        if($this->sortBy == $col) {

            if($this->sortDir == 'ASC') {

                $link .= 'DESC';

                $name .= " ^";

            } else {

                $link .= 'ASC';

                $name .= " v";

            }

        } else {

            $link .= $this->sortDir;

        }



        return("<a href='$link'>$name</a>");



    }



    function tableBegin() {

        ?>

        <div width="80%" class='result'>

        <table width="100%" valign='bottom' align="center" border="0">

        <tr>

            <td class='rowHead'><?= $this->sortByLink('id') ?></td>

            <td class='rowHead'><?= $this->sortByLink('ccName', 'name') ?></td>

            <td class='rowHead'><?= $this->sortByLink('email') ?></td>

            <td class='rowHead'><?= $this->sortByLink('area_code', 'phone') ?></td>

            <td class='rowHead'><?= $this->sortByLink('ccType', 'card') ?></td>

            <td class='rowHead'><?= $this->sortByLink('ccNumber', 'ccn') ?></td>

            <td class='rowHead'><?= $this->sortByLink('refType','type') ?></td>

            <td class='rowHead'>&nbsp;</td>

            <td class='rowHead'>&nbsp;</td>

            <td class='rowHead'>&nbsp;</td>

            <td class='rowHead'><?= $this->sortByLink('status') ?></td>

        </tr>

        <?

    }



    function tableEnd() {

        ?>

        </table>

        </div>

        <?

    }

    

    function viewRecord($id=0) {

        if(!$this->fetch($id)) {

            return(FALSE);

        }



        extract($this->getValuesArray());

        $this->showView('admin_view.php');

        $this->clear();

    }



    function printRow($data=NULL, $rowClass=NULL) {

        if(!is_null($data)) {

            extract($data);

        } else {

            extract($this->getValuesArray());

        }

        // id, name, 

        ?>

        <tr class='<?= $rowClass ?>'>

            <td align='center'>

                <?= $id ?>

            </td>

            <td>

                <?= $ccName ?>

            </td>

            <td>

                <?= $email ?>

            </td>

            <td>

                (<?= $area_code ?>) <?= $phone ?>

            </td>

            <td>

                <?= $this->getCardName($ccType) ?>

            </td>

            <td align='center'>

                <?= $this->getCcLast($ccNumber) ?>

            </td>

            <td align='center'>

                <?= $refType ?>

            </td>

            <td align='center'><a href="<?= $this->baseLink() ?>?action=manage&record=<?= $id ?>"><img src='/imgz/mod_task.gif' border='0' /></a></td>

            <td align='center'><a href="<?= $this->baseLink() ?>?action=view&record=<?= $id ?>"><img src='/imgz/task_view.gif' border='0' /></a></td>

            <td align='center'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=delete&record=<?= $id ?>','Are you sure you would like to delete transaction <?= $id ?>?');"><img src='/imgz/delete_task.gif' border='0' /></a></td> 

            <td align='center'><?= $this->statusChoices($status, $id); ?></td>

        </tr>

        <?

    }



    function statusChoices($status=NULL, $id=NULL) {

        // status choices:

        //  new

        //  active | processed

        //  dormant

        if(is_null($status)) {

            $status = 'new';

        } 



        if(!is_null($id)) {

            $oc = "document.status$id.submit();";

        }



        // FIXME

        $statList = array(

            'new'       => 0,

            'active'    => 1,

            'dormant'   => 2

        );



        print("<form name='status$id' method='get' action='" . $_SERVER['PHP_SELF'] . "'>");

        print("<input type='hidden' name='record' value='$id' />");

        print("<input type='hidden' name='action' value='status' />");

        print("<select name='status' onChange='$oc'>");

        foreach($statList as $key => $value) {

            if($status == $value || $status == $key) {

                $c = "selected";

            } else {

                $c = "";

            }

            print("<option value='$value' $c >$key</option>");

        }

        print("</select>");

        print("</form>");

    }



    function typeChoices($choice=NULL) {

        print("<select name='refType'>");

        foreach($this->refTypes as $k => $n) {

            if($choice == $k || $choice == $n) {

                $c = 'selected';

            } else {

                $c = '';

            }

            print("<option $c value='$k'>$n</option>");

        }

        print("</select>");

    }



    function changeStatus($record=NULL, $status=NULL) {

        if(is_null($record) || is_null($status)) {

            // invalid record or status

            $this->addErrors("Invalid status [$status] or record [$record]");

            return(FALSE);

        }



        if($this->fetch($record)) {

            if($this->status == $status) {

                // duplicate status

                return(TRUE);

            }

            if(is_null($this->status) || $this->status == 0) {

                // new record

                $this->clearCreditCard();

            }

            $this->status = $status;

            $this->commit();

            $this->clear();

            return(TRUE);

        }

    }



    function clearCreditCard() {

        $this->ccNumber = "XXXX-XXXX-XXXX-" . $this->getCcLast($this->ccNumber);

    }



}

?>

