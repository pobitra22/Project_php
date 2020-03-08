<?php 
  session_start();
  if(!isset($_SESSION['uname'])){  
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Info</title>
  </head>
  <body>

  <table width="90%">
      <tr>
         <td></td>

    <td>

    <form>
    <fieldset>
      <legend>Personal Info</legend>
    <table width="90%">
      <tr>
        <td>Name:</td>
        <td><strong>Pobitra Kumar Paul</strong></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td>123456</td>
      </tr>
      <tr>
        <td>DOB:</td>
        <td>27/12/1998</td>
      </tr>
      <tr>
        <td>Contact no:</td>
        <td>01521307969</td>
      </tr>
      <tr>
        <td>Joining Date: </td>
        <td>03/02/2020</td>

      </tr>
      <tr>
        <td>Positon:</td>
        <td><strong>Photographer</strong>
        </td>
      </tr>
      <tr>
        <td>Address:</td>
        <td>Basundhara r/a</td>
      </tr>
      <tr>
        <td>Branch: </td>
        <td>Dhaka</td>
      </tr>
      <tr>
        <td></td>
        <td><button type="button" name="button">Change Info</button>
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
    </td>
      </table>
  </body>
</html>