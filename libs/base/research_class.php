<?php
require_once("template_class.php");
require_once("transaction_class.php");

class research_class extends template_class {
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
    var $title;
    var $subtitle;
    var $subject;
    var $images;
    var $ed_text;
    var $is_html;
    var $author;
    var $issue;
    var $source;
    var $keywords;
    var $uid;
    var $active;
    var $active_day;

    function research_class() {
        // table name
        $table   = "editorial";
        // list of db columns
        $columns = array(
            'id',
            'title',
            'subtitle',
            'subject',
            'images',
            'ed_text',
            'is_html',
            'author',
            'issue',
            'source',
            'keywords',
            'uid',
            'active',
            'active_day'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
    }

    function setStage($stage) {
        if($this->stage < $stage) {
            $this->stage = $stage;
        } 
    }

    function validateResponse(& $vars) {
        $errors = array();
        if(is_null($vars))
            return(FALSE);

        if(count($errors) > 0) {
            $this->addErrors($errors);
            return(FALSE);
        } else {
            return(TRUE);
        }
    }

    function getSearchOptions($vars = NULL) {
        $queryItems = array();
        // searchBy, searchType?, searchFor
        // searchSource, boolDate, searchMonth, searchYear
        // QUERY
        // select * from editorial where 
        if($vars == NULL) {
            $this->addErrors('Missing search environment, please contact the webmaster.');
            return(FALSE);
        }

        // split the search terms into an array
        $terms = $this->getSearchTerms($vars['searchFor']);

        $queryItems['empty'] = "( title is not null AND title <> '')";

        // if we're not doing a date search, or we're doing a simple search
        // we require a searchFor
        if( (($vars['boolDate'] == 0) || ($vars['searchType'] == 'simple')) && 
            (($terms === FALSE) || (count($terms) < 1) )  ) {
            $this->addErrors('Please enter at least one search term.');
        }

        if($vars['boolDate'] == 1) {
            $fromDate = mktime(0,0,0,$vars['searchmonth'],1,$vars['searchyear']);
            $toDate = mktime(23,59,59,$vars['searchmonth'] + 1 ,0,$vars['searchyear']);
            $queryItems['date'] = "( issue >= $fromDate AND issue <= $toDate )";
            //$queryItems['date'] = "( issue >= " . date("r", $fromDate) . " && issue <= " .  date("r", $toDate) . " )";
        } else {
            $qDate = " 1 ";
        }

        // qSource, source of editorial
        switch(strtolower($vars['searchSource'])) {
            case 'lcn':
            case 'lcm':
                $queryItems['source'] = "( source = 'lcn' )";
                break;
            case 'lasn':
            case 'lasm':
                $queryItems['source'] = "( source = 'lasn')";
                break;
            case 'lsmp':
                $queryItems['source'] = "( source = 'lsmp' )";
                break;
            case 'any':
            default:
                $qSource = " 1 ";
                break;
        }

        // qFor, search terms
        if( ($terms != FALSE) && (count($terms) > 0) ) {
            $queryItems['for'] = $this->searchTerms($vars['searchBy'], $terms, $vars['searchFor']);
        }

        $sql = "select * from " . $this->dbTable;
        $whereString = " WHERE " . implode(' AND ',$queryItems) . "AND title NOT LIKE '%LandscapeOnline Weekly%' " . "AND title NOT LIKE '%Landscape Online Weekly%'" . "AND title NOT LIKE '%LandscapeOnine%'" . "AND title NOT LIKE '%LO_Weekly%'" ;
        $orderBy = " order by issue+0 desc ";

        //return($sql . $whereString . $orderBy);
        return(array($whereString, $terms));
    }

    // returns an array of items or false
    function searchTerms($searchBy, $terms, $orig = NULL) {
        if( ($terms == FALSE) || (count($terms) < 1) ) {
            // no search terms, return boolean placebo
            return(FALSE);
        }

        switch(strtolower($searchBy)) {
            case 'author':
            case 'id':
            case 'title':
                foreach($terms as $key) {
                    $whereFor[] = "lower($searchBy) like '%$key%' ";
                }
                return("( " . implode(' AND ',$whereFor) . " )");
                break;
            case 'keywords':
                // this checks for all terms in title or all terms in ed_text
                //return("match(title, ed_text) against('$orig' IN BOOLEAN MODE) ");
                foreach($terms as $key) {
                    $whereFor[] = "((lower(title) like '%$key%') OR (lower(ed_text) like '%$key%') OR (lower(id) like '%$key%')) ";
                } 
                return("( " . implode(' AND ',$whereFor) . " )"); 
                break;
            default:
                // don't know how to handle this search field
                return(FALSE);
                break;
        }
    }

    function monthInputs($date, $prefix) {
        $months = array (
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        );

        print("<select name='" . $prefix . "month'>\r\n");
        foreach($months as $num => $name) {
            if(date("m", $date) == $num) {
                $s = "selected";
            } else {
                $s = "";
            }
            print("<option value='$num' $s >$name</option>\r\n");
        }
        print("</select>\r\n");
    }

    function dayInputs($date, $prefix) {
        for($i = 1 ; $i <= 31; $i++)
            $days[] = $i;
        print("<select name='" . $prefix . "day'>\r\n");
        foreach($days as $day) {
            if(date("d", $date) == $day) {
                $s = "selected";
            } else {
                $s = "";
            }
            print("<option value='$day' $s >$day</option>\r\n");
        }
        print("</select>\r\n");
    }

    function yearInputs($date, $prefix) {
        $thisyear = date("Y");

        for($i = 1980 ; $i < $thisyear + 8 ; $i++)
            $years[] = $i;

        print("<select name='" . $prefix . "year'>\r\n");
        foreach($years as $year) {
            if(date("Y", $date) == $year) {
                $s = "selected";
            } else {
                $s = "";
            }
            print("<option value='$year' $s >$year</option>\r\n");
        }
        print("</select>\r\n");
    }

    function dateInputs($date=NULL, $prefix='', $showDays=TRUE) {
        if($date == NULL || $date == 0) {
            $date = time();
        }

        $this->monthInputs($date, $prefix);

        if($showDays == TRUE) {
            $this->dayInputs($date, $prefix);
        }

        $this->yearInputs($date, $prefix);
    }


	
    function searchByInputs($searchBy='keywords') {
        $options = array(
            'keywords' => 'Keyword',
            'id'    => 'Article Number',
            'author'   => 'Author',
            'title'    => 'Title'
        );
        if(!array_key_exists($searchBy, $options))
            $searchBy = 'keywords';

        foreach($options as $term => $display) {
            if($term == $searchBy) {
                $s = 'checked';
            } else {
                $s = '';
            }
            print("<input type='radio' name='searchBy' value='$term' $s /> $display <br />");
        }
    }	
	
    function searchByInputs2($searchBy='keywords') {
        $options = array(
            'keywords' => 'Keyword'
        );
        if(!array_key_exists($searchBy, $options))
            $searchBy = 'keywords';

        foreach($options as $term => $display) {
            if($term == $searchBy) {
                $s = '';
            } else {
                $s = '';
            }
            print("<input type='radio' name='searchBy' value='$term' $s /> $display <br />");
        }
    }	
	
	
    function searchByInputs3($searchBy='keywords') {
        $options = array(
            'author'   => 'Author'
        );
        if(!array_key_exists($searchBy, $options))
            $searchBy = 'keywords';

        foreach($options as $term => $display) {
            if($term == $searchBy) {
                $s = 'checked';
            } else {
                $s = '';
            }
            print("<input type='radio' name='searchBy' value='$term' $s /> $display <br />");
        }
    }	
	
    function searchByInputs4($searchBy='keywords') {
        $options = array(
            'title'    => 'Title'
        );
        if(!array_key_exists($searchBy, $options))
            $searchBy = 'keywords';

        foreach($options as $term => $display) {
            if($term == $searchBy) {
                $s = 'checked';
            } else {
                $s = '';
            }
            print("<input type='radio' name='searchBy' value='$term' $s /> $display <br />");
        }
    }	
	
    function searchByInputs5($searchBy='keywords') {
        $options = array(
            'title'    => 'Title'
        );
        if(!array_key_exists($searchBy, $options))
            $searchBy = 'keywords';

        foreach($options as $term => $display) {
            if($term == $searchBy) {
                $s = 'checked';
            } else {
                $s = '';
            }
            print("<input type='radio' name='searchBy' value='$term' $s /> $display <br />");
        }
    }				
	
	
    function searchSourceInputs($searchSource='any') {
        $options = array(
            'lasn' => 'Landscape Architect &amp; Specifier News',
            'lcn'  => 'Landscape Contractor National',
            'any'  => 'Any Source'
        );

        if(!array_key_exists($searchSource, $options))
            $searchSource = 'any';

        foreach($options as $term => $display) {
            if($term == $searchSource) {
                $s = 'checked';
            } else {
                $s = '';
            }
            print("<input type='radio' name='searchSource' value='$term' $s /> $display <br />");
        }
    }

    function searchDateInputs($byDate=FALSE, $prefix, $month, $year) {
        if($month == 0) {
            $month = date("m");
        }
        if($year == 0) {
            $year = date("Y");
        }
        if($byDate == 1) {
            print("<input type='radio' name='boolDate' value='1' checked />");
            $this->dateInputs(mktime(0,0,0,$month,1,$year),$prefix,FALSE);
            print("<br />");
            print("<input type='radio' name='boolDate' value='0' /> Any Date");
        } else {
            print("<input type='radio' name='boolDate' value='1' />");
            $this->dateInputs(mktime(0,0,0,$month,1,$year),$prefix,FALSE);
            print("<br />");
            print("<input type='radio' name='boolDate' value='0' checked /> Any Date");
        }
    }

    function searchResults($vars) {
        list($where, $terms) = $this->getSearchOptions($vars);

        $cSql  = "select count(id) as total from " . $this->dbTable;
        $cSql .= $where;

        if(DB::isError($count = $this->db->getOne($cSql))) {
            $this->dbError("searchResults::Count", $rc);
        }

        // editorials tend to be large -- don't include ed_text in query unless absolutely 
        // necessary
        $sql = "select id, title, author, source, issue, ed_text from " . $this->dbTable;
        //$sql = "select * from " . $this->dbTable;
        $sql .= $where;
        $sql .= " order by issue+0 desc ";

        if($count >= $this->pageLimit) {
            $sql .= $this->sqlLimit();
        }

        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("searchResults::Result", $results);
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
            'delta'      => 5,
            'totalItems' => $count
        );

        $pageSpan = & new Pager_Sliding($pgParams);

        if(PEAR::isError($pageSpan)) {
            $this->dbError('searchResults::Pager');
        }

        //print("<div width='100%' style='width: 100%; border: 1px solid black;'>");
        print($this->getRecordSetString($pageSpan->getCurrentPageID(), $count, 'Articles.', $this->pageLimit) . '<br />'); 
        $this->printPagerLinks($pageSpan->getLinks(), $pageSpan->numPages(), $pageSpan->getCurrentPageID());

        //print("</div>");
        //print("<div style='border-top: 2px solid gray; border-bottom: 2px solid gray;'>&nsbp;</div>");
        $this->searchBegin();
        print("<tr><td><div style='width: 100%; valign: bottom; border-bottom: 2px solid gray;'>&nbsp;</div></td></tr>");
        $alt = 0;
        if($count < 1) {
            print("<tr><td><center><br />No Results Found.</center></td></tr>");
        } else {
            foreach($results as $rowNum => $rowVal) {
                $class = "rowAlt" . (($alt++ % 2) ? '1'  : '0');
                $this->printSearchRow($rowVal, $class, $terms);
            }
        }
        print("<tr><td><div style='width: 100%; valign: top; border-top: 2px solid gray;'>&nbsp;</div></td></tr>");
        $this->searchEnd();
        //print("<div width='100%' style='width: 100%; border-top: 2px solid gray;'>&nbsp;</div>");
        //print("</div>");
        //$this->printPagerLinks($pageSpan->getLinks(), $pageSpan->numPages(), $pageSpan->getCurrentPageID());
    }

