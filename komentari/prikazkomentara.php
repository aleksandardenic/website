<?php
$conn = mysqli_connect ("localhost", "root", "", "komentari");
$q = mysqli_query($conn, "select * from komentari");
while ($rw = mysqli_fetch_object($q)){
?>

<div>
          <h3><?php echo $rw->kname; ?></h3>
          <p><?php echo $rw->comment; ?></p>

</div>

<?php

}

?>