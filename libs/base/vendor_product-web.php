<?php
require_once("template_class.php");
require_once("transaction_class.php");
require_once("vendor_login.php");

class vendor_product extends template_class {
    // meta
    var $parentName;
    var $errList;
    var $stage;
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
    var $product_name;
    var $description;
    var $web;
    var $photo;

    function vendor_product() {
        // table name
        $table   = "vendor_product";
        // list of db columns
        $columns = array(
            'id',
            'vendor_id',
            'product_name',
            'description',
            'web',
            'photo'
        );
        $this->instantiate($table,$columns,$record);
    }

    function fetchVendorArray($vid) {
        if(is_null($vid)) return(FALSE);

        $sql = "SELECT * FROM {$this->dbTable} WHERE vendor_id=$vid order by photo_time DESC";
        if(DB::isError($results = $this->db->getAll($sql))) {
            $this->dbError("fetchProducts",$results);
        }

        return($results);
    }

    function handleUploadedImage(& $iRef) {
        global $file_path;

        $maxwidth  = 1600;
        $maxheight = 1200;

        $original = $iRef['tmp_name'];

        if(($imgInfo = getImageSize($original)) === FALSE) {
            $this->addErrors("Uploaded image is not a valid file.");
            return(TRUE);
        }

        list($width, $height, $type, $attr) = $imgInfo;
        $mime = $imgInfo['mime'];

        switch($type) {
            case IMAGETYPE_GIF:
                $imgHandle = imagecreatefromgif($original);
                break;
            case IMAGETYPE_JPEG:
                $imgHandle = imagecreatefromjpeg($original);
                break;
            default:
                $this->addErrors("Uploaded image is not a .GIF or .JPG");
                return(TRUE);
                break;
        }

        if(!$imgHandle) {
            $this->addErrors("Unable to open temporary file.");
            return(TRUE);
        }

        $outputName = "prod_" . md5(uniqid(rand(), TRUE)) . '.jpg';

        if(($width >= $height) && ($width > $maxwidth)) {
            $ratio = $maxwidth / $width;
            $h = (int) ($height * $ratio);
            $w = $maxwidth;
        } else if(($height > $width) && ($height > $maxheight)) {
            $ratio = $maxheight / $height;
            $w = (int) ($width * $ratio);
            $h = $maxheight;
        } else {
            $w = $width;
            $h = $height;
        }

        $gdr = imageCreateTrueColor($w, $h);

        if(!imageCopyResampled($gdr, $imgHandle, 0, 0, 0, 0, $w, $h, $width, $height)) {
            $this->addErrors("Image Sampling Failed.");
            return(TRUE);
        }

        $filename = $file_path . "public_html/products/images/" . $outputName;

        if(!imageJpeg($gdr, $filename, 70)) {
            $this->addErrors("Error writing image file.");
        }

        if(isset($this->photo) && strlen($this->photo) > 0) {
            unlink($file_path . "public_html/products/images/" . $this->photo);
        }

        $this->photo = $outputName;
        return(TRUE);

    }

    function deleteRecord($id) {
        global $file_path;

        $this->fetch($id);
        unlink($file_path . "public_html/products/images/" . $this->photo);

        return($this->deleteRow($id));
    }
}
?>
