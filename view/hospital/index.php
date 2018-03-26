<h1>Hospital</h1>
<table id="client_table">
	<?php
		foreach ($clients as $client => $value) {
			$firstname = $value['client_firstname'];
			$lastname = $value['client_lastname'];
			$id = $value['client_id'];

			echo "<tr><td>" .$firstname." ".$lastname."</td><td><a href='editClient?id=".$id."'>EDIT</a></td><td> <a href='deleteClient?id=".$id."'>X</a></td></tr>";
		}
	?>
	<tr><td><a href="createClient"> CREATE CLIENT </a></td></tr>
</table>

<br>

<table id="species_table">
	<?php
		foreach ($species as $specie => $value) {
			$s_id = $value['species_id'];
			$animal = $value['species_description'];

			echo "<tr><td>" .$animal."</td><td><a href='editSpecie?id=".$s_id."'>EDIT</a></td><td> <a href='deleteSpecie?id=".$s_id."'>X</a></td></tr>";
		}
	?>
	<tr><td><a href="createSpecie"> CREATE SPECIE </a></td></tr>
</table>

<table id="patient table">
	<?php

	?>
</table>