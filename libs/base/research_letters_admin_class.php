<?php

require_once("research_letters_class.php");
// require_once("pagespan_class.inc");
require_once("Pager/Sliding.php");

class research_letters_admin_class extends research_letters_class {
    // meta
    var $parentName;
    var $errList;
    var $pageSpan;

    // link variables
    var $from;
    var $sortBy='input';
    var $sortStr;
    var $sortDir='DESC';
    var $pageNum=0;
    var $pageLimit=20;

    function research_letters_admin_class() {
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
                $this->fetch($vars['record']);
                $this->input($vars);
                if($this->validateComment()) {
                    $this->commit();
                    if($vars['Proof'] == 'Proof') {
                        $this->changeStatus($vars['record'], 3);
                    }
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
                $this->headerBar('Edit : ' . $vars['record']);
                print("<br />");
                $this->errors();
                //print("<form name='manage' method='post' action='" . $this->baseLink() . "'>");
                print("<form name='manage' method='post' action='" . $this->baseLink() . "'>");
                print("<input type='hidden' name='action' value='enter' />");
                print("<input type='hidden' name='record' value='" . $this->id . "' />");
                $this->showView('edit.php', TRUE);
                print("</form>\r\n");
                //$this->showView('images.php', TRUE);
                $this->bot();
                $this->clear();
                $this->clearErrors();
                break;
            case 'view':
                $this->fetch($vars['record']);
                $this->top('View Record');
                $this->errors();
                if($this->art_id > 0) {
                    $this->showView('article_comment.php', TRUE);
                } else {
                    $this->showView('comment.php', TRUE);
                }
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

    function setSort($col, $dir=NULL) {
        if($this->sortBy == $col) {
            if(is_null($dir)) {
                $this->setSortDir('FLIP');
            } else {
                $this->setSortDir($dir);
            }
        } else {
            $this->setSortDir();
            //if(in_array($col, $this->dbData)) {
                $this->sortBy = $col;
                $this->setSortDir($dir);
            //} else {
                // bad val
                // error 
           // }
        }
    }   

    function getSortString() {
        switch($this->sortBy) {
            case 'active':
                return('proofed, active');
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

        //$sql  = "select * from " . $this->dbTable;
        //$sql .= " ORDER BY " . $this->getSortString() . " " . $this->sortDir;

        $sql = "SELECT " . 
                    " c.*, r.source, r.issue " .
                "FROM " . 
                    $this->dbTable . " AS c " .
                "LEFT JOIN " . 
                    "editorial as r ON (r.id = c.art_id) " .
                "ORDER BY " .
                    $this->getSortString() . " " . $this->sortDir;

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

        print($this->getRecordSetString($pageSpan->getCurrentPageID(), $count, 'Responses', $this->pageLimit) . '<br />');

        $this->printPagerLinks($pageSpan->getLinks(), $pageSpan->numPages(), $pageSpan->getCurrentPageID());

        // print("<div align='center'>" . $links['all'] . "</div>");
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
            <td class='rowHead'><?= $this->sortByLink('art_id', 'article') ?></td>
            <td class='rowHead'><?= $this->sortByLink('r.source', 'source') ?></td>
            <td class='rowHead'><?= $this->sortByLink('r.issue', 'issue') ?></td>
            <td class='rowHead'><?= $this->sortByLink('title_text', 'title') ?></td>
            <td class='rowHead'><?= $this->sortByLink('last_name', 'sender') ?></td>
            <td class='rowHead'><?= $this->sortByLink('email') ?></td>
            <td class='rowHead'><?= $this->sortByLink('input', 'date') ?></td>
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
        //$rc = new research_class();

        if(!is_null($data)) {
            extract($data);
        } else {
            extract($this->getValuesArray());
        }

        $src = $source;
        if($src == 'other') {
            $src = 'LOL';
        }
        /*
        switch($source) {
            case 'LASN':
            case 'LSMP':
            case 'LCM':
            case 'LCN':
                $src = $source;
                break;
            default:
                /$src = 'LOL';
                break;
        }
        */
        if($issue != 0) {
            $label = date('y/m', $issue);
        } else {
            $label = "N/A";
        }   

        // id, source, issue, active date, auth(20), art(40), proofed, new/proofed/active, (modify)
        ?>
        <tr class='<?= $rowClass ?>'>
            <td align='center'>
                <?= $art_id ?>
            </td>
            <td align='center'><?= $src ?></td>
            <td align='center'><?= $label ?></td>
            <td align='center'>
                <?= $this->strShorten($title_text, 20); ?>
            </td>
            <td align='center'>
                <?= $first_name ?> <?= $last_name ?>
            </td>
            <td>
                <?= $email ?>
                <!-- <?= $this->strShorten($author,22) ?> -->
            </td>
            <td align='center'> <?= date('m/d/y', $input); ?> </td>
            <? /* <td align='center'><a href="article.php?id=<?= $id ?>"><img src='/imgz/mod_task.gif' border='0' /></a></td> */ ?>
            <td align='center'><a href="<?= $this->baseLink() ?>?action=manage&record=<?= $id ?>"><img src='/imgz/mod_task.gif' border='0' /></a></td>
            <td align='center'><a href="<?= $this->baseLink() ?>?action=view&record=<?= $id ?>"><img src='/imgz/task_view.gif' border='0' /></a></td>
            <? /* <td align='center'><a href="<?= $this->baseLink() ?>?action=delete&record=<?= $id ?>"><img src='/imgz/delete_task.gif' border='0' /></a></td>  */ ?>
            <td align='center'><a href="javascript:conf_redir('<?= $this->baseLink() ?>?action=delete&record=<?= $id ?>','Are you sure you would like to delete comment <?= $id ?> by <?= $first_name ?> <?= $last_name ?>?');"><img src='/imgz/delete_task.gif' border='0' /></a></td> 
            <td align='center'><?= $this->statusChoices($active, $proofed, $id); ?></td>
        </tr>
        <?
    }

    function statusChoices($active=NULL, $proofed=NULL, $id=NULL) {
        // FIXME
        // status choices:
        // new
        
        // current status:
        // new     => active == 0, active_day == 0 / null, proofed == 0 
        // active  => active == 1, active_day, proofed
        // proofed => active == 0, active_day == 0 / null, proofed ==1
        // pending => active == 0, active_day != 0, proofed == 1

        // pending shows when active_date is set, is not active,  proofed
        // proofed shows when proofed bit, no active_day, not active

        switch($proofed) {
            case 1:
            case 'yes':
                $proofed = 1;
                break;
            case 0:
            case 'no':
            case 'default':
                $proofed = 0;
                break;
        }

        switch($active) {
            case 1:
            case 'yes':
                $active = 1;
                break;
            case 0:
            case 'no':
            default:
                $active = 0;
                break;
        }

        $statList = array(
            'new'       => 0,
            'active'    => 3,
            'inactive'  => 2
        );

        if(!$proofed && !$active) {
            $status = 0;
        }

        if($active && $proofed) {
            $status = 3;
        } else if($proofed) {
            $status = 2;
        }

        if(!is_null($id)) {
            $oc = "document.status$id.submit();";
        }


        print("<form name='status$id' style='padding:0; margin: 0;' method='get' action='" . $_SERVER['PHP_SELF'] . "'>");
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

        switch($status) {
            case 3:
                $proofed = 'yes'; $active = 1;
                break;
            case 2:
                $proofed = 'yes'; $active = 0;
                break;
            case 1:
                // this shouldn't happen
                $proofed = 'no'; $active = 1;
                break;
            default:
            case 0:
                $proofed = 'no'; $active = 0;
                break;
        }

        if($this->fetch($record)) {
            if(($this->active == $active) && ($this->proofed == $proofed)) {
                // duplicate status
                return(TRUE);
            }
            $this->active  = $active;
            $this->proofed = $proofed;
            $this->commit();
            $this->clear();
            return(TRUE);
        }
    }

    function validateComment() {
        extract($this->getValuesArray());
        $errors = array();
        if(strlen($first_name) < 1)
            $errors[] = 'Please enter your first name.';

        if(strlen($last_name) < 1)
            $errors[] = 'Please enter your last name.';

        if(strlen($email) < 1)
            $errors[] = 'Please enter a valid email address.';

        if(strlen($city) < 1)
            $errors[] = 'Please enter a valid city.';

        if((strlen($state) < 1) || (strlen($state) > 2))
            $errors[] = 'Please enter a valid state.';

        if(strlen($zip) < 1)
            $errors[] = 'Please enter a valid postal code.';

        if(strlen($zip) < 1)
            $errors[] = 'Please enter a valid postal code.';

        if(count($errors) > 0) {
            $this->addErrors($errors);
            return(FALSE);
        } else {
            return(TRUE);
        }
    }
    
    function headerBar($sub) {
        extract($this->getValuesArray());
    ?>
    <table style='border: 1px solid black;' width='100%' cellpadding='0' cellspacing='0'>
        <tr class='cellhead'>
            <td class='cellhead'>Comments :: <?= $sub ?></td>
            <td align='right'>
                <strong>[ <a href='<?= $_SERVER['PHP_SELF']; ?>'>Return to List</a> | <a href='<?= $_SERVER['PHP_SELF'] ?>?action=manage&record=<?= $id ?>'>Manage</a> ]</strong>
            </td>
        </tr>
    </table>
    <?

    }
}
?>
