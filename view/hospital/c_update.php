<?php
	$id = $client[0]['client_id'];
	$firstname = $client[0]['client_firstname'];
	$lastname = $client[0]['client_lastname'];
?>
<h1>Update</h1>
<form action="updateClient">
	<h2><?= $id ?></h2>
	<input type="text" name="firstname" value="<?= $firstname ?>">
	<input type="text" name="lastname" value="<?= $lastname ?>">
</form>