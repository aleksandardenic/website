<form action="" method="POST">
<label>Korisnicko ime:<br/>
<input type="text" name="kname"></label><br/>
<label>Pasword:<br/>
<input type="text" name="passw"></label><br/>

<input type="submit" name="submit" value="Login">
<a href="index.php"> Pocetna </a>
</form>


<?php

$kname = $_POST['kname'];
$passw = $_POST['passw'];

$baza = new mysqli("localhost", "root", "", "korisnici");
$q = $baza->query("SELECT * FROM korisnici WHERE kname = '{$kname}' and passw = '{$passw}'");
if($user = $q->fetch_object()){
	echo "Dobrodosli" . " " .  $user->kname;
}


?>