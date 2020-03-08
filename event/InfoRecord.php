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
    <title>Info</title>
  </head>
  <body>

  <table width="90%">
      <tr>
         <td></td>

    <td>

    <form>
    <fieldset>
      <legend>Info</legend>
    <table width="90%">
      <tr>
        <td>Name:</td>
        <td><strong>Rasel
      </strong></td>
      </tr>
      <tr>
        <td>Contact no:</td>
        <td>01521307959</td>
      </tr>
      <tr>
        <td>ID:</td>
        <td><strong>1234</strong>
        </td>
      </tr>
      <tr>
        <td>Address:</td>
        <td>Kuril</td>
      </tr>


     <tr>
        <td>Name:</td>
        <td><strong>Joy</strong></td>
      </tr>
      <tr>
        <td>Contact no:</td>
        <td>01521307968</td>
      </tr>
      <tr>
        <td>ID:</td>
        <td><strong>12345</strong>
        </td>
      </tr>
      <tr>
        <td>Address:</td>
        <td>Savar</td>
      </tr>


     <tr>
        <td>Name:</td>
        <td><strong>Himel</strong></td>
      </tr>
      <tr>
        <td>Contact no:</td>
        <td>01521303234</td>
      </tr>
      <tr>
        <td>ID:</td>
        <td><strong>9876</strong>
        </td>
      </tr>
      <tr>
        <td>Address:</td>
        <td>Jurain</td>
      </tr>  

      <tr>
        <td></td>
        <td><button type="button" name="button">Edit Info</button>
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