<fieldset>

    <legend>Credit Card Information</legend>

    <div class='formRow'>

        <div class='requiredLabel'>

            Card <span class='accesskey'>N</span>umber

        </div>

        <div class='widget'>

            <input type='text' name='ccNumber' value='<?= $ccNumber ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <span class='accesskey'>E</span>xpiration

        </div>

        <div class='widget'>

            <?= transaction_class::month($ccExpMonth, 'ccExpMonth'); ?>

            <?= transaction_class::year($ccExpYear, 'ccExpYear'); ?>

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            Card <span class='accesskey'>T</span>ype

        </div>

        <div class='widget'>

            <?= transaction_class::cardType($ccType); ?>

        </div>

    </div>

</fieldset>

<br />

