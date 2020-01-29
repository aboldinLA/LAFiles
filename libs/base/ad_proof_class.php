<?php
require_once("template_class.php");
require_once("ylist_class.php");
require_once("vendor_class.php");
require_once("HTTP/Upload.php");

class ad_proof extends template_class {
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
    var $vendor_id;
    var $ad_type;
    var $ad_magazines;
    var $ad_text;
    var $ad_images;
    var $ad_images2;
    var $ylist;
    var $last_emailed;
    var $edited;
    var $approved;

    function ad_proof($record=NULL) {
        // table name
        $table   = "ad_proofs";
        // list of db columns
        $columns = array(
            'id',
            'vendor_id',
            'ad_type',
            'ad_magazines',
            'ad_text',
            'ad_images',
            'ad_images2',
            'ylist',
            'last_emailed',
            'edited',
            'approved'
        );
        $this->instantiate($table,$columns,$record);
    }

    function action($action = 'default', $vars = NULL) {
        $this->clearErrors();
        $this->input($vars);
    }

    function yListWidget() {
        $y = new ylist_class();
        //print("<table width='100%' border='0' cellpadding='0' cellspacing='0'>");
        //$y->displayAll(',$this->ylist));
        //print("</table>");
        $y->displayLayers(explode(',',$this->ylist));
        return(FALSE);
    }


    /*
        adProofTypes($type), default type instance ad_type
    */
    function adTypeWidget($type=NULL) {
        if(is_null($type)) {
            $type = $this->ad_type;
        }

        $types = array(
            0 => 'Single, 1 Image',
            1 => 'Double, 1 Image',
            2 => 'Double, 2 Image'
        );

        print("<select name='ad_type'>");
        foreach($types as $val => $label) {
            $s = ($type == $val) ? 'selected' : '';
            print("<option value='$val' $s>$label</option>");
        }
        print("</select>");
    }


    function setYlist($ylist = NULL) {
        if(is_null($ylist) || !is_array($ylist)) {
            $this->addErrors("Missing ylist selection!");
            return(FALSE);
        }
        if(count($ylist) != 1) {
            $this->addErrors("Please select only ONE ylist classification.");
        } else {
            $this->ylist = implode(',',$ylist);
            unset($this->edited);
            return(TRUE);
        }
    }

    function setAdMagazines($magazines=NULL) {
        if(is_null($magazines)) {
            return(FALSE);
        } else if(is_array($magazines)) {
            $this->ad_magazines = implode(',',$magazines);
        } else if(is_string($magazines)) {
            $this->ad_magazines = $magazines;
        }
        unset($this->edited);
        return(TRUE);
    }

    function setVendorID($id=NULL) {
        if(is_null($id)) {
            if(!is_null($this->vendor_id)) {
                return(TRUE);
            } else {
                $this->addErrors("Missing vendor ID!");
            }
        } else if(is_string($id) || is_numeric($id)) {
            $this->vendor_id = $id;
            unset($this->edited);
            return(TRUE);
        }
    }

    function setAdType($type=NULL) {
        if(is_null($type)) {
            return(FALSE);
        } else if(is_string($type) || is_numeric($type)) {
            $this->ad_type = $type;
            unset($this->edited);
            return(TRUE);
        }
    }

    function adMagazinesWidget($types=NULL) {
        $list = $this->ad_magazines;
        if(is_string($list)) {
            $list = explode(',',$list);
        } else if(!is_array($list)) {
            $list = array();
        }
        /*
        if(is_array($types)) {
            // array list 
            $
        } else if (is_string($types)) {
            $list = explode(',',$types);
        } else {
        } */

        $magazines = array(
            'LCN' => 'LCN Buyers Guide',
            'LASN' => 'LASN Specifiers Guide',
            'LSMP' => 'LSMP Specifiers Guide'
        );

        foreach($magazines as $id => $name) {
            if(in_array($id,$list)) {
                $s = 'checked';
            } else {
                $s = '';
            }
            print("<input type='checkbox' name='ad_magazines[]' $s value='$id' /> $name ");
        }
    }

