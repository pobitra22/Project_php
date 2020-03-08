<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Album</title>
</head>
<body>
	<center>
	<h1>Album</h1>


	<form>
	<fieldset>
		<legend>Photo Album</legend>
	<table>
		<h4>Album List</h4>
		<tr>
			<td><ol>
				<li>Wedding</li>
				<a href="https://www.google.com/">Photo</a>
				<li>Birthday Party</li>
				<a href="https://www.google.com/">photo</a>
				<li>Reception</li>
				<a href="https://www.google.com/">Photo</a>
				<li>Random</li>
				<a href="https://www.google.com/">Photo</a>
				
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