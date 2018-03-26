<?php
	$id = $specie[0]['species_id'];
	$animal = $specie[0]['species_description'];
?>
<h1>Update</h1>
<form action="editSpecie" method="POST">
	<h2><?= $animal?></h2>
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="text" name="animal" value="<?= $animal ?>">
	<input type="checkbox" name="checkbox" required>
	<input type="submit" name="submit" value="Updaten">
</form>