<?php
    require_once('HTTP/Upload.php');
    require_once('lead_generator_media_model.php');

    define("LGM_MIN_LONG", 60); 
    define("LGM_MIN_WIDE", 80); 

    class lead_generator_media {
        // controller class for lead generator photos
        var $_id;
        var $_vendor_id;
        var $_title;
        var $_source;
        var $_sourceType;
        var $_basename;
        var $_keywords;
        var $_description;
        var $_notes;
        var $_format;
        var $_height;
        var $_width;
        var $_dpi;
        var $_input;
        var $_edited;

        // derived variables
        var $_scaledFile;
        var $_thumbnailFile;
        var $_originalFile;
        var $_convertedFile; 

        var $_storagePath;

        // instance vars
        var $_storage;
        var $_vendor;
        var $_uriAppend;
        var $_redirLocation;

        function lead_generator_media($id=NULL) {
            global $file_path;
            $this->_storage = new lead_generator_media_model();
            $this->_vendor_id = $id;
	  
            $this->_storagePath =  $file_path . 'public_html/guide/lg/';
        }

        /* redirect() {{{*/
        function redirect($urlAdd=NULL) {
            template_class::redirect($this->appUrl(). "/" . $urlAdd);
        }
        /*}}}*/

        /* baseUrl() {{{ */
        function baseUrl() {
            // parent app or root
            // this whacks off the .php as well -- cleaner looking urls
            return("http://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['SCRIPT_NAME'], 0, -4) . '/');
        }
        /* }}} */

        /* appUrl() {{{ */
        function appUrl() {
            return($this->baseUrl() . $this->_uriAppend);
        }
        /* }}} */

        /* handle($args) {{{ */
        function handle($args) {
            // $args = stack of verbs/args
            if(is_array($args)) {
                $verb = array_pop($args);
            }
            $verb = ($verb) ? $verb : 'default';
            $this->action($verb, &$args);
        }
        /* }}} */

        /* action($verb, $args) {{{ */
        function action($verb, $args) {

            switch($verb) {
                case 'delete':
                    $id = array_pop($args);
                    if(is_numeric($id)) {
                        lead_generator_media::delete($id);
                    }
                    $this->redirect();
                    break;
                case 'view':
                    $this->viewMedia($args);
                    break;
                case 'new':
                    $this->newMedia($args);
                    break;
                case 'revise':
                    $this->revise(&$args);
                    break;
                default:
                    $this->_errors[] = "No action for $verb";
                case 'default':
                    $this->controlCenter();
                    break;
            }
            return(TRUE);
        }
        /* }}} */

        /* listErrors() {{{ */
        function listErrors() {
            if(is_array($this->_errors) && (count($this->_errors) > 0)) {
                ?>
                <div id="notify">
                    <div class='attn'>There were errors with your request:</div>
                    <ul>
                        <?php
                            foreach($this->_errors as $error) {
                                print("<li>$error</li>");
                            }
                        ?>
                    </ul>
                </div>
                <?
                $this->_errors = array();
            } 
        }
        /* }}} */

        function viewMedia(&$args) {
            $id = array_pop($args);
            $verb = array_pop($args);
            if(!is_string($verb)) {
                $verb = 'default';
            }

            if(!is_numeric($id)) { 
                $this->errorOut("Missing id for view","");
            }

            switch($verb) {
                case 'save':
                    $this->saveItem($id);
                    break;
                case 'edit':
                    $this->editItem($id);
                    break;
                default:
                    $this->_errors[] = "Unknown verb: $verb";
                case 'default':
                    $this->viewItem($id);
                    break;
            }

        }

        /* newMedia(&$args) {{{ */
        function newMedia(&$args) {
            $verb = array_pop($args);
            switch($verb) {
                case 'quickSave':
                    $this->newMediaSaveQuick();
                    break;
                case 'save':
                    $this->newMediaSave();
                    break;
                case 'quick':
                    $this->newMediaQuick();
                    break;
                default:
                    $this->newMediaInput();
                    break;
            }
        }
        /* }}} */

        function newMediaSaveQuick() {
            // check the file
            // check the title [ optional ]
            // check the description [ optional ]
            // all ok?  save file, save db record, redirect
            $upload = new HTTP_Upload();
            if(PEAR::isError($file   = $upload->getFiles("attachment"))) {
                $this->errorOut("Error handling attached file: " . $file->getMessage(), "new/quick");
            }
            if($file->isValid()) {
                $args =& $_REQUEST;

                $lgm = new lead_generator_media();
                $lgm->setVendorID($this->_vendor->id);

                // make our own unique name
                $properties = $file->getProp();
                // check the mime type
                $ext = $this->isValidMime($properties['type']);
                if($ext === FALSE) {
                    $this->errorOut("Unknown mime type: " . $properties['type'],"new/quick");
                }
                $lgm->setFormat($ext);

                // get the properties of the image
                $a = $this->getPropertiesArray($properties['tmp_name']);

                // check the dimensions
                if(!$this->checkDimensions($a['height'], $a['width'])) {
                    $this->errorOut("Insufficient image size for a lead generator.", "new/quick");
                }

                $lgm->setHeight($a['height']);
                $lgm->setWidth($a['width']);

                // check the title
                if(strlen($args['title']) > 0) {
                    if(!is_string($args['title']))
                        $this->errorOut("Invalid title for image.");

                    $lgm->setTitle($args['title']);
                }

                // check the description
                if(strlen($args['description']) > 0) {
                    if(!is_string($args['description']))
                        $this->errorOut("Invalid description for image.");
                    $lgm->setDescription($args['description']);
                }

                // set the basename
                $lgm->setBaseName($lgm->generateBaseName());

                $properties['name'] = $file->setName($lgm->baseName() . '.' . $lgm->format());

                // process the image
                if(!$this->handleImage($lgm, $file, $properties, $a))
                    $this->errorOut("Error handling the image.", "new/quick");

                $lgm->setInput();

                $lgm->save();

                template_class::redirect($this->baseUrl() . $this->_redirLocation);

                // $this->redirect();
            } else if($file->isMissing()) {
                $this->errorOut("You must upload a file!", "new/quick");
            } else {
                $this->errorOut($file->errorMsg(), "new/quick");
            }
        }

        
        /* newMediaSave() {{{ */
        function newMediaSave() {
            // check the file
            // check the title [ optional ]
            // check the description [ optional ]
            // all ok?  save file, save db record, redirect
            $upload = new HTTP_Upload();
            if(PEAR::isError($file   = $upload->getFiles("attachment"))) {
                $this->errorOut("Error handling attached file: " . $file->getMessage(), "new");
            }
            if($file->isValid()) {
                $args =& $_REQUEST;

                $lgm = new lead_generator_media();
                $lgm->setVendorID($this->_vendor->id);

                // make our own unique name
                $properties = $file->getProp();
                // check the mime type
                $ext = $this->isValidMime($properties['type']);
                if($ext === FALSE) {
                    $this->errorOut("Unknown mime type: " . $properties['type'],"new");
                }
                $lgm->setFormat($ext);

                // get the properties of the image
                $a = $this->getPropertiesArray($properties['tmp_name']);

                // check the dimensions
                if(!$this->checkDimensions($a['height'], $a['width'])) {
                    $this->errorOut("Insufficient image size for a lead generator.", "new");
                }

                $lgm->setHeight($a['height']);
                $lgm->setWidth($a['width']);

                // check the title
                if(strlen($args['title']) > 0) {
                    if(!is_string($args['title']))
                        $this->errorOut("Invalid title for image.");

                    $lgm->setTitle($args['title']);
                }

                // check the description
                if(strlen($args['description']) > 0) {
                    if(!is_string($args['description']))
                        $this->errorOut("Invalid description for image.");
                    $lgm->setDescription($args['description']);
                }

                // set the basename
                $lgm->setBaseName($lgm->generateBaseName());

                $properties['name'] = $file->setName($lgm->baseName() . '.' . $lgm->format());


                // process the image
                if(!$this->handleImage($lgm, $file, $properties, $a))
                    $this->errorOut("Error handling the image.", "new");

                $lgm->setInput();

                $lgm->save();

                $this->redirect();
            } else if($file->isMissing()) {
                $this->errorOut("You must upload a file!", "new");
            } else {
                $this->errorOut($file->errorMsg(), "new");
            }
        }
        /* }}} */

        /* handleImage($lgm, $file, $properties, $attributes) {{{ */
        function handleImage(&$lgm, &$file, &$properties, &$attributes) {
            // rename & move the file
            // generate the converted version
            // generate the scaled version
            // generate the thumbnail version
            // return basename or false

            // move image into place
            if(PEAR::isError($fname = $file->moveTo($lgm->_storagePath . 'original/'))) {
                $this->errorOut($fname->getMessage(), "new");
            }

            // create converted
            $lgm->generateConverted();
            // create scaled
            $lgm->generateScaled();
            // create thumbnail
            $lgm->generateThumbnail();

            return(TRUE);
        }
        /* }}} */

        /* checkDimensions($h, $w) {{{ */
        function checkDimensions($h, $w) {
           if($h >= $w) {
                // tall image or square image
                // check against the min height
                if(($h >= LGM_MIN_WIDE) && ($w >= LGM_MIN_LONG))
                    return(TRUE);
                return(FALSE);
            } else {
                // wide image
                if(($w>= LGM_MIN_WIDE) && ($h >= LGM_MIN_LONG))
                    return(TRUE);
                return(FALSE);
            }
        }
        /* }}} */

        /* getPropertiesArray($fname) {{{ */
        function getPropertiesArray($fname) {
            // this should run "identify" on the image
            $fname = escapeshellarg($fname);
            $attr = exec("/usr/local/bin/identify $fname");
            list($name, $type, $xy, $depth, $size) = explode(" ", $attr);
            list($width, $height) = explode("x",$xy);
            $rVal = array(
                'name'   => $name,
                'type'   => $type,
                'height' => $height,
                'width'  => $width,
                'depth'  => $depth,
                'size'   => $size
            );
            return($rVal);
        }
        /* }}} */

        /* function isValidMime($type) {{{ */
        function isValidMime($type) {
            switch($type) {
                case 'image/png':
                    return('png');
                    break;
                case 'image/jpg':
                case 'image/jpeg':
                    return('jpg');
                    break;
                case 'image/tiff':
                    return('tiff');
                    break;
		        case 'image/pjpeg':
		            return('jpg');
		            break;
                default:
                    return(FALSE);
            }
        }
        /* }}} */

        /* function errorOut($message, $verb) {{{ */
        function errorOut($message, $verb) {
            $this->_errors[] = $message;
            $this->redirect($verb);
        }
        /* }}} */

        function fileWidget() {
            ?>
            <input type="file" name="attachment" />
            <?php
        }

        function titleWidget() {
        }

        function descriptionWidget() {
        }

        /* newMediaQuick() {{{ */
        function newMediaQuick() {
            $pageTitle = "Media Manager :: New Media";
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>New Media :: <?= $this->_vendor->company_name ?></h1>
            </div>
            <?= $this->listErrors(); ?>
            <div id="content">
                <form method="post" action="<?= $this->appUrl(); ?>/new/quickSave" ENCTYPE="multipart/form-data">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->baseUrl(); ?><?= $this->_redirLocation ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" name="" />
                            </td>
                    </table>
                </div>
                <h1>Image</h1>
                <div style="padding: 5px;">
                    <?= $this->fileWidget(); ?>
                    <br />
                    <br />
                    <em>Note:</em> JPEG or TIFF files only.  File must be at least 800 pixels across its major axis.
                </div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->baseUrl(); ?><?= $this->_redirLocation ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" name="" />
                            </td>
                    </table>
                </div>
                </form>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */
        
        /* newMediaInput() {{{ */
        function newMediaInput() {
            $pageTitle = "Media Manager :: New Media";
            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>New Media :: <?= $this->_vendor->company_name ?></h1>
            </div>
            <?= $this->listErrors(); ?>
            <div id="content">
                <form method="post" action="<?= $this->appUrl(); ?>/new/save" ENCTYPE="multipart/form-data">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" name="" />
                            </td>
                    </table>
                </div>
                <h1>Details</h1>
                    <table width="100%" border="0" cellpadding="0" cellspacing="3">
                        <tbody>
                            <tr>
                                <td><strong>Title:</strong></td>
                                <td>
                                    <input type="text" name='title' /> <br />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Description:</strong></td>
                                <td>
                                    <input type="text" name='description' /> <br />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <h1>Image</h1>
                <div style="padding: 5px;">
                    <?= $this->fileWidget(); ?>
                    <br />
                    <br />
                    <em>Note:</em> JPEG or TIFF files only.  File must be at least 800 pixels across its major axis.
                        
                </div>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save.gif" name="" />
                            </td>
                    </table>
                </div>
                </form>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        function saveItem($id) {
            $lgm = new lead_generator_media();
            $lgm->load($id);

            $lgm->setTitle($_REQUEST['title']);
            $lgm->setDescription($_REQUEST['description']);
            $lgm->save();

            $this->redirect();
        }

        /* editItem($id) {{{ */
        function editItem($id) {
            $pageTitle = "Media Manager";
            $lgm = new lead_generator_media();

            $lgm->load($id);
            
            require('views/lead_generator/header.php');
            //$mediaArray =& $this->_storage->getForVendor($this->_vendor->id);
            ?>
            <div id="header">
                <h1>Media Item :: <?= $this->_vendor->company_name ?></h1>
            </div>
            <?= $this->listErrors(); ?>
            <div id="content">
                <form method="post" action="<?= $this->appUrl(); ?>/view/<?= $lgm->id(); ?>/save">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
                            </td>
                    </table>
                </div>
                <h1>Media Item #<?= $id ?> :: <?= $lgm->title() ?></h1>
                <table width="100%" cellpadding="0" cellspacing="5">
                    <tbody>
                        <tr>
                            <td>
                                <a href="<?= $lgm->convertedFileURI(); ?>">
                                <?php $lgm->scaledElement(); ?>
                                </a>
                            </td>
                            <td valign="top">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top">
                                                <strong>Title: </strong> 
                                            </td>
                                            <td valign="top">
                                                <input type="text" name="title" value="<?= $lgm->title(); ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <strong>Description: </strong> 
                                            </td>
                                            <td valign="top">
                                                <input type="text" name="description" value="<?= $lgm->description(); ?>" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr noshade size="-1" />
                                <strong>Height: </strong> 
                                <?= $lgm->height(); ?> <br />
                                <strong>Width: </strong> 
                                <?= $lgm->width(); ?> <br />
                                <strong>Format: </strong> 
                                <?= $lgm->format(); ?> <br />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td class="right">
                                <input type="image" src="/imgz/vendor/save_contact.gif" border="0" />
                            </td>
                    </table>
                </div>
                </form>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* viewItem($id) {{{ */
        function viewItem($id) {
            $pageTitle = "Media Manager";
            $lgm = new lead_generator_media();

            $val = $lgm->load($id);
           // print_r($val); die;
            require('views/lead_generator/header.php');
            //$mediaArray =& $this->_storage->getForVendor($this->_vendor->id);
            ?>
            <div id="header">
                <h1>Media Item :: <?= $this->_vendor->company_name ?></h1>
            </div>
            <?= $this->listErrors(); ?>
            <div id="content">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
                <h1>Media Item #<?= $id ?> :: <?= $lgm->title() ?></h1>
                <table width="100%" cellpadding="0" cellspacing="5">
                    <tbody>
                        <tr>
                            <td>
                                <a href="<?= $lgm->convertedFileURI(); ?>">
                                <?php $lgm->scaledElement(); ?>
                                </a>
                            </td>
                            <td valign="top">
                                <strong>Description: </strong> <?= $lgm->description(); ?> <br />
                                <hr noshade size="-1" />
                                <strong>Height: </strong> <?= $lgm->height(); ?> <br />
                                <strong>Width: </strong> <?= $lgm->width(); ?> <br />
                                <strong>Format: </strong> <?= $lgm->format(); ?> <br />
                                <br />
                                <br />
                                <center>
                                    <a href="<?= $this->appUrl(); ?>/view/<?= $lgm->id(); ?>/edit"><img src="/imgz/vendor/edit_contact.gif" border="0" /></a>
                                    <a href="<?= $this->appUrl(); ?>/delete/<?= $lgm->id(); ?>"><img src="/imgz/vendor/delete_contact.gif" border="0" /></a>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->appUrl(); ?>"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* controlCenter() {{{ */
        function controlCenter() {
            $pageTitle = "Media Manager";
            require('views/lead_generator/header.php');
            $mediaArray =& $this->_storage->getForVendor($this->_vendor->id);
            ?>
            <div id="header">
                <h1>Media Manager :: <?= $this->_vendor->company_name ?></h1>
            </div>
            <?= $this->listErrors(); ?>
            <div id="content">
                <div class="navButtons borderBottom">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->baseUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;
                                
                            </td>
                    </table>
                </div>
                <div class="floater">
                    [ <a href="<?= $this->appUrl(); ?>/new">new</a> ]
                </div>
                <h1>Photos</h1>
                <table width="100%" border="0" cellpadding="0" cellspacing="3">
                    <?php
                        $this->listRows(&$mediaArray);
                    ?>
                </table>
                <div class="navButtons borderTop">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left">
                                <a href="<?= $this->baseUrl(); ?>"><img src="/imgz/vendor/exit.gif" alt="" border="0" /></a>
                            </td>
                            <td align="right">&nbsp;

                                
                            </td>
                    </table>
                </div>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

        /* listRows($media) {{{ */
        function listRows($media) {
            if(!is_array($media)) {
                print("<tr><td align=\"center\">No media.</td></tr>");
            } else if(count($media)) {
                $chunks =& array_chunk($media, 2);
                foreach($chunks as $chunk) {
                    ?>
                    <tr>
                        <?php $this->printThumbs($chunk); ?>
                    </tr>
                    <?php
                }
            } else {
                print("<tr><td align=\"center\"><center><strong><em>No media.</em></strong></center></td></tr>");
            }
        }
        /* }}} */

        /* printThumbs($chunk) {{{ */
        function printThumbs($chunk) {
            foreach($chunk as $obj) {
                ?>
                <td class="center" height="150" width="150" valign="top">  
                    <a href="<?= $this->appUrl() ?>/view/<?= $obj['id'] ?>">
                        <img src="/products/images/<?php echo $obj[photo]?>" border="1" ?>
                    </a> 
                    <br />
                    <strong><?= $obj['title'] ?></strong> <br />
                    <?= $obj['description'] ?> 
                </td>
                <?php
            }
        }
        /* }}} */

        function id() { return($this->_id); }
        function vendorID() { return($this->_vendor_id); }
        function title() { return($this->_title); }
        function source() { return($this->_source); }
        function sourceType() { return($this->_sourceType); }
        function baseName() { return($this->_basename); }
        function format() { return($this->_format); }
        function height() { return($this->_height); }
        function width() { return($this->_width); }
        function dpi() { return($this->_dpi); }
        function input() { return($this->_input); }
        function edited() { return($this->_edited); }
        function keywords() { 
            if(is_array($keywords))
                return($this->_keywords); 
            else
                return(array());
        }
        function description() { return($this->_description); }
        function notes() { return($this->_notes); }

        function isWide() {
            if($this->width() >= $this->height())
                return(TRUE);
            else
                return(FALSE);
        }

        function setTitle($txt) {
            if(is_string($txt)) {
                $this->_title = $txt;
            }
        }

        function setDescription($txt) {
            if(is_string($txt)) {
                $this->_description = $txt;
            }
        }

        function setInput($input=NULL) {
            if(is_null($input)) {
                $this->_input = time();
            } else {
                $this->_input = $input;
            }
        }

        function setVendorID($v) { if(is_numeric($v)) $this->_vendor_id = $v;}

        function setNotes($notes) {
            if(is_string($notes)) {
                $this->_notes = $notes;
            }
        }

        function setEdited($date) {
            $this->_edited = $date;
        }

        function setSource($source) {
            if(is_string($source)) {
                $this->_source = $source;
            } else {
                return(FALSE);
            }
        }

        function setSourceType($type) {
            // "photographer, illustrator, owner" 
            if(is_string($type)) {
                $this->_sourceType = $type;
            }
        }

        function setBaseName($baseName) {
            if(is_string($baseName)) {
                $this->_basename = $baseName;
            }
        }

        function generateBaseName() {
            return('lg_' . $this->vendorID() . '_' . md5(uniqid(rand(), 1)));
        }

        function setFormat($type) {
            if(is_string($type)) $this->_format = $type;
        }

        function addKeyword($word) { $this->_keywords[] = $word; }

        function setKeywords($words) { 
            if(is_array($words)) {
                $this->_keywords =& $words;
            } else {
                return(FALSE);
            }
        }

        function setHeight($height) { 
            if(is_numeric($height)) $this->_height = $height;
        }

        function setWidth($width) { 
            if(is_numeric($width)) $this->_width = $width;
        }

        /* File name functions {{{ */
        function originalFile() { return( $this->baseName() . '.' . $this->format()); }
        function webFile() { return($this->baseName() . '.jpg'); }

        function scaledFilePath() { 
            return($this->_storagePath . 'scaled/' . $this->webFile()); 
        }
        function thumbnailFilePath() { 
            return($this->_storagePath . 'thumb/' . $this->webFile()); 
        }
        function originalFilePath() { 
            return($this->_storagePath . 'original/' . $this->originalFile());
        }
        function convertedFilePath() { 
            return($this->_storagePath . 'converted/' . $this->webFile()); 
        }
        /* }}} */

        /* URI Functions  {{{ */
        function baseURI() {
            return('/guide/lg/');
        }
        function scaledFileURI() { 
            return($this->baseURI() . 'scaled/' . $this->webFile());
        }

        function originalFileURI() { 
            return($this->baseURI() . 'original/' . $this->originalFile());
        }

        function convertedFileURI() { 
            return($this->baseURI() . 'converted/' . $this->webFile());
        }

        function thumbnailFileURI() { 
            return($this->baseURI() . 'thumb/' . $this->webFile());
        }
        /* }}} */

        /* IMG Element Functions {{{ */
        function scaledElement($ext=NULL) { 
            // but if this is already a scaled element, we shouldn't
            // need to specify size
            /*
            if($this->height() >= $this->width()) {
                $sz = "height=\"400\"";
            } else {
                $sz = "width=\"400\"";
            } */
            print("<img $ext width=\"300\" src=\"" . $this->baseURI() . 
                          "scaled/" . $this->webFile() .
                          "\" border=\"1\" />");
        }

        function thumbnailElement($ext=NULL) { 
            /*
            if($this->height() >= $this->width()) {
                $sz = "height=\"125\"";
            } else {
                $sz = "width=\"125\"";
            }
            */
            print("<img $ext src=\"" . $this->baseURI() . 
                          "thumb/" . $this->webFile() .
                          "\" border=\"1\" />");
        }

        function originalElement() { }

        function convertedElement() { 
            if($this->height() >= $this->width()) {
                $sz = "height=\"" . $this->height() .  "\"";
            } else {
                $sz = "width=\"" . $this->width() .  "\"";
            }
            print("<img src=\"" . $this->baseURI() . 
                          "converted/" . $this->webFile() .
                          "\" $sz border=\"1\" />");
        }

        /* }}} */

        /* imagemagick generate functions {{{ */
        function generateThumbnail() { 
            exec("/usr/local/bin/convert -size 125x125 " .
                $this->originalFilePath() . " -resize 125x125 -colorspace rgb  " . 
                $this->thumbnailFilePath());
            return(TRUE); 
        }

        function generateScaled() { 
            exec("/usr/local/bin/convert -size 400x400 " .
                $this->originalFilePath() . " -resize 400x400 -colorspace rgb " . 
                $this->scaledFilePath());
            return(TRUE);
        }

        function generateConverted() { 
            if($this->format() != 'jpg') {
                // convert into place
                exec("/usr/local/bin/convert " . $this->originalFilePath() . " -colorspace rgb  " . $this->convertedFilePath());
                return(TRUE);
            } else {
                // copy into place
                copy($this->originalFilePath(), $this->convertedFilePath());
                return(TRUE);
            }
        }
        /* }}} */

        /* listMedia($vendor_id) {{{ */
        // list media files for a vendor
        function listMedia($vendor_id) { 
            if(!is_numeric($vendor_id)) return(FALSE);
            $sg = new lead_generator_media_model();

            $list =& $sg->getForVendor($vendor_id);
//   echo "sss".count($list); die;
            if(count($list)) {
                $chunks = array_chunk($list, 2);
                ?>
                <br />
                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                <?php
                foreach($chunks as $chunk) {
                    ?>
                    <tr>
                        <?php
                        foreach($chunk as $item) {
                            ?>
                            <td class="center" height="150" width="150" valign="top">
                                <img width="150" src="/products/images/<?php echo $item[photo];?>" border="1" /> <br />
                                <strong><?= $item['title'] ?></strong>
                            </td>
                            <?php
                        }
                        ?>
                    </tr>
                    <?php
                }
                ?>
                </table>
                <?php
            } else {
                print("<center><strong><em>No media for this vendor.</em></strong></center>");
            }
        }
        /* }}} */

        /* load($id) {{{ */
        function load($id) {
            $this->_storage->clear();
            $this->_storage->fetch($id);
            $sl =& $this->_storage;

            $this->_id = $sl->id;
            $this->setVendorID($sl->vendor_id);
            $this->setBaseName($sl->basename);
            $this->setTitle($sl->title);
            $this->setSource($sl->source);
            $this->setSourceType($sl->sourceType);
            $this->setKeywords(explode(',',$sl->keywords));
            $this->setDescription($sl->description);
            $this->setNotes($sl->notes);
            $this->setFormat($sl->format);
            $this->setHeight($sl->height);
            $this->setWidth($sl->width);
            $this->setInput($sl->input);
            $this->setEdited($sl->edited);
        }
        /* }}} */

        /* delete($id) {{{ */
        // static element
        function delete($id) {
            // TODO: check that the media isn't used in any approvals
            // or other lg's

            $lg = new lead_generator_media();
            $lg->load($id);

            // delete the photos
            unlink($lg->thumbnailFilePath());
            unlink($lg->scaledFilePath());
            unlink($lg->convertedFilePath());
            unlink($lg->originalFilePath());

            $lg->_storage->deleteRow($id);
            return(TRUE);
        }
        /* }}} */

        /* save() {{{ */
        function save() {
            // pull from $this, push into storage, save, set id
            $this->_storage->clear();

            $this->_storage->id = $this->id();
            $this->_storage->vendor_id = $this->vendorID();
            $this->_storage->title = $this->title();
            $this->_storage->source = $this->source();
            $this->_storage->sourceType = $this->sourceType();
            $this->_storage->basename = $this->baseName();
            $this->_storage->keywords = implode(',',$this->keywords());
            $this->_storage->description = $this->description();
            $this->_storage->notes = $this->notes();
            $this->_storage->format = $this->format();
            $this->_storage->height = $this->height();
            $this->_storage->width  = $this->width();
            $this->_storage->input  = $this->input();

            if($this->_storage->commit()) {
                $this->_id = $this->_storage->id;
            }
            return(TRUE);
        }
        /* }}} */

        /* mediaSelector($id) {{{ */
        // static function, requires vendor_id to select from
        function mediaSelector($id) {
            $lg = new lead_generator_media();
            $list = $lg->_storage->getForVendor($id);
            require('views/lead_generator/minHeader.php');
            if(count($list) > 0) {
                foreach($list as $photo) {
                    $lg->load($photo['id']);
                    ?>
                    <strong><?= $lg->title(); ?></strong> <br />
                    <a href="#" onClick="return showPicture(<?= $lg->id(); ?>,'<?= $lg->scaledFileURI(); ?>','<?= $lg->thumbnailFileURI(); ?>')"><? $lg->thumbnailElement(); ?></a>
                    <hr noshade size="-1" />
                    <?php
                }
                ?>
                <strong>Empty</strong> <br />
                <a href="#" onClick="return showPicture(0,'/guide/lg/lg-default.jpg','/guide/lg/lg-thumb-default.jpg')"><img src="/guide/lg/lg-thumb-default.jpg" border="1" /></a>

                <?php
            } else {
                print("<br /><strong><em>No Media to select from!</em></strong>");
            }
            require('views/lead_generator/minFooter.php');
        }
        /* }}} */

        /* photoWidget() {{{
        function photoWidget($id=NULL) {
            // launch selection widget or upload widget
            // which posts back to parent form
            if(!is_numeric($id)) {
                ?>
                <strong><em>No Photos</em></strong>
                <?php
                return(TRUE);
            }
            $this->load($id);
            ?>
            <strong><?= $this->title(); ?></strong>
            <?
        }
        }}} */

        /* photoPicker($args) {{{ */
        function photoPicker(&$args) {
            $this->_redirLocation = $_SERVER['PATH_INFO'];
            $vendor_id = array_pop($args);
            $position  = array_pop($args);
            $photo_id  = array_pop($args);
            $pageTitle = "Photo Picker";


            $lg = new lead_generator_media();

            require('views/lead_generator/header.php');
            ?>
            <div id="header">
                <h1>Photo Picker</h1>
            </div>
            <div id="content">
                <table width="100%" border="0" cellpadding="0" cellspacing="10">
                    <tbody>
                        <tr>
                            <td class="center" width="415" valign="top" rowspan="2">
                                <h1>Current Photo</h1>
                                <br />
                                <?php
                                    if(!is_numeric($photo_id)) {
                                        ?>
                                        <img id="holder" src="/guide/lg/lg-default.jpg" border="1" />
                                        <br />
                                        <br />
                                        <form name="photoPicker" method="GET">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td class="left">
                                                    <a href="javascript:window.close()"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                                                </td>
                                                <td class="right">
                                                        <input id="pictureID" type="hidden" name="photo" value="" />
                                                        <input id="thumbURI" type="hidden" name="thumbURI" value="" />
                                                        <a href="#" onClick="return updateParent(<?= $position ?>)"><img id="saveButton" src="/imgz/vendor/select_contact.gif" border="0" /></a>
                                                    &nbsp;
                                                </td>
                                        </table>
                                        </form>
                                        <?php
                                    } else {
                                        $lg->load($photo_id);
                                        $lg->scaledElement('id="holder"');
                                        ?>
                                        <br />
                                        <br />
                                        <form name="photoPicker" method="GET">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td class="left">
                                                    <a href="javascript:window.close()"><img src="/imgz/vendor/cancel_contact.gif" alt="" border="0" /></a>
                                                </td>
                                                <td class="right">
                                                        <input id="pictureID" type="hidden" name="photo" value="<?= $lg->id(); ?>" />
                                                        <input id="thumbURI" type="hidden" name="thumbURI" value="<?= $lg->thumbnailFileURI(); ?>" />
                                                        <a href="#" onClick="return updateParent(<?= $position ?>)"><img src="/imgz/vendor/save_contact.gif" border="0" /></a>
                                                    &nbsp;
                                                </td>
                                        </table>
                                        </form>
                                        <?php
                                    }
                                ?>
                            </td>
                            <td class="center" valign="top">
                                <h1>Media List</h1>
                                <br />
                                <iframe name="media" id="media" src="<?= $this->baseUrl(); ?>mediaSelector/<?= $vendor_id ?>">Media Selections</iframe>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <a href="<?= $this->appUrl(); ?>/new/quick"><img src="/imgz/vendor/add_contact.gif" border="0" /></a>
                            </td>
                    </tbody>
                </table>
            </div>
            <?php
            require('views/lead_generator/footer.php');
        }
        /* }}} */

    }
?>