    function adEmailWidget($address=NULL) {
        print("<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>");
        print("<input type='hidden' name='action' value='email' />");
        print("<input type='hidden' name='proof_id' value='" . $this->id . "' />");
        print("<input type='text' maxlength='128' size='20' name='emailProof' value='$address' />&nbsp;");
        print("<input type='submit' name='send' value='send' />");
        print("</form>");
    }

    function adTextWidget($text=NULL) {
        if(is_null($text)) {
            $text = $this->ad_text;
        }
        $text = stripslashes($text);
        // DO NOT RUN html_entity_decode.  It'll cause an access violation and kill IIS
        //$text = html_entity_decode($text);
        print("<textarea name='ad_text' cols='60' rows='20'>$text</textarea>");
    }

    function adImageWidget() {
        if(is_null($this->ad_images)) {
            $image = 'ad_default.gif';
        } else {
            $image = $this->ad_images;
        }
        print("<img src='/guide/img/$image' width='200' border='0' /><br /><br />");
        print("<input type='file' name='ad_image' />");
    }

    function adImageWidget2() {
        if(is_null($this->ad_images2)) {
            $image = 'ad_default.gif';
        } else {
            $image = $this->ad_images2;
        }
        print("<img src='/guide/img/$image' width='200' border='0' /><br /><br />");
        print("<input type='file' name='ad_image2' />");
    }

    function setAdText($text) {
        if(is_null($text)) {
            $text = $this->ad_text;
        } else {
            //$text = $this->cleanText(htmlspecialchars($text));
            $text = htmlspecialchars($text);
        }

        switch($this->ad_type) {
            case 0:
                $limit = 275;
                break;
            case 1:
                $limit = 655;
                break;
            case 2:
                $limit = 439;
                break;
        }

        if(strlen($text) > $limit) {
            $this->ad_text = $text;
            $this->addErrors("Text size of " . strlen($text) . " exceeds maximum of $limit for this ad type.");
            return(FALSE);
        }

        if($this->ad_text == $text) {
            // we didn't change anything.
            return(TRUE);
        } else {
            $this->ad_text = $text;
            unset($this->edited);
            return(TRUE);
        }
    }

    function checkImageFile(&$file) {
        if(is_null($file)) {
            $this->addErrors("Missing image argument.");
            return(FALSE);
        } else if(PEAR::isError($file)) {
            $this->addErrors("Error from file.");
            return(FALSE);
        } else if($file->isMissing()) {
            $this->addErrors("Missing required file.");
            return(FALSE);
        } else {
            return(TRUE);
        }
    }

    function checkImageProps(&$props) {
        if(is_null($props)) {
            $this->addErrors("Missing properties.");
            return(FALSE);
        }
        if($props['size'] > 262144) {
            $this->addErrors("Image size of " . $props['size'] . " is larger than 256K");
            return(FALSE);
        } else if(strpos($props['type'],'image') === FALSE) {
            $this->addErrors("Unknown Mime Type: " . $props['type']);
            return(FALSE);
        } else if($props['ext'] != 'gif' && $props['ext'] != 'jpg') {
            $this->addErrors("Unknown Image Type: " . $props['ext']);
            return(FALSE);
        }
        return(TRUE);
    }

