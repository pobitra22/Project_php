<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
	<center>
	<h1>Add Employee</h1>


	<form>
	<fieldset>
		<legend>ADD</legend>
	<table>
		<tr>
			<td>Add Employee ID: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			
			<td align="left">
				
				<a href="interface.php">Add</a>
				
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