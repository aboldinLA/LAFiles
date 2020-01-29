<?php

// this is a session managed class
// you should manipulate everything in the session before commiting the record to the db
// usage:
// $bull = new bulletin_class($db, $bull_id);
// $bull->senderEmail = "foo";
// $bull->commit();
require_once("DB.php");
require_once("DB/mysql.php");
require_once("Mail.php");
require_once("Mail/mime.php");
require_once("functions.php");
require_once("history_class.php");

class template_class {
    // meta-information
    var $dbTable;  // TABLE for this class information
    var $instance; // unique object id
    var $debug=FALSE;
    var $fatal=TRUE;
    var $errList;
    var $className; 
    var $widgetMode=FALSE;

    // this variable is an array of db columns
    var $dbData;   
    var $pageNum;
    var $sortBy;
    var $sortDir;

    // constructor class
    function instantiate($table = NULL, $keys = NULL, $record = NULL) {
        // connect to the db
        $this->dbConnect();

        // initialize instance
        $this->dbTable    = $table;
        $this->className  = get_class($this);
        $this->parentName = get_parent_class($this);
        $this->instance   = md5(uniqid(rand(), 1));
        $this->dbData     = &$keys;

        if($record != NULL && is_numeric($record)) {
            // set local class instance data to match record number
            $this->fetch($record);
        } else {
            // error, or new record
        }
    }

    function errDump($var) {
        print("<pre>");
        var_dump($var);
        print("</pre>");
    }

    function dbError($where, $instance=NULL) {
        print("<div class='errors'>");
        if(is_null($instance) || !(DB::isError($instance))) {
            print("$where<br />");
        } else {
            print("$where: " . $instance->getMessage() . "<br />");
            if($this->debug) {
                print("<pre>");
                print_r($instance->getDebugInfo());
                print("</pre>");
            }
        }
        print("</div>");

        if($this->fatal) {
            die();
        }
    }

    function clear() {
        // clear the instance
        foreach($this->dbData as $name) {
            $this->{$name} = NULL;
        }
    }

    function fetch($record) {
        // FETCH:
        //  Fetches a record from the DB by the ID in $record.
        //  Actions:
        //      Sets Instance Record Variables to match the DB record if it exists
        //  Returns:
        //      TRUE on Successful Fetch
        //      FALSE on No Record
        if(!is_numeric($record)) {
            $this->dbError("No such record $record.");
            return(FALSE);
            // error
        } else {
            $query = "SELECT * FROM " . $this->dbTable . " WHERE id = " . $record;

            if(DB::isError($result = $this->db->query($query))) {
                $this->dbError("Fetch::Result", $result);
                return(FALSE); // error in query
            }

            if(is_null($row = $result->fetchRow(DB_FETCHMODE_ASSOC))) {

                $this->dbError("Fetch::Row - No such row: $record");
                return(FALSE); // no record
            }

            foreach($row as $key => $value) {
                $this->{$key} = $value;
            }
            
            $result->free();

            return(TRUE);
        }
    }

    function getValuesArray() {
        $valArray = array();
        foreach($this->dbData as $name) {
            $valArray[$name] = $this->{$name};
        }
        return($valArray);
    }

