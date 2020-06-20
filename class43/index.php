<?php 
	session_start();

		if(isset($_SESSION['success'])){
			header('Location: info.php');
		}
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			define('EMAIL','jm.promi51@gmail.com');
			define('PASSWORD','1234');
			if(EMAIL == $email && PASSWORD == $password){
				$_SESSION['success'] = "";
				header('Location: info.php');
			}
			else{
				$fail = 'Email or Password are not Correct';
			}
		}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php part 2</title>
</head>
<body>
<div class="login" style="border:1px solid black; height:200px; width:300px;padding-top: 100px;padding-left:100px;">
	<form action="" method="POST">
		<input type="email" name="email" placeholder="enter email" required><br /><br />
		<input type="password" name="password" placeholder="password" required><br /><br />
		<input type="submit" value="submit" name="submit">
	</form>
	<?php 
		if(isset($fail)){
			echo '<p>' . $fail . '</p>' ;
		}
	?>
</div>
</body>
</html>