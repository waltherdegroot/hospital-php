<?php
require(ROOT . "model/CalendarModel.php");

function index()
{
	render("calendar/index", array(
		'birthdays' => GetAllBirthdays()
	));	
}

function create()
{
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$data= array(
			'name' => $_POST['name'],
			'day' => $_POST['day'],
			'month' => $_POST['month'],
			'year' => $_POST['year']
		);
		createBirthday($data);
		header('Location: /projecten/Framework/calendar/index');
		exit;
	}
	
	render("calendar/create");
}

function update()
{
	if(isset($_POST['checkbox'])){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data= array(
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'day' => $_POST['day'],
				'month' => $_POST['month'],
				'year' => $_POST['year']
			);
			UpdateBirthday($data);
			header('Location: /projecten/Framework/calendar/index');
			exit;
		}
	}
	render("calendar/update",array(
		'birthday' => GetBirthday($_POST['id'])
	));
}

function delete()
{
	if(isset($_POST['checkbox'])){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$data= array(
				'client_id' => $_POST['id']
			);
			DeleteBirthday($data);
			/*header('Location: /projecten/Framework/calendar/index');
			exit;*/
		}
	}

	render("calendar/delete",array(
		'birthday' => GetBirthday($_POST['id'])
	));
}

function handeler(){
	if ($_POST['update']) {
		update();
	}

	if ($_POST['delete']) {
		delete();
	}
}