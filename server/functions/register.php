<?php

	if(isset($_POST)) {
		$values = json_decode($_POST['formValues']);
		
		$statement = $db->prepare("");
		$statement->bindParam();
		$statement->bindParam();
		$statement->bindParam();
		$statement->bindParam();
		$statement->bindParam();
		
	}