<?php
if(isset($_POST['submit'])){
	if(isset($_POST['kname']) && isset($_POST['passw']) && isset($_POST['comment'])){
		if(!empty($_POST['kname']) && !empty($_POST['passw']) && !empty($_POST['comment'])){
			$kname = trim($_POST['kname']);
			$passw = trim($_POST['passw']);
			$comment  = trim($_POST['comment']);
			require 'inc/connect.php';
			$kname = mysqli_real_escape_string($conn, $kname);
			$passw = mysqli_real_escape_string($conn, $passw);
			$comment   = mysqli_real_escape_string($conn, $comment);
			
			$query = "INSERT INTO komentari (kname, passw, comment) VALUES ('{$kname}','{$passw}','{$comment}')";
			if(mysqli_query($conn, $query) === TRUE){
				echo "Vas komentar je dodat.";
			}else {
				echo "Greska!";
			}
		}
	}else{
		echo "Nisu poslati svi parametri!";
	}
}
?>
</br>
<a href="kontakt.php">Kontakt</a>