    function searchBegin() {
        print("<table width='100%' valign='top' align='left' border='0'>");
    }

    function searchEnd() {
        print("</table>");
    }

    function getIssueLabel($source=NULL, $issue=NULL) {
        if(is_null($source))
            $source = $this->source;
        if(is_null($issue))
            $issue = $this->issue;


        $text = $this->getSourceLabel($source);
        switch($text) {
            case 'LASN':
            case 'LCN':
            case 'LSMP':
                return("$text - " . date('F Y', $issue));
                break;
            default:
                return("$text - " . date('F d, Y', $issue));
                break;
        }
    }

    function getSourceLabel($source=NULL) {
        if(is_null($source)) {
            $source = $this->source;
        }

        switch($source) {
            case 'LSMP':
                return('LSMP');
                break;
            case 'LASN':
                return('LASN');
                break;
            case 'LCN':
            case 'LCM':
                return('LCN');
                break;
            case 'other':
            case 'LOL':
            default:
                return('LOL');
                break;
        }
    }

    function findCitation($text, $terms) {
        $terms = (array) $terms;
        if($terms[0] == FALSE) {
            return("");
        }
        // scan through $text for first match of first term
        $text = strip_tags($text); // remove html tags
        $idx  = strpos(strtolower($text), strtolower($terms[0])); // find the first match

        $first = $idx - 65; // look previous
        if($first < 0) {
            $first = 0;
        } else {
            $sentence = "... ";
        }
        
        $ch = 'N';
        while($ch != " ") {
            $ch = $text[$first++];
        }

        $last = $idx + 128;
        if($last > strlen($text)) {
            $last = strlen($text);
        }

        $len = $last - $first;

        $sentence .= substr($text, $first, $len) . "...";
        if(strlen($sentence) > 0) {
            return($sentence);
        } else {
            return("<em>Unable to find citation.</em>");
        }
    }