    function commit($force=FALSE) {
        if(is_numeric($this->id) && $force === FALSE) {
            // UPDATE / EDIT
            $method = DB_AUTOQUERY_UPDATE;
            $where  = 'id=' . $this->id;
        } else {
            // INSERT / NEW
            $method = DB_AUTOQUERY_INSERT;
        }
  /*      if(DB::isError($queryHandle =  
            $this->db->autoPrepare($this->dbTable, $this->dbData, $method, $where))) {
            echo($queryHandle->getMessage());
        } 

        if(DB::isError($result = 
            $this->db->execute($queryHandle,$this->dbValues()))) {
            echo($result->getMessage());
        }      */
/*        $queryHandle = $this->db->autoPrepare($this->dbTable, $this->dbData, $method, $where);
        echo '<pre>'; print_r($queryHandle); echo '</pre>';
        echo 'DB_AUTOQUERY_INSERT'.DB_AUTOQUERY_INSERT."<br/>";
        echo 'method_'.$method."<br/>";
        echo 'where'.$where."<br/>";
        echo 'table:'.$this->dbTable;
        echo '<pre>'; print_r($this->getValuesArray()); echo '</pre>';
         exit; */
        if(DB::isError($result = 
            $this->db->autoExecute($this->dbTable, $this->getValuesArray(), $method, $where))) {
            $this->dbError("Commit::Result", $result);
            //echo($result->getMessage());
        }

        if($result === DB_OK) {
            if($method === DB_AUTOQUERY_INSERT) {
                return($this->id = $this->dbInsertId());
            } else {
                return(TRUE);
            }
        } else {
            // not ok
            return(FALSE);
        }
    }

    function input(&$inArray) {
        // check input variables and store locally
        foreach($inArray as $key => $value) {
            if(in_array($key, $this->dbData) && $key != 'id') {
                // WARNING, NO VALUE CHECKING
                $this->{$key} = $value;
            }
        }
    }

    function deleteRow($id = NULL, $var = 'id') {
        if(is_null($id))
            return(FALSE);

        $sql = "delete from " . $this->dbTable . " where $var=$id";
        if(DB::isError($result = $this->db->query($sql))) {
            $this->dbError("deleteRow::Result", $result);
            return(FALSE); // error in query
        } else {
            return(TRUE);
        }
    
    }


    function view($var = '') {
        if(is_string($var) && strlen($var) > 0 && in_array($var,$this->dbData)) {
            return($this->{$var});
        } else {
            // dump all
            foreach($this->dbData as $value) {
                echo("$value : " . $this->{$value} . "<br />");
            }
        }
    }

    function dbConnect() {
        global $_PDB;
        $this->db = &$_PDB;
        if(is_null($this->db) || is_null($this->db->connection) || $this->db->connection == 0) {
            if(DB::isError($this->db = DB::connect(DSN, FALSE)))
                $this->dbError("dbConnect::Connect", $this->db);
            // looks like it worked
            $this->db->setFetchMode(DB_FETCHMODE_ASSOC);
            return(TRUE);
        } else {
            // already connected
            return(TRUE);
        }
    }

    function dbValues() {
        $stack = array();

        foreach($this->dbData as $name) {
            $stack[] = $this->{$name};
        }

        return($stack);
    }

    function dbInsertId() {
        if(DB::isError($result = $this->db->query("SELECT LAST_INSERT_ID() AS id")))
            $this->dbError("dbInsertId::Result", $result);
            //die("dbInsertId: " .  $result->getMessage());
        $id = $result->fetchRow();
        $result->free();
        return($id['id']);
    }

    // addErrors($inError)
    // args: 
    //  $inError :: array or string
    // actions:
    //  add $inError to $errList (used by errors())
    // return:
    //   TRUE
    function addErrors($inError) {
        if(is_array($inError)) {
            // add array of errors
            foreach($inError as $varName => $error) {
                $this->errList[$varName] = $error;
            }
        } else if(is_string($inError)) {
            // add an error
            $this->errList[] = $inError;
        }
        return(TRUE);
    }

    // errors()
    // actions:
    //  if errors, print them, return TRUE (yes, there are errors)
    //  else return FALSE (no, there aren't errors)
    // returns:
    //  TRUE if error
    //  FALSE if no error
    function errors() {
        if(count($this->errList) > 0 ) {
            print("<div class='errors'>\r\n");
            foreach($this->errList as $varName => $error) {
                print("Error $varName: $error <br />\r\n");
            }
            print("</div>");
            return(TRUE);
        } else {
            return(FALSE);
        }
    }

    function clearErrors() {
        $count = count($this->errList);
        $this->errList = NULL;
        return($count);
    }

