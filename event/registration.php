<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<center>
	<h1>Registration</h1>


	<form>
	<fieldset>
		<legend>Registration</legend>
	<table>
		<tr>
			<td>Enter ID</td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>Enter Name: </td>
		</tr>
		<tr>	
			<td><input type="name" name="" value=""/></td>
		</tr>
		
		<tr>
			<td>Enter Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="" value=""/></td>
		</tr>

		<tr>
			<td>Retype Password:</td>
		</tr>
		<tr>
			<td> <input type="password" name="" value=""/><hr /td>
		</tr>
		
		
			<tr>
			
			<td align="left">
				<input type="button" name="" value="Confirm">
				<a href="login.php">Login</a>
				
			</td>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>