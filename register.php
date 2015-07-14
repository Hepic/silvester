<?php
	$alias = isset($_POST['alias']) ? $_POST['alias'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="registerCss.css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="effect.js"></script>
	</head>
	
	<body>
		<div id='container'>
			<div id='registration'>
				<h1>Become a member now</h1>
				<span id='line'></span>
				
				<form action="registerAction.php" method="post">
					<input type="text" value="<?php echo htmlspecialchars($alias);?>" placeholder="Alias" size="35" name="alias"/>
					<input type="text" value="<?php echo htmlspecialchars($email);?>" placeholder="Email" size="35" name="email"/>
					<input type="text" value="<?php echo htmlspecialchars($password);?>" placeholder="Password" size="35" name="password"/>
					<input type="text" placeholder="Password" size="35" />
					<input type="submit" value="Register" />
				</form>
			</div>
		</div>
	</body>
</html>