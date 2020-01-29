<?php
    require('lead_generator_revision_model.php');
    class lead_generator_revision {
        // data class

        var $_id;
        var $_ref_id;
        var $_revision;
        var $_status;
        var $_company_name;
        var $_phone;
        var $_website;
        var $_content;
        var $_photos;
        var $_edited;
        var $_input;

        var $_storage;

        function lead_generator_revision($lg_id=NULL) { 
            if(!is_null($lg_id)) {
                $this->_ref_id = $lg_id; 
            }

            $this->_storage = new lead_generator_revision_model();
        }

        function id() { return($this->_id); }
        function lgID() { return($this->_ref_id); }
        function revision() { return($this->_revision); }
        function status() { return($this->_status); }
        function companyName() { return(ucwords($this->_company_name)); }
        function phoneNumber() { return($this->_phone); }
        function website() { return($this->_website); }
        function webURL() { return("http://" . $this->_website); }
        function content() { return($this->_content); }
        function photos() { return($this->_photos); }

        function setCompanyName($name) {
            if(is_string($name)) {
                $this->_company_name = stripslashes($name);
                return(TRUE);
            }
            return(FALSE);
        }

        function setPhoneNumber($phone) {
            if(is_string($phone)) {
                $this->_phone = $phone;
                return(TRUE);
            }
            return(FALSE);
        }

        function setWebsite($site) {
            if(is_string($site)) {
                $this->_website = $site;
                return(TRUE);
            }
            return(FALSE);
        }

        function setContent($text) {
            if(is_string($text)) {
                // compress newlines and the like, as they aren't allowed
                $this->_content = stripslashes(preg_replace("/\s+/"," ",$text));
            }
            return(TRUE);
        }

        function setPhotos($photos) {
            if(is_array($photos)) {
                $this->_photos = $photos;
            }
            return(TRUE);
        }

        function charCount() { return(strlen(utf8_decode($this->content()))); }
        function companyCharCount() { return(strlen(utf8_decode($this->companyName()))); }

        /* createFromVendor($vObj) {{{ ( */
        function createFromVendor($vObj=NULL) {
            if(is_null($vObj)) return(FALSE);

            $c = new contact();
            $c->fetchContact('ven',$vObj->id,'company');

            $this->setCompanyName($vObj->company_name);
            $this->setWebsite($vObj->website);
            $this->setPhoneNumber($c->getPhoneNumber());
            $this->setContent("");
            $this->setPhotos(array());
            $this->save();
        }
        /* }}} */

        /* save() {{{*/
        function save() {
            $sp =& $this->_storage;
            $sp->id       = NULL;
            // increment the revision
            $sp->revision = $sp->latestRevisionID($this->lgID()) + 1;
            $sp->ref_id   = $this->lgID();
            $sp->input    = time();
            $sp->edited   = NULL;
            $sp->status   = NULL;
            $sp->company_name = $this->companyName();
            $sp->website  = $this->website();
            $sp->phone    = $this->phoneNumber();
            $sp->content  = $this->content();
            $sp->photos   = implode(',',$this->photos());

            $this->_id       = $sp->commit();
            $this->_revision = $sp->revision;
            return(TRUE);
        }
        /* }}} */

        /* loadRevision($revision) {{{ */
        // load a particular revision--default to the current
        function loadRevision($rev=NULL) {
            $this->_storage->fetchRevision(&$rev);
            $sp =& $this->_storage;

            $this->_id       = $sp->id;
            $this->_ref_id   = $sp->ref_id;
            $this->_revision = $sp->revision;
            $this->_status   = $sp->status;
            $this->_edited   = $sp->edited;
            $this->_input    = $sp->input;

            $this->setCompanyName($sp->company_name);
            $this->setWebsite($sp->website);
            $this->setPhoneNumber($sp->phone);
            $this->setContent($sp->content);
            $this->setPhotos(explode(',',$sp->photos));
            return(TRUE);
        }
        /* }}} */

        /* load($revision_id) {{{ */
        function load($lg_rev_id=NULL) {
            if(is_null($lg_rev_id)) return(FALSE);

            $lgr = new lead_generator_revision();
            $lgr->_storage->fetch(&$lg_rev_id);
            $sp =& $lgr->_storage;

            $lgr->_id       = $sp->id;
            $lgr->_ref_id   = $sp->ref_id;
            $lgr->_revision = $sp->revision;
            $lgr->_status   = $sp->status;
            $lgr->_edited   = $sp->edited;
            $lgr->_input    = $sp->input;

            $lgr->setCompanyName($sp->company_name);
            $lgr->setWebsite($sp->website);
            $lgr->setPhoneNumber($sp->phone);
            $lgr->setContent($sp->content);
            $lgr->setPhotos(explode(',',$sp->photos));
            return($lgr);
        }
        /* }}} */

        /* deleteRevisions($id=NULL) {{{ */
        // static method, delete all the revisions for an LG id
        function deleteRevisions($id=NULL) {
            if(is_null($id)) return(FALSE);
            if(!is_numeric($id)) return(FALSE);

            $lgm = new lead_generator_revision_model();
            $revisions = $lgm->getRevisionArray($id);
            foreach($revisions as $i) {
                $lgm->deleteRow($i['id']);
            }
            return(TRUE);
        }
        /* }}} */

        /* getRevisionArray($id=NULL) {{{ */
        function getRevisionArray($id=NULL) {
            $lgm = new lead_generator_revision_model();
            return($lgm->getRevisionArray($id));
        }
        /* }}} */

        function showPhotos() {
            foreach($this->photos() as $photo_id) {
                $this->showPhoto($photo_id);
            }
        }

        function approvalImages() {
            $lgm = new lead_generator_media();

            foreach($this->photos() as $photo_id) {
                $lgm->load($photo_id);
                print($lgm->scaledElement() . " ");
            }
        }

        function showPhoto($photo_id,$id=NULL) {
            if(is_numeric($photo_id)) {
                $lgm = new lead_generator_media();
                $lgm->load($photo_id);
                print($lgm->thumbnailElement($id));
            } 
        }

        function companyNameWidget() {
            ?>
            <input type="text" name="companyName" size="40" maxlength="255" value="<?= $this->companyName(); ?>" />
            <?php
        }

        function websiteWidget() {
            ?>
            <input type="text" name="website" size="40" maxlength="255" value="<?= $this->website(); ?>" />
            <?php
        }

        function phoneWidget() {
            ?>
            <input type="text" name="phone" size="40" maxlength="255" value="<?= $this->phoneNumber(); ?>" />
            <?php
        }

        function contentWidget() {
            ?>
            <textarea rows="10" cols="40" name="content"><?= $this->content(); ?></textarea>
            <?php

        }

        function checkCompanyName($name) {
            return(TRUE);
        }

        function checkPhoneNumber($number) {
            return(TRUE);
        }

        function checkWebsite($site) {
            return(TRUE);
        }

        function checkContent($content) {
            return(TRUE);
        }

        function getHashString() {
            return(
                $this->revision() . 
                $this->companyName() .
                $this->phoneNumber() .
                $this->website() .
                implode($this->photos()) .
                $this->content());
        }

        function generateHash() {
            // calculates an sha1 hash for the lg revision
            // company name + phone + website + content + pictureID
            return(sha1($this->getHashString()));
        }
    }
?>
