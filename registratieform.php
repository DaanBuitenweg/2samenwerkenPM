<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
  <h1>Registreren</h1>
  <form name="registration" class="registartion-form" onsubmit="return formValidation()">
    <table>
      <tr>
        <td><label for="name">Naam:</label></td>
        <td><input type="text" name="name" id="name" placeholder="Naam"></td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="text" name="email" id="email" placeholder="Email"></td>
      </tr>
      <tr>
        <td><label for="password">Wachtwoord:</label></td>
        <td><input type="password" name="password" id="Password"></td>
      </tr>
      <tr>
        <td><label for="password">Herhaal Wachtwoord:</label></td>
        <td><input type="password" name="password" id="Repeatpassword"></td>
      </tr>
      <tr>
        <td><label for="gender">Geslacht:</label></td>
        <td>Male: <input type="radio" name="gender" value="Man">
          Female: <input type="radio" name="gender" value="Vrouw">
      </tr>
        <td colspan="2"><input type="submit" class="submit" value="Registreren" /></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
