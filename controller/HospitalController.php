<?php
	require(ROOT . "model/HospitalModel.php");

	function index(){
		render("hospital/index", array('clients' => getAllClients()));
	}

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

	function updateClient(){
		
		render("hospital/c_update", array('client' => getClient($_GET['id'])));
	}

	function deleteClient(){

		if(isset($_POST['checkbox'])){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				var_dump($_POST);
				removeClient($_POST['id']);
				header("Location: index");
				exit;
			}
		}
		render("hospital/c_delete", array('client' => getClient($_GET['id'])));
	}
?>