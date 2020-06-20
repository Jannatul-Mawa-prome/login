<?php 
session_start();
	If(!isset($_SESSION['success'])){
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	php</title>
</head>
<body>
	<h3>Login successfully</h3>
	<a name="log" href="logout.php">Logout</a>
</body>
</html>