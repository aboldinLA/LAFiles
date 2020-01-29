<h1>Congratulations!</h1>

You have taken the first step in placing your company information in front of thousands of professionals and homeowners.  You have made the RIGHT CHOICE with Landscape On Line!<br />

<h2>Classified Ads are FREE through October 31st!</h2>

Your Classified Ad placement is complete.  Our editors will approve and post your classified shortly.  In the mean time, 

<a href='/'>Please feel free to browse the rest of the site.</a>

<br />

<br />

<fieldset style='margin-top: 10px;'>

<legend style='color: #ccc' ><?= transaction_class::getRefName($refType); ?></legend>

<div class='formRow'>

    <div class='muteLabel'>

        Company

    </div>

    <div class='widget'>

        <span style='color: #ccc;'><?= ($company) ? $company : '&nbsp;' ; ?></span>

    </div>

</div>

<div class='formRow'>

    <div class='muteLabel'>

        Fee

    </div>

    <div class='widget'>

        <span style='color: #ccc; text-decoration: underline;'>$<?= ($transAmount) ? $transAmount : 0.00; ?></span>

    </div>

</div>

</fieldset>

<br />

