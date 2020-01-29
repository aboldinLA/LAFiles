<fieldset>

    <legend>Billing Information</legend>

    <div class='formRow'>

        <div class='requiredLabel'>

            <span class='accesskey'>N</span>ame

        </div>

        <div class='widget'>

            <input type='text' size='32' name='ccName' value='<?= $ccName ?>' />

            <div class='explanation'>Please enter the name as it appears on the card.</div>

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <span class='accesskey'>P</span>hone

        </div>

        <div class='widget'>

            <input type='text' name='area_code' size='4' value='<?= $area_code ?>' />

            <input type='text' name='phone' value='<?= $phone ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <span class='accesskey'>E</span>mail

        </div>

        <div class='widget'>

            <input type='text' size='64' name='email' value='<?= $email ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <span class='accesskey'>C</span>ompany

        </div>

        <div class='widget'>

            <input type='text' size='64' name='company' value='<?= $company ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <span class='accesskey'>A</span>ddress

        </div>

        <div class='widget'>

            <input type='text' size='64' name='address' value='<?= $address ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            &nbsp;

        </div>

        <div class='widget'>

            <input type='text' size='64' name='address2' value='<?= $address2 ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <label for='city'><span class='accesskey'>C</span>ity</label>

        </div>

        <div class='widget'>

            <input type='text' size='64' name='city' value='<?= $city ?>' />

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <label for='state'><span class='accesskey'>S</span>tate</label>

        </div>

        <div class='widget'>

            <? common_class::select_state($state); ?>

        </div>

    </div>

    <div class='formRow'>

        <div class='requiredLabel'>

            <label for='city'><span class='accesskey'>Z</span>ip</label>

        </div>

        <div class='widget'>

            <input type='text' name='zip' value='<?= $zip ?>' />

        </div>

    </div>

</fieldset>

<br />

    <div class='formRow'>

        <div class='requiredLabel'>

            &nbsp;

        </div>

        <div class='widget'>

            <input type='submit' name='action' value='enter' />

            <input type='reset' value='reset'/>

        </div>

    </div>



