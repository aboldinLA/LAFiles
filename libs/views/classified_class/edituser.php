<fieldset>

<legend>Personal Information</legend>

<div class='formRow'>

    <div class='requiredLabel'>

        Name

    </div>

    <div class='widget'>

        <input type='text' name='first_name' size=15 value="<?= $first_name ?>" />

        <input type='text' name='last_name' size=15 value="<?= $last_name ?>" />

    </div>

</div>

<div class='formRow'>

    <div class='label'>

        Email

    </div>

    <div class='widget'>

        <input type='text' name='email' size=64 value="<?= $email ?>" />

    </div>

</div>

<div class='formRow'>

    <div class='requiredLabel'>

        Company

    </div>

    <div class='widget'>

        <input type='text' name='comp_name' size=64 value="<?= $comp_name ?>" />

    </div>

</div>

<div class='formRow'>

    <div class='requiredLabel'>

        Phone

    </div>

    <div class='widget'>

        <input type='text' name='area_code' size=4 value="<?= $area_code ?>" />

        <input type='text' name='phone' size=12 value="<?= $phone ?>" />

    </div>

</div>

</fieldset>

