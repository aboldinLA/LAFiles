<fieldset>
<legend>Classified Ad</legend>
<div class='formRow'>
    <div class='requiredLabel'>
        Section
    </div>
    <div class='widget'>
        <?= classified_class::sectionSelect($section) ?>
    </div>
</div>
<div class='formRow'>
    <div class='requiredLabel'>
        Title
    </div>
    <div class='widget'>
        <input type='text' size=64 name='adTitle' value='<?= $adTitle ?>' />
    </div>
</div>
<script language="JavaScript">
	function checkLimit(field,limit){
		if(field.value.length > limit){
			field.value = field.value.slice(0,limit);
		}
	}
</script>
<div class='formRow'>
    <div class='requiredLabel'>
        Content
    </div>
    <div class='widget'>
        <textarea name='adText' rows=12 cols=64 wrap="virtual" style="overflow:hidden" onkeydown="checkLimit(this,500);" ><?= $adText ?></textarea>
    </div>
</div>
</fieldset>
