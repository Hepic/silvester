<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="indexCss.css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="effect.js"></script>
	</head>
	
	<body>
		<div id='container'>
			<div id='welcome'>
				<h1>Welcome to Silvester</h1>
				<p>This is a social network.<br/>
				   Connect with your friends and other people.</br>
				   Write and read for things that <br/>
				   you are interested.
				</p>
			</div>
			
			<div class='login_register' id='login'>
				<form action="loginAction.php" method="post">
					<input type="text" placeholder="Alias" size="23" name="alias"/>
					<input type="text" placeholder="Password" size="15" name="password"/>
					<input type="submit" value="Log in" />					
				</form>
			</div>
			
			<div class='login_register' id='register'>
				<form action="register.php" method="post">
					<input type="text" placeholder="Alias" size="23" name="alias" />
					<input type="text" placeholder="Email" size="23" name="email"/>
					<input type="text" placeholder="Password" size="15" name="password"/>
					<input type="submit" value="Register" />					
				</form>
			</div>		
		</div>
	</body>
</html>

