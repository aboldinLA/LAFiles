<?php

require_once("template_class.php");

class xlist extends template_class {
    // meta
    var $parentName;
    var $errList;

    // columns
    var $id;
    var $idAccount;
    var $idParent;
    var $sub_number;
    var $name;
    

    function xlist() {
        // table name
        $table   = "xlist";
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

    function fetchXlistArray($csList=NULL) {
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

        $query= "select * from " . $this->dbTable;

        if(!is_null($list)) {
            $query .= " where find_in_set(id,'$list')";
        }


        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("getXlistArray::query", $result);
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

    function fetchXlistWholesaleParentArray() {
        $query  = "select * from " . $this->dbTable . " where idParent=0 AND ";
        $query .= " find_in_set(id,'31,36,35,38,49') order by name";

        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("getXlistParentArray::query", $result);
            return(FALSE);
        }
        return($result);
    }

    function fetchXlistParentArray() {
        $query = "select * from " . $this->dbTable . " where idParent=0 order by name";
        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("getXlistParentArray::query", $result);
            return(FALSE);
        }
        return($result);
    }

    function fetchXlistParentArray2() {
        $query = "select * from " . $this->dbTable . " where idParent=0 and idAccount=0 order by name";
        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("getXlistParentArray::query", $result);
            return(FALSE);
        }
        return($result);
    }

    function fetchXlistParentArray3() {
        $query = "select * from " . $this->dbTable . " where idParent=0 and idAccount=1 order by name";
        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("getXlistParentArray::query", $result);
            return(FALSE);
        }
        return($result);
    }

    function fetchXlistChildrenByName($name) {
        // used by wholesale and retail 
        $query = "select * from {$this->dbTable} where name like '%{$name}%' and (idParent<>34 and idParent<>35) order by name"; 
        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("getXlistParentArray::query", $result);
            return(FALSE);
        }
        return($result);
    }


    function fetchXlistChildrenArray($idParent) {
        if(!is_numeric($idParent)) {
            return(FALSE);
        }
        $query = "select * from " . $this->dbTable . " where idParent={$idParent} order by name";
        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError("getXlistParentArray::query", $result);
            return(FALSE);
        }
        return($result);
    }


    function displayXlistSelectionWidget($xlist, $vt=NULL) {
        switch($vt) {
            case 1:
            case 2:
            case 3:
                $this->displayManufactureXlistSelection2($xlist);
                // wholesale
                break;
            case 4:
                $this->displayWholesaleXlistSelection($xlist);
                // wholesale
                break;
            case 5:
                $this->displayXlistSelectionByName($xlist, 'Retail');
                //$this->displayRetailXlistSelection($xlist);
                // retail
                break;
            case 6:
                $this->displayGrowerXlistSelection($xlist);
                // growers
                break;
            case 7:
                $this->displayProviderXlistSelection($xlist);
                // providers
                break;				
        }   
    }

    function displayXlistSelectionByName($xlist, $name) {
        if(!is_array($xlist)) {
            $xlist = array();
        }
        ?>
        <table width='100%' cellpadding=2 cellspacing=0>
            <tr>
                <td colspan='2'> <a name='topList'><h2><?= ucwords($name) ?> Categories</h2></a> </td>
            </tr>
            <tr>                                                                        
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>         
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>                                                                       
        <?
            $children  = $this->fetchXlistChildrenByName($name);
            //$children  = $this->fetchXlistChildrenArray(34);                    
            $pChildren = count($children);                                                  
            $tChildren = array_slice($children, 0, floor($pChildren/2));                    
            $bChildren = array_slice($children, floor($pChildren/2));                       
            ?>

            <tr>                                                                            
                <td colspan='2'>                                                            
                    <a name='id<?= $obj['id'] ?>'><h2><?= $obj['name'] ?></h2></a>          
                </td>                                                                       
            </tr>                                                                           
            <?                                                                              
                for($i = 0 ; $i < ceil($pChildren/2) ; $i++) { 
                    $s1 = (in_array($tChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                    $s2 = (in_array($bChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                ?>                                                                          
                                                                                            
                <tr>                                                                        
                    <td>                                                                    
                    <? if(array_key_exists($i, $tChildren)) {                               
                    ?>                                                                      
                        <input type='checkbox' name='xlist[]' id='xlist_<?= $tChildren[$i]['id'] ?>' value='<?= $tChildren[$i]['id']?>' <?= $s1 ?> /> <?= $tChildren[$i]['name'] ?>
                    <? } else { ?>                                                          
                        &nbsp;                                                              
                    <? }?>                                                                  
                    </td>                                                                   
                                                                                            
                    <td>                                                                    
                        <input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?>
                    </td>                                                                   
                </tr>                                                                       
                <? } ?>
            <tr>                                                                        
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>         
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>                                                                       
        </table>
        <?
    }

    function displayGrowerXlistSelection($xlist) {
        if(!is_array($xlist)) {
            $xlist = array();
        }
        ?>
        <table width='100%' cellpadding=2 cellspacing=0>
            <tr>
                <td colspan='2'> <a name='topList'><h2>Grower Categories</h2></a> </td>
            </tr>
            <tr>                                                                        
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>         
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>                                                                       
        <?
            $children  = $this->fetchXlistChildrenArray(34);                    
            $pChildren = count($children);                                                  
            $tChildren = array_slice($children, 0, floor($pChildren/2));                    
            $bChildren = array_slice($children, floor($pChildren/2));                       
            ?>                                                                              
            <tr>                                                                            
                <td colspan='2'>                                                            
                    <a name='id<?= $obj['id'] ?>'><h2><?= $obj['name'] ?></h2></a>          
                </td>                                                                       
            </tr>                                                                           
            <?                                                                              
                for($i = 0 ; $i < ceil($pChildren/2) ; $i++) {                              
                    $s1 = (in_array($tChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                    $s2 = (in_array($bChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                ?>                                                                          
                                                                                            
                <tr>                                                                        
                    <td>                                                                    
                    <? if(array_key_exists($i, $tChildren)) {                               
                    ?>                                                                      
                        <input type='checkbox' name='xlist[]' id='xlist_<?= $tChildren[$i]['id'] ?>' value='<?= $tChildren[$i]['id']?>' <?= $s1 ?> /> <?= $tChildren[$i]['name'] ?>
                    <? } else { ?>                                                          
                        &nbsp;                                                              
                    <? }?>                                                                  
                    </td>                                                                   
                                                                                            
                    <td>                                                                    
                        <input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?>
                    </td>                                                                   
                </tr>                                                                       
                <? } ?>
            <tr>                                                                        
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>         
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>                                                                       
        </table>
        <?
    }


    function displayProviderXlistSelection($xlist) {
        if(!isset($xlist)) {
            $xlist = array();
        }

        $parents = $this->fetchXlistParentArray3();

        $pCount = count($parents);
        $tParents = array_slice($parents, 0, $pCount/2);
        $bParents = array_slice($parents, $pCount/2);  ?>
        <table width='100%' cellpadding=2 cellspacing=0 border=0>
            <tr><td colspan='2'> <a name='topList'><h2>Test Categories</h2></a> </td></tr>
        <? 
            for($i = 0 ; $i < ceil($pCount/2) ; $i++) {
                print("<tr>");
                print("<td width='50%'><a href='#id{$tParents[$i]['id']}'><strong>{$tParents[$i]['name']}</strong></a></td>");
                print("<td><a href='#id{$bParents[$i]['id']}'><strong>{$bParents[$i]['name']}</strong></a></td>");
                print("</tr>");
            }
        ?>
            <tr><td colspan='2'>&nbsp;</td></tr>
            <tr><td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td></tr>
        <?
        foreach($parents as $row => $obj) {
            $children  = $this->fetchXlistChildrenArray($obj['id']);
            $pChildren = count($children);                                                  
            $tChildren = array_slice($children, 0, floor($pChildren/2));                    
            $bChildren = array_slice($children, floor($pChildren/2));                       
            ?>                                                                              
            <tr><td class='cellhead' colspan='2'><a name='id<?= $obj['id'] ?>'><h3><?= $obj['name'] ?></h3></a></td></tr>
            <tr><td colspan='2'><hr noshade size='-1' /></td></tr>
            <?                                                                              
                for($i = 0 ; $i < ceil($pChildren/2) ; $i++) {                              
                    $s1 = (in_array($tChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                    $s2 = (in_array($bChildren[$i]['id'],$xlist)) ? 'checked' : '';         

                    ?><tr><td><?

                    if(array_key_exists($i, $tChildren)) { 
                        ?><input type='checkbox' name='xlist[]' id='xlist_<?= $tChildren[$i]['id'] ?>' value='<?= $tChildren[$i]['id']?>' <?= $s1 ?> /> <?= $tChildren[$i]['name'] ?><?
                    } else { 
                        ?>&nbsp;<? 
                    }?>
                    </td><td><input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?></td></tr>
                <? }
            ?><tr><td colspan='2'><a href='#topList'><h4>Back to Top</h4></a></td></tr><?
        }
        ?><tr><td colspan='2'><hr noshade size='-1' /></td></tr>
        <tr><td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td></tr></table>
        <?
    }
	
    function displayWholesaleXlistSelection($xlist) {
        if(!is_array($xlist)) {
            $xlist = array();
        }
        ?>
        <table width='100%' cellpadding=2 cellspacing=0>
            <tr>
                <td colspan='2'> <a name='topList'><h2>Wholesale Categories</h2></a> </td>
            </tr>
            <tr>                                                                        
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>         
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>                                                                       
        <?
            $children  = $this->fetchXlistChildrenArray(35);                    
            $pChildren = count($children);                                                  
            $tChildren = array_slice($children, 0, floor($pChildren/2));                    
            $bChildren = array_slice($children, floor($pChildren/2));                       
            ?>                                                                              
            <tr>                                                                            
                <td colspan='2'>                                                            
                    <a name='id<?= $obj['id'] ?>'><h2><?= $obj['name'] ?></h2></a>          
                </td>                                                                       
            </tr>                                                                           
            <?                                                                              
                for($i = 0 ; $i < ceil($pChildren/2) ; $i++) {                              
                    $s1 = (in_array($tChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                    $s2 = (in_array($bChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                ?>                                                                          
                                                                                            
                <tr>                                                                        
                    <td>                                                                    
                    <? if(array_key_exists($i, $tChildren)) {                               
                    ?>                                                                      
                        <input type='checkbox' name='xlist[]' id='xlist_<?= $tChildren[$i]['id'] ?>' value='<?= $tChildren[$i]['id']?>' <?= $s1 ?> /> <?= $tChildren[$i]['name'] ?>
                    <? } else { ?>                                                          
                        &nbsp;                                                              
                    <? }?>                                                                  
                    </td>                                                                   
                                                                                            
                    <td>                                                                    
                        <input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?>
                    </td>                                                                   
                </tr>                                                                       
                <? } ?>
            <tr>                                                                        
                <td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td>         
                <td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td>
            </tr>                                                                       
        </table>
        <?
    }


    function displayManufactureXlistSelection2($xlist) {
        if(!isset($xlist)) {
            $xlist = array();
        }

        $parents = $this->fetchXlistParentArray2();

        $pCount = count($parents);
        $tParents = array_slice($parents, 0, $pCount/2);
        $bParents = array_slice($parents, $pCount/2);  ?>
        <table width='100%' cellpadding=2 cellspacing=0 border=0>
            <tr><td colspan='2'> <a name='topList'><h2>Test Categories</h2></a> </td></tr>
        <? 
            for($i = 0 ; $i < ceil($pCount/2) ; $i++) {
                print("<tr>");
                print("<td width='50%'><a href='#id{$tParents[$i]['id']}'><strong>{$tParents[$i]['name']}</strong></a></td>");
                print("<td><a href='#id{$bParents[$i]['id']}'><strong>{$bParents[$i]['name']}</strong></a></td>");
                print("</tr>");
            }
        ?>
            <tr><td colspan='2'>&nbsp;</td></tr>
            <tr><td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td></tr>
        <?
        foreach($parents as $row => $obj) {
            $children  = $this->fetchXlistChildrenArray($obj['id']);
            $pChildren = count($children);                                                  
            $tChildren = array_slice($children, 0, floor($pChildren/2));                    
            $bChildren = array_slice($children, floor($pChildren/2));                       
            ?>                                                                              
            <tr><td class='cellhead' colspan='2'><a name='id<?= $obj['id'] ?>'><h3><?= $obj['name'] ?></h3></a></td></tr>
            <tr><td colspan='2'><hr noshade size='-1' /></td></tr>
            <?                                                                              
                for($i = 0 ; $i < ceil($pChildren/2) ; $i++) {                              
                    $s1 = (in_array($tChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                    $s2 = (in_array($bChildren[$i]['id'],$xlist)) ? 'checked' : '';         

                    ?><tr><td><?

                    if(array_key_exists($i, $tChildren)) { 
                        ?><input type='checkbox' name='xlist[]' id='xlist_<?= $tChildren[$i]['id'] ?>' value='<?= $tChildren[$i]['id']?>' <?= $s1 ?> /> <?= $tChildren[$i]['name'] ?><?
                    } else { 
                        ?>&nbsp;<? 
                    }?>
                    </td><td><input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?></td></tr>
                <? }
            ?><tr><td colspan='2'><a href='#topList'><h4>Back to Top</h4></a></td></tr><?
        }
        ?><tr><td colspan='2'><hr noshade size='-1' /></td></tr>
        <tr><td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td></tr></table>
        <?
    }


    function displayDefaultSelectionWidget(&$xlist) {
        if(!isset($xlist)) {
            $xlist = array();
        }

        $parents = $this->fetchXlistParentArray();

        $pCount = count($parents);
        $tParents = array_slice($parents, 0, $pCount/2);
        $bParents = array_slice($parents, $pCount/2);  ?>
        <table width='100%' cellpadding=2 cellspacing=0 border=0>
            <tr><td colspan='2'> <a name='topList'><h2>Categories</h2></a> </td></tr>
        <? 
            for($i = 0 ; $i < ceil($pCount/2) ; $i++) {
                print("<tr>");
                print("<td width='50%'><a href='#id{$tParents[$i]['id']}'><strong>{$tParents[$i]['name']}</strong></a></td>");
                print("<td><a href='#id{$bParents[$i]['id']}'><strong>{$bParents[$i]['name']}</strong></a></td>");
                print("</tr>");
            }
        ?>
            <tr><td colspan='2'>&nbsp;</td></tr>
            <tr><td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td></tr>
        <?
        foreach($parents as $row => $obj) {
            $children  = $this->fetchXlistChildrenArray($obj['id']);
            $pChildren = count($children);                                                  
            $tChildren = array_slice($children, 0, floor($pChildren/2));                    
            $bChildren = array_slice($children, floor($pChildren/2));                       
            ?>                                                                              
            <tr><td class='cellhead' colspan='2'><a name='id<?= $obj['id'] ?>'><h3><?= $obj['name'] ?></h3></a></td></tr>
            <tr><td colspan='2'><hr noshade size='-1' /></td></tr>
            <?                                                                              
                for($i = 0 ; $i < ceil($pChildren/2) ; $i++) {                              
                    $s1 = (in_array($tChildren[$i]['id'],$xlist)) ? 'checked' : '';         
                    $s2 = (in_array($bChildren[$i]['id'],$xlist)) ? 'checked' : '';         

                    ?><tr><td><?

                    if(array_key_exists($i, $tChildren)) { 
                        ?><input type='checkbox' name='xlist[]' id='xlist_<?= $tChildren[$i]['id'] ?>' value='<?= $tChildren[$i]['id']?>' <?= $s1 ?> /> <?= $tChildren[$i]['name'] ?><?
                    } else { 
                        ?>&nbsp;<? 
                    }?>
                    </td><td><input type='checkbox' name='xlist[]' id='xlist_<?= $bChildren[$i]['id'] ?>' value='<?= $bChildren[$i]['id']?>' <?= $s2 ?> /> <?= $bChildren[$i]['name'] ?></td></tr>
                <? }
            ?><tr><td colspan='2'><a href='#topList'><h4>Back to Top</h4></a></td></tr><?
        }
        ?><tr><td colspan='2'><hr noshade size='-1' /></td></tr>
        <tr><td><a href='cancel.php'><img src='/imgz/vendor/cancel_contact.gif' border='0' /></a></td><td align='right'><input type='image' src='/imgz/vendor/continue.gif' border='0' /></td></tr></table>
        <?
    }
}
?>
