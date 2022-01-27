<?php include 'header.php' ?>  
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="inlog.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardstoreregistreren</title>
</head>
<body>
<div class="container">
  <h1>inloggen</h1>
  <form name="inloggen" class="inlog-form"   action= "welkom.php" method= "POST">
    <table>
      <tr>
        <td><label for="name">Naam:</label></td>
        <td><input type="text" name="user_name" id="name" placeholder="Naam"></td>
      </tr>
      
      <tr>
        <td><label for="password">Wachtwoord:</label></td>
        <td><input type="password" name="password" id="Password"></td>
    
      </tr>
      
        <td colspan="2"><input type="submit" class="submit" value="Inloggen" /></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
<?php include 'footer.php'?>