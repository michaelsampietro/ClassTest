<!DOCTYPE html>
<html lang = 'eng'>
	<head>
		<title>Forgot Password - Radford Yard Sale</title>
		<meta charset = 'utf-8' />
		<link rel="stylesheet" href="login-style.css"/>
	</head>
	<body>
		<div id='login'>
			<div id='loginFields'>
				<p id='title'>Radford Yard Sale</p>
				<form action='loginPageHandler.php' method='post'>
					<p id='helpText'>Enter your e-mail to recover your password.</p>
					<input class='field' type='text' name='email' placeholder='Email Address' /><br/>
					<input class='button' type='submit' value='Recover Password'/>
				</form>
				<a href='login.php'>Back</a>
			</div>
		</div>
		<footer>
			<p>Radford Yard Sale | 2016</p>
			<p>Contact us: <a href='mailto:radfordyarsale@gmail.com'>radfordyardsale@gmail.com</a></p>
		</footer>
	</body>
</html>