    function setAdImages() {
        global $file_path;
        $up = new HTTP_Upload();

        if($this->ad_type == 2) {
            $image2 = $up->getFiles('ad_image2');
            if(PEAR::isError($image2) || $image2->isMissing()) {
                if(strlen($this->ad_images2) == 0) {
                    $this->addErrors($image2->getMessage());
                }
            } else if($image2->isValid()) {
                // else, if we have a valid upload, lets handle it
                $image2->setName('uniq','proof_');
                $props2 = $image2->getProp();
                if($this->checkImageProps($props2)) {
                    // move  the file
                    $fname2 = $image2->moveTo($file_path . 'web/guide/img');
                    if(PEAR::isError($fname2)) {
                        $this->addErrors($fname2->getMessage());
                    } else {
                        if(strlen($this->ad_images2) > 0) {
                            unlink($file_path . 'web/guide/img/' . $this->ad_images2);
                        }
                        $this->ad_images2 = $props2['name'];
                        unset($this->edited);
                    }
                } 
            }
        }

        $file = $up->getFiles('ad_image');
        if(PEAR::isError($file) || $file->isMissing()) {
            // if there's a problem with the upload and we don't have a current file.. that's pretty darn fatal
            if(strlen($this->ad_images) == 0) {
                $this->addErrors($file->getMessage());
            } 
        } else if($file->isValid()) {
            // else, if we have a valid upload, lets handle it
            $file->setName('uniq','proof_');
            $props = $file->getProp();
            if($this->checkImageProps($props)) {
                // move  the file
                $fname = $file->moveTo($file_path . 'web/guide/img');
                if(PEAR::isError($fname)) {
                    $this->addErrors($fname->getMessage());
                } else {
                    if(strlen($this->ad_images) > 0) {
                        unlink($file_path . 'web/guide/img/' . $this->ad_images);
                    }
                    $this->ad_images = $props['name'];
                    unset($this->edited);
                }
            } else {
                return(FALSE);
            }
        }

        return(TRUE);

        /*
        if(PEAR::isError($file)) {
            if(strlen($this->ad_images) == 0) {
                // if we have an error AND we have no current image..
                $this->addErrors($file->getMessage());
            }
        } else if($file->isMissing()) {
            if(strlen($this->ad_images) == 0) {
                $this->addErrors("Missing or invalid required image.");
            }
        } else {
            if($file->isValid()) {
                $file->setName('uniq','proof_');
                $props = $file->getProp();
                if($props['size'] > 262144) {
                    print("<strong>Error: Image size of " . $props['size'] . " is larger than 256K</strong><br />");
                } else if(strpos($props['type'],'image') === FALSE) {
                    print("<strong>Error: Unknown Mime Type: " . $props['type'] . "</strong><br />");
                } else if($props['ext'] != 'gif' && $props['ext'] != 'jpg') {
                    print("<strong>Unknown Image Type: " . $props['ext'] . "</strong><br />");
                } else {
                    $file_name = $file->moveTo($file_path . 'web/guide/img');
                    if(PEAR::isError($file_name)) {
                        $this->addErrors($file_name->getMessage());
                    } else {
                        if(strlen($this->ad_images) > 0) {
                            // delete old file
                            unlink($file_path . 'web/guide/img/' . $this->ad_images);
                        }
                        $this->ad_images = $props['name'];
                        unset($this->edited);
                        return(TRUE);
                    }
                }
            } else {
                // bad file.. badddd file
            }
        } */
    }

    function fetchByVendorID($id=NULL) {
        // find ad_proof rows that match a vendor id
        if(is_null($id)) {
            return(FALSE);
            /*
            $this->ad_text   = 'Example Text';
            $this->ad_images = 'ad_default.gif';
            return(FALSE); */
        }

        $query = "select id from " . $this->dbTable . " where vendor_id = " . $id;
        if(DB::isError($result = $this->db->getAll($query))) {
            $this->dbError('fetchByVendorID::query', $result);
            return(FALSE);
        }

        if(count($result) == 1) {
            $this->fetch($result[0]['id']);
            return(TRUE);
        } else if(count($result) == 0)  {
            $this->vendor_id = $id;
            return(FALSE);
        }
        return(TRUE);
    }

