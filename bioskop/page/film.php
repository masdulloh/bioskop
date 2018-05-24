<title>FILM</title>

    <?php
      include 'connection.php';
      $sql=mysqli_query($koneksi,"Select * from film");
    ?>

<div class="masthead-followup row m-0 hitam">
<?php
  while ( $baris= mysqli_fetch_assoc($sql)) {
?>


  <div class="col-12 col-md-3 p-3 p-md-5 hitam text-light">
    <center><img class="img-fluid mt-8 mx-auto border border-secondary rounded" src="poster/<?php echo $baris['poster'] ?>" alt="<?php echo $baris['judul'] ?>" width="200"></center>
    <hr class="rule">
    <h3 class="text-center"><?php echo $baris['judul'] ?></h3>
    <p class="text-center"><?php echo substr($baris['sinopsis'],0,100); ?>...</p>
    <center><a href="?detail=<?php echo $baris['kdfilm']; ?>" class="btn btn-outline-secondary">Lihat Selengkapnya</a></center>
    &nbsp;
    <a href="?beli=<?php echo $baris['kdfilm']; ?>" class="btn btn-outline-primary btn-lg btn-block">BELI TIKET</a>

  </div>


<?php } ?>

</div>
