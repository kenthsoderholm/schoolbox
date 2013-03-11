<?php

	include('../includes/pdo.inc.php');
	
	if(isset($_POST)) {
		//$values = json_decode($_POST['formValues']);
		$values = $_POST;
	
		$statement = $db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
		$statement->bindParam(":email", $values['email']);
		$statement->bindParam(":password", $values['password']);
		$statement->execute();
		
		$result = $statement->fetchAll();
		if (count($result) == 1) { //Finns användaren 
			if(session_start()){
				$_SESSION['user'] = array(
					'name' => $result[0]['firstname'] . " " . $result[0]['lastname'],
					'userid' => $result[0]['userid']
					);
					
				echo ("User logged in");
			}
		}
	}