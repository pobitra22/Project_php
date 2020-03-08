<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Equipment</title>
</head>
<body>
	<center>
	<h1>Equipment</h1>


	<form>
	<fieldset>
		
	<table>
		<tr>
			<td>Buy Equipment: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>Sell Equipment: </td>
		</tr>
		<tr>	
			<td><input type="number" name="" value=""/></td>
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