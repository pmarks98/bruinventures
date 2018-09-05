<?php
include('../head.php');
//if (@$_POST['login']) {
	$email = @$_POST['email'];
	$password = @$_POST['password'];

	$sql = <<<SQL
    	SELECT *
    	FROM `users`
    	WHERE `email` = '$email'
SQL;

	if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
	}
	
	if ($db->affected_rows == 1) {
		//one user exists, check password
		
		while($row = $result->fetch_assoc()){
		
			$dbpassword = $row['password'];
			
			if (crypt($password, $dbpassword) == $dbpassword) {
				//successful login
				echo $row['firstName'] . ' ' , $row['lastName'];
			} else {
				echo "incorrect password";
			}
		
		}
		
		
	} else {
		//no such user exists
		echo "no such user exists";
	}
//}

?>