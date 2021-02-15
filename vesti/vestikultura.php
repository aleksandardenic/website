<?php
$conn = mysqli_connect ("localhost", "root", "", "kultura");
$q = mysqli_query($conn, "select * from kultura");
while ($rw = mysqli_fetch_object($q)){
?>

<div class="levo">
          <h3><?php echo $rw->naslov; ?></h3>
          <img src="images/<?php echo $rw->slika; ?>" width="93" height="95" alt="photo 1" class="left" />
          <p><?php echo $rw->tekst; ?></p>

</div>

<?php

}

?>