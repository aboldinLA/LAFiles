<?php



require_once("template_class.php");

require_once("ylist_layersmenu.php");

require_once("template.inc.php");



class ylist_class extends template_class {

    // meta

    var $parentName;

    var $errList;



    // columns

    var $id;

    var $idAccount;

    var $idParent;

    var $sub_number;

    var $name;

    



    function ylist_class() {

        // table name

        $table   = "ylist";

        // list of db columns

        $columns = array(

            'id',

            'idAccount',

            'idParent',

            'sub_number',

            'name'

        );

        $this->instantiate($table,$columns,$record);

    }



    function action($action = 'default', $vars = NULL) {

    }



    function displayLayers($yList = NULL) {

        global $include_path, $file_path;

        if(is_null($yList)) {

            $yList = array();

        }



        $menu   = new YlistLayersMenu();

        $menu->setDirroot($include_path);

        $menu->setLibjsdir("libjs/"); 

        $menu->setImgdir($file_path . "web/image/treemenu");

        $menu->setImgwww("/image/treemenu");

        $menu->setMenuStructureString($this->genLayersString($yList));

        $menu->parseStructureForMenu('ylist');

        include("libjs/layersmenu-browser_detection.js");

        print('<script language="JavaScript" type="text/javascript">');

        include("libjs/layerstreemenu-cookies.js");

        print('</script>');



        print('<center><div width="75%" align="left">');

        print($menu->newTreeMenu('ylist'));

        print('</div></center>');

        return(TRUE);

    }



    function genLayersString($yList = NULL) {

        // generate a layers string for the ylistlayersclass

        if(is_null($yList)) {

            $yList = array();

        }



        $query = "select * from " . $this->dbTable . " where idParent=0 order by name";

        if(DB::isError($result = $this->db->getAll($query))) {

            $this->dbError("genLayersString::query", $result);

        }



        $list = "";

        foreach($result as $row => $a) {

            // if parent is checked, check all sub categories.

            $all = in_array($a['id'], $yList) ? TRUE : FALSE ;

            $list .= implode('|',array('.',$a['name'],$a['id'],'ylist[]',($all) ? 1 : 0,0)) . "\n";

            $list .= $this->genSubString($a['id'], $all, $yList) ;

        }

        return($list);

    }



    function genSubString($idParent, $all, $yList) {

        $query = "select * from " . $this->dbTable . " where idParent=$idParent ORDER BY name";

        if(DB::isError($result = $this->db->getAll($query))) {

            $this->dbError("genSubString::query", $result);

        }



        $rows = "";

        foreach($result as $rowNum => $row) {

            if($all || in_array($row['id'],$yList)) {

                $s = 1;

            } else {

                $s = 0;

            }

            $rows .= implode('|', array('..',ucwords(rtrim($row['name'])),$row['id'],'ylist[]',$s,0)) . "\n";

        }

        return($rows);

    }



    function displayAll($yList = NULL) {

        if(is_null($yList)) {

            $yList = array();

        }



        $result = $this->getParentList();



        /*

        $query = "select * from " . $this->dbTable . " where idParent=0";

        if(DB::isError($result = $this->db->getAll($query))) {

            $this->dbError("displayAll::parent query", $results);

        }

        */



        $c = 0;

        print("<table width='100%' border='0' cellpadding='0' cellspacing='0'>");

        foreach($result as $row => $ar) {

            if($c == 0) {

                // new row

                print("<tr valign='top'>");

            } 

            print("<td>");

            if(in_array($ar['id'],$yList)) {

                $all = TRUE;

            } else {

                $all = FALSE;

            }

            $this->displayParent($ar['id'], $ar['name'], $all, $yList);

            print("</td>");

            if($c++ > 2) {

                // 3 columns, new column time

                $c = 0;

                print("</tr>");

            }

        }



        if($c != 0)

                print("</tr>");



        print("</table>");

    }



