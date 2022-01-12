<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>   
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
  <form action="/action_page.php">
    <label for="fname">Naam</label>
    <input type="text" id="fname" name="firstname" placeholder="jouw naam..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="jouw achter naam..">

    <label for="country">Land</label>
    <select id="country" name="country">
      <option value="australia">Nederland</option>
      <option value="canada">België</option>
      <option value="usa">Duitsland</option>
    </select>

    <label for="subject">commentaar</label>
    <textarea id="subject" name="subject" placeholder="Typ hier je mening in.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
    </article>
<?php include 'footer.php'?>