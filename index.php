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
	<img src="images/vest.png" alt="" style="width: 350px;">
	
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
<div id="main" style="height: 1100px;">

<?php
include "vesti/vestikultura.php";
include "vesti/vestisport.php";

?>


</div>


<div id="footer">
	<p>Copyright &copy; Beograd</p>
</div>
</div>

</body>
</html>
