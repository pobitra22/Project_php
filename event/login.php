<?php	
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center>
	<h1>Login Page <?php if(isset($_SESSION['pass']))/*{ echo $_SESSION['pass'];} */?> </h1>


	<form method="POST" action="logCheck.php">
	<fieldset>
		<legend>LOGIN</legend>
	<table>
		<form method="POST" action="logCheck.php">
		ID:     <input type="number" name="number" value=""> <br>
		<br>
		Username:     <input type="text" name="uname" value=""> <br>
		<br>
		Password: <input type="password" name="password" value=""><br>

		<br>
		<input type="submit" name="submit" value="submit">
				<td align="left">
				<a href="Register.php">Register</a>
				
			</td>
		</tr>
		
			
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>