    function cleanText($string) {
        return strtr($string, 
        "\x80\x81\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x8b".
        "\x8c\x8d\x8e\x8f\x90\x91\x92\x93\x94\x95\x96\x97".
        "\x98\x99\x9a\x9b\x9c\x9d\x9e\x9f\xa1\xa4\xa6\xa7".
        "\xa8\xab\xac\xae\xaf\xb4\xbb\xbc\xbe\xbf\xc0\xc1".
        "\xc2\xc7\xc8\xca\xcb\xcc\xd6\xd8\xdb\xe1\xe5\xe6".
        "\xe7\xe8\xe9\xea\xeb\xec\xed\xee\xef\xf1\xf2\xf3".
        "\xf4\xf8\xfc\xd2\xd3\xd4\xd5",
        "\xc4\xc5\xc7\xc9\xd1\xd6\xdc\xe1\xe0\xe2\xe4\xe3".
        "\xe5\xe7\xe9\xe8\xea\xeb\xed\xec\xee\xef\xf1\xf3".
        "\xf2\xf4\xf6\xf5\xfa\xf9\xfb\xfc\xb0\xa7\xb6\xdf\xae".
        "\xb4\xa8\xc6\xd8\xa5\xaa\xba\xe6\xf8\xbf\xa1\xac".
        "\xab\xbb\xa0\xc0\xc3\xf7\xff\xa4\xb7\xc2\xca\xc1".
        "\xcb\xc8\xcd\xce\xcf\xcc\xd3\xd4\xd2\xda\xdb\xd9".
        "\xaf\xb8\x22\x22\x27\x27");
    }

    function displayVendorEditor($id=NULL) {
        $V = new vendor_class();
        if(!is_null($id)) {
            $V->fetch($id);
            $this->fetchByVendorID($id);
        } else {
            $V->fetch($this->vendor_id);
        }
        ?>
<html>
    <head>
        <title><?= $V->comp_name ?>: Proof [ Landscape Online ]</title>
        <style type='text/css' media='screen'>@import "/res/css/guide.css";</style>
        <style type='text/css' media='print'>@import "/res/css/guide.css";</style>
    </head>
    <body>
        <div id='wrapper'>
            <div id='header'>
                <a href='/' alt='LandscapeOnline.com' title='Landscape Online Home - News'><img id='mainlogo' src='/imgz/main_lol_logo.gif' width='270' height='60' border='0' /></a>
            </div>
            <div id='title'><h1>Proof Editor</h1></div>
            <div class='clearer'>&nbsp;</div>
        <?
    }

    function displayVendorAd($id=NULL) {
        $V = new vendor_class();
        if(!is_null($id)) {
            $V->fetch($id);
            $this->fetchByVendorID($id);
        } else {
            if(!is_null($this->vendor_id)) {
                $V->fetch($this->vendor_id);
                $this->fetchByVendorID($id);
            } else {
                $V->comp_name = 'Example Company';
                $V->area_code = '800';
                $V->phone = '555-1212';
                $V->address = '1234 Example Street';
                $V->city = 'No Where';
                $V->state = 'NO';
                $V->zip = '12345';
            }
        }
        ?>
<html>
    <head>
        <title><?= $V->comp_name ?>: Proof [ Landscape Online ]</title>
        <style type='text/css' media='screen'>@import "/res/css/guide.css";</style>
        <style type='text/css' media='print'>@import "/res/css/guide.css";</style>
    </head>
    <body>
        <div id='wrapper'>
            <div id='header'>
                <a href='/' alt='LandscapeOnline.com' title='Landscape Online Home - News'><img id='mainlogo' src='/imgz/main_lol_logo.gif' width='270' height='60' border='0' /></a>
            </div>
            <div id='title'><h1>Lead Generator Proof</h1></div>
            <div class='clearer'>&nbsp;</div>
            <div id='pagebody'>
                <?= $this->displayStatus(); ?>
                <?= $this->displayCompanyInformation($V); ?>
                <?= $this->displayProof($V); ?>
                <div class='bar'>Categories &amp; Instructions</div>
                <br />
                <?= $this->displayCategories($V); ?>
                <div id='instructions'>
                    <p>To approve this lead generator, please print this page, sign your approval and fax it to (714) 979-3543.</p>
                    <p>If you want to modify the text, make changes on a printed copy and fax it to (714) 979-3543.</p>
                    <?= $this->displayEditorContact($V->comp_name); ?> 
                </div>
                <div class='clearer'>&nbsp;</div>
                <div id='adNote'>
                    <p>If you need to make image or copy corrections to this proof, please contact an editor regarding your changes <strong>upon receipt</strong>.</p>
                    <p>You can add a lead generator or increase the size of this ad for only $295.00! Just click on the button below to be contacted regarding this offer. <br /></p>
                    <a href='<?= $_SERVER['PHP_SELF'] ?>?id=<?= $this->vendor_id ?>&contact_me=1'><img src='/imgz/contact_me.gif' border='0' /></a>
                </div>
                <br />
                <?= $this->displayLogin(); ?>
                <div class='clearer'>&nbsp;</div>
            </div>
            <div id='footer'>
                &copy; Landscape Communications Inc. 2004
            </div>
        </div>
    </body>
</html>
            <?
    }

