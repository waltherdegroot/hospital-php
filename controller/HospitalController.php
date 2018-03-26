<?php
	require(ROOT . "model/HospitalModel.php");

	function index(){
		render("hospital/index", array('clients' => getAllClients(), 'species' => getAllSpecies()));
	}
/*#####################Begin client related functions#####################*/
	function createClient(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data= array(
				'client_firstname' => $_POST['firstname'],
				'client_lastname' => $_POST['lastname']
			);
			insertClient($data);
			header("Location: index");
			exit;
		}
		render("hospital/c_create");
	}

	function editClient(){
		if(isset($_POST['checkbox'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = array(
					'client_id' => $_POST['id'],
					'firstname' => $_POST['firstname'],
					'lastname' => $_POST['lastname']
				);
				updateClient($data);
				header("Location: index");
				exit;
			}
		}
		render("hospital/c_update", array('client' => getClient($_GET['id'])));
	}

	function deleteClient(){
		if(isset($_POST['checkbox'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				removeClient($_POST['id']);
				header("Location: index");
				exit;
			}
		}
		render("hospital/c_delete", array('client' => getClient($_GET['id'])));
	}

/*#####################End client related functions#####################*/


/*#####################Begin patients related functions#####################*/

/*#####################End patients related functions#####################*/


/*#####################Begin specie related functions#####################*/

	//Specie aanmaken
	function createSpecie(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			var_dump($_POST);
			insertSpecie($_POST['specie_name']);
			header("Location: index");
			exit;
		}
		render("hospital/s_create");
	}

	//Specie updaten
	function editSpecie(){
		if(isset($_POST['checkbox'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = array(
					'species_id' => $_POST['id'],
					'animal' => $_POST['animal']
				);
				updateSpecie($data);
				header("Location: index");
				exit;
			}
		}
		render("hospital/s_update",array( 'specie' => getSpecie($_GET['id'])));
	}

	//Specie verwijderen
	function deleteSpecie(){
		if(isset($_POST['checkbox'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				removeSpecie($_POST['id']);
				header("Location: index");
				exit;
			}
		}
		render("hospital/s_delete", array( 'specie' => getSpecie($_GET['id'])));
	}

/*#####################End specie related functions#####################*/
?>