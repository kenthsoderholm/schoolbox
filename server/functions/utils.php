<?php
	include('../includes/pdo.inc.php');
	include('templating.php');
		function settings() {
					return jsonEncoder($passback = array('html' => dressWithTemplate('settings')));
				}

		$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
	//Plockar ut querystring för att använda switch och få rätt funktion
	switch ($uri) {
		case "settings":
			settings();
			break;
		default:
			echo "error";
	}