<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove Employee</title>
</head>
<body>
	<center>
	<h1>Remove Employee</h1>


	<form>
	<fieldset>
		<legend>REMOVE</legend>
	<table>
		<tr>
			<td>Remove Employee ID: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			
			<td align="left">
				
				<a href="interface.php">Remove</a>
				
			</td>
		</tr>
		<tr>
			
			<td align="left">
				
				<a href="interface.php">Go Back..</a>
				
			</td>
		</tr>
		
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>