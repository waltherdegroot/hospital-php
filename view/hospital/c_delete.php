<?php
	$id = $client[0]['client_id'];
	$firstname = $client[0]['client_firstname'];
	$lastname = $client[0]['client_lastname'];
?>

<h1>Delete</h1>
<form action="deleteClient" method="POST">
	<h2><?= $id ?></h2>
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="text" name="firstname" value="<?= $firstname ?>">
	<input type="text" name="lastname" value="<?= $lastname ?>">
	<input type="checkbox" name="checkbox">
	<input type="submit" name="submit" value="Verwijderen" required>
</form>