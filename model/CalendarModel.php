<?php

	function GetAllBirthdays(){
		$db = openDatabaseConnection();

		$sql = "SELECT * FROM birthdays ORDER BY month, day";
		$query = $db->prepare($sql);
		$query->execute();

		$db = null;

		return $query->fetchAll();
	}

	function GetBirthday($id){
		$db = openDatabaseConnection();

		$query = $db->prepare("SELECT * FROM birthdays WHERE id = :id");
		$query->bindParam(':id', $id);

		$query->execute();

		return $query->fetchAll();
	}

	function UpdateBirthday($data){
		$db = openDatabaseConnection();

		$query = $db->prepare("UPDATE birthdays SET person = :name, day = :day, month = :month, year = :year  WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->bindParam(':name', $name);
		$query->bindParam(':day', $day);
		$query->bindParam(':month', $month);
		$query->bindParam(':year', $year);

		$id = $data['id'];
		$name = $data['name'];
		$day = $data['day'];
		$month = $data['month'];
		$year = $data['year'];

		$query->execute();
	}

	function createBirthday($data){
		$db = openDatabaseConnection();

		$query = $db->prepare("INSERT INTO birthdays (person, day, month, year) VALUES (:name, :day, :month, :year)");
		$query->bindParam(':name', $name);
		$query->bindParam(':day', $day);
		$query->bindParam(':month', $month);
		$query->bindParam(':year', $year);

		$name = $data['name'];
		$day = $data['day'];
		$month = $data['month'];
		$year = $data['year'];

		$query->execute();
	}

	function DeleteBirthday($data){
		$db = openDatabaseConnection();

		$query = $db->prepare("DELETE FROM birthdays where id = :id");
		$query->bindParam(':id', $id);

		$id = $data['id'];

		$query->execute();
	}
?>