<?php
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
?>