    function smartRedirect($location, $secure=FALSE) {
        if($_SERVER['HTTPS'] == 'on') {
            $proto = 'https';
        } else {
            $proto = ($secure) ? 'https' : 'http';
        }

        $server = $_SERVER['HTTP_HOST'];

        // URL's not starting with a / are invalid for redirects
        if(!(strpos($location,'/') === 0)) {
            $location = '/' . $location;
        }

        $this->redirect("$proto://$server$location");
    }

    function redirect($link=NULL) {
        if(!is_null($link)) {
            header("Location: $link");
            exit();
        } else {
            // lets build us a query string
            $proto = "http";
            if(!is_null($_SERVER['HTTPS'])) {
                if($_SERVER['HTTPS'] == 'on') {
                    $proto = "https";
                } 
            }
            $server = $_SERVER['HTTP_HOST'];
            $script = $_SERVER['PHP_SELF'];
            header("Location: $proto://$server$script");
            exit();
        }
    }

    function showView($file=NULL, $parent=FALSE, $extras=NULL) {
        extract($this->getValuesArray());

        if(!is_null($extras)) {
            extract($extras);
        }

        if(is_null($file))
            return(FALSE);

        if($parent) {
            $viewClass = $this->parentName;
        } else {
            $viewClass = $this->className;
        }

        require("views/$viewClass/$file");

    }

    function top($title = '') {
        if(!$this->widgetMode) {
            extract($GLOBALS);
            if($title != '') {
                $_lol_title = $title;
            }
            //if($title != '') {
            //    $secthdr = $title;
            //}
            //global $C, $ADMIN_AUTH, $lol_url_a, $secthdr, $PHP_SELF;
            if(!is_null($this->topFile)) {
                require($this->topFile);
            } else {
                print <<<END
<html>
<head>
    <title>$title</title>
    <link rel='stylesheet' media='screen' href='css/cc.css' type='text/css'>
</head>
<body>
END;
            }
        }
    }

    function bot() {
        if(!$this->widgetMode) {
            global $C;
            if(!is_null($this->botFile)) {
                require($this->botFile);
            } else {
                print <<<END
</body>
</html>
END;
            }
        }
    }

    function __wakeup() {
        $this->dbConnect();
    }

    // parses timestamp field from mysql db
    function myTimeStampToEpoch($time) {
        $year  = substr($time, 0, 4);
        $month = substr($time, 4, 2);
        $day   = substr($time, 6, 2);
        $hour  = substr($time, 8, 2);
        $min   = substr($time, 10, 2);
        $sec   = substr($time, 12, 2);
        return(mktime($hour, $min, $sec, $month, $day, $year));
    }

    function parseDate($var) {
        if(is_null($var))
            return("Never");
        $year  = substr($var, 2, 2);
        $month = substr($var, 5, 2);
        $day   = substr($var, 8, 2);
        $hour  = substr($var, 11, 2);
        $min   = substr($var, 14, 2);
        $sec   = substr($var, 17, 2);

        //return("$month/$day/$year@$hour:$min");
        return("$month/$day/$year");
    }

    function strShorten($str, $len = 17) {
        if(strlen($str) > $len) {
            return(substr($str, 0,$len) . "...");
        } else {
            return($str);
        }
    }

    // uses pageNum
    function setPage($page=0) {
        // need to reduce by 1 to get real page number
        // zero index vs one index
        if(is_numeric($page) && ($page > 0)) {
            $this->pageNum = $page-1;
        } else {
            $this->pageNum = 0;
        }
    }


    // uses setSortDir(), sortBy, dbData
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

    // uses pageNum and pageLimit
    function sqlLimit() {
        return(" LIMIT " . ($this->pageNum * $this->pageLimit) . ", " .
            $this->pageLimit );
    }

    // uses sortDir
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

    // baseLink(), sortDir, sortBy
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

