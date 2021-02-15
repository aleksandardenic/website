<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
	
<div id="header">
<div id="logo">
	<img src="images/vest.png" alt=""style="width: 350px;">
	
</div>

<div>
<form method="post" action="registracija.php" id="forma1">
	<input type="submit" name="submit" value="Registrate">
</form>
<form method="post" action="login.php" id="forma1">
<input type="submit" name="submit" value="Login">
</form>
</div>
	
</div>
<div id="nav">
<ul>
	<li><a href="index.php">Pocetna</a></li>
	<li><a href="sport.php">Sport</a></li>
	
	<li><a href="kultura.php">Kultura</a></li>
	<li><a href="kontakt.php">Kontakt</a></li>
	
</ul>

	
</div>

<div id="main2" style="height: 800px;">

<form method="post" action="komentari/komentari.php" name="kontaktFrm" id="kontaktFrm">
  <p> 
  <label for="name">Your name:</label>
  <br>
  <input type="text" name="kname" id="name">
  </p>

  <p>
  <label for="Subject">Your password:</label>
  <br>
  <input type="text" name="passw" id="subject">
  </p>

  <p>
  <label for="message">Your message:</label>
  <br>
  <textarea name="comment" id="message"></textarea>
  </p>
 
  <p>
  <input type="submit" name="submit" id="submit" value="Send">
  <input type="reset" name="reset" id="reset" value="Reset">
  </p>
 
</form>

<?php
include "komentari/prikazkomentara.php";
?>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d90572.7375678345!2d20.356327069561377!3d44.8134548680129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1526576170768" width="530" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<div id="footer">
	<p>Copyright &copy; Beograd</p>
</div>
</div>

</body>
</html>

