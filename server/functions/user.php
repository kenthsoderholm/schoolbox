<?php
	include('../includes/pdo.inc.php');
	
	function login() {
	
		global $db;
				
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
						
						//Vad ska vi returnera för svar?
						return "User logged in";
				}
			}
		}
	}
	
	function logout() {
		session_start();
		session_unset();
		session_destroy();
		return "User logged out";
	}
	
	function register() {
		
		global $db;
		
		if(isset($_POST)) {
			$values = json_decode($_POST['formValues']);
			$today = date("Y-m-d H:i:s");
			$statement = $db->prepare("INSERT INTO users (firstname, lastname, email, password, schoolname, active, created) values (:firstname, :lastname, :email, :password, :schoolname, :active, :created");
			$statement->bindParam(":firstname", $values['firstname']);
			$statement->bindParam(":lastname", $values['lastname']);
			$statement->bindParam(":email", $values['email']);
			$statement->bindParam(":password", $values['password']);
			$statement->bindParam(":schoolname", $values['schoolname']);
			$statement->bindParam(":active", $today);
			$statement->bindParam(":created", $today);
			
			if($statement->execute()) {
				echo "user created";
			}

		}
	}
	
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
	
	switch ($uri) {
		case "login":
			echo login(),"<br />";
			var_dump($_SESSION);
			break;
		case "logout":
			echo logout();
			break;
		default:
			echo "error";
	}