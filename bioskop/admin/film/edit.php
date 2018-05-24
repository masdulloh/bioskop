	<?php
      include '../connection.php';
      $kdfilm=$_GET['editfilm'];
      $sql=mysqli_query($koneksi,"SELECT * FROM film WHERE kdfilm='$kdfilm'");
    ?>

&nbsp;
<div class="container">
	<h3 class="text-center">EDIT FILM</h3>
  <form method="POST" enctype="multipart/form-data" action="film/edit_act.php">

  	<?php
	  while ( $baris= mysqli_fetch_assoc($sql)) {
	?>

  	<div class="form-group row">
      <input type="hidden" name="kdfilm1" value="<?php echo $baris['kdfilm'] ?>">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Film</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="kdfilm" value="<?php echo $baris['kdfilm'] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="judul" value="<?php echo $baris['judul'] ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Poster</label>
      <div class="col-sm-10">
        <input type="file" class="form-control-file" name="poster">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Trailer</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="trailer" value="<?php echo $baris['trailer'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Durasi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="durasi" value="<?php echo $baris['durasi'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="harga" value="<?php echo $baris['harga'] ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Sinopsis</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="sinopsis" rows="8"><?php echo $baris['sinopsis'] ?></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">EDIT FILM</button>
      </div>
    </div>

    <?php } ?>

  </form>
</div>