    function displayLogin() {
        ?>
        <div class='bar'>Modifications</div>
        <div id='modifications'>
            <form method='post' action='/member/login.php' name='loginform' id='loginf'>
                <strong>Vendor Password:</strong> <input type='password' name='password' maxlength='10' />
                <input type='submit' value='Enter' />
                <input type='hidden' name='action' value='login' />
                <input type='hidden' name='t' value='v' />
                <input type='hidden' name='npage' value='/vendor/profile.php?action=edit' />
            </form>
            <hr noshade size='-1' />
            <p>You can modify your company phone, address, profile, and target demographics by entering your vendor password here.</p>
        </div>
            
        <?
    }

    function displayProof(&$V) {
        ?>
        <div class='bar'>Proof</div>
        <div id='adproof'>
            <div id='adimage'>
                <h2>Image(s)</h2>
                <? 
                    $this->displayAdImage(); 
                ?>
            </div>
            <div id='adtext'>
                <h2>Text</h2>
                <?= $this->displayAdText($V); ?>
            </div>
            <div class='clearer'>&nbsp;</div>
        </div>
        <?
    }

    function displayAdSize() {
        switch($this->ad_type) {
            case 0:
                $text = "Single, 1 Image (2.871\" x 2.125\")";
                break;
            case 1:
                $text = "Double, 1 Image (5.88\" x 2.125\")";
                break;
            case 2:
                $text = "Double, 2 Image (5.99\" x 2.125\")";
                break;
            default:
                break;
        }
        print($text);
    }

    function displayCompanyInformation(&$V)  {
        ?>
        <div class='bar'>Company Information</div>
        <div id='companyinfo'>
            <h2><?= $V->comp_name ?></h2>
            <dl>
                <dt>Address</dt>
                <dd><?= $V->displayAddress(); ?></dd>
                <dt>Phone</dt>
                <dd><?= $V->displayPhoneNumber(); ?></dd>
                <dt>Website</dt>
                <dd><?= $V->displayWebsite(); ?></dd>
            </dl> 
            <p class='fineprint'>Please note that the phone number listed above is the one that will appear in the guide.</p>

        </div>
        <div id='companylogo'><?= $V->displayCompanyLogo(); ?></div> 
        <?
    }

    function displayCategories(&$V) {
        $y = new ylist_class();
        ?>
        <div id='categories'>
            <h2>Magazines</h2>
            <p>This lead generator will appear in the following guides: </p>
            <ul>
                <? $this->displayMagazines(); ?>
            </ul>
            <h2>Size</h2>
            <p><?= $this->displayAdSize(); ?></p>
            <h2>Categories</h2>
            <p>This ad will appear in the following categories: </p>
            <ul><? 
                foreach($this->getYlistArray() as $xl) {
                    print("<li>" . ucwords($xl['name']) . "</li>");
                }
                ?>
            </ul>
        </div>
        <?
    }

