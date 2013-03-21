<?php 
include('../includes/pdo.inc.php');
include('templating.php');


function uploadFile(){
  $fileName = basename($_FILES['uploaded']['name']);
  $destFilePath = $_SESSIONS['user']['activedirectory'] . '/' . $fileName;
  $destFilePath = str_replace('//', '/', $destFilePath);
  if($result = move_uploaded_file($_FILES['uploaded']['tmp_name'], $destFilePath)){
    return($fileName);
  }
  return false;
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
//Plockar ut querystring för att använda switch och få rätt funktion
switch ($uri) {
	case "uploadfile":
		uploadFile();
		break;
	default:
		echo "error";
}