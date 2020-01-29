<h1>Congratulations!</h1>

You have taken the first step in placing your company information in front of thousands of professionals and homeowners.  You have made the RIGHT CHOICE with Landscape On Line!<br />

<br />

<fieldset>

<legend><?= transaction_class::getRefName($refType); ?></legend>

<div class='formRow'>

    <div class='label'>

        Company

    </div>

    <div class='widget'>

        <?= ($company) ? $company : '&nbsp;' ; ?>

    </div>

</div>

<div class='formRow'>

    <div class='label'>

        Fee

    </div>

    <div class='widget'>

        $<?= $transAmount ?>

    </div>

</div>

</fieldset>

<br />