    function displayParent($parent, $name,  $all, $ylist) {

        $query = "select * from " . $this->dbTable . " where idParent=$parent order by name";



        if(DB::isError($result = $this->db->getAll($query))) {

            $this->dbError("displayParent::query", $results);

        }



        if(in_array($parent, $ylist)) {

            $c = 'checked';

        } else {

            $c = '';

        }



        print("<table border='0' cellspacing='0' cellpadding='0'>");

        print("<tr><td>");

        print("<input type=checkbox name='ylist[]' value='$parent' $c />");

        print("</td><td><strong>$name</strong></td></tr>");

        foreach($result as $row => $ar) {

            if(in_array($ar['id'], $ylist) || $all) {

                $c = 'checked';

            } else {

                $c = '';

            }

            print("<tr>");

            print("<td><input type=checkbox name='ylist[]' value='" . $ar['id'] . "' $c /></td>");

            print("<td>" . ucwords($ar['name']) . "</td>");

            print("</tr>");

        }

        print("</table>");

    }





    function getParentList($justId=FALSE) {

        if($justId) {

            $query = "select id from " . $this->dbTable . " where idParent=0 order by name";

        } else {

            $query = "select * from " . $this->dbTable . " where idParent=0 order by name";

        }

        if(DB::isError($result = $this->db->getAll($query))) {

            print($query);

            $this->dbError("getParentList::query", $results);

        } else {

            if($justId) {

                foreach($result as $datum) {

                    $return[] = $datum['id'];

                }

                return($return);

            } else {

                return($result);

            }

        }

    }



    function getChildren($parent, $justId=FALSE) {

        if($justId) {

            $query = "select id from " . $this->dbTable . " where idParent=$parent order by name";

        } else {

            $query = "select * from " . $this->dbTable . " where idParent=$parent order by name";

        }

        if(DB::isError($result = $this->db->getAll($query))) {

            $this->dbError("getParentList::query", $results);

        } else {

            if($justId) {

                foreach($result as $datum) {

                    $return[] = $datum['id'];

                }

                return($return);

            } else {

                return($result);

            }

        }

    }



    function expandParents($ylist) {

        if(!is_array($ylist)) {

            // houston, we have a problem

            return(FALSE);

        }



        $parents = $this->getParentList(TRUE);



        foreach($ylist as $id) {

            if(in_array($id, $parents)) {

                foreach($this->getChildren($id, TRUE) as $child) {

                    $children[] = $child;

                }

            } else {

                $children[] = $id;

            }

        }

        

        return(array_unique($children));

    }





    function fullYlistArray($justId=FALSE) {

        if($justId) {

            $query = "select id from " . $this->dbTable . " order by name";

        } else {

            $query = "select * from " . $this->dbTable . " order by name";

        }

        if(DB::isError($result = $this->db->getAll($query))) {

            print($query);

            $this->dbError("fullYlistArray::query", $results);

        } else {

            if($justId) {

                foreach($result as $datum) {

                    $return[] = $datum['id'];

                }

                return($return);

            } else {

                return($result);

            }

        }

    }



    function fullExpandParents($ylist) {

        $parents = $this->getParentList(TRUE);



        foreach($this->fullYlistArray() as $ar) {

            $full[$ar['id']] = $ar;

        }



        foreach($ylist as $id) {

            if(in_array($id,$parents)) {

                // this is a parent

                foreach($this->getChildren($id, FALSE) as $child) {

                    $children[] = $child;

                }

            } else {

                // need to getten zie full info on deez.

                $children[] = $full[$id];

            }

        }

        return($children);

    }



    function displayYlist($list) {

        $ylist = $this->fullExpandParents($list);

        foreach($ylist as $dd) {

            $sortList[$dd['id']] = trim($dd['name']);

        }



        array_unique($sortList);

        asort($sortList, SORT_STRING);



        foreach($sortList as $key => $name) { 

            print(ucwords($name) . "<br />");

        }

    }