    function highlightCitations($text, $terms, $start = "<strong style='color: #00b800; font-size: 115%;'>", $end = "</strong>") {
        $terms = (array) $terms;
        foreach($terms as $term) {
            $text = preg_replace('/(' . preg_quote($term,'/') . ')/i', $start . '\1' . $end, $text);
        }
        return($text);
    }

    function printSearchRow($rowVal, $class, $prime) {
        extract($rowVal);
        $cite = $this->highlightCitations($this->findCitation(iconv('CP1252', 'ASCII//TRANSLIT', ($rowVal['ed_text'])), $prime), $prime);

        $source = $this->getIssueLabel($source,$issue);

        if($author == 'nobody' || $author == '') {
            $author = 'Staff';
        }
        print("<tr class='$class'>");
        print("<td>");
        //print("<a href='". $this->baseLink() . "?action=view&record=$id' class='srch_t'>" . $this->strShorten(ucwords($title), 120) . "</a><br />");
        print("<br><a href='/research/article-a.php?number=$id' class='srch_t'>" . $this->strShorten(ucwords(htmlfriendly($title)), 120) . "</a><br />");
        print("&nbsp; &nbsp; &nbsp; $cite <br />");
        print("<strong>Author:</strong> " . $this->strShorten(ucwords(htmlfriendly($author)), 50) . ", ");
        print("<strong>Issue:</strong> $source &nbsp; &nbsp; <a href='view_comments.php?art_id=$id'>View Comments</a>");
        print("</td>");
        print("</tr>");
    }

