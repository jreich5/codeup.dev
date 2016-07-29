<?php 
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login Form</title>
	</head>
	<body>
		<h1>Login Form</h1>

		<form method="GET" action="/login_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" type="text" name="username" placeholder="Please enter username">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" type="password" name="password" placeholder="Please enter password">
			</p>
			<p>
				<label for="remember">Remember Me</label>
				<input type="checkbox" name="remember" value="yes" checked>
			</p>
			<p>
				<button type="submit" name="submit">Confirm</button>
			</p>

		</form>

		
	</body>
</html>