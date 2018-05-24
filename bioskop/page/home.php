<title>HOME</title>

<main class="bd-masthead hitam text-light" id="content" role="main">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6 mx-auto col-md-6 order-md-2">
        <img src="assets/cinemin.jpg" alt="" class="img-fluid mb-3 mb-md-0">
      </div>
      <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
        <h1 class="mb-3">Cinemin</h1>
        <p class="lead">
          Musuh CINEMAX. Pokoknya paling populer di kalangan orang tua.
        </p>
        <p class="lead mb-4">
          Jangan lupa makan saurrr. Karena kalau tidak sahur pasti lapar. Karena saya juga lapar. Alias kencoet.
        </p>
        <p class="text-muted mb-0">
          Ciye ketipuuu.....
        </p>
      </div>
    </div>
  </div>
</main>
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