    function fetchLastWeeksNews() {
        $bQuery = "SELECT * FROM " . $this->dbTable . " WHERE ";
        $qopts[] = "(source IS NULL OR lower(source) = 'lol' OR lower(source) = 'other')";
        $stime = strtotime("-7 days");
        $qopts[] = " issue >= $stime ";
        $qtail   = " LIMIT 15";

        $bQuery .= implode(" AND ", $qopts) . " ORDER BY issue DESC ";
        if($qtail) $bQuery .= $qtail;

        if(DB::isError($results = $this->db->getAll($bQuery))) {
            $this->dbError("searchResults::Result", $results);
        }
        return($results);
    }
    function fetchRecentNews($src=NULL, $month=NULL, $year=NULL) {
        $bQuery = "SELECT * FROM " . $this->dbTable . " WHERE ";

        if(!is_null($src)) {
            $qopts[] = "(source = '$src')";
        } else {
            // default behavior -- grab just lol items
            $qopts[] = "(source IS NULL OR lower(source) = 'lol' OR lower(source) = 'other')";
        }

        if(is_null($month) && is_null($year)) {
            // default behavior -- grab last 30 days of news
            $stime = strtotime("-30 days");
            $qopts[] = " issue >= $stime ";
            $qtail   = " LIMIT 15";
        } else {
            // grab a particular month of news
            $stime = mktime(0,0,0,$month,1,$year);
            if( ++$month > 12) {
                $year++;
                $month=1;
            }
            $etime = mktime(0,0,0,$month,0,$year);
            $qopts[] = " issue >= $stime ";
            $qopts[] = " issue <= $etime ";
        }

        $bQuery .= implode(" AND ", $qopts) . " ORDER BY issue DESC ";
        if($qtail) $bQuery .= $qtail;

        if(DB::isError($results = $this->db->getAll($bQuery))) {
            $this->dbError("searchResults::Result", $results);
        }


        return($results);
    }

}
?>
