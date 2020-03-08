<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Salary </title>
</head>
<body>
	<center>
	<h1>Salary Information</h1>


	<form>
	<fieldset>
		<legend>Salary</legend>
	<table>
		<h3>Project Base Salary</h3>
		<tr>
			<td>
				Photographer-50%
			</td>
		</tr>
		<tr>
			<td>
				Employee-20%
			</td>
		</tr>
		<tr>
			<td>
				Assistant-30%
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