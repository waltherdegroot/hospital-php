<?php
/*#####################Begin client related functions#####################*/

	//Verkrijgt alle cliënten uit het dataBase.
	function getAllClients(){
		$db = openDatabaseConnection();

		$query = $db->prepare("SELECT * FROM clients");
		$query->execute();

		$db = null;

		return $query->fetchAll();
	}

	//Verkrijgt een specifieke client uit het database.
	function getClient($id){
		$db = openDatabaseConnection();
		
		$query = $db->prepare("SELECT * FROM clients WHERE client_id = :id");
		$query->bindParam(':id', $client_id);

		$client_id = $id;

		$query->execute();

		$db = null;

		return $query->fetchAll();
	}

	//maakt een client aan in het database.
	function insertClient($data){
		$db = openDatabaseConnection();
		
		$query = $db->prepare("INSERT INTO clients (client_firstname, client_lastname) values(:firstname, :lastname)");
		$query->bindParam(':firstname', $firstname);
		$query->bindParam(':lastname', $lastname);

		$firstname = $data['client_firstname'];
		$lastname = $data['client_lastname'];

		$query->execute();
	}

	//Delete een client uit het database.
	function removeClient($data){
		$db = openDatabaseConnection();
		
		$query = $db->prepare("DELETE FROM clients WHERE client_id = :id");
		$query->bindParam(':id', $id);

		$id = $data;

		$query->execute();
	}

	//Update een client van uit het database en voegt de nieuwe waarden in.
	function updateClient($data){
		$db = openDatabaseConnection();

		$query = $db->prepare("UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname WHERE client_id = :id");
		$query->bindParam(':id', $id);
		$query->bindParam(':firstname', $firstname);
		$query->bindParam(':lastname', $lastname);

		$id = $data['client_id'];
		$firstname = $data['firstname'];
		$lastname = $data['lastname'];

		$query->execute();
	}

/*#####################End client related functions#####################*/



/*#####################Begin patients related functions#####################*/

/*#####################End patients related functions#####################*/


/*#####################Begin species related functions#####################*/

	//Verkrijgt alle Species uit het database.
	function getAllSpecies(){
		$db = openDatabaseConnection();

		$query = $db->prepare("SELECT * FROM species");
		$query->execute();

		$db = null;

		return $query->fetchAll();
	}

	//Verkrijgt een specifieke specie uit het database.
	function getSpecie($data){
		$db = openDatabaseConnection();
		
		$query = $db->prepare("SELECT * FROM species WHERE species_id = :id");
		$query->bindParam(':id', $species_id);

		$species_id = $data;

		$query->execute();

		$db = null;

		return $query->fetchAll();
	}

	function insertSpecie($data){
		$db = openDatabaseConnection();
		
		$query = $db->prepare("INSERT INTO `species`(`species_description`) VALUES (:animal)");
		$query->bindParam(':animal', $animal);

		var_dump($data);

		$animal = $data;

		$query->execute();
	}

	function removeSpecie($data){
		$db = openDatabaseConnection();
		
		$query = $db->prepare("DELETE FROM species WHERE species_id = :id");
		$query->bindParam(':id', $id);

		$id = $data;

		$query->execute();
	}

	function updateSpecie($data){
		$db = openDatabaseConnection();

		$query = $db->prepare("UPDATE species SET species_description = :animal WHERE species_id = :id");
		$query->bindParam(':id', $id);
		$query->bindParam(':animal', $animal);

		$id = $data['species_id'];
		$animal = $data['animal'];

		$query->execute();
	}
/*#####################End Species related functions#####################*/
?>