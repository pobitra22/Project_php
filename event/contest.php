<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contest</title>
</head>
<body>
	<center>
	<h1>Contest</h1>


	<form>
	<fieldset>
		<legend>Contest Theme</legend>
	<table>
		<h4>Item List</h4>
		<tr>
			<td><ol>
				<li>Wlid Life</li>
				
				<li>Nature</li>
				
				<li>Weather</li>
				
				<li>Random</li>
				
			</ol></td>
		</tr>
		
			
			<td align="left">
				<a href="interface.php">Go Back...</a>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>