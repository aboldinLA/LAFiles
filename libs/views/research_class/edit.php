<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="5" width="100%">
    <tr>
        <td align="right"><strong>Issue Date</strong></td>
        <td><?= $this->dateInputs($issue); ?></td>
    </tr>
    <tr>
        <td align="right"><strong>Publish Date</strong></td>
        <td><?= $this->dateInputs($active_day); ?></td>
    </tr>
    <tr>
        <td align="right"><strong>Title</strong></td>
        <td><input type="text" size="80" name="title" value="<?= $title ?>" /></td>
    </tr>
    <tr>
        <td align="right"><strong>Subtitle</strong></td>
        <td><input type="text" size="80" name="subtitle" value="<?= $subtitle ?>" /></td>
    </tr>
    <tr>
        <td align="right"><strong>Author</strong></td>
        <td><input type="text" size="80" name="author" value="<?= $author ?>" /></td>
    </tr>
    <tr>
        <td align="right"><strong>Keywords</strong></td>
        <td><input type="text" size="80" name="keywords" value="<?= $keywords ?>" /></td>
    </tr>
    <tr>
        <td align="right"><strong>Subject</strong></td>
        <td>Subject List -- Manage Subjects Link</td>
    </tr>
    <tr>
        <td align="right"><strong>Source</strong></td>
        <td><?= $this->getSources($source); ?></td>
    </tr>
    <tr>
        <td align="right"><strong>Contains HTML</strong></td>
        <td><?= $this->htmlFlag($is_html); ?></td>
    </tr>
    <tr>
        <td align="right"><strong>Body</strong></td>
        <td><textarea rows="20" cols="100" name="ed_text"><?= $ed_text ?></textarea></td>
    </tr>
    <tr>
        <td align="right"><strong>Add an Image</strong></td>
        <td><input type='file' name='upImage' /></td>
    </tr>
    <? 
        if(count($imageList = explode(',',$images)) > 1) { 
            foreach($imageList as $imgsrc) {
                if($imgsrc != '' && $imgsrc != NULL) {
                    print("<tr><td>&nbsp;</td><td><img height='128' style='vertical-align: middle;' src='/research/images/$imgsrc' /> <strong>/research/images/$imgsrc</strong></td></tr>");
                    $culledList[] = $imgsrc;
                }
            }
            $outImages = implode(',',$culledList);
        } else {
            print("<tr><td>&nbsp;</td><td><strong>No images attached to this editorial.</strong></td></tr>");
            $outImages = "";
            // no images
        }
    ?>
</table>
    <input type='hidden' name='images' value='<?= $outImages ?>' />
    <input type='hidden' name='id' value='<?= $id ?>' />
    <input type='hidden' name='proofed' value='<?= $proofed ?>' />
</form>
