<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
   $chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
?>

<?php
//Firefox Chrome
if ($firefox || $chrome) {?>   

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
                            echo "<a href='index.php'><div style='position:relative; left:0px; z-index:5000'><font size='2'><strong>Begin New Search</strong></font></a><div style='position:relative; left:0px; top:-50px'>";					
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
                <div id='pageBody'>
                	<div style="position:absolute; left:415px; top:200px">
                    <h2 class='attn'>Digital Magazines</h2>
                    </div>
                    
                	<table width="763" cellpadding="8" cellspacing="0" style="position:absolute;	left:415px; top:250px">
						<tr>
							<td><a href="http://landscapearchitect.epubxp.com/title/13311"><img src="https://landscapearchitect.com/lol-logos/LASN-FULL-Logo-325.jpg" name="LASN-Digital" width="132" border="0" /></a></td>
							<td><a href="http://landscapecontractor.epubxp.com/title/13313"><img width="145" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" name="LASN-Digital" border="0" /></a></td>
                            <td rowspan="3">
                            	<table>
                            		<tr>
                                    	<td align="center" style="font-size:16px"><strong>Landscape Online<br />
										Product Directories</strong>
                                        </td>
    								</tr>
                            		<tr>
                                    	<td><a href="http://landscapearchitect.epubxp.com/i/511998-may-2015"><img src="https://landscapearchitect.com/lol-logos/LASN-FULL-Logo-325.jpg" name="LASN-Specifiers Guide" width="145" border="0" /></a><br /><strong>Specifiers Guide</strong></td>
    								</tr>
                                    <tr>
                                    	<td>	<a href="http://landscapecontractor.epubxp.com/i/511968-may-2015"><img width="145" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" name="LCDBM-Buyers Guide" border="0" /></a><br /><strong>Buyer's Guide</strong></td>
    								</tr>
                           		</table>
								</td>
								<td rowspan="4">
                                <table>
									<tr>
										<td width="75" height="80"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Follow us: </span></td>
                                        <td><a href="https://landscapearchitect.com/social/index.php#LASN" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/facbook-logo.jpg" width="25" /></a></td>
                                       	<td><a href="https://landscapearchitect.com/social/index.php#LASN" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/Twitter_logo_blue.jpg" width="25" /></a></td>
                              			<td><a href="https://landscapearchitect.com/social/index.php#LASN" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/linkedinicon.jpg" width="25" /></a></td>
    								</tr>
                                    <tr>
                                       <td width="75" height="80"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Follow us: </span></td>
                                       <td><a href="https://landscapearchitect.com/social/index.php#LCDBM" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/facbook-logo.jpg" width="25" /></a></td>
										<td><a href="https://landscapearchitect.com/social/index.php#LCDBM" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/Twitter_logo_blue.jpg" width="25" /></a></td>
                                      <td><a href="https://landscapearchitect.com/social/index.php#LCDBM" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/linkedinicon.jpg" width="25" /></a></td>
    								</tr>
                           		</table>
                           		</td>
						</tr>
						<tr>
							<td><a href="http://landscapearchitect.epubxp.com/title/13311"><img width="125" src="https://landscapearchitect.com/imgz2/lasn-cover.jpg" name="LASN-Digital" border="1" /></a></td>
							<td><a href="http://landscapecontractor.epubxp.com/title/13313"><img width="125" src="https://landscapearchitect.com/imgz2/lcdbm-cover.jpg" name="LCDBM-Digital" border="1" /></a></td>
                        </tr>     
   					</table>
                                        
                    <div style="position:absolute; left:415px; top:500px; font-size:16px">
                        Search through the LandscapeOnline's archives of informative news and instructional magazine articles.<br>
						Whether looking for tips to improve your design, inspiration for your next project, or hands-on examples<br>
						 and how-tos, LandscapeOnline has it.
                    </div>
                    
					<!-- Horizontal Bar Start -->
					<div style="position:absolute; left:415px; top:575px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
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
                            echo "<a href='index.php'><div style='position:relative; left:0px; z-index:5000'><font size='2'><strong>Begin New Search</strong></font></a><div style='position:relative; left:0px; top:-50px'>";					
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
                <div id='pageBody'>
                	<div style="position:absolute; left:323px; top:200px">
                    <h2 class='attn'>Digital Magazines</h2>
                    </div>
                    
                	<table width="763" cellpadding="8" cellspacing="0" style="position:absolute;	left:323px; top:250px">
						<tr>
							<td><a href="http://landscapearchitect.epubxp.com/title/13311"><img src="https://landscapearchitect.com/lol-logos/LASN-FULL-Logo-325.jpg" name="LASN-Digital" width="132" border="0" /></a></td>
							<td><a href="http://landscapecontractor.epubxp.com/title/13313"><img width="145" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" name="LASN-Digital" border="0" /></a></td>
                            <td rowspan="3">
                            	<table>
                            		<tr>
                                    	<td align="center" style="font-size:16px"><strong>Landscape Online<br />
										Product Directories</strong>
                                        </td>
    								</tr>
                            		<tr>
                                    	<td><a href="http://landscapearchitect.epubxp.com/i/511998-may-2015"><img src="https://landscapearchitect.com/lol-logos/LASN-FULL-Logo-325.jpg" name="LASN-Specifiers Guide" width="145" border="0" /></a><br /><strong>Specifiers Guide</strong></td>
    								</tr>
                                    <tr>
                                    	<td>	<a href="http://landscapecontractor.epubxp.com/i/511968-may-2015"><img width="145" src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" name="LCDBM-Buyers Guide" border="0" /></a><br /><strong>Buyer's Guide</strong></td>
    								</tr>
                           		</table>
								</td>
								<td rowspan="4">
                                <table>
									<tr>
										<td width="75" height="80"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Follow us: </span></td>
                                        <td><a href="https://landscapearchitect.com/social/index.php#LASN" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/facbook-logo.jpg" width="25" /></a></td>
                                       	<td><a href="https://landscapearchitect.com/social/index.php#LASN" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/Twitter_logo_blue.jpg" width="25" /></a></td>
                              			<td><a href="https://landscapearchitect.com/social/index.php#LASN" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/linkedinicon.jpg" width="25" /></a></td>
    								</tr>
                                    <tr>
                                       <td width="75" height="80"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Follow us: </span></td>
                                       <td><a href="https://landscapearchitect.com/social/index.php#LCDBM" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/facbook-logo.jpg" width="25" /></a></td>
										<td><a href="https://landscapearchitect.com/social/index.php#LCDBM" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/Twitter_logo_blue.jpg" width="25" /></a></td>
                                      <td><a href="https://landscapearchitect.com/social/index.php#LCDBM" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/linkedinicon.jpg" width="25" /></a></td>
    								</tr>
                           		</table>
                           		</td>
						</tr>
						<tr>
							<td><a href="http://landscapearchitect.epubxp.com/title/13311"><img width="125" src="https://landscapearchitect.com/imgz2/lasn-cover.jpg" name="LASN-Digital" border="1" /></a></td>
							<td><a href="http://landscapecontractor.epubxp.com/title/13313"><img width="125" src="https://landscapearchitect.com/imgz2/lcdbm-cover.jpg" name="LCDBM-Digital" border="1" /></a></td>
                        </tr>     
   					</table>
                                        
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





<? } ?> 