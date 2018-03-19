<?php
	$date = date("Y");

	foreach ($birthday as $birthday => $value) {
		$naam = $value['person'];
		$month = $value['month'];
		$day = $value['day'];
		$year = $value['year'];
		$id = $value['id'];
	}
?>
<div id="form_container">
	<form action="<?= URL ?>calendar/update" method="POST">
		<input type="hidden" name="id" value="<?= $id ?>">

		<p class="inputName">Naam:</p>
		<input class="inputBox" id="name" type="text" name="name" minlength="2" value="<?= $naam ?>" required>

		<p class="inputName">Dag:</p>
		<input id="dag_select" class="inputBox" type="number" name="day" min="1" max="31" value="<?= $day ?>" required>

		<p class="inputName">Maand:</p>
		<input id="maand_select" class="inputBox" type="number" name="month" min="1" max="12" value="<?= $month ?>" onchange="setDays()" required>

		<p class="inputName">Jaar:</p>
		<input class="inputBox" id="jaar_select" type="number" name="year" min="1900" max="<?= $date ?>" value="<?= $year ?>" required>

		<p class="inputName">Ik ga akkoord met veranderen:</p>
		<input id="checkBox" type="checkbox" name="checkbox" required>

		<input class= "buttons" id="greenButton" type="submit" name="submit">
	</form>
	<a href="index" class= "buttons" id="redButton">Annuleren</a>
</div>