<?php
	$date = date("Y");
?>
<div id="form_container">
	<form action="<?= URL ?>/calendar/create" method="POST">
		<p class="inputName">Naam:</p>
		<input class="inputBox" type="text" name="name" minlength="2" required>
		<p class="inputName">Dag:</p>
		<input id="dag_select" class="inputBox" type="number" name="day" min="1" max="31" required>
		<p class="inputName">Maand:</p>
		<input id="maand_select" class="inputBox" type="number" name="month" min="1" max="12" onchange="setDays()" required>
		<p class="inputName">Jaar:</p>
		<input class="inputBox" type="number" name="year" min="1900" max="<?= $date ?>" required>
		<input class= "buttons" id="greenButton" type="submit" name="submit">
	</form>
	<a href="index" class= "buttons" id="redButton">Annuleren</a>
</div>