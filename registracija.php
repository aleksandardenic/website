<form action="" method="POST">
<label>Korisnicko ime:<br/>
<input type="text" name="kname"></label><br/>
<label>Pasword:<br/>
<input type="text" name="passw"></label><br/>
<label>Email:<br/>
<input type="text" name="email"></label><br/>
<label>Ime:<br/>
<input type="text" name="ime"></label><br/>
<label>Prezime:<br/>
<input type="text" name="prezime"></label><br/>

<input type="submit" name="submit" value="Registrate">
<a href="login.php">Login</a>
</form>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['kname']) && isset($_POST['passw']) && isset($_POST['email']) && isset($_POST['ime'])&& isset($_POST['prezime'])){
		if(!empty($_POST['kname']) && !empty($_POST['passw']) && !empty($_POST['email']) && !empty($_POST['ime']) && !empty($_POST['prezime'])){
			$kname = trim($_POST['kname']);
			$passw = trim($_POST['passw']);
			$email   = trim($_POST['email']);
			$ime = trim($_POST['ime']);
			$prezime = trim($_POST['prezime']);
			
			require 'conect.php';
			$kname = mysqli_real_escape_string($conn, $kname);
			$passw = mysqli_real_escape_string($conn, $passw);
			$email   = mysqli_real_escape_string($conn, $email);
			$ime   = mysqli_real_escape_string($conn, $ime);
			$prezime   = mysqli_real_escape_string($conn, $prezime);
			
			
			
			$query = "INSERT INTO korisnici (kname, passw, email, ime, prezime) VALUES ('{$kname}','{$passw}','{$email}' ,'{$ime}','{$prezime}' )";
			if(mysqli_query($conn, $query) === TRUE){
				echo "Uspesna autentifikacija.";
			}else {
				echo "Greska!";
			}
		//}else{
		//	echo "All fields must be filled in.";
		//}
	}else{
		echo "Niste popunili sva polja!";
	}
}
}
?>