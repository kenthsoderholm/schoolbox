<!DOCTYPE html>
<html><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	
	<body>
		
		<form action="user.php?login" method="post">
		
			<input type="text" id="email" name="email" />
			<input type="password" id="password" name="password" />
			<input type="submit" />
		</form>
		
		
		<?php
			
			$test = 1253;
			echo "<hr/>",str_pad($test, 8, "0", STR_PAD_LEFT),"<hr/>";
		
			
			include('../includes/pdo.inc.php');
			
			$today = date("Y-m-d H:i:s");
			echo $today, "<br />";
			$today = date("Y-m-d H:i:s", time()+86400);
			echo $today, "<hr />";
			/*
			$statement = $db->prepare("INSERT INTO users (firstname) values ('nisse')");
			$statement->execute();
			
			$statement = $db->query("SELECT LAST_INSERT_ID() as latest_id from users");
			$statement->execute();
			$result = $statement->fetchAll();			
			
			echo $result[0]['latest_id'];
			
			*/
			$statement = $db->prepare("SELECT userid, firstname, lastname, storageused, active FROM users WHERE email = 'kenth.south@gmail.com'");
			$statement->execute();
			$result = $statement->fetchAll();
			if (!$result) {
				echo "Funkar";
			}
			else {
				echo "fanns ingen";
			}

		//mkdir('../files/' . str_pad(12, 8, "0", STR_PAD_LEFT), 0777);

			
		?>
	</body>
</html>