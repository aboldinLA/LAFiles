<br />

 <fieldset disabled='true'>

    <legend style='color: #ccc'>Billing Information</legend>

    <div class='formRow'>

        <div class='muteLabel'>

            <span class='accesskey'>N</span>ame

        </div>

        <div class='widget'>

            <input disabled='true' type='text' size='32' name='ccName' value='<?= $ccName ?>' />

            <div style='color: #ccc;' class='explanation'>Please enter the name as it appears on the card.</div>

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <span class='accesskey'>P</span>hone

        </div>

        <div class='widget'>

            <input disabled='true' type='text' name='area_code' size='4' value='<?= $area_code ?>' />

            <input disabled='true' type='text' name='phone' value='<?= $phone ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <span class='accesskey'>E</span>mail

        </div>

        <div class='widget'>

            <input disabled='true' type='text' size='64' name='email' value='<?= $email ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <span class='accesskey'>C</span>ompany

        </div>

        <div class='widget'>

            <input disabled='true' type='text' size='64' name='company' value='<?= $company ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <span class='accesskey'>A</span>ddress

        </div>

        <div class='widget'>

            <input disabled='true' type='text' size='64' name='address' value='<?= $address ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            &nbsp;

        </div>

        <div class='widget'>

            <input disabled='true' type='text' size='64' name='address2' value='<?= $address2 ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <muteLabel for='city'><span class='accesskey'>C</span>ity</muteLabel>

        </div>

        <div class='widget'>

            <input disabled='true' type='text' size='64' name='city' value='<?= $city ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <muteLabel for='state'><span class='accesskey'>S</span>tate</muteLabel>

        </div>

        <div class='widget'>

            <? common_class::select_state($state); ?>

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <muteLabel for='city'><span class='accesskey'>Z</span>ip</muteLabel>

        </div>

        <div class='widget'>

            <input disabled='true' type='text' name='zip' value='<?= $zip ?>' />

        </div>

    </div>

</fieldset>

<br />

<fieldset>

    <legend style='color: #ccc;'>Credit Card Information</legend>

    <div class='formRow'>

        <div class='muteLabel'>

            Card <span class='accesskey'>N</span>umber

        </div>

        <div class='widget'>

            <input disabled='true' type='text' name='ccNumber' value='<?= $ccNumber ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            <span class='accesskey'>E</span>xpiration

        </div>

        <div class='widget'>

            <?= transaction_class::month($ccExpMonth, 'ccExpMonth'); ?>

            <?= transaction_class::year($ccExpYear, 'ccExpYear'); ?>

        </div>

    </div>

    <div class='formRow'>

        <div class='muteLabel'>

            Card <span class='accesskey'>T</span>ype

        </div>

        <div class='widget'>

            <span style='color: #ccc;'>

            <?= transaction_class::cardType($ccType); ?>

            </span>

        </div>

    </div>

</fieldset>

<br />

