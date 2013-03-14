<?php
	include('../includes/pdo.inc.php');
	
	function login() {
	
		global $db;
				
		if(isset($_POST)) {
			//$values = json_decode($_POST['formValues']);
			$values = $_POST;
			$today = date("Y-m-d H:i:s");
			$statement = $db->prepare("SELECT userid, firstname, lastname, storageused, active FROM users WHERE email = :email AND password = :password");
			$statement->bindParam(":email", $values['email']);
			$statement->bindParam(":password", $values['password']);
			$statement->execute();
			
			$result = $statement->fetchAll();
			if (count($result) == 1) { //Finns användaren 
				if ($result[0]['active'] <= $today) {
					if(session_start()){
						$_SESSION['user'] = array(
							'name' => $result[0]['firstname'] . " " . $result[0]['lastname'],
							'userid' => $result[0]['userid'],
							'storageused' => $result[0]['storageused']
							);
							
						$passback = array(
							'name' => $_SESSION['user']['name'],
							'storageused' => $_SESSION['user']['storageused'],
							'userid' => $_SESSION['user']['userid']
						);
							//Vad ska vi returnera för svar?
							return json_encode($passback);
					}
				}
				else {
					return json_encode("User is blocked");
				}
			}
			else {
				session_start();
				if (isset($_SESSION['loginattempts'])) {
					$_SESSION['loginattempts']++;
					if ($_SESSION['loginattempts'] >= 3) {
						$_SESSION['blocked'] = true;
						$tomorrow = date("Y-m-d H:i:s", time()+86400);
						$statement = $db->prepare("UPDATE users set active=:active where email=:email");
						$statement->bindParam(":active", $tomorrow);
						$statement->bindParam(":email", $_POST['email']);
						$statement->execute();
					}
				}
				else {
					$_SESSION['loginattempts'] = 1;
					$_SESSION['blocked'] = false;
				}
				
				return json_encode($_SESSION);

			}
		}
	}
	
	function logout() {
		session_start();
		session_unset();
		session_destroy();
		return json_encode("User logged out");
	}
	
	function register() {
		
		global $db;
		
		if(isset($_POST)) {
			$values = $_POST['formValues'];
			$today = date("Y-m-d H:i:s");
			$storageUsedNewUser = 0;
			$statement = $db->prepare("SELECT userid FROM users WHERE email=:email");
			$statement->bindParam(":email", $values['email']);
			$statement->execute();
			$result = $statement->fetchAll();
			
			if (!$result) {
				$statement = $db->prepare("INSERT INTO users (firstname, lastname, email, password, schoolname, active, created, storageused) values (:firstname, :lastname, :email, :password, :schoolname, :active, :created, :storageused)");
				$statement->bindParam(":firstname", $values['firstname']);
				$statement->bindParam(":lastname", $values['lastname']);
				$statement->bindParam(":email", $values['email']);
				$statement->bindParam(":password", $values['password']);
				$statement->bindParam(":schoolname", $values['schoolname']);
				$statement->bindParam(":active", $today);
				$statement->bindParam(":created", $today);
				$statement->bindParam(":created", $storageUsedNewUser);
				if($statement->execute()) {
								$statement = $db->query("SELECT LAST_INSERT_ID() as latest_id from users");
								$statement->execute();
								$result = $statement->fetchAll();			
			
								$latest_id =  $result[0]['latest_id']
					
					mkdir('../files/' . str_pad($latest_id, 8, "0", STR_PAD_LEFT), 0777);
					return json_encode("User and directory Created");
				}
			}
			else {
				return json_encode("Email already connected to user, try another email");
			}
		}
	}
	
	function check() {
		session_start();
		if (isset($_SESSION['user']['userid']) && $_SESSION['user']['userid'] != null) {
			
			$passback = array(
				'loggedin' => true,
				'userid' => $_SESSION['user']['userid']
			);
			return json_encode($passback);
		}
		else {
			return json_encode($passback = array('loggedin' => false));
		}
	}
	
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
	
	switch ($uri) {
		case "login":
			echo login();
			break;
		case "logout":
			echo logout();
			break;
		case "check":
			echo check();
			break;
		case "register":
			echo register();
			break;
		default:
			echo "error";
	}