<?php 
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Registration Form</title>
	</head>
	<body>
		<h1>Registration Form</h1>

		<form method="GET" action="/login_form.php">
			<p>
				<label for="firstname">First Name</label>
				<input id="firstname" type="text" name="firstname" placeholder="Please enter first name">
			</p>
			<p>
				<label for="lastname">Last Name</label>
				<input id="lastname" type="text" name="lastname" placeholder="Please enter last name">
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" type="email" name="email" placeholder="Please enter email">
			</p>
			<p>
				<label for="username">Username</label>
				<input id="username" type="username" name="username" placeholder="Please enter username">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" type="password" name="password" placeholder="Please enter password">
			</p>
			<p>
				<label for="confirm_password">Confirm Password</label>
				<input id="confirm_password" type="confirm_password" name="confirm_password" placeholder="Confirm password">
			<p>
				<label>Remember Me<input type="checkbox" name="remember" value="yes" checked></label>
			</p>

			<p>
				<label>I would like to sign up for the newsletter.<input id="newsletter" type="checkbox" name="newsletter" value="yes" checked></label>
			</p>

			<p>
				<button type="submit" name="submit">Confirm</button>
			</p>

		</form>

		
	</body>
</html>