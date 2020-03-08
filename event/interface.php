<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>interface</title>
</head>
<body>
	<center>
	<h1>Interface</h1>


	<form>
	<fieldset>
		<legend>InterFace</legend>
	<table>
		
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		
		<tr>
			<td>*Photography Contest ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='contest.php';" value="contest" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>*Info Record ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='inforecord.php';" value="record" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>

			<td>*Check Profiles Informations ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='personalinfo.php';" value="Informations" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>*Album ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='album.php';" value="Album" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>*Add Employee ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='addemployee.php';" value="addemployee" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>*Remove Employee ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='removeemployee.php';" value="Remove Employee" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>*Remove Package ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='removepackage.php';" value="Remove Package" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		
		<tr>
			<td>*Equipment ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='equipment.php';" value="Equipment" />		
			</td>
		</tr>
		
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>*Salary Information ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='salary.php';" value="Salary" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>* Registration ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='registration.php';" value="Information" />		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>*addpackage ---> </td>
			<td align="left">
				<input type="button" onclick="location.href='addpackage.php';" value="Add Package" />		
			</td>
		</tr>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			
			<td align="left">
				<input type="button" onclick="location.href='Login.php';" value="Logout" />
				
			</td>
		</tr>

	</table>
	</fieldset>
	</form>
	</center>
</body>
</html>