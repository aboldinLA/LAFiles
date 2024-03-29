<?php

// PHP Layers Menu 3.0.0 (C) 2001-2003 Marco Pratesi (marco at telug dot it)



/**

* This file contains the code of the LayersMenu class.

* @package PHPLayersMenu

*/



/**

* You need PEAR only if you want to use the DB support.

*/

//require_once "PEAR.php";

/**

* You need DB.php only if you want to use the DB support.

*/

//require_once "DB.php";



/**

* This is the base class of the PHP Layers Menu system.

*

* This class depends on the PEAR conforming version of the PHPLib Template class

*

* @version 3.0.0

* @package PHPLayersMenu

*/

class YlistLayersMenu {



/**

* The name of the package

* @access private

* @var string

*/

var $_packageName;

/**

* The version of the package

* @access private

* @var string

*/

var $version;

/**

* The copyright of the package

* @access private

* @var string

*/

var $copyright;

/**

* The author of the package

* @access private

* @var string

*/

var $author;



/**

* URL to be prepended to the menu links

* @access private

* @var string

*/

var $prependedUrl = "";

/**

* Do you want that code execution halts on error?

* @access private

* @var string

*/

var $haltOnError = "yes";



/**

* The base directory where the package is installed

* @access private

* @var string

*/

var $dirroot;

/**

* The "lib" directory of the package

* @access private

* @var string

*/

var $libdir;

/**

* The "libjs" directory of the package

* @access private

* @var string

*/

var $libjsdir;

/**

* The http path corresponding to libjsdir

* @access private

* @var string

*/

var $libjswww;

/**

* The directory where images related to the menu can be found

* @access private

* @var string

*/

var $imgdir;

/**

* The http path corresponding to imgdir

* @access private

* @var string

*/

var $imgwww;

/**

* The directory where templates can be found

* @access private

* @var string

*/

var $tpldir;

/**

* The template to be used for the first level menu of a horizontal menu.

*

* The value of this variable is significant only when preparing

* a horizontal menu.

*

* @access private

* @var string

*/

var $horizontalMenuTpl;

/**

* The template to be used for the first level menu of a vertical menu.

*

* The value of this variable is significant only when preparing

* a vertical menu.

*

* @access private

* @var string

*/

var $verticalMenuTpl;

/**

* The template to be used for submenu layers

* @access private

* @var string

*/

var $subMenuTpl;

/**

* The string containing the menu structure

* @access private

* @var string

*/

var $menuStructure;

/**

* The character used in the menu structure format to separate fields of each item

* @access private

* @var string

*/

var $separator;

/**

* The character used for the Tree Menu in the menu structure format to separate fields of each item

* @access private

* @var string

*/

var $treeMenuSeparator;

/**

* Type of images used for the Tree Menu

* @access private

* @var string

*/

var $treeMenuImagesType;

/**

* An array where we store the Tree Menu code for each menu

* @access private

* @var array

*/

var $_treeMenu;



/**

* It counts nodes for all menus

* @access private

* @var integer

*/

var $_nodesCount;

/**

* A multi-dimensional array where we store informations for each menu entry

* @access private

* @var array

*/

var $tree;

/**

* The maximum hierarchical level of menu items

* @access private

* @var integer

*/

var $_maxLevel;

/**

* An array that counts the number of first level items for each menu

* @access private

* @var array

*/

var $_firstLevelCnt;

/**

* An array containing the number identifying the first item of each menu

* @access private

* @var array

*/

var $_firstItem;

/**

* An array containing the number identifying the last item of each menu

* @access private

* @var array

*/

var $_lastItem;

/**

* A string containing the header needed to use the menu(s) in the page

* @access private

* @var string

*/

var $header;

/**

* Number of layers

* @access private

* @var integer

*/

var $numl;

/**

* The JS function to list layers

* @access private

* @var string

*/

var $listl;

/**

* The JS vector to know the father of each layer

* @access private

* @var string

*/

var $father;

/**

* The JS function to set initial positions of all layers

* @access private

* @var string

*/

var $moveLayers;

/**

* An array containing the code related to the first level menu of each menu

* @access private

* @var array

*/

var $_firstLevelMenu;

/**

* A string containing the footer needed to use the menu(s) in the page

* @access private

* @var string

*/

var $footer;



/**

* The HTML string that is used for forward arrows.

*

* This string can contain either the HTML code of a "text-only" forward arrow,

* e.g. " --&gt;" or the complete HTML tag corresponding to an image used

* as forward arrow

*

* @access private

* @var string

*/

var $forwardArrow;

/**

* Completely analogous to forwardArrow

* @access private

* @var string

*/

var $downArrow;

/**

* Step for the left boundaries of layers

* @access private

* @var integer

*/

var $abscissaStep;

/**

* Estimated value of the vertical distance between adjacent links on a generic layer

* @access private

* @var integer

*/

var $ordinateStep;

/**

* Threshold for vertical repositioning of a layer

* @access private

* @var integer

*/

var $thresholdY;



/**

* Data Source Name: the connection string for PEAR DB

* @access private

* @var string

*/

var $dsn = "pgsql://dbuser:dbpass@dbhost/dbname";

/**

* DB connections are either persistent or not persistent

* @access private

* @var boolean

*/

var $persistent = false;

/**

* Name of the table storing data describing the menu

* @access private

* @var string

*/

var $tableName = "phplayersmenu";

/**

* Name of the i18n table corresponding to $tableName

* @access private

* @var string

*/

var $tableName_i18n = "phplayersmenu_i18n";

/**

* Names of fields of the table storing data describing the menu

*

* default field names correspond to the same field names foreseen

* by the menu structure format

*

* @access private

* @var array

*/

var $tableFields = array(

	"id"		=> "id",

	"parent_id"	=> "parent_id",

	"text"		=> "text",

	"link"		=> "link",

	"title"		=> "title",

	"icon"		=> "icon",

	"target"	=> "target",

	"orderfield"	=> "orderfield",

	"expanded"	=> "expanded"

);

/**

* Names of fields of the i18n table corresponding to $tableName

* @access private

* @var array

*/

var $tableFields_i18n = array(

	"language"	=> "language",

	"id"		=> "id",

	"text"		=> "text",

	"title"		=> "title"

);

/**

* A temporary array to store data retrieved from the DB and to perform the depth-first search

* @access private

* @var array

*/

var $_tmpArray = array();



/**

* The constructor method; it initializates the menu system

* @return void

*/

function YlistLayersMenu(

	$abscissaStep = 140,

	$ordinateStep = 20,

	$thresholdY = 20

	) {



	$this->_packageName = "PHP Layers Menu";

	$this->version = "3.0.0";

	$this->copyright = "(C) 2001-2003";

	$this->author = "Marco Pratesi (marco at telug dot it)";



	$this->prependedUrl = "";



	$this->dirroot = "";

	$this->libdir = "lib/";

	$this->libjsdir = "libjs/";

	$this->libjswww = "libjs/";

	$this->imgdir = "images/";

	$this->imgwww = "images/";

	$this->tpldir = "templates/";

	$this->horizontalMenuTpl = $this->dirroot . $this->tpldir . "layersmenu-horizontal_menu.ihtml";

	$this->verticalMenuTpl = $this->dirroot . $this->tpldir . "layersmenu-vertical_menu.ihtml";

	$this->subMenuTpl = $this->dirroot . $this->tpldir . "layersmenu-sub_menu.ihtml";

	$this->menuStructure = "";

	$this->separator = "|";

	$this->treeMenuSeparator = "|";

	$this->treeMenuImagesType = "png";

	$this->_treeMenu = array();



	$this->_nodesCount = 0;

	$this->tree = array();

	$this->_maxLevel = array();

	$this->_firstLevelCnt = array();

	$this->_firstItem = array();

	$this->_lastItem = array();

	$this->header = "";

	$this->numl = 0;

	$this->listl = "";

	$this->father = "";

	$this->moveLayers = "";

	$this->_firstLevelMenu = array();

	$this->footer = "";



	$this->forwardArrow = " --&gt;";

	$this->downArrow = " --&gt;";

	$this->abscissaStep = $abscissaStep;

	$this->ordinateStep = $ordinateStep;

	$this->thresholdY = $thresholdY;

}



/**

* The method to set the value of abscissaStep

* @access public

* @return void

*/

function setAbscissaStep($abscissaStep) {

	$this->abscissaStep = $abscissaStep;

}



/**

* The method to set the value of ordinateStep

* @access public

* @return void

*/

function setOrdinateStep($ordinateStep) {

	$this->ordinateStep = $ordinateStep;

}



/**

* The method to set the value of thresholdY

* @access public

* @return void

*/

function setThresholdY($thresholdY) {

	$this->thresholdY = $thresholdY;

}



/**

* The method to set the prepended URL

* @access public

* @return boolean

*/

function setPrependedUrl($prependedUrl) {

	// We do not perform any check

	$this->prependedUrl = $prependedUrl;

	return true;

}



/**

* The method to set the dirroot directory

* @access public

* @return boolean

*/

function setDirroot($dirroot) {

	if (!is_dir($dirroot)) {

		$this->error("setDirroot: $dirroot is not a directory.");

		return false;

	}

	if (substr($dirroot, -1) != "/") {

		$dirroot .= "/";

	}

	$this->dirroot = $dirroot;

	return true;

}



/**

* The method to set the libdir directory

* @access public

* @return boolean

*/

function setLibdir($libdir) {

	if (substr($libdir, -1) == "/") {

		$libdir = substr($libdir, 0, -1);

	}

	if (str_replace("/", "", $libdir) == $libdir) {

		$libdir = $this->dirroot . $libdir;

	}

	if (!is_dir($libdir)) {

		$this->error("setLibdir: $libdir is not a directory.");

		return false;

	}

	$this->libdir = $libdir . "/";

	return true;

}



/**

* The method to set the libjsdir directory

* @access public

* @return boolean

*/

function setLibjsdir($libjsdir) {

	if (substr($libjsdir, -1) == "/") {

		$libjsdir = substr($libjsdir, 0, -1);

	}

	if (str_replace("/", "", $libjsdir) == $libjsdir) {

		$libjsdir = $this->dirroot . $libjsdir;

	}

	if (!is_dir($libjsdir)) {

		$this->error("setLibjsdir: $libjsdir is not a directory.");

		return false;

	}

	$this->libjsdir = $libjsdir . "/";

	return true;

}



/**

* The method to set libjswww

* @access public

* @return void

*/

function setLibjswww($libjswww) {

	if (substr($libjswww, -1) != "/") {

		$libjswww .= "/";

	}

	$this->libjswww = $libjswww;

}



/**

* The method to set the imgdir directory

* @access public

* @return boolean

*/

function setImgdir($imgdir) {

	if (substr($imgdir, -1) == "/") {

		$imgdir = substr($imgdir, 0, -1);

	}

	if (str_replace("/", "", $imgdir) == $imgdir) {

		$imgdir = $this->dirroot . $imgdir;

	}

	if (!is_dir($imgdir)) {

		$this->error("setImgdir: $imgdir is not a directory.");

		return false;

	}

	$this->imgdir = $imgdir . "/";

	return true;

}



/**

* The method to set imgwww

* @access public

* @return void

*/

function setImgwww($imgwww) {

	if (substr($imgwww, -1) != "/") {

		$imgwww .= "/";

	}

	$this->imgwww = $imgwww;

}



/**

* The method to set the tpldir directory

* @access public

* @return boolean

*/

function setTpldir($tpldir) {

	if (substr($tpldir, -1) == "/") {

		$tpldir = substr($tpldir, 0, -1);

	}

	if (str_replace("/", "", $tpldir) == $tpldir) {

		$tpldir = $this->dirroot . $tpldir;

	}

	if (!is_dir($tpldir)) {

		$this->error("setTpldir: $tpldir is not a directory.");

		return false;

	}

	$this->tpldir = $tpldir . "/";

	// Then we update the default filenames of templates

	$this->horizontalMenuTpl = $this->dirroot . $this->tpldir . "layersmenu-horizontal_menu.ihtml";

	$this->verticalMenuTpl = $this->dirroot . $this->tpldir . "layersmenu-vertical_menu.ihtml";

	$this->subMenuTpl = $this->dirroot . $this->tpldir . "layersmenu-sub_menu.ihtml";

	//

	return true;

}



/**

* The method to set horizontalMenuTpl

* @access public

* @return boolean

*/

function setHorizontalMenuTpl($horizontalMenuTpl) {

	if (str_replace("/", "", $horizontalMenuTpl) == $horizontalMenuTpl) {

		$horizontalMenuTpl = $this->tpldir . $horizontalMenuTpl;

	}

	if (!file_exists($horizontalMenuTpl)) {

		$this->error("setHorizontalMenuTpl: file $horizontalMenuTpl does not exist.");

		return false;

	}

	$this->horizontalMenuTpl = $horizontalMenuTpl;

	return true;

}



/**

* The method to set verticalMenuTpl

* @access public

* @return boolean

*/

function setVerticalMenuTpl($verticalMenuTpl) {

	if (str_replace("/", "", $verticalMenuTpl) == $verticalMenuTpl) {

		$verticalMenuTpl = $this->tpldir . $verticalMenuTpl;

	}

	if (!file_exists($verticalMenuTpl)) {

		$this->error("setVerticalMenuTpl: file $verticalMenuTpl does not exist.");

		return false;

	}

	$this->verticalMenuTpl = $verticalMenuTpl;

	return true;

}



/**

* The method to set subMenuTpl

* @access public

* @return boolean

*/

function setSubMenuTpl($subMenuTpl) {

	if (str_replace("/", "", $subMenuTpl) == $subMenuTpl) {

		$subMenuTpl = $this->tpldir . $subMenuTpl;

	}

	if (!file_exists($subMenuTpl)) {

		$this->error("setSubMenuTpl: file $subMenuTpl does not exist.");

		return false;

	}

	$this->subMenuTpl = $subMenuTpl;

	return true;

}



/**

* A method to set forwardArrow

* @access public

* @param string $forwardArrow the forward arrow HTML code

* @return void

*/

function setForwardArrow($forwardArrow) {

	$this->forwardArrow = $forwardArrow;

}



/**

* The method to set an image to be used for the forward arrow

* @access public

* @param string $forwardArrowImg the forward arrow image filename

* @return boolean

*/

function setForwardArrowImg($forwardArrowImg) {

	if (!file_exists($this->imgdir . $forwardArrowImg)) {

		$this->error("setForwardArrowImg: file " . $this->imgdir . $forwardArrowImg . " does not exist.");

		return false;

	}

	$foobar = getimagesize($this->imgdir . $forwardArrowImg);

	$this->forwardArrow = " <img src=\"" . $this->imgwww . $forwardArrowImg . "\" width=\"" . $foobar[0] . "\" height=\"" . $foobar[1] . "\" border=\"0\" alt=\" >>\" />";

	return true;

}



/**

* A method to set downArrow

* @access public

* @param string $downArrow the down arrow HTML code

* @return void

*/

function setDownArrow($downArrow) {

	$this->downArrow = $downArrow;

}



/**

* The method to set an image to be used for the down arrow

* @access public

* @param string $downArrowImg the down arrow image filename

* @return boolean

*/

function setDownArrowImg($downArrowImg) {

	if (!file_exists($this->imgdir . $downArrowImg)) {

		$this->error("setDownArrowImg: file " . $this->imgdir . $downArrowImg . " does not exist.");

		return false;

	}

	$foobar = getimagesize($this->imgdir . $downArrowImg);

	$this->downArrow = " <img src=\"" . $this->imgwww . $downArrowImg . "\" width=\"" . $foobar[0] . "\" height=\"" . $foobar[1] . "\" border=\"0\" alt=\" >>\" />";

	return true;

}



/**

* The method to read the menu structure from a file

* @access public

* @param string $tree_file the menu structure file

* @return boolean

*/

function setMenuStructureFile($tree_file) {

	if (!($fd = fopen($tree_file, "r"))) {

		$this->error("setMenuStructureFile: unable to open file $tree_file.");

		return false;

	}

	$this->menuStructure = "";

	while ($buffer = fgets($fd, 4096)) {

		$buffer = ereg_replace(chr(13), "", $buffer);	// Microsoft Stupidity Suppression

		$this->menuStructure .= $buffer;

	}

	fclose($fd);

	if ($this->menuStructure == "") {

		$this->error("setMenuStructureFile: $tree_file is empty.");

		return false;

	}

	return true;

}



/**

* The method to set the menu structure passing it through a string

* @access public

* @param string $tree_string the menu structure string

* @return boolean

*/

function setMenuStructureString($tree_string) {

	$this->menuStructure = ereg_replace(chr(13), "", $tree_string);	// Microsoft Stupidity Suppression

	if ($this->menuStructure == "") {

		$this->error("setMenuStructureString: empty string.");

		return false;

	}

	return true;

}



/**

* The method to set the value of separator

* @access public

* @return void

*/

function setSeparator($separator) {

	$this->separator = $separator;

}



/**

* The method to set parameters for the DB connection

* @access public

* @param string $dns Data Source Name: the connection string for PEAR DB

* @param bool $persistent DB connections are either persistent or not persistent

* @return boolean

*/

function setDBConnParms($dsn, $persistent=false) {

	if (!is_string($dsn)) {

		$this->error("initdb: \$dsn is not an string.");

		return false;

	}

	if (!is_bool($persistent)) {

		$this->error("initdb: \$persistent is not a boolean.");

		return false;

	}

	$this->dsn = $dsn;

	$this->persistent = $persistent;

	return true;

}



/**

* The method to set the name of the table storing data describing the menu

* @access public

* @param string

* @return boolean

*/

function setTableName($tableName) {

	if (!is_string($tableName)) {

		$this->error("setTableName: \$tableName is not a string.");

		return false;

	}

	$this->tableName = $tableName;

	return true;

}



/**

* The method to set the name of the i18n table corresponding to $tableName

* @access public

* @param string

* @return boolean

*/

function setTableName_i18n($tableName_i18n) {

	if (!is_string($tableName_i18n)) {

		$this->error("setTableName_i18n: \$tableName_i18n is not a string.");

		return false;

	}

	$this->tableName_i18n = $tableName_i18n;

	return true;

}



/**

* The method to set names of fields of the table storing data describing the menu

* @access public

* @param array

* @return boolean

*/

function setTableFields($tableFields) {

	if (!is_array($tableFields)) {

		$this->error("setTableFields: \$tableFields is not an array.");

		return false;

	}

	if (count($tableFields) == 0) {

		$this->error("setTableFields: \$tableFields is a zero-length array.");

		return false;

	}

	reset ($tableFields);

	while (list($key, $value) = each($tableFields)) {

		$this->tableFields[$key] = ($value == "") ? "''" : $value;

	}

	return true;

}



/**

* The method to set names of fields of the i18n table corresponding to $tableName

* @access public

* @param array

* @return boolean

*/

function setTableFields_i18n($tableFields_i18n) {

	if (!is_array($tableFields_i18n)) {

		$this->error("setTableFields_i18n: \$tableFields_i18n is not an array.");

		return false;

	}

	if (count($tableFields_i18n) == 0) {

		$this->error("setTableFields_i18n: \$tableFields_i18n is a zero-length array.");

		return false;

	}

	reset ($tableFields_i18n);

	while (list($key, $value) = each($tableFields_i18n)) {

		$this->tableFields_i18n[$key] = ($value == "") ? "''" : $value;

	}

	return true;

}



/**

* The method to parse the current menu structure and correspondingly update related variables

* @access public

* @param string $menu_name the name to be attributed to the menu

*   whose structure has to be parsed

* @return void

*/

function parseStructureForMenu(

	$menu_name = ""	// non consistent default...

	) {

	$this->_maxLevel[$menu_name] = 0;

	$this->_firstLevelCnt[$menu_name] = 0;

	$this->_firstItem[$menu_name] = $this->_nodesCount + 1;

	$cnt = $this->_firstItem[$menu_name];

	$menuStructure = $this->menuStructure;



	/* *********************************************** */

	/* Partially based on a piece of code taken from   */

	/* TreeMenu 1.1 - Bjorge Dijkstra (bjorge@gmx.net) */

	/* *********************************************** */



	while ($menuStructure != "") {

		$before_cr = strcspn($menuStructure, "\n");

		$buffer = substr($menuStructure, 0, $before_cr);

		$menuStructure = substr($menuStructure, $before_cr+1);

		if (substr($buffer, 0, 1) != "#") {	// non commented item line...

			$tmp = rtrim($buffer);

			$node = explode($this->separator, $tmp);

			for ($i=count($node); $i<=6; $i++) {

				$node[$i] = "";

			}

			$this->tree[$cnt]["level"] = strlen($node[0]);

			$this->tree[$cnt]["text"] = $node[1];

			$this->tree[$cnt]["id"] = $node[2];

			$this->tree[$cnt]["var"] = $node[3];

			$this->tree[$cnt]["selected"] = $node[4];

			//$this->tree[$cnt]["link"] = $node[2];

			//$this->tree[$cnt]["title"] = $node[3];

			//$this->tree[$cnt]["icon"] = $node[4];

			//$this->tree[$cnt]["target"] = $node[5];

			$this->tree[$cnt]["expanded"] = $node[5];

			$cnt++;

		}

	}



	/* *********************************************** */



	$this->_lastItem[$menu_name] = count($this->tree);

	$this->_nodesCount = $this->_lastItem[$menu_name];

	$this->tree[$this->_lastItem[$menu_name]+1]["level"] = 0;

	$this->_postParse($menu_name);

}



function _getmicrotime() {

	list($usec, $sec) = explode(" ", microtime());

	return ((float) $usec + (float) $sec);

}



/**

* Recursive method to perform the depth-first search of the tree data taken from the current menu table

* @access private

* @param array $tmpArray the temporary array that stores data to perform

*   the depth-first search

* @param string $menu_name the name to be attributed to the menu

*   whose structure has to be parsed

* @param integer $parent_id id of the item whose children have

*   to be searched for

* @param integer $level the hierarchical level of children to be searched for

* @return void

*/

function _depthFirstSearch($tmpArray, $menu_name, $parent_id=1, $level) {

	reset ($tmpArray);

	while (list($id, $foobar) = each($tmpArray)) {

		if ($foobar["parent_id"] == $parent_id) {

			unset($tmpArray[$id]);

			unset($this->_tmpArray[$id]);

			$cnt = count($this->tree) + 1;

			$this->tree[$cnt]["level"] = $level;

			$this->tree[$cnt]["text"] = $foobar["text"];

			$this->tree[$cnt]["id"] = $foobar["id"];

			$this->tree[$cnt]["var"] = $foobar["var"];

			$this->tree[$cnt]["selected"] = $foobar["selected"];

			$this->tree[$cnt]["expanded"] = $foobar["expanded"];

			unset($foobar);

			if ($id != $parent_id) {

				$this->_depthFirstSearch($this->_tmpArray, $menu_name, $id, $level+1);

			}

		}

	}

}



/**

* A method providing parsing needed after both file/string parsing and DB table parsing

* @access private

* @param string $menu_name the name of the menu for which the parsing

*   has to be performed

* @return void

*/

function _postParse(

	$menu_name = ""	// non consistent default...

	) {

	for ($cnt=$this->_firstItem[$menu_name]; $cnt<=$this->_lastItem[$menu_name]; $cnt++) {	// this counter scans all nodes of the new menu

		$this->tree[$cnt]["child_of_root_node"] = ($this->tree[$cnt]["level"] == 1);

		$this->tree[$cnt]["parsed_text"] = stripslashes($this->tree[$cnt]["text"]);

		$this->tree[$cnt]["parsed_id"] = $this->tree[$cnt]["id"];

		$this->tree[$cnt]["parsed_var"] = $this->tree[$cnt]["var"];

        $this->tree[$cnt]["parsed_selected"] = ($this->tree[$cnt]["selected"]) ? "checked" :  "";

//		$this->tree[$cnt]["expanded"] = ($this->tree[$cnt]["expanded"] == "") ? 0 : $this->tree[$cnt]["expanded"];

		$this->_maxLevel[$menu_name] = max($this->_maxLevel[$menu_name], $this->tree[$cnt]["level"]);

		if ($this->tree[$cnt]["level"] == 1) {

			$this->_firstLevelCnt[$menu_name]++;

		}

	}

}



/**

* A method needed to update the footer both for horizontal and vertical menus

* @access private

* @param string $menu_name the name of the menu for which the updating

*   has to be performed

* @return void

*/

function _updateFooter(

	$menu_name = ""	// non consistent default...

	) {

	$t = new Template();

	$t->setFile("tplfile", $this->subMenuTpl);

	$t->setBlock("tplfile", "template", "template_blck");

	$t->setBlock("template", "sub_menu_cell", "sub_menu_cell_blck");

	$t->setVar("sub_menu_cell_blck", "");

	$t->setVar("abscissaStep", $this->abscissaStep);



	for ($cnt=$this->_firstItem[$menu_name]; $cnt<=$this->_lastItem[$menu_name]; $cnt++) {

		if ($this->tree[$cnt]["not_a_leaf"]) {

			$this->footer .= "\n<div id=\"" . $this->tree[$cnt]["layer_label"] . "\" style=\"position: absolute; left: 0; top: 0; visibility: hidden;\" onmouseover=\"clearLMTO();\" onmouseout=\"setLMTO();\">\n";

			$t->setVar(array(

				"layer_title"		=> $this->tree[$cnt]["text"],

				"sub_menu_cell_blck"	=> $this->tree[$cnt]["layer_content"]

			));

			$this->footer .= $t->parse("template_blck", "template");

			$this->footer .= "</div>\n\n";

		}

	}

}



/**

* Method to prepare the header.

*

* This method obtains the header using collected informations

* and the suited JavaScript template; it returns the code of the header

*

* @access public

* @return string

*/



function makeHeader() {

	$t = new Template();

	$t->setFile("tplfile", $this->libjsdir . "layersmenu-header.ijs");

	$t->setVar(array(

		"packageName"	=> $this->_packageName,

		"version"	=> $this->version,

		"copyright"	=> $this->copyright,

		"author"	=> $this->author,

		"thresholdY"	=> $this->thresholdY,

		"abscissaStep"	=> $this->abscissaStep,

		"libjswww"	=> $this->libjswww,

		"listl"		=> $this->listl,

		"numl"		=> $this->numl,

		"nodesCount"	=> $this->_nodesCount,

		"father"	=> $this->father,

		"moveLayers"	=> $this->moveLayers

	));

	$this->header = $t->parse("out", "tplfile");

	return $this->header;

} 



/**

* Method that returns the code of the header

* @access public

* @return string

*/

function getHeader() {

	return $this->header;

}



/**

* Method that prints the code of the header

* @access public

* @return void

*/

function printHeader() {

	$this->makeHeader();

	print $this->header;

}



/**

* Method that returns the code of the requested _firstLevelMenu

* @access public

* @param string $menu_name the name of the menu whose _firstLevelMenu

*   has to be returned

* @return string

*/

function getMenu($menu_name) {

	return $this->_firstLevelMenu[$menu_name];

}



/**

* Method that prints the code of the requested _firstLevelMenu

* @access public

* @param string $menu_name the name of the menu whose _firstLevelMenu

*   has to be printed

* @return void

*/

function printMenu($menu_name) {

	print $this->_firstLevelMenu[$menu_name];

}



/**

* Method to prepare the footer.

*

* This method obtains the footer using collected informations

* and the suited JavaScript template; it returns the code of the footer

*

* @access public

* @return string

*/



function makeFooter() {

	$t = new Template();

	$t->setFile("tplfile", $this->libjsdir . "layersmenu-footer.ijs");

	$t->setVar(array(

		"packageName"	=> $this->_packageName,

		"version"	=> $this->version,

		"copyright"	=> $this->copyright,

		"author"	=> $this->author,

		"footer"	=> $this->footer

		

	));

	$this->footer = $t->parse("out", "tplfile");

	return $this->footer;

} 



/**

* Method that returns the code of the footer

* @access public

* @return string

*/

function getFooter() {

	return $this->footer;

}



/**

* Method that prints the code of the footer

* @access public

* @return void

*/

function printFooter() {

	$this->makeFooter();

	print $this->footer;

}



/**

* The method to set the value of separator for the Tree Menu

* @access public

* @return void

*/

function setTreeMenuSeparator($treeMenuSeparator) {

	$this->treeMenuSeparator = $treeMenuSeparator;

}



/**

* The method to set the type of images used for the Tree Menu

* @access public

* @return void

*/

function setTreeMenuImagesType($treeMenuImagesType) {

	$this->treeMenuImagesType = $treeMenuImagesType;

}



/**

* Method to prepare a new Tree Menu.

*

* This method processes items of a menu to prepare and return

* the corresponding Tree Menu code.

*

* @access public

* @param string $menu_name the name of the menu whose items have to be processed

* @return string

*/



function diag($menu_name = "") {

    print("<pre>");

    print_r($this->tree);

    print("</pre>");

}



function newTreeMenu( $menu_name = "") {

	if (!isset($this->_firstItem[$menu_name]) || !isset($this->_lastItem[$menu_name])) {

		$this->error("newTreeMenu: the first/last item of the menu '$menu_name' is not defined; please check if you have parsed its menu data.");

		return 0;

	}



	$this->_treeMenu[$menu_name] = "";



	$img_space		= $this->imgwww . "tree_space." . $this->treeMenuImagesType;

	$alt_space		= "  ";

	$img_vertline		= $this->imgwww . "tree_vertline." . $this->treeMenuImagesType;

	$alt_vertline		= "| ";

	$img_expand		= $this->imgwww . "tree_expand." . $this->treeMenuImagesType;

	$alt_expand		= "+-";

	$img_expand_first	= $this->imgwww . "tree_expand_first." . $this->treeMenuImagesType;

	$alt_expand_first	= "+-";

	$img_expand_corner	= $this->imgwww . "tree_expand_corner." . $this->treeMenuImagesType;

	$alt_expand_corner	= "+-";

	$img_collapse		= $this->imgwww . "tree_collapse." . $this->treeMenuImagesType;

	$alt_collapse		= "--";

	$img_collapse_first	= $this->imgwww . "tree_collapse_first." . $this->treeMenuImagesType;

	$alt_collapse_first	= "--";

	$img_collapse_corner	= $this->imgwww . "tree_collapse_corner." . $this->treeMenuImagesType;

	$alt_collapse_corner	= "--";

	$img_split		= $this->imgwww . "tree_split." . $this->treeMenuImagesType;

	$alt_split		= "|-";

	$img_split_first	= $this->imgwww . "tree_split_first." . $this->treeMenuImagesType;

	$alt_split_first	= "|-";

	$img_corner		= $this->imgwww . "tree_corner." . $this->treeMenuImagesType;

	$alt_corner		= "`-";

	$img_folder_closed	= $this->imgwww . "tree_folder_closed." . $this->treeMenuImagesType;

	$alt_folder_closed	= "->";

	$img_folder_open	= $this->imgwww . "tree_folder_open." . $this->treeMenuImagesType;

	$alt_folder_open	= "->";

	$img_leaf		= $this->imgwww . "tree_leaf." . $this->treeMenuImagesType;

	$alt_leaf		= "->";



	for ($i=0; $i<=$this->_maxLevel[$menu_name]; $i++) {

		$levels[$i] = 0;

	}



	// Find last nodes of subtrees

	$last_level = $this->_maxLevel[$menu_name];

	for ($i=$this->_lastItem[$menu_name]; $i>=$this->_firstItem[$menu_name]; $i--) {

		if ($this->tree[$i]["level"] < $last_level) {

			for ($j=$this->tree[$i]["level"]+1; $j<=$this->_maxLevel[$menu_name]; $j++) {

				$levels[$j] = 0;

			}

		}

		if ($levels[$this->tree[$i]["level"]] == 0) {

			$levels[$this->tree[$i]["level"]] = 1;

			$this->tree[$i]["last_item"] = 1;

		} else {

			$this->tree[$i]["last_item"] = 0;

		}

		$last_level = $this->tree[$i]["level"];

	}



	$toggle = "";

	$toggle_function_name = "toggle" . $menu_name;



	for ($cnt=$this->_firstItem[$menu_name]; $cnt<=$this->_lastItem[$menu_name]; $cnt++) {

		$this->_treeMenu[$menu_name] .= "<div id=\"jt" . $cnt . "\" class=\"treemenudiv\">\n";



		// vertical lines from higher levels

		for ($i=0; $i<$this->tree[$cnt]["level"]-1; $i++) {

			if ($levels[$i] == 1) {

				$img = $img_vertline;

				$alt = $alt_vertline;

			} else {

				$img = $img_space;

				$alt = $alt_space;

			}

			$this->_treeMenu[$menu_name] .= "<img align=\"top\" border=\"0\" class=\"imgs\" src=\"" . $img . "\" alt=\"" . $alt . "\" />";

		}



		$not_a_leaf = $cnt<$this->_lastItem[$menu_name] && $this->tree[$cnt+1]["level"]>$this->tree[$cnt]["level"];



		if ($this->tree[$cnt]["last_item"] == 1) {

		// corner at end of subtree or t-split

			if ($not_a_leaf) {

				$this->_treeMenu[$menu_name] .= "<a onmousedown=\"". $toggle_function_name . "('" . $cnt . "')\"><img align=\"top\" border=\"0\" class=\"imgs\" id=\"jt" . $cnt . "node\" src=\"" . $img_collapse_corner . "\" alt=\"" . $alt_collapse_corner . "\" /></a>";

			} else {

				$this->_treeMenu[$menu_name] .= "<img align=\"top\" border=\"0\" class=\"imgs\" src=\"" . $img_corner . "\" alt=\"" . $alt_corner . "\" />";

			}

			$levels[$this->tree[$cnt]["level"]-1] = 0;

		} else {

			if ($not_a_leaf) {

				if ($cnt == $this->_firstItem[$menu_name]) {

					$img = $img_collapse_first;

					$alt = $alt_collapse_first;

				} else {

					$img = $img_collapse;

					$alt = $alt_collapse;

				}

				$this->_treeMenu[$menu_name] .= "<a onmousedown=\"". $toggle_function_name . "('" . $cnt . "');\"><img align=\"top\" border=\"0\" class=\"imgs\" id=\"jt" . $cnt . "node\" src=\"" . $img . "\" alt=\"" . $alt . "\" /></a>";

			} else {

				if ($cnt == $this->_firstItem[$menu_name]) {

					$img = $img_split_first;

					$alt = $alt_split_first;

				} else {

					$img = $img_split;

					$alt = $alt_split;

				}

				$this->_treeMenu[$menu_name] .= "<a onmousedown=\"". $toggle_function_name . "('" . $cnt . "');\"><img align=\"top\" border=\"0\" class=\"imgs\" id=\"jt" . $cnt . "node\" src=\"" . $img . "\" alt=\"" . $alt . "\" /></a>";

			}

			$levels[$this->tree[$cnt]["level"]-1] = 1;

		}



        /*

		if ($this->tree[$cnt]["parsed_id"] == "" || $this->tree[$cnt]["parsed_id"] == "#") {

			$a_href_open_img = "";

			$a_href_close_img = "";

			$a_href_open = "<a class=\"phplmnormal\">";

			$a_href_close = "</a>";

		} else {

			$a_href_open_img = "";

			$a_href_close_img = "";

			$a_href_open = "<a class=\"phplmnormal\">";

			$a_href_close = "</a>";

			$a_href_open_img = "<a href=\"" . $this->tree[$cnt]["parsed_link"] . "\"" . $this->tree[$cnt]["parsed_title"] . $this->tree[$cnt]["parsed_target"] . ">";

			$a_href_close_img = "</a>";

			$a_href_open = "<a href=\"" . $this->tree[$cnt]["parsed_link"] . "\"" . $this->tree[$cnt]["parsed_title"] . $this->tree[$cnt]["parsed_target"] . " class=\"phplm\">";

			$a_href_close = "</a>";

		} */

		$a_href_open_img = "";

		$a_href_close_img = "";

		$a_href_open = "<a class=\"phplmnormal\">";

		$a_href_close = "</a>";

        $form_input  = '<input type="checkbox" name="' . $this->tree[$cnt]["parsed_var"] . '" ';

        $form_input .= 'value="' . $this->tree[$cnt]["parsed_id"] . '" ';

        $form_input .= $this->tree[$cnt]["parsed_selected"] . ' />';



		if ($not_a_leaf) {

			$this->_treeMenu[$menu_name] .= $a_href_open_img . "<img align=\"top\" border=\"0\" class=\"imgs\" id=\"jt" . $cnt . "folder\" src=\"" . $img_folder_open . "\" alt=\"" . $alt_folder_open . "\" />" . $a_href_close_img;

		} else {

			/*if ($this->tree[$cnt]["parsed_icon"] != "") {

				$this->_treeMenu[$menu_name] .= $a_href_open_img . "<img align=\"top\" border=\"0\" src=\"" . $this->imgwww . $this->tree[$cnt]["parsed_icon"] . "\" width=\"" . $this->tree[$cnt]["iconwidth"] . "\" height=\"" . $this->tree[$cnt]["iconheight"] . "\" alt=\"" . $alt_leaf . "\" />" . $a_href_close_img;

			} else { */

				$this->_treeMenu[$menu_name] .= $a_href_open_img . "<img align=\"top\" border=\"0\" class=\"imgs\" src=\"" . $img_leaf . "\" alt=\"" . $alt_leaf . "\" />" . $a_href_close_img;

			/* } */

		}

		$this->_treeMenu[$menu_name] .= "&nbsp;" . $form_input . "&nbsp;" . $this->tree[$cnt]["parsed_text"]; 

		$this->_treeMenu[$menu_name] .= "</div>\n";



		if ($cnt<$this->_lastItem[$menu_name] && $this->tree[$cnt]["level"]<$this->tree[$cnt+1]["level"]) {

			$this->_treeMenu[$menu_name] .= "<div id=\"jt" . $cnt . "son\" class=\"treemenudiv\">\n";

			if ($this->tree[$cnt]["expanded"] != 1) {

				$toggle .= "if (expand[" . $cnt . "] != 1) " . $toggle_function_name . "('" . $cnt . "');\n";

			} else {

				$toggle .= "if (collapse[" . $cnt . "] == 1) " . $toggle_function_name . "('" . $cnt . "');\n";

			}

		}



		if ($cnt>$this->_firstItem[$menu_name] && $this->tree[$cnt]["level"]>$this->tree[$cnt+1]["level"]) {

			for ($i=max(1, $this->tree[$cnt+1]["level"]); $i<$this->tree[$cnt]["level"]; $i++) {

				$this->_treeMenu[$menu_name] .= "</div>\n";

			}

		}

	}



/*

	// Some (old) browsers do not support the "white-space: nowrap;" CSS property...

	$this->_treeMenu[$menu_name] =

	"<table>\n" .

	"<tr>\n" .

	"<td class=\"phplmnormal\" nowrap=\"nowrap\">\n" .

	$this->_treeMenu[$menu_name] .

	"</td>\n" .

	"</tr>\n" .

	"</table>\n";

*/

	$t = new Template();

	$t->setFile("tplfile", $this->libjsdir . "layerstreemenu.ijs");

	$t->setVar(array(

		"toggle_function_name"	=> $toggle_function_name,

		"img_expand"		=> $img_expand,

		"img_expand_first"	=> $img_expand_first,

		"img_collapse"		=> $img_collapse,

		"img_collapse_first"	=> $img_collapse_first,

		"img_collapse_corner"	=> $img_collapse_corner,

		"img_folder_open"	=> $img_folder_open,

		"img_expand_corner"	=> $img_expand_corner,

		"img_folder_closed"	=> $img_folder_closed

	));

	$toggle_function = $t->parse("out", "tplfile");

	$toggle_function =

	"<script language=\"JavaScript\" type=\"text/javascript\">\n" .

	"<!--\n" .

	$toggle_function .

	"// -->\n" .

	"</script>\n";



	$toggle =

	"<script language=\"JavaScript\" type=\"text/javascript\">\n" .

	"<!--\n" .

	"if ((DOM && !Opera56 && !Konqueror2) || IE4) {\n" .

	$toggle .

	"}\n" .

	"if (NS4) alert('Only the accessibility is provided to Netscape 4 on the JavaScript Tree Menu.\\nWe *strongly* suggest you to upgrade your browser.');\n" .

	"// -->\n" .

	"</script>\n";



	$this->_treeMenu[$menu_name] = $toggle_function . "\n" . $this->_treeMenu[$menu_name] . "\n" . $toggle;



	return $this->_treeMenu[$menu_name];

}



/**

* Method that returns the code of the requested Tree Menu

* @access public

* @param string $menu_name the name of the menu whose Tree Menu code

*   has to be returned

* @return string

*/

function getTreeMenu($menu_name) {

	return $this->_treeMenu[$menu_name];

}



/**

* Method that prints the code of the requested Tree Menu

* @access public

* @param string $menu_name the name of the menu whose Tree Menu code

*   has to be printed

* @return void

*/

function printTreeMenu($menu_name) {

	print $this->_treeMenu[$menu_name];

}



/**

* Method to handle errors

* @access private

* @param string $errormsg the error message

* @return void

*/

function error($errormsg) {

	print "<b>LayersMenu Error:</b> " . $errormsg . "<br />\n";

	if ($this->haltOnError == "yes") {

		die("<b>Halted.</b><br />\n");

	}

}



} /* END OF CLASS */



?>

