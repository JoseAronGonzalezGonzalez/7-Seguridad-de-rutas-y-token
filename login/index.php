
<?php

	include '../app/app.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>

	<style type="text/css">
		
		fieldset{

			width: 50%
			margin: auto;
			padding: 20px;

		}
	</style>
</head>
<body>

		<?php include "../layouts/alerts.template.php"; ?>

		
		<form method="POST" action="../auth">
			<fieldset>
				<legend>
					Access
				</legend>
				<label>
					Email
				</label>
				<input type="email" name="email" required="">
				<br>
				<label>
					Password
				</label>
				<input type="password" name="password" required="">
				<br>
				<button type="submit">
					Access
				</button>

				<input type="hidden" name="action" value="login">
				<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
			</fieldset>
		</form>

		<form method="POST" action="../auth">
			
			<fieldset >
				<legend>
					registrer
				</legend>
				<label>
					name
				</label>
					<input type="text" name="name" required="">
				<br>
				<label>
					Email
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
				<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
			</fieldset>
		</form>
</body>
</html>