    function baseLink() {
        return($_SERVER['PHP_SELF']);
    }

    function getSearchTerms($var=NULL, $case = FALSE) {
        if(is_null($var))
            return(FALSE);

        $isQuoted   = FALSE;
        $termList = array();
        $len = strlen($var);
        $lastIndex = 0;
        for($i = 0 ; $i < $len ; $i++) {
            switch($var[$i]) {
                case '"':
                    if($isQuoted) {
                        // end of quoted section
                        $termList[] = substr($var, $lastIndex + 1, $i - $lastIndex - 2);
                        $lastIndex = $i + 1;
                    } else {
                        // start of quoted section
                        $lastIndex = $i;
                    }
                    $isQuoted = !$isQuoted;
                    break;
                case ' ':
                    if(!$isQuoted) {
                        // if we're not quoted, this is a split
                        $word = trim(substr($var, $lastIndex, $i - $lastIndex));
                        // make sure the term isn't empty
                        if(!empty($word))
                            $termList[] = $word;
                        $lastIndex = $i + 1;
                    }
                    break;
            }
        }

        if(!$isQuoted) {
            if($word = trim(substr($var, $lastIndex, $i - $lastIndex))) {
                $termList[] = $word;
            }
        }
        
        // handle case -- most searches shouldn't be case sensitive
        if(!$case) {
            foreach($termList as $key => $val) {
                $termList[$key] = strtolower($val);
            }
        }

        if(count($termList) > 0) {
            return($termList);
        } else {
            return(FALSE);
        }
    }

    function printPagerLinks($links, $lastPage, $current) {
        foreach($links as $key => $link) {
            $links[$key] = ereg_replace('&nbsp;','',$link);
        }
        extract($links);
        $pages = explode('|',$pages);
        $pageString = implode('&nbsp;&nbsp;|&nbsp;&nbsp;',$pages);
        
        //print("<strong>Page $current of $lastPage.</strong><br />");
        //print("<br />");

        if($first == '') {
            $first = "[1]";
        }
        if($last == '') {
            $last = "[$lastPage]";
        }
        if($next == '') {
            $next = '&raquo;';
        }
        if($back == '') {
            $back = '&laquo;';
        }

        $next = ereg_replace('&raquo;', 'Next <span style=\'font-size: 150%\'>&raquo;</span>', $next);
        $back = ereg_replace('&laquo;', '<span style=\'font-size: 150%\'>&laquo;</span> Previous', $back);

        if($lastPage != 1) {
            print("<table width='95%' align='center' cellpadding='0' cellspacing='0'>");
            print("<tr>");
            print("<td width='10%' align='center'>$first&nbsp;&nbsp;</td>");
            print("<td width='15%' align='center'>$back</td>");
            print("<td width='45%' align='center'>$pageString</td>");
            print("<td width='15%' align='center'>$next</td>");
            print("<td width='10%' align='center'>&nbsp;&nbsp;$last</td>");
            print("</tr>");
            print("</table>");
        }
    }

    function getRecordSetString($page, $count,  $label=NULL, $perPage=NULL, $align='left') {
        if(is_null($perPage))
            $perPage = 20;

        if(is_null($label))
            $label = 'Records';

        $page -= 1;

        $start = ($page * $perPage) + 1;
        $end   = ($page * $perPage) + $perPage;
        if($end > $count) 
            $end = $count;
        
        return("<div align='$align'><strong>Displaying $start - $end of $count $label</strong></div>");
        
    }

