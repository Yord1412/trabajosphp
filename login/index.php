<?php
	if (!isset($_SESSION)) {
		session_start();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
	<style type="text/css">
		fieldset{
			width: 50%;
			margin: auto;
			background-color: gray;
			padding: 20px;
		}
	</style>
</head>
<body>
	<?php include "../layouts/alerts.template.php"; ?>
	<center>
		<form>
			<fieldset method="POST" action="../app/authController.php">
				<legend>
					Access in your account
				</legend>

				<label>
					Email
				</label>
				<input type="email" name="email" required="">

				<br>

				<label>
					Password
				</label>
				<input type="passsord" name="passsord" required="">

				<br>

				<button type="submit">
					Access
				</button>
				<input type="hidden" name="action" value="Login">

			</fieldset>
		</form>
		

		<form method="POST" action="../app/authController.php">
			<fieldset>
				<legend>
					register
				</legend>

				<label>
					name
				</label>
				<input type="text" name="name" required="">

				<br>

				<label>
					email
				</label>
				<input type="email" name="email" required="">

				<br>

				<label>
					Password
				</label>
				<input type="password" name="password" required="">

				<br>

				<button type="submit">
					save
				</button>
				<input type="hidden" name="action" value="register">

			</fieldset>
		</form>
	</center>
</body>
</html>