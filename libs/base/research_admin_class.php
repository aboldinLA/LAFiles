<?php

require_once("research_class.php");
// require_once("pagespan_class.inc");
require_once("Pager/Sliding.php");

class research_admin_class extends research_class {
    // meta
    var $parentName;
    var $errList;
    var $pageSpan;

    // link variables
    var $from;
    var $sortBy='id';
    var $sortStr;
    var $sortDir='ASC';
    var $pageNum=0;
    var $pageLimit=20;

    function research_admin_class() {
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
            case 'delete':
                if($this->deleteRow($vars['record'])) {
                    $this->clear();
                    $this->redirect();
                } else {
                    $this->top();
                    print("Error deleting row " . $vars['id'] . "<br />");
                    $this->bottom();
                }
                break;
            case 'commit':
            case 'upload':
            case 'enter':
                $this->clear();
                $this->fetch($vars['id']);
                $this->input($vars);
	        	$this->preValidate($vars);
                if($this->validateEditorial()) {
                    $this->commit();
                    $this->clear();
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
                $this->top('Manage Editorial');
                $this->errors();
                //print("<form name='manage' method='post' action='" . $this->baseLink() . "'>");
                //print("<input type='hidden' name='action' value='enter' />");
                //print("<input type='hidden' name='id' value='" . $this->id . "' />");
                print("<form name='manage' method='post' action='" . $this->baseLink() . "' enctype='multipart/form-data'>");
                $this->showView('edit.php', TRUE);
                print("</form>\r\n");
                //$this->showView('images.php', TRUE);
                $this->bot();
                $this->clear();
                break;
            case 'view':
                $this->fetch($vars['record']);
                $this->top('View Record');
                $this->errors();
                $this->showView('article.php', TRUE);
                $this->bot();
                $this->clear();
                break;
            case 'search':
                $this->clearErrors();
                $this->top();
                $this->showView('searchStyle.css', TRUE);
                $this->showView('searchBox.php', TRUE, $vars);
                print("<form name='manage' method='get' action='" . $this->baseLink() . "'>");
                print("<input type='hidden' name='action' value='find' />\r\n");
                $this->showView('searchSimple.php', TRUE, $vars);
                print("</form>");
                print("<hr noshade>");
                print("<form name='manage' method='get' action='" . $this->baseLink() . "'>");
                print("<input type='hidden' name='action' value='find' />\r\n");
                $this->showView('searchAdvanced.php', TRUE, $vars);
                print("</form>");
                $this->bot();
                $this->clear();
                break;
            case 'find':
                $this->clearErrors();
                //$query = $this->getSearchOptions($vars);
                $this->top();
                $this->showView('searchStyle.css', TRUE);
                if($this->errors()) {
                    print("<form name='manage' method='get' action='" . $this->baseLink() . "'>");
                    print("<input type='hidden' name='action' value='find' />\r\n");
                    $this->showView('searchSimple.php', TRUE, $vars);
                    print("</form>");
                    print("<hr noshade>");
                    print("<form name='manage' method='get' action='" . $this->baseLink() . "'>");
                    print("<input type='hidden' name='action' value='find' />\r\n");
                    $this->showView('searchAdvanced.php', TRUE, $vars);
                    print("</form>");
                    //$this->showView('search.php', TRUE);
                } else {
                    print("<form name='manage' method='get' action='" . $this->baseLink() . "'>");
                    switch($vars['searchType']) {
                        case 'simple':
                            print("<form name='manage' method='get' action='" . $this->baseLink() . "'>");
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchSimple.php', TRUE, $vars);
                            break;
                        case 'advanced':
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchAdvanced.php', TRUE, $vars);
                            break;
                    }
                    print("</form>");
                    print("<hr noshade>");
                    $this->searchResults($vars);
                    //$this->errDump($query);
                }
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

    function getSortString() {
        switch($this->sortBy) {
            case 'ed_text':
                return('length(ed_text)');
            case 'issue':
                return('issue+0');
                break;
            default:
                return($this->sortBy);
                break;
        }
    }

    function tableList() {
        $cSql = "select count(*) as total from " . $this->dbTable;

        if(DB::isError($count = $this->db->getOne($cSql))) {
            $this->dbError("tableList::Count", $rc);
        }

        $sql  = "select * from " . $this->dbTable;
        $sql .= " ORDER BY " . $this->getSortString() . " " . $this->sortDir;
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

        $links = $pageSpan->getLinks();

        print("<div align='center'>" . $links['all'] . "</div>");
        $this->tableBegin();
        $alt = 0;
        foreach($results as $rowNum => $rowVal) {
            $class = "rowAlt" . (($alt++ % 2) ? '1'  : '0');
            $this->printRow($rowVal, $class);
        }
        $this->tableEnd();
    }

    function tableBegin() {
        ?>
        <div width="80%" class='result'>
        <table width="100%" valign='bottom' align="center" border="0">
        <tr>
            <td class='rowHead'><?= $this->sortByLink('id') ?></td>
            <td class='rowHead'><?= $this->sortByLink('source') ?></td>
            <td class='rowHead'><?= $this->sortByLink('issue') ?></td>
            <td class='rowHead'><?= $this->sortByLink('author') ?></td>
            <td class='rowHead'><?= $this->sortByLink('title') ?></td>
            <td class='rowHead'><?= $this->sortByLink('ed_text','size'); ?></td>
            <td class='rowHead'>&nbsp;</td>
            <td class='rowHead'>&nbsp;</td>
            <td class='rowHead'>&nbsp;</td>
            <td class='rowHead'><?= $this->sortByLink('active', 'status') ?></td>
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
        $this->showView('bullstyles.css', TRUE);
        $this->showView('viewClassified.php', TRUE);
        $this->clear();
    }

    function printRow($data=NULL, $rowClass=NULL) {
        if(!is_null($data)) {
            extract($data);
        } else {
            extract($this->getValuesArray());
        }
        // id, source, issue, active date, auth(20), art(40), proofed, new/proofed/active, (modify)
        ?>
        <tr class='<?= $rowClass ?>'>
            <td align='center'>
                <?= $id ?>
            </td>
            <td align='center'>
                <?= $source ?>
            </td>
            <td align='center'>
                <?= date('m/d/y', $issue); ?>
            </td>
            <td>
                <?= $this->strShorten($author,22) ?>
            </td>
            <td>
                <?= $this->strShorten($title,37) ?>
            </td>
            <td><?= strlen($ed_text); ?></td>
            <? /* <td align='center'><a href="article.php?id=<?= $id ?>"><img src='/imgz/mod_task.gif' border='0' /></a></td> */ ?>
            <td align='center'><a href="<?= $this->baseLink() ?>?action=manage&record=<?= $id ?>"><img src='/imgz/mod_task.gif' border='0' /></a></td>
            <td align='center'><a href="<?= $this->baseLink() ?>?action=view&record=<?= $id ?>"><img src='/imgz/task_view.gif' border='0' /></a></td>
            <? /* <td align='center'><a href="<?= $this->baseLink() ?>?action=delete&record=<?= $id ?>"><img src='/imgz/delete_task.gif' border='0' /></a></td>  */ ?>
            <td align='center'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=delete&record=<?= $id ?>','Are you sure you would like to delete <?= $title ?>?');"><img src='/imgz/delete_task.gif' border='0' /></a></td> 
            <td align='center'><?= $this->statusChoices($active, $active_day, $proofed, $id); ?></td>
        </tr>
        <?
    }

    function statusChoices($active=NULL, $active_day=NULL, $proofed=NULL, $id=NULL) {
        // FIXME
        // status choices:
        // new
        // proofed
        // pending
        // active
        
        // current status:
        // new     => active == 0, active_day == 0 / null, proofed == 0 
        // active  => active == 1, active_day, proofed
        // proofed => active == 0, active_day == 0 / null, proofed ==1
        // pending => active == 0, active_day != 0, proofed == 1

        // pending shows when active_date is set, is not active,  proofed
        // proofed shows when proofed bit, no active_day, not active

        if(is_null($active))  {
            $status = 0;
        } else {
            $status = $active;
        }
    

        if(!is_null($id)) {
            $oc = "document.status$id.submit();";
        }

        $statList = array(
            'new'       => 0,
            'active'    => 1,
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

    function changeStatus($record=NULL, $status=NULL) {
        if(is_null($record) || is_null($status)) {
            // invalid record or status
            $this->addErrors("Invalid status [$status] or record [$record]");
            return(FALSE);
        }

        if($this->fetch($record)) {
            if($this->active == $status) {
                // duplicate status
                return(TRUE);
            }
            $this->active = $status;
            $this->commit();
            $this->clear();
            return(TRUE);
        }
    }

    function getSources($source="Other") {
        $sourceList = array('LCN', 'LASN', 'LSMP', 'LOL', 'Other');

        // Magazine Name Change
        if($source == 'LCM')
            $source = 'LCN';

        if(!in_array($source, $sourceList)) 
            $source = 'Other';

        foreach($sourceList as $mag) {
            if($source == $mag) {
                $s = "checked";
            } else {
                $s = "";
            }
            print("<input type='radio' name='source' value='$mag' $s /> <strong>$mag</strong> ");
        }
    }

    function htmlFlag($is_html=FALSE) {
        if($is_html == 1) {
            $y = "checked"; $n = "";
        } else {
            $y = ""; $n = "checked";
        }
        print("<input type='radio' name='is_html' value='1' $y /> Yes");
        print("<input type='radio' name='is_html' value='0' $n /> No");
    }

    function preValidate($vars=NULL) {
	// just extract the non-matching variables into the db dataset
        if(is_null($vars)) {
            return(FALSE);
        }
        extract($vars);
        $this->issue      = strtotime($month . '/' . $day . '/' . $year);
        $this->active_day = strtotime($pubmonth . '/' . $pubday . '/' . $pubyear);
    }
}
?>
