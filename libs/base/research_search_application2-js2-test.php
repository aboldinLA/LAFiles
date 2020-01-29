<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
   $chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
?>

<?php
//Firefox Chrome
if ($firefox) {?>   

<?php
require_once("research_class.php");
// require_once("pagespan_class.inc");
require_once("Pager/Sliding.php");

class research_search_application extends research_class {
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
    var $pageLimit=10;

    function research_search_application() {
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
            case 'view':
                $this->fetch($vars['record']);
                $title = 'Article : ' . htmlfriendly($this->title);
                //$this->top('Research &amp; Editorial: View Article');
                $this->top($title);
                $this->errors();
                $this->showView('article.php', TRUE);
                $this->bot();
                $this->clear();
                break;
            case 'find':
                $this->clearErrors();
                $this->top('Editorial &amp; Article Search');
                ?>
                <div id='pageBody' style="position:relative; left:-75px; top:-75px; width:763px">
                <div style="position:relative; left:-50px; top:">
                <h1 id='pageTitle'>Editorial Editorial &amp; Article Search Results</h1><br>
                </div>
                

                
                <?
                if($this->errors()) { ?>
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                    <input type='hidden' name='action' value='find' />
                    <?= $this->showView('searchBox.php', TRUE, $vars); ?>
                    <?= $this->showView('searchSimple.php', TRUE, $vars); ?>
                    </form>
                    <hr noshade>
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>'>
                    <input type='hidden' name='action' value='find' />
                    <?= $this->showView('searchAdvanced.php', TRUE, $vars); ?>
                    </form>
                    <?
                } else {
                    ?>
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                    <?
                    switch($vars['searchType']) {
                        case 'profile':
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchASLA.php', TRUE, $vars);
                            break;
                        case 'simple':
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchBox.php', TRUE, $vars);
                            $this->showView('searchSimple.php', TRUE, $vars);
                            print("<br /><br />&nbsp;&nbsp;&nbsp;<a href='" . $this->baseLink() . "?action=find&searchType=advanced&searchBy=keywords&searchFor=" . $vars['searchFor'] . "'>Advanced Search</a>");
                            break;
							
                        case 'article':
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchBox.php', TRUE, $vars);
                            $this->showView('searchSimple.php', TRUE, $vars);
                            print("<br /><br />&nbsp;&nbsp;&nbsp;<a href='" . $this->baseLink() . "?action=find&searchType=advanced&searchBy=keywords&searchFor=" . $vars['searchFor'] . "'>Advanced Search</a>");
                            break;							
							
                        case 'advanced':
                            echo "<div style='position:relative; left:-50px; z-index:5000'><font size='2'><strong><a href='https://landscapearchitect.com/research/index.php'><br></a></strong></font><div style='position:relative; left:0px; top:-50px'>";					
                            break;
                    }
                    print("</form>");
                    print("<div class='clearer'>&nbsp;</div>");
                    $this->searchResults($vars);
                }
                ?>
                </div>
                
				<?
                $this->bot();
                break;
            case 'search':
            default:
                $this->clearErrors();
                $this->top('Editorial &amp; Article Search');
                ?>
                
                <style>
					#wrapper7 {
    				margin-left:auto;
    				margin-right:auto;
    				width:960px;
				}
				</style>
                
      
					<!-- Horizontal Bar Start -->
					<div style="position:absolute; left:415px; top:585px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
					<!-- Horizontal Bar End -->                    
   
                    <div style="position:absolute; left:415px; top:600px; font-size:16px">
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                        <input type='hidden' name='action' value='find' />
                        <?= $this->showView('searchAdvanced.php', TRUE, $vars); ?>
                    </form><br />
                    
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                        <input type='hidden' name='action' value='find' />
                        <?= $this->showView('searchAdvanced3.php', TRUE, $vars); ?>
                    </form><br />                    
                    
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                        <input type='hidden' name='action' value='find' />
                        <?= $this->showView('searchAdvanced4.php', TRUE, $vars); ?>
                    </form><br /> 
                    
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                        <input type='hidden' name='action' value='find' />
                        <?= $this->showView('searchAdvanced5.php', TRUE, $vars); ?>
                    </form><br />                     
                                       
                    
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                        <input type='hidden' name='action' value='find' />
                        <?= $this->showView('searchAdvanced2.php', TRUE, $vars); ?>
                    </form>
                    </div>   
                </div>
                                
                <?
                $this->bot();
                $this->clear();
                break;
        }    
    }
}

