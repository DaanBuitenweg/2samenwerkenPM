<?php include 'header.php' ?> 
   <article>
        <p> als jullie contact willen opnemen met ons kunt u bellen of een mail sturen naar ons. </p>
        <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Formulier</h3>

<div class="container">
  <form action="" method="post">
    <label for="fname">Naam</label>
    <input type="text" id="fname" name="naam" placeholder="jouw naam..">

    <label for="lname">achternaam</label>
    <input type="text" id="lname" name="achternaam" placeholder="jouw achter naam..">

    <label for="land">Land</label>
    <select id="land" name="land">
      <option value="Nederland">Nederland</option>
      <option value="België">België</option>
      <option value="Duitsland">Duitsland</option>
    </select>

    <label for="commentaar">commentaar</label>
    <textarea id="commentaar" name="commentaar" placeholder="Typ hier je mening in.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<?php
if(isset($_POST["submit"]) ) {

$naam         = ($_POST['naam']);
$achternaam   = ($_POST['achternaam']);
$land         = ($_POST['land']);
$commentaar   = ($_POST["commentaar"]);

if (empty($naam)) {
    echo "<br>naam niet ingevuld";
} else {
     echo  "<br>naam: $naam";
}


if (empty($achternaam)) {
    echo "<br>achternaam niet ingevuld";
} else {
     echo  "<br>achternaam: $achternaam";
}


if (empty($land)) {
    echo "<br>land niet ingevuld";
} else {
     echo  "<br>land: $land";
}


if (empty($commentaar)) {
    echo "<br>commentaar niet ingevuld";
} else {
     echo  "<br>commentaar: $commentaar";
}
}


?>


</body>
</html>
<?php include 'footer.php'?>