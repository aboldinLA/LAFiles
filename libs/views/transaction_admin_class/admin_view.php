<h3><?= $this->getRefName($refType) ?></h3>

<div class='formRow'>

	<div class='label'>Company:</div>

	<div class='widget'><?= $company ?></div>

</div>

<div class='formRow'>

	<div class='label'>Name:</div>

	<div class='widget'>

		<a href='mailto:<?= $email ?>'><?= $ccName ?></a>

		(<?= $email ?>)

	</div>

</div>

<div class='formRow'>

	<div class='label'>Phone:</div>

	<div class='widget'>(<?= $area_code ?>) <?= $phone ?></div>

</div>

<div class='formRow'>

	<div class='label'>Amount:</div>

	<div class='widget'>$<?= $transAmount ?></div>

</div>

<div class='formRow'>

	<div class='label'>Card:</div>

	<div class='widget'>

		<?= $ccNumber ?><br />

		[<?= $this->getCardName($this->ccType)?>] Exp: <?= $ccExpMonth ?>/<?= $ccExpYear ?>

	</div>

</div>

<div class='formRow'>

	<div class='label'>Address:</div>

	<div class='widget'>

		<?= $address ?><br />

		<? if(strlen($address2) > 0) {

			print("$address2<br />");

		   } ?>

		<?= $city ?>, <?= $state ?> <?= $zip ?><br />

		<?= ($country) ? $country : 'United States' ?>

	</div>

</div>