?>

<? } else { ?>

<?php
require_once("research_class.php");
// require_once("pagespan_class.inc");
require_once("Pager/Sliding.php");

class research_search_application extends research_class {
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
    var $pageLimit=10;

    function research_search_application() {
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
            case 'view':
                $this->fetch($vars['record']);
                $title = 'Article : ' . htmlfriendly($this->title);
                //$this->top('Research &amp; Editorial: View Article');
                $this->top($title);
                $this->errors();
                $this->showView('article.php', TRUE);
                $this->bot();
                $this->clear();
                break;
            case 'find':
                $this->clearErrors();
                $this->top('Editorial &amp; Article Search');
                ?>
                <div id='pageBody' style="position:relative; left:325px; top:-230px; width:763px">
                <h1 id='pageTitle'>Editorial &amp; Article Search Results</h1><br>
                
                
<div style="position: absolute; left: 550px; top: 325px; z-index:10000">
<a href='https://landscapearchitect.com/research/index.php' onmouseover='' style='cursor: pointer;'><div class="tb2" style="width:120px; z-index:2000; padding-left:5px; box-shadow: 5px 5px 5px #888888">
<span style="font-size:12px">Begin New Search</span>
</div></a>
</div>                 
                
                
                <?
                if($this->errors()) { ?>
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                    <input type='hidden' name='action' value='find' />
                    <?= $this->showView('searchBox.php', TRUE, $vars); ?>
                    <?= $this->showView('searchSimple.php', TRUE, $vars); ?>
                    </form>
                    <hr noshade>
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>'>
                    <input type='hidden' name='action' value='find' />
                    <?= $this->showView('searchAdvanced.php', TRUE, $vars); ?>
                    </form>
                    <?
                } else {
                    ?>
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                    <?
                    switch($vars['searchType']) {
                        case 'profile':
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchASLA.php', TRUE, $vars);
                            break;
                        case 'simple':
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchBox.php', TRUE, $vars);
                            $this->showView('searchSimple.php', TRUE, $vars);
                            print("<br /><br />&nbsp;&nbsp;&nbsp;<a href='" . $this->baseLink() . "?action=find&searchType=advanced&searchBy=keywords&searchFor=" . $vars['searchFor'] . "'>Advanced Search</a>");
                            break;
							
                        case 'article':
                            print("<input type='hidden' name='action' value='find' />\r\n");
                            $this->showView('searchBox.php', TRUE, $vars);
                            $this->showView('searchSimple.php', TRUE, $vars);
                            print("<br /><br />&nbsp;&nbsp;&nbsp;<a href='" . $this->baseLink() . "?action=find&searchType=advanced&searchBy=keywords&searchFor=" . $vars['searchFor'] . "'>Advanced Search</a>");
                            break;							
							
                        case 'advanced':
                            echo "<div style='position:relative; left:0px; z-index:5000'><font size='2'><strong><a href='https://landscapearchitect.com/research/index.php'><br></a></strong></font><div style='position:relative; left:0px; top:-53px'>";					
                            break;
                    }
                    print("</form>");
                    print("<div class='clearer'>&nbsp;</div>");
                    $this->searchResults($vars);
                }
                ?>
                </div>
                
				<?
                $this->bot();
                break;
            case 'search':
            default:
                $this->clearErrors();
                $this->top('Editorial &amp; Article Search');
                ?>
                
                <!-- Safari -->
      
                                        
                    <div style="position:absolute; left:323px; top:500px; font-size:16px">
                        Search through the LandscapeOnline's archives of informative news and instructional magazine articles.<br>
						Whether looking for tips to improve your design, inspiration for your next project, or hands-on examples<br>
						 and how-tos, LandscapeOnline has it.
                    </div>
                    
					<!-- Horizontal Bar Start -->
					<div style="position:absolute; left:323px; top:575px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
					<!-- Horizontal Bar End -->                    
   
                    <div style="position:absolute; left:323px; top:600px; font-size:16px">
         
                    
                    <form name='manage' method='get' action='<?= $this->baseLink(); ?>' style='padding: 0; margin: 0;'>
                        <input type='hidden' name='action' value='find' />
                        <?= $this->showView('searchAdvanced3.php', TRUE, $vars); ?>
                    </form><br />                    
                    
          
                    </form>
                    </div>   
                </div>
                                
                <?
                $this->bot();
                $this->clear();
                break;
        }    
    }
}

?>





<? } ?> 