    function getYlistArray() {
        $y = new ylist_class();
        if(is_null($this->ylist)) {
            return(array(array('name' => 'None')));
        } else {
            return($y->fetchYlistArray(explode(',',$this->ylist)));
        }
    }

    function displayMagazines() {
        $magList = array(
            'LCN'  => 'LCN Buyers Guide',
            'LASN' => 'LASN Specifiers Guide',
            'LSMP' => 'LSMP Buyers Guide'
        );
        
        $ar = explode(',',$this->ad_magazines);
        if(count($ar) == 0) {
            print("<li>None</li>");
        }  else {
            foreach($magList as $key => $name) {
                if(in_array($key, $ar)) {
                    print("<li><img src='/imgz/cb_s.gif' border='0' /> {$name}</li>");
                } else {
                    print("<li><img src='/imgz/cb_n.gif' border='0' /> {$name}</li>");
                }
            }
        }
        return(TRUE);

        /*
        $list = array();
        foreach($ar as $key) {
            if(array_key_exists($key, $magList)) {
                print("<li></li>");
            }
            switch($key) {
                case 'LCN':
                    $list[] = 'LCN Buyers Guide';
                    break;
                case 'LASN':
                    $list[] = 'LASN Specifiers Guide';
                    break;
                case 'LSMP':
                    $list[] = 'LSMP Specifiers Guide';
                    break;
            }
        }
        return($list);
        */
    }

    function displayEditorContact($company) {
        $company = strtoupper($company);
        if($company[0] <= 'H') {
            ?>
            <p>The editor for this proof is <a href='mailto:gharris@landscapeonline.com'>Gregory V. Harris</a>, who can be reached at (714) 979-5276.</p>
            <?
        } else if($company[0] <= 'P') {
            ?>
            <p>The editors for this proof are 
                <a href='mailto:bfordyce@landscapeonline.com'>Bruce Frodyce</a> and 
                <a href='mailto:skelly@landscapeonline.com'>Steve Kelly</a>.
            They can be reached at (714) 979-5276.</p>
            <?
        } else {
            ?>
            <p>The editors for this proof are 
                <a href='mailto:gharris@landscapeonline.com'>Greg Harris</a> and 
                <a href='mailto:lshield@landscapeonline.com'>Larry Shield</a>.
            They can be reached at (714) 979-5276.</p>
            <?
        }
    }

    function displayAdText(&$V) {
        if(strlen($this->ad_text) > 0) {
            print(nl2br(stripslashes($this->ad_text)));
            print("<br />");
            print("<br />");
            $V->displayPhoneNumber();
            print("<br />");
            $V->displayWebsite();
        } else {
            print("Example Text.");
        }
    }

    function displayAdImage() {
        if(strlen($this->ad_images) > 0) {
            $image = $this->ad_images;
        } else {
            $image = 'ad_default.gif';
        }
        print("<img src='/guide/img/$image' border='0' width='275' />");
        if($this->ad_type == 2) {
            $image2 = (strlen($this->ad_images2) > 0) ? $this->ad_images2 : 'ad_default.gif';
            print("<br /><img src='/guide/img/$image2' border='0' width='275' />");
        }
    }

    function notifySales() {
        $V = new vendor_class();
        $V->fetch($this->vendor_id);
        return($V->salesContact("Company wishes to bump up their lead generator."));
    }

    function displayStatus() {
        if($this->errors()) {
        } else if(isset($_REQUEST['contact_me'])) {
            ?>
            <div class='bar'>Contact Information</div>
            <h2>&nbsp;&nbsp;Your request for more information has been sent!  Your account representative will contact you right away.</h2>
            <?
        }
    }

}
?>
