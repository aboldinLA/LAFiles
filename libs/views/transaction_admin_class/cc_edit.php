<fieldset>

<legend>Transaction Information</legend>

<div class='formRow'>

    <div class='label'>

        Type

    </div>

    <div class='widget'>

        <?= transaction_admin_class::typeChoices($refType) ?>

    </div>

</div>

<div class='formRow'>

    <div class='label'>

        Amount

    </div>

    <div class='widget'>

        $<input name='transAmount' value='<?= $transAmount ?>' />

    </div>

</div>

<div class='formRow'>

    <div class='label'>

        ID

    </div>

    <div class='widget'>

        <input name='refID' value='<?= $refID ?>' />

    </div>

</div>

</fieldset>

<br />