    function fetchYlistArray($csList=NULL) {

        if(is_null($csList)) {

            $list = NULL;

            // return them all

        } else if(is_string($csList)) {

            // comma seperated list

            $list = $csList;

        } else if(is_numeric($csList)) {

            $list = $csList;

            // single id

        } else if(is_array($csList)) {

            $list = implode(',',$csList);

            // already in an array

        }



        $query= "select * from " . $this->dbTable . " where find_in_set(id,'$list')";



        if(DB::isError($result = $this->db->getAll($query))) {

            $this->dbError("getYlistArray::query", $result);

            return(FALSE);

        }



        if(!is_array($result)) {

            return(array(array('name' => 'None')));

        } else if(count($result) == 0) {

            return(array(array('name' => 'None')));

        } else {

            return($result);

        }

    }



/*

    // FIXME

    // this should be in another class.

    function findSubscribers($vars, $boolYlist='OR',$boolJoin='OR',$boolType='OR') {

        $query = "select id from subcribe where ";

        $yList = $this->getYlistSelectString($this->expandParents($vars['ylist']),$boolYlist);

        $typeBiz = $this->getTypeBizSelectString($vars['biz_id'],$boolType);

        $sql = "$query $yList $boolJoin $typeBiz";

    }



    function getYlistSelectString($ylist, $boolean='OR') {

        $stack = array();

        if(!is_array($ylist) || count($ylist) < 1) {

            return('1');

        }



        foreach($ylist as $yid) {

            $stack[] = 'find_in_set('$yid',ylist)';

        }



        return('( ' . implode(" $boolean ", $stack) . ' )');

    }



    // FIXME

    // this should be in another class.

    function getTypeBizSelectString($typeBiz,$boolean='OR') {

        $stack = array();

        if(!is_array($typeBiz) || count($typeBiz) < 1) {

            return('1');

        }

        foreach($typeBiz as $tid) {

            $stack[] = 'find_in_set('$tid',type_biz)';

        }

        return('( ' . implode(" $boolean ", $stack) . ' )');

    }

    */





   /* function displayList($bizList = NULL, $proType = NULL, $format = 'normal') {

        $table = 'type_biz';

        if(is_null($bizList)) {

            $bizList = array();

        } else if(!is_array($bizList)) {

            if(is_string($bizList) && strlen($bizList) > 0) {

                $list = $bizList;

                $bizList = explode(',', $list);

            } else {

                $bizList = array();

            }

        } 



        switch($proType) {

            case 'd':

                $weight = 6;

                $parent = 0;

                break;

            case 'c':

                $weight = 6;

                $parent = 1;

                break;

            default:

                break;

        }



        if($format != 'normal' && $weight > 0) {

            $basequery  = "SELECT id, name FROM " . $table . " WHERE idParent = $parent";

            $pQuery = $basequery . " AND weight >= $weight ORDER BY weight DESC, id";

            $query  = $basequery . " AND weight <  $weight ORDER BY weight DESC, name";

        } else {

            $query  = "SELECT id, name FROM " . $table . " ORDER BY name";

        }



        if(isset($pQuery)) {

            if(DB::isError($results = $this->db->getAll($pQuery))) {

                $this->dbError("displayList::pQuery", $results);

            }



            print('<table width="100%" border="0" cellpadding="0" cellspacing="0">');

            foreach($results as $rowNum => $row) {

                if(in_array($row['id'], $bizList))

                    $t = 'checked';

                else

                    $t = '';

                print('<tr><td width="10%" align="left">');

                print('<input type="checkbox" name="biz_id[]" ' . $t);

                print(' value="' . $row['id'] . '" /></td>');

                print('<td align="left"><strong>' . $row['name'] . '</strong></td></tr>');

            }

            print('</table><br>');

        }





        if(DB::isError($qresults = $this->db->getAll($query))) {

            $this->dbError("displayList::Query", $results);

        }



        print('<table width="100%" border="0" cellpadding="0" cellspacing="0">');

        foreach($qresults as $rowNum => $row) {

            if(in_array($row['id'], $bizList))

                $t = 'checked';

            else

                $t = '';

            print('<tr><td width="10%" align="left">');

            print('<input type="checkbox" name="biz_id[]" ' . $t);

            print(' value="' . $row['id'] . '"></td>');

            print('<td align="left">' . $row['name'] . '</td></tr>');

        }

        echo('</table><br>');

    } */

}

?>

