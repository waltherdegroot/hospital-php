<h1>Hospital</h1>

<?php
	foreach ($clients as $client => $value) {
		$firstname = $value['client_firstname'];
		$lastname = $value['client_lastname'];
		$id = $value['client_id'];

		echo $firstname." ".$lastname." <a href='updateClient?id=".$id."'>EDIT</a> <a href='deleteClient?id=".$id."'>X</a><br>";
	}
?>

<a href="createClient"> CREATE CLIENT </a>