    function sendMail($p=NULL) {
        $headers = array();
        $mime = new Mail_mime();
        // RiechesBaird Production Server -- Doesn't listen on loopback
        //$z = array( 'host' => '192.168.111.124' );
        //$z = array( 'host' => '192.168.111.92' );
        //$z = array( 'host' => '192.168.111.90' );
	$z = array ( 'host' => '127.0.0.1' );

        if(is_null($p)) {
            // we need some paramters to email.
            $this->addErrors(array("sendMail requires parameter array as argument."));
            return(FALSE);
        }

        if(is_null($p['bodyTXT']) && is_null($p['bodyHTML'])) {
            // empty body
            $this->addErrors("Missing Body for Email Transmission.");
            return(FALSE);
        } else {
            $mime->setTXTBody($p['bodyTXT']);
            $mime->setHTMLBody($p['bodyHTML']);
        }

        if(is_null($p['To'])) {
            // empty recipient (list)
            $to = $this->email;
            return(FALSE);
        } else {
            $to = $p['To'];
        }
        $headers['To'] = $to;

        if(is_null($p['Subject'])) {
            return(FALSE);
        } else {
            //$mime->setSubject($p['Subject']);
            $headers['Subject'] = $p['Subject'];
        }

        // From Header -- if it's a string, then use it, else use default
        if(is_string($p['From'])) {
            $headers['From'] = $p['From'];
            //$mime->setFrom($p['from']);
        } else {
            $headers['From'] = 'webmaster@landscapeonline.com';
        }

        if(is_string($p['Reply-To'])) {
            $headers['Reply-To'] = $p['Reply-To'];
        }

        $body = $mime->get();
        $hdrs = $mime->headers($headers);

        $mail =& Mail::factory('smtp', $z);
        $result = $mail->send($to, $hdrs, $body);

        if(!($result === TRUE)) {
            print("<div class='errors'>" . $result->getMessage() . "</div>");
            return(FALSE);
        } else {
            return(TRUE);
        }
    }

    function stateSelectionWidget($state = NULL, $widgetName = 'state') {
        $stateHash = array(
            'AL' => 'AAlabama',
            'AK' => 'Alaska',
            'AB' => 'Alberta',
            'AS' => 'American Samoa',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'BC' => 'British Columbia',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'DC' => 'District of Columbia',
            'FM' => 'Federated States of Micronesia',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'GU' => 'Guam',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MB' => 'Manitoba',
            'MH' => 'Marshall Islands',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NB' => 'New Brunswick',
            'NF' => 'Newfoundland',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'MP' => 'Northern Mariana Islands',
            'NT' => 'Northwest Territories',
            'NS' => 'Nova Scotia',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'ON' => 'Ontario',
            'OR' => 'Oregon',
            'PW' => 'Palau',
            'PA' => 'Pennsylvania',
            'PE' => 'Prince Edward Island',
            'PR' => 'Puerto Rico',
            'QC' => 'Quebec',
            'RI' => 'Rhode Island',
            'SK' => 'Saskatchewan',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VI' => 'Virgin Islands',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming',
            'YT' => 'Yukon'
        );

        print("<select name='{$widgetName}'>");
        foreach($stateHash as $abbr => $name) {
            $s = ($abbr == $state) ? 'selected' : '';
            print("<option value='{$abbr}' $s>{$name}</option>");
        }
        print("</select>");
    }

    function ccVerify($ccn) {
    }

    function getPasswordToken() {
        $sql = "UPDATE user_index SET number=number+1";
        if(DB::isError($result = $this->db->query($sql))) {
            $this->dbError("getPasswordToken::Update", $result);
            return(FALSE); // error in query
        }

        unset($result);

        $sql = "SELECT * FROM user_index";
        if(DB::isError($result = $this->db->getAll($sql))) {
            $this->dbError("getPasswordToken::Select", $result);
            return(FALSE); // error in query
        }

        // there should only be one row, soooo..
        return(substr($result[0]['number'],1,6));
    }

    function getNextPasswordToken() {
        // use this to find out what the next password -should be-
        $sql = "SELECT * FROM user_index";
        if(DB::isError($result = $this->db->getAll($sql))) {
            $this->dbError("getNextPasswordToken::Select", $result);
            return(FALSE); // error in query
        }
        return(substr($result[0]['number'],1,6));
    }
}

?>
