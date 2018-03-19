<?php
	foreach ($birthday as $birthday => $value) {
		$naam = $value['person'];
		$month = $value['month'];
		$day = $value['day'];
		$year = $value['year'];
		$id = $value['id'];
	}
?>
<div id="form_container">
	<form action="<?= URL ?>calendar/delete" method="POST">
		<input type="hidden" name="id" value="<?= $id ?>">

		<p id="deleteText">Are you sure you want to delete: <?= $naam ?> born on: <?= $day ?> <?= $month ?> <?= $year ?></p>

		<p class="inputName">Ik ga akkoord:</p>
		<input id="checkBox" type="checkbox" name="checkbox" required>

		<input class= "buttons" id="greenButton" type="submit" name="submit" value="Verwijderen">
	</form>
	<a href="index" class= "buttons" id="redButton">Annuleren</a>
</div>