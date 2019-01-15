<?php



	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$name = $_POST['name'];

		$email = $_POST['email'];

		$mysqli = new mysqli('localhost', 'u0368785_monoweb', 'q1w2e3r4t5', 'u0368785_monoweb_db');

		$mysqli->set_charset("utf8");

		$result = $mysqli->query('INSERT INTO callback (name, email, date) VALUES ("'.$name.'", "'.$email.'", NOW())');

		if($result){

			echo "OK";

		}

	}
?>